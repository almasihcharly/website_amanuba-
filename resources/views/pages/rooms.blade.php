@extends('layouts.app')

@section('title', 'Rooms & Suites')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                 alt="Luxury Rooms" 
                 class="w-full h-full object-cover scale-105 animate-slow-zoom">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <span class="text-amber-500 font-bold tracking-[0.3em] uppercase text-sm mb-6 block animate-fade-in">Akomodasi</span>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 font-['Playfair_Display'] leading-tight animate-fade-in-up">
                Rooms & <span class="italic font-light">Suites</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 font-light max-w-2xl mx-auto animate-fade-in-up delay-200">
                Temukan perpaduan sempurna antara desain kontemporer dan kenyamanan tiada tara.
            </p>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center animate-bounce opacity-50">
            <div class="w-px h-12 bg-gradient-to-b from-white to-transparent"></div>
        </div>
    </section>
    
    <!-- Rooms Explorer Section -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">Pilih Kenyamanan Anda</h2>
                    <p class="text-gray-500">Menampilkan 6 kategori akomodasi eksklusif</p>
                </div>
                <div class="flex flex-wrap justify-center gap-3">
                    <button class="px-8 py-3 bg-amber-600 text-white rounded-full font-semibold shadow-lg shadow-amber-600/20 transition-all duration-300 hover:scale-105">
                        Semua
                    </button>
                    <button class="px-8 py-3 bg-gray-50 text-gray-600 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300">
                        Suites
                    </button>
                    <button class="px-8 py-3 bg-gray-50 text-gray-600 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300">
                        Deluxe
                    </button>
                    <button class="px-8 py-3 bg-gray-50 text-gray-600 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300">
                        Superior
                    </button>
                </div>
            </div>
            
            <!-- Rooms Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <!-- Room Card 1: Superior -->
                <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611892440507-42c791c244f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                             alt="Superior Room" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white/80 text-sm tracking-widest uppercase">Mulai dari</span>
                            <div class="text-white text-2xl font-bold font-['Playfair_Display']">Rp 480.000 <span class="text-sm font-light">/malam</span></div>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full shadow-sm">
                            <span class="text-amber-600 font-bold text-xs tracking-widest uppercase">Superior</span>
                        </div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4 group-hover:text-amber-600 transition-colors">Superior Room</h3>
                        <p class="text-gray-500 font-light leading-relaxed mb-6">Kamar yang nyaman dengan desain minimalis modern, ideal untuk pelancong bisnis maupun rekreasi.</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                25 m²
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                2 Orang
                            </div>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-6">
                            <a href="{{ route('rooms.details', 'superior') }}" class="text-gray-900 font-bold text-sm tracking-widest uppercase hover:text-amber-600 transition-colors flex items-center group/btn">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room Card 2: Deluxe -->
                <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                             alt="Deluxe Room" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white/80 text-sm tracking-widest uppercase">Mulai dari</span>
                            <div class="text-white text-2xl font-bold font-['Playfair_Display']">Rp 864.000 <span class="text-sm font-light">/malam</span></div>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full shadow-sm">
                            <span class="text-amber-600 font-bold text-xs tracking-widest uppercase">Deluxe</span>
                        </div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4 group-hover:text-amber-600 transition-colors">Deluxe City View</h3>
                        <p class="text-gray-500 font-light leading-relaxed mb-6">Nikmati pemandangan kota yang menakjubkan dari kenyamanan tempat tidur King-size premium Anda.</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                35 m²
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                3 Orang
                            </div>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-6">
                            <a href="{{ route('rooms.details', 'deluxe') }}" class="text-gray-900 font-bold text-sm tracking-widest uppercase hover:text-amber-600 transition-colors flex items-center group/btn">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room Card 3: Executive Suite -->
                <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                             alt="Executive Suite" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white/80 text-sm tracking-widest uppercase">Mulai dari</span>
                            <div class="text-white text-2xl font-bold font-['Playfair_Display']">Rp 1.430.000 <span class="text-sm font-light">/malam</span></div>
                        </div>
                        <div class="absolute top-6 right-6 bg-amber-600 backdrop-blur-md px-4 py-1.5 rounded-full shadow-sm">
                            <span class="text-white font-bold text-xs tracking-widest uppercase">Best Choice</span>
                        </div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4 group-hover:text-amber-600 transition-colors">Executive Suite</h3>
                        <p class="text-gray-500 font-light leading-relaxed mb-6">Suite mewah dengan ruang tamu terpisah, menawarkan kenyamanan rumah dengan fasilitas hotel bintang lima.</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                55 m²
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                4 Orang
                            </div>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-6">
                            <a href="{{ route('rooms.details', 'executive') }}" class="text-gray-900 font-bold text-sm tracking-widest uppercase hover:text-amber-600 transition-colors flex items-center group/btn">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room Card 4: Presidential -->
                <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                             alt="Presidential Suite" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white/80 text-sm tracking-widest uppercase">Mulai dari</span>
                            <div class="text-white text-2xl font-bold font-['Playfair_Display']">Rp 3.500.000 <span class="text-sm font-light">/malam</span></div>
                        </div>
                        <div class="absolute top-6 right-6 bg-red-600 px-4 py-1.5 rounded-full shadow-sm">
                            <span class="text-white font-bold text-xs tracking-widest uppercase">Most Exclusive</span>
                        </div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4 group-hover:text-amber-600 transition-colors">Presidential Suite</h3>
                        <p class="text-gray-500 font-light leading-relaxed mb-6">Puncak kemewahan dengan pemandangan panoramik, kolam renang pribadi, dan layanan pelayan 24 jam.</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                120 m²
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                6 Orang
                            </div>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-6">
                            <a href="{{ route('rooms.details', 'presidential') }}" class="text-gray-900 font-bold text-sm tracking-widest uppercase hover:text-amber-600 transition-colors flex items-center group/btn">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room Card 5: Family -->
                <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                             alt="Family Room" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white/80 text-sm tracking-widest uppercase">Mulai dari</span>
                            <div class="text-white text-2xl font-bold font-['Playfair_Display']">Rp 1.200.000 <span class="text-sm font-light">/malam</span></div>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full shadow-sm">
                            <span class="text-amber-600 font-bold text-xs tracking-widest uppercase">Family</span>
                        </div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4 group-hover:text-amber-600 transition-colors">Family Ocean View</h3>
                        <p class="text-gray-500 font-light leading-relaxed mb-6">Ruang yang lega dengan dua kamar tidur terhubung, sempurna untuk liburan keluarga yang tak terlupakan.</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                65 m²
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                5 Orang
                            </div>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-6">
                            <a href="{{ route('rooms.details', 'family') }}" class="text-gray-900 font-bold text-sm tracking-widest uppercase hover:text-amber-600 transition-colors flex items-center group/btn">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room Card 6: Honeymoon -->
                <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1520250498154-50f9eca3e533?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                             alt="Honeymoon Suite" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-6 left-6 right-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white/80 text-sm tracking-widest uppercase">Mulai dari</span>
                            <div class="text-white text-2xl font-bold font-['Playfair_Display']">Rp 1.850.000 <span class="text-sm font-light">/malam</span></div>
                        </div>
                        <div class="absolute top-6 right-6 bg-pink-600/90 backdrop-blur-md px-4 py-1.5 rounded-full shadow-sm">
                            <span class="text-white font-bold text-xs tracking-widest uppercase">Romantic</span>
                        </div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4 group-hover:text-amber-600 transition-colors">Honeymoon Suite</h3>
                        <p class="text-gray-500 font-light leading-relaxed mb-6">Rayakan cinta Anda dalam suite romantis yang dilengkapi jacuzzi pribadi dan balkon dengan pemandangan sunset.</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                45 m²
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                2 Orang
                            </div>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-6">
                            <a href="{{ route('rooms.details', 'honeymoon') }}" class="text-gray-900 font-bold text-sm tracking-widest uppercase hover:text-amber-600 transition-colors flex items-center group/btn">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Room Amenities Highlight -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-16">Standar Kemewahan Kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="p-8 bg-white rounded-3xl shadow-sm">
                    <div class="w-16 h-16 bg-amber-500/10 rounded-2xl flex items-center justify-center text-amber-600 mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10.5 10.5 0 0114.142 0M1.414 8.414a15 15 0 0121.172 0"></path></svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">WiFi Kecepatan Tinggi</h4>
                    <p class="text-gray-500 text-sm">Tetap terhubung di seluruh area resort</p>
                </div>
                <div class="p-8 bg-white rounded-3xl shadow-sm">
                    <div class="w-16 h-16 bg-amber-500/10 rounded-2xl flex items-center justify-center text-amber-600 mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Layanan 24 Jam</h4>
                    <p class="text-gray-500 text-sm">Siap melayani kebutuhan Anda kapan saja</p>
                </div>
                <div class="p-8 bg-white rounded-3xl shadow-sm">
                    <div class="w-16 h-16 bg-amber-500/10 rounded-2xl flex items-center justify-center text-amber-600 mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2z"></path></svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Minibar Gratis</h4>
                    <p class="text-gray-500 text-sm">Aneka minuman dan camilan premium</p>
                </div>
                <div class="p-8 bg-white rounded-3xl shadow-sm">
                    <div class="w-16 h-16 bg-amber-500/10 rounded-2xl flex items-center justify-center text-amber-600 mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Amenitas Mewah</h4>
                    <p class="text-gray-500 text-sm">Produk perawatan tubuh kelas atas</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes slow-zoom {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }
        .animate-slow-zoom {
            animation: slow-zoom 20s ease-in-out infinite alternate;
        }
    </style>
@endsection
