
<?php $__env->startSection('title','Add Gallery'); ?>
<?php $__env->startSection('content'); ?>

<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Add Gallery Item</h2>

    <form action="<?php echo e(route('admin.gallery.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo $__env->make('admin.gallery._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Save</button>
        <a href="<?php echo e(route('admin.gallery.index')); ?>" class="ml-2 text-gray-600">Cancel</a>
    </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/admin/gallery/create.blade.php ENDPATH**/ ?>