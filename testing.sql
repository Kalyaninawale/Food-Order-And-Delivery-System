-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 09:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `mail` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phoneno` int(255) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`mail`, `fullname`, `phoneno`, `question`) VALUES
('kalyaninawale078@gmail.com', 'kalyani', 2147483647, 'Tell Me About Order Structure?');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` int(255) NOT NULL,
  `donername` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `cardno` int(255) NOT NULL,
  `cardcvv` int(255) NOT NULL,
  `expairy` date NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`fullname`, `address`, `mobileno`, `donername`, `reason`, `nickname`, `mail`, `dob`, `gender`, `detail`, `cardno`, `cardcvv`, `expairy`, `amount`) VALUES
('kalyani', 'Sinner', 983, 'Kalyani', 'Birthday', 'Kaluu', 'kalyaninawale078@gmail.com', '2002-09-23', 'female', 'Credit Card', 2147483647, 234, '0000-00-00', 4567),
('kalyani', 'Sinner', 983, 'Kalyani', 'Birthday', 'Kaluu', 'kalyaninawale078@gmail.com', '2021-06-24', 'female', 'Credit Card', 789465123, 784, '0000-00-00', 500);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `mail` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `valuablefeed` varchar(255) NOT NULL,
  `feed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`mail`, `firstname`, `lastname`, `valuablefeed`, `feed`) VALUES
('kalyaninawale078@gmail.com', 'Kalyani', 'Nawale', '', ''),
('kalyaninawale078@gmail.com', 'Kalyani', 'Nawale', '', ''),
('kalyaninawale078@gmail.com', 'Kalyani', 'Nawale', 'female', 'Nice Website');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `mobileno` int(255) NOT NULL,
  `mailid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `cardno` int(255) NOT NULL,
  `cardcvv` int(255) NOT NULL,
  `expairy` date NOT NULL,
  `items` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`fullname`, `address`, `city`, `pincode`, `mobileno`, `mailid`, `name`, `nickname`, `mail`, `dob`, `gender`, `detail`, `cardno`, `cardcvv`, `expairy`, `items`, `amount`) VALUES
('kalyani', 'Sinner', 'Pune', 852, 852, 'ctfvygbuhnijmok', 'vygbhnjkmk', 'Kaluu', 'kalyaninawale078@gmail.com', '2021-06-16', 'female', 'Credit Card', 78945621, 852, '0000-00-00', 'Veg-Pulao', '0'),
('kalyani', 'Sinner', 'Pune', 852, 983, 'ctfvygbuhnijmok', 'vygbhnjkmk', 'Kaluu', 'kalyaninawale078@gmail.com', '2021-06-24', 'female', 'Credit Card', 234567890, 324, '0000-00-00', 'Veg-Pulao', '0'),
('kalyani', 'Sinner', 'dfbg', 56789, 2147483647, 'erwghg', 'dfg', 'fdb', 'dsfb', '2021-06-24', 'female', 'Credit Card', 234567890, 345, '0000-00-00', 'Veg-Pulao', '$ 100.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Pav Bhaji', 'pavbhaji.jpg', 150.00),
(2, 'Pine Apple Shira', 'pineappleshira.jpg', 220.00),
(3, 'Pohe', 'Poha.jpg', 100.00),
(4, 'Puran Poli', 'puran.jpg', 220.00),
(5, 'Chole Puri', 'puri-chole.jpg', 250.00),
(6, 'Masala Dhosa', 'masaladosa.jpg', 150.00),
(7, 'Masala-Rice', 'masalarice.jpg', 250.00),
(8, 'Soya Chili', 'soya-chili.jpg', 220.00),
(9, 'Mashroom Biryani', 'mashroombirani.jpg', 250.00),
(10, 'Cheese Pizza', 'vegcheese.jpg', 250.00),
(11, 'Shahi  Veg Biryani', 'shahivegbiryani.jpg', 250.00),
(12, 'Veg-Pulao', 'veg-pulao.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `img`) VALUES
(1, 'uniquefood@', 'NKAM@unique', 'HeadUser', 'unique.jpg'),
(2, 'kalyani', 'kalyani@', 'Kalyani Nawale', 'Kalyani.jpeg'),
(3, 'akash', 'akash@', 'Akash Nikam', 'Akash.jpeg'),
(4, 'monali', 'monali@', 'Monali Mankar', 'monali.jpeg'),
(5, 'nayan', 'nayan@', 'Nayan Naykar', 'Nayan.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
