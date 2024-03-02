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
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div
            class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">
                  Free 24/7 customer support, updates, and more with this
                  template!
                </p>
                <a
                  href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                  target="_blank"
                  class="btn me-2 buy-now-btn border-0"
                  >Get Pro</a
                >
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"
                ><i class="mdi mdi-home me-3 text-white"></i
              ></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
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
                  <h5 class="mb-0 font-weight-normal">Hai, Adil</h5>
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
            <a class="nav-link" href="admin1">
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
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0">
                        Just a reminder that you have an event today
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0">Update dashboard</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0">New admin wow!</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
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
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title font-admin">Ulasan Pembeli</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th >ID</th>
                            <th >Nama Pembeli</th>
                            <th >Rating</th>
                            <th >Ulasan</th>
                            <th >Deskripsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              <img
                                src="admin/assets/images/faces/face1.jpg"
                                alt="image" />
                              <span class="ps-2">Henry Klein</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Dashboard</td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>
                              <img
                                src="admin/assets/images/faces/face2.jpg"
                                alt="image" />
                              <span class="ps-2">Estella Bryan</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Website</td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>
                              <img
                                src="admin/assets/images/faces/face5.jpg"
                                alt="image" />
                              <span class="ps-2">Lucy Abbott</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>App design</td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>
                              <img
                                src="admin/assets/images/faces/face3.jpg"
                                alt="image" />
                              <span class="ps-2">Peter Gill</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Development</td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>
                              <img
                                src="admin/assets/images/faces/face4.jpg"
                                alt="image" />
                              <span class="ps-2">Sallie Reyes</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Website</td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <!-- Start Katalog -->
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title font-admin">Katalog Isna Collection</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th >ID</th>
                            <th >Gambar</th>
                            <th >Nama Produk</th>
                            <th >Kategori</th>
                            <th >Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>gambar.jpg</td>
                            <td>lorem ipsum assalamualaikum wr wb</td>
                            <td>dress, atasan, lainnya</td>
                            <td>
                              <div class="badge badge-outline-primary">
                                Perbarui
                              </div>
                            </td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>gambar.jpg</td>
                            <td>lorem ipsum assalamualaikum wr wb</td>
                            <td>dress, atasan, lainnya</td>
                            <td>
                              <div class="badge badge-outline-primary">
                                Perbarui
                              </div>
                            </td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>gambar.jpg</td>
                            <td>lorem ipsum assalamualaikum wr wb</td>
                            <td>dress, atasan, lainnya</td>
                            <td>
                              <div class="badge badge-outline-primary">
                                Perbarui
                              </div>
                            </td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>gambar.jpg</td>
                            <td>lorem ipsum assalamualaikum wr wb</td>
                            <td>dress, atasan, lainnya</td>
                            <td>
                              <div class="badge badge-outline-primary">
                                Perbarui
                              </div>
                            </td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>gambar.jpg</td>
                            <td>lorem ipsum assalamualaikum wr wb</td>
                            <td>dress, atasan, lainnya</td>
                            <td>
                              <div class="badge badge-outline-primary">
                                Perbarui
                              </div>
                            </td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Hapus
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- End Katalog -->

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between">
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright © bootstrapdash.com 2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                Free
                <a
                  href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                  target="_blank"
                  >Bootstrap admin template</a
                >
                from Bootstrapdash.com</span
              >
            </div>
          </footer>
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
