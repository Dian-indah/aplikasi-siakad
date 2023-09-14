<?php

namespace App\Http\Controllers;

use App\Models\Kepsek;
use Illuminate\Http\Request;

class KepsekController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Kepsek();
    }
    
    public function index()
    {       
        return view('kepsek.menu');
    }

    public function indexSemuaNilaiKelas()
    {      
        $km = $this->model->getKelasMapel();
        return view('kepsek.lihatKelas', compact('km'));      
    }
}
