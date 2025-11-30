
<?php $__env->startSection('title','Create Product'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.partials.alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<form action="<?php echo e(route('admin.products.store')); ?>" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
    <?php echo $__env->make('admin.products._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Save</button>
        <a href="<?php echo e(route('admin.products.index')); ?>" class="ml-2 text-gray-600">Cancel</a>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/admin/products/create.blade.php ENDPATH**/ ?>