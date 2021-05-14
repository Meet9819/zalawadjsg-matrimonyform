-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 06:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zalawadjsg`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `email`, `password`, `contact`) VALUES
(20, 'zalawad', 'zalawad@gmail.com', 'zalawad', '9819461979');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`) VALUES
(1, 'Meet', 'meetshah9819@gmail.com'),
(2, 'Meet', 'meetshah9819@gmail.com'),
(3, 'm', 'meetshah9819@gmail.com'),
(4, 'm', 'meetshah9819@gmail.com'),
(5, 'm', 'meetshah9819@gmail.com'),
(6, 'm', 'meetshah9819@gmail.com'),
(7, 'm', 'meetshah9819@gmail.com'),
(8, 'm', 'meetshah9819@gmail.com'),
(9, 'pratik', 'pratik819@gmail.com'),
(10, 'pratik', 'pratik819@gmail.com'),
(11, 'm', 'meetshah9819@gmail.com'),
(12, 'pratik', 'pratik819@gmail.com'),
(13, 'pratik', 'pratik819@gmail.com'),
(14, 'm', 'meetshah9819@gmail.com'),
(15, 'pratik', 'pratik819@gmail.com'),
(16, 'm', 'meetshah9819@gmail.com'),
(17, 'Meet', 'mitu1983@yahoo.com'),
(18, 'Meet', 'mitu1983@yahoo.com'),
(19, 'Meet', 'meetshah9819@gmail.com'),
(20, 'yatin', 'yatinshah9820@yahoo.com'),
(21, 'yatin', 'yatinshah9820@yahoo.com'),
(22, 'Pratik', 'pratik@design4web.in'),
(23, 'pratik', 'pratik819@yahoo.co.in'),
(24, 'pratik', 'info@design4web.in'),
(25, 'pratik', 'info@design4web.in'),
(26, 'Dhirendra', 'pratik819@yahoo.co.in'),
(27, 'Dhirendra', 'pratik819@yahoo.co.in'),
(28, 'Ritesh ', 'snehal268.ss@gmail.com'),
(29, 'Ritesh ', 'snehal268.ss@gmail.com'),
(30, 'Meet', 'meetshah9819@gmail.com'),
(31, 'Divyam', 'divyam7691@hotmail.com'),
(32, 'Komal ', 'parimalshah1962@yahoo.in'),
(33, 'Divyam', 'divyamshah7691@gmail.com'),
(34, 'Kushan ', 'jkshahbvn@gmail.com'),
(35, 'Pratik', 'pratikdoshi0072008@gmail.com'),
(36, 'Meet', 'meetshah9819@gmail.com'),
(37, 'Meet', 'meetshah9819@gmail.com'),
(38, 'Meet', 'meetshah9819@gmail.com'),
(39, 'Meet', 'meetshah9819@gmail.com'),
(40, 'Vidhi', 'vidhi.shah02091991@gmail.com'),
(41, 'Komal', 'parimalshah1962@yahoo.in'),
(42, 'Divyam', 'divyamshah7691@gmail.com'),
(43, 'Kushan', 'jkshahbvn@gmail.com'),
(44, 'Vidhi', 'vidhi.shah02091991@gmail.com'),
(45, 'Kushan', 'jkshahbvn@gmail.com'),
(46, 'Devang', 'devangshah2502@gmail.com'),
(47, 'Devang', 'devangshah2502@gmail.com'),
(48, 'pratik', 'pratik819@gmail.com'),
(49, 'Meet', 'meetshah9819@gmail.com'),
(50, 'pratik', 'pratik819@yahoo.co.in'),
(51, 'M', 'meetshah9819@gmail.com'),
(52, 'Hiteksha', 'bagadiahiteksha108@gmail.com'),
(53, 'Pranav', 'sanghavi.pranav524@gmail.com'),
(54, 'Jiten', 'sarvaiyajitenj2@gmail.com'),
(55, '', ''),
(56, 'Ritesh', 'snehal268.ss@gmail.com'),
(57, 'Pratik', 'pratikdoshi0072008@gmail.com'),
(58, 'Devang', 'devangshah2502@gmail.com'),
(59, 'Hiteksha', 'bagadiahiteksha108@gmail.com'),
(60, 'Pranav', 'sanghavi.pranav524@gmail.com'),
(61, 'Viral', 'virumkamdar@gmail.com'),
(62, 'Pranav', 'sanghavi.pranav524@gmail.com'),
(63, 'Jaini', 'dineshgandhi09@yahoo.in'),
(64, 'Devang', 'devangshah2502@gmail.com'),
(65, 'Jiten', 'sarvaiyajitenj2@gmail.com'),
(66, 'Ankit ', 'ankit@vectorprojectsindia.com'),
(67, 'Ankit ', 'ankit@vectorprojectsindia.com'),
(68, 'VIRAL', 'parag.sjpl@gmail.com'),
(69, 'Bhumi', 'vaghani200@gmail.com'),
(70, 'RAJI', 'hcturahkia@gmail.com'),
(71, 'Meet', 'mshah3841@gmail.com'),
(72, 'Akash', 'akashshah762@gmail.com'),
(73, 'hi', 'meetshah9819@gmail.com'),
(74, 'Hardik', 'prakash.shah54@yahoo.co.in'),
(75, 'Pratik', 'pratik.ajmera@rediffmail.com'),
(76, 'Hardik', 'prakash.shah54@yahoo.co.in'),
(77, 'Pratik', 'pratik819@yahoo.co.in'),
(78, 'Hardik', 'prakash.shah54@yahoo.co.in'),
(79, 'Hardik', 'prakash.shah54@yahoo.co.in'),
(80, 'Chahan', 'cbshah83@gmail.com'),
(81, 'Jignesh', 'jigushah_143@yahoo.co.in'),
(82, 'Viral', 'virumkamdar@gmail.com'),
(83, 'Viral', 'virumkamdar@gmail.com'),
(84, 'Bhumi', 'vaghani200@gmail.com'),
(85, 'saumil', 'hcturahkia@gmail.com'),
(86, 'Akash', 'akashshah762@gmail.com'),
(87, 'Bhumi', 'vaghani200@gmail.com'),
(88, 'NISHT', 'shahnishit91@gmail.com'),
(89, 'NISHT', 'shahnishit91@gmail.com'),
(90, 'Ankit', 'ankit@vectorprojectsindia.com'),
(91, 'Ankit ', 'ankit@vectorprojectsindia.com'),
(92, 'Ankit ', 'ankit@vectorprojectsindia.com'),
(93, 'Ankit ', 'ankit@vectorprojectsindia.com'),
(94, 'Ankit ', 'ankit@vectorprojectsindia.com'),
(95, 'Sameer', 'shahsameer.g@gmail.com'),
(96, 'Hardik', 'hardikshah90@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `paymentid` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `phone`, `product_price`, `product_name`, `paymentid`) VALUES
(30, 'Meet', 'mitu1983@yahoo.com', '8451013063', '1000', 'Matrimonial Registration', ''),
(29, 'Meet', 'mitu1983@yahoo.com', '8451013063', '1000', 'Matrimonial Registration', ''),
(28, 'meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(27, 'pratik', 'pratik819@gmail.com', '9967996645', '1000', 'Matrimonial Registration', ''),
(26, 'Meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(25, 'Meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', 'MOJO8a07005A85097657'),
(24, 'Meet', 'info@design4web.in', '9819461979', '1000', 'Matrimonial Registration', 'MOJO8a07005A85097652'),
(23, 'Meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', 'MOJO8a07005A85097657'),
(22, 'pratik', 'pratik819@design4web.in', '09029211220', '1000', 'Matrimonial Registration', ''),
(21, 'Meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', 'MOJO8a07005A85097657'),
(20, 'JIgar', 'kkastoori@hotmail.com', '9324631756', '1000', 'Matrimonial Registration', 'MOJO8a05005A79823590'),
(19, 'nimisha', 'nimishapratikshah@gmail.com', '8657236624', '1000', 'Matrimonial Registration', 'MOJO8a05005A79823425'),
(18, 'Meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', 'MOJO8a07005A85097657'),
(17, 'Meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', 'MOJO8a07005A85097657'),
(31, 'pratik', 'info@design4web.in', '9967996645', '1000', 'Matrimonial Registration', ''),
(32, 'Pratik', 'pratik819@yahoo.co.in', '8657236624', '1000', 'Matrimonial Registration', ''),
(33, 'hi', 'meetshah9819@gmail.comm', '9819461979', '1000', 'Matrimonial Registration', ''),
(34, 'hi', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(35, 'meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(36, 'meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(37, 'meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(38, 'meet', 'meetshah9819@gmail.com', '9819461979', '1000', 'Matrimonial Registration', ''),
(39, 'KUSHAN JAYESHKUMAR SHAH', 'jkshahbvn@gmail.com', '9898784767', '1000', 'Matrimonial Registration', ''),
(40, 'Divyam', 'divyamshah7691@gmail.com', '9920728344', '1000', 'Matrimonial Registration', ''),
(41, 'Divyam', 'divyamshah7691@gmail.com', '9920728344', '1000', 'Matrimonial Registration', ''),
(42, 'Komal', 'parimalshah136@gmail.com', '9833128344', '1000', 'Matrimonial Registration', ''),
(43, 'Pranav Sanghavi', 'sanghavi.pranav524@gmail.com', '9167214412', '1000', 'Matrimonial Registration', 'MOJO8a22005A40181720'),
(44, 'Hiteksha Bagadia', 'bagadiahiteksh108@gmail.com', '9619387105', '1000', 'Matrimonial Registration', ''),
(45, 'Hiteksha Bagadia ', 'bagadiahiteksha108@gmail.com', '9619387105', '1000', 'Matrimonial Registration', ''),
(46, 'Devang R Shah', 'devangshah2502@gmail.com', '9664777651', '1000', 'Matrimonial Registration', 'MOJO8a22005N40190695'),
(47, 'Bhumi Vadhani', 'vaghani200@gmail.com', '9819404142', '1000', 'Matrimonial Registration', 'MOJO8a29005N83062684'),
(48, 'Ankit hasmukh shah', 'ankit@vectorprojectsindia.com', '9167235140', '1000', 'Matrimonial Registration', 'MOJO8a30005A26248784');

-- --------------------------------------------------------

--
-- Table structure for table `tp`
--

CREATE TABLE `tp` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tp`
--

INSERT INTO `tp` (`userID`, `userName`, `userEmail`, `userStatus`) VALUES
(1, 'meet', 'meetshah9819@gmail.com', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `timeplace` varchar(200) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `education` varchar(1000) NOT NULL,
  `profession` varchar(1000) NOT NULL,
  `officeaddress` varchar(2000) NOT NULL,
  `resiaddress` varchar(2000) NOT NULL,
  `staying` varchar(200) NOT NULL,
  `annualincome` varchar(100) NOT NULL,
  `spectacles` varchar(50) NOT NULL,
  `caste` varchar(200) NOT NULL,
  `horoscope` varchar(500) NOT NULL,
  `manglik` varchar(500) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `hobbies` varchar(5000) NOT NULL,
  `brother` varchar(100) NOT NULL,
  `sister` varchar(100) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `fathermob` varchar(10) NOT NULL,
  `fatheroccu` varchar(500) NOT NULL,
  `mothername` varchar(400) NOT NULL,
  `nativeplace` varchar(300) NOT NULL,
  `preference` varchar(2000) NOT NULL,
  `mosal` varchar(2000) NOT NULL,
  `mosalnative` varchar(200) NOT NULL,
  `reference` varchar(400) NOT NULL,
  `complexion` varchar(2000) NOT NULL,
  `activate` int(11) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `trn_date` datetime NOT NULL,
  `marital` varchar(2000) NOT NULL,
  `uniqueid` varchar(11) DEFAULT NULL,
  `disability` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `img`, `name`, `middlename`, `lastname`, `gender`, `dob`, `timeplace`, `height`, `weight`, `bloodgroup`, `education`, `profession`, `officeaddress`, `resiaddress`, `staying`, `annualincome`, `spectacles`, `caste`, `horoscope`, `manglik`, `telephone`, `mobile`, `email`, `hobbies`, `brother`, `sister`, `fathername`, `fathermob`, `fatheroccu`, `mothername`, `nativeplace`, `preference`, `mosal`, `mosalnative`, `reference`, `complexion`, `activate`, `status`, `trn_date`, `marital`, `uniqueid`, `disability`) VALUES
(1, 'IMG-20180509-WA0038.jpg', 'Ritesh ', 'Jitendra ', 'Shah', 'ZM', '23/12/1989', 'Mumbai - 02.52 PM', '5.6 inch', '55 kgs', 'A+ve', 'B. com', 'Job', 'Shri Raj Jewels, IT-01, SDF VII, Andheri East, Mumbai - 400096', 'Rustomzee Evershine Global City, G-3-404, 4th Floor, Near Siddhivinayak Mandir, Virar West, Mumbai', 'Nuclear', '4', 'No', 'Deravasi', 'Not Interested', 'No', '9890078087', '9819461979', 'meetshah9819@gmail.com', 'Reading,  Playing Cricket,  Movies ', 'no ', ' 1', 'Late Jitendra Vrajlal Shah ', '9545852626', '-', 'Nayana', 'Rajkot', 'Educated', 'Bhavesh Arvindbhai Shah, 9819348096.', 'Mumbai Kandivali ', 'Snehal Aditya Shah,  Sangli,  9545852626', 'Fair ', 1, NULL, '2018-10-11 09:12:49', 'Freshers', '', 'No'),
(5, '381943.jpeg', 'Komal ', 'Parimal', 'Shah', 'ZF', '22/03/1994', 'Surendranagar/01:02 AM', '5 feet 4 Inch', '51 Kgs', 'B+', 'B.Com, M.Com', 'Job', 'Borivali', '302 Bhakti Apartment, Road no 8, Daulat Nagar, Borivali East, Mumbai -400066, Maharashtra.', 'Nuclear', '1 Lakh', 'no', 'Zalawadi Visashrimali Mutipujak Jain Deravasi', 'Not Interested', 'No', '02228934297', '9833228344', 'parimalshah1962@yahoo.in', 'Reading, Traveling , Dancing.', '1', '0', 'Parimal Mahasukhlal Shah', '9833128344', 'Diamond Broker', 'Bina Parimal Shah', 'Botad', 'Best', 'Ajaybhai Kishorchandra Fulchand Shah ( Jayantilal & company )', 'Surendranagar', 'Arvind Kantilal Shah / 4th floor , Vasukamal Tower, Devidas Lane,Borivali west , Mumbai-400091/9324631756', 'Wheatish', 1, 'MOJO8a20005D33165130', '2018-10-13 18:35:06', 'Freshers', '2', 'no'),
(6, 'IMG-20180812-WA0002(1).jpg', 'Divyam', 'Parimal', 'Shah', 'ZM', '07/06/1991', 'Borivali -  2.23AM', '5 feet 8 Inch', '79', 'B-', 'B.Com ( Financial Market), MBA Financia Markets ', 'JOB', 'Bldg 14 , K Raheja Mindspace, Thane Belapur Road , Airoli East Navi mumbai -400708, Maharashtra', '302 Bhakti Apartment, Road no 8, Daulat Nagar, Borivali East, Mumbai -400066, Maharashtra.', 'Nuclear', '4', 'no', 'Zalawadi Visashrimali Mutipujak Jain Deravasi', 'Not Interested', 'No', '02228934297', '9833228344', 'divyamshah7691@gmail.com', 'Reading, Traveling & Cricket', '-', '1', 'Parimal Mahasukhlal Shah', '9833128344', 'Diamond Broker', 'Bina Parimal Shah', 'Botad', 'Best', 'Ajaybhai Kishorchandra Fulchand Shah ( Jayantilal & company )', 'Surendranagar', 'Arvind Kantilal Shah / 4th floor , Vasukamal Tower, Devidas Lane,Borivali west , Mumbai-400091/9324631756', 'Fair', 1, ' MOJO8a20005D33164878', '2018-10-13 18:40:23', 'Freshers', '1', ''),
(7, 'Kushan.jpg', 'Kushan ', 'Jayeshkumar', 'Shah', 'ZM', '1990-08-17', '04.37 AM Surendranagar (Guj)', '6.00 Feet', '74 Kg', 'B+', 'B. E. (EC)', 'Software Engineer', 'Shopsense Retail Tech Pvt Ltd., 5th floor corporate centre, marol pipe line road, jb nagar, andheri east. mumbai 400058', 'Flat no 104, B wing Samarpan Chs Ltd, Off Western Exp Highway, Magathane, Borivali (E) Mumbai 400066', 'Nuclear', '36 lakhs', 'No', 'Derawasi', 'Not Interested', 'No', '9426314767', '8452029590', 'jkshahbvn@gmail.com', 'Reading, Music Listening, ', 'No', 'No', 'Jayeshkumar K Shah', '9898784767', 'Investor in MCX', 'Kiranben Jayeshkumar Shah', 'Limbdi (Dist Surendranagar) Gujarat', 'Looking for an open minded homely traditional Girl. The girl should be an excellent homemaker & if possible can have some professional career. The girl should have strong inclination for values & morals.', 'late mahendrabhai Vora. surendranagar.', 'Surendrangar', 'Bharatbhai M Parikh, Mob No 9324064640, Resi Address-193/5355 Sugam-A,Gurudata Mandir road, Pantnagar, Ghatkopar (E) Mumbai 400075', 'Fair', 1, 'MOJO8a19005N94736322', '2018-10-14 05:14:49', 'Engagement Broken', '3', 'No'),
(8, 'IMG_20170927_115055.jpg', 'Pratik', 'ashvinbhai', 'doshi', 'ZM', '1990-01-16', '4.05 pm Morbi', '5.8', '74', 'O+', 'B.E.IT', 'Job', 'Vadodara', '604,6th floor,Doshi tower,opp.old bus stand,savsar plot,morbi.', 'Nuclear', '400000', 'No', 'Deravasi', 'Not Interested', 'No', '9408187236', '9974096006', 'pratikdoshi0072008@gmail.com', 'Reading ', 'No', 'No', 'Ashvinbhai N doshi', '9426842736', 'Retired', 'Jayshreeben A Doshi', 'Morbi', '-', 'Chabildas fulchand ', 'Surendranagar', 'Manishbhai S Shah, 9869414392  Mumbai', 'Average', 1, NULL, '2018-10-14 14:05:24', 'Freshers', '', 'No'),
(12, '2018-02-13 21.28.11.jpg', 'Vidhi', 'Paresh', 'Shah', 'ZF', '1991-09-02', '8.10am, Mira Road', '5Ft 2inch', '58kg', 'A-', 'Chartered Accountant', 'Practicing Chartered Accountant', 'Mira Road', 'Sector 6, C-19, 101, Shanti Nagar,  Mira Road (E)', 'Nuclear Family', '6 lakhs', 'No', 'Deravasi', 'Interested', 'Yes', '9930028240', '9022565557', 'vidhi.shah02091991@gmail.com', 'Watching Movies, Creative Management', '1', 'No', 'Paresh Navinchandra Shah', '9820486566', 'Practicing CA', 'Jagruti Paresh Shah', 'Dhrangadhra', 'Deravasi Jain', 'Jaysukhlal Hargovindas Shah', 'Bhadlawala', 'Prakash Rasiklal Shah, Vile Parle [Mob: 9820667890]', 'Wheatish', 1, NULL, '2018-10-18 12:12:58', 'Freshers', NULL, 'NA'),
(13, 'Devang.jpg', 'Devang', 'Rajendra', 'Shah', 'ZM', '25/02/1991', '1.50 AM Dhrangadhra', '5.6', '70', 'AB+', 'Chartered Accountant', 'Executive at B S R & Co. LLP  (KPMG)', 'IT Building No.2, Hall 4, Nesco IT Park, Nesco Complex, Western Express Highway , Goregaon (E), Mumbai - 400063', 'B/809, Venkatesh Kirti, Balaji Complex , 150 Feet Road, near Flyover Bridge, Bhayandar - West Thane -401101', 'Joint Family', '798000', 'Yes', 'Deravasi', 'Interested', 'Yes', '022 28169009', '9664777651', 'devangshah2502@gmail.com', 'Watching Movies, Listening Songs, Hang out with friends', '1', 'No', 'Rajendra Rasiklal Shah', '+91 965368', 'Retierd from New India Assuarance In charge of Halvad Branch', 'Pannaben ', 'Dhrangadhra', 'Simple and Happy to Live in Joint Family', ' Late shree Babulal Mohanlan Shah / Harshad Babulal Shah', 'Surendranagar', 'Prakash Rasiklal Shah - 203 B Vardhman Apartment, Above ICICI Prudential, Near Chintamani Jain Derasar, Vile Parle East Mumbai - 400507 Contact No. +919820667890', 'Wheaties', 1, 'MOJO8a22005N40190695', '2018-10-20 11:42:20', 'Freshers', '4', 'NO'),
(19, 'DC16A474-1FDA-4AB4-AF19-7310095D48C3.jpeg', 'Hiteksha', 'Vipul', 'Bagadia', 'ZF', '1995-04-11', '6:00 am Mumbai ', '5â€™inch', '57', 'B+', 'Bcom', 'Freelancer', 'B-1003/4 Udaygiri apt, Ashok Nagar, Kandivali East, Mumbai 101', 'B-1003/4 Udaygiri apt, Ashok Nagar, Kandivali East, Mumbai 101', 'Nuclear Family', '0', 'Yes', 'Deravasi', 'Not Interested', 'No', '28878256', '9619387105', 'bagadiahiteksha108@gmail.com', 'Cooking, reading, travelling ', '1', 'No', 'Vipul Pranlal Bagadia', '9820061628', 'Diamond Business (Excel Overseas)', 'Rajul Vipul Bagadia', 'Surendranagar', 'Pure jain', 'Navinchandra Amratlal Shah ', 'Limdi', 'Chetan Hasmukhlal Shah', 'Wheatesh ', 1, 'MOJO8a23005A65152102', '2018-10-20 16:57:12', 'Freshers', '5', 'None'),
(20, 'DSC_9276.JPG', 'Pranav', 'Shashikant', 'Sanghavi', 'ZM', '1990-02-14', '12.25PM & Mumbai', '6.2', '60', 'B+', 'M.com', 'Job', 'B-24, Sai Darshan Building, Sangeeta wadi, L.N. Road, Dombivli (East), Thane - 421201', 'B-24, Sai Darshan Building, Sangeeta wadi, L.N. Road, Dombivli (East), Thane - 421201', 'Nuclear Family', '4.5Lacs', 'No', 'Deravasi', 'Interested', 'Yes', '9321060048', '9167214412', 'sanghavi.pranav524@gmail.com', 'Travelling, Movies, Playing Games.', 'No', '2', 'Shashikant Mulchand Sanghavi', '9221383864', 'Retired ', 'Bharti Shashikant Sanghavi', 'Alau', 'Jain and Single', 'Dhirajlal Fichadia', 'Mangrol', 'Nikhil Shah - 9833986812', 'Fair', 1, 'MOJO8a22005A40181720', '2018-10-21 06:35:32', 'Freshers', '6', 'No'),
(21, 'IMG_20181019_190641.jpg', 'Jiten', 'Jayesh', 'Sarvaiya', 'ZM', '1989-12-02', '3.06 ,Borivali', '5\'6', '62', 'A+', 'Diploma in civil engineer', 'Business and Job', 'Marol', '342/101,jawahar Nagar, Goregaon west', 'Nuclear Family', '5 lakhs', 'No', 'Sthankwasi', 'Not Interested', 'Yes', '7208376668', '8655680856', 'sarvaiyajitenj2@gmail.com', 'Cricket,travelling', 'No', '1', 'Jayesh Jayantilal Sarvaiya', '9869622140', 'Retired', 'Alka Sarvaiya', 'Talaja, Bhavnagar', 'Educated ,career oriented with equal household resposibilities', 'Bipin Mehta', 'Palitana', 'Nayna Padia (Massi)- 9869939974, Bipin Mehta(Mama)- 9819009989', 'Fair,medium fair', 1, NULL, '2018-10-21 16:52:30', 'Freshers', '', 'No'),
(23, 'IMG_20180914_185021_078.jpg', 'Viral', 'Mukundrai ', 'Kamdar', 'ZM', '1984-11-11', '10.29 pm virar', '5.4', '58', 'Not Known', 'B. Com passed', 'Consultant of tax and housing finance', 'Shop no 7 Dr. Mehta apt near vartak hall station road virar west 401303', 'Flat no 8 Anuradha appt near m.b Rikshaw stand, Agashi road m.b.estate virar west', 'Joint Family', '600000', 'No', 'Deravasi', 'Not Interested', 'No', '8007865999', '9890184051', 'virumkamdar@gmail.com', 'Cricket. Chess surfing', 'No', '3', 'Mukundrai Chotelal kamdar', '8007865999', 'Retired', 'ILa mukundrai kamdar', 'Morbi', 'Normal fair', 'Jitendra ramniklal vora 9821021845', 'Morbi', 'Kalpesh kamdar 9892213219', 'Normal fair', 1, NULL, '2018-10-22 14:34:41', 'Freshers', '', 'No'),
(25, 'IMG_20181023_224159.JPG', 'Ankit ', 'Hasmukh ', 'Shah', 'ZM', '1983-06-25', '4:33am & padra ', '5\' 9', '76', 'B+', 'B. COM, PGDBA', 'SERVICE ', 'Vector House, LBS Marg, Bhandup (west), 400078', 'A-103,niwara chs, plot no 50,behind Prateek corner, Airoli, navi Mumbai 400708 ', 'Nuclear Family', '4.5 lakhs', 'Yes', 'Digambar', 'Not Interested', 'No', '9833255030', '9167235140', 'ankit@vectorprojectsindia.com', 'Traveling ', 'No', '1', 'Hasmukh himmatlal shah', '9833325503', 'C . A', 'Mayurika hasmukh shah', 'VADODARA ', 'Should be adjust in family ', 'Shrisbhai chandulal shah ', 'Borsad, Gujarat ', 'Nitin Jain 16/3, siddhi apartment , s.v road dahisar east. 8779571826, 9223839536', 'Fair', 1, 'MOJO8a30005A26248784', '2018-10-23 17:38:50', 'Freshers', '', 'No '),
(26, 'V11.jpeg', 'VIRAL', 'DHANVANT', 'DOSHI', 'ZM', '1983-01-05', '06.27AM. MUMBAI', '5.3', '72', 'O+', 'HSC', 'Self Employeed', 'C-2004, AADINATH AVENUE, NARSINGH LANE, NEAR N.L. COLLEGE, OFF S.V. ROAD, MALAD-WEST. MUMBAI-400064.', 'C-2004, AADINATH AVENUE, NARSINGH LANE, NEAR N.L. COLLEGE, OFF S.V. ROAD, MALAD-WEST. MUMBAI-400064.', 'Nuclear Family', '400000', 'No', 'Sthankwasi', 'Not Interested', 'No', '+918828656262', '8097430819', 'parag.sjpl@gmail.com', 'MOVIE', 'No', '1', 'LATE. DHANVANTRAI RATILAL DOSHI', '+9197694 4', 'BUSINESSMAN', 'MINAXI DHANVANTRAI DOSHI', 'BARWALA GHELASHA', 'MATURED', 'KAMLESH MALICHAND JOVALIA', 'JOBALA', 'VASANT RATILAL DOSHI-UNCLE', 'FAIR', 0, NULL, '2018-10-25 07:44:17', 'Freshers', NULL, 'NO'),
(27, 'IMG-20180813-WA0000.jpg', 'Bhumi', 'Girish', 'Vadhani', 'ZF', '1992-10-30', '6.28 PM Mumbai ', '5.4\" Feet.', '52', 'A+', 'BMS, CFA (CFA Institute, (USA)', 'Job as a Senior Investment Analyst', 'Hiranandani Garden, Powai, Andheri (East)', '604, Falcon Crest, New Link Road, Near Aura Hotel, Borivali (West), Mumai-400091.', 'Nuclear Family', '8.25', 'Yes', 'Deravasi', 'Not Interested', 'No', '9819404142', '9819404142', 'vaghani200@gmail.com', 'Reading, Travelling.', 'No', 'No', 'GIRISH SHIVLAL VADHANI', '9819404142', 'Business', 'SUREKHA GIRISH VADHANI', 'Sanodar, Dist-Bhavnagar', 'Educated, Smart & Polite.', 'KIRIT RAVILAL SHAH', 'Ramaniya- Kutch', 'Jignesh Kapasi. Mob- 9029397987', 'Fair', 1, 'MOJO8a29005N83062684', '2018-10-26 03:10:32', 'Freshers', NULL, 'No'),
(28, 'SAUMIL 4.jpg', 'saumil', 'harish', 'turakhia', 'ZM', '1993-09-01', 'time : 6.01 PM Mumbai', '5.5', '51 Kgs', 'O-', ' M Com & pursuing pgdm distance.', 'working with General Mills India Private Limited', 'General Mills India Pvt Ltd. Powai', ' RAJI CHS LTD flat no 305, r.b metha road, garden avenue lane, ghatkopar east MUMBAI 400077', 'Nuclear Family', '400000.00', 'No', 'Sthankwasi', 'Interested', 'Yes', '08850925193', '9869017408', 'hcturahkia@gmail.com', 'Music and Movies', 'No', 'No', 'Harish Turakhia', '9869017408', 'Self Employed ', 'TRUPTI HARISH TURAKHIA', 'chotila', 'adjustments,Family values and like thoughts', 'Ronak K Mehta', 'Sihor', 'Dr Jiten Ajmera, 403/404, Kailash Niwas chs ltd.,r b mehta Marg, Ghatkopar East,Mumbai : 77, contact no.:9821055831. Shri Balwant Mehta, 502, Raji chs ltd.,r b mehta marg, Ghatkopar east, Mumbai 77, contact no.9867801459.  Dr Milan B Sheth, building no 92, Tilak Bhavna CHS ltd.,Tilak Nagar, Chembur, Mumbai 89,contact no.:9930989109.', 'Fair', 1, NULL, '2018-10-26 15:12:10', 'Freshers', '', 'No'),
(29, '257274.jpeg', 'Akash', 'pradipbhai', 'shah', 'ZM', '1991-08-04', '12.25 am kheda', '5.4', '72', 'O+', 'F.y .bcom', 'Job', 'kiran gems surat', 'B/402, lizend harmony, swatikvila ni same, l. P. Swani, surat', 'Joint Family', '600000', 'Yes', 'Sthankwasi', 'Interested', 'No', '+919429424960', '8238901328', 'akashshah762@gmail.com', 'Riding movie traveling', 'No', '1', 'Pradipbhai balchandbhai shah', '7698058892', 'Navkar auto glass', 'Sunitaben pradipbhai shah', 'Sejakpur', 'Simple & understading', 'Rangildas iswardas bhavsar', 'Kheda', 'Manojbhai shah 7021335476', 'Silm', 1, NULL, '2018-10-27 13:57:59', 'Freshers', '', 'No'),
(31, 'FB_IMG_1540730773038.jpg', 'Pratik', 'Rajesh ', 'Ajmera ', 'ZM', '1986-10-03', '11.32 Mumbai ', '5.7', '65', 'O+', 'Bms ', 'Salaried ', 'Tcs Powai Mumbai ', 'B 204 Geeta Gyan CHS Mira Bhayander road Mira road east Thane 401105', 'Joint Family', '800000', 'Yes', 'Deravasi', 'Not Interested', 'No', '28551504', '9892661690', 'pratik.ajmera@rediffmail.com', 'Reading articles,adventure sports, travelling,gadgets,gaming', '1', 'No', 'Rajesh ajmera ', '9322220660', 'Business ', 'Daksha ajmera ', 'Vinchiya', 'Average ', 'Devesh purohit ', 'Zalod', 'Rohit ajmera b 16 rajdeep carter road no 1 borivali east Mumbai 400066  9821674720', 'Average ', 0, NULL, '2018-10-28 13:03:39', 'Freshers', NULL, 'No'),
(33, 'hardik.jpg', 'Hardik', 'Prakash', 'Shah', 'ZM', '1982-02-20', '5.30pm Wankener', '5.10', '85', 'A+', 'BCOM & PGDM from Welinekar Institute Matunga', 'JOB - TCS', 'TCS, Thane ', '9, Punit Appartment, Kama Lane, Kirol Road, Ghatkoper - West', 'Nuclear Family', '6 lakhs', 'Yes', 'Deravasi', 'Interested', 'No', '02225135497', '8082697165', 'prakash.shah54@yahoo.co.in', 'Listening Music, Watching Movies', 'No', '3', 'Prakash Bhagwanji Shah', '9869007176', 'Investor', 'Late Geeta Shah', 'Morbi', 'Loving Nature, Education does not matter, working or not working', 'Ashokkumar Amichand Doshi (Mama)', 'Dhoraji', 'Swati Jigar Shah - 9869398633', 'Wheatish', 0, NULL, '2018-10-28 14:57:37', 'Freshers', '', 'no'),
(34, 'IMG_20180921_155214.jpg', 'Chahan', 'Bharat Kumar', 'Shah', 'ZM', '1983-01-21', '2.30. Am  Mahesana north gujrat', '5.10', '70', 'O+', 'B.com', 'Job', 'Goregaon east,  mumbai', '308, 3rd floor, Jain Bhuvan Building, Devchand Nagar, Bhaynder west, pin :401101', 'Joint Family', '300000', 'No', 'Deravasi', 'Interested', 'No', '9819264329', '9969014963', 'cbshah83@gmail.com', 'Cricket, movie, travelling, tour, ', 'No', '1', 'Bharat Kumar Vadilal Shah', '9819264329', 'Electrical work', 'Late bhavna ben bharatkumar Shah', 'Pipaldhar vadnagar', 'No choice', 'Late popatlal mulukchand Shah', 'Mandal', 'Purvi Chetan Kumar 9769766806', 'White', 0, NULL, '2018-10-28 17:12:29', 'Freshers', NULL, 'No'),
(35, 'IMG-20181028-WA0026.jpg', 'Jignesh', 'Pravinchandra', 'Shah', 'ZM', '22-03-1982', '4.22 Am davad sabarkantha', '5.6', '70', 'B+', 'F.y. b.com', 'Diomand broker', 'No', 'Flat no :202, A wing, Anupam Apartment, 60 Feet Road, Bhaynder west, pin:401101', 'Joint Family', '400000', 'No', 'Deravasi', 'Interested', 'No', '02228195132', '9892036033', 'jigushah_143@yahoo.co.in', 'Music travelling and cricket', '1', 'No', 'Pravinchadra D Shah', '9558886202', 'Retired', 'Neetaben P Shah', 'Davad', 'Simple and sobber', 'Jayantbhai Popatlal Shah', 'Aaglod', 'Brijesh P shah 9892587705', 'White', 0, NULL, '2018-10-28 17:22:39', 'Freshers', '', 'No'),
(36, 'NISHIT.jpg', 'NISHT', 'KIRIT', 'SHAH', 'ZM', '04.04.1991', '6.01 A.M./AMARAVATI, MAHARASHTRA', '5.11', '75', 'O+', 'M.E IN STRUCTURAL ENGINEERING(CIVIL)', 'FAMILY BUISSNESS', '25/4TH FLOOR, NEW VANDANA SOCIETY, HIRA BAUG, AGRA ROAD, KALYAN-WEST', '25/4TH FLOOR, NEW VANDANA SOCIETY, HIRA BAUG, AGRA ROAD, KALYAN-WEST', 'Joint Family', 'ABOVE 10 LAKHS', 'No', 'Deravasi', 'Interested', 'Yes', '0251-2303438', '9773428699', 'shahnishit91@gmail.com', 'PLAYING CRICKET AND BADMINTON, WATCHING SPORTS, TRAVELLING,DANCING', 'No', '1', 'KIRIT AMICHANDBHAI SHAH', '9226184095', 'RAILWAY CONTRACTOR IN CENTRAL RAILWAY', 'AARTI KIRIT SHAH', 'SAYLA, DIST. SURENDRANAGAR, GUJRAT', 'EDUCATED, WELL CULTURED, DOWN TO EARTH ', 'DHIRUBHAI AMRUTLAL SHAH/ASHOK AMRUTLAL SHAH (9920609692/9930596478)', 'AMRAVTI/MUMBAI', 'ZALAWAD JAIN DARSHAN', 'WHEATIES', 1, NULL, '2018-10-29 16:29:09', 'Freshers', '', 'NO'),
(37, 'Photo Editor-20180923_002102.jpg', 'Sameer', 'Praful', 'Shah', 'ZM', '1988-10-21', '7.00 am , Malad Mumbai', '5.7', '70', 'A-', 'MBA in finance', 'Working with TCS', 'TCS, THANE', 'Pankaj A/1, Kamal Apts, Shankar lane, kandivali west, Mumbai 400067.', 'Nuclear Family', '700000', 'Yes', 'Deravasi', 'Not Interested', 'No', '02228020790', '9773565378', 'shahsameer.g@gmail.com', 'Movies, music', 'No', '1', 'Praful Dayalal Shah', '9821797288', 'Supplier of tailoring material', 'Asha Praful Shah', 'Bhavnagar', 'Understanding, caring.', 'Narrottam das Shah', 'Bhavnagar', 'Tanmay Shah, 7718828419', 'Wheatish', 0, NULL, '2018-10-30 17:04:37', 'Freshers', NULL, 'Non'),
(39, '1.jpg', 'Hardik', 'Hareshkumar', 'Shah', 'ZM', '1990-07-23', 'Mumbai - 14:25', '167', '78', 'A+', 'Masters of Computer Application', 'Software Developer at Nomura', 'Nomura Services India Pvt Ltd, Nomura Building, South Avenue Road, Hiranandani Gardens, Powai, Mumbai - 400076', ' B-1 / 601 & 606, Hari Om Apts. Opp. Shastri Nagar, Near Vijay Sales Shopping Centre, Borivali West, Mumbai - 400092 ', 'Nuclear Family', '10 Lac +', 'Yes', 'Deravasi', 'Interested', 'Low', '9757273509', '9870746910', 'hardikshah90@gmail.com', ' Creative Ideas, IOT ', '1', 'No', 'Hareshkumar D Shah', '9757273509', 'Retire as H.O.D. From Sasmira', 'Pratima H Shah', 'Amreli', 'Jain Food Habit & Religious', 'Somchand Parshotamdas Shah', 'Mandal', 'Nemish bhai , Ketan Bhai', 'Fair', 1, NULL, '2018-10-30 17:40:28', 'Freshers', NULL, 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp`
--
ALTER TABLE `tp`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tp`
--
ALTER TABLE `tp`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
