@extends('layouts.app')

@section('title', 'Layanan - ZA & Hi Beauty Care')

@section('content')

@include('layouts.header')

<section class="bg-[#fcebeb]">

    {{-- ======================= BANNER AUTO FADE ======================= --}}
    <div class="relative w-full h-[300px] md:h-[450px] overflow-hidden scroll-reveal">

        {{-- IMAGE LAYER --}}
        <div class="absolute inset-0">
            @forelse($banner as $index => $item)
                <img src="{{ asset('storage/' . $item->image) }}"
                     class="banner-img absolute inset-0 w-full h-full object-cover
                            transition-opacity duration-1000 ease-in-out
                            {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
            @empty
                <div class="w-full h-full flex items-center justify-center bg-pink-200">
                    <p class="text-gray-600 font-semibold">Banner belum tersedia</p>
                </div>
            @endforelse
        </div>

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/30 z-20"></div>

        {{-- TEXT --}}
        <div class="absolute inset-0 z-30 flex flex-col items-center justify-center text-center">
            <h1 class="text-5xl md:text-5xl font-bold text-white mb-4">
                ZA & Hi Beauty Care
            </h1>
            <a href="{{ route('consultation') }}"
               class="px-6 py-3 bg-pink-500 text-white font-semibold rounded-full shadow-lg hover:bg-pink-600 transition">
                Konsultasi
            </a>
        </div>

    </div>


    {{-- ======================= KATEGORI SERVICE ======================= --}}
    <div class="max-w-5xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-10 text-center p-10 rounded-3xl bg-[#fcebeb]">

        {{-- Facial --}}
        <a href="{{ route('layanan.kategori', 'facial') }}" class="block">
            <p class="font-semibold text-lg mb-3">Facial Treatment</p>
            <div class="w-full rounded-[40px] overflow-hidden shadow-lg border border-pink-300 bg-[#f8dede]">
                <img src="{{ $asetFacial? asset('storage/' . $asetFacial->image) : asset('images/default.jpg') }}"
                     class="w-full h-72 object-cover transition duration-300 hover:scale-105">
            </div>
        </a>

        {{-- Body --}}
        <a href="{{ route('layanan.kategori', 'body') }}" class="block">
            <p class="font-semibold text-lg mb-3">Body Treatment</p>
            <div class="w-full rounded-[40px] overflow-hidden shadow-lg border border-pink-300 bg-[#f8dede]">
                <img src="{{ $asetBody? asset('storage/' . $asetBody->image) : asset('images/default.jpg') }}"
                     class="w-full h-72 object-cover transition duration-300 hover:scale-105">
            </div>
        </a>

        {{-- Hair --}}
        <a href="{{ route('layanan.kategori', 'hair') }}" class="block">
            <p class="font-semibold text-lg mb-3">Hair Treatment</p>
            <div class="w-full rounded-[40px] overflow-hidden shadow-lg border border-pink-300 bg-[#f8dede]">
                <img src="{{ $asetHair? asset('storage/' . $asetHair->image) : asset('images/default.jpg') }}"
                     class="w-full h-72 object-cover transition duration-300 hover:scale-105">
            </div>
        </a>

    </div>


    {{-- ======================= BUTTON WA ======================= --}}
    <div class="text-center mt-12 mb-16">
         <a href="https://wa.me/6281213081202?text=Halo,%20saya%20ingin%20liat%20promonya" target="_blank"
                class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-xl transition hover:scale-105">
                <i class="fab fa-whatsapp text-xl mr-2"></i>
                <span class="font-bold">Booking Via Whatsapp</span>
            </a>
    </div>


    {{-- ======================= PRICELIST ======================= --}}
    <section class="py-10 bg-[#fcebeb]">
        <h2 class="text-3xl font-bold text-center mb-4">Pricelist</h2>

        

        <div class="relative max-w-5xl mx-auto flex items-center justify-center">

            {{-- Tombol kiri --}}
            <button id="btnLeft"
                class="p-3 text-gray-700 absolute left-0 z-10 bg-[#f8dede] rounded-full shadow-lg hover:bg-pink-200 transition">
                ‹
            </button>

            {{-- Scroll Container --}}
            <div id="scrollContainer"
                class="flex overflow-x-scroll no-scrollbar snap-x snap-mandatory space-x-6 p-4 pl-10 w-full">

                @foreach ($pricelists as $pic)
                <div class="flex-shrink-0 w-60 snap-center cursor-pointer transition-all duration-300 pricelist-item"
                    data-description="{{ $pic->description ?? 'Tidak ada deskripsi.' }}">

                    <div class="rounded-2xl overflow-hidden border border-pink-300 shadow bg-[#f8dede]">
                        <img src="{{ asset('storage/' . $pic->image) }}"
                            class="w-full h-auto object-contain transition duration-300">
                    </div>

                </div>
                @endforeach

            </div>

            {{-- Tombol kanan --}}
            <button id="btnRight"
                class="p-3 text-gray-700 absolute right-0 z-10 bg-[#f8dede] rounded-full shadow-lg hover:bg-pink-200 transition">
                ›
            </button>

        </div>
    </section>

</section>


{{-- ======================= SCRIPT ======================= --}}
<script>
    // ====================== PRICELIST SCROLL ======================
    const scrollContainer = document.getElementById('scrollContainer');

    document.getElementById('btnLeft').onclick = () =>
        scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });

    document.getElementById('btnRight').onclick = () =>
        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });

    const items = document.querySelectorAll(".pricelist-item");
    const descBox = document.getElementById("plDescription");

    items.forEach(item => {
        item.addEventListener("click", () => {
            items.forEach(i => i.classList.remove("scale-110", "z-20"));
            item.classList.add("scale-110", "z-20");
            item.scrollIntoView({ behavior: "smooth", inline: "center" });
            descBox.textContent = item.dataset.description;
        });
    });


    // ====================== AUTO SLIDE BANNER ======================
    document.addEventListener("DOMContentLoaded", function () {

        const images = document.querySelectorAll(".banner-img");
        if (images.length <= 1) return;

        let index = 0;

        setInterval(() => {
            images[index].classList.remove("opacity-100", "z-10");
            images[index].classList.add("opacity-0", "z-0");

            index = (index + 1) % images.length;

            images[index].classList.remove("opacity-0", "z-0");
            images[index].classList.add("opacity-100", "z-10");

        }, 4000);

    });
</script>

@include('layouts.footer')

@endsection
