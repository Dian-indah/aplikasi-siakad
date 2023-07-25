<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelasSiswa extends Model
{
    public $timestamps = false;
    public $table = "kelas_siswa";
    protected $fillable = [
        'kelasId',
        'mapelId',
        'guruPengajar',   
    ];

    public function getAllKelasSiswa()
    {
        $a = KelasSiswa::query()
            ->leftJoin('kelas as k', 'k.id', 'kelas_siswa.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'kelas_siswa.mapelId')
            ->leftJoin('guru as g', 'g.id', 'kelas_siswa.guruPengajar')
            ->leftJoin('guru as w', 'w.id', 'k.guruId')
            ->select('kelas_siswa.id','jumlahSiswa','namaKelas', 'namaMapel', 'g.username as guruPengajar', 'w.username as waliKelas')
            ->get();
        // dd($a);
        return $a;
    }
    public function getAllKelas()
    {
        $a = DB::select("
        select * from kelas;
        ");
        return $a;
    }

    public function getAllMapel()
    {
        $a = DB::select("
        select * from mapel;
        ");
        return $a;
    }

    public function getAllGuru()
    {
        $a = DB::select("
        select * from guru;
        ");
        return $a;
    }
    public function getAllTingkatKelas()
    {
        $a = DB::select("
        select * from tingkatKelas;
        ");
        return $a;
    }
}
