-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 08:32 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srkrhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int NOT NULL,
  `ptitle` varchar(50) NOT NULL,
  `pmname` varchar(30) NOT NULL,
  `pmid` varchar(10) NOT NULL,
  `pmmobile` varchar(10) NOT NULL,
  `pmbranch` varchar(3) NOT NULL,
  `stdname` varchar(30) NOT NULL,
  `stdid` varchar(10) NOT NULL,
  `stdmobile` varchar(10) NOT NULL,
  `stdbranch` varchar(5) NOT NULL,
  `pdesc` text NOT NULL,
  `stdack` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `ptitle`, `pmname`, `pmid`, `pmmobile`, `pmbranch`, `stdname`, `stdid`, `stdmobile`, `stdbranch`, `pdesc`, `stdack`) VALUES
(1, 'Aqua Website', 'Swaroop', '1234567890', '9876543210', 'IT', 'Swamy', '20B91A05Q0', '1345625875', 'MECH', 'anbvabnv  avoae v anvoe va eivoanv eo gvgvaflrvvog av eonvlanr voa hgvoa voaernb a voaivna gvoangvr', 'agreed'),
(2, 'Test1', 'Vinod Varma', '1234567895', '9515023245', 'CSE', 'Student1', '20B91A05G4', '9704784163', 'CSE', 'abcdefghijklmnopqrstuvwxyz', 'agreed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sid` int NOT NULL,
  `sname` varchar(25) NOT NULL,
  `srgno` varchar(15) NOT NULL,
  `spass` varchar(15) NOT NULL,
  `smail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sid`, `sname`, `srgno`, `spass`, `smail`) VALUES
(1, 'Roshan', '20B91A05Q6', 'Lifegood@2002', 'pawankalyan080808@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
