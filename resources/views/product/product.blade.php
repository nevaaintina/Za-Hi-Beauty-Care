@extends('layouts.app')

@section('title', 'Produk - ZA & Hi Beauty Care')

@section('content')

@include('layouts.header')

{{-- ========================================================= --}}
{{-- STYLE TAMBAHAN (EFEK TIMBUL SAAT HOVER) --}}
{{-- ========================================================= --}}
<style>
    /* Efek timbul lembut */
    .hover-pop {
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .hover-pop:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 15px 25px rgba(0,0,0,0.12);
    }
</style>

{{-- ========================================================= --}}
{{-- HERO PRODUK (GAMBAR DARI GALLERY + FADE AUTO) --}}
{{-- ========================================================= --}}

<section class="relative w-full h-[300px] md:h-[450px] overflow-hidden scroll-reveal">

    {{-- IMAGE BACKGROUND --}}
    <div class="absolute inset-0 hero-slider">

        @forelse($galery as $index => $item)
            <img src="{{ asset('storage/' . $item->image) }}"
                 class="hero-img absolute inset-0 w-full h-full object-cover
                        transition-opacity duration-1000 ease-in-out
                        {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
        @empty
            {{-- FALLBACK JIKA GALERY KOSONG --}}
            <img src="{{ asset('images/produk.jpg') }}"
                 class="absolute inset-0 w-full h-full object-cover opacity-100 z-10">
        @endforelse

    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/40 z-20"></div>

    {{-- TEXT --}}
    <div class="absolute inset-0 z-30 flex flex-col items-center justify-center text-center">
        <h1 class="text-5xl md:text-5xl font-extrabold text-white mb-2 tracking-wider">
            ZA & Hi Beauty Care
        </h1>
        <p class="text-3xl md:text-4xl font-semibold text-white">
            Product
        </p>
    </div>

</section>

{{-- ========================================================= --}}
{{-- PRODUCT LIST --}}
{{-- ========================================================= --}}

<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #fcebeb;">
    <div class="max-w-7xl mx-auto">

        @if($products->count() == 0)
            <p class="text-center text-gray-600 text-lg">Belum ada produk.</p>
        @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($products as $p)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-pink-100 
                            hover:shadow-xl transition duration-300 fade-item hover-pop">

                    {{-- GAMBAR PRODUK --}}
                    <img 
                        src="{{ $p->image ? asset('storage/'.$p->image) : asset('images/no-image.png') }}" 
                        alt="{{ $p->name }}" 
                        class="w-full h-full object-cover"
                    >

                </div>
            @endforeach

        </div>
        @endif

    </div>
</section>

{{-- ========================================================= --}}
{{-- HERO FADE JAVASCRIPT --}}
{{-- ========================================================= --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const heroImages = document.querySelectorAll(".hero-img");

    if (heroImages.length <= 1) return;

    let index = 0;

    setInterval(() => {
        heroImages[index].classList.remove("opacity-100", "z-10");
        heroImages[index].classList.add("opacity-0", "z-0");

        index = (index + 1) % heroImages.length;

        heroImages[index].classList.remove("opacity-0", "z-0");
        heroImages[index].classList.add("opacity-100", "z-10");

    }, 4000);
});
</script>

@include('layouts.footer')

@endsection
