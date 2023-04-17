-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 05:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `Product_Id` varchar(50) NOT NULL,
  `Price` int(50) DEFAULT NULL,
  `Book_Nmae` varchar(30) DEFAULT NULL,
  `Writer_Nmae` varchar(50) DEFAULT NULL,
  `Catagories` varchar(50) DEFAULT NULL,
  `Quantity` int(50) NOT NULL,
  `Image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`Product_Id`, `Price`, `Book_Nmae`, `Writer_Nmae`, `Catagories`, `Quantity`, `Image`) VALUES
('A-15710578', 120, 'paradoxical sajid', 'arif azad', 'islamic book', 176, 0x30383164376133663738393262393565356633346439313835383961636461612e6a7067),
('A-76931029', 300, 'xyz', 'XYZ', 'XYZ', 40, 0x32343232633834343233303730393563346432323334306631376330353066332e6a7067),
('A-85914836', 123, 'paradoxical sajid', 'arif azad', 'islamic book', 20, 0x64653231383936653830346433363363653062383662353233343931643065302e6a7067),
('A-99579754', 320, 'mock gig fiverr', 'XYZ', 'XYZ', 30, 0x31376333353235353332323765363361396639666232353831373630643639662e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `add_stationart_product`
--

CREATE TABLE `add_stationart_product` (
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Price` int(50) DEFAULT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `Id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `Date_of_birth` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`Id`, `Name`, `Email`, `phone`, `Date_of_birth`, `Gender`, `Password`, `Image`) VALUES
('A-21009676', 'Abrar Fahim', 'abrarfahimtasin@yahoo.com', 1857727899, '2022-04-01', 'Male', 'admin', 0x35373036386364343331616633616462636165653439356161653465626137342e6a7067),
('A-50059516', 'Jahid Hossain', 'abrarfahimtasin@yahoo.com', 12334, '2022-04-20', 'Male', '123', 0x66306333343534386235653039653231646462663438303835613131626233302e),
('A-95669315', 'Jahid Hossain', 'abrarfahimtasin@yahoo.com', 12334, '2022-04-22', 'Male', '12345', 0x39336266333238366462353261356163373434396563646263346430646161662e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `Order_Id` varchar(50) NOT NULL,
  `cus_id` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Status` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`Order_Id`, `cus_id`, `Date`, `Status`) VALUES
('A-69187139', 'A-32682016', '2022/04/23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `Order_Id` varchar(50) DEFAULT NULL,
  `p_id` varchar(50) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `total` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`Order_Id`, `p_id`, `quantity`, `total`) VALUES
('A-69187139', 'A-15710578', 8, 960);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Library_Id` varchar(50) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `Date_of_birth` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Library_Id`, `Name`, `Email`, `Phone`, `Date_of_birth`, `Gender`, `Password`, `Image`) VALUES
('A-32682016', 'Abrar Fahim', 'abrarfahimtasin@yahoo.com', 12334, '2022-04-09', 'Male', '12345', 0x31323230613732336166336663306236666138393039343933376334306534322e6a7067),
('A-82532456', 'Jahid Hossain', 'abrarfahimtasin@yahoo.com', 12334, '2022-04-22', 'Male', '123456', 0x66396664396431393637386435373161613566666461613336346664333837662e6a7067),
('A-99735127', 'ROBI', 'abrarfahimtasin@gmail.com', 12334, '', 'Male', '12345', 0x39653932663132616131636238323939356634616631626230653165383261662e6a7067);

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
(1, 'Paradoxical sajid', 'A.jpg', 100.00),
(2, 'Big book Mock', '2.jpeg', 299.00),
(3, 'Big book Mock', 'C.jpg', 125.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `image`) VALUES
(1, 'David', 'David - 2022.04.23 - 05.07.04pm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(8) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `displayName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `displayName`) VALUES
(2, 'admin', 'a', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `add_stationart_product`
--
ALTER TABLE `add_stationart_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Library_Id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
