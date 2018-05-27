-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 07:15 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appraisal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepting`
--

CREATE TABLE `accepting` (
  `EmpId` int(20) NOT NULL,
  `AcceptId` int(20) NOT NULL,
  `FormStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepting`
--

INSERT INTO `accepting` (`EmpId`, `AcceptId`, `FormStatus`) VALUES
(26, 0, 0),
(27, 0, 0),
(28, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Name` varchar(50) NOT NULL,
  `ID` int(5) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `PayScale` varchar(17) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `PlaceOfPosting` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `DOJ` date NOT NULL,
  `DOR` date NOT NULL,
  `DOF` date NOT NULL,
  `PPH_f1` date DEFAULT NULL,
  `PPH_f2` date DEFAULT NULL,
  `PPH_f3` date DEFAULT NULL,
  `PPH_f4` date DEFAULT NULL,
  `PPH_t1` date DEFAULT NULL,
  `PPH_t2` date DEFAULT NULL,
  `PPH_t3` date DEFAULT NULL,
  `PPH_t4` date DEFAULT NULL,
  `PPH_loc1` varchar(30) NOT NULL,
  `PPH_loc2` varchar(30) NOT NULL,
  `PPH_loc3` varchar(30) NOT NULL,
  `PPH_loc4` varchar(30) NOT NULL,
  `PPH_pos1` varchar(30) NOT NULL,
  `PPH_pos2` varchar(30) NOT NULL,
  `PPH_pos3` varchar(30) NOT NULL,
  `PPH_pos4` varchar(30) NOT NULL,
  `PPH_res1` varchar(30) NOT NULL,
  `PPH_res2` varchar(30) NOT NULL,
  `PPH_res3` varchar(30) NOT NULL,
  `PPH_res4` varchar(30) NOT NULL,
  `MYR_kpa1` varchar(30) DEFAULT NULL,
  `MYR_kpa2` varchar(30) DEFAULT NULL,
  `MYR_kpa3` varchar(30) DEFAULT NULL,
  `MYR_kpa4` varchar(30) DEFAULT NULL,
  `MYR_kpa5` varchar(30) DEFAULT NULL,
  `MYR_kpa6` varchar(30) DEFAULT NULL,
  `MYR_kpa7` varchar(30) DEFAULT NULL,
  `MYR_kpa8` varchar(30) DEFAULT NULL,
  `MYR_kpa9` varchar(30) DEFAULT NULL,
  `MYR_kpa10` varchar(30) DEFAULT NULL,
  `MYR_ind1` varchar(50) DEFAULT NULL,
  `MYR_ind2` varchar(50) DEFAULT NULL,
  `MYR_ind3` varchar(50) DEFAULT NULL,
  `MYR_ind4` varchar(50) DEFAULT NULL,
  `MYR_ind5` varchar(50) DEFAULT NULL,
  `MYR_ind6` varchar(50) DEFAULT NULL,
  `MYR_ind7` varchar(50) DEFAULT NULL,
  `MYR_ind8` varchar(50) DEFAULT NULL,
  `MYR_ind9` varchar(50) DEFAULT NULL,
  `MYR_ind10` varchar(50) DEFAULT NULL,
  `MYR_mm1` int(2) DEFAULT '0',
  `MYR_mm2` int(2) DEFAULT '0',
  `MYR_mm3` int(2) DEFAULT '0',
  `MYR_mm4` int(2) DEFAULT '0',
  `MYR_mm5` int(2) DEFAULT '0',
  `MYR_mm6` int(2) DEFAULT '0',
  `MYR_mm7` int(2) DEFAULT '0',
  `MYR_mm8` int(2) DEFAULT '0',
  `MYR_mm9` int(2) DEFAULT '0',
  `MYR_mm10` int(2) DEFAULT '0',
  `MYR_ach1` int(2) DEFAULT '0',
  `MYR_ach2` int(2) DEFAULT '0',
  `MYR_ach3` int(2) DEFAULT '0',
  `MYR_ach4` int(2) DEFAULT '0',
  `MYR_ach5` int(2) DEFAULT '0',
  `MYR_ach6` int(2) DEFAULT '0',
  `MYR_ach7` int(2) DEFAULT '0',
  `MYR_ach8` int(2) DEFAULT '0',
  `MYR_ach9` int(2) DEFAULT '0',
  `MYR_ach10` int(2) DEFAULT '0',
  `MYR_rev1` varchar(20) DEFAULT NULL,
  `MYR_rev2` varchar(20) DEFAULT NULL,
  `MYR_rev3` varchar(20) DEFAULT NULL,
  `MYR_rev4` varchar(20) DEFAULT NULL,
  `MYR_rev5` varchar(20) DEFAULT NULL,
  `MYR_rev6` varchar(20) DEFAULT NULL,
  `MYR_rev7` varchar(20) DEFAULT NULL,
  `MYR_rev8` varchar(20) DEFAULT NULL,
  `MYR_rev9` varchar(20) DEFAULT NULL,
  `MYR_rev10` varchar(20) DEFAULT NULL,
  `YER_kpa1` varchar(30) DEFAULT NULL,
  `YER_kpa2` varchar(30) DEFAULT NULL,
  `YER_kpa3` varchar(30) DEFAULT NULL,
  `YER_kpa4` varchar(30) DEFAULT NULL,
  `YER_kpa5` varchar(30) DEFAULT NULL,
  `YER_kpa6` varchar(30) DEFAULT NULL,
  `YER_kpa7` varchar(30) DEFAULT NULL,
  `YER_kpa8` varchar(30) DEFAULT NULL,
  `YER_kpa9` varchar(30) DEFAULT NULL,
  `YER_kpa10` varchar(30) DEFAULT NULL,
  `YER_ind1` varchar(50) DEFAULT NULL,
  `YER_ind2` varchar(50) DEFAULT NULL,
  `YER_ind3` varchar(50) DEFAULT NULL,
  `YER_ind4` varchar(50) DEFAULT NULL,
  `YER_ind5` varchar(50) DEFAULT NULL,
  `YER_ind6` varchar(50) DEFAULT NULL,
  `YER_ind7` varchar(50) DEFAULT NULL,
  `YER_ind8` varchar(50) DEFAULT NULL,
  `YER_ind9` varchar(50) DEFAULT NULL,
  `YER_ind10` varchar(50) DEFAULT NULL,
  `YER_mm1` int(2) DEFAULT '0',
  `YER_mm2` int(2) DEFAULT '0',
  `YER_mm3` int(2) DEFAULT '0',
  `YER_mm4` int(2) DEFAULT '0',
  `YER_mm5` int(2) DEFAULT '0',
  `YER_mm6` int(2) DEFAULT '0',
  `YER_mm7` int(2) DEFAULT '0',
  `YER_mm8` int(2) DEFAULT '0',
  `YER_mm9` int(2) DEFAULT '0',
  `YER_mm10` int(2) DEFAULT '0',
  `YER_ach1` int(2) DEFAULT '0',
  `YER_ach2` int(2) DEFAULT '0',
  `YER_ach3` int(2) DEFAULT '0',
  `YER_ach4` int(2) DEFAULT '0',
  `YER_ach5` int(2) DEFAULT '0',
  `YER_ach6` int(2) DEFAULT '0',
  `YER_ach7` int(2) DEFAULT '0',
  `YER_ach8` int(2) DEFAULT '0',
  `YER_ach9` int(2) DEFAULT '0',
  `YER_ach10` int(2) DEFAULT '0',
  `YER_rev1` varchar(20) DEFAULT NULL,
  `YER_rev2` varchar(20) DEFAULT NULL,
  `YER_rev3` varchar(20) DEFAULT NULL,
  `YER_rev4` varchar(20) DEFAULT NULL,
  `YER_rev5` varchar(20) DEFAULT NULL,
  `YER_rev6` varchar(20) DEFAULT NULL,
  `YER_rev7` varchar(20) DEFAULT NULL,
  `YER_rev8` varchar(20) DEFAULT NULL,
  `YER_rev9` varchar(20) DEFAULT NULL,
  `YER_rev10` varchar(20) DEFAULT NULL,
  `YER_ma1` int(2) DEFAULT '0',
  `YER_ma2` int(2) DEFAULT '0',
  `YER_ma3` int(2) DEFAULT '0',
  `YER_ma4` int(2) DEFAULT '0',
  `YER_ma5` int(2) DEFAULT '0',
  `YER_ma6` int(2) DEFAULT '0',
  `YER_ma7` int(2) DEFAULT '0',
  `YER_ma8` int(2) DEFAULT '0',
  `YER_ma9` int(2) DEFAULT '0',
  `YER_ma10` int(2) DEFAULT '0',
  `total0` float NOT NULL,
  `p2c_1` int(1) NOT NULL,
  `p2c_2` int(1) NOT NULL,
  `p2c_3` int(1) NOT NULL,
  `p2c_4` int(1) NOT NULL,
  `p2c_5` int(1) NOT NULL,
  `p2c_6` int(1) NOT NULL,
  `p2c_7` int(1) NOT NULL,
  `p2c_8` int(1) NOT NULL,
  `p2c_9` int(1) NOT NULL,
  `total1` float NOT NULL,
  `p3v_1` int(1) NOT NULL,
  `p3v_2` int(1) NOT NULL,
  `p3v_3` int(1) NOT NULL,
  `p3v_4` int(1) NOT NULL,
  `p3v_5` int(1) NOT NULL,
  `p3v_6` int(1) NOT NULL,
  `p3v_7` int(1) NOT NULL,
  `p3v_8` int(1) NOT NULL,
  `p3v_9` int(1) NOT NULL,
  `p3v_10` int(1) NOT NULL,
  `total2` float NOT NULL,
  `p4p_1` int(1) NOT NULL,
  `p4p_2` int(1) NOT NULL,
  `p4p_3` int(1) NOT NULL,
  `p4p_4` int(1) NOT NULL,
  `p4p_5` int(1) NOT NULL,
  `total3` float NOT NULL,
  `cop` varchar(300) DEFAULT NULL,
  `totalsum` float NOT NULL,
  `ndIA` varchar(40) DEFAULT NULL,
  `ndRA` varchar(20) NOT NULL,
  `cRA` varchar(20) NOT NULL,
  `ndAA` varchar(20) NOT NULL,
  `cAA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Name`, `ID`, `Designation`, `PayScale`, `Qualification`, `PlaceOfPosting`, `DOB`, `DOJ`, `DOR`, `DOF`, `PPH_f1`, `PPH_f2`, `PPH_f3`, `PPH_f4`, `PPH_t1`, `PPH_t2`, `PPH_t3`, `PPH_t4`, `PPH_loc1`, `PPH_loc2`, `PPH_loc3`, `PPH_loc4`, `PPH_pos1`, `PPH_pos2`, `PPH_pos3`, `PPH_pos4`, `PPH_res1`, `PPH_res2`, `PPH_res3`, `PPH_res4`, `MYR_kpa1`, `MYR_kpa2`, `MYR_kpa3`, `MYR_kpa4`, `MYR_kpa5`, `MYR_kpa6`, `MYR_kpa7`, `MYR_kpa8`, `MYR_kpa9`, `MYR_kpa10`, `MYR_ind1`, `MYR_ind2`, `MYR_ind3`, `MYR_ind4`, `MYR_ind5`, `MYR_ind6`, `MYR_ind7`, `MYR_ind8`, `MYR_ind9`, `MYR_ind10`, `MYR_mm1`, `MYR_mm2`, `MYR_mm3`, `MYR_mm4`, `MYR_mm5`, `MYR_mm6`, `MYR_mm7`, `MYR_mm8`, `MYR_mm9`, `MYR_mm10`, `MYR_ach1`, `MYR_ach2`, `MYR_ach3`, `MYR_ach4`, `MYR_ach5`, `MYR_ach6`, `MYR_ach7`, `MYR_ach8`, `MYR_ach9`, `MYR_ach10`, `MYR_rev1`, `MYR_rev2`, `MYR_rev3`, `MYR_rev4`, `MYR_rev5`, `MYR_rev6`, `MYR_rev7`, `MYR_rev8`, `MYR_rev9`, `MYR_rev10`, `YER_kpa1`, `YER_kpa2`, `YER_kpa3`, `YER_kpa4`, `YER_kpa5`, `YER_kpa6`, `YER_kpa7`, `YER_kpa8`, `YER_kpa9`, `YER_kpa10`, `YER_ind1`, `YER_ind2`, `YER_ind3`, `YER_ind4`, `YER_ind5`, `YER_ind6`, `YER_ind7`, `YER_ind8`, `YER_ind9`, `YER_ind10`, `YER_mm1`, `YER_mm2`, `YER_mm3`, `YER_mm4`, `YER_mm5`, `YER_mm6`, `YER_mm7`, `YER_mm8`, `YER_mm9`, `YER_mm10`, `YER_ach1`, `YER_ach2`, `YER_ach3`, `YER_ach4`, `YER_ach5`, `YER_ach6`, `YER_ach7`, `YER_ach8`, `YER_ach9`, `YER_ach10`, `YER_rev1`, `YER_rev2`, `YER_rev3`, `YER_rev4`, `YER_rev5`, `YER_rev6`, `YER_rev7`, `YER_rev8`, `YER_rev9`, `YER_rev10`, `YER_ma1`, `YER_ma2`, `YER_ma3`, `YER_ma4`, `YER_ma5`, `YER_ma6`, `YER_ma7`, `YER_ma8`, `YER_ma9`, `YER_ma10`, `total0`, `p2c_1`, `p2c_2`, `p2c_3`, `p2c_4`, `p2c_5`, `p2c_6`, `p2c_7`, `p2c_8`, `p2c_9`, `total1`, `p3v_1`, `p3v_2`, `p3v_3`, `p3v_4`, `p3v_5`, `p3v_6`, `p3v_7`, `p3v_8`, `p3v_9`, `p3v_10`, `total2`, `p4p_1`, `p4p_2`, `p4p_3`, `p4p_4`, `p4p_5`, `total3`, `cop`, `totalsum`, `ndIA`, `ndRA`, `cRA`, `ndAA`, `cAA`) VALUES
