<?php
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form daftar masyarakat
$id = $_POST['id'];
$status = $_POST['status'];
// menyeleksi data user dengan username dan password yang sesuai
$pengaduan = mysqli_query($koneksi, "UPDATE `pengaduan` SET `STATUS_PENGADUAN` = '$status' WHERE `pengaduan`.`ID_PENGADUAN` = '$id'");
if ($pengaduan) {
	header("location:data_pengaduan_admin.php");
		echo '<script language="javascript">';
	echo 'alert("Status Berhasil dirubah !!!")';
	echo '</script>';
} else {

	header("location:edit_masyarakat.php");
    printf("Error: %s\n", mysqli_error($pengaduan));
	echo 'Gagal menambahkan data! ';
}