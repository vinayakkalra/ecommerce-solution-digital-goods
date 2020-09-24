-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 06:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_data_export`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_india_database`
--

CREATE TABLE `all_india_database` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(1000) NOT NULL,
  `available_field` varchar(1000) NOT NULL,
  `records` varchar(1000) NOT NULL,
  `discount_percentage` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_india_database`
--

INSERT INTO `all_india_database` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', 'ALL INDIA DATABASE', 12890, 1299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', 'ALL INDIA DATABASE', 12890, 1299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', 'ALL INDIA DATABASE', 12890, 1299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', 'ALL INDIA DATABASE', 12890, 1299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(5, './img/data.png', 'ALL INDIA DATABASE', 12890, 1299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(6, './img/data.png', 'ALL INDIA DATABASE', 12890, 1299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `b2b`
--

CREATE TABLE `b2b` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(2000) NOT NULL,
  `available_field` varchar(2000) NOT NULL,
  `records` varchar(2000) NOT NULL,
  `discount_percentage` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b2b`
--

INSERT INTO `b2b` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', ' B2B / B2C INDIAN COMPANIES DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', ' B2B / B2C INDIAN COMPANIES DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', ' B2B / B2C INDIAN COMPANIES DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', ' B2B / B2C INDIAN COMPANIES DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(200) NOT NULL,
  `Name` text NOT NULL,
  `Phone` int(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `MSG` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `from_ip` varchar(200) NOT NULL,
  `from_browser` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `Name`, `Phone`, `Email`, `MSG`, `time`, `from_ip`, `from_browser`) VALUES
(1, 'Parvinder', 2147483647, 'Parvinder@gmail.com', 'Parvinder', 'Wed, 16 Sep 2020 18:57:45 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(3000) NOT NULL,
  `available_field` varchar(3000) NOT NULL,
  `records` varchar(3000) NOT NULL,
  `discount_percentage` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', 'GOVERNMENT EMPLOYEES DATABASE', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', 'GOVERNMENT EMPLOYEES DATABASE', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', 'GOVERNMENT EMPLOYEES DATABASE', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', 'GOVERNMENT EMPLOYEES DATABASE', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_seekers`
--

CREATE TABLE `job_seekers` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(3000) NOT NULL,
  `available_field` varchar(3000) NOT NULL,
  `records` varchar(3000) NOT NULL,
  `discount_percentage` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', 'JOB SEEKERS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', 'JOB SEEKERS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', 'JOB SEEKERS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', 'JOB SEEKERS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `phone` varchar(800) NOT NULL,
  `country` varchar(800) NOT NULL,
  `address` varchar(800) NOT NULL,
  `state` varchar(800) NOT NULL,
  `Pincode` varchar(800) NOT NULL,
  `city` varchar(800) NOT NULL,
  `date_now` varchar(800) NOT NULL,
  `from_ip` varchar(800) NOT NULL,
  `from_browser` varchar(800) NOT NULL,
  `status` varchar(800) NOT NULL,
  `razorpay_payment_id` varchar(800) NOT NULL,
  `table_name` varchar(800) NOT NULL,
  `product_id` varchar(800) NOT NULL,
  `amount` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `country`, `address`, `state`, `Pincode`, `city`, `date_now`, `from_ip`, `from_browser`, `status`, `razorpay_payment_id`, `table_name`, `product_id`, `amount`) VALUES
(1, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'country', 'address', 'state', 'pincode', 'city', 'Thu, 24 Sep 2020 04:20:26 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'processing', '', 'other_databases', '2', '299'),
(2, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'k', 'k', 'k', 'k', 'k', 'Thu, 24 Sep 2020 04:21:13 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'processing', '', 'other_databases', '2', '299'),
(3, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'k', 'k', 'k', 'k', 'k', 'Thu, 24 Sep 2020 04:22:22 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'processing', '', 'other_databases', '2', '299'),
(4, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'hjb', 'lhbj', 'hjb', 'hb', 'jhb', 'Thu, 24 Sep 2020 04:29:34 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'paid', 'pay_Fge2nSuDt24uck', 'other_databases', '2', '299'),
(5, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'Thu, 24 Sep 2020 04:35:26 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'paid', 'pay_Fge8na4owDjaZn', 'students_database', '2', '599'),
(6, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'country', 'adress', 'state', 'pincode', 'city', 'Thu, 24 Sep 2020 04:49:27 +0530', '::1', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36', 'paid', 'pay_FgeNhMvAXKgJ7n', 'students_database', '2', '599'),
(7, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'n ', 'n ', 'n ', 'n', 'n ', 'Thu, 24 Sep 2020 08:49:43 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'paid', 'pay_FgiTQMSrRmtuVF', 'students_database', '3', '599');

-- --------------------------------------------------------

--
-- Table structure for table `other_databases`
--

CREATE TABLE `other_databases` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(3000) NOT NULL,
  `available_field` varchar(3000) NOT NULL,
  `records` varchar(3000) NOT NULL,
  `discount_percentage` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_databases`
--

INSERT INTO `other_databases` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', 'OTHER DATABASES', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', 'Advocates / Lawyers Database', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', 'Agents Database', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', 'Apparel / Garments Exporters Database', 299, 299, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `policy_bazaar`
--

CREATE TABLE `policy_bazaar` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(3000) NOT NULL,
  `available_field` varchar(3000) NOT NULL,
  `records` varchar(3000) NOT NULL,
  `discount_percentage` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy_bazaar`
--

INSERT INTO `policy_bazaar` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', 'POLICY BAZAAR DATABASE', 399, 399, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', 'POLICY BAZAAR DATABASE', 399, 399, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', 'POLICY BAZAAR DATABASE', 399, 399, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', 'POLICY BAZAAR DATABASE', 399, 399, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_category`, `table_name`, `download_link`) VALUES
(1, 'B2B / B2C Indian Companies Database', 'b2b', ''),
(2, 'Government Employees Database', 'government', ''),
(3, 'Students Database', 'students_database', ''),
(4, 'Job Seekers Database', 'job_seekers', ''),
(5, 'All India Database', 'all_india_database', ''),
(6, 'Other Databases', 'other_databases', ''),
(7, 'Policy Bazaar Database', 'policy_bazaar', '');

