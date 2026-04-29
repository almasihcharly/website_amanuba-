@extends('layouts.app')

@section('title', 'Exclusive Facilities')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1571896349842-33c89423de52?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                 alt="Luxury Facilities" 
                 class="w-full h-full object-cover scale-105 animate-slow-zoom">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <span class="text-amber-500 font-bold tracking-[0.3em] uppercase text-sm mb-6 block animate-fade-in">Kemewahan Tanpa Batas</span>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 font-['Playfair_Display'] leading-tight animate-fade-in-up">
                Our <span class="italic font-light">Facilities</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 font-light max-w-2xl mx-auto animate-fade-in-up delay-200">
                Layanan kelas dunia dan fasilitas premium yang dirancang untuk memenuhi setiap kebutuhan Anda.
            </p>
        </div>
    </section>

    <!-- Main Facilities Grid -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Pengalaman Tak Terlupakan</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto font-light leading-relaxed">
                    Setiap sudut Amanuba dirancang untuk kenyamanan maksimal Anda, menggabungkan estetika modern dengan keramah-tamahan yang hangat.
                </p>
            </div>

            <div class="space-y-32">
                <!-- Facility 1: Infinity Pool (Alternating Layout) -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="w-full lg:w-1/2 relative">
                        <div class="absolute -top-6 -left-6 w-full h-full bg-amber-50 rounded-[2rem] z-0"></div>
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl group">
                            <img src="https://images.unsplash.com/photo-1571896349842-33c89423de52?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                                 alt="Infinity Pool" 
                                 class="w-full h-[450px] object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <span class="text-amber-600 font-bold tracking-[0.2em] uppercase text-xs mb-4 block">Wellness & Recreation</span>
                        <h3 class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">The Infinity Pool</h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-8 text-lg">
                            Berenanglah di kolam renang infinity kami yang menakjubkan dengan pemandangan cakrawala kota yang spektakuler. Tempat yang sempurna untuk menyegarkan diri di pagi hari atau bersantai saat matahari terbenam.
                        </p>
                        <div class="grid grid-cols-2 gap-6 mb-10">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">06:00 - 22:00</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">Poolside Service</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility 2: Fine Dining (Reversed) -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
                    <div class="w-full lg:w-1/2 relative">
                        <div class="absolute -top-6 -right-6 w-full h-full bg-amber-50 rounded-[2rem] z-0"></div>
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl group">
                            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                                 alt="Fine Dining" 
                                 class="w-full h-[450px] object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <span class="text-amber-600 font-bold tracking-[0.2em] uppercase text-xs mb-4 block">Culinary Arts</span>
                        <h3 class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Signature Restaurant</h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-8 text-lg">
                            Nikmati simfoni rasa yang disiapkan oleh koki ternama kami. Restoran kami menyajikan perpaduan kuliner lokal dan internasional yang akan memanjakan lidah Anda dalam suasana yang elegan.
                        </p>
                        <div class="grid grid-cols-2 gap-6 mb-10">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">06:30 - 23:00</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">Fine Dining</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility 3: Spa -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="w-full lg:w-1/2 relative">
                        <div class="absolute -top-6 -left-6 w-full h-full bg-amber-50 rounded-[2rem] z-0"></div>
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl group">
                            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
                                 alt="Spa" 
                                 class="w-full h-[450px] object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <span class="text-amber-600 font-bold tracking-[0.2em] uppercase text-xs mb-4 block">Rest & Relaxation</span>
                        <h3 class="text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Sanctuary Spa</h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-8 text-lg">
                            Manjakan diri Anda dengan perawatan spa holistik kami. Terapis profesional kami akan membantu Anda mencapai ketenangan pikiran dan tubuh yang optimal melalui teknik tradisional dan modern.
                        </p>
                        <div class="grid grid-cols-2 gap-6 mb-10">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">09:00 - 21:00</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">Private Therapy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Essential Amenities Highlight -->
    <section class="py-24 bg-[#0f1115] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold font-['Playfair_Display'] mb-16">Layanan Esensial Lainnya</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center text-amber-500 mx-auto mb-6 border border-amber-500/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4 class="font-bold">Business Center</h4>
                    <p class="text-gray-500 text-sm font-light">Lengkap dengan ruang meeting pribadi & akses internet cepat.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center text-amber-500 mx-auto mb-6 border border-amber-500/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h4 class="font-bold">Kids Club</h4>
                    <p class="text-gray-500 text-sm font-light">Area bermain yang aman dan menyenangkan untuk si kecil.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center text-amber-500 mx-auto mb-6 border border-amber-500/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="font-bold">Concierge 24/7</h4>
                    <p class="text-gray-500 text-sm font-light">Layanan bantuan pribadi untuk segala kebutuhan Anda.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center text-amber-500 mx-auto mb-6 border border-amber-500/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="font-bold">Fitness Suite</h4>
                    <p class="text-gray-500 text-sm font-light">Peralatan modern untuk menjaga kebugaran Anda setiap hari.</p>
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
