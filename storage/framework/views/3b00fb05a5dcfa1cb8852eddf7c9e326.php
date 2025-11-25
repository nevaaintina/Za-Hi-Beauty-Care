<?php $__env->startSection('title', 'ZA & Hi Beauty Care - Homepage'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    
    <section class="py-16 px-4 sm:px-6 lg:px-8" 
         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('<?php echo e(asset('images/hero-background.jpeg')); ?>'); 
                background-size: cover; 
                background-position: center;">
    
    <div class="max-w-7xl mx-auto py-12">
        <p class="text-md text-white drop-shadow-md mb-2 font-semibold">Selamat datang di</p>
        
        
        <h1 class="text-4xl sm:text-5xl font-extrabold drop-shadow-lg mb-6" style="color: #E195AB;">ZA & Hi Beauty Care</h1>
        
        
        <p class="max-w-3xl text-white drop-shadow-md text-lg leading-relaxed">
            Salon kecantikan dengan konsep minimalis modern bernuansa pink yang dirancang untuk memberikan kenyamanan sekaligus pengalaman perawatan yang menyenangkan. Kami hadir sebagai tempat perawatan kecantikan yang menawarkan pelayanan lengkap mulai dari perawatan wajah, tubuh, rambut, hingga skincare, dengan kualitas terbaik dan harga yang bersahabat.
        </p>
    </div>
</section>

    
    <section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #fce4e5;">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">
                Favorite Treatment
            </h2>
            
            <div class="flex flex-col md:flex-row justify-center gap-8">

                
                <div class="treatment-card w-full md:w-1/3 text-center">
                    <div class="rounded-lg overflow-hidden mb-4 shadow-md"> 
                        <img 
                            src="<?php echo e(asset('images/ipl.png')); ?>"
                            alt="IPL Rejevu Facial" 
                            class="w-full h-auto object-cover rounded-lg"
                        >
                    </div>
                    <button 
                        class="py-3 w-4/5 text-lg font-medium rounded-lg 
                               transition duration-200 hover:opacity-90 
                               active:translate-y-0.5 active:shadow-md uppercase" 
                        style="background-color: #f3a8b4; color: white; border: none;"
                    >
                        IPL REJEVU FACIAL
                    </button>
                </div>

                
            <div class="treatment-card w-full md:w-1/3 text-center">
                
                <a href="<?php echo e(route('treatment.show', ['slug' => 'anti-aging-facial'])); ?>" class="block group"> 
                    <div class="rounded-lg overflow-hidden mb-4 shadow-md">
                        <img 
                            src="<?php echo e(asset('images/anti_aging.png')); ?>"
                            alt="Anti Aging Facial" 
                            class="w-full h-auto object-cover rounded-lg transition duration-300 group-hover:opacity-80"
                        >
                    </div>
                    <button 
                        class="py-3 w-4/5 text-lg font-medium rounded-lg 
                               transition duration-200 hover:opacity-90 
                               active:translate-y-0.5 active:shadow-md uppercase" 
                        style="background-color: #f3a8b4; color: white; border: none;"
                    >
                        ANTI AGING FACIAL
                    </button>
                </a>
            </div>

                
                <div class="treatment-card w-full md:w-1/3 text-center">
                    <div class="rounded-lg overflow-hidden mb-4 shadow-md">
                        <img 
                            src="<?php echo e(asset('images/hydra.png')); ?>"
                            alt="Hydra Facial" 
                            class="w-full h-auto object-cover rounded-lg"
                        >
                    </div>
                    <button 
                        class="py-3 w-4/5 text-lg font-medium rounded-lg 
                               transition duration-200 hover:opacity-90 
                               active:translate-y-0.5 active:shadow-md uppercase" 
                        style="background-color: #f3a8b4; color: white; border: none;"
                    >
                        HYDRA FACIAL
                    </button>
                </div>
                
            </div>
        </div>
    </section>

    
<section class="py-20 bg-[#FFCFCF] px-4 sm:px-6 lg:px-8"> 
    <div class="max-w-7xl mx-auto text-center">
        
        
        <p class="text-3xl font-semibold text-gray-800 mb-2">"Spook-tacular October Deals!"</p>
        <p class="text-lg text-gray-700 mb-10 max-w-4xl mx-auto">
            Bukan hanya make-up, tapi glowing natural skin yang bikin percaya diri. Nikmati promo khusus bulan Oktober hanya di ZA & Hi Beauty Care "
        </p>
        
        
        <div class="relative flex items-center max-w-6xl mx-auto"> 
            
            
            <button id="promoPrevBtn" class="p-2 text-gray-700 absolute left-0 z-20 bg-white rounded-full shadow-lg transition duration-200 hover:scale-110">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            
            <div id="promoTrack" class="flex overflow-x-hidden snap-x snap-mandatory space-x-4 p-4 no-scrollbar w-full scroll-smooth">
                
                
                
                <div class="promo-item flex-shrink-0 w-64 md:w-80 snap-center transition-all duration-300 transform" data-index="0">
                    <img src="<?php echo e(asset('images/promo-1.png')); ?>" 
                         alt="Promo 1: IPL Rejevu" 
                         class="w-full h-full object-contain rounded-lg shadow-xl"
                    >
                </div>

                
                
                <div class="promo-item flex-shrink-0 w-64 md:w-80 snap-center transition-all duration-300 transform" data-index="1">
                    <img src="<?php echo e(asset('images/promo-2.png')); ?>" 
                         alt="Promo 2: Big Deal" 
                         class="w-full h-full object-contain rounded-lg shadow-xl"
                    >
                </div>

                
                
                <div class="promo-item flex-shrink-0 w-64 md:w-80 snap-center transition-all duration-300 transform" data-index="2">
                    <img src="<?php echo e(asset('images/promo-3.png')); ?>" 
                         alt="Promo 3: Perawatan" 
                         class="w-full h-full object-contain rounded-lg shadow-xl"
                    >
                </div>

                
                
                <div class="promo-item flex-shrink-0 w-64 md:w-80 snap-center transition-all duration-300 transform" data-index="3">
                    <img src="<?php echo e(asset('images/promo-4.png')); ?>" 
                         alt="Promo 4: Skin Booster" 
                         class="w-full h-full object-contain rounded-lg shadow-xl"
                    >
                </div>

                
                
                <div class="promo-item flex-shrink-0 w-64 md:w-80 snap-center transition-all duration-300 transform" data-index="4">
                    <img src="<?php echo e(asset('images/promo-5.png')); ?>" 
                         alt="Promo 5: Laser" 
                         class="w-full h-full object-contain rounded-lg shadow-xl"
                    >
                </div>
                
            </div>
            
            
            <button id="promoNextBtn" class="p-2 text-gray-700 absolute right-0 z-20 bg-white rounded-full shadow-lg transition duration-200 hover:scale-110">
                <i class="fas fa-chevron-right"></i>
            </button>
            
        </div>
    </div>
</section>

    
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
                        <img src="<?php echo e(asset('images/gallery-1.png')); ?>" alt="Gallery 1" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="<?php echo e(asset('images/gallery-2.png')); ?>" alt="Gallery 2" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="<?php echo e(asset('images/gallery-3.png')); ?>" alt="Gallery 3" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                    <div class="flex-shrink-0 w-80 h-96 snap-center">
                        <img src="<?php echo e(asset('images/gallery-4.png')); ?>" alt="Gallery 4" class="w-full h-full object-cover rounded-lg shadow-xl">
                    </div>
                </div>
                <button class="p-2 text-brand-text absolute right-0 z-10 bg-white rounded-full shadow-lg">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-[#FFD5D5] px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Our Certificate</h2>
            <p class="text-sm text-gray-600 mb-12 max-w-xl mx-auto">
                A showcase of our achievements and commitment to excellence. Every certificate reflects our dedication to the highest professional practice, technology, and aesthetics.
            </p>
            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12">
                <div class="w-52 md:w-64">
                    <img src="<?php echo e(asset('images/cert-1.png')); ?>" alt="Certificate of Completion" class="w-full h-auto object-contain shadow-lg">
                </div>
                <div class="w-64 md:w-80 border-4 border-dark-pink p-2 bg-white shadow-2xl">
                    <img src="<?php echo e(asset('images/cert-2.png')); ?>" alt="Sertifikat Keahlian" class="w-full h-auto object-contain">
                </div>
                <div class="w-52 md:w-64">
                    <img src="<?php echo e(asset('images/cert-3.png')); ?>" alt="Certificate of Participant" class="w-full h-auto object-contain shadow-lg">
                </div>
            </div>
            
            <div class="max-w-7xl mx-auto text-center mt-12">
                <a href="https://wa.me/089506143030" target="_blank" class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-xl transition duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp text-xl mr-2"></i>
                    <span class="font-bold">Klaim Promo Sekarang</span>
                </a>
            </div>
        </div>
    </section>

   

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const promoTrack = document.getElementById('promoTrack');
        const promoNextBtn = document.getElementById('promoNextBtn');
        const promoPrevBtn = document.getElementById('promoPrevBtn');
        const promoItems = document.querySelectorAll('.promo-item');
        const totalItems = promoItems.length;
        
        if (totalItems === 0) return;

        let promoIndex = 0;

        function updatePromoCarousel() {
            // Ambil lebar item secara dinamis
            const itemWidth = promoItems[0].offsetWidth; 
            const gap = 16; // space-x-4
            const offset = itemWidth + gap;

            // 1. Mengelola Pergeseran Posisi Horizontal (Smooth Scroll)
            promoTrack.scrollLeft = promoIndex * offset; 
            
            // 2. Mengelola Efek Besar-Kecil (Scaling)
            promoItems.forEach((item, index) => {
                // Hapus kelas besar (scaling)
                item.classList.remove('scale-110', 'z-20', 'shadow-2xl');
                item.classList.add('shadow-xl'); 

                if (index === promoIndex) {
                    // Tambahkan kelas besar ke item yang aktif
                    item.classList.add('scale-110', 'z-20', 'shadow-2xl');
                    item.classList.remove('shadow-xl');
                }
            });
        }

        // Handler Next (>)
        promoNextBtn.addEventListener('click', () => {
            promoIndex = (promoIndex + 1) % totalItems;
            updatePromoCarousel();
        });

        // Handler Prev (<)
        promoPrevBtn.addEventListener('click', () => {
            promoIndex = (promoIndex - 1 + totalItems) % totalItems;
            updatePromoCarousel();
        });

        // Inisialisasi: Item pertama diatur menjadi besar dan scroll
        setTimeout(() => {
            updatePromoCarousel();
        }, 50); 
    });
</script>
    
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/homepage.blade.php ENDPATH**/ ?>