<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\katalog;

class WelcomeController extends Controller
{
    public function index()
    {
        $katalogs = katalog::all();
        return view ('frontend.welcome',compact('katalogs'));
    }
}