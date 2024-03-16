<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\katalog;





class katalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function admin()
    // {
    //     $katalogs = katalog::all();
    //     $ulasans = ulasan::all();


    //     return view('admin.dash', compact('katalogs', 'ulasans'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.akun');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
