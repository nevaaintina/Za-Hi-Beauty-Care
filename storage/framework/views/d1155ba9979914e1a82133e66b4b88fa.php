<?php $__env->startSection('title', 'Edit Profil - ZA & HI'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="min-h-screen pt-10 pb-20 px-6" style="background-color: #FFE2E2;">
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-10 relative">

        
        <a href="/profil"
           class="absolute top-6 left-6 px-4 py-2 rounded-full font-semibold 
                  bg-[#E195AB] text-white shadow-lg hover:bg-[#d47a94] 
                  hover:scale-105 transition duration-200">
            ← Back
        </a>

        <h2 class="text-xl font-bold mb-10 text-center text-gray-800">Edit Profil</h2>

        
        <form action="<?php echo e(route('profil.update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            
            <div class="flex justify-center flex-col items-center mb-8">

                <img 
                    id="previewImage"
                    src="<?php echo e($user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.png')); ?>"
                    class="w-40 h-40 rounded-full object-cover shadow-md mb-4 bg-gray-200"
                    alt="Foto Profil">

                <label class="block">
                    <span class="text-gray-700 font-semibold">Ubah Foto</span>
                    <input type="file" name="photo" accept="image/*"
                           class="block w-full mt-2 text-sm
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-[#E195AB] file:text-white
                                  hover:file:bg-[#d47a94]"
                           onchange="loadPreview(event)">
                </label>

                
                <script>
                    function loadPreview(e) {
                        const output = document.getElementById('previewImage');
                        output.src = URL.createObjectURL(e.target.files[0]);
                    }
                </script>

                <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="mb-6">
                <label class="block font-semibold mb-2">Nama</label>
                <input type="text" name="name" 
                       value="<?php echo e(old('name', $user->name)); ?>"
                       class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-[#E195AB]">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="mb-6">
                <label class="block font-semibold mb-2">Email</label>
                <input type="email" name="email" 
                       value="<?php echo e(old('email', $user->email)); ?>"
                       class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-[#E195AB]">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="mb-6">
                <label class="block font-semibold mb-2">No HP</label>
                <input type="text" name="phone"
                       value="<?php echo e(old('phone', $user->phone)); ?>"
                       class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-[#E195AB]">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <button type="submit" 
                    class="w-full bg-[#E195AB] text-white py-3 rounded-xl font-semibold text-center
                           hover:bg-[#d47a94] transition shadow-lg active:scale-95">
                Simpan Perubahan
            </button>
        </form>

    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views\profil\edit.blade.php ENDPATH**/ ?>