@extends('layouts.app')

@section('title', 'Testimoni - ZA & Hi Beauty Care')

<style>
    /* Style kustom untuk warna rating bintang */
    .rating-star {
        color: #ffc107; /* Warna kuning emas */
    }
</style>

@section('content')

{{-- 
    CATATAN: Header dan Footer dipanggil secara eksplisit di sini.
    Hapus baris include ini jika Anda sudah memanggilnya di app.blade.php.
--}}
@include('layouts.header')

<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-4xl mx-auto text-center">
        
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-2">Apasi Kata Sahabat Za&Hi</h1>
        <p class="text-xl sm:text-2xl font-semibold text-gray-600 mb-12">Setelah Treatment di Za&Hi Beauty Care ???</p>

        <div class="space-y-12">

            <div class="flex flex-col md:flex-row items-center md:items-start p-6 rounded-lg shadow-lg" style="background-color: #E195AB;">
                
                <div class="flex flex-col items-center flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img src="{{ asset('images/testi-1-before.jpg') }}" alt="Before After 1" class="w-full max-w-xs md:w-36 h-auto rounded-lg shadow-md mb-2">
                    <div class="flex space-x-2 text-sm font-semibold">
                        <span class="text-gray-600">Before</span>
                        <span class="text-gray-800">|</span>
                        <span class="text-gray-600">After</span>
                    </div>
                </div>

                <div class="text-left w-full">
                    <p class="text-gray-700 leading-relaxed mb-3">Ownernya ramah, pelayanannya bagus, tempatnya nyaman bgt. Pokoknya gk nyesel facial disini bikin ketagihan... Alhamdulillah ownernya kenal, anaknya temen sekelas sama anak ku di zivicena...</p>
                    <div class="flex space-x-1 rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start p-6 rounded-lg shadow-lg" style="background-color: #E195AB;">
                
                <div class="flex flex-col items-center flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img src="{{ asset('images/testi-2-before.jpg') }}" alt="Before After 2" class="w-full max-w-xs md:w-36 h-auto rounded-lg shadow-md mb-2">
                    <div class="flex space-x-2 text-sm font-semibold">
                        <span class="text-gray-600">Before</span>
                        <span class="text-gray-800">|</span>
                        <span class="text-gray-600">After</span>
                    </div>
                </div>

                <div class="text-left w-full">
                    <p class="text-gray-700 leading-relaxed mb-3">Recommended pokoknya, InshaAllah bakal balik lagi. Tempatnya nyaman & aman apalagi buat yang berhijab, free konsultasi lgsg sm ownernya, mba nya juga ramah & sabar... Singa bisa nambah kegantengannya ya! Sukses trus buat Zahi.</p>
                    <div class="flex space-x-1 rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start p-6 rounded-lg shadow-lg" style="background-color: #E195AB;">
                
                <div class="flex flex-col items-center flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img src="{{ asset('images/testi-3-before.jpg') }}" alt="Before After 3" class="w-full max-w-xs md:w-36 h-auto rounded-lg shadow-md mb-2">
                    <div class="flex space-x-2 text-sm font-semibold">
                        <span class="text-gray-600">Before</span>
                        <span class="text-gray-800">|</span>
                        <span class="text-gray-600">After</span>
                    </div>
                </div>

                <div class="text-left w-full">
                    <p class="text-gray-700 leading-relaxed mb-3">Salon khusus wanita di area Bekasi Utara. Pelayanan lengkap... bisa smoothing, Bisa Facial, Bisa make up. Bagus dan nyaman. Recommended banget. Thanks buat bu Owner (Dea Rizal), teliti banget nanganin rambut. Saya bener2 oke... Top lah pokoknya.</p>
                    <div class="flex space-x-1 rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('layouts.footer')
@endsection