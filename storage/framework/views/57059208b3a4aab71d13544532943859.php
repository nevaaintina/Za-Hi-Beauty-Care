

<?php $__env->startSection('title', $service->name . ' - ZA & Hi Beauty Care'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    /* Efek pop-up untuk tombol kembali */
    .back-btn {
        transition: 0.3s ease;
        display: inline-block;
    }
    .back-btn:hover {
        transform: scale(1.18) translateX(-3px);
        text-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    }
</style>


<?php
    // Ambil banner sesuai kategori
    $banner = \App\Models\Gallery::where('category', 'aset')
                ->where('description', $service->category)
                ->first();
?>

<section class="relative w-full h-[420px] overflow-hidden flex items-center justify-center">

    
    <div class="absolute inset-0">
        <img src="<?php echo e(asset('storage/' . ($banner->image ?? $service->image))); ?>"
             class="w-full h-full object-cover scale-110 opacity-80">
    </div>

    
    <h1 class="relative z-10 text-white text-5xl font-extrabold drop-shadow-2xl uppercase tracking-wide text-center">
        <?php echo e($service->name); ?>

    </h1>

</section>



<section class="min-h-screen py-10" style="background-color:#FCEBEB;">

    
    <div class="max-w-4xl mx-auto flex items-center gap-4 mb-6 mt-4">
        <a href="/layanan.kategori"
            class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6
            px-4 py-2 rounded-full shadow-md bg-white hover:shadow-xl transition transform hover:scale-105">
               <i class="fas fa-arrow-left fa-lg mr-2"></i> Back
        </a>
    </div>


    
    <div class="max-w-4xl mx-auto bg-[#D98A9E] rounded-3xl p-6 shadow-xl">

        
        <div class="rounded-2xl overflow-hidden w-full mb-6">
            <img src="<?php echo e(asset('storage/' . $service->image)); ?>"
                 class="w-full h-64 md:h-96 object-cover">
        </div>

        
        <h2 class="text-center text-2xl font-bold text-white mb-4 tracking-wide">
            MANFAAT
        </h2>

        
        <div class="bg-[#E9A7B7] rounded-xl p-6 text-white text-lg leading-relaxed">

            <?php if(is_array($service->description)): ?>
                <ul class="list-disc pl-5 space-y-2">
                    <?php $__currentLoopData = $service->description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($item); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p><?php echo e($service->description); ?></p>
            <?php endif; ?>

        </div>

    </div>


    
    <div class="text-center mt-10">
        <a href="https://wa.me/628xxxxxxxxxx?text=Halo,%20saya%20ingin%20booking%20<?php echo e(urlencode($service->name)); ?>"
           class="flex items-center justify-center gap-2 px-6 py-3 bg-green-500 text-white font-bold rounded-full shadow-lg text-lg w-max mx-auto hover:bg-green-600 transition">
            Booking Via Whatsapp
        </a>
    </div>

</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/service/detail.blade.php ENDPATH**/ ?>