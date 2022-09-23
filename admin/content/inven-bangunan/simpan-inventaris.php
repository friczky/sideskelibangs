<?php 
include '../../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$jenis_bangunan = $_POST['jb'];
$kode_barang = $_POST['kb'];
$nup = $_POST['nup'];
$luas_tanah = $_POST['luas'];
$tahun_perolehan = $_POST['tp'];
$type = $_POST['type'];
$nilai_perolehan = $_POST['np'];
$keterangan = $_POST['keterangan'];

$sql = mysqli_query($connect, "INSERT INTO tb_inven_bangunan VALUES('','$tanggal','$jenis_bangunan','$kode_barang','$nup','$luas_tanah','$tahun_perolehan','$type','$nilai_perolehan','$keterangan')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
}

?>