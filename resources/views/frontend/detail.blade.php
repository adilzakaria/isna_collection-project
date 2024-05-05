<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>Pesan Produk</title>


    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/bootstrap.min.css"> -->


    <link rel="stylesheet" href="../../css/common-1.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/order.css">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/akun.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    {{-- @dd(Auth::user()) --}}
    @include('frontend.navcontent')

    <nav id="navbar" class="navbar"
        style="background-color: White; box-shadow: 0 15px 19px rgba(0, 0, 0, 0.2); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1
            style="text-align: left; font-weight: bold; margin: 0; width: 58%; font-family: 'Poppins', sans-serif; color: black; font-size: 25px">
            Hai, {{ auth()->user()->nama }}</h1>
    </nav>
    <div class="container" style="margin-top: -50px">
        <div class="row justify-content-center" style="margin-top: 20%">
            <div class="col-md-6">
                <form action="{{ route('detail', ['nomor' => $pesan->nomor]) }}" method="POST"
                    enctype="multipart/form-data" class="card border-card">
                    @csrf
                    @auth
                        <h2 class="m-3">Informasi Pemesan</h2>
                        <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                            <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                                id="nama" name="nama" readonly value="{{ auth()->user()->nama }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="hp" name="hp" readonly
                                value="{{ auth()->user()->hp }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="email" name="email" readonly
                                value="{{ auth()->user()->email }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                    @endauth
                    <div>
                        <h2 class="m-3">Alamat Pengiriman</h2>
                    </div>
                    <div>
                        <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                            <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                                id="provinsi" name="provinsi" placeholder="Provinsi" readonly
                                value="{{ $pesan->provinsi }}">
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="kota" name="kota" placeholder="Kota"
                                readonly value="{{ $pesan->kota }}">
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="kecamatan" name="kecamatan" placeholder="Kecamatan"
                                readonly value="{{ $pesan->kecamatan }}">
                        </div>
                        <div style="display: inline-flex; margin-left:1rem; margin-top:1rem;  width: 95%;">
                            <input style="width: 75%; font-size: 15px;" type="text" class="form-control input_form"
                                id="alamat" name="alamat" placeholder="Alamat Lengkap" readonly
                                value="{{ $pesan->alamat }}">
                            <input style="width: 25%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="kode" name="kode" placeholder="Kode Pos"
                                readonly value="{{ $pesan->kode }}">
                        </div>
                    </div>

                    <div class="col" style="margin-top:2rem;">
                        <h2 class="m-3">Detail Pesanan</h2>

                    </div>
                    {{-- Ukuran --}}
                    <div style="margin-left:1rem; font-size: 14px;">
                        <label for="ukuran" class="form-label">Ukuran</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                            id="ukuran" name="ukuran" placeholder="Ukuran" readonly
                            value="{{ $pesan->ukuran }}">
                    </div>
                    {{-- Jenis --}}
                    <div style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="jenis" class="form-label">Jenis Baju</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                            id="jenis" name="jenis" placeholder="Jenis" readonly value="{{ $pesan->jenis }}">
                    </div>
                    {{-- Tambahan --}}
                    <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="tambahan" class="form-label">Tambahan</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                            id="tambahan" name="tambahan" readonly value="{{ $pesan->tambahan }}">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card border-card">
                    {{-- Gambar --}}
                    <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="gambar" class="form-label">Gambar</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <img src="{{ asset('storage/images/' . $pesan->gambar) }}" id="gambar-zoom"
                            class="img-preview img-fluid mb-3 col-sm-4"
                            style="margin-right: 10px; border: none; cursor: pointer;">
                    </div>
                    {{-- Harga --}}
                    <div class="form-group" style="margin-left: 1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="Harga" class="form-label">Harga</label>
                    </div>
                    @if ($pesan->status == 'DISETUJUI' || $pesan->status == 'TELAH MEMBAYAR')
                        <div class="form-group" style="margin-left: 1rem; font-size: 15px;">
                            <button class="btn disabled"
                                style="font-size: 15px; font-weight: bold; border: 2px solid #e966a0; letter-spacing: 0.5px;
                                font-family: 'Poppins' , sans-serif; text-transform: capitalize; padding: 6px 11px; margin-top: -10px;
                                border-radius: 10px; transition: all 0.3s ease 0s;">
                                {{ $pesan->harga }}
                            </button>
                        </div>
                    @elseif ($pesan->status == 'TIDAK DISETUJUI')
                        <div class="form-group" style="margin-left: 1rem; font-size: 15px; font-weight: bold;">
                            -
                        </div>
                    @endif

                    {{-- Estimasi --}}
                    <div class="form-group" style="margin-left: 1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="estimasi" class="form-label">Estimasi</label>
                    </div>
                    @if ($pesan->status == 'DISETUJUI' || $pesan->status == 'TELAH MEMBAYAR')
                        <div class="form-group" style="margin-left: 1rem; font-size: 15px;">
                            <button class="btn disabled"
                                style="font-size: 15px; font-weight: bold; border: 2px solid #e966a0; letter-spacing: 0.5px;
                                font-family: 'Poppins' , sans-serif; text-transform: capitalize; padding: 6px 11px; margin-top: -10px;
                                border-radius: 10px; transition: all 0.3s ease 0s;">
                                {{ $pesan->estimasi }}
                            </button>
                        </div>
                    @elseif ($pesan->status == 'TIDAK DISETUJUI')
                        <div class="form-group" style="margin-left: 1rem; font-size: 15px; font-weight: bold;">
                            -
                        </div>
                    @endif

                    {{-- Status --}}
                    <div class="form-group" style="margin-left: 1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="status" class="form-label">Status</label>
                    </div>
                    <div class="form-group" style="margin-left: 1rem;">
                        <button class="btn disabled"
                            style="font-size: 15px; color:
                            @if ($pesan->status == 'DISETUJUI') blue;
                            @elseif($pesan->status == 'TELAH MEMBAYAR') green;
                            @elseif($pesan->status == 'TIDAK DISETUJUI') red; @endif
                            font-weight: bold; font-size: 15px; font-weight: 600; border: 2px solid #e966a0;
                            letter-spacing: 0.5px; font-family: 'Poppins' , sans-serif; text-transform: capitalize;
                            padding: 6px 11px; margin-top: -10px; border-radius: 10px; transition: all 0.3s ease 0s;">
                            {{ $pesan->status }}
                        </button>
                    </div>
                    <div class="form-group" style="margin-left: 1rem;">
                        <label for="pembayaran" class="form-label" style="font-size: 15px;">Transfer ke Nomor
                            Rekening ini untuk Membayar</label><br>
                        <div class="form-label card border-light" style="padding: 10px;">
                            <p style="font-size: 15px; font-weight: bold;">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    height="17" width="17" style="margin-top: -3px; margin-right: 5px;"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#000000"
                                        d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg><span> Bank Mandiri : 1440022288762</span></p>
                        </div>
                        <label for="pembayaran" class="form-label" style="font-size: 15px;">Bisa Juga Transfer ke
                            Nomor ini untuk Membayar</label><br>
                        <div class="form-label card border-light" style="padding: 10px;">
                            <p style="font-size: 15px; font-weight: bold;">
                                <img src="{{ url('assets/img/icon/dana.png') }}" alt="Dana"
                                    style="vertical-align: middle; margin-right: 5px; margin-bottom: 10px; width: 30px; height: auto;">
                                Dana : 089697083392 <br>
                                <img src="{{ url('assets/img/icon/ovo.png') }}" alt="OVO"
                                    style="vertical-align: middle; margin-right: 5px; margin-bottom: 10px; width: 30px; height: auto;">
                                OVO : 089697083392 <br>
                                <img src="{{ url('assets/img/icon/shopee.png') }}" alt="ShopeePay"
                                    style="vertical-align: middle; margin-right: 5px; margin-bottom: 10px; width: 30px; height: auto;">
                                ShopeePay : 089697083392
                            </p>
                        </div>
                    </div>


                    @if ($pesan->status == 'DISETUJUI')
                        <div style="text-align: right;">
                            <a href="https://wa.link/roi6v6" style="text-decoration: none;">
                                <p class="text-danger" style="font-style: italic; margin-bottom: -5px; margin-right: 10px;">* Silahkan Konfirmasi Pembayaran Dengan Klik Tombol Dibawah</p>
                                <button class="btn mt-3"
                                    style="color: #fff; background-color: #e966a0; font-size: 15px; font-weight: 600; letter-spacing: 0.5px; font-family: 'Poppins', sans-serif; text-transform: capitalize; padding: 9px 11px; margin: 0 0 20px; margin-right: 10px; border-radius: 10px; transition: all 0.3s ease 0s; width: auto;"
                                    type="button">Konfirmasi Pembayaran</button>
                            </a>
                        </div>
                    @endif
                    @if ($pesan->status == 'TELAH MEMBAYAR')
                        <div style="text-align: right;">
                            <a href="/ulasan" class="btn mt-3"
                                style="color: #fff; background-color: #e966a0; font-size: 15px; font-weight: 600; letter-spacing: 0.5px; font-family: 'Poppins', sans-serif; text-transform: capitalize; width: 35%; padding: 9px 11px; margin: 0 0 20px; margin-right: 50px; border-radius: 10px; transition: all 0.3s ease 0s;">
                                Beri Ulasan
                            </a>
                            <a href="{{ route('home') }}" class="btn mt-3"
                                style="color: #fff; background-color: #e966a0; font-size: 15px; font-weight: 600; letter-spacing: 0.5px; font-family: 'Poppins', sans-serif; text-transform: capitalize; width: 35%; padding: 9px 11px; margin: 0 0 20px; margin-right: 45px; border-radius: 10px; transition: all 0.3s ease 0s;">
                                Selesai
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript untuk zoom gambar --}}
    <script>
        document.getElementById('gambar-zoom').addEventListener('click', function() {
            // Membuat elemen modal untuk menampilkan gambar dalam modal
            var modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';
            modal.style.alignItems = 'center';
            modal.style.zIndex = '9999';

            // Membuat elemen gambar di dalam modal
            var img = document.createElement('img');
            img.src = this.src;
            img.style.maxWidth = '90%';
            img.style.maxHeight = '90%';
            img.style.borderRadius = '5px';

            // Menutup modal ketika gambar di dalamnya diklik
            modal.addEventListener('click', function() {
                modal.remove();
            });

            // Menambahkan gambar ke dalam modal
            modal.appendChild(img);

            // Menambahkan modal ke dalam body dokumen
            document.body.appendChild(modal);
        });
    </script>

    <script>
        function previewImage() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const fileGambar = new FileReader();
            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>
