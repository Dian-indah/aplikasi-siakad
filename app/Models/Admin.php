<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class Admin extends Authenticatable
{
    public $timestamps = false;
    public $table = "admin";
    protected $fillable = [
        'name',
        'username',
        'password',
        'email',
        'notelp',
        'jenkel',
        'tempatLahir',
        'tglLahir',
        'alamat',
        'statusKepegawaian',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getSiswaKelas()
    {
        $a = SiswaKelas::query()                    
            ->join('kelas as k', 'k.id', 'siswa_kelas.kelasId')            
            ->select('k.namaKelas', 'siswa_kelas.kelasId')
            ->get();
        // dd($a);
        return $a;
    }

    public function getSiswa()
    {
        $q = DB::select("
        SELECT * from siswa
        ");
        return $q;
    }

    public function getAllPegawai()
    {
        $q = DB::select("
        SELECT * from admin
        ");
        return $q;
    }
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isSuperAdmin()
    {
        return $this->role === 'superadmin';
    }
}
