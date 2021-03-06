<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DAP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!-- Navbar Start -->

    <nav
      class="
        navbar navbar-expand-lg navbar-dark
        sticky-top
        py-lg-0
        me-n1
        wow
        bg-primary
        fadeIn
      "
      data-wow-delay="0.1s"
      style="height: 60px"
    >
      <div class="row col-12" style="height: 60px">
        <div class="col-2 pt-3">
          <ul class="list-unstyled ms-3">
            <li>
              <a href="user "
                ><i class="text-white fa fa-user"></i><span> Logo</span></a
              >
            </li>
          </ul>
          <!-- <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a> -->
        </div>
        <div class="col-7 d-flex justify-content-center pt-2">
          <ul class="d-flex list-unstyled">
            <li>
              <a href="index.html" class="nav-item nav-link">Home</a>
            </li>
            <li>
              <a href="laporan.html" class="nav-item nav-link">Laporan</a>
            </li>
            <li>
              <a href="registrasi.html" class="nav-item nav-link">Registrasi</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle active"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Donasi
              </a>
              <ul
                class="dropdown-menu bg-dark"
                aria-labelledby="navbarDropdown"
              >
                <li><a class="dropdown-item" href="#">Berobat</a></li>
                <li><a class="dropdown-item" href="#">Pernikahan</a></li>

                <li><a class="dropdown-item" href="#">Musibah</a></li>
                <li><a class="dropdown-item" href="#">Melahirkan</a></li>
                <li><a class="dropdown-item" href="#">Aqiqah</a></li>
                <li><a class="dropdown-item" href="#">More</a></li>
              </ul>
            </li>

            <li><a href="about.html" class="nav-item nav-link">About Us</a></li>
            <li>
              <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </li>
          </ul>
        </div>

        <div
          class="search col-3 text-end pt-3 d-flex me-n3"
          style="height: 60px"
        >
          <ul class="d-flex list-unstyled">
            <li>
              <input type="text" placeholder="search" />
              <i class="fa fa-search text-white"></i>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link justify-content-center ms-3 mt-n2"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
              >
                ???
              </a>
              <ul
                class="drop dropdown-menu bg-dark"
                aria-labelledby="navbarDropdown"
                style="margin-left: -70px"
              >
                <li><a class="dropdown-item" href="#">user</a></li>
                <li><a class="dropdown-item" href="#">Riwayat</a></li>

                <li><a class="dropdown-item" href="#">Iuran</a></li>
                <li><a class="dropdown-item" href="#">Laporan</a></li>
                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->

    <!-- carousel start -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="3"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="4"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active bg-danger">
          <img src="#" alt="Los Angeles" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Dimas</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item bg-primary">
          <img src="#" alt="Chicago" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Dini</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="#" alt="New York" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Asep</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="carousel-item bg-success">
          <img src="#" alt="New York" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Pawandi</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="carousel-item bg-secondary">
          <img src="#" alt="New York" class="d-block" style="width: 100%" />
          <div class="carousel-caption bg-success">
            <h3>Syahril</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- carousel end -->
    <!-- donasi content -->
    <div class="donasi container mt-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp news"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h6 class="section-title bg-white text-center text-primary px-3">
            <span class="donate">Donasi</span>
          </h6>
        </div>
      </div>
      <div id="accordion">
        <!--berobat-->
        <div class="card">
          <div class="card-header bg-primary">
            <a class="btn text-white" data-bs-toggle="collapse" href="#berobat">
              Berobat
            </a>
          </div>
          <div id="berobat" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- berobat end -->
        <!--pernikahan-->
        <div class="card">
          <div class="card-header bg-primary">
            <a
              class="btn text-white"
              data-bs-toggle="collapse"
              href="#pernikahan"
            >
              pernikahan
            </a>
          </div>
          <div id="pernikahan" class="collapse" data-bs-parent="#accordion">
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- pernikahan end -->
        <!--melahirkan-->
        <div class="card">
          <div class="card-header bg-primary">
            <a
              class="btn text-white"
              data-bs-toggle="collapse"
              href="#melahirkan"
            >
              melahirkan
            </a>
          </div>
          <div id="melahirkan" class="collapse" data-bs-parent="#accordion">
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- melahirkan end -->
        <!--musibah-->
        <div class="card">
          <div class="card-header bg-primary">
            <a class="btn text-white" data-bs-toggle="collapse" href="#musibah">
              musibah
            </a>
          </div>
          <div id="musibah" class="collapse" data-bs-parent="#accordion">
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- musibah end -->
        <!--aqiqah-->
        <div class="card">
          <div class="card-header bg-primary">
            <a class="btn text-white" data-bs-toggle="collapse" href="#aqiqah">
              aqiqah
            </a>
          </div>
          <div id="aqiqah" class="collapse" data-bs-parent="#accordion">
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- aqiqah end -->
        <!--kecelakaan-->
        <div class="card">
          <div class="card-header bg-primary">
            <a
              class="btn text-white"
              data-bs-toggle="collapse"
              href="#kecelakaan"
            >
              kecelakaan
            </a>
          </div>
          <div id="kecelakaan" class="collapse" data-bs-parent="#accordion">
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
            <div class="card-body col-12 d-flex border border-dark">
              <div class="col-2">
                <img src="img/wakaf1.jpg" alt="" />
              </div>
              <div class="paragraft col-8 pt-1">
                <a href="#">masjid agung</a>
              </div>
              <div class="col-2 text-end my-auto">
                <a href="#">
                  <button type="button" class="btn btn-danger">Details</button>
                </a>
                <a href="#"
                  ><button type="button" class="btn btn-primary">
                    Donate
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- kecelakaan end -->
      </div>
    </div>
    <!-- donasi content end -->
    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i> Batam,Indonesia
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+062 822 8717 7114
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>dompetamal@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-1"
                href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-1"
                href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-1"
                href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-0"
                href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="index.html">Home</a>
            <a class="btn btn-link" href="laporan.html">Laporan</a>
            <a class="btn btn-link" href="registrasi.html">Registrasi</a>
            <a class="btn btn-link" href="donasi.html">Donasi</a>
            <a class="btn btn-link" href="about.html">About Us</a>
            <a class="btn btn-link" href="contact.html">Contact Us</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Gallery</h5>
            <div class="row g-2">
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-1.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-2.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-3.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-4.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-5.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-6.jpg"
                  alt="Image"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Develop</h5>
            <a class="btn btn-link" href="">Dini</a>
            <a class="btn btn-link" href="">Syahril</a>
            <a class="btn btn-link" href="">Dimas</a>
            <a class="btn btn-link" href="">Asep</a>
            <a class="btn btn-link" href="">Pawandi</a>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Dompet_Amal.com</a>, All Right Reserved.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
