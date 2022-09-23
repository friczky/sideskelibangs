<?php
 include ('../../config/koneksi.php');

 $id = $_GET['id'];
 $qHapus = mysqli_query($connect, "DELETE FROM tb_surat WHERE id_surat='$id'");
 if($qHapus){
		header('location:data-surat.php');
	} else {
		header('location:data-surat.php?pesan=gagal-menghapus');
	}
?>