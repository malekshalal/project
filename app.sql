-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 11:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_repo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `id_repo`) VALUES
(1, 'Metal-Shelves', 1),
(2, 'Dixon', 2),
(3, 'Book-Shelves', 1),
(4, 'Glass-Shelving', 3);

-- --------------------------------------------------------

--
-- Table structure for table `length`
--

CREATE TABLE `length` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `l1` int(11) NOT NULL,
  `l2` int(11) NOT NULL,
  `l3` int(11) NOT NULL,
  `l4` int(11) NOT NULL,
  `l5` int(11) NOT NULL,
  `l6` int(11) NOT NULL,
  `l7` int(11) NOT NULL,
  `l8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `length`
--

INSERT INTO `length` (`id`, `id_product`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`) VALUES
(2, 7, 50, 60, 70, 80, 90, 100, 110, 117);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `width` varchar(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `width`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `id_product`) VALUES
(1, '30', 26, 26, 26, 28, 28, 32, 34, 35, 7),
(4, '40', 35, 35, 35, 37, 37, 40, 42, 43, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_repo` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `color` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_repo`, `id_cat`, `name`, `color`, `image`, `price`, `id_user`) VALUES
(7, 1, 2, 'Dixon Shelving Systems', 'red', '../view/css/image/5_0.png', 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_price` int(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `Application_date` date NOT NULL,
  `end_date` date NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `num6` int(11) NOT NULL,
  `num7` int(11) NOT NULL,
  `num8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `id_prod`, `id_price`, `color`, `Application_date`, `end_date`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8`) VALUES
(13, 32, 7, 1, '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0),
(15, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0),
(16, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 1, 0, 0, 0, 0, 0, 0),
(17, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 1, 0, 0, 0, 0, 0, 0),
(18, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 1, 0, 0, 0, 0, 0, 1),
(19, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 1, 0, 0, 0, 0, 2, 6, 5),
(20, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 0, 2, 0, 0, 0, 7, 5),
(21, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 1, 0, 0, 0, 1, 0, 7, 5),
(22, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 0, 0, 0, 4, 0, 5, 5),
(23, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 0, 0, 2, 1, 0, 6, 5),
(24, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 0, 0, 0, 2, 1, 0, 6, 5),
(25, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 1, 0, 0, 0, 0, 2, 6, 5),
(26, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 1, 0, 0, 0, 0, 2, 6, 5),
(27, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 1, 0, 0, 0, 1, 0, 7, 5),
(28, 32, 7, 1, '#000000', '2021-05-16', '0000-00-00', 1, 0, 0, 0, 1, 0, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` double NOT NULL,
  `typeuser` varchar(11) NOT NULL,
  `last_login` bigint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `typeuser`, `last_login`) VALUES
(24, 'n', 'admin', 'maleksh2012@hotmail.com', 599123972, 'C', 1618822391),
(26, 'akram', '83695140', 'akram@gmail.com', 599123972, 'M', 0),
(30, 'admin', 'admin', 'malek@gmail.com', 599123972, 'A', 1621104403),
(31, 'dsfbg', '69347250', 'dsfbg@gmail.com', 599123972, 'R', 0),
(32, 'admin1', 'admin', 'maleksh2012@hotmail.com', 599123972, 'C', 1621194358);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_repo` (`id_repo`);

--
-- Indexes for table `length`
--
ALTER TABLE `length`
  ADD PRIMARY KEY (`id`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`,`width`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `width` (`width`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_repo` (`id_repo`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`,`id_price`,`id_prod`,`username`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_price` (`id_price`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `length`
--
ALTER TABLE `length`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `length`
--
ALTER TABLE `length`
  ADD CONSTRAINT `length_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`id_price`) REFERENCES `price` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_ibfk_4` FOREIGN KEY (`username`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
