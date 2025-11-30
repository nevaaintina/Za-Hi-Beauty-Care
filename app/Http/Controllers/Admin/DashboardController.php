<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Service;
use App\Models\Gallery; 
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. STATISTIK KESELURUHAN (Untuk Card Bagian Atas)
        $stats = [
            'users' => User::count(),
            'products' => Product::count(),
            'services' => Service::count(),
            'testimonials' => Testimonial::count(),
        ];

        // 2. DATA TERBARU (Untuk Tabel dan List di Bagian Bawah)

        // Recent Users (5 Terbaru)
        $recentUsers = User::latest()->limit(5)->get();

        // Latest Products (5 Terbaru) - FIX untuk Error: Undefined variable $latestProducts
        $latestProducts = Product::latest()->limit(5)->get();

        // Latest Gallery Items (3 Terbaru) - Diperlukan oleh view
        $latestGallery = Gallery::latest()->limit(3)->get();

        // Latest Testimonials (3 Terbaru) - Diperlukan oleh view
        // Menggunakan Testimonial model sebagai Testimonial
        $latestTestimonials = Testimonial::latest()->limit(3)->get(); 

        // 3. Melewatkan semua variabel yang dibutuhkan oleh Blade
        return view('admin.dashboard', compact(
            'stats',
            'recentUsers',
            'latestProducts',
            'latestGallery',
            'latestTestimonials'
        ));
    }
}