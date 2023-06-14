<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
    public $table = "admin";
    protected $fillable = [
        'name',
        'username',
        'password',   
        'id_role'
    ];

}
