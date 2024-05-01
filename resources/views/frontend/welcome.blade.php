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
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Katalog</a></li>
          <li><a class="nav-link scrollto" href="login">Buat Pesanan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Isna Collection</h1>
      <h2>Mewujudkan Kreativitas Melalui Jarum dan Benang: Isna Collection, Solusi Terbaik untuk Busana Personal yang Berkualitas.</h2>
      <a href="login" class="btn-get-started scrollto">Pesan Sekarang</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
          </div>

          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h4>Tentang Kami</h4>
              <h3>Berawal dari tangan sederhana yang kami sajikan dengan rasa bangga</h3>
              <p>Isna Collection adalah jasa jahit rumahan yang tumbuh dari semangat dan kerja keras seorang biasa.
                Berdiri dengan tekad yang kuat, Isna Collection memulai perjalanan dengan sebuah ide sederhana: menyediakan layanan jahit yang berkualitas tinggi dan personal untuk setiap pelanggan. Dengan kemampuan, dedikasi, dan keahlian, Isna Collection telah membangun reputasi sebagai destinasi fashion yang ramah dan terpercaya.
                Setiap jahitan yang dihasilkan adalah bukti komitmen Isna Collection untuk memberikan yang terbaik, karena keindahan lahir dari detail yang penuh dedikasi.</p>
            </div>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Kemampuan</a></h4>
              <p class="description">Dengan kemampuan jahitan terampil, kami mewujudkan karya elegan dan unik, menghadirkan pakaian yang mencerminkan keindahan dan keberagaman fashion.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Dedikasi</a></h4>
              <p class="description">Dedikasi penuh dari tim kami menghasilkan karya jahitan berkualitas tinggi, memastikan setiap detail dipelihara dengan cermat untuk memenuhi kepuasan pelanggan.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Keahlian</a></h4>
              <p class="description">Keahlian tinggi yang kami miliki dalam dunia jahitan memberikan sentuhan khusus pada setiap karya, menciptakan pakaian yang tidak hanya indah secara estetika, tetapi juga nyaman dipakai.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Katalog</h2>
          <h3>Detail katalog <span>Isna Collection</span> </h3>
          <p>Jelajahi keanggunan dalam setiap jahitan! Kunjungi katalog Isna Collection untuk melihat review terpercaya dari pelanggan kami.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-atasan">Atasan</li>
              <li data-filter=".filter-dress">Dress</li>
              <li data-filter=".filter-blouse">Blouse</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-blouse">
            <img src="assets/img/portfolio/baju1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Blouse Polos</h4>
              <a href="assets/img/portfolio/baju1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="assets/img/portfolio/baju2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Atasan Kebaya</h4>
              <a href="assets/img/portfolio/baju2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
            <img src="assets/img/portfolio/baju3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dress</h4>
              <a href="assets/img/portfolio/baju3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="assets/img/portfolio/baju4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Atasan Batik</h4>
              <a href="assets/img/portfolio/baju4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-blouse">
            <img src="assets/img/portfolio/baju5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Blouse Motif Bunga</h4>
              <a href="assets/img/portfolio/baju5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
            <img src="assets/img/portfolio/baju6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dress Batik</h4>
              <a href="assets/img/portfolio/baju6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="assets/img/portfolio/baju7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Atasan Batik</h4>
              <a href="assets/img/portfolio/baju7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
            <img src="assets/img/portfolio/baju8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dress</h4>
              <a href="assets/img/portfolio/baju8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="assets/img/portfolio/baju9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Atasan Batik</h4>
              <a href="assets/img/portfolio/baju9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  @include ('frontend.contact')

  </main><!-- End #main -->

  <!-- start footer -->

  @include ('frontend.footer')

  <!-- end footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
