

<?php $__env->startSection('title', 'Masuk Akun - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<section class="min-h-screen flex items-center justify-center py-10 bg-white" 
    style="background-image: url('<?php echo e(asset('images/watercolor-bg.png')); ?>'); background-size: cover; background-position: center;">
    
    <div class="w-full max-w-lg p-8 space-y-6 bg-white bg-opacity-70 backdrop-blur-sm rounded-xl shadow-xl border-4 border-[#F5A9B8]">
        <div class="text-center">
            <h2 class="mt-4 text-xl font-semibold text-gray-800">Masuk Akun</h2>
        </div>

        <form method="POST" action="/login" class="space-y-4">
            
            <div>
                <input type="email" name="email" placeholder="Email" required 
                       class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] placeholder-[#E195AB] text-lg bg-[#F8D1DB] transition duration-150 ease-in-out">
            </div>

            <div>
                <input type="password" name="password" placeholder="Kata sandi" required 
                       class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] placeholder-[#E195AB] text-lg bg-[#F8D1DB] transition duration-150 ease-in-out">
            </div>

            <button type="submit" 
                    class="w-full py-3 bg-[#E195AB] text-white font-semibold rounded-lg shadow-md hover:bg-[#D18D9F] transition duration-300 ease-in-out">
                Login
            </button>
        </form>
        
        <p class="text-center text-sm text-gray-600">
            Belum punya akun? <a href="/register" class="text-[#E195AB] hover:text-[#D18D9F] font-medium">Daftar sekarang.</a>
        </p>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/login.blade.php ENDPATH**/ ?>