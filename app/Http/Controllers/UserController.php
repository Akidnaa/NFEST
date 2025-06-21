<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan semua user
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }

    // Menampilkan form untuk menambahkan user baru
    public function create()
    {
        return view('users.create');
    }

    // Menyimpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6',
            'gender'        => 'required|in:male,female,other',
            'tanggal_lahir' => 'required|date',
        ]);

        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'gender'        => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    // Menampilkan detail user
    public function show($id)
{
    $user = User::findOrFail($id);
    return view('dashboard.users.show', compact('user'));
}

    // Menampilkan form edit user
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Update data user
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'gender'        => 'required|in:male,female,other',
            'tanggal_lahir' => 'required|date',
        ]);

        $user->update([
            'name'          => $request->name,
            'email'         => $request->email,
            'gender'        => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
    }

    // Hapus user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}
