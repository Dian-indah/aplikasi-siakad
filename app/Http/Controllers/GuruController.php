<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

use App\Exports\GuruExport;
use App\Imports\GuruImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\Guru;
use App\Models\Kehadiran;
use App\Models\KelasMapel;
use App\Models\KelasSiswa;
use App\Models\SiswaKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Guru();
    }
    //LOGIN ADMIN
    public function index()
    {
        $guru = $this->model->getAllGuru();
        return view('Guru.indexGuruAdmin', compact('guru'));
    }

    public function tambahGuru()
    {
        return view('guru.tambahGuru');
    }
    public function editGuru($id)
    {
        $guru = Guru::find($id);
        return view('guru.editGuru', compact('guru'));
    }

    public function showGuruById($id)
    {
        $guru = Guru::find($id);
        // dd($guru);
        $response['success'] = true;
        $response['data'] = $guru;
        return response()->json($response);
    }
    public function simpanGuru(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:guru',
            'nama' => '',
            'password' => 'required',
            'nik' => '',
            'noKk' => '',
            'nuptk' => 'required|unique:guru',
            'jenkel' => '',
            'tempatLahir' => '',
            'tanggalLahir' => '',
            'notelp' => '',
            'email' => '',
            'agama' => '',
            'alamat' => '',
            'kewarganegaraan' => '',
        ], [
            'username.required' => 'Username Harus Diisi',
            'username.unique' => 'Username Telah Ada',
            'password.required' => 'Password Harus Diisi',
            'nuptk.required' => 'NUPTK Harus Diisi',
            'nuptk.unique' => 'NUPTK Telah Ada',
        ]);

        $Id = Guru::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request['password']),
            'nik' => $request->nik,
            'noKk' => $request->noKk,
            'nuptk' => $request->nuptk,
            'jenkel' => $request->jenkel,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'notelp' => $request->notelp,
            'email' => $request->email,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'kewarganegaraan' => $request->kewarganegaraan,
        ]);        

        return redirect()->route('masterGuru');       
    }
    public function updateGuru(Request $request)
    {
        $id = $request->idGuru;
        $request->validate([
            'username' => 'required',
            'nama' => '',
            'password' => 'required',
            'nik' => '',
            'noKk' => '',
            'nuptk' => 'required',
            'jenkel' => '',
            'tempatLahir' => '',
            'tanggalLahir' => '',
            'notelp' => '',
            'email' => '',
            'agama' => '',
            'alamat' => '',
            'kewarganegaraan' => '',
        ], [
            'username.required' => 'Username Harus Diisi',
            'password.required' => 'Password Harus Diisi',
            'nuptk.required' => 'NUPTK Harus Diisi',
        ]);
        $data = Guru::where('id', $id)
            ->update([
                'username' => $request->username,
                'nama' => $request->nama,
                'password' => Hash::make($request['password']),
                'nik' => $request->nik,
                'noKk' => $request->noKk,
                'nuptk' => $request->nuptk,
                'jenkel' => $request->jenkel,
                'tempatLahir' => $request->tempatLahir,
                'tanggalLahir' => $request->tanggalLahir,
                'notelp' => $request->notelp,
                'email' => $request->email,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'kewarganegaraan' => $request->kewarganegaraan,
            ]);
        return back();
    }
    public function guruExport()
    {
        return Excel::download(new GuruExport, 'guru.xlsx');
    }

    public function guruImportExcel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('dataGuru', $nama_file);

        // import data
        Excel::import(new GuruImport, public_path('/dataGuru/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('masterGuru');
    }

    //LOGIN GURU
    public function menu($id)
    {
        $id = Auth::guard('guru')->user()->id;  
        $guru = Guru::find($id);        
        $nilai = $this->model->getDataSiswa($id); 
        return view('Guru.menu', compact('guru', 'nilai'));
    }

    public function profil($id)
    {
        $guru = Guru::find($id);
        return view('Guru.guruProfil', compact('guru'));
    }
    //GURU NILAI
    public function nilai($id)
    {
        $g = Guru::find($id);
        $nilai = $this->model->getDataSiswa($id);
        return view('guru.guruNilai', compact('g', 'nilai'));       
    }

    //GURU KEHADIRAN    
    // public function tambahKehadiran($id)
    // {
    //     $ks = KelasMapel::find($id);
    //     $kh = $this->model->viewKehadiran($id);
    //     $now = Carbon::now();
    //     $tglKehadiran = $now->toDateString();
    //     // $today = date('Y-m-d');
    //     // $attendanceData = Kehadiran::where('tglKehadiran', $today)->get();
    //     return view('guru.inputKehadiran', compact('ks', 'kh','tglKehadiran'));
    // }
    // public function processInputKehadiran(Request $request)
    // {        
    //     $id = $request->idKehadiran;
    //     $data = Kehadiran::where('id', $id)
    //         ->update([
    //             'status' => $request->status,
    //             'tglKehadiran' => $request->tglKehadiran,
    //         ]);          
    //     return back();
    // }

    public function tampilKehadiran($id)
    {
        $ks = KelasMapel::find($id);
        $kehadiran = $this->model->viewKehadiran($id);
        return view('guru.viewKehadiran', compact('ks', 'kehadiran'));
    }

    //WaliKelas
    public function indexWaliKelas()
    {
        $id = Auth::guard('guru')->user()->id;
        $g = Guru::find($id);
        $km = $this->model->getAllKelasMapel($id);
        return view('guru.guruWaliKelas', compact('km'));      
    }
}
