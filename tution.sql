-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 07:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tution`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `date1` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `imgs`, `description`, `date1`) VALUES
(1, 'About Our  Classess', '85f42134d98de9f87feaeb1a57bcd15a1488066467.png', '<p>Our Classes is an institute dedicated to providing excellent instruction to young and inquisitive minds. This institute is a sincere effort to improve aspiring students’ preparation by providing them with an indispensable competitive edge in various entrance examinations such as JEE(MAIN & ADVANCED), AIIMS/NEET, FOUNDATION Olympiads, NTSE, KVPY, and others.</p> Starting with just one student, our Gurukul family’s hard work and dedication, as well as the inspiring environment of our institute, resulted in exceptional development in the following years.</p>', '2021-12-20 11:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contactno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `whatsappno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `fullname`, `pname`, `contactno`, `course`, `duration`, `price`, `whatsappno`, `address`, `date1`, `status`) VALUES
(2, 'suraj kumar', 'bhagirath mahto', '8102079875', '2', 'One Year', '14000', '1233234323', 'edfedferfr', '30-12-2021', 'pending'),
(3, 'suraj kumar', 'bhagirath mahto', '8102079875', '2', 'One Year', '14000', '122435565656', 'eferfgrgr', '31-12-2021', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(5, 'Sunita devi', 'sunita@gmail.com', '7845124568', 'survey', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `cource_categories`
--

CREATE TABLE `cource_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `notes` longtext NOT NULL,
  `date1` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cource_categories`
--

INSERT INTO `cource_categories` (`id`, `title`, `imgs`, `notes`, `date1`) VALUES
(4, 'Engineering', '300af9768ba3b811cc19e6a12ebedcdc1988849855.png', '<p>Prepare for IIT-JEE/ IPU/ BITSAT For 11th studying and 12th passout students</p>', '2021-12-25 11:43:02'),
(5, 'NEET', '6f9e1e29915c70c8ca719b3267fe60dc1709735949.png', '<p>Prepare for AIIMS/ JIPMER For 11th studying and 12th passout students</p>', '2021-12-25 11:44:02'),
(6, 'MEDICAL', '5704c5459fb47a0abfca5c1e73214e46216090672.png', '<p>Prepare for AIIMS/ NEET/ JIPMER For 11th studying and 12th passout students&nbsp;</p>', '2021-12-25 11:45:59'),
(7, 'FOUNDATIONS', '8013668203651fb1ebfcb9f94298f79b1147812692.png', '<p>Prepare for KVPY/ NTSE/ Olympiads/ Boards For 9th &amp; 10th class students</p>', '2021-12-25 11:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_cate` int(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_type` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `date1` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_cate`, `course_name`, `course_type`, `duration`, `img`, `video_url`, `date1`, `price`, `Description`) VALUES
(6, 6, '6 th -8 th', 'Course Fee(One year) Classroom Program with  App Test Series.', 'Yearly,One Time,(Half Yearly)*2,(Quarterly)*4,times*8', '49da20f09736c859c1526dfde25604ba500382404.png', '', '2022-01-03', '16000,13500,7000,4000,2100', '<table cellspacing=\"0\" style=\"border-collapse:collapse; width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:200px\">\r\n			<p>Key Features of Classroom Program</p>\r\n			</td>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:200px\">\r\n			<p>Course Fee(One year) Classroom Program with App Test Series.</p>\r\n			</td>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:200px\">\r\n			<p>&nbsp;Live app Premium only</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:143px; vertical-align:top; width:200px\">\r\n			<p>&bull; All Subjects by Experienced &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty</p>\r\n\r\n			<p>&bull; Daily 03 hours (Mon-Friday) &bull; Weekly Test</p>\r\n\r\n			<p>&bull; Doubt Session Class</p>\r\n\r\n			<p>&bull; Monthly Progress reports to Parents</p>\r\n\r\n			<p>&bull; Well Researched Study Materials</p>\r\n\r\n			<p>&bull; Personal guidance &amp; Mentorship by experts</p>\r\n\r\n			<p>&bull; Study &amp; Progress report traces through Madok App by Parent.</p>\r\n\r\n			<p>&bull; Motivational Class by Motivational Speaker in every month.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:143px; vertical-align:top; width:200px\">\r\n			<p>16000/- Yearly</p>\r\n\r\n			<p>13500/- One Time</p>\r\n\r\n			<p>7000*2 (Half Yearly) 4000*4(Quarterly) 2100*8times</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Note:- Including Admission fee + Registration Fee + Notes &amp; Free App for one Year</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:143px; vertical-align:top; width:200px\">\r\n			<p>29000/- Only</p>\r\n\r\n			<p>31000/-(One time)</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>20000/- At the time of Admission</p>\r\n\r\n			<p>5000*3 month</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(7, 7, '9th- 10th', 'Course Fee(One year) Classroom Program with  App Test Series.', 'Yearly,One Time,(Half Yearly)*2,(Quarterly)*4,times*8,Else per monthly', '49da20f09736c859c1526dfde25604ba1404746640.png', '', '2022-01-03', '36000,32000,16500,9000,5000,3500', '<table cellspacing=\"0\" style=\"border-collapse:collapse; width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:200px\">\r\n			<p>Key Features of Classroom Program</p>\r\n			</td>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:200px\">\r\n			<p>Course Fee(One year) Classroom Program with&nbsp; App Test Series.</p>\r\n			</td>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:200px\">\r\n			<p>&nbsp;Live app Premium only</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:143px; vertical-align:top; width:200px\">\r\n			<p>&bull; All Subjects by Experienced Faculty</p>\r\n\r\n			<p>&bull; Daily 03 hours (Mon-Friday)/Weekend Classes(05hr)</p>\r\n\r\n			<p>&bull; Weekly Test &amp; Doubt Session Class</p>\r\n\r\n			<p>&bull; Monthly Progress reports to Parents</p>\r\n\r\n			<p>&bull; Well Researched Study Materials</p>\r\n\r\n			<p>&bull; Personal guidance &amp; Mentorship by experts</p>\r\n\r\n			<p>&bull; Subjective test for School support.</p>\r\n\r\n			<p>&bull; Objective test for Foundation level &amp; other exams like NEET &amp; JEE</p>\r\n\r\n			<p>&bull; Study &amp; Progress report traces through Madok App by Parent.</p>\r\n\r\n			<p>&bull; Motivational Class by Motivational Speaker in every month</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:143px; vertical-align:top; width:200px\">\r\n			<p>36000/- Yearly</p>\r\n\r\n			<p>32000/- One Time</p>\r\n\r\n			<p>16500*2 (Half Yearly) 9000*4(Quarterly) 5000*8times</p>\r\n\r\n			<p>&nbsp;Else 3500/-monthly</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Note:- Including Admission fee + Registration Fee + Notes &amp; Free App for one Yea</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:143px; vertical-align:top; width:200px\">\r\n			<p>38000/- Only</p>\r\n\r\n			<p>35000/- One time</p>\r\n\r\n			<p>20000/- At the time of</p>\r\n\r\n			<p>Admission 6000*3months</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Free Study Material</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `course_buy`
--

CREATE TABLE `course_buy` (
  `id` int(11) NOT NULL,
  `course_cate` int(11) NOT NULL,
  `course` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date1` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `director_message`
--

CREATE TABLE `director_message` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `date1` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_message`
--

INSERT INTO `director_message` (`id`, `title`, `imgs`, `description`, `date1`) VALUES
(1, 'Dipak Kumar ', 'b1568f3c50ae4367ce7b3965b1cd75dc1419246580.jpg', '<p>Dear Parents & Students!  Welcomes you all in cutting era of education. As Darwin said “ ONLY FITTEST WILL SURVIVE” Our Classes is open with a concept to provide objective – centric education in a different innovation and affordable learning environment in the challenging field of competitive entrance examination like JEE (Mains + Adv.) AIIMS/NEET/NTSE/OLYMPIAD/KVPY and other ENGINEERING & MEDICAL EXAMINATIONS.</p>', '2021-12-21 05:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date1` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `faculty` varchar(150) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `imgs`, `course`, `faculty`, `experience`, `created_at`) VALUES
(3, 'Mr Sujit Kumar', '774880c4fd8812f39e2950b0d700cc862084762399.jpg', 'M. Sc. Biochemistry', 'Ex-Factly - Aakash Institute, Siliguri ', '', '2021-12-25 08:24:05'),
(4, 'Sunita devi', 'f638cf6136f822d77a57239b18a6b233688096128.jpg', 'M. Sc (organic chemistry)', 'dhanbad', '2 year', '2021-12-25 08:25:53'),
(5, 'Anita Singh', '193178ae82da4e371f654b11fdb6f5ef1886452244.jpg', 'Math ', 'M.tech ', '8 Year', '2021-12-25 08:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `date1` varchar(200) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `date1`, `details`) VALUES
(1, 'qwiuiisd', 'date1', 'details'),
(2, 'ajay', 'date1', 'details');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `date1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `imgs`, `date1`) VALUES
(27, '', 'd668e21dd1f2293b81cdde2a7cfce9851061310047.jpg', ''),
(28, '', 'b1a431cb49035f51072e859b01f47add1109422385.jpg', ''),
(30, '', '12e06c63dc11bc78fd06e37b7c27fb3b651283193.jpg', ''),
(32, '', 'accb01d2d7cdcdf3feadb04a4fc33d8c1953105603.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `missionandvision`
--

CREATE TABLE `missionandvision` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `date1` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missionandvision`
--

INSERT INTO `missionandvision` (`id`, `title`, `imgs`, `description`, `date1`) VALUES
(1, 'Mission And Vision', '3d4608b1c638a6a91ad677ed1e33121a334231810.png', '<p>Growing consciousness, searching for self-identity, amused by new topics and lost in fantasies, a 13-16 years old teen mindstays equipped with all such activities. This is the phase when he/ she is somewhere in between 8 th to 10th class. This is also the time when parents start thinking what their child should do in future. As the competition and consciousness regarding career building is growing aggressively, most parents proactively look for feasible career options that their child can pursue conveniently. What lacks during all this is the core attention to child nurturing and helping him/her discover the true potential. Until the student realizes and connects to a particular goal with his heart and mind in it, things that he can accomplish remains undiscovered. </p>', '2021-12-27 07:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `date1` varchar(200) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `imgs`, `date1`, `description`) VALUES
(4, 'Exam notification', 'c3d5f5282605279494b4af6d8285ba0c986672937.png', '15 Dec, 2021', '<p>this is for test purpose only.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `scholorship`
--

CREATE TABLE `scholorship` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fee` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imgs` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ldescription` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sdescription` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scholorship`
--

INSERT INTO `scholorship` (`id`, `title`, `fee`, `imgs`, `video_url`, `date1`, `ldescription`, `sdescription`, `created_at`) VALUES
(3, 'India\'s Biggest SCHOLARSHIP PROGRAM', '500', '3c22a626dbc60b95464ca7f56d5ccdcf1768220520.png', '', '2022-01-06', '<p><strong>Information</strong></p>\r\n\r\n<ol>\r\n	<li>Only registered users can participate in the scholarship examination.</li>\r\n	<li>The Total Course Fee is inclusive of Tuition Fee, GST, and Caution Money (if applicable).</li>\r\n	<li>A student can avail of only one scholarship during his/her entire academic session (in one course) of&nbsp; Classes. In case a student is eligible for more than one scholarship under different criteria, he/she can avail of the scholarship amount whichever is higher, after submission of all relevant documents.</li>\r\n	<li>Once if the student is awarded a scholarship if any (at the time of Admission / Fee deposition), it cannot be changed in the future in any circumstances whatsoever &amp; no request in this regard will be entertained in the future.</li>\r\n	<li>The scholarship will be awarded to only those students who have selected/qualified in the class.</li>\r\n	<li>All the scholarships are subjected to confirmation of admission only in Classes and it will be adjusted in your respective course fee.</li>\r\n	<li>There is no scholarship and rebate for Online / Live Classroom Courses / IRP Courses / Workshops (Short Term Program / Crash Course).</li>\r\n	<li>Classe reserves the right to modify/cancel/add any scholarship at any time without any prior notice. Award of scholarship &amp; rebate in course will be at the sole discretion of Classes.</li>\r\n</ol>\r\n\r\n<h3><strong>Test Details</strong></h3>\r\n\r\n<ol>\r\n	<li>Eligibility &ndash; Class 10th, 11th Studying &amp; 12th Passouts students.</li>\r\n	<li>Mode of Exam &ndash; Online.</li>\r\n	<li>Online Exam Date &ndash; 05TH to 15TH December.</li>\r\n	<li>Last Date of Apply &ndash; 02 days before the date of exam.</li>\r\n	<li>Result &ndash; 15 days after exam.</li>\r\n	<li>Exam Fee &ndash; 500/-.</li>\r\n</ol>\r\n', '<p><strong>Benefits Of&nbsp; Scholarship Test -</strong></p>\r\n\r\n<ol>\r\n	<li>All the participants get free Mock tests &amp; Assessment Series from our top mentors.</li>\r\n	<li>Every student who appear &ldquo;test&rdquo; got Cash rewards (Min. 10000/-).</li>\r\n	<li>Top 100 students get 100% Scholarship benefits in Training, Lodging &amp; Fooding.</li>\r\n	<li>The next top 100 get 75% Scholarship reward in Training, Lodging &amp; Fooding.</li>\r\n</ol>\r\n', '2022-01-06 10:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `imgs`, `details`) VALUES
(3, 'suraj kumar', '1ef49d59fc87acc77835067b5b493073309797058.png', '<p>Classes is an institute dedicated to providing excellent instruction to young and inquisitive minds. This institute is a sincere effort to improve aspiring students\' preparation by providing them with an indispensable competitive edge in various entrance examinations such as JEE(MAIN & ADVANCED), AIIMS/NEET, FOUNDATION Olympiads, NTSE, KVPY, and others.</p>'),
(4, 'arun dash', '17a1ee9e56f5626c6bfa8d6f6876b375941941327.png', '<p>Classes is an institute dedicated to providing excellent instruction to young and inquisitive minds. This institute is a sincere effort to improve aspiring students\' preparation by providing them with an indispensable competitive edge in various entrance examinations such as JEE(MAIN & ADVANCED), AIIMS/NEET, FOUNDATION Olympiads, NTSE, KVPY, and others.</p>'),
(5, 'chandan modi', 'b905d370dd40b589431c7615dce136d31761448235.png', '<p>Classes is an institute dedicated to providing excellent instruction to young and inquisitive minds. This institute is a sincere effort to improve aspiring students\' preparation by providing them with an indispensable competitive edge in various entrance examinations such as JEE(MAIN & ADVANCED), AIIMS/NEET, FOUNDATION Olympiads, NTSE, KVPY, and others.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cource_categories`
--
ALTER TABLE `cource_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_buy`
--
ALTER TABLE `course_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_message`
--
ALTER TABLE `director_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missionandvision`
--
ALTER TABLE `missionandvision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholorship`
--
ALTER TABLE `scholorship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cource_categories`
--
ALTER TABLE `cource_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_buy`
--
ALTER TABLE `course_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `director_message`
--
ALTER TABLE `director_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `missionandvision`
--
ALTER TABLE `missionandvision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scholorship`
--
ALTER TABLE `scholorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
