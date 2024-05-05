<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\katalog;

class HomeController extends Controller
{
    public function home()
    {
        $katalogs = katalog::all();
        return view ('frontend.home',compact('katalogs'));
    }
}
