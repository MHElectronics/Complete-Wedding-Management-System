-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 10:29 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` int(11) NOT NULL,
  `bdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `email`, `ph`, `bdate`) VALUES
(1, 'Tamjid', 'tr@gmail.com', 1716696361, '2021-05-31'),
(2, 'Tamjid', 'tr@gmail.com', 1716696361, '2021-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cph` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `dphone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dusername` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dprice` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`id`, `dname`, `daddress`, `dphone`, `email`, `dusername`, `pass`, `dprice`, `image`) VALUES
(1, 'floriate', 'Dhaka', '017888', 's@gmail.com', 'Supti', '123', '10000', '_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `fcname` varchar(255) NOT NULL,
  `fcloc` varchar(255) NOT NULL,
  `fcprice` varchar(11) NOT NULL,
  `fcdes` varchar(255) NOT NULL,
  `fcuser` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fcph` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `fcname`, `fcloc`, `fcprice`, `fcdes`, `fcuser`, `email`, `fcph`, `pass`, `image`) VALUES
(1, 'Dine', 'Dhaka', '10000', 'nbhbhcbvh', 'Rifa', 'Rifa@gmail.com', '017', '123', '1.jpg'),
(2, 'Food plate', 'dhaka', '10000', 'Best food', 'Ripa', 'Ripa@gmail.com', 'fcph', '123', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hal`
--

CREATE TABLE `hal` (
  `id` int(11) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `hloc` varchar(255) NOT NULL,
  `hcap` varchar(255) NOT NULL,
  `hdes` varchar(255) NOT NULL,
  `huser` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hprice` varchar(11) NOT NULL,
  `hphone` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hal`
--

INSERT INTO `hal` (`id`, `hname`, `hloc`, `hcap`, `hdes`, `huser`, `email`, `pass`, `hprice`, `hphone`, `image`) VALUES
(1, 'Wedding', 'dhaka', '20000', 'Best place', 'Kajol', 'kajol@gmail.com', '123', '40000', '01792214546', 'hall9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `photoblust`
--

CREATE TABLE `photoblust` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `ploc` varchar(255) NOT NULL,
  `pprice` varchar(11) NOT NULL,
  `pdes` varchar(255) NOT NULL,
  `puser` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pph` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photoblust`
--

INSERT INTO `photoblust` (`id`, `pname`, `ploc`, `pprice`, `pdes`, `puser`, `email`, `pph`, `pass`, `image`) VALUES
(1, 'photolab', 'Dhaka', '100000', 'Your dream photographer', 'Puja', 'puja@gmail.com', 'pph', '123', '2.jpg'),
(2, 'PhotoBlust', 'Dhaka', '100000', 'cskopszxcoijsauchdyxgcbh', 'Rima', 'Rima@gamil.com', 'pph', '123', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hal`
--
ALTER TABLE `hal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photoblust`
--
ALTER TABLE `photoblust`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hal`
--
ALTER TABLE `hal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photoblust`
--
ALTER TABLE `photoblust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
