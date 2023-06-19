<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $timestamps = false;
    public $table = "mapel";
    protected $fillable = [
        'kodeMapel',
        'namaMapel',
        'kelas',  
        'kurikulum',
        'statusKurikulum',
        'kompetensiKeahlian',
        'namaPtk',
    ];

    protected $hidden = [       
        'remember_token',
    ];
}
