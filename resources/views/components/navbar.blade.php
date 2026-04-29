<nav class="bg-white shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="text-2xl font-bold text-amber-600 font-['Playfair_Display']">
                        Amanuba
                    </div>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-900 hover:text-amber-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('rooms') }}" class="text-gray-900 hover:text-amber-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('rooms') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">
                        Kamar
                    </a>
                    <a href="{{ route('facilities') }}" class="text-gray-900 hover:text-amber-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('facilities') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">
                        Fasilitas
                    </a>
                    <a href="{{ route('booking.create') }}" class="bg-amber-600 text-white hover:bg-amber-700 px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                            Pesan Sekarang
                        </a>
                    <a href="{{ route('contact') }}" class="text-gray-900 hover:text-amber-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">
                        Kontak
                    </a>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button text-gray-900 hover:text-amber-600 p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden bg-white border-t">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="text-gray-900 hover:text-amber-600 block px-3 py-2 text-base font-medium {{ request()->routeIs('home') ? 'text-amber-600 bg-amber-50' : '' }}">
                Beranda
            </a>
            <a href="{{ route('rooms') }}" class="text-gray-900 hover:text-amber-600 block px-3 py-2 text-base font-medium {{ request()->routeIs('rooms') ? 'text-amber-600 bg-amber-50' : '' }}">
                Kamar
            </a>
            <a href="{{ route('facilities') }}" class="text-gray-900 hover:text-amber-600 block px-3 py-2 text-base font-medium {{ request()->routeIs('facilities') ? 'text-amber-600 bg-amber-50' : '' }}">
                Fasilitas
            </a>
            <a href="{{ route('booking.create') }}" class="bg-amber-600 text-white block px-3 py-2 text-base font-medium">
                Pesan Sekarang
            </a>
            <a href="{{ route('contact') }}" class="text-gray-900 hover:text-amber-600 block px-3 py-2 text-base font-medium {{ request()->routeIs('contact') ? 'text-amber-600 bg-amber-50' : '' }}">
                Kontak
            </a>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>
