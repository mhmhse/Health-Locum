-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2018 at 12:25 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `dname`, `email`, `password`) VALUES
(2, 'Musa Abdullah', 'jobs@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Kehinde Beson', 'support@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'AGATHA REBBECA', 'agatharebbeca@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_id` text NOT NULL,
  `doctor_id` text NOT NULL,
  `request_id` text NOT NULL,
  `status` text NOT NULL,
  `pay_from_hospital` text NOT NULL,
  `doctors_wages` text NOT NULL,
  `date_from` text NOT NULL,
  `date_to` text NOT NULL,
  `shift_type` text NOT NULL,
  `date_started` text NOT NULL,
  `payment_mode` text NOT NULL,
  `additional_info` text NOT NULL,
  `date_logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `hospital_id`, `doctor_id`, `request_id`, `status`, `pay_from_hospital`, `doctors_wages`, `date_from`, `date_to`, `shift_type`, `date_started`, `payment_mode`, `additional_info`, `date_logged`) VALUES
(4, '1', '1', '8', 'Paused', '51000', '23000', '2015-07-02', '2016-04-10', 'Mixed shfit', '2015-07-01', 'Monthly', 'Thnank you very much', '2015-07-07 19:52:56'),
(5, '1', '7', '9', 'Active', '3000', '2800', '2015-07-07', '2015-08-19', 'day shift', '2015-07-09', 'Monthly', 'PLease process this Asap', '2015-07-09 16:29:55'),
(6, '1', '1', '10', 'Active', '65000', '50000', '2015-07-09', '2016-07-11', 'day shift', '2015-07-10', 'Monthly', 'GT Bank 457638950', '2015-07-09 19:04:29'),
(7, '3', '4', '17', 'Active', '60000', '55000', '2015-07-11', '2015-09-24', 'night shift', '2015-07-12', 'Monthly', 'Thank you', '2015-07-10 13:23:17'),
(8, '7', '10', '18', 'Paused', '75000', '60000', '2015-07-11', '2015-09-16', 'day shift', '2015-07-12', 'Monthly', 'Interpreter required for this assignmen', '2015-08-01 17:11:10'),
(9, '7', '4', '24', 'Active', '5000', '4500', '2015-08-01', '2015-08-27', 'night shift', '2015-08-05', 'Daily', '', '2015-08-01 17:16:52'),
(10, '12', '14', '26', 'Completed', '50000', '40000', '2015-09-01', '2015-11-25', 'Morning', '2015-09-02', 'Monthly', 'PLease process it', '2015-09-27 12:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `surname` text NOT NULL,
  `other_name` text NOT NULL,
  `date_of_birth` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `field_type` text NOT NULL,
  `specialist_type` text NOT NULL,
  `nationality` text NOT NULL,
  `state_of_origin` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `availability_type` text NOT NULL,
  `marital_status` text NOT NULL,
  `state_of_residence` text NOT NULL,
  `years_experience` text NOT NULL,
  `educational_qualification` text NOT NULL,
  `passport` text NOT NULL,
  `resume` text NOT NULL,
  `approved` text NOT NULL,
  `date_registered` text NOT NULL,
  `password` text NOT NULL,
  `paid` text NOT NULL,
  `completed` text NOT NULL,
  `mdcn_no` text NOT NULL,
  `activation_code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `title`, `surname`, `other_name`, `date_of_birth`, `gender`, `address`, `field_type`, `specialist_type`, `nationality`, `state_of_origin`, `phone_number`, `email`, `availability_type`, `marital_status`, `state_of_residence`, `years_experience`, `educational_qualification`, `passport`, `resume`, `approved`, `date_registered`, `password`, `paid`, `completed`, `mdcn_no`, `activation_code`) VALUES
(1, 'Mr', 'BUKOLA', 'SEGUN', '1985-05-19', 'Male', '23, Ikeja street', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Delta', '08137583191', 'bukola@yahoo.com', '', 'Single', 'Lagos', '2', 'BSc', '2015051221058', '0512210582015', 'Yes', 'Tue 12 - 05 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'Yes', 'Yes', '', ''),
(2, 'Mr', 'ADEWUSI', 'MUSA', '1990-04-20', 'Male', '23, Ikeja street', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Delta', '08137583191', 'musa@gmail.com', '', 'Married', 'Lagos', '18', 'BSc', '2015051221037', '0512210372015', 'No', 'Tue 12 - 05 - 2015', '', 'Yes', 'No', '', ''),
(3, 'Mr', 'CALEB', 'TIMOTHY', '1977-05-19', 'Male', '23, Ikeja street', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Delta', '08137583191', 'timothy@yahoo.com', '', 'Married', 'Ogun', '9', 'BSc', '2015051221043', '0512210432015', 'No', 'Tue 12 - 05 - 2015', '', 'No', 'No', '', ''),
(4, 'Mr', 'ADHAM', 'ADEJOKE', '1988-05-19', 'Male', '23, Ikeja street', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Delta', '08137583191', 'princesegzy02@yahoo.com', '', 'Single', 'Lagos', '27', 'BSc', '2015051221037', '0512210372015', 'Yes', 'Tue 12 - 05 - 2015', '', 'Yes', 'Yes', '', ''),
(5, 'Mr', 'CHIBUZO', 'DAYO', '1972-05-19', 'Male', '23, Ikeja street', 'Specialist', 'ENT Surgeon', 'Nigeria', 'Delta', '08137583191', 'kola0@yahoo.com', '', 'Married', 'Lagos', '5', 'BSc', '2015051221050', '0512210502015', 'No', 'Tue 12 - 05 - 2015', '', 'No', 'No', '', ''),
(6, 'Mr', 'AMAKA', 'SAMUEL', '1992-05-19', 'Female', '23, Ikeja street', 'Senior Medical Officer', 'Physician', 'Nigeria', 'Delta', '08137583191', 'princesegzy@hotmail.com', '', 'Married', 'Lagos', '12', 'BSc', '2015051221026', '0512210262015', 'Yes', 'Tue 12 - 05 - 2015', '', 'Yes', 'Yes', '', ''),
(7, 'Mrs', 'KEHINDE', 'SAHEED Samuel', '1960-04-01', 'Male', '23, Igbobi street, Ikeja', 'Specialist', 'Anaesthetist', 'Nigeria', 'Bayelsa', '08137583191', 'princesegzy01@gmail.com', 'Evening', 'Married', 'Kogi', '24', 'MBBS', '201507900027', '201507900040', 'Yes', 'Fri 15 - 05 - 2015', 'c1a985649bac9c71cff0573e253ed0bd', 'Yes', 'Yes', '14690754', ''),
(9, 'Mr', 'Sodimu', 'Samuel', '1980-02-01', 'Female', '23, Gbajobi', 'Senior Medical Officer', 'Physician', 'Nigeria', 'Lagos', '0807849997', 'prin@yahoo.com', '', 'Single', 'Lagos', '7', 'BSc', '201507919010', '079190102015', 'No', 'Thu 9 - 07 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'No', 'No', '8774850066', ''),
(10, 'Dr', 'Caleb', 'Bolaji', '1983-08-17', 'Male', '23, Ikeja Stree.', 'Senior Medical Officer', 'Urologist', 'Nigeria', 'Lagos', '0806452738', 'caleb@gmail.com', 'Morning', 'Single', 'Lagos', '5', 'Fellowship', 'doctor2', '0710150072015', 'Yes', 'Fri 10 - 07 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'Yes', 'Yes', '745903', ''),
(11, 'Mr', 'Tayo', 'Sokoya', '2012-07-01', 'Male', '23, ikeja', 'Medical Officer', 'Physician', 'Nigeria', 'Lagos', '080976545', 'tayo@gmail.com', 'Morning ', 'Married', 'Lagos', '11', 'MBBS', '', '', 'No', 'Mon 13 - 07 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'No', 'No', '988765', ''),
(12, 'Mr', 'Tayo', 'Sokoya', '2012-07-01', 'Male', '23, ikeja', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Lagos', '080976545', 'tayo2@gmail.com', 'Morning', 'Married', 'Lagos', '11', 'MBBS', '', '', 'Yes', 'Mon 13 - 07 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'Yes', 'Yes', '988765', ''),
(13, 'Mr', 'SODIPE', 'SAM', '2009-02-02', 'Female', '23, Agbaje stree,', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Lagos', '080945667', 'sodipesam@yahoo.com', 'All Day', 'Single', 'Lagos', '14', 'MBBS', '', '', 'No', 'Sun 27 - 09 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'No', 'No', '234', ''),
(14, 'Mrs', 'ADIGUN', 'TOBI', '1988-08-17', 'Female', '20, Victory Avenu, Ikeja', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Lagos', '08062602899', 'radigunt@gmail.com', 'All Day', 'Single', 'Lagos', '14', 'MBBS', '2015092712037', '', 'Yes', 'Sun 27 - 09 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'Yes', 'Yes', '5690', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_application`
--

CREATE TABLE IF NOT EXISTS `doctor_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` text NOT NULL,
  `doctor_id` text NOT NULL,
  `date_apply` text NOT NULL,
  `date_logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `doctor_application`
--

INSERT INTO `doctor_application` (`id`, `request_id`, `doctor_id`, `date_apply`, `date_logged`) VALUES
(2, '20', '7', 'Thu 30 - 07 - 2015', '2015-07-30 00:08:25'),
(3, '23', '7', 'Thu 30 - 07 - 2015', '2015-07-30 00:10:00'),
(4, '13', '7', 'Thu 30 - 07 - 2015', '2015-07-30 00:30:48'),
(5, '16', '10', 'Sat 1 - 08 - 2015', '2015-08-01 11:18:44'),
(6, '23', '10', 'Sat 1 - 08 - 2015', '2015-08-01 14:01:11'),
(7, '25', '14', 'Sun 27 - 09 - 2015', '2015-09-27 11:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_name` text NOT NULL,
  `address` text NOT NULL,
  `hefamaa` text NOT NULL,
  `email` text NOT NULL,
  `website` text NOT NULL,
  `phone` text NOT NULL,
  `phone2` text NOT NULL,
  `state` text NOT NULL,
  `contact_name` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_position` text NOT NULL,
  `logo` text NOT NULL,
  `password` text NOT NULL,
  `date_registered` text NOT NULL,
  `paid` text NOT NULL,
  `completed` text NOT NULL,
  `activation_code` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospital_name`, `address`, `hefamaa`, `email`, `website`, `phone`, `phone2`, `state`, `contact_name`, `contact_phone`, `contact_position`, `logo`, `password`, `date_registered`, `paid`, `completed`, `activation_code`) VALUES
