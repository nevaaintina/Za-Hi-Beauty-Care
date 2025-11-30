<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /** Tampilkan profil user */
    public function index()
    {
        $user = Auth::user();
        return view('profil.index', compact('user'));
    }

    /** Form edit profil */
    public function edit()
    {
        return view('profil.edit', ['user' => auth()->user()]);
    }

    /** Update profil */
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Foto Baru
        if ($request->hasFile('photo')) {

            // Hapus foto lama kalau ada
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            // Simpan foto baru
            $path = $request->file('photo')->store('profile', 'public');
            $user->photo = $path;
        }

        // Update data lainnya
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/profil')->with('success', 'Profil berhasil diperbarui!');

    }
}
