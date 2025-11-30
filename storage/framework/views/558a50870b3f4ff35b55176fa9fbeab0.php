<?php $__env->startSection('title', 'Daftar Akun Baru - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="min-h-screen flex items-center justify-center py-5 bg-white"
    style="background-image: url('<?php echo e(asset('images/watercolor-bg.png')); ?>'); background-size: cover; background-position: center;">

    <div
        class="w-full max-w-lg p-8 space-y-6 bg-white bg-opacity-70 backdrop-blur-md
               rounded-2xl shadow-2xl border-4 border-[#F5A9B8]
               transition duration-500 hover:scale-[1.02]">

        
        <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div class="text-center">
                
                <label for="photo"
                    class="group cursor-pointer mx-auto w-32 h-32 rounded-full bg-[#F8D1DB] border-4 border-[#E195AB]
                           flex items-center justify-center shadow-lg hover:shadow-2xl transition relative overflow-hidden">

                    <i class="fas fa-plus fa-3x text-[#E195AB] transition group-hover:scale-110"
                       id="profile-icon"></i>

                    <img id="profile-preview"
                         src="#"
                         class="hidden w-full h-full object-cover rounded-full transition duration-500">

                    <span
                        class="absolute bottom-0 text-xs bg-black bg-opacity-40 text-white px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">
                        Ubah Foto
                    </span>
                </label>

                <input type="file" id="photo" name="photo" class="hidden" accept="image/*">

                <h2 class="mt-4 text-2xl font-bold text-gray-800 tracking-wide">
                    Daftar Akun
                </h2>
            </div>

            
            <?php
                $inputStyle = "w-full px-4 py-3 border-2 border-[#E195AB] rounded-lg bg-[#F8D1DB]
                               placeholder-[#E195AB] focus:outline-none focus:ring-2
                               focus:ring-pink-400 focus:border-pink-400 transition";
            ?>

            
            <input type="text" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Nama"
                class="<?php echo e($inputStyle); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email"
                class="<?php echo e($inputStyle); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            
            <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Nomor Telepon"
                class="<?php echo e($inputStyle); ?>">
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            
            <div class="relative">
                <input type="password" name="password" id="password" required placeholder="Kata sandi"
                    class="<?php echo e($inputStyle); ?> pr-10">
                <i class="fas fa-eye absolute right-4 top-4 cursor-pointer text-gray-500"
                   onclick="togglePassword('password', this)"></i>
            </div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            
            <div class="relative">
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    placeholder="Ulangi kata sandi"
                    class="<?php echo e($inputStyle); ?> pr-10">
                <i class="fas fa-eye absolute right-4 top-4 cursor-pointer text-gray-500"
                   onclick="togglePassword('password_confirmation', this)"></i>
            </div>
            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit"
                class="w-full py-3 bg-gradient-to-r from-pink-400 to-pink-600
                       text-white font-semibold rounded-lg shadow-md
                       hover:shadow-xl hover:scale-105 transition duration-300">
                Daftar
            </button>

        </form>
        

        <p class="text-center text-sm text-gray-600">
            Sudah punya akun?
            <a href="<?php echo e(route('login')); ?>"
               class="text-pink-600 hover:text-pink-800 font-medium transition">
                Masuk di sini.
            </a>
        </p>
    </div>
</section>


<script>
document.getElementById('photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('profile-preview');
    const icon = document.getElementById('profile-icon');

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
        icon.classList.add('hidden');
        preview.classList.add('animate-pulse');
        setTimeout(() => preview.classList.remove('animate-pulse'), 800);
    } else {
        preview.classList.add('hidden');
        icon.classList.remove('hidden');
    }
});

function togglePassword(id, icon) {
    const input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = "password";
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/auth/register.blade.php ENDPATH**/ ?>