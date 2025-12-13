<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-y-6">

    <!-- Cards - Peningkatan Interaktivitas dan Visual -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Card: Total Users -->
        <?php
            $usersData = $comparison['users'] ?? ['change' => 0, 'direction' => 'flat'];
            $usersColor = $usersData['direction'] === 'up' ? 'text-green-600' : ($usersData['direction'] === 'down' ? 'text-red-600' : 'text-gray-500');
            $usersChange = number_format(abs($usersData['change']), 2);
        ?>
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 
                    hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 transform cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="text-sm font-medium text-gray-500">Total Users</div>
                <i class="fas fa-users text-3xl text-dark-pink"></i>
            </div>
            <div class="mt-3 text-4xl font-extrabold text-gray-900"><?php echo e(number_format($stats['users'] ?? 0)); ?></div>
            <div class="text-xs mt-2 font-semibold">
            </div>
        </div>

        <!-- Card: Total Products -->
        <?php
            $productsData = $comparison['products'] ?? ['change' => 0, 'direction' => 'flat'];
            $productsColor = $productsData['direction'] === 'up' ? 'text-green-600' : ($productsData['direction'] === 'down' ? 'text-red-600' : 'text-gray-500');
            $productsChange = number_format(abs($productsData['change']), 2);
        ?>
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 
                    hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 transform cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="text-sm font-medium text-gray-500">Total Products</div>
                <i class="fas fa-box text-3xl text-dark-pink"></i>
            </div>
            <div class="mt-3 text-4xl font-extrabold text-gray-900"><?php echo e(number_format($stats['products'] ?? 0)); ?></div>
            <div class="text-xs mt-2 font-semibold">
            </div>
        </div>

        <!-- Card: Total Services -->
        <?php
            $servicesData = $comparison['services'] ?? ['change' => 0, 'direction' => 'flat'];
            $servicesColor = $servicesData['direction'] === 'up' ? 'text-green-600' : ($servicesData['direction'] === 'down' ? 'text-red-600' : 'text-gray-500');
            $servicesChange = number_format(abs($servicesData['change']), 2);
        ?>
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 
                    hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 transform cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="text-sm font-medium text-gray-500">Total Services</div>
                <i class="fas fa-spa text-3xl text-dark-pink"></i>
            </div>
            <div class="mt-3 text-4xl font-extrabold text-gray-900"><?php echo e(number_format($stats['services'] ?? 0)); ?></div>
            <div class="text-xs mt-2 font-semibold">
            </div>
        </div>

        <!-- Card: Total Testimonials -->
        <?php
            $testimonialsData = $comparison['testimonials'] ?? ['change' => 0, 'direction' => 'flat'];
            $testimonialsColor = $testimonialsData['direction'] === 'up' ? 'text-green-600' : ($testimonialsData['direction'] === 'down' ? 'text-red-600' : 'text-gray-500');
            $testimonialsChange = number_format(abs($testimonialsData['change']), 2);
        ?>
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 
                    hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 transform cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="text-sm font-medium text-gray-500">Total Testimonials</div>
                <i class="fas fa-comments text-3xl text-dark-pink"></i>
            </div>
            <div class="mt-3 text-4xl font-extrabold text-gray-900"><?php echo e(number_format($stats['testimonials'] ?? 0)); ?></div>
            <div class="text-xs mt-2 font-semibold">
            </div>
        </div>
    </div>

    <!-- Recent Data Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Recent Users (List View) - Peningkatan Animasi List -->
        <div class="lg:col-span-1 bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
            <h3 class="font-bold text-xl mb-4 text-gray-700 border-b pb-2">👤 Recent Users</h3>
            <ul class="space-y-3">
                <?php $__empty_1 = true; $__currentLoopData = $recentUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="flex items-center gap-4 p-3 rounded-lg hover:bg-light-pink transition-all transform hover:translate-x-1 cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-dark-pink text-white flex items-center justify-center text-sm font-semibold shadow-md flex-shrink-0">
                            <?php echo e(strtoupper(substr($u->name,0,1) ?? 'U')); ?>

                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-900"><?php echo e($u->name); ?></div>
                            <div class="text-xs text-gray-500"><?php echo e($u->email); ?></div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="text-sm text-gray-500 py-3 text-center">No new users registered recently.</li>
                <?php endif; ?>
                <a href="/admin/users" class="block text-sm text-brand-text hover:underline pt-3 text-right font-medium">View All Users</a>
            </ul>
        </div>

        <!-- Latest Products (Table) - Peningkatan Styling Badge -->
        <div class="lg:col-span-2 bg-white p-6 rounded-2xl shadow-xl border border-gray-100 overflow-x-auto">
            <h3 class="font-bold text-xl mb-4 text-gray-700 border-b pb-2">📦 Latest Products</h3>
            <table class="min-w-full text-sm">
                <thead class="text-left text-gray-600 border-b border-gray-300 uppercase text-xs">
                    <tr>
                        <th class="py-3 px-2">#</th>
                        <th class="py-3 px-2">Product Name</th>
                        <th class="py-3 px-2">Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $latestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="py-3 px-2"><?php echo e($idx + 1); ?></td>
                        <td class="py-3 px-2 font-medium"><?php echo e($p->name ?? 'N/A'); ?></td>
                        <td class="py-3 px-2 text-gray-500"><?php echo e($p->created_at ? $p->created_at->format('Y-m-d') : '-'); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr><td colspan="5" class="py-4 text-center text-gray-500">No recent products found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="/admin/products" class="block text-sm text-brand-text hover:underline pt-4 text-right font-medium">View All Products</a>
        </div>
    </div>

    <?php if(isset($latestTestimonials) || isset($latestGallery)): ?>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <!-- Latest Gallery Items - Peningkatan Animasi List -->
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
            <h3 class="font-bold text-xl mb-4 text-gray-700 border-b pb-2">🖼️ Latest Gallery Items</h3>
            <ul class="space-y-3">
                <?php $__empty_1 = true; $__currentLoopData = $latestGallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="flex items-center gap-4 p-2 rounded-lg hover:bg-light-pink transition-all transform hover:translate-x-0.5 cursor-pointer border-b last:border-b-0 pb-3">
                    <?php if($g->image): ?>
                        <img src="<?php echo e(asset('storage/'.$g->image)); ?>" class="w-14 h-14 object-cover rounded-lg shadow-md flex-shrink-0">
                    <?php else: ?>
                        <div class="w-14 h-14 bg-gray-100 rounded-lg flex items-center justify-center text-xs text-gray-500 flex-shrink-0">No Img</div>
                    <?php endif; ?>
                    <div>
                        <div class="text-sm font-semibold"><?php echo e($g->category ?? 'General'); ?></div>
                        <div class="text-xs text-gray-500 capitalize"><?php echo e($g->description ?? 'Untitled'); ?></div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="text-sm text-gray-500 py-3 text-center">No recent gallery items found.</li>
                <?php endif; ?>
            </ul>
            <a href="/admin/gallery" class="block text-sm text-brand-text hover:underline pt-4 text-right font-medium">View All Gallery</a>
        </div>

        <!-- Latest Testimonials - Peningkatan Rating Visual dan Divider -->
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
            <h3 class="font-bold text-xl mb-4 text-gray-700 border-b pb-2">💬 Latest Testimonials</h3>
            <ul class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $latestTestimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="border-b pb-4 last:border-b-0 transition-all transform hover:bg-light-pink/50 rounded-lg p-2">
                    <!-- Rating Bintang dan User -->
                    <div class="flex justify-between items-center mb-2">
                         <div class="text-yellow-500">
                            <?php for($k = 1; $k <= 5; $k++): ?>
                                <?php if($k <= $t->rating): ?>
                                    <i class="fas fa-star text-base"></i> <!-- Bintang lebih besar -->
                                <?php else: ?>
                                    <i class="far fa-star text-base text-gray-300"></i>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        <div class="text-sm font-semibold text-brand-text">
                             <?php echo e($t->user->name ?? 'Anonymous'); ?>

                        </div>
                    </div>

                    <!-- Pesan/Komentar -->
                    <p class="text-gray-700 italic text-sm line-clamp-3">
                        "<?php echo e($t->message ?? 'No message provided.'); ?>"
                    </p>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="text-sm text-gray-500 py-3 text-center">No new testimonials submitted.</li>
                <?php endif; ?>
            </ul>
            <a href="/admin/testimonials" class="block text-sm text-brand-text hover:underline pt-4 text-right font-medium">View All Testimonials</a>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views\admin\dashboard.blade.php ENDPATH**/ ?>