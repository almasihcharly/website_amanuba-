<section class="relative h-screen flex items-center justify-center overflow-hidden bg-gray-900">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero.jpg') }}" 
             alt="Amanuba Luxury Hotel" 
             class="w-full h-full object-cover transition-transform duration-[20s] hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/80"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 mt-16">
        <span class="block text-sm md:text-xs uppercase tracking-[0.4em] mb-4 text-gray-300 font-medium animate-fade-in-up">
            Experience Elegance
        </span>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 tracking-tight animate-fade-in-up animation-delay-200">
            Amanuba Resort & hotel
        </h1>
        <p class="text-base md:text-lg mb-10 max-w-2xl mx-auto font-light text-gray-200 leading-relaxed animate-fade-in-up animation-delay-400">
            Nikmati kemewahan sejati dan kenyamanan tiada tara di pusat kota. Tempat di mana setiap momen menjadi berharga.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up animation-delay-600">
            <a href="{{ route('contact') }}" 
               class="bg-white text-gray-900 hover:bg-gray-100 px-8 py-3.5 rounded-full text-sm font-medium transition-all duration-300 hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:-translate-y-1">
                Pesan Sekarang
            </a>
            <a href="{{ route('rooms') }}" 
               class="bg-transparent border border-white/30 text-white hover:bg-white/10 px-8 py-3.5 rounded-full text-sm font-medium transition-all duration-300 backdrop-blur-sm hover:-translate-y-1">
                Lihat Kamar
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10 animate-bounce opacity-70">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<style>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    opacity: 0;
}

.animation-delay-200 { animation-delay: 0.2s; }
.animation-delay-400 { animation-delay: 0.4s; }
.animation-delay-600 { animation-delay: 0.6s; }
</style>
