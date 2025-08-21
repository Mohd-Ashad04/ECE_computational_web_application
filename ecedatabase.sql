-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 08:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `computational_item_details`
--

CREATE TABLE `computational_item_details` (
  `Room_No` varchar(10) NOT NULL,
  `Name` char(40) NOT NULL,
  `Laptop_Model` varchar(20) DEFAULT NULL,
  `PC_Model` varchar(20) DEFAULT NULL,
  `Printer_Model` varchar(25) DEFAULT NULL,
  `Graphic_Tablet_Model` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computational_item_details`
--

INSERT INTO `computational_item_details` (`Room_No`, `Name`, `Laptop_Model`, `PC_Model`, `Printer_Model`, `Graphic_Tablet_Model`) VALUES
('A315', 'Dr. Davinder Singh Saini', 'HP 440 G3', 'HP V192', 'Laserjet pro MFPM128fn', 'Star G960'),
('A314', 'Dr. Anil Kumar Rose', 'Dell 3480', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A332', 'Dr. Parvinder Kaur', '', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A324', 'Dr. Shilpa Jindal', '', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A323', 'Dr. Dinesh Sharma', '', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A326', 'Dr. Sarita Sharma', '', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A321', 'Er. Hardeep Saini', 'HP Compaq 6530B', 'HP V192', 'HP P1007', 'Star G960'),
('A303', 'Dr. Anil Kumar Vaghmare', '', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A325', 'Dr. Irfan Ahmad Khan', '', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A313', 'Dr. Krishna Gopal Sharma', 'Dell 3480', 'HP V192', 'Brother DCP7500D', 'Star G960'),
('A316', 'Dr. Bhasker Gupta', 'Dell 3480', 'HP V192', 'Brother DCP7500D', 'Star G960');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `Room_No` varchar(10) NOT NULL,
  `Name` char(40) NOT NULL,
  `Designation` char(30) NOT NULL,
  `Email_ID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`Room_No`, `Name`, `Designation`, `Email_ID`) VALUES
('A315', 'Dr. Davinder Singh Saini', 'HOD', 'dssaini@ccet.ac.in'),
('A314', 'Dr. Anil Kumar Rose', 'Professor', 'anilrose@ccet.ac.in'),
('A332', 'Dr. Parvinder Kaur', 'Assistant Professor', 'pkaur@ccet.ac.in'),
('A324', 'Dr. Shilpa Jindal', 'Assistant Professor', 'shilpajindal@ccet.ac.in'),
('A323', 'Dr. Dinesh Sharma', 'Assistant Professor', 'iakhan@ccet.ac.in'),
('A326', 'Dr. Sarita Sharma', 'Assistant Professor', 'saritasharma@ccet.ac.in'),
('A321', 'Er. Hardeep Saini', 'Assistant Professor', 'hsaini@ccet.ac.in'),
('A303', 'Dr. Anil Kumar Vaghmare', 'Assistant Professor', 'anilvaghmare@ccet.ac.in'),
('A325', 'Dr. Irfan Ahmad Khan', 'Assistant Professor', 'iakhan@ccet.ac.in'),
('A313', 'Dr. Krishna Gopal Sharma', 'Professor', 'kgsharma@ccet.ac.in'),
('A316', 'Dr. Bhasker Gupta', 'Professor', 'bgupta@ccet.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `lab_details`
--

CREATE TABLE `lab_details` (
  `Room_No` varchar(10) DEFAULT NULL,
  `Lab_Name` char(50) NOT NULL,
  `Floor` char(5) NOT NULL,
  `No_Of_PCs` int(5) NOT NULL,
  `PC_Model` char(20) NOT NULL,
  `Projector_Model` char(20) NOT NULL,
  `UPS_Model` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_details`
--

INSERT INTO `lab_details` (`Room_No`, `Lab_Name`, `Floor`, `No_Of_PCs`, `PC_Model`, `Projector_Model`, `UPS_Model`) VALUES
('A105', 'Introduction to Electronics Lab', 'GF', 0, 'None', 'None', 'GES502R212120B0'),
('A201', 'Microwave and Radar Lab', 'FF', 0, 'None', 'None', 'GES502R212120B0'),
('A302', 'Optical Fibre Communication Lab', 'SF', 2, 'HP V192', 'None', 'GES502R212120B0'),
('A305', 'Advanced Microcontroller Lab', 'SF', 0, 'None', 'None', 'GES502R212120B0'),
('A309', 'Power electronics', 'SF', 0, 'None', 'None', 'GES502R212120B0'),
('A311', 'Analog and Digital Electronics Lab', 'SF', 1, 'HP V192', 'None', 'GES502R212120B0'),
('A312', 'Digital Electronics and Design Lab', 'SF', 0, 'None', 'None', 'GES502R212120B0'),
('A319', 'Wireless Communication Lab', 'SF', 19, 'HP V192', 'SUVIRA', 'GES502R212120B0'),
('A320', 'VLSI Lab', 'SF', 20, 'HP', 'None', 'GES502R212120B0'),
('A403', 'Digital Communication Lab', 'TF', 0, 'None', 'None', 'GES502R212120B0');

-- --------------------------------------------------------

--
-- Table structure for table `lab_incharge`
--

CREATE TABLE `lab_incharge` (
  `Room_No` varchar(10) NOT NULL,
  `Lab_Name` char(50) NOT NULL,
  `Lab_Incharge` char(50) NOT NULL,
  `Lab_Attendant` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_incharge`
--

INSERT INTO `lab_incharge` (`Room_No`, `Lab_Name`, `Lab_Incharge`, `Lab_Attendant`) VALUES
('A105', 'Introduction to Electronics Lab', 'Dr. Dinesh Sharma', 'Mrs. Romica'),
('A201', 'Microwave and Radar Lab', 'None', 'None'),
('A302', 'Optical Fibre Communication Lab', 'Dr. Shilpa Jindal', 'Mr. Sumit'),
('A305', 'Advanced Microcontroller Lab', 'Dr. Anil Kumar Rose', 'Mrs. Vandana'),
('A309', 'Power electronics', 'Dr Sarita Sharma', 'Mrs. Mukesh'),
('A311', 'Analog and Digital Electronics Lab', 'Dr. Irfan Ahmad Khan', 'Mr. Yuvraj'),
('A312', 'Digital Electronics and Design Lab', 'Dr. Parwinder Kaur', 'Mrs. Mukesh'),
('A319', 'Wireless Communication Lab', 'Dr. Bhaskar Gupta', 'Mrs. Vandana'),
('A320', 'VLSI Lab', 'Dr. K.G. Sharma', 'Mrs. Mukesh'),
('A403', 'Digital Communication Lab', 'Dr. Parwinder Kaur', 'Mrs. Vandana');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Password` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
