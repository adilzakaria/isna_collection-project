<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function order()
    {
        return view('frontend.order');
    }

    public function pesan(Request $request)
    {
        try {
            $user = Auth::user(); // Ambil data user yang sedang login

            // Validasi data pesanan
            $validatedData = $request->validate([
                'provinsi' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'alamat' => 'required',
                'kode' => 'required',
                'ukuran' => 'required',
                'jenis' => 'required',
            ], [
                'provinsi.required' => 'Provinsi Harus Diisi',
                'kota.required' => 'Kota Harus Diisi',
                'kecamatan.required' => 'Kecamatan Harus Diisi',
                'alamat.required' => 'Alamat Lengkap Harus Diisi',
                'kode.required' => 'Kode Pos Harus Diisi',
                'ukuran.required' => 'Ukuran Harus Diisi',
                'jenis.required' => 'Jenis Harus Diisi',
            ]);

            // Buat pesanan baru
            $pesan = new Pesanan($validatedData);

            // Gabungkan tabel user dengan pesanan menggunakan join
            $query = DB::table('users')
                ->join('pesanans', 'users.nama', '=', 'pesanans.user_nama')
                ->where('users.nama', $user->nama)
                ->select('users.*', 'pesanans.*')
                ->first();

            // Simpan pesanan baru
            $pesan->user_id = $query->id; // Ambil ID user dari hasil join
            $pesan->save();

            return redirect('/pesanan')->with('success', 'Pesanan berhasil dibuat!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
