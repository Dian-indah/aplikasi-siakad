<?php

namespace App\Http\Controllers;

use App\Models\KelasMapel;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasMapelController extends Controller
{
    private $model;

    public function __construct()
    {       
        $this->model = new KelasMapel();

    }
    public function index()
    {         
        $kelasMapel = $this->model->getAllKelasMapel();      
        $kls = $this->model->getAllKelas();
        $mapel = $this->model->getAllMapel();   
        $guru = $this->model->getAllGuru();
        $tingkatKelas = $this->model->getAllTingkatKelas(); 
        // dd($kelas)  ;
        return view('kelasMapel.index', compact('kelasMapel','kls','mapel','guru','tingkatKelas'));                 
    }  

    public function simpan(Request $request)
    {       
        $request->validate([
            'kelasId' => 'required',                   
            'mapelId' => 'required',
            'guruPengajar' => 'required',
        ]);           

        $Id = KelasMapel::create([
            'kelasId' => $request->kelasId,                               
            'mapelId' => $request->mapelId,                     
            'guruPengajar' => $request->guruPengajar,                                              
        ]);
        // dd($Id);

        return redirect()
            ->route('kelasMapel');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }    

    public function getById($id)
    {
        $ks = KelasMapel::find($id);
        $response['success'] = true;
        $response['data'] = $ks;
        // dd($response);
        return response()->json($response);
    }

    public function updateKelasMapel(Request $request)
    {
        $id = $request->idKelasMapel;
          $data = KelasMapel::find($id)     
          ->update([
            //'kode' => $request->kode,
            'kelasId' => $request->kelasId,                               
            'mapelId' => $request->mapelId,                     
            'guruPengajar' => $request->guruPengajar,   
          ]); 

          return redirect()
            ->route('kelasMapel');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }
}
