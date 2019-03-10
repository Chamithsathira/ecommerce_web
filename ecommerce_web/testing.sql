-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 05:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` varchar(50) NOT NULL,
  `p_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `p_id`, `p_name`, `price`) VALUES
('chamithsathira@gmail.com', 1, 'Samsung Galaxy s10', 170000),
('chamithsathira@gmail.com', 2, 'Samsung Galaxy s10+', 188000),
('jp@gmail.com', 1, 'Samsung Galaxy s10', 170000),
('jp@gmail.com', 3, 'Apple iphone XS max', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `p_name`, `price`, `stock`) VALUES
(1, 'Samsung Galaxy s10', 170000, 10),
(2, 'Samsung Galaxy s10+', 188000, 10),
(3, 'Apple iphone XS max', 200000, 6),
(4, 'Apple iphone XR', 189000, 5),
(5, 'Samsung Galaxy Note 9', 165000, 9),
(6, 'Samsung Galaxy A9', 65000, 12),
(7, 'Apple iphone XS', 199000, 6),
(8, 'Oneplus 6T', 79000, 12),
(9, 'Google Pixel 3XL', 120000, 8),
(10, 'Samsung Galaxy M20', 35000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `password`) VALUES
(0, 'Chamith', 'Sathira', 'chamith.sathira@gmail.com', '1234'),
(0, 'Janaka', 'Pradeep', 'jp@gmail.com', 'janaka'),
(0, 'Ruwan', 'bandara', 'ruwan@gmail.com', 'ruwan'),
(0, 'Dilan', 'Madhusanka', 'dilan@gmail.com', 'hasnui'),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, 'sds', 'sdsd', 'sdsd', 'sdsd'),
(0, 'janaka', 'janaka', 'janaka', 'c89507d6ac53bdcf2a2ce33a1d9fa1e1d3ffddb7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
