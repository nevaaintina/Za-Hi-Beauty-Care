<?php echo csrf_field(); ?>
<div class="grid grid-cols-1 gap-4">
    <label class="block">
        <span class="text-sm font-medium">Name</span>
        <input type="text" name="name" value="<?php echo e(old('name', $item->name ?? '')); ?>" class="mt-1 block w-full border rounded p-2" required>
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
<?php /**PATH C:\laragon\www\zahi-web\resources\views\admin\products\_form.blade.php ENDPATH**/ ?>