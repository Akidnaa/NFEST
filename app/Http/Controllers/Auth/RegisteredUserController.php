<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Tampilkan form registrasi.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Tangani data registrasi.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'gender' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
        ]);

        // Simpan ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        // Trigger event pendaftaran
        event(new Registered($user));

        // setelah register ke login
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');


        // Arahkan ke halaman utama setelah login
        return redirect()->route('main');

    }
}
