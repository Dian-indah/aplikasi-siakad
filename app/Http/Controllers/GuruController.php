<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Guru();
    }

    public function index()
    {
        $data = $this->model->getAllGuru();
        return view('Guru.indexGuruAdmin', compact('data'));
    }

    public function editGuru($id)
    {
        $guru = Guru::find($id);
        return view('Guru.editGuru', compact('guru'));
    }

    public function showGuruById($id)
    {
        $guru = Guru::find($id);
        $response['success'] = true;
        $response['data'] = $guru;
        return response()->json($response);
    }

    public function simpanGuru(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nik' => 'required',
            'noKk' => 'required',
            'nuptk' => 'required',
            'jenkel' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'nip' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'statusKepegawaian' => 'required',
            'skPengangkatan' => 'required',
            'tmpPengangkatan' => 'required',
            'lembagaPengangkatan' => 'required',
            'sumberGaji' => 'required',
            'jenisPtk' => 'required',
            'npwp' => 'required',
            'namaNpwp' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kewarganegaraan' => 'required',
            'ibuKandung' => 'required',
            'statusPerkawinan' => 'required',
            'namaPasangan' => 'required',
            'nipPasangan' => 'required',
            'pekerjaanPasangan' => 'required',
            'lisensiKepsek' => 'required',
            'diklatKepegawaian' => 'required',
            'keahlianBraile' => 'required',
            'keahlianBahasaIsyarat' => 'required',
            'bank' => 'required',
            'norek' => 'required',
            'namaRek' => 'required',
        ]);

        $Id = Guru::create([
            'username' => $request->post('username'),
            'password' => Hash::make($request['password']),
            'nik' => $request->post('nik'),
            'noKk' => $request->post('noKk'),
            'nuptk' => $request->post('nuptk'),
            'jenkel' => $request->post('jenkel'),
            'tempatLahir' => $request->post('tempatLahir'),
            'tanggalLahir' => $request->post('tanggalLahir'),
            'nip' => $request->post('nip'),
            'notelp' => $request->post('notelp'),
            'email' => $request->post('email'),
            'statusKepegawaian' => $request->post('statusKepegawaian'),
            'skPengangkatan' => $request->post('skPengangkatan'),
            'tmpPengangkatan' => $request->post('tmpPengangkatan'),
            'lembagaPengangkatan' => $request->post('lembagaPengangkatan'),
            'sumberGaji' => $request->post('sumberGaji'),
            'jenisPtk' => $request->post('jenisPtk'),
            'npwp' => $request->post('npwp'),
            'namaNpwp' => $request->post('namaNpwp'),
            'agama' => $request->post('agama'),
            'alamat' => $request->post('alamat'),
            'kewarganegaraan' => $request->post('kewarganegaraan'),
            'ibuKandung' => $request->post('ibuKandung'),
            'statusPerkawinan' => $request->post('statusPerkawinan'),
            'namaPasangan' => $request->post('namaPasangan'),
            'nipPasangan' => $request->post('nipPasangan'),
            'pekerjaanPasangan' => $request->post('pekerjaanPasangan'),
            'lisensiKepsek' => $request->post('lisensiKepsek'),
            'diklatKepegawaian' => $request->post('diklatKepegawaian'),
            'keahlianBraile' => $request->post('keahlianBraile'),
            'keahlianBahasaIsyarat' => $request->post('keahlianBahasaIsyarat'),
            'bank' => $request->post('bank'),
            'norek' => $request->post('norek'),
            'namaRek' => $request->post('namaRek'),
        ]);

        return redirect()
            ->route('guru');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function updateGuru(Request $request)
    {
        $id = $request->idGuru;
        $data = Guru::find($id)
            ->update([
                'username' => $request->username,
                'password' => Hash::make($request['password']),
                'nik' => $request->nik,
                'noKk' => $request->noKk,
                'nuptk' => $request->nuptk,
                'jenkel' => $request->jenkel,
                'tempatLahir' => $request->tempatLahir,
                'tanggalLahir' => $request->tanggalLahir,
                'nip' => $request->nip,
                'notelp' => $request->notelp,
                'email' => $request->email,
                'statusKepegawaian' => $request->statusKepegawaian,
                'skPengangkatan' => $request->skPengangkatan,
                'tmpPengangkatan' => $request->tmpPengangkatan,
                'lembagaPengangkatan' => $request->lembagaPengangkatan,
                'sumberGaji' => $request->sumberGaji,
                'jenisPtk' => $request->jenisPtk,
                'npwp' => $request->npwp,
                'namaNpwp' => $request->namaNpwp,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'kewarganegaraan' => $request->kewarganegaraan,
                'ibuKandung' => $request->ibuKandung,
                'statusPerkawinan' => $request->statusPerkawinan,
                'namaPasangan' => $request->namaPasangan,
                'nipPasangan' => $request->nipPasangan,
                'pekerjaanPasangan' => $request->pekerjaanPasangan,
                'lisensiKepsek' => $request->lisensiKepsek,
                'diklatKepegawaian' => $request->diklatKepegawaian,
                'keahlianBraile' => $request->keahlianBraile,
                'keahlianBahasaIsyarat' => $request->keahlianBahasaIsyarat,
                'bank' => $request->bank,
                'norek' => $request->norek,
                'namaRek' => $request->namaRek,                
            ]);         

        return redirect()
            ->route('masterGuru');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }
}
