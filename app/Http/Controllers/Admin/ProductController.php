<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource + SEARCH
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $items = Product::when($search, function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->latest()
                ->paginate(15)
                ->withQueryString(); // agar pagination tetap membawa keyword search

        return view('admin.products.index', compact('items', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {

            // Nama asli + anti bentrok (pakai timestamp)
            $originalName = time() . '_' . $request->file('image')->getClientOriginalName();

            $data['image'] = $request->file('image')->storeAs(
                'products',
                $originalName,
                'public'
            );
        }

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', ['item' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {

            // Hapus gambar lama
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            // Nama file baru aman
            $originalName = time() . '_' . $request->file('image')->getClientOriginalName();

            $data['image'] = $request->file('image')->storeAs(
                'products',
                $originalName,
                'public'
            );
        }

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted.');
    }
}
