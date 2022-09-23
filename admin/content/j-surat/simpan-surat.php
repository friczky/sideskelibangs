<?php
include ('../../config/koneksi.php');

$nama_surat = $_POST['nama_surat'];
$singkatan  = $_POST['singkatan'];
$syarat = $_POST['syarat'];
$chk="";
foreach($syarat as $chk1)  
{  
	$chk .= $chk1.",";  
}  

$sql = mysqli_query($connect, "INSERT INTO tb_surat VALUES('','$nama_surat','$singkatan','$chk')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Syarat'); window.location.href='data-surat.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Syarat'); window.location.href='data-surat.php'</script>");
}
?>