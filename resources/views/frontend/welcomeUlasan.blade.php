<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', 'Isna Collection')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}"rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/review.css') }}" rel="stylesheet">
  <link href='{{ url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css') }}' rel='stylesheet'>
  <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="/">Isna Collection</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto active" href="/">Tentang Kami</a></li>
          <li><a class="nav-link scrollto " href="/">Katalog</a></li>
          <li><a class="nav-link scrollto" href="login">Buat Pesanan</a></li>
          <li><a class="nav-link scrollto" href="/">Hubungi Kami</a></li>
          <li class="dropdown" ><a href="#"><span>Masuk/Daftar</span> <i class="bi bi-chevron-down"></i> </a>
           <ul>
            <li><a href="/register">Daftar</a></li>
            <li><a href="/login">Masuk</a></li>
           </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

      {{-- Testimonial --}}
      <section id="testimonials">

        {{-- heading --}}
        <div class="testimonial-heading">
            <span>Penilaian</span>
            <h1>Para Kostumer</h1>
        </div>

        {{-- testimonial-box-container --}}
        <div class="testimonial-box-container">
            @foreach ($ulasans as $ulasan)
            {{-- BOX 1 --}}
            <div class="testimonial-box">
                {{-- top --}}
                <div class="box-top">
                    {{-- profile --}}
                    <div class="profile">
                        {{-- nama dan email --}}
                        <div class="name-user">
                            <strong> {{ $ulasan->nama }}</strong>
                            <span>{{ $ulasan->email }}</span>
                        </div>
                    </div>

                    {{-- review --}}
                    <div class="reviews">
                        @for ($i = 0; $i < $ulasan->rating; $i++)
                        <i class='bx bxs-star star'></i>
                        @endfor
                        @for ($j = 0; $j < 5 - $ulasan->rating; $j++)
                        <i class='bx bx-star'></i>
                        @endfor
                    </div>
                </div>

                {{-- Comments --}}
                <div class="client-comment">
                    <p>{{ $ulasan->review }}</p>
                </div>

                <div class="date">
                    <span>{{ $ulasan->created_at->format('d M Y') }}</span>
                </div>
            </div>
            @endforeach

        </div>
    </section>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
