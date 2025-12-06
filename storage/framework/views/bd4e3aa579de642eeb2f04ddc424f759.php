

<?php $__env->startSection('content'); ?>
<div class="p-6 max-w-3xl mx-auto">

    <h2 class="text-xl font-bold mb-4">
        Chat dengan: <span class="text-pink-600"><?php echo e($username); ?></span>
    </h2>

    <div class="bg-white border rounded-lg p-4 h-[60vh] overflow-y-auto mb-4 space-y-3">

        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if($msg->sender == 'user'): ?>
                <div class="flex justify-start">
                    <div class="bg-gray-200 px-3 py-2 rounded-lg max-w-xs">
                        <strong><?php echo e($msg->user_name); ?>:</strong><br>
                        <?php echo e($msg->message); ?>

                    </div>
                </div>

            
            <?php else: ?>
                <div class="flex justify-end">
                    <div class="bg-blue-500 text-white px-3 py-2 rounded-lg max-w-xs">
                        <strong>Admin:</strong><br>
                        <?php echo e($msg->message); ?>

                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    
    <form action="<?php echo e(route('admin.chats.reply', $messages->first()->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="flex gap-2">
            <input type="text"
                name="message"
                placeholder="Balas {{ $username }} ..."
                class="flex-1 border rounded p-2"
                required>

            <button class="px-4 py-2 bg-pink-600 text-white rounded">
                Kirim
            </button>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/admin/chats/show.blade.php ENDPATH**/ ?>