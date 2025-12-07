<?php $__env->startSection('title','Edit Gallery'); ?>
<?php $__env->startSection('content'); ?>

<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Edit Gallery Item</h2>

    <form action="<?php echo e(route('admin.gallery.update', $gallery)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('admin.gallery._form', ['item' => $gallery], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Update</button>
        <a href="<?php echo e(route('admin.gallery.index')); ?>" class="ml-2 text-gray-600">Cancel</a>
    </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/admin/gallery/edit.blade.php ENDPATH**/ ?>