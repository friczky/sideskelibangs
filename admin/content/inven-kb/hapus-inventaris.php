<?php
	include ('../../config/koneksi.php');

	$id		= $_GET['id'];
	$qHapus		= mysqli_query($connect, "DELETE FROM tb_inven_kb WHERE id_kb = '$id'");

	if($qHapus){
		header('location:data-inventaris.php');
	} else {
		header('location:data-inventaris.php?pesan=gagal-menghapus');
	}
?>