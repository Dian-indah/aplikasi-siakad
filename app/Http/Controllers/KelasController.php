<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TingkatKelas;
use App\Models\Kelas;
use App\Models\TahunAjar;

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
        return view('kelas.index', compact('data','tingkatkelas','tahunajar'));       
    }  

    public function simpanKelas(Request $request)
    {
        $request->validate([
            'namaKelas' => 'required',
            'tahunAjarId' => 'required',
            'tingkatKelasId' => 'required',
        ]);
        // dd($request->all());
        

        $Id = Kelas::create([
            'namaKelas' => $request->post('namaKelas'),
            'tahunAjarId' => $request->post('tahunAjarId'),
            'tingkatKelasId' => $request->post('tingkatKelasId'),                     
        ]);

        return redirect()
            ->route('kelas');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }    
 
    public function getById($id)
    {
        $kel = Kelas::find($id);
        $response['success'] = true;
        $response['data'] = $kel;
        // dd($response)
        return response()->json($response);
    }

    public function updateKelas(Request $request)
    {
        $id = $request->idKurikulum;
          $data = Kelas::find($id)
          // Satuan::where('id', $id)
          ->update([
            //'kode' => $request->kode,
            'namaKelas' => $request->editNamaKelas,
            'tahunAjarId' => $request->editTahunAjar,
            'tingkatKelas' => $request->editTingkatKelas,
          ]); 

          return redirect()
            ->route('kelas');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

 
}
