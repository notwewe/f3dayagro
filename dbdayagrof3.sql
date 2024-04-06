-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 08:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdayagrof3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `ProductID` int(6) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductDesc` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`ProductID`, `ProductName`, `ProductPrice`, `ProductDesc`) VALUES
(1, 'ArduinoUno', 350, 'The Arduino Uno is a popular microcontroller board based on the ATmega328P. It features 14 digital input/output pins, 6 analog inputs, a 16 MHz quartz crystal, USB connection, power jack, ICSP header, and a reset button. It\'s an excellent choice for beginners and professionals alike for various projects.'),
(2, 'Arduino Nano', 250, 'The Arduino Nano is a compact yet powerful microcontroller board based on the ATmega328. It\'s similar to the Arduino Uno but in a smaller form factor, making it suitable for projects where space is limited. It features 14 digital input/output pins, 8 analog inputs, USB connectivity, and more.'),
(4, 'Arduino Mega 2560', 1000, 'The Arduino Mega 2560 is a robust microcontroller board based on the ATmega2560. It\'s designed for projects that require more I/O pins and memory. With 54 digital input/output pins, 16 analog inputs, a larger flash memory size, and more, it\'s suitable for complex projects and prototyping.'),
(5, 'DHT22 Temperature and Humidity', 200, 'The DHT22 sensor is capable of measuring both temperature and humidity with high accuracy. It uses a digital signal output, making it easy to interface with microcontrollers like Arduino. Ideal for weather stations, environmental monitoring, and HVAC systems.\r\n\r\n'),
(6, 'MPU-6050 Gyroscope and Acceler', 300, 'The MPU-6050 sensor combines a gyroscope and accelerometer in a single chip. It provides precise motion sensing capabilities, making it suitable for applications such as motion tracking, gesture recognition, and drone stabilization.');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `acctid` int(3) NOT NULL,
  `emailadd` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`acctid`, `emailadd`, `username`, `password`, `usertype`) VALUES
(9, 'jmsacbl@gmail.com', 'jmsacbl', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`userid`, `firstname`, `lastname`, `gender`, `birthday`) VALUES
(15, 'James', 'Acabal', 'Male', '2024-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`acctid`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `ProductID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `acctid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
