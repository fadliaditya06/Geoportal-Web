<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login dummy (tanpa autentikasi)
    public function login(Request $request)
    {
        // Hanya validasi form supaya gak kosong
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Langsung redirect ke beranda tanpa cek db
        return redirect('/beranda');
    }

    // Tampilkan form register
    public function showRegister()
    {
        return view('register');
    }

    // Proses register dummy (tanpa simpan data)
    public function register(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'role' => 'required|in:Pengguna,Admin',
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        // Langsung redirect ke beranda tanpa simpan user
        return redirect('/beranda');
    }

    // Logout dummy
    public function logout(Request $request)
    {
        // Karena gak ada session, cukup redirect ke login
        return redirect('/login');
    }
}
