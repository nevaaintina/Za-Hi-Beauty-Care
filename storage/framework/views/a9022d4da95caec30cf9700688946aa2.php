<?php $__env->startSection('title', 'Produk - ZA & Hi Beauty Care'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>




<style>
    /* Efek timbul lembut */
    .hover-pop {
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .hover-pop:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 15px 25px rgba(0,0,0,0.12);
    }
</style>





<section class="relative w-full h-[300px] md:h-[450px] overflow-hidden scroll-reveal">

    <div class="absolute inset-0 hero-slider">

        <?php $__empty_1 = true; $__currentLoopData = $galery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <img src="<?php echo e(asset('storage/' . $item->image)); ?>"
                 class="hero-img absolute inset-0 w-full h-full object-cover
                        transition-opacity duration-1000 ease-in-out
                        <?php echo e($index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0'); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <img src="<?php echo e(asset('images/produk.jpg')); ?>"
                 class="absolute inset-0 w-full h-full object-cover opacity-100 z-10">
        <?php endif; ?>

    </div>

    <div class="absolute inset-0 bg-black/40 z-20"></div>

    <div class="absolute inset-0 z-30 flex flex-col items-center justify-center text-center">
        <h1 class="text-5xl md:text-5xl font-extrabold text-white mb-2 tracking-wider">
            ZA & Hi Beauty Care
        </h1>
        <p class="text-3xl md:text-4xl font-semibold text-white">
            Product
        </p>
    </div>

</section>





<section class="py-16 px-4 sm:px-6 lg:px-8" style="background-color: #fcebeb;">
    <div class="max-w-7xl mx-auto">

    
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-xl font-bold text-gray-800 mb-3" style="color: #ee668dff">
                Produk Skincare Terbaik untuk Perawatan Kulit Anda
            </h2>
            <p class="text-gray-600 text-lg text-sm">
                Temukan berbagai produk skincare premium dari ZA & Hi Beauty Care 
                yang diformulasikan untuk merawat, menutrisi, dan menjaga kesehatan kulit Anda.
                Cocok untuk semua jenis kulit dan aman digunakan setiap hari.
            </p>
        </div>

        <?php if($products->count() == 0): ?>
            <p class="text-center text-gray-600 text-lg">Belum ada produk.</p>
        <?php else: ?>

        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 
                    max-w-5xl mx-auto px-4">


            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg shadow-lg border border-pink-100 
                            hover:shadow-xl transition duration-300 fade-item hover-pop 
                            flex flex-col items-center">

                    
                    <img 
                        src="<?php echo e($p->image ? asset('storage/'.$p->image) : asset('images/no-image.png')); ?>" 
                        alt="<?php echo e($p->name); ?>" 
                        class="w-full object-contain "
                    >

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php endif; ?>

    </div>
</section>




<script>
document.addEventListener("DOMContentLoaded", function () {
    const heroImages = document.querySelectorAll(".hero-img");

    if (heroImages.length <= 1) return;

    let index = 0;

    setInterval(() => {
        heroImages[index].classList.remove("opacity-100", "z-10");
        heroImages[index].classList.add("opacity-0", "z-0");

        index = (index + 1) % heroImages.length;

        heroImages[index].classList.remove("opacity-0", "z-0");
        heroImages[index].classList.add("opacity-100", "z-10");

    }, 4000);
});
</script>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/product/product.blade.php ENDPATH**/ ?>