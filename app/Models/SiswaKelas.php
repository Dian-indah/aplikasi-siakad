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
        'kelasId',
    ];

    public function kelas()
    {
      return $this->belongsTo(Kelas::class, 'kelasId','id');
    }

    public function getAllSiswaKelas($id)
    {
        $a = SiswaKelas::query()
            ->leftJoin('siswa as s', 's.id', 'siswa_kelas.siswaId')
            ->leftJoin('kelas as k', 'k.id', 'siswa_kelas.kelasId')
            ->select(
                's.nisn as nisn',
                's.name as namaSiswa',
                'k.id',
                'siswa_kelas.id as idSiswaKelas'
            )
            ->where('k.id', $id)
            ->get();
        // dd($a);
        return $a;
    }
}
