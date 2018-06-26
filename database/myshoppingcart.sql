-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 05:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address` varchar(96) NOT NULL,
  `city` varchar(96) NOT NULL,
  `pin` varchar(96) NOT NULL,
  `landmark` varchar(96) NOT NULL,
  `mobile` varchar(96) NOT NULL,
  `buyer_mobile` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address`, `city`, `pin`, `landmark`, `mobile`, `buyer_mobile`, `name`) VALUES
('Mahalasa pg, Roopena agrahara, NGR Layout', 'Karnataka-Bangalore', '560068', 'KarnÄtaka', '8697609789', '08697609789', 'Sohel Islam Mollick');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(96) NOT NULL,
  `password` varchar(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sohel', 'sohel');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pid` int(96) NOT NULL,
  `pname` varchar(96) NOT NULL,
  `price` varchar(96) NOT NULL,
  `producer` varchar(96) NOT NULL,
  `mobileno` varchar(96) NOT NULL,
  `qty` int(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pid`, `pname`, `price`, `producer`, `mobileno`, `qty`) VALUES
(2, 'Java 2 (5th Edition)', '649', 'Herbert Schildt', '', 1),
(1, 'Algorithms and Data Structures', '349', 'Niklaus Wirth', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(96) NOT NULL,
  `lname` varchar(96) NOT NULL,
  `mobile` varchar(96) NOT NULL,
  `email` varchar(96) DEFAULT NULL,
  `password` varchar(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `mobile`, `email`, `password`) VALUES
('Sohel', 'Mollick', '8697609789', 'sohelislammollick@gmail.com', 'sohelislam'),
('rafique', 'ansary', '7908515063', '', 'raaju123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `pid` int(96) NOT NULL,
  `pname` varchar(96) NOT NULL,
  `price` int(96) NOT NULL,
  `producer` varchar(96) NOT NULL,
  `address` varchar(96) NOT NULL,
  `city` varchar(96) NOT NULL,
  `pin` varchar(96) NOT NULL,
  `landmark` varchar(96) NOT NULL,
  `buyer_mobile` varchar(96) NOT NULL,
  `account_mobile` varchar(96) NOT NULL,
  `name` varchar(96) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pid`, `pname`, `price`, `producer`, `address`, `city`, `pin`, `landmark`, `buyer_mobile`, `account_mobile`, `name`, `date`) VALUES
(1, 'Algorithms and Data Structures', 349, 'Niklaus Wirth', 'Mahalasa pg, Roopena agrahara, NGR Layout', 'Karnataka-Bangalore', '560068', 'KarnÄtaka', '08697609789', '8697609789', 'Sohel Islam Mollick', '2018-01-20'),
(1, 'Algorithms and Data Structures', 349, 'Niklaus Wirth', 'Mahalasa pg, Roopena agrahara, NGR Layout', 'Karnataka-Bangalore', '560068', 'KarnÄtaka', '08697609789', '8697609789', 'Sohel Islam Mollick', '2018-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `pname` varchar(96) NOT NULL,
  `price` varchar(96) NOT NULL,
  `date` date NOT NULL,
  `mobileno` varchar(96) NOT NULL,
  `producer` varchar(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`pname`, `price`, `date`, `mobileno`, `producer`) VALUES
('Algorithms and Data Structures', '349', '2018-01-20', '8697609789', 'Niklaus Wirth');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(96) NOT NULL,
  `pname` varchar(96) NOT NULL,
  `price` varchar(96) NOT NULL,
  `producer` varchar(96) NOT NULL,
  `qty` varchar(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `fname` varchar(96) NOT NULL,
  `lname` varchar(96) NOT NULL,
  `mobile` varchar(96) NOT NULL,
  `email` varchar(96) NOT NULL,
  `cat` varchar(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`fname`, `lname`, `mobile`, `email`, `cat`) VALUES
('Sohel', 'Mollick', '8697609789', 'sohelislammollick@gmail.com', 'tshirt'),
('Sohel', 'Mollick', '8697609789', 'sohelislammollick@gmail.com', 'books'),
('Sohel', 'Mollick', '8697609789', 'sohelislammollick@gmail.com', 'books'),
('Sohel', 'Mollick', '8697609789', 'sohelislammollick@gmail.com', 'books');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(96) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7676676;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
