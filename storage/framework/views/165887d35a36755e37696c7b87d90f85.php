<?php $__env->startSection('title', 'Tambah Testimoni - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ================== STAR STYLE ================== */
.rating-star i{
    color:#d1d5db;
    cursor:pointer;
    transition:.3s;
}

.rating-star i.hovered,
.rating-star i.active{
    color:#FFD700;
    text-shadow:0 0 8px #FFD700;
}

@keyframes cring {
    0%   { transform: scale(.8) rotate(0deg); }
    40%  { transform: scale(1.5) rotate(15deg); }
    80%  { transform: scale(.9) rotate(-10deg); }
    100% { transform: scale(1) rotate(0deg); }
}
.cring { animation: cring .4s ease; }

/* CARD STYLE */
.form-card{
    transition:.3s;
    box-shadow:0 12px 25px rgba(0,0,0,.2);
}
.form-card:hover{
    transform:translateY(-6px);
    box-shadow:0 25px 40px rgba(0,0,0,.35);
}
</style>

<section class="min-h-screen py-16 px-4 sm:px-6 lg:px-8" style="background-color:#FFE2E2;">
    <div class="max-w-xl mx-auto p-8 rounded-xl border-4 border-[#E195AB] form-card"
         style="background-color:#f8e1e6;">
        
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Bagikan Pengalaman Anda
        </h2>

        <form method="POST" action="<?php echo e(route('testimoni.store')); ?>"
              enctype="multipart/form-data" class="space-y-6">
            <?php echo csrf_field(); ?>

            <!-- ================== PILIH LAYANAN ================== -->
            <div>
                <label class="block font-medium text-gray-700 mb-2">
                    Pilih Layanan
                </label>

                <select name="service_id" required 
                        class="w-full px-3 py-2 border rounded-lg bg-white">
                    <option value="">-- Pilih layanan yang ingin direview --</option>

                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php $__errorArgs = ['service_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- UPLOAD FOTO -->
            <div>
                <label class="block font-medium text-gray-700 mb-2">
                    Upload Foto (Max 5)
                </label>
                <input type="file" name="images[]" multiple 
                       class="w-full px-3 py-2 border rounded-lg bg-white">
                <small class="text-gray-600 italic">
                    Bisa upload lebih dari satu. Maksimal 5 foto.
                </small>

                <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php $__errorArgs = ['images.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- RATING -->
            <div>
                <label class="block text-lg font-medium text-gray-700 mb-2">
                    Beri Rating
                </label>

                <div id="stars" class="flex space-x-2 text-3xl rating-star">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <i class="fa-regular fa-star" data-value="<?php echo e($i); ?>"></i>
                    <?php endfor; ?>
                </div>

                <input type="hidden" name="rating" id="rating" value="0">

                <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- ULASAN -->
            <div>
                <label class="block font-medium text-gray-700 mb-2">
                    Ulasan Anda
                </label>
                <textarea name="message" rows="5" required
                    class="w-full px-4 py-3 border rounded-lg bg-white"></textarea>

                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-600 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit"
                class="w-full py-3 bg-[#E195AB] text-white font-semibold rounded-lg shadow-md hover:bg-[#D18D9F] transition">
                Kirim Testimoni
            </button>
        </form>
    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<script>
const stars = document.querySelectorAll('#stars i');
const ratingInput = document.getElementById('rating');

stars.forEach((star, index) => {
    star.addEventListener('mouseover', () => {
        stars.forEach((s, i) => s.classList.toggle('hovered', i <= index));
    });

    star.addEventListener('mouseout', () => {
        stars.forEach(s => s.classList.remove('hovered'));
    });

    star.addEventListener('click', () => {
        const value = index + 1;
        ratingInput.value = value;

        stars.forEach((s, i) => {
            s.classList.toggle('active', i < value);

            if(i < value){
                s.classList.remove('fa-regular');
                s.classList.add('fa-solid', 'cring');
                setTimeout(() => s.classList.remove('cring'), 400);
            } else {
                s.classList.remove('fa-solid');
                s.classList.add('fa-regular');
            }
        });
    });
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/testimoni/create_testimoni.blade.php ENDPATH**/ ?>