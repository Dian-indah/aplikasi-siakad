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
            'username' => 'required',
            'password' => 'required'
       ],[
            'username.required' => 'Username Harus Diisi',        
            'password.required' => 'Password Harus Diisi',           
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
        }elseif (Auth::guard('guru')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('menuGuru'));
            // dd('berhasil login!Siswa');
        }elseif (Auth::guard('ortu')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('menuOrtu'));
            // dd('berhasil login!Siswa');
        }elseif (Auth::guard('kepsek')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('menuKepsek'));
            // dd('berhasil login!Siswa');
        }

        return back()->with('loginError', 'Login Failed!');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
