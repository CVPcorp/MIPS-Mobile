-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2016 at 05:49 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sgstudio_mips`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmecourses`
--

CREATE TABLE IF NOT EXISTS `cmecourses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `credits` varchar(5) NOT NULL,
  `overview` text NOT NULL,
  `objectives` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cmecourses`
--

INSERT INTO `cmecourses` (`id`, `title`, `link`, `credits`, `overview`, `objectives`) VALUES
(1, 'LEARN ABOUT MACRA AND MIPS', 'https://qpp.cms.gov/', '1.0', 'Learn more about MACRA and MIPS, how can it help you, its'' benefits, how participation can it impact on\n', 'At the conclusion of this course,\nparticipants should be able to:\n<ul>\n<li> Understand the basics of the Improvement Activities category</li>\n<li> Gain a deeper understanding on how it affects your MIPS score</li>\n<li> Tips and guidelines on excelling in this category</li>\n<li> Understand all reporting requirements</li>\n<li> Recognize and implement ways to avoid lowering your score </li></ul>'),
(2, 'THE IMPROVEMENT ACTIVITIES PERFORMANCE CATEGORY OF MIPS', 'https://qpp.cms.gov/learn/qpp', '1.0', 'Gives you answers to common questions about the ''Advancing ... Care...  Information'' performance category ... the MIPS', 'At the conclusion of this course,\nparticipants should be able to:\n<ul>\n<li> Understand the basics of the Improvement Activities category</li>\n<li> Gain a deeper understanding on how it affects your MIPS score</li>\n<li> Tips and guidelines on excelling in this category</li>\n<li> Understand all reporting requirements</li>\n<li> Recognize and implement ways to avoid lowering your score </li></ul>'),
(3, 'THE ACI PERFORMANCE CATEGORY OF MIPS', 'https://qpp.cms.gov/', '1.0', '"Gives you answers to common questions about the ''Clinical Performance Improvement Activities'' performance category of the MIPS Program:\nWhat is it?\nHow to excel in this performance category?  What are the reporting requirements?\nHow does this affect your MIPS Composite Score?  etc.\n', 'At the conclusion of this course,\nparticipants should be able to:\n<ul>\n<li> Understand the basics of the Improvement Activities category</li>\n<li> Gain a deeper understanding on how it affects your MIPS score</li>\n<li> Tips and guidelines on excelling in this category</li>\n<li> Understand all reporting requirements</li>\n<li> Recognize and implement ways to avoid lowering your score </li></ul>'),
(4, 'COST (MIPS PERFORMANCE CATEGORY)', 'https://qpp.cms.gov/measures/performance', '1.0', 'Gives you answers to common questions about the ''Advancing ... the MIPS an increased knowledge of the new pericardial disease guidelines.\na safe exercise program for the cardiac patient.\n', 'At the conclusion of this course,\nparticipants should be able to:\n<ul>\n<li> Understand the basics of the Improvement Activities category</li>\n<li> Gain a deeper understanding on how it affects your MIPS score</li>\n<li> Tips and guidelines on excelling in this category</li>\n<li> Understand all reporting requirements</li>\n<li> Recognize and implement ways to avoid lowering your score </li></ul>'),
(5, 'QUALITY PERFORMANCE CATEGORY OF MIPS', 'https://qpp.cms.gov/', '1.0', 'Gives you answers to common questions about the ''Advancing ... the MIPS an increased knowledge of the new pericardial disease guidelines.\na safe exercise program for the cardiac patient.', 'At the conclusion of this course,\nparticipants should be able to:\n<ul>\n<li> Understand the basics of the Improvement Activities category</li>\n<li> Gain a deeper understanding on how it affects your MIPS score</li>\n<li> Tips and guidelines on excelling in this category</li>\n<li> Understand all reporting requirements</li>\n<li> Recognize and implement ways to avoid lowering your score </li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `comparedata`
--

CREATE TABLE IF NOT EXISTS `comparedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `npi` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `location` varchar(15) NOT NULL,
  `mips` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comparedata`
--

INSERT INTO `comparedata` (`id`, `name`, `npi`, `zipcode`, `location`, `mips`) VALUES
(1, 'Eveline Li', 'NPI: 20954205720', 'CA 90815', '1.92 miles', 'MIPS 68'),
(2, 'Catherine Newman', 'NPI: 35982713493', 'CA 94550', '2.56 miles', 'MIPS 59'),
(3, 'Robert Taylor', 'NPI: 56984592345', 'CA 94694', '5.43 miles', 'MIPS 70'),
(4, 'Kat Simpson', 'NPI: 68572323456', 'CA 94604', '7.8 miles', 'MIPS 63'),
(5, 'Nockolas Shwarz', 'NPI: 86737234777', 'CA 94694', '6.77 miles', 'MIPS 61'),
(6, 'Jasmeet Sharma', 'NPI: 34595984345', 'CA 98423', '8.90 miles', 'MIPS 76'),
(7, 'John Smith', 'NPI: 9857453211', 'CA 93403', '10.12 miles', 'MIPS 65');

-- --------------------------------------------------------

--
-- Table structure for table `masterdata`
--

CREATE TABLE IF NOT EXISTS `masterdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ach` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `npi` varchar(15) NOT NULL,
  `tin` varchar(15) NOT NULL,
  `mscore` varchar(5) NOT NULL,
  `mustage` varchar(10) NOT NULL,
  `payout` varchar(9) NOT NULL,
  `ccn` varchar(10) NOT NULL,
  `mgroup` varchar(50) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `education` varchar(100) NOT NULL,
  `acceptsMedicare` varchar(5) NOT NULL,
  `cmecredits` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `masterdata`
--

INSERT INTO `masterdata` (`id`, `ach`, `email`, `password`, `pic`, `name`, `fname`, `lname`, `state`, `sname`, `npi`, `tin`, `mscore`, `mustage`, `payout`, `ccn`, `mgroup`, `speciality`, `zipcode`, `city`, `address`, `phone`, `education`, `acceptsMedicare`, `cmecredits`) VALUES
(1, 2, '', 'd41d8cd98f00b204e9800998ecf8427e', 'dr.png', 'David Bruce Richardson', 'David', 'Richardson', 'CA', 'David', '1083630784', '583826543', '67', '2', '$ 7840', '675634', 'LOS ANGELES COUNTY DEPARTMENT OF MENTAL HEALTH', 'Clinical Social Worker', 92807, 'Anaheim', '411 N Lakeview Ave', '(714) 378-7000', 'Washington Medical College', 'YES', 23),
(2, 3, 'meganantonio@qmail.com', 'cccc919d78a60f72258a4d37cc192520', 'ma.png', 'Megan Antonio Bonaccorsi ', 'Megan', 'Bonaccorsi', 'CA', 'Megan', '1811142177', '674258543', '56', '2', '$ 8125', '475346', 'KAISER FOUNDATION HP, INC.', 'Internal Medicine', 92120, 'San Diego', '4405 Vandever Ave', '(619) 528-5000', 'Jefferson University', 'NO', 56),
(3, 0, 'duncanchang@qmail.com', 'b97233812fb62ae09c2d67a568176448', 'dc.png', 'Duncan Hwan Chang', 'Duncan', 'Chang', 'CA', 'Duncan', '1811171333', '845247953', 'N/A', '1', 'N/A', '854235', 'GARY CHEN MD INC', 'Physical Therapy', 90015, 'Los Angeles', '1513 S GRAND AVE\r\n208 CALIFORNIA ORTHOPEDIC INSTITUTE', '(213) 705-8088', 'University of Southern California', 'YES', 38),
(4, 1, 'johnmathews@qmail.com', '6e0b7076126a29d5dfcbd54835387b7b', 'jm.png', 'John Mathews', 'John', 'Mathews', 'TX', 'John', '1659493658', '764245743', '73', '1', '$ 4289', '864356', 'TEXAS ONCOLOGY PA', 'Medical Oncology', 75246, 'Dallas', '3410 WORTH ST\r\n730 TEXAS ONCOLOGY SAMMONS 7TH FLOOR', '(214) 370-1000', 'MEDICAL CITY DALLAS HOSPITAL', 'YES', 65),
(5, 4, 'danielapaterson@qmail.com', 'b5ea8985533defbf1d08d5ed2ac8fe9b', 'dp.png', 'Daniela Peterson', 'Daniela', 'Peterson', 'NY', 'Daniela', '1669497905', '753535685', '76', '2', '$ 9268', '754346', ' NEW YORK UNIVERSITY', 'Diagnostic Radiology', 10006, 'New York', '111 BROADWAY', '(212) 263-9700', 'RICHMOND UNIVERSITY MEDICAL CENTER', 'YES', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_link` varchar(300) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `timestamp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image_link`, `title`, `description`, `timestamp`) VALUES
(1, 'https://www.sgstudio4.com/cvp/test/assets/images/news_img1.jpg', 'HHS finalizes streamlined Medicare payment system that rewards clinicians for quality patient care', 'MACRA rule will accelerate health care system''s shift toward value <br/><br/>\nToday, the Department of Health & Human Services (HHS) finalized a landmark new payment system for Medicare clinicians that will continue the Administration''s progress in reforming how the health care system pays for care. The Medicare Access and CHIP Reauthorization Act of 2015 (MACRA) Quality Payment Program, which replaces the flawed Sustainable Growth Rate (SGR), will equip clinicians with the tools and flexibility to provide high-quality, patient-centered care. With clinicians as partners, the Administration is building a system that delivers better care, one in which clinicians work together and have a full understanding of patients'' needs, Medicare pays for what works and spends taxpayer money more wisely, and patients are in the center of their care, resulting in a healthier country.\n<br/><br/>\n"Today, we''re proud to put into action Congress''s bipartisan vision of a Medicare program that rewards clinicians for delivering quality care to their patients," said HHS Secretary Sylvia M. Burwell. "Designed with input from thousands of clinicians and patients across the country, the new Quality Payment Program will strengthen our health care system for patients, clinicians and the American taxpayer."\n<br/><br/>\nWith the Affordable Care Act, America has made important strides in helping more Americans than ever afford quality health insurance and access patient-centered care. The Affordable Care Act created important tools to put individuals at the center of their own care and unlock access to health care data for patients and their clinicians. Today''s announcement builds on this progress and make our health care system work better for everyone. With MACRA, Congress gave HHS the tools to keep improving how we pay for care, so clinicians can focus on the quality of care they give, not the quantity of services they provide; and to keep improving the way care is delivered, by encouraging better coordination and prioritizing wellness and prevention.\n<br/><br/>\n"It''s time to modernize the Medicare physician payment system to be more streamlined and effective at supporting high-quality patient care. To be successful, we must put patients and clinicians at the center of the Quality Payment Program," said Andy Slavitt, Acting Administrator of the Centers for Medicare & Medicaid Services (CMS). "A critical feature of the program will be implementing these changes at a pace and with options that clinicians choose. Today''s policies are designed to get all eligible clinicians to participate in the program, so they are set up for successful care delivery as the program matures."\n<br/><br/>\nToday''s rule is informed by a months-long listening tour with nearly 100,000 attendees and nearly 4,000 public comments. A common theme in the input HHS received was the need for flexibility, simplicity, and support for small practices. And that''s what this final policy aims to provide. First, the new payment system creates two pathways. These paths let clinicians pick the right pace for them to participate in the transition from a fee-for-service health care system to one that uses alternative payment models that reward quality of care over quantity of services. Clinicians will choose between two options:\n<br/><br/>\nThe first path gives clinicians the opportunity to be paid more for better care and investments that support patients. It reduces existing requirements, while still emphasizing and rewarding quality care. In the first year, it also provides a flexible performance period, so that those who are ready can dive in immediately, but those who need more time can prepare for participation later in the year.\nThe second path helps clinicians go further by participating in organizations that get paid primarily for keeping people healthy. For example, they could be part of an Accountable Care Organization where clinicians come together to coordinate high-quality care for the patients they serve. When they get better health results and reduce costs for the care of their patients, the clinicians receive a portion of the savings.\n<br/><br/>\n<b>Evolving along with payment reform</b>\n<br/><br/>\nCMS is building the Quality Payment Program to evolve along with the health care system. That''s why it facilitates participation in new payment models. The Affordable Care Act created the Center for Medicare and Medicaid Innovation (Innovation Center) to implement and scale the best ideas from the medical community to improve the quality of care for Medicare beneficiaries while lowering costs. Thanks to the Innovation Center''s work so far, Medicare has a plan for eligible beneficiaries to receive free diabetes prevention services, the quality of hip and knee replacements are being improved while lowering costs, and primary care clinicians are using flexibility to deliver the best outcomes with a payment system that rewards results. CMS intends to broaden opportunities for clinicians, including small practices and specialties, to participate in these kinds of initiatives. For example, a major opportunity being considered for 2018 will be the new Accountable Care Organization Track 1+ model that provides more flexibility for clinicians. CMS is also reviewing reopening some existing Advanced Alternative Payment Models for application to allow more clinicians to join these types of initiatives. In 2018, CMS expects about 25 percent of eligible clinicians will be a part of the second path of Advanced Alternative Payment Models.\n<br/><br/>\n<b>Providing comprehensive support to clinicians</b>\n<br/><br/>\nTo further support small practices, MACRA provides $20 million each year for five years to train and educate Medicare clinicians in small practices of 15 clinicians or fewer and those working in underserved areas. Beginning December 2016, local, experienced organizations will offer free, on-the-ground, specialized help to small practices using this funding. In addition, Jean Moody-Williams, Registered Nurse and Deputy Director of the CMS Center for Clinical Standards and Quality (CCSQ), is leading an outreach effort to individual clinicians nationwide to help them prepare for the Quality Payment Program. In addition, CMS has launched a long-term initiative, led by Dr. Shantanu Agarwal, to improve the clinician experience with Medicare.\n<br/><br/>\nToday, we''re also launching a new Quality Payment Program website, which will explain the new program and help clinicians easily identify the measures most meaningful to their practice or specialty. There will also be a service center available by email and phone that will answer questions about the Quality Payment Program.\n<br/><br/>\nContinuing to listen\n<br/><br/>\nToday''s rule incorporates input received to date, but it is only the next step in an iterative process for implementing the new law. We are launching a new interactive website to help clinicians understand the program and successfully participate. We will continue to host listening and learning sessions throughout the country, and welcome additional feedback from patients, caregivers, clinicians, health care professionals, Congress and others on how to better achieve these goals. HHS looks forward to feedback on the final rule with comment period and will accept comments until 60 days after the final rule''s release date.\n<br/><br/>\nFor more information about today''s rule, including a fact sheet, please visit: <a href=''https://qualitypaymentprogram.cms.gov/education''>https://qualitypaymentprogram.cms.gov/education</a>\n<br/><br/>\nComments may be submitted electronically through our e-Regulation website at <br/><br/><a href=''http://www.cms.gov/Regulations-and-Guidance/Regulations-and-Policies/eRulemaking/index.html?redirect=/eRulemaking.''>http://www.cms.gov/Regulations-and-Guidance/Regulations-and-Policies/eRulemaking/index.html?redirect=/eRulemaking.</a>\n<br/><br/>\nFor more information on today''s rule, including a blog post, please visit: <a href=''https://blog.cms.gov/2016/10/14/a-letter-from-cms-to-medicare-clinicians-in-the-quality-payment-program/'' target=''_blank''>https://blog.cms.gov/2016/10/14/a-letter-from-cms-to-medicare-clinicians-in-the-quality-payment-program/</a>\n', 'October 14, 2016'),
(2, 'https://www.sgstudio4.com/cvp/test/assets/images/news_img2.jpg', 'CMS FINALIZES RULE GIVING PROVIDERS AND EMPLOYERS IMPROVED ACCESS TO INFORMATION FOR BETTER PATIENT ', 'The Centers for Medicare & Medicaid Services (CMS) today finalized new rules that will enrich the Qualified Entity by expanding access to analyses and data that will help providers, employers, and others make more informed decisions about care delivery and quality improvement. The new rules, as required by the Medicare Access and CHIP\r\n', 'October 2, 2016'),
(3, 'https://www.sgstudio4.com/cvp/test/assets/images/news_img3.jpg', 'CMS'' OPEN PAYMENTS PROGRAM POSTS 2015 FINANCIAL DATA\r\n', 'Today, the Centers for Medicare & Medicaid Services (CMS) published 2015 Open Payments data, along with newly submitted and updated payment records for the 2013 and 2014 reporting periods, at https://openpaymentsdata.cms.gov/. The Open Payments ... ..program (sometimes called the “Sunshine Act”)   that transfers of value by manufacturers of drugs, devices, biologicals, and medical supplies that are paid to physicians and teaching hospitals will be published on a public website.', 'September 14, 2016'),
(4, 'https://www.sgstudio4.com/cvp/test/assets/images/news_img4.jpg', 'EXPANSION OF HEPATITIS C DRUG COVERAGE IN MASSACHUSETTS', 'Today, the Commonwealth of Massachusetts is taking steps that increase Medicaid patients'' access to Hepatitis C medications. Removing restriction access will help Medicaid beneficiaries in Massachusetts receive these life-saving mollit anim id est laborum..\r\n', 'July 15, 2016'),
(5, 'https://www.sgstudio4.com/cvp/test/assets/images/news_img5.jpg', 'RETURN TO NEWSROOM\r\nMEDICARE WILL USE PRIVATE PAY', 'Today, the Centers for Medicare & Medicaid Services (CMS) released a final rule implementing Section 216(a) of the Protecting Access to Medicare Act of 2014 (PAMA), requiring laboratories performing clinical diagnostic laboratory tests to report the amounts paid by private insurers for laboratory tests. Medicare will use these private insurer rates to calculate Medicare payment rates for laboratory', 'July 6, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `programhistory_mips`
--

CREATE TABLE IF NOT EXISTS `programhistory_mips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `score` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `programhistory_mips`
--

INSERT INTO `programhistory_mips` (`id`, `uid`, `year`, `score`) VALUES
(1, 1, '2013', '64'),
(2, 1, '2014', '67'),
(3, 2, '2013', '48'),
(4, 2, '2014', '56'),
(5, 3, '2013', 'N/A'),
(6, 3, '2014', 'N/A'),
(7, 4, '2013', '68'),
(8, 4, '2014', '73'),
(9, 5, '2013', 'N/A'),
(10, 5, '2014', '76'),
(13, 1, '2013', '55'),
(14, 1, '2014', '60');

-- --------------------------------------------------------

--
-- Table structure for table `programhistory_mu`
--

CREATE TABLE IF NOT EXISTS `programhistory_mu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `stage` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `programhistory_mu`
--

INSERT INTO `programhistory_mu` (`id`, `uid`, `year`, `stage`) VALUES
(1, 1, '2013', '1'),
(2, 1, '2014', '1'),
(3, 1, '2015', '2'),
(4, 2, '2013', '1'),
(5, 2, '2014', '2'),
(6, 2, '2015', '2'),
(7, 3, '2013', 'N/A'),
(8, 3, '2014', 'N/A'),
(9, 3, '2015', '1'),
(10, 4, '2013', '1'),
(11, 4, '2014', '1'),
(12, 4, '2015', '1'),
(13, 5, '2013', 'N/A'),
(14, 5, '2014', '1'),
(15, 5, '2015', '2'),
(24, 1, '2013', '1'),
(25, 1, '2014', '1'),
(26, 1, '2015', '2'),
(27, 1, '2013', '+0.5%'),
(28, 1, '2014', '+1.0%'),
(29, 1, '2015', '+1.5%'),
(30, 1, '2013', '$5693'),
(31, 1, '2014', '$6943');

-- --------------------------------------------------------

--
-- Table structure for table `programhistory_pqrs`
--

CREATE TABLE IF NOT EXISTS `programhistory_pqrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `payout` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `programhistory_pqrs`
--

INSERT INTO `programhistory_pqrs` (`id`, `uid`, `year`, `payout`) VALUES
(1, 1, '2013', '$6213'),
(2, 1, '2014', '$7840'),
(3, 2, '2013', '$7211'),
(4, 2, '2014', '$8125'),
(5, 3, '2013', 'N/A'),
(6, 3, '2014', 'N/A'),
(7, 4, '2013', '$3116'),
(8, 4, '2014', '$4289'),
(9, 5, '2013', 'N/A'),
(10, 5, '2014', '$9268');

-- --------------------------------------------------------

--
-- Table structure for table `programhistory_vm`
--

CREATE TABLE IF NOT EXISTS `programhistory_vm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `stage` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `programhistory_vm`
--

INSERT INTO `programhistory_vm` (`id`, `uid`, `year`, `stage`) VALUES
(1, 1, '2013', '+0.5%'),
(2, 1, '2014', '+1.0%'),
(3, 1, '2015', '+1.5%'),
(4, 2, '2013', '+0.25%'),
(5, 2, '2014', '+0.50%'),
(6, 2, '2015', '+1.0%'),
(7, 3, '2013', 'N/A'),
(8, 3, '2014', 'N/A'),
(9, 3, '2015', '+0.35%'),
(10, 4, '2013', '+0.5%'),
(11, 4, '2014', '+0.63%'),
(12, 4, '2015', '+0.88%'),
(13, 5, '2013', 'N/A'),
(14, 5, '2014', '+0.45%'),
(15, 5, '2015', '+0.97%');

-- --------------------------------------------------------

--
-- Table structure for table `savednews`
--

CREATE TABLE IF NOT EXISTS `savednews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `programhistory_mips`
--
ALTER TABLE `programhistory_mips`
  ADD CONSTRAINT `username3` FOREIGN KEY (`uid`) REFERENCES `masterdata` (`id`);

--
-- Constraints for table `programhistory_mu`
--
ALTER TABLE `programhistory_mu`
  ADD CONSTRAINT `username` FOREIGN KEY (`uid`) REFERENCES `masterdata` (`id`);

--
-- Constraints for table `programhistory_pqrs`
--
ALTER TABLE `programhistory_pqrs`
  ADD CONSTRAINT `username4` FOREIGN KEY (`uid`) REFERENCES `masterdata` (`id`);

--
-- Constraints for table `programhistory_vm`
--
ALTER TABLE `programhistory_vm`
  ADD CONSTRAINT `username2` FOREIGN KEY (`uid`) REFERENCES `masterdata` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
