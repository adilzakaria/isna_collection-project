<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ForgotController extends Controller
{
    public function forgot()
    {
        return view('frontend.forgot');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password1' => 'required|min:5|max:255',
            'password2' => 'required|same:password1',
        ], [
            'email.required' => 'Email Harus Diisi',
            'password1.required' => 'Password Harus Diisi',
            'password2.required' => 'Password Harus Diisi',
            'password2.same' => 'Password Tidak Sama',
        ]);

        $email = $request->email;
        $password = Hash::make($request->password1);

        $user = DB::table('users')->where('email', $email)->first();

        if ($user) {
            DB::table('users')->where('email', $email)->update(['password' => $password]);

            // Jika berhasil mengupdate password
            return redirect('/login')->with('success', 'Password Berhasil Diubah.');
        }

        // Jika email tidak ditemukan dalam database
        throw ValidationException::withMessages([
            'email' => ['Email Tidak Ditemukan.'],
        ]);
    }
}
