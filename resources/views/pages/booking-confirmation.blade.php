@extends('layouts.app')

@section('title', 'Konfirmasi Pemesanan - Amanuba Hotel & Resort')

@section('content')
<!-- Hero Section -->
<section class="relative h-64 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 font-['Playfair_Display']">Konfirmasi Pemesanan</h1>
            <p class="text-xl">Terima kasih telah melakukan pemesanan</p>
        </div>
    </div>
</section>

<!-- Confirmation Content -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            @if(session('success'))
                <div class="mb-8 p-6 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Pemesanan Berhasil!</h3>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Booking Details Card -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold mb-6 font-['Playfair_Display']">Detail Pemesanan</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Room Information -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Informasi Kamar</h3>
                        <div class="space-y-3">
                            <div class="flex">
                                <span class="font-medium w-32">Tipe Kamar:</span>
                                <span>{{ $booking->room->name }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Check-in:</span>
                                <span>{{ $booking->check_in->format('d F Y') }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Check-out:</span>
                                <span>{{ $booking->check_out->format('d F Y') }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Jumlah Malam:</span>
                                <span>{{ $booking->getNightsCount() }} malam</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Jumlah Tamu:</span>
                                <span>{{ $booking->guests }} orang</span>
                            </div>
                            @if($booking->special_requests)
                                <div class="flex">
                                    <span class="font-medium w-32">Permintaan Khusus:</span>
                                    <span>{{ $booking->special_requests }}</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Guest Information -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Informasi Tamu</h3>
                        <div class="space-y-3">
                            <div class="flex">
                                <span class="font-medium w-32">Nama:</span>
                                <span>{{ $booking->name }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Email:</span>
                                <span>{{ $booking->email }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Telepon:</span>
                                <span>{{ $booking->phone }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-medium w-32">Status:</span>
                                <span class="px-3 py-1 rounded-full text-sm font-medium
                                    @if($booking->status == 'confirmed') bg-green-100 text-green-800
                                    @elseif($booking->status == 'pending') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Summary -->
                <div class="border-t mt-8 pt-6">
                    <div class="bg-gray-100 rounded-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Ringkasan Harga</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Harga per malam:</span>
                                <span>{{ $booking->room->formatted_price }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Jumlah malam:</span>
                                <span>{{ $booking->getNightsCount() }} malam</span>
                            </div>
                            <div class="border-t pt-2 flex justify-between font-bold text-lg">
                                <span>Total Harga:</span>
                                <span class="text-amber-600">{{ $booking->formatted_total_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-amber-50 rounded-lg p-8 mb-8">
                <h3 class="text-xl font-semibold mb-4">Langkah Selanjutnya</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="bg-amber-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold">1</span>
                        </div>
                        <h4 class="font-semibold mb-2">Konfirmasi</h4>
                        <p class="text-gray-600">Tim kami akan menghubungi Anda dalam 24 jam untuk konfirmasi pemesanan</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-amber-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold">2</span>
                        </div>
                        <h4 class="font-semibold mb-2">Pembayaran</h4>
                        <p class="text-gray-600">Lakukan pembayaran sesuai instruksi yang akan dikirimkan via email</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-amber-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold">3</span>
                        </div>
                        <h4 class="font-semibold mb-2">Check-in</h4>
                        <p class="text-gray-600">Datang ke hotel pada tanggal check-in dengan membawa identitas</p>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-semibold mb-4">Butuh Bantuan?</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold mb-2">Hubungi Kami</h4>
                        <p class="text-gray-600 mb-2">📞 +62 361 123 456</p>
                        <p class="text-gray-600 mb-2">📧 info@amanubahotel.com</p>
                        <p class="text-gray-600">📍 Jl. Raya Ubud, Gianyar, Bali</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">Jam Operasional</h4>
                        <p class="text-gray-600 mb-2">Senin - Jumat: 08:00 - 22:00</p>
                        <p class="text-gray-600 mb-2">Sabtu - Minggu: 07:00 - 23:00</p>
                        <p class="text-gray-600">Reservasi 24/7 tersedia</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="text-center mt-8">
                <a href="{{ route('home') }}" class="bg-amber-600 text-white hover:bg-amber-700 px-8 py-3 rounded-lg font-semibold transition-colors duration-200 mr-4">
                    Kembali ke Beranda
                </a>
                <a href="{{ route('rooms') }}" class="border border-amber-600 text-amber-600 hover:bg-amber-50 px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                    Lihat Kamar Lain
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
