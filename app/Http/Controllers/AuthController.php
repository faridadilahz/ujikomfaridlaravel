<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Form Login
    public function showLoginForm()
    {
        return view('auth.login'); // Sesuaikan dengan letak file login.blade.php lu
    }

    // Proses Cek Login
    public function login(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Cek Logika Auth
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate(); // Mencegah Session Fixation Attack
            return redirect()->intended('/admin/dasbor');
        }

        // 3. Jika Gagal, Kembalikan dengan Pesan Error
        return back()->withErrors([
            'email' => 'Email atau kata sandi yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}