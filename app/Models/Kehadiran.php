<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Kehadiran extends Model
{
    public $timestamps = false;
    public $table = "kehadiran";
    protected $fillable = [
        'siswaId',
        'kelasMapelId',
        'status',
        'tglKehadiran',
    ];

    public function getKehadiranByIdGuru($id)
    {
        $a = Guru::query()
            ->leftJoin('kelas_mapel as km', 'km.guruPengajar', 'guru.id')
            ->leftJoin('kelas as k', 'k.id', 'km.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'km.mapelId')
            ->select(
                'k.namaKelas as namaKelas',
                'm.namaMapel as namaMapel',
                'm.kodeMapel as kodeMapel',
                'guru.username as guruPengajar',
                'km.id as kelasMapelId',
                'k.id as kelasId',
            )
            ->where('guru.id', $id)
            ->get();
        // dd($a);
        return $a;
    }
    public function statusKehadiran($id)
    {
        $a = Guru::query()
            ->leftJoin('kelas_mapel as km', 'km.guruPengajar', 'guru.id')
            ->leftJoin('kelas as k', 'k.id', 'km.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'km.mapelId')
            ->leftJoin('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
            ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')
            ->select(
                'k.namaKelas as kelas',
                'm.namaMapel as mapel',
                'guru.username as guru',
                'kh.status as status',
            )
            ->where('guru.id', $id)
            ->whereNotNull('status') //ketika status tidak kosong / terisi                                       
            ->get();
        // dd($a);
        return $a;
    }
    public function viewKehadiran($id)
    {
        $a = KelasMapel::query()
            ->join('guru as g', 'g.id', 'kelas_mapel.guruPengajar')
            ->join('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->join('siswa as s', 's.id', 'sk.siswaId')
            ->join('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')
            ->select(
                's.nisn as nisn',
                's.name as namaSiswa',
                'kh.status as status',
                'kh.tglKehadiran as tglKehadiran',
                'sk.id as siswaKelasId',
                'g.nama as guruPengajar',
                'k.namaKelas as namaKelas',
                'kelas_mapel.id as kelasMapelId',
                'sk.id as siswaKelasId',
                'kh.id as kehadiranId'
            )
            ->where('kelas_mapel.id', $id)
            ->get();
        // dd($a);
        return $a;
    }

    public function jumlahKehadiran($idkm, $tgl, $idkl,$ids)
    {
        $a = "
        SELECT COUNT k.status as status, k.tglKehadiran
        FROM siswa_kelas sk
        LEFT JOIN (
            SELECT k.* FROM kehadiran k
            LEFT JOIN kelas_mapel km ON k.kelasMapelId = km.id 
            WHERE tglKehadiran = '$tgl'
            AND k.kelasMapelId = '$idkm'
        ) as k ON k.siswaKelasId = sk.id
        LEFT JOIN siswa s ON s.id = sk.siswaId
        WHERE sk.kelasId = '$idkl'
        WHERE s.id = '$ids'
        ";

        $query = DB::select($a);
        dd($query);
        return $query;
    }

    public function viewKehadiranLama($idkm, $tgl, $idkl)
    {
        $a = "
        SELECT sk.*, s.name namaSiswa,s.nisn nisn, sk.id as siswaKelasId, 
        k.tglKehadiran, k.status status, k.id kehadiranId, k.kelasMapelId kelasMapelId
        FROM siswa_kelas sk
        LEFT JOIN (
            SELECT k.* FROM kehadiran k
            LEFT JOIN kelas_mapel km ON k.kelasMapelId = km.id 
            WHERE tglKehadiran = '$tgl'
            AND k.kelasMapelId = '$idkm'
        ) as k ON k.siswaKelasId = sk.id
        LEFT JOIN siswa s ON s.id = sk.siswaId
        WHERE sk.kelasId = '$idkl'
        ";

        $query = DB::select($a);
        return $query;
    }  
    

    public function lihatKehadiran($id)
    {
        $a = KelasMapel::query()
            ->join('guru as g', 'g.id', 'kelas_mapel.guruPengajar')
            ->join('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->join('siswa as s', 's.id', 'sk.siswaId')
            ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')
            ->select(
                's.nisn as nisn',
                's.name as namaSiswa',
                'kh.status as status',
                'kh.tglKehadiran as tglKehadiran',
                'sk.id as siswaKelasId',
                'g.nama as guruPengajar',
                'k.namaKelas as namaKelas',
                'kelas_mapel.id as kelasMapelId',
                'sk.id as siswaKelasId',
                'kh.id as kehadiranId'
            )
            ->where('kelas_mapel.id', $id)
            // ->whereNull('kh.tglKehadiran')
            ->get();
        // dd($a);
        return $a;
    }
    public function viewKehadiranBySisor($id)
    {
        $a = Kehadiran::query()
            ->join('siswa_kelas as sk', 'sk.id', 'kehadiran.siswaKelasId')
            ->join('siswa as s', 's.id', 'sk.siswaId')
            ->join('kelas_mapel as km', 'km.id', 'kehadiran.kelasMapelId')
            ->join('kelas as k', 'k.id', 'km.kelasId')
            ->join('mapel as m', 'm.id', 'km.mapelId')
            ->join('guru as g', 'g.id', 'km.guruPengajar')
            ->select(
                'm.namaMapel as namaMapel',
                'm.kodeMapel as kodeMapel',
                'k.namaKelas as namaKelas',
                'kehadiran.status as status',
                'kehadiran.tglKehadiran as tglKehadiran',
                'g.nama as guruPengajar',
                'km.id as kelasMapelId',
                'kehadiran.id as kehadiranId'
            )
            ->where('s.id', $id)
            ->get();
        // dd($a);
        return $a;
    }

    public function tampilKehadiran($id)
    {
        $a = Kehadiran::query()
            ->leftJoin('siswa_kelas as sk', 'sk.id', 'kehadiran.siswaKelasId')
            ->leftJoin('kelas_mapel as km', 'km.id', 'kehadiran.kelasMapelId')
            ->join('mapel as m', 'm.id', 'km.mapelId')
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
            ->select(
                'status as status',
                'tglKehadiran as tglKehadiran',
                'm.namaMapel as namaMapel',
                's.id as siswaId',
                's.name as namaSiswa',
            )
            ->where('s.id', $id)
            ->where('status', 'Hadir')
            ->count('tglKehadiran');
        // ->get();
        // dd($a);
        return $a;
    }

    // public function jumlahKehadiran($id)
    // {
    //     SELECT COUNT(*) total FROM  (
    //         SELECT COUNT(*) AS total FROM kehadiran 
    //         WHERE kelasMapelId = 3
    //         GROUP BY tglKehadiran
    //     ) AS a                
    // }

    // public function persenKehadiran($kmId)
    // {
    //     SELECT X.*, x.jmlHadir/x.totalPertemuan*100 AS persentase FROM (	
    //         SELECT s.nisn, s.name namaSiswa, n.nts, n.nas, sk.id siswaKelasId, k.namaKelas, km.id kelasMapelId,
    //         coalesce(kh.jmlHadir,0) jmlHadir, (
    //             SELECT COUNT(*) total FROM  (
    //                 SELECT COUNT(*) AS total FROM kehadiran 
    //                 WHERE kelasMapelId = km.id
    //                 GROUP BY tglKehadiran
    //             ) AS a
    //         ) totalPertemuan
    //         from kelas_mapel km
    //         LEFT JOIN kelas k ON k.id = km.kelasId
    //         LEFT JOIN siswa_kelas sk ON sk.kelasId = k.id
    //         LEFT JOIN siswa s ON s.id = sk.siswaId
    //         LEFT JOIN nilai n ON n.siswaKelasId = sk.id
    //         LEFT JOIN (
    //             SELECT siswaKelasId, count(siswaKelasId) jmlHadir FROM kehadiran k
    //             WHERE STATUS = 'Hadir'
    //             GROUP BY siswaKelasId
    //         ) kh ON sk.id = kh.siswaKelasId
    //         WHERE km.id = 3
    //     )x
    // }
}
