<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // VALIDASI
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email',
            'phone'     => 'nullable|string|max:20',
            'password'  => 'required|string|min:8|confirmed',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // SIMPAN FOTO KE STORAGE
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('profile', 'public');
        }

        // SIMPAN USER
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => Hash::make($request->password),
            'photo'     => $photoPath, // simpan path: "profile/namafile.png"
            'role'      => 'user',
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}
