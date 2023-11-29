-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 04:52 PM
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
(108, 'SCHLR77987', 'GWA', 'file'),
(109, 'SCHLR77987', 'CEDULA', 'file'),
(110, 'SCHLR53553', 'High School Report Card', 'file'),
(111, 'SCHLR53553', 'The latest Income Tax Return (ITR) and a Bureau of Internal Revenue (BIR) Form 2316', 'file'),
(112, 'SCHLR53553', 'A Certificate of Tax Exemption from the BIR for unemployed parents/guardians.', 'file'),
(113, 'SCHLR53553', 'Certificate of Indigence from the Barangay.', 'file'),
(114, 'SCHLR53553', 'For the children of OFW and Seafarers,the latest copy of the contract or proof of income.', 'file'),
(115, 'SCHLR75653', 'Duly accomplished Application Form', 'file'),
(116, 'SCHLR75653', 'Properly and completely filled-out  Self Assessment Guide of your chosen qualification', 'file'),
(117, 'SCHLR75653', 'Three (3) pieces of colored and passport size picture,white background,with collar and with name pri', 'file'),
(118, 'SCHLR94237', 'Certification of Single Parent', 'file'),
(119, 'SCHLR94237', 'DSWD Certificate', 'file');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merit`
--

CREATE TABLE `tbl_merit` (
  `meritID` int(11) NOT NULL,
  `scholarshipID` varchar(255) NOT NULL,
  `scholarsID` varchar(255) NOT NULL,
  `gwa` varchar(255) NOT NULL,
  `grade_range` varchar(255) NOT NULL,
  `honorlist` varchar(255) NOT NULL,
  `uploads_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_needs`
--

CREATE TABLE `tbl_needs` (
  `needsID` int(11) NOT NULL,
  `scholarshipID` varchar(100) NOT NULL,
  `scholarsID` varchar(100) NOT NULL,
  `selectionID` varchar(100) NOT NULL,
  `income` varchar(100) NOT NULL,
  `uploads` varchar(255) NOT NULL,
  `usersID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('ORG01565', '020006122', 'UniFAST', 'UniFAST Region XII', 'unifastregionxii@gmail.com', 'PROOF28435', 1, ''),
('ORG33879', '020003086', 'Sample Organization', 'Sample Company', 'samplecomp@gmail.com', 'PROOF30238', 1, ''),
('ORG48332', '020001670', 'DEMO', 'DEMO', 'demo@gmail.com', 'PROOF17763', 1, ''),
('ORG55911', '020009370', 'RD Organization', 'RD Company', 'rdcompany@gmail.com', 'PROOF59994', 1, ''),
('ORG86360', '020003399', 'CHED Organization', 'CHED Company', 'chedcomp@gmail.com', 'PROOF41767', 1, '');

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
('PROOF09741', '020005724', '[\"02_Activity_1.docx\",\"04Laboratory_Exercise1-Galvez.docx\"]'),
('PROOF17763', '020001670', '[\"GALVEZ_04TP1.docx\",\"GALVEZ_04TP1.pdf\",\"Galvez_HanceHenley_Lab3.docx\",\"TES.png\"]'),
('PROOF28435', '020006122', '[\"TES_Sharing_Agreement_2023-2024-onwards.docx\",\"RA10687.pdf\"]'),
('PROOF30238', '020003086', '[\"erdsawdaw.jpg\",\"ERD.drawio\"]'),
('PROOF36186', '020005724', '[\"02_Activity_1.docx\",\"04Laboratory_Exercise1-Galvez.docx\"]'),
('PROOF41767', '020003399', '[\"CHED.jpg\",\"ched.png\",\"DOS.png\"]'),
('PROOF49766', '020003897', '[\"02_Activity_1.docx\",\"04Laboratory_Exercise1-Galvez.docx\"]'),
('PROOF59994', '020009370', '[\"02_Activity_1.docx\",\"04Laboratory_Exercise1-Galvez.docx\",\"04Laboratory_Exercise1-Galvez.pdf\"]');

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
('SCHOLAR51158', 'SCHLR75653', '020007603', 1, 115, '2023-11-15 05:52:47'),
('SCHOLAR72216', 'SCHLR77987', '020007603', 3, 116, '2023-11-20 19:58:17');

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
  `qualification` text NOT NULL,
  `benefit` text NOT NULL,
  `proglvlid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholarship`
--

INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `scholarshipname`, `description`, `req`, `applicant_limit`, `status`, `queue`, `stype_id`, `date`, `deadline`, `qualification`, `benefit`, `proglvlid`) VALUES
('SCHLR53553', 'ORG01565', 'UniFAST Tulong Dunog', 'The CHED Tulong Dunong Scholarship is a program provided by the Philippines Commission on Higher Education (CHED). Its goal is to provide financial assistance to qualified and deserving students pursuing a college degree.', '<p>All requirements should be in a pdf form with file name format:</p><p>LastName_<i>FirstName</i>_DocumentName</p>', '100', 1, 65, 4, '2023-11-15 01:16:20', '2023-12-15', '<ul><li>Must be a Filipino citizen;</li><li>Parents/guardians combined annual gross income shall not exceed Four Hundred Thousand Pesos (Php 400,000).</li><li>Applicants must be High School graduates or College students with earned units in CHED recognized degree/programs of Private Higher Education Institutions (Private HEIs), SUCs or LUCs with COPC having at least a passing General Weighted Average (GWA), or a passer of Alternative Learning System (ALS) or a passer of the Philippine Educational Placement Test (PEPT).</li><li>The student is not a transferee from another course or college</li><li>Not a beneficiary of other scholarship grants<br></li></ul>', '<p>Grantees or student grantees are eligible for a grant of fifteen thousand pesos – Php 15,000 per academic year to help with the expenses of their tertiary education.</p>', '1'),
('SCHLR75653', 'ORG01565', 'UniFAST Free Tech-Voc Education and Training', 'In view of the need to provide equitable access and provision of TESD programs to the growing TVET clients, TESDA continues to undertake direct training provisions. There are four training modalities school-based, center-based, enterprised-based and community-based.', '<p>Upload all requirements through pdf form with document name:</p><p>LastName_<i>FirstName</i>_DocumentName</p><p>For image file:</p><p>LastName_<i>FirstName</i>_PassportImage</p>', '50', 1, 66, 2, '2023-11-15 01:27:48', '2023-11-30', '<p>The assistance is available to any person aged at least 15 years old, who is not in school, not in training or is unemployed. Employed workers who intend to develop and expand their current skills and training may also avail of the assistance.</p>', '<p><strong>free training and competency assessment, starter toolkits and training allowance of sixty pesos (Php 60.00) per day for the duration of the training</strong>.</p>', '3'),
('SCHLR77987', 'ORG55911', 'EduKAR GenSan Scholarship Program', 'Edukasyon Alang sa mga Kabus nga Residente sa GenSan', '<p>Duly accomplished Application Form;<br>b. Form 138 (photocopy signed by the Principal), or for the existing college student, certificate of grades for the last two semesters attended; or recent senior highschool grades - certified true copy of grade 12 report card (Recent Grading Period with 80% GWA and ABOVE)<br>c. Certificate of Good Moral Character from the last school attended.<br>d. Certificate of Indigency issued by the City Social Welfare and Development Office (CSWDO).<br>e. Barangay Certification as to the applicant\'s residency.<br>f. Voter’s ID/Certificate or for those who are not of legal age, voter’s ID/Certificate of any of the parents, for those applicants who have just turned (18) year old but unregistered, any of the parent or legal guardian established by the CSWDO.<br>g. Solo parents, PWD’s and Indigenous People are required to submit the Certificate issued by the appropriate agency.<br>h. Picture of actual street and residence, and residence sketch with landmarks.<br>i. PSA Certified birth certificate (Photocopy).<br>j. Community tax certificate (CEDULA)<br>k. 1 P.C. Passport size picture in white background written name and signature (LAST NAME, FIRST NAME, MIDDLE NAME)</p>', '100', 1, 64, 1, '2023-11-14 14:43:10', '2024-02-28', '<p>a. Must be a Filipino citizen<br>b. Must be a resident of General Santos City for at least (3) years prior to the start of School year.<br>c. Must be a registered voter of General Santos City, for those who are not of legal age, any one of the parents/guardians must be a registered voter of this city.<br>d. Combine family income must not exceed the poverty threshold of NEDA assessment and subject to the assessment of the City Socail Welfare and Development Office social worker in the respective barangay.<br>e. Must possess a good moral character.<br>f. Must not be a recipient or grantee of any scholarship or any educational financial assistance.<br>g. Must not be a graduate of any degree; except, however, for a college graduate who is unemployed for at least one year and wants to pursue a technical vocational course.</p>', '<p>a. <strong>P20,000.00</strong> Tuition Fee per Semester;<br>b. <strong>P2,000.00</strong> Stipend/Allowance per Month.</p>', '1'),
('SCHLR94237', 'ORG33879', 'Sample Scholarship', 'Sample Description', '<p>Please submit in a following format</p><p><strong>LastnameFirstnameInitial_FILENAME</strong></p><p>example:<br>GalvezHH_DSWD Certificate<br><br>&nbsp;</p>', '10', 1, 67, 3, '2023-11-15 06:38:41', '2024-12-02', '<p>Sample Qualification</p>', '<p>Sample Benefits</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills`
--

CREATE TABLE `tbl_skills` (
  `skillsID` int(11) NOT NULL,
  `scholarshipID` varchar(100) NOT NULL,
  `scholarsID` varchar(100) NOT NULL,
  `skilltypeID` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `music` varchar(100) NOT NULL,
  `techvoc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(263, 'uploads/LIST OF KABUANG.txt', 'SCHLR75653', '020007603'),
(264, 'uploads/LIST OF KABUANG.txt', 'SCHLR75653', '020007603'),
(265, 'uploads/LIST OF KABUANG.txt', 'SCHLR75653', '020007603'),
(266, 'uploads/403706611_122131822538035552_8156271739914434189_n.jpg', 'SCHLR77987', '020007603'),
(267, 'uploads/403706611_122131822538035552_8156271739914434189_n.jpg', 'SCHLR77987', '020007603');

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
  `profpic` varchar(255) NOT NULL,
  `orgname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`, `contact`, `address`, `username`, `password`, `status`, `profpic`, `orgname`) VALUES
('000000000', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', NULL, NULL, 'Admin', 'admin123', '1', '', ''),
('021000022', 'Hance Henley', 'Sabarita', 'Galvez', '2001-02-19', 'Male', 'hancegalvez@gmail.com', '09913988949', 'Barangay Labangal Zone 1 KPS General Santos City', 'hance', '12345', '1', 'ew', ''),
('021002643', 'Maxine', 'Sabarita', 'Galvez', '2008-01-23', 'Female', 'galvezhance@gmail.com', '09913988949', 'Purok Magsaysay A Barangay Labangal Zone 1 KPS General Santos City', 'maxine', '12345', '1', '', ''),
('021003048', 'Sample ', '', 'Sample', '', 'Female', 'sample@gmail.com', '', '', 'sample', 'Bartsimpson', '1', '1', 'Sample Organization'),
('021003143', 'Julie', '', 'Fernandez', '', 'Female', 'juliefernandez@gmail.com', '', '', 'julieorg', 'Bartsimpson123', '1', '1', 'Julie Organization'),
('021004911', 'Ronnel', '', 'Rivera', '', 'Male', 'ronnelrivera@gmail.com', '', '', 'rrivera', 'Bartsimpson123', '1', '1', 'RD Organization'),
('021005422', 'Nelia', '', 'Alibi ', '', 'Female', 'unifastregionxii@gmail.com', '', '', 'UnifastRegionXII', 'Region_12', '1', '1', 'UNIFAST Region XII'),
('021005544', 'Erika Herriet', '', 'Vicencio', '2001-04-20', 'Female', 'erikaherriet11@gmail.com', '09973181330', 'Capareda St., Brgy. Lagao', 'Erika_Herriet', 'Erika_0420', '1', '', ''),
('021005600', 'DEMO', '', 'DEMO', '', 'Male', 'demo@gmail.com', '', '', 'demo', 'Bartsimpson123', '1', '1', 'DEMO ORG'),
('021008965', 'krezzel', '', 'sapyay', '', 'Female', 'henleyhance28@gmail.com', '', '', 'krezzelorg', 'Bartsimpson', '1', '1', 'krezzel organization'),
('021009138', 'Krezzel Anne', '', 'Alonzo', '2001-07-30', 'Female', 'krezzelalonzo@gmail.com', '09913988949', 'Barangay Lagao Zone 4 Block 4 General Santos City', 'krezzel', 'Bartsimpson', '0', '', '');

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
  `status` int(11) NOT NULL,
  `is_archived` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userinfoID`, `userlvlID`, `status`, `is_archived`) VALUES
('000000000', '000000000', 1, 1, ''),
('020000119', '021008717', 3, 1, ''),
('020001361', '021007971', 2, 1, ''),
('020001435', '021002276', 3, 1, ''),
('020001607', '021009173', 3, 1, ''),
('020001670', '021005600', 2, 2, ''),
('020001861', '021002643', 3, 1, ''),
('020002009', '021005941', 3, 1, ''),
('020002124', '021009138', 3, 1, ''),
('020003086', '021003048', 2, 3, ''),
('020003322', '021006697', 3, 1, ''),
('020003399', '021003143', 2, 3, '0'),
('020003449', '021009904', 3, 1, ''),
('020004335', '021001847', 2, 1, ''),
('020005724', '021008965', 2, 0, ''),
('020006114', '021005544', 3, 1, ''),
('020006118', '021004867', 3, 1, ''),
('020006122', '021005422', 2, 3, ''),
('020007361', '021002509', 3, 1, ''),
('020007378', '021001199', 3, 1, ''),
('020007603', '021000022', 3, 1, ''),
('020007949', '021005812', 3, 1, ''),
('020009370', '021004911', 2, 3, '0'),
('020009473', '021006729', 3, 1, '');

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
-- Indexes for table `tbl_merit`
--
ALTER TABLE `tbl_merit`
  ADD PRIMARY KEY (`meritID`);

--
-- Indexes for table `tbl_needs`
--
ALTER TABLE `tbl_needs`
  ADD PRIMARY KEY (`needsID`);

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
-- Indexes for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  ADD PRIMARY KEY (`skillsID`);

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
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tbl_merit`
--
ALTER TABLE `tbl_merit`
  MODIFY `meritID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_needs`
--
ALTER TABLE `tbl_needs`
  MODIFY `needsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_programlvl`
--
ALTER TABLE `tbl_programlvl`
  MODIFY `programlvl_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_scholars`
--
ALTER TABLE `tbl_scholars`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  MODIFY `skillsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stype`
--
ALTER TABLE `tbl_stype`
  MODIFY `stype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `uploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

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
