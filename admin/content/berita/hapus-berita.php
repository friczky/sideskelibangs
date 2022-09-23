<?php
	include ('../../config/koneksi.php');

	$id		= $_GET['id'];
	$pilih = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita='$id'");
	$data = mysqli_fetch_array($pilih);
	$foto = $data['foto'];
	unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak
	$qHapus		= mysqli_query($connect, "DELETE FROM tb_berita WHERE id_berita = '$id'");

	if($qHapus){
		header('location:data-berita.php');
	} else {
		header('location:data-berita.php?pesan=Gagal-Di Hapus');
	}
?>