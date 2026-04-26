<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['id_m']);
unset($_SESSION['id_p']);
unset($_SESSION['nama_p']);
unset($_SESSION['nama_m']);
?>
<?php
header('location:index.php?logout');
echo '<script language="javascript">';
echo 'alert("Anda Berhasil Log out !!!")';
echo '</script>';
?>