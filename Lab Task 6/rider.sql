-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 07:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `ID` int(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Date of Birth` varchar(200) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`ID`, `Name`, `Email`, `Password`, `Gender`, `Date of Birth`, `Image`) VALUES
(1, 'tasnim mim', 'tasnimkhondoker1999@gmail.com', '$2y$10$uluf8r1c6M6GAYfNJaIeheHxxFAsdCd6feXwUXykjMQIAbAhB1dfu', 'female', '1999-07-04', '7602ddd1-3ccf-4104-8550-f2e24ebabf07.jpg'),
(2, 'Tasnim Khondoker', 'tasnimkhondoker1999@gmail.com', 'mim#145565', 'female', '1999-06-01', ''),
(3, 'tonni khondoker', 'raihanatonni1994@gmail.com', 'tonni#1234', 'female', '1994-05-02', ''),
(4, 'Tasnim Mim', 'tasnimkhondoker1999@gmail.com', 'tasnim#12345', 'female', '1999-06-01', ''),
(5, 'tazrian zaman', 'tazrian1234@gmail.com', 'tazrian#1999', 'female', '1999-01-07', ''),
(6, 'Mim Khondoker', 'tasnimkhondoker1999@gmail.com', 'Mim#212180', 'female', '1999-03-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
