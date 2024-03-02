<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDash()
    {
        return view ('admin.dash');
    }
    public function showForm()
    {
        return view ('admin.form');
    }
}