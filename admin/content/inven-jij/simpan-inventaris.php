<?php 
include '../../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$jenis_jij = $_POST['jenis_jij'];
$kode_barang = $_POST['kb'];
$nup = $_POST['nup'];
$ukuran = $_POST['ukuran'];
$tahun_perolehan = $_POST['tp'];
$type = $_POST['type'];
$nilai = $_POST['np'];
$keterangan = $_POST['keterangan'];

$sql = mysqli_query($connect, "INSERT INTO tb_inven_jij VALUES('','$tanggal','$jenis_jij','$kode_barang','$nup','$ukuran','$tahun_perolehan','$type','$nilai','$keterangan')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
}

?>