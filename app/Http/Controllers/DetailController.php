<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class DetailController extends Controller
{
    public function show($nomor)
    {

        $pesan = Pesanan::where('nomor', $nomor)->firstOrFail();
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $nomor,
                'gross_amount' => $pesan->harga,
            ],
            'customer_details' => [
                'name' => $pesan->nama,
                'email' => $pesan->email,
                'phone' => $pesan->hp,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view('frontend.detail', compact('snapToken', 'pesan'));
    }
}
