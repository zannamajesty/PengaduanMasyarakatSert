<?php
session_start();
if (isset($_SESSION['id_m'])) {
  header('location:dashboard_masyarakat.php');
}elseif (isset($_SESSION['id_p'])) {
  header('location:dashboard_admin.php');
}else {
  
 include 'header_luar.php';?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Daftar</span> Masyarakat</h2>

                <form action="proses_daftar_masyarakat.php" method="post" role="form">

                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="nik" id="subject" placeholder="NIK" required>
                  </div>
                  <br>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="nama" id="subject" placeholder="Nama" required>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="username" class="form-control" id="name" placeholder="Username" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="password" class="form-control" name="password" id="email" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <select class="form-control" name="jk" id="subject" required>
                      <option value="Laki-laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="no_tlp" id="subject" placeholder="No Telepon" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="alamat" id="subject" placeholder="Alamat" required>
                  </div>
                  <br>
                  <center><input type="submit" class="btn btn-outline-light" value="Daftar"></input></center>
                </form>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
}
?>