@extends('layouts.app')

@section('title', 'Edit Profil - ZA & HI')

@section('content')

@include('layouts.header')

<section class="min-h-screen pt-10 pb-20 px-6" style="background-color: #FFE2E2;">
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-10 relative">

        {{-- Tombol Kembali --}}
        <a href="/profil"
           class="absolute top-6 left-6 px-4 py-2 rounded-full font-semibold 
                  bg-[#E195AB] text-white shadow-lg hover:bg-[#d47a94] 
                  hover:scale-105 transition duration-200">
            ← Back
        </a>

        <h2 class="text-xl font-bold mb-10 text-center text-gray-800">Edit Profil</h2>

        {{-- Form Edit Profil --}}
        <form action="{{ route('profil.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- FOTO PROFIL --}}
            <div class="flex justify-center flex-col items-center mb-8">

                <img 
                    id="previewImage"
                    src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.png') }}"
                    class="w-40 h-40 rounded-full object-cover shadow-md mb-4 bg-gray-200"
                    alt="Foto Profil">

                <label class="block">
                    <span class="text-gray-700 font-semibold">Ubah Foto</span>
                    <input type="file" name="photo" accept="image/*"
                           class="block w-full mt-2 text-sm
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-[#E195AB] file:text-white
                                  hover:file:bg-[#d47a94]"
                           onchange="loadPreview(event)">
                </label>

                {{-- Preview Foto --}}
                <script>
                    function loadPreview(e) {
                        const output = document.getElementById('previewImage');
                        output.src = URL.createObjectURL(e.target.files[0]);
                    }
                </script>

                @error('photo')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- INPUT NAMA --}}
            <div class="mb-6">
                <label class="block font-semibold mb-2">Nama</label>
                <input type="text" name="name" 
                       value="{{ old('name', $user->name) }}"
                       class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-[#E195AB]">
                @error('name')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- INPUT EMAIL --}}
            <div class="mb-6">
                <label class="block font-semibold mb-2">Email</label>
                <input type="email" name="email" 
                       value="{{ old('email', $user->email) }}"
                       class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-[#E195AB]">
                @error('email')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- INPUT NO HP --}}
            <div class="mb-6">
                <label class="block font-semibold mb-2">No HP</label>
                <input type="text" name="phone"
                       value="{{ old('phone', $user->phone) }}"
                       class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-[#E195AB]">
                @error('phone')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- BUTTON SIMPAN --}}
            <button type="submit" 
                    class="w-full bg-[#E195AB] text-white py-3 rounded-xl font-semibold text-center
                           hover:bg-[#d47a94] transition shadow-lg active:scale-95">
                Simpan Perubahan
            </button>
        </form>

    </div>
</section>

@include('layouts.footer')

@endsection
