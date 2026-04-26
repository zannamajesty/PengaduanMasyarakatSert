<?php
session_start();
$id_m = $_SESSION['id_m'];
if (empty($id_m)) {
header("location:login_masyarakat.php?switch=1");
}else{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="font.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Template Datatables File -->
  <script type="text/javascript" src="datatables/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="datatables/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/jquery.dataTables.css">
  <!-- =======================================================
  * Template Name: Delicious - v4.3.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="dashboard_masyarakat.php">Dashboard</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


      <a href="proses_logout.php" onclick="return confirm('Apakah anda mau keluar?')" class="book-a-table-btn scrollto">Log out</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide3.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/slide3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Ajukan <span>Aduan</span></h2>
        <p>Silahkan tulis hal yang ingin anda adukan dibawah ini.</p>
      </div>

      <form action="proses_pengaduan_masyarakat.php" method="post" role="form" class="php-email-form">
        <div class="form-group mt-3">
          <textarea class="form-control" name="isi_laporan" rows="5" placeholder="Masukkan Pengaduan Anda Disini."></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
        </div>
        <div class="text-center"><button type="submit">Kirim aduan</button></div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Data <span>Aduan</span></h2>
        <p>Ini adalah tabel data pengaduan anda.</p>
      </div>
                <table id="data" class="table table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th> No</th>
                      <th style="text-align:center"> Nama</th>
                      <th style="text-align:center"> NIK</th>
                      <th style="text-align:center"> Tanggal Pengaduan</th>
                      <th style="text-align:center"> Isi Pengaduan</th>
                      <th style="text-align:center"> Status Pengaduan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    include 'koneksi.php';
                    $ID_M = $_SESSION['id_m'];
                    $tp = mysqli_query($koneksi, "SELECT * FROM `pengaduan` p JOIN `masyarakat` m WHERE p.`ID_M` = m.`ID_M` AND m.`ID_M`=$ID_M ORDER BY `p`.`TGL_PENGADUAN` DESC");
                    while ($r = mysqli_fetch_array($tp)) {
                      ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $r['NAMA_M']; ?></td>
                        <td><?php echo $r['NIK_M']; ?></td>
                        <td><?php echo date("d - M - Y h:i:s \W\I\B", strtotime($r['TGL_PENGADUAN'])); ?></td>
                        <td><?php echo $r['ISI_LAPORAN']; ?></td>
                        <td><?php echo $r['STATUS_PENGADUAN']; ?></td>
                      </tr>
                      <?php $i = $i + 1; ?>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
          </section><!-- End Book A Table Section -->

        </div>
      </section><!-- End Book A Table Section -->



      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#data').DataTable();
        } );
      </script>
    </body>

    </html>
    <?php
  }
    ?>
