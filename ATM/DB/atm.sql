-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm_card`
--

CREATE TABLE `atm_card` (
  `card_id` int(5) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `card_cvv` varchar(5) NOT NULL,
  `card_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm_card`
--

INSERT INTO `atm_card` (`card_id`, `card_number`, `card_cvv`, `card_date`) VALUES
(1, '123', '000', '01/01/2021'),
(2, '321', '000', '01/01/2021');

-- --------------------------------------------------------

--
-- Table structure for table `atm_note`
--

CREATE TABLE `atm_note` (
  `n_id` int(5) NOT NULL,
  `n_2000` int(5) NOT NULL,
  `n_500` int(5) NOT NULL,
  `n_200` int(5) NOT NULL,
  `n_100` int(5) NOT NULL,
  `n_50` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm_note`
--

INSERT INTO `atm_note` (`n_id`, `n_2000`, `n_500`, `n_200`, `n_100`, `n_50`) VALUES
(1, 22, 6, 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `atm_pin`
--

CREATE TABLE `atm_pin` (
  `pin_id` int(5) NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm_pin`
--

INSERT INTO `atm_pin` (`pin_id`, `pin`) VALUES
(1, 1001),
(2, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `atm_transection`
--

CREATE TABLE `atm_transection` (
  `t_id` int(5) NOT NULL,
  `t_total_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm_transection`
--

INSERT INTO `atm_transection` (`t_id`, `t_total_amount`) VALUES
(1, 2850),
(2, 2850),
(3, 2850),
(4, 2850),
(5, 2850),
(6, 2850),
(7, 2850),
(8, 2850),
(9, 2850),
(10, 2850),
(11, 2850),
(12, 2850),
(13, 2850),
(14, 2850),
(15, 2850),
(16, 2850),
(17, 2850),
(18, 2850),
(19, 2850),
(20, 2850),
(21, 2850),
(22, 2850),
(23, 2850),
(24, 2850),
(25, 2850),
(26, 2850),
(27, 2850),
(28, 2850),
(29, 2850),
(30, 2850),
(31, 2850),
(32, 2850),
(33, 2850),
(34, 2850),
(35, 2850),
(36, 2850),
(37, 2850),
(38, 2850),
(39, 2850),
(40, 2850),
(41, 2850),
(42, 2850),
(43, 2850),
(44, 2850),
(45, 2850),
(46, 2850),
(47, 2850),
(48, 2850),
(49, 2850),
(50, 2850),
(51, 2850),
(52, 2850),
(53, 2850),
(54, 2850),
(55, 2850),
(56, 2850),
(57, 0),
(58, 10000),
(59, 10000),
(60, 10000),
(61, 150),
(62, 150),
(63, 200),
(64, 0),
(65, 11400),
(66, 11400),
(67, 7000),
(68, 5700),
(69, 0),
(70, 0),
(71, 0),
(72, 6000),
(73, 0),
(74, 0),
(75, 1000),
(76, 6000),
(77, 0),
(78, 4000),
(79, 1000),
(80, 4000),
(81, 4000),
(82, 100),
(83, 0),
(84, 0),
(85, 2200),
(86, 200),
(87, 16000),
(88, 4000),
(89, 0);

-- --------------------------------------------------------

--
-- Table structure for table `atm_user`
--

CREATE TABLE `atm_user` (
  `a_username` varchar(25) NOT NULL,
  `a_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm_user`
--

INSERT INTO `atm_user` (`a_username`, `a_password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atm_card`
--
ALTER TABLE `atm_card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `atm_note`
--
ALTER TABLE `atm_note`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `atm_pin`
--
ALTER TABLE `atm_pin`
  ADD PRIMARY KEY (`pin_id`);

--
-- Indexes for table `atm_transection`
--
ALTER TABLE `atm_transection`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atm_card`
--
ALTER TABLE `atm_card`
  MODIFY `card_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `atm_note`
--
ALTER TABLE `atm_note`
  MODIFY `n_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `atm_pin`
--
ALTER TABLE `atm_pin`
  MODIFY `pin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `atm_transection`
--
ALTER TABLE `atm_transection`
  MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
