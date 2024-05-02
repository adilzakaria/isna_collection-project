<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function reviewStore()
    {
        $review = new ReviewRating();
        $review->kode = $request->kode;
        $review->email = $request->email;
        $review->nama = $request->nama;
        $review->jenis = $request->jenis;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();
        return redirect()->back->with('success', 'Penilaian berhasil ditambahkan');
    }
}
