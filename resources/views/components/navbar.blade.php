<nav id="main-navbar" class="fixed z-50 w-full top-0 transition-all duration-500 ease-in-out animate-fade-in-down">
    <div id="navbar-inner" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-500 ease-out">
        <div id="navbar-height" class="flex justify-between items-center h-20 transition-all duration-500">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') ?? '/' }}" class="flex items-center group">
                    <div class="text-2xl md:text-3xl font-bold tracking-tight transition-all duration-300 group-hover:scale-105 nav-text-logo">
                        Amanuba<span class="text-amber-500">.</span>
                    </div>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                <a href="{{ route('home') ?? '/' }}" class="text-sm font-semibold relative group transition-colors duration-200 nav-link">
                    Beranda
                    <span class="absolute -bottom-1.5 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full nav-indicator {{ request()->routeIs('home') ? 'w-full' : '' }}"></span>
                </a>
                <a href="{{ route('rooms') ?? '/rooms' }}" class="text-sm font-semibold relative group transition-colors duration-200 nav-link">
                    Rooms & Suites
                    <span class="absolute -bottom-1.5 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full nav-indicator {{ request()->routeIs('rooms') ? 'w-full' : '' }}"></span>
                </a>
                <a href="{{ route('facilities') ?? '/facilities' }}" class="text-sm font-semibold relative group transition-colors duration-200 nav-link">
                    Fasilitas
                    <span class="absolute -bottom-1.5 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full nav-indicator {{ request()->routeIs('facilities') ? 'w-full' : '' }}"></span>
                </a>
                <a href="{{ route('contact') ?? '/contact' }}" class="text-sm font-semibold relative group transition-colors duration-200 nav-link">
                    Kontak
                    <span class="absolute -bottom-1.5 left-0 w-0 h-0.5 transition-all duration-300 group-hover:w-full nav-indicator {{ request()->routeIs('contact') ? 'w-full' : '' }}"></span>
                </a>
                
                <div class="w-px h-6 mx-2 transition-colors duration-300 nav-divider"></div>
                
                <div class="flex items-center space-x-2 pl-2">
                    <a href="{{ route('login') ?? '/login' }}" class="text-sm font-bold px-5 py-2 rounded-full transition-all duration-300 nav-btn-ghost">
                        Masuk
                    </a>
                    <a href="{{ route('register') ?? '/register' }}" class="text-sm font-bold border-2 px-5 py-2.5 rounded-full transition-all duration-300 shadow-sm hover:shadow-lg transform hover:-translate-y-0.5 nav-btn-outline">
                        Daftar
                    </a>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-2">
                <a href="{{ route('login') ?? '/login' }}" class="text-sm font-bold px-4 py-2 rounded-full transition-all duration-300 nav-btn-ghost">Masuk</a>
                <button type="button" class="mobile-menu-button p-2 focus:outline-none transition-transform duration-300 hover:scale-110 rounded-full nav-btn-ghost">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 absolute w-full shadow-2xl transition-all duration-300 origin-top">
        <div class="px-4 pt-4 pb-8 space-y-3">
            <a href="{{ route('home') ?? '/' }}" class="block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 {{ request()->routeIs('home') ? 'text-amber-600 bg-amber-50 translate-x-2' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 hover:translate-x-2' }}">
                Beranda
            </a>
            <a href="{{ route('rooms') ?? '/rooms' }}" class="block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 {{ request()->routeIs('rooms') ? 'text-amber-600 bg-amber-50 translate-x-2' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 hover:translate-x-2' }}">
                Rooms & Suites
            </a>
            <a href="{{ route('facilities') ?? '/facilities' }}" class="block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 {{ request()->routeIs('facilities') ? 'text-amber-600 bg-amber-50 translate-x-2' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 hover:translate-x-2' }}">
                Fasilitas
            </a>
            <a href="{{ route('contact') ?? '/contact' }}" class="block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 {{ request()->routeIs('contact') ? 'text-amber-600 bg-amber-50 translate-x-2' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 hover:translate-x-2' }}">
                Kontak
            </a>
            
            <div class="border-t border-gray-200 my-4 pt-4 flex flex-col space-y-3">
                <a href="{{ route('register') ?? '/register' }}" class="block w-full text-center border-2 border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-xl text-base font-medium transition-all duration-300">
                    Daftar Akun
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
/* Base Styles for Transitions */
.nav-text-logo, .nav-link, .nav-indicator, .nav-divider, .nav-btn-ghost, .nav-btn-outline {
    transition: all 0.3s ease-out;
}

