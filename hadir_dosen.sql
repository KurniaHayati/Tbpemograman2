-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2021 pada 07.30
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hadir_dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE IF NOT EXISTS `dosens` (
  `nik` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`nik`, `nama`, `password`) VALUES
(10378065, 'Noviana Riza, S.Si., M.T.', 'sariasih54'),
(10378069, 'Roni Habibi, S.Kom., M.T.', 'sariasih54'),
(10579081, 'Woro Isti Rahayu, S.T., M.T.', 'sariasih54'),
(11374163, 'M. Yusril Helmi Setyawan, S.Kom., M.Kom.', 'sariasih54'),
(11380159, 'Mohamad Nurkamal Fauzan, S.T., M.T.', 'sariasih54'),
(11588193, 'Roni Andarsyah, S.T., M.Kom.', 'sariasih54'),
(11784222, 'Cahyo Prianto, S.Pd., M.T.', 'sariasih54'),
(11786219, 'Rolly Maulana Awangga, S.T., M.T.', 'sariasih54'),
(11788233, 'Syafrial Fachri Pane, S.T., M.T.I.,EBDP', 'sariasih54'),
(11789223, 'Nisa Hanum Harani, S.Kom., M.T.', 'sariasih54'),
(21388109, 'M. Harry K Saputra, S.T., M.T.I', 'sariasih54'),
(21772187, 'Rd. Nuraini Siti Fatonah, S.S., M.Hum.', 'sariasih54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ganjil1819`
--

CREATE TABLE IF NOT EXISTS `ganjil1819` (
  `id_jadwal` varchar(70) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ganjil1819`
--

INSERT INTO `ganjil1819` (`id_jadwal`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ece0b9b92c', 'Mohamad Nurkamal Fauzan, S.T., M.T.', 'Arsitektur Komputer', '310', 'Selasa', '13.00-16.20', 'D4 TI 1A', '2021-01-24', 'Waiting', 'Menunggu Konfirmasi Dosen'),
('6011084a30d9b', 'Roni Andarsyah, S.T., M.Kom.', 'Pemrograman I', '309', 'Selasa', '07.00-12.00', 'D4 TI 1A', '2021-02-02', 'Waiting', 'Menunggu Konfirmasi Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ganjil1920`
--

CREATE TABLE IF NOT EXISTS `ganjil1920` (
  `id_jadwal` varchar(70) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ganjil1920`
--

INSERT INTO `ganjil1920` (`id_jadwal`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ed37eb4bac', 'Syafrial Fachri Pane, S.T., M.T.I.,EBDP', 'Basis Data II', '315', 'Kamis', '07.00-12.00', 'D4 TI 2A', '2021-01-28', 'Waiting', 'Menunggu Konfirmasi Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ganjil18192`
--

CREATE TABLE IF NOT EXISTS `ganjil18192` (
  `id_jadwal` varchar(70) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ganjil18192`
--

INSERT INTO `ganjil18192` (`id_jadwal`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ed55d8b84a', 'Nisa Hanum Harani, S.Kom., M.T.', 'SISTEM ERP II', '151', 'Rabu', '07.00-08.40', 'D4 TI 3A', '2021-01-27', 'Ya', 'Baca dahulu materi yang saya kirim di VL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ganjil19202`
--

CREATE TABLE IF NOT EXISTS `ganjil19202` (
  `id_jadwal` varchar(70) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ganjil19202`
--

INSERT INTO `ganjil19202` (`id_jadwal`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ed64ee686a', 'M. Harry K Saputra, S.T., M.T.I', 'PEMROGRAMAN IV', '317', 'Senin', '07.00-08.40', 'D4 TI 3A', '2021-01-25', 'Ya', 'Jangan Telat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genap1819`
--

CREATE TABLE IF NOT EXISTS `genap1819` (
  `id_jadwal` varchar(255) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genap1819`
--

INSERT INTO `genap1819` (`id_jadwal`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ecfb4e0bca', 'Cahyo Prianto, S.Pd., M.T.', 'Aljabar Linear', '210', 'Kamis', '08.40-10.20', 'D4 TI 1A', '2021-01-26', 'Waiting', 'Menunggu Konfirmasi Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genap18192`
--

CREATE TABLE IF NOT EXISTS `genap18192` (
  `id_jadwal` varchar(255) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genap18192`
--

INSERT INTO `genap18192` (`id_jadwal`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ed5f228c3d', 'Noviana Riza, S.Si., M.T.', 'ETIKA DAN MANAJEMEN PROFESI IT', '112', 'Rabu', '07.00-08.40', 'D4 TI 2A', '2021-01-27', 'Waiting', 'Menunggu Konfirmasi Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
`id_hari` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `hari`) VALUES
(1, 'senin'),
(2, 'selasa'),
(3, 'rabu'),
(4, 'kamis'),
(5, 'jumat'),
(6, 'sabtu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` varchar(255) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_hari` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalaja`
--

CREATE TABLE IF NOT EXISTS `jadwalaja` (
  `id_jadwal` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `pengajar` varchar(70) NOT NULL,
  `matkul` varchar(70) NOT NULL,
  `ruang` varchar(70) NOT NULL,
  `hari` varchar(70) NOT NULL,
  `jam` varchar(70) NOT NULL,
  `kelas` varchar(70) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalaja`
--

INSERT INTO `jadwalaja` (`id_jadwal`, `nik`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ed3ff37eff', 0, 'M. Harry K Saputra, S.T., M.T.I', 'Pemrograman III Web Service', '318', 'Senin', '07.00-08.40', 'D4 TI 2A', '2021-02-01', 'Waiting', 'Menunggu Konfirmasi Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalaja2`
--

CREATE TABLE IF NOT EXISTS `jadwalaja2` (
  `id_jadwal` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `pengajar` varchar(70) NOT NULL,
  `matkul` varchar(70) NOT NULL,
  `ruang` varchar(70) NOT NULL,
  `hari` varchar(70) NOT NULL,
  `jam` varchar(70) NOT NULL,
  `kelas` varchar(70) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `status` varchar(70) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalaja2`
--

INSERT INTO `jadwalaja2` (`id_jadwal`, `nik`, `pengajar`, `matkul`, `ruang`, `hari`, `jam`, `kelas`, `tanggal`, `status`, `alasan`) VALUES
('600ed710b18f7', 0, ' Roni Habibi, S.Kom., M.T.', 'MANAJEMEN PROYEK', '320', 'Senin', '07.00-08.40', 'D4 TI 2A', '2021-01-25', 'Waiting', 'tydsafdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
`id_jam` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(1, '07.00-08.40'),
(2, '07.00-10.20'),
(3, '07.00-12.00'),
(4, '08.40-10.20'),
(5, '08.40-12.00'),
(6, '09.30-12.00'),
(7, '10.20-12.00'),
(8, '13.00-14.40'),
(9, '13.00-16.20'),
(10, '13.00-18.00'),
(11, '14.40-16.20'),
(12, '14.40-18.00'),
(13, '16.20-18.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_dosen` varchar(255) NOT NULL,
  `id_jadwal` varchar(255) NOT NULL,
  `id_mahasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE IF NOT EXISTS `mahasiswas` (
  `id_mahasiswa` varchar(255) NOT NULL,
  `npm` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id_mahasiswa`, `npm`, `nama`, `password`, `nomor`, `hak_akses`) VALUES
('5e429153328cf', 1184113, 'Ida Fatrini Putri', 'sariasih54', '', 0),
('6002d28b520bf', 1184024, 'Ira Dwita Syafitri Tarigan', '123456', '6282361115619', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE IF NOT EXISTS `matkul` (
`id_matkul` int(11) NOT NULL,
  `matkul` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `matkul`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'PPKN'),
(3, 'Agama'),
(4, 'Matematika Diskrit'),
(5, 'Arsitektur Komputer'),
(6, 'Algoritma I'),
(7, 'Algoritma II'),
(8, 'Pemrograman I'),
(9, 'Pemrograman II'),
(10, 'General English I'),
(11, 'General English II'),
(12, 'General English III'),
(13, 'BASIS DATA I'),
(14, 'BASIS DATA II'),
(15, 'ALJABAR LINIER'),
(16, 'ANALISIS DAN PERANCANGAN SISTEM INFORMASI	'),
(17, 'SISTEM OPRASI'),
(18, 'PENGANTAR LOGISTIK'),
(19, 'REKAYASA PERANGKAT LUNAK'),
(20, 'DESAIN INTERAKSI'),
(21, 'JARINGAN KOMPUTER'),
(22, 'METODOLOGI PENELITIAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE IF NOT EXISTS `pengajar` (
`id_pengajar` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama`) VALUES
(1, 'M. Yusril Helmi Setyawan, S.Kom., M.Kom.'),
(2, 'Rolly Maulana Awangga, S.T., M.T.\r\n'),
(3, 'Mohamad Nurkamal Fauzan, S.T., M.T.'),
(4, 'Roni Habibi, S.Kom., M.T.'),
(5, 'Roni Andarsyah, S.T., M.Kom.'),
(6, 'Cahyo Prianto, S.Pd., M.T.'),
(7, 'Syafrial Fachri Pane, S.T., M.T.I.,EBDP'),
(8, 'M. Harry K Saputra, S.T., M.T.I'),
(9, 'Rd. Nuraini Siti Fatonah, S.S., M.Hum.'),
(10, 'Nisa Hanum Harani, S.Kom., M.T.'),
(11, 'Woro Isti Rahayu, S.T., M.T.'),
(12, 'Noviana Riza, S.Si., M.T.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
`id_ruang` int(11) NOT NULL,
  `ruang` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `ruang`) VALUES
(1, '101'),
(2, '102'),
(3, '103'),
(4, '104'),
(5, '105'),
(6, '106'),
(7, '107'),
(8, '108'),
(9, '109'),
(10, '110'),
(11, '111'),
(12, '112'),
(13, '113'),
(14, '114'),
(15, '115'),
(16, '116'),
(17, '117'),
(18, '201'),
(19, '202'),
(20, '203'),
(21, '204'),
(22, '205'),
(23, '206'),
(24, '207'),
(25, '208'),
(26, '209'),
(27, '210'),
(28, '211'),
(29, '212'),
(30, '301'),
(31, '302'),
(32, '303'),
(33, '304'),
(34, '305'),
(35, '306'),
(36, '307'),
(37, '308'),
(38, '310'),
(39, '311'),
(40, '312'),
(41, '309'),
(42, '314'),
(43, '314'),
(44, '315'),
(45, '316'),
(46, '317'),
(47, '318'),
(48, '319'),
(49, '320'),
(50, '321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 0),
(2, 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `ganjil1819`
--
ALTER TABLE `ganjil1819`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `ganjil1920`
--
ALTER TABLE `ganjil1920`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `genap1819`
--
ALTER TABLE `genap1819`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
 ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`), ADD KEY `FK_PENGAJAR` (`id_pengajar`), ADD KEY `FK_MATKUL` (`id_matkul`), ADD KEY `FK_RUANG` (`id_ruang`), ADD KEY `FK_HARI` (`id_hari`), ADD KEY `FK_JAM` (`id_jam`);

--
-- Indexes for table `jadwalaja`
--
ALTER TABLE `jadwalaja`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
 ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
 ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
 ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
 ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
 ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
ADD CONSTRAINT `FK_HARI` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`),
ADD CONSTRAINT `FK_JAM` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`),
ADD CONSTRAINT `FK_MATKUL` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
ADD CONSTRAINT `FK_PENGAJAR` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`),
ADD CONSTRAINT `FK_RUANG` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
