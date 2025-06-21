@extends('layouts.app')

@section('title', 'NFEST - Registrasi')

@section('content')
<div class="min-h-screen flex flex-col" style="background-image: url('{{ asset('assets/img/Gambar WhatsApp 2025-06-03 pukul 20.59.03_86b64b73.jpg') }}'); background-size: cover; background-position: center;">
    @include('includes.navbar-login')

    <div class="flex-grow flex items-center justify-center py-8 px-4">
        <div class="bg-white bg-opacity-95 p-8 sm:p-10 md:p-12 rounded-2xl shadow-xl w-full max-w-2xl">

            <form method="POST" action="{{ route('register') }}" class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1 required-label">Nama Lengkap</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap" required autofocus
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                    @error('name')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1 required-label">Tanggal Lahir</label>
                    <div class="relative">
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 appearance-none custom-date-input">
                    </div>
                    @error('tanggal_lahir')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2 required-label">Jenis Kelamin</label>
                    <div class="flex space-x-6">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="L" class="form-radio text-blue-600 focus:ring-blue-500" required>
                            <span class="ml-2 text-gray-700">Laki-Laki</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="P" class="form-radio text-blue-600 focus:ring-blue-500" required>
                            <span class="ml-2 text-gray-700">Perempuan</span>
                        </label>
                    </div>
                    @error('gender')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1 required-label">Email</label>
                    <input type="email" name="email" id="email_register" placeholder="Masukkan email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password_register" class="block text-sm font-medium text-gray-700 mb-1 required-label">Password</label>
                    <input type="password" name="password" id="password_register" placeholder="Masukkan password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                    @error('password')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1 required-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Masukkan konfirmasi password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                    @error('password_confirmation')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="md:col-span-2 flex justify-center mt-6">
                    <button type="submit"
                            class="w-auto px-12 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">
                        Daftar
                    </button>
                </div>
            </form>

            <p class="text-sm text-gray-600 mt-8 text-center">Sudah Punya Akun?
                <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Login di sini</a>
            </p>
        </div>
    </div>

    <footer class="w-full py-4 bg-login-footer-bg-custom text-footer-text-color text-center text-sm">
        Copyright © 2025 
        <a href="https://www.instagram.com/paprikahive_" target="_blank" class="hover:underline text-footer-link-color">
            paprikahive_
        </a>
    </footer>
</div>
@endsection

@push('styles')
<style>
    .required-label::after {
        content: ' *';
        color: red;
        margin-left: 2px;
    }

    .custom-date-input {
        padding-right: 40px !important;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }
    input[type="date"] {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
    }
</style>
@endpush
