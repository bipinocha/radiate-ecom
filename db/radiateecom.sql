-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2017 at 01:01 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-12~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radiateecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL,
  `brand` varchar(255) NOT NULL,
  `seller_name` varchar(2000) NOT NULL,
  `seller_email` varchar(255) NOT NULL,
  `sku_id` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `uploaded_on` varchar(255) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `_id` int(11) NOT NULL,
  `seller_name` varchar(2000) NOT NULL,
  `seller_city` varchar(255) DEFAULT NULL,
  `seller_email` varchar(255) NOT NULL,
  `seller_seller` text,
  `amazon` tinyint(1) NOT NULL DEFAULT '0',
  `flipkart` tinyint(1) NOT NULL DEFAULT '0',
  `snapdeal` tinyint(1) NOT NULL DEFAULT '0',
  `myntra` tinyint(1) NOT NULL DEFAULT '0',
  `shopclues` tinyint(1) NOT NULL DEFAULT '0',
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller_seller`
--

CREATE TABLE `seller_seller` (
  `_id` int(11) NOT NULL,
  `seller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploadexcel`
--

CREATE TABLE `uploadexcel` (
  `_id` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `brand` varchar(255) NOT NULL,
  `filename` varchar(1000) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `merchant_name` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `seller_email` (`seller_email`),
  ADD KEY `sku_id` (`sku_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `seller_seller`
--
ALTER TABLE `seller_seller`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `uploadexcel`
--
ALTER TABLE `uploadexcel`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller_seller`
--
ALTER TABLE `seller_seller`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploadexcel`
--
ALTER TABLE `uploadexcel`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