(1, 'Integra Health', '13, Gbajobi street', '5629974002', 'info@integrahealth.com.ng', 'www.integrahealth.com.ng', '08137583191', '08189494789', 'Lagos', 'Sowale Samuel k.', '08097553212', 'Doctor', '201507813012', '5f4dcc3b5aa765d61d8327deb882cf99', 'Tue 12 - 05 - 2015', 'No', 'Yes', ''),
(2, 'New Ikeja International Hospital', '13, Gbajobi street', '', 'info@integra.com', 'www.integrahealth.com.ng', '08137583191', '08189494789', 'Lagos', 'Sowale Samuel k.', '08097553212', 'Doctor', '2015051216046', 'd41d8cd98f00b204e9800998ecf8427e', 'Tue 12 - 05 - 2015', 'No', 'Yes', ''),
(3, 'Testimony Hospital', '13, Gbajobi street', '677890887', 'contact@testimony.com', '', '08137583191', '08189494789', 'Lagos', 'Sowale Samuel k.', '08097553212', 'Doctor', '2015051216040', '5f4dcc3b5aa765d61d8327deb882cf99', 'Tue 12 - 05 - 2015', 'Yes', 'Yes', ''),
(6, 'Airport Hospital', '23, Airport road, Ikeja', '7500858594', 'airport@airport.com', '', '08146885907', '080974646288', 'Lagos', 'Sowale Sumbo', '08098778899', 'Chairman', '201507919023', 'd41d8cd98f00b204e9800998ecf8427e', 'Thu 9 - 07 - 2015', 'No', 'No', ''),
(7, 'Martins Hospital', '23, Gbagada Estate Lagos', '7890567', 'martins@gmail.com', '', '0809653728', '08056784937', 'Lagos', 'Dr. Martins Kolawole', '0703744927', 'Chairman', '2015071015041', '5f4dcc3b5aa765d61d8327deb882cf99', 'Fri 10 - 07 - 2015', 'Yes', 'Yes', ''),
(8, 'BIsoyegboye', '23, IKeja', '25273893', 'bisi@gmail.com', '', '7678909', '77655', 'Lagos', 'segun', '09876663', 'Director', '', 'c1a985649bac9c71cff0573e253ed0bd', 'Wed 22 - 07 - 2015', 'Yes', 'Yes', ''),
(10, 'New Ikeja Hospital', '23, Ikeja', '23389', 'princesegzy01@yahoo.com', '', '08098766525', '0809976555', 'Lagos', 'SALAMI SAMUEL', '08097654433', 'Manager', '', '319f4d26e3c536b5dd871bb2c52e3178', 'Wed 29 - 07 - 2015', 'Yes', 'Yes', ''),
(11, 'Victory HOspital', '23, Victory avenue', 'AD3456', 'victory@victory.com', 'www.victory.com', '0807654', '080876543', 'Lagos', 'segun', '09876543', 'Medical Director', '', '5f4dcc3b5aa765d61d8327deb882cf99', 'Sun 27 - 09 - 2015', 'Yes', 'Yes', ''),
(12, 'AGATHA & TOBI HOSPITAL', '18, agatha streek, mushin lagos', 'DA245678', 'bakuayie@yahoo.com', 'www.agathahospital.com', '08022343397', '080998765356', 'Lagos', 'Dr Agatha', '08022343397', 'Manager', '2015092712030', '5f4dcc3b5aa765d61d8327deb882cf99', 'Sun 27 - 09 - 2015', 'Yes', 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `match_doctor`
--

CREATE TABLE IF NOT EXISTS `match_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` text NOT NULL,
  `request_id` text NOT NULL,
  `client_check` text NOT NULL,
  `admin_approved` text NOT NULL,
  `date_logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_to_assignment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `match_doctor`
--

INSERT INTO `match_doctor` (`id`, `doctor_id`, `request_id`, `client_check`, `admin_approved`, `date_logged`, `logged_to_assignment`) VALUES
(1, '4', '1', '', '', '2015-06-17 11:20:14', ''),
(5, '6', '1', '', 'yes', '2015-06-17 14:12:14', ''),
(6, '1', '7', 'yes', '', '2015-06-22 14:57:39', ''),
(7, '4', '7', '', '', '2015-06-23 17:06:31', ''),
(8, '1', '1', '', 'yes', '2015-07-07 08:56:06', ''),
(9, '7', '16', 'yes', 'yes', '2015-07-09 16:19:58', ''),
(10, '1', '16', 'yes', 'yes', '2015-07-09 18:53:55', ''),
(11, '1', '17', '', 'yes', '2015-07-10 11:24:41', ''),
(12, '6', '17', 'yes', 'yes', '2015-07-10 11:24:41', ''),
(13, '4', '17', '', 'yes', '2015-07-10 11:37:45', ''),
(14, '10', '18', 'yes', 'yes', '2015-07-10 14:55:30', ''),
(15, '6', '18', '', '', '2015-07-10 14:55:30', ''),
(16, '1', '18', '', '', '2015-07-28 13:36:41', ''),
(18, '4', '16', 'yes', '', '2015-07-28 14:57:14', ''),
(19, '6', '23', '', '', '2015-07-29 15:47:10', ''),
(20, '7', '23', '', '', '2015-07-29 15:47:10', ''),
(21, '10', '23', '', '', '2015-07-29 15:47:10', ''),
(22, '1', '23', '', '', '2015-07-29 16:43:13', ''),
(23, '4', '23', '', '', '2015-07-29 16:43:13', ''),
(24, '12', '24', '', '', '2015-08-01 17:07:02', ''),
(25, '10', '24', '', '', '2015-08-01 17:07:02', ''),
(26, '6', '24', '', '', '2015-08-01 17:07:02', ''),
(27, '7', '24', '', 'yes', '2015-08-01 17:07:13', ''),
(28, '1', '24', '', '', '2015-08-01 17:07:33', ''),
(29, '4', '24', '', '', '2015-08-01 17:08:24', ''),
(30, '1', '26', 'yes', '', '2015-09-27 11:42:14', ''),
(31, '12', '26', '', '', '2015-09-27 11:42:14', ''),
(32, '14', '26', 'yes', 'yes', '2015-09-27 11:42:14', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` text NOT NULL,
  `doctor_id` text NOT NULL,
  `hospital_id` text NOT NULL,
  `amount_expected_hospital` text NOT NULL,
  `amount_paid_hospital` text NOT NULL,
  `refrence_number_hospital` text NOT NULL,
  `bank_name_hospital` text NOT NULL,
  `transaction_type_hospital` text NOT NULL,
  `additional_info_hospital` text NOT NULL,
  `month_paid_for` text NOT NULL,
  `admin_approved_status` text NOT NULL,
  `date_paid_hospital` text NOT NULL,
  `amount_expected_doctor` text NOT NULL,
  `amount_paid_doctor` text NOT NULL,
  `refrence_number_doctor` text NOT NULL,
  `bank_name_doctor` text NOT NULL,
  `transaction_type_doctor` text NOT NULL,
  `date_paid_doctor` text NOT NULL,
  `additional_information_doctor` text NOT NULL,
  `doctor_approved_status` text NOT NULL,
  `date_logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `assignment_id`, `doctor_id`, `hospital_id`, `amount_expected_hospital`, `amount_paid_hospital`, `refrence_number_hospital`, `bank_name_hospital`, `transaction_type_hospital`, `additional_info_hospital`, `month_paid_for`, `admin_approved_status`, `date_paid_hospital`, `amount_expected_doctor`, `amount_paid_doctor`, `refrence_number_doctor`, `bank_name_doctor`, `transaction_type_doctor`, `date_paid_doctor`, `additional_information_doctor`, `doctor_approved_status`, `date_logged`) VALUES
(1, '4', '1', '1', '51000', '5000', '', '', 'Cash', 'Thank you', '', '', '2015-07-08 16:31:24', '23000', '23000', '', '', 'Bank Transfer', 'NOW()', 'Thnak you', 'Completed', '2015-07-09 09:23:44'),
(2, '4', '1', '1', '51000', '5200', '08994t53', 'Skye Bank 000983', 'Bank Transfer', 'This is for the month', '03-2015', '', '2015-07-08 16:48:32', '23000', '23000', '', '', 'Cash', '2015-07-09 10:45:49', 'Ok', 'Completed', '2015-07-09 09:45:49'),
(3, '4', '1', '1', '51000', '4500', '', '', 'Cash', 'No problem', '06-2015', '', '2015-07-08 16:59:43', '23000', '23000', '', '', 'Bank Transfer', 'NOW()', 'Thnak you', 'Completed', '2015-07-09 09:23:41'),
(4, '4', '1', '1', '51000', '5100', '', '', 'Cash', 'ok', '04-2015', 'Pending', '2015-07-08 17:18:10', '23000', '23000', '', '', 'Bank Transfer', 'NOW()', 'Thnak you', 'Completed', '2015-07-09 09:23:39'),
(5, '4', '1', '1', '51000', '5000', '', '', 'Cash', 'Thannk', '05-2015', 'Pending', '2015-07-08 17:38:09', '23000', '23000', '', '', 'Bank Transfer', 'NOW()', 'Thnak you', 'Completed', '2015-07-09 09:21:33'),
(6, '4', '1', '1', '51000', '51000', '', '', 'Cash', 'ok', '07-2010', 'Pending', '2015-07-09 11:41:50', '', '', '', '', '', '', '', 'Pending', '2015-07-09 10:41:50'),
(7, '4', '1', '1', '51000', '51000', '', '', 'Cash', 'Payment for the month of August', '08-2015', 'Pending', '2015-07-09 20:10:52', '23000', '23000', '', '', 'Bank Transfer', '2015-07-09 20:14:23', 'Referece code : 78909766', 'Completed', '2015-07-09 19:14:23'),
(8, '4', '1', '1', '51000', '51000', '678975677', '', 'Cash', 'Paid to GTB Account number 799033', '07-2015', 'Pending', '2015-07-10 12:14:55', '', '', '', '', '', '', '', 'Pending', '2015-07-10 11:14:55'),
(9, '7', '4', '3', '60000', '60000', '678990', '', 'Cash', 'Paid', '07-2015', 'Pending', '2015-07-10 14:27:42', '', '', '', '', '', '', '', 'Pending', '2015-07-10 13:27:42'),
(10, '8', '10', '7', '75000', '75000', '789890', 'GTB MEDLIN 0012445', 'Bank Transfer', 'Payment Successful', '08-2015', 'Pending', '2015-07-10 16:27:32', '60000', '60000', '', '', 'Bank Transfer', '2015-07-10 16:35:35', 'Reference number : 45678', 'Completed', '2015-07-10 15:35:35'),
(11, '8', '10', '7', '75000', '75000', 'xxxx', 'xx', 'Bank Transfer', 'xxxx', '08-2012', 'Completed', '2015-07-15 14:34:38', '60000', '60000', '', '', 'Bank Transfer', '2015-07-15 14:34:38', 'zxczc', 'Completed', '2015-07-15 14:02:46'),
(12, '4', '1', '1', '51000', '51000', '4566', 'GTB', 'Bank Transfer', 'Thank you', '08-2015', 'Completed', '2015-08-01 18:26:37', '23000', '23000', '', '', 'Bank Transfer', '2015-08-01 18:26:37', 'wELCOME''S', 'Completed', '2015-08-01 17:26:37'),
(13, '10', '14', '12', '50000', '50000', '13897534344', 'GT BANK', 'Cheque', 'Paid', '10-2015', 'Completed', '2015-09-27 13:05:19', '40000', '40000', '', '', 'Bank Transfer', '2015-09-27 13:05:19', 'SKYE BANK - 1228799', 'Completed', '2015-09-27 12:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `payment2`
--

CREATE TABLE IF NOT EXISTS `payment2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_id` text NOT NULL,
  `num_of_provider` text NOT NULL,
  `specialization` text NOT NULL,
  `state` text NOT NULL,
  `shift_type` text NOT NULL,
  `year_of_experience` text NOT NULL,
  `year_of_experience_min` text NOT NULL,
  `year_of_experience_max` text NOT NULL,
  `age_range` text NOT NULL,
  `age_range_min` text NOT NULL,
  `age_range_max` text NOT NULL,
  `request_type` text NOT NULL,
  `duration_from` text NOT NULL,
  `duration_to` text NOT NULL,
  `additional_information` text NOT NULL,
  `date_posted` text NOT NULL,
  `job_type` text NOT NULL,
  `taken` text NOT NULL,
  `hot_job` text NOT NULL,
  `notify` text NOT NULL,
  `locked` text NOT NULL,
  `date_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `hospital_id`, `num_of_provider`, `specialization`, `state`, `shift_type`, `year_of_experience`, `year_of_experience_min`, `year_of_experience_max`, `age_range`, `age_range_min`, `age_range_max`, `request_type`, `duration_from`, `duration_to`, `additional_information`, `date_posted`, `job_type`, `taken`, `hot_job`, `notify`, `locked`, `date_timestamp`) VALUES
