<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class DetailController extends Controller
{
    public function show($nomor)
    {

        $pesan = Pesanan::where('nomor', $nomor)->firstOrFail();
        return view('frontend.detail', compact('pesan'));
    }
    public function show1($nomor)
    {

        $pesan = Pesanan::where('nomor', $nomor)->firstOrFail();
        return view('frontend.detailpesan', compact('pesan'));
    }
}
