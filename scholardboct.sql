-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 10:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholardboct`
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
(10, '020009306', 'SCHLR40747', '[\"RobloxScreenShot20230414_182305181.png\",\"RobloxScreenShot20230414_184719406.png\",\"RobloxScreenShot20230415_203032615.png\"]', 0),
(11, '020001121', 'SCHLR94267', '[\"Peaches (Neko Atsume) by GaryMotherPuckingOak on DeviantArt.jpg\"]', 0),
(12, '020001121', 'SCHLR83748', '[\"Galvez, Hance Henley, 02000224297_ID.jpg\"]', 0);

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
('ORG09021', '020003055', 'Edukar', 'RD Company', 'hance@gmail.com', 'PROOF59822', 1, ''),
('ORG10784', '020001323', 'Gellux Organization', 'Gellux Company', 'gelluxcomp@gmail.com', 'PROOF61495', 1, ''),
('ORG10858', '020003900', 'Ched ', 'Ched Comp', 'chedcomp@gmail.com', 'PROOF08999', 1, ''),
('ORG27019', '020003459', 'Sample', 'Sample', 'codexphilippines@gmail.com', 'PROOF60968', 1, ''),
('ORG27020\r\n', '020003055', 'Carlo', 'Carlo Organization', 'carlo@gmail.com', 'carlo@gmail.com', 1, ''),
('ORG27471', '020006353', 'RD Organization', 'RD Company', 'rdgensan@gmail.com', 'PROOF52378', 1, ''),
('ORG80742', '020003938', 'Holy Trinity College', 'HTC Company', 'htcgensan@gmail.com', 'PROOF29251', 1, ''),
('ORG89929', '020004072', 'TESDA', 'The Technical Education and Skills Development Authority', 'tesdagensan@gmail.com', 'PROOF94358', 1, '');

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
('PROOF08999', '020003900', '[\"350690712_793514349076921_6152330653942095828_n.png\"]'),
('PROOF29251', '020003938', '[\"scholardb (2).sql\"]'),
('PROOF52378', '020006353', '[\"favicon.ico\",\"index.php\",\"scholardb.sql\"]'),
('PROOF61495', '020001323', '[\"Template_3(2).docx\"]'),
('PROOF94358', '020004072', '[\"pages-blank.html\",\"pages-contact.html\",\"pages-error-404.html\",\"pages-faq.html\"]');

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
('SCHOLAR33080', 'SCHLR94493', '020001121', 2, 30),
('SCHOLAR34707', 'SCHLR94493', '020003047', 1, 32),
('SCHOLAR48174', 'SCHLR83748', '020001121', 3, 31),
('SCHOLAR61362', 'SCHLR94267', '020001121', 3, 28);

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
  `stype_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholarship`
--

INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `scholarshipname`, `description`, `req`, `applicant_limit`, `status`, `queue`, `stype_id`) VALUES
('SCHLR83748', 'ORG10784', 'Gellux Scholarship', 'Scholarship for everyone and everything', '<p>Please attach 2x2 Picture</p>', '50', 1, 29, 1),
('SCHLR94267', 'ORG27471', 'EDUKAR', 'Edukar Scholarship is sponsored by Ronel Rivera which is continued by Lorelie Paquiao.', '<p>REQUIREMENTS:</p><ul><li>Duly accomplished Application Form, clearly indicating the type of Grant they are applying for;</li><li>Form 138 (Certified True Copy), or, for existing college sudent, certificate of grades for the last &nbsp;two(2) semesters attended;</li><li>Certificate of Indigency issued by the CSWDO</li><li>Voter\'s ID/Certificate; or, for those who are not of legal age, voter\'s ID/Certificate of any one of the parents; or, in their absence, of their guardian\'s; provided, that legal guardianship must be strictly established by the CSWDO based on the national guidelines on permanency placement of children; provided further, that the applicants register and produce their own voter\'s certificate within the current year;</li><li>Solo parents, PWD\'s and IPs are required to submit a Certificate issued by the appropriate agency; Applicants for TechVoc Scholarships who are college graduates must submit an Employment Certificate from their previous employer or an affidavit of unemployment.</li></ul><p>&nbsp;</p><p><strong>NOTE: IN ATTACHING FILES, PDF and JPEG FILES ONLY. FILE NAME MUST BE- NameOfDocument_lastname.pdf</strong></p><p>SAMPLE: <strong>MemorandumOfAgreement_Galvez.pdf</strong></p>', '200', 1, 26, 1),
('SCHLR94493', 'ORG27471', 'EDUKAR AKLAT GSC', 'Alay sa Kabataang Heneral Lahat Alaga at TalinoFor more information you may visit; a. Facebook: AKLAT - GSC b. Email: cmoaklat@gmail.com c. Contact Number: +63 925 700 1937 || (083) 552 - 6791 to 93 Benefits; a. P20,000.00 Tuition Fee per Semester; b.  P2,000.00 Stipend/Allowance per Month.', '<p>Applicants must possess the following qualification:</p><p>a. Must be a Filipino citizen.</p><p>b. Must be a resident of General Santos City for at least (3) years prior to the start of School year.</p><p>c. Must be a registered voter of General Santos City, for those who are not of legal age, any one of the parents/guardians must be a registered voter of this city.</p><p>d. Combine family income must not exceed the poverty threshold of NEDA assessment and subject to the assessment of the City Social Welfare and Development Office social worker in the respective barangay.</p><p>e. Must possess a good moral character.</p><p>f. Must not be a recipient or grantee of any scholarship or any educational financial assistance.</p><p>g. Must not be a graduate of any degree; except however, for a college graduate who is unemployed for at least one year and wants to pursue a technical vocational course.</p><p>Documentary Requirements:</p><p>a. Duly accomplished Application Form;</p><p>b. Form 138 (photocopy signed by the principal), or for existing college student, certificate of grades for the last two semesters attended; or recent senior high school grades - certified true copy of grade 12 report cards (Recent Grading Period with 80% GWA and ABOVE)</p><p>c. Certificate of Good Moral Character from the last school attended.</p><p>d. Certificate of Indigency issued by the City Social Welfare and Development Office (CSWDO).</p><p>e. Barangay Certification as to the applicant\'s residency.</p><p>f. Voter’s ID/Certificate or for those who are not of legal age, voter’s ID/Certificate of any of the parents, for those applicants who have just turned (18) year old but unregistered, any of the parent of legal guardian established by the CSWDO.</p><p>g. Solo parents, PWD’s and Indigenous People are required to submit Certificate issued by the appropriate agency.</p><p>h. Picture of actual street and residence, and residence sketch with landmarks.</p><p>i. PSA Certified birth certificate (Photocopy).</p><p>j. Community tax certificate (CEDULA)</p><p>k. 1 P.C. Passport size picture in white background written name and signature (LAST NAME, FIRST NAME, MIDDLE NAME)</p><p>For more information you may visit;</p><p>a. Facebook: <a href=\"https://www.facebook.com/CMOAKLAT?__cft__%5b0%5d=AZVAH-b4wMHomLs1pF6ZqsTsHI_Zps-jzhV7jxWZUOnaDicEkrxyE_KTZC4JTJa4RWFIB-V6PIJcXaQUh4zavGDrO1pFQhMAkfiXg3IorDCToApc4YS1IGjvY6QQ5MkGjLVekhTg3lX1TyA-wG9sAiQywq840Oj3NU9epgUrb99u_Q&amp;__tn__=-%5dK-y-R\">AKLAT - GSC</a></p><p>b. Email: cmoaklat@gmail.com</p><p>c. Contact Number: +63 925 700 1937 || (083) 552 - 6791 to 93</p>', '50', 1, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentinfo`
--

