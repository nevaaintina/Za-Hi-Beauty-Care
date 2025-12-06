<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Gallery;

class ProductPageController extends Controller
{

    public function index()
    {
        return view('product.product', [
            'products' => Product::latest()->get(),

            // KHUSUS HERO BANNER PRODUK DARI GALERY
            'galery'   => Gallery::where('category', 'aset')
                                ->where('description', 'banner')
                                ->get()
        ]);
    }

    public function detail($id)
    {
        return view('product.product-detail', [
            'product'  => Product::findOrFail($id),

            // PRODUK LAINNYA
            'products' => Product::where('id', '!=', $id)->latest()->get(),

            // BANNER JUGA BISA DIPAKAI DI DETAIL (OPSIONAL)
            'galery'   => Gallery::where('category', 'aset')
                                ->where('description', 'banner')
                                ->get()
        ]);
    }
}
