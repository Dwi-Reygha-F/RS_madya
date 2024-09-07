-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 05:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rsmadya2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(111) NOT NULL,
  `nama` varchar(231) NOT NULL,
  `spesialis` varchar(231) NOT NULL,
  `foto` varchar(231) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `spesialis`, `foto`) VALUES
(5, 'Yuari Choirul Kafi', 'Otot', '9692db90a8a5b23c92eec9d20d1d2366.jpg'),
(8, 'Reygha', 'GIgi', 'ega.jpg'),
(9, 'bayu', 'Mata', 'bayu.jpg'),
(10, 'Rishqi', 'Patah Tulang', 'drrishqi.jpg'),
(11, 'Suci', 'Sendi', 'suci.jpg'),
(12, 'Lia', 'Penyakit Dalam', 'lia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_dokter` varchar(321) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_dokter`, `hari`, `jam_mulai`, `jam_selesai`, `tanggal`) VALUES
(22, '12', 'Jumat', '07:00:00', '21:00:00', '2024-09-06'),
(23, '8', 'Jumat', '07:00:00', '21:00:00', '2024-09-06'),
(24, '8', 'Sabtu', '06:00:00', '12:00:00', '2024-09-07'),
(27, '11', 'Sabtu', '07:06:00', '21:06:00', '2024-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(123) NOT NULL,
  `code_kamar` varchar(231) NOT NULL,
  `nama_kamar` varchar(231) NOT NULL,
  `nama_pasien` varchar(231) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `total_hari` varchar(231) NOT NULL,
  `status` enum('Terisi','Tidak Terisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `code_kamar`, `nama_kamar`, `nama_pasien`, `tanggal_masuk`, `total_hari`, `status`) VALUES
(1, 'A1', 'Melati', '', '0000-00-00', '', 'Tidak Terisi'),
(2, 'A2', 'Melati', '', '0000-00-00', '', 'Tidak Terisi'),
(3, 'A3', 'Melati', '', '0000-00-00', '', 'Tidak Terisi'),
(4, 'A4', 'Melati', '', '0000-00-00', '', 'Tidak Terisi'),
(5, 'B1', 'Lily', '', '0000-00-00', '', 'Tidak Terisi'),
(6, 'B2', 'Lily', 'Lia', '2024-09-07', '1', 'Terisi'),
(7, 'B3', 'Lily', '', '0000-00-00', '', 'Tidak Terisi'),
(8, 'B4', 'Lily', '', '0000-00-00', '', 'Tidak Terisi'),
(9, 'C1', 'Jasmine', '', '0000-00-00', '', 'Tidak Terisi'),
(10, 'C2', 'Jasmine', '', '0000-00-00', '', 'Tidak Terisi'),
(11, 'C3', 'Jasmine', '', '0000-00-00', '', 'Tidak Terisi'),
(12, 'C4', 'Jasmine', '', '0000-00-00', '', 'Tidak Terisi'),
(13, 'D1', 'Anggrek', '', '0000-00-00', '', 'Tidak Terisi'),
(14, 'D2', 'Anggrek', '', '0000-00-00', '', 'Tidak Terisi'),
(15, 'D3', 'Anggrek', '', '0000-00-00', '', 'Tidak Terisi'),
(16, 'D4', 'Anggrek', '', '0000-00-00', '', 'Tidak Terisi'),
(17, 'E1', 'Anyelir', '', '0000-00-00', '', 'Tidak Terisi'),
(18, 'E2', 'Anyelir', '', '0000-00-00', '', 'Tidak Terisi'),
(19, 'E3', 'Anyelir', '', '0000-00-00', '', 'Tidak Terisi'),
(20, 'E4', 'Anyelir', '', '0000-00-00', '', 'Tidak Terisi'),
(21, 'F1', 'Aster', '', '0000-00-00', '', 'Tidak Terisi'),
(22, 'F2', 'Aster', '', '0000-00-00', '', 'Tidak Terisi'),
(23, 'F3', 'Aster', '', '0000-00-00', '', 'Tidak Terisi'),
(24, 'F4', 'Aster', '', '0000-00-00', '', 'Tidak Terisi'),
(25, 'G1', 'Clarkia', '', '0000-00-00', '', 'Tidak Terisi'),
(26, 'G2', 'Clarkia', '', '0000-00-00', '', 'Tidak Terisi'),
(27, 'G3', 'Clarkia', '', '0000-00-00', '', 'Tidak Terisi'),
(28, 'G4', 'Clarkia', '', '0000-00-00', '', 'Tidak Terisi'),
(29, 'H1', 'Camelia', '', '0000-00-00', '', 'Tidak Terisi'),
(30, 'H2', 'Camelia', '', '0000-00-00', '', 'Tidak Terisi'),
(31, 'H3', 'Camelia', '', '0000-00-00', '', 'Tidak Terisi'),
(32, 'H4', 'Camelia', '', '0000-00-00', '', 'Tidak Terisi'),
(33, 'I1', 'Clover', '', '0000-00-00', '', 'Tidak Terisi'),
(34, 'I2', 'Clover', '', '0000-00-00', '', 'Tidak Terisi'),
(35, 'I3', 'Clover', '', '0000-00-00', '', 'Tidak Terisi'),
(36, 'I4', 'Clover', '', '0000-00-00', '', 'Tidak Terisi'),
(37, 'J1', 'Cosmos', '', '0000-00-00', '', 'Tidak Terisi'),
(38, 'J2', 'Cosmos', '', '0000-00-00', '', 'Tidak Terisi'),
(39, 'J3', 'Cosmos', '', '0000-00-00', '', 'Tidak Terisi'),
(40, 'J4', 'Cosmos', '', '0000-00-00', '', 'Tidak Terisi'),
(41, 'K1', 'Daisy', '', '0000-00-00', '', 'Tidak Terisi'),
(42, 'K2', 'Daisy', '', '0000-00-00', '', 'Tidak Terisi'),
(43, 'K3', 'Daisy', '', '0000-00-00', '', 'Tidak Terisi'),
(44, 'K4', 'Daisy', '', '0000-00-00', '', 'Tidak Terisi'),
(45, 'L1', 'Dandelion', 'mara', '2024-09-07', '3', 'Terisi'),
(46, 'L2', 'Dandelion', '', '0000-00-00', '', 'Tidak Terisi'),
(47, 'L3', 'Dandelion', '', '0000-00-00', '', 'Tidak Terisi'),
(48, 'L4', 'Dandelion', '', '0000-00-00', '', 'Tidak Terisi'),
(49, 'M1', 'Lantana', '', '0000-00-00', '', 'Tidak Terisi'),
(50, 'M2', 'Lantana', '', '0000-00-00', '', 'Tidak Terisi'),
(51, 'M3', 'Lantana', '', '0000-00-00', '', 'Tidak Terisi'),
(52, 'M4', 'Lantana', '', '0000-00-00', '', 'Tidak Terisi'),
(53, 'N1', 'Nemesia', '', '0000-00-00', '', 'Tidak Terisi'),
(54, 'N2', 'Nemesia', '', '0000-00-00', '', 'Tidak Terisi'),
(55, 'N3', 'Nemesia', '', '0000-00-00', '', 'Tidak Terisi'),
(56, 'N4', 'Nemesia', '', '0000-00-00', '', 'Tidak Terisi'),
(57, 'O1', 'Sunflower', '', '0000-00-00', '', 'Tidak Terisi'),
(58, 'O2', 'Sunflower', '', '0000-00-00', '', 'Tidak Terisi'),
(59, 'O3', 'Sunflower', '', '0000-00-00', '', 'Tidak Terisi'),
(60, 'O4', 'Sunflower', '', '0000-00-00', '', 'Tidak Terisi'),
(61, 'P1', 'Kalanchoe', '', '0000-00-00', '', 'Tidak Terisi'),
(62, 'P2', 'Kalanchoe', '', '0000-00-00', '', 'Tidak Terisi'),
(63, 'P3', 'Kalanchoe', '', '0000-00-00', '', 'Tidak Terisi'),
(64, 'P4', 'Kalanchoe', '', '0000-00-00', '', 'Tidak Terisi'),
(65, 'Q1', 'Lotus', '', '0000-00-00', '', 'Tidak Terisi'),
(66, 'Q2', 'Lotus', '', '0000-00-00', '', 'Tidak Terisi'),
(67, 'Q3', 'Lotus', '', '0000-00-00', '', 'Tidak Terisi'),
(68, 'Q4', 'Lotus', '', '0000-00-00', '', 'Tidak Terisi'),
(69, 'R1', 'Lilac', '', '0000-00-00', '', 'Tidak Terisi'),
(70, 'R2', 'Lilac', '', '0000-00-00', '', 'Tidak Terisi'),
(71, 'R3', 'Lilac', '', '0000-00-00', '', 'Tidak Terisi'),
(72, 'R4', 'Lilac', '', '0000-00-00', '', 'Tidak Terisi'),
(73, 'S1', 'Viola', '', '0000-00-00', '', 'Tidak Terisi'),
(74, 'S2', 'Viola', '', '0000-00-00', '', 'Tidak Terisi'),
(75, 'S3', 'Viola', '', '0000-00-00', '', 'Tidak Terisi'),
(76, 'S4', 'Viola', '', '0000-00-00', '', 'Tidak Terisi'),
(77, 'T1', 'Edelweiss', '', '0000-00-00', '', 'Tidak Terisi'),
(78, 'T2', 'Edelweiss', '', '0000-00-00', '', 'Tidak Terisi'),
(79, 'T3', 'Edelweiss', '', '0000-00-00', '', 'Tidak Terisi'),
(80, 'T4', 'Edelweiss', '', '0000-00-00', '', 'Tidak Terisi'),
(81, 'U1', 'Abelia', '', '0000-00-00', '', 'Tidak Terisi'),
(82, 'U2', 'Abelia', '', '0000-00-00', '', 'Tidak Terisi'),
(83, 'U3', 'Abelia', '', '0000-00-00', '', 'Tidak Terisi'),
(84, 'U4', 'Abelia', '', '0000-00-00', '', 'Tidak Terisi'),
(85, 'V1', 'Nerine', '', '0000-00-00', '', 'Tidak Terisi'),
(86, 'V2', 'Nerine', '', '0000-00-00', '', 'Tidak Terisi'),
(87, 'V3', 'Nerine', '', '0000-00-00', '', 'Tidak Terisi'),
(88, 'V4', 'Nerine', '', '0000-00-00', '', 'Tidak Terisi'),
(89, 'W1', 'Yolanda', '', '0000-00-00', '', 'Tidak Terisi'),
(90, 'W2', 'Yolanda', '', '0000-00-00', '', 'Tidak Terisi'),
(91, 'W3', 'Yolanda', '', '0000-00-00', '', 'Tidak Terisi'),
(92, 'W4', 'Yolanda', '', '0000-00-00', '', 'Tidak Terisi'),
(93, 'X1', 'Mimosa', '', '0000-00-00', '', 'Tidak Terisi'),
(94, 'X2', 'Mimosa', '', '0000-00-00', '', 'Tidak Terisi'),
(95, 'X3', 'Mimosa', '', '0000-00-00', '', 'Tidak Terisi'),
(96, 'X4', 'Mimosa', '', '0000-00-00', '', 'Tidak Terisi');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(123) NOT NULL,
  `nama_dokter` varchar(231) NOT NULL,
  `nama_pasien` varchar(231) NOT NULL,
  `keluhan` varchar(231) NOT NULL,
  `penyakit` varchar(231) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp(),
  `total_hari` int(123) NOT NULL,
  `nama_kamar` varchar(231) NOT NULL,
  `code_kamar` varchar(231) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_dokter`, `nama_pasien`, `keluhan`, `penyakit`, `tanggal_masuk`, `total_hari`, `nama_kamar`, `code_kamar`) VALUES
(25, 'ads', 'dasdasf', 'safsdf', 'asdddwad', '2024-09-04', 1, '', ''),
(26, 'Dr.s Dwi Reygha Febryan', 'Bayu', 'das', 'dsadas', '2024-09-01', 1, '', ''),
(27, 'Dr.s Dwi Reygha Febryan', 'Bayu', 'iuhnkm ,', 'dsadas', '2024-09-01', 1, '', ''),
(28, 'Dr.s Dwi Reygha Febryan', 'Bayu', 'dsaasd', 'dsadas', '2024-09-01', 1, '', ''),
(29, 'Dr.s Dwi Reygha Febryan', 'Bayu', 'adsasd', 'dsadas', '2024-09-01', 1, '', ''),
(30, 'Dr.s Dwi Reygha Febryan', 'Bayu', 'Mual Mual ,Kebanyakan Chocolatos', 'Hamil', '2024-09-01', 1, '', ''),
(31, 'Bayu', 'das', 'asdasd', 'Keseringan Ngocok', '2024-09-05', 1, '', ''),
(32, 'Yuari Choirul Kafi', 'mara', 'sakit perut ', 'lambung', '2024-09-07', 3, 'Dandelion', 'L1'),
(33, 'Rishqi', 'Lia', 'sakit Perut', 'lambung', '2024-09-07', 1, 'Lily', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(123) NOT NULL,
  `nama` varchar(231) NOT NULL,
  `username` varchar(231) NOT NULL,
  `password` varchar(231) NOT NULL,
  `profil` varchar(231) NOT NULL,
  `sebagai` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `profil`, `sebagai`) VALUES
(4, 'Yuari Choirul Kafi', 'kapi', '123', 'kapi.jpg', 'admin'),
(5, 'Reygha', 'ega', '123', '[k.jpg', 'admin'),
(6, 'Rishqi', 'iki', '123', 'ikilll.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
