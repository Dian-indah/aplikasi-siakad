<?php

namespace App\Imports;

use App\Models\Guru;
use \Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuruImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Guru([
            'username' => $row['username'],          
            'nik' => $row['nik'],          
            'noKk' => $row['nomor_kk'],
            'nuptk' => $row['nuptk'],
            'jenkel' => $row['jenis_kelamin'],
            'tempatLahir' => $row['tempat_lahir'],
            'tanggalLahir' => $row['tanggal_lahir'],
            'nip' => $row['nip'],
            'notelp' => $row['no_telepon'],
            'email' => $row['email'],
            'statusKepegawaian' => $row['status_kepegawaian'],
            'skPengangkatan' => $row['sk_pengangkatan'],
            'tmpPengangkatan' => $row['tmp_pengangkatan'],
            'lembagaPengangkatan' => $row['lembaga_pengangkatan'],
            'sumberGaji' => $row['sumber_gaji'],
            'jenisPtk' => $row['jenis_ptk'],
            'npwp' => $row['npwp'],
            'namaNpwp' => $row['nama_npwp'],
            'agama' => $row['agama'],
            'alamat' => $row['alamat'],
            'kewarganegaraan' => $row['kewarganegaraan'],
            'ibuKandung' => $row['ibu_kandung'],
            'statusPerkawinan' => $row['status_perkawinan'],
            'namaPasangan' => $row['nama_pasangan'],
            'nipPasangan' => $row['nip_pasangan'],
            'pekerjaanPasangan' => $row['pekerjaan_pasangan'],
            'lisensiKepsek' => $row['lisensi_kepala_sekolah'],
            'diklatKepegawaian' => $row['diklat_kepegawaian'],
            'keahlianBraile' => $row['keahlian_braile'],
            'keahlianBahasaIsyarat' => $row['keahlian_bahasa_isyarat'],
            'bank' => $row['bank'],
            'norek' => $row['no_rekening'],
            'namaRek' => $row['nama_rekening'],
        ]);
    }
}
