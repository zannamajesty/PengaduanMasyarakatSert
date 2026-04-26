<?php
session_start();

if (isset($_GET['switch']) && $_GET['switch'] === '1') {
  unset($_SESSION['id_p']);
  unset($_SESSION['nama_p']);
}

if (isset($_SESSION['id_m'])) {
  header('location:dashboard_masyarakat.php');
}else {

 include 'header_luar.php';?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-container">
              <div class="carousel-content auth-card">
                <p class="eyebrow animate__animated animate__fadeInDown">Area Warga</p>
                <h2 class="animate__animated animate__fadeInDown"><span>Login</span> Masyarakat</h2>

                <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') { ?>
                  <div class="alert alert-warning auth-alert">Username atau password masyarakat tidak sesuai.</div>
                <?php } ?>
                <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'kosong') { ?>
                  <div class="alert alert-warning auth-alert">Username dan password wajib diisi.</div>
                <?php } ?>
                <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'db') { ?>
                  <div class="alert alert-warning auth-alert">Login gagal karena tabel/database belum siap. Pastikan database <strong>pengaduan</strong> sudah di-import dari file <strong>pengaduan.sql</strong>.</div>
                <?php } ?>

                <form action="proses_login_masyarakat.php" method="post" role="form" class="php-email-form auth-form animate__animated animate__fadeInUp">
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                  </div>
                  <div class="form-group mt-3 password-field">
                    <input type="password" class="form-control" id="password_masyarakat" name="password" placeholder="Masukkan Password" required>
                    <button type="button" class="password-toggle" data-target="password_masyarakat" aria-label="Tampilkan password">
                      <i class="bi bi-eye"></i>
                    </button>
                  </div>
                  <div class="auth-actions mt-4">
                    <input type="submit" class="btn btn-primary" value="Masuk">
                    <a href="daftar_masyarakat.php" class="btn btn-outline-light">Daftar Akun Baru</a>
                    <a href="index.php" class="btn btn-outline-light">Kembali</a>
                  </div>
                </form>

                <div class="auth-demo animate__animated animate__fadeInUp">
                  <h3>Akun Demo Masyarakat</h3>
                  <p><strong>Username:</strong> masyarakat</p>
                  <p><strong>Password:</strong> masyarakat123</p>
                  <p><strong>Alternatif:</strong> steve / steve atau ferry / ferry</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
}
?>

