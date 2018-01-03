-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2016 at 03:55 PM
-- Server version: 5.6.31
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medlinel_medline`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `dname`, `email`, `password`) VALUES
(2, 'Atobajaye', 'atobajaye@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Akeredolu Kehinde', 'kehinde@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'AGATHA REBBECA', 'agatha@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Akeredolu Olajide', 'olajide@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'Rebecca', 'rebecca@medlinelocum.com', '5f4dcc3b5aa765d61d8327deb882cf99');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `title`, `surname`, `other_name`, `date_of_birth`, `gender`, `address`, `field_type`, `specialist_type`, `nationality`, `state_of_origin`, `phone_number`, `email`, `availability_type`, `marital_status`, `state_of_residence`, `years_experience`, `educational_qualification`, `passport`, `resume`, `approved`, `date_registered`, `password`, `paid`, `completed`, `mdcn_no`, `activation_code`) VALUES
(7, 'Mrs', 'KEHINDE', 'SAHEED Samuel', '1960-04-01', 'Male', '23, Igbobi street, Ikeja', 'Specialist', 'Anaesthetist', 'Nigeria', 'Bayelsa', '08137583191', 'princesegzy01@gmail.com', 'All Day', 'Married', 'Kogi', '24', 'MBBS', '201507900027', '201507900040', 'No', 'Fri 15 - 05 - 2015', 'c1a985649bac9c71cff0573e253ed0bd', 'No', 'No', '14690754', ''),
(20, 'Dr', 'Okorie', 'Akunna Paul', '2015-07-17', 'Male', '66 Agege Motor Road,Mushin Lagos', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Enugu', '08060003400', 'doctorosama85@yahoo.com', 'All Day', 'Single', 'Lagos', '4', 'MBBS', '', '', 'Yes', 'Mon 12 - 10 - 2015', '31de67425efaa20653f47944d1c762b0', 'Yes', 'Yes', '61857', ''),
(21, 'Dr', 'FAMOJURO', 'OLUWASEUN OLATUNJI', '1988-02-13', 'Male', '5,Bola Hassan Street,Alapere, Ketu, Lagos.', 'Medical Officer', 'None', 'Nigeria', 'Osun', '08062781539', 'seunbastic001@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '', '', 'Yes', 'Tue 13 - 10 - 2015', 'bf2fe3d86fbd0ff81447079ca6aac461', 'Yes', 'Yes', 'PM54140', ''),
(22, 'Dr', 'OHIA', 'STANLEY CHIDOZIE', '1974-04-15', 'Male', '23,Kingsley okoh drive off custom busstop,Abaranje Ikotun.', 'Senior Medical Officer', 'None', 'Nigeria', 'Enugu', '08145445029', 'ohia2020@yahoo.com', 'All Day', 'Married', 'Lagos', '15', 'MBBS', '', '', 'Yes', 'Wed 14 - 10 - 2015', '72b302bf297a228a75730123efef7c41', 'Yes', 'Yes', 'FM29421', ''),
(23, 'Dr', 'Amade', 'Alexander', '1983-12-23', 'Male', '13 Wuraola st ladipo Oshodi', 'Medical Officer', 'None', 'Nigeria', 'Kogi', '08032151439', 'alexzito2002@yahoo.com', 'Night', 'Married', 'Lagos', '4', 'MBBS', '', '', 'Yes', 'Thu 15 - 10 - 2015', '7d65df07f62d55f2941a9f56f57cd6e7', 'Yes', 'No', '63952', ''),
(24, 'Dr', 'Ogunji', 'Akintayo', '1989-05-21', 'Male', '28A, Alfred Aken street, Olowora, Isheri, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Ondo', '08027524633', 'akintayoogunji@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '', '', 'Yes', 'Fri 16 - 10 - 2015', '160cdeec21ad44062d2dc368fe6d912a', 'Yes', 'No', 'MDCN/R/68965', ''),
(25, 'Dr', 'ONABANJO', 'MOJISOLA', '1979/15/06', 'Female', 'TOS BENSON ESTATE IKD LAGOS', 'Medical Officer', 'None', 'Nigeria', 'Lagos', '08034634115', 'queendoyin@yahoo.com', 'Morning', 'Married', 'Lagos', '3', 'MBBS', '', '', 'No', 'Fri 16 - 10 - 2015', 'a1e2b776cbaa5697dd2f3e23fc5c4f71', 'Yes', 'No', 'PM 51394     2012', ''),
(26, 'Dr', 'Ezenwa', 'Beatrice', '1970-08-20', 'Female', '11 Oyedele Close, Shomolu, Lagos', 'Specialist', 'Paediatrician', 'Nigeria', 'Anambra', '08051403189', 'beatriceezenwa@gmail.com', 'Mini', 'Married', 'Lagos', '14', 'Fellowship', '2015101700018', '1017000182015', 'Yes', 'Sat 17 - 10 - 2015', '58657c91850ff56cd8ba0b4c74273f5d', 'Yes', 'Yes', 'FM 28139', ''),
(27, 'Mr', 'Akeredolu', 'Kehinde', '22/10/1991', 'Male', '12 Omo-Ighodalo Street', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Ondo', '+2348124668562', 'kayzkenny@gmail.com', 'Morning', 'Single', 'Lagos', '1', 'Diploma', '', '', 'No', 'Mon 19 - 10 - 2015', '2ae38e2de7f0e95af18ad9fe11bf96ec', 'No', 'No', '06020602', ''),
(28, 'Dr', 'Ajala', 'Olasunkanmi', '1978-04-22', 'Male', '7A Samuel Onafuwa Close, River Valley estate, Ojodu Berger, Lagos/Ogun Boundary area, Ogun State', 'Senior Medical Officer', 'None', 'Nigeria', 'Kwara', '08183543418', 'ajalaot@gmail.com', 'All Day', 'Married', 'Lagos', '8', 'MBBS', '', '', 'Yes', 'Tue 20 - 10 - 2015', 'cd6b474678b7d4a4d40d9acfeaa46c4e', 'Yes', 'No', '36,983', ''),
(29, 'Dr', 'Ndilemeni', 'Okechukwu', '1984-04-20', 'Male', '14,Amusan Street,New Oko-oba, Lagos.', 'Medical Officer', 'None', 'Nigeria', 'Anambra', '08138255953', 'okkestra@yahoo.co.uk', 'Mini', 'Married', 'Lagos', '6', 'MBBS', '', '', 'Yes', 'Tue 20 - 10 - 2015', 'a0c0a821573e9d74edd7d811321047e0', 'Yes', 'No', '56562', ''),
(30, 'Dr', 'Asasah', 'Sunday Iphierohor', '06/ 05/ 1979', 'Male', '12 adejobi crescent, aladura estate, anthony, lagos state', 'Medical Officer', 'None', 'Nigeria', 'Delta', '08037790475', 'hopesony20@gmail.com', 'Morning', 'Married', 'Lagos', '3', 'MBBS', '', '', 'Yes', 'Wed 21 - 10 - 2015', '9e7cd19ffbe19bee591af4bae216639c', 'Yes', 'No', '66738', ''),
(31, 'Dr', 'Seriki', 'ibrahim', '1984-01-05', 'Male', '43a Abosede Kuboye Cr  Eric Moore Surulere', 'Senior Medical Officer', 'None', 'Nigeria', 'Lagos', '+2348020973573', 'serikibrahim@yahoo.com', 'All Day', 'Single', 'Lagos', '5', 'MBBS', '2015102211030', '1022110302015', 'Yes', 'Thu 22 - 10 - 2015', '32352e665554abedd99004b6a45f68c4', 'Yes', 'No', 'PM49062', ''),
(32, 'Dr', 'Bakare', 'David Olorunnishola', '1986-05-30', 'Male', '4, Adesiyan Lawal Close, Ipaja, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Kwara', '08030813384', 'davidobakare@gmail.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '2015102310031', '1023100312015', 'Yes', 'Fri 23 - 10 - 2015', 'e36bb832c6550e87daece530c8b9a3ca', 'Yes', 'No', 'FM 56677', ''),
(33, 'Dr', 'OTOTE', 'DAVID', '1966-07-27', 'Male', '30 daniel ishola street Oshodi, Lagos.', 'Specialist', 'Psychiatrist', 'Nigeria', 'Edo', '08171752543', 'awo35@hotmail.com', 'All Day', 'Married', 'Lagos', '25', 'MBBS', '', '', 'Yes', 'Fri 23 - 10 - 2015', '62c8ad0a15d9d1ca38d5dee762a16e01', 'Yes', 'No', '19,872', ''),
(34, 'Mr', 'Ekundare', 'Tolulope', '1979-03-17', 'Male', 'Blk 16,Flat 17,Games Village Surulere, Lagos', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Osun', '08033745616', 'toleksy2000@yahoo.com', 'All Day', 'Married', 'Lagos', '4', 'MBBS', '', '', 'Yes', 'Mon 26 - 10 - 2015', '87b981186bc5f82230d0a7310abb0d0c', 'Yes', 'Yes', 'PM38060', ''),
(35, 'Mrs', 'Odeghe', 'Emuobor Aghoghor', '1974-10-20', 'Female', '6,Aro Adeyemo Avenue, Oke Alo Estate, Anthony, Lagos', 'Specialist', 'Other', 'Nigeria', 'Delta', '08023157044', 'eaodeghe@yahoo.com', 'Mini', 'Married', 'Lagos', '16', 'MBBS', '', '', 'Yes', 'Thu 29 - 10 - 2015', '4d9c6c80e372442cb27b863b68576325', 'Yes', 'No', 'md-1234', ''),
(36, 'Dr', 'Ayeni', 'Omotayo Mofoluwake', '1977-02-11', 'Female', 'Lagoon hospitals,  ikeja,  lagos', 'Specialist', 'None', 'Nigeria', 'Osun', '08033710550', 'dr.ayeni@lagoonhospitals.com', 'Mini', 'Married', 'Lagos', '13', 'Fellowship', '2015102917009', '', 'No', 'Thu 29 - 10 - 2015', 'faae2ae32314e0ba40bf4c7804e0856a', 'Yes', 'No', '40079', ''),
(37, 'Dr', 'Abraham', 'Evelyn', '1983-05-05', 'Female', '721 road k close block 1,festac town.', 'Medical Officer', 'None', 'Nigeria', 'Enugu', '08065792473', 'brightevee@gmail.com', 'Morning', 'Married', 'Lagos', '5', 'MBBS', '2015102920012', '1029200122015', 'No', 'Thu 29 - 10 - 2015', '260ca9dd8a4577fc00b7bd5810298076', 'Yes', 'No', '47037', 'e3ad48b3e04fd7e27b45d76df4f1869c'),
(38, 'Mr', 'Ayodele O', 'Ajewole', '1976-04-30', 'Male', '2,Rescue Street Futa Road, Akure, Ondo', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Ekiti', '08033540745', 'ajewolemd1978@yahoo.com', 'All Day', 'Married', 'Lagos', '11', 'MBBS', '', '', 'Yes', 'Fri 30 - 10 - 2015', '4d9c6c80e372442cb27b863b68576325', 'Yes', 'No', '39,668', ''),
(39, 'Dr', 'ESEILE', 'SAMUEL', '1982-06-02', 'Male', 'Palgrove Lagos', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Edo', '08035262432', 'drsameseile@gmail.com', 'All Day', 'Married', 'Lagos', '5', 'MBBS', '', '', 'Yes', 'Fri 30 - 10 - 2015', '9c6bdd75a050c637768098b4f5e4c7f4', 'Yes', 'Yes', '61782', ''),
(40, 'Dr', 'Adewoyin', 'Ademola', '1984-04-28', 'Male', 'Department of Haematology and Blood Transfusion,  LUTH, Idi araba, Lagos', 'Senior Medical Officer', 'Other', 'Nigeria', 'Oyo', '07033966347', 'doctordemola@gmail.com', 'Night', 'Married', 'Lagos', '8', 'MBBS', '2015103019030', '', 'Yes', 'Fri 30 - 10 - 2015', 'acdfc5ac56d98566f985fdbbdf8505b9', 'Yes', 'No', '42300', ''),
(41, 'Dr', 'Makinde', 'Oladimeji Abiodun', '1975-12-28', 'Male', '8, makinde street Alausa Ikeja Lagos.', 'Specialist', 'Obstetrician/Gynaecologist', 'Nigeria', 'Ogun', '08055147967', 'dimmaks2002@yahoo.ca', 'Mini', 'Married', 'Lagos', '13', 'MBBS', '', '', 'Yes', 'Sat 31 - 10 - 2015', 'cf2099b9347f62286d1821799c00646e', 'Yes', 'No', '39914', ''),
(42, 'Mr', 'Obiegbu', 'Onyekachukwu A.', '1979-07-30', 'Male', 'Magodo, Radio, Ikorodu Lagos', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Enugu', '08182135845', 'obiegbuonyekachukwu@yahoo.ca', 'Evening', 'Married', 'Lagos', '6', 'MBBS', '', '', 'No', 'Mon 2 - 11 - 2015', '55e5e73662fac4fb70fbe59fd4fb55a0', 'Yes', 'No', '50443', ''),
(43, 'Dr', 'Adesoye', 'Gbenga', '1987-08-08', 'Male', 'Plot 10, block 1, kayode odusola crescent, off cmd road, Magodo, Lagos.', 'Medical Officer', 'None', 'Nigeria', 'Ekiti', '08038775857', 'gbengaadesoye@gmail.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '201511408045', '', 'Yes', 'Wed 4 - 11 - 2015', '9efa400c74c71f35283402d4a2d078cb', 'Yes', 'No', 'MDCN/R/71072', ''),
(44, 'Mr', 'ekelem', 'rowland ikechukwu', 'march 5,1952', 'Male', 'no 2, yussuf.A str.afromedia estate,okoko,lagos.', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Anambra', '08033032831', 'drirowland@yahoo.com', 'Morning', 'Married', 'Lagos', '25', 'MBBS', '201511411002', '', 'Yes', 'Wed 4 - 11 - 2015', '50591307fe8f07c5a8a66bef157d4373', 'Yes', 'No', '16623', ''),
(45, 'Dr', 'Dare', 'Alexander', '1990-03-02', 'Male', 'Off LUTH Junction, Moshalasi Street, Mushin, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Osun', '08029226295', 'kinnkit@yahoo.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '201511413005', '', 'Yes', 'Wed 4 - 11 - 2015', '9dee45a24efffc78483a02cfcfd83433', 'Yes', 'No', 'FM 55417', ''),
(46, 'Dr', 'Onayemi', 'Ayokunle', '1977-05-24', 'Male', '4, Olatunji street, Ojota', 'Specialist', 'Anaesthetist', 'Nigeria', 'Lagos', '08060339090', 'kunleonayemi@yahoo.com', 'Mini', 'Married', 'Lagos', '9', 'Fellowship', '2015111001045', '', 'Yes', 'Tue 10 - 11 - 2015', 'dda9243b2a9f3108f12748e41a8a1af0', 'Yes', 'No', 'MDCN/R/49,580', ''),
(47, 'Mr', 'Balogun', 'Shamsudeen Oluwatosin', '1978-12-26', 'Male', '1, Oladosu Sanusi Street off Akanro Road Ilasamaja, Lagos', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Lagos', '08183638998', 'tosinbalogun26@yahoo.com', 'All Day', 'Single', 'Lagos', '9', 'MBBS', '', '', 'Yes', 'Thu 12 - 11 - 2015', '9af3d515304e174862d26829741e6832', 'Yes', 'No', '47035', ''),
(48, 'Dr', 'ayeni', 'omotayo', '1977-02-11', 'Female', 'lagoon hospitals', 'Specialist', 'Obstetrician/Gynaecologist', 'Nigeria', 'Osun', '08033710550', 'omitay2x@yahoo.com', 'Mini', 'Married', 'Lagos', '13', 'Fellowship', '2015111310000', '1113100002015', 'Yes', 'Fri 13 - 11 - 2015', '5e77b68c14c7ad83ed645e67b745f34f', 'Yes', 'No', '40079', ''),
(49, 'Dr', 'Mumuni', 'Sherifat Sade', '1983/01/31', 'Female', 'no 8 onipakala street off julius elebiju ketu lagos', 'Senior Medical Officer', 'Plastic Surgeon', 'Nigeria', 'Lagos', '0802981343781', 'shadeogungbaro@yahoo.com', 'All Day', 'Married', 'Lagos', '6', 'MBBS', '', '', 'Yes', 'Fri 13 - 11 - 2015', 'e9a3d9d15fa06adc4721a2d56a6594aa', 'Yes', 'Yes', '44116', ''),
(50, 'Dr', 'Uma', 'Chidiebere U.', '1981-11-21', 'Male', 'Apartment 10,Kudirat Abiola Estate ,Iju', 'Medical Officer', 'None', 'Nigeria', 'Abia', '08063400351', 'chidoxky@gmail.com', 'Morning', 'Single', 'Lagos', '4', 'MBBS', '2015111406036', '', 'No', 'Sat 14 - 11 - 2015', '46b0f5512398efed1bba807059088b5b', 'Yes', 'No', '46,459', ''),
(51, 'Dr', 'Shodunke', 'Adegbola', '1981-03-01', 'Male', 'Ajah', 'Medical Officer', 'None', 'Nigeria', 'Ogun', '08062798181', 'autheeistein2002@gmail.com', 'Evening', 'Single', 'Lagos', '3', 'MBBS', '', '', 'No', 'Sat 14 - 11 - 2015', '7f91d109870c2f26e1df64bbaf113b02', 'Yes', 'No', '63777', ''),
(52, 'Dr', 'Ezeh', 'Osita Ifeanyi', '1976-01-29', 'Male', '13 Association Avenue by boystown Ipaja Lagos', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Anambra', '07034554484', 'ezeh76@yahoo.com', 'All Day', 'Married', 'Lagos', '8', 'MBBS', '', '', 'Yes', 'Wed 18 - 11 - 2015', '19619e8504a13014548d03398581ccb5', 'Yes', 'No', '51568', ''),
(53, 'Dr', 'yakubu', 'idera', '2020-11-01', 'Male', 'ketu', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Lagos', '07051210066', 'yim8000@yahoo.com', 'All Day', 'Married', 'Lagos', '8', 'MBBS', '', '', 'No', 'Thu 19 - 11 - 2015', '5f4dcc3b5aa765d61d8327deb882cf99', 'Yes', 'No', '55628', ''),
(54, 'Dr', 'Akumabor', 'Collins', '1980-11-14', 'Male', '38 Joseph Harrison Street, Off Iwaya Road, Yaba', 'Senior Medical Officer', 'None', 'Nigeria', 'Delta', '09098844383', 'colakus@gmail.com', 'Evening', 'Single', 'Lagos', '10', 'MBBS', '2015111917056', '', 'Yes', 'Thu 19 - 11 - 2015', '1f8cc5fc53ed94a0f0ea68d85df3adba', 'Yes', 'No', '46275', ''),
(55, 'Dr', 'Ibitoye', 'Oluwasegun', '12/05/1981', 'Male', 'Plot 11, Adebayo Ogunlaja crescent, off new lagos, Irawo bus stop, Ikorodu road, Lagos.', 'Senior Medical Officer', 'None', 'Nigeria', 'Kwara', '08096032368', 'viktoye217@yahoo.com', 'Mini', 'Married', 'Lagos', '7', 'MBBS', '', '', 'Yes', 'Fri 20 - 11 - 2015', 'ffead8f75bff3df51f1a81bcc8e15945', 'Yes', 'Yes', '56,892', ''),
(56, 'Dr', 'Mallum', 'Chindo Bala', '1979-04-18', 'Male', 'No 25, Rotimi Street, off Ojuelegba- Tejuosho road, Surulere, Lagos', 'Specialist', 'Other', 'Nigeria', 'Plateau', '08034945032', 'chindomallum@hotmail.com', 'Mini', 'Single', 'Lagos', '11', 'Fellowship', '2015112415003', '1124150032015', 'Yes', 'Tue 24 - 11 - 2015', '0151bc169206a5dbf08f6701e9ae0017', 'Yes', 'No', 'FM 35147', ''),
(57, 'Dr', 'Adesipe', 'Olumide Babafemi', '1958-12-12', 'Male', '18 Ikosi road ketu Lagos.', 'Senior Medical Officer', 'None', 'Nigeria', 'Ogun', '+2348023040406', 'obaco_2007@yahoo.com', 'All Day', 'Married', 'Lagos', '29', 'MBBS', '2015112511037', '', 'Yes', 'Wed 25 - 11 - 2015', '52b278dc8b03dda6893de750cf6f3c05', 'Yes', 'No', '17750', ''),
(58, 'Dr', 'Uzoigwe', 'Onyekachi', '1977-09-28', 'Male', '22,Ganiyu Street, Alahun Ozumba Estate Maza Maza, Lagos', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Abia', '08035774928', 'kach.tony@yahoo.com', 'All Day', 'Married', 'Lagos', '11', 'MBBS', '', '', 'Yes', 'Fri 27 - 11 - 2015', '97952aecdc5671912fa511fb6c36bdcc', 'Yes', 'No', '40,386', ''),
(59, 'Dr', 'IDRIS', 'OLADIPO', '1976-03-10', 'Male', '19, Alayaki Street, Enilolobo Bus Stop, Off Oke-Aro Road, Ifo LG, Ogun  State.', 'Specialist', 'General Practitioner', 'Nigeria', 'Lagos', '08053245481', 'holladipo@yahoo.com', 'Mini', 'Married', 'Lagos', '14', 'Fellowship', '201512718058', '', 'Yes', 'Mon 7 - 12 - 2015', 'a1adf75721e4f9d91c1b50770d55d842', 'Yes', 'No', '30154      (Folio Number: 37600)', ''),
(60, 'Dr', 'adejumo', 'taiwo', '1987-06-16', 'Male', 'badore, ajah', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '08026163548', 'teeadej@gmail.com', 'Night', 'Married', 'Lagos', '2', 'MBBS', '', '', 'No', 'Fri 18 - 12 - 2015', '62cf28e4e00262ff1920c97b0e75de02', 'Yes', 'No', '57115', ''),
(61, 'Dr', 'YUSUF', 'MUNIRUDEEN', '1976-03-08', 'Male', 'BLOCK 84, FLAT 2, ABESAN ESTATE, IPAJA, LAGOS', 'Senior Medical Officer', 'None', 'Nigeria', 'Oyo', '08092828310', 'munnie.yusuf@gmail.com', 'Morning', 'Married', 'Lagos', '13', 'MBBS', '', '', 'Yes', 'Sat 19 - 12 - 2015', '024620492a9e91df28b07931a07ea525', 'Yes', 'No', '33750', ''),
(62, 'Dr', 'Ayodele', 'Emmanuel Oluwafemi', '1980-08-27', 'Male', 'Abraham Adesanya Estate, Ajah, Lagos.', 'Senior Medical Officer', 'General Practitioner', 'Nigeria', 'Ondo', '08030757490', 'ayodelef4@gmail.com', 'Night', 'Married', 'Lagos', '5', 'MBBS', '', '', 'Yes', 'Sat 19 - 12 - 2015', '6bfef0cb52897a127fb54b8a4511c889', 'Yes', 'No', '61422', ''),
(63, 'Dr', 'Odumade', 'afolabi', '1988-06-06', 'Male', 'CA 65, Federal Housing Estate,', 'Medical Officer', 'None', 'Nigeria', 'Lagos', '07015450085', 'folman06@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '2015122607046', '1226070462015', 'No', 'Sat 26 - 12 - 2015', '6c1df08820d40f677c02a9960d858f1c', 'Yes', 'No', 'pm 54453', '5b31eb257c47617262263bae4b589052'),
(64, 'Dr', 'Akinyemi', 'Oluwadamilola Tolulope', '1987-04-27', 'Female', 'Epsom Close Off Toyin Street Ikeja Lagos', 'Medical Officer', 'None', 'Nigeria', 'Lagos', '08060420628', 'dammieakinyemi@gmail.com', 'Morning', 'Single', 'Lagos', '5', 'MBBS', '2015122908030', '1229080302015', 'No', 'Tue 29 - 12 - 2015', '241ca93a0524d00b9f69f0f4e867b005', 'Yes', 'No', 'MDCN/R/59,837', ''),
(65, 'Dr', 'Ogunremi', 'Olaide Onaolapo', '1982-06-13', 'Male', '1, Marina Street, Lagos Island', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Oyo', '07060435344', 'laideogunremi@yahoo.com', 'All Day', 'Single', 'Lagos', '5', 'MBBS', '2015123019006', '1230190062015', 'No', 'Wed 30 - 12 - 2015', 'dd21dc0f5dd4afdc7a5042398c19dfce', 'Yes', 'No', 'PM 43,300', ''),
(66, 'Dr', 'Ndu', 'chidi madu', '1987-04-17', 'Male', '21 agorobogunbolu st ilasamaja mushin lagos', 'Medical Officer', 'None', 'Nigeria', 'Imo', '08133971210', 'chydy111@gmail.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '201601413050', '014130502016', 'Yes', 'Mon 4 - 01 - 2016', '1be89703962b1511574c4959b9d7f01b', 'Yes', 'No', '67729', ''),
(67, 'Dr', 'Soji-Ayoade', 'Demilade Adeayo', '1989-30-12', 'Male', '4 Agbo akomolafe Street unity estate Abule-odu', 'Medical Officer', 'None', 'Nigeria', 'Ogun', '08032511487', 'speritygenius05@gmail.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '201601620054', '', 'No', 'Wed 6 - 01 - 2016', '15c34116441b108ec823ea771e32cdb7', 'Yes', 'No', '55860', ''),
(68, 'Dr', 'komolafe', 'oyenike.m.', '19/2/ 84', 'Female', '9 Adebajo st, Asa estate, Soluyi Gbagada', 'Medical Officer', 'None', 'Nigeria', 'Ondo', '09036330861', 'nikekomolafe2011@yahoo.com', 'Morning', 'Single', 'Lagos', '3', 'MBBS', '201601715007', '', 'No', 'Thu 7 - 01 - 2016', '6cbf63eff68f564a6cf24e76a2a0e0ce', 'Yes', 'No', 'PM 51400', ''),
(69, 'Dr', 'Uzo-Peters', 'Ebelechukwu', '1986-07-27', 'Male', '19, Akin Tijani, Magodo Phase II', 'Medical Officer', 'None', 'Nigeria', 'Imo', '08023258033', 'sirebele.ep@gmail.com', 'Night', 'Single', 'Lagos', '6', 'MBBS', '', '', 'No', 'Mon 11 - 01 - 2016', '4dd899bd9fdc51f4312d54b865042cf3', 'Yes', 'No', '56785', ''),
(70, 'Dr', 'Nwaosa', 'Iriowen', '1954-03-06', 'Female', '16 Alhaji Atere Street Dopemu Lagos', 'Senior Medical Officer', 'Paediatrician', 'Nigeria', 'Edo', '+23408033280031', 'iriowendoc@yahoo.com', 'Morning', 'Married', 'Lagos', '35', 'Fellowship', '', '0116200262016', 'Yes', 'Sat 16 - 01 - 2016', '97df27aec8c251503f5e3749eb2ddea2', 'Yes', 'No', '12616', ''),
(71, 'Dr', 'Balogun', 'Francis', '1987-05-24', 'Male', 'No 1 victory close, Egbeda, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Edo', '08066450198', 'ehisbox@yahoo.com', 'All Day', 'Single', 'Lagos', '1', 'MBBS', '2016012412006', '', 'No', 'Sun 24 - 01 - 2016', '901d32488aa7079e4817c91bc2b69a4d', 'Yes', 'No', 'PM 57348', ''),
(72, 'Dr', 'Ametepee', 'Taiwo Mayowa', '1984-09-19', 'Male', 'Plot 884 Admiral Oduwaiye Street, Omole Estate Phase 2, Berger.', 'Medical Officer', 'None', 'Nigeria', 'Osun', '08097421309', 'taiametepee@gmail.com', 'All Day', 'Single', 'Lagos', '5', 'MBBS', '2016012813034', '0128130342016', 'No', 'Thu 28 - 01 - 2016', 'a22f70601db091bc638911b0fdf633a1', 'Yes', 'No', '48496', ''),
(73, 'Dr', 'Adelopo', 'Esther', '1982-08-17', 'Female', '20, Alabe Street, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Osun', '08023515568', 'estheradelopo@gmail.com', 'All Day', 'Married', 'Lagos', '8', 'MBBS', '', '022150382016', 'No', 'Tue 2 - 02 - 2016', '33d60c5cbd118edd07ab064390f0baf0', 'Yes', 'No', 'FM 41517', ''),
(74, 'Dr', 'Idris', 'Oladipo', '1976-03-10', 'Male', '19, Alayaki Street, Enilolobo Bus Stop, off Oke-Aro rd, Ifo LG, Ogun State', 'Specialist', 'General Practitioner', 'Nigeria', 'Lagos', '0805324581', 'haulladipo@gmail.com', 'All Day', 'Married', 'Lagos', '14', 'Fellowship', '201602508033', '', 'No', 'Fri 5 - 02 - 2016', 'a1adf75721e4f9d91c1b50770d55d842', 'No', 'No', '30154', ''),
(75, 'Dr', 'Adeleye', 'Olufunke Oluwatosin', '1975-08-01', 'Female', 'block 18, flat 2, ile-iwe metta LSDPC', 'Specialist', 'Physician', 'Nigeria', 'Lagos', '08038629664', 'funtos2000@yahoo.co.uk', 'Mini', 'Married', 'Lagos', '16', 'Fellowship', '', '', 'No', 'Sat 6 - 02 - 2016', 'd866d9774177f67a800e1795c1348181', 'Yes', 'No', '37100', ''),
(76, 'Dr', 'offideh', 'oyovwike sandra', '1988-06-30', 'Female', '81B,Lafiaji street', 'Medical Officer', 'General Practitioner', 'Nigeria', 'Delta', '+2348034857763', 'sandraoffideh@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '201602721030', '', 'No', 'Sun 7 - 02 - 2016', '8c11f318695d0952f23cde25ec4f522a', 'Yes', 'No', 'FM 70697 MDCN/R/70705', ''),
(77, 'Dr', 'Adebola', 'Kayode Adeniyi', '1985-10-23', 'Male', '8 badejo street agege lagos', 'Medical Officer', 'None', 'Nigeria', 'Ogun', '08032883848', 'adekayode3@gmail.com', 'Morning', 'Single', 'Lagos', '2', 'MBBS', '201602818059', '', 'No', 'Mon 8 - 02 - 2016', '183a0ffb24fe85d440412dd0dd4c0187', 'Yes', 'No', '56902', ''),
(78, 'Dr', 'Talabi', 'Folashade Oluwatoyin', '1977-11-29', 'Female', '5,ibadan Street Ilupeju Lagos', 'Medical Officer', 'None', 'Nigeria', 'Lagos', '08136370981', 'aftalabi@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '', '', 'No', 'Mon 22 - 02 - 2016', 'a18008677d9ef1ba5649b9e07cde159e', 'Yes', 'No', '73541', ''),
(79, 'Dr', 'IDELEGBAGBON', 'JUSTIN', 'June 3, 1984', 'Male', 'Arepo/Lagos', 'Medical Officer', 'None', 'Nigeria', 'Edo', '08173536073', 'justosaus@yahoo.com', 'All Day', 'Married', 'Lagos', '6', 'MBBS', '', '037090342016', 'No', 'Mon 7 - 03 - 2016', 'fc169baf319db2696641526d53446f51', 'Yes', 'No', 'MDCN/R/59495', ''),
(80, 'Dr', 'Aransi', 'Rilwan Adedayo', '1990-12-15', 'Male', 'Opposite Light Path School, Akinte Street, Ifako Ijaiye, lagos State.', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '08034053801', 'rilaransi@gmail.com', 'All Day', 'Single', 'Lagos', '1', 'MBBS', '2016031120009', '', 'No', 'Fri 11 - 03 - 2016', '35109f0860b2d994e3e42c961bb1470c', 'Yes', 'No', 'PM60061', ''),
(81, 'Dr', 'osayande', 'christiana', '1983-12-09', 'Female', '4 rasaq awulomate street', 'Medical Officer', 'None', 'Nigeria', 'Edo', '07063331213', 'prisclite200@gmail.com', 'All Day', 'Single', 'Lagos', '4', 'MBBS', '', '', 'No', 'Mon 14 - 03 - 2016', 'e0d0a9aac53bf6b78e176606ccce4262', 'Yes', 'No', 'pm51110', '502a151f94b71b22873bdf1a3bb6c720'),
(82, 'Dr', 'Akinyele', 'Abimbola Abidemi', '1989-06-23', 'Female', '20 Ogedengbe St Ketu Lagos', 'Medical Officer', 'None', 'Nigeria', 'Ondo', '+2348034138727', 'bimboray89@yahoo.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '2016031707058', '0317070582016', 'No', 'Thu 17 - 03 - 2016', 'ef5fa207fa6b1bd7317a43defd6b1ec6', 'Yes', 'No', 'PM 69014', ''),
(83, 'Dr', 'Onah-Ify', 'Olivia', '1984-03-10', 'Female', 'House 6 Ola Balogun Street off Degolu Road Igbe, Ikorodu', 'Medical Officer', 'None', 'Nigeria', 'Enugu', '08033574249', 'oliviachris2000@yahoo.com', 'Morning', 'Married', 'Lagos', '6', 'MBBS', '', '', 'No', 'Fri 18 - 03 - 2016', '7d168691dfd260d4301ca8ddadccd9c0', 'Yes', 'No', '61541', ''),
(84, 'Dr', 'AJIBARE', 'ayodeji johnson', '1987-04-04', 'Male', '24 omodisu street owutu ikorodu lagos', 'Medical Officer', 'None', 'Nigeria', 'Ekiti', '08033273839', 'ayodejiajibare@gmail.com', 'Morning', 'Single', 'Lagos', '2', 'MBBS', '2016032515013', '0325150132016', 'No', 'Fri 25 - 03 - 2016', 'c7f3ae072c1da9a39d8f011a7e51a7cb', 'Yes', 'No', 'FM 55023', ''),
(85, 'Dr', 'Shittu', 'Azeez Oluwaseun', '4th October 1984', 'Male', 'Diamond estate, Isheri - Igando road, Lagos.', 'Medical Officer', 'None', 'Nigeria', 'Ogun', '08102782316', 'seunshittu@gmail.com', 'All Day', 'Married', 'Lagos', '2', 'MBBS', '', '', 'No', 'Mon 28 - 03 - 2016', 'cdcd47d75bcf5a6e0b01d33bbed22e9b', 'Yes', 'No', 'FM 71651', ''),
(86, 'Dr', 'Olayiwola', 'Opeyemi', '1990-05-04', 'Female', '8,Salami basorun Street, ijesha teddy, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '08038432180', 'lizziee20@yahoo.com', 'All Day', 'Single', 'Lagos', '1', 'MBBS', '2016032911007', '0329110072016', 'No', 'Tue 29 - 03 - 2016', '4af09080574089cbece43db636e2025f', 'Yes', 'No', 'PM60020', ''),
(87, 'Dr', 'Olatinwo', 'Ridwan Akintayo', '1990-05-18', 'Male', '5, Idowu Street, Technical Area, Ejioku', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '08058400261', 'drak1805@yahoo.com', 'All Day', 'Single', 'Lagos', '1', 'MBBS', '201604306054', '043060542016', 'No', 'Sun 3 - 04 - 2016', '1c5442c0461e5186126aaba26edd6857', 'Yes', 'No', '60023', ''),
(88, 'Dr', 'Ayogu', 'fidelis ugochukwu', '27/8/1988', 'Male', 'no 4 ogudi str,asolo...ikorodu.', 'Medical Officer', 'None', 'Nigeria', 'Enugu', '08064065623', 'ayoguoke4life@gmail.com', 'Night', 'Single', 'Lagos', '2', 'MBBS', '', '', 'No', 'Thu 14 - 04 - 2016', 'e019d57b634aab4f489c9f8f1ed9d2ff', 'Yes', 'No', '76176', ''),
(89, 'Mrs', 'OSIGWE', 'JULIET', '1986-07-16', 'Female', 'NO 28 AGGREY ROAD YABATECH STAFF QUARTERS, LAGOS', 'Laboratory Scientist', 'None', 'Nigeria', 'Imo', '07032637048', 'julietf66@gmail.com', 'All Day', 'Married', 'Lagos', '2', 'MBBS', '', '', 'No', 'Tue 19 - 04 - 2016', '4a8ff3c1f380dbc688a1e3cec5d975bf', 'Yes', 'No', 'RA19128', ''),
(90, 'Dr', 'Obia', 'Chibitam', '1977-09-14', 'Male', '37 chief Alfred Ejims Street', 'Medical Officer', 'None', 'Nigeria', 'Rivers', '08027019478', 'webiglad@gmail.com', 'All Day', 'Married', 'Lagos', '8', 'MBBS', '2016042017014', '', 'No', 'Wed 20 - 04 - 2016', '15b29ffdce66e10527a65bc6d71ad94d', 'Yes', 'No', '52141', ''),
(91, 'Dr', 'Afolabi', 'Happy', '1/1/1985', 'Male', 'lagos', 'Medical Officer', 'None', 'Nigeria', 'Edo', '08066324912', 'successfulhp@gmail.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '2016042805051', '', 'No', 'Thu 28 - 04 - 2016', 'af9c3e9460385533cf85b1ae6a374fc3', 'Yes', 'No', 'FM 71944', ''),
(92, 'Dr', 'Lawal', 'Adeyinka Wasiu', '1977-05-14', 'Male', '10 Balogun Tijani street, Elepete, Ibeju lekki', 'Senior Medical Officer', 'None', 'Nigeria', 'Kwara', '08063963131', 'dr_elawal@yahoo.com', 'Morning', 'Married', 'Lagos', '9', 'MBBS', '201605118008', '', 'No', 'Sun 1 - 05 - 2016', 'f04041e50f46d65495fe360260db030f', 'Yes', 'No', '50648', ''),
(93, 'Mrs', 'Nwaogaraku', 'Chidima', '1982-12-03', 'Female', '8 luqman ogbara street,ayonusi estate ikorodu', 'Nurse', 'None', 'Nigeria', 'Imo', '08067350988', 'chiidima@yahoo.com', 'Night', 'Single', 'Lagos', '8', 'Diploma', '', '053230552016', 'No', 'Tue 3 - 05 - 2016', '8fb5a56a843e4b968e03de025ad364f2', 'Yes', 'No', 'M10001', ''),
(94, 'Dr', 'AREMU', 'OLANIYI OLADOTUN', 'September 28th, 1988', 'Male', '18  Hughes Avenue, Alagomeji, Yaba, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Osun', '08065177744', 'Dortune302@gmail.com', 'All Day', 'Single', 'Lagos', '1', 'MBBS', '', '', 'No', 'Fri 6 - 05 - 2016', '5fb531813357ac6cb519635355027270', 'Yes', 'No', 'PM 60060', ''),
(95, 'Dr', 'Mormah', 'Ikechukwu Francis', '1984-02-18', 'Male', '7, Rumens street Ikoyi', 'Medical Officer', 'None', 'Nigeria', 'Delta', '08067472315', 'franceq2000@yahoo.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '201605807001', '', 'No', 'Sun 8 - 05 - 2016', '09b792e75d96dbcb3d49f5af313e9fa1', 'Yes', 'No', '75798', '02159811c1ff17a39442a1dac2c63b5c'),
(96, 'Dr', 'Esue', 'Abaye', '1976-11-06', 'Female', 'Barikisu Iyede street,  Onike,  Lagos', 'Senior Medical Officer', 'None', 'Nigeria', 'Edo', '+2348035383322', 'danidoya@yahoo.com', 'All Day', 'Single', 'Lagos', '6', 'MBBS', '', '', 'No', 'Mon 9 - 05 - 2016', '5574931769ac2fa35de714bc102d9c83', 'Yes', 'No', '63116', ''),
(97, 'Mrs', 'Obadagbonyi', 'Cynthia', '1992-10-23', 'Female', '6, Freedom Street Off Osapa London, Lekki. Lagos State.', 'Nurse', 'Other', 'Nigeria', 'Edo', '08077061415', 'cynthia.izzy@yahoo.com', 'Evening', 'Single', 'Lagos', '3', 'Diploma', '', '', 'No', 'Wed 11 - 05 - 2016', '8ec59bf4e9f2e83f50c31ea34f3f8c9e', 'Yes', 'No', 'Dont have', ''),
(98, 'Mr', 'Olowosile', 'Ayorinde Festus', '1987-11-25', 'Male', '2, Oyefesobi Street, Ikosi, Lagos', 'Nurse', 'General Practitioner', 'Nigeria', 'Ondo', '08037443982', 'ayorindetestimony@gmail.com', 'Night', 'Single', 'Lagos', '2', 'Diploma', '2016051211055', '0512110562016', 'No', 'Thu 12 - 05 - 2016', '01277150809fe30b51f9c239941d72c3', 'Yes', 'No', '001/134706', ''),
(99, 'Dr', 'Akinyemi', 'olajumoke', '03/09/1991', 'Female', 'Ibadan, oyo state', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '07068788903', 'jummy2crown@yahoo.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '', '', 'No', 'Fri 13 - 05 - 2016', '916586c8ac87cf1a18ea5d004facb87e', 'Yes', 'No', 'pm60069', ''),
(100, 'Dr', 'Kasali', 'Aishat', '1987-10-12', 'Female', '2, Alade close, Ikeja', 'Medical Officer', 'None', 'Nigeria', 'Ogun', '08068940262', 'ayeeshkas@gmail.com', 'Morning', 'Single', 'Lagos', '2', 'MBBS', '', '', 'No', 'Mon 16 - 05 - 2016', 'a661cc64c5d4c6fd2f54228d632893c3', 'Yes', 'No', '55343', ''),
(101, 'Dr', 'Umeh', 'James Ogbonna', '1977-06-18', 'Male', '54 Moradeyo str Lagos', 'Medical Officer', 'None', 'Nigeria', 'Enugu', '+2347030529334', 'jamesumeh9@gmail.com', 'All Day', 'Single', 'Lagos', '1', 'MBBS', '2016051916039', '', 'No', 'Thu 19 - 05 - 2016', '6a5e473f51d45417a7b81eb61590083c', 'Yes', 'No', 'FM 72854', ''),
(102, 'Dr', 'Agbeyangi', 'Gbolahan', '1983-10-20', 'Male', '19B Adeboye Solanke Street off Allen Avenue', 'Senior Medical Officer', 'None', 'Nigeria', 'Ogun', '+2349030639422', 'gbolayangi@gmail.com', 'Evening', 'Single', 'Lagos', '7', 'MBBS', '', '', 'No', 'Sat 21 - 05 - 2016', '521796be3c9f396385af361155a4afd2', 'Yes', 'No', 'MDCN/R/51713', ''),
(103, 'Mrs', 'SAMAKI', 'MONICA', '1990-08-25', 'Female', 'BLOCK 3, FLAT 8, ADMIN, OJO MILITARY CANTONMENT, LAGOS STATE', 'Nurse', 'Physician', 'Nigeria', 'Taraba', '08165553297', 'mavindvirus@gmail.com', 'All Day', 'Single', 'Lagos', '5', 'Diploma', '2016052311037', '', 'No', 'Mon 23 - 05 - 2016', 'ff5c45222423b93e719394526626fb84', 'Yes', 'No', 'STJHINBSSG/003/DN/08', ''),
(104, 'Dr', 'Abe', 'Adeola comfort', 'January 24th, 1981', 'Female', 'No 10 Akindele Street Akera Alakuko Lagos.', 'Medical Officer', 'None', 'Nigeria', 'Ondo', '08188609130', 'abe.adeola@yahoo.com', 'All Day', 'Married', 'Lagos', '0', 'MBBS', '', '', 'No', 'Thu 26 - 05 - 2016', '050dd2649b892877506adc001f4ff43f', 'Yes', 'No', 'FM 71576', ''),
(105, 'Dr', 'Olanrewaju', 'Motunrayo', '1983/03/27', 'Female', '7 lidipe Street, Elliot bus stop, iju, ifakoijaiye, lagos', 'Medical Officer', 'None', 'Nigeria', 'Ogun', '08056442297', 'boslado4real@gmail.com', 'All Day', 'Married', 'Lagos', '2', 'MBBS', '', '', 'No', 'Mon 30 - 05 - 2016', '7aa36cecdac519aa01e08b5d56635aee', 'Yes', 'No', '73949', ''),
(106, 'Dr', 'OSUNSANMI', 'OPEYEMI', '1981-11-03', 'Male', '7 lidipe Street, Elliot bus stop, iju road, ifakoijaiye, lagos', 'Medical Officer', 'None', 'Nigeria', 'Ondo', '08056442297', 'Otunbaopeyemi@gmail.com', 'All Day', 'Married', 'Lagos', '6', 'MBBS', '', '', 'No', 'Mon 30 - 05 - 2016', 'e5ab391df46058f14ab29ce24b3e2a7b', 'Yes', 'No', '59173', ''),
(107, 'Dr', 'Bako', 'Mercy Laune', '1982-03-23', 'Female', 'Gold city estate lugbe airport road abuja', 'Medical Officer', 'None', 'Nigeria', 'Gombe', '09056054868', 'mercybako@gmail.com', 'Morning', 'Married', 'Lagos', '5', 'MBBS', '', '', 'No', 'Thu 2 - 06 - 2016', '20999d7d0a9f4d00e68af39708289f71', 'Yes', 'No', '54387', ''),
(108, 'Dr', 'oguntoye', 'ronke', '1985-12-03', 'Female', 'folarin street mushin lagos state', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '08159195812', 'oguntoye.ronke@yahoo.com', 'Night', 'Single', 'Lagos', '1', 'MBBS', '201606321038', '', 'No', 'Fri 3 - 06 - 2016', 'c68757b3b47b42acd34305a3c305db52', 'Yes', 'No', 'FM73440', ''),
(109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'Sat 4 - 06 - 2016', 'd41d8cd98f00b204e9800998ecf8427e', 'No', 'No', '', ''),
(110, 'Dr', 'Aramide', 'Abisola Olubunmi', '12 May 1989', 'Female', 'Mile 2 Lagos', 'Medical Officer', 'None', 'Nigeria', 'Osun', '07065160955', 'Abisola.aramide@yahoo.com', 'Morning', 'Single', 'Lagos', '1', 'MBBS', '', '', 'No', 'Tue 7 - 06 - 2016', '688cae8c49c925576128f7ffbdfb3cd0', 'Yes', 'No', 'PM 59951', ''),
(111, 'Mrs', 'Adiakpantin', 'Afiamma', '17/5/83', 'Female', 'ojodu', 'Nurse', 'Anaesthetist', 'Nigeria', 'Akwa Ibom', '08091573514', 'afiamaa@gmail.com', 'Morning', 'Single', 'Lagos', '12', 'Fellowship', '2016061409055', '0614090552016', 'Yes', 'Tue 14 - 06 - 2016', '4e3fda432e28a4ee5891af59d7796eab', 'Yes', 'No', '779456', ''),
(112, 'Dr', 'Onwe', 'JOHN Obinna', '10th June 1986', 'Male', 'Tedi Osun, Lagos state.', 'Medical Officer', 'None', 'Nigeria', 'Ebonyi', '08068508416', 'ojomoskimedics@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '', '', 'No', 'Wed 22 - 06 - 2016', '774e8a225bd5c44b641289520e5e9c2b', 'Yes', 'No', '56111', ''),
(113, 'Mrs', 'Zephaniah', 'Veronica', '1987-03-02', 'Female', '23 Emmanuel Street, Alapere', 'Nurse', 'None', 'Nigeria', 'Rivers', '08032595149', 'veronicawoks@yahoo.com', 'All Day', 'Married', 'Lagos', '1', 'MBBS', '2016071216125', '', 'No', 'Tue 12 - 07 - 2016', '1a4528b45d947de72f1cc6bf5b3d3acd', 'Yes', 'No', 'RN 164014', ''),
(114, 'Dr', 'Akintayo', 'Oluseun', '1983-11-30', 'Male', '10 Nuru Oniwo street ,Surulere', 'Medical Officer', 'None', 'Nigeria', 'Ekiti', '08086905603', 'gomeztayo@gmail.com', 'Morning', 'Single', 'Lagos', '8', 'MBBS', '', '', 'No', 'Wed 13 - 07 - 2016', '23d129f053e93b30a7309646991060a1', 'Yes', 'No', '46,273', ''),
(115, 'Mrs', 'OKORO', 'CHINWENDU PAULINA', '1992 25 01', 'Female', '6 odebod street itire surulere lagos state', 'Nurse', 'None', 'Nigeria', 'Imo', '08068789434', 'okorochinwendu14@yahoo.com', 'Night', 'Single', 'Lagos', '3', 'Diploma', '', '0727161542016', 'No', 'Wed 27 - 07 - 2016', '41dd1aacb200b4378fb7ec6c246c0892', 'Yes', 'No', '2014/16477/H', ''),
(116, 'Dr', 'Oluwadeyi', 'Esther Yemisi', '26/03/1989', 'Female', 'No 2 Odumosu street, off oriola street, Alapere-Ketu', 'Medical Officer', 'None', 'Nigeria', 'Osun', '07059581876', 'yemisi.agun@yahoo.com', 'All Day', 'Married', 'Lagos', '2', 'MBBS', '', '', 'No', 'Mon 8 - 08 - 2016', '67212ca88d64c53708598aa54c8899a5', 'Yes', 'No', 'FM 57208', '01b84ea22fb759f4595ba99048bb3a29'),
(117, 'Dr', 'BAMDUPE', 'TAIWO', '1987-06-14', 'Male', '6, OLALEKAN CAMPBELL STREET ASHAMU ESTATE OKE-AFA ISOLO', 'Medical Officer', 'None', 'Nigeria', 'Osun', '08186090815', 'dr.tbamdupe@gmail.com', 'Night', 'Single', 'Lagos', '2', 'MBBS', '', '', 'No', 'Wed 10 - 08 - 2016', '0df91ede8007638f22bbc584a962f113', 'Yes', 'No', '75633', ''),
(118, 'Dr', 'Uguegue', 'Elomezino samuel', '1983-10-20', 'Male', '23 media bossy street, ikorodu, lagos', 'Medical Officer', 'None', 'Nigeria', 'Delta', '08134842621', 'elomezinosam@gmail.com', 'Morning', 'Single', 'Lagos', '5', 'MBBS', '', '', 'No', 'Thu 18 - 08 - 2016', 'deb1906185d4f248c8ac3e70217619eb', 'Yes', 'No', '65170', ''),
(119, 'Dr', 'Okafor', 'Madu Daniel', '1987-12-22', 'Male', '22 Chris alli crescent, 2nd avenue estate ext, Osborne, Ikoyi.', 'Senior Medical Officer', 'None', 'Nigeria', 'Delta', '08100024672', 'ask4madu@yahoo.co.uk', 'Night', 'Single', 'Lagos', '3', 'MBBS', '2016081819146', '0818191502016', 'No', 'Thu 18 - 08 - 2016', 'f0c88f086e63d69f74e88553c1383ba4', 'Yes', 'No', '69057', ''),
(120, 'Dr', 'Ekanem', 'Idongesit', '1984-09-04', 'Male', '16,Olayemi Ajayi Street,Ishefun-Ayobo', 'Medical Officer', 'None', 'Nigeria', 'Akwa Ibom', '08072774928', 'ekanem4ril@yahoo.com', 'All Day', 'Single', 'Lagos', '4', 'MBBS', '2016082120141', '0821211042016', 'No', 'Sun 21 - 08 - 2016', '68c33a9d833437fcafd22b00916fb9ac', 'Yes', 'No', 'PM51985', ''),
(121, 'Mrs', 'Afolabi', 'Oluwatobi Mary', '1992-09-20', 'Female', '14C David Kolawole Street, Abule-egba', 'Nurse', 'General Practitioner', 'Nigeria', 'Lagos', '07066598995', 'sesanelect@yahoo.com', 'All Day', 'Married', 'Lagos', '3', 'MBBS', '', '0823021552016', 'No', 'Tue 23 - 08 - 2016', '3468c455414c6e469fa9fa42648f20c5', 'Yes', 'No', 'R.N 154884', ''),
(122, 'Dr', 'Oragudosi', 'Kenechukwu', '1989-07-31', 'Male', '1 olubuiyi Street off great challenge road, Iyana Ina, Lagos.', 'Medical Officer', 'None', 'Nigeria', 'Anambra', '08036332370', 'energie619@gmail.com', 'All Day', 'Single', 'Lagos', '3', 'MBBS', '', '', 'No', 'Wed 31 - 08 - 2016', 'ed1ccaff8650eb6e05cc5de4ef83f46e', 'Yes', 'No', 'PM 56177', ''),
(123, 'Dr', 'Agoro', 'Matthew', '1983', 'Male', '35, Harrison Sholaja Street, Off Ago Palace Way, Okota, Isolo, Lagos', 'Medical Officer', 'None', 'Nigeria', 'Oyo', '+2348078454683', 'mjkitch23@gmail.com', 'Night', 'Married', 'Lagos', '6', 'MBBS', '', '', 'No', 'Sun 11 - 09 - 2016', '5992c8cab66d6dc1ebce28de4645f977', 'Yes', 'No', '61364', ''),
(124, 'Dr', 'Chukwuma', 'Chidozie Lucky', '20/03/1989', 'Male', '78, Funsho kinoshi Street, Okota, Isolo L. G. A. Lagos', 'Medical Officer', 'None', 'Nigeria', 'Imo', '08163992766', 'chidozielucky@gmail.com', 'All Day', 'Single', 'Lagos', '2', 'MBBS', '2016091914113', '', 'No', 'Mon 19 - 09 - 2016', 'f95f187d4e2f83725f62049d47564a04', 'No', 'No', 'PM 58726', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctor_application`
--

