<?php

namespace App\Http\Controllers;
use App\Models\Kurikulum;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $data =  Kurikulum::all();
        return view('Admin.kurikulum', compact('data'));
    }
}
