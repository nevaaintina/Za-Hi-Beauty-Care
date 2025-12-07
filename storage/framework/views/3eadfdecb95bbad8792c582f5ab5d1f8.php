<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - Admin Panel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --color-light-pink: #fdebed;
            --color-dark-pink: #d18d9f;
            --color-brand-text: #a04c63;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-light-pink { background-color: var(--color-light-pink); }
        .bg-dark-pink { background-color: var(--color-dark-pink); }
        .text-brand-text { color: var(--color-brand-text); }

        /* Meningkatkan Transisi untuk Tautan Navigasi */
        .nav-link { 
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
        }

        /* Animasi Sidebar pada Hover (Efek Floating) */
        #sidebar {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, width 0.3s ease-in-out;
        }

        /* Efek Shadow yang lebih besar saat sidebar aktif atau di desktop */
        @media (min-width: 1024px) {
            #sidebar {
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            }
        }

        /* Soft fade animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 0.35s ease-in-out; }

        /* Kelas untuk status sidebar tertutup di Desktop */
        .sidebar-closed #sidebar {
            width: 80px; /* Ukuran sidebar saat tertutup */
            transform: translateX(0) !important; /* Pastikan tidak ter-translate */
        }

        .sidebar-closed .lg\:ml-64 {
            margin-left: 80px; /* Jarak Content Wrapper menyesuaikan lebar sidebar tertutup */
        }

        .sidebar-closed #sidebar .sidebar-text {
            display: none; /* Sembunyikan teks di sidebar saat tertutup */
        }

        .sidebar-closed #sidebar .p-4.space-y-2 {
            padding-top: 1.5rem; /* Menyesuaikan padding saat teks hilang */
        }

        .sidebar-closed #sidebar .p-6.border-b {
            justify-content: center; /* Pusatkan logo/ikon saat teks hilang */
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
    </style>
</head>

<body class="bg-light-pink text-gray-800">

<div class="flex">
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden transition-opacity duration-300 opacity-0"></div>

    <aside id="sidebar"
           class="w-64 bg-white/90 backdrop-blur-lg shadow-xl h-screen fixed top-0 left-0 z-50 
                  transition-all duration-300 -translate-x-full lg:translate-x-0">

        <div class="p-6 border-b flex items-center justify-between">
            <h1 class="text-2xl font-bold text-brand-text select-none transition-colors hover:text-dark-pink cursor-default">
                <span class="sidebar-text">ZaHi Admin</span>
                <span class="hidden" id="closedLogo">Z.A</span>
            </h1>
        </div>

        <nav class="p-4 space-y-2">
            <?php
                $active = fn($path) => request()->is($path) 
                    ? 'bg-dark-pink text-white shadow-lg transform translate-x-1' 
                    : 'hover:bg-light-pink hover:text-dark-pink hover:translate-x-0.5';
            ?>

            <a href="/admin/dashboard" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/dashboard')); ?>">
                <i class="fas fa-home w-5 text-center"></i> <span class="sidebar-text">Dashboard</span>
            </a>

            <a href="/admin/users" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/users*')); ?>">
                <i class="fas fa-users w-5 text-center"></i> <span class="sidebar-text">Users</span>
            </a>

            <a href="/admin/products" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/products*')); ?>">
                <i class="fas fa-box w-5 text-center"></i> <span class="sidebar-text">Products</span>
            </a>

            <a href="/admin/services" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/services*')); ?>">
                <i class="fas fa-spa w-5 text-center"></i> <span class="sidebar-text">Services</span>
            </a>

            <a href="/admin/testimonials" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/testimonials*')); ?>">
                <i class="fas fa-star w-5 text-center"></i> <span class="sidebar-text">Testimoninals</span>
            </a>

            <a href="/admin/gallery" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/gallery*')); ?>">
                <i class="fas fa-image w-5 text-center"></i> <span class="sidebar-text">Gallery</span>
            </a>

            <a href="/admin/chats" class="nav-link flex items-center gap-3 p-3 rounded <?php echo e($active('admin/chats*')); ?>">
                <i class="fas fa-comments w-5 text-center"></i> <span class="sidebar-text">Chat</span>
            </a>

            <!-- LOGOUT BUTTON -->
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="nav-link flex items-center gap-3 p-3 rounded font-semibold transition 
                      text-red-600 hover:bg-red-100 hover:text-red-800 hover:scale-[1.02] transform">
                <i class="fas fa-sign-out-alt w-5 text-center"></i> 
                <span class="sidebar-text">Logout</span>
            </a>

            <!-- Formulir logout -->
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        </nav>
    </aside>

    <div id="contentWrapper" class="flex-1 transition-all duration-300 lg:ml-64">
        <header class="bg-white shadow-md p-4 flex items-center justify-between sticky top-0 z-30">
            <button id="toggleDesktopSidebar" class="text-2xl transition hover:rotate-12 hover:text-dark-pink">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="flex items-center lg:hidden">
                <h2 class="text-xl font-semibold text-brand-text mr-4">Menu</h2>
                <button id="toggleMobileSidebar" class="text-2xl transition hover:rotate-12">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </header>

        <main class="p-6 animate-fadeIn">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>
</div>

<script>
    // JavaScript untuk fungsionalitas sidebar dan responsif sudah ada di bagian sebelumnya
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\zahi-web\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>