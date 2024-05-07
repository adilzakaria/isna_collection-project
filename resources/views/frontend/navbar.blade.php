
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="{{ route('home') }}">Isna Collection</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Katalog</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('order') }}">Buat Pesanan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
                    <li class="dropdown">
                        <a href="#" id="akun">
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
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Keluar <i
                                            class="bi bi-box-arrow-right"></i></button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
