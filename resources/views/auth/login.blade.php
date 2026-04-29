@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="flex h-full w-full">
    <!-- Left Side - Image -->
    <div class="hidden lg:block lg:w-[55%] relative h-full">
        <img src="{{ asset('images/hero_bg.png') }}" alt="Amanuba Resort" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
        <div class="absolute bottom-16 left-16 right-16 text-white animate-fade-in-up">
            <span class="inline-block px-3 py-1 bg-amber-600/20 backdrop-blur-md rounded-full text-amber-400 text-xs font-semibold tracking-wider uppercase mb-6 border border-amber-500/30">
                Akses Eksklusif
            </span>
            <h1 class="text-5xl font-bold mb-4 tracking-tight leading-tight">Kemewahan<br>Tanpa Batas.</h1>
            <p class="text-lg text-gray-300 font-light max-w-lg">Masuk ke akun Anda untuk menikmati pengalaman pemesanan premium dan penawaran khusus member.</p>
        </div>
    </div>
    
    <!-- Right Side - Form -->
    <div class="w-full lg:w-[45%] h-full flex flex-col justify-center px-8 sm:px-16 lg:px-20 bg-white overflow-hidden relative">
        <div class="absolute top-0 right-0 p-8">
            <a href="{{ route('home') ?? '/' }}" class="text-sm font-medium text-gray-500 hover:text-gray-900 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </a>
        </div>
        
        <div class="max-w-md w-full mx-auto animate-fade-in-up animation-delay-200">
            <div class="mb-10 text-center lg:text-left">
                <a href="{{ route('home') ?? '/' }}" class="inline-block mb-6">
                    <span class="text-3xl font-bold text-gray-900 tracking-tight">Amanuba<span class="text-amber-600">.</span></span>
                </a>
                <h2 class="text-3xl font-bold text-gray-900 tracking-tight">Selamat Datang</h2>
                <p class="mt-2 text-gray-500">Silakan masukkan kredensial Anda.</p>
            </div>
            
            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Alamat Email</label>
                    <input id="email" name="email" type="email" required class="block w-full rounded-xl border border-gray-200 px-4 py-3 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="nama@email.com">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Kata Sandi</label>
                    <input id="password" name="password" type="password" required class="block w-full rounded-xl border border-gray-200 px-4 py-3 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="••••••••">
                </div>
                
                <div class="flex items-center justify-between pt-1">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-amber-600 focus:ring-amber-500">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-600">Ingat saya</label>
                    </div>
                    <a href="#" class="text-sm font-medium text-amber-600 hover:text-amber-500 transition-colors">Lupa sandi?</a>
                </div>
                
                <button type="submit" class="w-full mt-4 rounded-xl bg-gray-900 px-4 py-3.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus:outline-none transition-all hover:shadow-lg hover:-translate-y-0.5">
                    Masuk ke Akun
                </button>
            </form>
            
            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="bg-white px-4 text-gray-500">Atau lanjutkan dengan</span>
                    </div>
                </div>
                
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <button type="button" class="flex w-full items-center justify-center rounded-xl border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors shadow-sm">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="h-5 w-5 mr-2" alt="Google">
                        Google
                    </button>
                    <button type="button" class="flex w-full items-center justify-center rounded-xl border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors shadow-sm">
                        <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" class="h-5 w-5 mr-2" alt="Facebook">
                        Facebook
                    </button>
                </div>
            </div>
            
            <p class="mt-8 text-center text-sm text-gray-600">
                Belum memiliki akun?
                <a href="{{ route('register') ?? '/register' }}" class="font-semibold text-amber-600 hover:text-amber-500 transition-colors">Daftar sekarang</a>
            </p>
        </div>
    </div>
</div>
@endsection
