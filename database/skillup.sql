-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 06:59 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillup`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `attch_Id` int(50) NOT NULL,
  `FileName` varchar(40) NOT NULL,
  `date` varchar(23) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`attch_Id`, `FileName`, `date`) VALUES
(50, 'txt221017166603840733212.txt', '22-10-17'),
(51, 'txt221017166603843361350.txt', '22-10-17'),
(54, 'docx221017166603895765799.docx', '22-10-17'),
(56, 'docx221017166603940363532.docx', '22-10-17'),
(57, 'docx221017166603942159482.docx', '22-10-17'),
(58, 'pdf221018166606930652530.pdf', '22-10-18'),
(59, 'pdf221018166606984580622.pdf', '22-10-18'),
(60, 'pdf221018166607975351349.pdf', '22-10-18'),
(61, 'pdf221018166607982872275.pdf', '22-10-18'),
(62, 'pptx221018166608123812716.pptx', '22-10-18'),
(63, 'pdf221018166608156953510.pdf', '22-10-18'),
(64, 'pdf221018166608168695011.pdf', '22-10-18'),
(65, 'pdf221018166608179338315.pdf', '22-10-18'),
(66, 'pdf221018166608190582724.pdf', '22-10-18'),
(67, 'pptx221018166608195484302.pptx', '22-10-18'),
(68, 'docx221018166608226787403.docx', '22-10-18'),
(69, 'pdf221018166608338349478.pdf', '22-10-18'),
(70, 'pdf221018166609153836398.pdf', '22-10-18'),
(71, 'jpg221018166612661198673.jpg', '22-10-18'),
(72, 'jpg221018166612673385163.jpg', '22-10-18'),
(73, 'jpg221018166612697342245.jpg', '22-10-18'),
(74, 'jpg2210181666127084244.jpg', '22-10-18'),
(75, 'jpg221018166612715253201.jpg', '22-10-18'),
(76, 'docx221018166613012960053.docx', '22-10-18'),
(77, 'docx221018166613017439285.docx', '22-10-18'),
(78, 'php221018166613021768207.php', '22-10-18'),
(79, 'php221018166613031363660.php', '22-10-18'),
(80, 'pptx221019166613040794269.pptx', '22-10-19'),
(81, 'php221019166613064972348.php', '22-10-19'),
(82, 'docx221019166613071116324.docx', '22-10-19'),
(83, 'pdf221019166613097168921.pdf', '22-10-19'),
(84, 'pdf221019166613105162552.pdf', '22-10-19'),
(85, 'pdf221019166613133591767.pdf', '22-10-19'),
(86, 'docx221019166613146971662.docx', '22-10-19'),
(87, 'jpg221019166616515964282.jpg', '22-10-19'),
(88, 'jpg221019166616517928168.jpg', '22-10-19'),
(89, '0', '0'),
(90, 'jpg221019166617122214920.jpg', '22-10-19'),
(91, 'jpg221019166618140791440.jpg', '22-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `CONTID` int(50) NOT NULL,
  `FullNames` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telphone` varchar(16) NOT NULL,
  `Message` text NOT NULL,
  `Stutus` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CONTID`, `FullNames`, `Email`, `Telphone`, `Message`, `Stutus`) VALUES
(1, 'Kwizera Elisa', 'kwizeraelia@gmail.com', '+250787647168', 'Thank you for bra bra ', 0),
(2, 'Kwizera Elisa', 'kwizeraelissa369@gmail.com', '+250787647168', 'fqyeasuogiqilwabc x', 0),
(3, 'Elisa Kwizera', 'kwizeraelisa77@gmail.com', '+250787647168', 'why do you create this web site?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groupmembers`
--

CREATE TABLE IF NOT EXISTS `groupmembers` (
  `GroupId` int(50) NOT NULL,
  `memberId` int(30) NOT NULL,
  `post` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupmembers`
--

INSERT INTO `groupmembers` (`GroupId`, `memberId`, `post`) VALUES
(1, 3, 1),
(2, 3, 1),
(2, 18, 0),
(1, 18, 0),
(1, 18, 0),
(1, 18, 0),
(1, 18, 0),
(1, 18, 0),
(1, 18, 0),
(2, 3, 0),
(3, 3, 1),
(3, 16, 0),
(3, 18, 0),
(2, 16, 0),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `GroupId` int(50) NOT NULL,
  `GroupName` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `ownerId` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`GroupId`, `GroupName`, `Description`, `ownerId`) VALUES
(1, 'IT Level 6 GB', 'Group for level 6 Student in Information Techinology.\r\n  ', 3),
(2, 'Expart Group', 'this is for excharging knowlegdes]. \r\nThank you.', 3),
(3, 'consitraction group', 'This groupe is created for sharing documents and consitractive ideas\r\n', 3),
(4, 'ABATANESHWA', 'Amins group\r\n  ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `MessageId` int(50) NOT NULL,
  `SenderId` int(50) NOT NULL,
  `ReceiverId` int(50) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `DocId` int(50) NOT NULL,
  `Message` text NOT NULL,
  `stutus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modulecode`
--

CREATE TABLE IF NOT EXISTS `modulecode` (
  `Modulecode` int(50) NOT NULL,
  `ModuleTitle` varchar(49) NOT NULL,
  `credit` int(45) NOT NULL,
  `Learning_hours` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `PostId` int(50) NOT NULL,
  `UserId` int(50) NOT NULL,
  `DocDate` varchar(50) NOT NULL,
  `DocumentName` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `DocId` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostId`, `UserId`, `DocDate`, `DocumentName`, `Description`, `status`, `DocId`) VALUES
