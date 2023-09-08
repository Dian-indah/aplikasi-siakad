<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // dd($request);
        $request->validate([
            'name'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'email'  => 'required',
            'nisn'  => '',
            'jenkel'  => '',
            'tempatLahir'  => '',
            'tanggalLahir'  => '',
            'nik'  => '',
            'noKk'  => '',
            'noHp'  => '',
            'agama'  => '',
            'alamat'  => '',
            'jenisTinggal'  => '',
            'transportasi'  => '',
            'namaAyah'  => '',
            'tanggalLahirAyah'  => '',
            'pendidikanAyah'  => '',
            'pekerjaanAyah'  => '',
            'penghasilanAyah'  => '',
            'nikAyah'  => '',
            'namaIbu'  => '',
            'tanggalLahirIbu'  => '',
            'pendidikanIbu'  => '',
            'pekerjaanIbu'  => '',
            'penghasilanIbu'  => '',
            'nikIbu'  => '',
            'sekolahAsal'  => '',
            'anak'  => '',
            'jmlSaudara'  => '',
        ]);

        $Id = Siswa::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,
            'nisn' => $request->nisn,
            'jenkel' => $request->jenkel,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'nik' => $request->nik,
            'noKk' => $request->noKk,
            'noHp' => $request->noHp,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'jenisTinggal' => $request->jenisTinggal,
            'transportasi' => $request->transportasi,
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
            'sekolahAsal' => $request->sekolahAsal,
            'anak' => $request->anak,
            'jmlSaudara' => $request->jmlSaudara,
        ]); 
        return redirect()
            ->route('masterSiswa');    
    }

    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.editSiswa', compact('siswa'));
    }

    public function updateSiswa(Request $request)
    {
        $id = $request->idSiswa;
        $data = Siswa::where('id', $id)
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request['password']),
                'email' => $request->email,
                'nisn' => $request->nisn,
                'jenkel' => $request->jenkel,
                'tempatLahir' => $request->tempatLahir,
                'tanggalLahir' => $request->tanggalLahir,
                'nik' => $request->nik,
                'noKk' => $request->noKk,
                'noHp' => $request->noHp,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'jenisTinggal' => $request->jenisTinggal,
                'transportasi' => $request->transportasi,
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
                'sekolahAsal' => $request->sekolahAsal,
                'anak' => $request->anak,
                'jmlSaudara' => $request->jmlSaudara,
            ]);
        // dd($data)   ;

        return redirect()->route('masterSiswa');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function menuSiswa()
    {
        return view('siswa.menu');
    }

    public function selectSearch(Request $request)
    {
    	$siswa = [];

        if($request->has('q')){
            $search = $request->q;
            $siswa =Siswa::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($siswa);
    }
}
