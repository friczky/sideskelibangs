<?php 
include '../../config/koneksi.php';

 $id = $_POST['id'];
 $tanggal 		 = $_POST['tanggal']; 
 $nama_barang 	 = $_POST['nb']; 
 $kode_barang 	 = $_POST['kb']; 
 $nup 			 = $_POST['nup']; 
 $merk 			 = $_POST['merk']; 
 $tahun_perolehan = $_POST['tp'];
 $nilai_perolehan = $_POST['np'];
 $keterangan 	 = $_POST['keterangan'];

$qUpdate = mysqli_query($connect, "UPDATE tb_inven_barang SET tanggal='$tanggal',nama_barang='$nama_barang',kode_barang='$kode_barang',nup='$nup',merk='$merk',tahun_perolehan='$tahun_perolehan',nilai='$nilai_perolehan',keterangan='$keterangan' WHERE id_barang='$id'");

if ($qUpdate) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Data Inventaris'); window.location.href='data-inventaris.php'</script>");
 } else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Data Inventaris'); window.location.href='data-inventaris.php'</script>");
}

?>