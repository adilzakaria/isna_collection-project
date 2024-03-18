@extends('layouts.adminlayout')
@section('content')

        <div class="main-panel">
          <div class="content-wrapper">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-dark">Edit Katalog</h4>
                    <form class="forms-sample" action="{{ route('update_katalog', ['katalog' => $katalog->id]) }}" method="POST" enctype="multipart/form-data">
                      @method('PATCH')
                      @csrf
                      <div class="form-group mb-3">  
                        <label for="nama_produk" class="text-dark mb-1">nama_produk</label>  
                        <input type="text" class="form-control bg-white text-black" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') ?? $katalog->nama_produk }}" placeholder="Nama Produk">
                      </div>
                      
                      <div class="form-group mb-3">  <label class="text-dark mb-1">Gambar</label>  
                        <div class="input-group">
                          <input type="file" class="file-upload-default bg-white text-black @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') ?? $katalog->gambar }}">
                          <input type="text" class="form-control file-upload-info bg-white text-black" disabled placeholder="{{ old('gambar') ?? $katalog->gambar }}">
                          <span class="input-group-append">
                            <button class="btn btn-primary file-upload-browse ms-3 mt-1" type="button">Unggah</button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group mb-3">  
                        <label for="kategori" class="text-dark mb-1">Kategori Baju</label>  
                        <select class="form-control bg-white text-black @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{ old('kategori') ?? $katalog->kategori}}">
                          <option value="atasan">Atasan</option>
                          <option value="dress">Dress</option>
                          <option value="kebaya">Kebaya</option>
                          <option value="lainnya">Lainnya</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-success me-2">Update</button>
                      <a href="/dash" class="btn btn-danger">Kembali</a>
                    </form>
                  </div>
                  
                </div>
              </div>
@endsection