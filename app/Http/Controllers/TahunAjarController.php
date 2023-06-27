<?php

namespace App\Http\Controllers;

use App\Models\TahunAjar;
use Illuminate\Http\Request;

class TahunAjarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TahunAjar::all();
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

    public function getById($id)
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TahunAjar  $tahunAjar
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAjar $tahunAjar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahunAjar  $tahunAjar
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAjar $tahunAjar)
    {
        //
    }
}
