<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lapor Warga Tuban - Admin</title>
  <meta content="Dashboard admin pengelolaan pengaduan masyarakat Kabupaten Tuban." name="description">
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
  
    <script type="text/javascript" src="chartjs/Chart.js"></script>


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
      <i class="bi bi-phone d-flex align-items-center"><span>081234567890</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span><?php date_default_timezone_set('Asia/Jakarta');
      echo date('l, d - M - Y '); ?> </span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="dashboard_admin.php">Lapor Warga Tuban</a></h1>
        <p class="logo-tagline">Panel Admin</p>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="data_pengaduan_admin.php">Data Pengaduan</a></li>
          <li><a class="nav-link scrollto" href="data_pengguna_admin.php">Data Pengguna</a></li>
        </ul>
   
      </nav><!-- .navbar -->

      <a href="proses_logout.php" onclick="return confirm('Apakah anda mau keluar?')" class="book-a-table-btn scrollto">Log out</a>

    </div>
  </header><!-- End Header -->
