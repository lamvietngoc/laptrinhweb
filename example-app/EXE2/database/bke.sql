-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2025 at 09:43 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bke`
--

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

DROP TABLE IF EXISTS `oders`;
CREATE TABLE IF NOT EXISTS `oders` (
  `order_id` int NOT NULL AUTO_INCREMENT COMMENT 'Mã số đơn hàng',
  `user_id` int NOT NULL COMMENT 'Mã user',
  `updated_at` datetime DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `created_at` datetime DEFAULT NULL COMMENT 'Thời gian tạo',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int NOT NULL AUTO_INCREMENT COMMENT 'Mã số chi tiết đơn\r\nhàng',
  `order_id` int NOT NULL COMMENT 'Mã số đơn hàng',
  `product_id` int NOT NULL COMMENT 'Mã số sản phẩm',
  `updated_at` datetime DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `created_at` datetime DEFAULT NULL COMMENT 'Thời gian tạo',
  PRIMARY KEY (`order_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT COMMENT 'Mã số sản phẩm',
  `product_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tên sản phẩm',
  `product_price` double NOT NULL COMMENT 'Giá sản phẩm',
  `product_description` text COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Mô tả sản phẩm',
  `updated_at` datetime DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `created_at` datetime DEFAULT NULL COMMENT 'Thời gian tạo',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT COMMENT 'Mã số user',
  `user_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tên user',
  `user_email` varchar(55) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Email',
  `user_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Mật khẩu',
  `updated_at` datetime DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `created_at` datetime DEFAULT NULL COMMENT 'Thời gian tạo',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
