<footer class="bg-[#1a1c20] text-gray-400 relative overflow-hidden pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 items-start mb-16">
            
            <!-- Logo Column -->
            <div class="flex flex-col items-center lg:items-start">
                <a href="{{ route('home') ?? '/' }}" class="group">
                    <img src="{{ asset('images/logo.png') }}" alt="Amanuba Logo" class="h-24 w-auto mb-4 invert">
                    <div class="text-center lg:text-left">
                        <div class="text-2xl font-bold text-white tracking-widest uppercase">Amanuba</div>
                        <div class="text-[10px] text-gray-500 tracking-[0.4em] uppercase -mt-1">Hotel & Resort</div>
                    </div>
                </a>
            </div>

            <!-- Address Column -->
            <div class="space-y-6">
                <h3 class="text-white font-bold tracking-wider uppercase text-sm">Amanuba Hotel & Resort Rancamaya</h3>
                <div class="space-y-4">
                    <p class="text-gray-500 text-sm leading-relaxed font-light">
                        Jl. Rancamaya No.37,<br>
                        Bojongkerta, Bogor Selatan,<br>
                        Kota Bogor, Jawa Barat 16139
                    </p>
                    <div class="flex items-center text-sm text-gray-400">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-2.26 0-4.108 1.848-4.108 4.108 0 1.517.828 2.841 2.062 3.551v2.305l1.643-1.096c.133.023.27.037.403.037 2.26 0 4.108-1.848 4.108-4.108 0-2.26-1.848-4.108-4.108-4.108zm0-2.172c3.457 0 6.279 2.822 6.279 6.279 0 3.457-2.822 6.279-6.279 6.279-.204 0-.406-.01-.606-.029l-3.321 2.215v-3.084c-1.424-1.127-2.352-2.883-2.352-4.852 0-3.457 2.822-6.279 6.279-6.279z"/></svg>
                        <span class="font-medium">0821 2226 4437</span>
                    </div>
                </div>
            </div>

            <!-- Contact Column -->
            <div class="space-y-6">
                <h3 class="text-white font-bold tracking-wider uppercase text-sm">Contact Person</h3>
                <div class="space-y-4">
                    <div class="flex items-center text-sm text-gray-500 font-light group">
                        <svg class="w-4 h-4 mr-3 text-amber-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>+62 251 8292821</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500 font-light group">
                        <svg class="w-4 h-4 mr-3 text-amber-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>info@amanubarancamaya.com</span>
                    </div>
                </div>
            </div>

            <!-- Tripadvisor Column -->
            <div class="space-y-6">
                <h3 class="text-white font-bold tracking-wider uppercase text-sm">Tripadvisor</h3>
                <div class="space-y-4">
                    <p class="text-gray-500 text-sm font-light">Now with hotel reviews by</p>
                    <div class="flex items-center space-x-2">
                        <img src="https://www.vectorlogo.zone/logos/tripadvisor/tripadvisor-ar21.svg" alt="Tripadvisor" class="h-8 w-auto invert opacity-70">
                    </div>
                    <div class="flex space-x-1">
                        @for($i=0; $i<4; $i++)
                            <div class="w-4 h-4 rounded-full bg-green-500 border border-green-600"></div>
                        @endfor
                        <div class="w-4 h-4 rounded-full border border-green-600 relative overflow-hidden">
                            <div class="absolute inset-0 bg-green-500 w-1/2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white/5 pt-10 flex flex-col md:flex-row justify-between items-center text-[10px] tracking-widest uppercase text-gray-600">
            <p>&copy; {{ date('Y') }} Amanuba Hotel & Resort. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-amber-500 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-amber-500 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
