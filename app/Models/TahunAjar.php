<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjar extends Model
{
    public $timestamps = false;
    public $table = "tahunAjar";
    protected $fillable = [     
        'tahunAjar', 
        'semester',
    ];
}