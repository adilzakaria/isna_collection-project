@extends('layouts.adminlayout')
@section('content')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-dark">Ulasan Pembeli</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-dark">ID</th>
                            <th class="text-dark">Nama Pembeli</th>
                            <th class="text-dark">Jenis Baju</th>
                            <th class="text-dark">Rating</th>
                            <th class="text-dark">Ulasan</th>
                            <th class="text-dark">Deskripsi</th>
                            <th class="text-dark">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($ulasans as $ulasan)
                            <tr>
                              <td class="align-middle">
                                <p class="text-dark mb-0">{{$ulasan->id}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->nama_pelanggan}}</p>
                              </td>
                              <td class="align-middle text-sm">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->kategori}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->rating}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->ulasan}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$ulasan->deskripsi}}</p>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-danger" href="{{ route('hapus_ulasan',['ulasan' => $ulasan->id]) }}"><i title="Delete">Hapus</i></a>
                              </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- Start Katalog -->
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-dark">Katalog Isna Collection</h4>
                        <a class="btn btn-success " href="{{ route('buat_katalog')}}"><h5>+</h5>Buat Katalog Baru</a>
                      <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-dark">ID</th>
                            <th class="text-dark">Gambar</th>
                            <th class="text-dark">Nama Produk</th>
                            <th class="text-dark">Kategori</th>
                            <th class="text-dark text-center" colspan="2">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($katalogs as $katalog)
                            <tr>
                              <td class="align-middle">
                                <p class="text-dark mb-0">{{$katalog->id}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$katalog->gambar}}</p>
                              </td>
                              <td class="align-middle text-sm">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$katalog->nama_produk}}</p>
                              </td>
                              <td class="align-middle">
                                <p class="text-xs text-dark font-weight-normal mb-0">{{$katalog->kategori}}</p>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-warning" href="{{ route('edit_katalog',['katalog' => $katalog->id]) }}"><i title="Edit">Edit</i></a>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-danger" href="{{ route('hapus_katalog',['katalog' => $katalog->id]) }}"><i title="Delete">Hapus</i></a>
                              </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- End Katalog -->
          <!-- Start Pesan -->
          <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-dark">Pesan</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                          <div class="card text-dark" href="/order-admin">
                            <div class="m-3">
                              <h4>Nama Pelanggan</h4>
                              lorem ipsum assalamualaikum wr wb sholawawt serta salam terhadap junjungan kami nabi besar saw (BELUM TERBACA)
                              <a href="/order-admin" class="btn-get-started scrollto mx-5">Lihat</a>
                            </div>
                          </div>
                          <div class="card text-dark mt-3">
                            <div class="m-3">
                              <h4>Nama Pelanggan</h4>
                              lorem ipsum assalamualaikum wr wb sholawawt serta salam terhadap junjungan kami nabi besar saw (BELUM TERBACA)
                              <a href="/order-admin" class="btn-get-started scrollto mx-5">Lihat</a>
                            </div>
                          </div>
                          <div class="card text-dark mt-3 bg-white">
                            <div class="m-3">
                              <h4>Nama Pelanggan</h4>
                              lorem ipsum assalamualaikum wr wb sholawawt serta salam terhadap junjungan kami nabi besar saw (SUDAH TERBACA)
                              <a href="/order-admin" class="btn-get-started scrollto mx-5">Lihat</a>
                            </div>
                          </div>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
