@extends('layouts.app')

@section('title', 'Profil Saya - ZA & Hi')

@section('content')

@include('layouts.header')

<section class="min-h-screen pt-10 pb-20 px-6" style="background-color: #FFE2E2;">
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl p-10 relative">

        {{-- TOMBOL KEMBALI – KIRI ATAS --}}
        <a href="/"
           class="absolute top-6 left-6 px-4 py-2 rounded-full font-semibold 
                  bg-[#E195AB] text-white shadow-lg hover:bg-[#d47a94] 
                  hover:scale-105 transition duration-200">
            ← Back
        </a>

        {{-- Judul --}}
        <h2 class="text-xl font-bold mb-10 text-center text-gray-800">Akun Saya</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            {{-- ================================ --}}
            {{-- KOLOM KIRI – FOTO & INFORMASI USER --}}
            {{-- ================================ --}}
            <div class="col-span-2 flex flex-col items-center">

                {{-- Foto Profil --}}
                <img 
                    src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.jpg') }}"
                    class="w-40 h-40 rounded-full object-cover shadow-md mb-6 bg-gray-200"
                    alt="Foto Profil">

                {{-- Nama --}}
                <div class="w-full flex justify-center mb-4">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-semibold rounded-full shadow text-center w-3/4">
                        {{ $user->name }}
                    </div>
                </div>

                {{-- Email --}}
                <div class="w-full flex justify-center">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-semibold rounded-full shadow text-center w-3/4">
                        {{ $user->email }}
                    </div>
                </div>

                {{-- No HP --}}
                <div class="w-full flex justify-center mt-4">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 rounded-full shadow text-center w-3/4">
                        {{ $user->phone }}
                    </div>
                </div>

            </div>

            {{-- ================================ --}}
            {{-- KOLOM KANAN – MENU --}}
            {{-- ================================ --}}
            <div class="flex flex-col justify-start items-center w-full">

                <a href="/profil/edit" 
                   class="w-full bg-[#E195AB] py-3 rounded-xl shadow text-center font-semibold mb-4 
                          hover:bg-[#d47a94] transition flex items-center justify-center space-x-2 text-white">
                    <i class="fas fa-user-edit"></i> <span>Edit Profil</span>
                </a>

                <a href="/testimoni" 
                   class="w-full bg-[#E195AB] py-3 rounded-xl shadow text-center font-semibold mb-4 
                          hover:bg-[#d47a94] transition flex items-center justify-center space-x-2 text-white">
                    <i class="fas fa-comment"></i> <span>Testimoni</span>
                </a>

                {{-- Logo --}}
                <div class="mt-10 opacity-70">
                    <img src="{{ asset('images/logo.png') }}" class="w-32" alt="ZA & Hi">
                </div>

            </div>
        </div>

    </div>
</section>

@include('layouts.footer')

@endsection