/* =========================================
   DEFAULT STATE (AT TOP - HERO SECTION)
   Transparent Background, White Text
   ========================================= */
#main-navbar {
    background-color: transparent !important;
    background: none !important;
    backdrop-filter: none !important;
    border: none !important;
    box-shadow: none !important;
    padding-top: 0.5rem;
}
.nav-text-logo { color: #ffffff; }
.nav-link { color: rgba(255, 255, 255, 0.9); }
.nav-link:hover { color: #ffffff; }
.nav-indicator { background-color: #ffffff; }
.nav-divider { background-color: rgba(255, 255, 255, 0.3); }
.nav-btn-ghost { color: #ffffff; background-color: rgba(255, 255, 255, 0.1); }
.nav-btn-ghost:hover { background-color: rgba(255, 255, 255, 0.2); }
.nav-btn-outline { border-color: #ffffff; color: #ffffff; background-color: transparent; }
.nav-btn-outline:hover { background-color: #ffffff; color: #111827; }

/* =========================================
   SCROLLED STATE (FLOATING PILL)
   Glassmorphism Background, Dark Text
   ========================================= */
#main-navbar.scrolled {
    padding-top: 1.25rem; /* Moves it down slightly */
}

#main-navbar.scrolled #navbar-inner {
    background-color: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(16px);
    border-radius: 9999px; /* The round pill shape */
    box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.15), 0 1px 3px rgba(0,0,0,0.05);
    border: 1px solid rgba(255, 255, 255, 0.5);
    max-width: 64rem; /* Shrinks the width to look like a floating island */
}

#main-navbar.scrolled #navbar-height {
    height: 4.5rem; /* Slightly thinner */
    padding: 0 1.5rem;
}

/* Colors for scrolled state */
#main-navbar.scrolled .nav-text-logo { color: #111827; }
#main-navbar.scrolled .nav-link { color: #4b5563; }
#main-navbar.scrolled .nav-link:hover { color: #d97706; }
#main-navbar.scrolled .nav-indicator { background-color: #d97706; }
#main-navbar.scrolled .nav-divider { background-color: #e5e7eb; }
#main-navbar.scrolled .nav-btn-ghost { color: #374151; background-color: #fffbeb; }
#main-navbar.scrolled .nav-btn-ghost:hover { color: #b45309; background-color: #fef3c7; }
#main-navbar.scrolled .nav-btn-outline { border-color: #111827; color: #ffffff; background-color: #111827; }
#main-navbar.scrolled .nav-btn-outline:hover { background-color: #1f2937; }

/* Mobile Menu Animations */
.mobile-menu:not(.hidden) {
    animation: slideDown 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px) scaleY(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scaleY(1);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('main-navbar');
    // If we are not on the home page, always keep the scrolled (floating pill) state
    // so that the text is dark and readable against a potentially white background.
    const isHome = {{ request()->routeIs('home') ? 'true' : 'false' }};
    
    function updateNavbar() {
        if (window.scrollY > 30 || !isHome) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    
    // Initial check
    updateNavbar();
    
    // Scroll listener
    window.addEventListener('scroll', updateNavbar);
    
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            const svg = this.querySelector('svg');
            if(mobileMenu.classList.contains('hidden')){
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                svg.classList.remove('rotate-90');
            } else {
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
                svg.classList.add('rotate-90', 'transition-transform');
            }
        });
    }
});
</script>
