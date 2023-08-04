<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Exports\GuruExport;
use App\Imports\GuruImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\Guru;
use App\Models\Kehadiran;
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
        $response['success'] = true;
        $response['data'] = $guru;
        return response()->json($response);
    }
    public function simpanGuru(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nik' => '',
            'noKk' => '',
            'nuptk' => 'required',
            'jenkel' => '',
            'tempatLahir' => '',
            'tanggalLahir' => '',
            'nip' => 'required',
            'notelp' => '',
            'email' => '',
            'statusKepegawaian' => '',
            'skPengangkatan' => '',
            'tmpPengangkatan' => '',
            'lembagaPengangkatan' => '',
            'sumberGaji' => '',
            'jenisPtk' => '',
            'npwp' => '',
            'namaNpwp' => '',
            'agama' => '',
            'alamat' => '',
            'kewarganegaraan' => '',
            'ibuKandung' => '',
            'statusPerkawinan' => '',
            'namaPasangan' => '',
            'nipPasangan' => '',
            'pekerjaanPasangan' => '',
            'lisensiKepsek' => '',
            'diklatKepegawaian' => '',
            'keahlianBraile' => '',
            'keahlianBahasaIsyarat' => '',
            'bank' => '',
            'norek' => '',
            'namaRek' => '',
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
        $data = Guru::where('id', $id)
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
        return redirect()->route('masterGuru');        
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
    public function menu()
    {
        return view('Guru.menu');
    }

    public function profil()
    {
        return view('Guru.guruProfil');
    }
    //GURU NILAI
    public function nilai($id)
    {
        $g = Guru::find($id);
        $nilai = $this->model->getDataSiswa($id);
        return view('guru.guruNilai', compact('g', 'nilai'));
    }
    public function tambahNts($id)
    {
        $ks = KelasSiswa::find($id);
        $nts = $this->model->getKelasSiswa($id);
        return view('guru.inputNts', compact('ks', 'nts'));
    }
    public function tambahNas($id)
    {
        $ks = KelasSiswa::find($id);
        $nas = $this->model->getKelasSiswa($id);
        return view('guru.inputNas', compact('ks', 'nas'));
    }
    //GURU KEHADIRAN
    public function kehadiran($id)
    {
        $g = Guru::find($id);
        $kehadiran = $this->model->getDataSiswa($id);
        return view('Guru.guruKehadiran', compact('g', 'kehadiran'));
    }
    public function tambahKehadiran($id)
    {
        $ks = KelasSiswa::find($id);
        $kh = $this->model->getKelasSiswa($id);
        $today = date('Y-m-d');
        $attendanceData = SiswaKelas::where('tglKehadiran', $today)->get();
        return view('guru.inputKehadiran', compact('ks', 'kh', 'attendanceData'));
    }
    public function processInputKehadiran(Request $request)
    {
        $attendanceDate = $request->input('attendance_date');
        $statusData = $request->input('kehadiran');
        $idKelasSiswa = $request->input('idKelasSiswa');      
        $idSiswa = $request->input('siswaId');

        foreach ($statusData as $i) {
            // $id = $request->idSiswa;    
            $data = SiswaKelas::where('kelasSiswaId', $idKelasSiswa)
            ->where('siswaId', $idSiswa)
            ->update([
            // $Id = SiswaKelas::create([                    
                'tglKehadiran' => $attendanceDate,
                'kehadiran' => $statusData,
            ]);
        }

        dd($statusData);
            
        return back();
    }

    public function simpanKehadiran($id, Request $request)
    {
        foreach ($request->input('kehadiran') as $idSiswaKelas => $kehadiran) {
            $siswa = SiswaKelas::find($idSiswaKelas);
            $siswa->kehadiran = $kehadiran;
            $siswa->save();
        }

        return back();
    }
    public function viewKehadiran($id, Request $request)
    {
        $request->validate([
            'tgl' => 'required',
        ]);
        $ks = KelasSiswa::find($id);
        $kehadiran = $this->model->viewKehadiran($id, $request->tgl);
        return view('guru.viewKehadiran', compact('ks', 'kehadiran'));
    }
    public function tampilKehadiran($id)
    {
        $ks = KelasSiswa::find($id);
        $kehadiran = $this->model->viewKehadiran(0, 0);
        return view('guru.viewKehadiran', compact('ks', 'kehadiran'));
    }
}
