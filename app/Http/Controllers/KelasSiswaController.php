<?php

namespace App\Http\Controllers;

use App\Models\KelasSiswa;
use Illuminate\Http\Request;

class KelasSiswaController extends Controller
{
    private $model;

    public function __construct()
    {       
        $this->model = new KelasSiswa();

    }
    public function index()
    {         
        $kelasSiswa = $this->model->getAllKelasSiswa();
        $kls = $this->model->getAllKelas();
        $mapel = $this->model->getAllMapel();   
        $guru = $this->model->getAllGuru();
        $tingkatKelas = $this->model->getAllTingkatKelas(); 
        // dd($kelas)  ;
        return view('kelasSiswa.index', compact('kelasSiswa','kls','mapel','guru','tingkatKelas'));                 
    }  

    public function simpan(Request $request)
    {
        $request->validate([
            'namaKelasId' => 'required',            
            'tingkatKelasId' => 'required',
            'mapelId' => 'required',
            'guruId' => 'required',
        ]);           

        $Id = KelasSiswa::create([
            'namaKelasId' => $request->post('namaKelas'),           
            'tingkatKelasId' => $request->post('tingkatKelasId'),                     
            'mapelId' => $request->post('mepelId'),                     
            'guruId' => $request->post('guruId'),                     
        ]);

        return redirect()
            ->route('kelasSiswa');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }    
}
