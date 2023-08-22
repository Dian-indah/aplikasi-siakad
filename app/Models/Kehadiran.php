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
        'kelasMapelId',
        'status',
        'tglKehadiran',   
    ];

    public function getKehadiranByIdGuru($id)
    {
        $a = Guru::query()
            ->leftJoin('kelas_mapel as km', 'km.guruPengajar', 'guru.id')
            ->leftJoin('kelas as k', 'k.id', 'km.kelasId')
            ->leftJoin('mapel as m', 'm.id', 'km.mapelId')
            ->select(
                'k.namaKelas as namaKelas',
                'm.namaMapel as namaMapel',
                'm.kodeMapel as kodeMapel',
                'guru.username as guruPengajar',
                'km.id as kelasMapelId'
                
            )
            ->where('guru.id', $id)
            ->get();
        // dd($a,
        return $a;
    }    
    public function viewKehadiran($id)
    {
        $a = KelasMapel::query()
            ->join('guru as g', 'g.id', 'kelas_mapel.guruPengajar')
            ->join('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->join('siswa as s', 's.id', 'sk.siswaId')
            ->leftJoin('kehadiran as kh', 'kh.siswaKelasId', 'sk.id')
            ->select(
                's.nisn as nisn',
                's.name as namaSiswa',              
                'kh.status as status',
                'kh.tglKehadiran as tglKehadiran',
                'sk.id as siswaKelasId',
                'g.nama as guruPengajar',
                'k.namaKelas as namaKelas',            
                'kelas_mapel.id as kelasMapelId',
                'sk.id as siswaKelasId',
                'kh.id as kehadiranId'
            )
            ->where('kelas_mapel.id', $id)            
            ->get();
        // dd($a);
        return $a;      
    }
    
}
