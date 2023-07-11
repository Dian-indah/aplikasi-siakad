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
        'nipd',         
        'jenkel',         
        'tempatLahir',         
        'tanggalLahir',         
        'nik',         
        'noKk',         
        'noHp',         
        'agama',         
        'alamat',         
        'jenisTinggal',         
        'trasportasi',         
        'skhun',         
        'penerimaKpps',         
        'noKpps',         
        'namaAyah',         
        'tanggalLahirAyah',         
        'pendidikanAyah',         
        'pekerjaanAyah',         
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
}
