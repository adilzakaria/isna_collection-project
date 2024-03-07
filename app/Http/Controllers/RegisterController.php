<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('frontend.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|min:3|unique:users',
            'hp' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.min' => 'Nama Harus Lebih Dari 3 Karakter',
            'hp.required' => 'No Hp Harus Diisi',
            'hp.digits_between' => 'No Hp harus memiliki panjang antara 10 dan 15 digit',
            'email.required' => 'Email Harus Diisi',
            'password.required' => 'Password Harus Diisi',
            'password.min' => 'Password Harus Lebih Dari 5 Karakter'
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
}
