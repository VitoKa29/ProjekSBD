-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2022 pada 14.26
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biro1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Farrel Saputro', 'farrel', '202cb962ac59075b964b07152d234b70', 'Admin'),
(4, 'Nicholas Marcell', 'marcell', '202cb962ac59075b964b07152d234b70', 'Super Admin'),
(5, 'Nathanael Vito Kristianto', 'vito', '202cb962ac59075b964b07152d234b70', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalkuliah`
--

CREATE TABLE `jadwalkuliah` (
  `idMtk` varchar(15) DEFAULT NULL,
  `tahun` varchar(4) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `grup` varchar(1) NOT NULL,
  `nomorRuang` varchar(10) DEFAULT NULL,
  `kodeSesi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalkuliah`
--

INSERT INTO `jadwalkuliah` (`idMtk`, `tahun`, `semester`, `grup`, `nomorRuang`, `kodeSesi`) VALUES
(NULL, '2022', 'Gasal', 'A', 'D.2.1', 'A2'),
(NULL, '2022', 'Gasal', 'B', 'D.2.2', 'A2'),
(NULL, '2022', 'Gasal', 'A', 'D.2.2', 'A3'),
('TI0133', '2022', 'Gasal', 'C', 'C.3.7`', 'A3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logpeminjaman`
--

CREATE TABLE `logpeminjaman` (
  `nim` varchar(10) DEFAULT NULL,
  `nomorRuang` varchar(10) DEFAULT NULL,
  `kodeSesi` varchar(10) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `tglPinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logpeminjaman`
--

INSERT INTO `logpeminjaman` (`nim`, `nomorRuang`, `kodeSesi`, `keterangan`, `tglPinjam`) VALUES
('71210681', 'D.2.1', 'A3', 'rapat Sixti', '2022-12-05'),
('71210681', 'D.2.3', 'A3', 'rapattttt besar', '2022-12-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kodeProdi` varchar(10) DEFAULT NULL,
  `sksTotal` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kodeProdi`, `sksTotal`) VALUES
('71210680', 'Nicholas Marcell Kusumo', 'TI', 46),
('71210681', 'Nathanael Vito Kristianto', 'TI', 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `idMtk` varchar(15) NOT NULL,
  `namaMtk` varchar(100) NOT NULL,
  `kodeProdi` varchar(10) DEFAULT NULL,
  `sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`idMtk`, `namaMtk`, `kodeProdi`, `sks`) VALUES
('PR2323', 'PRAKTIKUM PERANCANGAN BASIS DATA', 'SI', 0),
('PR2363', 'PRAKTIKUM APLIKASI BERBASIS DESKTOP', 'SI', 0),
('SE3353', 'MANAJEMEN RESIKO TEKNOLOGI INFORMASI', 'SI', 3),
('SI2323', 'PERANCANGAN BASIS DATA', 'SI', 3),
('SI2333', 'MANAJEMEN PROSES BISNIS', 'SI', 3),
('SI2343', 'SISTEM INFORMASI MANAJEMEN', 'SI', 3),
('SI2353', 'ANALISIS DATA BISNIS', 'SI', 3),
('SI2363', 'APLIKASI BERBASIS DESKTOP', 'SI', 3),
('SI3313', 'MANAJEMEN LAYANAN TEKNOLOGI INFORMASI', 'SI', 3),
('SP5633', 'PEMASARAN DIGITAL', 'MN', 3),
('TI0133', 'STRUKTUR DATA', 'TI', 3),
('TI0141', 'PRAKTIKUM STRUKTUR DATA', 'TI', 1),
('TI0153', 'INFRASTRUKTUR LAN', 'TI', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nim` varchar(10) DEFAULT NULL,
  `nomorRuang` varchar(10) DEFAULT NULL,
  `kodeSesi` varchar(10) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `tglPinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`nim`, `nomorRuang`, `kodeSesi`, `keterangan`, `tglPinjam`) VALUES
