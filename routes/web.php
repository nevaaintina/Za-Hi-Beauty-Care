<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ==============================
// CONTROLLER AUTH
// ==============================
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// ==============================
// CONTROLLER USER
// ==============================
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\TestimoniPageController;
use App\Http\Controllers\HomepageController;

// ==============================
// CONTROLLER ADMIN
// ==============================
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DashboardController;


/*
|--------------------------------------------------------------------------
| HOMEPAGE
|--------------------------------------------------------------------------
*/
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

/*
|--------------------------------------------------------------------------
| PRODUK
|--------------------------------------------------------------------------
*/
Route::get('/product', [ProductPageController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductPageController::class, 'detail'])->name('product.detail');


/*
|--------------------------------------------------------------------------
| LAYANAN
|--------------------------------------------------------------------------
*/

Route::get('/layanan', [ServicePageController::class, 'index'])->name('layanan.index');
Route::get('/layanan/kategori/{kategori}', [ServicePageController::class, 'kategori'])->name('layanan.kategori');
Route::get('/layanan/detail/{id}', [ServicePageController::class, 'detail'])->name('layanan.detail');


/*
|--------------------------------------------------------------------------
| TESTIMONI
|--------------------------------------------------------------------------
*/
Route::get('/testimoni', [TestimoniPageController::class, 'index'])->name('testimoni.index');
Route::get('/testimoni/create', [TestimoniPageController::class, 'create'])->name('testimoni.create');
Route::post('/testimoni', [TestimoniPageController::class, 'store'])->name('testimoni.store');


/*
|--------------------------------------------------------------------------
| KONSULTASI
|--------------------------------------------------------------------------
*/
Route::get('/consultation', function () {return view('consultation.consultation');})->name('consultation');
Route::get('/chatbot', function () {return view('consultation.chatbot');})->name('chatbot');


/*
|-------------------------------------------------------------------------- 
| AUTH (REGISTER, LOGIN, LOGOUT)
|-------------------------------------------------------------------------- 
*/
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


/*
|--------------------------------------------------------------------------
| PROFIL USER (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
});


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('products', ProductController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('users', UserController::class);
        Route::resource('gallery', GalleryController::class);
    });

    Route::fallback(function () {
    return redirect('/login');
});