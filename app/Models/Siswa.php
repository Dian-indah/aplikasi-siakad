<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Siswa extends Authenticatable
{
    public $timestamps = false;
    public $table = "siswa";
    protected $fillable = [
        'name',
        'username',
        'password',   
        'email'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
