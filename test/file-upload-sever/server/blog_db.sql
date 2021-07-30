-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 08:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apidoc`
--

CREATE TABLE `tbl_apidoc` (
  `apidoc_id` int(11) NOT NULL,
  `header_id` int(11) DEFAULT NULL,
  `http` enum('HTTP/1.1','HTTPS/1.1','FTP/1.1','FTPS/1.1','NONE') DEFAULT NULL,
  `status_code` varchar(255) DEFAULT '200',
  `method` varchar(20) DEFAULT NULL,
  `routes` text DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `keyname` text DEFAULT NULL,
  `response_type` varchar(20) DEFAULT 'json',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apidoc`
--

INSERT INTO `tbl_apidoc` (`apidoc_id`, `header_id`, `http`, `status_code`, `method`, `routes`, `label`, `keyname`, `response_type`, `description`) VALUES
(1, 1, 'HTTP/1.1', '200', 'GET', 'role', 'All Roles', 'keyname = Na', 'json', 'Get All Records'),
(2, 2, 'HTTP/1.1', '200', 'GET', 'mega_category', 'Main Category', 'keyname=mega_cat_id,name,status,created_at,title,description,image_path,unicode,height,width\r\n', 'json', 'This is Megacategory shown in the web as part of module'),
(3, 3, 'HTTP/1.1', '200', 'GET', 'banner', 'Front Banner ', 'keyname = banner_slider_id,frontend_master_id,banner_title,banner_slogan,banner_resourcen,banner_redirect,status', 'json', 'Get All the Resources files for the links,cdn path that can be added to front End Slider'),
(4, 3, 'HTTP/1.1', '200', 'GET', 'category', 'All Category', 'keyname = cat_id ,mega_cat_id,category,status,created_by,created_at', 'json', 'Please Note in order to get category use the meta_category Api and get the Keyname = mega_cat_id from mega_Category Api and then use this api with endpoint mega_category as a url with any perticular Id specified for the Any Product.'),
(5, 4, 'HTTP/1.1', '200', 'GET', 'subcategory', 'All Subcategory', 'keyname = subcat_id ,cat_id,subcategory,status,created_by,created_at', 'json', 'Get all the Subcategories and fetch single api`s According cat_id.'),
(6, NULL, 'HTTP/1.1', '200', 'POST', 'findshop', 'Find All the Shops According to Lat and Long', 'keyname = shop_latitude	,shop_longitude,distance_km', 'json', 'You have to pass these keyname in post method and Raw json format only keyname are case sensitive.'),
(7, NULL, 'HTTP/1.1', '200', 'GET', 'findproduct_fromshop', 'Get All the Products', 'keyname = cat_id', 'json', NULL),
(8, NULL, 'HTTP/1.1', '200', 'POST', 'login', 'General User login using email and password', 'keyname = email,password', 'json', 'You have to pass these keyname in post method and Raw json format only keyname are case sensitive.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'disable',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `email`, `password`, `mobile`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(25, 'ashutosh', 'ashutoshmihra.cicst@gmail.com', 'wfg', '9812342', 'active', NULL, '2021-01-24 16:35:38', '2021-01-31 15:56:30'),
(27, 'Annop', 'ashutoshsttt@201534.com', '1234567', '7812345612', 'active', NULL, '2021-01-24 17:03:47', '2021-01-31 15:56:37'),
(28, 'aman', 'ashutoshkuar.cicst@gmail.com', '99999', '9090909023', 'disable', NULL, '2021-01-29 02:40:34', '2021-01-29 02:40:34'),
(29, 'ashutosh', 'ashutoshmishra.cicst@gmail.com', '123456', '8712345656', 'disable', NULL, '2021-02-01 10:15:25', '2021-02-01 10:15:25'),
(30, 'ashutosh', 'ashutosh.cicst@gmail.com', '123456', '9090909090', 'disable', NULL, '2021-02-01 10:17:11', '2021-02-01 10:17:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apidoc`
--
ALTER TABLE `tbl_apidoc`
  ADD PRIMARY KEY (`apidoc_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apidoc`
--
ALTER TABLE `tbl_apidoc`
  MODIFY `apidoc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
