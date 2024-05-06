@extends('layouts.adminlayout')
@section('content')

        <div class="main-panel">
          <div class="content-wrapper">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-dark">Hapus Ulasan</h4>
                    <form class="forms-sample" action="{{ route('destroy_ulasan', ['ulasan' => $ulasan->id]) }}" method="POST" enctype="multipart/form-data">
                      @method('DELETE')
                      @csrf

                      <div class="form-group mb-3">
                        <label for="nama_pelanggan" class="text-dark mb-1">Nama pembeli</label>
                        <input type="text"
                        class="form-control bg-white text-black"
                        id="nama_pelanggan" name="nama_pelanggan"
                        disabled placeholder="{{ old('nama_pelanggan') ?? $ulasan->nama }}">
                      </div>

                      <div class="form-group mb-3">
                        <label for="kategori" class="text-dark mb-1">Email Pembeli</label>
                        <input type="text"
                        class="form-control bg-white text-black"
                        id="kategori" name="kategori"
                        disabled placeholder="{{ old('kategori') ?? $ulasan->email }}">
                      </div>

                      <div class="form-group mb-3">
                        <label for="rating" class="text-dark mb-1">Jenis Baju</label>
                        <input type="text"
                        class="form-control bg-white text-black"
                        id="rating" name="rating"
                        disabled placeholder="{{ old('rating') ?? $ulasan->jenis }}">
                      </div>

                      <div class="form-group mb-3">
                        <label for="ulasan" class="text-dark mb-1">Rating</label>
                        <input type="text"
                        class="form-control bg-white text-black"
                        id="ulasan" name="ulasan"
                        disabled placeholder="{{ old('ulasan') ?? $ulasan->rating }}">
                      </div>

                      <div class="form-group mb-3">
                        <label for="deskripsi" class="text-dark mb-1">Ulasan</label>
                        <input type="text"
                        class="form-control bg-white text-black"
                        id="deskripsi" name="deskripsi"
                        disabled placeholder="{{ old('deskripsi') ?? $ulasan->review }}">
                      </div>

                      <button type="submit" class="btn btn-danger me-2">Hapus</button>
                      <a href="{{ route('admin') }}" class="btn btn-success">Kembali</a>
                    </form>
                  </div>

                </div>
              </div>
@endsection
