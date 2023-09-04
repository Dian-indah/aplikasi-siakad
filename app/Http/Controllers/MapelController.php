<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use Exception;

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
        return view('mapel.index', compact('data', 'kurikulum', 'tingkatKelas'));
    }

    public function simpanMapel(Request $request)
    {
        // try {
            // dd($request);
            $request->validate([
                'kodeMapel' => 'required',
                'namaMapel' => 'required',
                'statusKurikulum' => 'required',
                'kompetensiKeahlian' => 'required',
                'tingkatKelasId' => 'required',
                'kurikulumId' => 'required',
            ]);

            $postId = Mapel::create([
                'kodeMapel' => $request->kodeMapel,
                'namaMapel' => $request->namaMapel,
                'tingkatKelasId' => $request->tingkatKelasId,
                'kurikulumId' => $request->kurikulumId,
                'statusKurikulum' => $request->statusKurikulum,
                'kompetensiKeahlian' => $request->kompetensiKeahlian,
            ]);

            return redirect()
                ->route('mapel');
        // } catch (Exception $e) {
        //     if ($e->getCode() == 23000) { // Kode untuk Duplicate entry error
        //         // return back()->with('duplikatData', 'Login Failed!');
        //         return response()->json(['error' => 'Data duplikat ditemukan']);
        //     }
        //     return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        // }
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
                'kodeMapel' => $request->editKodeMapel,
                'namaMapel' => $request->editNamaMapel,
                'tingkatKelasId' => $request->editTingkatKelasId,
                'kurikulumId' => $request->editKurikulumId,
                'statusKurikulum' => $request->editStatusKurikulum,
                'kompetensiKeahlian' => $request->editKompetensiKeahlian,
                'namaPtk' => $request->editNamaPtk,
            ]);

        return redirect()
            ->route('mapel');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function destroy($id)
    {

        $mapel = Mapel::findOrFail($id);
        $mapel->delete();


        return response()->json(['success' => true]);
        // return back()->with('berhasil', 'Berhasil Dihapus');
    }
}
