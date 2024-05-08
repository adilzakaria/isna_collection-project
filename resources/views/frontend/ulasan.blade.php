<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian Tentang Kami</title>


    <link href="{{ url('assets/css/review.css') }}" rel="stylesheet">
    <link href='{{ url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css') }}' rel='stylesheet'>
    <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
</head>

<body>

    @include('frontend.navreview')

    <!-- Jika ada pesan sukses -->
    @if (session()->has('success'))
    <script>
        swal("Berhasil!", "{{ session('success') }}", "success");
    </script>
    @endif

    <!-- Jika ada pesan tidak berhasil -->
    @if (session('error'))
        <script>
            swal("Gagal!", "{{ session('error') }}", "error");
        </script>
    @endif

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
                            <strong> {{ $ulasan->nama }}
                                @if ($ulasan->email == Auth::user()->email)
                                    <a href="{{ url('edit-penilaian/'.$ulasan->nomor.'/penilaianpengguna') }}"><i class='bx bxs-edit' style="color: #cd74c9; font-size:1.1rem;"></i></a>
                                @endif
                            </strong>
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
