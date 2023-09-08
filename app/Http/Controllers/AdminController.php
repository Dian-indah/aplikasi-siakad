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
        return view('administrator.index', compact('pegawai'));
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
    // public function updatePegawaiAdmin(Request $request)
    // {
    //     $id = $request->idPegawai;
    //     $request->validate([                     
    //         'name' => 'required',
    //         'username' => 'required',
    //         'password' => 'required',
    //         'email' => 'required',
    //         'notelp' => 'required',
    //         'jenkel' => 'required',
    //         'tempatLahir' => '',
    //         'tglLahir' => '',
    //         'alamat' => '',
    //         'statusKepegawaian' => '',  
    //     ], [
    //         'username.required' => 'Username Harus Diisi',          
    //         'password.required' => 'Password Harus Diisi',                    
    //     ]);

    //     $data = Admin::where('id', $id)
    //         ->update([
    //             'name' => $request->editname,
    //             'username' => $request->editusername,
    //             'password' => Hash::make($request['password']),
    //             'email' => $request->editemail,
    //             'notelp' => $request->editnotelp,
    //             'jenkel' => $request->editjenkel,
    //             'tempatLahir' => $request->edittempatLahir,
    //             'tglLahir' => $request->edittanggalLahir,
    //             'alamat' => $request->editalamat,
    //             'statusKepegawaian' => $request->editstatusKepegawaian,          
    //         ]);
    //     return redirect()->route('pegawaiAdmin');
    // }
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
                'name' => $request->editName,
                'username' => $request->editUsername,
                'password' => Hash::make($request['editPassword']),
                'email' => $request->editEmail,
                'notelp' => $request->notelp,
                'jenkel' => $request->jenkel,
                'tempatLahir' => $request->editTempatLahir,
                'tglLahir' => $request->editTglLahir,
                'alamat' => $request->editAlamat,
                'statusKepegawaian' => $request->editStatusKepegawaian,
            ]);
        // dd($data)   ;

        return redirect()->route('pegawaiAdmin');
        // ->with('success', 'data Kurikulum telah ditambahkan');
    }
    // public function destroy(Admin $user)
    // {
    //     // Memeriksa apakah pengguna yang sedang login adalah admin
    //     if (Auth::user()->$this->model->isAdmin()) {
    //         // Memeriksa apakah pengguna yang sedang login mencoba menghapus akunnya sendiri
    //         if ($user->id === Auth::user()->id) {
    //             return redirect()->back()->with('error', 'Tidak dapat menghapus akun admin sendiri.');
    //         }
    //         // Proses penghapusan akun
    //         $user->delete();
    //         return redirect()->route('pegawaiAdmin')->with('success', 'Akun pengguna telah dihapus.');
    //     }
    //     // Jika bukan admin, mungkin ada penanganan lain atau redirect
    //     return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus akun pengguna.');
    // }

    public function destroy(Admin $user)
    {
        // Cek apakah user yang sedang login adalah admin dan tidak sedang menghapus akunnya sendiri
        if (auth()->user()->$this->model->isAdmin() && Auth::admin()->id !== $user->id) {
            $user->delete();
            return redirect()->route('pegawai.index')->with('success', 'Akun berhasil dihapus.');
        }
        return redirect()->route('administrator.index')->with('error', 'Tidak dapat menghapus akun admin yang sedang login atau akun sendiri.');
    }

    public function aspirasi()
    {
        return view('Admin.aspirasi');
    }
 
}
