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
        'guruId',  
    ]; 

    public function getKelas()
    {
        $a = Kelas::query()
            ->join('guru as g', 'g.id', 'kelas.guruId')
            ->join('tingkatKelas as tk', 'tk.id', 'kelas.tingkatKelasId')
            ->join('tahunajar as ta', 'ta.id', 'kelas.tahunAjarId')                     
            ->select('kelas.namaKelas as namaKelas',
            'g.nama as waliKelas',
            'tk.tingkatKelas as tingkatKelas',
            'ta.tahunAjar as tahunAjar',
            'ta.semester as semester',
            'kelas.id as id')
            ->orderBy('ta.tahunAjar', 'DESC')  
            ->orderBy('kelas.namaKelas', 'ASC')  
            ->get();
        // dd($a);
        return $a;

    }

    public function getAllTahunAjar()
    {     
        $a = TahunAjar::query()
        ->select('tahunAjar', 'semester','id')
        ->get();
        // dd($a);
        return $a;       
    }

    public function getAllTingkatKelas()
    {        
        $a = TingkatKelas::query()
        ->select('tingkatKelas','id')
        ->get();
        return $a;
    }

    public function getAllGuru()
    {
        $a = Guru::query()
        ->select('username', 'nama','id')
        ->get();
        // dd($a);
        return $a;       
    }   
}
