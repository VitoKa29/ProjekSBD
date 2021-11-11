-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Apr 2021 pada 18.17
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayolapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`) VALUES
(2, 'Pemerintah Provinsi Jawa Tengah'),
(3, 'Pemerintah Provinsi Jawa Barat'),
(4, 'Pemerintah Provinsi Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Covid-19'),
(4, 'Jalan Rusak'),
(5, 'Kriminal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
(5555, 'vitoka', 'vito', '202cb962ac59075b964b07152d234b70', '08844'),
(34334, 'Eko', 'eko', '202cb962ac59075b964b07152d234b70', '123123123'),
(1343434, 'Handy', 'handy', '202cb962ac59075b964b07152d234b70', '05555'),
(5656565, 'Bambang Mulya', 'bambang', '202cb962ac59075b964b07152d234b70', '132132133'),
(10110456, 'Yafet Adi', 'yafet', '202cb962ac59075b964b07152d234b70', '059871'),
(2147483647, 'audie', 'odii', '202cb962ac59075b964b07152d234b70', '34535345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `instansi_tujuan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `judul`, `isi_laporan`, `lokasi`, `instansi_tujuan`, `kategori`, `foto`, `status`) VALUES
(1, '2021-04-06', '5656565', 'Wabah Covid mulai memarak', 'Wabah covid telah memarak di kampung saya, hal ini menyebabkan kepanikan serius di kampung saya', 'Pekalongan ', 'Pemerintah Provinsi Jawa Tengah', 'Covid-19', 'dfd-adel0.jpg', 'Di Tolak'),
(2, '2021-04-06', '1343434', 'Akses jalan rusak', 'akses jalan menuju kecamatan talun tersendat karena banyak jalan berlubang ', 'Warung Asem, Pekalongan', 'Pemerintah Provinsi Jawa Tengah', 'Jalan Rusak', 'dfd-bunga0.jpg', 'Di Terima'),
(3, '2021-04-08', '5656565', 'Terjadi Perampokan', 'telah terjadi perampokan di jalan jendral sudirman', 'Jl. Jendral Sudirman, Pekalongan Barat', 'Pemerintah Provinsi Jawa Tengah', 'Kriminal', 'dfd-adel0.jpg', 'Selesai'),
(4, '2021-04-08', '10110456', 'Terjadi Perampokan', 'terjadi perampokan semalam', 'Jl jendsud, pekalongan', 'Pemerintah Provinsi Jawa Tengah', 'Kriminal', 'dfd-adel1.jpg', 'Di Tolak'),
(8, '2021-04-08', '5656565', 'mencoba', 'mencobaaaaa', 'pekalongan', 'Pemerintah Provinsi Jawa Tengah', 'Covid-19', 'dfd-adel1.jpg', 'Di Terima'),
(9, '2021-04-08', '5656565', 'testt', 'cobaaa', 'bandung', 'Pemerintah Provinsi Jawa Barat', 'Covid-19', 'dfd-bunga0.jpg', 'Selesai'),
(10, '2021-04-08', '5656565', 'coba2', 'coba sahaja', 'jakarta', 'Pemerintah Provinsi Jawa Barat', 'Covid-19', 'dfd-adel1.jpg', 'Telah Diajukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` varchar(20) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `instansi`) VALUES
(1, 'Vitoka', 'vito', '202cb962ac59075b964b07152d234b70', '055', 'Petugas', 'Pemerintah Provinsi Jawa Barat'),
(2, 'Sandy Kurniawan', 'sandy', '202cb962ac59075b964b07152d234b70', '1231235', 'Admin', 'Pemerintah Provinsi Jawa Tengah'),
(3, 'arshy dian', 'arshy', '202cb962ac59075b964b07152d234b70', '25252', 'Petugas', 'Pemerintah Provinsi Jawa Timur'),
(7, 'Juan Arthur', 'juan', '202cb962ac59075b964b07152d234b70', '04654654', 'Admin', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '2021-04-06 02:58:28', 'Foto kurang jelas', 2),
(2, 4, '2021-04-08 06:55:02', 'bercanda', 1),
(3, 3, '2021-04-08 16:15:45', 'selesai pal', 3),
(4, 9, '2021-04-08 16:08:07', 'oke selesai\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
