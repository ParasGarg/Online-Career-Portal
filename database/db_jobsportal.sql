-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2013 at 07:43 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `career_post`
--

CREATE TABLE IF NOT EXISTS `career_post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `exp` int(3) NOT NULL,
  `func_area` int(2) NOT NULL,
  `resume` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `career_post`
--

INSERT INTO `career_post` (`id`, `name`, `email_id`, `mobile`, `exp`, `func_area`, `resume`) VALUES
(1, 'Paras Garg', 'garg.paras.14@gmail.com', '9582424404', 0, 13, 'upload//resume//1_Paras Garg Resume.docx'),
(2, 'Paras Garg', 'paras.therealstone@gmail.com', '7838089717', 0, 13, 'upload//resume//2_Paras Garg CV.doc'),
(3, 'Paras', '123@123.123', '9582424404', 0, 0, 'upload//contactus_resume//3_Paras Garg CV.doc'),
(4, 'asd', 'abc@abc.abc', '7838089717', 17, 11, 'upload//contactus_resume//4_axis.txt'),
(5, 'asd', 'asdf@D.Xas', '7838089717', 12, 13, 'upload//contactus_resume//5_db javascript.txt');

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE IF NOT EXISTS `emp_details` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_type` varchar(10) NOT NULL,
  `industry_type` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `pin_code` int(6) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `email_id` (`email_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`emp_id`, `name`, `username`, `email_id`, `password`, `gender`, `mobile`, `company_name`, `company_type`, `industry_type`, `address`, `city`, `state`, `country`, `pin_code`) VALUES
(1, 'Paras Garg', 'ParasGarg14', 'garg.paras.14@gmail.com', 'e4241b2947fe5e0fcce2893662ee6fa7', 'Male', '9582424404', 'BeSpoke Digital Media Pvt Ltd', 'Company', '31', 'Block B - 414, Business Park, Sahibabad', 'Ghaziabad', 'Uttar Pradesh', 'India', 201010);

-- --------------------------------------------------------

--
-- Table structure for table `highest_course`
--

CREATE TABLE IF NOT EXISTS `highest_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `highest_course`
--

INSERT INTO `highest_course` (`id`, `course`) VALUES
(0, 'Not Pursued Graduation'),
(1, 'Graduation'),
(2, 'Post-Graduation'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE IF NOT EXISTS `job_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `key_skill` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `ctc` varchar(20) NOT NULL,
  `exp_required` int(5) NOT NULL,
  `jd` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `industry_type` int(5) NOT NULL,
  `func_area` int(11) NOT NULL,
  `vacancies` int(5) NOT NULL,
  `post_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `name`, `profile`, `key_skill`, `location`, `ctc`, `exp_required`, `jd`, `join_date`, `industry_type`, `func_area`, `vacancies`, `post_date`, `expire_date`, `website`) VALUES
(1, 'BeSpoke Digital Media Pvt Ltd', 'Software Developer Trainee', 'PHP', 'Sahibabad', '2,40,000 pa', 0, 'Must have good Technical knowledge', '2013-09-08', 31, 13, 4, '2013-08-26', '2013-08-30', 'http://www.bespokedigitalmedia.in/'),
(2, 'Microsoft', 'Software Developer Trainee', 'C', 'Gurgaon', '5,00,000 pa', 0, 'Good Problem Solving Skills', '2013-11-11', 31, 13, 2, '2013-08-27', '2013-09-10', 'www.microsoft.org'),
(3, 'TCS', 'System Assistant', 'C, .Net, JAVA', 'Hyderabad', '3,16,000 pa', 0, 'Requirement of trainee with strong concepts of language and good communication skills', '2014-01-06', 31, 13, 24, '2013-08-24', '2013-08-31', 'www.tcs.com'),
(4, 'Google India', 'Android Developer', 'Java, Android', 'Bangalore', '4,00,000 pa', 2, 'Atleast must have experience of 2+ years in android development', '2013-10-07', 31, 13, 3, '2013-08-17', '2013-09-17', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_exp`
--

CREATE TABLE IF NOT EXISTS `job_exp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `experience` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `job_exp`
--

INSERT INTO `job_exp` (`id`, `experience`) VALUES
(0, 'Fresher'),
(1, '1 year'),
(2, '2 years'),
(3, '3 years'),
(4, '4 years'),
(5, '5 years'),
(6, '6 years'),
(7, '7 years'),
(8, '8 years'),
(9, '9 years'),
(10, '10 years'),
(11, '11 years'),
(12, '12 years'),
(13, '13 years'),
(14, '14 years'),
(15, '15 years'),
(16, '16 years'),
(17, '17 years'),
(18, '18 years'),
(19, '19 years'),
(20, '20 years'),
(21, '21 years'),
(22, '22 years'),
(23, '23 years'),
(24, '24 years'),
(25, '25 years'),
(26, '26 years'),
(27, '27 years'),
(28, '28 years'),
(29, '29 years'),
(30, '30+ year');

-- --------------------------------------------------------

--
-- Table structure for table `job_func_area`
--

CREATE TABLE IF NOT EXISTS `job_func_area` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `functional_area` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `job_func_area`
--

INSERT INTO `job_func_area` (`id`, `functional_area`) VALUES
(0, 'Accounts / Finance / Tax / CS / Audit'),
(1, 'Agent'),
(2, 'Analytics & Business Intelligence'),
(3, 'Architecture / Interior Design'),
(4, 'Banking / Insurance'),
(5, 'Content / Journalism'),
(6, 'Corporate Planning / Consulting'),
(7, 'Engineering Design / R&D'),
(8, 'Export / Import / Merchandising'),
(9, 'Fashion / Garments / Merchandising'),
(10, 'Guards / Security Services'),
(11, 'Hotels / Restaurants'),
(12, 'HR / Administration / IR'),
(13, 'IT Software - Application Programming / Maintenance'),
(14, 'IT Software - Client Server'),
(15, 'IT Software - Mainframe'),
(16, 'IT Software - Middleware'),
(17, 'IT Software - Mobile'),
(18, 'IT Software - Other'),
(19, 'IT Software - System Programming'),
(20, 'IT Software - Telecom Software'),
(21, 'IT Software - DBA / Datawarehousing'),
(22, 'IT Software - E-Commerce / Internet Technologies'),
(23, 'IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.'),
(24, 'IT Software - ERP / CRM'),
(25, 'IT Software - Network Administration / Security'),
(26, 'IT Software - QA & Testing'),
(27, 'IT Software - Systems / EDP / MIS'),
(28, 'IT Hardware / Telecom / Technical Staff / Support'),
(29, 'ITES / BPO / KPO / Customer Service / Operations'),
(30, 'Legal'),
(31, 'Marketing / Advertising / MR / PR'),
(32, 'Packaging'),
(33, 'Pharma / Biotech / Healthcare / Medical / R&D'),
(34, 'Production / Maintenance / Quality'),
(35, 'Purchase / Logistics / Supply Chain'),
(36, 'Sales / BD'),
(37, 'Secretary / Front Office / Data Entry'),
(38, 'Self Employed / Consultants'),
(39, 'Shipping'),
(40, 'Site Engineering / Project Management'),
(41, 'Teaching / Education'),
(42, 'Ticketing / Travel / Airlines'),
(43, 'Top Management'),
(44, 'TV / Films / Production'),
(45, 'Web / Graphic Design / Visualiser'),
(46, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `job_industry_type`
--

CREATE TABLE IF NOT EXISTS `job_industry_type` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `industry_type` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `job_industry_type`
--

INSERT INTO `job_industry_type` (`id`, `industry_type`) VALUES
(0, 'Accounting / Finance'),
(1, 'Advertising / PR / MR / Event Management'),
(2, 'Agriculture / Dairy'),
(3, 'Animation / Gaming'),
(4, 'Architecture / Interior Design'),
(5, 'Automobile / Auto Anciliary / Auto Components'),
(6, 'Aviation / Aerospace Firms'),
(7, 'Banking / Financial Services / Broking'),
(8, 'BPO / Call Centre / ITES'),
(9, 'Brewery / Distillery'),
(10, 'Ceramics / Sanitary ware'),
(11, 'Chemicals / PetroChemical / Plastic / Rubber'),
(12, 'Construction / Engineering / Cement / Metals'),
(13, 'Consumer Electronics / Appliances / Durables'),
(14, 'Courier / Transportation / Freight / Warehousing'),
(15, 'Education / Teaching / Training'),
(16, 'Electricals / Switchgears'),
(17, 'Export / Import'),
(18, 'Facility Management'),
(19, 'Fertilizers / Pesticides'),
(20, 'FMCG / Foods / Beverage'),
(21, 'Food Processing'),
(22, 'Fresher / Trainee / Entry Level'),
(23, 'Gems / Jewellery'),
(24, 'Glass / Glassware'),
(25, 'Government / Defence'),
(26, 'Heat Ventilation / Air Conditioning'),
(27, 'Industrial Products / Heavy Machinery'),
(28, 'Insurance'),
(29, 'Iron and Steel'),
(30, 'IT-Hardware & Networking'),
(31, 'IT-Software / Software Services'),
(32, 'KPO / Research / Analytics'),
(33, 'Legal'),
(34, 'Media / Entertainment / Internet'),
(35, 'Internet / Ecommerce'),
(36, 'Medical / Healthcare / Hospitals'),
(37, 'Mining / Quarrying'),
(38, 'NGO / Social Services / Regulators / Industry Associations'),
(39, 'Office Equipment / Automation'),
(40, 'Oil and Gas / Energy / Power / Infrastructure'),
(41, 'Pulp and Paper'),
(42, 'Pharma / Biotech / Clinical Research'),
(43, 'Printing / Packaging'),
(44, 'Publishing'),
(45, 'Real Estate / Property'),
(46, 'Recruitment / Staffing'),
(47, 'Retail / Wholesale'),
(48, 'Security / Law Enforcement'),
(49, 'Semiconductors / Electronics'),
(50, 'Shipping / Marine'),
(51, 'Strategy / Management Consulting Firms'),
(52, 'Telcom / ISP'),
(53, 'Textiles / Garments / Accessories'),
(54, 'Travel / Hotels / Restaurants / Airlines / Railways'),
(55, 'Tyres'),
(56, 'Water Treatment / Waste Management'),
(57, 'Wellness / Fitness / Sports'),
(58, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_details`
--

CREATE TABLE IF NOT EXISTS `seeker_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `marriage_status` varchar(8) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `key_skill` varchar(25) NOT NULL,
  `experience` varchar(5) NOT NULL,
  `industry_type` varchar(5) DEFAULT NULL,
  `func_area` varchar(5) DEFAULT NULL,
  `highest_course` varchar(5) NOT NULL,
  `others` varchar(30) DEFAULT NULL,
  `hsc` varchar(30) DEFAULT NULL,
  `hsc_special` varchar(30) DEFAULT NULL,
  `hsc_percentage` varchar(30) DEFAULT NULL,
  `hsc_rollno` varchar(30) DEFAULT NULL,
  `hsc_college` varchar(30) DEFAULT NULL,
  `hsc_batch` varchar(30) DEFAULT NULL,
  `ssc` varchar(30) DEFAULT NULL,
  `ssc_special` varchar(30) DEFAULT NULL,
  `ssc_percentage` varchar(30) DEFAULT NULL,
  `ssc_rollno` varchar(30) DEFAULT NULL,
  `ssc_college` varchar(30) DEFAULT NULL,
  `ssc_batch` varchar(30) DEFAULT NULL,
  `bachelor` varchar(30) DEFAULT NULL,
  `bachelor_special` varchar(30) DEFAULT NULL,
  `bachelor_percentage` varchar(30) DEFAULT NULL,
  `bachelor_rollno` varchar(30) DEFAULT NULL,
  `bachelor_college` varchar(100) DEFAULT NULL,
  `bachelor_batch` varchar(30) DEFAULT NULL,
  `master` varchar(30) DEFAULT NULL,
  `master_special` varchar(30) DEFAULT NULL,
  `master_percentage` varchar(30) DEFAULT NULL,
  `master_rollno` varchar(30) DEFAULT NULL,
  `master_college` varchar(100) DEFAULT NULL,
  `master_batch` varchar(30) DEFAULT NULL,
  `resume` varchar(100) NOT NULL,
  `resume_txt` varchar(100) NOT NULL,
  `agree` varchar(3) NOT NULL,
  `notification` varchar(3) DEFAULT NULL,
  `call_sms` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `experience` (`experience`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `seeker_details`
--

INSERT INTO `seeker_details` (`id`, `email_id`, `password`, `fname`, `lname`, `gender`, `marriage_status`, `mobile`, `phone`, `address`, `country`, `state`, `city`, `pincode`, `key_skill`, `experience`, `industry_type`, `func_area`, `highest_course`, `others`, `hsc`, `hsc_special`, `hsc_percentage`, `hsc_rollno`, `hsc_college`, `hsc_batch`, `ssc`, `ssc_special`, `ssc_percentage`, `ssc_rollno`, `ssc_college`, `ssc_batch`, `bachelor`, `bachelor_special`, `bachelor_percentage`, `bachelor_rollno`, `bachelor_college`, `bachelor_batch`, `master`, `master_special`, `master_percentage`, `master_rollno`, `master_college`, `master_batch`, `resume`, `resume_txt`, `agree`, `notification`, `call_sms`) VALUES
(1, 'garg.paras.14@gmail.com', 'e4241b2947fe5e0fcce2893662ee6fa7', 'Paras', 'Garg', 'Male', 'Single', '9582424404', '7838089717', '535 FF, Nitikahnd 2, Indirapuram', 'India', 'Uttar Pradesh', 'Ghaziabad', 201010, 'C, SQL, PHP & .Net', '', '', '', '1', '', 'CBSE', 'Science Side', '80.6%', '5191460', 'St. Fidelis Sr. Sec. School', '2007', 'CBSE', 'PCM', '67.4%', '51', 'St. Fidelis Sr. Sec. School', '2009', 'B.Tech', 'Information Technology', '75.6%', '0919213067', 'G. L. Bajaj Institute of Technology & Management', '2013', '', '', '', '', '', '', 'upload/seeker_resume/_Paras Garg Resume.docx', 'upload/seeker_resume/1_Paras Garg Resume.txt', 'on', 'on', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
