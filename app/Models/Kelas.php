<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;
    public $table = "kelas";
    protected $fillable = [     
        'namaKelas',       
    ];

    public function tingkatKelas()
    {
        return $this->belongsTo(tingkatKelas::class);
    }
    public function tahunAjar()
    {
        return $this->belongsTo(tahunAjar::class);
    }

}
