<?php 
include '../../config/koneksi.php';

$id = $_GET['id'];
$qHapus = mysqli_query($connect, "DELETE FROM tb_penduduk WHERE nik = '$id'");

if($qHapus){
	header('location:data-penduduk.php');
} else {
	header('location:data-penduduk.php?pesan=gagal-hapus-data');
}

?>