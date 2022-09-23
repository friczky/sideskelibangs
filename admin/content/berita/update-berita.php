<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$judul = $_POST['judul'];
$tgl_upload = $_POST['tgl_upload'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :

    // Ambil data foto yang dipilih dari form
    $sumber = $_FILES['foto']['name'];
    $nama_gambar = $_FILES['foto']['tmp_name'];
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload

    $fotobaru = date('dmYHis').$sumber;

    // Set path folder tempat menyimpan fotonya

    $path = "gambar/".$fotobaru;

    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        // Query untuk menampilkan data user berdasarkan id_user yang dikirim
        $query = mysqli_query($connect,"SELECT * FROM tb_berita WHERE id_berita='$id'");
        $data = mysqli_fetch_array($query); // Ambil data dari hasil eksekusi $sql

        // Cek apakah file gambar sebelumnya ada di folder foto
        if(is_file("gambar/".$data['foto'])) // Jika gambar ada

            unlink("gambar/".$data['foto']); // Hapus file gambar sebelumnya yang ada di folder images

        // Proses ubah data ke Database
            $sql = mysqli_query($connect,"UPDATE tb_berita SET judul='$judul', tgl_upload='$tgl_upload',kategori='$kategori',penulis='$penulis',deskripsi='$deskripsi', foto='$fotobaru' WHERE id_berita='$id' ");

        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Berita'); window.location.href='data-berita.php'</script>"); // Redirect ke halaman index.php
        }else{
            // Jika Gagal, Lakukan :
         echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Berita'); window.location.href='data-berita.php'</script>");
     }
 }else{
        // Jika gambar gagal diupload, Lakukan :
    echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 
    location = 'data-berita.php'; 
    </script>";
}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $sql = mysqli_query($connect,"UPDATE tb_berita SET judul='$judul', tgl_upload='$tgl_upload',kategori='$kategori',penulis='$penulis',deskripsi='$deskripsi' WHERE id_berita='$id' ");

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
     echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Berita'); window.location.href='data-berita.php'</script>");
 }else{
    // Jika Gagal, Lakukan :
     echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Berita'); window.location.href='data-berita.php'</script>");

 }
}

?>