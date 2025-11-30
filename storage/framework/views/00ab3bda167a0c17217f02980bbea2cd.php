
<?php $__env->startSection('title','Testimonials'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.partials.alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-semibold">Testimonials</h2>
</div>


<div class="mb-4 flex items-center justify-between gap-4">
    <form action="<?php echo e(route('admin.testimonials.index')); ?>" method="GET" class="flex gap-2 w-full max-w-md">
        <input 
            type="text" 
            name="search" 
            value="<?php echo e(request('search')); ?>"
            placeholder="Search user, message, or service..."
            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-pink-200"
        >
        <button class="bg-dark-pink text-white px-4 py-2 rounded-lg hover:brightness-110">
            Search
        </button>
    </form>

    <?php if(request('search')): ?>
        <a href="<?php echo e(route('admin.testimonials.index')); ?>" 
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
                    <th class="px-6 py-3 font-semibold">Service</th>
                    <th class="px-6 py-3 font-semibold">Rating</th>
                    <th class="px-6 py-3 font-semibold">Message</th>
                    <th class="px-6 py-3 font-semibold">Image</th>
                    <th class="px-6 py-3 font-semibold">Published</th>
                    <th class="px-6 py-3 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="hover:bg-gray-50 transition-all">
                    <td class="px-6 py-4"><?php echo e($items->firstItem() + $i); ?></td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        <?php echo e($t->user->name ?? 'Deleted User'); ?>

                    </td>

                    
                    <td class="px-6 py-4 font-medium text-gray-900">
                        <?php echo e($t->service->name ?? '-'); ?>

                    </td>

                    
                    <td class="px-6 py-4 text-center text-yellow-500">
                        <?php for($k = 1; $k <= 5; $k++): ?>
                            <?php if($k <= $t->rating): ?>
                                <i class="fas fa-star text-xs"></i>
                            <?php else: ?>
                                <i class="far fa-star text-xs text-gray-300"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </td>

                    
                    <td class="px-6 py-4 text-gray-700">
                        <?php echo e(Str::limit($t->message, 50)); ?>

                    </td>

                    
                    <td class="px-6 py-4">
    <?php if(is_array($t->images)): ?>
        <?php $__currentLoopData = $t->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(asset('storage/' . $img)); ?>" 
                 class="w-12 h-12 object-cover rounded-full inline-block mr-1 mb-1">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <span>No image</span>
    <?php endif; ?>
</td>


                    
                    <td class="px-6 py-4">
                        <?php if($t->published): ?>
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">
                                Yes
                            </span>
                        <?php else: ?>
                            <span class="px-3 py-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full">
                                No
                            </span>
                        <?php endif; ?>
                    </td>

                    
                    <td class="px-6 py-4 text-right space-x-3">
                        <form action="<?php echo e(route('admin.testimonials.destroy', $t)); ?>"
                              method="POST" 
                              class="inline-block"
                              onsubmit="return confirm('Delete this testimonial?')">
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field('DELETE'); ?>
                            <button class="text-red-600 hover:text-red-800 font-medium transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="8" class="py-6 text-center text-gray-500">
                        No testimonials found
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    
    <div class="mt-4">
        <?php echo e($items->appends(request()->query())->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/admin/testimonials/index.blade.php ENDPATH**/ ?>