<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    public $timestamps = false;
    public $table = "kurikulum";
    protected $fillable = [     
        'namaKurikulum',       
    ];

    public function mapel()
    {
        return $this->hasMany(mapel::class);
    }

    public function getKurikulum()
    {
        $a = Kurikulum::query()            
            ->select('kurikulum.namaKurikulum as namaKurikulum')
            ->orderBy('kurikulum.namaKurikulum', 'DESC')           
            ->get();
        // dd($a);
        return $a;
    }
}
