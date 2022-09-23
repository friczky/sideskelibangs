<?php 
include '../../config/koneksi.php';

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$jenis_bangunan = $_POST['jb'];
$kode_barang = $_POST['kb'];
$nup = $_POST['nup'];
$luas = $_POST['luas'];
$tahun_perolehan = $_POST['tp'];
$type = $_POST['type'];
$nilai_perolehan = $_POST['np'];
$keterangan = $_POST['keterangan'];

$qUpdate 	= mysqli_query($connect, "UPDATE tb_inven_bangunan SET 
															tanggal='$tanggal',
															jenis_bangunan='$jenis_bangunan',
															kode_barang='$kode_barang',
															nup='$nup',
															luas='$luas',
															tahun_perolehan='$tahun_perolehan',
															type_bangunan='$type',
															nilai='$nilai_perolehan',
															keterangan='$keterangan'
															WHERE id_bangunan='$id'");

if ($qUpdate) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Data Aset'); window.location.href='data-inventaris.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Data Aset'); window.location.href='data-inventaris.php'</script>");
}

?>