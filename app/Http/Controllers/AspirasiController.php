<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

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
        return view('aspirasi.lihatSemuaAspirasi', compact('data','ortu'));       
    }  
    public function lihatAspirasiByGuru()
    {     
        $data = $this->model->getAllAspirasi();   
        $ortu = $this->model->getAllOrtu();          
        return view('aspirasi.lihatAspirasiByGuru', compact('data','ortu'));       
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
}
