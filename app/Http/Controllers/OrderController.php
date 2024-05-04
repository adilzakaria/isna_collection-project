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
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $filename);
                $simpan->gambar = $filename;
            }
            $simpan->tambahan = $request->tambahan;
            $simpan->nomor = $random;
            $simpan->harga = $request->harga;
            $simpan->status = $request->status;
            $simpan->save();
            // dd($simpan);

            // Konfigurasi Midtrans
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;

            // Parameter transaksi
            $params = [
                'transaction_details' => [
                    'order_id' => $simpan->nomor,
                    'gross_amount' => $request->harga,
                ],
                'customer_details' => [
                    'name' => $request->nama,
                    'email' => $request->email,
                    'phone' => $request->hp,
                ],
            ];

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            // dd($snapToken);

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