('TestA', 26, 'SeniorManager', '43,200-66,000', 'B.tech in textile en', 'Delhi', '1994-03-03', '2014-05-01', '2050-05-01', '2017-12-22', '2014-01-04', '0000-00-00', '0000-00-00', '0000-00-00', '2015-01-05', '0000-00-00', '0000-00-00', '0000-00-00', 'Mumbai', '', '', '', 'Deputy Mnager', '', '', '', 'KRA1a', '', '', '', 'KPA1a', 'KPA2a', '', '', '', '', NULL, NULL, NULL, NULL, 'MI1a', 'MI2a', '', '', '', '', NULL, NULL, NULL, NULL, 35, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KPA1a', 'KPA2a', '', '', '', '', NULL, NULL, NULL, NULL, 'MI1a', 'MI2a', '', '', '', '', NULL, NULL, NULL, NULL, 35, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, '', '', '', ''),
('TestB', 27, 'DeputyManager', '37,400-67,000', 'MBA', 'Delhi', '1987-10-28', '2012-05-01', '2045-11-15', '2017-12-21', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'KPA1b', 'KPA2b', 'KPA3b', 'KPA4b', '', '', NULL, NULL, NULL, NULL, 'MI1b', 'MI2b', 'MI3b', 'MI4b', '', '', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KPA1b', 'KPA2b', 'KPA3b', 'KPA4b', '', '', NULL, NULL, NULL, NULL, 'MI1b', 'MI2b', 'MI3b', 'MI4b', '', '', NULL, NULL, NULL, NULL, 10, 15, 20, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, '', '', '', ''),
('TestC', 28, 'ChiefGeneralManager', '37,400-67,000', 'B.tech in Computer S', 'Delhi', '1994-02-19', '2011-05-01', '2058-07-19', '2017-12-14', '2011-02-10', '0000-00-00', '0000-00-00', '0000-00-00', '2017-05-01', '0000-00-00', '0000-00-00', '0000-00-00', 'Coimbatore', '', '', '', 'Manager', '', '', '', 'KRA1c', '', '', '', 'KPA1c', 'KPA2c', 'KPA3c', '', '', '', NULL, NULL, NULL, NULL, 'MI1c', 'MI2c', 'MI3c', '', '', '', NULL, NULL, NULL, NULL, 20, 20, 10, 0, 0, 0, 0, 0, 0, 0, 15, 15, 10, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KPA1c', 'KPA1c', 'KPA1c', '', '', '', NULL, NULL, NULL, NULL, 'MI1c', 'MI2c', 'MI3c', '', '', '', NULL, NULL, NULL, NULL, 25, 15, 10, 0, 0, 0, 0, 0, 0, 0, 25, 10, 9, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(6) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `DOJ` date NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `PlaceOfPosting` varchar(10) NOT NULL,
  `PayScale` varchar(17) NOT NULL,
  `BasicPay` int(12) NOT NULL,
  `GradePay` int(12) NOT NULL,
  `DearnessAllowance` varchar(30) DEFAULT NULL,
  `EmpFormStatus` tinyint(1) NOT NULL DEFAULT '0',
  `Token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Email`, `Name`, `Password`, `DOB`, `DOJ`, `Qualification`, `Department`, `Designation`, `PlaceOfPosting`, `PayScale`, `BasicPay`, `GradePay`, `DearnessAllowance`, `EmpFormStatus`, `Token`) VALUES
(26, 'TestA@gmail.com', 'TestA', 'TestA', '1994-03-03', '2014-05-01', 'B.tech in textile en', 'Technical', 'SeniorManager', 'Delhi', '43,200-66,000', 5400, 0, 'IDA', 0, NULL),
(27, 'TestB@gmail.com', 'TestB', 'TestB', '1987-10-28', '2012-05-01', 'MBA', 'HR', 'DeputyManager', 'Delhi', '37,400-67,000', 4000, 4, 'CDA', 0, NULL),
(28, 'TestC@gmail.com', 'TestC', 'TestC', '1994-02-19', '2011-05-01', 'B.tech in Computer S', 'IT', 'ChiefGeneralManager', 'Delhi', '51,300-73,000', 30000, 0, 'IDA', 0, NULL),
(29, 'tanuj@gmail.com', 'Tanuj', 'tanuj', '1997-07-20', '2017-01-05', 'MBA in finance', 'Finance', 'SeniorManager', 'Coimbatore', '12,600-32,500', 10000, 0, 'IDA', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `IDhr` int(20) NOT NULL,
  `Passwordhr` varchar(11) NOT NULL,
  `PlaceOfPosting` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`IDhr`, `Passwordhr`, `PlaceOfPosting`) VALUES
(1, 'test', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `initiating`
--

CREATE TABLE `initiating` (
  `EmpId` int(20) NOT NULL,
  `InitId` int(20) NOT NULL,
  `FormStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `initiating`
--

INSERT INTO `initiating` (`EmpId`, `InitId`, `FormStatus`) VALUES
(26, 12, 0),
(27, 0, 0),
(28, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payscale`
--

CREATE TABLE `payscale` (
  `pid` varchar(20) NOT NULL,
  `pay` varchar(20) NOT NULL,
  `DearnessAllowance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payscale`
--

INSERT INTO `payscale` (`pid`, `pay`, `DearnessAllowance`) VALUES
('51,300-73,000', 'Rs. 51,300-73,000', 'IDA'),
('43,200-66,000', 'Rs. 43,200-66,000', 'IDA'),
('36,600-62,000', 'Rs. 36,600-62,000', 'IDA'),
('32,900-58,000', 'Rs. 32,900-58,000', 'IDA'),
('29,100-54,500', 'Rs. 29,100-54,500', 'IDA'),
('24,900-50,500', 'Rs. 24,900-50,500', 'IDA'),
('20,600-46,500', 'Rs. 20,600-46,500', 'IDA'),
('16,400-40,500', 'Rs. 16,400-40,500', 'IDA'),
('12,600-32,500', 'Rs. 12,600-32,500', 'IDA'),
('11,600-26,000', 'Rs. 11,600-26,000', 'IDA'),
('10,000-23,000', 'Rs. 10,000-23,000', 'IDA'),
('9,000-22,000', 'Rs. 9,000-22,000', 'IDA'),
('8,600-21,000', 'Rs. 8,600-21,000', 'IDA'),
('8,400-20,200', 'Rs. 8,400-20,200', 'IDA'),
('8,200-19,000', 'Rs. 8,200-19,000', 'IDA'),
('7,000-17,000', 'Rs. 7,000-17,000', 'IDA'),
('9300-34,800', 'RS. 9300-34,800', 'CDA'),
('15,600-39,100', 'RS. 15,600-39,100', 'CDA'),
('37,400-67,000', 'RS. 37,400-67,000', 'CDA'),
('62,000-80,000', 'Rs. 62,000-80,000', 'IDA');

-- --------------------------------------------------------

--
-- Table structure for table `reviewing`
--

CREATE TABLE `reviewing` (
  `EmpId` int(20) NOT NULL,
  `ReviewId` int(20) NOT NULL,
  `FormStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewing`
--

INSERT INTO `reviewing` (`EmpId`, `ReviewId`, `FormStatus`) VALUES
(26, 0, 0),
(27, 0, 0),
(28, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepting`
--
ALTER TABLE `accepting`
  ADD PRIMARY KEY (`EmpId`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`IDhr`);

--
-- Indexes for table `initiating`
--
ALTER TABLE `initiating`
  ADD PRIMARY KEY (`EmpId`);

--
-- Indexes for table `reviewing`
--
ALTER TABLE `reviewing`
  ADD PRIMARY KEY (`EmpId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
