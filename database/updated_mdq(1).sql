-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 06:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `updated_mdq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `application_web`
--

CREATE TABLE `application_web` (
  `id` int(255) NOT NULL,
  `cilent_id` int(11) NOT NULL,
  `logo_images` varchar(255) NOT NULL,
  `banner_images` varchar(255) NOT NULL,
  `project_overview` varchar(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `project_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_web`
--

INSERT INTO `application_web` (`id`, `cilent_id`, `logo_images`, `banner_images`, `project_overview`, `photos`, `technology`, `project_title`, `project_id`) VALUES
(86, 2, 'Vsafelogo.png', '.png', 'Vsafe is high-tech device is packed with advanced digital features that can keep your precious items safe and secure.\r\n', ',img1.png,img2.png,img3.png,img4.png,img5.png,img6.png,img7.png', '1,2,3,4,6,9,', ' V SAFE’s personal lockers which accessed by Digital Platform', ''),
(87, 3, 'evtronlogo.png', 'evtronbanner.png', 'EVtron is a team of ignited minds to accelerate the greener journeys and are conscious about revolutionising the Indian transportation towards a sustainable environment. We co-create charging eco-systems to leave a cleaner planet for the next generations.', ',evtron1.png,evtron2.png,evtron3.png,evtron4.png,evtron5.png', '1,3,5,6,9,10,11,', 'End to end digital platform for charging car battery\r\n', ''),
(88, 4, 'codinalogo.webp', 'codinabanner.png', '\r\n\r\nCodina manufactures Woven Wire Cloth for processes and machinery applications in all kind of industry.Our commitment to the most modern technology and customer service is always our main motivation to maintain Codina in a privileged position within th', ',codina1.png,codina2.png,codina3.png,codina4.png,codina5.png', '1,3,6,9,10,', 'Codina based on saling Woven Wire Cloth in digital paltform', ''),
(89, 5, 'vkartlogo.png', 'vkartbannner.png', 'Vkart is a one-stop-shop for fresh shopping, fresh savings, and fresh happiness without stepping out your doors. We pioneered the short supply chain so you can experience fresh food at its finest.\r\n', ',vkart1.png,vkart2.png,vkart3.png,vkart4.png', '1,3,6,9,10,', 'World-fresh end to end grocery items in Vkart', ''),
(90, 7, 'bepperslogo.png', 'beppersbanner.png', 'Beppers is a social media app designed exclusively for beauty and personal care, that connects people with beauty businesses and beauty freelancers. ', ',beppers1.png,beppers2.png,beppers3.png,beppers4.png,beppers5.png', '1,3,7,9,10,', 'Beppers is a social media app designed exclusively for beauty businesses and beauty freelancers', ''),
(91, 17, 'shopztrend.jpg', 'shopztrendlogo.png', 'Shopztrend is an e-commerce website that sells a variety of products. Currently, only a few products are selling.Shopztrend is an e-commerce website for Canadians that sells a variety of products. Currently, only a few products are selling. ', ',shopztrend1.png,shopztrend2.png,shopztrend3.png,shopztrend4.png,shopztrend5.png', '4,8,12,', 'A Digital platform Shopztrend sells end to end variety of products', ''),
(92, 6, 'myfinalystlogo.jpg', 'myfinalystbanner.png', '', ',myfinalyst1.png,myfinalyst2.png,myfinalyst3.png,myfinalyst4.png', '4,6,8,', '', ''),
(99, 23, 'audilmslogo.png', 'audibanner.png', 'audi_lms', ',audi1.png,audi2.png,audi3.png,audi4.png,audi5.png,audi6.png,audi7.png', '4,8,13,', 'audi_application', ''),
(100, 24, 'audit.png', 'auditbanner.png', '', ',audit1 - Copy.png,audit2.png,audit3.png,audit4.png', '4,6,8,', 'audit', ''),
(101, 25, 'enqlogo.png', 'fresheuqbanner.png', 'freshbags_enquiry', ',fresheuq1.png,fresheuq2.png,fresheuq3.png,fresheuq4.png,fresheuq5.png', '4,8,13,', 'freshbags_enquiry', ''),
(102, 26, 'orderlogo.png', 'freshordbanner.png', 'freshbags_order', ',freshord1.png,freshord2.png,freshord3.png,freshord4.png,freshord5.png,freshord6.png', '4,8,13,', 'freshbags_order', ''),
(103, 27, 'igreenlogo.png', 'igreenbanner.png', 'igreen', ',igreen1.png,igreen2.png,igreen3.png,igreen4.png,igreen5.png,igreen6.png,igreen7.png', '4,7,8,', 'igreen', ''),
(104, 28, 'lmw.png', 'lmvbanner.png', 'LMW_application', ',lmv1.png,lmv2.png,lmv3.png,lmv4.png,lmv5.png', '4,6,8,', 'LMW', ''),
(105, 29, 'nadilogo.png', 'nadibanner.png', '', ',nadi1.png,nadi2.png,nadi3.png,nadi4.png', '4,8,13,', 'nadi', ''),
(106, 30, 'montyrlogo.png', 'partnerbanner.png', 'montyr', ',partner1.png,partner2.png,partner3.png,partner4.png,partner5.png', '4,8,11,13,', 'montyr', ''),
(107, 32, 'mdqlogo.png', 'resumebanner.png', 'resume', ',resume1.png,resume2.png,resume3.png,resume4.png,resume5.png,resume6.png', '4,6,8,', 'resume', ''),
(108, 33, 'srinarlogo.png', 'srinarbanner.png', 'srinar', ',srinar1.png,srinar2.png,srinar3.png,srinar4.png,srinar5.png,srinar6.png', '4,8,13,', 'srinar', ''),
(109, 34, 'vendorlogo.png', 'vendorbanner.png', 'freshbags_vendor', ',vendor1.png,vendor2.png,vendor3.png,vendor4.png', '4,8,13,', 'freshbags_vendor', ''),
(110, 35, 'vibrologo.png', 'vibrobanner.png', 'vibro care', ',vibro1.png,vibro2.png,vibro3.png,vibro4.png,vibro5.png,vibro6.png,vibro7.png,vibro8.png', '4,6,8,', 'vibro care', ''),
(111, 31, 'pedallogo.png', 'pedlabanner.png', 'pedal_application', ',pedal1.png,pedal2.png,pedal3.png,pedal4.png,pedal5.png', '4,6,8,', 'pedal_application', ''),
(114, 67, '4k-cars-3-poster-lightning-mcqueen-wallpaper-preview.jpg', '61ba2KjkC1L._SL1500_.jpg', 'test test', ',4k-cars-3-poster-lightning-mcqueen-wallpaper-preview.jpg,61ba2KjkC1L._SL1500_.jpg,1000x620xc.webp', '1,', 'test', ''),
(115, 2, '4k-cars-3-poster-lightning-mcqueen-wallpaper-preview.jpg', '61ba2KjkC1L._SL1500_.jpg', 'test', ',4k-cars-3-poster-lightning-mcqueen-wallpaper-preview.jpg,61ba2KjkC1L._SL1500_.jpg', '', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(50) NOT NULL,
  `title` longtext NOT NULL,
  `image` varchar(600) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `content`, `created_at`) VALUES
(2, 'test', '61ba2KjkC1L._SL1500_.jpg', '<p><u><em></em></u><strong><em><u>test</u></em></strong></p>', '2023-12-06 16:42:39'),
(3, 'test', '61ba2KjkC1L._SL1500_.jpg', '<p style=\"text-align: center;\"><span style=\"color: rgb(147, 101, 184);\"><strong><em><u><strong>test<br></strong></u></em></strong></span></p>', '2023-12-06 16:45:05'),
(4, 'title', '61ba2KjkC1L._SL1500_.jpg', '<p><u><em></em></u><strong><em><u>test<br></u></em></strong></p>', '2023-12-06 16:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `collname` varchar(255) NOT NULL,
  `ypass` int(10) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dp` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `position` varchar(250) NOT NULL,
  `old_office` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `collname`, `ypass`, `degree`, `branch`, `location`, `email`, `mobile`, `comment`, `gender`, `dp`, `cv`, `dob`, `position`, `old_office`, `experience`) VALUES
