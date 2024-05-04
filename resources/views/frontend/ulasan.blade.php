<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimoni</title>
    <link href="{{ url('assets/css/review.css') }}" rel="stylesheet">
    <link href='{{ url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css') }}' rel='stylesheet'>

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
</body>
</html>
