<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lapor Warga Tuban</title>
  <meta content="Portal pengaduan masyarakat Kabupaten Tuban." name="description">
  <meta content="pengaduan, masyarakat, tuban" name="keywords">

  <link href="font.css" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="public-page">

  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <i class="bi bi-telephone d-flex align-items-center"><span>081234567890</span></i>
        <i class="bi bi-clock d-none d-lg-flex align-items-center"><span><?php date_default_timezone_set('Asia/Jakarta'); echo date('l, d - M - Y'); ?></span></i>
      </div>
      <span class="topbar-text d-none d-md-inline">Portal Pengaduan Masyarakat Kabupaten Tuban</span>
    </div>
  </section>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.php">Lapor Warga Tuban</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#lapor">Lapor</a></li>
          <li><a class="nav-link scrollto" href="index.php#lihat-pengaduan">Lihat Pengaduan</a></li>
          <li><a class="nav-link scrollto" href="index.php#cara">Cara</a></li>
          <li><a class="nav-link scrollto" href="index.php#profil-dinas">Profil Dinas</a></li>
          <li><a class="nav-link scrollto" href="index.php#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="index.php#bantuan">Bantuan</a></li>
          <li><a class="nav-link scrollto" href="index.php#kontak">Kontak</a></li>
        </ul>
      </nav>

      <div class="header-actions d-none d-md-flex">
        <a href="login_masyarakat.php?switch=1" class="book-a-table-btn scrollto">Login Masyarakat</a>
        <a href="login_admin.php?switch=1" class="book-a-table-btn scrollto ms-2">Login Admin</a>
      </div>
    </div>
  </header>
