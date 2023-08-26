<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Posyandu Balita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="userpage/assets/img/favicon.png" rel="icon">
  <link href="userpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="userpage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="userpage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="userpage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="userpage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="userpage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="userpage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="userpage/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="userpage/assets/img/logo.png" alt=""> -->
        <h1>Posyandu Balita<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li>
            <div class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Jadwal</div>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Jadwal Imunisasi/Posyandu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Agenda</th>
                <th>Tempat</th>
                <th>Aksi</th>
              </tr>
              @foreach ($jadwal as $j)
              <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $j->tanggal }} </td>
                <td> {{ $j->agenda_posyandu }} </td>
                <td> {{ $j->tempat }} </td>
                <td>
                  <div class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#cobaModal{{ $j->id }} ">Saya Ingin Ikut!</div>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  @foreach ($jadwal as $j)
  <div class="modal fade bg-primary" id="cobaModal{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Daftar Imunisasi</h5>
          <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
          <form action="/tambahImunisasi" method="post">
            @csrf
            <div class="form-group row">
              <label class="col-form-label col-md-2">Nama Orang Tua</label>
              <div class="col-md-10">
                <input type="text" name="nama_ortu" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-2">Nama Balita</label>
              <div class="col-md-10">
                <input type="text" name="nama_balita" class="form-control" required>
              </div>
            </div>
            <input type="hidden" name="agenda" value="{{ $j->agenda_posyandu }}">
            <input type="hidden" name="tanggal_pelaksanaan" value="{{ $j->tanggal }}">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Selamat Datang</h2>
            <p>Ayo ke Posyandu! Selamatkan balita dari bahaya stunting dengan membawa balita Anda ke Posyandu.
              Balita sehat, generasi penyelamat</p>
            <a data-aos="fade-up" data-aos-delay="200" href="/login" class="btn-get-started">Login</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(bg/posyandu1.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(bg/posyandu2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(bg/posyandu3.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(bg/posyandu1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(bg/posyandu4.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Posyandu</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="userpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="userpage/assets/vendor/aos/aos.js"></script>
  <script src="userpage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="userpage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="userpage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="userpage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="userpage/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="userpage/assets/js/main.js"></script>

</body>

</html>