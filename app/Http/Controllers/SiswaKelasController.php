<?php

namespace App\Http\Controllers;

use App\Models\KelasSiswa;
use App\Models\SiswaKelas;
use Illuminate\Http\Request;

class SiswaKelasController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new SiswaKelas();
    }
    public function tambahSiswaKelas($id)
    {
        $ks = KelasSiswa::find($id);
        $siskel = $this->model->getAllSiswaKelas($id);
        return view('kelasSiswa.tambahSiswaKelas', compact('ks', 'siskel'));
    }
    public function simpanSisKel(Request $request)
    {

        $Id = SiswaKelas::create([
            'siswaId' => $request->livesearch,
            'kelasSiswaId' => $request->idKelasSiswa,
        ]);

        return back();
    }
    public function showSiskelById($id)
    {
        $n = SiswaKelas::find($id);
        $response['success'] = true;
        $response['data'] = $n;
        return response()->json($response);
    }

    public function editNts(Request $request)
    {
        $id = $request->idSiswaKelas;
        $data = SiswaKelas::where('id', $id)
            ->update([
                'nts' => $request->editNilai,
            ]);          
        return back();
    }

    public function editNas(Request $request)
    {
        $id = $request->idSiswaKelas;
        $data = SiswaKelas::where('id', $id)
            ->update([
                'nas' => $request->editNilai,
            ]);          
        return back();
    }
}
