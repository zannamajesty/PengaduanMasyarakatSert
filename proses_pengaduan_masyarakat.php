<?php
// menghubungkan php dengan koneksi database
include 'koneksi.php';
session_start();
// menangkap data yang dikirim dari form login
$isi_laporan = $_POST['isi_laporan'];
$id_m = $_SESSION['id_m'];
date_default_timezone_set('Asia/Jakarta');
$datetime = date('Y-m-d H:i:s');

// menyeleksi data user dengan username dan password yang sesuai
$pengaduan = mysqli_query($koneksi, "INSERT INTO pengaduan values (NULL, '$id_m','$datetime','$isi_laporan', 'Belum diproses')");
if ($pengaduan) {
	header("location:dashboard_masyarakat.php");
} else {
	header("location:dashboard_masyarakat.php");
    printf("Error: %s\n", mysqli_error($pengaduan));
	echo 'Gagal menambahkan data! ';
}
