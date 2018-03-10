-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2016 at 10:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport_transfer`
--

CREATE TABLE `airport_transfer` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` datetime NOT NULL,
  `pickup_flight` text NOT NULL,
  `pickup_price` float NOT NULL,
  `dropoff_date` date NOT NULL,
  `dropoff_time` datetime NOT NULL,
  `dropoff_flight` varchar(64) NOT NULL,
  `dropoff_price` float NOT NULL,
  `dropoff_vehicle_type` varchar(32) NOT NULL,
  `pickup_vehicle_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `short_id` varchar(8) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `title` varchar(10) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `request_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `reason` text,
  `total` float NOT NULL,
  `country` varchar(100) NOT NULL,
  `passport` varchar(32) NOT NULL,
  `country_code` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_expired` varchar(20) NOT NULL,
  `card_cvv` int(11) NOT NULL,
  `change_currency_rate` float NOT NULL,
  `currency` varchar(10) NOT NULL,
  `total_vnd` float NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `book_from` varchar(100) NOT NULL,
  `notes` varchar(765) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `srcFile` varchar(100) NOT NULL,
  `view` int(1) NOT NULL,
  `tax` float NOT NULL,
  `service_charge` float NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_child` int(11) NOT NULL,
  `no_of_extrabed` varchar(128) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `booked_nights` int(11) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `pickup_flight` varchar(20) NOT NULL,
  `pickup_price` float NOT NULL,
  `dropoff_date` date NOT NULL,
  `dropoff_time` varchar(20) NOT NULL,
  `dropoff_flight` varchar(20) NOT NULL,
  `dropoff_price` float NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `rate_vnd` float NOT NULL,
  `rate` float NOT NULL,
  `extrabed_price` float NOT NULL,
  `token` varchar(28) NOT NULL,
  `total_no_tax` float NOT NULL,
  `total_no_tax_vnd` float NOT NULL,
  `total_no_tax_airport` float NOT NULL,
  `total_no_tax_vnd_airport` float NOT NULL,
  `version` varchar(20) NOT NULL,
  `seats` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `short_id`, `first_name`, `title`, `last_name`, `email`, `request_date`, `status`, `reason`, `total`, `country`, `passport`, `country_code`, `code`, `phone`, `card_number`, `card_name`, `card_expired`, `card_cvv`, `change_currency_rate`, `currency`, `total_vnd`, `ip_address`, `book_from`, `notes`, `card_type`, `srcFile`, `view`, `tax`, `service_charge`, `roomtype_id`, `promotion_id`, `hotel_id`, `no_of_adults`, `no_of_child`, `no_of_extrabed`, `checkin`, `checkout`, `booked_nights`, `pickup_date`, `pickup_time`, `pickup_flight`, `pickup_price`, `dropoff_date`, `dropoff_time`, `dropoff_flight`, `dropoff_price`, `no_of_room`, `rate_vnd`, `rate`, `extrabed_price`, `token`, `total_no_tax`, `total_no_tax_vnd`, `total_no_tax_airport`, `total_no_tax_vnd_airport`, `version`, `seats`) VALUES
(29, '8aed544x', 'Tap', 'Mr', 'Nguyen', 'hongduyabc@gmail.com', '2016-07-30 21:02:01', 'confirmed', NULL, 71.61, 'Aland Islands', '', '', 'NDExMTExMTExMTExMTExMQ==', '', 2147483647, 'tap', '01/2017', 111, 1, 'USD', 1614590, '::1', '', '', 'mastercard', '', 1, 6.2, 3.41, 1, 1, 3, 2, 0, '1', '2016-07-30', '2016-07-31', 1, '0000-00-00', '', '', 0, '0000-00-00', '', '', 0, 1, 946974, 42, 450940, '9oze8s4vu58qh89ibycvgumjyww7', 42, 946974, 62, 1397910, '', ''),
(33, 'vjoy0a4x', 'Tap', 'Mr', 'Nguyen', 'hongduyabc@gmail.com', '2016-07-31 21:02:01', 'cancelled', 'ko đặt', 2083340, 'Bangladesh', '', '', 'NDExMTExMTExMTExMTExMQ==', '', 2147483647, 'test', '01/2020', 111, 22547, 'VND', 2083340, '::1', '', '', 'visa', 'vjoy0a4x_05Jan2016.pdf', 1, 180376, 99206.8, 1, 3, 1, 1, 0, '0', '2016-07-31', '2016-08-01', 1, '2016-01-05', '12:00', 'VN778', 563675, '2016-01-06', '14:00', 'VN889', 450940, 1, 789145, 789145, 0, 'viwnkuz1kwh4c7rjku80cnhhxn8d', 789145, 789145, 1803760, 1803760, 'desktop', ''),
(34, 'rdhxrcob', 'Tap', 'Mr', 'Nguyen', 'hongduyabc@gmail.com', '2016-07-31 21:02:01', 'confirmed', NULL, 160.545, 'Australia', '', '', 'NDExMTExMTExMTExMTExMQ==', '', 2147483647, 'test', '03/2017', 111, 1, 'USD', 3619810, '::1', '', '', 'visa', 'rdhxrcob_05Jan2016.pdf', 1, 13.9, 7.645, 1, 3, 1, 2, 0, '0', '2016-07-31', '2016-08-01', 1, '2016-01-05', '12:00', 'VN778', 563675, '2016-01-06', '14:00', 'VN889', 676410, 2, 946974, 42, 0, 'jjw4ck3pt5lzoxg8nkv6am7x7xp7', 84, 1893950, 139, 3134030, 'desktop', ''),
(35, 'vqldkxig', 'Tap', 'Mr', 'Nguyen', 'hongduyabc@gmail.com', '2016-07-31 21:02:01', 'confirmed', NULL, 259.875, 'Barbados', '', '', 'NDExMTExMTExMTExMTExMQ==', '', 2147483647, 'test', '04/2018', 111, 1, 'USD', 5859400, '::1', '', '', 'visa', 'VQLDKXIG_05Jan2016.pdf', 0, 22.5, 12.375, 4, 2, 1, 2, 0, '2', '2016-07-31', '2016-08-01', 1, '2016-01-05', '12:00', 'VN778', 563675, '2016-01-06', '14:00', 'VN889', 450940, 2, 1578290, 70, 450940, 'eh15l512ya66p9n0j481jbghr4do', 140, 3156580, 225, 5073080, 'desktop', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `guest_stay` varchar(100) NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  `no_of_extrabed` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `booked_nights` int(11) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `pickup_price` float NOT NULL,
  `dropoff_date` date NOT NULL,
  `dropoff_time` varchar(20) NOT NULL,
  `dropoff_price` int(11) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `pickup_flight` varchar(20) NOT NULL,
  `dropoff_flight` varchar(20) NOT NULL,
  `rate_vnd` float NOT NULL,
  `rate` float NOT NULL,
  `extrabed_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `short_content` varchar(255) NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `size` varchar(50) NOT NULL,
  `type` varchar(128) NOT NULL,
  `files` varchar(255) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `display_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `parent_id`, `title`, `slug`, `description`, `short_content`, `cover_photo`, `size`, `type`, `files`, `hotel_id`, `display_order`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 0, '{"en":"Carrers","vi":"Carrers"}', 'carrers', '{"en":"<p>A RANGE OF OPPORTUNITIES<\\/p>\\r\\n\\r\\n<p>Each hotel is like its own little city, with jobs ranging from general manager to housekeeper to engineer. No matter what interests you, you are sure to find an exciting, challenging position with us.<\\/p>\\r\\n\\r\\n<p>Posted date<\\/p>\\r\\n\\r\\n<p>Expiry date&nbsp;<\\/p>\\r\\n\\r\\n<p>Hotel &amp; Spa<\\/p>\\r\\n\\r\\n<p>Contact Info<\\/p>\\r\\n\\r\\n<p>July 20,2016 Aug 20,2016<\\/p>\\r\\n\\r\\n<p>Guest Experience Manager (Expatriate only)<br \\/>\\r\\nSpa Manager<\\/p>\\r\\n\\r\\n<p>Ms. Ph\\u01b0\\u01a1ng<\\/p>\\r\\n\\r\\n<p>- Email:&nbsp;hr@silverlandhotels.com<\\/p>\\r\\n\\r\\n<p>- Tel: + (84) 38 27 2740 (Ext: 6969)<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n","vi":"<p>A RANGE OF OPPORTUNITIES<\\/p>\\r\\n\\r\\n<p>Each hotel is like its own little city, with jobs ranging from general manager to housekeeper to engineer. No matter what interests you, you are sure to find an exciting, challenging position with us.<\\/p>\\r\\n\\r\\n<p>Posted date<\\/p>\\r\\n\\r\\n<p>Expiry date&nbsp;<\\/p>\\r\\n\\r\\n<p>Hotel &amp; Spa<\\/p>\\r\\n\\r\\n<p>Contact Info<\\/p>\\r\\n\\r\\n<p>July 20,2016 Aug 20,2016<\\/p>\\r\\n\\r\\n<p>Guest Experience Manager (Expatriate only)<br \\/>\\r\\nSpa Manager<\\/p>\\r\\n\\r\\n<p>Ms. Ph\\u01b0\\u01a1ng<\\/p>\\r\\n\\r\\n<p>- Email:&nbsp;hr@silverlandhotels.com<\\/p>\\r\\n\\r\\n<p>- Tel: + (84) 38 27 2740 (Ext: 6969)<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n"}', '', '2016-10-05-20-28-50-004.jpg', '189440', '', '2016-09-16-12-05-2321-2016-09-15-events.xls', 0, 2, 0, '2016-09-14 20:22:49', '2016-10-05 20:28:50', 1),
