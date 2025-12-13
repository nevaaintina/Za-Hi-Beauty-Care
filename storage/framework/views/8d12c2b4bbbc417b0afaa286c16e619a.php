<?php $__env->startSection('title', 'Konsultasi - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php
    // Ambil foto sesuai kategori dari gallery
    $imgFacial = \App\Models\Gallery::where('category', 'aset')->where('description', 'facial')->first();
    $imgBody   = \App\Models\Gallery::where('category', 'aset')->where('description', 'body')->first();
    $imgHair   = \App\Models\Gallery::where('category', 'aset')->where('description', 'hair')->first();
?>


<section class="relative w-full h-[260px] md:h-[380px] overflow-hidden">

    <!-- Background Image -->
    <img 
        src="<?php echo e(asset('images/konsultasi.jpg')); ?>"
        alt="Konsultasi ZA & Hi Beauty Care"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- Text -->
    <div class="absolute inset-0 z-10 flex items-center justify-center px-4 text-center">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold tracking-wide"
            style="
                font-family: 'Playfair Display', serif;
                color: #ead8ddff;
                text-shadow: 0 4px 12px rgba(0,0,0,0.45);
            ">
            Hai cantik, ada yang bisa kami bantu?
        </h1>
    </div>

</section>

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8 relative"
         style="background-color: #FFE2E2;">

    <div class="max-w-4xl mx-auto">

        
        <a href="/layanan"
           class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6
           px-4 py-2 rounded-full shadow-md bg-white hover:shadow-xl transition transform hover:scale-105">
            <i class="fas fa-arrow-left fa-lg mr-2"></i> Back
        </a>
        
        
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">

            
            <a href="https://wa.me/6289506143030?text=Halo,%20saya%20ingin%20konsultasi%20" target="_blank"
               class="block p-6 rounded-xl shadow-xl transition duration-300 transform hover:scale-105"
               style="background-color: #E195AB;">
                <i class="fab fa-whatsapp text-4xl text-white mb-4"></i>
                <p class="text-xl font-bold text-white mb-2">Hubungi Kami</p>
                <p class="text-sm text-white">
                    Bicara langsung dengan tim ahli kami. Cocok untuk pertanyaan kompleks.
                </p>
            </a>

            
            <a href="/chat"
               class="block p-6 rounded-xl shadow-xl transition duration-300 transform hover:scale-105"
               style="background-color: #F8B5C5;">
                <i class="fas fa-comments text-4xl text-white mb-4"></i>
                <p class="text-xl font-bold text-white mb-2">Mulai Diskusi</p>
                <p class="text-sm text-white">
                    Ayo diskusi bersama di forum kami.
                </p>
            </a>

        </div>

    </div>

</section>



<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/consultation/consultation.blade.php ENDPATH**/ ?>