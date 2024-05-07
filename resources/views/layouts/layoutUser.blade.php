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
    <link
        href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}"rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/navbar.css') }}" rel="stylesheet">

</head>

<body>

    @include('frontend.navbar')

  {{-- Content --}}
  @section('content')
    @show


    <!-- start footer -->
    @include('frontend.footer')

    <!-- end footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


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
            <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="6030eb7e-c752-422c-aedc-06dc472fe214";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</body>
</html>
