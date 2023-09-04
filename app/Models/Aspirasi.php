<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{  
    public $timestamps = false;
    public $table = "aspirasi";
    protected $fillable = [
        'ortuId',
        'keterangan',        
    ];
    public function getAllAspirasi()
    {
        $a = Aspirasi::query()
            ->join('ortu as o', 'o.id', 'aspirasi.ortuId')           
            ->select(                
                'ortu.id as ortuId',
                'aspirasi.keterangan as keterangan ',
            )          
            ->get();
        dd($a);
        return $a;
    }
}