-- --------------------------------------------------------

--
-- Table structure for table `students_database`
--

CREATE TABLE `students_database` (
  `id` int(200) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `category` varchar(3000) NOT NULL,
  `original_price` int(200) NOT NULL,
  `discounted_price` int(200) NOT NULL,
  `full_description` varchar(3000) NOT NULL,
  `available_field` varchar(3000) NOT NULL,
  `records` varchar(3000) NOT NULL,
  `discount_percentage` varchar(20) NOT NULL,
  `download_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_database`
--

INSERT INTO `students_database` (`id`, `image`, `category`, `original_price`, `discounted_price`, `full_description`, `available_field`, `records`, `discount_percentage`, `download_link`) VALUES
(1, './img/data.png', 'STUDENTS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(2, './img/data.png', 'STUDENTS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(3, './img/data.png', 'STUDENTS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', ''),
(4, './img/data.png', 'STUDENTS DATABASE', 599, 599, '   <li >Number of records : 980,000,000 Mobile Number List</li>                             <li >18GB+ Data</li>                             <li >Download Instantly</li>                             <li >Download speed – 14 Mbps+</li>                             <li >Assembled utilizing the genuine data submitted to different                                 web assets</li>                             <li >Best Price Guarantee</li>                             <li >Import Database into Any Database/ CRM Program</li>                             <li >98 Crore Phone Number & Email List</li>', '  <li >– Name</li>                             <li >– Address</li>                             <li >– City</li>                             <li >– State</li>                             <li >– Zip</li>                             <li >– Email</li>                             <li >– Phone</li>', '980,000,000', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `from_ip` varchar(200) NOT NULL,
  `from_browser` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `number`, `password`, `from_ip`, `from_browser`, `time`) VALUES
(1, 'user', 'user@user.com', '123', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', ''),
(2, 'user', 'user1@user.com', '123', '123', '', '', ''),
(3, 'user2', 'user2@user.com', '123', '123', '', '', ''),
(5, 'user3', 'user3@user.com', '123', '123', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'Fri, 18 Sep 2020 18:23:39 +0530'),
(6, 'user8', 'user8@user.com', '123', '123', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'Fri, 18 Sep 2020 20:02:34 +0530'),
(7, 'user7', 'user7@user.com', '123', '3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'Fri, 18 Sep 2020 20:22:57 +0530'),
(8, 'userg', 'userg@user.com', '123', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'Sat, 19 Sep 2020 12:17:11 +0530'),
(9, 'Percy@gmail.com', 'Percy@gmail.com', '9877667676', 'efab8f50ec42d5bec682da61ea0805ed48dc46b34d964d8b909c1df24a49c5d00ffdd4c4df834214a6338d3722beb395afbc99eff94e4923b676cfd646b0ecc2', '::1', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36', 'Sat, 19 Sep 2020 16:58:56 +0530');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_india_database`
--
ALTER TABLE `all_india_database`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b2b`
--
ALTER TABLE `b2b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_databases`
--
ALTER TABLE `other_databases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_bazaar`
--
ALTER TABLE `policy_bazaar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_database`
--
ALTER TABLE `students_database`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_india_database`
--
ALTER TABLE `all_india_database`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `b2b`
--
ALTER TABLE `b2b`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `government`
--
ALTER TABLE `government`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_seekers`
--
ALTER TABLE `job_seekers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_databases`
--
ALTER TABLE `other_databases`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `policy_bazaar`
--
ALTER TABLE `policy_bazaar`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `students_database`
--
ALTER TABLE `students_database`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
