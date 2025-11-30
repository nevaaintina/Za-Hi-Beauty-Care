<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index()
    {
        // Ambil user login (bisa null)
        $user = Auth::user();

        // Ambil semua gallery berdasarkan kategori yang dibutuhkan
        $galleries = Gallery::whereIn('category', [
            'promo',
            'salon',
            'certificate',
            'aset'
        ])->get();

        // ===========================
        //  KATEGORI GALERI
        // ===========================
        
        // PROMO — category = promo
        $promo = $galleries
            ->where('category', 'promo')
            ->values();

        // GALERI SALON — category = salon
        $salon = $galleries
            ->where('category', 'salon')
            ->values();

        // SERTIFIKAT — category = certificate
        $certificate = $galleries
            ->where('category', 'certificate')
            ->values();

        // BANNER — category = aset + description = banner
        $banner = $galleries
            ->where('category', 'aset')
            ->where('description', 'banner')
            ->values();

        // ===========================
        //  FAVORITE SERVICES
        // ===========================
        // Ambil 3 layanan saja
        $services = Service::limit(3)->get();

        // ===========================
        //  RETURN KE VIEW
        // ===========================
        return view('homepage', [
            'user'        => $user,
            'services'    => $services,
            'promo'       => $promo,
            'salon'       => $salon,
            'certificate' => $certificate,
            'banner'      => $banner
        ]);
    }
}
