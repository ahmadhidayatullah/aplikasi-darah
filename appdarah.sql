-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2017 at 06:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appdarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_darah`
--

CREATE TABLE `cat_darah` (
  `id` int(11) NOT NULL,
  `nm` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_darah`
--

INSERT INTO `cat_darah` (`id`, `nm`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `data_masyarakat`
--

CREATE TABLE `data_masyarakat` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `almt` text NOT NULL,
  `cat_darah` tinyint(2) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `jkl` enum('L','P') NOT NULL,
  `tgl_up` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_masyarakat`
--

INSERT INTO `data_masyarakat` (`id`, `nm`, `almt`, `cat_darah`, `hp`, `jkl`, `tgl_up`) VALUES
(1, 'ahmad', 'btp blok', 3, '0872553', 'P', '2016-09-18'),
(7, 'Harwanto', 'btp blok', 2, '085254970102', 'L', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_darah`
--

CREATE TABLE `stock_darah` (
  `id` tinyint(2) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_darah`
--

INSERT INTO `stock_darah` (`id`, `qty`) VALUES
(1, 10),
(2, 5),
(3, 15),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(38) NOT NULL,
  `level` enum('administrator','chief') NOT NULL DEFAULT 'chief'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '62c8ad0a15d9d1ca38d5dee762a16e01', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_darah`
--
ALTER TABLE `cat_darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_masyarakat`
--
ALTER TABLE `data_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_darah`
--
ALTER TABLE `stock_darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_darah`
--
ALTER TABLE `cat_darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_masyarakat`
--
ALTER TABLE `data_masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
