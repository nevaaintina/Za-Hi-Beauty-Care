<header class="bg-[#E195AB] shadow-md sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="ZA & Hi Logo" class="h-8">
            <span class="text-xl font-bold text-white">ZA & Hi</span>
        </div>

        <div class="hidden md:flex space-x-8 items-center text-sm font-semibold">
            <a href="/" class="text-white hover:text-gray-200 py-1 border-b-2 border-transparent">Home</a>
            <a href="/product" class="text-white hover:text-gray-200 py-1 border-b-2 border-transparent">Produk</a>
            <a href="/testimoni" class="text-white hover:text-gray-200 py-1 border-b-2 border-transparent">Testimoni</a>
            <a href="/layanan" class="text-white hover:text-gray-200 py-1 border-b-2 border-transparent">Layanan</a>
            
            <a href="/register" class="text-white hover:text-gray-200">
                <i class="fas fa-user fa-lg"></i>
            </a>
        </div>

        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden bg-dark-pink">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-center">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">Home</a>
            <a href="/product" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">Produk</a>
            <a href="/testimoni" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">Testimoni</a>
            <a href="/layanan" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">Layanan</a>
            <a href="/register" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">Login/Daftar</a>
        </div>
        </div>
    </div>
</header><?php /**PATH C:\laragon\www\zahi-web\resources\views/layouts/header.blade.php ENDPATH**/ ?>