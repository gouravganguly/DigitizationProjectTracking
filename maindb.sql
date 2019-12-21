-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 10:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa`
--

CREATE TABLE `aa` (
  `name` varchar(128) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`name`, `roll_no`, `id`) VALUES
('x', 1, 1),
('y', 2, 0),
('y', 2, 100),
('gaurav', 7, 777),
('gaurav', 7, 777),
('gaurav', 6, 666),
('gaurav', 6, 666),
('gaurav', 5, 555),
('zzz', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('gourav1ganguly@gmail.com', 'asdfjkl;');

-- --------------------------------------------------------

--
-- Table structure for table `doc_scan_data`
--

CREATE TABLE `doc_scan_data` (
  `file_no` varchar(128) NOT NULL,
  `prepared_by` varchar(128) NOT NULL,
  `prep_date` date NOT NULL,
  `a4` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a0` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `scanned_by` varchar(128) NOT NULL,
  `scan_date` date NOT NULL,
  `entry_update_by` varchar(128) NOT NULL,
  `entry_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_scan_data`
--

INSERT INTO `doc_scan_data` (`file_no`, `prepared_by`, `prep_date`, `a4`, `a3`, `a2`, `a1`, `a0`, `total`, `scanned_by`, `scan_date`, `entry_update_by`, `entry_date_time`) VALUES
('011', 'Human1', '2018-07-13', 5, 32, 3, 2, 5, 47, 'Cadet2', '2018-07-13', 'a', '2018-07-30 23:58:25'),
('012', 'Human1', '2018-07-26', 4, 2, 2, 4, 0, 12, 'Cadet2', '2018-07-04', 'a', '2018-07-30 23:59:21'),
('013', 'Human2', '2018-07-12', 1, 1, 1, 1, 1, 5, 'Cadet3', '2018-07-05', 'a', '2018-07-30 22:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `final_report`
--

CREATE TABLE `final_report` (
  `org` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `file_no` varchar(128) NOT NULL,
  `docu_type` varchar(128) NOT NULL,
  `vol` varchar(128) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `receive_date` date NOT NULL,
  `given_by` varchar(128) NOT NULL,
  `taken_by` varchar(128) NOT NULL,
  `prepared_by` varchar(128) NOT NULL,
  `prep_date` date NOT NULL,
  `a4` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a0` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `scanned_by` varchar(128) NOT NULL,
  `scan_date` date NOT NULL,
  `img_clean_by` varchar(128) NOT NULL,
  `img_clean_date` date NOT NULL,
  `img_clean_pages` int(11) NOT NULL,
  `total_pages` int(11) NOT NULL,
  `diff` int(11) NOT NULL,
  `data_entry_by` varchar(128) NOT NULL,
  `data_entry_date` date NOT NULL,
  `qc_by` varchar(128) NOT NULL,
  `qc_date` date NOT NULL,
  `handover_date` date NOT NULL,
  `given_out_by` varchar(128) NOT NULL,
  `taken_out_by` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_report`
--

INSERT INTO `final_report` (`org`, `state`, `file_no`, `docu_type`, `vol`, `proj_id`, `receive_date`, `given_by`, `taken_by`, `prepared_by`, `prep_date`, `a4`, `a3`, `a2`, `a1`, `a0`, `total`, `scanned_by`, `scan_date`, `img_clean_by`, `img_clean_date`, `img_clean_pages`, `total_pages`, `diff`, `data_entry_by`, `data_entry_date`, `qc_by`, `qc_date`, `handover_date`, `given_out_by`, `taken_out_by`) VALUES
('Google', 'WB', '011', 'Corres', 'x1', 1, '2018-07-06', 'me', 'a', 'Human1', '2018-07-13', 5, 32, 3, 2, 5, 47, 'Cadet2', '2018-07-13', 'Employee1', '2018-07-27', 2, 0, 0, 'Person1', '2018-07-07', 'Dude2', '2018-07-12', '2018-07-12', 'Being1', 'me'),
('Google', 'West Bengal', '012', 'Corres', 'x2', 2, '2018-07-06', 'me', 'Guy1', 'Human1', '2018-07-26', 4, 2, 2, 4, 0, 12, 'Cadet2', '2018-07-04', 'Employee1', '2018-07-19', 4, 0, 0, 'Person1', '2018-07-20', 'Dude1', '2018-07-11', '2018-07-14', 'Being3', 'you'),
('Google', 'Gujarat', '013', 'DPR', 'x3', 3, '2018-07-06', 'you', 'Guy2', 'Human2', '2018-07-12', 1, 1, 1, 1, 1, 5, 'Cadet3', '2018-07-05', 'Employee1', '2018-07-19', 4, 0, 0, 'Person3', '2018-07-24', 'Dude2', '2018-07-05', '2018-07-07', 'Being3', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `img_clean_qc_data`
--

CREATE TABLE `img_clean_qc_data` (
  `file_no` varchar(128) NOT NULL,
  `img_clean_by` varchar(128) NOT NULL,
  `img_clean_date` date NOT NULL,
  `img_clean_pages` int(11) NOT NULL,
  `total_pages` int(11) NOT NULL,
  `diff` int(11) NOT NULL,
  `data_entry_by` varchar(128) NOT NULL,
  `data_entry_date` date NOT NULL,
  `qc_by` varchar(128) NOT NULL,
  `qc_date` date NOT NULL,
  `entry_update_by` varchar(128) NOT NULL,
  `entry_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_clean_qc_data`
--

INSERT INTO `img_clean_qc_data` (`file_no`, `img_clean_by`, `img_clean_date`, `img_clean_pages`, `total_pages`, `diff`, `data_entry_by`, `data_entry_date`, `qc_by`, `qc_date`, `entry_update_by`, `entry_date_time`) VALUES
('011', 'Employee1', '2018-07-27', 2, 47, 45, 'Person1', '2018-07-07', 'Dude2', '2018-07-12', 'a', '2018-07-30 23:58:50'),
('012', 'Employee1', '2018-07-19', 4, 12, 8, 'Person1', '2018-07-20', 'Dude1', '2018-07-11', 'a', '2018-07-30 23:59:54'),
('013', 'Employee1', '2018-07-19', 4, 5, 1, 'Person3', '2018-07-24', 'Dude2', '2018-07-05', 'a', '2018-07-30 22:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `inward_data`
--

CREATE TABLE `inward_data` (
  `org` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `file_no` varchar(128) NOT NULL,
  `docu_type` varchar(128) NOT NULL,
  `vol` varchar(128) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `receive_date` date NOT NULL,
  `given_by` varchar(128) NOT NULL,
  `taken_by` varchar(128) NOT NULL,
  `entry_update_by` varchar(128) NOT NULL,
  `entry_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inward_data`
--

INSERT INTO `inward_data` (`org`, `state`, `file_no`, `docu_type`, `vol`, `proj_id`, `receive_date`, `given_by`, `taken_by`, `entry_update_by`, `entry_date_time`) VALUES
('Google', 'WB', '011', 'Corres', 'x1', 1, '2018-07-06', 'me', 'a', 'a', '2018-07-29 16:50:30'),
('Google', 'West Bengal', '012', 'Corres', 'x2', 2, '2018-07-06', 'me', 'Guy1', 'a', '2018-07-29 20:37:21'),
('Google', 'Gujarat', '013', 'DPR', 'x3', 3, '2018-07-06', 'you', 'Guy2', 'a', '2018-07-30 18:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `master_data_entry`
--

CREATE TABLE `master_data_entry` (
  `data_entry_id` int(11) NOT NULL,
  `data_entry_by` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data_entry`
--

INSERT INTO `master_data_entry` (`data_entry_id`, `data_entry_by`, `status`) VALUES
(1, 'Person1', 'Active'),
(2, 'Person2', 'Inactive'),
(3, 'Person3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_doc`
--

CREATE TABLE `master_doc` (
  `doc_id` int(11) NOT NULL,
  `doc_type` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_doc`
--

INSERT INTO `master_doc` (`doc_id`, `doc_type`, `status`) VALUES
(1, 'Corres', 'Active'),
(2, 'DPR', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_doc_prep`
--

CREATE TABLE `master_doc_prep` (
  `doc_prep_id` int(11) NOT NULL,
  `doc_prep_by` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_doc_prep`
--

INSERT INTO `master_doc_prep` (`doc_prep_id`, `doc_prep_by`, `status`) VALUES
(1, 'Human1', 'Active'),
(2, 'Human2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_given_out_by`
--

CREATE TABLE `master_given_out_by` (
  `given_out_id` int(11) NOT NULL,
  `given_out_name` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_given_out_by`
--

INSERT INTO `master_given_out_by` (`given_out_id`, `given_out_name`, `status`) VALUES
(1, 'Being1', 'Active'),
(2, 'Being2', 'Inactive'),
(3, 'Being3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_img_clean`
--

CREATE TABLE `master_img_clean` (
  `img_clean_id` int(11) NOT NULL,
  `img_clean_by` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_img_clean`
--

INSERT INTO `master_img_clean` (`img_clean_id`, `img_clean_by`, `status`) VALUES
(1, 'Employee1', 'Active'),
(2, 'Employee2', 'Active'),
(3, 'Employee3', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `master_org`
--

CREATE TABLE `master_org` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_org`
--

INSERT INTO `master_org` (`org_id`, `org_name`, `status`) VALUES
(1, 'Google', 'Active'),
(2, 'Facebook', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_qc`
--

CREATE TABLE `master_qc` (
  `qc_id` int(11) NOT NULL,
  `qc_by` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_qc`
--

INSERT INTO `master_qc` (`qc_id`, `qc_by`, `status`) VALUES
(1, 'Dude1', 'Active'),
(2, 'Dude2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_scan_by`
--

CREATE TABLE `master_scan_by` (
  `scan_by_id` int(11) NOT NULL,
  `scan_by_name` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_scan_by`
--

INSERT INTO `master_scan_by` (`scan_by_id`, `scan_by_name`, `status`) VALUES
(1, 'Cadet1', 'Active'),
(2, 'Cadet2', 'Active'),
(3, 'Cadet3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_state`
--

CREATE TABLE `master_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_state`
--

INSERT INTO `master_state` (`state_id`, `state_name`, `status`) VALUES
(1, 'West Bengal', 'Active'),
(2, 'Gujarat', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_taken_by`
--

CREATE TABLE `master_taken_by` (
  `taken_by_id` int(11) NOT NULL,
  `taken_by` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_taken_by`
--

INSERT INTO `master_taken_by` (`taken_by_id`, `taken_by`, `status`) VALUES
(1, 'Guy1', 'Active'),
(2, 'Guy2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `outward_data`
--

CREATE TABLE `outward_data` (
  `file_no` varchar(128) NOT NULL,
  `handover_date` date NOT NULL,
  `given_out_by` varchar(128) NOT NULL,
  `taken_out_by` varchar(128) NOT NULL,
  `entry_update_by` varchar(128) NOT NULL,
  `entry_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outward_data`
--

INSERT INTO `outward_data` (`file_no`, `handover_date`, `given_out_by`, `taken_out_by`, `entry_update_by`, `entry_date_time`) VALUES
('011', '2018-07-12', 'Being1', 'me', 'a', '2018-07-30 23:58:58'),
('012', '2018-07-14', 'Being3', 'you', 'a', '2018-07-31 00:00:01'),
('013', '2018-07-07', 'Being3', 'me', 'a', '2018-07-30 22:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `email`, `password`, `status`) VALUES
('a', 'a@gmail.com', 'aa', 'Active'),
('b', 'b@gmail.com', 'bb', 'Inactive'),
('x', 'x@gmail.com', 'xx', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_scan_data`
--
ALTER TABLE `doc_scan_data`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `final_report`
--
ALTER TABLE `final_report`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `img_clean_qc_data`
--
ALTER TABLE `img_clean_qc_data`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `inward_data`
--
ALTER TABLE `inward_data`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `master_data_entry`
--
ALTER TABLE `master_data_entry`
  ADD PRIMARY KEY (`data_entry_id`);

--
-- Indexes for table `master_doc`
--
ALTER TABLE `master_doc`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `master_doc_prep`
--
ALTER TABLE `master_doc_prep`
  ADD PRIMARY KEY (`doc_prep_id`);

--
-- Indexes for table `master_given_out_by`
--
ALTER TABLE `master_given_out_by`
  ADD PRIMARY KEY (`given_out_id`);

--
-- Indexes for table `master_img_clean`
--
ALTER TABLE `master_img_clean`
  ADD PRIMARY KEY (`img_clean_id`);

--
-- Indexes for table `master_org`
--
ALTER TABLE `master_org`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `master_qc`
--
ALTER TABLE `master_qc`
  ADD PRIMARY KEY (`qc_id`);

--
-- Indexes for table `master_scan_by`
--
ALTER TABLE `master_scan_by`
  ADD PRIMARY KEY (`scan_by_id`);

--
-- Indexes for table `master_state`
--
ALTER TABLE `master_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `master_taken_by`
--
ALTER TABLE `master_taken_by`
  ADD PRIMARY KEY (`taken_by_id`);

--
-- Indexes for table `outward_data`
--
ALTER TABLE `outward_data`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
