@extends('layouts.app')

@php
    $rooms = [
        'superior' => [
            'name' => 'Superior Room',
            'price' => '480.000',
            'size' => '25',
            'guests' => '2',
            'bed' => 'Queen Bed',
            'description' => 'Kamar Superior kami menawarkan perpaduan sempurna antara fungsionalitas dan kenyamanan. Didesain dengan palet warna yang menenangkan dan perabotan modern, kamar ini menyediakan tempat perlindungan yang ideal bagi pelancong bisnis maupun rekreasi yang mencari kualitas tanpa kompromi.',
            'images' => [
                'https://images.unsplash.com/photo-1611892440507-42c791c244f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1595576508898-0ad5c879a061?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80'
            ],
            'amenities' => ['High-speed WiFi', 'Air Conditioning', 'Flat-screen TV', 'Mini Bar', 'Coffee/Tea Maker', 'Luxury Toiletries']
        ],
        'deluxe' => [
            'name' => 'Deluxe City View',
            'price' => '864.000',
            'size' => '35',
            'guests' => '3',
            'bed' => 'King Bed',
            'description' => 'Nikmati kemewahan ruang yang lebih luas di Kamar Deluxe kami. Dengan jendela besar yang menghadap langsung ke cakrawala kota, kamar ini menawarkan pemandangan yang memukau baik siang maupun malam. Interior yang elegan dipadukan dengan fasilitas premium memastikan pengalaman menginap yang tak terlupakan.',
            'images' => [
                'https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1591088398332-8a7791972843?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80'
            ],
            'amenities' => ['City View', 'Work Desk', 'King Bed', 'Rain Shower', 'Safety Box', 'Robes & Slippers']
        ],
        'executive' => [
            'name' => 'Executive Suite',
            'price' => '1.430.000',
            'size' => '55',
            'guests' => '4',
            'bed' => 'King Bed + Sofa Bed',
            'description' => 'Didesain untuk eksekutif modern, Executive Suite kami menyediakan ruang tamu terpisah yang luas, ideal untuk menjamu tamu atau sekadar bersantai dalam privasi. Kemewahan bertemu fungsionalitas dengan perabotan kelas atas dan akses ke layanan eksklusif kami.',
            'images' => [
                'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1590490359683-658d3d23f972?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80'
            ],
            'amenities' => ['Separate Living Area', 'Butler Service', 'Nespresso Machine', 'Premium Sound System', 'Evening Turndown', 'Pillow Menu']
        ],
        'presidential' => [
            'name' => 'Presidential Suite',
            'price' => '3.500.000',
            'size' => '120',
            'guests' => '6',
            'bed' => '2 King Bedrooms',
            'description' => 'Puncak kemewahan di Amanuba. Presidential Suite kami menawarkan kemegahan tanpa tanding dengan ruang tamu yang sangat luas, ruang makan pribadi, dan dua kamar tidur mewah. Setiap detail telah dirancang dengan cermat untuk memberikan pengalaman tinggal yang paling eksklusif dan prestisius.',
            'images' => [
                'https://images.unsplash.com/photo-1591088398332-8a7791972843?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1578683010236-d716f9a3f2c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80'
            ],
            'amenities' => ['Private Pool', 'Kitchenette', 'Private Elevator', 'Luxury Bathroom', 'Walk-in Closet', '24h Personal Butler']
        ],
        'family' => [
            'name' => 'Family Ocean View',
            'price' => '1.200.000',
            'size' => '65',
            'guests' => '5',
            'bed' => '2 Queen Beds',
            'description' => 'Pilihan ideal untuk liburan keluarga. Kamar ini menawarkan ruang yang sangat lega dengan pemandangan laut yang menyegarkan. Dilengkapi dengan fasilitas ramah anak dan area yang dirancang khusus untuk kenyamanan seluruh anggota keluarga, memastikan momen berharga Anda tetap nyaman.',
            'images' => [
                'https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1505691938895-1758d7eaa511?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1512918766671-ad650b9b732d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80'
            ],
            'amenities' => ['Ocean View', 'Connecting Rooms', 'Kids Area', 'Dining Table', 'Welcome Treats', 'Extra Crib Available']
        ],
        'honeymoon' => [
            'name' => 'Honeymoon Suite',
            'price' => '1.850.000',
            'size' => '45',
            'guests' => '2',
            'bed' => 'King Bed',
            'description' => 'Rayakan cinta Anda dalam suasana yang paling romantis. Honeymoon Suite kami dirancang khusus dengan sentuhan intim, dekorasi bunga segar, dan balkon pribadi untuk menikmati sunset. Kemewahan jacuzzi dan layanan khusus akan membuat awal perjalanan baru Anda menjadi sangat istimewa.',
            'images' => [
                'https://images.unsplash.com/photo-1520250498154-50f9eca3e533?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80',
                'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80'
            ],
            'amenities' => ['Private Jacuzzi', 'Sunset Balcony', 'Romantic Setup', 'Champagne on Arrival', 'Couples Spa Access', 'Breakfast in Bed']
        ]
    ];

    $room = $rooms[$type] ?? $rooms['superior'];
@endphp

@section('title', $room['name'])

