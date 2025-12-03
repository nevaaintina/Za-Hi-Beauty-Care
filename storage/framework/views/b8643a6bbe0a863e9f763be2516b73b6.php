<?php $__env->startSection('title', ucfirst($kategori) . ' Treatment'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    body {
        background-color: #fcebeb;
    }

    /* Scroll Reveal */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.7s ease-out;
    }
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* Hover timbul */
    .treatment-card {
        transition: 0.3s ease;
    }
    .treatment-card:hover {
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.18);
    }

    /* Nama service di atas foto */
    .service-name {
        text-align: center;
        display: block;
        font-size: 22px;
        font-weight: 700;
        color: #9e044d;
        margin-bottom: 10px;
        padding-top: 10px;
    }

    /* === BUTTON BACK POP-UP === */
    .back-btn {
        transition: 0.25s ease;
        display: inline-block;
    }
    .back-btn:hover {
        transform: scale(1.20) translateX(-4px);
        text-shadow: 0 4px 12px rgba(0,0,0,0.25);
        color: #b30047 !important;
    }
</style>

<section class="py-10 px-6">

    
    <a href="/layanan"
       class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6
       px-4 py-2 rounded-full shadow-md bg-white hover:shadow-xl transition transform hover:scale-105">
        <i class="fas fa-arrow-left fa-lg mr-2"></i> Back
    </a>

    <h1 class="text-pink-800 text-4xl font-bold text-center mt-6 reveal">
        <?php echo e(strtoupper($kategori)); ?> TREATMENT
    </h1>

    
    <div class="flex justify-center my-8 reveal">
        <form method="GET" class="w-full md:w-1/2 flex">
            <input type="text" name="search"
                value="<?php echo e(request('search')); ?>"
                placeholder="Cari treatment..."
                class="w-full px-5 py-3 rounded-l-2xl border border-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

            <button class="px-6 bg-pink-500 text-white font-bold rounded-r-2xl hover:bg-pink-600">
                Search
            </button>
        </form>
    </div>

    <?php if(request('search')): ?>
        <p class="text-center text-pink-700 font-semibold mb-6 reveal">
            Hasil pencarian untuk: "<span class="font-bold"><?php echo e(request('search')); ?></span>"
        </p>
    <?php endif; ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

        <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $srv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="reveal mx-auto w-[75%]">

            
            <span class="service-name">
                <?php echo e(strtoupper($srv->name)); ?>

            </span>

            <a href="<?php echo e(route('layanan.detail', $srv->id)); ?>"
                class="block bg-white rounded-3xl shadow-xl overflow-hidden treatment-card border border-pink-200">

                <img src="<?php echo e(asset('storage/' . $srv->image)); ?>"
                    class="w-full h-[360px] object-cover object-center rounded-3xl">
            </a>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-center text-gray-600 col-span-2 reveal">
            Tidak ada treatment ditemukan.
        </p>
        <?php endif; ?>

    </div>

    
    <div class="text-center mt-14 reveal">
        <a href="https://wa.me/yourphonenumber"
            class="py-3 px-10 bg-pink-500 text-white font-bold rounded-full shadow-lg hover:scale-105 transition">
            Booking Via Whatsapp
        </a>
    </div>

</section>

<script>
    const reveals = document.querySelectorAll(".reveal");

    function revealOnScroll() {
        let windowHeight = window.innerHeight;
        reveals.forEach(el => {
            if (el.getBoundingClientRect().top < windowHeight - 50) {
                el.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", revealOnScroll);
    window.addEventListener("load", revealOnScroll);
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/service/kategori.blade.php ENDPATH**/ ?>