CREATE TABLE `tbl_studentinfo` (
  `studentID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobilenum` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL
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
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`, `contact`, `address`, `username`, `password`, `status`) VALUES
('000000000', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', NULL, NULL, 'Admin', 'admin123', '1'),
('021000539', '', '', '', '', '', 'tesda@gmail.com', '09911123456', 'General Santos City National School of Arts and Trades', 'tesda', '12345', '1'),
('021001603', 'Erika', 'Herriet', 'Vicencio', '2001-10-10', 'Female', 'erikaherriet@gmail.com', '', '', 'erika', '12345', '1'),
('021002633', 'Hance Henley', 'Sabarita', 'Galvez', '2001-02-19', 'Male', 'galvezhance@gmail.com', '09502631666', 'Purok Magsaysay A Barangay Labangal Zone 1 KPS GSC', 'hance', '12345', '1'),
('021002819', 'Erika', 'Ledesma', 'Erika Org', '', 'Female', 'erikaherriet11@gmail.com', '', '', 'erikaorg', '12345', '1'),
('021003667', '', '', '', '', '', 'rrivera@gmail.com', '09359121920', 'General Santos City Hall of Justice', 'rrivera', '12345', '1'),
('021004278', 'ched', 'ched', 'ched', '2001-02-19', 'Male', 'ched@gmail.com', '', '', 'ched', '12345', '1'),
('021008236', 'Gelline', '', 'Velasco Organization', '', 'Female', 'gellinevelasco@gmail.com', '', '', 'gellux', '12345', '1'),
('021009520', '', '', '', '', '', 'holytrinity@gmail.com', '09412345678', 'Beside Holy Trinity College', 'goodholy', '12345', '1');

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
('020000467', '021002656', 2, 1),
('020000507', '021001144', 3, 1),
('020001121', '021002633', 3, 1),
('020001323', '021008236', 2, 3),
('020003047', '021001603', 3, 1),
('020003055', '021006900', 2, 3),
('020003900', '021004278', 2, 3),
('020003911', '021005224', 3, 1),
('020003938', '021009520', 2, 3),
('020004072', '021000539', 2, 3),
('020004801', '021006273', 3, 1),
('020005158', '021004811', 3, 1),
('020005818', '021002819', 0, 1),
('020006353', '021003667', 2, 3),
('020006423', '021008291', 2, 1),
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
-- Indexes for table `tbl_studentinfo`
--
ALTER TABLE `tbl_studentinfo`
  ADD PRIMARY KEY (`studentID`);

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
  MODIFY `appreqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_scholars`
--
ALTER TABLE `tbl_scholars`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_scholarship`
--
ALTER TABLE `tbl_scholarship`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_studentinfo`
--
ALTER TABLE `tbl_studentinfo`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT;

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
