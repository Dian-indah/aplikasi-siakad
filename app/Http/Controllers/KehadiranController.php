<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kehadiran;
use App\Models\KelasMapel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Kehadiran();
    }

    public function kehadiran($id)
    {
        $g = Guru::find($id);
        $kehadiran = $this->model->getKehadiranByIdGuru($id);
        return view('guru.guruKehadiran', compact('g', 'kehadiran'));
    }
    public function viewKehadiran($id)
    {
        $km = KelasMapel::find($id);
        $kh = $this->model->viewKehadiran($id);
        // dd($kh);
        return view('guru.viewKehadiran', compact('km', 'kh'));
    }
    public function tambahKehadiran($id)
    {
        $ks = KelasMapel::find($id);
        $test = Kehadiran::find($id);
        $kh = $this->model->viewKehadiran($id);
        $now = Carbon::now();
        $tglKehadiran = $now->toDateString();
        return view('guru.inputKehadiran', compact('ks', 'kh', 'tglKehadiran', 'test'));
    }
    public function simpanKehadiran(Request $request, $id)
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
        } else{
            $dataToEdit = [];

        foreach ($request->input('data') as $key => $data) {
            $dataToEdit[] = [
                'id' => $data['id'],
                'status' => $data['status'],
                'tglKehadiran' => $data['tglKehadiran'],
                'siswaKelasId' => $data['siswaKelasId'],
                'kelasMapelId' => $data['kelasMapelId'],
            ];
        }

        foreach ($dataToEdit as $data) {
            Kehadiran::where('id', $data['id'])->update([
                'status' => $data['status'],
                'tglKehadiran' => $data['tglKehadiran'],
                'siswaKelasId' => $data['siswaKelasId'],
                'kelasMapelId' => $data['kelasMapelId'],
            ]);
        }
        }
    }

    public function editKehadiran($id)
    {
        $student = Kehadiran::find($id);
        return view('edit_mahasiswa', compact('student'));
    }
    public function updateKehadiran(Request $request, $id)
    {
        $student = Kehadiran::find($id);

        $student->nama = $request->input('nama');
        $student->nim = $request->input('nim');
        $student->email = $request->input('email');
        // tambahkan field lain yang diperlukan

        $student->save();

        return redirect('/edit-mahasiswa/' . $id)->with('success', 'Data mahasiswa berhasil diperbarui.');
    }
}
