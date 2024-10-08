<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mapel extends Model
{
    public $timestamps = false;
    public $table = "mapel";
    protected $fillable = [
        'kodeMapel',
        'namaMapel',
        'tingkatKelasId',
        'kurikulumId',
        'statusKurikulum',
        'kompetensiKeahlian',  
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function getMapel()
    {
        $q = DB::select("
        SELECT mapel.id id, mapel.kodeMapel kodeMapel, mapel.namaMapel namaMapel,
        mapel.statusKurikulum statusKurikulum, mapel.kompetensiKeahlian kompetensiKeahlian,
        tingkatKelas.tingkatKelas tingkatKelas, 
        kurikulum.namaKurikulum namaKurikulum FROM mapel
        JOIN tingkatKelas on tingkatKelas.id = mapel.tingkatKelasId
        join kurikulum on kurikulum.id = mapel.kurikulumId
        ORDER BY mapel.kodeMapel asc , kurikulum.namaKurikulum asc, tingkatKelas.tingkatKelas asc
        ");
        return $q;
    }

    public function getTingkatKelas()
    {
        $a = TingkatKelas::query()
        ->select('tingkatKelas','id')
        ->get();
        return $a;
    }

    public function getKurikulum()
    {
        $q = DB::select("
        SELECT * FROM kurikulum
        ");
        return $q;
    }

    public function tingkatKelas()
    {
        return $this->belongsTo(tingkatKelas::class);
    }

    public function kurikulum()
    {
        return $this->belongsTo(kurikulum::class);
    }
}