(25, 3, '22-10-17', 'Application Letter', 'doc', 'shared', 54),
(27, 3, '22-10-17', 'any one', 'doc', 'shared', 56),
(28, 3, '22-10-17', 'SSID', 'doc', 'nshare', 57),
(29, 16, '22-10-18', 'my document', 'doc', 'nshare', 58),
(30, 16, '22-10-18', 'Vaccination document', 'doc', 'nshare', 59),
(31, 3, '22-10-18', 'Covide certificertificate', 'doc', 'shared', 61),
(33, 3, '22-10-18', 'hello', 'description', 'shared', 65),
(34, 3, '22-10-18', 'SSID', 'descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescription\n  ', 'nshare', 67),
(35, 3, '22-10-18', 'Electronics', 'post.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocIdpost.DocId\r\n  ', 'shared', 68),
(36, 18, '22-10-18', 'Application Letter By JO jO', 'HEloo\r\ngulyiad;f;o;eldbc uobbl ll\r\n  ', 'shared', 69),
(37, 18, '22-10-18', 'GENDM 601 Notes', 'This is mathematics Works', 'shared', 70),
(38, 16, '22-10-18', '', 'Hello bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra brabra brabra brabra bra', '', 71),
(39, 16, '22-10-18', '', 'Hello bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra brabra brabra brabra bra', '', 72),
(40, 0, '22-10-18', '16', 'Hello bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra brabra brabra brabra bra', 'group', 73),
(41, 3, '22-10-18', '16', 'Hello bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra brabra brabra brabra bra', 'group', 74),
(42, 3, '22-10-18', '16', 'Hello bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra brabra brabra brabra bra', 'group', 75),
(43, 3, '22-10-18', '3', 'Hello  my freinds', 'group', 76),
(44, 1, '22-10-18', '3', 'Hello  my freinds', 'group', 77),
(45, 2, '22-10-18', '3', 'Hello  my freinds', 'group', 78),
(46, 1, '22-10-18', '3', 'Hello  my freinds', 'group', 79),
(47, 1, '22-10-19', '3', 'Elisa byanze pe', 'group', 80),
(48, 3, '22-10-19', '3', 'Elisa byanze pe', 'group', 81),
(49, 3, '22-10-19', '18', 'Hello  my freinds wapi', 'group', 82),
(50, 2, '22-10-19', '18', 'rukundo bravan', 'group', 83),
(52, 3, '22-10-19', '16', 'Hello  my freinds', 'group', 85),
(53, 3, '22-10-19', '16', 'doxc', 'group', 86),
(54, 1, '22-10-19', '18', 'BITEXT', 'group', 87),
(55, 1, '22-10-19', '18', 'NIBYIZA', 'group', 88),
(56, 1, '', '18', 'Hello', 'group', 0),
(57, 1, '', '18', 'NIBYIZA', 'group', 0),
(60, 1, '22-10-19', '18', 'NIBYIZA', 'group', 90),
(61, 4, '22-10-19', '3', 'woreerqatsgrsd', 'group', 91);

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE IF NOT EXISTS `replay` (
  `ReplayId` int(50) NOT NULL,
  `UserId` int(50) NOT NULL,
  `PostId` int(50) NOT NULL,
  `AttchId` int(50) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `view` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replay`
--

INSERT INTO `replay` (`ReplayId`, `UserId`, `PostId`, `AttchId`, `content`, `date`, `view`) VALUES
(35, 3, 61, 0, 'Hello bro', '2022/10/19 02:32:43pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `RId` int(50) NOT NULL,
  `UserId` int(50) NOT NULL,
  `Content` text NOT NULL,
  `AttachId` int(50) NOT NULL,
  `RDate` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RId`, `UserId`, `Content`, `AttachId`, `RDate`) VALUES
