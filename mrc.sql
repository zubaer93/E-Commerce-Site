-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2015 at 07:38 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `header` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `bkash` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`header`, `description`, `image`, `id`, `contact`, `bkash`) VALUES
('Hey Dudes', 'xcvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'range-men-casual.jpg', 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Rashik Nafee', 'theqk171@gmail.com', 'nafee');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `pro_id` int(10) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pro_id`, `ip_address`, `quantity`) VALUES
(10, '::1', 5),
(11, '::1', 3),
(13, '::1', 1),
(14, '::1', 1),
(15, '::1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'MEN'),
(2, 'WOMEN'),
(3, 'KIDS'),
(4, 'ELECTRONICS'),
(5, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `product_id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`product_id`, `comment`, `country`, `name`, `date`) VALUES
(11, 'comment', 'Bangladesh', 'Md. Asif Shahjalal', '2015-11-01 18:18:25'),
(11, 'Uldfdsf efesse', 'Uganda', 'Tamim', '2015-11-01 19:15:16'),
(11, 'Uldfdsf efesse', 'Uganda', 'Tamim', '2015-11-01 19:15:23'),
(11, 'Ulala mukatele', 'Uganda', 'Tamim', '2015-11-01 19:17:08'),
(9, 'World class', 'Bangladesh', 'Md. Asif Shahjalal', '2015-11-01 20:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_address`, `customer_contact`, `customer_country`, `customer_pass`) VALUES
(2, '::1', 'Tamim', 'theqk171@gmail.com', '<p>asdf</p>', '01673345643', 'asdfg', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `country`, `comment`, `date`) VALUES
('Farea', 'Ghana', 'Ule ulaleka', '2015-11-02 08:41:30'),
('Tamim', 'Bangladesh', 'Sule ulaleka', '2015-11-02 08:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `category_id`, `quantity`, `date`, `contact`) VALUES
(12, 15, 'WOMEN', 1, '2015-10-31 10:32:50', '01673345643'),
(16, 13, 'WOMEN', 1, '2015-11-01 21:03:31', '01673345643'),
(18, 15, 'WOMEN', 1, '2015-11-01 21:03:31', '01673345643'),
(19, 10, 'WOMEN', 5, '2015-11-01 21:03:55', '01673345643'),
(20, 12, 'OTHERS', 3, '2015-11-01 21:03:55', '01673345643'),
(22, 14, 'WOMEN', 1, '2015-11-01 21:03:55', '01673345643'),
(25, 12, 'OTHERS', 3, '2015-11-01 21:04:12', '01673345643'),
(26, 13, 'WOMEN', 1, '2015-11-01 21:04:12', '01673345643'),
(28, 15, 'WOMEN', 1, '2015-11-01 21:04:12', '01673345643'),
(29, 10, 'WOMEN', 5, '2015-11-01 21:05:49', '01673345643'),
(30, 12, 'OTHERS', 3, '2015-11-01 21:05:49', '01673345643'),
(31, 13, 'WOMEN', 1, '2015-11-01 21:05:49', '01673345643'),
(32, 14, 'WOMEN', 1, '2015-11-01 21:05:49', '01673345643'),
(34, 10, 'WOMEN', 5, '2015-11-02 07:35:47', '01673345643'),
(36, 13, 'WOMEN', 1, '2015-11-02 07:35:47', '01673345643'),
(37, 14, 'WOMEN', 1, '2015-11-02 07:35:47', '01673345643'),
(38, 15, 'WOMEN', 5, '2015-11-02 07:35:47', '01673345643'),
(39, 10, 'WOMEN', 5, '2015-11-02 07:37:42', '01673345643'),
(42, 14, 'WOMEN', 1, '2015-11-02 07:37:43', '01673345643'),
(43, 15, 'WOMEN', 5, '2015-11-02 07:37:43', '01673345643'),
(44, 9, 'ELECTRONICS', 12, '2015-11-04 18:02:30', '01673345643'),
(45, 10, 'WOMEN', 5, '2015-11-04 18:02:31', '01673345643'),
(46, 11, 'KIDS', 3, '2015-11-04 18:02:31', '01673345643'),
(47, 13, 'WOMEN', 1, '2015-11-04 18:02:31', '01673345643'),
(48, 14, 'WOMEN', 1, '2015-11-04 18:02:31', '01673345643'),
(49, 15, 'WOMEN', 5, '2015-11-04 18:02:31', '01673345643');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(100) NOT NULL,
  `image` text NOT NULL,
  `keywords` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `brand`, `title`, `description`, `price`, `image`, `keywords`, `image1`, `image2`, `image3`) VALUES
(9, 'ELECTRONICS', 'HP', 'Laptop', '<p>Nice laptop</p>', 40000, 'k2-_ed8b8f8d-e696-4a96-8ce9-d78246f10ed1.v1.jpg-bc204bdaebb10e709a997a8bb4518156dfa6e3ed-optim-450x450.jpg', 'laptop,hp', '', '', ''),
(10, 'WOMEN', 'Charlotte', 'Dress', '<p>COOL DRESS</p>', 25000, 'lindy-bop-grace-classy-red-vintage-1950s-evening-party-dress.jpg', 'dress,ladies', '', '', ''),
(11, 'KIDS', 'ZLATAN', 'Khelna', '<p>asdasd sfdfd SASDA</p>', 500, 'guitar.jpg', 'guitar', '', '', ''),
(12, 'OTHERS', 'Unknown', 'Spoon', '<p>Little</p>', 150, 'kitchen-accessories-250x250.jpeg', 'spoon', '', '', ''),
(13, 'WOMEN', 'Nike', 'Dress', '<p>asdasdasfadf</p>', 4500, '1.png', 'sdfsd', '', '', ''),
(14, 'WOMEN', 'asdas', 'Dress', '<p>asdasdas</p>', 34543, '2.jpg', 'serew', '', '', ''),
(15, 'WOMEN', 'Nike', 'Dress', '<p>dasdasd</p>', 0, 'img-thing.jpg', 'asdas', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
