<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='{{ url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css') }}' rel='stylesheet'>
    <link href="{{ url('assets/css/review.css') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
    rel="stylesheet">
	<title>Perbarui Penilaian</title>
</head>
<body>
    @include('frontend.navcontent')

    <!-- Jika ada pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Jika ada pesan tidak berhasil -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif



    <div class="container">
        <div class="wrapper">
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
                    <a class="btn cancel" href="/tentang-kami">Batalkan</a>
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

</body>
</html>
