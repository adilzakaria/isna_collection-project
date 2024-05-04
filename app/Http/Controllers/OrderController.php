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
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
        'transaction_details' => array(
            'order_id' => rand(),
            'gross_amount' => 10000,
        ),
        'customer_details' => array(
            'first_name' => 'budi',
            'last_name' => 'pratama',
            'email' => 'budi.pra@example.com',
            'phone' => '08111222333',
        ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view('frontend.pesanan', compact('snapToken', 'pesanan'));
        // return view('frontend.pesanan', compact('pesanan'));
    }
}
