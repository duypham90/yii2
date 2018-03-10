-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 04:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2`
--

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
(1, 'admin', '3863cc2a3591cae08d493ea8c01c127996adba75', '$2y$13$cItYceOZ5X/HYoVN2Sx3UeL3wV.D8I3wK.C8598EJosGcPESMx5JO', '', 'q2XUIe26S8JLA8iG-PnyDuAY6Fg4LNmy', 'A', '', '0000-00-00 00:00:00', '2016-09-07 22:16:25', 1, '2016-11-04 14:11:32', 'supper admin', 'Duy Hồng', '0982007996', 'hongduyabc@gmail.com', '', 1, '::1', 'dikkCM5hIpiQQA_AOD9YrlRZ2H1QExdp', 'male', ''),
(2, 'hongduy', '', '$2y$13$ote/4R7mmpBTSsP955ScZ.dqLF37LBK275Ev3UjqcZHvgaBpOL/Yy', '', 'h9W_HmUPVo6kpJTIQGSW8hVtn-dJH0AP', 'A', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '', '', 'hongduyphp@gmail.com', '', 0, '', '', 'male', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
