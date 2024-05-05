<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use App\Models\User;

class OrderController extends Controller
{
    public function order()
    {
        return view('frontend.order');
    }

    public function pesan(Request $request)
    {
        try {
            $random = random_int(1, 999999999);
            $request->request->add(['status' => 'BELUM DISETUJUI']);
    
            // Simpan data pesanan ke database
            $simpan = new Pesanan;
            $simpan->nama = $request->nama;
            $simpan->hp = $request->hp;
            $simpan->email = $request->email;
            $simpan->provinsi = $request->provinsi;
            $simpan->kota = $request->kota;
            $simpan->kecamatan = $request->kecamatan;
            $simpan->alamat = $request->alamat;
            $simpan->kode = $request->kode;
            $simpan->ukuran = $request->ukuran;
            $simpan->jenis = $request->jenis;
            
            // Check if file is present in the request
            if ($request->hasFile('gambar')) {
                // Get file extension
                $extension = $request->file('gambar')->getClientOriginalExtension();
                // Generate unique name for the image
                $filename = 'pesanan-' . time() . '.' . $extension;
                // Store the image in the specified directory
                $request->file('gambar')->move(public_path('assets/img/gambarpesanan'), $filename);
                // Set the filename to the database field
                $simpan->gambar = $filename;
            }
            
            $simpan->tambahan = $request->tambahan;
            $simpan->nomor = $random;
            $simpan->status = $request->status;
            $simpan->save();
    
            return redirect('/pesanan')->with('success', 'Pesanan berhasil dibuat!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    

    public function showPesanan()
    {
        $getPesanan = Auth::user();
        $pesanan = Pesanan::where('email', $getPesanan->email)->get();

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Tidak ada pesanan yang ditemukan.');
        }

        //dd($getPesanan);
        return view('frontend.pesanan', compact('pesanan'));
    }
}
