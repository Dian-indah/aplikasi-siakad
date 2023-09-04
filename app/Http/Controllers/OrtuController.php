<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrtuController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Ortu();
    }

    public function index()
    {        
        return view('ortu.menu');
    }

    //Admin
    public function getAllOrtu()
    {        
        $data = $this->model->getAllOrtu();           
        return view('ortu.indexOrtuAdmin', compact('data'));
    }

    public function selectSearchSiswa(Request $request)
    {
        $siswa = [];

        if ($request->has('q')) {
            $search = $request->q;
            $siswa = Siswa::select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($siswa);
    }

    public function simpanOrtu(Request $request)
    {
        $Id = Ortu::create([
            'name' => $request->namaOrtu,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
            'siswaId' => $request->livesearch,
        ]);

        return back();
    }
    public function getById($id)
    {
        $ks = Ortu::find($id);
        $response['success'] = true;
        $response['data'] = $ks;
        // dd($response);
        return response()->json($response);
    }

    public function updateOrtu(Request $request)
    {
        $id = $request->idOrtu;
        $data = Ortu::find($id)
            ->update([
                'name' => $request->editNamaOrtu,
                'username' => $request->editUsername,
                'password' => Hash::make($request['password']),
                'siswaId' => $request->livesearch,
            ]);

        return back();
    }
}
