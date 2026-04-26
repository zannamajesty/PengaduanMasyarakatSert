<?php
session_start();
$id_p = $_SESSION['id_p'] ?? null;
if (empty($id_p)) {
  header("location:login_admin.php");
  exit;
}

include 'koneksi.php';
include 'header_admin.php';
?>

<section id="book-a-table" class="book-a-table" style="padding-top: 120px;">
  <div class="container">
    <div class="section-title">
      <h2>Data <span>Masyarakat</span></h2>
      <a href="cetak_pengaduan.php?bagian=layanan" class="book-a-table-btn scrollto">Cetak Laporan Excel</a>
    </div>

    <table id="data" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th style="text-align:center">Nama</th>
          <th style="text-align:center">NIK</th>
          <th style="text-align:center">Alamat</th>
          <th style="text-align:center">Jenis Kelamin</th>
          <th style="text-align:center">Nomor Telepon</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        $tp = mysqli_query($koneksi, "SELECT NIK_M, NAMA_M, JK_M, TELP_M, ALAMAT_M FROM masyarakat ORDER BY NAMA_M ASC");

        if ($tp) {
          while ($r = mysqli_fetch_assoc($tp)) {
        ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo htmlspecialchars($r['NAMA_M'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($r['NIK_M'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($r['ALAMAT_M'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($r['JK_M'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($r['TELP_M'], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
        <?php
            $i++;
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</section>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data').DataTable();
  });
</script>
</body>
</html>
