<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    
    public function index()
    {
        return view('service.layanan', [ 
            'facial'      => Service::where('category', 'facial')->get(),
            'body'        => Service::where('category', 'body')->get(),
            'hair'        => Service::where('category', 'hair')->get(),
            'pricelists'  => Gallery::where('category', 'pricelist')->get(),
            'asetFacial'  => Gallery::where('category', 'aset')->where('description', 'facial')->first(),
            'asetBody'    => Gallery::where('category', 'aset')->where('description', 'body')->first(),
            'asetHair'    => Gallery::where('category', 'aset')->where('description', 'hair')->first(),
            'banner'      => Gallery::where('category', 'aset')->where('description', 'banner')->get(),
        ]);
    }

    public function kategori(Request $request, $kategori)
    {
        // Validasi kategori
        $allowed = ['facial', 'body', 'hair'];
        if (!in_array($kategori, $allowed)) {
            abort(404);
        }

        // Base query
        $query = Service::where('category', $kategori);

        // Jika ada search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $services = $query->get();

        return view('service.kategori', [
            'kategori' => $kategori,
            'services' => $services,
        ]);
    }

    public function detail($id)
    {
        $service = Service::findOrFail($id);

        // Ambil banner berdasarkan kategori service
        $banner = Gallery::where('category', 'aset')
            ->where('description', $service->category)
            ->first();

        return view('service.detail', [
            'service' => $service,
            'banner'  => $banner,
        ]);
    }
}
