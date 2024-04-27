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
@endsection