-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 05:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int(11) NOT NULL,
  `complaintNumber` int(11) NOT NULL,
  `productType` varchar(100) NOT NULL,
  `tools` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `com_dept` varchar(100) NOT NULL,
  `actionby` varchar(50) NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `productType`, `tools`, `status`, `remark`, `com_dept`, `actionby`, `remarkDate`) VALUES
(49, 81, '', '', 'in process', 'ghjytjt', '', 'Admin', '2018-07-03 05:05:54'),
(50, 80, '', '', 'closed', 'gyjtykutyl', '', 'Admin', '2018-07-03 05:06:14'),
(51, 82, '', '', 'in process', 'fhrthytjtk', 'Application', 'Admin', '2018-07-03 05:07:19'),
(52, 84, '', '', 'closed', 'trthyjtykgh', 'Application', 'Admin', '2018-07-03 05:07:47'),
(53, 86, '', 'Power_Cord,AC_Adeptar,cas not', 'in process', 'fgjfjutfi', '', 'Admin', '2018-07-03 05:49:33'),
(54, 86, '', '', 'closed', 'rytrur', '', 'Admin', '2018-07-03 05:50:51'),
(55, 87, '', 'Power_Cord,', 'in process', 'dhtjyfj', '', 'Admin', '2018-07-03 13:14:09'),
(56, 87, '', '', 'closed', 'fdhfjtyj', '', 'Admin', '2018-07-03 13:16:14'),
(57, 88, '', '', 'closed', 'gjfgjf', 'Application', 'Admin', '2018-07-03 13:21:18'),
(58, 83, '', 'keybord,Power_Cord,', 'in process', 'dhtfhdrtfhjtr', '', 'saif11', '2018-07-11 10:56:54'),
(59, 83, '', '', 'closed', 'thrtj', '', 'saif11', '2018-07-11 10:57:09'),
(60, 94, '', '', 'closed', 'erwgtergt', '', 'saif2', '2018-07-12 09:30:22'),
(61, 81, '', '', 'closed', 'damage product', '', 'saif2', '2018-07-12 09:32:49'),
(62, 92, '', '', 'in process', 'sgsrgrgr', '', 'saif2@gmail.com', '2018-08-11 08:27:41'),
(63, 92, '', '', 'closed', 'dhdghdgh', '', 'saif2@gmail.com', '2018-08-11 08:27:58'),
(64, 92, '', '', 'Delivered', '', '', 'saif2@gmail.com', '2018-08-11 08:28:26'),
(65, 95, '', '', 'in process', 'fgfgf', '', 'saif2@gmail.com', '2018-08-11 08:40:41'),
(66, 95, '', '', 'closed', 'gdnbgfn', '', 'saif2@gmail.com', '2018-08-11 08:40:57'),
(67, 95, '', '', 'Delivered', '', '', 'saif2@gmail.com', '2018-08-11 08:41:19'),
(68, 89, '', '', 'in process', 'gkuuyikuyikuy', 'Application', 'app@gmail.com', '2018-08-11 09:12:09'),
(69, 89, '', '', 'in process', 'rtytrutu', 'Application', 'app@gmail.com', '2018-08-11 09:12:51'),
(70, 89, '', '', 'closed', 'tyutyuyuy', 'Application', 'app@gmail.com', '2018-08-11 09:13:07'),
(71, 96, '', '', 'in process', 'jtyjtyjtyjtjtsssssssssssss', '', 'saif2@gmail.com', '2018-09-06 06:42:41'),
(72, 97, 'Network Accessories', 'keybord,Power_Cord,', 'in process', 'rrrrrrrrrrrrrrrrrrr', '', 'saif2@gmail.com', '2018-09-06 06:56:04'),
(73, 101, 'UPS', 'AC_Adeptar,', 'in process', 'ttttttttttttttttttttt', '', 'saif2@gmail.com', '2018-09-06 08:22:13'),
(74, 101, 'UPS', '', 'in process', 'rrrrrrrrrrrrrrrrrrr', 'Hardware', 'saif2@gmail.com', '2018-09-06 08:25:44'),
(75, 101, 'UPS', '', 'in process', 'ttttttttttttttttttttttttttttt', 'Hardware', 'saif2@gmail.com', '2018-09-06 08:29:09'),
(76, 101, 'UPS', '', 'closed', 'rrrrrrrrrrrrrrrrrrrrrrrr', 'Hardware', 'saif2@gmail.com', '2018-09-06 08:31:28'),
(77, 102, '', '', 'in process', 'fgxnhgmghjhg', '', 'saif2@gmail.com', '2018-09-10 11:09:25'),
(78, 103, '', '', 'in process', 'fgjfhjy', '', 'saif2@gmail.com', '2018-09-10 11:11:26'),
(79, 103, '', '', 'in process', 'vhjhgkyh', '', 'saif2@gmail.com', '2018-09-10 11:11:55'),
(80, 104, '', '', 'in process', 'ehehet', '', 'saif2@gmail.com', '2018-09-10 12:12:40'),
(81, 105, '', '', 'in process', 'dgdgdg', '', 'saif2@gmail.com', '2018-09-12 04:57:49'),
(82, 105, '', '', 'in process', 'ghfghfghfg', '', 'saif2@gmail.com', '2018-09-12 04:58:49'),
(83, 106, '', '', 'in process', 'ghgfhfgh ', '', 'saif2@gmail.com', '2018-09-12 05:07:58'),
(84, 106, '', '', 'in process', 'fgjfghf', '', 'saif2@gmail.com', '2018-09-12 05:12:38'),
(85, 106, '', '', 'in process', 'mgkghmghmgh', '', 'saif2@gmail.com', '2018-09-12 05:16:39'),
(86, 106, '', '', 'in process', 'fxbfbf', '', 'saif2@gmail.com', '2018-09-12 05:30:02'),
(87, 106, '', '', 'in process', 'dfgfdf', '', 'saif2@gmail.com', '2018-09-12 05:32:57'),
(88, 106, '', '', 'in process', 'khjkhjkuyhku', '', 'saif2@gmail.com', '2018-09-12 05:39:28'),
(89, 106, '', '', 'in process', 'xzsdfgfsdg', '', 'saif2@gmail.com', '2018-09-12 05:55:38'),
(90, 106, '', '', 'in process', 'xbhgfnbgf', '', 'saif2@gmail.com', '2018-09-12 05:56:40'),
(91, 106, '', '', 'in process', 'dfhgdhdgh', '', 'saif2@gmail.com', '2018-09-12 06:03:07'),
(92, 106, '', '', 'closed', 'sdgvsdfvgbfs', '', 'saif2@gmail.com', '2018-09-12 06:03:52'),
(93, 107, '', '', 'in process', '4th5yhy', '', 'saif2@gmail.com', '2018-09-13 11:11:40'),
(94, 107, '', '', 'closed', 'trthtyjujt', '', 'saif2@gmail.com', '2018-09-13 11:12:08'),
(95, 108, '', '', 'in process', 'ghmghmghmg', '', 'saif2@gmail.com', '2018-09-15 04:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(20) NOT NULL,
  `complaintNumber` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `position` varchar(50) NOT NULL,
  `actionby` varchar(50) NOT NULL,
  `d_status` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `complaintNumber`, `name`, `phone`, `position`, `actionby`, `d_status`, `time`) VALUES
