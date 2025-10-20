@extends('layouts.app')

@section('title', 'Detail Treatment - ZA & Hi')

<style>
    /* Style kustom untuk Hero Detail (di sini kita gunakan background-image dinamis) */
    .hero-detail-bg {
        /* Placeholder dinamis, nanti diisi dari Controller/Database */
        background-image: url('{{ asset('images/treatment-hero-placeholder.jpg') }}'); 
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        background-color: #ffe4e6; 
    }
</style>

@section('content')

@include('layouts.header') 

<section class="py-24 px-4 sm:px-6 lg:px-8 hero-detail-bg bg-opacity-70">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white tracking-wider drop-shadow-md" 
            style="color: #6a4055;">
            HYDRA FACIAL
        </h1>
        
    </div>
</section>

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-4xl mx-auto">
        
        <a href="/layanan/facial" class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6">
            <i class="fas fa-arrow-left fa-lg mr-2"></i>
        </a>

        <div class="p-8 rounded-xl shadow-2xl" style="background-color: #E195AB;"> 
            
            <div class="w-full flex justify-center mb-8">
                <img src="{{ asset('images/hydra-facial-main.jpg') }}" alt="Hydra Facial Treatment" class="w-full max-w-xl rounded-lg shadow-xl border-4 border-white">
            </div>

            <div class="bg-white p-6 rounded-lg shadow-inner">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">MANFAAT</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Hydra facial adalah gabungan vacum dan serum yang menyedot dan membersihkan kulit mati, komedo, sekaligus menutrisi kulit dengan cairan nutrisi yang berfungsi untuk:
                </p>
                
                <ul class="list-disc list-inside space-y-1 text-gray-700 ml-4">
                    <li>Mengurangi keriput dan garis halus</li>
                    <li>Menghaluskan kulit</li>
                    <li>Membuat kulit nampak cerah</li>
                    <li>Meregenerasi sel kulit</li>
                    <li>Memperbaiki tekstur, warna dan penampilan kulit secara keseluruhan</li>
                </ul>
                
                <p class="mt-6 text-gray-600 font-semibold">
                    Cocok untuk wajah kering, *oily* tanpa jerawat parah dan pori-pori besar.
                </p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="https://wa.me/yourphonenumber" target="_blank" class="inline-flex items-center py-3 px-8 rounded-full shadow-xl transition duration-300 transform hover:scale-105" style="background-color: #E195AB;">
                <i class="fab fa-whatsapp text-xl text-white mr-3"></i>
                <span class="font-bold text-white">Booking Via Whatsapp</span>
            </a>
        </div>
        
    </div>
</section>

@include('layouts.footer')
@endsection