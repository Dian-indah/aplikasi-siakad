<?php

namespace App\Exports;

use App\Models\KelasMapel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class RekapNilaiSiswa implements FromCollection, WithHeadings
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }   

    public function collection()
    {        
        $data = DB::select('
        SELECT s.nisn, s.name namaSiswa, n.nts, n.nas,
            coalesce(kh.jmlHadir,0) jmlHadir, coalesce(kh.jmlTdkHadir,0) jmlTdkHadir
            from kelas_mapel km
            LEFT JOIN kelas k ON k.id = km.kelasId
            LEFT JOIN siswa_kelas sk ON sk.kelasId = k.id
            LEFT JOIN siswa s ON s.id = sk.siswaId
            LEFT JOIN nilai n ON n.siswaKelasId = sk.id
            LEFT JOIN (
                SELECT siswaKelasId, 
                SUM(case when STATUS = "Hadir" then 1 ELSE 0 END) jmlHadir,
                SUM(case when STATUS = "Tidak Hadir" then 1 ELSE 0 END) jmlTdkHadir
                FROM kehadiran k
                GROUP BY siswaKelasId
            ) kh ON sk.id = kh.siswaKelasId
            WHERE km.id = :id
        ', ['id' => $this->id]);

       return collect($data);
    }    

    public function headings(): array
    {
        return [            
            "NISN",
            "Nama Siswa",
            "NTS",
            "NAS",
            "Hadir",
            "Tidak Hadir",                      
        ];
    }
}
