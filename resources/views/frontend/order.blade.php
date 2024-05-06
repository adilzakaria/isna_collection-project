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
        <div class="row justify-content-center" style="margin-top: 20%;">
            <div class="col-md-4">
                <div class="card border-card">
                    <h2 class="m-3">Panduan Ukuran</h2>
                    <div style="display: inline-flex;">
                        <img src="assets/img/sizechart1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('pesan') }}" method="POST" enctype="multipart/form-data"
                    class="card border-card">
                    @csrf
                    @auth
                        <h2 class="m-3">Informasi Pemesan</h2>
                        <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                            <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                                id="nama" name="nama" readonly value="{{ Auth::user()->nama }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="hp" name="hp" readonly
                                value="{{ Auth::user()->hp }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="email" name="email" readonly
                                value="{{ Auth::user()->email }}">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>

                        </div>
                    @endauth

                    <div style="margin-top:2rem;">
                        <h2 class="m-3">Alamat Pengiriman</h2>
                    </div>
                    <div>
                        <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                            <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                                id="provinsi" name="provinsi" placeholder="Provinsi" value="{{ old('provinsi') }}">
                            @error('provinsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="kota" name="kota" placeholder="Kota"
                                value="{{ old('kota') }}">
                            @error('kota')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="kecamatan" name="kecamatan"
                                placeholder="Kecamatan" value="{{ old('kecamatan') }}">
                            @error('kecamatan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div style="display: inline-flex; margin-left:1rem; margin-top:1rem;  width: 95%;">
                            <input style="width: 75%; font-size: 15px;" type="text"
                                class="form-control input_form" id="alamat" name="alamat"
                                placeholder="Alamat Lengkap" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input style="width: 25%; font-size: 15px; margin-left: 2rem;" type="text"
                                class="form-control input_form" id="kode" name="kode" placeholder="Kode Pos"
                                value="{{ old('kode') }}">
                            @error('kode')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div style="margin-top:2rem;">
                        <h2 class="m-3">Detail Pesanan</h2>
                    </div>
                    <div style="margin-left:1rem; font-size: 14px;">
                        <label for="ukuran" class="form-label">Ukuran</label>
                    </div>
                    <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                        <select style="width: 50%;" class="form-select-lg" id="ukuran" name="ukuran"
                            aria-label="Default select example">
                            <option selected disabled value="">--PILIH UKURAN--</option>
                            <option value="S" {{ old('ukuran') == 'S' ? 'checked' : '' }}>S</option>
                            <option value="M" {{ old('ukuran') == 'M' ? 'checked' : '' }}>M</option>
                            <option value="L" {{ old('ukuran') == 'L' ? 'checked' : '' }}>L</option>
                            <option value="XL" {{ old('ukuran') == 'XL' ? 'checked' : '' }}>XL</option>
                            <option value="XXL" {{ old('ukuran') == 'XXL' ? 'checked' : '' }}>XXL</option>
                        </select>
                        @error('ukuran')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="jenis" class="form-label">Jenis Baju</label>
                    </div>
                    <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                        <select style="width: 50%;" class="form-select-lg" id="jenis" name="jenis"
                            aria-label="Default select example">
                            <option selected disabled value="">--PILIH JENIS BAJU--</option>
                            <option value="Kemeja Wanita" {{ old('jenis') == 'Kemeja Wanita' ? 'checked' : '' }}>
                                Kemeja Wanita</option>
                            <option value="Kemeja Pria" {{ old('jenis') == 'Kemeja Pria' ? 'checked' : '' }}>Kemeja
                                Pria</option>
                            <option value="Tunik" {{ old('jenis') == 'XXL' ? 'Tunik' : '' }}>Tunik</option>
                            <option value="Long Dress" {{ old('jenis') == 'Long Dress' ? 'checked' : '' }}>Long Dress
                            </option>
                            <option value="Blazer Pria" {{ old('jenis') == 'Blazer Pria' ? 'checked' : '' }}>Blazer
                                Pria</option>
                            <option value="Blazer Wanita" {{ old('jenis') == 'Blazer Wanita' ? 'checked' : '' }}>
                                Blazer Wanita</option>
                        </select>
                        @error('jenis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="gambar" class="form-label">Unggah Gambar</label>
                    </div>
                    <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                        <input class="form-control input_form form-control-lg" id="gambar" name="gambar"
                            onchange="previewImage()" type="file" style="width: 90%; font-size: 15px;"
                            placeholder="format .jpg/.png">
                        @error('gambar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <img class="img-preview img-fluid mb-3 col-sm-5" style="margin-right: 10px; border: none;" id="gambar-zoom">

                    <div class="form-group" style="margin-left:1rem; font-size: 14px; margin-top: 1rem;">
                        <label for="tambahan" class="form-label">Tambahan</label>
                    </div>
                    <div class="form-group" style="display: inline-flex; margin-left:1rem;">
                        <textarea class="form-control input_form" id="tambahan" name="tambahan" rows="3"
                            style="width: 90%; height: 90px;">{{ old('tambahan') }}</textarea>
                        @error('tambahan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="m-3 text-center">
                        <button type="submit" class="btn btn-body kirim"
                            style="width: 50%; font-size: 14px;">Kirim</button>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </form>
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
