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
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
