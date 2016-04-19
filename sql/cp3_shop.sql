-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 09:49 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp3_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `title`, `created`) VALUES
(1, 'Online Store', '2016-04-18 06:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `lft`, `rght`) VALUES
(1, 'Car', 0, 1, 16),
(2, 'Honda', 1, 2, 5),
(3, 'Nissan', 1, 6, 9),
(4, 'Suzuki', 1, 10, 15),
(7, 'GTR', 2, 3, 4),
(8, 'Mehran', 4, 11, 12),
(9, 'Cultus', 4, 13, 14),
(10, 'Skyline GTR', 3, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `categories_fields`
--

CREATE TABLE `categories_fields` (
  `category_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories_fields`
--

INSERT INTO `categories_fields` (`category_id`, `field_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(4, 4),
(8, 5),
(8, 6),
(9, 4),
(9, 5),
(9, 6),
(10, 5),
(10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `registerd_date` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `billing_address` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `pic_url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `fieldTypes_id` int(11) NOT NULL,
  `apps_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `fieldTypes_id`, `apps_id`, `title`, `created`) VALUES
(1, 1, 1, 'Model', '2016-04-18 06:55:36'),
(2, 2, 1, 'Engine_no', '2016-04-18 06:56:23'),
(3, 5, 1, 'retail_price', '2016-04-18 06:56:57'),
(4, 1, 1, 'model_no', '2016-04-18 07:15:38'),
(5, 1, 1, 'chasis_no', '2016-04-18 07:19:43'),
(6, 1, 1, 'color', '2016-04-18 07:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `fieldtypes`
--

CREATE TABLE `fieldtypes` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fieldtypes`
--

INSERT INTO `fieldtypes` (`id`, `name`) VALUES
(1, 'text'),
(2, 'number'),
(3, 'email'),
(4, 'phone'),
(5, 'currency');

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE `nodes` (
  `id` int(11) NOT NULL,
  `apps_id` int(11) NOT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `thumb` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `ud_Model` varchar(250) DEFAULT NULL,
  `ud_Engine_no` varchar(250) DEFAULT NULL,
  `ud_retail_price` varchar(250) DEFAULT NULL,
  `ud_model_no` varchar(250) DEFAULT NULL,
  `ud_chasis_no` varchar(250) DEFAULT NULL,
  `ud_color` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nodes_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `datetime` timestamp NULL DEFAULT NULL,
  `shipping_status` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `prod_total` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20160301121113, '2016-04-18 01:52:22', '2016-04-18 01:52:28'),
(20160404063306, '2016-04-18 01:52:28', '2016-04-18 01:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_fields`
--
ALTER TABLE `categories_fields`
  ADD PRIMARY KEY (`category_id`,`field_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apps_id` (`apps_id`),
  ADD KEY `fieldTypes_id` (`fieldTypes_id`);

--
-- Indexes for table `fieldtypes`
--
ALTER TABLE `fieldtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nodes`
--
ALTER TABLE `nodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apps_id` (`apps_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id` (`customers_id`),
  ADD KEY `nodes_id` (`nodes_id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fieldtypes`
--
ALTER TABLE `fieldtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nodes`
--
ALTER TABLE `nodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories_fields`
--
ALTER TABLE `categories_fields`
  ADD CONSTRAINT `categories_fields_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `categories_fields_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`);

--
-- Constraints for table `fields`
--
ALTER TABLE `fields`
  ADD CONSTRAINT `fields_ibfk_1` FOREIGN KEY (`apps_id`) REFERENCES `apps` (`id`),
  ADD CONSTRAINT `fields_ibfk_2` FOREIGN KEY (`fieldTypes_id`) REFERENCES `fieldtypes` (`id`);

--
-- Constraints for table `nodes`
--
ALTER TABLE `nodes`
  ADD CONSTRAINT `nodes_ibfk_1` FOREIGN KEY (`apps_id`) REFERENCES `apps` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`nodes_id`) REFERENCES `nodes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
