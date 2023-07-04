<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;
use App\Models\Mapel;
use TingkatKelas;

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
    
}
