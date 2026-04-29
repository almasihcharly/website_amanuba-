@extends('layouts.auth')

@section('title', 'Daftar Akun')

@section('content')
<div class="flex h-full w-full">
    <!-- Left Side - Image -->
    <div class="hidden lg:block lg:w-[55%] relative h-full">
        <img src="{{ asset('images/hero_bg.png') }}" alt="Amanuba Resort" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
        <div class="absolute bottom-16 left-16 right-16 text-white animate-fade-in-up">
            <span class="inline-block px-3 py-1 bg-amber-600/20 backdrop-blur-md rounded-full text-amber-400 text-xs font-semibold tracking-wider uppercase mb-6 border border-amber-500/30">
                Bergabung Bersama Kami
            </span>
            <h1 class="text-5xl font-bold mb-4 tracking-tight leading-tight">Mulai Perjalanan<br>Anda.</h1>
            <p class="text-lg text-gray-300 font-light max-w-lg">Daftar sekarang untuk mendapatkan penawaran eksklusif, manajemen pemesanan instan, dan poin reward Amanuba.</p>
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
            <div class="mb-8 text-center lg:text-left">
                <a href="{{ route('home') ?? '/' }}" class="inline-block mb-4">
                    <span class="text-3xl font-bold text-gray-900 tracking-tight">Amanuba<span class="text-amber-600">.</span></span>
                </a>
                <h2 class="text-3xl font-bold text-gray-900 tracking-tight">Buat Akun</h2>
                <p class="mt-2 text-gray-500 text-sm">Lengkapi data di bawah ini.</p>
            </div>
            
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input id="name" name="name" type="text" required class="block w-full rounded-xl border border-gray-200 px-4 py-2.5 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="Nama Anda">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                    <input id="email" name="email" type="email" required class="block w-full rounded-xl border border-gray-200 px-4 py-2.5 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="nama@email.com">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                    <input id="phone" name="phone" type="tel" required class="block w-full rounded-xl border border-gray-200 px-4 py-2.5 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="0812xxxx">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                        <input id="password" name="password" type="password" required class="block w-full rounded-xl border border-gray-200 px-4 py-2.5 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="••••••••">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="block w-full rounded-xl border border-gray-200 px-4 py-2.5 text-gray-900 focus:border-amber-500 focus:ring-amber-500 sm:text-sm transition-all bg-gray-50 focus:bg-white" placeholder="••••••••">
                    </div>
                </div>
                
                <div class="flex items-start pt-2">
                    <div class="flex h-5 items-center">
                        <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 rounded border-gray-300 text-amber-600 focus:ring-amber-500">
                    </div>
                    <div class="ml-2 text-sm">
                        <label for="terms" class="text-gray-600">Saya setuju dengan <a href="#" class="font-medium text-amber-600 hover:text-amber-500">Syarat & Ketentuan</a></label>
                    </div>
                </div>
                
                <button type="submit" class="w-full mt-4 rounded-xl bg-gray-900 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus:outline-none transition-all hover:shadow-lg hover:-translate-y-0.5">
                    Buat Akun
                </button>
            </form>
            
            <p class="mt-6 text-center text-sm text-gray-600">
                Sudah memiliki akun?
                <a href="{{ route('login') ?? '/login' }}" class="font-semibold text-amber-600 hover:text-amber-500 transition-colors">Masuk di sini</a>
            </p>
        </div>
    </div>
</div>
@endsection
