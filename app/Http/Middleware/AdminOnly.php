<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        // Jika user login dan role-nya admin, izinkan lanjut
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman utama /main
        return redirect()->route('main')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