INSERT INTO `doctor_application` (`id`, `request_id`, `doctor_id`, `date_apply`, `date_logged`) VALUES
(1, '1', '22', 'Thu 19 - 11 - 2015', '2015-11-19 14:20:59'),
(2, '3', '22', 'Fri 20 - 11 - 2015', '2015-11-20 15:50:20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospital_name`, `address`, `hefamaa`, `email`, `website`, `phone`, `phone2`, `state`, `contact_name`, `contact_phone`, `contact_position`, `logo`, `password`, `date_registered`, `paid`, `completed`, `activation_code`) VALUES
(16, 'Inland Specialist Hospital', '12 Owodunni st, Alapere', '122026', 'akeredolujide@hotmail.com', '', '08088107349', '017927049', 'Lagos', 'Mr. Atobajaiye', '08088107349', 'Manager', '', '05ddbf6abbf7732d89fe50dc0ab7ca6c', 'Fri 9 - 10 - 2015', 'Yes', 'Yes', ''),
(17, 'Ajibona Medical Centre', '14,Tadese Street off Abeokuta Express Way, Ijokoro', '121005', 'mutiuajibona@go.com', '', '08184902203', '08184902203', 'Lagos', 'Dr Ajibona', '08184902203', 'Medical Director', '', '4d9c6c80e372442cb27b863b68576325', 'Wed 21 - 10 - 2015', 'Yes', 'No', ''),
(18, 'E.N.T Consultancy Services', '17, Onitolo Street, Gbaja Surulere Lagos', '112025', 'profokeowo@yahoo.com', '', '08023091573', '08023091573', 'Lagos', 'Prof P.A. Okeowo', '08023091573', 'Medical Director', '', '1a08cbda33752cd907c8af4a9dd9033f', 'Thu 22 - 10 - 2015', 'Yes', 'No', ''),
(19, 'Isalu hospitals limited', '349B Odusami St off Wempcp Road Ogba,Lagos', 'HEF12819', 'oladipupo@isaluhospitals.com', 'info@isaluhospitals.com', '08172001524', '08062287502', 'Lagos', 'Oladipupo Ganiyu', '08127001524', 'Manager', '', 'f6573b8cd66339d1dd8ed2c22574da62', 'Fri 23 - 10 - 2015', 'Yes', 'Yes', ''),
(20, 'Royal Medical Centre', '4, Onajimi Street Popoola Bus Stop off Pedro Road Somolu Bariga', '2012022', 'myheartdesire2006@yahoo.com', '', '08028768552', '08028768552', 'Lagos', 'Dr Oyedepo G.O', '08028768552', 'Medical Director', '', '6cda5cb9a7b0f465ae9053a5e40763ff', 'Mon 2 - 11 - 2015', 'Yes', 'No', ''),
(21, 'MUSKAT HOSPITAL', '9  ABBI STREET, OFF SHIBIRI ROAD RASAKI BUS STOP, ILEMBA AWORI, AJANGBADI.', 'HEF/121814', 'muskat962005@yahoo.co.uk', '', '08033070068', '08033344066', 'Lagos', 'DR. ADIGUN M . A', '08033070068', 'Medical Director', '', '477fc39c4b7d11e94f4640dc33a5a7b7', 'Mon 2 - 11 - 2015', 'Yes', 'No', ''),
(22, 'eboa medical centre', '48 yakubu street, ikosi ketu', '121623', 'eboa_centre@yahoo.com', '', '08033068004', '08161625186', 'Lagos', 'owolabi', '08033068004', 'Medical Director', '', '5dd46c7b937a8c0c4945246a3e1c3102', 'Mon 2 - 11 - 2015', 'Yes', 'No', ''),
(23, 'Iyalode Bisoye Tejuoso Hospital', '20/22, Ilupeju by pass Ilupeju lagos', '121446', 'ebeneserisaviour@yahoo.com', '', '07084008454', '08033080070', 'Lagos', 'Dave', '07084008454', 'Manager', '', '466f669d33e6b9a05942e1c5324c7834', 'Tue 3 - 11 - 2015', 'Yes', 'No', ''),
(24, 'Hosanna Medical Centre', '11, Babington Avenue, Ajelogo mile 12, near World Bible Church', '1585', 'Hosanna@yahoo.com', '', '08033268468', '08033268468', 'Lagos', 'Dr Nwokocha', '08033268468', 'Medical Director', '', '4d9c6c80e372442cb27b863b68576325', 'Wed 4 - 11 - 2015', 'Yes', 'No', ''),
(25, 'Hanoba Medical Centre', '23,boyle street Onikan, Lagos', '121483', 'onikanfrontdesk@hanobamedical.com', '', '08092014679', '08092014679', 'Lagos', 'Mr Olushola Ajayi', '08064839888', 'Manager', '', 'b3abd9008b09452a761c038e47495d78', 'Fri 6 - 11 - 2015', 'Yes', 'No', ''),
(26, 'fanimed hospitsl', 'lily road, ijaye medium estate, phase iv, ogba', 'HEF/121033', 'fanimed92@yahoo.com', 'fanimedhospitals.com', '08189606098', '08077818441', 'Lagos', 'Mrs Uwajeh', '08028471760', 'Manager', '', '26bdb57720c9cbac3b50c8965ecc51f0', 'Wed 11 - 11 - 2015', 'Yes', 'No', '78622a55ed153d7ee5454e70a893f6ac'),
(27, 'Dolu Hospital', '7,Sunmola Abayomi street. Mafoluku Oshodi Lagos.', '121619', 'doluhospital@yahoo.com', '', '08023076579', '08023076579', 'Lagos', 'Dr Gbade Adeife', '08023076579', 'Medical Director', '', 'b33ae03a7123e2cbde6db9b7e0b32e9c', 'Sun 15 - 11 - 2015', 'Yes', 'No', ''),
(28, 'Samsteve Hospital & Laboratory Services', '1, Raji close Church BusStop AlagboleOgun State Nigeria', 'Nil', 'samstevehospital09@yahoo.com', '', '+2348038072580', '+2347056780238', 'Lagos', 'Dr. Egbunu Samson', '+23480 38072580', 'Medical Director', '', 'e8f1b7fe075a04e8bcf7f4155591b101', 'Mon 16 - 11 - 2015', 'Yes', 'No', ''),
(29, 'Waterfalls Hospital', '3,ayisape Street Itire Ikete Surulere', '121533', 'enuelima@yahoo.com', '', '08030963243', '08030963243', 'Lagos', 'DR', '08030963243', 'Medical Director', '', 'c3c8039cc3d8c16cbcf1cd70bfcc7e9e', 'Tue 17 - 11 - 2015', 'Yes', 'No', ''),
(30, 'Obitoks Hospital', '2, Gideon Adeniran Street Oke Odo off Old Ota Road, Ile Epo Bus Stop', '121384', 'yomibaiyewu@yahoo.com', '', '08023138901', '08023138901', 'Lagos', 'Dr Baiyewu Abayomi', '08023138901', 'Medical Director', '', '072e6ed26dcc627e43e42cab58fd0734', 'Tue 17 - 11 - 2015', 'Yes', 'No', ''),
(31, 'Samom Medical Centre', '5, Anuoluwapo Stret, Ojokoro', '121991', 'fosamo654fs@gmail.com', '', '08023039812', '08023039812', 'Lagos', 'Dr Omitiran F.S', '08023039812', 'Medical Director', '', 'cdb84a1d36ebdb659d8a585d04b5f347', 'Tue 17 - 11 - 2015', 'Yes', 'No', ''),
(32, 'Tokayo Medical Centre', '1, Olaleye Street, Ikosi Ketu', '121104', 'dradetokunboodutayo@yahoo.com', '', '08023367293', '08023367293', 'Lagos', 'Dr Adetokunbo', '08023367293', 'Medical Director', '', 'e5e098e5602841de32af2e203d4be867', 'Tue 17 - 11 - 2015', 'Yes', 'No', ''),
(33, 'Lota Medical Centre', '1, Mojisola Abass Street off Salvation Street Isheri Olofin', '121323', 'ifeanyipdike@yahoo.com', '', '08023152181', '08127777090', 'Lagos', 'Dr Dike', '08023152181', 'Medical Director', '', 'c868d59256b1f13161fe3b5fb64176a6', 'Tue 17 - 11 - 2015', 'Yes', 'No', ''),
(34, 'D Lord that Healeth Maternity Home', '25,Ora Street, Olodi Apapa', '118236', 'dlordhealeth@yahoo.com', '', '08033631469', '08033631469', 'Lagos', 'Ezenne Mary', '08033631469', 'Matron', '', '7bdeb9db297ccec764e7f6ce79af5627', 'Tue 17 - 11 - 2015', 'Yes', 'No', ''),
(35, 'DR N.I.DANIEL (Ear,Nose & Throat)', '34,Oyekan Road, Surulere off Ogunlana Drive, Lagos', '112046', 'fdgold1@yahoo.com', '', '08059863010', '08033019528', 'Lagos', 'Dr Femi Daniel', '08090534425', 'Manager', '', '4d9c6c80e372442cb27b863b68576325', 'Wed 18 - 11 - 2015', 'Yes', 'Yes', ''),
(36, 'Concise Healthcare Limited', 'Plot 8, Temidayo Crescent Aro Lambo, Matogun, Ogun State', '2014', 'bunmiilori@gmail.com', '', '08023048652', '08023048652', 'Lagos', 'Human Resource', '07031007852', 'Manager', '', 'df17a98624d3df730a09695129b3acbb', 'Fri 20 - 11 - 2015', 'Yes', 'No', ''),
(37, 'May Flower Hospital', '24, Bamkole Street, Isheri', '0737', 'mayflowerhospital@yahoo.com', '', '08023199616', '08023199616', 'Lagos', 'DR Okorejior E.K', '08023199616', 'Medical Director', '', '99b109f6f676b591e27e041f868a4969', 'Fri 20 - 11 - 2015', 'Yes', 'No', ''),
(38, 'Pinecrest Specialist Hospitals', '83, Makinde Street, Mafoluku, Oshodi. Lagos', '122044', 'pinecresthospital@yahoo.com', '', '08023100602', '017765188', 'Lagos', 'Dr Boyo', '08023100602', 'Medical Director', '', '55616c7d6cded00d29690bf247e2e0b0', 'Mon 23 - 11 - 2015', 'Yes', 'No', ''),
(39, 'Leafega Maternity Home', '70, Lumac Street, Ijegun Satellite Town Lagos', '118161', 'leafega@yahoo.com', '', '08161231662', '08161231662', 'Lagos', 'Agbahomovo', '08161231662', 'Manager', '', '9246ed6aebccf6d61cfc2a98517b91d6', 'Wed 25 - 11 - 2015', 'Yes', 'No', ''),
(40, 'Mehan Hospital', '7,Adeniji Street, near Oja Oba, Abule Egba, Lagos', '2357', 'mehanhospital@yahoo.com', '', '08033356331', '08033356331', 'Lagos', 'Dr Ajose Joseph', '08033356331', 'Medical Director', '', '60d1f1556d69688f258c1465cddf6f39', 'Fri 27 - 11 - 2015', 'Yes', 'No', ''),
(41, 'Okiki Hospital', '18, Ola Shehu Street Alimosho, Alimosho bus stop', '121263', 'bisdok58@yahoo.com', '', '08033030268', '08033030268', 'Lagos', 'Dr O.S Alaba', '08033030268', 'Medical Director', '', '3311a963bb278db083861f6134e94818', 'Fri 27 - 11 - 2015', 'Yes', 'No', ''),
(42, 'Tmac Specialist Hospital', '14, Berkley street, off King George Onikan,Lagos', '12206', 'tmacspecialisthospital@outlook.com', '', '08189280220', '08105682088', 'Lagos', 'Usman', '08089485533', 'Manager', '', '564bfd34ab564181312bcc5feca6a969', 'Thu 3 - 12 - 2015', 'Yes', 'No', ''),
(43, 'Nu-life specialist clinic', '4 Joseph Odunlami street, off Thomas Salako str Ogba, Lagos', '122038', 'nulife.specialist.clinic@gmail.com', '', '08103000925', '08020599230', 'Lagos', 'akpan essien', '08020599230', 'Manager', '', 'da857470a1560fe11c26a54a81dbb810', 'Fri 4 - 12 - 2015', 'Yes', 'No', ''),
(44, 'King Solomon Hospital', '4B, Bola Cresecent Anthony Village', '121110', 'kingsolomon@yahoo.com', '', '08035703862', '08035703862', 'Lagos', 'Dr A. Oladosu', '08035703862', 'Medical Director', '', '3b15af861940b230c70d8ef282e826c9', 'Wed 9 - 12 - 2015', 'Yes', 'No', ''),
(45, 'Foly Medical Centre', '3, Julius Showunmi Street off Tiwalade Street, Shogunle Bus Stop', '121448', 'folyclinic@gmail.com', '', '08023180281', '08023180281', 'Lagos', 'Dr T.O. Folorunsho', '08023180281', 'Medical Director', '', '9dde16d41a1d4c0992a910f84531e69b', 'Wed 9 - 12 - 2015', 'Yes', 'No', ''),
(46, 'Jaiyeola Clinic/ Hospital', '4, Bankole Street off Pedro Road Bariga', '1245', 'doctordsg@yahoo.co.uk', '', '08038620305', '08038620305', 'Lagos', 'Dr Dennis Olusegun George', '08038620305', 'Medical Director', '', '33b3d026a7814572c3f0a419a8db5d6c', 'Fri 11 - 12 - 2015', 'Yes', 'No', ''),
(47, 'De Favours Dental Clinic', '49, Ogudu Road, Ojota', '113005', 'ultrababs2001@yahoo.com', '', '08023316067', '08023316067', 'Lagos', 'Dr Ismail', '08082528711', 'Manager', '', '1d5f150a8a5e522ed4bf9f73b9d230c4', 'Fri 11 - 12 - 2015', 'Yes', 'No', ''),
(48, 'Gifted Hands Medical Centre', '25, Old Olowora Road Ikosi Isheri Lagos', '121309', 'wisdomomeike@yahoo.com', '', '08035291851', '08093971899', 'Lagos', 'Dr Omeike Wisdom', '08035291851', 'Medical Director', '', '31aef2d04bec1d5b87403ddd398fc338', 'Fri 11 - 12 - 2015', 'Yes', 'No', ''),
(49, 'Med - IN Specialist Hospital', '1/3, Osogbo Street, Ogudu, Lagos', '122035', 'info@med-inshosp.com', 'www.medins-hosp.com', '08037156968', '07037557820', 'Lagos', 'Mr Moses Dare', '08023500846', 'Manager', '', '40192933b495ac7b776e9837e7075775', 'Fri 11 - 12 - 2015', 'Yes', 'No', ''),
(50, 'LIMAD HOSPITAL LTD', '30,Abusi Edumare street Ajasa-Command,Lagos', 'HEF/221064', 'limadp551@gmail.com', '', '08023065641', '08178828848', 'Lagos', 'Dr Omokanye Kasim Olatunde', '08023065641', 'Medical Director', '', '6ec6b30423c8d660c2f26c94d9cf3ec8', 'Tue 15 - 12 - 2015', 'Yes', 'No', ''),
(51, 'ST STEVENS HOSPITAL LIMITED', '16, MAJEKODUNMI STREET, MABOJU, SHOGUNLE, PWD BSTOP', '0670', 'stevenshospital@ymail.com', '', '08034835133', '08067784227', 'Lagos', 'Babayemi Olamipo', '08034835133', 'Other', '2015121514005', '1316123caefaee3bd8942c3d97923713', 'Tue 15 - 12 - 2015', 'Yes', 'No', 'd8d4f879fe2805a98f5fd7d2d08ad2dc'),
(52, 'olaoluwa hospital', '3 makonju street ilupeju', '2345651', 'olaenwaju@yahoo.com', '', '08073565073', '08024121735', 'Lagos', 'james ola', '08024121735', 'Manager', '', 'dbcb4e8df8d344dcf645a752191974b3', 'Thu 17 - 12 - 2015', 'No', 'No', ''),
(53, 'Hygeiclinics', '3, Creek Road. Colonels Estate. Bogije Town, Km 32, Lekki-Epe Expressway. Lagos', 'HEF/111/0236', 'hygeiclinics@gmail.com', '', '07087875255', '08034011797', 'Lagos', 'Dr. Bidemi Dawodu', '08034011797', 'Medical Director', '', '4f82cef3e7449398b90b0e2c25678e34', 'Thu 17 - 12 - 2015', 'Yes', 'No', '7f69ad954a2ffbdd4b2e6618c1ab8279'),
(54, 'Triumph Clinic', '148, Otunubi Road Oriokuta, Ikorodu Agric Bus Stop', '117051', 'triumphblessing@gmail.com', '', '08023424258', '08023424258', 'Lagos', 'Dr Adeniji Blessing', '08023424258', 'Medical Director', '', '4d9c6c80e372442cb27b863b68576325', 'Fri 8 - 01 - 2016', 'Yes', 'No', ''),
(55, 'Gilead Hospital', '80, Isashi Road Ecomog Bus Stop Isashi off Badagry Express Way', '0269', 'okonokhuaignatius@yahoo.com', '', '08033199772', '08033199772', 'Lagos', 'Dr I .E. Okonokhua', '08033199772', 'Medical Director', '', '4d9c6c80e372442cb27b863b68576325', 'Mon 11 - 01 - 2016', 'Yes', 'No', ''),
(56, 'Sky High Medical Centre', '5B, Adekunle Banjo Avenue Magodo GRA', '121255', 'adebiyifun@yahoo.com', '', '08062635054', '08062635054', 'Lagos', 'Dr Adebiyi Bola', '08062635054', 'Medical Director', '', 'f9114c1828737ea232e0882116fd09df', 'Wed 13 - 01 - 2016', 'Yes', 'No', ''),
(57, 'Fineday Hospital', '57,Demurin Street Elebiju Bus Stop Ketu Lagos', '1386', 'finedaymedical@gmail.com', '', '08035070407', '08095070407', 'Lagos', 'Dr Femi dewale', '08035070407', 'Medical Director', '', 'e81aaf5d5938223e75030912ead4b145', 'Fri 22 - 01 - 2016', 'Yes', 'No', ''),
(58, 'Oluremi Clinic', '9, Olusegun Hamzat Street, Bayeku Road Igbogbo', '117256', 'kemybrown22@Rocketmail.com', '', '08022137890', '08035168979', 'Lagos', 'Dr Ajosanmi Segun', '08022137890', 'Medical Director', '', '60cf0b6bb1994869b5be86fe77e5ac1f', 'Thu 11 - 02 - 2016', 'Yes', 'No', ''),
(59, 'BRONILA MEDICAL CENTRE', 'OSOTHA BUS STOP, IJEDE ROAD, IKORODU, LAGOS', 'HEF/121/0547', 'bronila_medical@yahoo.com', '', '08092868311', '08035802519', 'Lagos', 'DR UCHE IBE NKASIOBI', '08035802519', 'Medical Director', '', 'c40e15a233c46fe9e185637e926032ce', 'Fri 19 - 02 - 2016', 'Yes', 'No', ''),
(60, 'TOLUTOPE MATERNITY HOME', '25, PATRICK UZOH STREET, PAPA AGURA, IKORODU.', 'HEF/11/826', 'tolutopematernity@yahoo.com', '', '08029320358', '08029320358', 'Lagos', 'IYA TOPE', '08029320358', 'Medical Director', '', 'fc43fcea87c51f9357f5496210dac770', 'Fri 19 - 02 - 2016', 'Yes', 'No', ''),
(61, '', '', '', '', '', '', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Fri 19 - 02 - 2016', 'No', 'No', ''),
(62, 'THE EXCELLENCE HOSPITAL', '5, ALOGBA STREET, ALOGBA ESTATE ROAD, OFF IBESHE ROAD, EBUTE IGA IKORODU', 'HEF/121/549', 'dexcellencehospital@gmail.com', '', '08039552866', '07056777492', 'Lagos', 'DR. OJO SIKIRU OLUBAYO', '07046198496', 'Medical Director', '', '0b449f106455195330c465e6b2e7e80a', 'Fri 19 - 02 - 2016', 'Yes', 'No', ''),
(63, 'LEVERAGE HOSPITAL', '103, ISHASHI ROAD, OJO, LAGOS.', 'HEF/221/086', 'leveragehospital@gmail.com', '', '08060877154', '08060877154', 'Lagos', 'DR. OGUNBAYO PAUL', '08060877154', 'Medical Director', '', 'ba32f5d3777602458ea59195bd4a8f7e', 'Fri 19 - 02 - 2016', 'Yes', 'No', ''),
(64, 'St Thomas Hospital', '17, Awoni- Murphy Street, Haruna Bus Stop, College Road Ogba', '121051', 'stthomashospital45@yahoo.com', '', '07087219646', '07087219646', 'Lagos', 'Dr Adesugba J.A.', '07087219646', 'Medical Director', '', '27b83340f8781c6e604bbe7c9b2550d9', 'Fri 26 - 02 - 2016', 'Yes', 'No', ''),
(65, 'ST CLAIRE SPECIALIST CLINIC', '15, ATUNRASE STREET, SURULERE, LAGOS', '1395', 'chrisotigbuo@yahoo.com', '', '08037141133', '017742621', 'Lagos', 'DR. CHRIS', '08037141133', 'Medical Director', '', 'c29065ef2e50cc4beb8e929df4ff31c4', 'Wed 23 - 03 - 2016', 'Yes', 'No', ''),
(66, 'ULTIMA MEDICARE', '3 ,Cappa Avenue, Palmgrove Estate, Ilupeju, Shomolu, Lagos, Nigeria', '0501', 'ultimamedicare@gmail.com', '', '08029034099', '08029034099', 'Lagos', 'NURSE AYEOLA ADEOLA', '08029034099', 'Matron', '', '0b80c50a128e31226e75c39eaba95d63', 'Wed 23 - 03 - 2016', 'Yes', 'No', ''),
(67, 'FAFTY CLINIC', '66, SHYLLON STREET, ILUPEJU, LAGOS.', 'HEF/111165', 'faftyclinic@yahoo.com', '', '08137142724', '08137142724', 'Lagos', 'DR ISHOLA', '08137142724', 'Medical Director', '', '85552f5e863ff639ab6e20207c50b27e', 'Mon 25 - 04 - 2016', 'No', 'No', ''),
(68, 'ANCEL HOSPITAL', '44, KEMBERI ROAD, OKOKOMAIKO, OJO', 'HEF/121616', 'anasudu_celestina@yahoo.com', '', '08033276989', '08033276989', 'Lagos', 'DR. ANASUDU CELESTINA', '08033276989', 'Medical Director', '', '96b988805f19923944c98c1ed70fb679', 'Mon 25 - 04 - 2016', 'Yes', 'No', ''),
(69, 'Day Spring Hospital', '1, Popoola Street off Isijola Street Ikotun, Lagos', '121453', 'drskadebayo@yahoo.com', '', '08091374444', '08091374444', 'Lagos', 'Dr Adebayo', '08091374444', 'Medical Director', '', '9c35458aab80fd6846432b1915662e82', 'Fri 6 - 05 - 2016', 'No', 'No', ''),
(70, 'FIRST CARDIOLOGY CONSULTANT', '20, THOMPSON AVENUE, IKOYI, LAGOS', '1222', 'frontdesk@firstcardiology.org', 'http://www.firstcardiologyconsultantsonline.com', '08088501854', '08088501854', 'Lagos', 'MRS. LATI AMARIE', '08088501854', 'Manager', '', '32fe497355ff7276f1bf7e719292e74e', 'Fri 6 - 05 - 2016', 'No', 'No', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `hospital_id`, `num_of_provider`, `specialization`, `state`, `shift_type`, `year_of_experience`, `year_of_experience_min`, `year_of_experience_max`, `age_range`, `age_range_min`, `age_range_max`, `request_type`, `duration_from`, `duration_to`, `additional_information`, `date_posted`, `job_type`, `taken`, `hot_job`, `notify`, `locked`, `date_timestamp`) VALUES
(1, '26', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-12-2015', '31-12-2016', 'The Doctors, Nurses,Laboratory Scientist, Accountant must live not too far from Ogba.', 'Thu 19 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-19 08:35:51'),
(2, '19', '2', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-11-2015', '31-12-2016', 'The doctors must live around Ogba or not too far from Ogba. They must have a minimum of 2 years experience.', 'Thu 19 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-19 12:50:40'),
(3, '26', '5', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '02-12-2015', '31-12-2016', 'The Nurses are both single and double qualified, must be females, live around Ogba or not far from Ogba. They would be working three shifts.\r\n\r\nAn accountant with 2 years experience and book keeping knowledge.', 'Thu 19 - 11 - 2015', 'General Practitioner', 'No', '', 'Checked', '', '2015-11-19 13:09:04'),
(4, '16', '2', 'Medical Officer', 'Lagos', 'Night', '', '', '', '', '', '', 'Emergency', '21-11-2015', '24-11-2015', 'Must be hard working', 'Fri 20 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-20 15:56:28'),
(5, '16', '1', 'Specialist', 'Lagos', 'Morning', '', '', '', '', '', '', 'Urgent', '27-11-2015', '30-11-2015', 'It is a mini procedure and it is for Friday, Saturday and Monday Morning, between 8am and 10am', 'Fri 20 - 11 - 2015', 'Anaesthetist', 'No', '', '', '', '2015-11-20 16:00:56'),
(6, '34', '1', 'Medical Officer', 'Lagos', 'Night', '', '', '', '', '', '', 'Routine', '01-12-2015', '31-03-2016', 'Must be able to work under pressure and with less supervision. Will work on Saturdays some time.', 'Fri 20 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-20 16:04:31'),
(7, '37', '1', 'Medical Officer', 'Lagos', 'Night', '', '', '', '', '', '', 'Routine', '30-11-2015', '31-12-2015', 'An NYSC doctor for weekend locum, Fridays between 5pm to 10pm. On weekends will be on call.', 'Mon 23 - 11 - 2015', 'General Practitioner', 'No', '', 'Checked', '', '2015-12-07 15:37:28'),
(8, '38', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '09-11-2015', '31-12-2016', 'A Female Nurse with minimal experience', 'Mon 23 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-23 11:11:45'),
(9, '39', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '07-12-2015', '31-12-2016', 'A female nurse, single qualify Midwife living not too far away from Satellite town.', 'Wed 25 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-25 12:50:08'),
(10, '26', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '07-12-2015', '31-12-2016', 'A Laboratory Scientist and Technician, a minimum of 3 years working experience and willing to work on Saturdays.', 'Wed 25 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-25 12:55:02'),
(11, '40', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '14-12-2015', '31-12-2016', 'A Nurse with double qualification, must reside around Agege,Oko Oba and Abule Egba. And age 45 above.', 'Fri 27 - 11 - 2015', 'General Practitioner', 'No', '', '', '', '2015-11-27 12:30:59'),
(12, '41', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '18-12-2015', '30-06-2016', 'A single qualified female Nurse with 2 years experience, resident around Alimosho or Satellite.', 'Fri 27 - 11 - 2015', 'General Practitioner', 'No', '', 'Checked', '', '2015-12-07 11:16:23'),
(13, '42', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Urgent', '11-12-2015', '31-12-2015', 'A Single qualified Nurse with at least 2 years experience living around the Island.', 'Wed 9 - 12 - 2015', 'General Practitioner', 'No', '', '', '', '2015-12-09 09:52:33'),
(14, '45', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Emergency', '14-12-2015', '30-12-2016', 'A  single qualified Nurse with a minimum of a year experience living around Shogunle, Oshodi.', 'Wed 9 - 12 - 2015', 'General Practitioner', 'No', '', 'Checked', '', '2015-12-17 07:30:13'),
(15, '54', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '26-02-2016', '31-01-2017', 'The candidate should reside in Ikorodu, a minimum of 3 years working experience and male.', 'Fri 8 - 01 - 2016', 'General Practitioner', 'No', '', '', '', '2016-01-08 08:12:05'),
(16, '55', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '22-01-2016', '31-12-2016', 'A registered Midwife residing within Ijegun Satellite and Mile 2', 'Mon 11 - 01 - 2016', 'General Practitioner', 'No', '', 'Checked', '', '2016-02-01 08:27:32'),
(17, '39', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '18-01-2016', '19-12-2016', 'A registered Nurse within Ojo, Okokomaiko axis', 'Mon 11 - 01 - 2016', 'General Practitioner', 'No', '', 'Checked', '', '2016-02-11 09:35:00'),
(18, '50', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '22-01-2016', '31-12-2016', 'A male Medical Doctor with 3- 5 years experience residing within Abule Egba, Igando, Ipaja axis.', 'Wed 13 - 01 - 2016', 'General Practitioner', 'No', '', '', '', '2016-01-13 08:25:48'),
(19, '58', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-05-2016', '31-05-2017', 'The Doctor must be Male and reside within or around Ikorodu', 'Thu 11 - 02 - 2016', 'General Practitioner', 'No', '', '', '', '2016-02-11 09:24:19'),
(20, '54', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-03-2016', '31-03-2017', 'A male Doctor with 2- 3 years experience and have surgical skill.', 'Thu 11 - 02 - 2016', 'General Practitioner', 'No', '', '', '', '2016-02-11 09:27:04'),
(21, '35', '1', 'Nurse', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '15-02-2016', '28-02-2017', 'An RN with minimum of one year working experience.', 'Thu 11 - 02 - 2016', 'Other', 'No', '', '', '', '2016-02-11 09:30:46'),
(22, '55', '1', 'Nurse', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '08-02-2016', '28-02-2017', 'An RN with minimum 1year working experience and must reside around Okokomaiko, Satellite, Ojo Badagry axis.', 'Thu 11 - 02 - 2016', 'Other', 'No', '', '', '', '2016-02-11 09:33:50'),
(23, '60', '2', 'Nurse', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '20-03-2016', '31-03-2017', 'A male and Female Nurse residing within Ikorodu with Midwife experience.', 'Fri 19 - 02 - 2016', 'Other', 'No', '', '', '', '2016-02-19 09:47:20'),
(24, '59', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '07-03-2016', '30-06-2017', 'A Sonographer residing within Ikorodu to work 9am- 2pm', 'Fri 19 - 02 - 2016', 'Other', 'No', '', '', '', '2016-02-19 09:51:42'),
(25, '64', '1', 'Laboratory Scientist', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '03-03-2016', '30-04-2017', 'The person must reside around and within Ogba. A female preferable.', 'Fri 26 - 02 - 2016', 'General Practitioner', 'No', '', '', '', '2016-02-26 14:28:57'),
(26, '66', '2', 'Nurse', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '28-03-2016', '31-03-2017', 'A nurse with theater work experience residing around Surulere, Ojota, Onipanu.', 'Wed 23 - 03 - 2016', 'Other', 'No', '', '', '', '2016-03-23 15:20:01'),
(27, '65', '1', 'Nurse', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '04-04-2016', '31-05-2017', 'A registered Nurse with 10-15 years working experience residing around Surulere.', 'Wed 23 - 03 - 2016', 'Other', 'No', '', '', '', '2016-03-23 15:22:12'),
(28, '67', '3', 'Nurse', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-03-2016', '01-06-2016', '2 Female Registered Nurse with practice licence.\r\none Single Qualified\r\nOne Double Qualified', 'Mon 25 - 04 - 2016', 'Other.  Please specify in Additional Information', 'No', '', '', '', '2016-04-25 13:54:58'),
(29, '67', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-05-2016', '31-05-2016', 'A female Locum Doctor', 'Mon 25 - 04 - 2016', 'Obstetrician/Gynaecologist', 'No', '', 'Checked', '', '2016-05-12 12:01:43'),
(30, '68', '1', 'Laboratory Scientist', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-05-2016', '01-04-2017', 'A female Lab Scientist to work 3 days in a week', 'Mon 25 - 04 - 2016', 'Other.  Please specify in Additional Information', 'No', '', '', '', '2016-04-25 14:00:14'),
(31, '66', '2', 'Nurse', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-05-2016', '31-05-2017', 'THEATER NURSE WITH VALID LICENCE URGENTLY NEEDED IN AN HOSPITAL IN LAGOS', 'Fri 6 - 05 - 2016', 'Other.  Please specify in Additional Information', 'No', '', 'Checked', '', '2016-05-31 08:48:08'),
(32, '66', '1', 'Pharmacist', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-05-2016', '01-08-2016', 'PHARMACY TECHNICIAN NEEDED FOR IMMEDIATE EMPLOYMENT', 'Fri 6 - 05 - 2016', 'Other.  Please specify in Additional Information', 'No', '', '', '', '2016-05-06 08:15:23'),
(33, '69', '1', 'HMO Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Emergency', '01-05-2016', '01-05-2017', 'EXPERIENCED HMO OFFICER URGENTLY NEEDED IN AN HOSPITAL', 'Fri 6 - 05 - 2016', 'Other.  Please specify in Additional Information', 'No', '', '', '', '2016-05-06 08:50:05'),
(34, '54', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '18-05-2016', '30-04-2017', 'A young vibrate male with Sonography experience that can work  either 8am - 6pm daily or 3 times per week.', 'Thu 12 - 05 - 2016', 'Other', 'No', '', 'Checked', '', '2016-05-12 12:05:15'),
(35, '54', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Routine', '01-06-2016', '31-05-2017', 'A male Sonographer urgently needed at our client''s hospital to resume immediately.', 'Tue 17 - 05 - 2016', 'General Practitioner', 'No', '', '', '', '2016-05-17 12:30:31'),
(36, '53', '1', 'Medical Officer', 'Lagos', 'Morning', '', '', '', '', '', '', 'Urgent', '15-06-2016', '30-06-2017', 'A passionate Dentist with minimum of 2 years working experience after NYSC.', 'Wed 8 - 06 - 2016', 'General Practitioner', 'No', '', '', '', '2016-06-08 09:03:27'),
(37, '58', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-08-2016', '31-08-2017', 'A male Medical Officer with Surgical skills and will be a resident doctor.', 'Thu 14 - 07 - 2016', 'General Practitioner', 'No', '', '', '', '2016-07-14 16:20:06'),
(38, '53', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-08-2016', '31-07-2017', 'A Dental Medical Officer with minimum of 2 years working experience.', 'Thu 14 - 07 - 2016', 'General Practitioner', 'No', '', '', '', '2016-07-14 16:25:04'),
(39, '53', '1', 'HMO Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-08-2016', '31-08-2017', 'A creative and innovative person with Marketing experience and residing within Lekki/Epe area.', 'Thu 14 - 07 - 2016', 'General Practitioner', 'No', '', '', '', '2016-07-14 16:28:59'),
(40, '53', '1', 'Medical Officer', 'Lagos', 'Mixed', '', '', '', '', '', '', 'Routine', '01-09-2016', '31-08-2017', 'An Optometrist needed around Lekki or can reside within Lekki area.', 'Thu 14 - 07 - 2016', 'Ophthalmologist', 'No', '', '', '', '2016-07-14 16:31:42');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
