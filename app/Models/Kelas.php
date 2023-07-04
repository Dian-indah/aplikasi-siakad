<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas extends Model
{
    public $timestamps = false;
    public $table = "kelas";
    protected $fillable = [
        'namaKelas',
        'tahunAjarId',
        'tingkatKelasId',  
    ];

    public function getKelas()
    {
        $q = DB::select("
        SELECT kelas.id as id, kelas.namaKelas as namaKelas, tahunAjar.tahunAjar as tahunAjar,
        tahunAjar.semester as semester, tingkatKelas.tingkatKelas as tingkatKelas FROM kelas 
        JOIN tahunAjar on tahunAjar.id = kelas.tahunAjarId
        JOIN tingkatKelas on tingkatKelas.id = kelas.tingkatKelasId
        ORDER BY tahunAjar.tahunAjar asc , kelas.namaKelas asc
        ");
        return $q;
    }

    public function getAllTahunAjar()
    {
        $a = DB::select("
        select * from tahunAjar;
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

    public function tingkatKelas()
    {
        return $this->belongsTo(tingkatKelas::class);
    }
    public function tahunAjar()
    {
        return $this->belongsTo(tahunAjar::class);
    }
}
