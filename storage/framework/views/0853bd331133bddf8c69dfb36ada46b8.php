<?php $__env->startSection('title', 'Daftar Akun Baru - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<section class="min-h-screen flex items-center justify-center py-10 bg-white" 
    style="background-image: url('<?php echo e(asset('images/watercolor-bg.png')); ?>'); background-size: cover; background-position: center;">
    
    <div class="w-full max-w-lg p-8 space-y-6 bg-white bg-opacity-70 backdrop-blur-sm rounded-xl shadow-xl border-4 border-[#F5A9B8]">
        <div class="text-center">
            
            <label for="profile_picture" class="cursor-pointer mx-auto w-32 h-32 rounded-full bg-[#F8D1DB] border-4 border-[#E195AB] flex items-center justify-center shadow-lg hover:shadow-xl transition duration-300">
                <i class="fas fa-plus fa-3x text-[#E195AB]" id="profile-icon"></i>
                <img id="profile-preview" src="#" alt="Preview" class="hidden w-full h-full object-cover rounded-full">
            </label>
            <input type="file" id="profile_picture" name="profile_picture" class="hidden" accept="image/*">

            <h2 class="mt-4 text-xl font-semibold text-gray-800">Daftar Akun</h2>
        </div>

        
        <form method="POST" action="/register" class="space-y-4">
            <?php echo csrf_field(); ?> 
            
            <div>
                <input type="text" name="name" placeholder="Nama" required 
                        class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] placeholder-[#E195AB] text-lg bg-[#F8D1DB] transition duration-150 ease-in-out">
            </div>

            <div>
                <input type="email" name="email" placeholder="Email" required 
                        class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] placeholder-[#E195AB] text-lg bg-[#F8D1DB] transition duration-150 ease-in-out">
            </div>

            <div>
                <input type="password" name="password" placeholder="Kata sandi" required 
                        class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] placeholder-[#E195AB] text-lg bg-[#F8D1DB] transition duration-150 ease-in-out">
            </div>

            <div>
                <input type="password" name="password_confirmation" placeholder="Ulangi kata sandi" required 
                        class="w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg focus:ring-[#E195AB] focus:border-[#E195AB] placeholder-[#E195AB] text-lg bg-[#F8D1DB] transition duration-150 ease-in-out">
            </div>

            <button type="submit" 
                    class="w-full py-3 bg-[#E195AB] text-white font-semibold rounded-lg shadow-md hover:bg-[#D18D9F] transition duration-300 ease-in-out">
                Daftar
            </button>
        </form>
        
        <p class="text-center text-sm text-gray-600">
            Sudah punya akun? <a href="/login" class="text-pink-600 hover:text-pink-800 font-medium">Masuk di sini.</a>
        </p>
    </div>
</section>



<script>
document.getElementById('profile_picture').addEventListener('change', function(event) {
    const [file] = event.target.files
    const preview = document.getElementById('profile-preview');
    const icon = document.getElementById('profile-icon');
    const label = document.querySelector('label[for="profile_picture"]');
    
    if (file) {
        // Mengisi preview gambar
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
        icon.classList.add('hidden');
        label.classList.add('p-0', 'overflow-hidden'); // Hapus padding jika ada dan sembunyikan overflow
    } else {
        preview.classList.add('hidden');
        icon.classList.remove('hidden');
        label.classList.remove('p-0', 'overflow-hidden');
    }
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views\register.blade.php ENDPATH**/ ?>