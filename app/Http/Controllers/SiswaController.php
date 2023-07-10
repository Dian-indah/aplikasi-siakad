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

        $Id = Siswa::create([
            'name' => $request->post('name'),
            'username' => $request->post('username'),
            'password' => Hash::make($request['password']),
            'email' => $request->post('email'),
            'nisn' => $request->post('nisn'),
            'nipd' => $request->post('nipd'),
            'jenkel' => $request->post('jenkel'),
            'tempatLahir' => $request->post('tempatLahir'),
            'tanggalLahir' => $request->post('tanggalLahir'),
            'nik' => $request->post('nik'),
            'noKk' => $request->post('noKk'),
            'noHp' => $request->post('noHp'),
            'agama' => $request->post('agama'),
            'alamat' => $request->post('alamat'),
            'jenisTinggal' => $request->post('jenisTinggal'),
            'trasportasi' => $request->post('trasportasi'),
            'skhun' => $request->post('skhun'),
            'penerimaKpps' => $request->post('penerimaKpps'),
            'noKpps' => $request->post('noKpps'),
            'namaAyah' => $request->post('namaAyah'),
            'tanggalLahirAyah' => $request->post('tanggalLahirAyah'),
            'pendidikanAyah' => $request->post('pendidikanAyah'),
            'pekerjaanAyah' => $request->post('pekerjaanAyah'),
            'penghasilanAyah' => $request->post('penghasilanAyah'),
            'nikAyah' => $request->post('nikAyah'),
            'namaIbu' => $request->post('namaIbu'),
            'tanggalLahirIbu' => $request->post('tanggalLahirIbu'),
            'pendidikanIbu' => $request->post('pendidikanIbu'),
            'pekerjaanIbu' => $request->post('pekerjaanIbu'),
            'penghasilanIbu' => $request->post('penghasilanIbu'),
            'nikIbu' => $request->post('nikIbu'),
            'namaWali' => $request->post('namaWali'),
            'tanggalLahirWali' => $request->post('tanggalLahirWali'),
            'pendidikanWali' => $request->post('pendidikanWali'),
            'pekerjaanWali' => $request->post('pekerjaanWali'),
            'penghasilanWali' => $request->post('penghasilanWali'),
            'nikWali' => $request->post('nikWali'),
            'noUn' => $request->post('noUn'),
            'noSeriIjazah' => $request->post('noSeriIjazah'),
            'penerimaKip' => $request->post('penerimaKip'),
            'noKip' => $request->post('noKip'),
            'namaKip' => $request->post('namaKip'),
            'noReqAkta' => $request->post('noReqAkta'),
            'bank' => $request->post('bank'),
            'noRekening' => $request->post('noRekening'),
            'namaRekening' => $request->post('namaRekening'),
            'layakPip' => $request->post('layakPip'),
            'alasanPip' => $request->post('alasanPip'),
            'kebutuhanKhusus' => $request->post('kebutuhanKhusus'),
            'sekolahAsal' => $request->post('sekolahAsal'),
            'anak' => $request->post('anak'),
            'jmlSaudara' => $request->post('jmlSaudara'),
            'bb' => $request->post('bb'),
            'tb' => $request->post('tb'),
            'jarakSekolah' => $request->post('jarakSekolah'),
        ]);
        dd($Id);

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
