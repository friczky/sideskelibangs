<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'aksi/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['nik'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect,"SELECT * FROM tbl_user WHERE nik='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nik'] = $username;
	$_SESSION['status'] = "login";
	header("location:surat/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>