<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ortu extends Authenticatable
{
    public $timestamps = false;
    public $table = "ortu";
    protected $fillable = [
        'name',
        'username',
        'password',
        'siswaId',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function getAllOrtu()
    {
        $a = Ortu::query()           
            ->leftJoin('siswa as s', 's.id', 'ortu.siswaId')
            ->select(
                's.name as namaSiswa',
                'ortu.name as namaOrtu',
                'ortu.username as username',
                'ortu.password as password',
                'ortu.id as id'
            )
            ->get();          
        return $a;
    }
}
