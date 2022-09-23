<?php 
include ('../../config/koneksi.php');
$id = $_GET['id'];

$qHapus		= mysqli_query($connect, "DELETE FROM tb_syarat WHERE id_syarat = '$id'");

if($qHapus){
	header('location:data-syarat.php');
} else {
	header('location:data-syarat.php?pesan=Gagal-Di Hapus');
}

?>