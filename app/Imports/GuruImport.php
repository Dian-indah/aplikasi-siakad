<?php

namespace App\Imports;

use App\Models\Guru;
use \Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class GuruImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'username' => $row[1],          
            'nik' => $row[2],          
            'noKk' => $row[3],
            'nuptk' => $row[4],
            'jenkel' => $row[5],
            'tempatLahir' => $row[6],
            'tanggalLahir' => $row[7],
            'nip' => $row[8],
            'notelp' => $row[9],
            'email' => $row[10],
            'statusKepegawaian' => $row[11],
            'skPengangkatan' => $row[12],
            'tmpPengangkatan' => $row[13],
            'lembagaPengangkatan' => $row[14],
            'sumberGaji' => $row[15],
            'jenisPtk' => $row[16],
            'npwp' => $row[17],
            'namaNpwp' => $row[18],
            'agama' => $row[19],
            'alamat' => $row[20],
            'kewarganegaraan' => $row[21],
            'ibuKandung' => $row[22],
            'statusPerkawinan' => $row[23],
            'namaPasangan' => $row[24],
            'nipPasangan' => $row[25],
            'pekerjaanPasangan' => $row[26],
            'lisensiKepsek' => $row[27],
            'diklatKepegawaian' => $row[28],
            'keahlianBraile' => $row[29],
            'keahlianBahasaIsyarat' => $row[30],
            'bank' => $row[31],
            'norek' => $row[32],
            'namaRek' => $row[33],
        ]);
    }
}
