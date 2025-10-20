@extends('layouts.app')

@section('title', 'Konsultasi - ZA & Hi')

@section('content')

@include('layouts.header')

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-4xl mx-auto">

        <a href="/layanan" class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6">
            <i class="fas fa-arrow-left fa-lg mr-2"></i> Layanan
        </a>
        
        <div class="max-w-2xl mx-auto text-center mb-12">
            <p class="text-lg font-semibold text-gray-700 mb-4">Hai cantik, ada yang bisa kami bantu?</p>
            {{-- Tambahkan gambar pahlawan atau ilustrasi di sini jika diperlukan --}}
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">

            <a href="https://wa.me/yourphonenumber" target="_blank" class="block p-6 rounded-xl shadow-xl transition duration-300 transform hover:scale-105" style="background-color: #E195AB;">
                <i class="fab fa-whatsapp text-4xl text-white mb-4"></i>
                <p class="text-xl font-bold text-white mb-2">Hubungi Kami</p>
                <p class="text-sm text-white">Berbicara langsung dengan tim ahli kami. Cocok untuk pertanyaan yang kompleks atau butuh lampiran foto/dokumen</p>
            </a>

           <a href="/chatbot" class="block p-6 rounded-xl shadow-xl transition duration-300 transform hover:scale-105" style="background-color: #F8B5C5;">
    <i class="fas fa-robot text-4xl text-white mb-4"></i>
    <p class="text-xl font-bold text-white mb-2">Mulai Chat</p>
    <p class="text-sm text-white">Layanan Chat Bot kami adalah solusi cepat untuk pertanyaanmu. Dapatkan jawaban instan 24/7 dari bot cerdas</p>
</a>
        
        <div class="flex justify-center space-x-8 mt-16">
            {{-- Menggunakan placeholder gambar yang sama seperti di file Anda --}}
            <img src="{{ asset('images/detail-hydra.jpg') }}" alt="Facial" class="w-24 h-24 object-cover rounded-full shadow-lg">
            <img src="{{ asset('images/detail-body-1.jpg') }}" alt="Body" class="w-24 h-24 object-cover rounded-full shadow-lg">
            <img src="{{ asset('images/detail-hair-3.jpg') }}" alt="Hair" class="w-24 h-24 object-cover rounded-full shadow-lg">
        </div>

    </div>
</section>

@include('layouts.footer')
@endsection