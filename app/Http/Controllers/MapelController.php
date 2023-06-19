<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    //
    public function index()
    {
        $data =  Mapel::all();
        return view('mapel.index', compact('data'));
    }

    public function store(Request $request)
    {
        $postId = Mapel::create([
            'kodeMapel' => $request->post('kodeMapel'),
            'namaMapel' => $request->get('namaMapel'),            
            'kelas' => $request->get('kelas'),
            'kurikulum' => $request->get('kurikulum'),
            'statusKurikulum' => $request->get('statusKurikulum'),
            'kompetensiKeahlian' => $request->get('kompetensiKeahlian'),
            'namaPtk' => $request->get('namaPtk')
        ]);
        dd($postId);
    }
}
