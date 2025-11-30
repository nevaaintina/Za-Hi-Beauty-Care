
<?php $__env->startSection('title','Create User'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.partials.alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold text-gray-800">Create New User</h2>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 max-w-2xl mx-auto">
    <form action="<?php echo e(route('admin.users.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
        <?php echo csrf_field(); ?>
         <?php echo $__env->make('admin.users._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
         <div class="mt-4">
        <button class="bg-dark-pink text-white px-4 py-2 rounded">Save</button>
        <a href="<?php echo e(route('admin.users.index')); ?>" class="ml-2 text-gray-600">Cancel</a>
    </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/admin/users/create.blade.php ENDPATH**/ ?>