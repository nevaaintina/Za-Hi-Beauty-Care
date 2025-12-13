<?php $__env->startSection('title', 'Testimoni - ZA & Hi Beauty Care'); ?>

<?php $__env->startSection('content'); ?>

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ================= CARD TIMBUL ================= */
.testi-card {
    transition: all .4s ease;
    box-shadow: 0 10px 20px rgba(0,0,0,.2);
    border-radius: 20px;
}
.testi-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 25px 45px rgba(0,0,0,.45);
}

/* ================= BINTANG ================= */
.rating-star i {
    color:#d1d5db;
    font-size:20px;
    transition:.3s;
}
.testi-card:hover .rating-star i.active {
    color:#FFD700;
    animation: cring 0.5s ease;
    text-shadow:0 0 8px #FFD700;
}

@keyframes cring {
    0%{transform:scale(.5) rotate(0deg)}
    60%{transform:scale(1.6) rotate(15deg)}
    100%{transform:scale(1) rotate(0deg)}
}

/* ================= IMAGE HOVER ================= */
.testi-card img {
    transition:.4s;
}
.testi-card:hover img {
    transform: scale(1.08);
}
</style>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="py-16 px-4" style="background:#FFE2E2">
<div class="max-w-4xl mx-auto text-center">

    <h1 class="text-3xl font-bold mb-1">Apa Kata Sahabat Za&Hi</h1>
    <p class="text-xl mb-10">Setelah Treatment di Za&Hi Beauty Care?</p>

    <a href="<?php echo e(route('testimoni.create')); ?>"
       class="inline-flex items-center mb-10 py-3 px-8 rounded-full text-white font-bold shadow hover:scale-105 duration-300"
       style="background:#E195AB">
        <i class="fas fa-plus mr-2"></i> Tambah Testimoni
    </a>

    <div class="space-y-12">

        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="testi-card p-6 flex flex-col md:flex-row gap-6 bg-[#E195AB]">

            <!-- GAMBAR -->
            <div class="flex flex-wrap gap-3 justify-center">
                <?php if(!empty($testi->images) && count($testi->images) > 0): ?>
                    <?php $__currentLoopData = $testi->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset('storage/'.$img)); ?>"
                             class="w-32 h-32 object-cover rounded-xl shadow">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="w-32 h-32 bg-gray-200 flex items-center justify-center rounded-xl text-sm text-gray-500">
                        No Image
                    </div>
                <?php endif; ?>
            </div>

            <!-- ISI -->
            <div class="text-left w-full">

                <!-- LAYANAN -->
                <p class="font-bold text-lg text-white mb-2">
                    <?php echo e(optional($testi->service)->name ?? 'Layanan tidak ditemukan'); ?>

                </p>

                <!-- PESAN -->
                <p class="mb-3 text-gray-100 bg-black bg-opacity-10 p-3 rounded-lg">
                    <?php echo e($testi->message); ?>

                </p>

                <!-- BINTANG -->
                <div class="rating-star mb-2">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <i class="fa-solid fa-star <?php echo e($i <= $testi->rating ? 'active' : ''); ?>"></i>
                    <?php endfor; ?>
                </div>

                <!-- USER -->
                <p class="text-sm font-semibold text-white">
                    — <?php echo e(optional($testi->user)->name ?? 'Guest User'); ?>

                </p>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views\testimoni\testimoni.blade.php ENDPATH**/ ?>