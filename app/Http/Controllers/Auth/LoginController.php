<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan form login
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            return redirect()->route('homepage'); // Atau redirect ke dashboard admin jika role admin
        }

        return view('auth.login');
    }

    /**
     * Proses login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek kredensial dan login
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Regenerasi sesi untuk menghindari session fixation
            $request->session()->regenerate();

            // Tentukan peran pengguna
            $role = Auth::user()->role ?? 'user';

            // Redirect berdasarkan peran pengguna
            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('homepage');
        }

        // Jika gagal login
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Proses logout
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // Logout pengguna
        Auth::logout();

        // Hapus session dan regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
