<?php

namespace App\Exports;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class GuruExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function collection()
    {
        $type = DB::table('guru')->select(
            'username',
            'nama',           
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
        )
            ->get();
        return $type;
    }

    public function headings(): array
    {
        return [            
            "Username",
            "Nama",
            "NIK",
            "Nomor KK",
            "NUPTK",
            "Jenis Kelamin",
            "Tempat Lahir",
            "Tanggal Lahir",         
            "No Telepon",
            "Email",           
            "Agama",
            "Alamat",
            "Kewarganegaraan",            
        ];
    }

    // private $guru;
    // public function __construct()
    // {
    //     $this->guru = Guru::all();
    // }
    // public function view() : View 
    // {
    //     return view('guru.indexGuruAdmin',[
    //         'guru' => $this->guru
    //     ]);
    // }
    // public function collection()
    // {
    //     return Guru::all();
    // }
}
