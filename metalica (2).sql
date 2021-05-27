-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 03:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metalica`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_banners`
--

CREATE TABLE `m_banners` (
  `b_id` int(11) NOT NULL,
  `b_image` text NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_position` int(11) NOT NULL,
  `b_status` varchar(255) NOT NULL,
  `b_createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `b_updatedat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_banners`
--

INSERT INTO `m_banners` (`b_id`, `b_image`, `b_title`, `b_position`, `b_status`, `b_createdat`, `b_updatedat`) VALUES
(12, 'fist.jpg', 'first', 1, 'Active', '2021-05-19 13:16:25', '2021-05-19 13:16:25'),
(13, 'second.jpg', 'second', 1, 'Active', '2021-05-19 13:16:46', '2021-05-19 13:16:46'),
(14, 'mid.jpg', 'mid', 3, 'Active', '2021-05-19 13:18:26', '2021-05-19 13:18:26'),
(15, 'ohho.jpg', 'ohho', 2, 'Active', '2021-05-19 13:20:56', '2021-05-19 13:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `m_categories`
--

CREATE TABLE `m_categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_status` varchar(255) NOT NULL,
  `c_createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_updatedat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_categories`
--

INSERT INTO `m_categories` (`c_id`, `c_name`, `c_status`, `c_createdat`, `c_updatedat`) VALUES
(2, 'electronics1', 'Active', '2021-05-10 13:48:15', '2021-05-10 13:48:15'),
(3, 'ascd', 'Active', '2021-05-10 14:53:42', '2021-05-10 14:53:42'),
(5, 'rupa', 'Active', '2021-05-11 09:45:17', '2021-05-11 09:45:17'),
(7, 'ABCD', 'Active', '2021-05-11 12:26:41', '2021-05-11 12:43:02'),
(8, 'electronics123', 'Active', '2021-05-11 12:42:46', '2021-05-11 12:42:46'),
(9, 'ABCD', 'Active', '2021-05-11 12:43:02', '2021-05-11 12:43:02'),
(10, 'cccca', 'Active', '2021-05-12 06:32:12', '2021-05-13 12:57:08'),
(12, 'cccca', 'Active', '2021-05-13 12:57:09', '2021-05-13 12:57:09'),
(13, 'swati', 'Active', '2021-05-19 12:52:32', '2021-05-19 12:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `m_customers`
--

CREATE TABLE `m_customers` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `custadd_id` int(11) NOT NULL,
  `cust_phno` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_otp` varchar(255) DEFAULT NULL,
  `otp_used` varchar(255) DEFAULT NULL,
  `cust_image` varchar(255) DEFAULT NULL,
  `cust_mobtoken` varchar(255) NOT NULL,
  `cust_mobotp` int(11) NOT NULL,
  `cust_mobotpstatus` int(11) NOT NULL,
  `cust_deviceid` varchar(255) NOT NULL,
  `cust_type` varchar(255) DEFAULT NULL,
  `cust_status` varchar(255) NOT NULL,
  `cust_createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_customers`
--

INSERT INTO `m_customers` (`cust_id`, `cust_name`, `custadd_id`, `cust_phno`, `cust_email`, `cust_otp`, `otp_used`, `cust_image`, `cust_mobtoken`, `cust_mobotp`, `cust_mobotpstatus`, `cust_deviceid`, `cust_type`, `cust_status`, `cust_createdat`) VALUES
(1, 'dipak', 0, '9834122529', 'dipakaher000@gmail.com', '0101', NULL, NULL, '', 0, 0, '', NULL, 'Active', '2021-05-20 13:40:04'),
(2, 'shinde pratiksha', 0, '7667889987', 'srteyurs', '0101', NULL, NULL, '', 0, 0, '', NULL, 'Active', '2021-05-21 14:20:09'),
(3, 'shinde gorakshnath', 0, '9623479283', 'gorakshnath19991@gmail.com', '0101', NULL, NULL, '', 0, 0, '', NULL, 'Active', '2021-05-22 07:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `m_product`
--

CREATE TABLE `m_product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_cat_id` int(11) NOT NULL,
  `prod_description` varchar(255) NOT NULL,
  `prod_tags` varchar(255) NOT NULL,
  `prod_aprice` decimal(10,2) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_type` varchar(255) NOT NULL,
  `prod_qty` int(255) NOT NULL,
  `prod_imageone` text NOT NULL,
  `prod_imagetwo` text NOT NULL,
  `prod_imagethree` text NOT NULL,
  `prod_imagefour` text NOT NULL,
  `prod_imagefive` text NOT NULL,
  `prod_status` varchar(255) NOT NULL,
  `prod_createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `prod_updatedat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_product`
--

INSERT INTO `m_product` (`prod_id`, `prod_name`, `prod_cat_id`, `prod_description`, `prod_tags`, `prod_aprice`, `prod_price`, `prod_type`, `prod_qty`, `prod_imageone`, `prod_imagetwo`, `prod_imagethree`, `prod_imagefour`, `prod_imagefive`, `prod_status`, `prod_createdat`, `prod_updatedat`) VALUES
(9, 'watch', 0, '                                                            fdhtzhzethet                                        ', 'hand watch,wrist watch', '900.00', '750.00', '1', 500, '', '', '', '', '', 'Active', '2021-05-20 10:47:20', '2021-05-20 10:47:20'),
(10, 'colling fan', 0, '                                                                                                      gyufrqyigfhjDg                                                ', 'air freshner', '2500.00', '200.00', 'LATEST', 300, '500KB.jpg', '15961865819701.jpg', '1594715360751VIVO Y69(1) - Copy.jpg', '15961865819701.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', 'Active', '2021-05-20 10:47:13', '2021-05-20 10:47:13'),
(11, 'lipstiks', 0, '                                                                                                        GIUGUOIGOUIYPIU                                                                                                ', 'njckzhfoisH', '300.00', '200.00', 'FEATURED', 200, '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', 'Active', '2021-05-20 10:47:06', '2021-05-20 10:47:06'),
(12, 'kicchen', 0, '                                                                                                                                                                  etway34                                                                                      ', 'aetw', '3400.00', '2500.00', 'POPULAR', 50, '500KB.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '1594715360751VIVO Y69(1) - Copy.jpg', '1594715360751VIVO Y69(1) - Copy.jpg', '500KB.jpg', 'Active', '2021-05-20 10:46:19', '2021-05-20 10:46:19'),
(13, 'lipstikssss', 8, '                                                  testrs', 'j', '2500.00', '2000.00', 'FEATURED', 20, '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', '05cf98a079218c54afe67470c77d6ae2.jpg', 'Active', '2021-05-20 10:45:47', '2021-05-20 10:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `m_wishlist`
--

CREATE TABLE `m_wishlist` (
  `wish_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `wish_status` varchar(255) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `wish_createddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_wishlist`
--

INSERT INTO `m_wishlist` (`wish_id`, `product_id`, `wish_status`, `cust_id`, `wish_createddate`) VALUES
(3, 12, 'Active', 2, '2021-05-20 13:11:37'),
(4, 13, 'Active', 2, '2021-05-20 13:17:08'),
(5, 9, 'Active', 3, '2021-05-20 13:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(20) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_contact` varchar(13) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_gender` varchar(20) NOT NULL,
  `u_role` varchar(50) NOT NULL,
  `u_createdat` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `u_updatedat` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `u_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_username`, `u_password`, `u_email`, `u_contact`, `u_address`, `u_gender`, `u_role`, `u_createdat`, `u_updatedat`, `u_status`) VALUES
(1, 'admin123', 'admin@123', 'rupa@gmail.com', '             ', '                                                    sangamner khurd                                 ', 'FEMALE', 'Admin', '0000-00-00 00:00:00.000000', '2021-05-16 07:52:27.000000', 'Active'),
(7, 'aher dipak shivaji', 'rupa', 'dipak000@gmail.com', '9834122529', 'ganore', 'MALE', 'Seller', '2021-05-08 11:56:08.000000', '2021-05-08 12:02:20.634553', 'Active'),
(8, 'rupa shinde', 'abcd@123', 'pratiksha223@gmail.com', '7666920743', 'sangamner khurd', 'FEMALE', 'Customer', '2021-05-08 11:58:56.000000', '2021-05-16 07:52:51.109325', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_banners`
--
ALTER TABLE `m_banners`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `m_categories`
--
ALTER TABLE `m_categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `m_customers`
--
ALTER TABLE `m_customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `tbl_cust_fk0` (`custadd_id`),
  ADD KEY `custadd_id_3` (`custadd_id`);

--
-- Indexes for table `m_product`
--
ALTER TABLE `m_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `m_wishlist`
--
ALTER TABLE `m_wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_banners`
--
ALTER TABLE `m_banners`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_categories`
--
ALTER TABLE `m_categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `m_customers`
--
ALTER TABLE `m_customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_product`
--
ALTER TABLE `m_product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `m_wishlist`
--
ALTER TABLE `m_wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
