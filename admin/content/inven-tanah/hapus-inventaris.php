<?php
	include ('../../config/koneksi.php');

	$id		= $_GET['id'];
	$qHapus		= mysqli_query($connect, "DELETE FROM tb_tanah WHERE id_tanah = '$id'");

	if($qHapus){
		header('location:data-inventaris.php');
	} else {
		header('location:data-inventaris.php?pesan=gagal-menghapus');
	}
?>