@section('content')
    <!-- Room Detail Hero / Gallery -->
    <section class="pt-24 pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
                <div>
                    <nav class="flex mb-4 text-sm font-medium text-gray-400">
                        <a href="{{ route('rooms') }}" class="hover:text-amber-600 transition-colors">Rooms & Suites</a>
                        <span class="mx-2">/</span>
                        <span class="text-gray-900">{{ $room['name'] }}</span>
                    </nav>
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 font-['Playfair_Display'] leading-tight">{{ $room['name'] }}</h1>
                </div>
                <div class="text-right">
                    <div class="text-gray-400 text-sm tracking-widest uppercase mb-1">Mulai dari</div>
                    <div class="text-4xl font-bold text-amber-600">Rp {{ $room['price'] }} <span class="text-lg font-light text-gray-400">/malam</span></div>
                </div>
            </div>

            <!-- Main Gallery Layout -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 h-[500px] md:h-[600px] mb-16">
                <div class="md:col-span-8 h-full rounded-3xl overflow-hidden shadow-lg group">
                    <img src="{{ $room['images'][0] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $room['name'] }}">
                </div>
                <div class="md:col-span-4 h-full flex flex-col gap-4">
                    <div class="h-1/2 rounded-3xl overflow-hidden shadow-lg group">
                        <img src="{{ $room['images'][1] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Detail 1">
                    </div>
                    <div class="h-1/2 rounded-3xl overflow-hidden shadow-lg group relative">
                        <img src="{{ $room['images'][2] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Detail 2">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-white font-bold text-sm tracking-widest uppercase border border-white px-6 py-2 rounded-full">Lihat Semua Foto</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid lg:grid-cols-12 gap-16">
                <!-- Left: Description & Amenities -->
                <div class="lg:col-span-8 space-y-12">
                    <div class="space-y-6">
                        <h2 class="text-3xl font-bold text-gray-900 font-['Playfair_Display']">Deskripsi Kamar</h2>
                        <p class="text-gray-600 text-lg font-light leading-relaxed">
                            {{ $room['description'] }}
                        </p>
                    </div>

                    <!-- Room Features Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-10 border-y border-gray-100">
                        <div class="text-center">
                            <div class="text-amber-600 font-bold text-2xl mb-1">{{ $room['size'] }} m²</div>
                            <div class="text-gray-400 text-xs uppercase tracking-widest font-bold">Luas Kamar</div>
                        </div>
                        <div class="text-center">
                            <div class="text-amber-600 font-bold text-2xl mb-1">{{ $room['guests'] }} Orang</div>
                            <div class="text-gray-400 text-xs uppercase tracking-widest font-bold">Kapasitas</div>
                        </div>
                        <div class="text-center">
                            <div class="text-amber-600 font-bold text-xl mb-1 truncate px-2">{{ $room['bed'] }}</div>
                            <div class="text-gray-400 text-xs uppercase tracking-widest font-bold">Tipe Bed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-amber-600 font-bold text-2xl mb-1">
                                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div class="text-gray-400 text-xs uppercase tracking-widest font-bold">Breakfast</div>
                        </div>
                    </div>

                    <!-- Amenities -->
                    <div class="space-y-8">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display']">Fasilitas & Layanan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-12">
                            @foreach($room['amenities'] as $amenity)
                                <div class="flex items-center text-gray-600 group">
                                    <div class="w-8 h-8 rounded-full bg-amber-50 flex items-center justify-center text-amber-600 mr-4 transition-all group-hover:bg-amber-600 group-hover:text-white">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="font-light">{{ $amenity }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Right: Sticky Booking Card -->
                <div class="lg:col-span-4">
                    <div class="sticky top-32 bg-gray-50 rounded-3xl p-8 border border-gray-100 shadow-sm">
                        <h3 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Informasi Reservasi</h3>
                        <div class="space-y-6 mb-8">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Check-in</span>
                                <span class="font-bold text-gray-900">Mulai 14:00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Check-out</span>
                                <span class="font-bold text-gray-900">Hingga 12:00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm border-t border-gray-200 pt-6">
                                <span class="text-gray-900 font-bold">Total Harga</span>
                                <div class="text-right">
                                    <div class="text-amber-600 font-bold text-2xl">Rp {{ $room['price'] }}</div>
                                    <div class="text-gray-400 text-[10px] uppercase font-bold tracking-tighter">Per Malam (Termasuk Pajak)</div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('booking.create') }}?room={{ $type }}" 
                           class="w-full block text-center bg-amber-600 hover:bg-amber-500 text-white font-bold py-4 rounded-2xl transition-all duration-300 shadow-lg shadow-amber-600/20 transform hover:-translate-y-1">
                            Pesan Sekarang
                        </a>
                        
                        <p class="mt-6 text-center text-gray-400 text-xs leading-relaxed font-light">
                            Konfirmasi instan. Tidak ada biaya pembatalan hingga 24 jam sebelum kedatangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Rooms Suggestion -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-12">Pilihan Kamar Lainnya</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach(collect($rooms)->except($type)->shuffle()->take(3) as $slug => $otherRoom)
                    <a href="{{ route('rooms.details', $slug) }}" class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col h-full">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $otherRoom['images'][0] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full">
                                <span class="text-amber-600 font-bold text-[10px] tracking-widest uppercase">Lihat Detail</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">{{ $otherRoom['name'] }}</h4>
                            <div class="text-amber-600 font-bold">Rp {{ $otherRoom['price'] }} <span class="text-xs font-light text-gray-400">/malam</span></div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
