<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Guru;
use App\Models\Kehadiran;
use App\Models\KelasMapel;
use App\Models\Ortu;
use App\Models\SiswaKelas;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\Siswa;

class KehadiranController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Kehadiran();
    }

    public function kehadiran($id) // TAMPILAN AWAL
    {
        $g = Guru::find($id);
        $kehadiran = $this->model->getKehadiranByIdGuru($id);
        $st = $this->model->statusKehadiran($id);
        return view('guru.guruKehadiran', compact('g', 'kehadiran', 'st'));
    }

    public function viewKehadiranOrtu()
    {
        $id = Auth::guard('ortu')->user()->id;
        $km = Ortu::find($id);
        $kh = $this->model->viewKehadiranBySisor($id);
        return view('sisor.kehadiran', compact('km', 'kh'));
    }
    public function viewKehadiranSiswa()
    {
        $id = Auth::guard('siswa')->user()->id;
        $km = Siswa::find($id);
        $kh = $this->model->viewKehadiranBySisor($id);
        // $h = $this->model->tampilKehadiran($id); 
        // dd($h);
        return view('sisor.kehadiran', compact('km', 'kh'));
    }
    public function viewKehadiran(Request $request) //Admin
    {
        // $idKelasMapel = $request->get('kelasMapelId');
        // $tgl = $request->get('tgl');
        // $idKelas = $request->get('kelasId');
        // // ([
        // //     'tgl' => 'required',
        // // ]);
        // // $ks = KelasMapel::find($id);
        // // $test = Kehadiran::find($id);
        // $kehadiran = $this->model->viewKehadiranLama($idKelasMapel, $tgl,$idKelas);
        // return view('guru.viewKehadiran', compact('kehadiran','idKelasMapel','idKelas' ));
    }
    public function tampilKehadiran(Request $request) //Admin
    {
        // dd($request);
        $status = $request->get('status');
        $idKelasMapel = $request->get('kelasMapelId');
        $tgl = $request->get('tgl');
        // $tgl = Carbon::createFromFormat('d/M/Y', $request->get('tgl'))->format('d-m-Y');
        // dd($tgl);
        $idKelas = $request->get('kelasId');
        $now = Carbon::now();
        $tglKehadiran = $tgl != "" ? $tgl : $now->toDateString();

        $kehadiran = $this->model->viewKehadiranLama($idKelasMapel, $tglKehadiran, $idKelas);
        // dd($kehadiran);
        return view('guru.viewKehadiran', compact('kehadiran', 'idKelasMapel', 'idKelas', 'tglKehadiran', 'status'));
    }
    public function tambahKehadiran($id)
    {
        // $ks = KelasMapel::find($id);
        // $test = Kehadiran::find($id);
        // $kh = $this->model->lihatKehadiran($id);      
        // $now = Carbon::now();
        // $tglKehadiran = $now->toDateString();
        // return view('guru.inputKehadiran', compact('ks', 'kh', 'tglKehadiran', 'test'));
    }
    public function simpanKehadiran(Request $request)
    {
        if ($request->input('action') === 'Simpan') {
            $dataToInsert = [];
            foreach ($request->input('status') as $key => $status) {
                $dataToInsert[] = [
                    'status' => $status,
                    'tglKehadiran' => $request->input('tglKehadiran')[$key],
                    'siswaKelasId' => $request->input('siswaKelasId')[$key],
                    'kelasMapelId' => $request->input('kelasMapelId')[$key],
                ];
            }

            Kehadiran::insert($dataToInsert);
            return back();
        } elseif ($request->input('action') === 'Update') {
            foreach ($request->input('kehadiranId') as $key => $idKehadiran) {
                $data = Kehadiran::find($idKehadiran)
                    ->update([
                        'status' => $request->input('status')[$key],
                    ]);
            }
            return back()->with('success', 'Data mahasiswa berhasil diperbarui.');
        }
    }

    public function editKehadiran($id)
    {
        $student = Kehadiran::find($id);
        return view('edit_mahasiswa', compact('student'));
    }
    public function updateKehadiran(Request $request, $id)
    {
        $id = $request->kehadiranId;
        $data = Kehadiran::find($id)
            ->update([
                'status' => $request->status,
            ]);

        return back()->with('success', 'Data mahasiswa berhasil diperbarui.');
    }
}
