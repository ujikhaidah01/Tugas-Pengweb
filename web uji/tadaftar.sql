-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 10:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tadaftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadaftar`
--

CREATE TABLE `tadaftar` (
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `instansi` varchar(40) NOT NULL,
  `no telepon` int(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tadaftar`
--

INSERT INTO `tadaftar` (`email`, `username`, `instansi`, `no telepon`, `password`) VALUES
('ujiresti@gmail.com', 'uji', 'Unila', 98, '123'),
('indria@gmail.com', 'iin', 'Unila', 876, '456'),
('arbain@gmail.com', 'arbain', 'unila', 657, '789'),
('hilmi@gmail.com', 'hilmik', 'Unila', 543, '12hilmi'),
('sawitrifinak@gmail.com', 'sawi', 'unila', 654, '12saw'),
('vetinirmala@gmail.com', 'veti', 'Unila', 765, '12veti'),
('finaarzz@gmail.com', 'fina', 'unila', 8776, '65441'),
('apriliaanur@gmail.com', 'april', 'Unila', 86, '12qp'),
('ajialwi@gmail.com', 'aji', 'Unila', 2211, '12aj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
