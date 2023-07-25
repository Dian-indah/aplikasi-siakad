<?php

namespace App\Http\Controllers;

use App\Models\KelasSiswa;
use App\Models\Siswa;
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
            'kelasId' => 'required',                   
            'mapelId' => 'required',
            'guruPengajar' => 'required',
        ]);           

        $Id = KelasSiswa::create([
            'kelasId' => $request->kelasId,                               
            'mapelId' => $request->mapelId,                     
            'guruPengajar' => $request->guruPengajar,                                              
        ]);
        // dd($Id);

        return redirect()
            ->route('kelasSiswa');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }    

    public function getById($id)
    {
        $ks = KelasSiswa::find($id);
        $response['success'] = true;
        $response['data'] = $ks;
        dd($response);
        return response()->json($response);
    }

    public function updateKelasSiswa(Request $request)
    {
        $id = $request->idKelasSiswa;
          $data = KelasSiswa::find($id)     
          ->update([
            //'kode' => $request->kode,
            'kelasId' => $request->kelasId,                               
            'mapelId' => $request->mapelId,                     
            'guruPengajar' => $request->guruPengajar,   
          ]); 

          return redirect()
            ->route('kelasSiswa');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function selectSearch(Request $request)
    {
    	$siswa = [];

        if($request->has('q')){
            $search = $request->q;
            $siswa =Siswa::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($siswa);
    }
}
