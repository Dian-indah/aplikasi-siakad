<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaKelas extends Model
{
    public $timestamps = false;
    public $table = "siswa_kelas";
    protected $fillable = [
        'siswaId',
        'kelasSiswaId',
        'nts',
        'nas',   
    ];

    public function getAllSiswaKelas($id)
    {
        $a = SiswaKelas::query()
            ->leftJoin('siswa as s', 's.id', 'siswa_kelas.siswaId')          
            ->leftJoin('kelas_siswa as ks', 'ks.id', 'siswa_kelas.KelasSiswaId')          
            ->select('s.nipd as nipd','s.name as namaSiswa', 'ks.id')          
            ->where('ks.id',$id)
            ->get();
        // dd($a);
        return $a;
    }
}
