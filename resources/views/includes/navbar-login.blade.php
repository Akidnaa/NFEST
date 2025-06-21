{{-- resources/views/includes/navbar-login.blade.php --}}
<nav class="w-full py-4 px-6 flex justify-between items-center z-10 relative">
    <div class="text-xl font-bold text-gray-800">
        <a href="{{ url('/') }}">NFEST</a>
    </div>
    <ul class="flex space-x-4">
        {{-- Tombol Sign in/Register selalu tampil di halaman login --}}
        <li><a href="{{ route('login') }}" class="px-4 py-2 rounded-lg bg-white text-gray-800 border border-gray-300 font-semibold hover:bg-gray-100 transition">Sign in</a></li>
        <li><a href="{{ route('register') }}" class="px-4 py-2 rounded-lg bg-gray-800 text-white font-semibold hover:bg-gray-700 transition">Register</a></li>
    </ul>
</nav>