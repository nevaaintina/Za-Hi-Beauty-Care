<?php echo csrf_field(); ?>

<div class="grid grid-cols-1 gap-4">

    <label class="block">
        <span class="text-sm font-medium">Category</span>
        <select name="category" required class="mt-1 block w-full border rounded p-2">
            <option value="">-- Select Category --</option>
            <?php $__currentLoopData = ['salon','aset','promo','pricelist','certificate']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cat); ?>" 
                    <?php echo e(old('category', $item->category ?? '') == $cat ? 'selected' : ''); ?>>
                    <?php echo e(ucfirst($cat)); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </label>

    <label class="block">
        <span class="text-sm font-medium">Description</span>
        <textarea name="description" class="mt-1 block w-full border rounded p-2"><?php echo e(old('description', $item->description ?? '')); ?></textarea>
    </label>

    <label class="block">
        <span class="text-sm font-medium">Image</span>
        <input type="file" name="image" class="mt-1 block w-full">

        <?php if(!empty($item->image)): ?>
            <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="w-32 h-20 object-cover mt-2 rounded">
        <?php endif; ?>
    </label>

</div>
<?php /**PATH C:\laragon\www\zahi-web\resources\views\admin\gallery\_form.blade.php ENDPATH**/ ?>