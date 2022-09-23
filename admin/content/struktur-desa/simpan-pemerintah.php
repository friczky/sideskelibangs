<?php 
include ('../../config/koneksi.php');

$nama 			= $_POST['nama'];
$jabatan 		= $_POST['jabatan'];
$tempat_lahir 	= $_POST['tempat_lahir'];
$tgl_lahir 		= $_POST['tgl_lahir'];
$agama 			= $_POST['agama'];

$rand 		= rand();
$ekstensi 	= array('png','jpg','jpeg');
$filename 	= $_FILES['foto']['name'];
$ukuran   	= $_FILES['foto']['size'];
$image 		= pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
	echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='struktur.php'</script>");

} elseif ($ukuran < 1044070){
	$xx = $rand.'_'.$filename;
	move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

	$sql = mysqli_query($connect, "INSERT INTO tb_pemerintah VALUES('','$nama','$tempat_lahir','$tgl_lahir','$agama','$jabatan','$xx')");


	if ($sql) {
		echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Berita'); window.location.href='struktur.php'</script>");
	} else {
		echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Berita'); window.location.href='struktur.php'</script>");
	}

} elseif ($ukuran > 1044070) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='struktur.php'</script>");
}

?>