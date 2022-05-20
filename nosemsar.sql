-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 02:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nosemsar`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `lat` text COLLATE utf8_unicode_ci NOT NULL,
  `lng` text COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `phase` text COLLATE utf8_unicode_ci NOT NULL,
  `subphase` text COLLATE utf8_unicode_ci NOT NULL,
  `building` text COLLATE utf8_unicode_ci NOT NULL,
  `apt` text COLLATE utf8_unicode_ci NOT NULL,
  `floor` text COLLATE utf8_unicode_ci NOT NULL,
  `elevator` text COLLATE utf8_unicode_ci NOT NULL,
  `bedrooms` text COLLATE utf8_unicode_ci NOT NULL,
  `bathrooms` text COLLATE utf8_unicode_ci NOT NULL,
  `area` text COLLATE utf8_unicode_ci NOT NULL,
  `over_str` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `remaining_balance` int(11) NOT NULL,
  `remaining_years` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `quarter_payment` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `lat`, `lng`, `username`, `type`, `phase`, `subphase`, `building`, `apt`, `floor`, `elevator`, `bedrooms`, `bathrooms`, `area`, `over_str`, `paid_amount`, `remaining_balance`, `remaining_years`, `total_price`, `quarter_payment`, `notes`) VALUES
(1, '40.69977194205116', '-75.40466325390625', '123', '123', '123', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(2, '40.928429364821504', '-74.13574235546875', '234', '234', '234', '234', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(3, '40.74972804076156', '-74.68505876171875', '345', '345', '345', '345', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(4, '41.20247847630418', '-74.09500858494519', '345', 'hxrtfgdj', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(5, '40.219126164562915', '-74.76745622265625', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(6, '41.25863708198659', '-74.96521012890625', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', 'qwerqwerqwerqwer', '', '', '', 0, 0, 0, 0, 0, '', 'qwerqwerqwerqwer'),
(7, '41.17845110928662', '-73.19641130078125', 'zxcv', 'zxcv', 'zxcv', 'zxcv', 'zxcv', 'zxcv', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(8, '41.80387723036962', '-73.99292008984375', 'abcd', 'abcd', 'abcd', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(9, '30.24716796413884', '31.39194704663041', 'test', 'Rent', 'Two', 'C', 'asdf', 'asdf', 'Two', 'Yes', '', '', '', 0, 0, 0, 0, 0, '', ''),
(10, '30.133214165331918', '31.21067263256791', '', 'Rent', 'Two', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(11, '29.9810709432343', '31.50181032788041', 'test', 'Rent', 'One', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(12, '29.728570601419943', '30.56797243725541', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 10, '15', ''),
(13, '30.107526698890375', '29.93076540600541', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 10, '15', ''),
(14, '30.37609677021518', '31.37821413647416', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(15, '30.711106169026348', '32.210428491942906', '', '', '', '', '', '', '', '', 'Four', 'Two', '', 20, 0, 0, 0, 0, '', ''),
(16, '30.937532157463764', '30.49656130444291', '', '', '', '', '', '', '', '', '', '', '123', 10, 0, 0, 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
