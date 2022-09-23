<?php 
include ('../../config/koneksi.php');

$syarat = $_POST['syarat'];
$sql = mysqli_query($connect, "INSERT INTO tb_syarat VALUES('','$syarat')");
if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Syarat'); window.location.href='data-syarat.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Syarat'); window.location.href='data-syarat.php'</script>");
}
?>