<?php
include 'koneksi.php';

$autoloadCandidates = [
    __DIR__ . '/vendor/autoload.php',
    __DIR__ . '/mpdf_v8.0.3-master/vendor/autoload.php',
];

$mpdfAvailable = false;
foreach ($autoloadCandidates as $autoloadPath) {
    if (file_exists($autoloadPath)) {
        require_once $autoloadPath;
        if (class_exists('\\Mpdf\\Mpdf')) {
            $mpdfAvailable = true;
            break;
        }
    }
}

ob_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pengaduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 24px;
            color: #1f2937;
        }
        h2 {
            text-align: center;
            margin-bottom: 16px;
        }
        .notice {
            margin: 0 auto 16px;
            max-width: 900px;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #f59e0b;
            background: #fffbeb;
            color: #92400e;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th,
        td {
            border: 1px solid #111827;
            padding: 8px;
            vertical-align: top;
            font-size: 13px;
        }
        th {
            background: #e5e7eb;
            text-align: center;
        }
        @media print {
            .notice {
                display: none;
            }
        }
    </style>
</head>
<body>
    <?php if (!$mpdfAvailable) { ?>
        <div class="notice">
            mPDF tidak ditemukan. Laporan ditampilkan dalam mode cetak browser.
        </div>
    <?php } ?>

    <h2>Laporan Data Pengaduan</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal Pengaduan</th>
                <th>Isi Pengaduan</th>
                <th>Status Pengaduan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $tp = mysqli_query($koneksi, "SELECT p.TGL_PENGADUAN, p.ISI_LAPORAN, p.STATUS_PENGADUAN, m.NAMA_M, m.NIK_M FROM pengaduan p JOIN masyarakat m ON p.ID_M = m.ID_M ORDER BY p.TGL_PENGADUAN DESC");

            if ($tp) {
                while ($r = mysqli_fetch_assoc($tp)) {
                    $tanggal = '-';
                    if (!empty($r['TGL_PENGADUAN']) && $r['TGL_PENGADUAN'] !== '0000-00-00 00:00:00') {
                        $timestamp = strtotime($r['TGL_PENGADUAN']);
                        if ($timestamp !== false) {
                            $tanggal = date("d - M - Y H:i:s", $timestamp);
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
                </tr>
            <?php
                    $i++;
                }
            } else {
            ?>
                <tr>
                    <td colspan="6">Gagal mengambil data pengaduan: <?php echo htmlspecialchars(mysqli_error($koneksi), ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php
$html = ob_get_clean();

if ($mpdfAvailable) {
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8']);
    $mpdf->WriteHTML($html);
    $mpdf->Output('laporan_pengaduan.pdf', \Mpdf\Output\Destination::INLINE);
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
echo $html;
echo '<script>window.print();</script>';
?>
