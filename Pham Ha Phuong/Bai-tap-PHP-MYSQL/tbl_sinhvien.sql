-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 08:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `ID` int(3) NOT NULL,
  `maSV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenSV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `gioiTInh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMND` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `anhDaiDien` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sinhvien`
--

INSERT INTO `tbl_sinhvien` (`ID`, `maSV`, `tenSV`, `ngaySinh`, `gioiTInh`, `diaChi`, `email`, `SDT`, `CMND`, `anhDaiDien`) VALUES
(9, 'A1', 'Sinh', '2021-10-02', 'Nam', NULL, NULL, NULL, '2311', NULL),
(10, 'A4', 'Lan', '2021-02-02', 'Nữ', NULL, NULL, NULL, '39', NULL),
(14, 'A5', 'Khôi', '2021-04-04', 'Nam', NULL, NULL, NULL, '2121', NULL),
(15, 'A2', 'Nam', '2021-09-09', 'Nam', NULL, NULL, NULL, '939', NULL),
(16, 'A3', 'a', '2021-12-10', 'Nam', NULL, NULL, NULL, '01234', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
