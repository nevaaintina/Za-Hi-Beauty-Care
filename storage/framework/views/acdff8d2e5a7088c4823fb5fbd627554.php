<form action="<?php echo e(isset($user->id) ? route('admin.users.update', $user->id) : route('admin.users.store')); ?>" 
      method="POST" 
      enctype="multipart/form-data">

    <?php echo csrf_field(); ?>
    <?php if(isset($user->id)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <div class="grid grid-cols-1 gap-4">

        
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Name</span>
            <input type="text" name="name" 
                   value="<?php echo e(old('name', $user->name ?? '')); ?>" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>

        
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Email</span>
            <input type="email" name="email" 
                   value="<?php echo e(old('email', $user->email ?? '')); ?>" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>

        
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Phone</span>
            <input type="text" name="phone" 
                   value="<?php echo e(old('phone', $user->phone ?? '')); ?>" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>

        
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Password</span>
            <input type="password" name="password"
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   placeholder="<?php echo e(isset($user->id) ? 'Biarkan kosong jika tidak diganti' : 'Masukkan password'); ?>">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>

        
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Role</span>
            <select name="role" 
                    class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <option value="admin" <?php echo e(old('role', $user->role ?? '')=='admin' ? 'selected' : ''); ?>>Admin</option>
                <option value="user" <?php echo e(old('role', $user->role ?? '')=='user' ? 'selected' : ''); ?>>User</option>
            </select>
            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>

        
        <label class="block">
            <span class="text-sm font-medium text-gray-700">Photo</span>
            <input type="file" name="photo" 
                   class="w-full border rounded-lg p-2 focus:ring-pink-400 focus:border-pink-400 <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php if(!empty($user->photo)): ?>
                <img src="<?php echo e(asset('storage/'.$user->photo)); ?>" 
                     class="w-32 h-32 mt-3 rounded-lg object-cover shadow-md border">
            <?php endif; ?>
        </label>

    </div>

</form>
<?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/admin/users/_form.blade.php ENDPATH**/ ?>