(2, 0, '{"en":"Brochure","vi":"Brochure"}', 'brochure', '{"en":"","vi":"<p>Brochure<\\/p>\\r\\n"}', '', '2016-10-05-20-29-24-11.jpg', '', 'brochure', '0', 0, 2, 0, '2016-09-14 20:23:10', '2016-10-05 20:29:24', 1),
(3, 0, '{"en":"Logos","vi":"Logos"}', 'logos', '{"en":"<p>&aacute;dasdasd<\\/p>\\r\\n","vi":"<p>&aacute;dasdasd<\\/p>\\r\\n"}', '', '2016-09-16-14-37-25402221679-tai-hinh-girl-xinh-lam-avatar-de-thuong-nhat-22-jpg', '', 'logos', '0', 0, 2, 0, '2016-09-14 20:33:05', '2016-09-16 14:37:25', 1),
(4, 0, '{"en":"E-Factsheet","vi":"E-Factsheet"}', 'e-factsheet', '{"en":"","vi":"<p>E-Factsheet<\\/p>\\r\\n"}', '', '2016-09-16-14-37-33781402587-tai-hinh-girl-xinh-lam-avatar-de-thuong-nhat-22-jpg', '', 'efactsheet', '0', 0, 2, 0, '2016-09-14 20:42:38', '2016-09-16 14:37:33', 1),
(5, 0, '{"en":"Presentitations","vi":"Presentitations"}', 'presentitations', '{"en":"","vi":"<p>Presentitations<\\/p>\\r\\n"}', '', '2016-09-16-14-41-29596496582-10346654_207047546304860_7070820528651266753_n-jpg', '', 'presentitations', '0', 0, 2, 0, '2016-09-14 20:43:05', '2016-09-16 14:41:29', 1),
(6, 0, '{"en":"Images download","vi":"Images download"}', 'images-download', '{"en":"","vi":""}', '', '2016-09-16-14-42-5889111328-11870668_741381636005355_4381633319221832140_n-jpg', '', 'brochure', '0', 0, 2, 0, '2016-09-14 20:43:23', '2016-09-16 14:42:58', 1),
(7, 0, '{"en":"image download","vi":"image download"}', 'image-download', '{"en":"<p>image download<\\/p>\\r\\n","vi":"<p>image download<\\/p>\\r\\n"}', '', '2016-09-16-14-41-43238616943-11953391_154913404851608_8442910756131761452_o-jpg', '87966', 'images-download', '2016-09-16-21-37-4224-11953391-154913404851608-8442910756131761452-o.jpg', 0, 2, 0, '2016-09-16 11:30:52', '2016-09-16 21:37:42', 1),
(8, 0, '{"en":"\\u00e1dasd","vi":"\\u00e1dasd"}', 'adasd', '{"en":"<p>&aacute;dasd<\\/p>\\r\\n","vi":"<p>&aacute;dasd<\\/p>\\r\\n"}', '', '2016-09-16-12-07-41756042480-2-jpg', '189440', 'images-download', '2016-09-16-12-07-4144-2016-09-15-events.xls', 0, 222, 0, '2016-09-16 12:07:41', '2016-09-16 14:06:07', 1),
(9, 0, '{"en":"files","vi":"files"}', 'files', '{"en":"","vi":""}', '', '2016-09-16-13-50-2596374511-7-jpg', '48286', 'images-download', '2016-09-16-13-50-2528-tai-hinh-girl-xinh-lam-avatar-de-thuong-nhat-22.jpg', 0, 2, 0, '2016-09-16 13:50:25', '2016-09-16 13:50:25', 1),
(10, 0, '{"en":"logo2","vi":"logo2"}', 'logo2', '{"en":"","vi":""}', '', '2016-09-16-14-32-06881347656-10-jpg', '189440', 'logos', '2016-09-16-14-32-0619-2016-09-15-events.xls', 0, 0, 0, '2016-09-16 14:32:06', '2016-09-16 14:35:12', 1),
(11, 0, '{"en":"\\u00e1dasdasd","vi":"\\u00e1dasd"}', 'adasdasd', '{"en":"","vi":""}', '', '2016-09-16-14-35-47209136962-slider-jpg', '48286', 'efactsheet', '2016-09-16-14-35-4721-tai-hinh-girl-xinh-lam-avatar-de-thuong-nhat-22.jpg', 0, 2, 0, '2016-09-16 14:35:47', '2016-09-16 14:35:57', 1),
(12, 0, '{"en":"","vi":""}', '', '{"en":"<p>&aacute;dasd<\\/p>\\r\\n","vi":"<p>&aacute;dasd<\\/p>\\r\\n"}', '', '2016-09-16-21-51-02-11953391-154913404851608-8442910756131761452-o.jpg', '87966', 'images-download', '2016-09-16-21-51-024-11953391-154913404851608-8442910756131761452-o.jpg', 0, 2, 0, '2016-09-16 21:51:02', '2016-09-16 21:51:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `subject`, `email`, `phone`, `message`, `hotel_id`, `type`, `date`) VALUES
(1, '', 'abc@gmail.com', '', '', 0, 0, '0000-00-00 00:00:00'),
(2, '', 'ab@gmail.com', '', '', 0, 0, '2016-08-25 10:42:43'),
(5, '', 'a@gmail.com', '', '', 0, 0, '2016-08-25 11:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `added_date` datetime NOT NULL,
  `hotel` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_offers`
--

CREATE TABLE `email_offers` (
  `email` int(11) NOT NULL,
  `type` enum('Home','Hotel','Booking','Contact') NOT NULL,
  `added_date` datetime NOT NULL,
  `give` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `no_receive` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rate`
--

CREATE TABLE `exchange_rate` (
  `the_date` date NOT NULL,
  `exchange_rate` text NOT NULL,
  `original_xml` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exchange_rate`
--

INSERT INTO `exchange_rate` (`the_date`, `exchange_rate`, `original_xml`) VALUES
('2015-10-08', '{"AUD":{"id":"AUD","name":"AUST.DOLLAR","buy":"15909.34","transfer":"16005.37","sell":"16148.37"},"CAD":{"id":"CAD","name":"CANADIAN DOLLAR","buy":"16912.54","transfer":"17066.14","sell":"17287.62"},"CHF":{"id":"CHF","name":"SWISS FRANCE","buy":"22838.24","transfer":"22999.23","sell":"23204.71"},"DKK":{"id":"DKK","name":"DANISH KRONE","buy":"0","transfer":"3316.07","sell":"3420.13"},"EUR":{"id":"EUR","name":"EURO","buy":"24934.75","transfer":"25009.78","sell":"25233.23"},"GBP":{"id":"GBP","name":"BRITISH POUND","buy":"33791.57","transfer":"34029.78","sell":"34333.81"},"HKD":{"id":"HKD","name":"HONGKONG DOLLAR","buy":"2846.71","transfer":"2866.78","sell":"2903.99"},"INR":{"id":"INR","name":"INDIAN RUPEE","buy":"0","transfer":"336.64","sell":"350.69"},"JPY":{"id":"JPY","name":"JAPANESE YEN","buy":"183.65","transfer":"185.51","sell":"187.17"},"KRW":{"id":"KRW","name":"SOUTH KOREAN WON","buy":"0","transfer":"19.27","sell":"19.41"},"KWD":{"id":"KWD","name":"KUWAITI DINAR","buy":"0","transfer":"72912.93","sell":"75200.86"},"MYR":{"id":"MYR","name":"MALAYSIAN RINGGIT","buy":"0","transfer":"5270.87","sell":"5339.27"},"NOK":{"id":"NOK","name":"NORWEGIAN KRONER","buy":"0","transfer":"2672.65","sell":"2756.52"},"RUB":{"id":"RUB","name":"RUSSIAN RUBLE","buy":"0","transfer":"348.06","sell":"398.69"},"SAR":{"id":"SAR","name":"SAUDI RIAL","buy":"0","transfer":"5786.41","sell":"6149.83"},"SEK":{"id":"SEK","name":"SWEDISH KRONA","buy":"0","transfer":"2676.84","sell":"2744.32"},"SGD":{"id":"SGD","name":"SINGAPORE DOLLAR","buy":"15598.66","transfer":"15708.62","sell":"15912.49"},"THB":{"id":"THB","name":"THAI BAHT","buy":"610.53","transfer":"610.53","sell":"636.01"},"USD":{"id":"USD","name":"US DOLLAR","buy":"22340","transfer":"22340","sell":"22420"},"VND":{"id":"VND","name":"VIET NAM DONG","buy":1,"transfer":1,"sell":1}}', '﻿<?xml version="1.0" encoding="utf-8" standalone="yes"?>\r\n<!--For reference only. Only one request every 5 minutes!-->\r\n<ExrateList>\r\n  <DateTime>10/8/2015 7:09:09 AM</DateTime>\r\n  <Exrate CurrencyCode="AUD" CurrencyName="AUST.DOLLAR" Buy="15909.34" Transfer="16005.37" Sell="16148.37" />\r\n  <Exrate CurrencyCode="CAD" CurrencyName="CANADIAN DOLLAR" Buy="16912.54" Transfer="17066.14" Sell="17287.62" />\r\n  <Exrate CurrencyCode="CHF" CurrencyName="SWISS FRANCE" Buy="22838.24" Transfer="22999.23" Sell="23204.71" />\r\n  <Exrate CurrencyCode="DKK" CurrencyName="DANISH KRONE" Buy="0" Transfer="3316.07" Sell="3420.13" />\r\n  <Exrate CurrencyCode="EUR" CurrencyName="EURO" Buy="24934.75" Transfer="25009.78" Sell="25233.23" />\r\n  <Exrate CurrencyCode="GBP" CurrencyName="BRITISH POUND" Buy="33791.57" Transfer="34029.78" Sell="34333.81" />\r\n  <Exrate CurrencyCode="HKD" CurrencyName="HONGKONG DOLLAR" Buy="2846.71" Transfer="2866.78" Sell="2903.99" />\r\n  <Exrate CurrencyCode="INR" CurrencyName="INDIAN RUPEE" Buy="0" Transfer="336.64" Sell="350.69" />\r\n  <Exrate CurrencyCode="JPY" CurrencyName="JAPANESE YEN" Buy="183.65" Transfer="185.51" Sell="187.17" />\r\n  <Exrate CurrencyCode="KRW" CurrencyName="SOUTH KOREAN WON" Buy="0" Transfer="19.27" Sell="19.41" />\r\n  <Exrate CurrencyCode="KWD" CurrencyName="KUWAITI DINAR" Buy="0" Transfer="72912.93" Sell="75200.86" />\r\n  <Exrate CurrencyCode="MYR" CurrencyName="MALAYSIAN RINGGIT" Buy="0" Transfer="5270.87" Sell="5339.27" />\r\n  <Exrate CurrencyCode="NOK" CurrencyName="NORWEGIAN KRONER" Buy="0" Transfer="2672.65" Sell="2756.52" />\r\n  <Exrate CurrencyCode="RUB" CurrencyName="RUSSIAN RUBLE" Buy="0" Transfer="348.06" Sell="398.69" />\r\n  <Exrate CurrencyCode="SAR" CurrencyName="SAUDI RIAL" Buy="0" Transfer="5786.41" Sell="6149.83" />\r\n  <Exrate CurrencyCode="SEK" CurrencyName="SWEDISH KRONA" Buy="0" Transfer="2676.84" Sell="2744.32" />\r\n  <Exrate CurrencyCode="SGD" CurrencyName="SINGAPORE DOLLAR" Buy="15598.66" Transfer="15708.62" Sell="15912.49" />\r\n  <Exrate CurrencyCode="THB" CurrencyName="THAI BAHT" Buy="610.53" Transfer="610.53" Sell="636.01" />\r\n  <Exrate CurrencyCode="USD" CurrencyName="US DOLLAR" Buy="22340" Transfer="22340" Sell="22420" />\r\n  <Source>Joint Stock Commercial Bank for Foreign Trade of Vietnam - Vietcombank</Source>\r\n</ExrateList>'),
('2015-12-23', '{"AUD":{"id":"AUD","name":"AUST.DOLLAR","buy":"16163.41","transfer":"16260.98","sell":"16422.85"},"CAD":{"id":"CAD","name":"CANADIAN DOLLAR","buy":"15972.11","transfer":"16117.16","sell":"16342.84"},"CHF":{"id":"CHF","name":"SWISS FRANCE","buy":"22536.6","transfer":"22695.47","sell":"22921.4"},"DKK":{"id":"DKK","name":"DANISH KRONE","buy":"0","transfer":"3254.91","sell":"3360.44"},"EUR":{"id":"EUR","name":"EURO","buy":"24473.9","transfer":"24547.54","sell":"24791.9"},"GBP":{"id":"GBP","name":"BRITISH POUND","buy":"33128.31","transfer":"33361.84","sell":"33693.94"},"HKD":{"id":"HKD","name":"HONGKONG DOLLAR","buy":"2871.51","transfer":"2891.75","sell":"2932.24"},"INR":{"id":"INR","name":"INDIAN RUPEE","buy":"0","transfer":"333.85","sell":"348.14"},"JPY":{"id":"JPY","name":"JAPANESE YEN","buy":"183.81","transfer":"185.67","sell":"187.52"},"KRW":{"id":"KRW","name":"SOUTH KOREAN WON","buy":"0","transfer":"19.15","sell":"19.3"},"KWD":{"id":"KWD","name":"KUWAITI DINAR","buy":"0","transfer":"73167.96","sell":"75540.22"},"MYR":{"id":"MYR","name":"MALAYSIAN RINGGIT","buy":"0","transfer":"5206.16","sell":"5279.06"},"NOK":{"id":"NOK","name":"NORWEGIAN KRONER","buy":"0","transfer":"2543.63","sell":"2626.1"},"RUB":{"id":"RUB","name":"RUSSIAN RUBLE","buy":"0","transfer":"309.07","sell":"354.38"},"SAR":{"id":"SAR","name":"SAUDI RIAL","buy":"0","transfer":"5834.3","sell":"6207"},"SEK":{"id":"SEK","name":"SWEDISH KRONA","buy":"0","transfer":"2637.58","sell":"2706.8"},"SGD":{"id":"SGD","name":"SINGAPORE DOLLAR","buy":"15839.18","transfer":"15950.84","sell":"16174.19"},"THB":{"id":"THB","name":"THAI BAHT","buy":"613.34","transfer":"613.34","sell":"639.6"},"USD":{"id":"USD","name":"US DOLLAR","buy":"22517","transfer":"22517","sell":"22547"},"VND":{"id":"VND","name":"VIET NAM DONG","buy":1,"transfer":1,"sell":1}}', '﻿<?xml version="1.0" encoding="utf-8" standalone="yes"?>\r\n<!--For reference only. Only one request every 5 minutes!-->\r\n<ExrateList>\r\n  <DateTime>12/23/2015 4:13:38 PM</DateTime>\r\n  <Exrate CurrencyCode="AUD" CurrencyName="AUST.DOLLAR" Buy="16163.41" Transfer="16260.98" Sell="16422.85" />\r\n  <Exrate CurrencyCode="CAD" CurrencyName="CANADIAN DOLLAR" Buy="15972.11" Transfer="16117.16" Sell="16342.84" />\r\n  <Exrate CurrencyCode="CHF" CurrencyName="SWISS FRANCE" Buy="22536.6" Transfer="22695.47" Sell="22921.4" />\r\n  <Exrate CurrencyCode="DKK" CurrencyName="DANISH KRONE" Buy="0" Transfer="3254.91" Sell="3360.44" />\r\n  <Exrate CurrencyCode="EUR" CurrencyName="EURO" Buy="24473.9" Transfer="24547.54" Sell="24791.9" />\r\n  <Exrate CurrencyCode="GBP" CurrencyName="BRITISH POUND" Buy="33128.31" Transfer="33361.84" Sell="33693.94" />\r\n  <Exrate CurrencyCode="HKD" CurrencyName="HONGKONG DOLLAR" Buy="2871.51" Transfer="2891.75" Sell="2932.24" />\r\n  <Exrate CurrencyCode="INR" CurrencyName="INDIAN RUPEE" Buy="0" Transfer="333.85" Sell="348.14" />\r\n  <Exrate CurrencyCode="JPY" CurrencyName="JAPANESE YEN" Buy="183.81" Transfer="185.67" Sell="187.52" />\r\n  <Exrate CurrencyCode="KRW" CurrencyName="SOUTH KOREAN WON" Buy="0" Transfer="19.15" Sell="19.3" />\r\n  <Exrate CurrencyCode="KWD" CurrencyName="KUWAITI DINAR" Buy="0" Transfer="73167.96" Sell="75540.22" />\r\n  <Exrate CurrencyCode="MYR" CurrencyName="MALAYSIAN RINGGIT" Buy="0" Transfer="5206.16" Sell="5279.06" />\r\n  <Exrate CurrencyCode="NOK" CurrencyName="NORWEGIAN KRONER" Buy="0" Transfer="2543.63" Sell="2626.1" />\r\n  <Exrate CurrencyCode="RUB" CurrencyName="RUSSIAN RUBLE" Buy="0" Transfer="309.07" Sell="354.38" />\r\n  <Exrate CurrencyCode="SAR" CurrencyName="SAUDI RIAL" Buy="0" Transfer="5834.3" Sell="6207" />\r\n  <Exrate CurrencyCode="SEK" CurrencyName="SWEDISH KRONA" Buy="0" Transfer="2637.58" Sell="2706.8" />\r\n  <Exrate CurrencyCode="SGD" CurrencyName="SINGAPORE DOLLAR" Buy="15839.18" Transfer="15950.84" Sell="16174.19" />\r\n  <Exrate CurrencyCode="THB" CurrencyName="THAI BAHT" Buy="613.34" Transfer="613.34" Sell="639.6" />\r\n  <Exrate CurrencyCode="USD" CurrencyName="US DOLLAR" Buy="22517" Transfer="22517" Sell="22547" />\r\n  <Source>Joint Stock Commercial Bank for Foreign Trade of Vietnam - Vietcombank</Source>\r\n</ExrateList>');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `icon` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `description`, `display_order`, `cover_photo`, `icon`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(2, '{"en":"CITY CENTER HOTELS","vi":"CITY CENTER HOTELS"}', '{"en":"<p>All of our hotels are located in District 01 - the heart of Ho Chi Minh city, Vietnam.<\\/p>\\r\\n","vi":"<p>All of our hotels are located in District 01 - the heart of Ho Chi Minh city, Vietnam.<\\/p>\\r\\n"}', 1, '2016-08-24-17-08-29619110107-all-rooms-40-off-cover-jpg', '<i class="fa fa-map-marker"></i>', 0, '2016-08-24 17:08:29', '2016-10-05 19:50:20', 1),
(3, '{"en":"EXCELLENT SERVICES","vi":"EXCELLENT SERVICES"}', '{"en":"<p>Excellent hotel, great attention, and magnificently services.<\\/p>\\r\\n","vi":"<p>Excellent hotel, great attention, and magnificently services.<\\/p>\\r\\n"}', 2, '2016-08-24-17-08-49250366210-gallery-jpg', '<i class="fa fa-thumbs-up"></i>', 0, '2016-08-24 17:08:49', '2016-10-05 19:50:50', 1),
(4, '{"en":"BEST PRICE GUARANTEE","vi":"BEST PRICE GUARANTEE"}', '{"en":"<p>We ensure that you will always get the best available rate when you book on our sites.<\\/p>\\r\\n","vi":"<p>We ensure that you will always get the best available rate when you book on our sites.<\\/p>\\r\\n"}', 3, '', '<i class="fa fa-dollar"></i>', 0, '2016-10-05 19:51:14', '2016-10-05 19:51:14', 1),
(5, '{"en":"SPECIAL OFFERS","vi":"SPECIAL OFFERS"}', '{"en":"<p>Only our sites have special offers that you won&#39;t find anywhere else.<\\/p>\\r\\n","vi":"<p>Only our sites have special offers that you won&#39;t find anywhere else.<\\/p>\\r\\n"}', 4, '', '<i class="fa fa-tags"></i>', 0, '2016-10-05 19:51:40', '2016-10-05 19:51:40', 1),
(6, '{"en":"NO HIDDEN FEES","vi":"NO HIDDEN FEES"}', '{"en":"<p>Many online travel sites charge extra fees for online bookings. We don&acute;t.<\\/p>\\r\\n","vi":"<p>Many online travel sites charge extra fees for online bookings. We don&acute;t.<\\/p>\\r\\n"}', 5, '', '<i class="fa fa-list-ol"></i>', 0, '2016-10-05 19:52:12', '2016-10-05 19:52:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `explorehotel`
--

CREATE TABLE `explorehotel` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `display_order` int(11) NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `text_link` tinytext NOT NULL,
  `link` text NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `show_group` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `explorehotel`
--

INSERT INTO `explorehotel` (`id`, `title`, `display_order`, `cover_photo`, `text_link`, `link`, `hotel_id`, `show_group`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, '{"en":"aa","vi":"aa","ja":"aa","ko":"aa"}', 1, '2016-08-24-16-56-36731536-discount35-inn.jpg', '{"en":"sdasd","vi":"sdasd","ja":"sdasd","ko":"sdasd"}', '{"en":"google.com","vi":"\\u00e1dasd","ja":"\\u00e1dasd","ko":"\\u00e1dasd"}', 1, 1, 0, '2016-08-24 16:55:22', '2016-08-24 17:02:48', 1),
(2, '{"en":"title","vi":"title","ja":"title","ko":"title"}', 2, '2016-08-24-17-04-4176785-gallery.jpg', '{"en":"","vi":"","ja":"","ko":""}', '{"en":"","vi":"","ja":"","ko":""}', 1, 1, 0, '2016-08-24 17:04:41', '2016-08-24 17:04:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `gallery_categories` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(250) NOT NULL,
  `description` text,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `hotel_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `roomtype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_categories`, `name`, `link`, `description`, `added_date`, `updated_date`, `updated_by`, `hotel_id`, `type`, `roomtype_id`) VALUES
(1, 0, 'home', '', 'Home Group Slider', '2016-08-24 16:11:08', '2016-08-24 16:11:08', 1, 0, '1', 0),
(3, 0, 'spa', '', 'destination', '2016-09-04 14:13:29', '2016-09-04 14:13:29', 1, 1, '1', 0),
(4, 0, 'restaurants', '', 'Restaurants & Bars', '2016-09-07 21:57:53', '2016-09-07 21:57:53', 1, 0, '1', 0),
(6, 0, 'special-offers', '', 'Special Offers Group', '2016-09-07 22:33:04', '2016-09-07 22:33:04', 1, 0, '1', 0),
(7, 0, 'introduction', '', ' INTRODUCTION', '2016-09-12 21:56:47', '2016-09-12 21:56:47', 1, 0, '1', 0),
(8, 1, 'gallery', '', 'gallery', '2016-09-12 22:11:28', '2016-09-12 22:11:28', 1, 1, '0', 0),
(9, 2, 'restaurant_group', '', 'ádasdasd', '2016-09-12 23:23:14', '2016-09-12 23:23:14', 1, 1, '0', 0),
(10, 3, 'destination', '', '', '2016-09-12 23:28:49', '2016-09-12 23:28:49', 1, 1, '0', 0),
(11, 0, 'brochure', '', '', '2016-09-17 11:04:07', '2016-09-17 11:04:07', 1, 0, '1', 0),
(12, 0, 'images-download', '', 'image download', '2016-09-17 11:12:32', '2016-09-17 11:12:32', 1, 0, '1', 0),
(13, 0, 'home', '', '', '2016-10-05 19:55:18', '2016-10-05 19:55:18', 1, 0, '0', 0),
(14, 0, 'home', '', '', '2016-10-05 19:57:20', '2016-10-05 19:57:20', 1, 0, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `slug`, `display_order`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, '{"en":"OVERVIEW","vi":"OVERVIEW"}', 'overview', 0, 0, '2016-09-12 11:06:59', '2016-10-12 16:28:07', 1),
(2, '{"en":"ROOMS","vi":"ROOMS"}', 'rooms', 1, 0, '2016-09-12 11:07:09', '2016-09-13 13:34:11', 1),
(3, '{"en":"RESTAURANTS","vi":"RESTAURANTS"}', 'restaurants', 2, 0, '2016-09-12 11:07:16', '2016-09-13 13:34:17', 1),
(4, '{"en":"SPA","vi":"SPA"}', 'spa', 3, 0, '2016-09-12 11:07:29', '2016-09-13 13:34:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL,
  `graded_star` float NOT NULL,
  `email_info` varchar(100) NOT NULL,
  `email_sales` varchar(100) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `special_offer` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` tinytext NOT NULL,
  `country` tinytext NOT NULL,
  `home_description` text NOT NULL,
  `description` text NOT NULL,
  `term_condition` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `facilities` text NOT NULL,
  `sports` text NOT NULL,
  `location` text NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `promotion` text NOT NULL,
  `logo1` varchar(128) NOT NULL,
  `logo2` varchar(128) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `short_name`, `slug`, `display_order`, `graded_star`, `email_info`, `email_sales`, `hotline`, `tel`, `fax`, `no_of_rooms`, `special_offer`, `address`, `city`, `country`, `home_description`, `description`, `term_condition`, `short_description`, `added_date`, `updated_date`, `updated_by`, `facilities`, `sports`, `location`, `cover_photo`, `status`, `promotion`, `logo1`, `logo2`, `lat`, `lng`) VALUES
(1, 'GRAND SILVERLAND HOTEL & SPA', 'GRAND', 'grand-silverland-hotel-spa', 1, 4, 'info@grandsilverlandhotel.com', 'sales@grandsilverlandhotel.com', '', '+84 8 3829 3888', '+84 8 3829 2988', 89, '{"en":"","vi":""}', '{"en":"125 Ly Tu Trong St, Ben Thanh Ward Dist 1 a","vi":"288 L\\u00ea Th\\u00e1nh T\\u00f4n, ph\\u01b0\\u1eddng B\\u1ebfn Th\\u00e0nh, qu\\u1eadn 1"}', '{"en":"Ho Chi Minh City a","vi":"TP. H\\u1ed3 Ch\\u00ed Minh"}', '{"en":"Vietnam a","vi":"Vi\\u1ec7t Nam"}', 'Array', '{"en":"<p>Located on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel Group&rsquo;s latest addition to its Collections in the vibrant Ho Chi Minh City.<\\/p>\\r\\n\\r\\n<p>The hotel is preferred place of busy business travelers as it is just within walking minutes from Ben Thanh Market and close to many large business centers and buildings such as Sunwah Tower, Opera Building, Bitexco Building, Metropolitan Building, AB Tower, Saigon Centre and Gemadept Tower.<\\/p>\\r\\n\\r\\n<p>The hotel offers 89 guest rooms including Deluxe, Premier Deluxe, Executive and Silver Suite with high class branded amenities and entertainment facilities such as Roof Garden Restaurant where guests can enjoy a special night dinner under the candle lights or guests can swim in the Rooftop Swimming Pool, overlooking the nice city landscape.<\\/p>\\r\\n\\r\\n<p>What&rsquo;s more, KL Spa is a preferred choice of most couples seeking for a pure retreat and escape in the busy Saigon or golfers can enjoy a practice on the Mini Golf located on 7th Floor, which they cannot find at any hotels in Saigon!<\\/p>\\r\\n\\r\\n<p>Grand Silverland Hotel &amp; Spa might be a perfect choice for both demanding business travelers and holiday makers. Stay with us and experience.<\\/p>\\r\\n","vi":"<h3>Ch&agrave;o m\\u1eebng qu&yacute; kh&aacute;ch \\u0111\\u1ebfn v\\u1edbi kh&aacute;ch s\\u1ea1n Paradise Saigon Boutique<\\/h3>\\r\\n\\r\\n<p>Sang tr\\u1ecdng v\\u1edbi ki\\u1ebfn tr&uacute;c \\u0111\\u1eb7c bi\\u1ec7t k\\u1ebft h\\u1ee3p gi\\u1eefa phong c&aacute;ch hi\\u1ec7n \\u0111\\u1ea1i &Acirc;u-&Aacute;, kh&aacute;ch s\\u1ea1n Paradise S&agrave;i G&ograve;n \\u0111\\u01b0\\u1ee3c bi\\u1ebft \\u0111\\u1ebfn l&agrave; m\\u1ed9t trong nh\\u1eefng kh&aacute;ch s\\u1ea1n Boutique h&agrave;ng \\u0111\\u1ea7u t\\u1ea1i Tp.HCM.N\\u1eb1m gi\\u1eefa l&ograve;ng trung t&acirc;m th&agrave;nh ph\\u1ed1, c&aacute;ch s&acirc;n bay qu\\u1ed1c t\\u1ebf ch\\u1ec9 20 ph&uacute;t v&agrave; m\\u1ea5t 5 ph&uacute;t Qu&yacute; kh&aacute;ch c&oacute; th\\u1ec3 th\\u1ecfa th&iacute;ch \\u0111i \\u0111\\u1ebfn c&aacute;c trung t&acirc;m mua s\\u1eafm n\\u1ed5i ti\\u1ebfng c\\u1ee7a S&agrave;i G&ograve;n.&nbsp;<\\/p>\\r\\n"}', '{"en":"","vi":""}', '{"en":"<h3>GRAND SILVERLAND HOTEL &amp; SPA<br \\/>\\r\\nLY TU TRONG ST., HO CHI MINH CITY, VIETNAM<\\/h3>\\r\\n\\r\\n<p>Located on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel Group&rsquo;s latest addition to its Collections in the vibrant Ho Chi Minh City.<\\/p>\\r\\n\\r\\n<p>The hotel is preferred place of busy business travelers as it is just within walking minutes from Ben Thanh Market and close to many large business centers and buildings such as Sunwah Tower, Opera Building, Bitexco Building, Metropolitan Building, AB Tower, Saigon Centre and Gemadept Tower.<\\/p>\\r\\n\\r\\n<p>The hotel offers 89 guest rooms including Deluxe, Premier Deluxe, Executive and Silver Suite with high class branded amenities and entertainment facilities such as Roof Garden Restaurant where guests can enjoy a special night dinner under the candle lights or guests can swim in the Rooftop Swimming Pool, overlooking the nice city landscape.<\\/p>\\r\\n\\r\\n<p>What&rsquo;s more, KL Spa is a preferred choice of most couples seeking for a pure retreat and escape in the busy Saigon or golfers can enjoy a practice on the Mini Golf located on 7th Floor, which they cannot find at any hotels in Saigon!<\\/p>\\r\\n\\r\\n<p>Grand Silverland Hotel &amp; Spa might be a perfect choice for both demanding business travelers and holiday makers. Stay with us and experience.<\\/p>\\r\\n","vi":"<p>The hotel is preferred place of busy business travelers as it is just within walking minutes from Ben Thanh Market and close to many large business centers and buildings such<\\/p>\\r\\n"}', '2015-08-21 10:47:24', '2016-10-05 19:47:55', 1, 'working_desk,ironing_kit,jacuzzi_bathtub_shower,wash_let_toilet,toothbrush_thampoo_soap,24hr_room_service,room_service,airport_transfer,elevator,safety_box,executive_floor,bar/pub,family_room,laundry_service/dry_cleaning,business_center,meeting_facilities,smoking_area,nightclub,casino,coffee_shop,Wi-Fi_-_public_areas,concierge,restaurant', 'fitness_center,games_room,kids_club,squash_courts,garden,massage,steamroom,sauna', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.487942265767!2d106.69487121480076!3d10.77389099232324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4517d3e5eac4372!2sGrand+Silverland+Hotel+%26+Spa%2C+Ho+Chi+Minh+City!5e0!3m2!1sen!2s!4v1474527994230" width="1170" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>', '01-10-2015-02-10-01-slide2.jpg', 0, '{"en":"<p>Featuing 89 rooms and suites, boasting good comfort with modern design. The hotel&rsquo;s Rooftop terrace offers outdoor pool and stunning city view as well as Ben Thanh market at night. Grand Silverland Hotel &amp; Spa&rsquo;s K&amp;L Spa also offers luxurious facilities and amenities.<\\/p>\\r\\n","vi":"<p>Featuing 89 rooms and suites, boasting good comfort with modern design. The hotel&rsquo;s Rooftop terrace offers outdoor pool and stunning city view as well as Ben Thanh market at night. Grand Silverland Hotel &amp; Spa&rsquo;s K&amp;L Spa also offers luxurious facilities and amenities.<\\/p>\\r\\n"}', '5.jpg', 'grandSilverland.png', 10.777, 106.702),
(3, 'SILVERLAND CENTRAL HOTEL & SPA', 'CENTRAL', 'silverland-central-hotel-spa', 4, 3.5, 'info@silverlandcentralhotel.com', 'sales@silverlandcentralhotel.com', '+84 8 3827 2738', '+84 8 3827 2738 - 3827 2740', '+84-8 3825 6012', 109, '{"en":"","vi":""}', '{"en":"14 Le Lai St, Ben Thanh Ward Dist 1","vi":"14 Le Lai St, Ben Thanh Ward Dist 1"}', '{"en":"Ho Chi Minh City","vi":"Ho Chi Minh City"}', '{"en":" Viet Nam","vi":" Viet Nam"}', 'Array', '{"en":"<p>Thank you our guests for helping us recognized in the Top 10 3 star hotels in Ho Chi Minh City from 2011 to 2015.<\\/p>\\r\\n\\r\\n<p>Located in the heart of Ho Chi Minh City, next to Ben Thanh Market, Silverland Central Hotel &amp; Spa houses 106 rooms and suites with nice city view towards Ben Thanh Market &amp; 23\\/9 Park.&nbsp;<\\/p>\\r\\n\\r\\n<p>The hotel offers wide selection of in-hotel recreational and entertaiment options from KL Spa, L&rsquo;Emotion Restaurant, Coffee &amp; Bar Lounge and the new highlight OMG !&nbsp;<\\/p>\\r\\n\\r\\n<p>Whether you are making a holiday or on a business trip, Silverland Central Hotel &amp; Spa is such a place to experience.<\\/p>\\r\\n","vi":"<p>Thank you our guests for helping us recognized in the Top 10 3 star hotels in Ho Chi Minh City in 2011 - 2012 - 2013 - 2014.<\\/p>\\r\\n\\r\\n<p>Located in the heart of Ho Chi Minh City, next to Ben Thanh Market, Silverland Central Hotel &amp; Spa houses 106 rooms and suites with nice city view towards Ben Thanh Market &amp; 23\\/9 Park.&nbsp;<\\/p>\\r\\n\\r\\n<p>The hotel offers wide selection of in-hotel recreational and entertaiment options from KL Spa, L&rsquo;Emotion Restaurant, Coffee &amp; Bar Lounge and the new highlight OMG !&nbsp;<\\/p>\\r\\n\\r\\n<p>Whether you are making a holiday or on a business trip, Silverland Central Hotel &amp; Spa is such a place to experience.<\\/p>\\r\\n"}', '{"en":"","vi":""}', '{"en":"<h3>SILVERLAND CENTRAL HOTEL &amp; SPA<br \\/>\\r\\nNEXT TO BEN THANH MARKET<\\/h3>\\r\\n\\r\\n<p>Thank you our guests for helping us recognized in the Top 10 3 star hotels in Ho Chi Minh City from 2011 to 2015.<\\/p>\\r\\n\\r\\n<p>Located in the heart of Ho Chi Minh City, next to Ben Thanh Market, Silverland Central Hotel &amp; Spa houses 106 rooms and suites with nice city view towards Ben Thanh Market &amp; 23\\/9 Park.&nbsp;<\\/p>\\r\\n\\r\\n<p>The hotel offers wide selection of in-hotel recreational and entertaiment options from KL Spa, L&rsquo;Emotion Restaurant, Coffee &amp; Bar Lounge and the new highlight OMG !&nbsp;<\\/p>\\r\\n\\r\\n<p>Whether you are making a holiday or on a business trip, Silverland Central Hotel &amp; Spa is such a place to experience.<\\/p>\\r\\n","vi":"<p>Located in the heart of Ho Chi Minh City, next to Ben Thanh Market, Silverland Central Hotel &amp; Spa houses 106 rooms and suites with nice city view towards Ben Thanh Market &amp; 23\\/9 Park.&nbsp;<\\/p>\\r\\n"}', '2015-12-18 20:45:17', '2016-10-05 19:46:14', 1, 'wash_let_toilet,toothbrush_thampoo_soap,air_dryer,disabled_facilities,car_service,business_center,nightclub,', 'tour_desk,gift_shop,24_hours_room_service,airport_transportation,car_rental,24_hours_concierge,', '', '', 0, '{"en":"<p>- Free Airport Transfer<br \\/>\\r\\n- Free Vouchurer Foot Massage<br \\/>\\r\\n- Free Tea<\\/p>\\r\\n","vi":"<p>- Free Airport Transfer<br \\/>\\r\\n- Free Vouchurer Foot Massage<br \\/>\\r\\n- Free Tea<\\/p>\\r\\n"}', '9.jpg', 'silverlandCentral.png', 10.7718, 106.698),
(4, 'SILVERLAND SAKYO HOTEL & SPA', 'SAKYO', 'silverland-sakyo-hotel-spa', 2, 0, 'sales@silverlandsakyohotel.com', 'hongduyphp@gmail.com', '(+84) 8 3829 5295', '(+84) 8 3829 5295', '(+84) 8 3827 5089', 76, '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', '', '{"en":"<p>Located on Le Thanh Ton street, renown as &ldquo;Little Tokyo&rdquo; in the vibrant Saigon, Silverland Sakyo Hotel &amp; Spa stands proud to be a perfect fusion between Saigon and Tokyo. Inspired by the philosophy of simplicity, staying at Silverland Sakyo Hotel &amp; Spa promises guests a deep contemplation in the soul thanks to the serene atmosphere.<\\/p>\\r\\n\\r\\n<p>Just &nbsp;within &nbsp;walking &nbsp;minutes &nbsp;from &nbsp;famous &nbsp;city &nbsp;attractions &nbsp;and &nbsp;office buildings, Silverland Sakyo is a must stay hotel for both holiday makers or discerning business travelers.<\\/p>\\r\\n\\r\\n<p>Stay with us to experience the warm smile of our staff and enjoy the most luxurious facilities and services.<\\/p>\\r\\n","vi":"<p>Located on Le Thanh Ton street, renown as &ldquo;Little Tokyo&rdquo; in the vibrant Saigon, Silverland Sakyo Hotel &amp; Spa stands proud to be a perfect fusion between Saigon and Tokyo. Inspired by the philosophy of simplicity, staying at Silverland Sakyo Hotel &amp; Spa promises guests a deep contemplation in the soul thanks to the serene atmosphere.<\\/p>\\r\\n\\r\\n<p>Just &nbsp;within &nbsp;walking &nbsp;minutes &nbsp;from &nbsp;famous &nbsp;city &nbsp;attractions &nbsp;and &nbsp;office buildings, Silverland Sakyo is a must stay hotel for both holiday makers or discerning business travelers.<\\/p>\\r\\n\\r\\n<p>Stay with us to experience the warm smile of our staff and enjoy the most luxurious facilities and services.<\\/p>\\r\\n"}', '{"en":"","vi":""}', '{"en":"<h3>SILVERLAND SAKYO HOTEL &amp; SPA<br \\/>\\r\\n&quot;LITTLE TOKYO&quot; IN SAIGON<\\/h3>\\r\\n\\r\\n<p>Located on Le Thanh Ton street, renown as &ldquo;Little Tokyo&rdquo; in the vibrant Saigon, Silverland Sakyo Hotel &amp; Spa stands proud to be a perfect fusion between Saigon and Tokyo. Inspired by the philosophy of simplicity, staying at Silverland Sakyo Hotel &amp; Spa promises guests a deep contemplation in the soul thanks to the serene atmosphere.<\\/p>\\r\\n\\r\\n<p>Just &nbsp;within &nbsp;walking &nbsp;minutes &nbsp;from &nbsp;famous &nbsp;city &nbsp;attractions &nbsp;and &nbsp;office buildings, Silverland Sakyo is a must stay hotel for both holiday makers or discerning business travelers.<\\/p>\\r\\n\\r\\n<p>Stay with us to experience the warm smile of our staff and enjoy the most luxurious facilities and services.<\\/p>\\r\\n","vi":"<h3>SILVERLAND SAKYO HOTEL &amp; SPA<br \\/>\\r\\n&quot;LITTLE TOKYO&quot; IN SAIGON<\\/h3>\\r\\n\\r\\n<p>Located on Le Thanh Ton street, renown as &ldquo;Little Tokyo&rdquo; in the vibrant Saigon, Silverland Sakyo Hotel &amp; Spa stands proud to be a perfect fusion between Saigon and Tokyo. Inspired by the philosophy of simplicity, staying at Silverland Sakyo Hotel &amp; Spa promises guests a deep contemplation in the soul thanks to the serene atmosphere.<\\/p>\\r\\n\\r\\n<p>Just &nbsp;within &nbsp;walking &nbsp;minutes &nbsp;from &nbsp;famous &nbsp;city &nbsp;attractions &nbsp;and &nbsp;office buildings, Silverland Sakyo is a must stay hotel for both holiday makers or discerning business travelers.<\\/p>\\r\\n\\r\\n<p>Stay with us to experience the warm smile of our staff and enjoy the most luxurious facilities and services.<\\/p>\\r\\n"}', '2016-09-11 20:48:35', '2016-10-05 19:35:03', 1, '', '', '', '', 0, '{"en":"","vi":""}', '', 'silverlandSakyo.png', 0, 0),
(5, 'SILVERLAND JOLIE HOTEL & SPA', 'JOLIE', 'la-jolie-hotel-spa', 3, 4, 'sales@silverlandjoliehotel.com', 'sales@silverlandjoliehotel.com', '(+84) 8 3521 8999', '(+84) 8 3521 8999', '(+84) 8 3823 6623', 66, '{"en":"","vi":""}', '{"en":"4D Thi Sach St, Ben Nghe Ward, Dist 1","vi":"4D Thi Sach St, Ben Nghe Ward, Dist 1"}', '{"en":" Ho Chi Minh City","vi":" Ho Chi Minh City"}', '{"en":"Viet Nam","vi":"Viet Nam"}', 'Array', '{"en":"<p>Silverland Jolie Hotel &amp; Spa enjoys a fantastic location of downtown HCMC but in a quiet corner of Thi Sach and Dong Du Streets. Upon entering our hotel, you will be impressed by the grand view of the Saigon River with the infamous Bach Dang pier - where &quot;Uncle&quot; Ho Chi Minh embarked on the journey trying to find the revolutionary path for the people of Vietnam.<\\/p>\\r\\n\\r\\n<p>The hotel is close to the famous streets including Dong Khoi - Le Loi - Nguyen Hue - Le Thanh Ton where modern meets classic, West meets East. The area offers not only the experience of luxury shopping, romantic restaurants &amp; bars but also many historical buildings and traditional Vietnamese shops and eateries.<\\/p>\\r\\n","vi":"<p>Silverland Jolie Hotel &amp; Spa enjoys a fantastic location of downtown HCMC but in a quiet corner of Thi Sach and Dong Du Streets. Upon entering our hotel, you will be impressed by the grand view of the Saigon River with the infamous Bach Dang pier - where &quot;Uncle&quot; Ho Chi Minh embarked on the journey trying to find the revolutionary path for the people of Vietnam.<\\/p>\\r\\n\\r\\n<p>The hotel is close to the famous streets including Dong Khoi - Le Loi - Nguyen Hue - Le Thanh Ton where modern meets classic, West meets East. The area offers not only the experience of luxury shopping, romantic restaurants &amp; bars but also many historical buildings and traditional Vietnamese shops and eateries.<\\/p>\\r\\n"}', '{"en":"","vi":""}', '{"en":"<p>Silverland Jolie Hotel &amp; Spa enjoys a fantastic location of downtown HCMC but in a quiet corner of Thi Sach and Dong Du Streets. Upon entering our hotel, you will be impressed by the grand view of the Saigon River with the infamous Bach Dang pier - where &quot;Uncle&quot; Ho Chi Minh embarked on the journey trying to find the revolutionary path for the people of Vietnam.<\\/p>\\r\\n\\r\\n<p>The hotel is close to the famous streets including Dong Khoi - Le Loi - Nguyen Hue - Le Thanh Ton where modern meets classic, West meets East. The area offers not only the experience of luxury shopping, romantic restaurants &amp; bars but also many historical buildings and traditional Vietnamese shops and eateries.<\\/p>\\r\\n","vi":"<p>Silverland Jolie Hotel &amp; Spa enjoys a fantastic location of downtown HCMC but in a quiet corner of Thi Sach and Dong Du Streets. Upon entering our hotel, you will be impressed by the grand view of the Saigon River with the infamous Bach Dang pier - where &quot;Uncle&quot; Ho Chi Minh embarked on the journey trying to find the revolutionary path for the people of Vietnam.<\\/p>\\r\\n\\r\\n<p>The hotel is close to the famous streets including Dong Khoi - Le Loi - Nguyen Hue - Le Thanh Ton where modern meets classic, West meets East. The area offers not only the experience of luxury shopping, romantic restaurants &amp; bars but also many historical buildings and traditional Vietnamese shops and eateries.<\\/p>\\r\\n"}', '2016-09-11 20:49:09', '2016-10-05 19:42:07', 1, '', '', '', '', 0, '{"en":"","vi":""}', '', 'silverlandJolie.png', 10.7777, 106.706),
(6, 'SILVERLAND YEN HOTEL', 'Yen', 'silverland-yen-hotel', 5, 2, 'hongduyphp@gmail.com', 'hongduyphp@gmail.com', '', '', '', 0, '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', 'Array', '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', '2016-09-11 20:49:36', '2016-10-05 19:42:42', 1, '', '', '', '', 0, '{"en":"","vi":""}', '', '', 0, 0),
(7, 'SILVERLAND HOTEL & SPA', 'SIL', 'silverland-hotel-spa', 6, 4, 'info@silverlandhotel.com', 'info@silverlandhotel.com', '(+84) 8 3823 9922', '(+84) 8 3823 9922', '', 74, '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', '{"en":"","vi":""}', 'Array', '{"en":"<p>Close to little Japanese town, the brand new 3 star hotel boasts cutting edge design and high tech facilities for visitors.<\\/p>\\r\\n\\r\\n<p>Inspired by traditional Asian architecture, Silverland Hotel &amp; Spa combines classic elegance, contemporary chic, modern architecture &amp; interior, those evoke truly Asian experience feeling during your stay.<\\/p>\\r\\n\\r\\n<p>The hotel offers 74 spacious rooms and suites with modern amenities and equipments to ensure a perfect stay, be it a business or holiday trip.<\\/p>\\r\\n\\r\\n<p>The hotel is just within minute walk to many boutique shops and business center like Louis Vuiton, Chloe, Marc Jacobs, Saigon Center, Central Park, Ben Thanh Market&hellip;<\\/p>\\r\\n","vi":"<p>Close to little Japanese town, the brand new 3 star hotel boasts cutting edge design and high tech facilities for visitors.<\\/p>\\r\\n\\r\\n<p>Inspired by traditional Asian architecture, Silverland Hotel &amp; Spa combines classic elegance, contemporary chic, modern architecture &amp; interior, those evoke truly Asian experience feeling during your stay.<\\/p>\\r\\n\\r\\n<p>The hotel offers 74 spacious rooms and suites with modern amenities and equipments to ensure a perfect stay, be it a business or holiday trip.<\\/p>\\r\\n\\r\\n<p>The hotel is just within minute walk to many boutique shops and business center like Louis Vuiton, Chloe, Marc Jacobs, Saigon Center, Central Park, Ben Thanh Market&hellip;<\\/p>\\r\\n"}', '{"en":"","vi":""}', '{"en":"<h3>SILVERLAND HOTEL &amp; SPA<br \\/>\\r\\nCITY CENTER HOTEL<\\/h3>\\r\\n\\r\\n<p>Close to little Japanese town, the brand new 3 star hotel boasts cutting edge design and high tech facilities for visitors.<\\/p>\\r\\n\\r\\n<p>Inspired by traditional Asian architecture, the hotel&nbsp;combines classic elegance, contemporary chic, modern architecture &amp; interior, those evoke truly Asian experience feeling during your stay.<\\/p>\\r\\n\\r\\n<p>The hotel offers 74 spacious rooms and suites with modern amenities and equipments to ensure a perfect stay, be it a business or holiday trip.<\\/p>\\r\\n\\r\\n<p>The hotel is just within minute walk to many boutique shops and business center like Louis Vuiton, Chloe, Marc Jacobs, Saigon Center, Central Park, Ben Thanh Market&hellip;<\\/p>\\r\\n","vi":"<h3>SILVERLAND HOTEL &amp; SPA<br \\/>\\r\\nCITY CENTER HOTEL<\\/h3>\\r\\n\\r\\n<p>Close to little Japanese town, the brand new 3 star hotel boasts cutting edge design and high tech facilities for visitors.<\\/p>\\r\\n\\r\\n<p>Inspired by traditional Asian architecture, the hotel&nbsp;combines classic elegance, contemporary chic, modern architecture &amp; interior, those evoke truly Asian experience feeling during your stay.<\\/p>\\r\\n\\r\\n<p>The hotel offers 74 spacious rooms and suites with modern amenities and equipments to ensure a perfect stay, be it a business or holiday trip.<\\/p>\\r\\n\\r\\n<p>The hotel is just within minute walk to many boutique shops and business center like Louis Vuiton, Chloe, Marc Jacobs, Saigon Center, Central Park, Ben Thanh Market&hellip;<\\/p>\\r\\n"}', '2016-09-11 20:50:20', '2016-10-05 19:49:18', 1, '', '', '', '', 0, '{"en":"","vi":""}', '', 'silverland.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilities`
--

CREATE TABLE `hotel_facilities` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_facilities`
--

INSERT INTO `hotel_facilities` (`id`, `hotel_id`, `title`, `short_description`, `description`, `display_order`, `cover_photo`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 0, '{"en":"en","vi":"vi"}', '{"en":"aaasss","vi":"bbbbb"}', '{"en":"","vi":""}', 2, '2016-09-03-12-09-27-3.jpg', 0, '2016-09-03 12:09:27', '2016-09-03 12:09:27', 1),
(2, 0, '{"en":"vi\\u00e2","vi":"vi"}', '{"en":"Short Description","vi":"Short Descriptionaa"}', '{"en":"<p>&aacute;dsa<\\/p>\\r\\n","vi":"<p>&aacute;dasdasd<\\/p>\\r\\n"}', 3, '2016-09-03-12-11-02-5.jpg', 0, '2016-09-03 12:11:02', '2016-09-03 12:11:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `display_order` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `cover_image` tinyint(4) DEFAULT NULL,
  `file_ext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `thumb_nails` tinyint(4) DEFAULT NULL,
  `active_status` tinyint(4) DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(765) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `display_order`, `name`, `url`, `cover_image`, `file_ext`, `old_name`, `gallery_id`, `thumb_nails`, `active_status`, `title`, `description`) VALUES
(1, 1, '2016-08-24-16-11-08-slider4.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 1, 'image/jpeg', 'slider4.jpg', 1, 1, 0, '{"en":"GRAND SILVERLAND HOTEL &amp; SPA","vi":"ti\\u1ebfng vi\\u1ec7t","ja":"GRAND SILVERLAND HOTEL &amp; SPA","ko":"GRAND SILVERLAND HOTEL &amp; SPA"}', '{"en":"Enlish","vi":"T vi\\u00eat","ja":"Enlish","ko":"Enlish"}'),
(2, 2, '2016-08-24-16-11-08-slider5.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 0, 'image/jpeg', 'slider5.jpg', 1, 0, 0, '', ''),
(3, 3, '2016-08-24-16-11-08-slider6.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 0, 'image/jpeg', 'slider6.jpg', 1, 0, 0, '', ''),
(4, 1, '2016-09-03-20-26-05-bgslide-1.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 1, 'image/jpeg', 'bgslide-1.jpg', 2, 1, 0, '', ''),
(5, 2, '2016-09-03-20-26-05-bgslide-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 0, 'image/jpeg', 'bgslide-2.jpg', 2, 0, 0, '', ''),
(6, 1, '2016-09-04-14-13-29-bgslideRoom-1.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 1, 'image/jpeg', 'bgslideRoom-1.jpg', 3, 1, 0, '', ''),
(7, 2, '2016-09-04-14-13-29-bgslideRoom-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew\\protected/../uploads/slide/', 0, 'image/jpeg', 'bgslideRoom-2.jpg', 3, 0, 0, '', ''),
(36, 1, '2016-09-12-22-11-28-1.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 1, 'image/jpeg', '1.jpg', 8, 1, 0, '', ''),
(37, 2, '2016-09-12-22-11-28-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '2.jpg', 8, 0, 0, '', ''),
(38, 3, '2016-09-12-22-11-28-3.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '3.jpg', 8, 0, 0, '', ''),
(39, 4, '2016-09-12-22-11-28-4.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '4.jpg', 8, 0, 0, '', ''),
(40, 5, '2016-09-12-22-11-28-5.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '5.jpg', 8, 0, 0, '', ''),
(41, 6, '2016-09-12-22-11-28-6.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '6.jpg', 8, 0, 0, '', ''),
(42, 7, '2016-09-12-22-11-28-7.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '7.jpg', 8, 0, 0, '', ''),
(43, 8, '2016-09-12-22-11-28-8.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '8.jpg', 8, 0, 0, '', ''),
(44, 9, '2016-09-12-22-11-28-9.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '9.jpg', 8, 0, 0, '', ''),
(45, 10, '2016-09-12-22-11-28-10.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '10.jpg', 8, 0, 0, '', ''),
(46, 11, '2016-09-12-22-11-28-11.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '11.jpg', 8, 0, 0, '', ''),
(47, 12, '2016-09-12-22-11-28-hotelfacilities-1.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'hotelfacilities-1.jpg', 8, 0, 0, '', ''),
(48, 13, '2016-09-12-22-11-28-hotelfacilities-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'hotelfacilities-2.jpg', 8, 0, 0, '', ''),
(49, 14, '2016-09-12-22-11-28-hotelfacilities-4.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'hotelfacilities-4.jpg', 8, 0, 0, '', ''),
(50, 15, '2016-09-12-22-11-28-hotelfacilities-5.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'hotelfacilities-5.jpg', 8, 0, 0, '', ''),
(51, 16, '2016-09-12-22-11-28-hotelfacilities-6.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'hotelfacilities-6.jpg', 8, 0, 0, '', ''),
(52, 17, '2016-09-12-22-11-28-slider.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'slider.jpg', 8, 0, 0, '', ''),
(53, 18, '2016-09-12-22-11-28-slider2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'slider2.jpg', 8, 0, 0, '', ''),
(54, 19, '2016-09-12-22-11-28-slider3.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'slider3.jpg', 8, 0, 0, '', ''),
(55, 20, '2016-09-12-22-11-28-slider4.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'slider4.jpg', 8, 0, 0, '', ''),
(56, 1, '2016-09-12-23-23-14-4.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 1, 'image/jpeg', '4.jpg', 9, 1, 0, '', ''),
(57, 2, '2016-09-12-23-23-14-5.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '5.jpg', 9, 0, 0, '', ''),
(58, 3, '2016-09-12-23-23-14-10.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '10.jpg', 9, 0, 0, '', ''),
(59, 4, '2016-09-12-23-23-14-11.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '11.jpg', 9, 0, 0, '', ''),
(60, 5, '2016-09-12-23-23-14-hotelfacilities-6.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'hotelfacilities-6.jpg', 9, 0, 0, '', ''),
(61, 6, '2016-09-12-23-23-14-slider.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'slider.jpg', 9, 0, 0, '', ''),
(62, 1, '2016-09-12-23-28-49-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 1, 'image/jpeg', '2.jpg', 10, 1, 0, '', ''),
(63, 2, '2016-09-12-23-28-49-3.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '3.jpg', 10, 0, 0, '', ''),
(64, 3, '2016-09-12-23-28-49-4.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '4.jpg', 10, 0, 0, '', ''),
(65, 4, '2016-09-12-23-28-49-5.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '5.jpg', 10, 0, 0, '', ''),
(66, 5, '2016-09-12-23-28-49-6.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '6.jpg', 10, 0, 0, '', ''),
(67, 6, '2016-09-12-23-28-49-7.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '7.jpg', 10, 0, 0, '', ''),
(68, 7, '2016-09-12-23-28-49-8.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '8.jpg', 10, 0, 0, '', ''),
(69, 1, '2016-09-17-11-04-07-2016-08-27-16-18-57-bgslideRoom-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 1, 'image/jpeg', '2016-08-27-16-18-57-bgslideRoom-2.jpg', 11, 1, 0, '', ''),
(70, 2, '2016-09-17-11-04-07-2016-08-27-16-21-32-bgslideRoom-1.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '2016-08-27-16-21-32-bgslideRoom-1.jpg', 11, 0, 0, '', ''),
(71, 3, '2016-09-17-11-04-07-2016-08-27-16-21-32-bgslideRoom-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '2016-08-27-16-21-32-bgslideRoom-2.jpg', 11, 0, 0, '', ''),
(72, 1, '2016-09-17-11-12-32-2016-08-24-16-11-08-slider5.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 1, 'image/jpeg', '2016-08-24-16-11-08-slider5.jpg', 12, 1, 0, '', ''),
(73, 2, '2016-09-17-11-12-32-2016-08-27-01-01-43-bgslide-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '2016-08-27-01-01-43-bgslide-2.jpg', 12, 0, 0, '', ''),
(74, 1, '2016-10-05-19-57-20-3821226555_o.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 1, 'image/jpeg', '3821226555_o.jpg', 14, 1, 0, '', ''),
(75, 2, '2016-10-05-19-57-20-23974428171_o.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', '23974428171_o.jpg', 14, 0, 0, '', ''),
(76, 3, '2016-10-05-19-57-20-wimmingpool.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', 0, 'image/jpeg', 'wimmingpool.jpg', 14, 0, 0, '', ''),
(77, 1, '2016-10-05-20-05-56-3821226555-o.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '3821226555_o.jpg', 4, NULL, 0, '', ''),
(78, 2, '2016-10-05-20-05-56-23974428171-o.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '23974428171_o.jpg', 4, NULL, 0, '', ''),
(79, 3, '2016-10-05-20-05-56-sakyo-sushi-restaurant.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', 'sakyo-sushi-restaurant.jpg', 4, NULL, 0, '', ''),
(80, 1, '2016-10-05-20-09-43-1.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '1.jpg', 6, NULL, 0, '', ''),
(81, 2, '2016-10-05-20-09-43-2.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '2.jpg', 6, NULL, 0, '', ''),
(82, 3, '2016-10-05-20-09-43-3.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '3.jpg', 6, NULL, 0, '', ''),
(83, 1, '2016-10-05-20-12-50-4.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '4.jpg', 7, NULL, 0, '', ''),
(84, 2, '2016-10-05-20-12-50-5.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '5.jpg', 7, NULL, 0, '', ''),
(85, 3, '2016-10-05-20-12-50-6.jpg', 'C:\\xampp\\htdocs\\hotelsnew2\\protected/../uploads/gallery/', NULL, 'image/jpeg', '6.jpg', 7, NULL, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `klspa`
--

CREATE TABLE `klspa` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `full_content` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klspa`
--

INSERT INTO `klspa` (`id`, `title`, `slug`, `display_order`, `hotel_id`, `cover_photo`, `short_content`, `full_content`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(2, '{"en":"Weekend Music","vi":"Weekend Music"}', 'weekend-music', 2, 1, '2016-09-11-21-50-13-hotelfacilities-6.jpg', '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast.","vi":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast."}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n"}', 0, '2016-08-31 21:05:53', '2016-08-31 21:05:53', 1),
(3, '{"en":"skpa Family Room Offer - 3 Nights","vi":"skpa Family Room Offer - 3 Nights"}', 'skpa-family-room-offer-3-nights', 2, 4, '2016-09-04-18-15-12-hotelfacilities-2.jpg', '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast.","vi":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast."}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n"}', 0, '2016-08-31 21:28:02', '2016-08-31 21:28:02', 1),
(4, '{"en":"KL Spa","vi":"KL Spa"}', 'kl-spa', 2, 1, '2016-09-04-18-15-18-hotelfacilities-4.jpg', '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast","vi":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast"}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast<\\/p>\\r\\n"}', 0, '2016-09-04 14:35:01', '2016-09-04 14:35:01', 1),
(7, '{"en":"Aroma Health Club & Spa","vi":"Aroma Health Club & Spa"}', 'aroma-health-club-spa', 1, 3, '2016-09-07-22-21-14-hotelfacilities-5.jpg', '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast","vi":"Aroma Health Club & Spa"}', '{"en":"","vi":""}', 0, '2016-09-07 22:21:14', '2016-09-07 22:21:14', 1),
(9, '{"en":"Spend an enjoyable family ","vi":"klspa2"}', 'spend-an-enjoyable-family', 1, 4, '2016-09-12-16-09-51-hotelfacilities-6.jpg', '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast","vi":"Short Content"}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast<\\/p>\\r\\n","vi":"<p>Full Content<\\/p>\\r\\n"}', 0, '2016-09-12 15:31:23', '2016-09-12 15:31:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `short_name` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `short_name`, `status`) VALUES
(1, 'English', 'en', 1),
(2, 'Vietnamese', 'vi', 1),
(3, 'Japanese', 'jp', 1),
(4, 'Chinese', 'ch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `age_group` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `password_reset_token` varchar(728) NOT NULL,
  `status` enum('P','A','I') NOT NULL DEFAULT 'A',
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `last_login_date` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `avatar`, `display_name`, `age_group`, `country`, `remarks`, `title`, `first_name`, `last_name`, `gender`, `email`, `address`, `password_reset_token`, `status`, `added_date`, `updated_date`, `last_login_date`, `ip_address`) VALUES
(1, 'hongduy', '3863cc2a3591cae08d493ea8c01c127996adba75', 'avatar-user-1-2016-08-30-1472537159.jpg', 'hong duy', 16, 1, '', 'tile', 'first', 'last name', '', 'hongduyabc@gmail.com', 'rrr', '', 'A', '0000-00-00 00:00:00', '2016-08-30 13:16:40', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `nearby`
--

CREATE TABLE `nearby` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `cate_nearby` int(11) NOT NULL,
  `type` varchar(64) NOT NULL,
  `time` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nearby`
--

INSERT INTO `nearby` (`id`, `title`, `cate_nearby`, `type`, `time`, `display_order`, `short_description`, `description`, `cover_photo`, `slug`, `hotel_id`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, '{"en":"BEN THANH MARKET","vi":"BEN THANH MARKET"}', 3, 'shop', '5 mins walk', 1, '{"en":"<p>What&rsquo;s more seductive than resting in the cool water and enjoying great city view from above? At night fall, it is best to unwind and refresh with our cooling cocktails and tasty snack served right at your table<\\/p>\\r\\n","vi":"<p>What&rsq', '{"en":"<p>Ben Thanh is firstly well-known as the place for real Vietnamese produces. In the market, you can find clothes (the famous Vietnamese Ao Dai Costume and also Vietnamese hat), footwear, accessories, jewelry, hardware, souvenirs, crafts, flowers, nuts, food and restaurant. The highlight of the main facade of Ben Thanh Market is the huge block housed in the middle of the turret from the front door.<\\/p>\\r\\n","vi":"<p>What&rsquo;s more seductive than resting in the cool water and enjoying great city view from above? At night fall, it is best to unwind and refresh with our cooling cocktails and tasty snack served right at your table<\\/p>\\r\\n"}', '2016-10-05-20-20-46-8.jpg', 'ben-thanh-market', 3, 0, '2015-12-24 09:34:27', '2016-10-05 20:20:46', 1),
(5, '{"en":"NOTRE DAME CATHERAL","vi":"NOTRE DAME CATHERAL"}', 1, 'drink', '5 mins walk', 2, '', '{"en":"<p>Notre Dame Catheral is a twin towered catheral which is one of the most prominent architectual marvels. It was built in 1877 with materials imported from France. Sitting between two busy streams of traffic, the street outside are always bustling with tourists, locals and street vendors. Inside, although the decor is austere, the church comes alive during services.<\\/p>\\r\\n","vi":"<p>Notre Dame Catheral is a twin towered catheral which is one of the most prominent architectual marvels. It was built in 1877 with materials imported from France. Sitting between two busy streams of traffic, the street outside are always bustling with tourists, locals and street vendors. Inside, although the decor is austere, the church comes alive during services.<\\/p>\\r\\n"}', '2016-10-05-20-21-57-notre-dame-catheral.jpg', 'notre-dame-catheral', 1, 0, '2016-09-04 12:16:42', '2016-10-05 20:21:57', 1),
(6, '{"en":"STARBUCKS COFFEE","vi":"STARBUCKS COFFEE"}', 1, 'drink', '5 mins walk', 3, '', '{"en":"<p>Starbucks Coffee is the largest coffeehouse company in the world and its stores have been presented in 49 countries.<\\/p>\\r\\n\\r\\n<p>Starbucks locations serve hot and cold beverages, whole-bean coffee, microground instant coffee, full-leaf teas, pastries and snacks.<\\/p>\\r\\n","vi":"<p>Starbucks Coffee is the largest coffeehouse company in the world and its stores have been presented in 49 countries.<\\/p>\\r\\n\\r\\n<p>Starbucks locations serve hot and cold beverages, whole-bean coffee, microground instant coffee, full-leaf teas, pastries and snacks.<\\/p>\\r\\n"}', '2016-10-05-20-22-56-starbucks-coffee.jpg', 'starbucks-coffee', 1, 0, '2016-09-04 12:17:18', '2016-10-05 20:23:20', 1),
(7, '{"en":"THE SAIGON OPERA HOUSE","vi":"THE SAIGON OPERA HOUSE"}', 4, 'see', '5 mins walk', 2, '', '{"en":"<p>The Saigon Opera House is one of the top venues in Vietnam to listen to opera and classical music. Great photo opportunities await travelers who seek out the Saigon Opera House, as the building is a fine example of French colonical architecture. The currently most famous show you can watch is the A O Show, a blend of Cirque du Soleil and traditional Vietnamese elements.<\\/p>\\r\\n","vi":"<p>The Saigon Opera House is one of the top venues in Vietnam to listen to opera and classical music. Great photo opportunities await travelers who seek out the Saigon Opera House, as the building is a fine example of French colonical architecture. The currently most famous show you can watch is the A O Show, a blend of Cirque du Soleil and traditional Vietnamese elements.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n"}', '2016-10-05-20-24-28-the-saigon-opera-house.jpg', 'the-saigon-opera-house', 1, 0, '2016-09-04 12:17:57', '2016-10-05 20:24:28', 1),
(8, '{"en":"NGON RESTAURANT","vi":"NGON RESTAURANT"}', 2, 'eat', '', 5, '', '{"en":"<p>Ngon is one of the most popular restaurants in Saigon for both international tourists and Vietnamese. The restaurant offer well-priced local food in a lovely airy colonial villa setting and a great concept. This is another great place (like Ben Thanh Market) for seeing and trying a range of Vietnamese culinary delights.<\\/p>\\r\\n","vi":"<p>Ngon is one of the most popular restaurants in Saigon for both international tourists and Vietnamese. The restaurant offer well-priced local food in a lovely airy colonial villa setting and a great concept. This is another great place (like Ben Thanh Market) for seeing and trying a range of Vietnamese culinary delights.<\\/p>\\r\\n"}', '2016-10-05-20-25-17-10.jpg', 'ngon-restaurant', 0, 0, '2016-10-05 20:25:17', '2016-10-05 20:25:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nearby_category`
--

CREATE TABLE `nearby_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nearby_category`
--

INSERT INTO `nearby_category` (`id`, `name`, `slug`, `display_order`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 'drink', 'drink', 0, 0, '2016-09-12 11:06:59', '2016-09-12 11:09:12', 1),
(2, 'eat', 'eat', 1, 0, '2016-09-12 11:07:09', '2016-09-12 11:07:09', 1),
(3, 'shop', 'shop', 2, 0, '2016-09-12 11:07:16', '2016-09-12 11:07:16', 1),
(4, 'see', 'see', 3, 0, '2016-09-12 11:07:29', '2016-09-12 11:09:16', 1),
(5, 'visit', 'visit', 4, 0, '2016-09-12 11:07:38', '2016-09-12 11:07:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `short_id` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `request_date` datetime NOT NULL,
  `phone` varchar(64) NOT NULL,
  `country` varchar(128) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `country_code` varchar(64) NOT NULL,
  `code` varchar(128) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_type` varchar(32) NOT NULL,
  `card_name` varchar(32) NOT NULL,
  `card_expired` varchar(16) NOT NULL,
  `card_cvv` int(11) NOT NULL,
  `change_currency_rate` float NOT NULL,
  `currency` varchar(16) NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  `book_from` varchar(128) NOT NULL,
  `notes` varchar(765) NOT NULL,
  `version` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `token` varchar(128) NOT NULL,
  `reason_stay` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_child` int(11) NOT NULL,
  `no_of_extrabed` int(11) NOT NULL,
  `checkin` int(11) NOT NULL,
  `checkout` int(11) NOT NULL,
  `booked_nights` int(11) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `extrabed_price` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `rate_vnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `roomtypes` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `cancel_1` varchar(255) NOT NULL,
  `cancel_2` varchar(255) NOT NULL,
  `cancel_3` varchar(255) NOT NULL,
  `no_of_day` int(11) NOT NULL,
  `discount` float NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `show_code` int(1) NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `min_stay` int(11) NOT NULL,
  `sale_start` date NOT NULL,
  `sale_end` date NOT NULL,
  `display_on` text NOT NULL,
  `min_room` int(11) NOT NULL,
  `apply_on` text NOT NULL,
  `every_night` float NOT NULL,
  `specific_night` tinytext NOT NULL,
  `specific_day_of_week` tinytext NOT NULL,
  `cancel_text_1` varchar(765) NOT NULL,
  `cancel_text_2` varchar(765) NOT NULL,
  `cancel_text_3` varchar(765) NOT NULL,
  `description` text NOT NULL,
  `short_content` varchar(500) DEFAULT NULL,
  `max_stay` int(11) NOT NULL,
  `increase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `hotel_id`, `name`, `slug`, `from_date`, `to_date`, `roomtypes`, `type`, `cancel_1`, `cancel_2`, `cancel_3`, `no_of_day`, `discount`, `code`, `show_code`, `added_date`, `updated_date`, `updated_by`, `status`, `min_stay`, `sale_start`, `sale_end`, `display_on`, `min_room`, `apply_on`, `every_night`, `specific_night`, `specific_day_of_week`, `cancel_text_1`, `cancel_text_2`, `cancel_text_3`, `description`, `short_content`, `max_stay`, `increase`) VALUES
(1, 3, '{"en":"aaa","vi":"aa","ja":"aa","ko":"aa"}', 'aaa', '2015-01-08', '2016-02-06', '3', 'early_bird', '365D100P_100P', '1P24h', 'nothirdrule', 1, 30, NULL, 0, '2015-08-21 00:00:00', '2016-08-16 12:09:12', 1, 0, 1, '0000-00-00', '0000-00-00', 'sun,mon,tue,wed,thu,fri,sat', 1, 'specific_night', 0, '{"1":"20","2":"20","3":"20","4":"20","5":"20","6":"30","7":"30"}', '{"mon":"","tue":"","wed":"","thu":"","fri":"","sat":"","sun":""}', 'No-Show, 1st Night Charged', 'Charge the enclose credit card with 100% amount within 24hours', '', '{"en":"","vi":"","ja":"","ko":""}', '{"en":"","vi":"","ja":"","ko":""}', 0, 0),
(2, 1, '{"en":"Discount 30%","vi":"Discount 30%"}', 'discount-30', '2015-04-01', '2016-12-31', '2,4,5,6,7', 'others', '1N', 'nosecondrule', 'nothirdrule', 1, 0, NULL, 0, '2015-09-16 11:05:08', '2016-10-05 20:47:38', 1, 0, 1, '0000-00-00', '0000-00-00', 'sun,mon,tue,wed,thu,fri,sat', 1, 'every_night', 0, '{"1":"","2":"","3":"","4":"","5":"","6":"","7":""}', '{"mon":"","tue":"","wed":"","thu":"","fri":"","sat":"","sun":""}', 'No-Show, 1st Night Charged', '', '', '{"en":"","vi":""}', '{"en":"","vi":""}', 0, 0),
(3, 1, '{"en":"discount 20%","vi":"discount 20%"}', 'discount-20', '2016-01-01', '2016-12-31', '2,5,6', 'others', '1N', 'nosecondrule', 'nothirdrule', 1, 30, NULL, 0, '2016-01-01 21:47:27', '2016-10-05 20:47:52', 1, 0, 1, '0000-00-00', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '{"en":"","vi":""}', '{"en":"","vi":""}', 0, 0),
(4, 0, 'giảm giá 20%', '', '2016-08-02', '2016-08-25', '2', 'early_bird', '50P', '21D100P', '21D100P', 3, 22, 'adasd', 1, '2016-08-08 23:00:04', '2016-08-08 23:03:32', 1, 0, 3, '0000-00-00', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '{"en":"","vi":"","ch":"","ja":""}', '{"en":"","vi":"","ch":"","ja":""}', 0, 0),
(5, 1, '{"en":"Discount 22%","vi":"Discount 22%"}', 'discount-22', '2016-08-02', '2016-08-25', '2,4', 'early_bird', '50P', '21D100P', '21D100P', 3, 22, 'adasd', 1, '2016-08-08 23:00:14', '2016-10-05 20:48:13', 1, 0, 3, '0000-00-00', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '{"en":"","vi":""}', '{"en":"","vi":""}', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `single` float NOT NULL,
  `double` float NOT NULL,
  `tripple` float NOT NULL,
  `single_sell` float NOT NULL,
  `double_sell` float NOT NULL,
  `tripple_sell` float NOT NULL,
  `breakfast` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `roomtype_id`, `hotel_id`, `date`, `day`, `single`, `double`, `tripple`, `single_sell`, `double_sell`, `tripple_sell`, `breakfast`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 2, 0, '2016-07-28', 'Thu', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(2, 2, 0, '2016-07-29', 'Fri', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(3, 2, 0, '2016-07-30', 'Sat', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(4, 2, 0, '2016-07-31', 'Sun', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(5, 2, 0, '2016-08-01', 'Mon', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(6, 2, 0, '2016-08-02', 'Tue', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(7, 2, 0, '2016-08-03', 'Wed', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:38', '2016-07-29 15:05:32', 1),
(8, 2, 0, '2016-08-04', 'Thu', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:32', 1),
(9, 2, 0, '2016-08-05', 'Fri', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:32', 1),
(10, 2, 0, '2016-08-06', 'Sat', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(11, 2, 0, '2016-08-07', 'Sun', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(12, 2, 0, '2016-08-08', 'Mon', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(13, 2, 0, '2016-08-09', 'Tue', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(14, 2, 0, '2016-08-10', 'Wed', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(15, 2, 0, '2016-08-11', 'Thu', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(16, 2, 0, '2016-08-12', 'Fri', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(17, 2, 0, '2016-08-13', 'Sat', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(18, 2, 0, '2016-08-14', 'Sun', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(19, 2, 0, '2016-08-15', 'Mon', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(20, 2, 0, '2016-08-16', 'Tue', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(21, 2, 0, '2016-08-17', 'Wed', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(22, 2, 0, '2016-08-18', 'Thu', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(23, 2, 0, '2016-08-19', 'Fri', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:39', '2016-07-29 15:05:33', 1),
(24, 2, 0, '2016-08-20', 'Sat', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(25, 2, 0, '2016-08-21', 'Sun', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(26, 2, 0, '2016-08-22', 'Mon', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(27, 2, 0, '2016-08-23', 'Tue', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(28, 2, 0, '2016-08-24', 'Wed', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(29, 2, 0, '2016-08-25', 'Thu', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(30, 2, 0, '2016-08-26', 'Fri', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:33', 1),
(31, 2, 0, '2016-08-27', 'Sat', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:34', 1),
(32, 2, 0, '2016-08-28', 'Sun', 10, 20, 0, 11.55, 23.1, 0, 1, '2016-07-28 23:20:40', '2016-07-29 15:05:34', 1),
(33, 2, 0, '2016-07-05', 'Tue', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(34, 2, 0, '2016-07-06', 'Wed', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(35, 2, 0, '2016-07-07', 'Thu', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(36, 2, 0, '2016-07-08', 'Fri', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(37, 2, 0, '2016-07-09', 'Sat', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(38, 2, 0, '2016-07-10', 'Sun', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(39, 2, 0, '2016-07-11', 'Mon', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(40, 2, 0, '2016-07-12', 'Tue', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(41, 2, 0, '2016-07-13', 'Wed', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(42, 2, 0, '2016-07-14', 'Thu', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(43, 2, 0, '2016-07-15', 'Fri', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:31', '2016-07-29 15:05:31', 1),
(44, 2, 0, '2016-07-16', 'Sat', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(45, 2, 0, '2016-07-17', 'Sun', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(46, 2, 0, '2016-07-18', 'Mon', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(47, 2, 0, '2016-07-19', 'Tue', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(48, 2, 0, '2016-07-20', 'Wed', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(49, 2, 0, '2016-07-21', 'Thu', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(50, 2, 0, '2016-07-22', 'Fri', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(51, 2, 0, '2016-07-23', 'Sat', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(52, 2, 0, '2016-07-24', 'Sun', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(53, 2, 0, '2016-07-25', 'Mon', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(54, 2, 0, '2016-07-26', 'Tue', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(55, 2, 0, '2016-07-27', 'Wed', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:32', '2016-07-29 15:05:32', 1),
(56, 2, 0, '2016-08-29', 'Mon', 100, 150, 0, 115.5, 173.25, 0, 1, '2016-07-29 15:05:34', '2016-07-29 15:05:34', 1),
(57, 3, 3, '2016-08-24', 'Wed', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(58, 3, 3, '2016-08-25', 'Thu', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(59, 3, 3, '2016-08-26', 'Fri', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(60, 3, 3, '2016-08-27', 'Sat', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(61, 3, 3, '2016-08-28', 'Sun', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(62, 3, 3, '2016-08-29', 'Mon', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(63, 3, 3, '2016-08-30', 'Tue', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(64, 3, 3, '2016-08-31', 'Wed', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(65, 3, 3, '2016-09-01', 'Thu', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(66, 3, 3, '2016-09-02', 'Fri', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(67, 3, 3, '2016-09-03', 'Sat', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(68, 3, 3, '2016-09-04', 'Sun', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(69, 3, 3, '2016-09-05', 'Mon', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(70, 3, 3, '2016-09-06', 'Tue', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(71, 3, 3, '2016-09-07', 'Wed', 100, 200, 300, 115.5, 231, 346.5, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(72, 3, 3, '2016-09-08', 'Thu', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(73, 3, 3, '2016-09-09', 'Fri', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(74, 3, 3, '2016-09-10', 'Sat', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(75, 3, 3, '2016-09-11', 'Sun', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(76, 3, 3, '2016-09-12', 'Mon', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(77, 3, 3, '2016-09-13', 'Tue', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(78, 3, 3, '2016-09-14', 'Wed', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1),
(79, 3, 3, '2016-09-15', 'Thu', 0, 0, 0, 0, 0, 0, 0, '2016-08-12 22:22:05', '2016-08-12 22:22:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `allow_book` int(11) NOT NULL,
  `show_on_home_page` int(11) NOT NULL,
  `short_content` text NOT NULL,
  `full_content` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `cate_id`, `title`, `slug`, `display_order`, `hotel_id`, `cover_photo`, `allow_book`, `show_on_home_page`, `short_content`, `full_content`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(2, 6, '{"en":"Weekend Music","vi":"Weekend Music"}', 'weekend-music', 2, 1, '2016-09-11-21-50-13-hotelfacilities-6.jpg', 0, 0, '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast.","vi":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast."}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n"}', 0, '2016-08-31 21:05:53', '2016-08-31 21:05:53', 1),
(3, 7, '{"en":"Family Room Offer - 3 Nights","vi":"Family Room Offer - 3 Nights"}', 'family-room-offer-3-nights', 2, 1, '2016-09-04-18-15-12-hotelfacilities-2.jpg', 0, 0, '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast.","vi":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast."}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n"}', 0, '2016-08-31 21:28:02', '2016-08-31 21:28:02', 1),
(4, 8, '{"en":"KL Spa","vi":"KL Spa"}', 'kl-spa', 2, 1, '2016-09-04-18-15-18-hotelfacilities-4.jpg', 0, 0, '{"en":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast","vi":"Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents \\u2013 with children under 11 enjoying a free breakfast"}', '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast<\\/p>\\r\\n"}', 0, '2016-09-04 14:35:01', '2016-09-04 14:35:01', 1),
(7, 0, '{"en":"Aroma Health Club & Spa","vi":"Aroma Health Club & Spa"}', 'aroma-health-club-spa', 1, 3, '2016-09-07-22-21-14-hotelfacilities-5.jpg', 0, 0, '{"en":"Aroma Health Club & Spa","vi":"Aroma Health Club & Spa"}', '{"en":"","vi":""}', 0, '2016-09-07 22:21:14', '2016-09-07 22:21:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_name` varchar(64) NOT NULL,
  `access_rights` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_name`, `access_rights`, `remark`, `added_date`, `updated_date`, `updated_by`) VALUES
('supper admin', '{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearbycategory":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"trip":["admin","create","update","delete"],"emailoffers":["admin","create","update","delete"],"contact":["admin","report","customer"],"experience":["admin","create","update","delete"],"specialoffer":["admin","create","update","delete"],"restaurant":["admin","create","update","delete"],"hotelfacilities":["admin","create","update","delete"]}', 'all roles', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
('sales staff', '{"booking":["admin","delete","view"],"hotel":["admin","create","update","delete","view"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"gallery":["admin","create","upload","update","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}', 'sales', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `close` int(11) NOT NULL,
  `used_total_allotments` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `auto_fill` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomtype_id`, `hotel_id`, `date`, `day`, `close`, `used_total_allotments`, `available`, `auto_fill`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 2, 1, '2016-08-12', 'Fri', 0, 0, 2, 2, '2016-08-12 22:01:31', '2016-08-12 22:02:42', 1),
(2, 2, 1, '2016-08-13', 'Sat', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(3, 2, 1, '2016-08-14', 'Sun', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(4, 2, 1, '2016-08-15', 'Mon', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(5, 2, 1, '2016-08-16', 'Tue', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(6, 2, 1, '2016-08-17', 'Wed', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(7, 2, 1, '2016-08-18', 'Thu', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(8, 2, 1, '2016-08-19', 'Fri', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(9, 2, 1, '2016-08-20', 'Sat', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(10, 2, 1, '2016-08-21', 'Sun', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(11, 2, 1, '2016-08-22', 'Mon', 0, 0, 2, 0, '2016-08-12 22:01:31', '2016-08-13 23:12:14', 3),
(12, 2, 1, '2016-08-23', 'Tue', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(13, 2, 1, '2016-08-24', 'Wed', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(14, 2, 1, '2016-08-25', 'Thu', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(15, 2, 1, '2016-08-26', 'Fri', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(16, 2, 1, '2016-08-27', 'Sat', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(17, 2, 1, '2016-08-28', 'Sun', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(18, 2, 1, '2016-08-29', 'Mon', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(19, 2, 1, '2016-08-30', 'Tue', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(20, 2, 1, '2016-08-31', 'Wed', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(21, 2, 1, '2016-09-01', 'Thu', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(22, 2, 1, '2016-09-02', 'Fri', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(23, 2, 1, '2016-09-03', 'Sat', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(24, 2, 1, '2016-09-04', 'Sun', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(25, 2, 1, '2016-09-05', 'Mon', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(26, 2, 1, '2016-09-06', 'Tue', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(27, 2, 1, '2016-09-07', 'Wed', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-08-13 23:12:14', 3),
(28, 2, 1, '2016-09-08', 'Thu', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-09-08 14:48:41', 1),
(29, 2, 1, '2016-09-09', 'Fri', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-09-08 14:48:41', 1),
(30, 2, 1, '2016-09-10', 'Sat', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-09-08 14:48:41', 1),
(31, 2, 1, '2016-09-11', 'Sun', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-09-08 14:48:41', 1),
(32, 2, 1, '2016-09-12', 'Mon', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-09-08 14:48:41', 1),
(33, 2, 1, '2016-09-13', 'Tue', 0, 0, 5, 0, '2016-08-13 23:12:14', '2016-09-08 14:48:41', 1),
(34, 2, 1, '2016-09-14', 'Wed', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(35, 2, 1, '2016-09-15', 'Thu', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(36, 2, 1, '2016-09-16', 'Fri', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(37, 2, 1, '2016-09-17', 'Sat', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(38, 2, 1, '2016-09-18', 'Sun', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(39, 2, 1, '2016-09-19', 'Mon', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(40, 2, 1, '2016-09-20', 'Tue', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(41, 2, 1, '2016-09-21', 'Wed', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(42, 2, 1, '2016-09-22', 'Thu', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(43, 2, 1, '2016-09-23', 'Fri', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(44, 2, 1, '2016-09-24', 'Sat', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(45, 2, 1, '2016-09-25', 'Sun', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(46, 2, 1, '2016-09-26', 'Mon', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(47, 2, 1, '2016-09-27', 'Tue', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(48, 2, 1, '2016-09-28', 'Wed', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(49, 2, 1, '2016-09-29', 'Thu', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(50, 2, 1, '2016-09-30', 'Fri', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(51, 2, 1, '2016-10-01', 'Sat', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(52, 2, 1, '2016-10-02', 'Sun', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(53, 2, 1, '2016-10-03', 'Mon', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(54, 2, 1, '2016-10-04', 'Tue', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(55, 2, 1, '2016-10-05', 'Wed', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(56, 2, 1, '2016-10-06', 'Thu', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(57, 2, 1, '2016-10-07', 'Fri', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1),
(58, 2, 1, '2016-10-08', 'Sat', 0, 0, 5, 0, '2016-09-08 14:48:41', '2016-09-08 14:48:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) UNSIGNED NOT NULL,
  `photo1` varbinary(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL,
  `description` text NOT NULL,
  `amenities` varchar(300) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `max_per_room` int(11) NOT NULL,
  `size_of_room` varchar(50) NOT NULL,
  `view` varchar(100) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `photo5` varchar(100) NOT NULL,
  `no_of_adult` int(11) NOT NULL,
  `no_of_child` int(11) NOT NULL,
  `no_of_extrabed` int(11) NOT NULL,
  `cover_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `hotel_id`, `photo1`, `name`, `slug`, `display_order`, `description`, `amenities`, `no_of_rooms`, `max_per_room`, `size_of_room`, `view`, `bed`, `status`, `added_date`, `updated_date`, `updated_by`, `photo2`, `photo3`, `photo4`, `photo5`, `no_of_adult`, `no_of_child`, `no_of_extrabed`, `cover_photo`) VALUES
(2, 1, '', 'PREMIER', 'premier', 4, '{"en":"<div>Approximate size \\u2013 28 sq m<\\/div>\\r\\n\\r\\n<div>An ideal living space for business or leisure travelers. For personal entertainment, the rooms provide broadband internet access and 32\\u2033 satellite LCD TV. The marble bathroom is equipped with a bathtub.<\\/div>\\r\\n\\r\\n<div>The turndown service offers customers even more comfort, by enabling them to arrive at their destination refreshed.<\\/div>","vi":"<div>Approximate size \\u2013 28 sq m<\\/div>\\r\\n\\r\\n<div>An ideal living space for business or leisure travelers. For personal entertainment, the rooms provide broadband internet access and 32\\u2033 satellite LCD TV. The marble bathroom is equipped with a bathtub.<\\/div>\\r\\n\\r\\n<div>The turndown service offers customers even more comfort, by enabling them to arrive at their destination refreshed.<\\/div>"}', 'non_smoking_rooms,daily_newspaper,desk,ironing_facilities,in_room_safe,bathtub,balcony/terrace,Free_LAN_and_WiFi_access', 41, 2, '26 sqm', 'Street View', '1_Single_Bed,2_Single_Beds,2_Double_Beds,3_Double_Beds,1_King_Bed,1_Single_Bed_&_1_King_Bed', 0, '2016-07-20 17:04:38', '2016-07-20 17:04:38', 1, '', '', '', '', 2, 2, 1, 'grand-silverland-hotel-spa-deluxe-double-twin-room-9-2016-07-28-22-57-11-8i21fvb1ow.jpg,grand-silverland-hotel-spa-deluxe-double-twin-room-10-2016-07-28-22-57-11-j1qu83iym0.jpg,grand-silverland-hotel-spa-deluxe-double-twin-room-11-2016-07-28-22-57-11-o1ma0r5vi6.jpg'),
(3, 3, '', 'PREMIER DELUXE ROOM', 'premier-deluxe-room', 4, '{"en":"<div>Each Premier Deluxe Room features over 30 sq m of space and these rooms offer city views.<\\/div>\\r\\n\\r\\n<div>A king-sized bed as well as high tech comforts such as flat screen TVs and broadband internet access. The windows overlook the city centre and customary in-room amenities such as air conditioning, a mini bar, electronic safe, writing desk, IDD phones, coffee and tea-making facilities are available.<\\/div>\\r\\n\\r\\n<div>The turn-down service offers customers even more comfort, enabling them to arrive at their destinations refreshed.<\\/div>\\r\\n","vi":"<div>Each Premier Deluxe Room features over 30 sq m of space and these rooms offer city views.<\\/div>\\r\\n\\r\\n<div>A king-sized bed as well as high tech comforts such as flat screen TVs and broadband internet access. The windows overlook the city centre and customary in-room amenities such as air conditioning, a mini bar, electronic safe, writing desk, IDD phones, coffee and tea-making facilities are available.<\\/div>\\r\\n\\r\\n<div>The turn-down service offers customers even more comfort, enabling them to arrive at their destinations refreshed.<\\/div>\\r\\n","ch":"<div>Each Premier Deluxe Room features over 30 sq m of space and these rooms offer city views.<\\/div>\\r\\n\\r\\n<div>A king-sized bed as well as high tech comforts such as flat screen TVs and broadband internet access. The windows overlook the city centre and customary in-room amenities such as air conditioning, a mini bar, electronic safe, writing desk, IDD phones, coffee and tea-making facilities are available.<\\/div>\\r\\n\\r\\n<div>The turn-down service offers customers even more comfort, enabling them to arrive at their destinations refreshed.<\\/div>\\r\\n","ja":"<div>Each Premier Deluxe Room features over 30 sq m of space and these rooms offer city views.<\\/div>\\r\\n\\r\\n<div>A king-sized bed as well as high tech comforts such as flat screen TVs and broadband internet access. The windows overlook the city centre and customary in-room amenities such as air conditioning, a mini bar, electronic safe, writing desk, IDD phones, coffee and tea-making facilities are available.<\\/div>\\r\\n\\r\\n<div>The turn-down service offers customers even more comfort, enabling them to arrive at their destinations refreshed.<\\/div>\\r\\n"}', 'non_smoking_rooms,air_conditioning,daily_newspaper,desk,ironing_facilities,in_room_safe,shower', 3, 2, '21', 'City view', '1_Single_Bed,2_Double_Beds', 0, '2016-07-20 17:06:30', '2016-07-20 17:06:30', 1, '', '', '', '', 2, 1, 2, 'silver-land-central-hotel-spa-premier-deluxe-room-1-2016-07-29-22-19-52-jw42ehukxq.jpg,silver-land-central-hotel-spa-premier-deluxe-room-2-2016-07-29-22-19-52-62vbtbu5ig.jpg,silver-land-central-hotel-spa-premier-deluxe-room-3-2016-07-29-22-19-52-wag45pcyrl.jpg,silver-land-central-hotel-spa-premier-deluxe-room-4-2016-07-29-22-19-52-fjw4aa2ttl.jpg,silver-land-central-hotel-spa-premier-deluxe-room-5-2016-07-29-22-19-52-dqdna34k92.jpg,silver-land-central-hotel-spa-premier-deluxe-room-6-2016-07-29-22-19-52-bjskdivsl0.jpg,silver-land-central-hotel-spa-premier-deluxe-room-7-2016-07-29-22-19-52-3kfvig92rw.jpg,silver-land-central-hotel-spa-premier-deluxe-room-8-2016-07-29-22-19-52-ctflsuhgws.jpg,silver-land-central-hotel-spa-premier-deluxe-room-9-2016-07-29-22-19-52-af2jhevxoa.jpg,silver-land-central-hotel-spa-premier-deluxe-room-10-2016-07-29-22-19-52-1ukq8nehxq.jpg,silver-land-central-hotel-spa-premier-deluxe-room-11-2016-07-29-22-19-52-erv63v1q40.jpg'),
(4, 1, '', 'DELUXE', 'deluxe', 3, '{"en":"This 24 square meters room features wood floors, a comfortable desk, fake window, no view, king or twin bed, high speed internet access, fully complimentary tea, coffee and purified water. Pampering amenities include high quality bathrobe, bathtub and other bathroom amenities.","vi":"This 24 square meters room features wood floors, a comfortable desk, fake window, no view, king or twin bed, high speed internet access, fully complimentary tea, coffee and purified water. Pampering amenities include high quality bathrobe, bathtub and other bathroom amenities."}', 'air_conditioning,bathrobes,daily_newspaper,desk,hair_dryer,ironing_facilities,television_LCD/plasma_screen,balcony/terrace,complimentary_bottled_water', 30, 2, '24 sqm', 'No View', '2_Single_Beds,1_Double_Bed,3_Double_Beds', 0, '2016-08-12 15:00:40', '2016-08-12 15:00:40', 1, '', '', '', '', 2, 1, 1, ''),
(5, 1, '', 'EXECUTIVE FAMILY', 'executive-family', 4, '{"en":"Designed in Asian style, located on selective designated floors, The 34 sqm Executive Family offers guests unique experience of your private home, not a city hotel. The room is ideal for &nbsp;family with children. The room offers wonderful city view.","vi":"Designed in Asian style, located on selective designated floors, The 34 sqm Executive Family offers guests unique experience of your private home, not a city hotel. The room is ideal for &nbsp;family with children. The room offers wonderful city view."}', 'air_conditioning,daily_newspaper,desk,ironing_facilities,in_room_safe,bathtub,shower,balcony/terrace,satellite/cable_TV,hard_wood_/_parquet_floor,toilet', 5, 3, '34 sqm', 'Street View', '', 0, '2016-10-05 20:36:36', '2016-10-05 20:36:36', 1, '', '', '', '', 2, 1, 1, ''),
(6, 1, '', 'EXECUTIVE', 'executive', 5, '{"en":"Designed in Asian style, located on selective designated floors, The 34 sqm Executive offers guests unique experience of your private home, not a city hotel. The room is ideal for business travelers. The room offers wonderful city view.","vi":"Designed in Asian style, located on selective designated floors, The 34 sqm Executive offers guests unique experience of your private home, not a city hotel. The room is ideal for business travelers. The room offers wonderful city view."}', 'complimentary_bottled_water,Cable_Chanel,wardrobe_/_closet,bathroom', 8, 3, '34 sqm', 'Street View', '', 0, '2016-10-05 20:37:21', '2016-10-05 20:37:21', 1, '', '', '', '', 2, 1, 1, ''),
(7, 1, '', 'SILVERLAND SUITE', 'silverland-suite', 8, '{"en":"Silver Suite offers large living space with 44 sqm in size, hi-end Jacuzzi steam bath, full bathroom amenities, turn down services and stunning city view.","vi":"Silver Suite offers large living space with 44 sqm in size, hi-end Jacuzzi steam bath, full bathroom amenities, turn down services and stunning city view."}', 'Cable_Chanel,wardrobe_/_closet,bathroom', 0, 5, '44 sqm', '-----', '3_Double_Beds', 0, '2016-10-05 20:45:36', '2016-10-05 20:45:36', 1, '', '', '', '', 2, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `seo_h1` varchar(128) NOT NULL,
  `seo_title` varchar(128) NOT NULL,
  `seo_keywords` varchar(128) NOT NULL,
  `seo_description` varchar(128) NOT NULL,
  `seo_extra` varchar(128) NOT NULL,
  `uri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `seo_h1`, `seo_title`, `seo_keywords`, `seo_description`, `seo_extra`, `uri`) VALUES
(1, 'Paradise Saigon Boutique Hotel', 'Special offser hotels', 'hotel in ho chi minh,hotel in saigon,hotel saigon,hotel ben thanh', 'Paradise Saigon Boutique Hotel is central of Ho Chi Minh', '', '/en/specialoffers.html'),
(2, 'h1', 'silver land central offers detail', 'hotel, offers', 'Located in the heart of Ho Chi Minh the 4-star Silverland Hotel has a state of the art leisure centre, kl spa, free internet and', '', '/en/silver-land-central-hotel-spaa/special-offers/weekend-sales-30-off.html');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `allow_book` int(11) NOT NULL,
  `show_on_home_page` int(11) NOT NULL,
  `short_content` text NOT NULL,
  `full_content` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `cate_id`, `title`, `slug`, `display_order`, `hotel_id`, `cover_photo`, `allow_book`, `show_on_home_page`, `short_content`, `full_content`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(4, 1, '{"en":"Family Room Offer - 2 Nights","vi":"abc"}', 'family-room-offer-2-nights', 0, 1, '2016-09-07-21-36-32-mau-nha-dep-100-trieu.jpg', 0, 0, '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n"}', '{"en":"<p>Family Room Offer - 2&nbsp;Nights<\\/p>\\r\\n","vi":"<p>Family Room Offer - 2&nbsp;Nights<\\/p>\\r\\n"}', 0, '2016-09-03 19:35:59', '2016-09-03 19:35:59', 1),
(3, 4, '{"en":"Family Room Offer - 3 Nights","vi":"Family Room Offer - 3 Nights"}', 'family-room-offer-3-nights', 22, 1, '2016-09-07-21-46-55-8.jpg', 0, 0, '{"en":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n","vi":"<p>Spend an enjoyable family vacation in our cozy family room, on selected dates from now to 31 December 2016. Brilliant fun for kids, great value for parents &ndash; with children under 11 enjoying a free breakfast.<\\/p>\\r\\n"}', '{"en":"<p>We love having families come to stay, and want your visit to be as comfy and affordable as it is fun. That&rsquo;s why there&rsquo;s no extra<br \\/>\\r\\ncharge for our fantastic, spacious family rooms, while kids under 11 get a free breakfast.<br \\/>\\r\\nEach family room has a double or king-size bed for the grown-ups, and two pull-out beds or sofa beds for the little ones. And if&nbsp;<br \\/>\\r\\nyou&rsquo;re travelling with a baby, we&rsquo;ll get you a cot too.<\\/p>\\r\\n\\r\\n<p>VALIDITY &amp; LENGTH OF STAY<\\/p>\\r\\n\\r\\n<p>Now till 31\\/12\\/2016<br \\/>\\r\\nMin stay : 3 nights<\\/p>\\r\\n\\r\\n<p>INCLUSION<\\/p>\\r\\n\\r\\n<p>Free daily buffet breakfast, Wi-Fi 24\\/7<br \\/>\\r\\nFree daily breakfast for children under 11-years-old<br \\/>\\r\\nFree pick-up<br \\/>\\r\\nFree 4 pieces of laundry\\/day 2pm late check-out<\\/p>\\r\\n","vi":"<p>We love having families come to stay, and want your visit to be as comfy and affordable as it is fun. That&rsquo;s why there&rsquo;s no extra<br \\/>\\r\\ncharge for our fantastic, spacious family rooms, while kids under 11 get a free breakfast.<br \\/>\\r\\nEach family room has a double or king-size bed for the grown-ups, and two pull-out beds or sofa beds for the little ones. And if&nbsp;<br \\/>\\r\\nyou&rsquo;re travelling with a baby, we&rsquo;ll get you a cot too.<\\/p>\\r\\n\\r\\n<p>VALIDITY &amp; LENGTH OF STAY<\\/p>\\r\\n\\r\\n<p>Now till 31\\/12\\/2016<br \\/>\\r\\nMin stay : 3 nights<\\/p>\\r\\n\\r\\n<p>INCLUSION<\\/p>\\r\\n\\r\\n<p>Free daily buffet breakfast, Wi-Fi 24\\/7<br \\/>\\r\\nFree daily breakfast for children under 11-years-old<br \\/>\\r\\nFree pick-up<br \\/>\\r\\nFree 4 pieces of laundry\\/day 2pm late check-out<\\/p>\\r\\n"}', 0, '2016-08-31 21:25:10', '2016-08-31 21:25:10', 1),
(5, 1, '{"en":"WEEKEND SALES (30% Off)","vi":"WEEKEND SALES (30% Off)"}', 'weekend-sales-30-off', 0, 3, '2016-09-07-22-00-32-5.jpg', 0, 0, '{"en":"<p>Book by Friday-Saturday-Sunday to get 30% Off - Free Breakfast, WIFI - Free Afternoon high-tea<\\/p>\\r\\n","vi":"<p>Book by Friday-Saturday-Sunday to get 30% Off - Free Breakfast, WIFI - Free Afternoon high-tea<\\/p>\\r\\n"}', '{"en":"<p>Book by Friday-Saturday-Sunday to get 30% Off - Free Breakfast, WIFI - Free Afternoon high-tea<\\/p>\\r\\n","vi":"<p>Book by Friday-Saturday-Sunday to get 30% Off - Free Breakfast, WIFI - Free Afternoon high-tea<\\/p>\\r\\n"}', 0, '2016-09-03 21:14:20', '2016-09-03 21:14:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `special_categories`
--

CREATE TABLE `special_categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `special_categories`
--

INSERT INTO `special_categories` (`id`, `title`, `display_order`, `slug`, `type`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, '{"en":"Package","vi":"Package"}', 0, 'package', 'special', 0, '0000-00-00 00:00:00', '2016-10-05 20:32:58', 1),
(10, '{"en":"Room","vi":"Room"}', 8, 'room', 'special', 0, '2016-10-05 20:33:10', '2016-10-05 20:33:10', 1),
(4, '{"en":"Rooftop Garden Restaurant","vi":"Rooftop Garden Restaurant"}', 6, 'rooftop-garden-restaurant', 'restaurant', 0, '2016-08-30 19:10:13', '2016-10-05 20:31:44', 1),
(5, '{"en":"Jacuzzi Pool Bar","vi":"Jacuzzi Pool Bar"}', 2, 'jacuzzi-pool-bar', '', 0, '2016-09-11 20:37:24', '2016-10-05 20:31:24', 1),
(6, '{"en":"Silverland Jolie Restaurant","vi":"Silverland Jolie Restaurant"}', 2, 'silverland-jolie-restaurant', 'restaurant', 0, '2016-09-11 21:37:10', '2016-10-05 20:31:02', 1),
(7, '{"en":"Jolie Garden Bar","vi":"Jolie Garden Bar"}', 2, 'jolie-garden-bar', 'restaurant', 0, '2016-09-11 21:51:24', '2016-10-05 20:30:48', 1),
(8, '{"en":"OMG! (Original, Musical, Gastronomic!)","vi":"OMG! (Original, Musical, Gastronomic!)"}', 3, 'omg-original,-musical,-gastronomic', 'restaurant', 0, '2016-09-11 21:51:39', '2016-09-11 21:51:39', 1),
(9, '{"en":"New Day Caf\\u00e9 & Lounge","vi":"New Day Caf\\u00e9 & Lounge"}', 7, 'new-day-cafe-lounge', 'restaurant', 0, '2016-10-05 20:32:06', '2016-10-05 20:32:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `static_content`
--

CREATE TABLE `static_content` (
  `id` int(11) NOT NULL,
  `key` varchar(128) NOT NULL,
  `key_description` varchar(128) NOT NULL,
  `display_order` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `static_content`
--

INSERT INTO `static_content` (`id`, `key`, `key_description`, `display_order`, `content`, `status`, `added_date`, `updated_date`, `updated_by`, `hotel`) VALUES
(1, 'reason_for', '', 1, '{"en":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n","vi":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n","ch":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n","jp":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n"}', 0, '2015-12-22 16:08:27', '2015-12-22 16:08:27', 1, 3),
(2, 'reason_for', 'REASONS FOR YOU TO BOOK ON SILVERLAND SITE', 1, '{"en":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n","vi":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n","ch":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n","jp":"<ul>\\r\\n\\t<li>\\r\\n\\t<h2>City center hotels<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Best price guarantee<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>Exclusive offers<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n\\t<li>\\r\\n\\t<h2>No hidden fees<\\/h2>\\r\\n\\tLocated on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel.<\\/li>\\r\\n<\\/ul>\\r\\n"}', 0, '2015-12-22 16:11:20', '2015-12-22 16:18:10', 1, 1),
(3, 'group_description', 'Group Description', 0, '{"en":"<h2>WELCOME TO ROSELAND HOTEL GROUP<\\/h2>\\r\\n\\r\\n<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent&nbsp;commodo&nbsp;cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum<\\/p>\\r\\n","vi":"<h2>WELCOME TO ROSELAND HOTEL GROUP<\\/h2>\\r\\n\\r\\n<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent&nbsp;commodo&nbsp;cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum<\\/p>\\r\\n","ch":"<h2>WELCOME TO ROSELAND HOTEL GROUP<\\/h2>\\r\\n\\r\\n<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent&nbsp;commodo&nbsp;cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum<\\/p>\\r\\n","jp":"<h2>WELCOME TO PARADISE<\\/h2>\\r\\n\\r\\n<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent&nbsp;commodo&nbsp;cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum<\\/p>\\r\\n"}', 0, '2015-12-26 18:57:29', '2015-12-26 19:15:44', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `s_value` text NOT NULL,
  `s_key` varchar(32) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `link` text NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `s_value`, `s_key`, `hotel_id`, `link`, `cover_photo`, `type`, `remarks`, `added_date`, `updated_date`, `updated_by`) VALUES
(26, '{"4_seats":"25","7_seats":"30","16_seats":"35"}', 'airport_pickup', 3, '', '', '0', 'Airport pickup price in Dollar', '0000-00-00 00:00:00', '2016-08-18 17:35:22', 1),
(27, '{"4_seats":20,"7_seats":30,"16_seats":35}', 'airport_dropoff', 1, '', '', '', 'Airport drop-off price in Dollar', '0000-00-00 00:00:00', '2015-10-31 11:05:33', 1),
(28, 'null', 'extrabed', 1, '', '', '0', 'Extra bed price in Dollar', '0000-00-00 00:00:00', '2016-08-18 17:35:32', 1),
(29, '<div id="TA_selfserveprop368" class="TA_selfserveprop">\r\n<ul id="hvmIUv" class="TA_links LILbJKy">\r\n<li id="iOrwP2zi50" class="Syg2ttC1S2wS">\r\n<a target="_blank" href="http://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>\r\n</li>\r\n</ul>\r\n</div>\r\n<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=368&amp;locationId=941162&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>', 'trip', 1, '', '', '', 'tripadvisor plugin', '0000-00-00 00:00:00', '2016-08-18 12:11:03', 1),
(30, '10.7714202', 'lat', 1, '', '', '', '', '0000-00-00 00:00:00', '2015-11-20 15:51:04', 1),
(31, '106.6939786', 'lng', 1, '', '', '', '', '0000-00-00 00:00:00', '2015-11-20 15:53:52', 1),
(33, '{"en":"<h1>LUXURY HOTELs &amp; SPA in heart of ho chi minh city, Vietnam<\\/h1>\\r\\n\\r\\n<p>Located on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel Group&rsquo;s latest addition to its Collections in the vibrant Ho Chi Minh City.<br \\/>\\r\\nThe hotel is preferred place of busy business travelers as it is just within walking minutes from Ben Thanh Market and close to many large business centers and buildings such as<br \\/>\\r\\n<strong>Sunwah Tower, Opera Building, Bitexco Building, Metropolitan Building, AB Tower, Saigon Centre and Gemadept Tower.<\\/strong><br \\/>\\r\\nThe hotel offers 89 guest rooms including Deluxe, Premier Deluxe, Executive and Silver Suite with high class branded amenities and entertainment facilities such as Roof Garden Restaurant where guests can enjoy a special night dinner under the candle lights or guests can swim in the Rooftop Swimming Pool, overlooking the nice city landscape.<br \\/>\\r\\nWhat&rsquo;s more, KL Spa is a preferred choice of most couples seeking for a pure retreat and escape in the busy Saigon or golfers can enjoy a practice on the Mini Golf located on 7th Floor, which they cannot find at any hotels in Saigon!<br \\/>\\r\\nGrand Silverland Hotel &amp; Spa might be a perfect choice for both demanding business travelers and holiday makers.<\\/p>\\r\\n","vi":"<h1>LUXURY HOTELs &amp; SPA in heart of ho chi minh city, Vietnam<\\/h1>\\r\\n\\r\\n<p>Located on Ly Tu Trong Street, the brand new 4 star Grand Silverland Hotel &amp; Spa is Tan Hai Long Hotel Group&rsquo;s latest addition to its Collections in the vibrant Ho Chi Minh City.<br \\/>\\r\\nThe hotel is preferred place of busy business travelers as it is just within walking minutes from Ben Thanh Market and close to many large business centers and buildings such as<br \\/>\\r\\n<strong>Sunwah Tower, Opera Building, Bitexco Building, Metropolitan Building, AB Tower, Saigon Centre and Gemadept Tower.<\\/strong><br \\/>\\r\\nThe hotel offers 89 guest rooms including Deluxe, Premier Deluxe, Executive and Silver Suite with high class branded amenities and entertainment facilities such as Roof Garden Restaurant where guests can enjoy a special night dinner under the candle lights or guests can swim in the Rooftop Swimming Pool, overlooking the nice city landscape.<br \\/>\\r\\nWhat&rsquo;s more, KL Spa is a preferred choice of most couples seeking for a pure retreat and escape in the busy Saigon or golfers can enjoy a practice on the Mini Golf located on 7th Floor, which they cannot find at any hotels in Saigon!<br \\/>\\r\\nGrand Silverland Hotel &amp; Spa might be a perfect choice for both demanding business travelers and holiday makers.<\\/p>\\r\\n","ja":"","cn":""}', 'about_group', 0, '', '', '0', 'Mô tả group', '0000-00-00 00:00:00', '2016-08-25 00:26:27', 1),
(34, 'null', 'text', 1, '', '', '0', '', '0000-00-00 00:00:00', '2016-08-18 17:34:21', 1),
(35, '2016-08-18-17-34-09441955566-magazine-peace-united-store-always-fresh-lookbook-headline-top-1470904723-jpg.jpg', 'aaaaa', 0, '', '', '1', '', '0000-00-00 00:00:00', '2016-08-18 17:34:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `cover_photo` varchar(128) NOT NULL,
  `max_2_adult` float NOT NULL,
  `max_4_adult` float NOT NULL,
  `max_6_adult` float NOT NULL,
  `max_9_adult` float NOT NULL,
  `above_10_adult` float NOT NULL,
  `discount` varchar(255) NOT NULL,
  `show_to_booking` int(11) NOT NULL,
  `short_description` varchar(765) NOT NULL,
  `full_description` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `slug`, `hotel_id`, `cover_photo`, `max_2_adult`, `max_4_adult`, `max_6_adult`, `max_9_adult`, `above_10_adult`, `discount`, `show_to_booking`, `short_description`, `full_description`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, '{"en":"CU CHI TUNNELS - HALF DAY","vi":"CU CHI TUNNELS - HALF DAY"}', 'cu-chi-tunnels-half-day', 1, '2016-09-05-13-33-59-5.jpg', 60000, 2000000, 70000, 0, 20000, '{"4":"3","5":"3","1":"3","3":"3","6":"3","7":"3"}', 1, '{"en":"<p>Start: 8:30 - 9:00 am<br \\/>\\r\\nReturn: 3:00 pm<br \\/>\\r\\nJoining group: 440.000 vnd (Pickup and Drop off)<br \\/>\\r\\nIncluded: Private transportation with air-conditioner, experienced English speaking guide, sightseeing tickets, mineral water<\\/p>\\r\\n","vi":"<p>Start: 8:30 - 9:00 am<br \\/>\\r\\nReturn: 3:00 pm<br \\/>\\r\\nJoining group: 440.000 vnd (Pickup and Drop off)<br \\/>\\r\\nIncluded: Private transportation with air-conditioner, experienced English speaking guide, sightseeing tickets, mineral water<\\/p>\\r\\n"}', '{"en":"<p><strong>Start<\\/strong>: 8:30 - 9:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 3:00 pm<\\/p>\\r\\n\\r\\n<p>Cu Chi used to be a bitter battleground for many years during the Vietnam War. Visitors to our country should not miss a visit to this underground village with our intricate network of over 200 km of tunnels at Ben Dinh, 50 km from Ho Chi Minh City. Don&#39;t miss the experience of a short, exciting trip through this labyrinth of interlaced tunnels. In addition, green paddy fields along the road to Cu Chi, and see local peasants at work and buffaloes led by children&hellip;These are really pleasant sights and will offer you some insights into Vietnamese agriculture as well (Extra: you can use the gun here!).<\\/p>\\r\\n\\r\\n<p><strong>Joining group: 440.000 vnd&nbsp; (Pickup and Drop off)<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>Included<\\/strong>: A\\/C tourist bus, experienced English speaking guide, sightseeing tickets,&nbsp; mineral water<\\/p>\\r\\n\\r\\n<table border=\\"1\\" cellpadding=\\"0\\" cellspacing=\\"0\\">\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Group size<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>3-4<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>5-6<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>7-9<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>10+<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Price<\\/p>\\r\\n\\r\\n\\t\\t\\t<p>Per person(vn\\u0111)<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>1.390.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>1.080.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>790.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>650.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>530.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Private transportation with air-conditioner, experienced English speaking guide, sightseeing tickets,&nbsp; mineral water<\\/p>\\r\\n","vi":"<p>Start: 8:30 - 9:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return: 3:00 pm<\\/p>\\r\\n\\r\\n<p>Cu Chi used to be a bitter battleground for many years during the Vietnam War. Visitors to our country should not miss a visit to this underground village with our intricate network of over 200 km of tunnels at Ben Dinh, 50 km from Ho Chi Minh City. Don&#39;t miss the experience of a short, exciting trip through this labyrinth of interlaced tunnels. In addition, green paddy fields along the road to Cu Chi, and see local peasants at work and buffaloes led by children&hellip;These are really pleasant sights and will offer you some insights into Vietnamese agriculture as well (Extra: you can use the gun here!).<\\/p>\\r\\n\\r\\n<p>Joining group: 440.000 vnd&nbsp; (Pickup and Drop off)<\\/p>\\r\\n\\r\\n<p>Included: A\\/C tourist bus, experienced English speaking guide, sightseeing tickets,&nbsp; mineral water<\\/p>\\r\\n\\r\\n<p>Group size<\\/p>\\r\\n\\r\\n<p>2<\\/p>\\r\\n\\r\\n<p>3-4<\\/p>\\r\\n\\r\\n<p>5-6<\\/p>\\r\\n\\r\\n<p>7-9<\\/p>\\r\\n\\r\\n<p>10+<\\/p>\\r\\n\\r\\n<p>Price<\\/p>\\r\\n\\r\\n<p>Per person(vn\\u0111)<\\/p>\\r\\n\\r\\n<p>1.390.000<\\/p>\\r\\n\\r\\n<p>1.080.000<\\/p>\\r\\n\\r\\n<p>790.000<\\/p>\\r\\n\\r\\n<p>650.000<\\/p>\\r\\n\\r\\n<p>530.000<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;Private transportation with air-conditioner, experienced English speaking guide, sightseeing tickets,&nbsp; mineral water<\\/p>\\r\\n"}', 0, '2015-11-18 18:16:39', '2016-09-15 17:47:39', 1),
(2, '{"en":"SAIGON CITY TOUR - FULL DAY","vi":"SAIGON CITY TOUR - FULL DAY"}', 'saigon-city-tour-full-day', 1, '2016-09-05-13-34-05-11.jpg', 780000, 1320000, 980000, 0, 650000, '0', 1, '{"en":"<p>Start: 8:30 - 9:00 am<br \\/>\\r\\nReturn: 5:00 pm<br \\/>\\r\\nJoining group: 560.000 vnd (Pickup and Drop off)<br \\/>\\r\\nIncluded: A\\/C tourist bus, experienced English speaking guide, lunch, sightseeing tickets, mineral water<\\/p>\\r\\n","vi":"<p>Start: 8:30 - 9:00 am<br \\/>\\r\\nReturn: 5:00 pm<br \\/>\\r\\nJoining group: 560.000 vnd (Pickup and Drop off)<br \\/>\\r\\nIncluded: A\\/C tourist bus, experienced English speaking guide, lunch, sightseeing tickets, mineral water<\\/p>\\r\\n"}', '{"en":"<p><strong>Start<\\/strong>: 8:30 - 9:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 5:00 pm<\\/p>\\r\\n\\r\\n<p>In the morning, we start this day tour by a visit to War Remnants Museum, which formerly known as the Museum of American War. Then we will go to Thien Hau Pagoda, China Town, and Binh Tay market that you can see a busy commercial of selling and buying. After lunch, we start to visit Reunification Palace. This is one of the most important building in the city. Continue to visit Lacquer Fine Art Factory,&nbsp; the City Hall, the Post Office Center for the best examples of classical French colonial architecture in Saigon, Notre Dame Cathedral and Come back to your hotel around 5:00 pm.<\\/p>\\r\\n\\r\\n<p><strong>Joining group: 560.000 vnd&nbsp; (Pickup and Drop off)<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>Included<\\/strong>: A\\/C tourist bus, experienced English speaking guide, lunch,&nbsp; sightseeing tickets, mineral water<\\/p>\\r\\n\\r\\n<table border=\\"1\\" cellpadding=\\"0\\" cellspacing=\\"0\\">\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Group size<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>3-4<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>5-6<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>7-9<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>10+<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Price<\\/p>\\r\\n\\r\\n\\t\\t\\t<p>Per person(vn\\u0111)<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>1.750.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>1.320.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>980.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>780.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>650.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n","vi":"<p>Start: 8:30 - 9:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return: 5:00 pm<\\/p>\\r\\n\\r\\n<p>In the morning, we start this day tour by a visit to War Remnants Museum, which formerly known as the Museum of American War. Then we will go to Thien Hau Pagoda, China Town, and Binh Tay market that you can see a busy commercial of selling and buying. After lunch, we start to visit Reunification Palace. This is one of the most important building in the city. Continue to visit Lacquer Fine Art Factory,&nbsp; the City Hall, the Post Office Center for the best examples of classical French colonial architecture in Saigon, Notre Dame Cathedral and Come back to your hotel around 5:00 pm.<\\/p>\\r\\n\\r\\n<p>Joining group: 560.000 vnd&nbsp; (Pickup and Drop off)<\\/p>\\r\\n\\r\\n<p>Included: A\\/C tourist bus, experienced English speaking guide, lunch,&nbsp; sightseeing tickets, mineral water<\\/p>\\r\\n\\r\\n<p>Group size<\\/p>\\r\\n\\r\\n<p>2<\\/p>\\r\\n\\r\\n<p>3-4<\\/p>\\r\\n\\r\\n<p>5-6<\\/p>\\r\\n\\r\\n<p>7-9<\\/p>\\r\\n\\r\\n<p>10+<\\/p>\\r\\n\\r\\n<p>Price<\\/p>\\r\\n\\r\\n<p>Per person(vn\\u0111)<\\/p>\\r\\n\\r\\n<p>1.750.000<\\/p>\\r\\n\\r\\n<p>1.320.000<\\/p>\\r\\n\\r\\n<p>980.000<\\/p>\\r\\n\\r\\n<p>780.000<\\/p>\\r\\n\\r\\n<p>650.000<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n"}', 0, '2015-11-19 22:54:52', '2016-09-11 18:18:49', 1),
(3, '{"en":"CU CHI TUNNELS & CAO DAI HOLYSEE","vi":"CU CHI TUNNELS & CAO DAI HOLYSEE"}', 'cu-chi-tunnels-cao-dai-holysee', 3, '2016-09-05-13-34-14-9.jpg', 930000, 1590000, 1130000, 0, 780000, '0', 1, '{"en":"<p>Start: 8:15 &ndash; 8:45 am<br \\/>\\r\\nReturn: 6:30 pm<br \\/>\\r\\nJoining group: 570.000 vnd (Pickup and Drop off)<br \\/>\\r\\nIncluded: A\\/C tourist bus, experienced English speaking guide, sightseeing tickets, mineral water.<\\/p>\\r\\n","vi":"<p>Start: 8:15 &ndash; 8:45 am<br \\/>\\r\\nReturn: 6:30 pm<br \\/>\\r\\nJoining group: 570.000 vnd (Pickup and Drop off)<br \\/>\\r\\nIncluded: A\\/C tourist bus, experienced English speaking guide, sightseeing tickets, mineral water.<\\/p>\\r\\n"}', '{"en":"<p><strong>Start<\\/strong>: 8:15 &ndash; 8:45 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 6:30 pm<\\/p>\\r\\n\\r\\n<p>Your tour guide will pick up you at hotel, depart to Cao Dai Temple. Caodaism is a special and unique religion in the south of Vietnam. It combines Buddhism, Taoism, Confucianism, Hinduism, Islam, Catholicism and Vietnamese spiritualism.<\\/p>\\r\\n\\r\\n<p>After lunch, we drive to Cu Chi Tunnel. Before going underground, a short introductory video showing how the tunnels were constructed will be given. We then spend&nbsp; time on exploring the maze of tunnels including the secret cellar-door, museum of self-made weapons, shooting range, garment-factory and the tunnels to have a real look in this tiny underground network. We will be back Saigon around 6:30 pm.<\\/p>\\r\\n\\r\\n<p><strong>Joining group: 570.000 vnd&nbsp; (Pickup and Drop off)<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>Included: <\\/strong>A\\/C tourist bus, experienced English speaking guide, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n\\r\\n<table border=\\"1\\" cellpadding=\\"0\\" cellspacing=\\"0\\">\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Group size<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>3-4<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>5-6<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>7-9<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>10+<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Price<\\/p>\\r\\n\\r\\n\\t\\t\\t<p>Per person(vn\\u0111)<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2.120.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>1.590.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>1.130.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>930.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>780.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n","vi":"<p>Start: 8:15 &ndash; 8:45 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return: 6:30 pm<\\/p>\\r\\n\\r\\n<p>Your tour guide will pick up you at hotel, depart to Cao Dai Temple. Caodaism is a special and unique religion in the south of Vietnam. It combines Buddhism, Taoism, Confucianism, Hinduism, Islam, Catholicism and Vietnamese spiritualism.<\\/p>\\r\\n\\r\\n<p>After lunch, we drive to Cu Chi Tunnel. Before going underground, a short introductory video showing how the tunnels were constructed will be given. We then spend&nbsp; time on exploring the maze of tunnels including the secret cellar-door, museum of self-made weapons, shooting range, garment-factory and the tunnels to have a real look in this tiny underground network. We will be back Saigon around 6:30 pm.<\\/p>\\r\\n\\r\\n<p>Joining group: 570.000 vnd&nbsp; (Pickup and Drop off)<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;A\\/C tourist bus, experienced English speaking guide, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n\\r\\n<p>Group size<\\/p>\\r\\n\\r\\n<p>2<\\/p>\\r\\n\\r\\n<p>3-4<\\/p>\\r\\n\\r\\n<p>5-6<\\/p>\\r\\n\\r\\n<p>7-9<\\/p>\\r\\n\\r\\n<p>10+<\\/p>\\r\\n\\r\\n<p>Price<\\/p>\\r\\n\\r\\n<p>Per person(vn\\u0111)<\\/p>\\r\\n\\r\\n<p>2.120.000<\\/p>\\r\\n\\r\\n<p>1.590.000<\\/p>\\r\\n\\r\\n<p>1.130.000<\\/p>\\r\\n\\r\\n<p>930.000<\\/p>\\r\\n\\r\\n<p>780.000<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n"}', 0, '2015-11-19 22:56:59', '2016-09-11 18:20:13', 1),
(4, '{"en":"CU CHI TUNNELS & CITY TOUR","vi":"CU CHI TUNNELS & CITY TOUR"}', 'cu-chi-tunnels-city-tour', 3, '2016-09-05-13-34-21-8.jpg', 990000, 1640000, 1210000, 0, 830000, '0', 1, '{"en":"<p>Start: 8:00 am<br \\/>\\r\\nReturn: 5:30 pm<br \\/>\\r\\nIncluded: Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets, mineral water.<\\/p>\\r\\n","vi":"<p>Start: 8:00 am<br \\/>\\r\\nReturn: 5:30 pm<br \\/>\\r\\nIncluded: Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets, mineral water.<\\/p>\\r\\n"}', '{"en":"<p><strong>Start<\\/strong>: 8:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 5:30 pm<\\/p>\\r\\n\\r\\n<p>Pick you up at hotel, then head to Cu Chi tunnels. Arriving tunnels, a short introductory video showing how the tunnels were constructed will be given. We then spend time exploring the maze of tunnels including innumerable trap doors, storage facilities, weapons factories, field hospitals, command centers and kitchens. Lunch at local restaurant.<\\/p>\\r\\n\\r\\n<p>Back to Saigon, visit The Reunification Palace, The Notre Dame Cathedral, the historic Central Post Office, Ben Thanh Market.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<table border=\\"1\\" cellpadding=\\"0\\" cellspacing=\\"0\\">\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Group size<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>3-4<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>5-6<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>7-9<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>10+<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Price<\\/p>\\r\\n\\r\\n\\t\\t\\t<p>Per person(vn\\u0111)<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2.180.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>1.640.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>1.210.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>990.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>830.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n","vi":"<p><strong>Start<\\/strong>: 8:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 5:30 pm<\\/p>\\r\\n\\r\\n<p>Pick you up at hotel, then head to Cu Chi tunnels. Arriving tunnels, a short introductory video showing how the tunnels were constructed will be given. We then spend time exploring the maze of tunnels including innumerable trap doors, storage facilities, weapons factories, field hospitals, command centers and kitchens. Lunch at local restaurant.<\\/p>\\r\\n\\r\\n<p>Back to Saigon, visit The Reunification Palace, The Notre Dame Cathedral, the historic Central Post Office, Ben Thanh Market.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<table border=\\"1\\" cellpadding=\\"0\\" cellspacing=\\"0\\">\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Group size<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>3-4<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>5-6<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>7-9<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>10+<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Price<\\/p>\\r\\n\\r\\n\\t\\t\\t<p>Per person(vn\\u0111)<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2.180.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>1.640.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>1.210.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>990.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>830.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Private transportation with air-conditioner, experienced English speaking guide, lunch, sightseeing tickets,&nbsp; mineral water.<\\/p>\\r\\n"}', 0, '2015-11-19 23:20:03', '2016-09-11 18:21:05', 1),
(5, '{"en":"MY THO & BEN TRE","vi":"MY THO & BEN TRE"}', 'my-tho-ben-tre', 1, '2016-09-05-13-34-28-4.jpg', 880000, 1460000, 1090000, 0, 700000, '0', 1, '{"en":"<p>Start: 7:30 &ndash; 8:00 am<br \\/>\\r\\nReturn: 5:00 pm<br \\/>\\r\\nIncluded: Private transportation with air-conditioner, experienced English speaking guide, boat trips, lunch, all entrance fees, bicycle, horse-drawn carriage, fruits, traditional music, rowing boat, mineral water.<\\/p>\\r\\n","vi":"<p>Start: 7:30 &ndash; 8:00 am<br \\/>\\r\\nReturn: 5:00 pm<br \\/>\\r\\nIncluded: Private transportation with air-conditioner, experienced English speaking guide, boat trips, lunch, all entrance fees, bicycle, horse-drawn carriage, fruits, traditional music, rowing boat, mineral water.<\\/p>\\r\\n"}', '{"en":"<p><strong>Start<\\/strong>: 7:30 &ndash; 8:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 5:00 pm<\\/p>\\r\\n\\r\\n<p>&nbsp; An unforgettable way of seeing the Mekong Delta is driving along the provincial roads down on the Southern region of Vietnam through paddy rice field, pine-apple plantation, orchard and small hamlets (2 hours drive)<\\/p>\\r\\n\\r\\n<p>&nbsp;&nbsp;&nbsp;&nbsp; After arrival in My Tho, you will ride on a local motor boat along Dragon Island, Unicorn Island, Phoenix Island, Turtle Island and stop at the famous Unicorn Island. While at the Unicorn Island, you will visit natural pure honey at a bee keeping farm, taste some honey wine, rice wine, banana wine...<\\/p>\\r\\n\\r\\n<p>&nbsp;Walking on the village and taking rowing boat along the nature water coconut canal to see local&rsquo;s&nbsp; daily life in Mekong Delta.<\\/p>\\r\\n\\r\\n<p>From there, you will continue your motor boat trip to Ben Tre province to visit a handmade coconut candy workshop. Then transfer to a small motor boat and travel along the lush, green canals, and stop at local restaurant for Vietnamese lunch.<\\/p>\\r\\n\\r\\n<p>&nbsp;After that going to another area on the Unicorn Island:<\\/p>\\r\\n\\r\\n<p>&nbsp;+ Enjoying some kinds of tropical fruits at the orchard garden and listening to the Southern traditional music.<\\/p>\\r\\n\\r\\n<p>&nbsp;+ Local boat will take you back to&nbsp; My Tho, then the bus will drive you back to SaiGon.<\\/p>\\r\\n\\r\\n<p><strong>Joining group: 450.000 vnd&nbsp; (Pickup and Drop off)<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>Included:<\\/strong> A\\/C tourist bus, experienced English speaking guide, boat trips, lunch, all entrance fees, bicycle, horse-drawn carriage, fruits, traditional music, rowing boat,&nbsp; mineral water.<\\/p>\\r\\n\\r\\n<table border=\\"1\\" cellpadding=\\"0\\" cellspacing=\\"0\\">\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Group size<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>2<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>3-4<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>5-6<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>7-9<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>10+<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td style=\\"width:115px\\">\\r\\n\\t\\t\\t<p>Price<\\/p>\\r\\n\\r\\n\\t\\t\\t<p>Per person(vn\\u0111)<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:90px\\">\\r\\n\\t\\t\\t<p>1.940.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:103px\\">\\r\\n\\t\\t\\t<p>1.460.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:95px\\">\\r\\n\\t\\t\\t<p>1.090.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:102px\\">\\r\\n\\t\\t\\t<p>880.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t\\t<td style=\\"width:96px\\">\\r\\n\\t\\t\\t<p>700.000<\\/p>\\r\\n\\t\\t\\t<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Private transportation with air-conditioner, experienced English speaking guide, boat trips, lunch, all entrance fees, bicycle, horse-drawn carriage, fruits, traditional music, rowing boat,&nbsp; mineral water.<\\/p>\\r\\n","vi":"<p>Start: 7:30 &ndash; 8:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return: 5:00 pm<\\/p>\\r\\n\\r\\n<p>&nbsp; An unforgettable way of seeing the Mekong Delta is driving along the provincial roads down on the Southern region of Vietnam through paddy rice field, pine-apple plantation, orchard and small hamlets (2 hours drive)<\\/p>\\r\\n\\r\\n<p>&nbsp;&nbsp;&nbsp;&nbsp; After arrival in My Tho, you will ride on a local motor boat along Dragon Island, Unicorn Island, Phoenix Island, Turtle Island and stop at the famous Unicorn Island. While at the Unicorn Island, you will visit natural pure honey at a bee keeping farm, taste some honey wine, rice wine, banana wine...<\\/p>\\r\\n\\r\\n<p>&nbsp;Walking on the village and taking rowing boat along the nature water coconut canal to see local&rsquo;s&nbsp; daily life in Mekong Delta.<\\/p>\\r\\n\\r\\n<p>From there, you will continue your motor boat trip to Ben Tre province to visit a handmade coconut candy workshop. Then transfer to a small motor boat and travel along the lush, green canals, and stop at local restaurant for Vietnamese lunch.<\\/p>\\r\\n\\r\\n<p>&nbsp;After that going to another area on the Unicorn Island:<\\/p>\\r\\n\\r\\n<p>&nbsp;+ Enjoying some kinds of tropical fruits at the orchard garden and listening to the Southern traditional music.<\\/p>\\r\\n\\r\\n<p>&nbsp;+ Local boat will take you back to&nbsp; My Tho, then the bus will drive you back to SaiGon.<\\/p>\\r\\n\\r\\n<p>Joining group: 450.000 vnd&nbsp; (Pickup and Drop off)<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;A\\/C tourist bus, experienced English speaking guide, boat trips, lunch, all entrance fees, bicycle, horse-drawn carriage, fruits, traditional music, rowing boat,&nbsp; mineral water.<\\/p>\\r\\n\\r\\n<p>Group size<\\/p>\\r\\n\\r\\n<p>2<\\/p>\\r\\n\\r\\n<p>3-4<\\/p>\\r\\n\\r\\n<p>5-6<\\/p>\\r\\n\\r\\n<p>7-9<\\/p>\\r\\n\\r\\n<p>10+<\\/p>\\r\\n\\r\\n<p>Price<\\/p>\\r\\n\\r\\n<p>Per person(vn\\u0111)<\\/p>\\r\\n\\r\\n<p>1.940.000<\\/p>\\r\\n\\r\\n<p>1.460.000<\\/p>\\r\\n\\r\\n<p>1.090.000<\\/p>\\r\\n\\r\\n<p>880.000<\\/p>\\r\\n\\r\\n<p>700.000<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;Private transportation with air-conditioner, experienced English speaking guide, boat trips, lunch, all entrance fees, bicycle, horse-drawn carriage, fruits, traditional music, rowing boat,&nbsp; mineral water.<\\/p>\\r\\n"}', 0, '2015-11-19 23:24:12', '2016-09-11 18:19:16', 1),
(6, '{"en":"CU CHI BY BOAT","vi":"CU CHI BY BOAT"}', 'cu-chi-by-boat', 1, '2016-09-05-13-34-36-1.jpg', 0, 0, 0, 0, 0, '0', 0, '{"en":"<p>Start: 8:00 &ndash; 8:15 am<br \\/>\\r\\nReturn: 3:00 pm<br \\/>\\r\\nJoining group: 1.350.000 vnd&nbsp; (Pickup and Drop off)<br \\/>\\r\\nIncluded: Boat, English speaking guide, lunch, mineral water, entrance fee.<\\/p>\\r\\n","vi":"<p>Start: 8:00 &ndash; 8:15 am<br \\/>\\r\\nReturn: 3:00 pm<br \\/>\\r\\nJoining group: 1.350.000 vnd&nbsp; (Pickup and Drop off)<br \\/>\\r\\nIncluded: Boat, English speaking guide, lunch, mineral water, entrance fee.<\\/p>\\r\\n"}', '{"en":"<p><strong>Start<\\/strong>: 8:00 &ndash; 8:15 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Return<\\/strong>: 3:00 pm<\\/p>\\r\\n\\r\\n<p>Sitting back, relaxing and enjoying the beautiful country side as we cruise up stream of the Saigon river to the Cu Chi Tunnel. This is one of the most interesting places to visit in Saigon! Once there, our English speaking tour guide will show you around and share many stories about war time. If you are adventurous, you can experience what it&rsquo;s like to go underground in some of the tunnels! For an addition cost, you can even shot some guns in a safe and well supervised environment.<\\/p>\\r\\n\\r\\n<p><strong>Joining group:<\\/strong> 1.350.000 vnd&nbsp; (Pickup and Drop off)<\\/p>\\r\\n\\r\\n<p><strong>Included:<\\/strong> Boat, English speaking guide, lunch, mineral water, entrance fee.<\\/p>\\r\\n","vi":"<p>Start: 8:00 &ndash; 8:15 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return: 3:00 pm<\\/p>\\r\\n\\r\\n<p>Sitting back, relaxing and enjoying the beautiful country side as we cruise up stream of the Saigon river to the Cu Chi Tunnel. This is one of the most interesting places to visit in Saigon! Once there, our English speaking tour guide will show you around and share many stories about war time. If you are adventurous, you can experience what it&rsquo;s like to go underground in some of the tunnels! For an addition cost, you can even shot some guns in a safe and well supervised environment.<\\/p>\\r\\n\\r\\n<p>Joining group:&nbsp;1.350.000 vnd&nbsp; (Pickup and Drop off)<\\/p>\\r\\n\\r\\n<p>Included:&nbsp;Boat, English speaking guide, lunch, mineral water, entrance fee.<\\/p>\\r\\n"}', 0, '2015-11-20 07:33:59', '2016-09-11 18:19:46', 1),
(7, '{"en":"\\u00e1dasd","vi":"\\u00e1dasd"}', 'adasd', 0, '', 2, 2, 2, 0, 3, '{"4":"3","5":"3","1":"2","3":0,"6":0,"7":0}', 0, '{"en":"","vi":""}', '{"en":"","vi":""}', 0, '2016-09-15 17:49:11', '2016-09-15 17:49:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_contacts`
--

CREATE TABLE `tour_contacts` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `nationality` varchar(64) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `number_of_adults` int(11) NOT NULL,
  `number_of_children` int(11) NOT NULL,
  `number_of_infants` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `special_request` varchar(765) NOT NULL,
  `hotel` int(11) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `object_type` varchar(50) DEFAULT NULL,
  `object_id` varchar(50) NOT NULL,
  `object_name` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trackings`
--

INSERT INTO `trackings` (`id`, `type`, `object_type`, `object_id`, `object_name`, `date`, `user_id`, `value`) VALUES
(23, 'update', 'hotel', '1', 'Grand Silverland Hotel & Spa ds', '2016-08-01 12:37:35', 1, '{"old_value":[{"name":"Grand Silverland Hotel & Spa ds","slug":"grand-silverland-hotel-spa sdf","updated_date":"2016-08-01 12:32:03"}],"new_value":[{"name":"Grand Silverland Hotel & Spa ds \\u00e1d","slug":"grand-silverland-hotel-spa sdf \\u00e1d","updated_date":"2016-08-01 12:37:35"}]}'),
(24, 'update', 'hotel', '1', 'Grand Silverland Hotel & Spa ds ád', '2016-08-01 13:13:44', 1, '{"old_value":[{"name":"Grand Silverland Hotel & Spa ds \\u00e1d","slug":"grand-silverland-hotel-spa sdf \\u00e1d","address":"{\\"en\\":\\"125 Ly Tu Trong St, Ben Thanh Ward Dist 1\\",\\"vi\\":\\"288 L\\\\u00ea Th\\\\u00e1nh T\\\\u00f4n, ph\\\\u01b0\\\\u1eddng B\\\\u1ebfn Th\\\\u00e0nh, qu\\\\u1eadn 1\\",\\"ch\\":\\"125 Ly Tu Trong St, Ben Thanh Ward Dist 1\\",\\"ja\\":\\"125 Ly Tu Trong St, Ben Thanh Ward Dist 1\\"}","city":"{\\"en\\":\\"Ho Chi Minh City\\",\\"vi\\":\\"TP. H\\\\u1ed3 Ch\\\\u00ed Minh\\",\\"ch\\":\\"Ho Chi Minh City\\",\\"ja\\":\\"Ho Chi Minh City\\"}","country":"{\\"en\\":\\"Vietnam\\",\\"vi\\":\\"Vi\\\\u1ec7t Nam\\",\\"ch\\":\\"Vietnam\\",\\"ja\\":\\"Vietnam\\"}","updated_date":"2016-08-01 12:37:35","facilities":"working_desk,ironing_kit,jacuzzi_bathtub_shower,wash_let_toilet,toothbrush_thampoo_soap,24hr_room_service,room_service,airport_transfer,elevator,safety_box,executive_floor,bar\\/pub,family_room,laundry_service\\/dry_cleaning,business_center,meeting_facilities,smoking_area,coffee_shop,Wi-Fi_-_public_areas,concierge,restaurant"}],"new_value":[{"name":"Grand Silverland Hotel & Spa","slug":"grand-silverland-hotel-spa","address":"{\\"en\\":\\"125 Ly Tu Trong St, Ben Thanh Ward Dist 1 a\\",\\"vi\\":\\"288 L\\\\u00ea Th\\\\u00e1nh T\\\\u00f4n, ph\\\\u01b0\\\\u1eddng B\\\\u1ebfn Th\\\\u00e0nh, qu\\\\u1eadn 1\\",\\"ch\\":\\"125 Ly Tu Trong St, Ben Thanh Ward Dist 1\\",\\"ja\\":\\"125 Ly Tu Trong St, Ben Thanh Ward Dist 1\\"}","city":"{\\"en\\":\\"Ho Chi Minh City a\\",\\"vi\\":\\"TP. H\\\\u1ed3 Ch\\\\u00ed Minh\\",\\"ch\\":\\"Ho Chi Minh City\\",\\"ja\\":\\"Ho Chi Minh City\\"}","country":"{\\"en\\":\\"Vietnam a\\",\\"vi\\":\\"Vi\\\\u1ec7t Nam\\",\\"ch\\":\\"Vietnam\\",\\"ja\\":\\"Vietnam\\"}","updated_date":"2016-08-01 13:13:44","facilities":"working_desk,ironing_kit,jacuzzi_bathtub_shower,wash_let_toilet,toothbrush_thampoo_soap,24hr_room_service,room_service,airport_transfer,elevator,safety_box,executive_floor,bar\\/pub,family_room,laundry_service\\/dry_cleaning,business_center,meeting_facilities,smoking_area,nightclub,casino,coffee_shop,Wi-Fi_-_public_areas,concierge,restaurant"}]}'),
(26, 'delete', 'hotel', '4', 'abc', '2016-08-01 16:59:45', 1, '{"old_value":"[{\\"id\\":\\"4\\",\\"name\\":\\"abc\\",\\"slug\\":\\"aaaaa\\",\\"display_order\\":\\"1\\",\\"graded_star\\":\\"11\\",\\"email_info\\":\\"hongduyabc@gmail.com\\",\\"email_sales\\":\\"hongduyabc@gmail.com\\",\\"hotline\\":\\"\\",\\"tel\\":\\"\\",\\"fax\\":\\"\\",\\"no_of_rooms\\":\\"0\\",\\"address\\":{\\"en\\":\\"\\",\\"vi\\":\\"\\",\\"ch\\":\\"\\",\\"ja\\":\\"\\"},\\"city\\":{\\"en\\":\\"\\",\\"vi\\":\\"\\",\\"ch\\":\\"\\",\\"ja\\":\\"\\"},\\"country\\":{\\"en\\":\\"\\",\\"vi\\":\\"\\",\\"ch\\":\\"\\",\\"ja\\":\\"\\"},\\"description\\":{\\"en\\":\\"\\",\\"vi\\":\\"\\",\\"ch\\":\\"\\",\\"ja\\":\\"\\"},\\"short_description\\":[],\\"added_date\\":\\"2016-08-01 16:32:05\\",\\"updated_date\\":\\"2016-08-01 16:32:05\\",\\"updated_by\\":\\"1\\",\\"facilities\\":\\"\\",\\"sports\\":\\"\\",\\"location\\":\\"\\",\\"cover_photo\\":\\"\\",\\"status\\":\\"0\\",\\"promotion\\":{\\"en\\":\\"\\",\\"vi\\":\\"\\",\\"ch\\":\\"\\",\\"ja\\":\\"\\"},\\"logo1\\":\\"\\",\\"logo2\\":\\"\\",\\"lat\\":\\"0\\",\\"lng\\":\\"0\\"}]","new_value":"null"}'),
(27, 'delete', 'hotel', '5', 'aaa', '2016-08-01 17:01:56', 1, '{"old_value":[{"id":"5","name":"aaa","slug":"aa","display_order":"1","graded_star":"2","email_info":"hongduyabc@gmail.com","email_sales":"hongduyabc@gmail.com","hotline":"","tel":"","fax":"","no_of_rooms":"0","address":{"en":"","vi":"","ch":"","ja":""},"city":{"en":"","vi":"","ch":"","ja":""},"country":{"en":"","vi":"","ch":"","ja":""},"description":{"en":"","vi":"","ch":"","ja":""},"short_description":[],"added_date":"2016-08-01 17:01:47","updated_date":"2016-08-01 17:01:47","updated_by":"1","facilities":"","sports":"","location":"","cover_photo":"","status":"0","promotion":{"en":"","vi":"","ch":"","ja":""},"logo1":"","logo2":"","lat":"0","lng":"0"}],"new_value":null}'),
(28, 'update', 'roomtype', '2', 'DELUXE DOUBLE/TWIN ROOM', '2016-08-01 17:35:41', 1, '{"old_value":[{"name":"DELUXE DOUBLE\\/TWIN ROOM","slug":"deluxe-double-twin-room","no_of_rooms":"2","size_of_room":"22"}],"new_value":[{"name":"DELUXE DOUBLE\\/TWIN ROOMs","slug":"deluxe-double-twin-rooms","no_of_rooms":"3","size_of_room":"11"}]}'),
(29, 'delete', 'roomtype', '4', 'dulux', '2016-08-01 17:36:57', 1, '{"old_value":[{"id":"4","hotel_id":"1","photo1":"","name":"dulux","slug":"dulux","display_order":"1","description":{"en":"<p><strong>SUPERIOR DOUBLE<\\/strong><\\/p>\\r\\n\\r\\n<p>Approximate size &ndash; 25 square meter<br \\/>\\r\\nThis room type is the most popular among our overseas guests.<br \\/>\\r\\nDisplaying an attractive contemporary design with tasteful furnishings, our superior rooms can be set up either as double bed or two single beds.<br \\/>\\r\\nThe turn down service offers customers even more comfort, by enabling them to arrive at their destination refreshed.<\\/p>\\r\\n","vi":"<p><strong>SUPERIOR DOUBLE<\\/strong><\\/p>\\r\\n\\r\\n<p>Approximate size &ndash; 25 square meter<br \\/>\\r\\nThis room type is the most popular among our overseas guests.<br \\/>\\r\\nDisplaying an attractive contemporary design with tasteful furnishings, our superior rooms can be set up either as double bed or two single beds.<br \\/>\\r\\nThe turn down service offers customers even more comfort, by enabling them to arrive at their destination refreshed.<\\/p>\\r\\n","ch":"<p><strong>SUPERIOR DOUBLE<\\/strong><\\/p>\\r\\n\\r\\n<p>Approximate size &ndash; 25 square meter<br \\/>\\r\\nThis room type is the most popular among our overseas guests.<br \\/>\\r\\nDisplaying an attractive contemporary design with tasteful furnishings, our superior rooms can be set up either as double bed or two single beds.<br \\/>\\r\\nThe turn down service offers customers even more comfort, by enabling them to arrive at their destination refreshed.<\\/p>\\r\\n","ja":"<p><strong>SUPERIOR DOUBLE<\\/strong><\\/p>\\r\\n\\r\\n<p>Approximate size &ndash; 25 square meter<br \\/>\\r\\nThis room type is the most popular among our overseas guests.<br \\/>\\r\\nDisplaying an attractive contemporary design with tasteful furnishings, our superior rooms can be set up either as double bed or two single beds.<br \\/>\\r\\nThe turn down service offers customers even more comfort, by enabling them to arrive at their destination refreshed.<\\/p>\\r\\n"},"amenities":"in_room_safe,shower","no_of_rooms":"2","max_per_room":"2","size_of_room":"2","view":"City view","bed":"1_Single_Bed,2_Double_Beds","status":"1","added_date":"2016-07-23 12:32:57","updated_date":"2016-07-23 12:32:57","updated_by":"1","photo2":"","photo3":"","photo4":"","photo5":"","no_of_adult":"2","no_of_child":"2","no_of_extrabed":"2","cover_photo":"grand-silverland-hotel-spa-dulux-slide1-2016-07-23-12-32-57-82ay1g3dj9.jpg"}],"new_value":null}'),
(30, 'delete', 'roomtype', '7', 'ádasdasd', '2016-08-01 17:41:19', 1, '{"old_value":[{"id":"7","hotel_id":"3","photo1":"","name":"\\u00e1dasdasd","slug":"adasdasd","display_order":"2","description":{"en":"","vi":"","ch":"","ja":""},"amenities":"","no_of_rooms":"2","max_per_room":"0","size_of_room":"2","view":"-----","bed":"","status":"0","added_date":"2016-08-01 17:40:59","updated_date":"2016-08-01 17:40:59","updated_by":"1","photo2":"","photo3":"","photo4":"","photo5":"","no_of_adult":"0","no_of_child":"0","no_of_extrabed":"0","cover_photo":""}],"new_value":null}'),
(31, 'delete', 'roomtype', '6', 'abc', '2016-08-01 17:43:14', 1, '{"old_value":[{"id":"6","hotel_id":"3","photo1":"","name":"abc","slug":"abc","display_order":"2","description":{"en":"","vi":"","ch":"","ja":""},"amenities":"","no_of_rooms":"2","max_per_room":"2","size_of_room":"2","view":"-----","bed":"","status":"0","added_date":"2016-08-01 17:40:26","updated_date":"2016-08-01 17:40:26","updated_by":"1","photo2":"","photo3":"","photo4":"","photo5":"","no_of_adult":"0","no_of_child":"0","no_of_extrabed":"0","cover_photo":""}],"new_value":null}'),
(32, 'delete', 'roomtype', '5', 'aaa', '2016-08-01 17:44:59', 1, '{"old_value":[{"id":"5","hotel_id":"3","photo1":"","name":"aaa","slug":"aaa","display_order":"2","description":{"en":"","vi":"","ch":"","ja":""},"amenities":"","no_of_rooms":"2","max_per_room":"0","size_of_room":"2","view":"-----","bed":"","status":"1","added_date":"2016-08-01 17:38:10","updated_date":"2016-08-01 17:38:10","updated_by":"1","photo2":"","photo3":"","photo4":"","photo5":"","no_of_adult":"0","no_of_child":"0","no_of_extrabed":"0","cover_photo":""}],"new_value":null}'),
(33, 'update', 'Role', 'supper admin', '', '2016-08-13 16:16:28', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"]}"}]}'),
(34, 'update', 'Role', 'supper admin', '', '2016-08-13 16:16:34', 1, '{"old_value":[[]], "new_value":[{}]}'),
(35, 'update', 'Role', 'supper admin', '', '2016-08-13 16:30:12', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}"}]}'),
(36, 'update', 'Role', 'supper admin', '', '2016-08-13 16:32:54', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"update\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"gallery":["admin","create","upload","update","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}"}]}'),
(37, 'update', 'Role', 'sales staff', '', '2016-08-13 16:46:58', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard"],"roomtype":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"]}"}]}'),
(38, 'update', 'Role', 'sales staff', '', '2016-08-13 16:53:47', 1, '{"old_value":[[]], "new_value":[{}]}'),
(39, 'update', 'Role', 'sales staff', '', '2016-08-13 16:53:56', 1, '{"old_value":[[]], "new_value":[{}]}'),
(40, 'update', 'Role', 'supper admin', '', '2016-08-13 16:54:04', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"]}"}]}'),
(41, 'update', 'Role', 'supper admin', '', '2016-08-13 16:54:19', 1, '{"old_value":[[]], "new_value":[{}]}'),
(42, 'update', 'Role', 'sales staff', '', '2016-08-13 16:54:35', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\"],\\"hotel\\":[\\"admin\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard"],"hotel":["admin"],"roomtype":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"]}"}]}'),
(43, 'update', 'Role', 'sales staff', '', '2016-08-13 16:56:21', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"]}"}]}'),
(44, 'update', 'Role', 'sales staff', '', '2016-08-13 22:12:22', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"]}"}]}'),
(45, 'update', 'Role', 'sales staff', '', '2016-08-13 22:19:20', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"view\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view"],"hotel":["admin","create","update","delete","view"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"]}"}]}'),
(46, 'update', 'Role', 'sales staff', '', '2016-08-13 22:23:49', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"view\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view"],"hotel":["admin","create","update","delete","view"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"]}"}]}'),
(47, 'update', 'Role', 'sales staff', '', '2016-08-13 22:38:19', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"view\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view"],"hotel":["admin","create","update","delete","view"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"]}"}]}'),
(48, 'update', 'Role', 'sales staff', '', '2016-08-13 22:41:08', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"view\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"update\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view"],"hotel":["admin","create","update","delete","view"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"gallery":["admin","create","upload","update","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}"}]}'),
(49, 'update', 'Role', 'supper admin', '', '2016-08-13 23:24:10', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}"}]}'),
(50, 'update', 'Role', 'supper admin', '', '2016-08-13 23:26:14', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}"}]}'),
(51, 'update', 'Role', 'supper admin', '', '2016-08-13 23:39:48', 1, '{"old_value":[[]], "new_value":[{}]}'),
(52, 'update', 'Role', 'supper admin', '', '2016-08-14 12:46:59', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"]}"}]}'),
(53, 'update', 'Role', 'supper admin', '', '2016-08-14 12:59:50', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"]}"}]}'),
(54, 'update', 'Role', 'supper admin', '', '2016-08-16 22:31:40', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tripadvisor\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"tripadvisor":["admin","create","update","delete"]}"}]}'),
(55, 'update', 'Role', 'supper admin', '', '2016-08-17 00:00:26', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"trip\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"emailoffers\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"trip":["admin","create","update","delete"],"emailoffers":["admin","create","update","delete"]}"}]}'),
(56, 'update', 'Role', 'supper admin', '', '2016-08-31 21:15:05', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"trip\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"emailoffers\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"contact\\":[\\"admin\\",\\"report\\",\\"customer\\"],\\"experience\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"specialoffer\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"specialcategories\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"restaurant\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"trip":["admin","create","update","delete"],"emailoffers":["admin","create","update","delete"],"contact":["admin","report","customer"],"experience":["admin","create","update","delete"],"specialoffer":["admin","create","update","delete"],"specialcategories":["admin","create","update","delete"],"restaurant":["admin","create","update","delete"]}"}]}'),
(57, 'update', 'Role', 'supper admin', '', '2016-09-03 22:37:33', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"trip\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"emailoffers\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"contact\\":[\\"admin\\",\\"report\\",\\"customer\\"],\\"experience\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"specialoffer\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"specialcategories\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"restaurant\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"hotelfacilities\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"trip":["admin","create","update","delete"],"emailoffers":["admin","create","update","delete"],"contact":["admin","report","customer"],"experience":["admin","create","update","delete"],"specialoffer":["admin","create","update","delete"],"specialcategories":["admin","create","update","delete"],"restaurant":["admin","create","update","delete"],"hotelfacilities":["admin","create","update","delete"]}"}]}'),
(58, 'update', 'Role', 'supper admin', '', '2016-09-07 22:16:05', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"trip\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"emailoffers\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"contact\\":[\\"admin\\",\\"report\\",\\"customer\\"],\\"experience\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"specialoffer\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"restaurant\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"hotelfacilities\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"trip":["admin","create","update","delete"],"emailoffers":["admin","create","update","delete"],"contact":["admin","report","customer"],"experience":["admin","create","update","delete"],"specialoffer":["admin","create","update","delete"],"restaurant":["admin","create","update","delete"],"hotelfacilities":["admin","create","update","delete"]}"}]}'),
(59, 'update', 'Role', 'supper admin', '', '2016-09-12 10:09:09', 1, '{"old_value":[{"access_rights":"{\\"booking\\":[\\"admin\\",\\"delete\\",\\"view\\",\\"showcard\\",\\"report\\",\\"cancel\\"],\\"hotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roomtype\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\",\\"deletephoto\\"],\\"explorehotel\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"occupancy\\":[\\"admin\\"],\\"room\\":[\\"admin\\"],\\"rate\\":[\\"admin\\"],\\"promotion\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"cms\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearbycategory\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"nearby\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"gallery\\":[\\"admin\\",\\"create\\",\\"upload\\",\\"deleteItem\\"],\\"slideshow\\":[\\"admin\\",\\"create\\",\\"delete\\",\\"update\\",\\"updateItem\\",\\"view\\",\\"upload\\",\\"deleteItem\\"],\\"settings\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"user\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"roles\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"tour\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"seo\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"trip\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"emailoffers\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"contact\\":[\\"admin\\",\\"report\\",\\"customer\\"],\\"experience\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"specialoffer\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"restaurant\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"],\\"hotelfacilities\\":[\\"admin\\",\\"create\\",\\"update\\",\\"delete\\"]}"}], "new_value":[{"access_rights":"{"booking":["admin","delete","view","showcard","report","cancel"],"hotel":["admin","create","update","delete"],"roomtype":["admin","create","update","delete","deletephoto"],"explorehotel":["admin","create","update","delete"],"occupancy":["admin"],"room":["admin"],"rate":["admin"],"promotion":["admin","create","update","delete"],"cms":["admin","create","update","delete"],"nearbycategory":["admin","create","update","delete"],"nearby":["admin","create","update","delete"],"gallery":["admin","create","upload","deleteItem"],"slideshow":["admin","create","delete","update","updateItem","view","upload","deleteItem"],"settings":["admin","create","update","delete"],"user":["admin","create","update","delete"],"roles":["admin","create","update","delete"],"tour":["admin","create","update","delete"],"seo":["admin","create","update","delete"],"trip":["admin","create","update","delete"],"emailoffers":["admin","create","update","delete"],"contact":["admin","report","customer"],"experience":["admin","create","update","delete"],"specialoffer":["admin","create","update","delete"],"restaurant":["admin","create","update","delete"],"hotelfacilities":["admin","create","update","delete"]}"}]}');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `display_order` int(11) NOT NULL,
  `comment` text NOT NULL,
  `author` varchar(64) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `display_order`, `comment`, `author`, `hotel_id`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 0, '<p>&quot;Fantastic location, great service The Grand Silverland Hotel is very affordable, it was in a great location right next to the Ben Thanh markets, easy walking distance to all attractions. Rooms were clean and tidy, we were always given fresh towels and water every day. Little pool on roof was great with view over city, great refresher after a morning out walking. Then there is the FREE afternoon tea, YUM! Small desserts, cakes, free flow tea and coffee served to you, very comfortable lounge area, piano serenade!</p>\r\n', 'From Saundykim, Singapore', 0, 0, '2015-12-24 08:16:56', '2015-12-24 08:16:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trip_advisor`
--

CREATE TABLE `trip_advisor` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `order` int(11) DEFAULT '0',
  `author` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trip_advisor`
--

INSERT INTO `trip_advisor` (`id`, `description`, `order`, `author`, `status`, `added_date`, `updated_date`, `updated_by`) VALUES
(19, '{"en":"aaa","vi":"bbbb","ja":"cccc","ko":"d\\u0111"}', 0, 0, 0, '2016-08-16 23:11:30', '2016-08-16 23:11:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `status` enum('P','A','I') NOT NULL DEFAULT 'A',
  `hotel_id` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `last_login_date` datetime NOT NULL,
  `roles` varchar(255) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `cellphone` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_hash`, `password_reset_token`, `auth_key`, `status`, `hotel_id`, `added_date`, `updated_date`, `updated_by`, `last_login_date`, `roles`, `fullname`, `cellphone`, `email`, `remarks`, `is_admin`, `ip_address`, `avatar`, `gender`, `created_at`) VALUES
(1, 'admin', '3863cc2a3591cae08d493ea8c01c127996adba75', '$2y$13$cItYceOZ5X/HYoVN2Sx3UeL3wV.D8I3wK.C8598EJosGcPESMx5JO', '', 'q2XUIe26S8JLA8iG-PnyDuAY6Fg4LNmy', 'A', '', '0000-00-00 00:00:00', '2016-09-07 22:16:25', 1, '2016-10-14 10:10:08', 'supper admin', 'Duy Hồng', '0982007996', 'hongduyabc@gmail.com', '', 1, '::1', 'dikkCM5hIpiQQA_AOD9YrlRZ2H1QExdp', 'male', ''),
(2, 'hongduy', '', '$2y$13$ote/4R7mmpBTSsP955ScZ.dqLF37LBK275Ev3UjqcZHvgaBpOL/Yy', '', 'h9W_HmUPVo6kpJTIQGSW8hVtn-dJH0AP', 'A', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '', '', 'hongduyphp@gmail.com', '', 0, '', '', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport_transfer`
--
ALTER TABLE `airport_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_offers`
--
ALTER TABLE `email_offers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `exchange_rate`
--
ALTER TABLE `exchange_rate`
  ADD PRIMARY KEY (`the_date`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explorehotel`
--
ALTER TABLE `explorehotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `klspa`
--
ALTER TABLE `klspa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby`
--
ALTER TABLE `nearby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby_category`
--
ALTER TABLE `nearby_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_name`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_categories`
--
ALTER TABLE `special_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_content`
--
ALTER TABLE `static_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_contacts`
--
ALTER TABLE `tour_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackings`
--
ALTER TABLE `trackings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_advisor`
--
ALTER TABLE `trip_advisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fullname` (`fullname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport_transfer`
--
ALTER TABLE `airport_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `explorehotel`
--
ALTER TABLE `explorehotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `klspa`
--
ALTER TABLE `klspa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nearby`
--
ALTER TABLE `nearby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nearby_category`
--
ALTER TABLE `nearby_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `special_categories`
--
ALTER TABLE `special_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `static_content`
--
ALTER TABLE `static_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tour_contacts`
--
ALTER TABLE `tour_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trip_advisor`
--
ALTER TABLE `trip_advisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
