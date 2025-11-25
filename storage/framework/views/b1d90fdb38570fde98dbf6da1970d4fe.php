

<?php $__env->startSection('title', 'Detail Body Treatment - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-4xl mx-auto">
        
        
        <a href="/layanan" class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6">
            <i class="fas fa-arrow-left fa-lg mr-2"></i> Body Treatment
        </a>
        
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Body Treatment Services</h2>

        
        <div class="grid grid-cols-2 gap-8 text-center">

            <a href="/treatment/traditional-massage" class="block cursor-pointer">
                <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
                    TRADITIONAL MASSAGE
                </p>
                <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="<?php echo e(asset('images/detail-body-1.jpg')); ?>" alt="Traditional Massage" class="w-full h-auto object-cover">
                </div>
            </a>

            <a href="/treatment/body-scrub-mask" class="block cursor-pointer">
                <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
                    BODY SCRUB & MASK
                </p>
                <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="<?php echo e(asset('images/detail-body-2.jpg')); ?>" alt="Body Scrub & Mask" class="w-full h-auto object-cover">
                </div>
            </a>

            <a href="/treatment/reflexology" class="block cursor-pointer">
                <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
                    REFLEXOLOGY
                </p>
                <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="<?php echo e(asset('images/detail-body-3.jpg')); ?>" alt="Reflexology" class="w-full h-auto object-cover">
                </div>
            </a>

            <a href="/treatment/candle-wax-treatment" class="block cursor-pointer">
                <p class="text-lg font-semibold text-white py-2 shadow-md mb-2 rounded-lg" style="background-color: #E195AB;">
                    CANDLE WAX TREATMENT
                </p>
                <div class="overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                    <img src="<?php echo e(asset('images/detail-body-4.jpg')); ?>" alt="Candle Wax Treatment" class="w-full h-auto object-cover">
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

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/bodydetail.blade.php ENDPATH**/ ?>