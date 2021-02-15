-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 01:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id_company` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `company_name` varchar(22) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id_company`, `image`, `company_name`, `about`) VALUES
(2, 'produk.jpg', 'Handphone', 'HP Samsung Note 10 5G'),
(3, 'produk4.jpg', 'Tablet', 'Samsung XE500 ATIV'),
(4, 'produk6.jpg', 'Jam Tangan', 'Samsung Gear S3 Frontier'),
(6, 'produk5.jpg', 'Laptop', 'Samsung TabPro 2in1 HD+'),
(7, 'produk3.jpg', 'Headset', 'Samsung Headset Bluetooth'),
(8, 'produk7.jpg', 'Kulkas', 'Kulkas 2 Pintu RT-50K6241S8'),
(9, 'produk9.jpg', 'Mesin Cuci', 'SAMSUNG WA-70 H4000SG'),
(10, 'tv.jpg', 'TV', 'TV LED 32 inch Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_company` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_company`, `id_detail`, `tittle`, `desc`) VALUES
(2, 18, 'Spesifikasi', 'Kamera : 16 MP'),
(2, 19, '', 'Batrai : 5000 MaH'),
(2, 20, '', 'RAM : 8 GB'),
(2, 21, '', 'Hrga : Rp. 9.999.999'),
(3, 22, 'Spesifikasi', ''),
(3, 23, '', 'Kamera : 15 MP'),
(3, 24, '', 'RAM : 2 GB'),
(3, 25, '', 'Harga : Rp. 9.949.000'),
(4, 26, 'Spesifikasi', 'Layar : 1.3 Inch Super AMELOD'),
(4, 27, '', 'RAM : 768 MB'),
(4, 28, '', 'Harga : Rp. 4.312.000'),
(6, 29, 'Spesifikasi', 'Kamera : 5 MP'),
(6, 30, '', 'Batrai : 5000 MaH'),
(6, 31, '', 'Hardware : Intel HD Graphics 515'),
(6, 32, '', 'Harga : Rp. 9.949.000'),
(7, 33, 'Spesifikasi', 'Type :  	: Bluetooth Version V3.0'),
(8, 34, 'Spesifikasi', 'Harga :  	: Rp. 8.900.000'),
(9, 35, 'Spesifikasi', 'Harga : : Rp. 2.749.000'),
(10, 36, 'Spesifikasi', 'Harga :  	: Rp. 8.900.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(9, 'eww', 'qwe', 'qwe@gmail.com'),
(10, 'Taufik Barokah Nur', '123', 'taufikbarokahnur@gmail.com'),
(11, 'widya10', 'widya10', 'widyamayasari10@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
