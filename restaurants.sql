-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 05:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `e_id` varchar(100) NOT NULL,
  `e_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`e_id`, `e_password`) VALUES
('101', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_dob` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contact`, `customer_address`, `customer_email`, `customer_dob`, `customer_password`) VALUES
('', '', '', '', '', '', '12345'),
('101', 'Harun', '01903028309', 'rampura', 'harunk873@gmail.com', '23/5/2019', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(100) NOT NULL,
  `ename` varchar(100) DEFAULT NULL,
  `eaddress` varchar(100) DEFAULT NULL,
  `econtact` varchar(100) DEFAULT NULL,
  `ebloodgroup` varchar(100) DEFAULT NULL,
  `ejdate` date DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `eaddress`, `econtact`, `ebloodgroup`, `ejdate`, `designation`) VALUES
('', '', '', '', '', '0000-00-00', NULL),
('1', '1', '1', '1', '', '0000-00-00', NULL),
('101', 'Rakib', 'Ga 1044/47 sahjadpur, Dhaka', '01903028309', 'B+', '0000-00-00', NULL),
('10111111111111111', 'jkj', 'kkkkkkkkkkkkkkkkk', 'k', '', '2019-03-03', NULL),
('102', 'Rakib', 'Ga 1044/47 sahjadpur, Dhaka', '01903028309', 'B+', '0000-00-00', NULL),
('111', '', '', '', '', '0000-00-00', NULL),
('11188989', '', '', '', '', '0000-00-00', NULL),
('111889891111111111111111111111111', '', '', '', '', '0000-00-00', NULL),
('111889891111111111111111111111111111111111111111111111111', '', '', '', '', '0000-00-00', NULL),
('1qqqqq', '', '', '', '', '0000-00-00', NULL),
('20100', 'Harun', 'Ga 1044/47', '01903028309', 'B+', '2019-03-10', NULL),
('50000000', 'afsana', 'jatrabari', '01903028309', 'B+', '2019-03-10', NULL),
('50001', 'kdfjkd', 'dkf', '', '', '0000-00-00', NULL),
('501', 'afsana', 'jatrabari', '01903028309', 'B+', '2019-03-10', NULL),
('50111', 'Borsha', 'bashundhara', '0234898', 'B+', '2019-03-19', NULL),
('737478487', 'dkfjk', 'kjkj', 'kjkj', 'k', '2019-03-25', NULL),
('84738947', '', '', '', '', '0000-00-00', NULL),
('84738947qq', '', '', '', '', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e_payment`
--

CREATE TABLE `e_payment` (
  `e_id` varchar(100) DEFAULT NULL,
  `e_date` varchar(100) DEFAULT NULL,
  `e_check` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` varchar(100) NOT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `image` blob,
  `item_name` varchar(100) DEFAULT NULL,
  `item_price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `customer_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`customer_id`, `product_id`, `product_quantity`, `order_date`) VALUES
('101', '16', '3', '25/3/2019'),
('777', '17', '4', '27/03/19'),
('777', '18', '88', '27/03/19'),
('199', '1', '222', '27/03/19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'soup', 'menu-image4.jpg', 100),
(16, 'soup', 'menu-image4.jpg', 100),
(17, 'soup', 'menu-image4.jpg', 100),
(18, 'soup', 'menu-image4.jpg', 100),
(19, 'soup', 'menu-image4.jpg', 100),
(20, 'soup', 'menu-image4.jpg', 100),
(21, 'soup', 'menu-image4.jpg', 100),
(22, 'soup', 'menu-image4.jpg', 100),
(23, 'soup', 'menu-image4.jpg', 100),
(24, 'soup', 'menu-image4.jpg', 100),
(25, 'soup', 'menu-image4.jpg', 100),
(26, 'soup', 'menu-image4.jpg', 100),
(27, 'soup', 'menu-image4.jpg', 100),
(28, 'soup', 'menu-image4.jpg', 100),
(29, 'soup', 'menu-image4.jpg', 100),
(30, 'soup', 'menu-image4.jpg', 100),
(31, 'soup', 'menu-image4.jpg', 100),
(32, 'soup', 'menu-image4.jpg', 100),
(33, 'soup', 'menu-image4.jpg', 100),
(34, 'soup', 'menu-image4.jpg', 100),
(35, 'soup', 'menu-image4.jpg', 100),
(36, 'soup', 'menu-image4.jpg', 100),
(37, 'soup', 'menu-image4.jpg', 100),
(38, 'soup', 'menu-image4.jpg', 100),
(39, 'soup', 'menu-image4.jpg', 100),
(40, 'soup', 'menu-image4.jpg', 100),
(41, 'soup', 'menu-image4.jpg', 100),
(42, 'soup', 'menu-image4.jpg', 100),
(43, 'soup', 'menu-image4.jpg', 100),
(44, 'soup', 'menu-image4.jpg', 100),
(45, 'chicken', 'chicken.jpg', 0),
(46, 'Noodles', 'Noodles.jpg', 0),
(47, 'Noodles', 'Noodles.jpg', 0),
(48, 'Noodles', 'Noodles.jpg', 50),
(49, 'cofee', 'cofee.png', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `e_payment`
--
ALTER TABLE `e_payment`
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `e_payment`
--
ALTER TABLE `e_payment`
  ADD CONSTRAINT `e_payment_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee` (`eid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
