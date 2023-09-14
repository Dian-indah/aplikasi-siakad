<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kepsek extends Authenticatable
{
    public $timestamps = false;
    public $table = "kepsek";
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'nama',
        'password',
        'nik',
        'noKk',
        'nuptk',
        'jenkel',
        'tempatLahir',
        'tanggalLahir',
        'notelp',
        'email',
        'agama',
        'alamat',
        'kewarganegaraan',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getKelasMapel()
    {
        $a = KelasMapel::query()               
            ->leftJoin('kelas as k', 'k.id', 'kelas_mapel.kelasId')                             
            ->leftJoin('mapel as m', 'm.id', 'kelas_mapel.mapelId')         
            ->leftJoin('guru as g', 'g.id', 'kelas_mapel.guruPengajar')         
            ->select(
                'k.namaKelas as namaKelas',                
                'kelas_mapel.id as kelasMapelId',                
                'm.namaMapel as namaMapel',                                                                        
                'g.nama as guruPengajar',                                            
            )          
            ->get();
            // dd($a);
        return $a;
    }
}
