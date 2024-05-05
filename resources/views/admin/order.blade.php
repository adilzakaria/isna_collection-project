@extends('layouts.adminlayout')
@section('content')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
              </div>
            </div>

          <!-- Start Pesan -->

          <div class="row justify-content-center">

            <!-- username -->
              <div class="col-md-10">
                <div class="card">
                <h3 class="card-title text-dark m-4 mx-5">Pesanan {{$pesanan->nama}}, {{$pesanan->jenis}} ({{$pesanan->ukuran}})</h3>
                </div>
                <br><div class="card corona-gradient-card"></div><br>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Card Detail Informasi -->
                            <div class="card text-dark bg-white">
                                <div class="card card-border bg-white m-3">
                                    <h4 class="text-center mb-3">Detail Informasi</h4>
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 200px;">{{$pesanan->nama}}</output>
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 200px;">{{$pesanan->hp}}</output>
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 200px;">{{$pesanan->email}}</output>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 200px;">{{$pesanan->provinsi}}</output>
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 200px;">{{$pesanan->kota}}</output>
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 200px;">{{$pesanan->kecamatan}}</output>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 500px;">{{$pesanan->alamat}}</output>
                                        <output class="form-control bg-white text-dark mb-3 me-3 text-center"
                                            style="width: 115px ;">{{$pesanan->kode}}</output>
                                    </div>
                                </div>
                                <h4 class="mx-3 text-center">Detail Pesanan</h4>
                                <div class="card bg-white card-border mx-3">
                                  <div class="d-flex flex-wrap justify-content-center">
                                      <!-- Sisi Kiri -->
                                      <div class="card card-border bg-white me-3" style="flex: 1;">
                                          <div class="d-flex flex-wrap">
                                              <output class="form-control bg-white text-dark mb-3 text-center" style="width: 100%;">{{$pesanan->jenis}}</output>
                                              <output class="form-control bg-white text-dark mb-3 text-center" style="width: 100%;">{{$pesanan->ukuran}}</output>
                                              <textarea class="form-control bg-white text-dark text-center mb-3" rows="7" style="width: 100%;">{{$pesanan->tambahan}}</textarea>
                                          </div>
                                      </div>
                                      <!-- Sisi Kanan -->
                                      <div class="card bg-white card-border mb-3" style="flex: 1;">
                                          <div style="height: 100%;">
                                              <img src="{{ asset('assets/img/gambarpesanan/' . $pesanan->gambar) }}" alt="Tidak ada foto" style="width: 100%; height: 100%; object-fit: cover; ">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Card Keputusan Pesanan -->
                            <div class="card text-dark bg-white">
                                <div class="card card-border bg-white m-3">
                                    <h4>Keputusan Pesanan</h4>
                                    <form class="forms-sample" action="{{ route('update_status_pesanan_admin', ['pesanan' => $pesanan->id]) }}" method="POST" enctype="multipart/form-data">
                                      @method('PATCH')
                                      @csrf
                                      <select class="form-select bg-white text-black @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') ?? $pesanan->status}}">
                                        <option value="DISETUJUI">Disetujui</option>
                                        <option value="TIDAK DISETUJUI">Tidak Disetujui</option>
                                        <option value="TELAH MEMBAYAR">Telah Membayar</option>
                                      </select>
                                      <input type="text" class="form-control bg-white text-black my-3" id="estimasi" name="estimasi" value="{{ old('estimasi') ?? $pesanan->estimasi }}" placeholder="Estimasi Waktu">
                                      <input type="text" class="form-control bg-white text-black my-3" id="harga" name="harga" value="{{ old('harga') ?? $pesanan->harga }}" placeholder="Harga">
                                    <button href="/dash/pesanan" type="submit" class="btn btn-success text-bold mb-3 " style="width: 49%; height: 50px;">Kirim</button>
                                    <a href="/dash/pesanan" class="btn btn-danger text-middle mb-3" style="width: 49%; height: 50px; line-height: 40px; text-align: center;">Kembali</a>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

        </div>


        @endsection
