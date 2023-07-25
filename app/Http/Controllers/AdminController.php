<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    public function index()
    {
        $pegawai = $this->model->getAllPegawai();       
        return view('pegawai.index', compact('pegawai'));
    }

    public function menuAdmin()
    {
        return view('admin.menu');
    }

    public function showPegawaiById($id)
    {
        $pegawai = Admin::find($id);
        $response['success'] = true;
        $response['data'] = $pegawai;
        return response()->json($response);
    }
    public function simpaPegawai(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'notelp' => 'required',
            'jenkel' => 'required',
            'tempatLahir' => 'required',
            'tglLahir' => 'required',
            'alamat' => 'required',
            'statusKepegawaian' => 'required',
        ]);

        $Id = Admin::create([
            'name' => $request->post('name'),
            'username' => $request->post('username'),
            'password' => Hash::make($request['password']),
            'email' => $request->post('email'),
            'notelp' => $request->post('notelp'),
            'jenkel' => $request->post('jenkel'),
            'tempatLahir' => $request->post('tempatLahir'),
            'tglLahir' => $request->post('tglLahir'),
            'alamat' => $request->post('alamat'),
            'statusKepegawaian' => $request->post('statusKepegawaian'),
        ]);
        // dd($Id);
        return redirect()
            ->route('pegawaiAdmin');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }

    public function editPegawai($id)
    {
        $admin = Admin::find($id);
        $response['success'] = true;
        $response['data'] = $admin;
        // dd($response);
        return response()->json($response);
    }
    public function updatePegawai(Request $request)
    {
        $id = $request->idPegawai;
        $data = Admin::where('id', $id)
            ->update([
                'name' => $request->post('name'),
                'username' => $request->post('username'),
                'password' => Hash::make($request['password']),
                'email' => $request->post('email'),
                'notelp' => $request->post('notelp'),
                'jenkel' => $request->post('jenkel'),
                'tempatLahir' => $request->post('tempatLahir'),
                'tglLahir' => $request->post('tglLahir'),
                'alamat' => $request->post('alamat'),
                'statusKepegawaian' => $request->post('statusKepegawaian'),
            ]);
        // dd($data)   ;

        return redirect()->route('pegawaiAdmin');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }
    public function destroy(Admin $user)
    {
        // Memeriksa apakah pengguna yang sedang login adalah admin
        if (Auth::user()->$this->model->isAdmin()) {
            // Memeriksa apakah pengguna yang sedang login mencoba menghapus akunnya sendiri
            if ($user->id === Auth::user()->id) {
                return redirect()->back()->with('error', 'Tidak dapat menghapus akun admin sendiri.');
            }
            // Proses penghapusan akun
            $user->delete();
            return redirect()->route('pegawaiAdmin')->with('success', 'Akun pengguna telah dihapus.');
        }
        // Jika bukan admin, mungkin ada penanganan lain atau redirect
        return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus akun pengguna.');
    }

    public function aspirasi()
    {
        return view('Admin.aspirasi');
    }

    public function ortu()
    {
        return view('ortu.indexOrtuAdmin');
    }
}
