<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/akun.css">
    <link rel="stylesheet" href="assets/css/order.css">
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('detail', ['id' => $pesan->nomor]) }}" method="POST" enctype="multipart/form-data"
                    class="card border-card">
                    @csrf
                    @auth
                        <h2 class="m-3">Informasi Pemesan</h2>
                        <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                            <input style="width: 40%;" type="text" class="form-control input_form" id="nama"
                                name="nama" readonly value="{{ auth()->user()->nama }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <input style="width: 40%; margin-left: 2rem;" type="text" class="form-control input_form"
                                id="hp" name="hp" readonly value="{{ auth()->user()->hp }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <input style="width: 40%; margin-left: 2rem;" type="text" class="form-control input_form"
                                id="email" name="email" readonly value="{{ auth()->user()->email }}">
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
                            <input style="width: 40%;" type="text" class="form-control input_form" id="provinsi"
                                name="provinsi" placeholder="Provinsi" readonly value="{{ $pesan->provinsi }}">
                            <input style="width: 40%; margin-left: 2rem;" type="text" class="form-control input_form"
                                id="kota" name="kota" placeholder="Kota" readonly value="{{ $pesan->kota }}">
                            <input style="width: 40%; margin-left: 2rem;" type="text" class="form-control input_form"
                                id="kecamatan" name="kecamatan" placeholder="Kecamatan" readonly
                                value="{{ $pesan->kecamatan }}">
                        </div>
                        <div style="display: inline-flex; margin-left:1rem; margin-top:1rem;  width: 95%;">
                            <input style="width: 75%;" type="text" class="form-control input_form" id="alamat"
                                name="alamat" placeholder="Alamat Lengkap" readonly value="{{ $pesan->alamat }}">
                            <input style="width: 25%; margin-left: 2rem;" type="text"
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
                        <input style="width: 40%;" type="text" class="form-control input_form" id="ukuran"
                            name="ukuran" placeholder="Ukuran" readonly value="{{ $pesan->ukuran }}">
                    </div>
                    {{-- Jenis --}}
                    <div style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="jenis" class="form-label">Jenis Baju</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <input style="width: 40%;" type="text" class="form-control input_form" id="jenis"
                            name="jenis" placeholder="Jenis" readonly value="{{ $pesan->jenis }}">
                    </div>
                    {{-- Gambar --}}
                    <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="gambar" class="form-label">Gambar</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <img src="{{ asset('storage/images/' . $pesan->gambar) }}"
                            class="img-preview img-fluid mb-3 col-sm-5" style="margin-right: 10px; border: none;">
                    </div>
                    {{-- Tambahan --}}
                    <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="tambahan" class="form-label">Tambahan</label>
                    </div>
                    <div class="form-group" style="margin-left:1rem;">
                        <input style="width: 40%;" type="text" class="form-control input_form" id="tambahan"
                            name="tambahan" readonly value="{{ $pesan->tambahan }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
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
