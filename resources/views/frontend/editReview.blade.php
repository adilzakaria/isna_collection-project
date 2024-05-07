<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='{{ url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css') }}' rel='stylesheet'>
    <link href="{{ url('assets/css/review.css') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
    rel="stylesheet">
    <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
	<title>Perbarui Penilaian</title>

    @include('frontend.navcontent')

    <!-- Jika ada pesan sukses -->
    @if (session()->has('success'))
        <script>
            swal("Berhasil!", "{{ session('success') }}", "success");
        </script>
    @endif

    <!-- Jika ada pesan tidak berhasil -->
    @if (session('error'))
        <script>
            swal("Gagal!", "{{ session('LoginError') }}", "error");
        </script>
    @endif



    <div class="container" style="margin-top: 200px;">
        <div class="wrapper" >
            <h3>Perbarui Penilaian kepada Isna Collection</h3>
            <form action="{{ url('/update-review') }}" method="POST">
                @csrf
                @foreach ($review as $item)
                    <input type="text" name="review_id" value="{{ $item->nomor }}" hidden>
                    @if ($item->email == Auth::user()->email)
                        <div class="rating">
                            <input type="number" name="rating" hidden value="{{ $item->rating }}">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $item->rating)
                                    <i class='bx bxs-star star' value="{{ $i }}" name="rating" style="--i: {{ $i - 1 }};"></i>
                                @else
                                    <i class='bx bx-star star' value="{{ $i }}" name="rating" style="--i: {{ $i - 1 }};"></i>
                                @endif
                            @endfor
                        </div>
                        <textarea name="review" cols="30" rows="5">{{ $item->review }}</textarea>
                    @endif
                @endforeach
                <div class="btn-group">
                    <button type="submit" class="btn submit">Perbarui</button>
                    <a class="btn cancel" href="{{ route('tentang-kami') }}">Batalkan</a>
                </div>
            </form>
        </div>
    </div>



    <script>
        const allStar = document.querySelectorAll('.rating .star')
        const ratingValue = document.querySelector('.rating input')

        allStar.forEach((item, idx)=> {
            item.addEventListener('click', function () {
                let click = 0
                ratingValue.value = idx + 1

                allStar.forEach(i=> {
                    i.classList.replace('bxs-star', 'bx-star')
                    i.classList.remove('active')
                })
                for(let i=0; i<allStar.length; i++) {
                    if(i <= idx) {
                        allStar[i].classList.replace('bx-star', 'bxs-star')
                        allStar[i].classList.add('active')
                    } else {
                        allStar[i].style.setProperty('--i', click)
                        click++
                    }
                }
            })
        })
    </script>

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
