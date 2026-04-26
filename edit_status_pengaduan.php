<?php
session_start();
$id_p = $_SESSION['id_p'];
if (empty($id_p)) {
header("location:login_admin.php");
}else{ 
include 'header_admin.php';
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Update Sta</span>tus Pengaduan</h2>
                    <?php
                    include 'koneksi.php';
                    $id_pengaduan = $_GET['id'];
                    $tp = mysqli_query($koneksi, "SELECT * FROM `pengaduan` p JOIN `masyarakat` m WHERE p.`ID_M` = m.`ID_M` AND p.`id_pengaduan`='$id_pengaduan'");
                    while ($r = mysqli_fetch_array($tp)) {
                      ?>
                <form action="proses_edit_status.php" method="post" role="form">
                    <input type="hidden" name="id" value="<?php echo $id_pengaduan; ?>">
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="nik" id="subject" placeholder="NIK" value="<?php echo $r['NIK_M']; ?>" readonly required>
                  </div>
                  <br>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="nama" id="subject" value="<?php echo $r['NAMA_M']; ?>"  readonly required>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="username" class="form-control" id="name" value="<?php echo date("d - M - Y h:i:s \W\I\B", strtotime($r['TGL_PENGADUAN'])); ?>" placeholder="" readonly required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="text" class="form-control" name="password" id="email" placeholder="Password" value="<?php echo $r['ISI_LAPORAN']; ?>" readonly required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <select class="form-control" name="status" id="subject" required>
                      <?php if ($r['STATUS_PENGADUAN'] == "Belum diproses" ){?>
                      <option value="Belum diproses" selected>Belum diproses</option>
                      <option value="Dalam proses">Dalam proses</option>
                      <option value="Selesai">Selesai</option>
                     <?php }elseif ($r['STATUS_PENGADUAN'] == "Dalam proses") {?>
                       
                      <option value="Belum diproses">Belum diproses</option>
                      <option value="Dalam proses" selected>Dalam proses</option>
                      <option value="Selesai">Selesai</option>
                     <?php }elseif ($r['STATUS_PENGADUAN'] == "Selesai") {?>                 
                      <option value="Belum diproses">Belum diproses</option>
                      <option value="Dalam proses">Dalam proses</option>
                      <option value="Selesai" selected>Selesai</option>
                     <?php } ?>
                        
                    </select>
                  </div>
                  <br>
                  <center><input type="submit" class="btn btn-outline-light" value="Daftar"></input></center>
                </form>
                    <?php } ?>

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