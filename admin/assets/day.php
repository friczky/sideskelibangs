<?php
$tanggal = date('d', strtotime($row['tgl_lahir']));
$bulan = date('F', strtotime($row['tgl_lahir']));
$tahun = date('Y', strtotime($row['tgl_lahir']));
$bulanIndo = array(
	'January' => 'Januari',
	'February' => 'Februari',
	'March' => 'Maret',
	'April' => 'April',
	'May' => 'Mei',
	'June' => 'Juni',
	'July' => 'Juli',
	'August' => 'Agustus',
	'September' => 'September',
	'October' => 'Oktober',
	'November' => 'November',
	'December' => 'Desember'
);


?>