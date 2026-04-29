@extends('layouts.app')

@section('title', 'Booking - Amanuba Hotel & Resort')

@section('content')
<div class="min-h-screen bg-[#fafafa] pt-32 pb-20">
    <div class="max-w-5xl mx-auto px-4">
        
        <!-- Minimalist Header -->
        <div class="text-center mb-16 space-y-4">
            <h1 class="text-4xl md:text-5xl font-light text-gray-900 tracking-tight">Konfirmasi <span class="font-bold">Reservasi</span></h1>
            <p class="text-gray-400 font-light max-w-lg mx-auto">Lengkapi detail pemesanan Anda untuk mengamankan kenyamanan terbaik di Amanuba.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-12 items-start">
            
            <!-- Form Side (Left - 2/3) -->
            <div class="lg:col-span-2 space-y-8">
                <form action="{{ route('booking.store') }}" method="POST" id="booking-form" class="space-y-10">
                    @csrf
                    
                    <!-- Hidden Room ID -->
                    <input type="hidden" name="room_id" id="room_id" value="{{ $selectedRoom->id }}">

                    <!-- Section: Personal Info -->
                    <div class="bg-white p-10 rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.03)] border border-gray-100">
                        <div class="flex items-center space-x-4 mb-10">
                            <div class="w-1.5 h-6 bg-amber-500 rounded-full"></div>
                            <h2 class="text-xl font-bold text-gray-900">Informasi Pribadi</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold uppercase tracking-widest text-gray-400 ml-1">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama" class="w-full bg-gray-50 border-none py-5 px-8 focus:ring-2 focus:ring-amber-500/20 transition-all rounded-2xl text-gray-900 font-medium placeholder:text-gray-300" required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold uppercase tracking-widest text-gray-400 ml-1">Alamat Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" class="w-full bg-gray-50 border-none py-5 px-8 focus:ring-2 focus:ring-amber-500/20 transition-all rounded-2xl text-gray-900 font-medium placeholder:text-gray-300" required>
                            </div>
                        </div>

                        <div class="mt-8 space-y-2">
                            <label class="text-[11px] font-bold uppercase tracking-widest text-gray-400 ml-1">Nomor Telepon</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="0812 3456 7890" class="w-full bg-gray-50 border-none py-5 px-8 focus:ring-2 focus:ring-amber-500/20 transition-all rounded-2xl text-gray-900 font-medium placeholder:text-gray-300" required>
                        </div>
                    </div>

                    <!-- Section: Stay Schedule -->
                    <div class="bg-white p-10 rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.03)] border border-gray-100">
                        <div class="flex items-center space-x-4 mb-10">
                            <div class="w-1.5 h-6 bg-amber-500 rounded-full"></div>
                            <h2 class="text-xl font-bold text-gray-900">Jadwal Menginap</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold uppercase tracking-widest text-gray-400 ml-1">Check-in</label>
                                <input type="date" name="check_in" id="check_in" value="{{ old('check_in', date('Y-m-d')) }}" class="w-full bg-gray-50 border-none py-5 px-8 focus:ring-2 focus:ring-amber-500/20 transition-all rounded-2xl text-gray-900 font-bold" required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold uppercase tracking-widest text-gray-400 ml-1">Durasi</label>
                                <div class="relative">
                                    <input type="number" name="duration" id="duration" min="1" max="30" value="{{ old('duration', 1) }}" class="w-full bg-gray-50 border-none py-5 px-8 focus:ring-2 focus:ring-amber-500/20 transition-all rounded-2xl text-gray-900 font-bold" required>
                                    <span class="absolute right-8 top-1/2 -translate-y-1/2 text-gray-400 font-bold text-xs uppercase tracking-widest">Hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Summary Side (Right - 1/3) -->
            <div class="lg:sticky lg:top-32">
                <div class="bg-white p-10 rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.05)] border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-8 border-b border-gray-50 pb-6">Ringkasan Pesanan</h3>
                    
                    <div class="space-y-6">
                        <!-- Pre-selected Room Display -->
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 border border-amber-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-[10px] uppercase font-bold tracking-widest">Kamar Terpilih</p>
                                    <p class="font-bold text-gray-900">{{ $selectedRoom->name }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center py-4 border-t border-gray-50">
                            <span class="text-gray-500 text-sm">Durasi</span>
                            <span id="summary-duration" class="font-bold text-gray-900">1 Hari</span>
                        </div>

                        <div class="space-y-3 pt-6 border-t border-gray-50">
                            <div class="flex justify-between items-end">
                                <span class="text-gray-500 text-sm mb-1">Total Harga</span>
                                <div class="text-right">
                                    <span id="summary-price" class="text-3xl font-bold text-amber-600 block">Rp 0</span>
                                </div>
                            </div>
                            <p class="text-[10px] text-gray-400 italic leading-relaxed">Termasuk pajak & biaya layanan</p>
                        </div>

                        <button type="submit" form="booking-form" class="w-full bg-amber-600 hover:bg-amber-500 text-white font-bold py-5 rounded-2xl transition-all duration-300 shadow-xl shadow-amber-600/20 transform hover:-translate-y-1 mt-6">
                            Konfirmasi Booking
                        </button>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-gray-400 text-[11px] font-bold uppercase tracking-widest">Butuh bantuan?</p>
                    <a href="https://wa.me/628123456789" class="inline-flex items-center mt-2 text-amber-600 font-bold hover:text-amber-700 transition-colors">
                        <span class="text-sm">Hubungi via WhatsApp</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Clean inputs */
    input[type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0.3;
        cursor: pointer;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkInInput = document.getElementById('check_in');
    const durationInput = document.getElementById('duration');
    
    const summaryDuration = document.getElementById('summary-duration');
    const summaryPrice = document.getElementById('summary-price');

    // Pre-selected room data
    const roomPrice = {{ $selectedRoom->price }};

    function updateSummary() {
        const duration = parseInt(durationInput.value) || 1;
        const total = roomPrice * duration;
        
        summaryDuration.textContent = duration + ' Hari';
        summaryPrice.textContent = 'Rp ' + total.toLocaleString('id-ID');
        
        // Highlight change
        summaryPrice.classList.add('scale-105');
        setTimeout(() => summaryPrice.classList.remove('scale-105'), 200);
    }

    // Set min date to today
    const today = new Date().toISOString().split('T')[0];
    checkInInput.min = today;

    durationInput.addEventListener('input', updateSummary);
    
    // Initial call
    updateSummary();
});
</script>
@endpush
