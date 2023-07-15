<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Exports\GuruExport;
use App\Imports\GuruImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use GuzzleHttp\Promise\Create;
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
        $guru = $this->model->getAllGuru();
        return view('Guru.indexGuruAdmin', compact('guru'));
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

    public function guruExport()
    {
        // return new GuruExport()->download('guru.xlsx');
        return Excel::download(new GuruExport,'guru.xlsx');
    }

    public function guruImportExcel(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('dataGuru',$nama_file);
 
		// import data
		Excel::import(new GuruImport, public_path('/dataGuru/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('masterGuru');  
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
        // dd($Id);
        // $data = Guru::Create($request->post());

        return redirect()->route('masterGuru');
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
