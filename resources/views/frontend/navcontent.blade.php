
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
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="{{ route('home') }}">Isna Collection</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('order') }}">Buat Pesanan</a></li>
                    <li class="dropdown">
                        <a class="nav-link scrollto active" href="#" id="akun">
                            <span>Hai, {{ auth()->user()->nama }}</span>
                            <i class="bi bi-chevron-down"></i>
                            <span class="notification-badge"></span><!-- Change '3' to the actual notification count -->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a href="{{ route('akun') }}" class="dropdown-item">Akun Saya <i
                                        class="bi bi-person-circle"></i></a>
                            </li>

                            @cannot('admin')
                                <li>
                                    <a href="{{ route('pesanan') }}" class="dropdown-item">
                                        <span>Pesanan</span>
                                        <span class="notification-order"></span><i class="bi bi-bag-fill"></i>
                                    </a>
                                </li>
                            @endcannot

                            @can('admin')
                                <li>
                                    <a class="{{ Request::is('dash*') ? 'active' : '' }} dropdown-item" href="{{ route('admin') }}">
                                        <span>Dashboard Admin</span>
                                        </span><i class="bi bi-columns-gap"></i>
                                    </a>
                                </li>
                            @endcan

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="font-size: 15px; margin-left: 10px">Keluar <i
                                            class="bi bi-box-arrow-right"></i></button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>

