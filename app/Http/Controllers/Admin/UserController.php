<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /** Tampil semua data user + fitur search */
    public function index(Request $request)
    {
        $search = $request->search;

        $items = User::when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                      ->orWhere('email', 'like', "%$search%")
                      ->orWhere('phone', 'like', "%$search%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString(); // biar paginasi tetap bawa keyword search

        return view('admin.users.index', compact('items'));
    }

    /** Form tambah user */
    public function create()
    {
        return view('admin.users.create', ['user' => new User()]);
    }

    /** Simpan user baru */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'nullable|string|max:20',
            'password' => 'required|string|min:8',
            'role'     => 'required|in:admin,user',
            'photo'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload Foto
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('profile', 'public');
        }

        // Hash password
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan.');
    }

    /** Form edit user */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /** 🔄 Update data user */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'phone'    => 'nullable|string|max:20',
            'password' => 'nullable|string|min:8',
            'role'     => 'required|in:admin,user',
            'photo'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update password kalau diisi
        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        // Upload foto baru
        if ($request->hasFile('photo')) {
            // Hapus foto lama kalau ada
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            // Simpan foto baru
            $validated['photo'] = $request->file('photo')->store('profile', 'public');
        }

        $user->update($validated);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui.');
    }

    /** Hapus user */
    public function destroy(User $user)
    {
        // Hapus foto storage juga
        if ($user->photo && Storage::disk('public')->exists($user->photo)) {
            Storage::disk('public')->delete($user->photo);
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
    }
}
