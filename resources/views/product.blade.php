@extends('layouts.app')

@section('title', 'Produk - ZA & Hi Beauty Care')

<style>
    /* Tambahkan style kustom untuk Hero Produk */
    .hero-product-bg {
        /* Ganti 'product-hero-bg.jpg' dengan nama file gambar latar belakang hero Anda */
        background-image: url('{{ asset('images/product-hero-bg.jpg') }}'); 
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        /* Warna overlay pink terang */
        background-color: #ffe4e6; 
    }
    
    /* Pastikan Body tidak memiliki background ganda jika header/footer dimasukkan di content */
    body {
        background-color: #f8f9fa; /* Warna latar belakang body netral */
    }
</style>

@section('content')

{{-- 
    [START] Pemanggilan Header dan Footer Secara Eksplisit
    CATATAN: Hapus baris include ini jika Anda sudah memanggilnya di app.blade.php
--}}
@include('layouts.header')

<section class="py-24 px-4 sm:px-6 lg:px-8" 
         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)), url('{{ asset('images/produk.jpg') }}'); 
                background-size: cover; 
                background-position: center;">
    
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white drop-shadow-lg mb-2 tracking-wider">
            ZA & Hi Beauty Care
        </h1>
        <p class="text-4xl md:text-5xl font-semibold text-white drop-shadow-lg">
            Product
        </p>
    </div>
</section>

<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #fcebeb;"> 
    <div class="max-w-7xl mx-auto">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/product-1.jpg') }}" alt="Skincare Acne Terbaik" class="w-full h-auto object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/product-2.jpg') }}" alt="Spot Lightening Daily Cream" class="w-full h-auto object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/product-3.jpg') }}" alt="Skin Breast Gel" class="w-full h-auto object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/product-4.jpg') }}" alt="Deep Glow BB Cream" class="w-full h-auto object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/product-5.jpg') }}" alt="Aloe Soothing Gel" class="w-full h-auto object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/product-6.jpg') }}" alt="Paket Skincare" class="w-full h-auto object-cover">
            </div>

        </div>
        
    </div>
</section>

@include('layouts.footer')
{{-- [END] Pemanggilan Header dan Footer --}}

@endsection