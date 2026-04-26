<?php
session_start();
$id_p = $_SESSION['id_p'] ?? null;
if (empty($id_p)) {
  header("location:login_admin.php?switch=1");
  exit;
}

include 'koneksi.php';
include 'header_admin.php';

$belum_diproses = mysqli_query($koneksi, "SELECT ID_PENGADUAN FROM pengaduan WHERE STATUS_PENGADUAN='Belum diproses'");
$dalam_proses = mysqli_query($koneksi, "SELECT ID_PENGADUAN FROM pengaduan WHERE STATUS_PENGADUAN='Dalam proses'");
$selesai = mysqli_query($koneksi, "SELECT ID_PENGADUAN FROM pengaduan WHERE STATUS_PENGADUAN='Selesai'");
$jumlah_laki = mysqli_query($koneksi, "SELECT ID_M FROM masyarakat WHERE JK_M='Laki-laki'");
$jumlah_perempuan = mysqli_query($koneksi, "SELECT ID_M FROM masyarakat WHERE JK_M='Perempuan'");

$totalBelum = $belum_diproses ? mysqli_num_rows($belum_diproses) : 0;
$totalProses = $dalam_proses ? mysqli_num_rows($dalam_proses) : 0;
$totalSelesai = $selesai ? mysqli_num_rows($selesai) : 0;
$totalLaki = $jumlah_laki ? mysqli_num_rows($jumlah_laki) : 0;
$totalPerempuan = $jumlah_perempuan ? mysqli_num_rows($jumlah_perempuan) : 0;
$totalAduan = $totalBelum + $totalProses + $totalSelesai;
?>

<section id="hero" class="admin-hero">
  <div class="container">
    <div class="admin-hero-card">
      <h2>Dashboard Admin</h2>
      <p>Kelola data pengaduan masyarakat dengan tampilan ringkas dan terpusat.</p>
      <div class="admin-stats">
        <div>
          <h4>Total Aduan</h4>
          <strong><?php echo $totalAduan; ?></strong>
        </div>
        <div>
          <h4>Belum Diproses</h4>
          <strong><?php echo $totalBelum; ?></strong>
        </div>
        <div>
          <h4>Dalam Proses</h4>
          <strong><?php echo $totalProses; ?></strong>
        </div>
        <div>
          <h4>Selesai</h4>
          <strong><?php echo $totalSelesai; ?></strong>
        </div>
      </div>
      <a href="proses_logout.php" onclick="return confirm('Apakah anda mau keluar?')" class="book-a-table-btn">Logout Admin</a>
    </div>
  </div>
</section>

<section id="book-a-table" class="book-a-table">
  <div class="container">
    <div class="section-title">
      <h2>Grafik <span>Laporan Terkini</span></h2>
    </div>

    <div class="chart-grid">
      <div class="chart-card compact">
        <h3>Status Pengaduan</h3>
        <div class="chart-box">
          <canvas id="statusChart"></canvas>
        </div>
      </div>

      <div class="chart-card compact">
        <h3>Jenis Kelamin Pelapor</h3>
        <div class="chart-box">
          <canvas id="jkChart"></canvas>
        </div>
      </div>
    </div>

    <div class="report-actions">
      <a href="laporan_pengaduan.php" class="btn btn-primary btn-sm">Cetak Data Pengaduan</a>
      <a href="laporan_pengguna.php" class="btn btn-primary btn-sm">Cetak Data Masyarakat</a>
    </div>
  </div>
</section>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
  const statusCtx = document.getElementById('statusChart');
  const jkCtx = document.getElementById('jkChart');

  if (statusCtx) {
    new Chart(statusCtx, {
      type: 'doughnut',
      data: {
        labels: ['Belum diproses', 'Dalam proses', 'Selesai'],
        datasets: [{
          data: [<?php echo $totalBelum; ?>, <?php echo $totalProses; ?>, <?php echo $totalSelesai; ?>],
          backgroundColor: ['#8cc7ff', '#4f8ef7', '#1e4ba5'],
          borderColor: ['#8cc7ff', '#4f8ef7', '#1e4ba5'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'bottom'
          }
        }
      }
    });
  }

  if (jkCtx) {
    new Chart(jkCtx, {
      type: 'doughnut',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          data: [<?php echo $totalLaki; ?>, <?php echo $totalPerempuan; ?>],
          backgroundColor: ['#3d7ae6', '#9ec5ff'],
          borderColor: ['#3d7ae6', '#9ec5ff'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'bottom'
          }
        }
      }
    });
  }
</script>
</body>
</html>
