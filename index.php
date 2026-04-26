<?php
session_start();
if (isset($_SESSION['id_m'])) {
  header('location:dashboard_masyarakat.php');
} elseif (isset($_SESSION['id_p'])) {
  header('location:dashboard_admin.php');
} else {

  include 'header_luar.php';
?>

  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('assets/img/user-home-1.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
                <p class="animate__animated animate__fadeInUp">Website Pengaduan Masyarakat Dispendukcapil Bangkalan</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('assets/img/user-home-1.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Layanan Pengaduan</h2>
                <p class="animate__animated animate__fadeInUp">Sampaikan aduan Anda dengan cepat dan pantau progres penanganan secara transparan.</p>
                <div class="hero-cta animate__animated animate__fadeInUp">
                  <a href="login_masyarakat.php?switch=1" class="btn-menu">Mulai Lapor</a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('assets/img/user-home-1.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Akses Cepat</h2>
                <p class="animate__animated animate__fadeInUp">Gunakan akun Anda untuk masuk ke dashboard masyarakat atau dashboard admin.</p>
                <div class="hero-cta animate__animated animate__fadeInUp">
                  <a href="login_masyarakat.php?switch=1" class="btn-menu">Login Masyarakat</a>
                  <a href="login_admin.php?switch=1" class="btn-book">Login Admin</a>
                </div>
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
  </section>

  <main class="home-main">
    <section id="lapor" class="home-section">
      <div class="container">
        <div class="home-grid">
          <article class="home-card" id="lihat-pengaduan">
            <h3>Pengaduan Terbaru</h3>
            <ul>
              <li>Jalan rusak di wilayah Kecamatan Tuban.</li>
              <li>Permohonan perbaikan pelayanan dokumen.</li>
              <li>Keluhan antrean layanan administrasi.</li>
            </ul>
          </article>
          <article class="home-card" id="bantuan">
            <h3>Social Feed</h3>
            <p>Ikuti kanal informasi resmi untuk update layanan dan pengumuman terbaru.</p>
            <div class="social-feed">
              <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="cara" class="home-section">
      <div class="container">
        <article class="home-card full">
          <h3>Cara Melapor</h3>
          <ol>
            <li>Login sebagai masyarakat.</li>
            <li>Isi form aduan dengan lengkap.</li>
            <li>Pantau status penanganan di dashboard.</li>
          </ol>
        </article>
      </div>
    </section>

    <section id="profil-dinas" class="home-section">
      <div class="container">
        <article class="home-card full">
          <h3>Profil Dinas</h3>
          <p>Portal ini digunakan untuk memudahkan masyarakat dalam menyampaikan aduan dan membantu dinas terkait memantau penanganannya.</p>
        </article>
      </div>
    </section>

    <section id="faq" class="home-section">
      <div class="container">
        <article class="home-card full">
          <h3>FAQ</h3>
          <p><strong>Tanya:</strong> Apakah saya bisa cek status aduan? <strong>Jawab:</strong> Ya, status tersedia di dashboard masyarakat.</p>
        </article>
      </div>
    </section>

    <section id="kontak" class="home-section">
      <div class="container">
        <article class="home-card full">
          <h3>Kontak</h3>
          <p>Telepon: 081234567890 | Email: layanan@laporwargatuban.id</p>
        </article>
      </div>
    </section>
  </main>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
<?php
}
?>
