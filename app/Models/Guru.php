<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    public $timestamps = false;
    public $table = "guru";
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'nik',
        'noKk',
        'nuptk',
        'jenkel',
        'tempatLahir',
        'tanggalLahir',
        'nip',
        'notelp',
        'email',
        'statusKepegawaian',
        'skPengangkatan',
        'tmpPengangkatan',
        'lembagaPengangkatan',
        'sumberGaji',
        'jenisPtk',
        'npwp',
        'namaNpwp',
        'agama',
        'alamat',
        'kewarganegaraan',
        'ibuKandung',
        'statusPerkawinan',
        'namaPasangan',
        'nipPasangan',
        'pekerjaanPasangan',
        'lisensiKepsek',
        'diklatKepegawaian',
        'keahlianBraile',
        'keahlianBahasaIsyarat',
        'bank',
        'norek',
        'namaRek',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAllGuru()
    {
        $q = DB::select("
        SELECT * from guru
        ");
        return $q;
    }

    public function getDataSiswa($id)
    {
        $a = Guru::query()
            ->leftJoin('kelas_siswa as ks', 'ks.guruPengajar', 'guru.id')
            ->leftJoin('kelas as k', 'k.id', 'ks.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'ks.mapelId')
            ->select('k.namaKelas as namaKelas', 'm.namaMapel as namaMapel',
             'm.kodeMapel as kodeMapel', 'guru.username as guruPengajar','ks.id as kelasSiswaId')
            ->where('guru.id', $id)
            ->get();
        // dd($a);
        return $a;
    }

    public function getKelasSiswa($id)
    {
        $a = Guru::query()
        ->leftJoin('kelas_siswa as ks', 'ks.guruPengajar', 'guru.id')              
            ->leftJoin('siswa_kelas as sk', 'sk.kelasSiswaId', 'ks.id')        
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')        
            ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')        
            ->select('s.nipd as nipd','s.name as namaSiswa','sk.nts as nts', 'sk.nas as nas',
            'guru.username','ks.id','sk.id as idSiswaKelas','sk.kehadiran as kehadiran',
            'sk.tglKehadiran as tglKehadiran')
            ->where('ks.id',$id)
            ->get(); 
    return $a;
    }  
    
    public function viewKehadiran($id,$tgl)
    {
        $a = Guru::query()
        ->leftJoin('kelas_siswa as ks', 'ks.guruPengajar', 'guru.id')              
            ->leftJoin('siswa_kelas as sk', 'sk.kelasSiswaId', 'ks.id')        
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')        
            ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')        
            ->select('s.nipd as nipd','s.name as namaSiswa','sk.nts as nts', 'sk.nas as nas',
            'guru.username','ks.id','sk.id as idSiswaKelas','sk.kehadiran as kehadiran','sk.tglKehadiran as tglKehadiran')
            ->where('ks.id',$id)
            ->where('sk.tglKehadiran',$tgl)         
            ->get(); 
    return $a;
    }
      
    public function Kehadiran($id,$tgl)
    {
        $a = Guru::query()
        ->leftJoin('kelas_siswa as ks', 'ks.guruPengajar', 'guru.id')              
            ->leftJoin('siswa_kelas as sk', 'sk.kelasSiswaId', 'ks.id')        
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')        
            ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')        
            ->select('s.nipd as nipd','s.name as namaSiswa','sk.nts as nts', 'sk.nas as nas',
            'guru.username','ks.id','sk.id as idSiswaKelas','kh.status as status','kh.tglKehadiran as tglKehadiran')
            ->where('ks.id',$id)
            ->where('kh.tglKehadiran',$tgl)         
            ->get(); 
    return $a;
    }
}
