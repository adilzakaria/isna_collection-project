<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\katalog;
use App\Models\ulasan;
use App\Models\Pesanan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $this->authorize('admin');
        return view('admin.dash');
    }

    public function admin()
    {
        $katalogs = katalog::all();
        $ulasans = ulasan::all();
        $pesanans = Pesanan::all();

        return view('admin.dash', compact('katalogs', 'ulasans', 'pesanans'));
    }
    public function adminulasan()
    {
        $ulasans = ulasan::all();
        return view('admin.dashulasan', compact('ulasans'));
    }    
    
    public function adminkatalog()
    {
        $katalogs = katalog::all();

        return view('admin.dashkatalog',compact('katalogs'));
    }    

    public function adminpesanan()
    {
        $pesanans = Pesanan::all();

        return view('admin.dashpesanan',compact('pesanans'));
    }  

    public function editpesanan($pesanan)
    {
        $pesanan = Pesanan::where('id', $pesanan)->first();
        return view('admin.formedit', compact('pesanan'));
    }
    public function updatepesanan(Request $request, $pesanan)
    {
        $request->validate([
        'nama' => 'required',
        'hp' => 'required',
        'email' => 'required',
        'provinsi' => 'required',
        'kota' => 'required',
        'kecamatan' => 'required',
        'alamat' => 'required',
        'kode' => 'required',
        'ukuran' => 'required',
        'jenis' => 'required',
        'gambar' => 'required',
        'tambahan' => 'required',
        'harga' => 'required',
        'estimasi' => 'required',
        'status' => 'required',
        ]);

        $input = $request->all();
        Pesanan::findOrFail($pesanan)->update($input);
        return redirect('/dash')->with('success', "Data berhasil di ubah");
    }
    public function buatkatalog()
    {
        return view('admin.form');
    }

    public function simpankatalog(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nama_produk' => 'required',
            'kategori' => 'required',
        ],  [
            
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->getClientOriginalExtension();
            $nama_image = 'katalog-' . time() . '.' . $image;
            $path = $request->file('gambar')->move(public_path('assets/img/portofolio'), $nama_image);

            $input['gambar'] = $nama_image;
        }
        katalog::create($input);
        return redirect('/dash')->with('success', "Data berhasil di buat");
    }

    public function editkatalog($katalog)
    {
        $katalog = katalog::where('id', $katalog)->first();
        return view('admin.formedit', compact('katalog'));
    }

    // mengupdate artikel berdasarkan id pada tabel article
    public function updatekatalog(Request $request, $katalog)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->getClientOriginalExtension();
            $nama_image = 'katalog-' . time() . '.' . $image;
            $path = $request->file('katalog')->move(public_path('asset/img/artikel'), $nama_image);

            $input['gambar'] = $nama_image;
        }

        katalog::findOrFail($katalog)->update($input);
        return redirect('/dash')->with('success', "Data berhasil di ubah");
    }

    // menghapus artikel
    public function hapuskatalog($katalog)
    {
        $katalog = katalog::where('id', $katalog)->first();
        return view('admin.formdelete', compact('katalog'));
    }
    public function destroykatalog(katalog $katalog)
    {
        $katalog->delete();
        return redirect('/dash')->with('success', "Data berhasil di hapus");
    }

    public function hapusulasan($ulasan)
    {
        $ulasan = ulasan::where('id', $ulasan)->first();
        return view('admin.ulasandelete', compact('ulasan'));
    }
    public function destroyulasan(ulasan $ulasan)
    {
        $ulasan->delete();
        return redirect('/dash')->with('success', "Data berhasil di hapus");
    }
    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
