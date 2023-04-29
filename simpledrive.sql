-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 07:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpledrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `konfirpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `username`, `pw`, `konfirpassword`) VALUES
(3, 'vigo@gmail.com', 'ego', '$2y$10$liS5xwfQQZrloc6Vz5Mczuv7WliW3x4f1pRCTnBIT1s/JQbDpOq9a', 'eviq'),
(4, 'jay@gmail.com', 'jay', '$2y$10$opLDr2fPYGDB6lgV/cGg4ucmVRqW9IBrm4BD13MTIm6zTYuMls7lG', '2020'),
(5, 'jayy@gmail.com', 'jayy', '$2y$10$L4bzssYemNvgwnOnjgve9O8qStEErQ3MZdVlsqoBuZZsqD9eCKlSu', '2020'),
(6, 'dita@gmail.com', 'dita', '$2y$10$JE/dXZSYP/lZpFnQADmEYeoaY2A0zvXjpAmENgLTAnZDsPbiRfZcm', '123'),
(7, 'sorsally@gmail.com', 'sour', '$2y$10$KGfXLXlBqCBIEfes5pSfBOCXjiEq5RGZr/L3Vky1cUUiwvpliZCA6', '123'),
(8, 'harry@gmail.com', 'harry', '$2y$10$HRA2eSZV3ItQUCbLwRpLT.L/FCrXuSdl8sMlM7yj3tXQFeXcFcwJe', '123'),
(9, 'jaemin@gmail.com', 'jaemin', '$2y$10$vOSzq1gKEtVYd9fzpkCNLe74jGNG2dN2N6OJT0sG8TSBjajLBcsKa', '123'),
(10, 'jake@gmail.com', 'jake', '$2y$10$6rk41f5f41s7l8.3I8JIXOgOmHPgxPGvbEuySgOlr7mQzoOrCYDEG', '123'),
(11, 'zara@gmail.com', 'zara', '$2y$10$JQpFHO4GVTJEGZM3/XER1eLz/xLSf2TcOm.ZMFJ7WKW6pBO7GdAkK', '123'),
(12, 'iqbaal@gmail.com', 'iqbaal', '$2y$10$EG/66sFaHz7hicEu8VNzSuaE3TcgphOyuXt/tSiZQTtXoXWsxspU.', ''),
(13, 'nopi@gmail.com', 'nopi', '$2y$10$d3fHegGHLE97DhfkSPakFO5DWxarvBCOQgo9hjdnOuyqcm.JdGInW', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `tipeDokumen` text NOT NULL,
  `namaDokumen` text NOT NULL,
  `tglUpload` date NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `username`, `tipeDokumen`, `namaDokumen`, `tglUpload`, `waktu`) VALUES
(64466, '', 'pdf', '2109106025_Rismayanti_Responsi6.pdf', '2023-04-27', '2023-04-27'),
(64471, '', 'pdf', '030_AgdithaEvalynLolongan_modul7.pdf', '2023-04-28', '2023-04-28'),
(64472, '', 'pdf', '030_AgdithaEvalynLolongan_modul7.pdf', '2023-04-28', '2023-04-28'),
(64473, '', 'pdf', '030_AgdithaEvalynLolongan_modul6.pdf', '2023-04-28', '2023-04-28'),
(64474, '', 'docx', 'POSTTEST.docx', '2023-04-28', '2023-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64475;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
