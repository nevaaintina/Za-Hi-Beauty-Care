@extends('layouts.app')

@section('title', 'Masuk Akun - ZA & Hi')

@section('content')

@include('layouts.header')

<section class="min-h-screen flex items-center justify-center py-10"
    style="background-image: url('{{ asset('images/watercolor-bg.png') }}'); background-size: cover; background-position: center;">

    <div class="w-full max-w-lg p-10 space-y-6 bg-white bg-opacity-80 backdrop-blur-md
                rounded-2xl shadow-2xl border-4 border-[#F5A9B8]">

        {{-- ERROR MESSAGE --}}
        @if (session('error'))
            <p class="text-center text-red-600 font-semibold">
                {{ session('error') }}
            </p>
        @endif

        <div class="text-center mb-5">
            <h2 class="text-2xl font-bold text-gray-800 tracking-wide">
                Masuk Akun
            </h2>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            {{-- EMAIL --}}
            <div class="relative">
                <input type="email" name="email" id="email"
                       value="{{ old('email') }}" required
                       class="input-field w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg
                              bg-[#F8D1DB] text-gray-800
                              focus:ring-4 focus:ring-[#E195AB] focus:border-[#E195AB]">

                <label for="email"
                       class="floating-label absolute left-4 top-3 text-[#E195AB]
                              bg-[#F8D1DB] px-1 rounded transition-all">
                    Email
                </label>

                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- PASSWORD --}}
            <div class="relative">
                <input type="password" name="password" id="password" required
                       class="input-field w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg
                              bg-[#F8D1DB] text-gray-800
                              focus:ring-4 focus:ring-[#E195AB] focus:border-[#E195AB]">

                <label for="password"
                       class="floating-label absolute left-4 top-3 text-[#E195AB]
                              bg-[#F8D1DB] px-1 rounded transition-all">
                    Kata sandi
                </label>

                <span class="absolute right-4 top-3 cursor-pointer text-gray-600"
                      onclick="togglePassword()">
                    <i id="eyeIcon" class="fas fa-eye"></i>
                </span>

                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="w-full py-3 bg-[#E195AB] text-white font-bold rounded-lg
                           shadow-lg hover:bg-[#D18D9F] transition">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-700 pt-2">
            Belum punya akun?
            <a href="{{ route('register') }}"
               class="text-[#E195AB] hover:text-[#D18D9F] font-bold transition">
                Daftar sekarang.
            </a>
        </p>
    </div>
</section>

<script>
document.querySelectorAll('.input-field').forEach(input => {
    const label = input.nextElementSibling;

    function check() {
        if (input.value.trim() !== "") {
            label.classList.add('-top-3', 'text-xs');
        } else {
            label.classList.remove('-top-3', 'text-xs');
        }
    }

    check(); // untuk old() dari Laravel
    input.addEventListener('input', check);
    input.addEventListener('focus', () => {
        label.classList.add('-top-3', 'text-xs');
    });
    input.addEventListener('blur', check);
});

function togglePassword() {
    const password = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');

    if (password.type === "password") {
        password.type = "text";
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        password.type = "password";
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}
</script>

@include('layouts.footer')

@endsection
