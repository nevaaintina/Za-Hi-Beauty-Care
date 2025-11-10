@extends('layouts.app')

@section('title', 'Layanan - ZA & Hi Beauty Care')

<style>
    /* Style kustom untuk Hero Layanan */
    .hero-layanan-bg {
        /* Ganti dengan path gambar hero layanan Anda */
        background-image: url('{{ asset('images/layanan-hero.jpg') }}'); 
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        /* Warna overlay pink terang */
        background-color: #ffe4e6; 
    }
</style>

@section('content')

{{-- Panggil Header agar link navigasi bekerja --}}
@include('layouts.header') 

<section class="py-24 px-4 sm:px-6 lg:px-8" 
         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)), url('{{ asset('images/layanan.jpeg') }}'); 
                background-size: cover; 
                background-position: center;">
    
    <div class="max-w-7xl mx-auto text-center">
        {{-- Warna teks diubah menjadi Putih dan diberi Shadow untuk Kontras --}}
        <h1 class="text-5xl md:text-6xl font-extrabold text-white drop-shadow-lg tracking-wider mb-8"> 
            ZA & Hi Beauty Care
        </h1>
        
        <a href="/consultasi" 
           class="inline-flex items-center py-3 px-8 rounded-lg shadow-xl text-white font-bold text-lg transition duration-300 transform hover:scale-105" 
           style="background-color: #E195AB;">
            Konsultasi
        </a>
    </div>
</section>

<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-7xl mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            
            <a href="/layanan/facial" class="block cursor-pointer">
                <div class="shadow-lg hover:shadow-xl transition duration-300">
                    <p class="text-xl font-semibold text-white py-2 rounded-t-lg shadow-md" style="background-color: #E195AB;">
                        Facial Treatment
                    </p>
                    <div class="overflow-hidden rounded-b-lg">
                        {{-- Pastikan asset gambar ini ada di public/images --}}
                        <img src="{{ asset('images/layanan-facial.jpg') }}" alt="Facial Treatment" class="w-full h-80 object-cover">
                    </div>
                </div>
            </a>

            <a href="/layanan/body" class="block cursor-pointer">
                <div class="shadow-lg hover:shadow-xl transition duration-300">
                    <p class="text-xl font-semibold text-white py-2 rounded-t-lg shadow-md" style="background-color: #E195AB;">
                        Body Treatment
                    </p>
                    <div class="overflow-hidden rounded-b-lg">
                        {{-- Pastikan asset gambar ini ada di public/images --}}
                        <img src="{{ asset('images/layanan-body.jpg') }}" alt="Body Treatment" class="w-full h-80 object-cover">
                    </div>
                </div>
            </a>

            <a href="/layanan/hair" class="block cursor-pointer">
                <div class="shadow-lg hover:shadow-xl transition duration-300">
                    <p class="text-xl font-semibold text-white py-2 rounded-t-lg shadow-md" style="background-color: #E195AB;">
                        Hair Treatment
                    </p>
                    <div class="overflow-hidden rounded-b-lg">
                        {{-- Pastikan asset gambar ini ada di public/images --}}
                        <img src="{{ asset('images/layanan-hair.jpg') }}" alt="Hair Treatment" class="w-full h-80 object-cover">
                    </div>
                </div>
            </a>

        </div>

        <div class="text-center mt-12 mb-16">
            <a href="https://wa.me/yourphonenumber" target="_blank" class="inline-flex items-center py-3 px-8 rounded-full shadow-xl transition duration-300 transform hover:scale-105" style="background-color: #E195AB;">
                <i class="fab fa-whatsapp text-xl text-white mr-3"></i>
                <span class="font-bold text-white">Booking Via Whatsapp</span>
            </a>
        </div>
        
        <hr class="my-16 border-t border-pink-300">
        
        </div>
</section>

<hr class="my-16 border-t border-pink-300">
        
<div class="text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Pricelist</h2>
    
    {{-- Kontainer Pricelist (DIPERBAIKI AGAR SIMETRIS DI TENGAH) --}}
    {{-- max-w-5xl dan mx-auto adalah kunci untuk pemusatan horizontal --}}
    <div class="relative max-w-5xl mx-auto flex items-center">
        
        {{-- Tombol Kiri --}}
        {{-- Diberi z-10 agar selalu terlihat di atas Pricelist --}}
        <button class="p-2 text-gray-700 absolute left-0 z-10 bg-white rounded-full shadow-lg">
            <i class="fas fa-chevron-left"></i>
        </button>

        {{-- Kontainer Scroll Pricelist (w-full agar mengisi penuh max-w-5xl) --}}
        <div class="flex overflow-x-scroll snap-x snap-mandatory space-x-6 p-4 no-scrollbar w-full">
            
            {{-- Item Pricelist 1 --}}
            <div class="flex-shrink-0 w-80 snap-center"> {{-- w-80 memberikan lebar yang konsisten pada setiap item --}}
                <img src="{{ asset('images/pricelist-1.jpg') }}" alt="Pricelist 1" class="w-full h-full object-contain rounded-lg shadow-md border border-pink-200">
            </div>
            
            {{-- Item Pricelist 2 --}}
            <div class="flex-shrink-0 w-80 snap-center">
                <img src="{{ asset('images/pricelist-2.jpg') }}" alt="Pricelist 2" class="w-full h-full object-contain rounded-lg shadow-md border border-pink-200">
            </div>
            
            {{-- Item Pricelist 3 --}}
            <div class="flex-shrink-0 w-80 snap-center">
                <img src="{{ asset('images/pricelist-3.jpg') }}" alt="Pricelist 3" class="w-full h-full object-contain rounded-lg shadow-md border border-pink-200">
            </div>

        </div>
        
        {{-- Tombol Kanan --}}
        <button class="p-2 text-gray-700 absolute right-0 z-10 bg-white rounded-full shadow-lg">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>
</section>

@include('layouts.footer')
@endsection