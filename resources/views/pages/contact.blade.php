@extends('layouts.app')

@section('title', 'Connect with Amanuba')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1520250498154-50f9eca3e533?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                 alt="Contact Us" 
                 class="w-full h-full object-cover scale-105 animate-slow-zoom">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <span class="text-amber-500 font-bold tracking-[0.3em] uppercase text-sm mb-6 block animate-fade-in">Layanan Pelanggan</span>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 font-['Playfair_Display'] leading-tight animate-fade-in-up">
                Get in <span class="italic font-light">Touch</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 font-light max-w-2xl mx-auto animate-fade-in-up delay-200">
                Kami siap membantu Anda merencanakan pengalaman menginap yang tak terlupakan.
            </p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-16 items-start">
                
                <!-- Contact Info Column -->
                <div class="lg:col-span-5 space-y-12">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Hubungi Kami</h2>
                        <p class="text-gray-500 font-light leading-relaxed mb-10 text-lg">
                            Punya pertanyaan tentang akomodasi atau fasilitas kami? Tim kami tersedia 24/7 untuk melayani Anda.
                        </p>
                    </div>

                    <div class="space-y-10">
                        <div class="flex items-start group">
                            <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 mr-6 transition-all duration-300 group-hover:bg-amber-600 group-hover:text-white group-hover:rotate-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 font-bold mb-1 uppercase tracking-widest text-xs">Lokasi Kami</h4>
                                <p class="text-gray-600 font-light text-lg leading-relaxed">
                                    Jl. Sudirman No. 123, Kawasan Bisnis,<br>Jakarta Selatan, Indonesia 12190
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 mr-6 transition-all duration-300 group-hover:bg-amber-600 group-hover:text-white group-hover:rotate-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 font-bold mb-1 uppercase tracking-widest text-xs">Telepon</h4>
                                <p class="text-gray-600 font-light text-lg">+62 (21) 555-0123</p>
                                <p class="text-gray-600 font-light text-lg">+62 (21) 555-0456</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 mr-6 transition-all duration-300 group-hover:bg-amber-600 group-hover:text-white group-hover:rotate-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 font-bold mb-1 uppercase tracking-widest text-xs">Email</h4>
                                <p class="text-gray-600 font-light text-lg">reservation@amanuba.com</p>
                                <p class="text-gray-600 font-light text-lg">info@amanuba.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="lg:col-span-7">
                    <div class="bg-gray-50 rounded-[3rem] p-8 md:p-12 border border-gray-100 shadow-sm relative overflow-hidden group">
                        <div class="absolute -top-24 -right-24 w-64 h-64 bg-amber-500/5 rounded-full blur-3xl transition-all duration-500 group-hover:bg-amber-500/10"></div>
                        
                        <h3 class="text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-8">Kirim Pesan</h3>
                        
                        <form action="#" class="space-y-8 relative z-10">
                            <div class="grid md:grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Nama Lengkap</label>
                                    <input type="text" placeholder="Masukkan nama Anda" class="w-full bg-white border-b border-gray-200 py-4 px-4 focus:outline-none focus:border-amber-500 transition-all rounded-xl shadow-sm focus:shadow-md">
                                </div>
                                <div class="space-y-3">
                                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Alamat Email</label>
                                    <input type="email" placeholder="email@contoh.com" class="w-full bg-white border-b border-gray-200 py-4 px-4 focus:outline-none focus:border-amber-500 transition-all rounded-xl shadow-sm focus:shadow-md">
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Subjek</label>
                                <select class="w-full bg-white border-b border-gray-200 py-4 px-4 focus:outline-none focus:border-amber-500 transition-all rounded-xl shadow-sm focus:shadow-md appearance-none">
                                    <option>Pertanyaan Umum</option>
                                    <option>Reservasi Kamar</option>
                                    <option>Event & Wedding</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>

                            <div class="space-y-3">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Pesan Anda</label>
                                <textarea rows="4" placeholder="Apa yang bisa kami bantu?" class="w-full bg-white border-b border-gray-200 py-4 px-4 focus:outline-none focus:border-amber-500 transition-all rounded-xl shadow-sm focus:shadow-md"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-amber-600 hover:bg-amber-500 text-white font-bold py-5 px-8 rounded-full transition-all duration-300 shadow-lg shadow-amber-600/20 transform hover:-translate-y-1">
                                Kirim Sekarang
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-[500px] w-full relative">
        <div class="absolute inset-0 bg-gray-200 animate-pulse" id="map-placeholder"></div>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2736783853173!2d106.81591967484394!3d-6.227601961131758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f157790b40e7%3A0xc3466f286877990c!2sSudirman%20Central%20Business%20District!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            class="relative z-10"
            onload="document.getElementById('map-placeholder').style.display='none'">
        </iframe>
        
        <!-- Map Floating Info -->
        <div class="absolute bottom-10 left-10 z-20 bg-white/90 backdrop-blur-md p-6 rounded-3xl shadow-2xl border border-white/50 max-w-xs hidden md:block">
            <h5 class="text-gray-900 font-bold mb-2">Amanuba Resort</h5>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
                Kunjungi kami di pusat bisnis Jakarta. Lokasi strategis dengan akses mudah ke semua atraksi utama.
            </p>
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
