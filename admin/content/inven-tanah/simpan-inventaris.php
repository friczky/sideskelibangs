<?php 
include '../../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$nama_barang = $_POST['nb'];
$kode_barang = $_POST['kb'];
$nup = $_POST['nup'];
$luas_tanah = $_POST['luas'];
$tahun_perolehan = $_POST['tp'];
$bukti_pemilik = $_POST['bk'];
$nilai_perolehan = $_POST['np'];
$keterangan = $_POST['keterangan'];

$sql = mysqli_query($connect, "INSERT INTO tb_tanah VALUES('','$tanggal','$nama_barang','$kode_barang','$nup','$luas_tanah','$tahun_perolehan','$bukti_pemilik','$nilai_perolehan','$keterangan')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Tambah Inventaris'); window.location.href='data-inventaris.php'</script>");
}

?>