<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditAkunController extends Controller
{
    public function edit_akun()
    {
        return view('frontend.edit_akun');
    }

    public function editNama(Request $request)
    {
        DB::table('users')
            ->where('id', auth()->id()) // Ubah data untuk pengguna yang sedang login
            ->update([
                'nama' => $request->input('nama'),
            ]);

        // Redirect atau tampilkan pesan sukses
        return redirect('/akun')->with('sukses', 'Profil berhasil diperbarui!');
    }

    public function editTelepon(Request $request)
    {
        DB::table('users')
        ->where('id', auth()->id()) // Ubah data untuk pengguna yang sedang login
            ->update([
                'hp' => $request->input('hp'),
            ]);

        // Redirect atau tampilkan pesan sukses
        return redirect('/akun')->with('sukses', 'Profil berhasil diperbarui!');
    }
}
