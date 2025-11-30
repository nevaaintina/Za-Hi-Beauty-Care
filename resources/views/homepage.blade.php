@extends('layouts.app')

@section('title', 'ZA & Hi Beauty Care - Homepage')

@section('content')

@include('layouts.header')

{{-- ========================================================= --}}
{{-- STYLE: Scroll Reveal --}}
{{-- ========================================================= --}}
<style>
    .scroll-reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-out;
    }
    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }
</style>

{{-- ========================================================= --}}
{{-- HERO / BANNER --}}
{{-- ========================================================= --}}
<section class="relative w-full h-[300px] md:h-[450px] overflow-hidden scroll-reveal">

    <div class="absolute inset-0">
        @if(!empty($banner) && $banner instanceof \Illuminate\Support\Collection && $banner->count() > 0)
            @foreach($banner as $index => $item)
                <img src="{{ asset('storage/' . $item->image) }}"
                     alt="Banner {{ $index + 1 }}"
                     class="banner-img absolute inset-0 w-full h-full object-cover
                            transition-opacity duration-1000 ease-in-out
                            {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
            @endforeach
        @else
            <img src="{{ asset('images/default-banner.jpg') }}"
                 class="absolute inset-0 w-full h-full object-cover opacity-100 z-10">
        @endif
    </div>

    <div class="absolute inset-0 bg-black/40 z-20"></div>

    <div class="absolute inset-0 z-30 flex flex-col items-start justify-center px-6 md:px-20 text-left text-white">
        <p class="mb-2 text-lg">Selamat datang di</p>

        <h1 class="text-3xl md:text-5xl font-bold mb-4">ZA & Hi Beauty Care</h1>

        <p class="max-w-xl mb-6">
            Salon kecantikan dengan konsep minimalis modern bernuansa pink yang dirancang untuk memberikan kenyamanan sekaligus pengalaman 
            perawatan yang menyenangkan. Kami hadir sebagai tempat perawatan kecantikan yang menawarkan pelayanan lengkap 
            mulai dari perawatan wajah, tubuh, rambut, hingga skincare, dengan kualitas terbaik dan harga yang bersahabat.
        </p>
    </div>

</section>

{{-- ========================================================= --}}
{{-- FAVORITE TREATMENT --}}
{{-- ========================================================= --}}
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#fce4e5] scroll-reveal">
    <div class="max-w-7xl mx-auto">

        <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Favorite Treatment</h2>

        <div class="flex flex-col md:flex-row justify-center gap-8">

            @if(!empty($services) && $services->count() > 0)
                @foreach($services as $service)
                <div class="treatment-card w-full md:w-1/3 text-center scroll-reveal">
                    <a href="{{ route('layanan.detail', $service->id) }}">
                        <div class="rounded-lg overflow-hidden mb-4 shadow-md">
                            <img src="{{ asset('storage/' . $service->image) }}"
                                 alt="{{ $service->name }}"
                                 class="w-full h-56 object-cover rounded-lg transition duration-300">
                        </div>

                        <button class="py-3 w-4/5 text-lg font-medium rounded-lg transition duration-200 hover:opacity-90 uppercase mx-auto block"
                                style="background-color: #f3a8b4; color: white;">
                            {{ strtoupper($service->name) }}
                        </button>
                    </a>
                </div>
                @endforeach
            @else
                <p class="text-center text-gray-600">Tidak ada treatment favorit tersedia saat ini.</p>
            @endif

        </div>

    </div>
</section>

{{-- ========================================================= --}}
{{-- PROMO --}}
{{-- ========================================================= --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-[#FFDBDF] to-[#FFCFCF] scroll-reveal">
    <div class="max-w-7xl mx-auto text-center">

        <h2 class="text-3xl font-bold text-gray-800 mb-3">
            "{{ $promoDescription->title ?? 'Spook-tacular Deals!' }}"
        </h2>

        <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-12">
            {{ $promoDescription->description ?? 
                'Bukan hanya make-up, tapi glowing natural skin yang bikin percaya diri. 
                Nikmati promo khusus hanya di ZA & Hi Beauty Care' }}
        </p>

        <div class="relative max-w-6xl mx-auto flex items-center justify-center">

            <button id="promoPrevBtn"
                class="absolute left-0 z-[50] bg-white p-3 rounded-full shadow-lg hover:scale-110 transition">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div id="promoTrack"
                class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory w-full scroll-smooth px-6 py-4 space-x-8">

                @if(!empty($promo) && $promo->count() > 0)
                    @foreach($promo as $item)
                        <div class="promo-card snap-center flex-shrink-0 w-[300px] h-[380px] scale-90 opacity-50 transition-all duration-300 rounded-xl shadow-xl bg-white overflow-hidden scroll-reveal">
                            <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                @else
                    <div class="promo-card snap-center flex-shrink-0 w-[300px] h-[380px] scale-110 opacity-100 rounded-xl shadow-xl bg-white scroll-reveal">
                        <img src="{{ asset('images/default-promo.jpg') }}" class="w-full h-full object-cover">
                    </div>
                @endif

            </div>

            <button id="promoNextBtn"
                class="absolute right-0 z-[50] bg-white p-3 rounded-full shadow-lg hover:scale-110 transition">
                <i class="fas fa-chevron-right"></i>
            </button>

        </div>

    </div>
</section>

{{-- ========================================================= --}}
{{-- GALLERY --}}
{{-- ========================================================= --}}
<section class="py-20 bg-[#F7CFD8] px-4 sm:px-6 lg:px-8 scroll-reveal">
    <div class="max-w-7xl mx-auto text-center">

        <h2 class="text-3xl font-bold mb-4 text-gray-800">Our Gallery</h2>

        <p class="text-sm text-gray-600 mb-10 max-w-2xl mx-auto">
            Discover the beauty of transformation through our collection of moments.
            Each picture reflects the journey of confidence, self-care, and timeless elegance.
            Click & explore our Gallery!
        </p>

        <div class="relative max-w-6xl mx-auto flex items-center justify-center">

            <button id="galleryPrevBtn"
                class="absolute left-0 z-[50] bg-white p-3 rounded-full shadow-lg hover:scale-110 transition">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div id="galleryTrack"
                class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory w-full scroll-smooth px-6 py-4 space-x-8">

                @if(!empty($salon) && $salon->count() > 0)
                    @foreach($salon as $item)
                        <div class="gallery-card snap-center flex-shrink-0 w-[300px] h-[380px] scale-90 opacity-50 transition-all rounded-xl shadow-xl bg-white overflow-hidden scroll-reveal">
                            <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                @else
                    <div class="gallery-card snap-center flex-shrink-0 w-[300px] h-[380px] scale-110 opacity-100 rounded-xl shadow-xl bg-white scroll-reveal">
                        <img src="{{ asset('images/default-gallery.jpg') }}" class="w-full h-full object-cover">
                    </div>
                @endif

            </div>

            <button id="galleryNextBtn"
                class="absolute right-0 z-[50] bg-white p-3 rounded-full shadow-lg hover:scale-110 transition">
                <i class="fas fa-chevron-right"></i>
            </button>

        </div>

    </div>
</section>

{{-- ========================================================= --}}
{{-- CERTIFICATE --}}
{{-- ========================================================= --}}
<section class="py-16 bg-[#FFD5D5] px-4 sm:px-6 lg:px-8 scroll-reveal">
    <div class="max-w-7xl mx-auto text-center">

        <h2 class="text-3xl font-bold mb-4 text-gray-800">Our Certificate</h2>

        <p class="text-sm text-gray-600 mb-12 max-w-xl mx-auto">
           A showcase of our achievements and commitment to excellence.
           Every certificate reflects dedication, expertise, and continuous 
           growth in dermatology and aesthetics.
        </p>

        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
            @if(!empty($certificate) && $certificate->count() > 0)
                @foreach($certificate as $item)
                    <div class="w-64 md:w-80 cursor-pointer transition-transform hover:scale-105 scroll-reveal"
                         onclick="openCertificateModal('{{ asset('storage/' . $item->image) }}')">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                @endforeach
            @else
                <p class="text-gray-600">Tidak ada sertifikat yang ditampilkan.</p>
            @endif
        </div>

        <div class="text-center mt-12 scroll-reveal">
            <a href="https://wa.me/089506143030" target="_blank"
                class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-xl transition hover:scale-105">
                <i class="fab fa-whatsapp text-xl mr-2"></i>
                <span class="font-bold">Klaim Promo Sekarang</span>
            </a>
        </div>

    </div>
</section>

{{-- CERTIFICATE MODAL --}}
<div id="certificateModal"
     class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-[9999]">

    <div class="relative max-w-3xl max-h-[90vh] mx-auto">
        <img id="modalCertificateImage" src=""
             class="w-full h-full object-contain rounded-xl shadow-2xl">

        <button onclick="closeCertificateModal()"
                class="absolute -top-4 -right-4 bg-white text-black p-3 rounded-full shadow-xl hover:scale-110 transition">
            ✕
        </button>
    </div>
</div>

{{-- ========================================================= --}}
{{-- JAVASCRIPT --}}
{{-- ========================================================= --}}
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* =============================== */
    /* SCROLL REVEAL EFFECT */
    /* =============================== */
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("revealed");
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll(".scroll-reveal").forEach(el => observer.observe(el));

    /* BANNER ROTATOR */
    (function bannerRotator() {
        const images = document.querySelectorAll(".banner-img");
        if (!images.length) return;
        let index = 0;
        setInterval(() => {
            images[index].classList.remove("opacity-100", "z-10");
            images[index].classList.add("opacity-0", "z-0");
            index = (index + 1) % images.length;
            images[index].classList.remove("opacity-0", "z-0");
            images[index].classList.add("opacity-100", "z-10");
        }, 4500);
    })();


    /* CENTER HELPER */
    function centerScroll(track, items, index) {
        if (!items.length) return;
        const gap = 32;
        const cardWidth = items[index].offsetWidth;
        const left = (cardWidth + gap) * index - track.offsetWidth / 2 + cardWidth / 2;
        track.scrollTo({ left: Math.max(0, left), behavior: "smooth" });
    }

    /* PROMO CAROUSEL */
    (function promoCarousel() {
        const track = document.getElementById('promoTrack');
        if (!track) return;
        const items = track.querySelectorAll('.promo-card');
        const prev = document.getElementById('promoPrevBtn');
        const next = document.getElementById('promoNextBtn');

        let index = 0;

        function update() {
            items.forEach((item, i) => {
                item.classList.toggle('scale-110', i === index);
                item.classList.toggle('opacity-100', i === index);
                item.classList.toggle('scale-90', i !== index);
                item.classList.toggle('opacity-50', i !== index);
            });
            centerScroll(track, items, index);
        }

        next.addEventListener('click', () => {
            index = (index + 1) % items.length;
            update();
        });

        prev.addEventListener('click', () => {
            index = (index - 1 + items.length) % items.length;
            update();
        });

        update();
    })();

    /* GALLERY CAROUSEL */
    (function galleryCarousel() {
        const track = document.getElementById('galleryTrack');
        if (!track) return;
        const items = track.querySelectorAll('.gallery-card');
        const prev = document.getElementById('galleryPrevBtn');
        const next = document.getElementById('galleryNextBtn');

        let index = 0;

        function update() {
            items.forEach((item, i) => {
                item.classList.toggle('scale-110', i === index);
                item.classList.toggle('opacity-100', i === index);
                item.classList.toggle('scale-90', i !== index);
                item.classList.toggle('opacity-50', i !== index);
            });
            centerScroll(track, items, index);
        }

        next.addEventListener('click', () => {
            index = (index + 1) % items.length;
            update();
        });

        prev.addEventListener('click', () => {
            index = (index - 1 + items.length) % items.length;
            update();
        });

        update();
    })();

    /* CERTIFICATE MODAL */
    window.openCertificateModal = function(url) {
        const modal = document.getElementById('certificateModal');
        document.getElementById('modalCertificateImage').src = url;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    window.closeCertificateModal = function() {
        const modal = document.getElementById('certificateModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

});
</script>

@include('layouts.footer')

@endsection
