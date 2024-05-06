<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}"/>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/vendors/select2/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('/admin/assets/images/favicon.png"') }}"/>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img
                    class="img-xs rounded-circle"
                    src="{{ asset('admin/assets/images/faces/face15.jpg')}}"
                    alt="" />
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Hai, {{ auth()->user()->nama }}</h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"
                ><i class="mdi mdi-dots-vertical"></i
              ></a>
              <div
                class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                aria-labelledby="profile-dropdown">
                <a href="#home" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Account Settings
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Change Password
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items active">
            <a class="nav-link" href="{{ route('admin_ulasan')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Daftar Ulasan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin_katalog')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Daftar Katalog</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin_pesanan')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Daftar Pesanan</span>
            </a>
          </li>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"
              ><img src="admin/assets/images/logo-mini.svg" alt="logo"
            /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="notificationDropdown"
                  href="#"
                  data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifikasi</h6>
                  @forelse ($notifikasi as $pesanan)
                        @if ($pesanan->status == 'BELUM DISETUJUI' || $pesanan->status == "")
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="/dash/pesanan">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-message text-success"></i>
                            </div>
                          </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">{{$pesanan->nama}}</p>
                                    <p class="text-muted ellipsis mb-0">
                                        Hallo, Segera Konfirmasi Pesanan {{$pesanan->nama}}
                                    </p>
                                </div>
                            </a>
                        @endif
                        @empty
                        @endforelse

                        <!-- Tidak ada pesanan yang tidak disetujui -->
                  <p class="p-3 mb-0 text-center">Lihat lebih banyak</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  id="profileDropdown"
                  href="#"
                  data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img
                      class="img-xs rounded-circle"
                      src="{{ asset('admin/assets/images/faces/face15.jpg')}}"
                      alt="" />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      Hai, {{ auth()->user()->nama }}
                    </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>

                <a class="dropdown-item preview-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-logout text-danger"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <p class="preview-subject mb-1">Log out</p>
                    </div>
                </a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
            </ul>
            <button
              class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
              type="button"
              data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->

    @yield('content')

          <!-- content-wrapper ends -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
