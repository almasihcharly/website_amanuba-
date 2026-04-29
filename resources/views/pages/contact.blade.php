@extends('layouts.app')

@section('title', 'Kontak & Pemesanan')

@section('content')
    <!-- Hero Section for Contact -->
    <section class="relative h-96 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1520250498154-50f9eca3e533?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                 alt="Contact Us" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>
        
        <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 font-['Playfair_Display']">Kontak & Pemesanan</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto font-light">
                Hubungi kami atau buat reservasi untuk masa menginap yang sempurna
            </p>
        </div>
    </section>
    
    <!-- Contact & Booking Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Booking Form -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 font-['Playfair_Display']">Buat Reservasi</h2>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                                       placeholder="John Doe"
                                       value="{{ old('name') }}">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                                       placeholder="john@example.com"
                                       value="{{ old('email') }}">
                            </div>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                                   placeholder="+1 234 567 8900"
                                   value="{{ old('phone') }}">
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="check_in" class="block text-sm font-medium text-gray-700 mb-2">Check-in Date *</label>
                                <input type="date" id="check_in" name="check_in" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                                       value="{{ old('check_in') }}">
                            </div>
                            
                            <div>
                                <label for="check_out" class="block text-sm font-medium text-gray-700 mb-2">Check-out Date *</label>
                                <input type="date" id="check_out" name="check_out" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                                       value="{{ old('check_out') }}">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="room_type" class="block text-sm font-medium text-gray-700 mb-2">Room Type *</label>
                                <select id="room_type" name="room_type" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors">
                                    <option value="">Select a room</option>
                                    <option value="standard" {{ old('room_type') == 'standard' ? 'selected' : '' }}>Standard Room - $120/night</option>
                                    <option value="deluxe" {{ old('room_type') == 'deluxe' ? 'selected' : '' }}>Deluxe Room - $180/night</option>
                                    <option value="executive" {{ old('room_type') == 'executive' ? 'selected' : '' }}>Executive Suite - $350/night</option>
                                    <option value="family" {{ old('room_type') == 'family' ? 'selected' : '' }}>Family Room - $280/night</option>
                                    <option value="honeymoon" {{ old('room_type') == 'honeymoon' ? 'selected' : '' }}>Honeymoon Suite - $420/night</option>
                                    <option value="presidential" {{ old('room_type') == 'presidential' ? 'selected' : '' }}>Presidential Suite - $650/night</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="guests" class="block text-sm font-medium text-gray-700 mb-2">Number of Guests *</label>
                                <select id="guests" name="guests" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors">
                                    <option value="">Select guests</option>
                                    <option value="1" {{ old('guests') == '1' ? 'selected' : '' }}>1 Guest</option>
                                    <option value="2" {{ old('guests') == '2' ? 'selected' : '' }}>2 Guests</option>
                                    <option value="3" {{ old('guests') == '3' ? 'selected' : '' }}>3 Guests</option>
                                    <option value="4" {{ old('guests') == '4' ? 'selected' : '' }}>4 Guests</option>
                                    <option value="5" {{ old('guests') == '5' ? 'selected' : '' }}>5 Guests</option>
                                    <option value="6" {{ old('guests') == '6' ? 'selected' : '' }}>6 Guests</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="special_requests" class="block text-sm font-medium text-gray-700 mb-2">Special Requests</label>
                            <textarea id="special_requests" name="special_requests" rows="4"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                                      placeholder="Any special requirements or preferences...">{{ old('special_requests') }}</textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="terms" name="terms" required
                                   class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 text-sm text-gray-700">
                                I agree to the <a href="#" class="text-amber-600 hover:text-amber-700">terms and conditions</a> and <a href="#" class="text-amber-600 hover:text-amber-700">privacy policy</a>
                            </label>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-amber-600 text-white hover:bg-amber-700 px-6 py-3 rounded-lg font-semibold transition-colors duration-200 transform hover:scale-105">
                            Make Reservation
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Info -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 font-['Playfair_Display']">Get in Touch</h2>
                        
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
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Address</h3>
                                    <p class="text-gray-600">123 Luxury Avenue, Downtown District<br>New York, NY 10001</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="bg-amber-100 rounded-full p-3">
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                                    <p class="text-gray-600">+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="bg-amber-100 rounded-full p-3">
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                                    <p class="text-gray-600">info@amanubahotel.com<br>reservations@amanubahotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Operating Hours -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 font-['Playfair_Display']">Operating Hours</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Front Desk</span>
                                <span class="font-medium text-gray-900">24/7</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Restaurant</span>
                                <span class="font-medium text-gray-900">6:30 AM - 11:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Swimming Pool</span>
                                <span class="font-medium text-gray-900">6:00 AM - 10:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Spa & Wellness</span>
                                <span class="font-medium text-gray-900">9:00 AM - 9:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Fitness Center</span>
                                <span class="font-medium text-gray-900">24/7</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 font-['Playfair_Display']">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-amber-100 text-amber-600 p-3 rounded-full hover:bg-amber-600 hover:text-white transition-colors duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-amber-100 text-amber-600 p-3 rounded-full hover:bg-amber-600 hover:text-white transition-colors duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-amber-100 text-amber-600 p-3 rounded-full hover:bg-amber-600 hover:text-white transition-colors duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-amber-100 text-amber-600 p-3 rounded-full hover:bg-amber-600 hover:text-white transition-colors duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center font-['Playfair_Display']">Find Us</h2>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6172873817273!2d-73.98731968459395!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2593256a0a7e5%3A0x8b5e4c3e4c3e4c3e!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1234567890"
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="w-full h-96">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
