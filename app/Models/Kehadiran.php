<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    public $timestamps = false;
    public $table = "kehadiran";
    protected $fillable = [
        'siswaId',
        'kelasSiswaId',
        'status',
        'tglKehadiran',   
    ];
}
