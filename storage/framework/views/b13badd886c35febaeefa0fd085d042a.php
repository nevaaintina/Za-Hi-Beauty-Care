<?php if(session('success')): ?>
<div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-800 rounded">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<?php if($errors->any()): ?>
<div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-800 rounded">
    <ul class="list-disc pl-5">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <li><?php echo e($e); ?></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\zahi-web\resources\views\admin\partials\alerts.blade.php ENDPATH**/ ?>