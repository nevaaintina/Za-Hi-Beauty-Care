@extends('layouts.app')

@section('title', ucfirst($kategori) . ' Treatment')

@section('content')

@include('layouts.header')

<style>
    body {
        background-color: #fcebeb;
    }

    /* Scroll Reveal */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.7s ease-out;
    }
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* Hover timbul */
    .treatment-card {
        transition: 0.3s ease;
    }
    .treatment-card:hover {
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.18);
    }

    /* Nama service di atas foto */
    .service-name {
        text-align: center;
        display: block;
        font-size: 22px;
        font-weight: 700;
        color: #9e044d;
        margin-bottom: 10px;
        padding-top: 10px;
    }

    /* === BUTTON BACK POP-UP === */
    .back-btn {
        transition: 0.25s ease;
        display: inline-block;
    }
    .back-btn:hover {
        transform: scale(1.20) translateX(-4px);
        text-shadow: 0 4px 12px rgba(0,0,0,0.25);
        color: #b30047 !important;
    }
</style>

<section class="py-10 px-6">

    {{-- Tombol Back --}}
    <a href="/layanan"
       class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6
       px-4 py-2 rounded-full shadow-md bg-white hover:shadow-xl transition transform hover:scale-105">
        <i class="fas fa-arrow-left fa-lg mr-2"></i> Back
    </a>

    <h1 class="text-pink-800 text-4xl font-bold text-center mt-6 reveal">
        {{ strtoupper($kategori) }} TREATMENT
    </h1>

    {{-- SEARCH BAR --}}
    <div class="flex justify-center my-8 reveal">
        <form method="GET" class="w-full md:w-1/2 flex">
            <input type="text" name="search"
                value="{{ request('search') }}"
                placeholder="Cari treatment..."
                class="w-full px-5 py-3 rounded-l-2xl border border-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

            <button class="px-6 bg-pink-500 text-white font-bold rounded-r-2xl hover:bg-pink-600">
                Search
            </button>
        </form>
    </div>

    @if(request('search'))
        <p class="text-center text-pink-700 font-semibold mb-6 reveal">
            Hasil pencarian untuk: "<span class="font-bold">{{ request('search') }}</span>"
        </p>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

        @forelse($services as $srv)
        <div class="reveal mx-auto w-[75%]">

            {{-- NAMA SERVICE --}}
            <span class="service-name">
                {{ strtoupper($srv->name) }}
            </span>

            <a href="{{ route('layanan.detail', $srv->id) }}"
                class="block bg-white rounded-3xl shadow-xl overflow-hidden treatment-card border border-pink-200">

                <img src="{{ asset('storage/' . $srv->image) }}"
                    class="w-full h-[360px] object-cover object-center rounded-3xl">
            </a>

        </div>

        @empty
        <p class="text-center text-gray-600 col-span-2 reveal">
            Tidak ada treatment ditemukan.
        </p>
        @endforelse

    </div>

    {{-- Tombol WA --}}
    <div class="text-center mt-14 reveal">
        <a href="https://wa.me/6281213081202"
            class="py-3 px-10 bg-pink-500 text-white font-bold rounded-full shadow-lg hover:scale-105 transition">
            Booking Via Whatsapp
        </a>
    </div>

</section>

<script>
    const reveals = document.querySelectorAll(".reveal");

    function revealOnScroll() {
        let windowHeight = window.innerHeight;
        reveals.forEach(el => {
            if (el.getBoundingClientRect().top < windowHeight - 50) {
                el.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", revealOnScroll);
    window.addEventListener("load", revealOnScroll);
</script>

@endsection
