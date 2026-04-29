@extends('layouts.app')

@section('title', 'Pemesanan Kamar - Amanuba Hotel & Resort')

@section('content')
<!-- Hero Section -->
<section class="relative h-64 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 font-['Playfair_Display']">Pemesanan Kamar</h1>
            <p class="text-xl">Lengkapi formulir di bawah ini untuk melakukan pemesanan</p>
        </div>
    </div>
</section>

<!-- Booking Form Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('booking.store') }}" method="POST" class="bg-white rounded-lg shadow-lg p-8">
                @csrf
                
                <!-- Room Selection -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">Pilih Kamar *</label>
                    <select name="room_id" id="room_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                        <option value="">-- Pilih Kamar --</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}" data-price="{{ $room->price }}" data-max-guests="{{ $room->max_guests }}">
                                {{ $room->name }} - {{ $room->formatted_price }}/malam
                            </option>
                        @endforeach
                    </select>
                    @error('room_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Date Selection -->
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal Check-in *</label>
                        <input type="date" name="check_in" id="check_in" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                        @error('check_in')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal Check-out *</label>
                        <input type="date" name="check_out" id="check_out" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                        @error('check_out')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Guests -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">Jumlah Tamu *</label>
                    <input type="number" name="guests" id="guests" min="1" max="10" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                    @error('guests')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Personal Information -->
                <div class="border-t pt-6 mb-6">
                    <h3 class="text-xl font-semibold mb-4">Informasi Pribadi</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                            <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Nomor Telepon *</label>
                        <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                        @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Special Requests -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">Permintaan Khusus (Opsional)</label>
                    <textarea name="special_requests" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Contoh: Permintaan kamar di lantai atas, tambahan extra bed, dll."></textarea>
                    @error('special_requests')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Price Calculation -->
                <div class="bg-gray-100 rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold mb-4">Ringkasan Pemesanan</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Kamar:</span>
                            <span id="selected-room">-</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Harga per malam:</span>
                            <span id="room-price">-</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Jumlah malam:</span>
                            <span id="nights-count">-</span>
                        </div>
                        <div class="border-t pt-2 flex justify-between font-bold text-lg">
                            <span>Total Harga:</span>
                            <span id="total-price">-</span>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-amber-600 text-white hover:bg-amber-700 px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                        Pesan Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const roomSelect = document.getElementById('room_id');
    const checkInInput = document.getElementById('check_in');
    const checkOutInput = document.getElementById('check_out');
    const guestsInput = document.getElementById('guests');
    
    const selectedRoomSpan = document.getElementById('selected-room');
    const roomPriceSpan = document.getElementById('room-price');
    const nightsCountSpan = document.getElementById('nights-count');
    const totalPriceSpan = document.getElementById('total-price');

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    checkInInput.min = today;
    checkOutInput.min = today;

    function calculatePrice() {
        const selectedOption = roomSelect.options[roomSelect.selectedIndex];
        const roomName = selectedOption.text.split(' - ')[0];
        const roomPrice = parseFloat(selectedOption.dataset.price) || 0;
        const maxGuests = parseInt(selectedOption.dataset.maxGuests) || 1;
        
        // Update max guests
        guestsInput.max = maxGuests;
        
        const checkIn = new Date(checkInInput.value);
        const checkOut = new Date(checkOutInput.value);
        
        if (roomSelect.value && checkInInput.value && checkOutInput.value && checkOut > checkIn) {
            const nights = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));
            const totalPrice = roomPrice * nights;
            
            selectedRoomSpan.textContent = roomName;
            roomPriceSpan.textContent = 'Rp ' + roomPrice.toLocaleString('id-ID');
            nightsCountSpan.textContent = nights + ' malam';
            totalPriceSpan.textContent = 'Rp ' + totalPrice.toLocaleString('id-ID');
        } else {
            selectedRoomSpan.textContent = '-';
            roomPriceSpan.textContent = '-';
            nightsCountSpan.textContent = '-';
            totalPriceSpan.textContent = '-';
        }
    }

    // Event listeners
    roomSelect.addEventListener('change', calculatePrice);
    checkInInput.addEventListener('change', function() {
        checkOutInput.min = this.value;
        if (checkOutInput.value && checkOutInput.value <= this.value) {
            const nextDay = new Date(this.value);
            nextDay.setDate(nextDay.getDate() + 1);
            checkOutInput.value = nextDay.toISOString().split('T')[0];
        }
        calculatePrice();
    });
    checkOutInput.addEventListener('change', calculatePrice);
    guestsInput.addEventListener('change', calculatePrice);
});
</script>
@endpush
