<?php $__env->startSection('title', 'Chat - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    :root {
        --pink-soft: #FFE2E2;
        --pink-user: #E195AB;
        --admin-green: #DCF8C6;
    }

    #chat-container {
        flex-grow: 1;
        overflow-y: auto;
        scroll-behavior: smooth;
        padding-bottom: 80px;
    }

    /* BUBBLE ANIMATION */
    .bubble {
        max-width: 75%;
        padding: 12px 16px;
        border-radius: 18px;
        font-size: 14px;
        position: relative;
        animation: pop .25s ease;
        transition: transform .15s ease;
    }

    .bubble:hover {
        transform: scale(1.03);
    }

    @keyframes pop {
        0% { transform: scale(.85); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    /* BUBBLE COLORS */
    .bubble.me { background: var(--pink-user); color: #fff; margin-left: auto; }
    .bubble.other { background: #fff; color: #333; margin-right: auto; }
    .bubble.admin { background: var(--admin-green); margin-right: auto; }

    /* BUBBLE TRIANGLE */
    .bubble.me::after {
        content: "";
        position: absolute;
        right: -6px; bottom: 8px;
        width: 10px; height: 10px;
        background: var(--pink-user);
        transform: rotate(45deg);
    }
    .bubble.other::after {
        content: "";
        position: absolute;
        left: -6px; bottom: 8px;
        width: 10px; height: 10px;
        background: #fff;
        transform: rotate(45deg);
    }
    .bubble.admin::after {
        content: "";
        position: absolute;
        left: -6px; bottom: 8px;
        width: 10px; height: 10px;
        background: var(--admin-green);
        transform: rotate(45deg);
    }

    .username {
        font-size: 11px;
        font-weight: bold;
        margin-bottom: 3px;
    }

    .time {
        font-size: 10px;
        opacity: .6;
        margin-top: 6px;
        text-align: right;
    }

    /* DELETE BUTTON */
    .delete-btn {
        position: absolute;
        top: -6px;
        right: -6px;
        background: rgba(0,0,0,.2);
        color: white;
        padding: 5px;
        border-radius: 50%;
        font-size: 10px;
        opacity: 0;
        cursor: pointer;
        transition: .2s ease;
    }

    .bubble.me:hover .delete-btn {
        opacity: 1;
    }

    /* INPUT SEND */
    .send-btn {
        background: var(--pink-user);
        border-radius: 50%;
        color: #fff;
        padding: 15px;
        transition: .2s ease;
    }

    .send-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(225, 149, 171, .6);
    }
</style>

<section class="w-full h-screen flex flex-col" style="background: var(--pink-soft)">

    <header class="bg-[var(--pink-user)] text-white px-5 py-4 flex items-center gap-3 shadow-md">
        <a href="/konsultasi" class="text-white text-xl">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-lg font-semibold flex items-center gap-2">
            <i class="fas fa-comments text-2xl"></i> Forum Diskusi ZaHi
        </h1>
    </header>

    <main id="chat-container" class="p-4 space-y-6">
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php
                $isMe = auth()->check() && $chat->user_name == auth()->user()->name;
                $isAdmin = str_contains($chat->user_name, '[ADMIN]');
            ?>

            <div class="flex <?php echo e($isMe ? 'justify-end' : 'justify-start'); ?>">
                <div class="max-w-[80%] relative">

                    <p class="username <?php echo e($isMe ? 'text-right text-pink-700' : 'text-left text-pink-900'); ?>">
                        <?php echo e($chat->user_name); ?>

                    </p>

                    <div class="bubble
                        <?php if($isAdmin): ?>
                            admin
                        <?php elseif($isMe): ?>
                            me
                        <?php else: ?>
                            other
                        <?php endif; ?>">

                        
                        <?php echo e($chat->message); ?>


                        
                        <p class="time"><?php echo e($chat->created_at->format('H:i')); ?></p>

                        
                        <?php if($isMe): ?>
                        <form action="<?php echo e(route('chat.delete', $chat->id)); ?>" method="POST"
                              onsubmit="return confirm('Hapus pesan ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="delete-btn">
                                <i class="fas fa-xmark"></i>
                            </button>
                        </form>
                        <?php endif; ?>

                    </div>

                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>

    <footer class="p-4 bg-white/40 backdrop-blur-lg">
        <form action="<?php echo e(route('chat.send')); ?>" method="POST" class="flex items-center gap-3">
            <?php echo csrf_field(); ?>

            <div class="flex-grow flex items-center bg-white px-4 py-3 rounded-full border-2 border-pink-300 shadow">
                <input type="text" name="message" placeholder="Tulis pesan..." required
                       class="w-full outline-none bg-transparent">
            </div>

            <button class="send-btn">
                <i class="fas fa-paper-plane text-lg"></i>
            </button>
        </form>
    </footer>

</section>

<script>
    const c = document.getElementById('chat-container');
    c.scrollTop = c.scrollHeight;
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views\consultation\chat.blade.php ENDPATH**/ ?>