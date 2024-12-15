<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input tanpa memeriksa apakah email atau username sudah digunakan
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',  // Hapus unique validation untuk email
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',  // Hapus unique validation untuk username
            'password' => 'required|string|min:6',
            'role' => 'required|in:user',
        ]);

        $validator->validate();

        // Buat user baru
        User::create([
            'email' => $request->email,
            'full_name' => $request->full_name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Berhasil membuat akun!');
    }
}
