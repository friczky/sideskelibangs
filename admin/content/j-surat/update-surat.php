<?php
include ('../../config/koneksi.php');

$id         = $_POST['id'];     
$nama_surat = $_POST['nama_surat'];
$singkatan  = $_POST['singkatan'];
$syarat     = $_POST['syarat'];
$chk1       ="";
foreach($syarat as $chk1)  
{  
  $chk .= $chk1.",";  
}  

$sql = mysqli_query($connect, "UPDATE tb_surat SET nama_surat='$nama_surat',singkatan='$singkatan',syarat='$chk' WHERE id_surat='$id'");

if ($sql) {
  echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Syarat'); window.location.href='data-surat.php'</script>");
} else {
  echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Syarat'); window.location.href='data-surat.php'</script>");
}
?>