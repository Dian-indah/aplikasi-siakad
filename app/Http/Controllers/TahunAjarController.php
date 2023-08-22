<?php

namespace App\Http\Controllers;

use App\Models\TahunAjar;
use Illuminate\Http\Request;

class TahunAjarController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new TahunAjar();
    }

    public function index()
    {
        $data = $this->model->getTahunAjar();
        return view('Admin.tahunAjar', compact('data'));
    }

    public function simpanTahunAjar(Request $request)
    {
        $request->validate([
            'tahunAjar' => 'required',
            'semester' => 'required',
        ]);

        $Id = TahunAjar::create([
            'tahunAjar' => $request->post('tahunAjar'),
            'semester' => $request->post('semester'),
        ]);

        return redirect()
            ->route('tahunAjar');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function tahunAjarById($id)
    {
        $ta = TahunAjar::find($id);
        $response['success'] = true;
        $response['data'] = $ta;
        return response()->json($response);
    }

    public function updateTahunAjar(Request $request)
    {
        $id = $request->idTahunAjar;
          $data = TahunAjar::find($id)         
          ->update([
            //'kode' => $request->kode,
            'tahunAjar' => $request->tahunAjar,
            'semester' => $request->semester,
          ]);  

          return redirect()
            ->route('tahunAjar');
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function destroy($id)
    {
       
        $kurikulum = tahunAjar::findOrFail($id);
        $kurikulum->delete();

        return response()->json(['success' => true]);
        // return back()->with('berhasil', 'Berhasil Dihapus');
    }

    
}
