<?php 
include '../../config/koneksi.php';

$no_kk = $_POST['no_kk']; 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$shdk = $_POST['shdk'];
$agama = $_POST['agama'];
$dusun = $_POST['dusun'];
$rw = $_POST['rw'];
$rt = $_POST['rt'];
$pend_kk = $_POST['pend_kk'];
$pekerjaan = $_POST['pekerjaan'];
$status_perkawinan = $_POST['sts_perkawinan'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$ayah = $_POST['nama_ayah'];
$ibu = $_POST['nama_ibu'];


$sql = mysqli_query($connect, "INSERT INTO tb_penduduk VALUES('','$no_kk','$nik','$nama','$tempat_lahir','$tgl_lahir','$jk','$shdk','$agama','$pend_kk','$pekerjaan','$ayah','$ibu','$dusun','$rt','$rw','$status_perkawinan','$kewarganegaraan')");

if ($sql) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Tambah Data Penduduk Berhasil'); window.location.href='data-penduduk.php'</script>");
} else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Tambah Data Penduduk Gagal'); window.location.href='data-penduduks.php'</script>");
}

?>