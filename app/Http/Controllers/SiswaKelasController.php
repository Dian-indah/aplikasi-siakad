<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Kelas;
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
        $k = Kelas::find($id);        
        $siskel = $this->model->getAllSiswaKelas($id);
        return view('kelas.tambahSiswaKelas', compact('k', 'siskel'));
    }
    public function simpanSisKel(Request $request)
    {

        $Id = SiswaKelas::create([
            'siswaId' => $request->livesearch,
            'kelasId' => $request->kelasId,
        ]);
        // $Id = Kehadiran::create([
        //     'siswaId' => $request->livesearch,
        //     'kelasId' => $request->kelasId,
        // ]);

        return back();
    }
    public function showSiskelById($id)
    {
        $n = SiswaKelas::find($id);
        $response['success'] = true;
        $response['data'] = $n;
        return response()->json($response);
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

    public function hapusSiswaKelas($id)
    {
        $siskel = SiswaKelas::findOrFail($id);        
        $siskel->delete();

        return response()->json(['success' => true]);
        // return back()->with('berhasil', 'Berhasil Dihapus');
    }
}
