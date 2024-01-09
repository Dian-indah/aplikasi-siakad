<?php

namespace App\Http\Controllers;

use App\Exports\AspirasiExport;
use App\Models\Aspirasi;
use App\Models\Ortu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class AspirasiController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Aspirasi();
    }

    public function index()
    {
        $data = $this->model->getAllAspirasi();
        $ortu = $this->model->getAllOrtu();
        return view('aspirasi.lihatSemuaAspirasi', compact('data', 'ortu'));
    }
    public function lihatAspirasiByGuru()
    {
        $data = $this->model->getAllAspirasi();
        $ortu = $this->model->getAllOrtu();
        return view('aspirasi.lihatAspirasiByGuru', compact('data', 'ortu'));
    }

    public function showAspirasiById($id)
    {
        $aspirasi = Aspirasi::find($id);
        $response['success'] = true;
        $response['data'] = $aspirasi;
        return response()->json($response);
    }

    public function showAspirasi($id)
    {
        $aspirasi = Aspirasi::find($id);
        $response['success'] = true;
        $response['data'] = $aspirasi;
        return response()->json($response);
    }

    public function lihatAspirasiByKepsek()
    {
        $data = $this->model->getAllAspirasi();
        $ortu = $this->model->getAllOrtu();
        return view('aspirasi.lihatAspirasiByKepsek', compact('data', 'ortu'));
    }

    public function showAspirasiByKepsek($id)
    {
        $aspirasi = Aspirasi::find($id);
        $response['success'] = true;
        $response['data'] = $aspirasi;
        return response()->json($response);
    }

    public function aspirasiByOrtu($id)
    {
        $idortu = Ortu::find($id); 
        $data = $this->model->getAspirasiByOrtu($id); 
        $now = Carbon::now();
        $tgl = $now->toDateString();
        return view('aspirasi.lihatAspirasiOrtu',compact('tgl','data','idortu'));
    }

    public function showAspirasiByOrtu($id)
    {
        $aspirasi = Aspirasi::find($id);
        $response['success'] = true;
        $response['data'] = $aspirasi;
        return response()->json($response);
    }

    public function simpanAspirasi(Request $request)
    {
        $request->validate([
            'ortuId' => 'required',
            'keterangan' => 'required',
            'tglKirim' => 'required',            
        ]);           

        $Id = Aspirasi::create([
            'ortuId' => $request->ortuId,
            'keterangan' => $request->keterangan,
            'tglKirim' => $request->tglKirim,                                                   
        ]);

        return back();
            // ->with('success', 'data Kurikulum telah ditambahkan');
    }   
    
    public function aspirasiExport()
    {    
        return Excel::download(new AspirasiExport(), 'Aspirasi.xlsx');
    }
}
