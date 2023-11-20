-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2023 at 04:40 PM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u251836490_scholardb`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields`
--

CREATE TABLE `tbl_fields` (
  `fid` int(11) NOT NULL,
  `scholarshipID` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `field` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_fields`
--

INSERT INTO `tbl_fields` (`fid`, `scholarshipID`, `field`, `type`) VALUES
(69, 'SCHLR33074', 'GWA', 'file'),
(70, 'SCHLR33074', 'Birth Certificate', 'file');

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
  `status` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`orgID`, `userID`, `name`, `company`, `email`, `proofsID`, `status`, `profile`) VALUES
('ORG08549', '020007528', 'RD Organization', 'RD Company', 'rdcompany@gmail.com', 'PROOF65813', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programlvl`
--

CREATE TABLE `tbl_programlvl` (
  `programlvl_id` int(1) NOT NULL,
  `programlvl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_programlvl`
--

INSERT INTO `tbl_programlvl` (`programlvl_id`, `programlvl`) VALUES
(1, 'College'),
(2, 'High School'),
(3, 'Technical or Vocational');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofs`
--

CREATE TABLE `tbl_proofs` (
  `proofsID` varchar(100) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `imageLoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_proofs`
--

INSERT INTO `tbl_proofs` (`proofsID`, `userID`, `imageLoc`) VALUES
('PROOF65813', '020007528', '[\"02_Activity_1.docx\",\"04Laboratory_Exercise1-Galvez.docx\",\"GALEVZ_02_Activity_1.docx\"]');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholars`
--

CREATE TABLE `tbl_scholars` (
  `scholarsID` varchar(100) NOT NULL,
  `scholarshipID` text NOT NULL,
  `userid` text NOT NULL,
  `status` int(11) NOT NULL,
  `queue` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholars`
--

INSERT INTO `tbl_scholars` (`scholarsID`, `scholarshipID`, `userid`, `status`, `queue`, `date`) VALUES
('SCHOLAR85153', 'SCHLR33074', '020007603', 1, 98, '2023-11-13 16:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholarship`
--

CREATE TABLE `tbl_scholarship` (
  `scholarshipID` varchar(100) NOT NULL,
  `orgID` varchar(100) DEFAULT NULL,
  `scholarshipname` text NOT NULL,
  `description` text NOT NULL,
  `req` text NOT NULL,
  `applicant_limit` text NOT NULL,
  `status` int(11) NOT NULL,
  `queue` int(11) NOT NULL,
  `stype_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `deadline` date NOT NULL,
  `programlvl_id` int(11) DEFAULT NULL,
  `proglvlid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholarship`
--

INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `scholarshipname`, `description`, `req`, `applicant_limit`, `status`, `queue`, `stype_id`, `date`, `deadline`, `programlvl_id`, `proglvlid`) VALUES
('SCHLR33074', 'ORG08549', 'EduKAR GenSan Scholarship Program', 'Edukasyon Alang sa Kabus na Residente sa GenSan', '<p>BASTA DAGHAN</p>', '10', 1, 55, 1, '2023-11-13 16:08:30', '2024-11-12', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stype`
--

CREATE TABLE `tbl_stype` (
  `stype_id` int(11) NOT NULL,
  `stype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_stype`
--

INSERT INTO `tbl_stype` (`stype_id`, `stype`) VALUES
(1, 'Merit-Based'),
(2, 'Skills-Based'),
(3, 'Context-Based'),
(4, 'Needs-Based');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `uploadID` int(11) NOT NULL,
  `dest` varchar(100) NOT NULL,
  `sid` varchar(200) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`uploadID`, `dest`, `sid`, `userid`) VALUES
(229, 'uploads/BIRTH-CERT_FILE.txt', 'SCHLR33074', '020007603'),
(230, 'uploads/GWA_FILE.txt', 'SCHLR33074', '020007603');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinformation`
--

CREATE TABLE `tbl_userinformation` (
  `userinfoID` varchar(100) NOT NULL,
  `fname` text DEFAULT NULL,
  `mname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `birthdate` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `email` text NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `profpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`, `contact`, `address`, `username`, `password`, `status`, `profpic`) VALUES
('000000000', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', NULL, NULL, 'Admin', 'admin123', '1', ''),
('021000022', 'Hance Henley', 'Sabarita', 'Galvez', '2001-02-19', 'Male', 'hancegalvez@gmail.com', '09913988949', 'Barangay Labangal Zone 1 KPS General Santos City', 'hance', '12345', '1', ''),
('021002643', 'Maxine', 'Sabarita', 'Galvez', '2008-01-23', 'Female', 'galvezhance@gmail.com', '09913988949', 'Purok Magsaysay A Barangay Labangal Zone 1 KPS General Santos City', 'maxine', '12345', '1', ''),
('021005941', 'NTWbShzOeORSCedE', 'NTWbShzOeORSCedE', 'NTWbShzOeORSCedE', '1', 'Male', 'joycec2@yahoo.com', '1', 'xenyQRJBurFT 61108', 'NTWbShzOeORSCedE', 'HWTmMkJR3#', '0', ''),
('021006697', 'bxEtNLOJSzTacKMAN', 'bxEtNLOJSzTacKMAN', 'bxEtNLOJSzTacKMAN', '1', 'Male', 'bluesky836140@gmail.com', '', '', 'bxEtNLOJSzTacKMAN', 'f77p3nRW5@', '0', ''),
('021007609', 'Ronnel', '', 'RD Organization', '', 'Male', 'riveraronnel@gmail.com', '', '', 'rrivera', '12345', '1', '');

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
('020001861', '021002643', 3, 1),
('020002009', '021005941', 3, 1),
('020003322', '021006697', 3, 1),
('020003449', '021009904', 3, 1),
('020007528', '021007609', 2, 3),
('020007603', '021000022', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicant_req`
--
ALTER TABLE `tbl_applicant_req`
  ADD PRIMARY KEY (`appreqID`);

--
-- Indexes for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  ADD PRIMARY KEY (`orgID`);

--
-- Indexes for table `tbl_programlvl`
--
ALTER TABLE `tbl_programlvl`
  ADD PRIMARY KEY (`programlvl_id`);

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
  ADD UNIQUE KEY `queue` (`queue`),
  ADD KEY `fk_stype_id` (`stype_id`),
  ADD KEY `fk_orgID` (`orgID`);

--
-- Indexes for table `tbl_stype`
--
ALTER TABLE `tbl_stype`
  ADD PRIMARY KEY (`stype_id`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`uploadID`);

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
  MODIFY `appreqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_programlvl`
--
ALTER TABLE `tbl_programlvl`
  MODIFY `programlvl_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_scholars`
--
ALTER TABLE `tbl_scholars`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_stype`
--
ALTER TABLE `tbl_stype`
  MODIFY `stype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `uploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  MODIFY `userlvlID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  ADD CONSTRAINT `fk_orgID` FOREIGN KEY (`orgID`) REFERENCES `tbl_organization` (`orgID`),
  ADD CONSTRAINT `fk_programlvl` FOREIGN KEY (`programlvl_id`) REFERENCES `tbl_programlvl` (`programlvl_id`),
  ADD CONSTRAINT `fk_stype_id` FOREIGN KEY (`stype_id`) REFERENCES `tbl_stype` (`stype_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
