<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Siswa();
    }

    public function index()
    {
        $tingkatKelas = $this->model->getAllTingkatKelas();
        $data = $this->model->getAllSiswa();      
        return view('siswa.indexSiswaAdmin', compact('data','tingkatKelas'));
    }

    public function showSiswaById($id)
    {
        $siswa = Siswa::find($id);
        $response['success'] = true;
        $response['data'] = $siswa;
        return response()->json($response);
    }

    public function tambahSiswa()
    {      
        return view('siswa.tambahSiswa');
    }

    public function simpanSiswa(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'email'  => 'required',                
            'nisn'  => 'required',                
            'nipd'  => 'required',                
            'jenkel'  => 'required',                
            'tempatLahir'  => 'required',                
            'tanggalLahir'  => 'required',                
            'nik'  => 'required',                
            'noKk'  => 'required',                
            'noHp'  => 'required',                
            'agama'  => 'required',                
            'alamat'  => 'required',                
            'jenisTinggal'  => 'required',                
            'trasportasi'  => 'required',                
            'skhun'  => 'required',                
            'penerimaKpps'  => 'required',                
            'noKpps'  => 'required',                
            'namaAyah'  => 'required',                
            'tanggalLahirAyah'  => 'required',                
            'pendidikanAyah'  => 'required',                
            'pekerjaanAyah'  => 'required',                
        ]);

        $Id = Siswa::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,                
            'nisn' => $request->nisn,                
            'nipd' => $request->nipd,                
            'jenkel' => $request->jenkel,                
            'tempatLahir' => $request->tempatLahir,                
            'tanggalLahir' => $request->tanggalLahir,                
            'nik' => $request->nik,                
            'noKk' => $request->noKk,                
            'noHp' => $request->noHp,                                       
            'agama' => $request->agama,                
            'alamat' => $request->alamat,                
            'jenisTinggal' => $request->jenisTinggal,                                           
            'trasportasi' => $request->trasportasi,                
            'skhun' => $request->skhun,                
            'penerimaKpps' => $request->penerimaKpps,                
            'noKpps' => $request->noKpps,                
            'namaAyah' => $request->namaAyah,                
            'tanggalLahirAyah' => $request->tanggalLahirAyah,                
            'pendidikanAyah' => $request->pendidikanAyah,                
            'pekerjaanAyah' => $request->pekerjaanAyah,                
        ]);  
        // dd($Id)  ;

        // return view('siswa.indexSiswaAdmin');
        return redirect()
            ->route('masterSiswa');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function nilai()
    {
        return view('sisor.nilai');
    }

    public function kehadiran()
    {
        return view('sisor.kehadiran');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
