<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pricelist; // Pastikan ini ada
use App\Http\Controllers\TreatmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute 1: Halaman Utama (Home)
// Mengambil data Pricelist dan mengirimkannya ke homepage.blade.php
Route::get('/', function () {
    $pricelists = Pricelist::all();
    return view('homepage', compact('pricelists'));
});

// Rute 2: Halaman Pendaftaran (Register)
// Menampilkan halaman register.blade.php
Route::get('/register', function () {
    return view('register');
});

// Rute 3: Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Rute 4: Halaman Profil Pengguna
Route::get('/profile', function () {
    // Di sini nanti ada logika untuk memastikan user sudah login
    return view('profile'); 
});

// Rute GET: Menampilkan formulir pendaftaran
Route::get('/register', function () {
    return view('register');
});

// Rute POST: Menerima data yang dikirim dari formulir
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);

// Rute 5: Halaman Produk
Route::get('/product', function () {
    return view('product');
});

// Rute 6: Halaman Testimoni
Route::get('/testimoni', function () {
    return view('testimoni');
});

// Rute 7: Halaman Layanan
Route::get('/layanan', function () {
    return view('layanan');
});

// Rute yang benar (mencari facialdetail)
Route::get('/layanan/facial', function () {
    return view('facialdetail');
});

// Rute 9: Halaman Detail Body Treatment
Route::get('/layanan/body', function () {
    return view('bodydetail');
});

// Rute 10: Halaman Detail Hair Treatment
Route::get('/layanan/hair', function () {
    return view('hairdetail');
});

// Rute 11: Halaman Detail Treatment Universal
// {treatmentName} adalah parameter yang akan diambil oleh Controller
Route::get('/treatment/{treatmentName}', function ($treatmentName) {
    // Di sini nanti kita akan panggil Controller untuk ambil data treatment
    return view('treatmentdetail', compact('treatmentName')); 
});

// Route untuk Halaman Konsultasi
Route::get('/consultasi', function () {
    return view('consultation'); // Memanggil file consultation.blade.php
});

// Route untuk Halaman Chatbot
Route::get('/chatbot', function () {
    return view('chatbot');
});

// Rute untuk menampilkan formulir tambah testimoni
Route::get('/testimoni/create', function () {
    return view('create_testimoni');
});

// Route POST untuk memproses dan menyimpan data testimoni
Route::post('/testimoni', [App\Http\Controllers\ReviewController::class, 'store']);

// Rute untuk menampilkan halaman detail treatment
Route::get('/treatment/{slug}', [TreatmentController::class, 'show'])->name('treatment.show');

