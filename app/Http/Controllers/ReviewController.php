<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewRating;
use App\Models\User;
use App\Models\Pesanan;

class ReviewController extends Controller
{
    public function ulasan()
    {
        $pesanan = Pesanan::all();
        return view('frontend.review', compact('pesanan'));
    }

    public function review(Request $request)
    {
        $rating = $request->input('rating');
        $product_id = $request->input('product_id');
        $review = $request->input('review');

        $product_check = Pesanan::where('nomor', $product_id)->whereIn('status', [null, 'DISETUJUI', 'BELUM MEMBAYAR', 'TELAH MEMBAYAR'])->first();
        if($product_check)
        {
            $verified_purchase = Pesanan::where('pesanans.email', Auth::user()->email)
                                        ->where('pesanans.status', 'TELAH MEMBAYAR')
                                        ->where('pesanans.nomor', $product_id)->first();

            if($verified_purchase)
            {
                $existing_rating = ReviewRating::where('email', Auth::user()->email)->where('nomor', $product_id)->first();
                if($existing_rating)
                {
                    return redirect('/tentang-kami')->with('error', 'Anda sudah memberikan penilaian sebelumnya, silahkan edit penilaian anda di halaman penilaian');
                }
                else
                {
                    ReviewRating::create([
                        'nomor' => $product_id,
                        'email' => Auth::user()->email,
                        'nama' => Auth::user()->nama,
                        'jenis' => $product_check->jenis,
                        'rating' => $rating,
                        'review' => $review
                    ]);
                }
                return redirect('/tentang-kami')->with('success', 'Terima kasih atas penilaian anda');
            }
            else
            {
                return redirect('/tentang-kami')->with('error', 'Anda tidak bisa memberikan penilaian karena belum membayar');
            }
        }
        else
        {
            return redirect('/tentang-kami')->with('error', 'Maaf, Anda tidak bisa memberikan penilaian');
        }
    }

    public function allReviewRating() {
        $ulasans = ReviewRating::all();
        return view('frontend.ulasan', compact('ulasans'));
    }

    public function ulasanIsna() {
        $ulasans = ReviewRating::all();
        return view('frontend.welcomeUlasan', compact('ulasans'));
    }

    public function edit($nomor_ulasan) {
        $pesanan = Pesanan::where('nomor', $nomor_ulasan)->whereIn('status', [null, 'DISETUJUI', 'BELUM MEMBAYAR', 'TELAH MEMBAYAR'])->first();
        if($pesanan)
        {
            $pesanan_id = $pesanan->nomor;
            $review = ReviewRating::where('email', Auth::user()->email)->where('nomor', $pesanan_id);
            if($review)
            {
                $review = ReviewRating::all();
                return view('frontend.editReview', compact('review'));
            }
            else
            {
                return redirect()->back()->with('error', 'Maaf, Terdapat kendala teknis');
            }
        }
    }

    public function update(Request $request) {
        $user_rating = $request->input('rating');
        $user_review = $request->input('review');
        if($user_rating && $user_review != '')
        {
            $review_id = $request->input('review_id');
            $review = ReviewRating::where('nomor', $review_id)->where('email', Auth::user()->email)->first();
            if($review)
            {
                $review->rating = $request->input('rating');
                $review->review = $request->input('review');
                $review->update();
            }
            return redirect('/tentang-kami')->with('success', 'Penilaian berhasil diperbarui!');
        }
        else
        {
            return redirect()->back()->with('error', 'Anda tidak bisa mengirim penilaian yang kosong');
        }
    }
}
