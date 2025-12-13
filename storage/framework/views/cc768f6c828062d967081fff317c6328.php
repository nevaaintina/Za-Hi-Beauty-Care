<?php $__env->startSection('title', 'Profil Saya - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="min-h-screen pt-14 pb-24 px-6 flex justify-center items-start"
         style="background: linear-gradient(135deg, #FFE6EA, #FFD6DF);">
    
    <div class="max-w-5xl w-full bg-white rounded-3xl shadow-xl p-10 relative overflow-hidden"
         style="animation: fadeIn .6s ease;">
        
        
        <a href="/"
           class="absolute top-6 left-6 px-4 py-2 rounded-full font-semibold 
                  bg-[#E195AB] text-white shadow-lg hover:bg-[#d47a94] hover:scale-110 
                  transition duration-200 flex items-center gap-2">
            <i class="fas fa-arrow-left"></i> Back
        </a>

        
        <h2 class="text-2xl font-extrabold mb-12 text-center text-gray-800 tracking-wide">
            ✨ Akun Saya ✨
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            
            
            
            <div class="col-span-2 flex flex-col items-center">

                
                <div class="relative group">
                    <img 
                        src="<?php echo e($user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.jpg')); ?>"
                        class="w-44 h-44 rounded-full object-cover shadow-xl border-4 border-pink-200 transition 
                               group-hover:scale-105 group-hover:shadow-2xl"
                        alt="Foto Profil">

                    
                    <div class="absolute inset-0 rounded-full bg-pink-200 opacity-0 blur-xl group-hover:opacity-40 transition"></div>
                </div>

                
                <div class="w-full flex justify-center mt-8">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-bold rounded-full shadow-md 
                                text-center w-3/4 hover:shadow-lg hover:scale-105 transition">
                        <?php echo e($user->name); ?>

                    </div>
                </div>

                
                <div class="w-full flex justify-center mt-4">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-semibold rounded-full shadow 
                                text-center w-3/4 hover:shadow-lg hover:scale-105 transition">
                        <?php echo e($user->email); ?>

                    </div>
                </div>

                
                <div class="w-full flex justify-center mt-4">
                    <div class="px-6 py-3 bg-[#F8B5C5] text-gray-800 font-semibold rounded-full shadow 
                                text-center w-3/4 hover:shadow-lg hover:scale-105 transition">
                        <?php echo e($user->phone); ?>

                    </div>
                </div>

            </div>

            
            
            
            <div class="flex flex-col justify-start items-center w-full space-y-4">

                
                <a href="/profil/edit" 
                   class="w-full bg-[#E195AB] py-3 rounded-xl shadow text-center font-semibold 
                          hover:bg-[#d47a94] transition hover:scale-105 flex items-center justify-center gap-2 text-white">
                    <i class="fas fa-user-edit"></i> Edit Profil
                </a>

                
                <a href="/testimoni" 
                   class="w-full bg-[#E195AB] py-3 rounded-xl shadow text-center font-semibold 
                          hover:bg-[#d47a94] transition hover:scale-105 flex items-center justify-center gap-2 text-white">
                    <i class="fas fa-comment"></i> Testimoni
                </a>

                
                <div class="mt-12 opacity-80 hover:opacity-100 transition hover:scale-105">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" class="w-32" alt="ZA & Hi">
                </div>

            </div>

        </div>

    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views\profil\index.blade.php ENDPATH**/ ?>