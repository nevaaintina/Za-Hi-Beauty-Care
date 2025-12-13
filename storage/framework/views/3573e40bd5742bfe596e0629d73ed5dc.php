<?php $__env->startSection('title', 'Manage Chats'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.partials.alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-semibold">Chat Messages</h2>
</div>


<div class="mb-4 flex items-center justify-between gap-4">
    <form action="<?php echo e(route('admin.chats.index')); ?>" method="GET" class="flex gap-2 w-full max-w-md">
        <input 
            type="text" 
            name="search" 
            value="<?php echo e(request('search')); ?>"
            placeholder="Search username or message..."
            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-pink-200"
        >
        <button class="bg-dark-pink text-white px-4 py-2 rounded-lg hover:brightness-110">
            Search
        </button>
    </form>

    <?php if(request('search')): ?>
        <a href="<?php echo e(route('admin.chats.index')); ?>" 
           class="text-sm text-gray-600 hover:text-red-600">
            Reset
        </a>
    <?php endif; ?>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
    <div class="overflow-hidden rounded-xl border border-gray-200">

        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 sticky top-0 z-10">
                <tr class="text-left text-gray-700">
                    <th class="px-6 py-3 font-semibold">#</th>
                    <th class="px-6 py-3 font-semibold">User</th>
                    <th class="px-6 py-3 font-semibold">Message</th>
                    <th class="px-6 py-3 font-semibold">Sender</th>
                    <th class="px-6 py-3 font-semibold">Time</th>
                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="hover:bg-gray-50 transition-all">
                    <td class="px-6 py-4">
                        <?php echo e($chats->firstItem() + $i); ?>

                    </td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        <?php echo e($chat->user_name); ?>

                    </td>

                    <td class="px-6 py-4 text-gray-700">
                        <?php echo e(Str::limit($chat->message, 60)); ?>

                    </td>

                    <td class="px-6 py-4 text-gray-900">
                        <span class="px-3 py-1 rounded-full text-xs font-medium 
                            <?php echo e($chat->sender == 'admin' ? 'bg-blue-100 text-blue-700' : 'bg-green-100 text-green-700'); ?>">
                            <?php echo e(ucfirst($chat->sender)); ?>

                        </span>
                    </td>

                    <td class="px-6 py-4 text-gray-600 text-sm">
                        <?php echo e($chat->created_at->format('d M Y, H:i')); ?>

                    </td>

                    
                    <td class="px-6 py-4 text-right space-x-3">
                        <form action="<?php echo e(route('admin.chats.destroy', $chat->id)); ?>"
                              method="POST"
                              onsubmit="return confirm('Delete this chat?')"
                              class="inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="text-red-600 hover:text-red-800 font-medium">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="py-6 text-center text-gray-500">
                        No chat messages found
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>

    
    <div class="mt-4">
        <?php echo e($chats->appends(request()->query())->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views\admin\chats\index.blade.php ENDPATH**/ ?>