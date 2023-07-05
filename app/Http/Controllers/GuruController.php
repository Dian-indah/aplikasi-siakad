<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;

class GuruController extends Controller
{    
    public function index()
    {
        return view('Guru.menu');
    }  
    
    public function getGuru()
    {
        
    }
}