(1, 3, 'hello i want you to solve thi ploblem to me', 0, '22-08-14'),
(3, 3, 'srydfgiohljytrxtdyf', 34, '22-08-14'),
(4, 4, 'wasaze', 35, '22-08-14'),
(5, 4, 'wasaze', 36, '22-08-14'),
(6, 4, 'wasaze', 37, '22-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Genda` varchar(5) NOT NULL,
  `RegNo` varchar(15) NOT NULL,
  `TelephoneNumber` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Post` varchar(20) NOT NULL,
  `ID` varchar(16) NOT NULL,
  `Instutition` varchar(20) NOT NULL,
  `Depertment` varchar(20) NOT NULL,
  `Faculity` varchar(30) NOT NULL,
  `RestKey` int(30) NOT NULL,
  `Stutus` int(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FName`, `LName`, `Genda`, `RegNo`, `TelephoneNumber`, `Email`, `Post`, `ID`, `Instutition`, `Depertment`, `Faculity`, `RestKey`, `Stutus`, `Password`) VALUES
(3, 'Shikamusenge', 'Philemon', 'Male', '21RP00029', '+250784589448', 'shikamusengephilemoni4@gmail.com', 'Student', '1200080137900043', 'Tumba', 'ict', 'Information Technology', 90827, 0, '$2y$10$t8VeATWmmX7StsykVfE6A.AyqguuI1iFtIA7gPApAmbqXz9aixsKq'),
(13, 'Elisa', 'Kwizera', 'Male', '21RP00023', '+250787647168', 'kwizeraelisa7@ail.com', 'Student', '21RP000270000000', 'Kigali', 'CivalEngineering', 'Water And Sanitation Techinolo', 73615, 0, '$2y$10$wHJA5SAfvHcdPL8405ZdXunmTj5CVOoIEogu.i44tnYw9w849kTyK'),
(15, 'Niyomuhoza', 'marie Mericy', 'Femal', '20RP000678', '+250726982830', 'niyomuhoza1@gmail.com', 'Student', '1200070096097866', 'Ngoma', 'MechanicalEngineerin', 'Manufacturing Techinology', 29242, 0, '$2y$10$470VMxzl4xl/RO91kQpMV.bkCqjjDqkCqWjnYk.A8dhAcYnH4Z1bG'),
(16, 'Kwizera', 'Elisa', 'Male', '21RP00159', '+250788405367', 'kwizeraelissa77@gmail.com', 'admin', '1200180030030036', 'Tumba', 'InformationTechnolog', 'Information Technology', 28171, 0, '$2y$10$MdiwaddcmYku/Q4gNxFxsuJD.l63SJN3ALDU6OFSg//asbKoPkFuC'),
(17, 'MUKUNDWA', 'Angel', 'Femal', '21RP239078', '0788567874', 'mbuguje@gmail.com', 'Lecturer', '1199989999999999', 'Kitabi', 'NatureConservation', 'Wild Life and cinservation Tec', 11148, 0, '$2y$10$WtD7mtwRCBqhIW2ual9opePLRX8tKaZR4Vw2//vkyGET42ZmVKj6y'),
(18, 'NIYOMUSHUMBA', 'Josiane', 'Femal', '21RP020043', '0784589448', 'jojojosy@gmail.com', 'Student', '1200270013500237', 'Ngoma', 'Ict', 'Information Techinolgy', 44818, 0, '$2y$10$OevSxZaABsGwMFyWW4zWD.zX1ytIFDFEqhqwwLmrgaPS2PTNh0Yd2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`attch_Id`),
  ADD KEY `UserId` (`FileName`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`CONTID`);

--
-- Indexes for table `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD KEY `GroupId` (`GroupId`),
  ADD KEY `memberId` (`memberId`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageId`),
  ADD KEY `SenderId` (`SenderId`),
  ADD KEY `ReceiverId` (`ReceiverId`),
  ADD KEY `DocId` (`DocId`);

--
-- Indexes for table `modulecode`
--
ALTER TABLE `modulecode`
  ADD PRIMARY KEY (`Modulecode`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `DocId` (`DocId`);

--
-- Indexes for table `replay`
--
ALTER TABLE `replay`
  ADD PRIMARY KEY (`ReplayId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `RId` (`PostId`),
  ADD KEY `AttchId` (`AttchId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `AttachId` (`AttachId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `attch_Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CONTID` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupId` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageId` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modulecode`
--
ALTER TABLE `modulecode`
  MODIFY `Modulecode` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostId` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `replay`
--
ALTER TABLE `replay`
  MODIFY `ReplayId` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RId` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD CONSTRAINT `groupmembers_ibfk_1` FOREIGN KEY (`memberId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `groupmembers_ibfk_2` FOREIGN KEY (`GroupId`) REFERENCES `groups` (`GroupId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`SenderId`) REFERENCES `users` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_ibfk_3` FOREIGN KEY (`ReceiverId`) REFERENCES `users` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_ibfk_4` FOREIGN KEY (`DocId`) REFERENCES `attachments` (`attch_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
