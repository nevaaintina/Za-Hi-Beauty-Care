<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // INDEX + SEARCH
    public function index(Request $request)
    {
        $search = $request->search;

        $items = Gallery::when($search, function ($query) use ($search) {
                $query->where('description', 'like', "%$search%")
                      ->orWhere('category', 'like', "%$search%");
            })
            ->latest()
            ->paginate(10);

        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'required|image|max:2048',
            'description' => 'nullable'
        ]);

        $path = $request->file('image')->store('galleries', 'public');

        Gallery::create([
            'category'    => $request->category,
            'image'       => $path,
            'description' => $request->description
        ]);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable'
        ]);

        $data = $request->only('category','description');

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($gallery->image);
            $data['image'] = $request->file('image')->store('galleries', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();

        return back()->with('success', 'Item galeri berhasil dihapus');
    }
}
