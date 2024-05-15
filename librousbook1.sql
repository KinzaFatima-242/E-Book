-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 08:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librousbook1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `id` int(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `author_name`, `email`, `password`, `phone`, `address`, `city`, `province`, `country`, `postal_code`, `book_title`, `category`, `pdf`, `description`) VALUES
(8, 'harry@gmail.com', 'harry', '0914265674', 914265674, 'W-985 Flora Heights ', 'Houston', 'Texas', 'US', '1380948', 'Roar', 'Novel', 'e_bbok.png', 'A novel about brave girls life....\r\n'),
(11, 'eliza@gmail.com', 'eliza', '+237862374', 237862374, 'Fifth Floor Queen Street', 'Sydney', 'New South Wales', 'Australiya', 'g-2055', 'Winter Fairy.', 'Novel', 'Banner_1.png', 'A Tale of Fairy '),
(12, 'fredrick@gmail.com', 'fereddy', '0912782', 912782, 'W-985 Flora Heights ', 'Las Angeles', 'California', 'US', 'p-233', 'Light in the Night', 'Story Book', 'Screenshot (22).png', 'Story of a Young who lived in  Las Vegas'),
(13, 'jesica@gmail.com', 'harry', '0912782', 912782, 'khLADHILahsjd', 'Las Angeles', ' Nevada', 'Australiya', ' 24700', 'kiqawgfjqhejhq', 'Himalaya', 'Screenshot (16).png', 'wewewer'),
(14, 'harry@gmail.com', 'kinzafatima9112003@gmail.com', 'harry', 912782, 'W-985 Flora Heights ', 'Sydney', 'California', 'US', 'asda', 'kiqawgfjqhejhq', 'History', 'Screenshot (25).png', 'asdzsdasd');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`Id`, `Name`, `Email`, `Password`, `Image`) VALUES
(1, 'Issabelle', 'issabelle@gmail.com', 'issabelle', 'Admin_girl_pic.jpg'),
(2, 'Harry', 'harry@gmail.com', 'harry', 'Admin_boy _pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`Id`, `Name`, `Email`, `Address`, `Phone`, `Description`) VALUES
(1, 'Jesica', 'jesica@gmail.com', 'W-985 Flora Heights ', '664567', 'aads'),
(2, '', '', '', '', ''),
(3, 'Harry', 'harry@gmail.com', 'W-985 Flora Heights ', '0912782', 'ASDFASDFFD'),
(4, 'Harry', 'harry@gmail.com', 'W-985 Flora Heights ', '0912782', 'ASDFASDFFD'),
(5, 'Merry', 'merry@gmail.com', 'Flat No# 23 Tortilla Heights', '13425425', 'Be HAPPY'),
(6, 'harry', 'harry@gmail.com', 'W-985 Flora Heights ', '0912782', 'sdfsdfsdf'),
(7, 'adadad', 'kinzafatima9112003@gmail.com', '', 'adad', 'asdasd'),
(8, 'Kinza Fatima', 'kinzafatima9112003@gmail.com', '', '0912782', 'BE HAPPY'),
(9, '', 'harry@gmail.com', '', 'frgfrgrg', ''),
(10, '', 'harry@gmail.com', '', '1232323423', ''),
(11, '', 'harry@gmail.com', '', '1232323423', ''),
(12, '', 'jesica@gmail.com', '', '13425425', ''),
(13, '', 'kinzafatima9112003@gmail.com', '', '0912782', ''),
(14, 'harry', 'harry@gmail.com', '', '0912782', 'dfgdgdfg'),
(15, 'afsdfsdf', 'kinzafatima9112003@gmail.com', '', '0912782', 'zsdfsdf'),
(16, 'afasdfsad', 'kinzafatima9112003@gmail.com', '', '0912782', 'asdasdf'),
(17, 'Elsa', 'kinzafatima9112003@gmail.com', '', '0912782', 'Be Happy\r\n'),
(18, 'Elsa', 'kinzafatima9112003@gmail.com', '', '0912782', 'Be Happy\r\n'),
(19, 'Jesica', 'jesica@gmail.com', '', '664567', 'sdfsdf'),
(20, 'Jesica', 'jesica@gmail.com', '', '664567', 'sdfsdf'),
(21, 'Jesica', 'jesica@gmail.com', '', '664567', 'sdfsdf'),
(22, '', 'harry@gmail.com', '', '0912782', 'dfghdghdfgh'),
(23, 'Kinza Fatima', 'kinzafatima9112003@gmail.com', '', '0912782', 'Gone Girl'),
(24, 'Fatima', 'fatima@gmail.com', '', '664567', 'Jude City');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`id`, `username`, `password`) VALUES
(28, 'lisa', 'lisa'),
(29, 'lisa', 'lisa'),
(30, 'lisa', 'lisa'),
(31, 'fatime', 'fatima'),
(32, 'fatime', '2342342345345'),
(33, 'admin', 'jgasdfukagsdfukgasdf'),
(34, 'khsdhgagd', 'sdsgfsfdgn'),
(35, 'erwerwer', 'adminwerwerw'),
(36, 'peter', '1234433'),
(37, 'admin', 'admin'),
(38, 'wewer', 'asdfasdf'),
(39, '23443', '4354343'),
(40, 'flora', 'flora'),
(41, 'flora', 'flora'),
(42, 'orea', 'orea'),
(43, 'orea', 'orea'),
(44, 'Laiba', 'laiba'),
(45, 'kinza', '123'),
(46, 'Lara', 'lara'),
(47, 'Mona lisa', 'mona lisa'),
(48, 'Mona lisa', 'mona lisa'),
(49, 'Aqsa', 'aqsa'),
(50, 'Elsa', 'elsa'),
(51, 'Elsa', 'elsa'),
(52, 'harry@gmail.com', 'harry'),
(53, 'harry@gmail.com', 'harry'),
(54, 'Jimmy', 'jimmy'),
(55, 'harry@gmail.com', 'harry');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `concern` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `name`, `email`, `password`, `phone`, `address`, `birthdate`, `concern`, `city`, `province`, `country`, `zip`, `description`) VALUES
(1, 'Sara', 'sara@gmail.com', 'sara', '', '', '', '', '', '', '', '', ''),
(2, 'Lisa', 'lisa@gmail.com', 'lisa', '9q868934', '563456456', '', '', '', '', '', '', ''),
(3, 'harry', 'tina@gmail.com', 'harry', 'dfsdf', 'W-985 Flora Heights ', '10-11-2002', 'Fiction', '', '', '', '', ''),
(4, 'dfgdf', 'sdfgdfg@gmail.com', 'sdfgsdfg', 'erwerwer', 'werwer', 'werwer', 'werwer', 'werwer', 'werwer', '', '', ''),
(5, 'AEsf', 'sdfgdfg@gmail.com', 'harry', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsf', 'sdfsd', 'sdfsdfs', 'sdfsdf', ''),
(6, 'harry', 'kinzafatima9112003@gmail.com', 'harry', '0912782', 'sdfadf', '9-12-2000', '343434', 'zsdfsdf', 'California', 'pak', 'sdfsdfsdf', '  sdfsdf'),
(7, 'harry', 'kinzafatima9112003@gmail.com', 'harry', '0912782', 'sdfadf', '9-12-2000', '343434', 'zsdfsdf', 'California', 'pak', 'sdfsdfsdf', '  sdfsdf'),
(8, 'harry', 'kinzafatima9112003@gmail.com', 'harry', '0912782', 'werwerwer', '9-12-2000', 'Fiction', 'Karachi', 'werwrwe', 'wewrwer', 'werwerwer', '  sfsdfsdfsdfsdf'),
(9, 'harry', 'kinzafatima9112003@gmail.com', 'harry', '664567', 'werer', '9-12-2000', 'Fictionw', 'werwer', 'werwer', 'wewer', 'wewe', '  wewer'),
(10, 'Kinza', 'kinzafatima9112003@gmail.com', 'kinza', '0912782', 'W-985 Flora Heights ', '9-12-2000', 'Fiction', 'Sydney', 'New South Wales', 'Australiya', 'O-2323', '  I love to read Fictional Characters'),
(11, 'harry@gmail.com', 'issabelle@gmail.com', 'harry', 'werwr', 'werwer', 'werwre', 'werwe', 'werwe', 'wewr', 'ewrer', 'awefwer', '  ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `image`) VALUES
(1, 'issabelle@gmail.com', 'issabelle', 'admin_1.jfif'),
(2, 'harry@gmail.com', 'harry@gmail.com', 'admin_2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `publisher_login`
--

CREATE TABLE `publisher_login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher_login`
--

INSERT INTO `publisher_login` (`id`, `username`, `password`) VALUES
(1, 'James', 'james'),
(2, 'Merry', 'merry'),
(3, 'harry@gmail.com', 'harry');

-- --------------------------------------------------------

--
-- Table structure for table `publisher_reg`
--

CREATE TABLE `publisher_reg` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `concern` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher_reg`
--

INSERT INTO `publisher_reg` (`id`, `name`, `email`, `password`, `phone`, `address`, `birthdate`, `concern`, `city`, `province`, `country`, `zip`, `description`) VALUES
(1, 'James Bond', 'james@gamil.com', 'bond', '664567', 'W-985 Flora Heights ', '10-11-2002', 'Fiction', 'Karachi', 'Sindh', 'Pakistan', 'u 2342', '  I love to read Fiction'),
(2, 'harry@gmail.com', 'kinzafatima9112003@gmail.com', 'harry', 'sdfsf', 'assadsdf', 'sdfsdf', 'sdfsdf', 'sdsdfsfdsf', 'sdfsf', 'sdfsf', 'sdfsd', '  ssfsfd');

-- --------------------------------------------------------

--
-- Table structure for table `view_book`
--

CREATE TABLE `view_book` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_book`
--

INSERT INTO `view_book` (`id`, `name`, `price`, `image`, `category`) VALUES
(16, 'Shaikhz', 34000, 'Screenshot (11).png', NULL),
(17, 'harry', 2000, 'Screenshot (23).png', 'Novel'),
(18, 'Jesica', 34000, 'Screenshot (12).png', 'History');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `buynow`
--
ALTER TABLE `buynow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher_login`
--
ALTER TABLE `publisher_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher_reg`
--
ALTER TABLE `publisher_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_book`
--
ALTER TABLE `view_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buynow`
--
ALTER TABLE `buynow`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publisher_login`
--
ALTER TABLE `publisher_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publisher_reg`
--
ALTER TABLE `publisher_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `view_book`
--
ALTER TABLE `view_book`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
