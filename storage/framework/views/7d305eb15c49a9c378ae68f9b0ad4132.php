<?php $__env->startSection('title', 'Layanan - ZA & Hi Beauty Care'); ?>



<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 



<section class="py-24 px-4 sm:px-6 lg:px-8 bg-cover bg-center relative" 
         style="background-image: url('<?php echo e(asset('images/layanan.jpeg')); ?>');">
    
    
    <div class="absolute inset-0 bg-black opacity-40"></div>
    
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white drop-shadow-lg tracking-wider mb-8"> 
            ZA & Hi Beauty Care
        </h1>
        
        <a href="/consultasi" 
           class="inline-flex items-center py-3 px-8 rounded-lg shadow-xl text-white font-bold text-lg transition duration-300 transform hover:scale-105" 
           style="background-color: #E195AB;">
            Konsultasi
        </a>
    </div>
</section>



<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-7xl mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            
            
            <a href="/layanan/facial" class="block cursor-pointer group">
                <div class="shadow-lg hover:shadow-xl transition duration-300 transform group-hover:-translate-y-1">
                    <p class="text-xl font-semibold text-white py-2 rounded-t-lg shadow-md" style="background-color: #E195AB;">
                        Facial Treatment
                    </p>
                    <div class="overflow-hidden rounded-b-lg">
                        <img src="<?php echo e(asset('images/layanan-facial.jpg')); ?>" alt="Facial Treatment" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </div>
            </a>
            
            
            <a href="/layanan/body" class="block cursor-pointer group">
                <div class="shadow-lg hover:shadow-xl transition duration-300 transform group-hover:-translate-y-1">
                    <p class="text-xl font-semibold text-white py-2 rounded-t-lg shadow-md" style="background-color: #E195AB;">
                        Body Treatment
                    </p>
                    <div class="overflow-hidden rounded-b-lg">
                        <img src="<?php echo e(asset('images/layanan-body.jpg')); ?>" alt="Body Treatment" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </div>
            </a>

            
            <a href="/layanan/hair" class="block cursor-pointer group">
                <div class="shadow-lg hover:shadow-xl transition duration-300 transform group-hover:-translate-y-1">
                    <p class="text-xl font-semibold text-white py-2 rounded-t-lg shadow-md" style="background-color: #E195AB;">
                        Hair Treatment
                    </p>
                    <div class="overflow-hidden rounded-b-lg">
                        <img src="<?php echo e(asset('images/layanan-hair.jpg')); ?>" alt="Hair Treatment" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </div>
            </a>
        </div>

        
        <div class="text-center mt-12 mb-16">
            <a href="https://wa.me/yourphonenumber" target="_blank" 
               class="inline-flex items-center py-3 px-8 rounded-full shadow-xl 
                      transition duration-300 transform hover:scale-105 bg-green-500 hover:bg-green-600">
                <i class="fab fa-whatsapp text-xl text-white mr-3"></i>
                <span class="font-bold text-white">Booking Via Whatsapp</span>
            </a>
        </div>
        
    </div>
</section>




<section class="py-16 bg-[#FFE2E2] px-4 sm:px-6 lg:px-8"> 
    <div class="text-center max-w-7xl mx-auto">
        <hr class="mb-16 border-t border-pink-300">

        <h2 class="text-3xl font-bold text-gray-800 mb-10">Pricelist</h2>
        
        
        <div class="relative max-w-5xl mx-auto flex items-center pb-20"> 
            
            
            <button id="prevBtn" class="p-2 text-gray-700 absolute -left-2 md:-left-4 z-30 bg-white rounded-full shadow-lg hover:scale-110 transition duration-300">
                <i class="fas fa-chevron-left"></i>
            </button>

            
            <div id="pricelistTrack" class="flex overflow-x-scroll snap-x snap-mandatory space-x-6 p-4 no-scrollbar w-full justify-start items-center scroll-smooth">
                
                
                <div class="pricelist-item flex-shrink-0 w-80 snap-center transition-all duration-500 transform scale-110 z-20" data-index="0"> 
                    <img src="<?php echo e(asset('images/pricelist-1.png')); ?>" alt="Pricelist 1" class="w-full h-full object-contain rounded-lg shadow-2xl border border-pink-200">
                </div>
                
                
                <div class="pricelist-item flex-shrink-0 w-80 snap-center transition-all duration-500" data-index="1">
                    <img src="<?php echo e(asset('images/pricelist-2.png')); ?>" alt="Pricelist 2" class="w-full h-full object-contain rounded-lg shadow-md border border-pink-200">
                </div>
                
                
                <div class="pricelist-item flex-shrink-0 w-80 snap-center transition-all duration-500" data-index="2">
                    <img src="<?php echo e(asset('images/pricelist-3.png')); ?>" alt="Pricelist 3" class="w-full h-full object-contain rounded-lg shadow-md border border-pink-200">
                </div>

            </div>
            
            
            <button id="nextBtn" class="p-2 text-gray-700 absolute -right-2 md:-right-4 z-30 bg-white rounded-full shadow-lg hover:scale-110 transition duration-300">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('pricelistTrack');
        const items = document.querySelectorAll('.pricelist-item');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        let currentIndex = 0;
        const totalItems = items.length;

        function updateCarousel(newIndex) {
            // 1. Update Index
            currentIndex = newIndex;

            // 2. Update Class (Scaling Effect)
            items.forEach((item, index) => {
                item.classList.remove('scale-110', 'z-20', 'shadow-2xl');
                item.classList.add('shadow-md'); 

                if (index === currentIndex) {
                    item.classList.add('scale-110', 'z-20', 'shadow-2xl');
                    item.classList.remove('shadow-md');
                }
            });

            // 3. Update Scroll Position (Menggulir agar item aktif di tengah)
            const activeItem = items[currentIndex];
            const trackWidth = track.clientWidth;
            const itemWidth = activeItem.offsetWidth;
            
            // Jarak yang harus digulir: posisi aktif item dikurangi setengah lebar track ditambah setengah lebar item
            const scrollPosition = activeItem.offsetLeft - (trackWidth / 2) + (itemWidth / 2);

            track.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        }

        // Handler untuk Tombol Next (>)
        nextBtn.addEventListener('click', () => {
            let newIndex = (currentIndex + 1) % totalItems;
            updateCarousel(newIndex);
        });

        // Handler untuk Tombol Previous (<)
        prevBtn.addEventListener('click', () => {
            let newIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel(newIndex);
        });

        // Inisialisasi awal agar tampilan di tengah
        setTimeout(() => {
            // Panggil updateCarousel tanpa argumen untuk memastikan currentIndex (0) diinisialisasi
            updateCarousel(currentIndex); 
        }, 100); 
    });
</script>


<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/layanan.blade.php ENDPATH**/ ?>