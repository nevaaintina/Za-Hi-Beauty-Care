@extends('layouts.app')

@section('title', 'ZA & Hi Beauty Care - Homepage')

@section('content')

    @include('layouts.header')
    
    <section class="bg-light-pink hero-bg bg-opacity-70 bg-blend-overlay py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto py-12">
            <p class="text-md text-gray-600 mb-2 font-semibold">Spesial untuk Anda!</p>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-brand-text mb-6">ZA & Hi Beauty Care</h1>
            <p class="max-w-3xl text-lg text-gray-700 leading-relaxed">
                Salon kecantikan dengan konsep minimalis modern bernuansa pink yang dirancang untuk memberikan kenyamanan sekaligus pengalaman perawatan yang menyenangkan. Kami hadir sebagai tempat perawatan kecantikan yang menawarkan pelayanan lengkap mulai dari perawatan wajah, tubuh, rambut, hingga skincare, dengan kualitas terbaik dan harga yang bersahabat.


            </p>
        </div>
    </section>

    ---

    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#FFE2E2]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Favorite Treatment</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative group cursor-pointer">
                    <img src="placeholder-ipl.jpg" alt="IPL Rejuve Facial" class="w-full h-64 object-cover">
                    <div class="absolute inset-x-0 bottom-0 py-3 bg-light-pink/80 text-center">
                        <p class="text-lg font-bold text-gray-900">IPL REJEUVE FACIAL</p>
                    </div>
                </div>
                <div class="relative group cursor-pointer">
                    <img src="placeholder-anti-aging.jpg" alt="Anti Aging Facial" class="w-full h-64 object-cover">
                    <div class="absolute inset-x-0 bottom-0 py-3 bg-light-pink/80 text-center">
                        <p class="text-lg font-bold text-gray-900">ANTI AGING FACIAL</p>
                    </div>
                </div>
                <div class="relative group cursor-pointer">
                    <img src="placeholder-hydra.jpg" alt="Hydra Facial" class="w-full h-64 object-cover">
                    <div class="absolute inset-x-0 bottom-0 py-3 bg-light-pink/80 text-center">
                        <p class="text-lg font-bold text-gray-900">HYDRA FACIAL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="py-12 bg-[#FFCFCF] px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <p class="text-md text-gray-700 mb-2 font-semibold">"Spesial mulai Oktober Deals!"</p>
        <p class="text-sm text-gray-600 mb-8 max-w-2xl mx-auto">
            Bulan baru, *make-up*, topi, *glossing*, natural, dan *hair cut* bikin penampilan jadi beda! Nikmati promo khusus lainnya di Oktober Deals di ZA & Hi Beauty Care.
        </p>
        <div class="relative flex items-center">
            <button class="p-2 text-brand-text absolute left-0 z-10 bg-white rounded-full shadow-lg">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="flex overflow-x-scroll snap-x snap-mandatory space-x-6 p-4 no-scrollbar">
                {{-- Ini adalah perulangan untuk Pricelist --}}
                @foreach($pricelists as $promo)
                <div class="flex-shrink-0 w-48 h-56 snap-center">
                    <img src="{{ asset($promo->image_path) }}" alt="{{ $promo->title }}" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                @endforeach
            </div>
            <button class="p-2 text-brand-text absolute right-0 z-10 bg-white rounded-full shadow-lg">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

    ---

    <section class="py-16 bg-[#F7CFD8] px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Our Gallery</h2>
            <p class="text-sm text-gray-600 mb-10 max-w-2xl mx-auto">
                Discover the beauty of moments, through a spectacular collection of moments. Each picture reflects the journey of confidence, self-care, and timeless elegance. Click & explore our gallery!
            </p>
            <div class="relative flex items-center">
                <button class="p-2 text-brand-text absolute left-0 z-10 bg-white rounded-full shadow-lg">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="flex overflow-x-scroll snap-x snap-mandatory space-x-6 p-4 no-scrollbar">
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="placeholder-gallery-1.jpg" alt="Gallery 1" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="placeholder-gallery-2.jpg" alt="Gallery 2" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="placeholder-gallery-3.jpg" alt="Gallery 3" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="placeholder-gallery-4.jpg" alt="Gallery 4" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                </div>
                <button class="p-2 text-brand-text absolute right-0 z-10 bg-white rounded-full shadow-lg">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    ---

    <section class="py-16 bg-[#FFD5D5] px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Our Certificate</h2>
            <p class="text-sm text-gray-600 mb-12 max-w-xl mx-auto">
                A showcase of our achievements and commitment to excellence. Every certificate reflects our dedication to the highest professional practice, technology, and aesthetics.
            </p>
            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12">
                <div class="w-52 md:w-64">
                    <img src="placeholder-cert-1.jpg" alt="Certificate of Completion" class="w-full h-auto object-contain shadow-lg">
                </div>
                <div class="w-64 md:w-80 border-4 border-dark-pink p-2 bg-white shadow-2xl">
                    <img src="placeholder-cert-2.jpg" alt="Sertifikat Keahlian" class="w-full h-auto object-contain">
                </div>
                <div class="w-52 md:w-64">
                    <img src="placeholder-cert-3.jpg" alt="Certificate of Participant" class="w-full h-auto object-contain shadow-lg">
                </div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto text-center mt-12">
            <a href="https://wa.me/yourphonenumber" target="_blank" class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-xl transition duration-300 transform hover:scale-105">
                <i class="fab fa-whatsapp text-xl mr-2"></i>
                <span class="font-bold">Klaim Promo Sekarang</span>
            </a>
        </div>
    </section>

    ---
    
    @include('layouts.footer')

@endsection