('71210680', 'D.2.3', 'A2', 'rapat HMTI', '2022-12-05');

--
-- Trigger `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `after_delete_peminjaman` AFTER DELETE ON `peminjaman` FOR EACH ROW INSERT INTO logpeminjaman SET
nim = old.nim,
nomorRuang = old.nomorRuang,
kodeSesi = old.kodeSesi,
keterangan = old.keterangan,
tglPinjam = old.tglPinjam
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kodeProdi` varchar(10) NOT NULL,
  `namaProdi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kodeProdi`, `namaProdi`, `fakultas`) VALUES
('AK', 'Akuntansi', 'Fakultas Bisnis'),
('FK', 'Filsafat Keahlian', 'Fakultas Teologi'),
('KD', 'Kedokteran', 'Fakultas Kedokteran'),
('MN', 'Manajemen', 'Fakultas Bisnis'),
('SI', 'Sistem Informasi', 'Fakultas Teknologi Informasi'),
('TI', 'Informatika', 'Fakultas Teknologi Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `nomorRuang` varchar(10) NOT NULL,
  `gedung` varchar(15) NOT NULL,
  `kapasitas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`nomorRuang`, `gedung`, `kapasitas`) VALUES
('C.3.7`', 'Chara', 40),
('D.2.1', 'Didaktos', 14),
('D.2.2', 'Didaktos', 55),
('D.2.3', 'Didaktos', 25),
('H.2.1', 'Hagios', 40),
('H.2.2', 'Hagios', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sesi`
--

CREATE TABLE `sesi` (
  `kodeSesi` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sesi`
--

INSERT INTO `sesi` (`kodeSesi`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
('A2', 'Senin', '11:30:00', '14:20:00'),
('A3', 'Senin', '14:30:00', '17:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jadwalkuliah`
--
ALTER TABLE `jadwalkuliah`
  ADD KEY `idMtk` (`idMtk`),
  ADD KEY `tahun` (`tahun`),
  ADD KEY `semester` (`semester`),
  ADD KEY `grup` (`grup`),
  ADD KEY `nomorRuang` (`nomorRuang`),
  ADD KEY `kodeSesi` (`kodeSesi`);

--
-- Indexes for table `logpeminjaman`
--
ALTER TABLE `logpeminjaman`
  ADD KEY `nim` (`nim`),
  ADD KEY `nomorRuang` (`nomorRuang`),
  ADD KEY `kodeSesi` (`kodeSesi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kodeProdi` (`kodeProdi`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`idMtk`),
  ADD KEY `kodeProdi` (`kodeProdi`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `nim` (`nim`),
  ADD KEY `nomorRuang` (`nomorRuang`),
  ADD KEY `kodeSesi` (`kodeSesi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kodeProdi`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`nomorRuang`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`kodeSesi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwalkuliah`
--
ALTER TABLE `jadwalkuliah`
  ADD CONSTRAINT `jadwalkuliah_ibfk_1` FOREIGN KEY (`nomorRuang`) REFERENCES `ruangan` (`nomorRuang`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwalkuliah_ibfk_2` FOREIGN KEY (`kodeSesi`) REFERENCES `sesi` (`kodeSesi`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwalkuliah_ibfk_4` FOREIGN KEY (`idMtk`) REFERENCES `matakuliah` (`idMtk`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `logpeminjaman`
--
ALTER TABLE `logpeminjaman`
  ADD CONSTRAINT `logpeminjaman_ibfk_1` FOREIGN KEY (`nomorRuang`) REFERENCES `ruangan` (`nomorRuang`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `logpeminjaman_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `logpeminjaman_ibfk_3` FOREIGN KEY (`kodeSesi`) REFERENCES `sesi` (`kodeSesi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kodeProdi`) REFERENCES `prodi` (`kodeProdi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`kodeProdi`) REFERENCES `prodi` (`kodeProdi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`nomorRuang`) REFERENCES `ruangan` (`nomorRuang`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`kodeSesi`) REFERENCES `sesi` (`kodeSesi`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