(1, '1', '12', 'Doctor', 'Lagos', 'day shift', '3', '', '', '15;37', '15', '37', '', '', '', 'Thank You', 'Thu 14 - 05 - 2015', 'Contract', 'No', 'yes', '', '', '0000-00-00 00:00:00'),
(2, '2', '12', 'Doctor', 'Ogun', 'day shift', '3', '', '', '15;37', '15', '37', '', '', '', 'Thank You', 'Thu 14 - 05 - 2015', 'Full time', 'No', '', '', '', '0000-00-00 00:00:00'),
(3, '1', '3', 'Paediatrics', 'Benue', 'night shift', '15', '', '', '28;44', '28', '44', '', '', '', 'Thank You', 'Thu 14 - 05 - 2015', 'Full time', 'No', '', '', '', '0000-00-00 00:00:00'),
(4, '2', '4', 'Neurosurgery', 'Bauchi', 'day shift', '6', '', '', '29;44', '29', '44', '', '', '', 'Quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic', 'Fri 15 - 05 - 2015', 'Contract', 'No', 'yes', '', '', '0000-00-00 00:00:00'),
(5, '1', '3', 'General surgery', 'Lagos', 'day shift', '8', '', '', '23;35', '23', '35', '', '', '', 'This request is urgently needed', 'Tue 19 - 05 - 2015', 'Contract', 'No', '', '', '', '0000-00-00 00:00:00'),
(6, '1', '3', 'Doctor', 'Lagos', 'day shift', '5', '', '', '23;42', '23', '42', '', '', '', 'Urgent', 'Tue 19 - 05 - 2015', 'Contract', 'No', '', '', '', '0000-00-00 00:00:00'),
(7, '1', '2', 'General surgery', 'Anambra', 'day shift', '1;5', '1', '5', '15;19', '15', '19', '', '', '', 'sc', 'Wed 10 - 06 - 2015', 'Full time', 'No', '', '', '', '0000-00-00 00:00:00'),
(8, '1', '2', 'Doctor', 'Lagos', 'Mixed shfit', '1;6', '1', '6', '15;26', '15', '26', '', '', '', 'Segun', 'Mon 6 - 07 - 2015', 'Short term', 'yes', '', '', '', '2015-07-07 15:50:00'),
(9, '1', '2', 'Doctor', 'Lagos', 'day shift', '', '', '', '', '', '', '', '01-02-2009', '01-02-2010', 'THank you', 'Wed 8 - 07 - 2015', 'Short term', 'yes', '', '', '', '2015-07-09 16:29:56'),
(10, '1', '2', 'Doctor', 'Lagos', 'day shift', '', '', '', '', '', '', '', '01-02-2009', '01-02-2010', 'THank you', 'Wed 8 - 07 - 2015', 'Short term', 'yes', '', 'Checked', '', '2015-07-09 19:01:58'),
(11, '1', '2', 'Doctor', 'Lagos', 'day shift', '', '', '', '', '', '', '', '01-02-2009', '01-02-2010', 'THank you', 'Wed 8 - 07 - 2015', 'Short term', 'No', '', 'Checked', '', '2015-07-09 18:15:18'),
(12, '1', '2', 'Doctor', 'Lagos', 'Mixed shfit', '1;8', '1', '8', '', '', '', '', '01-07-2010', '01-08-2010', 'kkk', 'Wed 8 - 07 - 2015', 'Mid term', 'No', '', 'Checked', '', '2015-07-09 20:25:31'),
(13, '1', '2', 'Doctor', 'Lagos', 'day shift', '1;11', '1', '11', '15;45', '15', '45', '', '01-07-2015', '01-07-2016', 'Thank upi', 'Wed 8 - 07 - 2015', 'Short term', 'No', '', 'Checked', '', '2015-07-09 18:07:08'),
(14, '1', '6', 'Doctor', 'Lagos', 'night shift', '1;4', '1', '4', '15;31', '15', '31', '', '01-07-2015', '01-07-2016', 'I need this request urgently', 'Wed 8 - 07 - 2015', 'Long term', 'No', '', 'Checked', '', '2015-07-15 12:31:12'),
(15, '1', '2', 'Doctor', 'Lagos', 'day shift', '1;6', '1', '6', '15;28', '15', '28', 'Urgent', '01-07-2015', '23-08-2016', 'Additional Information is required', 'Wed 8 - 07 - 2015', 'Short term', 'No', '', 'Checked', '', '2015-07-09 18:06:50'),
(16, '3', '4', 'Doctor', 'Lagos', 'night shift', '1;9', '1', '9', '15;49', '15', '49', 'Urgent', '01-04-2009', '01-08-2016', 'Please supply urgently', 'Thu 9 - 07 - 2015', 'Short term', 'No', '', 'Checked', '', '2015-07-09 18:52:08'),
(17, '3', '1', 'Doctor', 'Lagos', 'night shift', '1;14', '1', '14', '20;53', '20', '53', 'Urgent', '01-08-2015', '01-08-2016', 'Please Supply Urgently', 'Fri 10 - 07 - 2015', 'Short term', 'yes', '', 'Checked', '', '2015-07-10 13:23:17'),
(19, '3', '3', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Urgent', '01-07-2015', '30-07-2015', 'This request is urgent', 'Tue 28 - 07 - 2015', 'Obstetrician/Gynaecologist', 'No', '', '', '', '2015-07-28 17:27:11'),
(20, '3', '3', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Urgent', '01-07-2015', '30-07-2015', 'This request is urgent', 'Tue 28 - 07 - 2015', 'Obstetrician/Gynaecologist', 'No', '', 'Checked', '', '2015-07-30 00:26:57'),
(23, '10', '3', 'Senior Medical Officer', 'Lagos', 'Night', '', '', '', '', '', '', 'Routine', '01-07-2015', '23-08-2017', 'Thank you', 'Wed 29 - 07 - 2015', 'Paediatrician', 'No', '', 'Checked', '', '2015-07-30 00:27:06'),
(24, '7', '2', 'Specialist', 'Lagos', 'Morning', '', '', '', '', '', '', 'Emergency', '01-08-2015', '01-09-2015', 'Please fulfil this reques as soon as possible''s . Thanks in anticipation', 'Sat 1 - 08 - 2015', 'ENT Surgeon', 'yes', '', 'Checked', '', '2015-08-01 17:16:52'),
(25, '1', '2', 'Specialist', 'Lagos', 'Morning', '', '', '', '', '', '', 'Emergency', '01-08-2015', '01-08-2016', 'Than''s you', 'Sat 1 - 08 - 2015', 'Psychiatrist', 'No', '', 'Checked', '', '2015-09-27 12:18:57'),
(26, '12', '3', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-09-2015', '25-11-2015', 'Doctors must have experience', 'Sun 27 - 09 - 2015', 'General Practitioner', 'yes', '', 'Checked', '', '2015-09-27 11:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `testimony_hospital`
--

CREATE TABLE IF NOT EXISTS `testimony_hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital` text NOT NULL,
  `testimony` text NOT NULL,
  `updated_testimony` text NOT NULL,
  `admin_posted` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimony_hospital`
--

INSERT INTO `testimony_hospital` (`id`, `hospital`, `testimony`, `updated_testimony`, `admin_posted`, `date_posted`) VALUES
(1, '3', 'This is what i have been looking  since all this years', 'This is what i have been looking  since all this years.\n\nThis is great', 'Yes', '2015-07-28 16:36:43'),
(2, '3', 'Thank you for providing this platform', 'In promotion and of advertising, a testimonial or show consists of a person''s written or spoken statement extolling the virtue of a product. The term "testimonial" most commonly applies to the sales-pitches attributed to ordinary citizens, whereas the word "endorsement" usually applies to pitches by celebrities. Testimonials can be part of communal marketing.', 'Yes', '2015-07-29 20:03:27'),
(3, '3', 'THis Platform is gream', 'THis Platform is great.', 'Yes', '2015-07-28 17:59:20'),
(4, '7', 'This Platform helped me to get the best doctor for my jobs', 'This Platform helped me to get the best doctor for my jobs. thank you', 'Yes', '2015-08-01 16:51:16'),
(5, '12', 'This platform is good to get good doctors', 'This platform is good to get good doctors. Thank you', 'Yes', '2015-09-27 12:09:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
