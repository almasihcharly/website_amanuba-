@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')
    
    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 font-['Playfair_Display']">Tentang Amanuba Hotel & Resort</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Temukan dunia kemewahan dan kenyamanan di mana setiap detail dirancang untuk melampaui ekspektasi Anda
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Hotel Interior" 
                         class="rounded-lg shadow-xl">
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6 font-['Playfair_Display']">Mengapa Memilih Amanuba?</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-amber-100 rounded-full p-3">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Lokasi Strategis</h4>
                                <p class="text-gray-600">Terletak di pusat kota dengan akses mudah ke distrik bisnis, pusat perbelanjaan, dan objek wisata.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-amber-100 rounded-full p-3">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Fasilitas Lengkap</h4>
                                <p class="text-gray-600">Nikmati kolam renang, spa, restoran, gym, dan WiFi kecepatan tinggi untuk kenyamanan Anda.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-amber-100 rounded-full p-3">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Layanan Premium</h4>
                                <p class="text-gray-600">Staf kami yang berdedikasi menyediakan layanan luar biasa 24/7 untuk memastikan masa menginap Anda tak terlupakan dan nyaman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured Rooms Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 font-['Playfair_Display']">Kamar Unggulan</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nikmati kamar-kamar mewah kami yang dirancang untuk kenyamanan maksimal Anda
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Superior Room -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1611892440507-42c791c244f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Superior Room" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 font-['Playfair_Display']">Superior</h3>
                        <p class="text-gray-600 mb-4">Kamar nyaman dengan fasilitas lengkap untuk masa menginap yang menyenangkan</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-3xl font-bold text-amber-600">
                                Rp 480.000
                                <span class="text-lg text-gray-500">/malam</span>
                            </div>
                            <div class="flex space-x-2">
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex space-x-2 mb-4">
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">King Bed</span>
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">City View</span>
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">WiFi</span>
                        </div>
                        <a href="{{ route('booking.create') }}" class="w-full bg-amber-600 text-white hover:bg-amber-700 px-4 py-2 rounded-lg text-center font-medium transition-colors duration-200 block">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                
                <!-- Deluxe Room -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="{{ asset('images/rooms/deluxe-room.jpg') }}" 
                         alt="Deluxe Room" 
                         class="w-full h-48 object-cover"
                         onerror="this.src='https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 font-['Playfair_Display']">Deluxe</h3>
                        <p class="text-gray-600 mb-4">Kamar luas dengan fasilitas premium dan pemandangan kota</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-3xl font-bold text-amber-600">
                                Rp 864.000
                                <span class="text-lg text-gray-500">/malam</span>
                            </div>
                            <div class="flex space-x-2">
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex space-x-2 mb-4">
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Tempat Tidur King</span>
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Pemandangan Laut</span>
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Ruang Tamu</span>
                        </div>
                        <a href="{{ route('booking.create') }}" class="w-full bg-amber-600 text-white hover:bg-amber-700 px-4 py-2 rounded-lg text-center font-medium transition-colors duration-200 block">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                
                <!-- Suite Room -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1564013799919-600d0b5a107b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Suite Room" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 font-['Playfair_Display']">Suite</h3>
                        <p class="text-gray-600 mb-4">Suite mewah dengan ruang tamu terpisah dan layanan premium</p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-3xl font-bold text-amber-600">
                                Rp 1.430.000
                                <span class="text-lg text-gray-500">/malam</span>
                            </div>
                            <div class="flex space-x-2">
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex space-x-2 mb-4">
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">2 Bedrooms</span>
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Kitchen</span>
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Kids Area</span>
                        </div>
                        <a href="{{ route('booking.create') }}" class="w-full bg-amber-600 text-white hover:bg-amber-700 px-4 py-2 rounded-lg text-center font-medium transition-colors duration-200 block">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('rooms') }}" class="inline-flex items-center bg-amber-600 text-white hover:bg-amber-700 px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                    View All Rooms
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 font-['Playfair_Display']">Gallery</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Take a visual tour of our beautiful hotel and facilities
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Hotel Lobby" 
                         class="w-full h-full object-cover rounded-lg">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1564013799919-600d0b5a107b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Pool Area" 
                         class="w-full h-full object-cover rounded-lg">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89423de52?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Restaurant" 
                         class="w-full h-full object-cover rounded-lg">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Spa" 
                         class="w-full h-full object-cover rounded-lg">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Gym" 
                         class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Booking CTA Section -->
    <section class="py-20 bg-gradient-to-r from-amber-600 to-amber-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-4 font-['Playfair_Display']">Ready to Experience Luxury?</h2>
            <p class="text-xl text-amber-100 mb-8 max-w-3xl mx-auto">
                Book your stay today and enjoy exclusive benefits and unforgettable experiences
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-amber-600 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                Make a Reservation
            </a>
        </div>
    </section>
@endsection
