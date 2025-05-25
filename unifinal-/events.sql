-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2025 at 08:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(100) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Birthdate` date NOT NULL,
  `TermsandConditions` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Fullname`, `Email`, `password`, `Gender`, `Birthdate`, `TermsandConditions`, `Phone`) VALUES
(1, 'Abraham Fuentes', 'Pa$$w0rd!', '', '+1 (207) 744-5513', '2025-03-06', 'female', 0),
(2, 'Chester Romero', 'Pa$$w0rd!', '', '+1 (546) 445-1494', '2023-09-07', 'female', 0),
(3, 'Darryl Marsh', 'kicynuv@mailinator.com', '', 'male', '1980-03-26', 'on', 1),
(4, 'Althea Lambert', 'korifoge@mailinator.com', '', 'male', '2019-05-06', 'on', 1),
(5, 'Brent Bond', 'bafe@mailinator.com', 'Pa$$w0rd!', 'male', '1979-01-03', 'on', 1),
(6, 'Oscar Kelley', 'fylybef@mailinator.com', 'Pa$$w0rd!', 'female', '2000-02-15', 'on', 1),
(7, 'Jonah Martinez', 'tyra@mailinator.com', 'Pa$$w0rd!', 'male', '2017-11-03', 'on', 1),
(8, 'Anastasia Trujillo', 'gepekaqiso@mailinator.com', 'Pa$$w0rd!', 'female', '1990-11-06', 'on', 1),
(9, 'Craig Kelly', 'dobaqa@mailinator.com', 'Pa$$w0rd!', 'prefer-not-to-say', '1999-09-03', 'on', 1),
(10, 'India Stephens', 'pilos@mailinator.com', 'Pa$$w0rd!', 'female', '1974-09-21', 'on', 1),
(11, 'Thor Campos', 'tijybir@mailinator.com', 'Pa$$w0rd!', 'male', '1985-07-08', 'on', 1),
(12, 'Mercedes Nixon', 'helije@mailinator.com', 'Pa$$w0rd!', 'male', '1978-12-15', 'on', 1),
(13, 'Paul Avery', 'boqi@mailinator.com', 'Pa$$w0rd!', 'male', '1976-01-15', 'on', 1),
(14, 'Paul ', 'boqi@mailinator.com', '12345', 'male', '1976-01-15', 'on', 1),
(15, 'Adara Guthrie', 'vegyli@mailinator.com', 'Pa$$w0rd!', 'prefer-not-to-say', '2004-12-04', 'on', 1),
(16, 'Lunea Coffey', 'xogyfizul@mailinator.com', 'Pa$$w0rd!', 'female', '1988-10-04', 'on', 1),
(17, 'Bianca Nelson', 'pecubaved@mailinator.com', 'Pa$$w0rd!', 'male', '1987-01-22', 'on', 1),
(18, 'Winter Hobbs', 'hytefe@mailinator.com', 'Pa$$w0rd!', 'female', '2019-03-29', 'on', 1),
(19, 'Aquila Norris', 'dycixopiwa@mailinator.com', 'Pa$$w0rd!', 'male', '1990-02-21', 'on', 1),
(20, 'Herman English', 'bify@mailinator.com', 'Pa$$w0rd!', 'female', '1982-12-31', 'on', 1),
(21, 'Violet Berger', 'nitidygeto@mailinator.com', 'Pa$$w0rd!', 'prefer-not-to-say', '1991-02-06', 'on', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
