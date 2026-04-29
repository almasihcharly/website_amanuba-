@extends('layouts.app')

@section('title', 'Simple Booking - Amanuba Hotel & Resort')

@section('content')
<!-- Hero Section -->
<section class="relative h-80 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" 
             alt="Booking" 
             class="w-full h-full object-cover scale-105 animate-slow-zoom">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="relative z-10 text-center px-4">
        <span class="text-amber-500 font-bold tracking-[0.3em] uppercase text-sm mb-4 block">Reservasi</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 font-['Playfair_Display']">Lengkapi Pemesanan</h1>
        <p class="text-gray-300 font-light max-w-xl mx-auto">Hanya beberapa langkah lagi menuju pengalaman menginap impian Anda.</p>
    </div>
</section>

<!-- Simple Booking Form Section -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl -ml-48 -mb-48"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl mx-auto">
            
            @if($errors->any())
                <div class="mb-8 p-6 bg-red-50 border-l-4 border-red-500 rounded-2xl shadow-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-bold text-red-800">Mohon perbaiki kesalahan berikut:</h3>
                            <ul class="mt-2 text-sm text-red-700 list-disc list-inside space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('booking.store') }}" method="POST" class="bg-white rounded-[3rem] shadow-xl shadow-gray-200/50 p-10 md:p-14 border border-gray-100">
                @csrf
                
                <h2 class="text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-10 text-center">Formulir Booking</h2>

                <div class="space-y-8">
                    <!-- Room Selection (Hidden if pre-selected, but let's keep it clean) -->
                    <div class="space-y-3">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Pilih Kamar</label>
                        <select name="room_id" id="room_id" class="w-full bg-gray-50 border-none py-4 px-6 focus:ring-2 focus:ring-amber-500 transition-all rounded-2xl text-gray-900 font-medium appearance-none" required>
                            <option value="">-- Pilih Kamar --</option>
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}" data-price="{{ $room->price }}" {{ request('room') == strtolower(str_replace(' ', '-', $room->name)) || request('room_id') == $room->id ? 'selected' : '' }}>
                                    {{ $room->name }} - Rp {{ number_format($room->price, 0, ',', '.') }}/malam
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Full Name -->
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Nama Lengkap</label>
                            <input type="text" name="name" placeholder="Masukkan nama Anda" value="{{ old('name') }}" class="w-full bg-gray-50 border-none py-4 px-6 focus:ring-2 focus:ring-amber-500 transition-all rounded-2xl text-gray-900 font-medium" required>
                        </div>

                        <!-- Email -->
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Alamat Email</label>
                            <input type="email" name="email" placeholder="email@contoh.com" value="{{ old('email') }}" class="w-full bg-gray-50 border-none py-4 px-6 focus:ring-2 focus:ring-amber-500 transition-all rounded-2xl text-gray-900 font-medium" required>
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="space-y-3">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Nomor Telepon</label>
                        <input type="tel" name="phone" placeholder="0812xxxx" value="{{ old('phone') }}" class="w-full bg-gray-50 border-none py-4 px-6 focus:ring-2 focus:ring-amber-500 transition-all rounded-2xl text-gray-900 font-medium" required>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Check-in Date -->
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Tanggal Check-in</label>
                            <input type="date" name="check_in" id="check_in" value="{{ old('check_in', date('Y-m-d')) }}" class="w-full bg-gray-50 border-none py-4 px-6 focus:ring-2 focus:ring-amber-500 transition-all rounded-2xl text-gray-900 font-medium" required>
                        </div>

                        <!-- Duration -->
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Durasi Menginap</label>
                            <div class="relative">
                                <input type="number" name="duration" id="duration" min="1" max="30" value="{{ old('duration', 1) }}" class="w-full bg-gray-50 border-none py-4 px-6 focus:ring-2 focus:ring-amber-500 transition-all rounded-2xl text-gray-900 font-medium" required>
                                <span class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 font-medium">Hari</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Summary -->
                <div class="mt-12 p-8 bg-amber-50 rounded-[2rem] border border-amber-100/50">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-500 text-sm">Estimasi Total</span>
                        <span id="display-price" class="text-2xl font-bold text-amber-600">Rp 0</span>
                    </div>
                    <p class="text-gray-400 text-[10px] uppercase tracking-tighter">Sudah termasuk pajak & layanan</p>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-amber-600 hover:bg-amber-500 text-white font-bold py-5 px-8 rounded-full mt-10 transition-all duration-300 shadow-xl shadow-amber-600/20 transform hover:-translate-y-1 text-lg">
                    Konfirmasi Pemesanan
                </button>
            </form>

            <p class="mt-10 text-center text-gray-400 text-sm font-light">
                Butuh bantuan? <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:underline">Hubungi kami</a>
            </p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const roomSelect = document.getElementById('room_id');
    const checkInInput = document.getElementById('check_in');
    const durationInput = document.getElementById('duration');
    const displayPrice = document.getElementById('display-price');

    function updatePrice() {
        const selectedOption = roomSelect.options[roomSelect.selectedIndex];
        const roomPrice = parseFloat(selectedOption.dataset.price) || 0;
        const duration = parseInt(durationInput.value) || 0;
        
        const total = roomPrice * duration;
        displayPrice.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }

    // Set min date to today
    const today = new Date().toISOString().split('T')[0];
    checkInInput.min = today;

    roomSelect.addEventListener('change', updatePrice);
    durationInput.addEventListener('input', updatePrice);
    
    // Initial calculation
    updatePrice();
});
</script>
@endpush

<style>
    @keyframes slow-zoom {
        from { transform: scale(1); }
        to { transform: scale(1.1); }
    }
    .animate-slow-zoom {
        animation: slow-zoom 20s ease-in-out infinite alternate;
    }
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(0.5);
    }
</style>
