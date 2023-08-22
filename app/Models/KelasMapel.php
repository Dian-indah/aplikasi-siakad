<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelasMapel extends Model
{
    public $timestamps = false;
    public $table = "kelas_mapel";
    protected $fillable = [
        'kelasId',
        'mapelId',
        'guruPengajar',   
    ];

    public function getAllKelasMapel()
    {
        $a = KelasMapel::query()
            ->leftJoin('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'kelas_mapel.mapelId')
            ->leftJoin('guru as g', 'g.id', 'kelas_mapel.guruPengajar')           
            ->select('kelas_mapel.id','namaKelas', 'namaMapel', 'g.username as guruPengajar')
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
