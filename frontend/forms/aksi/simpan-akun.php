<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$kontak = $_POST['kontak'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$ceknik = mysqli_num_rows (mysqli_query($connect,"SELECT nik FROM tbl_user WHERE nik='$_POST[nik]'"));
if ($ceknik > 0) {
 echo '<script language="javascript"> alert ("NIK Sudah Terdaftar"); window.location="../login.php?";</script>';
 //exit();

}else{
        $data = mysqli_query($connect, "INSERT INTO tbl_user VALUES('','$nama','$nik','$kontak','$email','$password')");

if ($data) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Registrasi Berhasil'); window.location.href='../login.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Registrasi Gagal'); window.location.href='../login.php'</script>");
    }
}

?>

