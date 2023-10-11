-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 08:43 PM
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
-- Database: `scholardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant_req`
--

CREATE TABLE `tbl_applicant_req` (
  `appreqID` int(11) NOT NULL,
  `userid` text NOT NULL,
  `scolarshipID` text NOT NULL,
  `reqs` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_applicant_req`
--

INSERT INTO `tbl_applicant_req` (`appreqID`, `userid`, `scolarshipID`, `reqs`, `status`) VALUES
(8, '020003911', 'SCHLR65174', '[\"4 User Levels.docx\",\"GALVEZ.docx\",\"GALVEZ_04eLMSActivity1.docx\",\"GALVEZ_09Activity1.docx\",\"GALVEZ_09Quiz1.docx\",\"GALVEZ_09TaskPerformance1.docx\",\"SURVEY FORM.docx\"]', 0),
(9, '020009306', 'SCHLR65174', '[\"4 User Levels.docx\",\"GALVEZ.docx\",\"GALVEZ_04eLMSActivity1.docx\",\"GALVEZ_09Activity1.docx\",\"GALVEZ_09Quiz1.docx\",\"GALVEZ_09TaskPerformance1.docx\",\"SURVEY FORM.docx\"]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE `tbl_organization` (
  `orgID` varchar(100) NOT NULL,
  `userID` text NOT NULL,
  `name` text NOT NULL,
  `company` text NOT NULL,
  `email` text NOT NULL,
  `proofsID` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`orgID`, `userID`, `name`, `company`, `email`, `proofsID`, `status`) VALUES
('ORG09021', '020003055', 'Edukar', 'RD Company', 'danyoumaratas@gmail.com', 'PROOF59822', 1),
('ORG27019', '020003459', 'Sample', 'Sample', 'codexphilippines@gmail.com', 'PROOF60968', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofs`
--

CREATE TABLE `tbl_proofs` (
  `proofsID` varchar(100) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `imageLoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholars`
--

CREATE TABLE `tbl_scholars` (
  `scholarsID` varchar(100) NOT NULL,
  `scholarshipID` text NOT NULL,
  `userid` text NOT NULL,
  `status` int(11) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholars`
--

INSERT INTO `tbl_scholars` (`scholarsID`, `scholarshipID`, `userid`, `status`, `queue`) VALUES
('SCHOLAR33362', 'SCHLR27329', '020009306', 1, 20),
('SCHOLAR98547', 'SCHLR65174', '020009306', 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholarship`
--

CREATE TABLE `tbl_scholarship` (
  `scholarshipID` varchar(100) NOT NULL,
  `orgID` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `req` text NOT NULL,
  `applicant_limit` text NOT NULL,
  `status` int(11) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholarship`
--

INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `name`, `description`, `req`, `applicant_limit`, `status`, `queue`) VALUES
('SCHLR21061', '020003055', 'Sample', 'Sample', '<p><strong>Sample</strong></p><ul><li>Sample</li><li>Sample</li><li>Sample</li><li>Sample</li><li>Sample</li></ul>', '20', 1, 18),
('SCHLR27329', '020003055', 'sample 2', 'sample 2', '<h2>Sample&nbsp;</h2><ol><li>Sample&nbsp;</li><li>Sample</li><li>Sample</li><li>Sample</li></ol><blockquote><p>Please be guided for the requirements, ready carefully.</p><p><code>The deadline will be on June 20, 2023</code></p></blockquote><p><a href=\"sample.com\">Our Website</a></p>', '20', 1, 19),
('SCHLR65174', '020003055', 'Carlo Scholarship', 'Para sa bata', '<ul><li>NSO</li><li>BIRTH CERTIFICATE</li><li><a href=\"https://Facebook.com\">Facebook</a></li></ul>', '50', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinformation`
--

CREATE TABLE `tbl_userinformation` (
  `userinfoID` varchar(100) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `birthdate` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`, `username`, `password`, `status`) VALUES
('000000000', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'admin123', '1'),
('021006900', 'Carlo', 'Bulala', 'Lingat', '2010-07-13', 'Male', 'carlo@gmail.com', 'carlo', '12345', '1'),
('021006937', 'Hance Henley', 'Sabarita', 'Galvez', '2001-02-19', 'Male', 'galvezhance@gmail.com', 'hance', '12345', '1'),
('021007246', 'sas', 'sas', 'sas', '2023-06-21', 'Male', 'sa@gmail.com', 'carlo123', '12345', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlevel`
--

CREATE TABLE `tbl_userlevel` (
  `userlvlID` int(11) NOT NULL,
  `userleveldesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userlevel`
--

INSERT INTO `tbl_userlevel` (`userlvlID`, `userleveldesc`) VALUES
(1, 'Super Admin'),
(2, 'Organization'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` varchar(100) NOT NULL,
  `userinfoID` text NOT NULL,
  `userlvlID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userinfoID`, `userlvlID`, `status`) VALUES
('000000000', '000000000', 1, 1),
('020003055', '021006900', 2, 3),
('020003911', '021005224', 3, 1),
('020006948', '021007246', 3, 1),
('020009306', '021006937', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicant_req`
--
ALTER TABLE `tbl_applicant_req`
  ADD PRIMARY KEY (`appreqID`);

--
-- Indexes for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  ADD PRIMARY KEY (`orgID`);

--
-- Indexes for table `tbl_proofs`
--
ALTER TABLE `tbl_proofs`
  ADD PRIMARY KEY (`proofsID`);

--
-- Indexes for table `tbl_scholars`
--
ALTER TABLE `tbl_scholars`
  ADD PRIMARY KEY (`scholarsID`),
  ADD UNIQUE KEY `queue` (`queue`);

--
-- Indexes for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  ADD PRIMARY KEY (`scholarshipID`),
  ADD UNIQUE KEY `queue` (`queue`);

--
-- Indexes for table `tbl_userinformation`
--
ALTER TABLE `tbl_userinformation`
  ADD PRIMARY KEY (`userinfoID`);

--
-- Indexes for table `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  ADD PRIMARY KEY (`userlvlID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicant_req`
--
ALTER TABLE `tbl_applicant_req`
  MODIFY `appreqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_scholars`
--
ALTER TABLE `tbl_scholars`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  MODIFY `userlvlID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
