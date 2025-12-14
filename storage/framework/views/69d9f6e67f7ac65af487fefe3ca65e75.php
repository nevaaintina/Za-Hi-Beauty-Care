<?php $__env->startSection('title', 'Chat - ZA & Hi'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    :root {
        --pink-header: #E1A4AE; 
        --pink-user: #D66D88;
        --admin-color: #B2D8B2;
        --pink-dark: #944A5A;
    }

    /* BACKGROUND FOTO */
    .chat-bg {
        position: absolute;
        inset: 0;
        background-image: url('<?php echo e(asset('images/konsultasi.jpg')); ?>');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    /* OVERLAY GELAP */
    .chat-bg::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
    }

    /* LOGO POJOK KANAN ATAS */
    .chat-logo {
        position: absolute;
        top: 18px;
        right: 22px;
        width: 90px;
        z-index: 25;
        filter: drop-shadow(0 4px 10px rgba(0,0,0,.6));
    }

    #chat-container {
        flex-grow: 1;
        overflow-y: auto;
        padding: 1.5rem 1.5rem 6rem;
        position: relative;
        z-index: 10;
    }

    /* CHAT BUBBLE */
    .bubble {
        max-width: 75%;
        padding: 12px 16px;
        border-radius: 18px;
        font-size: 14px;
        animation: pop .25s ease;
        transition: .2s ease;
        box-shadow: 0 3px 8px rgba(0,0,0,.15);
    }

    .bubble.me {
        background: var(--pink-user);
        color: #fff;
        margin-left: auto;
        border-bottom-right-radius: 6px;
    }

    .bubble.other {
        background: #fff;
        color: #333;
        border-bottom-left-radius: 6px;
    }

    .bubble.admin {
        background: var(--admin-color);
        color: #333;
        border-bottom-left-radius: 6px;
    }

    .username {
        font-size: 11px;
        font-weight: 600;
        opacity: .85;
    }

    .time {
        font-size: 10px;
        opacity: .7;
        margin-top: 4px;
        text-align: right;
    }

    /* DELETE BUTTON */
    .delete-btn {
        position: absolute;
        top: -6px;
        right: -6px;
        background: #fff;
        color: var(--pink-dark);
        padding: 4px;
        border-radius: 50%;
        font-size: 10px;
        opacity: 0;
        transition: .2s ease;
        box-shadow: 0 2px 6px rgba(0,0,0,.3);
    }

    .bubble.me:hover .delete-btn {
        opacity: 1;
    }

    /* SEND */
    .send-btn {
        background: var(--pink-user);
        border-radius: 50%;
        color: #fff;
        padding: 13px;
        box-shadow: 0 4px 12px rgba(214,109,136,.6);
        transition: .2s ease;
    }

    .send-btn:hover {
        transform: scale(1.05);
    }
</style>

<section class="w-full h-screen flex flex-col relative font-sans">

    
    <div class="chat-bg"></div>

    
    <img src="<?php echo e(asset('images/logo1.png')); ?>" class="chat-logo" alt="Logo">

    
    <header class="text-white px-5 py-4 flex items-center gap-3 shadow-lg sticky top-0 z-20"
        style="background: linear-gradient(135deg, var(--pink-header), var(--pink-user));">
        
        <a href="/konsultasi" class="text-xl hover:bg-white/20 p-1 rounded-full">
            <i class="fas fa-arrow-left"></i>
        </a>

        <h1 class="text-xl font-bold flex items-center gap-3">
            <i class="fas fa-comments text-2xl"></i>
            Forum Diskusi ZaHi
        </h1>
    </header>

    
    <main id="chat-container" class="space-y-5">
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
            $isMe = auth()->check() && $chat->user_name == auth()->user()->name;
            $isAdmin = str_contains($chat->user_name, '[ADMIN]');
            $avatarColor = $isMe ? 'bg-pink-400' : ($isAdmin ? 'bg-green-400' : 'bg-gray-400');
            $initial = strtoupper(substr($chat->user_name, 0, 1));
        ?>

        <div class="flex items-start <?php echo e($isMe ? 'justify-end' : 'justify-start'); ?> gap-3">

            
            <?php if(!$isMe): ?>
            <div class="w-8 h-8 rounded-full <?php echo e($avatarColor); ?> flex items-center justify-center text-white text-sm font-bold shadow-md">
                <?php echo e($initial); ?>

            </div>
            <?php endif; ?>

            <div class="max-w-[80%] relative">
                <p class="username text-white mb-1 <?php echo e($isMe ? 'text-right' : ''); ?>">
                    <?php echo e($chat->user_name); ?>

                </p>

                <div class="bubble <?php echo e($isAdmin ? 'admin' : ($isMe ? 'me' : 'other')); ?>">
                    <?php echo e($chat->message); ?>


                    <p class="time <?php echo e($isMe ? 'text-white/70' : 'text-gray-500'); ?>">
                        <?php echo e($chat->created_at->format('H:i')); ?>

                    </p>

                    <?php if($isMe): ?>
                    <form action="<?php echo e(route('chat.delete', $chat->id)); ?>" method="POST"
                        onsubmit="return confirm('Hapus pesan ini?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="delete-btn">
                            <i class="fas fa-xmark"></i>
                        </button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>

            <?php if($isMe): ?>
            <div class="w-8 h-8 rounded-full <?php echo e($avatarColor); ?> flex items-center justify-center text-white text-sm font-bold shadow-md">
                <?php echo e($initial); ?>

            </div>
            <?php endif; ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>

    
    <footer class="p-4 bg-white/80 backdrop-blur-md fixed bottom-0 left-0 right-0 z-30">
        <form action="<?php echo e(route('chat.send')); ?>" method="POST" class="flex gap-3">
            <?php echo csrf_field(); ?>
            <input type="text" name="message" placeholder="Tulis pesan..." required
                class="flex-grow px-4 py-3 rounded-2xl border outline-none">

            <button class="send-btn">
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </footer>

</section>

<script>
    const c = document.getElementById('chat-container');
    c.scrollTop = c.scrollHeight;
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\zahi-web\resources\views/consultation/chat.blade.php ENDPATH**/ ?>