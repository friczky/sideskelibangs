<?php 
include '../../config/koneksi.php';

 $tanggal 		 = $_POST['tanggal']; 
 $nama_barang 	 = $_POST['nb']; 
 $kode_barang 	 = $_POST['kb']; 
 $nup 			 = $_POST['nup']; 
 $merk 			 = $_POST['merk']; 
 $tahun_perolehan = $_POST['tp']; 
 $kondisi		 = $_POST['kondisi']; 
 $nilai_perolehan = $_POST['np']; 
 $keterangan 	 = $_POST['keterangan'];

$sql = mysqli_query($connect, "INSERT INTO tb_inven_pm VALUES('','$tanggal','$nama_barang','$kode_barang','$nup','$merk','$tahun_perolehan','$nilai_perolehan','$kondisi','$keterangan')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
}

?>