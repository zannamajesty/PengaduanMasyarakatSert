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
      <h2>Data <span>Pengaduan</span></h2>
      <a href="cetak_pengaduan.php?bagian=pengaduan" class="book-a-table-btn scrollto">Cetak Laporan Excel</a>
    </div>

    <table id="data" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th style="text-align:center">Nama</th>
          <th style="text-align:center">NIK</th>
          <th style="text-align:center">Tanggal Pengaduan</th>
          <th style="text-align:center">Isi Pengaduan</th>
          <th style="text-align:center">Status Pengaduan</th>
          <th style="text-align:center">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        $tp = mysqli_query($koneksi, "SELECT p.ID_PENGADUAN, p.TGL_PENGADUAN, p.ISI_LAPORAN, p.STATUS_PENGADUAN, m.NAMA_M, m.NIK_M FROM pengaduan p JOIN masyarakat m ON p.ID_M = m.ID_M ORDER BY p.TGL_PENGADUAN DESC");

        if ($tp) {
          while ($r = mysqli_fetch_assoc($tp)) {
            $tanggal = '-';
            if (!empty($r['TGL_PENGADUAN']) && $r['TGL_PENGADUAN'] !== '0000-00-00 00:00:00') {
              $timestamp = strtotime($r['TGL_PENGADUAN']);
              if ($timestamp !== false) {
                $tanggal = date("d - M - Y H:i:s", $timestamp) . ' WIB';
              }
            }
        ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo htmlspecialchars($r['NAMA_M'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($r['NIK_M'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($r['ISI_LAPORAN'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars((string) $r['STATUS_PENGADUAN'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td style="text-align:center">
                <a href="edit_status_pengaduan.php?id=<?php echo (int) $r['ID_PENGADUAN']; ?>">Ubah Status</a>
              </td>
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
