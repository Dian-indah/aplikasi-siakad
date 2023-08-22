<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjar extends Model
{
    public $timestamps = false;
    public $table = "tahunajar";
    protected $fillable = [     
        'tahunAjar', 
        'semester',
    ];

    public function getTahunAjar()
    {
        $a = TahunAjar::query()            
            ->select('tahunajar.tahunAjar as tahunAjar','tahunajar.semester as semester','id')
            ->orderBy('tahunajar.tahunAjar', 'DESC')
            ->orderBy('tahunajar.semester', 'ASC')
            ->get();
        // dd($a);
        return $a;
    }
}