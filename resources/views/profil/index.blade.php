@extends('layouts.app')

@section('title', 'Profil Saya - ZA & Hi')

@section('content')

@include('layouts.header')

<section class="min-h-screen pt-14 pb-24 px-6 flex justify-center items-start"
         style="background: linear-gradient(135deg, #FFE6EA, #FFD6DF);">
    
    <div class="max-w-5xl w-full bg-white rounded-3xl shadow-xl p-10 relative overflow-hidden"
         style="animation: fadeIn .6s ease;">
        
        {{-- BACK BUTTON --}}
        <a href="/"
           class="absolute top-6 left-6 px-4 py-2 rounded-full font-semibold 
                  bg-[#E195AB] text-white shadow-lg hover:bg-[#d47a94] hover:scale-110 
                  transition duration-200 flex items-center gap-2">
            <i class="fas fa-arrow-left"></i> Back
        </a>

        {{-- Judul --}}
       <h2 class="text-2xl font-extrabold mb-12 text-center tracking-wide"
    style="color: #C06C84;">
    Akun Saya
</h2>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            {{-- ================================ --}}
            {{-- KOLOM KIRI – FOTO + INFO USER --}}
            {{-- ================================ --}}
            <div class="col-span-2 flex flex-col items-center">

                {{-- Foto Profil --}}
                <div class="relative group">
                    <img 
                        src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.jpg') }}"
                        class="w-44 h-44 rounded-full object-cover shadow-xl border-4 border-pink-200 transition 
                               group-hover:scale-105 group-hover:shadow-2xl"
                        alt="Foto Profil">

                    {{-- Glow effect --}}
                    <div class="absolute inset-0 rounded-full bg-pink-200 opacity-0 blur-xl group-hover:opacity-40 transition"></div>
                </div>

                {{-- Nama --}}
                <div class="w-full flex justify-center mt-8">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-bold rounded-full shadow-md 
                                text-center w-3/4 hover:shadow-lg hover:scale-105 transition">
                        {{ $user->name }}
                    </div>
                </div>

                {{-- Email --}}
                <div class="w-full flex justify-center mt-4">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-semibold rounded-full shadow 
                                text-center w-3/4 hover:shadow-lg hover:scale-105 transition">
                        {{ $user->email }}
                    </div>
                </div>

                {{-- No HP --}}
                <div class="w-full flex justify-center mt-4">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-semibold rounded-full shadow 
                                text-center w-3/4 hover:shadow-lg hover:scale-105 transition">
                        {{ $user->phone }}
                    </div>
                </div>

            </div>

            {{-- ================================ --}}
            {{-- KOLOM KANAN – MENU --}}
            {{-- ================================ --}}
            <div class="flex flex-col justify-start items-center w-full space-y-4">

                {{-- Edit Profil --}}
                <a href="/profil/edit" 
                   class="w-full bg-[#E195AB] py-3 rounded-xl shadow text-center font-semibold 
                          hover:bg-[#d47a94] transition hover:scale-105 flex items-center justify-center gap-2 text-white">
                    <i class="fas fa-user-edit"></i> Edit Profil
                </a>

                {{-- Testimoni --}}
                <a href="/testimoni" 
                   class="w-full bg-[#E195AB] py-3 rounded-xl shadow text-center font-semibold 
                          hover:bg-[#d47a94] transition hover:scale-105 flex items-center justify-center gap-2 text-white">
                    <i class="fas fa-comment"></i> Testimoni
                </a>

                {{-- Logo --}}
                <div class="mt-12 opacity-80 hover:opacity-100 transition hover:scale-105">
                    <img src="{{ asset('images/logo.png') }}" class="w-32" alt="ZA & Hi">
                </div>

            </div>

        </div>

    </div>
</section>

@include('layouts.footer')

<style>
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
</style>

@endsection
