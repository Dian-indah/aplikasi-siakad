<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    private $model;

    public function __construct()
    {       
        $this->model = new Kelas();

    }
    
    public function index()
    {     
        $data = $this->model->getKelas();
        $tingkatkelas = $this->model->getAllTingkatKelas();
        $tahunajar = $this->model->getAllTahunAjar();
        $guru = $this->model->getAllGuru();
        return view('kelas.index', compact('data','tingkatkelas','tahunajar','guru'));       
    }  

    public function simpanKelas(Request $request)
    {
        $request->validate([
            'namaKelas' => 'required',
            'tahunAjarId' => 'required',
            'tingkatKelasId' => 'required',
            'guruId' => 'required',
        ]);           

        $Id = Kelas::create([
            'namaKelas' => $request->post('namaKelas'),
            'tahunAjarId' => $request->post('tahunAjarId'),
            'tingkatKelasId' => $request->post('tingkatKelasId'),                     
            'guruId' => $request->post('guruId'),                     
        ]);

        return redirect()
            ->route('kelas');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }    
 
    public function getById($id)
    {
        $kur = Kelas::find($id);
        $response['success'] = true;
        $response['data'] = $kur;
        return response()->json($response);
    }

    public function updateKelas(Request $request)
    {
        $id = $request->idKelas;
          $data = Kelas::find($id)     
          ->update([
            //'kode' => $request->kode,
            'namaKelas' => $request->editNamaKelas,
            'tahunAjarId' => $request->editTahunAjar,
            'tingkatKelasId' => $request->editTingkatKelas,
            'guruId' => $request->editGuru,
          ]); 

          return redirect()
            ->route('kelas');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function destroy($id)
    {
       
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();


        return response()->json(['success' => true]);
        // return back()->with('berhasil', 'Berhasil Dihapus');
    }

 
}
