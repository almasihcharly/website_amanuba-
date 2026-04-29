@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')
    
    <!-- About Section -->
    <section class="py-24 bg-[#FAFAFA] relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-amber-600/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gray-900/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <span class="text-amber-600 font-semibold tracking-[0.2em] uppercase text-sm mb-4 block">Tentang Kami</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-['Playfair_Display'] leading-tight">
                        Mahakarya Kenyamanan <br><span class="text-gray-400 italic font-light">&</span> Kemewahan.
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed font-light">
                        Berdiri dengan megah di jantung kota, Amanuba Resort menawarkan oase ketenangan di tengah hiruk-pikuk kehidupan modern. Setiap sudut dirancang secara eksklusif untuk memberikan pengalaman menginap yang tak terlupakan.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 mb-10">
                        <div>
                            <div class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">5<span class="text-amber-600">*</span></div>
                            <div class="text-sm text-gray-500 uppercase tracking-wider font-medium">Layanan Premium</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">24<span class="text-amber-600">/</span>7</div>
                            <div class="text-sm text-gray-500 uppercase tracking-wider font-medium">Concierge Khusus</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('facilities') ?? '/facilities' }}" class="inline-flex items-center text-gray-900 font-semibold hover:text-amber-600 transition-colors group">
                        Jelajahi Fasilitas Kami 
                        <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl z-10 aspect-[4/5] md:aspect-auto md:h-[600px]">
                        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="Lobby Amanuba" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            <p class="font-['Playfair_Display'] text-2xl">Lobby Utama</p>
                            <p class="text-sm text-gray-300 font-light">Arsitektur elegan & modern</p>
                        </div>
                    </div>
                    <div class="hidden md:block absolute -bottom-12 -left-12 w-64 h-64 rounded-2xl overflow-hidden shadow-xl border-4 border-white z-20">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fasilitas" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exclusive Facilities Section -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div class="max-w-2xl">
                    <span class="text-amber-600 font-semibold tracking-[0.2em] uppercase text-sm mb-4 block">Pengalaman Tak Terlupakan</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-['Playfair_Display']">Fasilitas Eksklusif</h2>
                </div>
                <div class="hidden md:block">
                    <p class="text-gray-500 font-light max-w-sm text-right">Nikmati kenyamanan berkelas dengan fasilitas premium yang dirancang khusus untuk menyempurnakan hari Anda.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Facility 1 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Spa" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="text-2xl font-bold text-white mb-2 font-['Playfair_Display']">Zen Spa & Wellness</h3>
                        <p class="text-gray-300 font-light text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">Lepaskan penat dengan perawatan pijat tradisional dan terapi peremajaan kulit.</p>
                    </div>
                </div>
                
                <!-- Facility 2 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dining" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="text-2xl font-bold text-white mb-2 font-['Playfair_Display']">Amanuba Fine Dining</h3>
                        <p class="text-gray-300 font-light text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">Nikmati mahakarya kuliner dari koki kelas dunia dengan menu otentik dan internasional.</p>
                    </div>
                </div>
                
                <!-- Facility 3 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1576013551627-1cc001f5c8c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pool" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="text-2xl font-bold text-white mb-2 font-['Playfair_Display']">Infinity Pool</h3>
                        <p class="text-gray-300 font-light text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">Berenang di kolam renang tanpa tepi kami sambil menikmati pemandangan kota yang menakjubkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured Rooms Section -->
    <section class="py-24 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div class="max-w-2xl">
                    <span class="text-amber-600 font-semibold tracking-[0.2em] uppercase text-sm mb-4 block">Kamar Unggulan</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-['Playfair_Display']">Akomodasi Eksklusif</h2>
                </div>
                <a href="{{ route('rooms') ?? '/rooms' }}" class="hidden md:inline-flex items-center text-sm font-semibold tracking-wider uppercase text-gray-500 hover:text-amber-600 transition-colors group">
                    Lihat Semua Kamar
                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m-7 7H3"></path></svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Room Card 1 -->
                <div class="group cursor-pointer bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-6">
                        <img src="https://images.unsplash.com/photo-1611892440507-42c791c244f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="Superior Room" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
                            <span class="font-bold text-gray-900">Rp 480<span class="text-sm font-normal text-gray-500">rb/mlm</span></span>
                        </div>
                    </div>
                    <div class="px-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 font-['Playfair_Display'] group-hover:text-amber-600 transition-colors">Superior Room</h3>
                        <p class="text-gray-500 font-light mb-4 line-clamp-2">Kamar nyaman dengan fasilitas lengkap, sempurna untuk liburan singkat maupun perjalanan bisnis Anda.</p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400 mb-4 border-b border-gray-100 pb-4">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg> 32m²</span>
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> 2 Orang</span>
                        </div>
                        <a href="{{ route('booking.create') ?? '/booking' }}" class="block text-center font-semibold text-gray-900 group-hover:text-amber-600 transition-colors">Pesan Sekarang &rarr;</a>
                    </div>
                </div>
                
                <!-- Room Card 2 -->
                <div class="group cursor-pointer bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-6">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="Deluxe Room" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
                            <span class="font-bold text-gray-900">Rp 864<span class="text-sm font-normal text-gray-500">rb/mlm</span></span>
                        </div>
                    </div>
                    <div class="px-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 font-['Playfair_Display'] group-hover:text-amber-600 transition-colors">Deluxe Premium</h3>
                        <p class="text-gray-500 font-light mb-4 line-clamp-2">Ruang yang lebih luas dengan pemandangan kota spektakuler dan fasilitas kamar mandi mewah.</p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400 mb-4 border-b border-gray-100 pb-4">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg> 45m²</span>
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> 2 Orang</span>
                        </div>
                        <a href="{{ route('booking.create') ?? '/booking' }}" class="block text-center font-semibold text-gray-900 group-hover:text-amber-600 transition-colors">Pesan Sekarang &rarr;</a>
                    </div>
                </div>
                
                <!-- Room Card 3 -->
                <div class="group cursor-pointer hidden lg:block bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-6">
                        <img src="https://images.unsplash.com/photo-1564013799919-600d0b5a107b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="Suite Room" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 right-4 bg-gray-900/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
                            <span class="font-bold text-white">Rp 1.4<span class="text-sm font-normal text-gray-300">jt/mlm</span></span>
                        </div>
                    </div>
                    <div class="px-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 font-['Playfair_Display'] group-hover:text-amber-600 transition-colors">Executive Suite</h3>
                        <p class="text-gray-500 font-light mb-4 line-clamp-2">Pengalaman tak tertandingi dengan ruang tamu terpisah, layanan butler pribadi, dan interior mahakarya.</p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400 mb-4 border-b border-gray-100 pb-4">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg> 80m²</span>
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> 4 Orang</span>
                        </div>
                        <a href="{{ route('booking.create') ?? '/booking' }}" class="block text-center font-semibold text-gray-900 group-hover:text-amber-600 transition-colors">Pesan Sekarang &rarr;</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-10 md:hidden text-center">
                <a href="{{ route('rooms') ?? '/rooms' }}" class="inline-flex items-center text-sm font-semibold tracking-wider uppercase text-gray-900 border-b-2 border-gray-900 pb-1">
                    Lihat Semua Kamar
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-600 font-semibold tracking-[0.2em] uppercase text-sm mb-4 block">Testimoni Tamu</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-['Playfair_Display']">Apa Kata Mereka</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 flex flex-col h-full border border-gray-100 relative">
                    <svg class="w-10 h-10 text-amber-500/20 absolute top-8 left-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    
                    <div class="flex text-amber-500 mb-6 relative z-10 pl-14">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    
                    <p class="text-gray-600 font-light leading-relaxed mb-8 flex-grow">"Pengalaman menginap yang sangat luar biasa. Pelayanan staf sangat ramah, kamarnya begitu mewah dan bersih. Infinity pool-nya adalah yang terbaik di seluruh kota!"</p>
                    
                    <div class="flex items-center mt-auto pt-6 border-t border-gray-100">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="User" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
                        <div>
                            <h4 class="text-gray-900 font-semibold">Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 2 -->
                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 flex flex-col h-full border border-gray-100 relative">
                    <svg class="w-10 h-10 text-amber-500/20 absolute top-8 left-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    
                    <div class="flex text-amber-500 mb-6 relative z-10 pl-14">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    
                    <p class="text-gray-600 font-light leading-relaxed mb-8 flex-grow">"Amanuba Fine Dining menyajikan makanan terenak yang pernah saya cicipi. Suasana resort sangat tenang dan eksklusif. Sangat cocok untuk perjalanan istimewa."</p>
                    
                    <div class="flex items-center mt-auto pt-6 border-t border-gray-100">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="User" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
                        <div>
                            <h4 class="text-gray-900 font-semibold">Sarah Wijaya</h4>
                            <p class="text-gray-500 text-sm">Surabaya, Indonesia</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 3 -->
                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 flex flex-col h-full border border-gray-100 relative">
                    <svg class="w-10 h-10 text-amber-500/20 absolute top-8 left-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    
                    <div class="flex text-amber-500 mb-6 relative z-10 pl-14">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    
                    <p class="text-gray-600 font-light leading-relaxed mb-8 flex-grow">"The Executive Suite was breathtaking. The attention to detail from the staff made our anniversary trip unforgettable. Sangat luar biasa."</p>
                    
                    <div class="flex items-center mt-auto pt-6 border-t border-gray-100">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="User" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
                        <div>
                            <h4 class="text-gray-900 font-semibold">Michael D.</h4>
                            <p class="text-gray-500 text-sm">Sydney, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-600 font-semibold tracking-[0.2em] uppercase text-sm mb-4 block">Galeri Foto</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-['Playfair_Display']">Jelajahi Kemewahan</h2>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 overflow-hidden rounded-xl group cursor-pointer relative" onclick="openLightbox('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80')">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="Hotel Exterior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
                <div class="overflow-hidden rounded-xl group cursor-pointer relative" onclick="openLightbox('https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pool Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
                <div class="overflow-hidden rounded-xl group cursor-pointer relative" onclick="openLightbox('https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Restaurant" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
                <div class="overflow-hidden rounded-xl group cursor-pointer relative" onclick="openLightbox('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Spa" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
                <div class="overflow-hidden rounded-xl group cursor-pointer relative" onclick="openLightbox('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Lobby" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Booking Section -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl overflow-hidden bg-[#0f1115] shadow-2xl">
                <!-- Background Image & Gradient overlay -->
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1455587734955-081b22074882?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Resort View" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0f1115] via-[#0f1115]/90 to-transparent"></div>
                </div>
                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center p-12 md:p-16 lg:p-20">
                    <div>
                        <span class="text-amber-500 font-semibold tracking-[0.2em] uppercase text-sm mb-4 block">Mulai Perjalanan Anda</span>
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-['Playfair_Display'] leading-tight">Siap Untuk Pengalaman <span class="text-amber-500 italic">Terbaik?</span></h2>
                        <p class="text-lg text-gray-300 font-light mb-10 max-w-lg">
                            Pesan kamar Anda sekarang dan dapatkan penawaran eksklusif serta keuntungan khusus member. Rasakan kemewahan dan kenyamanan yang sebenarnya bersama Amanuba.
                        </p>
                        <a href="{{ route('booking.create') ?? '/booking' }}" class="inline-flex items-center justify-center bg-amber-600 text-white hover:bg-amber-500 px-8 py-4 rounded-full text-lg font-medium transition-all duration-300 hover:shadow-[0_0_20px_rgba(217,119,6,0.4)] group">
                            Reservasi Sekarang
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m-7 7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 z-[100] hidden bg-black/95 backdrop-blur-sm flex items-center justify-center p-4 md:p-10 transition-opacity duration-300 opacity-0" onclick="closeLightbox()">
        <button class="absolute top-6 right-6 text-white hover:text-amber-500 transition-colors z-[110]" onclick="closeLightbox()">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l18 18"></path></svg>
        </button>
        <img id="lightbox-img" src="" alt="Full view" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl transform scale-95 transition-transform duration-300">
    </div>

    <script>
        function openLightbox(imgSrc) {
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            img.src = imgSrc;
            lightbox.classList.remove('hidden');
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                img.classList.remove('scale-95');
                img.classList.add('scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            lightbox.classList.add('opacity-0');
            img.classList.remove('scale-100');
            img.classList.add('scale-95');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                img.src = '';
            }, 300);
            document.body.style.overflow = 'auto';
        }
    </script>
@endsection
