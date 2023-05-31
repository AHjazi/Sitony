-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 04:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `goldar` varchar(23) NOT NULL,
  `file` blob NOT NULL,
  `id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `nip`, `nama`, `divisi`, `email`, `no_telp`, `goldar`, `file`, `id_role`) VALUES
(1, 'Super Admin', '17c4520f6cfd1ab53d8745e84681eb49', 2134, 'Ahmad Hijazi', 'Gudang', 'superadmin@gmail.com', 1234567891, 'A', '', 1),
(2, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 12345, 'Ahmad Hijazi', 'Gudang', 'superadmin@gmail.com', 1234567891, 'A', '', 2),
(3, 'Pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 2134, 'Ahmad Hijazi', 'Gudang', 'superadmin@gmail.com', 1234567891, 'A', '', 3),
(4, 'Pembelian', '025b94c9e65037bb7317c8e25389155d', 12345, 'Ahmad Hijazi', 'Gudang', 'superadmin@gmail.com', 1234567891, 'A', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bahanbakar`
--

CREATE TABLE `bahanbakar` (
  `id_bahanbakar` int(11) NOT NULL,
  `kode_bahanbakar` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `id_satuan` int(20) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bahanbakar`
--

INSERT INTO `bahanbakar` (`id_bahanbakar`, `kode_bahanbakar`, `jenis`, `id_satuan`, `keperluan`, `stok`) VALUES
(3, 24324, 'Pertamaxxxx', 0, 'Mobil Kantor', 0),
(9, 2424, 'Premium', 2, 'truck Tronton', 0),
(10, 23323, 'Solar', 0, 'gasan mobil', 22),
(11, 4444, 'Pertamax', 0, 'gasan mobil', 120),
(12, 1321241, 'Bensun', 2, 'Skdaksd', 123);

-- --------------------------------------------------------

--
-- Table structure for table `barangkantor`
--

CREATE TABLE `barangkantor` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `id_satuan` int(20) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangkantor`
--

INSERT INTO `barangkantor` (`id_barang`, `nama_barang`, `kode_barang`, `stok`, `id_satuan`, `keperluan`, `brand`) VALUES
(4, 'asd', 'as', 4, 0, 'faxa', 'wras'),
(5, 'Kursi', '1123', 12, 0, 'gasan mobil truck', 'sad'),
(11, 'TV', '12312', 23, 1, 'kantor', 'kasino'),
(12, 'Salon', '231132', 22, 0, 'kantor pks', 'Ks\\osmo');

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `id_barangkeluar` int(11) NOT NULL,
  `tgl_barangkeluar` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `id_barangmasuk` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` int(50) NOT NULL,
  `tgl_barangmasuk` date NOT NULL,
  `jam_barangmasuk` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `divisi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `divisi`) VALUES
(4, 'Kantor'),
(5, 'Harnik');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_bahanbakar` int(11) NOT NULL,
  `id_barangkantor` int(11) NOT NULL,
  `id_sparepart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permintaanbarang`
--

CREATE TABLE `permintaanbarang` (
  `id_permintaan` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Pegawai'),
(4, 'Pembelian');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(20) NOT NULL,
  `jenis_satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `jenis_satuan`) VALUES
(5, 'Liter'),
(6, 'Rim'),
(7, 'Bal'),
(13, 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` int(11) NOT NULL,
  `kode_sparepart` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `id_satuan` int(20) NOT NULL,
  `keperluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id_sparepart`, `kode_sparepart`, `nama`, `brand`, `stok`, `id_satuan`, `keperluan`) VALUES
(8, '3423', 'BautMaster', 'kasino', 21, 0, 'gasan mobil Bulldozer'),
(9, '3423', 'Gusi', 'sad', 41, 0, 'Bulldozer'),
(11, '131341', 'Mur', 'kasino', 112, 1, 'mesin'),
(12, '3332', 'Lem', 'wras', 12, 1, 'Poster');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `tanggal_stok` date DEFAULT NULL,
  `stok_sebelumnya` int(11) DEFAULT NULL,
  `stok_sesudahnya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `bahanbakar`
--
ALTER TABLE `bahanbakar`
  ADD PRIMARY KEY (`id_bahanbakar`);

--
-- Indexes for table `barangkantor`
--
ALTER TABLE `barangkantor`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`id_barangkeluar`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`id_barangmasuk`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `permintaanbarang`
--
ALTER TABLE `permintaanbarang`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahanbakar`
--
ALTER TABLE `bahanbakar`
  MODIFY `id_bahanbakar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `barangkantor`
--
ALTER TABLE `barangkantor`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `id_barangkeluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `id_barangmasuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaanbarang`
--
ALTER TABLE `permintaanbarang`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_sparepart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barangkantor` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
