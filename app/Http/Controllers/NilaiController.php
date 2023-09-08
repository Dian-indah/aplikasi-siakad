<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kehadiran;
use App\Models\Ortu;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use App\Models\KelasMapel;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    private $model;

    public function __construct()
    {       
        $this->model = new Nilai();
    }

    public function nilai()
    {
        $id = Auth::guard('guru')->user()->id;
        $g = Guru::find($id);   
        $nilai = $this->model->getNilaiByIdGuru($id);     
        return view('guru.guruNilai', compact('g', 'nilai'));
    }
    public function tambahNts($id,Request $request)
    {        
        $ks = KelasMapel::find($id);        
        $nts = $this->model->getSiswaKelas($id);     
        return view('guru.inputNts', compact('ks', 'nts'));
    }
    public function tambahNas($id)
    {
        $ks = KelasMapel::find($id);
        $nas = $this->model->getSiswaKelas($id);
        return view('guru.inputNas', compact('ks', 'nas'));
    }
    public function inputNts(Request $request)
    {
        $request->validate([
            'siswaKelasId' => 'required',
            'kelasMapelId' => 'required',
            'nts' => '',       
        ]);

        $postId = Nilai::create([
            'siswaKelasId' => $request->siswaKelasId,
            'kelasMapelId' => $request->kelasMapelId,            
            'nts' => $request->nilaiNts,            
        ]);                        
        return back();
    }
    public function inputNas(Request $request)
    {
        $request->validate([
            'siswaKelasId' => 'required',
            'kelasMapelId' => 'required',
            'nas' => '',       
        ]);

        $postId = Nilai::create([
            'siswaKelasId' => $request->siswaKelasId,
            'kelasMapelId' => $request->kelasMapelId,            
            'nas' => $request->nilaiNas,            
        ]);                        
        return back();
    }
    public function updateNts(Request $request)
    {
        $id = $request->nilaiId;
        $data = Nilai::where('id', $id)
            ->update([
                'nts' => $request->editnilaiNts,                
            ]);
        return back();
    }
    public function getById($id)
    {
        $kur = Nilai::find($id);
        $response['success'] = true;
        $response['data'] = $kur;
        return response()->json($response);
    }
    public function updateNas(Request $request)
    {
        $id = $request->nilaiId;
        $data = Nilai::where('id', $id)
            ->update([
                'nas' => $request->editnilaiNas,                
            ]);
        return back();
    }
    public function nasGetById($id)
    {
        $kur = Nilai::find($id);
        $response['success'] = true;
        $response['data'] = $kur;
        return response()->json($response);
    }

    public function ShowNilaiSiswa()
    {
        $id = Auth::guard('siswa')->user()->id;
        $s = Siswa::find($id);
        $nilai = $this->model->getNilaiBySiswa($id);
        return view('sisor.nilai', compact('s', 'nilai'));
    }
    public function ShowNilaiOrtu()
    {
        $id = Auth::guard('ortu')->user()->id;
        $s = Ortu::find($id);
        $nilai = $this->model->getNilaiByOrtu($id);
        return view('sisor.nilai', compact('s', 'nilai'));
    }

    public function showNilaiByWaliKelas($id,Request $request)
    {          
        
        $ks = KelasMapel::find($id);        
        $siswa = $this->model->statusKehadiranSiswa($id);     
        return view('guru.viewWaliKelas', compact('ks', 'siswa'));
    }
    
}
