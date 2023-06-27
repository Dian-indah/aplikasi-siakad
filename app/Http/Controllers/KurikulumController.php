<?php

namespace App\Http\Controllers;
use App\Models\Kurikulum;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $data = Kurikulum::all();
        return view('Admin.kurikulum', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaKurikulum' => 'required',
        ]);

        $Id = Kurikulum::create([
            'namaKurikulum' => $request->post('namaKurikulum'),
        ]);

        return redirect()
            ->route('kurikulum');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function editKurikulum($id)
    {
        $kur = Kurikulum::find($id);
        return view('Admin.kurikulum', compact('kur'));
    }
    
    public function getById($id)
    {
        $kur = Kurikulum::find($id);
        $response['success'] = true;
        $response['data'] = $kur;
        return response()->json($response);
    }

    public function updateKurikulum(Request $request)
    {
        $id = $request->idKurikulum;
          $data = Kurikulum::find($id)
          // Satuan::where('id', $id)
          ->update([
            //'kode' => $request->kode,
            'namaKurikulum' => $request->editNamaKurikulum
          ]); 

          return redirect()
            ->route('kurikulum');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function destroy($id)
    {
       
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();

        return response()->json(['success' => true]);
        // return back()->with('berhasil', 'Berhasil Dihapus');
    }
}
