-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 06:50 PM
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
(9, '020009306', 'SCHLR65174', '[\"4 User Levels.docx\",\"GALVEZ.docx\",\"GALVEZ_04eLMSActivity1.docx\",\"GALVEZ_09Activity1.docx\",\"GALVEZ_09Quiz1.docx\",\"GALVEZ_09TaskPerformance1.docx\",\"SURVEY FORM.docx\"]', 0),
(10, '020009306', 'SCHLR40747', '[\"RobloxScreenShot20230414_182305181.png\",\"RobloxScreenShot20230414_184719406.png\",\"RobloxScreenShot20230415_203032615.png\"]', 0);

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
('ORG27019', '020003459', 'Sample', 'Sample', 'codexphilippines@gmail.com', 'PROOF60968', 1),
('ORG27020\r\n', '020003055', 'Carlo', 'Carlo Organization', 'carlo@gmail.com', 'carlo@gmail.com', 1);

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
('SCHOLAR14620', 'SCHLR40747', '020004801', 1, 24),
('SCHOLAR16344', 'SCHLR27329', '020000507', 1, 27),
('SCHOLAR30212', 'SCHLR21061', '020009306', 1, 23),
('SCHOLAR33362', 'SCHLR27329', '020009306', 1, 20),
('SCHOLAR56222', 'SCHLR40747', '020009306', 3, 22),
('SCHOLAR62171', 'SCHLR21061', '020000507', 1, 26),
('SCHOLAR75096', 'SCHLR40747', '020000507', 1, 25),
('SCHOLAR98547', 'SCHLR65174', '020009306', 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholarship`
--

CREATE TABLE `tbl_scholarship` (
  `scholarshipID` varchar(100) NOT NULL,
  `orgID` varchar(100) DEFAULT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `req` text NOT NULL,
  `applicant_limit` text NOT NULL,
  `status` int(11) NOT NULL,
  `queue` int(11) NOT NULL,
  `stype_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholarship`
--

INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `name`, `description`, `req`, `applicant_limit`, `status`, `queue`, `stype_id`) VALUES
('SCHLR21061', 'ORG27019', 'Sample', 'Sample', '<p><strong>Sample</strong></p><ul><li>Sample</li><li>Sample</li><li>Sample</li><li>Sample</li><li>Sample</li></ul>', '20', 1, 18, 3),
('SCHLR27329', 'ORG27019', 'sample 2', 'sample 2', '<h2>Sample&nbsp;</h2><ol><li>Sample&nbsp;</li><li>Sample</li><li>Sample</li><li>Sample</li></ol><blockquote><p>Please be guided for the requirements, ready carefully.</p><p><code>The deadline will be on June 20, 2023</code></p></blockquote><p><a href=\"sample.com\">Our Website</a></p>', '20', 1, 19, 2),
('SCHLR40747', 'ORG09021', 'EDUKAR Scholarship', 'Merit-Based Scholarship', '<ul><li>Barangay Clearance</li><li>GWA&nbsp;</li><li>Good Morale</li></ul>', '200', 1, 21, 1),
('SCHLR65174', 'ORG27020\r\n', 'Carlo Scholarship', 'Para sa bata', '<ul><li>NSO</li><li>BIRTH CERTIFICATE</li><li><a href=\"https://Facebook.com\">Facebook</a></li></ul>', '50', 1, 20, 4);

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
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`, `contact`, `address`, `username`, `password`, `status`) VALUES
('000000000', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', NULL, NULL, 'Admin', 'admin123', '1'),
('021001144', 'Jhon Dell', 'Secret', 'Aristales', '2001-12-15', 'Male', 'aristalesjhondell@gmail.com', '09674197097', 'Labangal, General Santos City', 'zeth', 'zeth', '1'),
('021006273', 'Erika Herriet', 'Ladesma', 'Vicencio', '2001-04-21', 'Female', 'erikavicencio@gmail.com', NULL, NULL, 'erika', '12345', '1'),
('021006900', 'Carlo', 'Bulala', 'Lingat', '2010-07-13', 'Male', 'carlo@gmail.com', NULL, NULL, 'carlo', '12345', '1'),
('021006937', 'Hance Henley', 'Sabarita', 'Galvez', '2001-02-19', 'Male', 'galvezhance@gmail.com', '09674197097', 'Labangal, General Santos City', 'hance', '12345', '1');

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
('020000507', '021001144', 3, 1),
('020003055', '021006900', 2, 3),
('020003911', '021005224', 3, 1),
('020004801', '021006273', 3, 1),
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
  ADD UNIQUE KEY `queue` (`queue`),
  ADD KEY `fk_stype_id` (`stype_id`),
  ADD KEY `fk_orgID` (`orgID`);

--
-- Indexes for table `tbl_stype`
--
ALTER TABLE `tbl_stype`
  ADD PRIMARY KEY (`stype_id`);

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
  MODIFY `appreqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_scholars`
--
ALTER TABLE `tbl_scholars`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_stype`
--
ALTER TABLE `tbl_stype`
  MODIFY `stype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `fk_stype_id` FOREIGN KEY (`stype_id`) REFERENCES `tbl_stype` (`stype_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
