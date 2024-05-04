<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewRating;

class HomeController extends Controller
{
    public function home()
    {
        $reviews = ReviewRating::all();
        return view ('frontend.home', compact('reviews'));
    }
}
