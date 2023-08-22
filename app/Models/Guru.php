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
            'nama',
            'password',
            'nik',
            'noKk',
            'nuptk',
            'jenkel',
            'tempatLahir',
            'tanggalLahir',           
            'notelp',
            'email',            
            'agama',
            'alamat',
            'kewarganegaraan',   
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAllGuru()
    {       
        $g = Guru::query()
        ->select(
            'id'         ,
            'username',
            'nama',
            'password',
            'nik',
            'noKk',
            'nuptk',
            'jenkel',
            'tempatLahir',
            'tanggalLahir',           
            'notelp',
            'email',            
            'agama',
            'alamat',
            'kewarganegaraan',                 
        )
        ->get();
        return $g;
    }

    public function getDataSiswa($id)
    {
        $a = Guru::query()
            ->leftJoin('kelas_siswa as ks', 'ks.guruPengajar', 'guru.id')
            ->leftJoin('kelas as k', 'k.id', 'ks.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'ks.mapelId')
            ->select(
                'k.namaKelas as namaKelas',
                'm.namaMapel as namaMapel',
                'm.kodeMapel as kodeMapel',
                'guru.username as guruPengajar',
                'ks.id as kelasSiswaId'
                
            )
            ->where('guru.id', $id)
            ->get();
        // dd($a,
        return $a;
    }

    public function getKelasSiswa($id)
    {
        $a = Guru::query()
            ->leftJoin('kelas_mapel as km', 'km.guruPengajar', 'guru.id')
            ->leftJoin('siswa_kelas as sk', 'sk.kelasSiswaId', 'km.id')
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
            // ->leftJoin('kehadiran as kh', 'kh.siswaId', 's.id')
            ->select(
                's.nisn as nisn',
                's.name as namaSiswa',
                's.id as siswaId',
                'sk.nts as nts',
                'sk.nas as nas',
                'sk.id as siswaKelasId',
                'guru.username',
                'km.id',
                'sk.id as idSiswaKelas',              
                'km.id as idKelasSiswa'
            )
            ->where('km.id', $id)
            ->get();
        return $a;
    }
    

    // public function Kehadiran($id, $tgl)
    // {
    //     $a = Guru::query()
    //         ->leftJoin('kelas_siswa as ks', 'ks.guruPengajar', 'guru.id')
    //         ->leftJoin('siswa_kelas as sk', 'sk.kelasSiswaId', 'ks.id')
    //         ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
    //         ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')
    //         ->select(
    //             's.nipd as nipd',
    //             's.name as namaSiswa',
    //             'sk.nts as nts',
    //             'sk.nas as nas',
    //             'guru.username',
    //             'ks.id',
    //             'sk.id as idSiswaKelas',
    //             'kh.status as status',
    //             'kh.tglKehadiran as tglKehadiran'
    //         )
    //         ->where('ks.id', $id)
    //         ->where('kh.tglKehadiran', $tgl)
    //         ->get();
    //     return $a;
    // }
}
