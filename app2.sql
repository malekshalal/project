-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 02:40 AM
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
-- Database: `app2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `Special` int(11) NOT NULL DEFAULT 0,
  `id_repo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `Special`, `id_repo`) VALUES
(8, 'رفوف زجاجية', 'DSC02617_0.jpg', 1, 0);

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
(7, 8, 50, 60, 70, 80, 90, 100, 119, 117);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturing`
--

CREATE TABLE `manufacturing` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `succeded` int(11) NOT NULL,
  `fail` int(11) NOT NULL,
  `id_requests` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_length` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturing`
--

INSERT INTO `manufacturing` (`id`, `id_user`, `succeded`, `fail`, `id_requests`, `id_product`, `id_length`, `quantity`) VALUES
(21, 1, 50, 20, 28, 8, 7, 70);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `width` int(11) NOT NULL,
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
(12, 40, 35, 26, 26, 28, 37, 32, 42, 35, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_repo` int(11) NOT NULL,
  `color` int(25) NOT NULL,
  `image` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `id_cat`, `id_repo`, `color`, `image`, `price`) VALUES
(8, 'رفوف زجاجيه', 8, 11, 0, 'DSC02617_0.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `repository`
--

CREATE TABLE `repository` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `l1` int(11) NOT NULL,
  `l2` int(11) NOT NULL,
  `l3` int(11) NOT NULL,
  `l4` int(11) NOT NULL,
  `l5` int(11) NOT NULL,
  `l6` int(11) NOT NULL,
  `l7` int(11) NOT NULL,
  `l8` int(11) NOT NULL,
  `data_in` int(11) NOT NULL,
  `data_out` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repository`
--

INSERT INTO `repository` (`id`, `number`, `name`, `quantity`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `data_in`, `data_out`, `id_user`) VALUES
(0, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(1, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(2, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(3, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(4, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(5, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(6, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(7, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(8, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(9, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(10, 512, 'وادالهريه', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14),
(11, 512, 'وادالهريه', 50, 30, 7, 0, 0, 0, 0, 40, 0, 0, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_price` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `Application_date` date NOT NULL,
  `end_date` date NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `num6` int(11) NOT NULL,
  `num7` int(11) NOT NULL,
  `num8` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `id_prod`, `id_price`, `color`, `Application_date`, `end_date`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8`, `status`, `length`) VALUES
(28, 1, 8, 12, '#000000', '2021-06-02', '2021-06-02', 1, 1, 0, 0, 0, 0, 6, 0, 2, 829),
(29, 1, 8, 12, '#000000', '2021-06-02', '2021-06-02', 0, 0, 1, 0, 0, 0, 1, 6, 1, 896);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id_repo` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id_repo`, `id_product`) VALUES
(11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` double NOT NULL,
  `typeuser` varchar(11) NOT NULL,
  `last_login` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `typeuser`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'malek@gmail.com', 599123972, 'A', 1622589050),
(13, 'ali', '21232f297a57a5a743894a0e4a801fc3', 'malek@gmail.com', 599123972, 'M', 1622469390),
(14, 'mahmmod', '21232f297a57a5a743894a0e4a801fc3', 'malek@gmail.com', 599123972, 'R', 1622589291),
(15, 'mohammad', '0b826b4caf6bf1178026214eef7b7e08', 'mohammad@gmail.com', 599123972, 'R', 0),
(17, 'hassan', '8ba487fee2d499f31a8ae3d073f06deb', 'hassan@gmail.com', 599123972, 'M', 1622589080),
(18, 'ahmad', '21232f297a57a5a743894a0e4a801fc3', 'maleksh2012@hotmail.', 599123972, 'C', 1622469682),
(19, 'malek', '21232f297a57a5a743894a0e4a801fc3', 'maleksh2012@hotmail.', 599123972, 'C', 0);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `manufacturing`
--
ALTER TABLE `manufacturing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_requests` (`id_requests`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_length` (`id_length`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`width`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_repo` (`id_repo`);

--
-- Indexes for table `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`number`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_price` (`id_price`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id_repo`,`id_product`),
  ADD KEY `store_ibfk_2` (`id_product`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `length`
--
ALTER TABLE `length`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manufacturing`
--
ALTER TABLE `manufacturing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`id_repo`) REFERENCES `repository` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `length`
--
ALTER TABLE `length`
  ADD CONSTRAINT `length_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `manufacturing`
--
ALTER TABLE `manufacturing`
  ADD CONSTRAINT `manufacturing_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `manufacturing_ibfk_2` FOREIGN KEY (`id_requests`) REFERENCES `requests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `manufacturing_ibfk_4` FOREIGN KEY (`id_length`) REFERENCES `length` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `manufacturing_ibfk_5` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_repo`) REFERENCES `repository` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`id_price`) REFERENCES `price` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_ibfk_4` FOREIGN KEY (`id_prod`) REFERENCES `product` (`id`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`id_repo`) REFERENCES `repository` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `store_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
