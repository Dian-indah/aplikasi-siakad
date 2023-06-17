<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // dd('berhasil login!');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('menuAdmin');
            // dd('berhasil login Admin!');
        } elseif (Auth::guard('siswa')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('menuSiswa'));
            // dd('berhasil login!Siswa');
        }

        return back()->with('loginError', 'Login Failed!');
    }
    // public function logout()
    // {
    //     Auth::logout();

    //     request()->session()->invalidate();

    //     request()->session()->regenerateToken();

    //     return redirect('login');

}
