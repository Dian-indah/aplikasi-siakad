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
        return view('aspirasi.lihatSemuaAspirasi', compact('data'));       
    }  
}
