<?php echo csrf_field(); ?>


<label class="block mb-3">
    <span class="text-sm font-medium">Name</span>
    <input
        type="text"
        name="name"
        value="<?php echo e(old('name', $item->name ?? '')); ?>"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
        required
    >
</label>


<label class="block mb-3">
    <span class="text-sm font-medium">Description</span>
    <textarea
        name="description"
        class="w-full border rounded p-2 h-28 focus:ring focus:ring-blue-200"
    ><?php echo e(old('description', $item->description ?? '')); ?></textarea>
</label>


<label class="block mb-3">
    <span class="text-sm font-medium">Category</span>
    <select
        name="category"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200"
        required
    >
        <?php
            $selected = old('category', $item->category ?? '');
        ?>
        
        <option value="facial" <?php echo e($selected === 'facial' ? 'selected' : ''); ?>>Facial</option>
        <option value="body" <?php echo e($selected === 'body' ? 'selected' : ''); ?>>Body</option>
        <option value="hair" <?php echo e($selected === 'hair' ? 'selected' : ''); ?>>Hair</option>
    </select>
</label>


<label class="block mb-3">
    <span class="text-sm font-medium">Image</span>
    <input type="file" name="image" class="w-full">

    <?php if(!empty($item->image)): ?>
        <img
            src="<?php echo e(asset('storage/'.$item->image)); ?>"
            class="w-32 h-20 mt-2 rounded object-cover border"
            alt="Preview"
        >
    <?php endif; ?>
</label>
<?php /**PATH C:\laragon\www\zahi-web\resources\views\admin\services\_form.blade.php ENDPATH**/ ?>