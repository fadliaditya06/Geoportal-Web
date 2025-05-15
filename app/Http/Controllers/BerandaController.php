<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Dummy user data
        $user = (object) [
            'nama' => 'Pengguna Dummy',
            'email' => 'dummy@example.com'
        ];

        return view('beranda', compact('user'));
    }
}
