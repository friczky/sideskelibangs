<?php
	include ('../../config/koneksi.php');

	$id		= $_GET['id'];
	$pilih = mysqli_query($connect, "SELECT * FROM tb_pemerintah WHERE id_pemerintah='$id'");
	$data = mysqli_fetch_array($pilih);
	$foto = $data['foto'];
	unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak
	$qHapus		= mysqli_query($connect, "DELETE FROM tb_pemerintah WHERE id_pemerintah = '$id'");

	if($qHapus){
		header('location:struktur.php');
	} else {
		header('location:struktur.php?pesan=Gagal-Di Hapus');
	}
?>