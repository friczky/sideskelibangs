<?php 

include ('../../config/koneksi.php');

$tgl_upload = $_POST['tgl_upload'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];


$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran   = $_FILES['foto']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='data-berita.php'</script>");

} elseif ($ukuran < 1044070){
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

    $sql = mysqli_query($connect,"INSERT INTO tb_berita VALUES('','$judul','$tgl_upload','$kategori','$penulis','$deskripsi','$xx')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Berita'); window.location.href='data-berita.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Berita'); window.location.href='data-berita.php'</script>");
    }

} elseif ($ukuran > 1044070) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='data-berita.php'</script>");
}




?>