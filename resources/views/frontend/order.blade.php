<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Pesan Produk</title>

    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="{{ url('assets/css/common-1.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/akun.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/order.css') }}">




</head>

<body>
    {{-- @dd(Auth::user()) --}}
    @include('frontend.navcontent')

    <nav id="navbar" class="navbar"
        style="background-color: White; box-shadow: 0 15px 19px rgba(0, 0, 0, 0.2); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1
            style="text-align: left; font-weight: bold; margin: 0; width: 58%; font-family: 'Poppins', sans-serif; color: black; font-size: 25px; margin-right: 25%;">
            Hai, {{ auth()->user()->nama }}</h1>
    </nav>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-card">
                <h2 class="m-3">Panduan Ukuran</h2>
                <div style="display: inline-flex;">
                    <img src="assets/img/sizechart1.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="{{ route('pesan') }}" method="POST" enctype="multipart/form-data" class="card border-card">
                @csrf
                @auth
                    <h2 class="m-3">Informasi Pemesan</h2>
                    <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                        <input style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                            id="nama" name="nama" readonly value="{{ Auth::user()->nama }}">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                        <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                            class="form-control input_form" id="hp" name="hp" readonly
                            value="{{ Auth::user()->hp }}">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                        <input style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                            class="form-control input_form" id="email" name="email" readonly
                            value="{{ Auth::user()->email }}">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>

                    </div>
                @endauth

                <div style="margin-top:2rem;">
                    <h2 class="m-3">Alamat Pengiriman</h2>
                </div>
                <div>
                    <div class="form-group" style="display: inline-flex; margin-left:1rem; width: 95%;">
                        <select style="width: 40%; font-size: 15px;" type="text" class="form-control input_form"
                            id="provinsi" name="provinsi" placeholder="Provinsi" value="{{ old('provinsi') }}">
                            <option>Pilih provinsi</option>
                            @foreach ($provinces as $provinsi)
                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                            @endforeach
                            @error('provinsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </select>
                        <select style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                            class="form-control input_form" id="kota" name="kota" placeholder="Kota"
                            value="{{ old('kota') }}">
                            <option>Pilih kota</option>
                            <option></option>
                            @error('kota')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </select>
                        <select style="width: 40%; font-size: 15px; margin-left: 2rem;" type="text"
                            class="form-control input_form" id="kecamatan" name="kecamatan" placeholder="Kecamatan"
                            value="{{ old('kecamatan') }}">
                            @error('kecamatan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <option>Pilih kecamatan</option>
                            <option></option>
                        </select>
                    </div>
                    <div style="display: inline-flex; margin-left:1rem; margin-top:1rem;  width: 95%;">
                        <input style="width: 75%; font-size: 15px;" type="text" class="form-control input_form"
                            id="alamat" name="alamat" placeholder="Alamat Lengkap" value="{{ old('alamat') }}">
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
                <img class="img-preview img-fluid mb-3 col-sm-5" style="margin-right: 10px; border: none;"
                    id="gambar-zoom">

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

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "6030eb7e-c752-422c-aedc-06dc472fe214";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#provinsi').on('change', function() {
                let id_provinsi = $(this)
            .val(); // Menggunakan $(this) untuk mengambil nilai dropdown provinsi yang berubah

                console.log(
                id_provinsi); // Gunakan ini untuk debug, pastikan nilai id_provinsi terambil dengan benar

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getkota') }}",
                    data: {
                        id_provinsi: id_provinsi
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kota').html(msg);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    },
                });
            });
            $('#kota').on('change', function() {
                let id_kota = $(this)
            .val(); // Menggunakan $(this) untuk mengambil nilai dropdown kota yang berubah

                console.log(
                id_kota); // Gunakan ini untuk debug, pastikan nilai id_kota terambil dengan benar

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getkecamatan') }}",
                    data: {
                        id_kota: id_kota
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kecamatan').html(msg);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    },
                });
            });
        });
    </script>

</body>

</html>
