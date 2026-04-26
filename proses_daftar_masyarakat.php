<?php
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form daftar masyarakat
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
// menyeleksi data user dengan username dan password yang sesuai
$pengaduan = mysqli_query($koneksi, "INSERT INTO masyarakat values (NULL, '$nik','$nama','$username', '$password', '$jk', '$no_tlp', '$alamat')");
if ($pengaduan) {
	header("location:login_masyarakat.php");
	echo '<script language="javascript">';
	echo 'alert("Berhasil mendaftar, Silahkan Login")';
	echo '</script>';
} else {

	header("location:daftar_masyarakat.php");
	printf("Error: %s\n", mysqli_error($pengaduan));
	echo 'Gagal menambahkan data! ';
}