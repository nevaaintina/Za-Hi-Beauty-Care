@extends('layouts.app')

@section('title', 'Profil Pengguna - ZA & Hi')

@section('content')

@include('layouts.header')

<section class="min-h-screen py-10 px-4 sm:px-6 lg:px-8" 
    style="background-color: #ffe4e6;"> {{-- Background Pink Muda --}}
    
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8">
        
        <div class="w-full md:w-2/3 bg-white p-8 rounded-xl shadow-lg border border-[#E195AB] flex flex-col items-center"
             style="background-color: #fddde6;"> {{-- Background Pink Sangat Muda --}}

            <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-[#E195AB] shadow-2xl mb-8">
                {{-- Ganti dengan path foto profil dinamis --}}
                <img src="{{ asset('images/user-profile.jpg') }}" alt="Foto Profil Pengguna" class="w-full h-full object-cover">
            </div>

            <div class="w-full text-center py-4 px-6 mb-4 rounded-full border-2 border-[#E195AB] shadow-md"
                 style="background-color: #f7cfd8;"> {{-- Pink lebih terang --}}
                <p class="text-xl font-semibold text-gray-800">Neva Aintina Yuhana Putri</p>
            </div>

            <div class="w-full text-center py-4 px-6 rounded-full border-2 border-[#E195AB] shadow-md"
                 style="background-color: #f7cfd8;"> {{-- Pink lebih terang --}}
                <p class="text-lg text-gray-700">neva12345@gmail.com</p>
            </div>
            
        </div>

        <div class="w-full md:w-1/3 p-4 space-y-4">
            
            <a href="/profile/edit" class="flex items-center justify-center p-4 rounded-lg shadow-lg text-white font-semibold transition duration-300 hover:shadow-xl"
               style="background-color: #E195AB;">
                <i class="fas fa-user-edit fa-lg mr-3"></i> Edit Profil
            </a>

            <a href="/rating" class="flex items-center justify-center p-4 rounded-lg shadow-lg text-white font-semibold transition duration-300 hover:shadow-xl"
               style="background-color: #E195AB;">
                <i class="fas fa-star fa-lg mr-3"></i> Beri Rating
            </a>

            <a href="/testimoni/add" class="flex items-center justify-center p-4 rounded-lg shadow-lg text-white font-semibold transition duration-300 hover:shadow-xl"
               style="background-color: #E195AB;">
                <i class="fas fa-comment-alt fa-lg mr-3"></i> Testimoni
            </a>
            
            <div class="mt-10 pt-6 text-center">
                <img src="{{ asset('images/logo.png') }}" alt="ZA & Hi Beauty Care Logo" class="mx-auto w-32 filter brightness-0 invert" 
                     style="filter: sepia(100%) saturate(2000%) hue-rotate(330deg) brightness(1.5);">
            </div>
        </div>
        
    </div>
</section>

@include('layouts.footer')
@endsection