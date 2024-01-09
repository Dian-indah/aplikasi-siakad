<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Siswa extends Authenticatable
{
    public $timestamps = false;
    public $table = "siswa";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'nisn',      
        'jenkel',
        'tempatLahir',
        'tanggalLahir',
        'nik',
        'noKk',
        'noHp',
        'agama',
        'alamat',
        'jenisTinggal',
        'transportasi',       
        'namaAyah',
        'tanggalLahirAyah',
        'pendidikanAyah',
        'pekerjaanAyah',
        'penghasilanAyah',
        'nikAyah',
        'namaIbu',
        'tanggalLahirIbu',
        'pendidikanIbu',
        'pekerjaanIbu',
        'penghasilanIbu',
        'nikIbu',       
        'sekolahAsal',
        'anak',
        'jmlSaudara',       
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAllSiswa()
    {
        $q = DB::select("
        SELECT * from siswa
        ");
        return $q;
    }
    public function getAllTingkatKelas()
    {
        $q = DB::select("
        SELECT * from tingkatKelas
        ");
        return $q;
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
                'k.namakelas as kelas',    
                's.id as siswaId'
            )
            ->where('s.id', $id)
            ->orderBy('k.namaKelas', 'ASC')
            ->get();
        return $a;        
    }
}
