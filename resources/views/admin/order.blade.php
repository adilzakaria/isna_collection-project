<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="admin/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="admin/assets/css/style.css" />
    <link rel="stylesheet" href="admin/assets/css/order.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
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
                    src="admin/assets/images/faces/face15.jpg"
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
            <a class="nav-link" href="dash">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="form">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Update</span>
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
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-message text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Adil J Michael</p>
                      <p class="text-muted ellipsis mb-0">
                      Hallo, Segera Konfirmasi Pesanan
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-message text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Dimas Statham</p>
                      <p class="text-muted ellipsis mb-0">
                        Hallo, Segera Konfirmasi Pesanan
                      </p>
                    </div>
                  </a>
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
                      src="admin/assets/images/faces/face15.jpg"
                      alt="" />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      Adil Zakaria
                    </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
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
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- Start Pesan -->

          <div class="row justify-content-center">
            <!-- username -->
              <div class="col-md-10">
                <div class="card">
                <h3 class="card-title text-dark m-4 mx-5">Pesanan @username</h3>
                </div>
              </div>
              <!-- usernmae -->
              <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                          <div class="card text-dark bg-white">
                            <!-- Detail Informasi -->
                            <div class="card card-border bg-white m-3">
                              <h4>Detail Informasi</h4>
                              <div style="display: inline-flex;">
                              <output class="form-control bg-white text-dark" style="width: 170px;">username</output>
                              <output class="form-control bg-white text-dark mx-4" style="width: 140px;">087898704567</output>
                              <output class="form-control bg-white text-dark" style="width: 230px;">email</output>
                              </div>
                              <div style="display: inline-flex; margin-top: 1rem;">
                              <output class="form-control bg-white text-dark" style="width: 210px;">Kalimantan Selatan</output>
                              <output class="form-control bg-white text-dark mx-4" style="width: 180px;">Kota Majapahit</output>
                              <output class="form-control bg-white text-dark" style="width: 150px;">Kecamatan</output>
                              </div>
                              <div style="display: inline-flex; margin-top: 1rem;">
                              <output class="form-control bg-white text-dark" style="width: 430px;">Alamat Lengkap</output>
                              <output class="form-control bg-white text-dark" style="width: 150px; margin-left: 10px;">Kode POS</output>
                              </div>
                            </div>
                            <!-- dEatail Informasi -->

                            <!-- DEDTAIL PESANANI -->
                            <h4 class="mx-3">Detail Pesanan</h4>
                            <div class="card bg-white card-border mx-3">
                            <div style="display: inline-flex;">
                            <div class="card card-border bg-white">
                            <div style="display: inline-flex;">
                            <output class="form-control bg-white text-dark" style="widt200">Jenis Baju</output>
                            <output class="form-control bg-white text-dark" style="width: 150px; margin-left: 10px;">Ukuran</output>
                            </div>
                            <div style="display: inline-flex; margin-top: 1rem;">
                            <input class="form-control bg-white text-dark" type="text-area"style="width: 200px; height: 100px"></input>
                            </div>
                            </div>
                            <div class="card bg-white card-border mx-3">
                            <img src="assets/img/portfolio/baju1.jpg" alt="" style="width:200px; height:200px;">
                            </div>
                            </div>
                            </div>
                            <!-- DETAIL PESANANI -->
                          </div>
                    </div>
                  </div>
                </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                          <div class="card text-dark bg-white">
                            <!-- Detail Informasi -->
                            <div class="card card-border bg-white m-3">
                              <h4>Keputusan Pesanan</h4>
                              <select class="form-select my-3" aria-label="Default select example">
                                <option selected>Disetujui</option>
                                <option value="1">Tidak Disetujui</option>
                              </select>
                              <input class="form-control bg-white text-dark my-3" type="dropdown"style="width: 200px;" placeholder="Harga"></input>
                              <input class="form-control bg-white text-dark my-3" type="dropdown"style="width: 200px;" placeholder="Estimasi Waktu"></input>
                              <button class="btn btn-success bg-white text-dark my-4" type="dropdown">Kirim</button>
                            </div>
                            <!-- dEatail Informasi -->
                          </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
        </div>

          <!-- End Pesan -->

          <!-- content-wrapper ends -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
