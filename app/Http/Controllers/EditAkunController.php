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

    public function editAkun(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'hp' => 'required',
        ], [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'hp.required' => 'No Hp Tidak Boleh Kosong',
        ]);

        $updates = [];

        if ($request->has('nama')) {
            $updates['nama'] = $request->input('nama');
        }

        if ($request->has('hp')) {
            $updates['hp'] = $request->input('hp');
        }

        if (!empty($updates)) {
            DB::table('users')
                ->where('id', auth()->id())
                ->update($updates);

            return redirect('/akun')->with('sukses', 'Profil berhasil diperbarui!');
        }

        // Jika tidak ada input yang diterima
        return redirect('/akun')->with('error', 'Tidak ada data yang diperbarui.');
    }
}
