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
	<title>Form Reviews</title>
</head>
<body>
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
            swal("Gagal!", "{{ session('error') }}", "error");
        </script>
    @endif

    <div class="container">
        <div class="wrapper">
            <h3>Berikan Penilaian kepada Isna Collection</h3>
            <form action="{{ url('/review') }}" method="POST">
                @csrf
                @foreach ($pesanan as $item)
                <input type="text" name="product_id" value="{{ $item->nomor }}" hidden>
                @endforeach
                <div class="rating">
                    <input type="number" name="rating" hidden>
                    <i class='bx bx-star star' value="1" name="rating" style="--i: 0;"></i>
                    <i class='bx bx-star star' value="2" name="rating" style="--i: 1;"></i>
                    <i class='bx bx-star star' value="3" name="rating" style="--i: 2;"></i>
                    <i class='bx bx-star star' value="4" name="rating" style="--i: 3;"></i>
                    <i class='bx bx-star star' value="5" name="rating" style="--i: 4;"></i>
                </div>
                <textarea name="review" cols="30" rows="5" placeholder="Tulis Komentarmu disini"></textarea>
                <div class="btn-group">
                    <button type="submit" class="btn submit">Kirim</button>
                    <button class="btn cancel">Batal</button>
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
