<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAkunController extends Controller
{
    public function edit_akun()
    {
        return view('frontend.edit_akun');
    }
}
