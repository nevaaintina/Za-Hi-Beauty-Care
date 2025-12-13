@extends('layouts.app')

@section('title', $service->name . ' - ZA & Hi Beauty Care')

@section('content')

@include('layouts.header')

<style>
    /* Efek pop-up untuk tombol kembali */
    .back-btn {
        transition: 0.3s ease;
        display: inline-block;
    }
    .back-btn:hover {
        transform: scale(1.18) translateX(-3px);
        text-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    }
</style>

{{-- ====== BANNER FULL WIDTH ====== --}}
@php
    // Ambil banner sesuai kategori
    $banner = \App\Models\Gallery::where('category', 'aset')
                ->where('description', $service->category)
                ->first();
@endphp

<section class="relative w-full h-[420px] overflow-hidden flex items-center justify-center">

    {{-- BACKGROUND --}}
   <div class="absolute inset-0">
    <img src="{{ asset('storage/' . ($banner->image ?? $service->image)) }}"
         class="w-full h-full object-cover scale-110">

    <!-- Shadow Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>
</div>


    {{-- TITLE DI TENGAH --}}
    <h1 class="relative z-10 text-5xl font-extrabold uppercase tracking-wide text-center"
    style="
        color: #E195AB;
        text-shadow: 0 4px 12px rgba(0, 0, 0, 0.45);
    ">
    {{ $service->name }}
</h1>


</section>



<section class="min-h-screen py-10" style="background-color:#FCEBEB;">

    {{-- ====== TOP BAR (BACK) ====== --}}
    <div class="max-w-4xl mx-auto flex items-center gap-4 mb-6 mt-4">
        <a href="{{ url()->previous() }}"
           class="back-btn text-pink-700 text-xl font-bold hover:text-pink-900">
            ← Back
        </a>
    </div>


    {{-- ====== MAIN CARD ====== --}}
    <div class="max-w-4xl mx-auto bg-[#D98A9E] rounded-3xl p-6 shadow-xl">

        {{-- IMAGE --}}
        <div class="rounded-2xl overflow-hidden w-full mb-6">
            <img src="{{ asset('storage/' . $service->image) }}"
                 class="w-full h-64 md:h-96 object-cover">
        </div>

        {{-- TITLE MANFAAT --}}
        <h2 class="text-center text-2xl font-bold text-white mb-4 tracking-wide">
            MANFAAT
        </h2>

        {{-- MANFAAT BOX --}}
        <div class="bg-[#E9A7B7] rounded-xl p-6 text-white text-lg leading-relaxed">

            @if(is_array($service->description))
                <ul class="list-disc pl-5 space-y-2">
                    @foreach($service->description as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @else
                <p>{{ $service->description }}</p>
            @endif

        </div>

    </div>


    {{-- ====== BUTTON WHATSAPP ====== --}}
    <div class="text-center mt-10">
        <a href="https://wa.me/6289506143030?text=Halo,%20saya%20ingin%20booking%20{{ urlencode($service->name) }}"
           class="flex items-center justify-center gap-2 px-6 py-3 bg-green-500 text-white font-bold rounded-full shadow-lg text-lg w-max mx-auto hover:bg-green-600 transition">
            Booking Via Whatsapp
        </a>
    </div>

</section>

@include('layouts.footer')

@endsection
