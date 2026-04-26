<!DOCTYPE html>
<html>
<head>
	<title>Import Excel</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table th,
		table td{
			border: 1px solid #3c3c3c;
			padding: 3px 8px;

		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan.xls");
	?>
	<?php if ($_GET['bagian'] == 'pengaduan' ) { ?>
		<table border="1">
			<thead>
				<tr>
					<th> No</th>
					<th style="text-align:center"> Nama</th>
					<th style="text-align:center"> NIK</th>
					<th style="text-align:center"> Tanggal Pengaduan</th>
					<th style="text-align:center"> Isi Pengaduan</th>
					<th style="text-align:center"> Status Pengaduan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				include 'koneksi.php';
				$tp = mysqli_query($koneksi, "SELECT * FROM `pengaduan` p JOIN `masyarakat` m WHERE p.`ID_M` = m.`ID_M` ORDER BY `p`.`TGL_PENGADUAN` DESC ");
				while ($r = mysqli_fetch_array($tp)) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $r['NAMA_M']; ?></td>
						<td><?php echo $r['NIK_M']; ?></td>
						<td><?php echo date("d - M - Y h:i:s \W\I\B", strtotime($r['TGL_PENGADUAN'])); ?></td>
						<td><?php echo $r['ISI_LAPORAN']; ?></td>
						<td><?php echo $r['STATUS_PENGADUAN']; ?></td>
					</tr>
					<?php $i = $i + 1; ?>
				<?php } ?>
			</tbody>
		</table>
	<?php   	} 
	else if ($_GET['bagian']=='layanan') { ?>
		<table border="1">
			<thead>
				<tr>
                      <th> No</th>
                      <th style="text-align:center"> Nama</th>
                      <th style="text-align:center"> NIK</th>
                      <th style="text-align:center"> Alamat</th>
                      <th style="text-align:center"> Jenis Kelamin</th>
                      <th style="text-align:center"> Nomor Telepon</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				include 'koneksi.php';
				$tp = mysqli_query($koneksi, "SELECT `NIK_M`, `NAMA_M`, `JK_M`, `TELP_M`, `ALAMAT_M` FROM `masyarakat` WHERE 1 ORDER BY NAMA_M ASC");
				while ($r = mysqli_fetch_array($tp)) {
					?>
					<tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $r['NAMA_M']; ?></td>
                        <td><?php echo $r['NIK_M']; ?></td>
                        <td><?php echo $r['ALAMAT_M']; ?></td>
                        <td><?php echo $r['JK_M']; ?></td>
                        <td><?php echo $r['TELP_M']; ?></td>
					</tr>
					<?php $i = $i + 1; ?>
				<?php } ?>
			</tbody>
		</table>
	<?php	}	else if ($_GET['bagian']=='transaksi') { ?>								
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th style="text-align:center">Tanggal</th>
					<th style="text-align:center">Pelanggan</th>
					<th style="text-align:center">Layanan</th>
					<th>Berat</th>
					<th>Total Harga</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				include 'koneksi.php';
				$tp = mysqli_query($koneksi, "SELECT * FROM TRANSAKSI t JOIN PELANGGAN p ON t.ID_PELANGGAN = p.ID_PELANGGAN JOIN LAYANAN l ON t.ID_LAYANAN = l.ID_LAYANAN ORDER BY t.TANGGAL_TRANSAKSI DESC  ");
				while ($r = mysqli_fetch_array($tp)) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $r['TANGGAL_TRANSAKSI']; ?></td>
						<td><?php echo $r['NAMA_PELANGGAN']; ?></td>
						<td><?php echo $r['NAMA_LAYANAN']; ?></td>
						<td><?php echo $r['BERAT_TRANSAKSI']; ?> Kg</td>
						<td>Rp. <?php echo $r['TOTAL_TRANSAKSI']; ?></td>

					</tr>
					<?php $i = $i + 1; ?>
				<?php } ?>
			</tbody>
		</table>
	<?php	} ?>

</body>
</html>