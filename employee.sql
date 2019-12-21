-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 03:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone number` varchar(15) NOT NULL,
  `joining date` date NOT NULL,
  `designation` varchar(30) NOT NULL,
  `grade` char(1) NOT NULL,
  `loan` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `house allowance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`code`, `name`, `address`, `phone number`, `joining date`, `designation`, `grade`, `loan`, `basic`, `house allowance`) VALUES
(4829, 'Md. Al Sajiduzzaman Akand', 'Auchpara, Tongi, Gazipur', '+8801834402013', '2018-12-09', 'Lead Programmer', 'A', 10000, 50000, 8000),
(7617, 'Atia Fyrose', 'Moktar Bari, Tongi, Gazipur', '+8801552320031', '2019-09-16', 'UX Designer', 'B', 5000, 40000, 10000),
(1878, 'Fardeen Mahmud', 'Khalpar, Uttara, Dhaka', '+8801793618800', '2019-07-10', 'Developer', 'D', 150000, 90000, 1000),
(295, 'Tamanna ', 'Ashulia, Savar, Dhaka', '+8801624257843 ', '2019-07-15', 'Makeup Artist', 'B', 3200, 65000, 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
