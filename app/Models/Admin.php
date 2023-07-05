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
        'email' 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getGuru()
    {
        $q = DB::select("
        SELECT * from guru
        ");
        return $q;
    }
}
