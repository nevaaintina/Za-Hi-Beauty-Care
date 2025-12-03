<?php $__env->startSection('title', 'Konsultasi - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php
    // Ambil foto sesuai kategori dari gallery
    $imgFacial = \App\Models\Gallery::where('category', 'aset')->where('description', 'facial')->first();
    $imgBody   = \App\Models\Gallery::where('category', 'aset')->where('description', 'body')->first();
    $imgHair   = \App\Models\Gallery::where('category', 'aset')->where('description', 'hair')->first();
?>

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8 relative"
         style="background-color: #FFE2E2;">

    <div class="max-w-4xl mx-auto">

        
        <a href="/layanan"
           class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6
           px-4 py-2 rounded-full shadow-md bg-white hover:shadow-xl transition transform hover:scale-105">
            <i class="fas fa-arrow-left fa-lg mr-2"></i> Back
        </a>
        
        <div class="max-w-2xl mx-auto text-center mb-12">
            <p class="text-lg font-semibold text-gray-700 mb-4">Hai cantik, ada yang bisa kami bantu?</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">

            
            <a href="https://wa.me/yourphonenumber" target="_blank"
               class="block p-6 rounded-xl shadow-xl transition duration-300 transform hover:scale-105"
               style="background-color: #E195AB;">
                <i class="fab fa-whatsapp text-4xl text-white mb-4"></i>
                <p class="text-xl font-bold text-white mb-2">Hubungi Kami</p>
                <p class="text-sm text-white">
                    Bicara langsung dengan tim ahli kami. Cocok untuk pertanyaan kompleks.
                </p>
            </a>

            
            <a href="/chatbot"
               class="block p-6 rounded-xl shadow-xl transition duration-300 transform hover:scale-105"
               style="background-color: #F8B5C5;">
                <i class="fas fa-robot text-4xl text-white mb-4"></i>
                <p class="text-xl font-bold text-white mb-2">Mulai Chat</p>
                <p class="text-sm text-white">
                    Dapatkan jawaban cepat 24/7 dari AI Chat Bot kami.
                </p>
            </a>

        </div>

    </div>

    
    <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-12">

        
        <div class="text-center">
            <img src="<?php echo e($imgFacial ? asset('storage/' . $imgFacial->image) : asset('images/default.jpg')); ?>"
                 class="w-20 h-20 object-cover rounded-full shadow-lg mx-auto">
            <p class="mt-2 text-sm font-semibold text-gray-700">Facial</p>
        </div>

        
        <div class="text-center">
            <img src="<?php echo e($imgBody ? asset('storage/' . $imgBody->image) : asset('images/default.jpg')); ?>"
                 class="w-20 h-20 object-cover rounded-full shadow-lg mx-auto">
            <p class="mt-2 text-sm font-semibold text-gray-700">Body</p>
        </div>

        
        <div class="text-center">
            <img src="<?php echo e($imgHair ? asset('storage/' . $imgHair->image) : asset('images/default.jpg')); ?>"
                 class="w-20 h-20 object-cover rounded-full shadow-lg mx-auto">
            <p class="mt-2 text-sm font-semibold text-gray-700">Hair</p>
        </div>

    </div>

</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/consultation/consultation.blade.php ENDPATH**/ ?>