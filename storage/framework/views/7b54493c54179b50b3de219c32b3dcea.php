<?php $__env->startSection('title', 'Testimoni - ZA & Hi Beauty Care'); ?>

<style>
    /* Style kustom untuk warna rating bintang */
    .rating-star {
        color: #ffc107; /* Warna kuning emas */
    }
</style>

<?php $__env->startSection('content'); ?>


<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-4xl mx-auto text-center">
        
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-2">Apasi Kata Sahabat Za&Hi</h1>
        <p class="text-xl sm:text-2xl font-semibold text-gray-600 mb-12">Setelah Treatment di Za&Hi Beauty Care ???</p>
        
        <a href="/testimoni/create" class="inline-flex items-center justify-center mb-10 py-3 px-8 rounded-full shadow-xl text-white font-bold transition duration-300 transform hover:scale-105" style="background-color: #E195AB;">
            <i class="fas fa-plus fa-lg mr-2"></i> Tambah Testimoni Anda
        </a>

        <div class="space-y-12">
            </div>
        <div class="space-y-12">

            <div class="flex flex-col md:flex-row items-center md:items-start p-6 rounded-lg shadow-lg" style="background-color: #E195AB;">
                
                <div class="flex flex-col items-center flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img src="<?php echo e(asset('images/testi-1-before.png')); ?>" alt="Before After 1" class="w-full max-w-xs md:w-36 h-auto rounded-lg shadow-md mb-2">
                    <div class="flex space-x-2 text-sm font-semibold">
                        <span class="text-gray-600">Before</span>
                        <span class="text-gray-800">|</span>
                        <span class="text-gray-600">After</span>
                    </div>
                </div>

                <div class="text-left w-full">
                    <p class="text-gray-700 leading-relaxed mb-3">Ownernya ramah, pelayanannya bagus, tempatnya nyaman bgt. Pokoknya gk nyesel facial disini bikin ketagihan... Alhamdulillah ownernya kenal, anaknya temen sekelas sama anak ku di zivicena...</p>
                    <div class="flex space-x-1 rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start p-6 rounded-lg shadow-lg" style="background-color: #E195AB;">
                
                <div class="flex flex-col items-center flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img src="<?php echo e(asset('images/testi-2-before.png')); ?>" alt="Before After 2" class="w-full max-w-xs md:w-36 h-auto rounded-lg shadow-md mb-2">
                    <div class="flex space-x-2 text-sm font-semibold">
                        <span class="text-gray-600">Before</span>
                        <span class="text-gray-800">|</span>
                        <span class="text-gray-600">After</span>
                    </div>
                </div>

                <div class="text-left w-full">
                    <p class="text-gray-700 leading-relaxed mb-3">Recommended pokoknya, InshaAllah bakal balik lagi. Tempatnya nyaman & aman apalagi buat yang berhijab, free konsultasi lgsg sm ownernya, mba nya juga ramah & sabar... Singa bisa nambah kegantengannya ya! Sukses trus buat Zahi.</p>
                    <div class="flex space-x-1 rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start p-6 rounded-lg shadow-lg" style="background-color: #E195AB;">
                
                <div class="flex flex-col items-center flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img src="<?php echo e(asset('images/testi-3-before.png')); ?>" alt="Before After 3" class="w-full max-w-xs md:w-36 h-auto rounded-lg shadow-md mb-2">
                    <div class="flex space-x-2 text-sm font-semibold">
                        <span class="text-gray-600">Before</span>
                        <span class="text-gray-800">|</span>
                        <span class="text-gray-600">After</span>
                    </div>
                </div>

                <div class="text-left w-full">
                    <p class="text-gray-700 leading-relaxed mb-3">Salon khusus wanita di area Bekasi Utara. Pelayanan lengkap... bisa smoothing, Bisa Facial, Bisa make up. Bagus dan nyaman. Recommended banget. Thanks buat bu Owner (Dea Rizal), teliti banget nanganin rambut. Saya bener2 oke... Top lah pokoknya.</p>
                    <div class="flex space-x-1 rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views\testimoni.blade.php ENDPATH**/ ?>