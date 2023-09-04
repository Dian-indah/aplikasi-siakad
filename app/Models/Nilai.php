<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $table = "nilai";
    protected $fillable = [
        'siswaKelasId',
        'kelasMapelId',
        'nts',
        'nas',
    ];

    public function getDataSiswa($id)
    {
        $a = Nilai::query()
            ->leftJoin('siswa_kelas as sk', 'sk.id', 'nilai.siswaKelasId')
            ->leftJoin('kelas_mapel as km', 'km.id', 'nilai.kelasMapelId')
            ->leftJoin('mapel as m', 'm.id', 'km.mapelId')
            ->leftJoin('guru as g', 'g.id', 'km.guruPengajar')
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
            ->select(
                's.name as namaSiswa',
                'm.kodeMapel as kodeMapel',
                'm.namaMapel as nama Mapel',
                'nilai.nts as nts',
                'nilai.nas as nas',
                'km.id as kelasMapelId',
                's.id as siswaId'
            )
            ->where('g.id', $id)
            ->get();
        // dd($a);
        return $a;
    }

    public function getSiswaKelas($id)
    {
        $a = KelasMapel::query()
            ->join('guru as g', 'g.id', 'kelas_mapel.guruPengajar')
            ->join('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->join('siswa as s', 's.id', 'sk.siswaId')
            ->leftJoin('nilai as n', 'n.siswaKelasId', 'sk.id')           
            ->select(
                's.nisn as nisn',
                's.name as namaSiswa',              
                'n.nts as nts',
                'n.nas as nas',
                'sk.id as siswaKelasId',
                'g.nama as guruPengajar',
                'k.namaKelas as namaKelas',            
                'kelas_mapel.id as kelasMapelId',
                'n.id as nilaiId',              
            )
            ->where('kelas_mapel.id', $id)           
            ->get();
        // dd($a);
        return $a;
    }

    public function getNilaiByIdGuru($id)
    {
        $a = Guru::query()
            ->join('kelas_mapel as ks', 'ks.guruPengajar', 'guru.id')
            ->leftJoin('kelas as k', 'k.id', 'ks.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'ks.mapelId')
            ->select(
                'k.namaKelas as namaKelas',
                'm.namaMapel as namaMapel',
                'm.kodeMapel as kodeMapel',
                'guru.username as guruPengajar',
                'ks.id as kelasMapelId'
            )
            ->where('guru.id', $id)
            ->get();
        // dd($a);
        return $a;
    }

    public function getNilaiBySiswa($id)
    {
        $a = KelasMapel::query()                                    
            ->leftJoin('guru as g', 'g.id', 'kelas_mapel.guruPengajar')      
            ->leftJoin('mapel as m', 'm.id', 'kelas_mapel.mapelId')      
            ->join('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')    
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId') 
            ->leftJoin('nilai as n', 'n.siswaKelasId', 'sk.id')
            ->select(
                'm.namaMapel as namaMapel',
                'g.username as namaGuru',
                'n.nts as nts',
                'n.nas as nas',       
                's.id as siswaId'
            )
            ->where('s.id', $id)
            ->get();
        return $a;        
    }
    public function getNilaiByOrtu($id)
    {
        $a = KelasMapel::query()
            ->leftJoin('guru as g', 'g.id', 'kelas_mapel.guruPengajar')
            ->leftJoin('mapel as m', 'm.id', 'kelas_mapel.mapelId')
            ->leftJoin('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
            ->leftJoin('ortu as o', 'o.siswaId', 's.id')
            ->leftJoin('nilai as n', 'n.siswaKelasId', 'sk.id')
            ->select(
                'm.namaMapel as namaMapel',
                'g.username as namaGuru',
                'n.nts as nts',
                'n.nas as nas',
                's.id as siswaId',                
            )
            ->where('o.id', $id)
            ->get();
        return $a;
    }
}
