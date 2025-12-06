<?php $__env->startSection('title', 'Chatbot - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="min-h-screen py-8 px-4 sm:px-6 lg:px-8 relative" style="background-color:#FFE2E2;">
    <div class="max-w-3xl mx-auto flex flex-col h-[80vh] bg-white rounded-2xl shadow-xl overflow-hidden">

        
        <header class="bg-pink-300 text-white px-6 py-4 flex items-center gap-3 shadow-md">
            <a href="/konsultasi" class="text-white hover:text-gray-100">
                <i class="fas fa-arrow-left text-lg"></i>
            </a>
            <h1 class="text-xl font-bold flex items-center gap-2">
                <i class="fas fa-robot text-white text-2xl"></i> ZAHi Chatbot
            </h1>
        </header>

        
        <main id="chat-container" class="flex-grow p-4 overflow-y-auto space-y-4 bg-pink-50">
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex <?php echo e($chat->user_name == (auth()->user()->name ?? 'Anonim') ? 'justify-end' : 'justify-start'); ?>">
                    <div class="max-w-xs px-4 py-3 rounded-xl shadow <?php echo e($chat->user_name == (auth()->user()->name ?? 'Anonim') ? 'bg-pink-300 text-white' : 'bg-white text-gray-800'); ?>">
                        <p class="text-xs font-semibold mb-1"><?php echo e($chat->user_name); ?></p>
                        <p class="text-sm leading-relaxed"><?php echo e($chat->message); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </main>

        
        <footer class="bg-white p-4 border-t flex items-center gap-3">
            <form action="<?php echo e(route('chatbot.send')); ?>" method="POST" class="flex w-full gap-3">
                <?php echo csrf_field(); ?>
                <input type="text" name="message" placeholder="Tulis pesan..." required
                    class="flex-grow px-4 py-2 rounded-full border border-gray-300 focus:ring-2 focus:ring-pink-300 focus:outline-none">

                <button type="submit" class="bg-pink-400 hover:bg-pink-500 text-white px-5 py-2 rounded-full shadow-md transition">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </footer>
    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Za-Hi-Beauty-Care\resources\views/consultation/chatbot.blade.php ENDPATH**/ ?>