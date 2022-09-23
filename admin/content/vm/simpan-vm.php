<?php
include '../../config/koneksi.php';

$visi = $_POST['visi'];
$misi = $_POST['misi'];

$sql = mysqli_query($connect, "INSERT INTO tb_vm VALUES('','$visi','$misi')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Tambah Data Visi - Misi Berhasil'); window.location.href='data-vm.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Tambah Data Visi - Misi Gagal'); window.location.href='data-vm.php'</script>");
}

?>