-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 07:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev_professional_directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certifications`
--

CREATE TABLE IF NOT EXISTS `tbl_certifications` (
  `pk_certification_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `institute` text COLLATE utf8_unicode_ci NOT NULL,
  `period` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_certification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educations`
--

CREATE TABLE IF NOT EXISTS `tbl_educations` (
  `pk_education_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `certification_name` text COLLATE utf8_unicode_ci NOT NULL,
  `result` text COLLATE utf8_unicode_ci NOT NULL,
  `year` text COLLATE utf8_unicode_ci NOT NULL,
  `institute_name` text COLLATE utf8_unicode_ci NOT NULL,
  `major` text COLLATE utf8_unicode_ci NOT NULL,
  `duration` text COLLATE utf8_unicode_ci NOT NULL,
  `achievement_name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_education_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_educations`
--

INSERT INTO `tbl_educations` (`pk_education_id`, `fk_user_id`, `certification_name`, `result`, `year`, `institute_name`, `major`, `duration`, `achievement_name`) VALUES
(2, 5, 'PSC/Equivalent', 'First Division/Class', '2022', 'd', 'd', 'd', 'd'),
(3, 2, 'SSC/Equivalent', 'Second Division/Class', '2023', 'q', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employments`
--

CREATE TABLE IF NOT EXISTS `tbl_employments` (
  `pk_employment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `total_experience` text COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `responsibilities` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_employment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_employments`
--

INSERT INTO `tbl_employments` (`pk_employment_id`, `fk_user_id`, `start_date`, `end_date`, `total_experience`, `company_name`, `designation`, `responsibilities`) VALUES
(3, 2, '2018-04-14', NULL, '0 Year, 0 Months, 2 Days', 'EFDS', 'DFSDFS', ''),
(4, 2, '2018-03-07', NULL, '', '3DEVs IT Ltd', 'Software Engineer', ''),
(5, 1, '2018-01-01', NULL, '', '3DEVs IT LTD', 'operations Manager', ''),
(7, 5, '2018-04-17', '2018-04-13', '0 Year, 0 Months, 4 Days', '433', '3433', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hobbies_and_interests`
--

CREATE TABLE IF NOT EXISTS `tbl_hobbies_and_interests` (
  `pk_interest_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_interest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_hobbies_and_interests`
--

INSERT INTO `tbl_hobbies_and_interests` (`pk_interest_id`, `fk_user_id`, `name`, `description`) VALUES
(1, 1, 'Playing football', ''),
(3, 5, 'd', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_honors_and_awards`
--

CREATE TABLE IF NOT EXISTS `tbl_honors_and_awards` (
  `pk_award_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_award_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_honors_and_awards`
--

INSERT INTO `tbl_honors_and_awards` (`pk_award_id`, `fk_user_id`, `name`, `date`) VALUES
(1, 1, 'HBC', '2018/04/03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE IF NOT EXISTS `tbl_languages` (
  `pk_language_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `reading` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `writhing` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `speaking` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`pk_language_id`, `fk_user_id`, `name`, `reading`, `writhing`, `speaking`) VALUES
(5, 5, 'Bangla', 'High', 'Low', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_memberships`
--

CREATE TABLE IF NOT EXISTS `tbl_memberships` (
  `pk_membership_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `institute` text COLLATE utf8_unicode_ci NOT NULL,
  `expiry_date` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_membership_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_memberships`
--

INSERT INTO `tbl_memberships` (`pk_membership_id`, `fk_user_id`, `name`, `institute`, `expiry_date`) VALUES
(1, 1, 'General Member', 'BAFIITA', '1/1/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_password_change_requests`
--

CREATE TABLE IF NOT EXISTS `tbl_password_change_requests` (
  `pk_request_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `property` text COLLATE utf8_unicode_ci NOT NULL,
  `temporary_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 - Active | 0 - Inactive',
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pk_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolios`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolios` (
  `pk_portfolio_id` int(5) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_portfolio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_portfolios`
--

INSERT INTO `tbl_portfolios` (`pk_portfolio_id`, `fk_user_id`, `name`, `link`, `description`) VALUES
(9, 5, 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_professional_skills`
--

CREATE TABLE IF NOT EXISTS `tbl_professional_skills` (
  `pk_skill_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_professional_skills`
--

INSERT INTO `tbl_professional_skills` (`pk_skill_id`, `fk_user_id`, `name`, `description`) VALUES
(2, 5, 'f', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_references`
--

CREATE TABLE IF NOT EXISTS `tbl_references` (
  `pk_reference_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `organization` text COLLATE utf8_unicode_ci NOT NULL,
  `designation` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile_office` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile_home` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `relation` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_reference_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_references`
--

INSERT INTO `tbl_references` (`pk_reference_id`, `fk_user_id`, `name`, `organization`, `designation`, `mobile_office`, `mobile_home`, `email`, `address`, `relation`) VALUES
(1, 1, 'Md. Rafiqul Islam', 'ABC Corporation', 'CEO', '0189237490391', '122345', 'RAFID@GMAIL.COM', 'UTTARA', 'FRIEND');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resumes`
--

CREATE TABLE IF NOT EXISTS `tbl_resumes` (
  `pk_resume_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pk_resume_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_resumes`
--

INSERT INTO `tbl_resumes` (`pk_resume_id`, `name`) VALUES
(1, 'Accounting/Finance'),
(2, 'Bank/Non-Bank Fin. Institution'),
(3, 'Commercial/Supply Chain'),
(4, 'Education/Training'),
(5, 'Engineer/Architect'),
(6, 'Garments/Textile'),
(7, 'General Management/Admin'),
(8, 'IT/Telecommunication'),
(9, 'Marketing/Sales'),
(10, 'Media/Advertisement/Event Mgt.'),
(11, 'Medical/Pharma'),
(12, 'NGO/Development'),
(13, 'Research/Consultancy'),
(14, 'Secretary/Receptionist'),
(15, 'Data Entry/Operator/BPO'),
(16, 'Customer Support/Call Centre'),
(17, 'HR/Org. Development'),
(18, 'Design/Creative'),
(19, 'Production/Operation'),
(20, 'Hospitality/ Travel/ Tourism'),
(21, 'Beauty Care/ Health & Fitness'),
(22, 'Law/Legal'),
(23, 'Electrician/ Construction/ Repair'),
(24, 'Security/Support Service'),
(25, 'Driving/Motor Technician'),
(26, 'Agro (Plant/Animal/Fisheries)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `pk_user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_resume_id` int(5) DEFAULT NULL,
  `sex` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `profile_picture` text COLLATE utf8_unicode_ci,
  `profile_picture_thumb` text COLLATE utf8_unicode_ci,
  `resume_title` text COLLATE utf8_unicode_ci,
  `father_name` text COLLATE utf8_unicode_ci,
  `mother_name` text COLLATE utf8_unicode_ci,
  `date_of_birth` date DEFAULT NULL,
  `religion` text COLLATE utf8_unicode_ci,
  `marital_status` text COLLATE utf8_unicode_ci,
  `nationality` text COLLATE utf8_unicode_ci,
  `permanent_address` text COLLATE utf8_unicode_ci,
  `present_city` text COLLATE utf8_unicode_ci,
  `current_career_level` text COLLATE utf8_unicode_ci,
  `education_level` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `user_type` tinyint(1) NOT NULL COMMENT '1 - Administrator, 2 = User',
  `view_counter` int(3) DEFAULT '0',
  `user_progress` bigint(20) NOT NULL DEFAULT '0',
  `user_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Inactive, 1 - Active',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`pk_user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `fk_resume_id`, `sex`, `mobile`, `profile_picture`, `profile_picture_thumb`, `resume_title`, `father_name`, `mother_name`, `date_of_birth`, `religion`, `marital_status`, `nationality`, `permanent_address`, `present_city`, `current_career_level`, `education_level`, `summary`, `user_type`, `view_counter`, `user_progress`, `user_status`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(1, 'Md Shariful Islam', 'Sajib', '', 'sajib@gmail.com', 'sajib123', 1, 'Male', 1782088923, '15ac635779eb234eb7c854ab68816f70.png', '15ac635779eb234eb7c854ab68816f70_thumb.png', 'Business men', 'Nasir Uddin', 'Mozida Begum', '1993-01-01', 'Islam', 'Married', 'Bangladeshi', 'uttara', 'Dhaka, Bangladesh', 'Manager (Manager/Supervisor of Staff)', 'Bachelor/Honors', '', 2, 2, 0, 1, 1, '2018-04-16 11:03:22', 1, '2018-04-19 07:11:34'),
(2, 'Sk', 'Arnov', 'arif123rrrr', 'admin@me.com', '111111', 1, 'Male', 1719020200, NULL, '1cd277459a71a8dc145a030afdfd4238_thumb.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DD', 2, 1, 95, 1, 2, '2018-04-16 07:37:03', 2, '2018-04-19 09:13:21'),
(3, 'New', 'User', '', 'shs@Hh.com', '222222', 1, 'Male', 9367382987, '', NULL, 'D', 'S', 'S', '2018-04-24', 'Islam', 'Married', 'S', 'S', 'Dubai - United Arab Emirates', 'Executive (SVP, VP, Department Head etc)', 'Masters', 'd', 2, 2, 40, 1, 3, '2018-04-17 08:08:22', NULL, NULL),
(5, 'd', 'd', 'gggggg', 'g@g.com', '333333', 1, 'Male', 32324323432, '', NULL, 'd', 'd', 'd', '2018-04-09', 'd', 'Married', 'd', 'd', 'Dubai - United Arab Emirates', 'Executive (SVP, VP, Department Head etc)', 'Diploma', 's', 2, 2, 99, 1, 5, '2018-04-17 10:08:23', 5, '2018-04-18 08:37:07'),
(8, 'ami', 'tumi', '', 'ami@tumi.com', '32', 26, 'Male', 23232323222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 2, 2, 0, 1, NULL, '2018-04-17 13:44:06', 8, '2018-04-17 14:16:19'),
(9, 'ARF', 'JOY', '', 'sajib@3-devs.com', 'sajib123', 6, 'Male', 1677066468, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 2, 0, 0, 1, NULL, '2018-04-19 07:14:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_activities`
--

CREATE TABLE IF NOT EXISTS `tbl_user_activities` (
  `pk_user_activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `activity_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `activity` text COLLATE utf8_unicode_ci NOT NULL,
  `activity_url` text COLLATE utf8_unicode_ci NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` text COLLATE utf8_unicode_ci,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`pk_user_activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_meta`
--

CREATE TABLE IF NOT EXISTS `tbl_user_meta` (
  `user_meta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `user_meta_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_meta_value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_meta_id`),
  KEY `USER ID INDEXED` (`fk_user_id`) COMMENT 'GOOD FOR SEARCH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_progresses`
--

CREATE TABLE IF NOT EXISTS `tbl_user_progresses` (
  `pk_progress_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `account_setting` int(2) NOT NULL DEFAULT '0',
  `basic_info` int(2) DEFAULT '0',
  `summary` int(2) DEFAULT '0',
  `portfolio` int(1) DEFAULT '0',
  `education` int(2) DEFAULT '0',
  `employment_history` int(2) DEFAULT '0',
  `specialization` int(1) DEFAULT '0',
  `language` int(1) DEFAULT '0',
  `hobbies_and_interest` int(2) DEFAULT '0',
  `reference` int(1) DEFAULT '0',
  PRIMARY KEY (`pk_progress_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user_progresses`
--

INSERT INTO `tbl_user_progresses` (`pk_progress_id`, `fk_user_id`, `account_setting`, `basic_info`, `summary`, `portfolio`, `education`, `employment_history`, `specialization`, `language`, `hobbies_and_interest`, `reference`) VALUES
(1, 5, 10, 30, 10, 5, 15, 20, 2, 5, 2, 0),
(2, 2, 80, 0, 0, 0, 15, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifications`
--

CREATE TABLE IF NOT EXISTS `tbl_verifications` (
  `pk_verification_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_user_id` bigint(20) NOT NULL,
  `verification_property` text COLLATE utf8_unicode_ci NOT NULL,
  `pin_code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pk_verification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_verifications`
--

INSERT INTO `tbl_verifications` (`pk_verification_id`, `fk_user_id`, `verification_property`, `pin_code`, `status`, `created_at`, `modified_at`) VALUES
(1, 9, 'sajib@3-devs.com', '585437', 1, '2018-04-19 07:14:14', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
