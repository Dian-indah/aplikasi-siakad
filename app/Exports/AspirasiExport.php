<?php

namespace App\Exports;

use App\Models\Aspirasi;
// use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class AspirasiExport implements FromCollection, WithHeadings
{
    protected $id;

    public function __construct()
    {
        
    }

    public function collection()
    {
        $data = DB::select('
        SELECT a.tglKirim as tglKirim, a.keterangan as keterangan,
        o.name as namaOrtu       
            from aspirasi a
            LEFT JOIN ortu o ON o.id = a.ortuId
           
        ');

        return collect($data);
    }

    public function headings(): array
    {
        return [
            "Tanggal Kirim",
            "Pesan",
            "Nama Ortu",           
        ];
    }
}
