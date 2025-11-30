@extends('layouts.app')

@section('title', 'Testimoni - ZA & Hi Beauty Care')

@section('content')

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ================= CARD TIMBUL ================= */
.testi-card {
    transition: all .4s ease;
    box-shadow: 0 10px 20px rgba(0,0,0,.2);
    border-radius: 20px;
}
.testi-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 25px 45px rgba(0,0,0,.45);
}

/* ================= BINTANG ================= */
.rating-star i {
    color:#d1d5db;
    font-size:20px;
    transition:.3s;
}
.testi-card:hover .rating-star i.active {
    color:#FFD700;
    animation: cring 0.5s ease;
    text-shadow:0 0 8px #FFD700;
}

@keyframes cring {
    0%{transform:scale(.5) rotate(0deg)}
    60%{transform:scale(1.6) rotate(15deg)}
    100%{transform:scale(1) rotate(0deg)}
}

/* ================= IMAGE HOVER ================= */
.testi-card img {
    transition:.4s;
}
.testi-card:hover img {
    transform: scale(1.08);
}
</style>

@include('layouts.header')

<section class="py-16 px-4" style="background:#FFE2E2">
<div class="max-w-4xl mx-auto text-center">

    <h1 class="text-3xl font-bold mb-1">Apa Kata Sahabat Za&Hi</h1>
    <p class="text-xl mb-10">Setelah Treatment di Za&Hi Beauty Care?</p>

    <a href="{{ route('testimoni.create') }}"
       class="inline-flex items-center mb-10 py-3 px-8 rounded-full text-white font-bold shadow hover:scale-105 duration-300"
       style="background:#E195AB">
        <i class="fas fa-plus mr-2"></i> Tambah Testimoni
    </a>

    <div class="space-y-12">

        @foreach($testimonials as $testi)

        <div class="testi-card p-6 flex flex-col md:flex-row gap-6 bg-[#E195AB]">

            <!-- GAMBAR -->
            <div class="flex flex-wrap gap-3 justify-center">
                @if(!empty($testi->images) && count($testi->images) > 0)
                    @foreach($testi->images as $img)
                        <img src="{{ asset('storage/'.$img) }}"
                             class="w-32 h-32 object-cover rounded-xl shadow">
                    @endforeach
                @else
                    <div class="w-32 h-32 bg-gray-200 flex items-center justify-center rounded-xl text-sm text-gray-500">
                        No Image
                    </div>
                @endif
            </div>

            <!-- ISI -->
            <div class="text-left w-full">

                <!-- LAYANAN -->
                <p class="font-bold text-lg text-white mb-2">
                    {{ optional($testi->service)->name ?? 'Layanan tidak ditemukan' }}
                </p>

                <!-- PESAN -->
                <p class="mb-3 text-gray-100 bg-black bg-opacity-10 p-3 rounded-lg">
                    {{ $testi->message }}
                </p>

                <!-- BINTANG -->
                <div class="rating-star mb-2">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fa-solid fa-star {{ $i <= $testi->rating ? 'active' : '' }}"></i>
                    @endfor
                </div>

                <!-- USER -->
                <p class="text-sm font-semibold text-white">
                    — {{ optional($testi->user)->name ?? 'Guest User' }}
                </p>

            </div>

        </div>

        @endforeach

    </div>

</div>
</section>

@include('layouts.footer')
@endsection
