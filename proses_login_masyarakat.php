<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header("location:login_masyarakat.php");
	exit;
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($username === '' || $password === '') {
	header("location:login_masyarakat.php?pesan=kosong");
	exit;
}

$sql = "SELECT ID_M, NAMA_M FROM masyarakat WHERE USERNAME_M = ? AND PASSWORD_M = ? LIMIT 1";
$stmt = mysqli_prepare($koneksi, $sql);

if (!$stmt) {
	header("location:login_masyarakat.php?pesan=db");
	exit;
}

mysqli_stmt_bind_param($stmt, "ss", $username, $password);

if (!mysqli_stmt_execute($stmt)) {
	mysqli_stmt_close($stmt);
	header("location:login_masyarakat.php?pesan=db");
	exit;
}

mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
	mysqli_stmt_bind_result($stmt, $id_m, $nama_m);
	mysqli_stmt_fetch($stmt);
	mysqli_stmt_close($stmt);

	$_SESSION['username'] = $username;
	$_SESSION['nama_m'] = $nama_m;
	$_SESSION['id_m'] = $id_m;
	unset($_SESSION['id_p']);
	unset($_SESSION['nama_p']);
	header("location:dashboard_masyarakat.php");
	exit;
} else {
	mysqli_stmt_close($stmt);
	header("location:login_masyarakat.php?pesan=gagal");
	exit;
}