(10, 80, 'belal', 1707080455, 'driver', 'Admin', 'Delivered', '2018-07-03 05:06:45'),
(11, 86, 'ranaaaaa', 447457468, 'off', 'Admin', 'Delivered', '2018-07-03 05:52:39'),
(12, 87, 'saif77', 8796967, 'officer', 'Admin', 'Delivered', '2018-07-03 13:18:33'),
(13, 83, 'ranatttt', 12589, 'driver', 'saif11', 'Delivered', '2018-07-11 10:57:37'),
(14, 92, 'gg', 5682, 'gg', 'saif2@gmail.com', 'Delivered', '2018-08-11 08:28:25'),
(15, 95, 'rrrrrrrrr', 561, 'bbbb', 'saif2@gmail.com', 'Delivered', '2018-08-11 08:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(20) NOT NULL,
  `productType` varchar(100) NOT NULL,
  `totalCount` varchar(100) NOT NULL,
  `complainNum` varchar(100) NOT NULL,
  `serviceStart` varchar(100) NOT NULL,
  `serviceEnd` varchar(100) NOT NULL,
  `serviceDuration` varchar(100) NOT NULL,
  `ontimeStatus` varchar(50) NOT NULL,
  `lateStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `productType`, `totalCount`, `complainNum`, `serviceStart`, `serviceEnd`, `serviceDuration`, `ontimeStatus`, `lateStatus`) VALUES
(1, 'Laptop', '1', '96', '06-09-2018 12:42:41 PM', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `complaintType` varchar(255) NOT NULL,
  `cat_dep` varchar(255) NOT NULL,
  `noc` varchar(255) NOT NULL,
  `sub_prob` varchar(100) NOT NULL,
  `tools` varchar(500) NOT NULL,
  `complaintDetails` mediumtext NOT NULL,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `d_status` varchar(50) NOT NULL,
  `w_status` varchar(100) NOT NULL,
  `lastUpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `timeRequire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `category`, `subcategory`, `complaintType`, `cat_dep`, `noc`, `sub_prob`, `tools`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `d_status`, `w_status`, `lastUpdationDate`, `timeRequire`) VALUES
(95, 11, 0, 'PC', 'Md.Moniruzzaman (Shadhin)', 'Hardware', 'Hp probook- 4540s', '', 'Mouse,', 'vdsvsfb', '', '2018-07-12 17:12:03', 'closed', 'Delivered', '', '2018-09-12 06:09:04', '8.235695'),
(96, 8, 0, 'Laptop', 'Md.Moniruzzaman (Shadhin)', 'Hardware', 'delii998', '', 'AC_Adeptar,', '686868', '', '2018-07-15 05:57:16', 'in process', '', '', '2018-09-12 06:09:52', '2.0101457898'),
(97, 20, 0, 'Network Accessories', 'Md.Moniruzzaman (Shadhin)', 'Hardware', 'dell 78789', '', 'Power_Cord,Usb_Cord,', 'gjhjghjjh', '', '2018-08-11 08:54:08', 'in process', '', '', '2018-09-12 06:09:21', '3.25256'),
(98, 20, 0, ' Win_farm', 'Md.Abul Kalam Azad', 'Application', '', 'Stock management system', '', 'gjghjghj', '', '2018-08-11 08:54:24', NULL, '', '', '2018-09-12 06:09:11', '4.55888'),
(99, 20, 0, ' Smart_I_Lab', 'Md.Abul Kalam Azad', 'Application', '', 'Approved result', '', 'hmhjhmmm', '', '2018-08-11 09:11:21', NULL, '', '', '2018-09-12 06:09:30', '2.335689'),
(100, 8, 0, 'Desktop Computer', 'Md.Moniruzzaman (Shadhin)', 'Hardware', 'dell 78787', '', 'VGA_Cord,Usb_Cord,', 'retreyery', '', '2018-09-04 11:05:23', 'in process', '', 'Warranty', '2018-09-12 06:08:56', '9.78978779'),
(101, 8, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', 'ac556', '', 'AC_Adeptar,', 'trertyt', '', '2018-09-06 08:21:33', 'closed', '', '', '2018-09-12 06:09:40', '6.2558985'),
(102, 20, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'Power_Cord,', 'dfhdghdgjhjy', '', '2018-09-09 11:23:44', 'in process', '', 'Warranty_back', '2018-09-10 12:14:10', '1.000022288598'),
(103, 20, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'AC_Adeptar,', 'jhfjh', '', '2018-09-10 11:10:33', 'in process', '', 'Warranty_back', '2018-09-12 06:08:47', '10.78978779'),
(104, 20, 0, 'Software License', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', '', 'erhytehytrhy', '', '2018-09-10 12:11:39', 'in process', '', 'Non Warranty', '2018-09-10 12:12:40', '0.00055555555555556'),
(105, 20, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'AC_Adeptar,', 'ytjytj ghjj test ', '', '2018-09-12 04:28:52', 'in process', '', 'Warranty_back', '2018-09-12 06:08:31', '17.207511574'),
(106, 20, 0, 'Monitor', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'AC_Adeptar,', 'sdfghfsdhfdh', '', '2018-09-12 04:55:24', 'closed', '', 'Warranty_back', '2018-09-12 06:03:52', '19.042870370371'),
(107, 20, 0, 'Monitor', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'Power_Cord,', 'ghbgfhgf', '', '2018-09-12 05:11:23', 'closed', '', 'Warranty_back', '2018-09-13 11:12:08', '0.00082175925925926'),
(108, 20, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', 'fxgvf', '', 'Power_Cord,', 'fhbfsgbf', '', '2018-09-15 04:23:19', 'in process', '', 'Warranty_go', '2018-09-15 04:55:52', '0.00068287037037037'),
(109, 20, 0, 'Notebook Computer', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'Power_Cord,', 'fhfghg', '', '2018-09-15 06:39:32', NULL, '', '', '0000-00-00 00:00:00', ''),
(110, 20, 0, 'Desktop Computer', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'Power_Cord,', 'nbgng', '', '2018-09-15 06:51:40', NULL, '', '', '0000-00-00 00:00:00', ''),
(111, 20, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'Power_Cord,', 'nvcng', '', '2018-09-15 06:52:42', NULL, '', '', '0000-00-00 00:00:00', ''),
(112, 20, 0, 'UPS', 'Md.Moniruzzaman (Shadhin)', 'Hardware', '', '', 'AC_Adeptar,', 'vnnh', '', '2018-09-15 06:56:05', NULL, '', '', '0000-00-00 00:00:00', ''),
(113, 20, 0, ' Pay_Roll', 'Md.Abul Kalam Azad', 'Application', '', 'Attendance', '', 'dfhdfbdgf', '', '2018-09-18 03:36:11', NULL, '', '', '0000-00-00 00:00:00', ''),
(114, 20, 0, ' Pay_Roll', 'Md.Abul Kalam Azad', 'Application', '', 'Attendance', '', 'dfhdfbdgf', '', '2018-09-18 03:37:38', NULL, '', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `sub_dept` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `off_id` varchar(50) DEFAULT NULL,
  `nid` varchar(20) DEFAULT NULL,
  `bu_head` varchar(100) NOT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `section` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `dept`, `sub_dept`, `branch`, `off_id`, `nid`, `bu_head`, `userImage`, `category`, `section`, `regDate`, `updationDate`, `status`) VALUES
(3, 'saif2', 'saif2@gmail.com', '5683', '01707080401', 'deptttt', 'sub_depttt', 'branchhhhhh', 'bd-889', NULL, '', NULL, 'Hardware', 'Admin', '2018-06-20 05:54:32', '2018-07-14 10:31:13', 1),
(4, 'rana', 'rana@gmail.com', '5683', '012485', 'Dhaka dept', 'sub_dept', 'headofficerrr', '009', '0987635362722726272', 'buhead name', NULL, 'Hardware', 'Admin', '2018-07-11 06:36:18', '2018-07-15 06:19:15', 0),
(5, 'rana', 'rana2@gmail.com', '5683', '012485', 'Dhaka dept', 'sub_dept', 'headofficerrr', '009', '0987635362722726272', 'buhead name', NULL, 'user', 'user', '2018-07-11 06:36:18', '2018-07-15 05:56:00', 0),
(6, 'saiful _s', 'admin@gmail.com', '5683', '09877777', 'IT Departmenttttt', 'Demo sub department_t', 'head Office Dhakaaa', 'bd0055', '098099876543214', 'Buhead nameee', NULL, 'Admin', 'Admin', '2018-05-02 09:58:08', '2018-08-11 08:41:56', 1),
(7, 'saiful_l', 'app@gmail.com', '5683', '09877777', 'IT Departmenttttt', 'Demo sub department_t', 'head Office Dhakaaa', 'bd0055', '098099876543214', 'Buhead nameee', NULL, 'Application', 'Admin', '2018-05-02 09:58:08', '2018-07-12 15:25:58', 1),
(8, 'user', 'user@gmail.com', '5683', '012485', 'Dhaka dept', 'sub_dept', 'headofficerrr', '009', '0987635362722726272', 'buhead name', NULL, 'user', 'user', '2018-07-11 06:36:18', '2018-07-15 05:55:53', 1),
(10, 'syful islam', 'saif333@gmail.com', '5683', '01707080401', 'Dhaka dept', 'sub_dept', 'headoffice', 'Bd000866', '1922215222586598525', 'buhead name', NULL, 'user', 'user', '2018-07-12 16:20:07', '2018-07-14 08:49:20', 0),
(11, 'syful islam2', 'saif@gmail.com', '5683', '01707080401', 'Dhaka dept', 'sub_dept', 'headoffice', 'Bd000866', '0987635362722726272', 'Buhead nameee', NULL, 'user', 'user', '2018-07-12 16:24:33', '0000-00-00 00:00:00', 1),
(13, 'rana3', 'rana3@gmail.com', '5683', '01709876544', 'Dhaka dept', 'sub_dept', 'headoffice_f', 'Bd0008', '0987635362722726272', 'churachai thi', NULL, 'user', 'user', '2018-07-14 03:42:48', '0000-00-00 00:00:00', 1),
(17, 'Md.Moniruzzaman Shadhin', 'shadhin@cpbangladesh.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'Hardware', 'Admin', '2018-08-11 08:39:39', '0000-00-00 00:00:00', 1),
(18, 'Mr. Srachai Praniratlert', 'it-noreply@cpbangladesh.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'Admin', 'Admin', '2018-08-11 08:43:06', '0000-00-00 00:00:00', 1),
(19, 'Md.Polash Mahamud', 'it.support@cpbangladesh.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'Hardware', 'Admin', '2018-08-11 08:43:52', '0000-00-00 00:00:00', 1),
(20, 'Md.Syful islam', 'saifulislamw60@gmail.com', '5683', '01707080401', 'IT-department', 'App-developer', 'Dhaka Head office', 'BD0012486', '19922588542682421', 'Boss', NULL, 'user', 'user', '2018-08-11 08:50:50', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userip` varchar(100) NOT NULL,
  `useros` varchar(100) NOT NULL,
  `userbrowser` varchar(100) NOT NULL,
  `userdevice` varchar(100) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logouttime` varchar(100) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `logintime`, `logouttime`, `status`) VALUES
(7, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-03 13:37:38', '03-07-2018 07:38:00 PM', 1),
(8, 4, 'rana@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-11 10:41:21', '', 1),
(9, 4, 'rana@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-11 11:07:21', '', 1),
(10, 2, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 08:31:28', '', 1),
(11, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:33:47', '12-07-2018 05:43:01 PM', 1),
(12, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:43:17', '', 1),
(13, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:55:47', '', 0),
(14, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:56:25', '', 0),
(15, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:57:00', '', 0),
(16, 4, 'rana@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:57:28', '', 1),
(17, 0, 'sagor@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 11:59:53', '', 0),
(18, 0, 'sagor', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 12:00:54', '', 0),
(19, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 15:03:13', '', 1),
(20, 9, 'sagor@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 15:48:03', '', 1),
(21, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 15:55:11', '', 1),
(22, 11, 'saif@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 17:09:14', '', 1),
(23, 11, 'saif@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 17:43:32', '12-07-2018 11:44:31 PM', 1),
(24, 9, 'sagor@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-12 17:45:25', '', 1),
(25, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-12 17:46:17', '', 1),
(26, 7, 'app@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-12 17:47:01', '', 1),
(27, 11, 'saif@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:18:12', '14-07-2018 09:18:46 AM', 1),
(28, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:19:10', '', 1),
(29, 7, 'app@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:20:46', '', 1),
(30, 7, 'app@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:23:38', '', 1),
(31, 7, 'app@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:25:25', '', 1),
(32, 0, 'har@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:26:38', '', 0),
(33, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:27:07', '', 1),
(34, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:32:06', '', 1),
(35, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 03:37:54', '', 1),
(36, 12, 'har@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-14 03:38:39', '', 1),
(37, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 06:41:46', '', 1),
(38, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 08:26:56', '', 1),
(39, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 08:57:54', '', 1),
(40, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:14:41', '14-07-2018 03:14:48 PM', 1),
(41, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:17:13', '14-07-2018 03:17:16 PM', 1),
(42, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:18:25', '14-07-2018 03:18:28 PM', 1),
(43, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:18:43', '', 1),
(44, 7, 'app@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:19:41', '', 1),
(45, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:21:36', '', 1),
(46, 13, 'rana3@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:32:04', '14-07-2018 03:32:06 PM', 1),
(47, 0, 'rana3@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:32:24', '', 0),
(48, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:36:07', '', 1),
(49, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:36:53', '', 0),
(50, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:37:17', '', 1),
(51, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 09:45:40', '', 0),
(52, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-14 10:23:14', '', 1),
(53, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-14 10:31:36', '', 1),
(54, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-15 05:35:36', '', 1),
(55, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-15 05:54:50', '', 0),
(56, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-15 05:55:35', '', 0),
(57, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-15 05:56:17', '', 1),
(58, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-15 06:17:43', '', 1),
(59, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-15 11:08:50', '', 1),
(60, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-16 12:26:20', '', 1),
(61, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-16 12:26:52', '16-07-2018 06:27:04 PM', 1),
(62, 7, 'app@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-16 12:27:20', '', 1),
(63, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Chrome', 'Computer', '2018-07-16 12:28:35', '', 1),
(64, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-17 03:37:32', '', 1),
(65, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-17 03:37:53', '17-07-2018 10:03:38 AM', 1),
(66, 6, 'Admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-07-17 04:04:30', '', 1),
(67, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-11 08:26:48', '11-08-2018 02:47:55 PM', 1),
(68, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-08-11 08:38:32', '', 1),
(69, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-11 08:53:40', '11-08-2018 03:11:36 PM', 1),
(70, 7, 'app@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-11 09:11:43', '', 1),
(71, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-16 06:44:07', '', 1),
(72, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-26 03:56:49', '26-08-2018 10:05:42 AM', 1),
(73, 0, 'admin', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-08-29 08:57:59', '', 0),
(74, 0, 'admin', '::1', 'Windows 10', 'Firefox', 'Computer', '2018-08-29 08:58:08', '', 0),
(75, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-29 08:58:15', '29-08-2018 02:58:43 PM', 1),
(76, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-08-29 08:58:50', '', 1),
(77, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-03 07:55:34', '03-09-2018 02:16:52 PM', 1),
(78, 8, 'user@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-04 11:04:59', '', 1),
(79, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-05 06:46:33', '', 1),
(80, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-05 09:19:54', '', 1),
(81, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-06 03:06:46', '', 1),
(82, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-06 04:06:39', '', 1),
(83, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-06 06:12:23', '', 1),
(84, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-06 08:07:15', '', 1),
(85, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-09 11:23:21', '09-09-2018 05:24:10 PM', 1),
(86, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-09 11:24:21', '09-09-2018 06:01:55 PM', 1),
(87, 8, 'user@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-09 11:31:10', '', 1),
(88, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-09 12:02:15', '09-09-2018 06:03:43 PM', 1),
(89, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-09 12:05:18', '', 1),
(90, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-09 12:05:29', '15-09-2018 05:47:38 PM', 1),
(91, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-09 12:07:30', '', 1),
(92, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-10 03:17:22', '10-09-2018 10:20:07 AM', 1),
(93, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-10 04:20:16', '', 1),
(94, 11, 'saif@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-10 09:56:35', '10-09-2018 03:56:44 PM', 1),
(95, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-10 09:56:59', '', 1),
(96, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-10 12:11:19', '', 1),
(97, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-11 05:02:39', '', 1),
(98, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-11 11:37:45', '11-09-2018 05:38:06 PM', 1),
(99, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-11 11:38:18', '', 1),
(100, 3, 'saif2@gmail.com', '127.0.0.1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-12 04:27:42', '12-09-2018 03:53:17 PM', 1),
(101, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-12 04:28:31', '', 1),
(102, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-12 09:53:50', '12-09-2018 05:25:03 PM', 1),
(103, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-12 11:25:11', '', 1),
(104, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-13 03:11:12', '13-09-2018 05:06:50 PM', 1),
(105, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-13 11:07:05', '13-09-2018 05:26:29 PM', 1),
(106, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-13 11:26:40', '', 1),
(107, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 03:55:32', '15-09-2018 09:55:40 AM', 1),
(108, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 03:55:45', '15-09-2018 10:07:47 AM', 1),
(109, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 04:09:16', '15-09-2018 10:54:22 AM', 1),
(110, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 04:54:31', '15-09-2018 12:39:15 PM', 1),
(111, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 06:39:22', '17-09-2018 09:18:13 AM', 1),
(112, 20, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 09:41:30', '', 1),
(113, 20, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 09:45:19', '', 1),
(114, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 09:49:07', '17-09-2018 10:15:38 AM', 1),
(115, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 09:50:28', '', 1),
(116, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 09:53:35', '', 1),
(117, 6, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 09:58:23', '', 1),
(118, 6, '', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-15 10:00:25', '', 1),
(119, 6, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 10:12:33', '', 1),
(120, 6, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 10:17:25', '', 1),
(121, 3, '', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-15 10:20:37', '', 1),
(122, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 10:28:29', '', 1),
(123, 6, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 10:34:05', '', 1),
(124, 6, '', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-15 10:37:38', '', 1),
(125, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 10:59:47', '', 1),
(126, 20, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 10:59:56', '', 1),
(127, 6, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 11:46:58', '', 1),
(128, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 11:47:46', '', 1),
(129, 20, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-15 12:08:31', '', 1),
(130, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-16 02:50:50', '', 1),
(131, 20, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-16 03:09:37', '', 1),
(132, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-17 03:18:44', '', 1),
(133, 3, '', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-17 04:11:02', '', 1),
(134, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-17 04:15:46', '17-09-2018 10:16:26 AM', 1),
(135, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-17 04:16:33', '17-09-2018 03:31:50 PM', 1),
(136, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-17 09:31:54', '', 1),
(137, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-17 09:57:07', '', 1),
(138, 3, 'saif2@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-17 10:14:04', '', 1),
(139, 6, 'admin@gmail.com', '::1', 'Windows 10', 'Firefox', 'Syful-IT', '2018-09-18 02:53:54', '', 1),
(140, 20, 'saifulislamw60@gmail.com', '::1', 'Windows 10', 'Chrome', 'Syful-IT', '2018-09-18 03:35:12', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
