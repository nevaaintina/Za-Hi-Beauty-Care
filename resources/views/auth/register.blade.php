@extends('layouts.app')

@section('title', 'Daftar Akun Baru - ZA & Hi')

@section('content')

@include('layouts.header')

<section class="min-h-screen flex items-center justify-center py-5 bg-white"
    style="background-image: url('{{ asset('images/watercolor-bg.png') }}'); background-size: cover; background-position: center;">

    <div
        class="w-full max-w-lg p-8 space-y-6 bg-white bg-opacity-70 backdrop-blur-md
               rounded-2xl shadow-2xl border-4 border-[#F5A9B8]
               transition duration-500 hover:scale-[1.02]">

        {{-- FORM START --}}
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div class="text-center">
                {{-- FOTO PROFIL --}}
                <label for="photo"
                    class="group cursor-pointer mx-auto w-32 h-32 rounded-full bg-[#F8D1DB] border-4 border-[#E195AB]
                           flex items-center justify-center shadow-lg hover:shadow-2xl transition relative overflow-hidden">

                    <i class="fas fa-plus fa-3x text-[#E195AB] transition group-hover:scale-110"
                       id="profile-icon"></i>

                    <img id="profile-preview"
                         src="#"
                         class="hidden w-full h-full object-cover rounded-full transition duration-500">

                    <span
                        class="absolute bottom-0 text-xs bg-black bg-opacity-40 text-white px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">
                        Ubah Foto
                    </span>
                </label>

                <input type="file" id="photo" name="photo" class="hidden" accept="image/*">

                <h2 class="mt-4 text-2xl font-bold text-gray-800 tracking-wide">
                    Daftar Akun
                </h2>
            </div>

            {{-- INPUT STYLE --}}
            @php
                $inputStyle = "w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg bg-[#F8D1DB]
                               placeholder-[#E195AB] focus:outline-none focus:ring-2
                               focus:ring-pink-400 focus:border-pink-400 transition";
            @endphp

            {{-- NAMA --}}
            <input type="text" name="name" value="{{ old('name') }}" required placeholder="Nama"
                class="{{ $inputStyle }}">
            @error('name')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- EMAIL --}}
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email"
                class="{{ $inputStyle }}">
            @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- TELEPON --}}
            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Nomor Telepon"
                class="{{ $inputStyle }}">
            @error('phone')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- PASSWORD --}}
            <div class="relative">
                <input type="password" name="password" id="password" required placeholder="Kata sandi"
                    class="{{ $inputStyle }} pr-10">
                <i class="fas fa-eye absolute right-4 top-4 cursor-pointer text-gray-500"
                   onclick="togglePassword('password', this)"></i>
            </div>
            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- KONFIRMASI PASSWORD --}}
            <div class="relative">
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    placeholder="Ulangi kata sandi"
                    class="{{ $inputStyle }} pr-10">
                <i class="fas fa-eye absolute right-4 top-4 cursor-pointer text-gray-500"
                   onclick="togglePassword('password_confirmation', this)"></i>
            </div>
            @error('password_confirmation')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <button type="submit"
                class="w-full py-3 bg-gradient-to-r from-pink-400 to-pink-600
                       text-white font-semibold rounded-lg shadow-md
                       hover:shadow-xl hover:scale-105 transition duration-300">
                Daftar
            </button>

        </form>
        {{-- FORM END --}}

        <p class="text-center text-sm text-gray-600">
            Sudah punya akun?
            <a href="{{ route('login') }}"
               class="text-pink-600 hover:text-pink-800 font-medium transition">
                Masuk di sini.
            </a>
        </p>
    </div>
</section>

{{-- SCRIPT INTERAKTIF --}}
<script>
document.getElementById('photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('profile-preview');
    const icon = document.getElementById('profile-icon');

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
        icon.classList.add('hidden');
        preview.classList.add('animate-pulse');
        setTimeout(() => preview.classList.remove('animate-pulse'), 800);
    } else {
        preview.classList.add('hidden');
        icon.classList.remove('hidden');
    }
});

function togglePassword(id, icon) {
    const input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = "password";
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>

@include('layouts.footer')

@endsection
