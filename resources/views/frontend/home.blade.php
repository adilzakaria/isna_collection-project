@extends('layouts.layoutUser')
@section('title', 'Isna Collection')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        <h1>Isna Collection</h1>
        <h2>Mewujudkan Kreativitas Melalui Jarum dan Benang <br> Isna Collection, Solusi Terbaik untuk Busana Personal
            yang Berkualitas.</h2>
            <a href="/order-pesan" class="btn-get-started scrollto" style="text-decoration: none;">Pesan Sekarang</a>
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
            <h4 class="title">Kemampuan</h4>
            <p class="description">Dengan kemampuan jahitan terampil, kami mewujudkan karya elegan dan unik, menghadirkan pakaian yang mencerminkan keindahan dan keberagaman fashion.</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title">Dedikasi</h4>
            <p class="description">Dedikasi penuh dari tim kami menghasilkan karya jahitan berkualitas tinggi, memastikan setiap detail dipelihara dengan cermat untuk memenuhi kepuasan pelanggan.</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title">Keahlian</h4>
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
        <img src="{{ url('assets/img/portfolio/baju1.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Blouse Polos</h4>
            <a href="assets/img/portfolio/baju1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
        <img src="{{ url('assets/img/portfolio/baju2.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Atasan Kebaya</h4>
            <a href="assets/img/portfolio/baju2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
        <img src="{{ url('assets/img/portfolio/baju3.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Dress</h4>
            <a href="assets/img/portfolio/baju3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
        <img src="{{ url('assets/img/portfolio/baju4.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Atasan Batik</h4>
            <a href="assets/img/portfolio/baju4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-blouse">
        <img src="{{ url('assets/img/portfolio/baju5.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Blouse Motif Bunga</h4>
            <a href="assets/img/portfolio/baju5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
        <img src="{{ url('assets/img/portfolio/baju6.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Dress Batik</h4>
            <a href="assets/img/portfolio/baju6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
        <img src="{{ url('assets/img/portfolio/baju7.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Atasan Batik</h4>
            <a href="assets/img/portfolio/baju7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
        <img src="{{ url('assets/img/portfolio/baju8.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>Dress</h4>
            <a href="assets/img/portfolio/baju8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
        <img src="{{ url('assets/img/portfolio/baju9.jpg') }}" class="img-fluid" alt="">
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
            <h3>Adil Zakaria</h3>
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
@endsection
