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
        $data = $this->model->getAllSiswa();
        $tingkatKelas = $this->model->getTingkatKelas();
        return view('siswa.indexSiswaAdmin', compact('data', 'tingkatKelas'));
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
        dd($request);
        $request->validate([
            'name'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'email'  => 'required',
            'nipd'  => 'required',
            'nisn'  => 'required',
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
            'penghasilanAyah'  => 'required',
            'nikAyah'  => 'required',
            'namaIbu'  => 'required',
            'tanggalLahirIbu'  => 'required',
            'pendidikanIbu'  => 'required',
            'pekerjaanIbu'  => 'required',
            'penghasilanIbu'  => 'required',
            'nikIbu'  => 'required',
            'namaWali'  => 'required',
            'tanggalLahirWali'  => 'required',
            'pendidikanWali'  => 'required',
            'pekerjaanWali'  => 'required',
            'penghasilanWali'  => 'required',
            'nikWali'  => 'required',
            'noUn'  => 'required',
            'noSeriIjazah'  => 'required',
            'penerimaKip'  => 'required',
            'noKip'  => 'required',
            'namaKip'  => 'required',
            'noReqAkta'  => 'required',
            'bank'  => 'required',
            'noRekening'  => 'required',
            'namaRekening'  => 'required',
            'layakPip'  => 'required',
            'alasanPip'  => 'required',
            'kebutuhanKhusus'  => 'required',
            'sekolahAsal'  => 'required',
            'anak'  => 'required',
            'jmlSaudara'  => 'required',
            'bb'  => 'required',
            'tb'  => 'required',
            'jarakSekolah'  => 'required',
        ]);

        $Id = Siswa::creat([
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
            'penghasilanAyah' => $request->penghasilanAyah,
            'nikAyah' => $request->nikAyah,
            'namaIbu' => $request->namaIbu,
            'tanggalLahirIbu' => $request->tanggalLahirIbu,
            'pendidikanIbu' => $request->pendidikanIbu,
            'pekerjaanIbu' => $request->pekerjaanIbu,
            'penghasilanIbu' => $request->penghasilanIbu,
            'nikIbu' => $request->nikIbu,
            'namaWali' => $request->namaWali,
            'tanggalLahirWali' => $request->tanggalLahirWali,
            'pendidikanWali' => $request->pendidikanWali,
            'pekerjaanWali' => $request->pekerjaanWali,
            'penghasilanWali' => $request->penghasilanWali,
            'nikWali' => $request->nikWali,
            'noUn' => $request->noUn,
            'noSeriIjazah' => $request->noSeriIjazah,
            'penerimaKip' => $request->penerimaKip,
            'noKip' => $request->noKip,
            'namaKip' => $request->namaKip,
            'noReqAkta' => $request->noReqAkta,
            'bank' => $request->bank,
            'noRekening' => $request->noRekening,
            'namaRekening' => $request->namaRekening,
            'layakPip' => $request->layakPip,
            'alasanPip' => $request->alasanPip,
            'kebutuhanKhusus' => $request->kebutuhanKhusus,
            'sekolahAsal' => $request->sekolahAsal,
            'anak' => $request->anak,
            'jmlSaudara' => $request->jmlSaudara,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'jarakSekolah' => $request->jarakSekolah,
        ]);  
        // dd($Id)  ;

        // return redirect()
        //     ->route('masterSiswa');
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
