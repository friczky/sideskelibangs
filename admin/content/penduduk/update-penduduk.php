<?php
include ('../../config/koneksi.php');

$id = $_POST['id']; 
$nik = $_POST['nik']; 
$no_kk = $_POST['no_kk']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$agama = $_POST['agama']; 
$dusun = $_POST['dusun']; 
$rw = $_POST['rw']; 
$rt = $_POST['rt'];  
$pend_kk = $_POST['pend_kk']; 
$pekerjaan = $_POST['pekerjaan'];        
$tgl_lahir = $_POST['tgl_lahir']; 
$tempat_lahir = $_POST['tempat_lahir']; 
$status_perkawinan = $_POST['sts_perkawinan']; 
$shdk = $_POST['shdk']; 
$nama_ayah = $_POST['nama_ayah']; 
$nama_ibu = $_POST['nama_ibu']; 
$kewarganegaraan = $_POST['kewarganegaraan']; 

$qUpdate 	= "UPDATE tb_penduduk SET no_kk = '$no_kk',
nik = '$nik',  
nama = '$nama',                                         
tmp_lahir = '$tempat_lahir',
tgl_lahir = '$tgl_lahir', 
jk = '$jk', 
shdk = '$shdk',
agama = '$agama', 
pendidikan = '$pend_kk',
pekerjaan = '$pekerjaan',
ayah = '$nama_ayah', 
ibu = '$nama_ibu', 
dusun = '$dusun', 
rt ='$rt',
rw ='$rw',
sts_perkawinan = '$status_perkawinan',
kewarganegaraan = '$kewarganegaraan' 
WHERE id_penduduk ='$id'";

$update 	= mysqli_query($connect, $qUpdate);

if($update){
  echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Data Penduduk'); window.location.href='data-penduduk.php'</script>");
}else{
  echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Data Penduduk'); window.location.href='data-penduduk.php'</script>");
}
?>