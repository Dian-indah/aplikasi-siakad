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
}
