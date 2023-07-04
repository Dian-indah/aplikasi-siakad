<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    private $model;

    public function __construct()
    {       
        $this->model = new Mapel();

    }

    public function index()
    {
        $data = $this->model->getMapel();
        $tingkatKelas = $this->model->getTingkatKelas();
        $kurikulum = $this->model->getKurikulum();     
        return view('mapel.index', compact('data','kurikulum','tingkatKelas')); 
    }

    public function simpanMapel(Request $request)
    {

        // dd($request);
        $request->validate([
            'kodeMapel' => 'required',
            'namaMapel' => 'required',
            'statusKurikulum' => 'required',
            'kompetensiKeahlian' => 'required',
            'namaPtk' => 'required',
            'tingkatKelasId' => 'required',
            'kurikulumId' => 'required',
        ]);

        $postId = Mapel::create([
            'kodeMapel' => $request->post('kodeMapel'),
            'namaMapel' => $request->post('namaMapel'),            
            'tingkatKelasId' => $request->post('tingkatKelasId'),
            'kurikulumId' => $request->post('kurikulumId'),
            'statusKurikulum' => $request->post('statusKurikulum'),
            'kompetensiKeahlian' => $request->post('kompetensiKeahlian'),
            'namaPtk' => $request->post('namaPtk')
        ]);         

        return redirect()
        ->route('mapel');
    }

    public function getById($id)
    {
        $mapel = Mapel::find($id);
        $response['success'] = true;
        $response['data'] = $mapel;
        return response()->json($response);
    }

    public function updateMapel(Request $request)
    {
        $id = $request->idMapel;
          $data = Mapel::find($id)     
          ->update([
            //'kode' => $request->kode,
            'kodeMapel' => $request->editNamaKelas,
            'namaMapel' => $request->editNamaKelas,            
            'tingkatKelasId' => $request->editTingkatKelas,
            'kurikulumId' => $request->editKurikulum,
            'statusKurikulum' => $request->editStatusKurikulum,
            'kompetensiKeahlian' => $request->editKompetensiKeahlian,
            'namaPtk' => $request->editNamaPtk,
          ]); 

          return redirect()
            ->route('mapel');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }
    
}
