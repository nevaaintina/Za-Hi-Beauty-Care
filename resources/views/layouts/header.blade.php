<header class="bg-[#E195AB] shadow-md sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">

        <!-- LOGO BESAR -->
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="ZA & Hi Logo" class="h-14 md:h-16">
        </div>

        <!-- MENU DESKTOP -->
        <div class="hidden md:flex space-x-8 items-center text-sm font-semibold">
            <a href="/" 
               class="py-1 border-b-2 {{ request()->is('/') ? 'text-white border-white' : 'text-white hover:text-gray-200 border-transparent' }}">
               Home
            </a>
            <a href="/product" 
               class="py-1 border-b-2 {{ request()->is('product*') ? 'text-white border-white' : 'text-white hover:text-gray-200 border-transparent' }}">
               Produk
            </a>
            <a href="/testimoni" 
               class="py-1 border-b-2 {{ request()->is('testimoni*') ? 'text-white border-white' : 'text-white hover:text-gray-200 border-transparent' }}">
               Testimoni
            </a>
            <a href="/layanan" 
               class="py-1 border-b-2 {{ request()->is('layanan*') ? 'text-white border-white' : 'text-white hover:text-gray-200 border-transparent' }}">
               Layanan
            </a>

            <!-- MENU PROFIL -->
            @auth
                <div class="relative">
                    <button id="profile-menu" class="text-white hover:text-gray-200 py-1 border-b-2 border-transparent focus:outline-none">
                        <i class="fas fa-ellipsis-h fa-lg"></i>
                    </button>

                    <div id="profile-dropdown"
                         class="hidden absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded-md z-10">
                        
                        <a href="/profil" class="block px-4 py-2 text-sm hover:bg-gray-100">
                            Lihat Profil
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-white hover:text-gray-200">
                    <i class="fas fa-user fa-lg"></i>
                </a>
            @endauth
        </div>

        <!-- TOGGLE MOBILE -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- MENU MOBILE -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#E195AB]">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-center">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium 
               {{ request()->is('/') ? 'bg-white/20 text-white' : 'text-white hover:bg-white/20' }}">Home</a>

            <a href="/product" class="block px-3 py-2 rounded-md text-base font-medium 
               {{ request()->is('product*') ? 'bg-white/20 text-white' : 'text-white hover:bg-white/20' }}">Produk</a>

            <a href="/testimoni" class="block px-3 py-2 rounded-md text-base font-medium 
               {{ request()->is('testimoni*') ? 'bg-white/20 text-white' : 'text-white hover:bg-white/20' }}">Testimoni</a>

            <a href="/layanan" class="block px-3 py-2 rounded-md text-base font-medium 
               {{ request()->is('layanan*') ? 'bg-white/20 text-white' : 'text-white hover:bg-white/20' }}">Layanan</a>

            @auth
                <a href="/profil" class="block px-3 py-2 rounded-md text-base font-medium 
                   {{ request()->is('profil*') ? 'bg-white/20 text-white' : 'text-white hover:bg-white/20' }}">
                    Profil
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="block w-full px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" 
                   class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20">
                    Login / Daftar
                </a>
            @endauth
        </div>
    </div>
</header>

<!-- SCRIPT -->
<script>
const profileMenu = document.getElementById('profile-menu');
const profileDropdown = document.getElementById('profile-dropdown');
const mobileToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

if (profileMenu && profileDropdown) {
    profileMenu.addEventListener('click', function (e) {
        e.stopPropagation();
        profileDropdown.classList.toggle('hidden');
    });

    window.addEventListener('click', function (event) {
        if (!profileMenu.contains(event.target) && !profileDropdown.contains(event.target)) {
            profileDropdown.classList.add('hidden');
        }
    });
}

if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
}
</script>
