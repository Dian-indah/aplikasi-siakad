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
        return view('guru.editGuru', compact('guru'));
    }

    public function tambahGuru()
    {      
        return view('guru.tambahGuru');
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
            'email' => 'required',
            
        ]);

        $Id = Guru::create([
            'username' => $request->post('username'),
            'email' => $request->post('email'),
            'password' => Hash::make($request['password']),
            
        ]);
        dd($Id);

        // return redirect()
        //     ->route('masterGuru');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function updateGuru(Request $request)
    {
        $id = $request->idGuru;
        $data = Guru::where('id',$id)
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
            // dd($data)   ;

            return redirect()->route('masterGuru');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }
}
