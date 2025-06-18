@extends('layouts.app')

@section('title', 'NFEST - Login')

@section('content')
    {{-- Ini adalah DIV CONTAINER UTAMA untuk seluruh halaman login --}}
    {{-- Pastikan ini memiliki min-h-screen, flex, dan flex-col --}}
    <div class="min-h-screen flex flex-col" style="background-image: url('{{ asset('assets/img/Gambar WhatsApp 2025-06-03 pukul 20.59.03_86b64b73.jpg') }}'); background-size: cover; background-position: center;">
        {{-- Catatan: Sesuaikan PATH GAMBAR Anda di asset() helper --}}

        {{-- Navbar khusus Login (ini adalah item flex pertama) --}}
        @include('includes.navbar-login')

        {{-- Konten Utama Login (ini adalah item flex kedua, dan flex-grow agar mengambil ruang sisa) --}}
        <div class="flex-grow flex items-center justify-center p-4">
            <div class="bg-white bg-opacity-95 p-10 rounded-lg shadow-xl w-full max-w-md text-center">
                <h2 class="text-3xl font-semibold mb-2 text-gray-800">Selamat datang, <br>di Website N-Fest</h2>
                <p class="text-base text-gray-600 mb-8">Masukkan Email & Password Kamu</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="relative mb-5">
                        <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-500"></i>
                        <input type="email" name="email" id="email" placeholder="Masukkan Email" required autofocus
                               class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                        @error('email')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative mb-5">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-500"></i>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" required
                               class="w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                        <i class="fas fa-eye absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" id="togglePassword"></i>
                        @error('password')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out mt-4">
                        Login
                    </button>
                </form>

                <p class="text-sm text-gray-600 mt-6">Belum Punya Akun?
                    <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">Registrasi di sini</a>
                </p>
            </div>
        </div>

        {{-- Footer untuk halaman login (ini adalah item flex terakhir) --}}
        <footer class="w-full py-4 bg-login-footer-bg-custom text-footer-text-color text-center text-sm">
            Copyright © 2025 <a href="https://www.instagram.com/paprikahive_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="hover:underline text-footer-link-color">paprikahive_</a>
        </footer>
    </div> {{-- PENUTUP DIV CONTAINER UTAMA --}}

    {{-- Script untuk toggle password visibility --}}
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        if (togglePassword && password) {
            togglePassword.addEventListener('click', function (e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
            });
        }
    </script>
@endsection