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
            'id',
            'username',
            'nik',
            'noKk',
            'nuptk',
            'jenkel',
            'tempatLahir',
            'tanggalLahir',
            'nip',
            'notelp',
            'email',
            'statusKepegawaian',
            'skPengangkatan',
            'tmpPengangkatan',
            'lembagaPengangkatan',
            'sumberGaji',
            'jenisPtk',
            'npwp',
            'namaNpwp',
            'agama',
            'alamat',
            'kewarganegaraan',
            'ibuKandung',
            'statusPerkawinan',
            'namaPasangan',
            'nipPasangan',
            'pekerjaanPasangan',
            'lisensiKepsek',
            'diklatKepegawaian',
            'keahlianBraile',
            'keahlianBahasaIsyarat',
            'bank',
            'norek',
            'namaRek'
        )
            ->get();
        return $type;
    }

    public function headings(): array
    {
        return [
            "id",
            "Username",
            "NIK",
            "Nomor KK",
            "NUPTK",
            "Jenis Kelamin",
            "Tempat Lahir",
            "Tanggal Lahir",
            "NIP",
            "No Telepon",
            "Email",
            "Status Kepegawaian",
            "SK Pengangkatan",
            "TMP Pengangkatan",
            "Lembaga Pengangkatan",
            "Sumber Gaji",
            "Jenis PTK",
            "NPWP",
            "Nama NPWP",
            "Agama",
            "Alamat",
            "Kewarganegaraan",
            "Ibu Kandung",
            "Status Perkawinan",
            "Nama Pasangan",
            "NIP Pasangan",
            "Pekerjaan Pasangan",
            "Lisensi Kepala Sekolah",
            "Diklat Kepegawaian",
            "Keahlian Braile",
            "Keahlian Bahasa Isyarat",
            "Bank",
            "No Rekening",
            "Nama Rekening"
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
