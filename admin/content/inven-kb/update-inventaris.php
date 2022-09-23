<?php 
include '../../config/koneksi.php';

 $id = $_POST['id'];
 $tanggal 		 = $_POST['tanggal']; 
 $nama_barang 	 = $_POST['nb']; 
 $kode_barang 	 = $_POST['kb']; 
 $nup 			 = $_POST['nup']; 
 $merk 			 = $_POST['merk']; 
 $tahun_perolehan = $_POST['tp']; 
 $nopol 		 = $_POST['nopol']; 
 $noMesin 		 = $_POST['noMesin']; 
 $noRangka 		 = $_POST['noRangka']; 
 $noBpkb 		 = $_POST['noBpkb']; 
 $nilai_perolehan = $_POST['np']; 
 $kondisi		 = $_POST['kondisi']; 
 $keterangan 	 = $_POST['keterangan'];

$qUpdate = mysqli_query($connect, "UPDATE tb_inven_kb SET tanggal='$tanggal',nama_barang='$nama_barang',kode_barang='$kode_barang',nup='$nup',merk='$merk',tahun_perolehan='$tahun_perolehan',nopol='$nopol',nomesin='$noMesin',norangka='$noRangka',nobpkb='$noBpkb',nilai='$nilai_perolehan',kondisi='$kondisi',keterangan='$keterangan' WHERE id_kb='$id'");

if ($qUpdate) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Data Aset'); window.location.href='data-inventaris.php'</script>");
 } else {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Data Aset'); window.location.href='data-inventaris.php'</script>");
}

?>