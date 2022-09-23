<?php 
include '../../config/koneksi.php';

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama_barang = $_POST['nb'];
$kode_barang = $_POST['kb'];
$nup = $_POST['nup'];
$luas_tanah = $_POST['luas'];
$tahun_perolehan = $_POST['tp'];
$bukti_pemilik = $_POST['bk'];
$nilai_perolehan = $_POST['np'];
$keterangan = $_POST['keterangan'];

$qUpdate 	= mysqli_query($connect, "UPDATE tb_tanah SET 
															tanggal='$tanggal',
															nama_barang='$nama_barang',
															kode_barang='$kode_barang',
															nup='$nup',
															luas_tanah='$luas_tanah',
															tahun_perolehan='$tahun_perolehan',
															bukti='$bukti_pemilik',
															nilai='$nilai_perolehan',
															keterangan='$keterangan'
															WHERE id_tanah='$id'");

if ($qUpdate) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Data Inventaris'); window.location.href='data-inventaris.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Data Inventaris'); window.location.href='data-inventaris.php'</script>");
}

?>