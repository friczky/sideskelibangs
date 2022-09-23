<?php 
include ('../../config/koneksi.php');

$id 	= $_POST['id'];
$syarat = $_POST['syarat'];

$sql = mysqli_query($connect, "UPDATE tb_syarat SET syarat='$syarat' WHERE id_syarat='$id'");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Syarat');
		window.location.href='data-syarat.php'</script>");
}else{
echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Berita'); window.location.href='struktur.php'</script>");
}

?>