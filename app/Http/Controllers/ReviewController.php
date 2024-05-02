<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function reviewStore()
    {
        $review = new ReviewRating();
        $review->order_id = $request->order_id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->$email = $request->email;
        $review->save();
        return redirect()->back->with(swal("Terima kasih!", "Penilaian berhasil ditambahkan!", "success"));
    }
}