(936, 'test', 'test', 0, '', 'BE Computer Science', 'test', 'test@gmail.com', '1234567890', '', '', '', 'bold.jpeg', '0000-00-00', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(50) NOT NULL,
  `title1` longtext NOT NULL,
  `title2` longtext NOT NULL,
  `title3` longtext NOT NULL,
  `image` varchar(600) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title1`, `title2`, `title3`, `image`, `created_at`) VALUES
(7, 'Innovating People, Celebrating Culture, Redefining Workplace Excellence', 'We are pioneer in Native and Hybrid Mobile App Development of  Android and iOS', '', 'mobile-development.webp', '2023-12-21 11:55:53'),
(10, 'Your Path to Technological Transformation', 'We are pioneer in Native and Hybrid Mobile App Development of Android and iOS', '', 'web-development.webp', '2023-12-21 11:30:35'),
(11, 'Instructing Today, Versatile Tomorrow, Transforming the Future', 'We are pioneer in Native and Hybrid Mobile App Development of Android and iOS', '', 'cyber-security.webp', '2023-12-21 11:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(11, 'Raghu V', 'raghu.mdq@gmail.com', '2147483647', 'Iam interested to join with your team', '2023-12-21 17:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `color` varchar(7) NOT NULL,
  `image` varchar(600) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `content`, `color`, `image`, `created_at`) VALUES
(1, 'test', '', '', 'bold.jpeg', '2023-12-11 11:20:08'),
(2, 'test ', 'testtesttes', '123', '4k-cars-3-poster-lightning-mcqueen-wallpaper-preview.jpg', '2023-12-11 11:22:14'),
(3, 'test a', 'test test ', '#7777ff', 'bold.jpeg', '2023-12-11 11:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `id` int(255) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `aboutproject` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sec_image` varchar(600) NOT NULL,
  `type_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`id`, `projectname`, `aboutproject`, `image`, `sec_image`, `type_project`) VALUES
(2, 'Vsafe', 'V SAFE lockers access by mobilephone', '1.png', '.png', '2'),
(3, 'Evtron', ' Digital platform for charging car battery ', '4.png', 'evtronbanner.png', '2'),
(4, 'Codina', 'Codina based on saling Woven Wire ', '3.png', 'codinabanner.png', '2'),
(5, 'Vkart', 'World-fresh grocery items in Vkart', '6.png', 'vkartbannner.png', '2'),
(6, 'Myfinalyst', 'Myfinalyst_Application', '7.png', 'myfinalystbanner.png', '2'),
(7, 'Beppers', 'Beppers is a social media app ', '2.png', 'beppersbanner.png', '2'),
(17, 'Shopztrend', ' Shopztrend sells variety of products', '5.png', 'shopztrendlogo.png', '2'),
(23, 'Audi LMS', 'Audi LMS', '8.png', 'audibanner.png', '2'),
(24, 'Audit', 'Audit', '9.png', 'auditbanner.png', '2'),
(25, 'Freshbags Enquiry', 'Freshbags', '11.png', 'fresheuqbanner.png', '2'),
(26, 'Freshbags Order', 'Freshbags', '12.png', 'freshordbanner.png', '2'),
(27, 'igreen', 'igreen_Application', '13.png', 'igreenbanner.png', '2'),
(28, 'LMW', 'LMW_Application', '14.png', 'lmvbanner.png', '2'),
(29, 'Nadi', 'Nadi_Application', '15.png', 'nadibanner.png', '2'),
(30, 'Montyr', 'Montyr_Application', '16.png', 'partnerbanner.png', '2'),
(31, 'Pedal', 'Pedal_Application', '17.png', 'pedlabanner.png', '2'),
(32, 'Resume', 'Resume_Application', '18.png', 'resumebanner.png', '2'),
(33, 'Srinar', 'Srinar_Application', '19.png', 'srinarbanner.png', '2'),
(34, 'Freshbags Vendor', 'Freshbags', '20.png', 'vendorbanner.png', '2'),
(35, 'Vibro Care', 'Vibrocare_Application', '21.png', 'vibrobanner.png', '2'),
(37, 'Nadi', 'Nadi_Web', '22.png', 'nadi.png', '1'),
(38, 'Shopztrend', 'Shopztrend_web', '23.png', 'shopztrend.png', '1'),
(39, 'Srinar', 'Srinar_Web', '24.png', 'srinar.png', '1'),
(40, 'igreen', 'igreen_Web', '25.png', 'igreen.png', '1'),
(41, 'igreenTec', 'igreenTec_Web', '26.png', 'igreentec.png', '1'),
(42, 'igreen', 'igreen_Web', '27.png', 'igreenapp.png', '1'),
(43, 'Delivers', 'Delivers_Web', '28.png', 'delivers.png', '1'),
(44, 'sparebees', 'Sparebees_Web', '29.png', 'sparebees.png', '1'),
(45, 'SheildConnect', 'SheildConnect_Web', '30.png', 'sheildlms.png', '1'),
(46, 'Shine', 'Shine_Web', '32.png', 'shine.png', '1'),
(47, 'SheildConnect', 'SheildConnect_Web', '31.png', 'shelidconect.png', '1'),
(48, 'Beppers', 'Beppers_Web', '33.png', 'beppers.png', '1'),
(49, 'DulyDecors', 'DulyDecors_web', '35.png', 'dulydecor.png', '1'),
(50, 'ImpressDesign', 'ImpressDesign_Web', '36.png', 'impress.png', '1'),
(51, 'CampanyVisitor', 'CampanyVisitor|_Web', '37.png', 'company.png', '1'),
(52, 'Algoshack', 'Algoshack_Web', '38.png', 'algoshack.png', '1'),
(53, 'Karjewels', 'Karjewels_Web', '39.png', '39.png', '1'),
(54, 'Enerfac', 'Enerfac_Web', '40.png', 'enerfac.png', '1'),
(55, ' Revevue Department', 'Revevue Department_Web', '41.png', 'revevue.png', '1'),
(56, 'Go Green', 'Go_green_verz', '42.png', 'gogreen.png', '1'),
(57, 'Best Food Finder', 'Best Food Finder_Web', '43.png', 'food.png', '1'),
(58, 'CMR', 'CMR_Web', '44.png', 'cmr.png', '1'),
(59, 'Cartunez', 'Cartunez_Web', '45.png', 'cartuenz.png', '1'),
(60, 'CarAudioPeople', 'CarAudioPeople_Web', '46.png', 'caraudio.png', '1'),
(62, 'Vsafe', 'VsafeAdminPanel', '47.png', 'vsafeadmin.png', '1'),
(63, 'Immersive Skills', 'IMSK Web', '49.png', 'immersive.png', '1'),
(67, 'test', 'test', '61ba2KjkC1L._SL1500_.jpg', '4k-cars-3-poster-lightning-mcqueen-wallpaper-preview.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `project_points`
--

CREATE TABLE `project_points` (
  `id` int(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `projectpoints` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_points`
--

INSERT INTO `project_points` (`id`, `images`, `projectpoints`) VALUES
(1, 'agent.png', '1000+ Agents Managed Daily'),
(2, 'agent.png', '1000+ Agents Managed Daily');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `technology_name`
--

CREATE TABLE `technology_name` (
  `id` int(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `technology_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technology_name`
--

INSERT INTO `technology_name` (`id`, `technology`, `technology_images`) VALUES
(1, 'aws', 'aws.png'),
(2, 'exotel', 'exotel.png'),
(3, 'firebase', 'firebase.png'),
(4, 'php', 'php.png'),
(5, 'pythondjango', 'pythondjango.jpg'),
(6, 'java', 'java.png'),
(7, 'kotlin', 'kotlin.png'),
(8, 'mysql', 'mysql.png'),
(9, 'encryption', 'encryption.png'),
(10, 'swift', 'swift.png'),
(11, 'googlemap', 'googlemap.png'),
(12, 'reactjs', 'Reactjs.png'),
(13, 'flutter', 'flutter.png'),
(14, 'laravel', 'laravel.png'),
(15, 'html', 'html.png'),
(16, 'css', 'css.png'),
(20, 'angular js', 'angular.png'),
(21, 'node js', 'node.png'),
(22, 'mongo database', 'mongodb.png'),
(23, 'bootstrap', 'bootsrap.jpg'),
(24, 'wordpress', 'wordpress.png'),
(25, 'python', 'python.png'),
(26, 'multi language', 'lang.jpg'),
(27, 'tyescript', 'typescript.png'),
(28, 'solana', 'solana.png'),
(29, 'blockchain', 'blockchain.png'),
(30, 'phantom wallet', 'phantom.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `clientfrom` varchar(250) NOT NULL,
  `feedback` longtext NOT NULL,
  `image` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `clientfrom`, `feedback`, `image`, `created_at`) VALUES
(7, 'Robert Poddar', 'Founder', '\" We worked with her team on an UX improvement program. I find her very positive and highly enterprising. I wish her and her startup all the very best.\"', 'robert.png', '2023-12-21 20:18:18'),
(8, 'Vadeesh Budramane', 'CEO', '\" We worked with her team on an UX improvement program. I find her very positive and highly enterprising. I wish her and her startup all the very best.\"', 'vadeesh.jpg', '2023-12-21 20:24:13'),
(9, 'Gowtham Balasubramanian', 'Founder', '\" I had worked Maggres on one of the Website security audit project and found they are technically strong and has worked in every detail on the website with respect to vulnerability, and identified the gaps. \"', 'gowtham.jpg', '2023-12-21 20:26:01'),
(10, 'Allen Jose', 'Founder', '\" I had worked Maggres on one of the Website security audit project and found they are technically strong and has worked in every detail on the website with respect to vulnerability, and identified the gaps. \"', 'joe.jpg', '2023-12-21 20:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `web_application`
--

CREATE TABLE `web_application` (
  `id` int(11) NOT NULL,
  `projecttype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_application`
--

INSERT INTO `web_application` (`id`, `projecttype`) VALUES
(1, 'web'),
(2, 'Mobile_App');

-- --------------------------------------------------------

--
-- Table structure for table `web_details`
--

CREATE TABLE `web_details` (
  `id` int(255) NOT NULL,
  `weblogo_images` varchar(255) NOT NULL,
  `webbanner_images` varchar(255) NOT NULL,
  `webproject_overview` varchar(255) NOT NULL,
  `webphotos` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `webproject_title` varchar(255) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `cilent_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_details`
--

INSERT INTO `web_details` (`id`, `weblogo_images`, `webbanner_images`, `webproject_overview`, `webphotos`, `technology`, `webproject_title`, `project_id`, `cilent_id`) VALUES
(1, 'imsk.png', 'immersive.png', 'Immersive Skills Network community started by a team of volunteers from various domains like Game Developers, Virtual Reality and Augmented Reality Industry Professionals, Media Professionals and Digital Artists from South India and we are rapidly growing', ',imsk1.png,imsk2.png,imsk3.png,imsk4.png,imsk5.png', '4,8,', 'Immersive Skills community ', '', '63'),
(10, 'srinarlogo.png', 'srinar.png', '', ',srinar1.png,srinar2.png,srinar3.png,srinar4.png,srinar5.png', '4,8,12,', 'Lorem Ipsum ', '', '39'),
(11, 'igreenlogo.png', 'igreen.png', 'We bring in diverse wealth of engineering and construction expertise to develop infrastructure​. ', ',igreen1.png,igreen2.png,igreen3.png,igreen4.png,igreen6.png', '4,8,12,', 'We bring igreen', '', '40'),
(12, 'igreenlogo.png', 'igreentec.png', 'We deliver high quality equipment such as with FMC Seal,Plungers,Chinese Fingers,Drill Bits,Tri Cone Bits ,D-Shackle,Bow Shackle ,Rock Reamers,HDD Hole Opener ,Drilling Pilots and modern machinery for ide range of purpose', ',igreentec1.png,igreentec2.png,igreentec3.png,igreentec4.png,igreentec5.png', '4,8,12,', 'igreen_web', '', '41'),
(13, 'shoplogo.png', 'shopztrend.png', '\r\n\r\nShopztrend is an e-commerce website that sells a variety of products. Currently, only a few products are selling.Shopztrend is an e-commerce website for Canadians that sells a variety of products. Currently, only a few products are selling.\r\n', ',shopztend2.png,shopztred4.png,shopztrend1.png,shopztrend5.png,shoztrend3.png', '4,8,12,', 'E-Commerce Shopztrend', '', '38'),
(14, 'nadilogo.png', 'nadi.png', 'Nadi_websites', ',nadi1.png,nadi2.png,nadi3.png,nadi4.png,nadi5.png', '4,8,12', 'Nadi_websites', '', '37'),
(15, 'shieldlogo.png', 'shelidconect.png', 'shield_website', ',shied3.png,shield1.png,shield2.png,shield3.png,shield4.png,shield5.png', '8,14,15,16,23', 'shield_website', '', '47'),
(16, 'shinelogo.jpg', 'shine.png', 'shine', ',shine1.png,shine2.png,shine3.png,shine4.png,shine5.png,shine6.png', '8,14,15,16,23', 'shine_website', '', '46'),
(17, 'carlogo.jpg', 'cartuenz.png', 'We are the best designers for your car in the city. We will fulfill all your car care needs, car ceramic coating, car wrap, car audio, car ppf chennai, car detaining and A to Z of your car cosmetics in one floor! In a deliberate attempt to meet the expect', ',car1.png,car2.png,car3.png,car4.png,car5.png', '8,15,16,23', 'cartunez_website', '', '59'),
(18, 'igreenlogo.png', 'igreenapp.png', 'igreen_website', ',igreenapp1.png,igreenapp2.png,igreenapp3.png,igreenapp5.png', '4,8,12,', 'igreen_website', '', '42'),
(19, 'beelogo.png', 'sparebees.png', 'sparebees_website', ',bee1.png,bee2.png,bee4.png,bee5.png', '8,14,15,16,23', 'sparebees_website', '', '44'),
(20, 'deliverlogo.png', 'delivers.png', 'Deliversg_website', ',deliver1.png,deliver2.png,deliver3.png,deliver4.png', '20,21,22', 'Deliversg_website', '', '43'),
(21, 'bepperslogo.png', 'beppers.png', 'Beppers is a social media app designed exclusively for beauty and personal care, that connects people with beauty businesses and beauty freelancers.', ',beppers1.png,beppers2.png,beppers3.png,beppers4.png,beppers5.png', '4,15,16,23', 'beppers_website', '', '48'),
(22, 'shieldlogo.png', 'sheildlms.png', 'Our portfolio offers a wide range of products supported by scientific findings from clinical rials and research studies.', ',lms1.png,lms2.png,lms3.png,lms5.png', '8,14,15,16,23', 'lms_website', '', '45'),
(23, 'cmrlogo.png', 'cmr.png', 'CMR_website', ',cmr1.png,cmr2.png,cmr3.png,cmr4.png', '4,15,16,23,', 'CMR_website', '', '58'),
(24, 'foodlogo.svg', 'food.png', 'food finder', ',food1.png,food2.png,food3.png,food4.png', '12,25,', 'food finder', '', '57'),
(25, 'ener.png', 'enerfac.png', 'enerfac_website', ',enerface1.png,enerface2.png,enerface3.png,enerface4.png,enerface5.png', '24,', 'enerfac_website', '', '54'),
(26, 'dulylogo.jpg', 'dulydecor.png', 'dulydecors', ',duly1.png,duly3.png,duly4.png,duly5.png', '15,16,23,', 'Dulydecors', '', '49'),
(27, 'revevcelogo.png', 'revevue.png', 'revevue department', ',revence1.png,revence2.png,revence3.png,revence4.png', '15,16,', 'revevue department', '', '55'),
(28, 'karjewelslogo.jpg', 'karbanner.png', 'karjewels_website', ',kar1.png,kar2.png,kar3.png,kar5.png', '4,8,15,16,23,', 'karjewels_website', '', '53'),
(29, 'impresslogo.png', 'impress.png', 'impressdesign', ',impress1.png,impress2.png,impress3.png,impress4.png,impress5.png', '4,8,14,26', 'impressdesign', '', '50'),
(30, 'alglogo.png', 'algoshack.png', 'algoshack', ',algo1png.png,algo2.png,algo3.png,algo4.png,algo5.png', '12,21,', 'algoshack', '', '52'),
(31, 'Vsafelogo.png', 'vsafeadmin.png', 'vsafe', ',vsafe1.png,vsafe2.png,vsafe3.png,vsafe4.png', '4,8,15,16,23,', 'vsafe', '', '62'),
(32, 'vibro.gif', 'vibrobanner.png', 'vibration analysis', ',vibro1.png,vibro2.png,vibro3.png,vibro4.png', '15,16,23,', 'vibration analysis', '', '64'),
(33, 'caraudiologo.png', 'caraudio.png', 'We, Car Audio People at K.K. Nagar West, Tamilnadu are automobile accessory shop, where you’ll find a number of genuine car accessories designed to fit, protect and enhance the look of your car.', ',caraudio1.png,caraudio2.png,caraudio3.png,caraudio4.png,caraudio5.png', '4,8,15,16,23,', ' Car accessory shop', '', '60'),
(34, 'gogreenlogo.png', 'gogreen.png', 'gogreenverz', ',gogreen.png,gogreen3.png,gogreen4.png,gogreen5.png', '4,8,12,27,28,29,30,', 'gogreenverz', '', '56'),
(35, 'companylogo.png', 'company.png', 'visitor pass', ',company1.png,company2.png,company3.png,company4.png', '4,8,15,16,23,', 'visitor pass', '', '51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_web`
--
ALTER TABLE `application_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cilent_id` (`cilent_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_points`
--
ALTER TABLE `project_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology_name`
--
ALTER TABLE `technology_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_application`
--
ALTER TABLE `web_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_details`
--
ALTER TABLE `web_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_web`
--
ALTER TABLE `application_web`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=937;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `project_points`
--
ALTER TABLE `project_points`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technology_name`
--
ALTER TABLE `technology_name`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_application`
--
ALTER TABLE `web_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_details`
--
ALTER TABLE `web_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
