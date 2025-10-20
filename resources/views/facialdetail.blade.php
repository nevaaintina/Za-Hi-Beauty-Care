@extends('layouts.app')

@section('title', 'Detail Facial Treatment - ZA & Hi')

@section('content')

{{-- Panggil Header dan Footer --}}
@include('layouts.header')

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-4xl mx-auto">
        
        <a href="/layanan" class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6">
            <i class="fas fa-arrow-left fa-lg mr-2"></i>
        </a>

        <div class="grid grid-cols-2 gap-8 text-center">

            <a href="/treatment/hydra-facial" class="block cursor-pointer">
    <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
        HYDRA FACIAL
    </p>
    <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
        <img src="{{ asset('images/detail-hydra.jpg') }}" alt="Hydra Facial" class="w-full h-auto object-cover">
    </div>
</a>

            <a href="/treatment/ipl-rejuve-facial" class="block cursor-pointer">
    <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
        IPL REJUVE FACIAL
    </p>
    <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
        <img src="{{ asset('images/detail-ipl.jpg') }}" alt="IPL Rejuve Facial" class="w-full h-auto object-cover">
    </div>
</a>

            <a href="/treatment/anti-aging-facial" class="block cursor-pointer">
    <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
        ANTI AGING FACIAL
    </p>
    <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
        <img src="{{ asset('images/detail-anti-aging.jpg') }}" alt="Anti Aging Facial" class="w-full h-auto object-cover">
    </div>
</a>

            <a href="/treatment/premium-brightening-facial" class="block cursor-pointer">
    <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
        PREMIUM BRIGHTENING FACIAL
    </p>
    <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
        <img src="{{ asset('images/detail-premium.jpg') }}" alt="Premium Brightening Facial" class="w-full h-auto object-cover">
    </div>
</a>

        </div>

        <div class="text-center mt-12">
            <a href="https://wa.me/yourphonenumber" target="_blank" class="inline-flex items-center py-3 px-8 rounded-full shadow-xl transition duration-300 transform hover:scale-105" style="background-color: #E195AB;">
                <i class="fab fa-whatsapp text-xl text-white mr-3"></i>
                <span class="font-bold text-white">Booking Via Whatsapp</span>
            </a>
        </div>
        
    </div>
</section>

@include('layouts.footer')
@endsection