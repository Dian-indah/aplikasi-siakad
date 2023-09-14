<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aspirasi extends Model
{  
    public $timestamps = false;
    public $table = "aspirasi";
    protected $fillable = [
        'ortuId',
        'tglKirim',
        'keterangan',        
    ];
    public function getAllAspirasi()
    {
        $a = Aspirasi::query()
            ->join('ortu as o', 'o.id', 'aspirasi.ortuId')           
            ->select(                
                'o.id as ortuId',
                'o.name as namaOrtu',             
                'aspirasi.tglKirim as tglKirim',
                'aspirasi.keterangan as keterangan',
                'aspirasi.id as aspirasiId',           
            )          
            ->get();
        // dd($a);
        return $a;
    }

    public function getAllOrtu()
    {
        $a = DB::select("
        select * from ortu;
        ");
        return $a;
    }

    public function getAspirasiByOrtu($id)
    {
        $a = Aspirasi::query()
            ->join('ortu as o', 'o.id', 'aspirasi.ortuId')           
            ->select(                
                'o.id as ortuId',
                'o.name as namaOrtu',             
                'aspirasi.tglKirim as tglKirim',
                'aspirasi.keterangan as keterangan',
                'aspirasi.id as aspirasiId',           
            )          
            ->where('o.id',$id)
            ->get();  
        return $a;        
    }
}
