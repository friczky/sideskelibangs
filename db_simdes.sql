-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2022 pada 14.59
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `nik`, `kontak`, `email`, `password`) VALUES
(1, 'Burhanudin', '1222010407000002', '08224646474', 'burhan@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'Rafa', '6171046306800010', '082127355161', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_upload` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `tgl_upload`, `kategori`, `penulis`, `deskripsi`, `foto`) VALUES
(4, 'Survey Mendampingi Konsultan Perencanaan', '2022-08-04', 'Sports', 'Admin', '<p>Dalam kegiatan survey konsultan perencanaan kegiatan penyelenggaraan penataan bangunan dan lingkungan di daerah kabupaten/kota tahun anggaran 2022 bidang Bangunan Gedung dan Jalan Lingkungan Dinas Pekerjaan Umum dan Penataan Ruang &nbsp;(DPUPR) Kabupaten Kapuas Hulu menugaskan staf untuk mendampingi konsultan. Tim yang melaksanakan terdiri dari 4 orang pada Jumat, (29/07/2022) s/d Minggu, (31/07/2022).</p>\r\n<p>Survey rabat beton ini dilaksanakan dibeberapa lokasi yaitu desa Kenepai Komplek, desa Tua Abang, desa Semitau Hulu yang ada di kecamatan Semitau. Desa Nanga Suhaid yang ada di kecamatan Suhaid, dan beberapa gang yang ada di kelurahan Kedamin Hulu, Kedamin Hilir di kecamatan Putussibau Selatan. Survey bertujuan menentukan lokasi pekerjaan dan memastikan lokasi sesuai dengan judul pekerjaan yang akan dikerjakan. Dalam survey ini kita juga melibatkan pihak desa, kades, sekdes dan kaur desa yang tidak berhalangan untuk menunjukan lokasi yang diukur.</p>\r\n<p>Diharapkan dari hasil data ukur ini tidak ada perubahan lokasi pekerjaan dan perubahan item pekerjaan kegiatan. Dihimbau juga kepada masyarakat sekitar untuk mendukung dalam pelaksanaan pekerjaan nanti agar pembangunan ini berjalan baik dan lancar sesuai harapan kita bersama.</p>', '05082022012040md_survey-mendampingi-konsultan-perencanaan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inven_bangunan`
--

CREATE TABLE `tb_inven_bangunan` (
  `id_bangunan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_bangunan` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nup` varchar(50) NOT NULL,
  `luas` varchar(20) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `type_bangunan` varchar(50) NOT NULL,
  `nilai` varchar(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inven_barang`
--

CREATE TABLE `tb_inven_barang` (
  `id_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nup` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inven_jij`
--

CREATE TABLE `tb_inven_jij` (
  `id_jij` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_jij` varchar(50) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `type_jij` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_inven_jij`
--

INSERT INTO `tb_inven_jij` (`id_jij`, `tanggal`, `jenis_jij`, `kode_barang`, `nup`, `ukuran`, `tahun_perolehan`, `type_jij`, `nilai`, `keterangan`) VALUES
(1, '2022-07-25', 'Pengerasan Jalan', '2011301', '21', '2 KM', '2022', 'Beton', '160000000', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inven_kb`
--

CREATE TABLE `tb_inven_kb` (
  `id_kb` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nup` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `nomesin` varchar(50) NOT NULL,
  `norangka` varchar(50) NOT NULL,
  `nobpkb` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inven_pm`
--

CREATE TABLE `tb_inven_pm` (
  `id_pm` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nup` varchar(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inven_tetap`
--

CREATE TABLE `tb_inven_tetap` (
  `id_inven_tetap` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nup` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_inven_tetap`
--

INSERT INTO `tb_inven_tetap` (`id_inven_tetap`, `tanggal`, `nama_barang`, `kode_barang`, `nup`, `tahun_perolehan`, `merk`, `nilai`, `keterangan`) VALUES
(3, '2022-08-04', 'Honda Supra', '2011301', '21', '2022', 'Yamaha', '26000000', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemerintah`
--

CREATE TABLE `tb_pemerintah` (
  `id_pemerintah` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pemerintah`
--

INSERT INTO `tb_pemerintah` (`id_pemerintah`, `nama`, `tmp_lahir`, `tgl_lahir`, `agama`, `jabatan`, `foto`) VALUES
(3, 'Burhanudin', 'Tanjung Selor', '2022-08-02', 'Islam', 'Komisaris', '07082022032248Mikey2.jpg'),
(4, '', '', '2022-08-01', '-- Pilih Agama --', '', '8650_struktur desa kelibang.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmp_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `shdk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `rt` varchar(11) NOT NULL,
  `rw` varchar(11) NOT NULL,
  `sts_perkawinan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `shdk`, `agama`, `pendidikan`, `pekerjaan`, `ayah`, `ibu`, `dusun`, `rt`, `rw`, `sts_perkawinan`, `kewarganegaraan`) VALUES
(1, '6106061210170001 ', '6106060707860003', 'REFA\'I', 'NANGA KELIBANG', '1986-07-07', 'Laki-Laki', 'Kepala Keluarga', 'Islam', 'Tamat SD/Sederajat', 'Wiraswasta', 'Mat Daud', 'Suminah', 'KELIBANG SELATAN', '02', '01', 'KAWIN', 'WNI'),
(3, '6106061210170001', '6106065909870002', 'RAHIMAH', 'NANGA JAJANG', '1987-09-19', 'Perempuan', 'ISTRI', 'Islam', 'TAMAT MTS/SEDERAJAT', 'Mengurus Rumah Tangga', 'JAMLI', 'SUARNI', 'KELIBANG SELATAN', '02', '01', 'KAWIN', 'WNI'),
(5, '6106061210170001', '6171041512130001', 'ARIFAL ALIANDO', 'PONTIANAK', '2013-12-15', 'Laki-Laki', 'Anak', 'Islam', 'SD/SEDERAJAT', 'PELAJAR', 'SUPRIYADI', 'TATY HARYATI', 'KELIBANG SELATAN', '002', '001', 'Belum Kawin', 'WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `singkatan` varchar(20) NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `nama_surat`, `singkatan`, `syarat`) VALUES
(5, 'Surat Keterangan Miskin', 'SKM', 'FC Kartu Keluarga,FC Kartu Tanda Penduduk,'),
(6, 'Surat Keterangan Catatan Kepolisian', 'SKCK', 'FC Kartu Keluarga,FC Kartu Tanda Penduduk,');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_syarat`
--

CREATE TABLE `tb_syarat` (
  `id_syarat` int(11) NOT NULL,
  `syarat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_syarat`
--

INSERT INTO `tb_syarat` (`id_syarat`, `syarat`) VALUES
(2, 'FC Kartu Keluarga'),
(3, 'FC Kartu Tanda Penduduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tanah`
--

CREATE TABLE `tb_tanah` (
  `id_tanah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(11) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vm`
--

CREATE TABLE `tb_vm` (
  `id_vm` int(11) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_vm`
--

INSERT INTO `tb_vm` (`id_vm`, `periode`, `visi`, `misi`) VALUES
(1, '2021 - 2024', '<p>\"Terwujudnya Kapuas Hulu Yang Harmonis, Energik, Berdaya Saing, Amanah, dan Terampil&rdquo;</p>', '<ol>\r\n<li>Mewujudkan Masyarakat Kapuas Hulu yang harmonis dalam kerukunan kehidupan beragama, budaya dan keamanan.</li>\r\n<li>Mewujudkan Kapuas Hulu yang kreatif menuju desa mandiri, pengembangan aktifitas ekonomi yang adil dan pro rakyat, serta ramah investasi.</li>\r\n<li>Mewujudkan Masyarakat Kapuas Hulu yang berbudaya, mandiri, cerdas dan inovatif dalam meningkatkan kualitas dan mutu pendidikan yang memiliki daya saing.</li>\r\n<li>Mewujudkan Tata Kelola &nbsp;Pemerintahan &nbsp;yang &nbsp;bersih, &nbsp;berwibawa &nbsp;dan &nbsp;tersedianya infrastruktur publik yang berbasis transparansi, responsibilitas dan akuntanbilitas<em>.</em></li>\r\n<li>Mewujudkan Kapuas Hulu yang sejahtera dalam pelayanan kesehatan dasar yang bermutu bagi masyarakat.</li>\r\n</ol>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_inven_bangunan`
--
ALTER TABLE `tb_inven_bangunan`
  ADD PRIMARY KEY (`id_bangunan`);

--
-- Indeks untuk tabel `tb_inven_barang`
--
ALTER TABLE `tb_inven_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_inven_jij`
--
ALTER TABLE `tb_inven_jij`
  ADD PRIMARY KEY (`id_jij`);

--
-- Indeks untuk tabel `tb_inven_kb`
--
ALTER TABLE `tb_inven_kb`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indeks untuk tabel `tb_inven_pm`
--
ALTER TABLE `tb_inven_pm`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indeks untuk tabel `tb_inven_tetap`
--
ALTER TABLE `tb_inven_tetap`
  ADD PRIMARY KEY (`id_inven_tetap`);

--
-- Indeks untuk tabel `tb_pemerintah`
--
ALTER TABLE `tb_pemerintah`
  ADD PRIMARY KEY (`id_pemerintah`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_syarat`
--
ALTER TABLE `tb_syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Indeks untuk tabel `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indeks untuk tabel `tb_vm`
--
ALTER TABLE `tb_vm`
  ADD PRIMARY KEY (`id_vm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_inven_bangunan`
--
ALTER TABLE `tb_inven_bangunan`
  MODIFY `id_bangunan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_inven_barang`
--
ALTER TABLE `tb_inven_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_inven_jij`
--
ALTER TABLE `tb_inven_jij`
  MODIFY `id_jij` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_inven_kb`
--
ALTER TABLE `tb_inven_kb`
  MODIFY `id_kb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_inven_pm`
--
ALTER TABLE `tb_inven_pm`
  MODIFY `id_pm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_inven_tetap`
--
ALTER TABLE `tb_inven_tetap`
  MODIFY `id_inven_tetap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pemerintah`
--
ALTER TABLE `tb_pemerintah`
  MODIFY `id_pemerintah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_syarat`
--
ALTER TABLE `tb_syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tanah`
--
ALTER TABLE `tb_tanah`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_vm`
--
ALTER TABLE `tb_vm`
  MODIFY `id_vm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
