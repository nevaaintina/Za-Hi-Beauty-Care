<?php $__env->startSection('title', 'Tambah Testimoni - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="min-h-screen py-16 px-4 sm:px-6 lg:px-8" style="background-color: #FFE2E2;">
    <div class="max-w-xl mx-auto p-8 rounded-xl shadow-xl border-4 border-[#E195AB]" style="background-color: #f8e1e6;">
        
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Bagikan Pengalaman Anda</h2>

        <form method="POST" action="/testimoni" enctype="multipart/form-data" class="space-y-6">
            <?php echo csrf_field(); ?>
            
            <div>
                <label for="photo" class="block text-lg font-medium text-gray-700 mb-2">Upload Foto Before/After (Opsional)</label>
                <input type="file" name="photo" id="photo" class="w-full px-3 py-2 border border-pink-300 rounded-lg bg-white">
            </div>

            <div>
                <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nama Anda</label>
                <input type="text" name="name" id="name" required 
                       class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] text-lg bg-[#F8D1DB]">
            </div>
            
            <div>
                <label class="block text-lg font-medium text-gray-700 mb-2">Beri Rating</label>
                <div class="flex space-x-1 text-2xl rating-star">
                    <i class="fas fa-star cursor-pointer hover:text-yellow-600"></i>
                    <i class="fas fa-star cursor-pointer hover:text-yellow-600"></i>
                    <i class="fas fa-star cursor-pointer hover:text-yellow-600"></i>
                    <i class="fas fa-star cursor-pointer hover:text-yellow-600"></i>
                    <i class="far fa-star cursor-pointer hover:text-yellow-600"></i>
                </div>
                <input type="hidden" name="rating" id="rating" value="4"> 
            </div>

            <div>
                <label for="review" class="block text-lg font-medium text-gray-700 mb-2">Ulasan Anda</label>
                <textarea name="review" id="review" rows="5" required 
                          class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] text-lg bg-[#F8D1DB]"></textarea>
            </div>

            <button type="submit" 
                    class="w-full py-3 bg-[#E195AB] text-white font-semibold rounded-lg shadow-md hover:bg-[#D18D9F] transition duration-300 ease-in-out">
                Kirim Testimoni
            </button>
        </form>
        
    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views\create_testimoni.blade.php ENDPATH**/ ?>