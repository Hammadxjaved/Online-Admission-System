-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`ad_id`, `ad_name`, `ad_pswd`, `ad_eml`) VALUES
('AD000001', 'admin', 'admin', 'admin@gmail.com'),
('AD000002', 'Admin', 'Admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `s_id` varchar(50) NOT NULL,
  `s_stat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`s_id`, `s_stat`) VALUES
('ABC00001', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_phn1` varchar(15) DEFAULT NULL,
  `s_phn2` varchar(15) DEFAULT NULL,
  `f_name` varchar(45) NOT NULL,
  `f_occ` varchar(45) NOT NULL,
  `f_phn` varchar(15) DEFAULT NULL,
  `m_name` varchar(45) NOT NULL,
  `m_occ` varchar(45) NOT NULL,
  `m_phn` varchar(15) DEFAULT NULL,
  `s_iop` int(10) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_cadr` varchar(50) NOT NULL,
  `s_cst` varchar(20) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_cmob` varchar(15) DEFAULT NULL,
  `s_padr` varchar(50) NOT NULL,
  `s_pst` varchar(20) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_pmob` varchar(15) DEFAULT NULL,
  `s_ruc` varchar(10) NOT NULL,
  `s_natn` varchar(10) NOT NULL,
  `s_relg` varchar(10) DEFAULT NULL,
  `s_catg` varchar(3) NOT NULL,
  `s_mainsxam` varchar(20) NOT NULL,
  `s_mainsrank` varchar(10) NOT NULL,
  `s_mainsroll` varchar(20) NOT NULL,
  `s_mainsbrnch` varchar(45) NOT NULL,
  `s_branch` varchar(60) NOT NULL,
  `s_college` varchar(6) NOT NULL,
  `s_center` varchar(20) NOT NULL,
  `s_crtype` varchar(10) NOT NULL,
  `s_pcm` varchar(10) NOT NULL,
  `s_tenbrd` varchar(7) NOT NULL,
  `s_tenyop` varchar(4) NOT NULL,
  `s_tentotmark` varchar(4) NOT NULL,
  `s_tenmarkob` varchar(4) NOT NULL,
  `s_tendiv` varchar(4) NOT NULL,
  `s_tenprcmark` varchar(4) NOT NULL,
  `s_twlbrd` varchar(7) NOT NULL,
  `s_twlyop` varchar(4) NOT NULL,
  `s_twltotmark` varchar(4) NOT NULL,
  `s_twlmarkob` varchar(4) NOT NULL,
  `s_twldiv` varchar(4) NOT NULL,
  `s_twlprcmark` varchar(4) NOT NULL,
  `s_moi` varchar(8) NOT NULL,
  `s_pay` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`s_detid`, `s_id`, `s_phn1`, `s_phn2`, `f_name`, `f_occ`, `f_phn`, `m_name`, `m_occ`, `m_phn`, `s_iop`, `s_sex`, `s_cadr`, `s_cst`, `s_cpin`, `s_cmob`, `s_padr`, `s_pst`, `s_ppin`, `s_pmob`, `s_ruc`, `s_natn`, `s_relg`, `s_catg`, `s_mainsxam`, `s_mainsrank`, `s_mainsroll`, `s_mainsbrnch`, `s_branch`, `s_college`, `s_center`, `s_crtype`, `s_pcm`, `s_tenbrd`, `s_tenyop`, `s_tentotmark`, `s_tenmarkob`, `s_tendiv`, `s_tenprcmark`, `s_twlbrd`, `s_twlyop`, `s_twltotmark`, `s_twlmarkob`, `s_twldiv`, `s_twlprcmark`, `s_moi`, `s_pay`) VALUES
('DE00000001', 'ABC00001', '09368237866', '09368237866', 'father', 'abc', '', 'mother', 'abc', '', 1000, 'Male', 'FLAT NO. 172 A.D.A. COLONY', 'Uttar Pradesh', 202001, '09368237866', 'FLAT NO. 172 A.D.A. COLONY', 'Uttar Pradesh', 202001, '09368237866', '', 'India', 'Islam', '', 'B.Sc.(Hons.)', '1', '5014718', '', 'COMPUTER APPLICATIONS', '', 'ALIGARH', 'Regular', '100', 'amu', '2018', '500', '400', '1', '80', ' amu ', '2021', '500', '400', '1', '80', 'English', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_userdoc`
--

CREATE TABLE `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_tenmarkpic` varchar(200) NOT NULL,
  `s_tencerpic` varchar(200) NOT NULL,
  `s_twdmarkpic` varchar(200) NOT NULL,
  `s_twdcerpic` varchar(200) NOT NULL,
  `s_idprfpic` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_userdoc`
--

INSERT INTO `t_userdoc` (`s_id`, `s_pic`, `s_tenmarkpic`, `s_tencerpic`, `s_twdmarkpic`, `s_twdcerpic`, `s_idprfpic`, `s_sigpic`) VALUES
('ABC00001', 'Photo.png', '10mark.png', '10cert.png', '12mark.png', '12cert.png', 'IDprf.png', 'Sign.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_data`
--

CREATE TABLE `t_user_data` (
  `s_id` varchar(10) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(45) NOT NULL,
  `s_email` varchar(45) NOT NULL,
  `s_mob` varchar(10) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_data`
--

INSERT INTO `t_user_data` (`s_id`, `s_pwd`, `s_dob`, `s_name`, `s_email`, `s_mob`, `s_signupdate`) VALUES
('ABC00001', 'KXHUAh1C', '2002-10-02', 'Hammad Javed', 'hammadxjaved@gmail.com', '9368237866', '2022-11-17 15:45:08.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`s_detid`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user_data`
--
ALTER TABLE `t_user_data`
  ADD PRIMARY KEY (`s_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_status`
--
ALTER TABLE `t_status`
  ADD CONSTRAINT `t_status_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
