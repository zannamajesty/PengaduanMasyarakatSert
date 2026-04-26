<?php
// Nonaktifkan exception mysqli agar koneksi bisa dicoba dengan beberapa kredensial.
mysqli_report(MYSQLI_REPORT_OFF);

$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbPort = (int) (getenv('DB_PORT') ?: 3306);
$dbName = getenv('DB_NAME') ?: 'pengaduan';

// Prioritas: env vars, lalu fallback umum Laragon.
$candidates = [];
$envUser = getenv('DB_USER');
$envPass = getenv('DB_PASS');

if ($envUser !== false) {
	$candidates[] = [$envUser, $envPass !== false ? $envPass : ''];
}

$candidates[] = ['root', ''];
$candidates[] = ['root', 'root'];

/** @var mysqli|null $koneksi */
$koneksi = null;
$lastError = '';

foreach ($candidates as $candidate) {
	$user = $candidate[0];
	$pass = $candidate[1];

	try {
		$conn = @mysqli_connect($dbHost, $user, $pass, $dbName, $dbPort);
		if ($conn) {
			$koneksi = $conn;
			break;
		}
		$lastError = mysqli_connect_error();
	} catch (Throwable $e) {
		$lastError = $e->getMessage();
	}
}

if (!$koneksi) {
	http_response_code(500);
	die(
		'Koneksi database gagal. ' .
		'Cek username/password MySQL kamu di koneksi.php atau set DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS. ' .
		'Detail: ' . htmlspecialchars($lastError, ENT_QUOTES, 'UTF-8')
	);
}

/** @var mysqli $koneksi */
mysqli_set_charset($koneksi, 'utf8mb4');
