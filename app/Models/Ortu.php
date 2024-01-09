<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ortu extends Authenticatable
{
    public $timestamps = false;
    public $table = "ortu";
    protected $fillable = [
        'name',
        'username',
        'password',
        'siswaId',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function getAllOrtu()
    {
        $a = Ortu::query()
            ->leftJoin('siswa as s', 's.id', 'ortu.siswaId')
            ->select(
                's.name as namaSiswa',
                'ortu.name as namaOrtu',
                'ortu.username as username',
                'ortu.password as password',
                'ortu.id as id'
            )
            ->get();
        return $a;
    }
    
    public function getNilaiByOrtu($id)
    {
        $a = KelasMapel::query()
            ->leftJoin('guru as g', 'g.id', 'kelas_mapel.guruPengajar')
            ->leftJoin('mapel as m', 'm.id', 'kelas_mapel.mapelId')
            ->leftJoin('kelas as k', 'k.id', 'kelas_mapel.kelasId')
            ->join('siswa_kelas as sk', 'sk.kelasId', 'k.id')
            ->leftJoin('siswa as s', 's.id', 'sk.siswaId')
            ->leftJoin('ortu as o', 'o.siswaId', 's.id')
            ->leftJoin('nilai as n', 'n.siswaKelasId', 'sk.id')
            ->select(
                'm.namaMapel as namaMapel',
                'g.username as namaGuru',
                'n.nts as nts',
                'n.nas as nas',
                'k.namakelas as kelas',
                's.id as siswaId',                
            )
            ->where('o.id', $id)
            ->orderBy('k.namaKelas', 'ASC')
            ->get();
        return $a;
    }
}
