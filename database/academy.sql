-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 07:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `met`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `image1`, `image2`, `image3`) VALUES
(1, 'مــادة (1): معهد مصر العالي للتجارة والحاسبات بالمنصورة يتبع جمعية مصر للهندسة والتكنولوجيا المشهرة تحت رقم 856 لسنة 2000 بتاريخ 5 / 4 /2000 وله شخصية اعتبارية وأمواله مستقلة عن أموال الجمعية وتصرف فقط في الأغراض العلمية والتعليمية والبحثية لتحقيق أهداف المعهد .  والمعهد منشأ بالقرار الوزاري رقم (1314) بتاريخ 25/5/2005 وتم تعديل اسم المعهد بالقرار الوزاري رقم (503) بتاريخ 17/4/2006.  مــادة (2): يهدف معهد مصر العالي للتجارة والحاسبات بالمنصورة إلى إعداد خريجين متميزين ومتخصصين للعمل في مجالات الحاسبات ونظم المعلومات والإدارة والمحاسبة مؤهلين للعمل والتعامل مع التغيرات البيئية وقادرين على التعامل مع سوق العمل المفتوح في ظل العولمة وما تتطلبه من قدرات إبداعية خلابة.  مــادة (3): يضم معهد مصر العالي للتجارة والحاسبات ثلاث شعب على النحو التالي:  1- شعبة علوم الحاسب  ويقبل بهذه الشعبة الطلاب الحاصلين على الثانوية العامة (شعبة الرياضيات) وما يعادلها من الشهادات العربية والأجنبية.  2- شعبة نظم المعلومات الإدارية  ويقبل بهذه الشعبة الطلاب الحاصلين على احد المؤهلات الآتية:  · شهادة الثانوية العامة بقسميها العلمي والأدبي وما يعادلها من الشهادات العربية والأجنبية.  · شهادة الثانوية التجارية نظام 3،5 سنوات.  · شهادة الثانوية الصناعية نظام 3،5 سنوات.  · دبلوم المعاهد الفنية الصناعية والتجارية.  دبلوم معاهد الإدارة والسكرتارية. · شهادة الثانوية الفنية للإدارة والخدمات .   3- شعبة الإدارة والمحاسبة  ويقبل بهذه الشعبة الطلاب الحاصلين على المؤهلات الآتية.  · الثانوية العامة بقسميها وما يعادلها من الشهادات العربية والأجنبية.  الثانوية التجارية نظام 3 سنوات. · الثانوية الفنية للإدارة والخدمات.  دبلوم المعاهد الفنية التجارية للقبول بالفرقة الثانية. دبلوم معاهد الإدارة والسكرتارية للقبول بالفرقة الثانية. الثانوية التجارية 5 سنوات للقبول بالفرقة الثانية. مــادة (4): يمنح وزير التعليم العالي درجة البكالوريوس في التخصصات الآتية:  1. علوم الحاسب  2. الإدارة والمحاسبة  3. نظم المعلومات الإدارية  مــادة (5 ): مدة الدراسة بالمعهد أربع سنوات دراسة يمنح من يجتازها بنجاح درجة البكالوريوس في إحدى التخصصات المذكورة في المــادة (4) ويعتمد هذا المؤهل من السيد الأستاذ الدكتور وزير التعليم العالي.', 'up5mzo7vlwkaqn2.jpg', 'yn9zm4wv08rqosi.jpg', 'x1tkq3vejnf0h4a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(6, 'alaa', '9f501154b7e5872e75704103a87b10317e86c5ac'),
(8, 'ahmed', 'cc6ebc80a79411f1ed29c0ea899e939d53a5eb30'),
(14, 'miro', 'e1a768e97616356a5fb3a29524c65a734f307157');

-- --------------------------------------------------------

--
-- Table structure for table `demonstrator_subjects`
--

CREATE TABLE IF NOT EXISTS `demonstrator_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `demonstrator_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=208 ;

--
-- Dumping data for table `demonstrator_subjects`
--

INSERT INTO `demonstrator_subjects` (`id`, `subject_id`, `demonstrator_id`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 2, 2),
(5, 2, 2),
(6, 2, 2),
(7, 3, 2),
(8, 3, 2),
(9, 3, 2),
(10, 4, 2),
(11, 4, 2),
(12, 4, 2),
(13, 5, 2),
(14, 5, 2),
(15, 5, 2),
(16, 6, 2),
(17, 6, 2),
(18, 6, 2),
(19, 7, 2),
(20, 7, 2),
(21, 7, 2),
(22, 8, 2),
(23, 8, 2),
(24, 8, 2),
(25, 9, 2),
(26, 9, 2),
(27, 9, 2),
(28, 10, 2),
(29, 10, 2),
(30, 10, 2),
(31, 11, 2),
(32, 11, 2),
(33, 11, 2),
(34, 12, 2),
(35, 12, 2),
(36, 12, 2),
(37, 13, 2),
(38, 13, 2),
(39, 13, 2),
(40, 14, 2),
(41, 14, 2),
(42, 14, 2),
(43, 15, 2),
(44, 15, 2),
(45, 15, 2),
(46, 16, 2),
(47, 16, 2),
(48, 16, 2),
(49, 17, 2),
(50, 17, 2),
(51, 17, 2),
(52, 18, 2),
(53, 18, 2),
(54, 18, 2),
(55, 19, 2),
(56, 19, 2),
(57, 19, 2),
(58, 20, 2),
(59, 20, 2),
(60, 20, 2),
(61, 21, 2),
(62, 21, 2),
(63, 21, 2),
(64, 22, 2),
(65, 22, 2),
(66, 22, 2),
(67, 23, 2),
(68, 23, 2),
(69, 23, 2),
(70, 24, 2),
(71, 24, 2),
(72, 24, 2),
(73, 25, 2),
(74, 25, 2),
(75, 25, 2),
(76, 26, 2),
(77, 26, 2),
(78, 26, 2),
(79, 27, 2),
(80, 27, 2),
(81, 27, 2),
(82, 28, 2),
(83, 28, 2),
(84, 28, 2),
(85, 29, 2),
(86, 29, 2),
(87, 29, 2),
(88, 30, 2),
(89, 30, 2),
(90, 30, 2),
(91, 31, 2),
(92, 31, 2),
(93, 31, 2),
(94, 32, 2),
(95, 32, 2),
(96, 32, 2),
(97, 33, 2),
(98, 33, 2),
(99, 33, 2),
(100, 34, 2),
(101, 34, 2),
(102, 34, 2),
(103, 35, 2),
(104, 35, 2),
(105, 35, 2),
(106, 36, 2),
(107, 36, 2),
(108, 36, 2),
(109, 37, 2),
(110, 37, 2),
(111, 37, 2),
(112, 38, 2),
(113, 38, 2),
(114, 38, 2),
(115, 39, 2),
(116, 39, 2),
(117, 39, 2),
(118, 40, 2),
(119, 40, 2),
(120, 40, 2),
(121, 41, 2),
(122, 41, 2),
(123, 41, 2),
(124, 42, 2),
(125, 42, 2),
(126, 42, 2),
(127, 43, 2),
(128, 43, 2),
(129, 43, 2),
(130, 44, 2),
(131, 44, 2),
(132, 44, 2),
(133, 45, 2),
(134, 45, 2),
(135, 45, 2),
(136, 46, 2),
(137, 46, 2),
(138, 46, 2),
(139, 47, 2),
(140, 47, 2),
(141, 47, 2),
(142, 48, 2),
(143, 48, 2),
(144, 48, 2),
(145, 49, 2),
(146, 49, 2),
(147, 49, 2),
(148, 50, 2),
(149, 50, 2),
(150, 50, 2),
(151, 51, 2),
(152, 51, 2),
(153, 51, 2),
(154, 52, 2),
(155, 52, 2),
(156, 52, 2),
(157, 53, 2),
(158, 53, 2),
(159, 53, 2),
(160, 54, 2),
(161, 54, 2),
(162, 54, 2),
(163, 55, 2),
(164, 55, 2),
(165, 55, 2),
(166, 56, 2),
(167, 56, 2),
(168, 56, 2),
(169, 57, 2),
(170, 57, 2),
(171, 57, 2),
(172, 58, 2),
(173, 58, 2),
(174, 58, 2),
(175, 59, 2),
(176, 59, 2),
(177, 59, 2),
(178, 60, 2),
(179, 60, 2),
(180, 60, 2),
(181, 61, 2),
(182, 61, 2),
(183, 61, 2),
(184, 62, 2),
(185, 62, 2),
(186, 62, 2),
(187, 63, 2),
(188, 63, 2),
(189, 63, 2),
(190, 64, 2),
(191, 64, 2),
(192, 64, 2),
(193, 65, 2),
(194, 65, 2),
(195, 65, 2),
(196, 66, 2),
(197, 66, 2),
(198, 66, 2),
(199, 67, 2),
(200, 67, 2),
(201, 67, 2),
(202, 68, 2),
(203, 68, 2),
(204, 68, 2),
(205, 69, 2),
(206, 69, 2),
(207, 69, 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(1, 'computer science', 'Computer science is the scientific and practical approach to computation and its applications. It is the systematic study of the feasibility, structure, expression, and mechanization of the methodical procedures (or algorithms) that underlie the acquisition, representation, processing, storage, communication of, and access to information, whether such information is encoded as bits in a computer memory or transcribed in genes and protein structures in a biological cell.An alternate, more succinct definition of computer science is the study of automating algorithmic processes that scale. A computer scientist specializes in the theory of computation and the design of computational systems.'),
(2, 'Accounting and Business Administration', 'Accounting can be divided into several fields including financial accounting, management accounting, auditing, and tax accounting. Financial accounting focuses on the reporting of an organization&#39;s financial information, including the preparation of financial statements, to external users of the information, such as investors, regulators and suppliers; and management accounting focuses on the measurement, analysis and reporting of information for internal use by management.The recording of financial transactions.\r\nBusiness administration is the process of managing a business or non-profit organization, so that it remains stable and continues to grow.\r\nThe administration of a business includes the performance or management of business operations and decision making as well as the efficient organization of people and other resources to direct activities toward common goals and objectives.'),
(3, 'Management information systems', 'Management Information Systems (MIS) is the study of people, technology, organizations, and the relationships among them. This definition, given by Mays Business School, relates specifically to MIS as a course of study. In other words, MIS is commonly used in business schools to refer to the study of how individuals, groups, and organizations evaluate, design, implement, manage, and utilize systems to generate information to improve efficiency and effectiveness of decision making, including systems termed decision support systems, expert systems, and executive information systems.Many business schools (or colleges of business administration within universities) have an MIS department, alongside departments of accounting, finance, management, marketing, and may award degrees (at undergraduate, master, and doctoral levels) in MIS.');

-- --------------------------------------------------------

--
-- Table structure for table `department_doctor`
--

CREATE TABLE IF NOT EXISTS `department_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `last_exams`
--

CREATE TABLE IF NOT EXISTS `last_exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `exam_file` text NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `last_exams`
--

INSERT INTO `last_exams` (`id`, `department_id`, `year`, `term`, `exam_file`, `subject_id`) VALUES
(4, 1, 3, 1, '5odb1v4eumn0gsq.jpg', 19),
(5, 1, 4, 1, 'yzt58qodxi96b4p.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary` text NOT NULL,
  `date` date NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `has_file` int(11) NOT NULL,
  `type` enum('section','lecture') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `summary`, `date`, `doctor_id`, `subject_id`, `has_file`, `type`) VALUES
(2, 'this is the section about nozom 5bera 2 but section ', '2015-05-13', 20, 1, 1, 'section'),
(3, 'عنوان المحتوي ', '2015-05-13', 20, 1, 0, 'section'),
(4, 'عنوان المحتوي', '2015-05-13', 20, 1, 0, 'section'),
(9, 'this is the section about nozom 5bera 2 but section ', '2015-06-10', 20, 0, 1, 'lecture'),
(10, 'this is the section about nozom 5bera 2 but section ', '2015-06-10', 20, 0, 1, 'lecture'),
(12, 'this is the section about nozom 5bera 2 but section ', '2015-06-10', 20, 0, 1, 'lecture'),
(13, 'test', '2015-06-12', 20, 1, 1, 'lecture'),
(14, 'lsjkldsjldsjds', '2015-06-14', 20, 1, 1, 'lecture');

-- --------------------------------------------------------

--
-- Table structure for table `lectures_files`
--

CREATE TABLE IF NOT EXISTS `lectures_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lectures_files`
--

INSERT INTO `lectures_files` (`id`, `lecture_id`, `file`) VALUES
(2, 2, 'af80cf7cd26019078b252e821b06421c_Ù†Ø¸Ù… Ø®Ø¨ÙŠØ±Ù‡.pdf'),
(6, 9, 'bf83da805ba97da812eeaefb82741430_11301585_1579255732355105_128298958_n.jpg'),
(7, 10, 'a5300690125c1aace46ca48898bc4b3b_11301585_1579255732355105_128298958_n.jpg'),
(9, 12, 'c7a6fb83e16fe491476eac5fcda6bb8f_11301585_1579255732355105_128298958_n.jpg'),
(10, 13, '50267-1430785807-project.rar'),
(11, 14, '87ded014665bbd99f457ce9606ff16ee_نظم خبيره.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contant` text NOT NULL,
  `time` datetime NOT NULL,
  `viewed` enum('watched','not watched','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `contant`, `time`, `viewed`) VALUES
(1, 'alaa', 'alaaelgndy21@yahoo.com', 'message content', '2015-06-13 02:16:10', 'watched'),
(2, 'alaa', 'alaaelgndy21@yahoo.com', 'content', '2015-06-13 02:16:23', ''),
(3, 'alaa', 'alaaelgndy21@yahoo.com', 'what is your your vision ', '2015-06-13 02:17:11', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`) VALUES
(2, 'تسليم شهادات التخرج 2014-2015', 'يتم تسليم شهادات التخرج لكافة الفرق و الشعب ابتداءا من الساعة التاسعة صباحا الى الساعة الواحدة ظهرا ابتداءا من اليوم الثلاثاء الموافق 5 أغسطس 2015 و ذلك للبنين فقط', 'ylju1b40m9p5286.jpg', 'Jun 13 2015'),
(3, 'رحلة الاقصر وأسوان', 'الاعلان عن رحله للاقصر وأسوان يوم 23/6 مع الاستمتاع بجميع فقرات الرحله وتكون الرحله يوم كامل (24 ساعه )', 'yb3os7e8uxmkawr.jpg', 'Jun 13 2015'),
(4, 'مشاريع التخرج', 'يتم بدأ مناقشة مشاريع التخرج من يوم الاثنين 15/6 ويوم 16/6 وذلك وفقا لمواعيد كل دكتور', '7n1se8lrafqy5uk.jpg', 'Jun 13 2015');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'alaaelgndy21@yahoo.com'),
(2, 'ahmedsamy@yahoo.com'),
(3, 'amiraadel@yahoo.com'),
(4, 'ayamostafa@yahoo.com'),
(5, 'ziadelshaboury@gmail.com'),
(6, 'ahmedsamigeek@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `made_by` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `content`, `made_by`, `date`) VALUES
(1, 'a new task has been made by doctor bahaa', 20, '2015-05-04 21:54:59'),
(2, 'a new task has been made by doctor bahaa', 20, '2015-05-04 22:23:38'),
(3, 'a new task has been made by doctor bahaa', 20, '2015-05-04 22:27:21'),
(4, ' a new question from student', 1, '2015-05-24 16:50:57'),
(5, ' a new question from student', 1, '2015-05-24 17:15:23'),
(6, ' a new question from by ahmed samy ', 1, '2015-05-24 17:52:34'),
(7, 'a new task has been made by doctor bahaa', 20, '2015-06-08 14:37:57'),
(8, 'a new task has been made by doctor bahaa', 20, '2015-06-08 16:05:54'),
(9, 'a new task has been made by doctor bahaa', 20, '2015-06-09 13:56:31'),
(10, 'a new task has been made by doctor bahaa', 20, '2015-06-09 13:59:27'),
(11, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:00:21'),
(12, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:11:35'),
(13, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:13:37'),
(14, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:20:30'),
(15, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:20:42'),
(16, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:20:50'),
(17, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:20:57'),
(18, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:21:02'),
(19, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:21:07'),
(20, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:21:14'),
(21, 'a new task has been made by doctor bahaa', 20, '2015-06-09 14:41:22'),
(22, ' a new question from by ahmed samy ', 1, '2015-06-11 02:07:10'),
(23, 'a new task has been made by doctor bahaa', 20, '2015-06-11 02:25:07'),
(24, 'a new task has been made by doctor bahaa', 20, '2015-06-11 02:25:57'),
(25, 'a new task has been made by doctor bahaa', 20, '2015-06-11 23:52:36'),
(26, 'a new task has been made by doctor bahaa', 20, '2015-06-12 02:40:32'),
(27, 'a new task has been made by doctor bahaa', 20, '2015-06-12 02:44:02'),
(28, ' a new question from by ahmed samy ', 1, '2015-06-12 20:07:09'),
(29, ' a new question from by ahmed samy ', 1, '2015-06-13 17:12:47'),
(30, ' a new question from by ahmed samy ', 1, '2015-06-13 17:16:01'),
(31, ' your question has been answered by(د/بهاء شبانه) check it now  د/بهاء شبانه', 20, '2015-06-13 15:16:31'),
(32, 'the task has been upated by  د/بهاء شبانه', 20, '2015-06-14 05:29:22'),
(33, 'a new lecture has been made by doctor د/بهاء شبانه', 20, '2015-06-14 18:21:57'),
(34, 'a new task has been made by  د/بهاء شبانه', 20, '2015-06-15 05:08:16'),
(35, 'a new task has been made by  د/بهاء شبانه', 20, '2015-06-15 05:10:02'),
(36, 'a new task has been made by  د/بهاء شبانه', 20, '2015-06-15 05:10:55'),
(37, 'a new task has been made by  د/بهاء شبانه', 20, '2015-06-15 05:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `notifications_users`
--

CREATE TABLE IF NOT EXISTS `notifications_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seen` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `notifications_users`
--

INSERT INTO `notifications_users` (`id`, `notification_id`, `user_id`, `seen`) VALUES
(1, 1, 6, 0),
(2, 2, 1, 1),
(3, 2, 5, 0),
(4, 3, 1, 1),
(5, 3, 5, 0),
(6, 4, 1, 1),
(7, 4, 2, 0),
(8, 4, 2, 0),
(9, 4, 2, 0),
(10, 5, 1, 1),
(11, 5, 2, 0),
(12, 5, 2, 0),
(13, 5, 2, 0),
(14, 6, 1, 1),
(15, 6, 2, 0),
(16, 6, 2, 0),
(17, 6, 2, 0),
(18, 7, 6, 0),
(19, 8, 1, 1),
(20, 8, 3, 0),
(21, 8, 7, 0),
(22, 8, 8, 0),
(23, 8, 9, 0),
(24, 8, 10, 0),
(25, 8, 11, 0),
(26, 8, 12, 0),
(27, 8, 13, 0),
(28, 8, 14, 0),
(29, 8, 15, 0),
(30, 8, 16, 0),
(31, 9, 1, 1),
(32, 9, 3, 0),
(33, 9, 7, 0),
(34, 9, 8, 0),
(35, 9, 9, 0),
(36, 9, 10, 0),
(37, 9, 11, 0),
(38, 9, 12, 0),
(39, 9, 13, 0),
(40, 9, 14, 0),
(41, 9, 15, 0),
(42, 9, 16, 0),
(43, 10, 6, 0),
(44, 11, 6, 0),
(45, 12, 6, 0),
(46, 13, 6, 0),
(47, 14, 6, 0),
(48, 15, 6, 0),
(49, 16, 6, 0),
(50, 17, 6, 0),
(51, 18, 6, 0),
(52, 19, 6, 0),
(53, 20, 6, 0),
(54, 21, 6, 0),
(55, 22, 1, 1),
(56, 22, 2, 0),
(57, 22, 2, 0),
(58, 22, 2, 0),
(59, 23, 2, 0),
(60, 23, 4, 0),
(61, 24, 1, 1),
(62, 24, 3, 0),
(63, 24, 7, 0),
(64, 24, 8, 0),
(65, 24, 9, 0),
(66, 24, 10, 0),
(67, 24, 11, 0),
(68, 24, 12, 0),
(69, 24, 13, 0),
(70, 24, 14, 0),
(71, 24, 15, 0),
(72, 24, 16, 0),
(73, 25, 1, 1),
(74, 25, 3, 0),
(75, 25, 7, 0),
(76, 25, 8, 0),
(77, 25, 9, 0),
(78, 25, 10, 0),
(79, 25, 11, 0),
(80, 25, 12, 0),
(81, 25, 13, 0),
(82, 25, 14, 0),
(83, 25, 15, 0),
(84, 25, 16, 0),
(85, 26, 1, 1),
(86, 26, 3, 0),
(87, 26, 7, 0),
(88, 26, 8, 0),
(89, 26, 9, 0),
(90, 26, 10, 0),
(91, 26, 11, 0),
(92, 26, 12, 0),
(93, 26, 13, 0),
(94, 26, 14, 0),
(95, 26, 15, 0),
(96, 26, 16, 0),
(97, 27, 1, 1),
(98, 27, 3, 0),
(99, 27, 7, 0),
(100, 27, 8, 0),
(101, 27, 9, 0),
(102, 27, 10, 0),
(103, 27, 11, 0),
(104, 27, 12, 0),
(105, 27, 13, 0),
(106, 27, 14, 0),
(107, 27, 15, 0),
(108, 27, 16, 0),
(109, 28, 1, 1),
(110, 28, 2, 0),
(111, 28, 2, 0),
(112, 28, 2, 0),
(113, 29, 1, 1),
(114, 29, 2, 0),
(115, 29, 2, 0),
(116, 29, 2, 0),
(117, 30, 1, 1),
(118, 30, 2, 0),
(119, 30, 2, 0),
(120, 30, 2, 0),
(121, 31, 1, 1),
(122, 32, 6, 0),
(123, 33, 5, 0),
(124, 34, 5, 0),
(125, 35, 5, 0),
(126, 36, 5, 0),
(127, 37, 1, 0),
(128, 37, 3, 0),
(129, 37, 7, 0),
(130, 37, 8, 0),
(131, 37, 9, 0),
(132, 37, 10, 0),
(133, 37, 11, 0),
(134, 37, 12, 0),
(135, 37, 13, 0),
(136, 37, 14, 0),
(137, 37, 15, 0),
(138, 37, 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(7, ' تحويل الطلاب ونقل قيدهم', 'يتم تحويل ونقل قيد الطلاب إلي المعهد من كليات جامعية أو معاهد مماثلة داخل الجمهورية وفقا للقواعد التي وردت بلائحة المعاهد التي صدرت بالقرار الوزاري 1088 بتاريخ 5/11/1987 وأي تعديلات تمت عليه وأي قرارات تصدر لتنظيم التحويلات بالمعاهد'),
(8, 'نظام الدراسة والامتحانات', 'اللغة العربية هي لغة التعليم بالمعهد ، ويكون أداء الامتحان باللغة التي يدرس بها المقرر.\r\nسير خطة الدراسة بالشعب الثلاثة بالمعهد على النحو التالي:\r\n1- بالنسبة لشعبة علوم الحاسب وفقاً للخطة الدراسية الموحدة لشعب علوم الحاسب المعتمدة من المجلس الأعلى للجامعات والصادر بشأنها القرار الوزاري رقم 1707 بتاريخ 11/12/2001.\r\n\r\n2- بالنسبة لشعبة الإدارة والمحاسبة وفقاً للخطة الدراسية التي تم الموافقة عليها من لجنة القطاع.\r\n\r\n3- بالنسبة لشعبة نظم المعلومات الإدارية وفقاً للخطة الدراسية الموحدة لشعبة نظم المعلومات الإدارية بعد تطويرها والمعتمدة من المجلس الأعلى للجامعات والصادر بشأنها القرار الوزاري رقم 1705 بتاريخ 11/12/2001.\r\n\r\n'),
(9, 'رعاية الطلاب', 'مــادة (58): ينشأ بالمعهد عيادة طبية مزودة بالأدوية والأدوات الطبية اللازمة للإسعافات الأولية للطلاب.\r\n\r\nمــادة (59): يكون لنظام العلاج بالمعهد لائحة داخلية يعتمدها وزير التعليم العالي.\r\n\r\nثانيا: مكتبة الطالب\r\nمــادة (60): ينشأ بالمعهد مكتبة للطالب تضم المؤلفات العامة التي لا غنى للطالب عن الرجوع إليها وذلك بهدف تقديم الخدمة المكتبية.\r\n\r\nوتسري على مكتبة الطالب أحكام اللائحة الداخلية للمكتبات التي يصدر بها قرار من وزير التعليم العالي.\r\n\r\nثالثا: الرعاية الاجتماعية\r\nمــادة (61): يصدر وزير التعليم العالي قرار باللائحة الداخلية لصناديق التكافل الاجتماعي.\r\n\r\nرابعا: دور الإقامة\r\nمــادة (62): يصدر قرار من وزير التعليم العالي بتنظيم دور الإقامة.'),
(10, 'نظام تأديب الطلاب', '1- الأعمال المخلة بنظام المعهد أو تعطيل الدراسة أو التحريض عليه وكذلك الامتناع المدبر عن حضور الدروس والمحاضرات وغيرها التي تقضي اللوائح المواظبة عليها.\r\n\r\n2- كل فعل مخل بالشرف والكرامة أو مخل بحسن السير والسلوك داخل المعهد أو خارجه.\r\n\r\n3- كل إخلال بنظام الامتحان أو الهدوء الواجب له وكل غش في امتحان أو الشروع فيه.\r\n\r\n4- كل إتلاف للمنشات أو الأجهزة أو المواد أو الكتب الجامعية أو تبديدها.\r\n\r\n5- كل تنظيم بالمعهد والاشتراك فيه دون ترخيص سابق من مجلس إدارة المعهد.\r\n\r\n6- توزيع النشرات أو إصدار جرائد حائط المعهد وجمع توقيعات دون ترخيص سابق من مدير المعهد.\r\n\r\n7- الاعتصام داخل مباني المعهد أو الاشتراك في مظاهرات مخالفة للنظام العام والآداب واللياقة.'),
(11, ' اتحاد الطلاب', '1- تنمية القيم الروحية والأخلاقية والوعي الوطني والقومي لدى الطلاب وتعويدهم على القيادة وإتاحة الفرص لهم للتعبير المسئول عن آرائهم.\r\n\r\n2- الروح الأخوية السليمة بين الطلاب وتوثيق الروابط بينهم وبين القائمين بالتدريس والعاملين.\r\n\r\n3- اكتشاف مواهب الطلاب وقدراتهم ومهاراتهم وصقلها وتشجيعها.\r\n\r\n4- نشر وتشجيع تكوين الأسر والجمعيات التعاونية الطلابية ودعم نشاطهم.\r\n\r\n5- نشر وتنظيم الأنشطة الرياضية والاجتماعية والكشفية والفنية والارتفاع بمستواهم وتشجيع المتفوقين فيها.\r\n\r\n6- تنظيم الإفادة من طاقات الطلاب في خدمة المجتمع بما يعود على الوطن بالخير.');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE IF NOT EXISTS `question_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `made_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `question_id`, `content`, `date`, `made_by`) VALUES
(1, 1, 'some nswer here b2 :DD', '2015-05-15 00:00:00', 20),
(2, 2, '2 answer here ', '2015-05-23 00:00:00', 20),
(4, 3, 'done', '2015-06-11 00:21:12', 20),
(5, 4, 'done answer', '2015-06-11 00:22:23', 20),
(6, 5, 'question content', '2015-06-11 01:02:59', 20),
(7, 15, 'alaa', '2015-06-11 02:09:14', 20),
(8, 18, 'its follla ', '2015-06-13 17:16:31', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sh2oneltlbah`
--

CREATE TABLE IF NOT EXISTS `sh2oneltlbah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE IF NOT EXISTS `site_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `map` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `phone`, `mail`, `facebook`, `twitter`, `linkedin`, `address`, `map`) VALUES
(1, '01062300489', 'met@yahoo.com', 'ahmedsamy@facebook.com', 'alaaelgndy@twitter.com', 'alaaelgndy@linkedin.com', 'egypt/nasr cite/ 40 str sity stars', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3419.366105619877!2d31.378652000000002!3d31.016048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79db9d4');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(2, 'sb1igf7t38cd0ah.jpeg'),
(3, 'r2fkwho0x4jec9s.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `facebook` text NOT NULL,
  `email` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `title`, `description`, `facebook`, `email`, `username`, `password`, `type`) VALUES
(5, 'ا/د/المتولى محمد العباسي', 'mm.jpg', 'doctor', '0', '0', '0', 'met', 'e8943058635ed598e56df44e081d4005b98c1323', 2),
(20, 'د/بهاء شبانه', '$result->image', '', 'database and gis doctor', 'https://www.facebook.com/Dr.Bahaa.Shabana', 'bahaa@gmail.com', 'bahaa', '8684810b776fc842d58d9fdf7bef82490434ce9b', 2),
(24, 'ahmed saleh', '712ug98mre0sdwv.jpg', 'doctor', 'dr ahmed sale7 ', 'https://www.facebook.com/profile.php?id=100001371978759&fref=ts', 'ahmed@yahoo.com', 'ahmedsale7', '7341a5a0313a8be6b43ee71eb88a26a37490bb74', 2),
(25, 'ادهم شافيق', '5axyv2w7cdoehbm.jpg', 'domenestor', 'adham shaefq', 'https://www.facebook.com/3m.masr?fref=ts', 'adham@yahoo.com', 'adham', '86b2a01d075b44052b51bd0e6c1cf31afc2a4092', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `year` int(11) NOT NULL,
  `pic` text NOT NULL,
  `card_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `year`, `pic`, `card_id`, `password`, `department_id`) VALUES
(1, 'ahmed samy', 4, '', 2300489, '90909090', 1),
(2, 'alaa gendy', 2, '', 0, '', 0),
(3, 'nehad samy', 4, '', 0, '', 0),
(4, 'amira gendy', 2, '', 0, '', 0),
(5, 'sherif ali', 1, '', 0, '', 0),
(6, 'ziad gendy', 3, '', 0, '', 0),
(7, 'demoksy', 4, '', 0, '', 0),
(8, 'moahmed zidan', 4, '', 0, '', 0),
(9, 'hmad', 4, '', 0, '', 0),
(10, 'bhaa ', 4, '', 0, '', 0),
(11, 'mousa', 4, '', 0, '', 0),
(12, 'ali zidan', 4, '', 0, '', 0),
(13, 'glal', 4, '', 0, '', 0),
(14, 'ablnaser ', 4, '', 0, '', 0),
(15, 'ali', 4, '', 0, '', 0),
(16, 'ziad shabory', 4, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_questions`
--

CREATE TABLE IF NOT EXISTS `student_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `answered` tinyint(4) NOT NULL DEFAULT '0',
  `q_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `student_questions`
--

INSERT INTO `student_questions` (`id`, `student_id`, `subject_id`, `content`, `status`, `answered`, `q_date`) VALUES
(1, 3, 28, 'question from student?', 0, 1, '2015-06-13 03:08:45'),
(2, 3, 28, 'question from student?', 0, 1, '2015-06-13 03:08:53'),
(3, 3, 28, 'question from student?', 0, 1, '2015-06-13 03:09:03'),
(4, 3, 28, 'question from student?', 0, 1, '2015-06-13 03:09:12'),
(5, 3, 28, 'how to do this ya doc&amp;nbsp;', 0, 1, '2015-06-11 01:02:59'),
(6, 3, 28, 'question from student?', 0, 0, '2015-06-13 03:09:24'),
(7, 3, 28, 'question from student?', 0, 0, '2015-06-13 03:09:28'),
(8, 3, 28, 'question from student?', 0, 0, '2015-06-13 03:09:32'),
(9, 3, 28, 'question from student?', 0, 0, '2015-06-13 03:09:37'),
(10, 3, 28, 'how to do it now :D', 0, 0, '2015-05-24 16:49:44'),
(11, 3, 28, 'question from student?', 0, 0, '2015-06-13 03:09:41'),
(12, 3, 28, 'question from student?', 0, 0, '2015-06-13 03:09:44'),
(13, 1, 28, '&lt;u&gt;asdkasldk;askda;l&lt;/u&gt;', 0, 0, '2015-05-24 17:15:23'),
(14, 1, 28, 'some question here noq&amp;nbsp;', 0, 0, '2015-05-24 17:52:34'),
(15, 1, 30, 'what is your name?', 0, 1, '2015-06-11 02:09:14'),
(16, 1, 28, 'alaaaaaaa', 0, 0, '2015-06-12 20:07:09'),
(17, 1, 28, 'please doctor help me ??&lt;br&gt;&lt;br&gt;', 0, 0, '2015-06-13 17:12:46'),
(18, 1, 28, 'second test questions&amp;nbsp;', 0, 1, '2015-06-13 17:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `year` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `term` enum('frist term','second term') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `doctor_id`, `name`, `description`, `year`, `department`, `term`) VALUES
(1, 20, 'Introduction to Computer &amp; Application', 'This course introduces the components of a computer system that includes hardware for data storage, data manipulation &amp; data communication. System software that include operating system, programming language translators &amp; others. First principles of writing algorithms, programming &amp; software development are introduced. The concept of computer science, information system, decision support systems &amp; information technology are to be presented.', 1, 1, 'frist term'),
(2, 20, 'Discrete Structure', 'Sets, sequence, algorithms &amp; pseudo code, induction &amp; recursion. Relation &amp; function. Graphs, Trees, posts, Lattices &amp; Boolean Algebra. Semi groups &amp; groups.', 1, 1, 'frist term'),
(3, 20, 'Physics', 'Units &amp; Dimensions, Electric charge ; Coulomb&quot;s law; Electric field, Gauss low; Electric potential; Electric capacitance &amp; capacitor; Electric current; Resistors; Kerchief&quot;s law; magnetic field &amp; forces; magnetic induction &amp; inductors; Basic circuit theory &amp; circuit analysis; fundamentals of three phase circuits &amp; transformers.', 1, 1, 'frist term'),
(4, 20, 'English (1)', 'This course used in practical exercise,. and selected from the newly techinical published sources,. Analysis methods focus on the development of the language and the capacities students in reading and understanding.', 1, 1, 'frist term'),
(5, 20, 'Structured Programming', 'Problem solving & algorithm development. Introduction to elementary data types & related operations & expressions syntax & semantics of high â€“level language such as CC++. Built in the functions in the programming language used, operator precedence , assignment statements, I/o statements Boolean expressions, relational operator, defined functions & procedures, scope & parameter matching, arrays & records, Advanced features & their application.', 1, 1, 'second term'),
(6, 1, 'Computer packages', 'Training and upgrading skills of individual study of Computer packages such as typing on the computer, design and programming proposals, packs public databases, computer graphics Packages, Internet computer packages and emerging any new packages.', 1, 1, 'second term'),
(7, 1, 'Mathematics (2)', 'Plan geom.: line, circle, conic sections equations, Space geometry: line, plan, sphere, cone, cylinder, quadratic equations. Advanced calculus: calculus of several variables, gradient, and multiple integration. Vector algebra, vector functions &amp; their derivates, motion in space, vector fields, line and surface integrals, greenâ€™s theorem, divergence theorem, and stockâ€™s theorem', 1, 1, 'second term'),
(8, 1, 'Mathematics ( 3 )', 'Elementary Course in matrix theory covering matrices, linear equations, determinates, linear transformation, eigenvulues &amp; Eigenvectors.', 2, 1, 'frist term'),
(9, 1, 'Data structures', 'Builtin data structures. Stacks, linked lists &amp; binary search trees, graphs Introduction to data abstraction &amp; basic of string processing, recursion , sorting &amp; searching algorithms &amp; efficiency considrations', 2, 1, 'frist term'),
(10, 1, 'Object oriented programming', 'The Object oriented programming course the abstraction of Encapsulation through classes and its usage ,student would be able to identify class members types, to use references and pointers, to identify the constructor and destructor of a class and to differentiate between functions and class template . OOP approache would be introduced such as: Inheritance, Overloading, Polymorphism, and exception handling', 2, 1, 'frist term'),
(11, 1, 'Logic design', 'Terminology &amp; understanding of physical components used in computer Hardware. Number system &amp; codes: logic gates, Boolean algebra &amp; graphical simplification of boolean expressions, Combinational circuits; latches &amp; flip-flops: analysis &amp; design of synchronous sequential circuits; registers &amp; counters, Storage elements are introduced to aide the computer logic design.', 2, 1, 'frist term'),
(12, 1, 'Humanities', 'Perception , Learning motivation & value , individual difference &  work performance, understanding and motivating oneself & others,  working within groups, achieving success through goal setting  Achieving high personal productivity and quality, achieving rewarding  & satisfying career, communicating with people, leading & influencing  Others, building relationships with supervisors, coworkers & customers.', 1, 1, 'frist term'),
(13, 1, 'System Analysis', 'Managerial & organizational fundamentals , systems planning , job  description, roles, career, skills, ethicsâ€¦etc of modern systems analyst. Information systems building blocks , Information system  development, using CASE tools, cross life activities , Data modeling , Process modeling network modeling, object modeling.', 1, 1, 'second term'),
(14, 1, 'File organization &amp; processing', 'Overview of files: File design, file manipulation, blocking, single  buffering &amp; double buffering. Sequential file, relative file, indexed  sequential file, multiple Key file &amp; direct access file. External  Sort/Merge algorithms. File systems disk scheduling &amp; accessing modes.', 2, 1, 'second term'),
(15, 1, 'Probability &amp; Statistics', 'Review of the sampling theory and statistical distributions, Introduction to  The probabilities â€“ random variables ( calculating average, dispersion, standard  Deviation ) â€“ probabilities distributions ( normal distribution â€“ the distribution of  MTV â€“ Distribution Key ), review of the theory of sampling â€“ correlation  Regression â€“ sampling.', 2, 1, 'second term'),
(16, 1, 'Computer Organization &amp; Assembly Language', 'Computer basic unit organization: Memory, control, arithmetic &amp; logic unit.  Computer cycles: Fetch, indirect addressing, execute &amp; interrupt. Hardwired  versus microprogramming control organization .I/O devices &amp; interrupts handing. Assembly language is used in the lab, to demonstrate the Assembly language programming.', 2, 1, 'second term'),
(17, 1, 'Humanities (Elective )', 'Functions of management: Planning: Organizational objectivesâ€“fundamentals of  Planning â€“ decision makingâ€“ strategic planning - plans &amp; planning tools. Organizing: Fundamentals of organizing â€“responsibility, authority&amp; delegation â€“  Organizational change &amp; stress Staffing &amp; Leading: Leadership â€“ motivation â€“  Groups teams &amp; corporate culture. Controlling: principles of Controlling  Modern management.', 2, 1, 'second term'),
(18, 1, 'Database Systems', 'Introduction , File systems Vs database systems, Database systems Components &amp; concepts, functionality of DBMSS. Database architecture and Models. Relational database concepts: Keys, integrity constrains, views &amp; catalogs.  Relational algebra, Entity â€“ relationship models and normalization.', 3, 1, 'frist term'),
(19, 1, 'Operating systems', 'Basic concepts of computer systems hardware, software &amp; firmware, process concepts &amp; processor scheduling. Memory organization &amp; management for single user &amp; multi-user systems. Virtual storage organization &amp; management. Disks scheduling &amp; its optimization discussion of major operating system such a UNIX. Laboratory work on many control programs as well as practice on a single &amp; multi-user systems.', 3, 1, 'frist term'),
(20, 20, 'System design', 'Systems design &amp; construction. Cross life cycle activities. Application architecture &amp; process design. Database design. Input design &amp; Output design, User interface design and prototyping. Software design. Object oriented design, Systems implementation and Systems support.', 3, 1, 'frist term'),
(21, 20, 'Human computer interfaces', 'The relationship between people &amp; machine, the role of human factors &amp; psychology. Principles of interaction, interface design issues. Command languages, menus, windows, icons error messages, response time. Physical interaction, devises, interaction styles &amp; techniques. The design process &amp; user models. Interface evaluation; natural language &amp; voice interfaces.', 3, 1, 'frist term'),
(22, 20, 'Elective Course (Computer modeling &amp; simulation)', 'System models &amp; simulation discrete event simulation Simulation languages. Principles of valid simulation modeling. Verification of simulation computer programs. An approach for developing valid &amp; credible simulation models.. Some practical considerations: selecting input probability distributions and random number generators. Petri net. Fuzzy models and Genetic models are used as application models.', 3, 1, 'frist term'),
(23, 20, 'Computer networks', 'Topology, structure, & architecture of computer networks. Layered protocols in point-to-point, broadcasting, & local area networks. The structure of some notable & public networks. Training on using LAN & WAN networks.', 1, 1, 'frist term'),
(24, 20, 'Computer graphics', 'Graphics algorithms, 2D and 3D concepts are introduced, Graphics hardware, basic raster 3D transformation, synthesized camera models, curve &amp; surface representation, lightening models, shading techniques, shadows, texture mapping, and transparency.', 3, 1, 'second term'),
(25, 1, 'Software Engineering (1)', 'The software life cycle Requirements analysis, specification &amp; validation. Software design methodologies: data structure oriented design, object oriented design &amp; Software reusability. Design quality &amp; design description languages. Rapid prototyping &amp; iterative refinements .', 3, 1, 'second term'),
(26, 1, 'Logic Programming', 'Introduction: Facts, objects &amp; predicates. Prolog variables: Using variables, bound &amp; free variables, anonymous variables, compound goals, backtracking, variables rules. Using rules , Rules, prolog execution rules, using the trace, unification, execution control, the built in predicate. Simple I&amp;O. Controlling execution: Success through failure, the fail predicate, execution using the fail predicate, recursion &amp; the cut. Arithmetic operations. Compound objects. Dynamic database, lists. String operations.', 3, 1, 'second term'),
(27, 1, 'Elective Course (Analysis &amp; design of algorithms)', 'Algorithm concept. Analysis &amp; complexity. Design methods such as Divide &amp; conquer, concept passing through, binary search, merge sort, quick sort, selection and matrix multiplication. Greedy method concept passing through, shortest paths, optimal search trees &amp; the traveling salesman problem. Backtracking: the general method, the 8 queens. NP complete problem: Cook&quot;s theorem, NP hard graph problem, Magic square, Combinational algebra.', 3, 1, 'second term'),
(28, 20, 'Artificial intelligent', 'Heuristic approach to problem solving. Different searching methods and heuristic search , logic and theorem provinge , knowledge representation . some application of AI as thom proving , game palying, and natural language processing', 4, 1, 'frist term'),
(29, 1, 'Network programming', 'Overview of internet protocols (HTTP, FTP, SMTP, POP3). Using HTML to construct web pages (fonts, colors, lists, hyperlinks, tables, images, creating animated GIFS, clickable image maps, sound, video, frames). Using JavaScript language to add dynamic environment &amp; interactivity to web pages. Active server pages (ASP).', 4, 1, 'frist term'),
(30, 1, 'Software engineering (2)', 'Software quality assurance : software metrics , software measurements , software reliability models , software quality assurance standards , software testing techniques , weight box testing . Basic path testing, black box testing. unit testing , integration testing , validation testing , system testing , software maintenance , maintainability , maintenance tasks , software configuration management .', 4, 1, 'frist term'),
(31, 1, '(computer vision)', 'Theories about the operation of the human visual system. Image understanding. Practical applications in robotics. Edge detection shape from shading. Stereo pies. Optical flow. Fourier methods. Gradient space. Model-based computer vision: 2-d &amp;3-d representations, matching. Constrain relaxation, model-based vision systems.', 4, 1, 'frist term'),
(32, 1, 'Project', 'The general aim of the project is to allow each student to work in a team to integrate all the disciplines that are previously studied in unified chunk of knowledge.', 4, 1, 'frist term'),
(33, 1, 'Expert System', 'Expert system components: knowledge base, inference engine, user inference. Knowledge acquisition methods. Knowledge representation: rules frames â€¦ect. Inference engine design. Hands on experience by developing prototype expert system using expert system shell.', 4, 1, 'second term'),
(34, 1, 'Multimedia', 'Multimedia components predictive &amp; transform coding techniques. Vector quantization. Dictionary based text coding. Entropy encoding. Arithmatic coding. JPEG &amp; MPEG standards. Motion estimation techniques. Multimedia database. Image retrieval by contents. Networking of multimedia transmission.', 4, 1, 'second term'),
(35, 1, 'Elective Course (compiler theory )', 'Scanning-theory .Grammar parsing &amp; recognizers grammar analysis algorithms. Semantic processing. Techniques . Runtime storage organization &amp; program layout in memory. data structure, statements routines , procedures and functions passing parameters to subprograms . Code generation &amp; optimization: register &amp; temporary management, interpretive code generation, generating code from trees &amp; tags, optimizing calls, loop optimizations.', 4, 1, 'second term'),
(36, 1, 'Elective Course( VLSI Programming )', 'Introduction to design techniques &amp; tools to design large-scale integrated circuits. the goals are to design &amp; analyze digital integrated circuits in CMOS technology and to use modern computer aided design tools the approach is to start studying at the transistor level &amp; then have them gradually build up to inverter &amp; small logic circuits. Simulation &amp; verification principles of validation &amp; testing of manufactured chips important trends in modern design such as MCM (multi â€“ chip modules) &amp; FPGA (field â€“ programming gate arrays) technology.', 4, 1, 'second term'),
(37, 1, 'Project', 'The general aim of the project is to allow each student to work in a team to integrate all the disciplines that are previously studied in unified chunk of knowledge.', 4, 1, 'second term'),
(38, 1, '(ØªØ·ÙˆØ± Ø§Ù„ÙÙƒØ± Ø§Ù„ØªÙƒÙ†ÙˆÙ„ÙˆØ¬ÙŠ Ùˆ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø©)', 'Ø§Ù„ØªØ¹Ø±ÙŠÙ Ø¨Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© ÙˆØ£Ù‡Ù…ÙŠØªÙ‡Ø§ØŒ ØªØ·ÙˆØ± Ø§Ù„ÙÙƒØ± Ø§Ù„Ø¥Ø¯Ø§Ø±ÙŠØŒ ÙˆØ¸Ø§Ø¦Ù Ø§Ù„Ø¥Ø¯Ø§Ø±Ø©: Ø§Ù„ØªØ®Ø·ÙŠØ·ØŒ Ø§Ù„ØªÙ†Ø¸ÙŠÙ…ØŒ Ø§Ù„ØªÙˆØ¬ÙŠÙ‡ ÙˆØ§Ù„Ù‚ÙŠØ§Ø¯Ø©ØŒ Ø§Ù„Ø±Ù‚Ø§Ø¨Ø©ØŒ Ø§ØªØ®Ø§Ø° Ø§Ù„Ù‚Ø±Ø§Ø±Ø§Øª.', 1, 2, 'frist term'),
(39, 1, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© (1)', 'ØªØ¹Ø±ÙŠÙ Ùˆ ØªØ­Ù„ÙŠÙ„ Ù†Ø¸Ø§Ù… Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© Ùˆ Ù…Ù†Ø·Ù‚ ØªØ´ØºÙŠÙ„ Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§ØªØŒ Ø§Ù„Ù‚ÙŠØ¯ Ø§Ù„Ù…Ø²Ø¯ÙˆØ¬ØŒ Ù…Ø¹Ø§Ø¯Ù„Ø© Ø§Ù„Ù…ÙŠØ²Ø§Ù†ÙŠØ© ÙƒØ£Ø³Ø§Ø³ Ù„Ù„ØªØ³Ø¬ÙŠÙ„ØŒ Ø§Ù„ØªØ´ØºÙŠÙ„ Ø§Ù„ÙŠØ¯ÙˆÙŠ Ù„Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§ØªØŒ Ø§Ù„Ù…Ø¹Ø§Ù„Ø¬Ø© Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© Ù„Ø¹Ù…Ù„ÙŠØ§Øª Ø±Ø§Ø³ Ø§Ù„Ù…Ø§Ù„ ÙˆØ§Ù„Ø¨Ø¶Ø§Ø¹Ø© Ùˆ Ø§Ù„Ø¥ÙŠØ±Ø§Ø¯Ø§Øª Ùˆ Ø§Ù„Ù…ØµØ±ÙˆÙØ§Øª Ùˆ Ù…Ø¹ Ø§Ù„Ø¨Ù†ÙˆÙƒ Ùˆ Ø§Ù„Ø£ÙˆØ±Ø§Ù‚ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©ØŒ Ø§Ù„ÙŠÙˆÙ…ÙŠØ§Øª Ø§Ù„Ù…Ø³Ø§Ø¹Ø¯Ø© ÙˆØ§Ù„Ø³Ø¬Ù„Ø§Øª Ø§Ù„Ù…Ø³Ø§Ø¹Ø¯Ø©ØŒ Ù…ÙˆØ§Ø²ÙŠÙ† Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø© Ùˆ Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ù†ØªÙŠØ¬Ø© Ùˆ Ø§Ù„Ù…ÙŠØ²Ø§Ù†ÙŠØ© Ùˆ Ø§Ù„Ø¬Ø±Ø¯.', 1, 2, 'frist term'),
(40, 1, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© (1)', 'ØªØ¹Ø±ÙŠÙ Ùˆ ØªØ­Ù„ÙŠÙ„ Ù†Ø¸Ø§Ù… Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© Ùˆ Ù…Ù†Ø·Ù‚ ØªØ´ØºÙŠÙ„ Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§ØªØŒ Ø§Ù„Ù‚ÙŠØ¯ Ø§Ù„Ù…Ø²Ø¯ÙˆØ¬ØŒ Ù…Ø¹Ø§Ø¯Ù„Ø© Ø§Ù„Ù…ÙŠØ²Ø§Ù†ÙŠØ© ÙƒØ£Ø³Ø§Ø³ Ù„Ù„ØªØ³Ø¬ÙŠÙ„ØŒ Ø§Ù„ØªØ´ØºÙŠÙ„ Ø§Ù„ÙŠØ¯ÙˆÙŠ Ù„Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§ØªØŒ Ø§Ù„Ù…Ø¹Ø§Ù„Ø¬Ø© Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© Ù„Ø¹Ù…Ù„ÙŠØ§Øª Ø±Ø§Ø³ Ø§Ù„Ù…Ø§Ù„ ÙˆØ§Ù„Ø¨Ø¶Ø§Ø¹Ø© Ùˆ Ø§Ù„Ø¥ÙŠØ±Ø§Ø¯Ø§Øª Ùˆ Ø§Ù„Ù…ØµØ±ÙˆÙØ§Øª Ùˆ Ù…Ø¹ Ø§Ù„Ø¨Ù†ÙˆÙƒ Ùˆ Ø§Ù„Ø£ÙˆØ±Ø§Ù‚ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©ØŒ Ø§Ù„ÙŠÙˆÙ…ÙŠØ§Øª Ø§Ù„Ù…Ø³Ø§Ø¹Ø¯Ø© ÙˆØ§Ù„Ø³Ø¬Ù„Ø§Øª Ø§Ù„Ù…Ø³Ø§Ø¹Ø¯Ø©ØŒ Ù…ÙˆØ§Ø²ÙŠÙ† Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø© Ùˆ Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ù†ØªÙŠØ¬Ø© Ùˆ Ø§Ù„Ù…ÙŠØ²Ø§Ù†ÙŠØ© Ùˆ Ø§Ù„Ø¬Ø±Ø¯.', 1, 2, 'frist term'),
(41, 1, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯', 'Ø£Ø³Ø§Ø³ÙŠØ§Øª Ø§Ù„Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ© Ù…Ù† Ø²Ø§ÙˆÙŠØ© Ø§Ù„Ù…Ø¨Ø§Ø¯Ø¦ Ùˆ Ø§Ù„Ù‚ÙˆØ§Ø¹Ø¯ØŒ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ Ø§Ù„Ø¬Ø²Ø¦ÙŠØŒ Ø§Ù„Ù†Ø¸Ù… Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ©ØŒ ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ù…Ù†ÙØ¹Ø©ØŒ Ø³Ù„ÙˆÙƒ Ø§Ù„Ù…Ø³ØªÙ‡Ù„Ùƒ Ùˆ Ø§Ù„Ø·Ù„Ø¨ Ø¹Ù„Ù‰ Ø§Ù„Ø¥Ù†ØªØ§Ø¬ØŒ Ø¹Ø±Ø¶ Ø§Ù„Ø¥Ù†ØªØ§Ø¬ Ùˆ Ù†ÙÙ‚Ø§ØªÙ‡ØŒ Ù…Ø±ÙˆÙ†Ø© Ø§Ù„Ø·Ù„Ø¨ Ùˆ Ø§Ù„Ø¹Ø±Ø¶ØŒ ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ø£Ø«Ù…Ø§Ù†ØŒ Ø§Ù‚ØªØµØ§Ø¯ÙŠØ§Øª Ø§Ù„Ø£Ø³ÙˆØ§Ù‚ØŒ Ùˆ ØªÙˆØ²ÙŠØ¹ Ø§Ù„Ø¯Ø®Ù„. Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ Ø§Ù„ÙƒÙ„Ù‰: Ù†Ø·Ø§Ù‚ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ Ø§Ù„ÙƒÙ„Ù‰ Ùˆ Ø£Ù‡Ù…ÙŠØªÙ‡ØŒ Ø§Ù„Ù†Ø§ØªØ¬ Ø§Ù„Ù‚ÙˆÙ…ÙŠ Ø§Ù„Ø§Ø¬Ù…Ø§Ù„Ù‰ Ùˆ Ù‚ÙŠØ§Ø³ Ø§Ù„Ø£Ø¯Ø§Ø¡ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ Ø§Ù„ÙƒÙ„Ù‰ ÙÙ‰ Ø§Ù„ÙÙƒØ± Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠØŒ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ Ø§Ù„ÙƒÙ„Ù‰ ÙÙ‰ Ø§Ù„ÙÙƒØ± Ø§Ù„Ø­Ø¯ÙŠØ« ( Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„ÙƒÙ„Ù‰ØŒ Ø§Ù„Ø¹Ø±Ø¶ Ø§Ù„ÙƒÙ„Ù‰ ÙˆÙ…Ø­Ø¯Ø¯Ø§ØªÙ‡). Ø§Ù„Ù†Ù‚ÙˆØ¯ ÙˆØ§Ù„Ø¬Ù‡Ø§Ø² Ø§Ù„Ù…ØµØ±ÙÙŠØŒ Ø§Ù„Ù†Ù‚ÙˆØ¯ Ùˆ Ø§Ù„ØªÙˆØ¸ÙŠÙ ÙÙ‰ Ø§Ù„ÙÙƒØ± Ø§Ù„Ø­Ø¯ÙŠØ«ØŒ Ø§Ù„ØªÙ†Ù…ÙŠØ© Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ©ØŒ Ø§Ù„ØªØ¬Ø§Ø±Ø© Ùˆ Ø§Ù„Ù…Ø¯ÙÙˆØ¹Ø§Øª Ø§Ù„Ø¯ÙˆÙ„ÙŠØ©.', 1, 2, 'frist term'),
(42, 1, 'Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠØ§Øª (1)', 'Ù…Ø±Ø§Ø¬Ø¹Ø© Ø¹Ù„Ù‰ Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ø¬Ø¨Ø±ØŒ Ø§Ù„Ø¥Ø¹Ø¯Ø§Ø¯ Ø§Ù„Ø­Ù‚ÙŠÙ‚ÙŠØ©ØŒ Ø§Ù„Ù…Ø¹Ø§Ø¯Ù„Ø§Øª Ø§Ù„Ø®Ø·ÙŠØ©ØŒ ØªØ·Ø¨ÙŠÙ‚Ø§Øª ØªØ¬Ø§Ø±ÙŠØ© Ø¹Ù„Ù‰ Ø§Ù„Ù…Ø¹Ø§Ø¯Ù„Ø§Øª Ø§Ù„Ø®Ø·ÙŠØ©ØŒ Ø§Ù„Ø¯ÙˆØ§Ù„ Ùˆ ØªÙ…Ø«ÙŠÙ„Ù‡Ø§ Ø¨ÙŠØ§Ù†ÙŠØ§ØŒ ØªØ·Ø¨ÙŠÙ‚Ø§Øª Ø¹Ù„Ù‰ Ø§Ù„Ø¯ÙˆØ§Ù„ Ø§Ù„Ø®Ø·ÙŠØ©ØŒ Ø§Ù„Ø¨Ø±Ù…Ø¬Ø© Ø§Ù„Ø®Ø·ÙŠØ©ØŒ Ø§Ù„Ù…ØªÙˆØ§Ù„ÙŠØ§ØªØŒ Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø§Ø­ØªÙ…Ø§Ù„Ø§ØªØŒ Ø§Ù„Ù†Ù‡Ø§ÙŠØ§ØªØŒ Ø§Ù„ØªÙØ§Ø¶Ù„ØŒ ØªØ·Ø¨ÙŠÙ‚Ø§Øª ØªØ¬Ø§Ø±ÙŠØ© Ø¹Ù„Ù‰ Ø§Ù„ØªÙØ§Ø¶Ù„ØŒ Ø§Ù„ØªÙƒØ§Ù…Ù„ØŒ ØªØ·Ø¨ÙŠÙ‚Ø§Øª ØªØ¬Ø§Ø±ÙŠØ© Ø¹Ù„Ù‰ Ø§Ù„ØªÙƒØ§Ù…Ù„.', 1, 2, 'frist term'),
(43, 1, 'Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¹Ø§Ù…Ø©', 'Ù…Ø§ Ù‡Ù‰ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¹Ø§Ù…Ø© ÙˆØ®ØµØ§Ø¦ØµÙ‡Ø§ØŒ Ø¨ÙŠØ¦Ø© Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¹Ø§Ù…Ø©ØŒ Ù…Ø¯Ø§Ø®Ù„ Ø¯Ø±Ø§Ø³Ø© Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¹Ø§Ù…Ø©ØŒ Ø§Ù„ØªØ®Ø·ÙŠØ· ÙÙŠ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¹Ø§Ù…Ø©ØŒ Ø§Ù„ØªÙ†Ø¸ÙŠÙ… Ø§Ù„Ø¥Ø¯Ø§Ø±ÙŠØŒ ØªØ¹ÙŠÙŠÙ† ÙˆØ§Ù†ØªÙ‚Ø§Ø¡ Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø¨Ø´Ø±ÙŠØ© ÙˆØ§Ø®ØªÙŠØ§Ø± Ø§Ù„Ù…ÙˆØ¸Ù Ø§Ù„Ø¹Ø§Ù…ØŒ Ø§Ù„Ù‚ÙŠØ§Ø¯Ø© Ø§Ù„Ø§Ø¯Ø§Ø±ÙŠØ©ØŒ Ø§Ù„Ø±Ù‚Ø§Ø¨Ø© Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„Ø¹Ø§Ù…Ø©ØŒ Ø§Ù„Ø¨ÙŠØ±ÙˆÙ‚Ø±Ø§Ø·ÙŠØ©ØŒ Ø§Ù„ØªØºÙŠÙŠØ± ÙˆØ§Ù„ØªØ·ÙˆÙŠØ± Ø§Ù„Ø¥Ø¯Ø§Ø±ÙŠØŒ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø­Ù„ÙŠØ© ÙÙŠ Ù…ØµØ±ØŒ Ø§Ù„Ø­ÙƒÙˆÙ…Ø© Ø§Ù„Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©ØŒ Ø§Ù„Ø´ÙØ§ÙÙŠØ© Ø§Ù„Ø§Ø¯Ø§Ø±ÙŠØ©ØŒ Ø¬ÙˆØ¯Ø© Ø§Ù„Ø®Ø¯Ù…Ø§Øª Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ©.', 1, 2, 'frist term'),
(44, 1, 'Ù…Ø¯Ø®Ù„ Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø¢Ù„ÙŠ Ù„Ù„ØªØ¬Ø§Ø±ÙŠÙŠÙ†', 'ØªØ¹Ø±ÙŠÙ Ø§Ù„Ø­Ø§Ø³Ø¨ØŒ Ø§Ù„Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ù…Ø®ØªÙ„ÙØ© Ù„Ù„Ø­Ø§Ø³Ø¨Ø§ØªØŒ Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø±Ù‚Ù…ÙŠØŒ Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„ØªÙ…Ø«ÙŠÙ„ÙŠØŒ Ø­Ø§Ø³Ø¨ Ø§Ù„Ø£ØºØ±Ø§Ø¶ Ø§Ù„Ø¹Ø§Ù…Ø©ØŒ Ø­Ø§Ø³Ø¨ Ø§Ù„Ø£ØºØ±Ø§Ø¶ Ø§Ù„Ø®Ø§ØµØ©ØŒ Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ù…Ø®ØªÙ„Ø·ØŒ Ù…Ø¹Ù…Ø§Ø±ÙŠØ© Ø§Ù„Ø­Ø§Ø³Ø¨ØŒ Ø§Ù„Ù…ÙƒÙˆÙ†Ø§Øª Ø§Ù„Ù…Ø§Ø¯ÙŠØ© Ù„Ù„Ø­Ø§Ø³Ø¨ØŒ ÙˆØ­Ø¯Ø§Øª Ø§Ù„Ø¥Ø¯Ø®Ø§Ù„ Ùˆ Ø§Ù„Ø¥Ø®Ø±Ø§Ø¬ØŒÙˆØ³Ø§Ø¦Ø· Ø§Ù„ØªØ®Ø²ÙŠÙ†,Ø£Ù†ÙˆØ§Ø¹ Ø°Ø§ÙƒØ±Ø© Ø§Ù„Ø­Ø§Ø³Ø¨, ÙˆØ­Ø¯Ø© Ø§Ù„Ø­Ø³Ø§Ø¨ ÙˆØ§Ù„Ù…Ù†Ø·Ù‚,Ø¨Ø±Ù…Ø¬ÙŠØ§Øª Ø§Ù„Ø­Ø§Ø³Ø¨, ØªØ·ÙˆÙŠØ± Ø§Ù„Ø¨Ø±Ù…Ø¬ÙŠØ§Øª, Ù„ØºØ§Øª Ø§Ù„Ø¨Ø±Ù…Ø¬Ø©, Ø§Ù„Ø§ØªØµØ§Ù„Ø§Øª ÙˆØ±Ø¨Ø· Ø§Ù„Ø­Ø§Ø³Ø¨Ø§Øª, ØªØ·ÙˆÙŠØ± Ø§Ù„Ù†Ø¸Ù…, Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª, Ù†Ø¸Ù… Ø¥Ø¯Ø§Ø±Ø© Ù‚ÙˆØ§Ø¹Ø¯ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª ÙˆØªØ·Ø¨ÙŠÙ‚Ø§ØªÙ‡Ø§, Ø¬Ø±Ø§Ø¦Ù… Ø§Ù„Ø­Ø§Ø³Ø¨Ø§Øª ÙˆØ·Ø±Ù‚ Ø§Ù„ØªØ§Ù…ÙŠÙ†, ØªØ£Ø«ÙŠØ± Ø§Ù„Ø­Ø§Ø³Ø¨Ø§Øª Ø¹Ù„Ù‰ ØµØ­Ø© Ø§Ù„Ø¥Ù†Ø³Ø§Ù†. Ù…Ù‚Ø¯Ù…Ø© Ø¨Ø±Ù…Ø¬Ø© Ù„ØºØ© Ø¨Ø§Ø³ÙƒØ§Ù„: Ø§Ù„ØªØ¹Ø¯ÙŠÙ„Ø§Øª Ø§Ù„Ø­Ø³Ø§Ø¨ÙŠØ©, Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª Ø§Ù„ÙˆØ³ÙŠØ·Ø©, Ø¬Ù…Ù„ Ø§Ù„Ø¯Ø®Ù„ ÙˆØ§Ù„Ø®Ø±Ø¬, Ø¬Ù…Ù„ Ø§Ù„ØªØ­ÙƒÙ… Ø§Ù„Ø´Ø±Ø·ÙŠØ©, Ø¬Ù…Ù„ Ø§Ù„ØªÙƒØ±Ø§Ø±.', 1, 2, 'frist term'),
(45, 1, 'Ø£ØµÙˆÙ„ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© (2)', 'Ø§Ù„Ù…ÙØ§Ù‡ÙŠÙ… Ø§Ù„Ø¥Ø¯Ø§Ø±ÙŠØ© Ø§Ù„Ø­Ø¯ÙŠØ«Ø©: Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¬ÙˆØ¯Ø© Ø§Ù„Ø´Ø§Ù…Ù„Ø©ØŒ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø§Ø³ØªÙŠØ±Ø§ØªÙŠØ¬ÙŠØ©ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø£Ø²Ù…Ø§ØªØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø¹Ø±ÙØ©ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØªØºÙŠØ± ÙˆØ§Ù„ØªØ·ÙˆØ±ØŒ Ø§Ù„Ù…Ø³Ø¦ÙˆÙ„ÙŠØ© Ø§Ù„Ø§Ø¬ØªÙ…Ø§Ø¹ÙŠØ© Ù„Ù„Ù…Ù†Ø¸Ù…Ø§ØªØŒ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©ØŒ Ø§Ù„Ù…Ù†Ø¸Ù…Ø© Ø§Ù„Ù…Ø¹Ù„Ù…Ø© ( L. O ).', 1, 2, 'second term'),
(46, 1, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© (2)', 'Ø£Ø¹Ø¯Ø§Ø¯ Ø§Ù„Ù‚ÙˆØ§Ø¦Ù… Ø§Ù„Ù…Ø§Ù„ÙŠØ© Ø§Ù„Ø®ØªØ§Ù…ÙŠØ©, Ù…Ø¨Ø§Ø¯Ø¦ ÙˆÙ‚ÙˆØ§Ø¹Ø¯ Ø§Ù„Ø¬Ø±Ø¯, Ø¬Ø±Ø¯ Ø§Ù„Ù…Ø®Ø²ÙˆÙ† Ø§Ù„Ø³Ù„Ø¹ÙŠ, Ø¬Ø±Ø¯ Ø§Ù„Ø£ØµÙˆÙ„ Ø§Ù„Ø«Ø§Ø¨ØªØ©, Ø¬Ø±Ø¯ Ø§Ù„Ù…Ø¯ÙŠÙ†ÙŠÙ†, Ø¬Ø±Ø¯ Ø§Ù„Ø£ÙˆØ±Ø§Ù‚ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©, Ø¬Ø±Ø¯ Ø§Ù„Ø§Ø³ØªØ«Ù…Ø§Ø±Ø§Øª, Ø¬Ø±Ø¯ Ø§Ù„Ù…ØµØ±ÙˆÙØ§Øª ÙˆØ§Ù„Ø¥ÙŠØ±Ø§Ø¯Ø§Øª , Ø¬Ø±Ø¯ Ø§Ù„Ø®ØµÙˆÙ….', 1, 2, 'second term'),
(47, 1, 'Ø§Ù„Ø³Ù„ÙˆÙƒ Ø§Ù„ØªÙ†Ø¸ÙŠÙ…ÙŠ', 'ØªØ·ÙˆØ± Ø§Ù„Ø§Ù‡ØªÙ…Ø§Ù… Ø¨Ø§Ù„Ø¥Ù†Ø³Ø§Ù† ÙÙ‰ Ø§Ù„Ø¹Ù…Ù„ØŒ Ù…Ø­Ø¯Ø¯Ø§Øª Ø§Ù„Ø³Ù„ÙˆÙƒ Ø§Ù„Ø§Ù†Ø³Ø§Ù†Ù‰ ÙÙ‰ Ø§Ù„Ø¹Ù…Ù„ØŒ Ø§Ù„Ù…Ø­Ø¯Ø¯Ø§Øª Ø§Ù„Ø´Ø®ØµÙŠØ© Ù…Ø«Ù„ (Ø§Ù„Ø¯Ø§ÙØ¹ÙŠØ©ØŒ Ø§Ù„Ø§ØªØ¬Ø§Ù‡Ø§ØªØŒ Ø§Ù„Ù‚ÙŠÙ…ØŒ Ø§Ù„Ø¥Ø¯Ø±Ø§Ùƒ ÙˆØ§Ù„ØªØ¹Ù„Ù…ØŒ Ø§Ù„Ø´Ø®ØµÙŠØ© ÙƒÙƒÙ„ ) Ù…Ø­Ø¯Ø¯Ø§Øª Ø¬Ù…Ø§Ø¹ÙŠØ© ÙˆØªÙ†Ø¸ÙŠÙ…ÙŠØ© Ù…Ø«Ù„ (Ø³Ù„ÙˆÙƒ Ø§Ù„Ø¬Ù…Ø§Ø¹Ø§Øª ØºÙŠØ± Ø§Ù„Ø±Ø³Ù…ÙŠØ©ØŒ Ø§Ù„Ù‚ÙŠØ§Ø¯Ø©ØŒ Ù…Ø­Ø¯Ø¯Ø§Øª Ø¬Ù…Ø§Ø¹ÙŠØ© Ø§Ù„Ø§ØªØµØ§Ù„Ø§Øª ) Ø¨Ø¹Ø¶ Ø§Ù„Ø¬ÙˆØ§Ù†Ø¨ Ø§Ù„ØªØ·Ø¨ÙŠÙ‚ÙŠØ© Ù…Ø«Ù„ ( Ø§Ù„Ø±Ø¶Ø§ Ø¹Ù† Ø§Ù„Ø¹Ù…Ù„ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØµØ±Ø§Ø¹ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØµØ±Ø§Ø¹ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¶ØºÙˆØ·ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØªØºÙŠÙŠØ±ØŒ Ø§Ù„ØªØ·ÙˆÙŠØ± Ø§Ù„ØªÙ†Ø¸ÙŠÙ…ÙŠ).', 1, 2, 'second term'),
(48, 1, 'Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ ÙˆØ§Ù„ØªØ·ÙˆØ± Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ', 'Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ©:Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ© ( Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø¨Ø´Ø±ÙŠØ©: Ø§Ù„ØªØ­Ù„ÙŠÙ„ Ø§Ù„ÙƒÙ…Ù‰ , Ø§Ù„ØªØ­Ù„ÙŠÙ„ Ø§Ù„ÙƒÙŠÙÙ‰ ).  Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø²Ø±Ø§Ø¹ÙŠØ©( Ø§Ù„Ø§Ø±Ø§Ø¶Ù‰ Ø§Ù„Ù…ØªØ§Ø­Ø© Ù„Ù„Ø²Ø±Ø§Ø¹Ø©, Ø§Ù„Ø¹ÙˆØ§Ù…Ù„ Ø§Ù„Ù…Ø¤Ø«Ø±Ø© ÙÙ‰ Ø§Ù„Ø²Ø±Ø§Ø¹Ø©, Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ø²Ø±Ø§Ø¹Ø©, Ø¯ÙˆØ± Ø§Ù„Ø²Ø±Ø§Ø¹Ø© ÙÙ‰ Ø§Ù„ØªÙ†Ù…ÙŠØ© Ø§Ù„Ø²Ø±Ø§Ø¹ÙŠØ©, Ù…Ø´Ø§ÙƒÙ„ Ø§Ù„ØºØ°Ø§Ø¡ ÙÙ‰ Ø§Ù„Ø¹Ø§Ù„Ù… ). Ø§Ù„ÙˆÙ‚ÙˆØ¯ ÙˆØ§Ù„Ø·Ø§Ù‚Ø© ( Ø£Ù‡Ù…ÙŠØ© Ø§Ù„Ø·Ø§Ù‚Ø©, Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ø·Ø§Ù‚Ø©, Ø£Ø²Ù…Ø© Ø§Ù„Ø·Ø§Ù‚Ø© ). Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠØ© (Ø£Ù‡Ù…ÙŠØ© Ø§Ù„Ù…Ø¹Ø§Ø¯Ù†, Ø§Ø³ØªØºÙ„Ø§Ù„ Ø§Ù„Ù…Ø¹Ø§Ø¯Ù†). Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ©: Ø§Ù„ØªØ·ÙˆØ± Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ ÙÙ‰ Ù…ØµØ±, Ø§Ù„ØªØ·ÙˆØ± Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ ÙÙ‰ Ø£ÙˆØ±ÙˆØ¨Ø§ ÙˆØ§Ù„ÙˆÙ„Ø§ÙŠØ§Øª Ø§Ù„Ù…ØªØ­Ø¯Ø© Ø§Ù„Ø£Ù…Ø±ÙŠÙƒÙŠØ©', 1, 2, 'second term'),
(49, 1, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†', 'Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†: ØªØ¹Ø±ÙŠÙ Ø§Ù„Ù‚Ø§Ø¹Ø¯Ø© Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†ÙŠØ©, Ø®ØµØ§Ø¦ØµÙ‡Ø§, ÙØ±ÙˆØ¹ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†, ØªÙ…ÙŠÙŠØ² Ø§Ù„Ù‚Ø§Ø¹Ø¯Ø© Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†ÙŠØ© Ø¹Ù† ØºÙŠØ±Ù‡Ø§ Ù…Ù† Ø§Ù„Ù‚ÙˆØ§Ø¹Ø¯ Ø§Ù„Ø§Ø¬ØªÙ…Ø§Ø¹ÙŠØ©, Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ù‚ÙˆØ§Ø¹Ø¯ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†ÙŠØ©, Ù…ØµØ§Ø¯Ø± Ø§Ù„Ù‚Ø§Ù†ÙˆÙ† Ø§Ù„Ø±Ø³Ù…ÙŠØ© ÙˆØ§Ù„Ø§Ø­ØªÙŠØ§Ø·ÙŠØ© ÙˆØ§Ù„ØªÙØ³ÙŠØ±ÙŠØ©, Ø³Ù† Ø§Ù„ØªØ´Ø±ÙŠØ¹, Ù†Ø·Ø§Ù‚ ØªØ·Ø¨ÙŠÙ‚ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ† Ù…Ù† Ø­ÙŠØ« Ø§Ù„Ù…ÙƒØ§Ù†, Ù…Ù† Ø­ÙŠØ« Ø§Ù„Ø²Ù…Ø§Ù†, Ø¥Ù„ØºØ§Ø¡ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†, ØªÙØ³ÙŠØ± Ø§Ù„Ù‚Ø§Ù†ÙˆÙ†. Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø­Ù‚: ØªØ¹Ø±ÙŠÙ Ø§Ù„Ø­Ù‚, ØªÙ‚Ø³ÙŠÙ…Ø§Øª Ø§Ù„Ø­Ù‚ÙˆÙ‚, Ø£Ø´Ø®Ø§Øµ Ø§Ù„Ø­Ù‚, Ø§Ù„Ø´Ø®Øµ Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠ ÙˆØ§Ù„Ø´Ø®Øµ Ø§Ù„Ù…Ø¹Ù†ÙˆÙŠ, Ù…Ø­Ù„ Ø§Ù„Ø­Ù‚, ÙˆØªÙ‚Ø³ÙŠÙ…Ø§Øª Ø§Ù„Ø£Ø´ÙŠØ§Ø¡, Ù…ØµØ§Ø¯Ø± Ø§Ù„Ø­Ù‚, Ø¥Ø«Ø¨Ø§Øª Ø§Ù„Ø­Ù‚ ÙˆØ§Ø³ØªØ¹Ù…Ø§Ù„Ù‡ ÙˆØ§Ù†Ù‚Ø¶Ø§Ø¤Ù‡.', 1, 2, 'second term'),
(50, 1, 'Ø¯Ø±Ø§Ø³Ø§Øª ØªØ¬Ø§Ø±ÙŠØ© Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ©', 'ÙŠØªÙ… Ø§Ø®ØªÙŠØ§Ø± Ù…Ø¬Ù…ÙˆØ¹Ø© Ù…Ù† Ø§Ù„Ù†ØµÙˆØµ Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© Ø§Ù„ØªÙ‰ ØªØªÙ†Ø§ÙˆÙ„ Ù…ÙˆØ¶ÙˆØ¹Ø§Øª ØªØªØ¹Ù„Ù‚ Ø¨Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ ÙˆØ§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ© ÙˆÙŠØªÙ… Ø¹Ø±Ø¶ Ù‡Ø°Ù‡ Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© Ù…Ø¨Ø³Ø·Ø© Ù…Ø¹ Ù…Ø±Ø§Ø¹Ø§Ø© Ø§Ù„ØªØ±ÙƒÙŠØ² Ø¹Ù„Ù‰ Ø§Ù„Ù…ØµØ·Ù„Ø­Ø§Øª Ø§Ù„ÙÙ†ÙŠØ© Ø§Ù„Ù…Ø±ØªØ¨Ø·Ø© Ø¨ØªÙ„Ùƒ Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª ÙˆØªØ¯Ø±ÙŠØ¨ Ø§Ù„Ø·Ù„Ø§Ø¨ Ø¹Ù„Ù‰ ØªØ±Ø¬Ù…Ø© Ø¨Ø¹Ø¶ Ø§Ù„Ù†ØµÙˆØµ Ø§Ù„Ù…Ø®ØªØ§Ø±Ø© Ù…Ù† Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© Ø§Ù„Ù‰ Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© ÙˆÙƒØ°Ù„Ùƒ ØªØ¯Ø±ÙŠØ¨Ù‡Ù… Ø¹Ù„Ù‰ Ù‚Ø±Ø§Ø¡Ø© Ø¨Ø¹Ø¶ Ø§Ù„ÙÙ‚Ø±Ø§Øª Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© ÙˆÙƒØªØ§Ø¨Ø© Ù…ÙˆØ¶ÙˆØ¹Ø§Øª Ù…Ø±ØªØ¨Ø·Ø© Ø¨Ù†ÙØ³ Ø§Ù„Ù†ØµÙˆØµ Ø§Ù„Ù…Ù‚Ø±Ø±Ø©.', 1, 2, 'second term'),
(51, 1, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª (2)', 'Ø§Ù„Ø¬Ù…Ù„Ø© ÙˆØ§Ù„ÙØ§Ø¦Ø¯Ø© Ø§Ù„Ø¨Ø³ÙŠØ·Ø©ØŒ Ø§Ù„ÙÙˆØ§Ø¦Ø¯ Ø§Ù„Ø¯ÙˆØ±ÙŠØ© ÙˆÙÙˆØ§Ø¦Ø¯ Ø§Ù„Ø§Ø³ØªØ«Ù…Ø§Ø±ØŒ Ø§Ù„Ù‚ÙŠÙ…Ø© Ø§Ù„Ø­Ø§Ù„ÙŠØ©ØŒ Ø§Ù„Ø¯ÙØ¹Ø§Øª Ø§Ù„Ù…ØªØ³Ø§ÙˆÙŠØ© ÙˆØ­Ø³Ø§Ø¨ Ø¬Ù…Ù„Ø© Ø§Ù„Ø¯ÙØ¹Ø§Øª ÙˆÙ‚ÙŠÙ…ØªÙ‡Ø§ Ø§Ù„Ø­Ø§Ù„ÙŠØ©ØŒ Ø§Ø³ØªØ¨Ø¯Ø§Ù„ Ø§Ù„Ø¯ÙŠÙˆÙ† Ù‚ØµÙŠØ±Ø© Ø§Ù„Ø£Ø¬Ù„ØŒ Ø§Ø³ØªÙ‡Ù„Ø§Ùƒ Ø§Ù„Ù‚Ø±ÙˆØ¶ Ù‚ØµÙŠØ±Ø© Ø§Ù„Ø£Ø¬Ù„ØŒ Ø§Ù„Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ø¬Ø§Ø±ÙŠØ©ØŒ Ø§Ù„Ø¬Ù…Ù„Ø© ÙˆØ§Ù„ÙØ§Ø¦Ø¯Ø© Ø§Ù„Ù…Ø±ÙƒØ¨Ø©ØŒ Ø§Ù„Ù‚ÙŠÙ…Ø© Ø§Ù„Ø­Ø§Ù„ÙŠØ© ÙˆØ§Ù„Ø®ØµÙ…ØŒ Ø§Ù„Ø¯ÙØ¹Ø§Øª Ø§Ù„Ù…Ø§Ù„ÙŠØ© Ø§Ù„Ù…ØªØ³Ø§ÙˆÙŠØ© ÙˆØ§Ù„Ù…ØªØºÙŠØ±Ø©ØŒ Ø­Ø³Ø§Ø¨ Ø¬Ù…Ù„Ø© Ø§Ù„Ø¯ÙØ¹Ø§Øª ÙˆÙ‚ÙŠÙ…ØªÙ‡Ø§ Ø§Ù„Ø­Ø§Ù„ÙŠØ©ØŒ Ø§Ø³ØªØ¨Ø¯Ø§Ù„ Ø§Ù„Ø¯ÙŠÙˆÙ† Ø·ÙˆÙŠÙ„Ø© Ø§Ù„Ø£Ø¬Ù„ØŒ Ø§Ø³ØªÙ‡Ù„Ø§Ùƒ Ø§Ù„Ù‚Ø±ÙˆØ¶ Ø·ÙˆÙŠÙ„Ø© Ø§Ù„Ø£Ø¬Ù„ØŒ Ø§Ø³ØªÙ‡Ù„Ø§Ùƒ Ø§Ù„Ø£ØµÙˆÙ„ Ø§Ù„Ø«Ø§Ø¨ØªØ©ØŒ ØªÙ‚ÙŠÙŠÙ… Ø§Ù„Ù…Ø³ØªÙ†Ø¯Ø§Øª.', 1, 2, 'second term'),
(52, 1, 'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø£ÙØ±Ø§Ø¯', 'Ù…ÙÙ‡ÙˆÙ… ÙˆØ¥Ø·Ø§Ø± ÙˆØ¸ÙŠÙØ© Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø£ÙØ±Ø§Ø¯ØŒ ØªØ®Ø·ÙŠØ· Ø§Ù„Ù‚ÙˆÙ‰ Ø§Ù„Ø¹Ø§Ù…Ù„Ø©ØŒ ØªØ­Ù„ÙŠÙ„ ÙˆØªØµÙ…ÙŠÙ… Ø§Ù„ÙˆØ¸Ø§Ø¦ÙØŒ Ø§Ù„Ø§Ø³ØªÙ‚Ø·Ø§Ø¨ ÙˆØ§Ù„Ø§Ø®ØªØ¨Ø§Ø± ÙˆØ§Ù„ØªØ¹ÙŠÙŠÙ†ØŒ ØªÙ†Ù…ÙŠØ© Ø§Ù„Ù…Ø³Ø§Ø± Ø§Ù„ÙˆØ¸ÙŠÙÙŠØŒ ØªÙ‚ÙŠÙŠÙ… Ø§Ù„Ø£Ø¯Ø§Ø¡ØŒ Ø§Ù„ØªØ¯Ø±ÙŠØ¨ ÙˆØ§Ù„ØªÙ†Ù…ÙŠØ©ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØªØ±ÙÙŠØ§Øª ÙˆØ§Ù„Ø­ÙˆØ§ÙØ²ØŒ Ù†Ø¸Ù… Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø¨Ø´Ø±ÙŠØ©ØŒ Ø§Ù„Ø±Ø¹Ø§ÙŠØ© Ø§Ù„Ø§Ø¬ØªÙ…Ø§Ø¹ÙŠØ© Ù„Ù„Ø¹Ø§Ù…Ù„ÙŠÙ†ØŒ Ø³ÙŠØ§Ø³Ø© Ø§Ù„Ø£Ø¬ÙˆØ±ØŒ Ø§Ù„Ù…Ù…Ø§Ø±Ø³Ø§Øª Ø§Ù„Ø­Ø¯ÙŠØ«Ø© Ù„Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø¨Ø´Ø±ÙŠØ©.', 2, 2, 'frist term'),
(53, 1, 'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø§Ù†ØªØ§Ø¬ ÙˆØ§Ù„Ø¹Ù…Ù„ÙŠØ§Øª', 'Ø§Ù„Ù…ÙØ§Ù‡ÙŠÙ… Ø§Ù„Ø£Ø³Ø§Ø³ÙŠØ© Ù„Ù„Ø¥Ù†ØªØ§Ø¬ ÙˆØ§Ù„Ø¹Ù…Ù„ÙŠØ§ØªØŒ Ø§Ù„Ù†Ø¸Ù… Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ©ØŒ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ©ØŒ Ù†Ø¸Ø§Ù… Ø§Ù„Ø§Ù†ØªØ§Ø¬ Ø§Ù„Ù„Ø­Ø¸ÙŠØŒ Ø§Ù„Ø¬ÙˆØ¯Ø© Ø§Ù„Ø´Ø§Ù…Ù„Ø© ÙˆØ§Ù„Ø§ÙŠØ²ÙˆØŒ Ø¨ÙŠØ¦Ø© Ø§Ù„ØªØµÙ†ÙŠØ¹ØŒ Ø§Ø®ØªÙŠØ§Ø± Ù…ÙˆÙ‚Ø¹ Ø§Ù„Ù…ØµÙ†Ø¹ØŒ ØªÙ‚ÙŠÙŠÙ… Ø§Ù„Ù†Ø¸Ù… Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ©ØŒ ØªØ®Ø·ÙŠØ· Ø§Ù„Ø§Ø­ØªÙŠØ§Ø¬Ø§Øª Ù…Ù† Ø§Ù„Ù…ÙˆØ§Ø¯ØŒ Ø§Ù„ØªÙ†Ø¨Ø¤ Ø¨Ø§Ù„Ø¥Ù†ØªØ§Ø¬ØŒ Ø§Ù„Ø§Ø³ØªØ±Ø§ØªÙŠØ¬ÙŠØ§Øª Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ©ØŒ Ø¬Ø¯ÙˆÙ„Ø© Ø§Ù„Ø¹Ù…Ù„ÙŠØ§Øª Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ©ØŒ ØµÙŠØ§Ù†Ø© Ø§Ù„Ø¢Ù„Ø§Øª ÙˆØªØ±ØªÙŠØ¨Ù‡Ø§ ÙˆØªØ­Ù…ÙŠÙ„Ù‡Ø§.', 2, 2, 'frist term'),
(54, 1, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ø´Ø±ÙƒØ§Øª Ø£Ø´Ø®Ø§Øµ', 'Ø´Ø±ÙƒØ§Øª Ø§Ù„ØªØ¶Ø§Ù…Ù†: Ù…ÙÙ‡ÙˆÙ… ÙˆØ®ØµØ§Ø¦Øµ Ø´Ø±ÙƒØ§Øª Ø§Ù„ØªØ¶Ø§Ù…Ù† â€“ ØªÙƒÙˆÙŠÙ† Ø§Ù„ØªØ¶Ø§Ù…Ù† â€“ Ø§Ù„Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ø¬Ø§Ø±ÙŠØ© Ù„Ù„Ø´Ø±ÙƒØ§Ø¡ ÙˆØªÙˆØ²ÙŠØ¹ Ø§Ù„Ø£Ø±Ø¨Ø§Ø­ â€“ Ø§Ù„Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ø®ØªØ§Ù…ÙŠØ© ÙˆØ§Ù„Ù…ÙŠØ²Ø§Ù†ÙŠØ© â€“ ØªØ¹Ø¯ÙŠÙ„ Ø¹Ù‚Ø¯ Ø§Ù„Ø´Ø±ÙƒØ© Ø¨Ø²ÙŠØ§Ø¯Ø© Ø§Ùˆ ØªØ®ÙÙŠØ¶ Ø±Ø£Ø³ Ø§Ù„Ù…Ø§Ù„ â€“ Ø§Ù†Ø¶Ù…Ø§Ù… ÙˆØ§Ù†ÙØµØ§Ù„ Ø´Ø±ÙŠÙƒ ÙˆØ­Ø³Ø§Ø¨ Ø´Ù‡Ø±Ø© Ø§Ù„Ù…Ø­Ù„ â€“ Ø§Ù†Ù‚Ø¶Ø§Ø¡ Ø§Ù„Ø´Ø±ÙƒØ© ÙˆØªØµÙÙŠØªÙ‡Ø§ â€“ Ø´Ø±ÙƒØ§Øª Ø§Ù„ØªÙˆØµÙŠØ© Ø§Ù„Ø¨Ø³ÙŠØ·Ø© â€“ Ø´Ø±ÙƒØ§Øª Ø§Ù„Ù…Ø­Ø§ØµØ©.', 2, 2, 'frist term'),
(55, 1, 'Ø§Ù„ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ Ø§Ù„Ø¬Ø²Ø¦ÙŠ', 'Ø§Ù„Ø·Ù„Ø¨ ÙˆØ§Ù„Ø¹Ø±Ø¶ ÙˆØ§Ù„ØªÙˆØ§Ø²ÙŠ. Ø§Ù„Ø·Ù„Ø¨: Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„ÙØ±Ø¯ÙŠ, Ù…Ù†Ø­Ù†Ù‰ Ø·Ù„Ø¨ Ø§Ù„Ø³ÙˆÙ‚. Ø§Ù„Ø¹Ø±Ø¶: Ø§Ù„Ø¹Ø±Ø¶ Ø§Ù„ÙØ±Ø¯ÙŠ, Ù…Ù†Ø­Ù†Ù‰ Ø¹Ø±Ø¶ Ø§Ù„Ø³ÙˆÙ‚. Ø§Ù„ØªÙˆØ§Ø²Ù†: Ù…ÙÙ‡ÙˆÙ… Ø§Ù„ØªÙˆØ§Ø²Ù†, Ø§Ù„Ø­Ù„ Ø§Ù„Ù‡Ù†Ø¯Ø³ÙŠ ÙˆØ§Ù„Ø¬Ø¨Ø±ÙŠ ÙˆØ§Ù„ØªÙˆØ§Ø²Ù†, Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„ØªÙˆØ§Ø²Ù†: Ø§Ù„Ù…Ø±ÙˆÙ†Ø©: Ù…Ø±ÙˆÙ†Ø© Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„Ø³Ø¹Ø±ÙŠØ©: Ø§Ù„ØªØ¹Ø¨ÙŠØ± Ø§Ù„Ø¬Ø¨Ø±Ù‰ Ø¹Ù† Ù…Ø±ÙˆÙ†Ø© Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„Ø³Ø¹Ø±ÙŠØ©, Ø£Ù†ÙˆØ§Ø¹ Ù…Ø±ÙˆÙ†Ø© Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„Ø³Ø¹Ø±ÙŠØ©, Ø§Ù„Ø¹Ù„Ø§Ù‚Ø© Ø¨ÙŠÙ† Ù…Ø±ÙˆÙ†Ø© Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„Ø³Ø¹Ø±ÙŠØ© ÙˆØ§Ù„Ø£Ù†ÙØ§Ù‚ Ø¹Ù„Ù‰ Ø§Ù„Ø³Ù„Ø¹. Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ù…Ø³ØªÙ‡Ù„Ùƒ: Ø§Ù„ØªØ­Ù„ÙŠÙ„ Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠ Ù„Ù„Ù…Ù†ÙØ¹Ø© ( Ù‚Ø§Ù†ÙˆÙ† ØªÙ†Ø§Ù‚Øµ Ø§Ù„Ù…Ù†ÙØ¹Ø© Ø§Ù„Ø­Ø¯ÙŠØ© , ØªÙˆØ§Ø²Ù† Ø§Ù„Ù…Ø³ØªÙ‡Ù„Ùƒ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø£Ø³Ù„ÙˆØ¨ Ø§Ù„Ù…Ù†ÙØ¹Ø© Ø§Ù„Ø­Ø¯ÙŠØ© , Ø§Ø´ØªÙ‚Ø§Ù‚ Ù…Ù†Ø­Ù†Ù‰ Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„ÙØ±Ø¯Ù‰ ). Ù†Ø¸Ø±ÙŠØ© Ø·Ù„Ø¨ Ø§Ù„Ù…Ø³ØªÙ‡Ù„Ùƒ ( Ø·Ø±ÙŠÙ‚Ø© Ù…Ù†Ø­Ù†ÙŠØ§Øª Ø§Ù„Ø³ÙˆØ§Ø¡ ) Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ù…Ù†ØªØ¬. Ø§Ù„Ø£Ø³ÙˆØ§Ù‚ ( Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„Ù…Ù†Ø§ÙØ³Ø§Øª Ø§Ù„ÙƒØ§Ù…Ù„Ø©, Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„Ø§Ø­ØªÙ‚Ø§Ø±, Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„Ù…Ù†Ø§ÙØ³Ø© Ø§Ù„Ø§Ø­ØªÙƒØ§Ø±ÙŠØ© ).', 2, 2, 'frist term'),
(56, 1, 'Ø¯Ø±Ø§Ø³Ø§Øª ØªØ¬Ø§Ø±ÙŠØ© Ø¨Ù„ØºØ© Ø£Ø¬Ù†Ø¨ÙŠØ©', 'ÙŠØªÙ… Ø§Ø®ØªÙŠØ§Ø± Ù…Ø¬Ù…ÙˆØ¹Ø© Ù…Ù† Ø§Ù„Ù†ØµÙˆØµ Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© Ø§Ù„ØªÙ‰ ØªØªÙ†Ø§ÙˆÙ„ Ù…ÙˆØ¶ÙˆØ¹Ø§Øª ØªØªØ¹Ù„Ù‚ Ø¨Ø§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ© ÙˆØ¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ ÙˆÙŠØªÙ… Ø¹Ø±Ø¶ Ù‡Ø²Ø© Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© Ù…Ø¨Ø³Ø·Ø© Ù…Ø¹ Ù…Ø±Ø§Ø¹Ø§Ø© Ø§Ù„ØªØ±ÙƒÙŠØ² Ø¹Ù„Ù‰ Ø§Ù„Ù…ØµØ·Ù„Ø­Ø§Øª Ø§Ù„ÙÙ†ÙŠØ© Ø§Ù„Ù…Ø±ØªØ¨Ø·Ø© Ø¨ØªÙ„Ùƒ Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª ÙˆØªØ¯Ø±ÙŠØ¨ Ø§Ù„Ø·Ù„Ø§Ø¨ Ø¹Ù„Ù‰ ØªØ±Ø¬Ù…Ø© Ø¨Ø¹Ø¶ Ø§Ù„Ù†ØµÙˆØµ Ø§Ù„Ù…Ø®ØªØ§Ø±Ø© Ù…Ù† Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© Ø¥Ù„Ù‰ Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© ÙˆÙƒØ°Ù„Ùƒ ØªØ¯Ø±ÙŠØ¨Ù‡Ù… Ø¹Ù„Ù‰ Ù‚Ø±Ø§Ø¡Ø© Ø¨Ø¹Ø¶ Ø§Ù„ÙÙ‚Ø±Ø§Øª Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© ÙˆÙƒØªØ§Ø¨Ø© Ù…ÙˆØ¶ÙˆØ¹Ø§Øª Ù…Ø±ØªØ¨Ø·Ø© Ø¨Ù†ÙØ³ Ø§Ù„Ù†ØµÙˆØµ Ø§Ù„Ù…Ù‚Ø±Ø±Ø©.', 2, 2, 'frist term'),
(57, 1, 'Ù‚Ø§Ù†ÙˆÙ† ØªØ¬Ø§Ø±Ù‰', 'ØªØ¹Ø±ÙŠÙ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ† Ø§Ù„ØªØ¬Ø§Ø±ÙŠ ÙˆÙ†Ø¸Ø±ÙŠØ© Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©: ØªØ¹Ø±ÙŠÙ Ø§Ù„Ù‚Ø§Ù†ÙˆÙ† Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©, Ù†Ø·Ø§Ù‚Ù‡, Ø¸Ù‡ÙˆØ±Ù‡, Ù…ØµØ§Ø¯Ø±Ø©, Ø¶ÙˆØ§Ø¨Ø· Ø§Ù„ØªÙØ±Ù‚Ø© Ø¨ÙŠÙ† Ø§Ù„Ø¹Ù…Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠ ÙˆØ§Ù„Ø¹Ù…Ù„ Ø§Ù„Ù…Ø¯Ù†Ù‰, Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø§Ù„Ø£ØµÙ„ÙŠØ©, Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø¨Ø·Ø±ÙŠÙ‚ Ø§Ù„Ù…Ù‚Ø§ÙˆÙ„Ø©, Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø¨Ø§Ù„ØªØ¨Ø¹ÙŠØ©, Ø§Ù„ØªØ§Ø¬Ø±, Ø´Ø±ÙˆØ· Ø§ÙƒØªØ³Ø§Ø¨ ØµÙØ© Ø§Ù„ØªØ§Ø¬Ø± , Ø§Ù„ØªØ²Ø§Ù… Ø§Ù„ØªØ§Ø¬Ø±, Ø¥Ù…Ø³Ø§Ùƒ Ø§Ù„Ø¯ÙØ§ØªØ± Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© , Ø§Ù„Ø³Ø¬Ù„ Ø§Ù„ØªØ¬Ø§Ø±Ù‰ Ø§Ù„Ø´Ø±ÙƒØ§Øª Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø§Ù„Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø¹Ø§Ù…Ø© Ù„Ù„Ø´Ø±ÙƒØ©, Ø¹Ù‚Ø¯ Ø§Ù„Ø´Ø±ÙƒØ©, Ø§Ù„Ø´Ø®ØµÙŠØ© Ø§Ù„Ù…Ø¹Ù†ÙˆÙŠØ© Ù„Ù„Ø´Ø±ÙƒØ© Ø§Ù†Ù‚Ø¶Ø§Ø¡ Ø§Ù„Ø´Ø±ÙƒØ©, Ø´Ø±ÙƒØ§Øª Ø§Ù„Ø£Ø´Ø®Ø§Øµ ( Ø´Ø±ÙƒØ© ØªØ¶Ø§Ù…Ù† , Ø´Ø±ÙƒØ© Ø§Ù„ØªÙˆØµÙŠØ© Ø§Ù„Ø¨Ø³ÙŠØ·Ø©, Ø´Ø±ÙƒØ© Ø§Ù„Ù…Ø­Ø§ØµØ© ) Ø´Ø±ÙƒØ§Øª Ø§Ù„Ø£Ù…ÙˆØ§Ù„ (Ø´Ø±ÙƒØ© Ø§Ù„Ù…Ø³Ø§Ù‡Ù…Ø© ) Ø§Ù„Ø´Ø±ÙƒØ§Øª Ø§Ù„Ù…Ø®ØªÙ„Ø·Ø© ( Ø´Ø±ÙƒØ© Ø§Ù„ØªÙˆØµÙŠØ© Ø¨Ø§Ù„Ø£Ø³Ù‡Ù… , Ø§Ù„Ø´Ø±ÙƒØ© Ø°Ø§Øª Ø§Ù„Ù…Ø³Ø¦ÙˆÙ„ÙŠØ© Ø§Ù„Ù…Ø­Ø¯ÙˆØ¯Ø© ).', 2, 2, 'frist term'),
(58, 1, 'Ù…Ù‚Ø¯Ù…Ø© Ø§Ù„Ø¥Ø­ØµØ§Ø¡', 'ØªØ¹Ø±ÙŠÙ Ø¹Ù„Ù… Ø§Ù„Ø¥Ø­ØµØ§Ø¡ â€“ Ù…ÙØ§Ù‡ÙŠÙ… Ø£Ø³Ø§Ø³ÙŠØ© â€“ Ø®Ø·ÙˆØ§Øª Ø§Ù„Ø¨Ø­Ø« Ø§Ù„Ø¹Ù„Ù…ÙŠ ÙˆÙØ±ÙˆØ¶Ù‡ ÙˆÙ…ÙØ§Ù‡ÙŠÙ…Ù‡ ÙˆØ·Ø±Ù‚ Ø§Ù„Ù‚ÙŠØ§Ø³ â€“ Ø¬Ù…Ø¹ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª â€“ ØªØ¬Ù‡ÙŠØ² ÙˆØ¹Ø±Ø¶ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª â€“ ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª â€“ Ø§Ø³ØªØ®Ø±Ø§Ø¬ ÙˆØ§Ø®ØªØ¨Ø§Ø± Ø§Ù„Ù†ØªØ§Ø¦Ø¬ â€“ Ù…ØµØ§Ø¯Ø± ÙˆÙˆØ³Ø§Ø¦Ù„ Ø¬Ù…Ø¹ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª ( ØªØ§Ø±ÙŠØ®ÙŠØ© ÙˆÙ…ÙŠØ¯Ø§Ù†ÙŠØ© ) â€“ Ø£Ø³Ø§Ù„ÙŠØ¨ Ø§Ù„Ø¹Ø±Ø¶ Ø§Ù„Ø¨ÙŠØ§Ù†ÙŠ Ù„Ù„Ø¨ÙŠØ§Ù†Ø§Øª â€“ Ù…Ù‚Ø§ÙŠÙŠØ³ Ø§Ù„Ù†Ø²Ø¹Ø© Ø§Ù„Ù…Ø±ÙƒØ²ÙŠØ© ( Ø§Ù„ÙˆØ³Ø· Ø§Ù„Ø­Ø³Ø§Ø¨ÙŠ â€“ Ø§Ù„ÙˆØ³ÙŠØ· â€“ Ø§Ù„Ù…Ù†ÙˆØ§Ù„ â€“ Ø§Ù„ÙˆØ³Ø· Ø§Ù„Ù‡Ù†Ø¯Ø³ÙŠ ÙˆØ§Ù„ØªÙˆØ§ÙÙ‚ÙŠ ) â€“ Ù…Ù‚Ø§ÙŠÙŠØ³ Ø§Ù„ØªØ´ØªØª ÙˆØ§Ù„Ø§Ù„ØªÙˆØ§Ø¡ (Ø§Ù„Ù…Ø¯Ù‰ â€“ Ø§Ù„Ø§Ù†Ø­Ø±Ø§Ù Ø§Ù„Ù…ØªÙˆØ³Ø· â€“ Ù†ØµÙ Ø§Ù„Ù…Ø¯Ù‰ Ø§Ù„Ø±Ø¨ÙŠØ¹ÙŠ â€“ Ø§Ù„Ø§Ù†Ø­Ø±Ø§Ù Ø§Ù„Ù…Ø¹ÙŠØ§Ø±ÙŠ â€“ Ø§Ù„Ù…Ù‚Ø§ÙŠÙŠØ³ Ø§Ù„Ù†Ø³Ø¨ÙŠØ© ) â€“ Ø§Ù„Ø§Ø±ØªØ¨Ø§Ø· â€“ Ø§Ù„Ø§Ù†Ø­Ø¯Ø§Ø± â€“ Ø§Ù„Ø³Ù„Ø§Ø³Ù„ Ø§Ù„Ø²Ù…Ù†ÙŠØ© â€“ Ø§Ù„Ø£Ø±Ù‚Ø§Ù… Ø§Ù„Ù‚ÙŠØ§Ø³ÙŠØ© â€“ Ø¥Ø­ØµØ§Ø¡Ø§Øª Ø§Ù„Ø³ÙƒØ§Ù† â€“ Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø¢Ù„ÙŠ ÙˆØ¹Ù„Ù… Ø§Ù„Ø¥Ø­ØµØ§Ø¡.', 2, 2, 'frist term'),
(59, 1, 'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØªØ³ÙˆÙŠÙ‚', 'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„ØªØ³ÙˆÙŠÙ‚ ÙÙŠ Ø¹Ø§Ù„Ù… Ù…ØªØºÙŠØ±ØŒ Ø§Ù„ØªØ®Ø·ÙŠØ· Ø§Ù„Ø§Ø³ØªØ±Ø§ØªÙŠØ¬ÙŠ ÙˆÙ…Ø±Ø§Ø­Ù„ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ØŒ ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ø¨ÙŠØ¦Ø© Ø§Ù„ØªØ³ÙˆÙŠÙ‚ÙŠØ©ØŒ ØªØ­Ù„ÙŠÙ„ Ø§Ù„ÙØ±Øµ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ÙŠØ©: Ù†Ø¸Ù… Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª ÙˆØ¨Ø­ÙˆØ« Ø§Ù„Ø³ÙˆÙ‚ØŒ Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„Ù…Ø³ØªÙ‡Ù„ÙƒÙŠÙ† ÙˆØ³Ù„ÙˆÙƒ Ø§Ù„Ù…Ø´ØªØ±ÙŠÙ†ØŒ Ø§Ù„Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© ÙˆØ³Ù„ÙˆÙƒ Ø§Ù„Ù…Ø´ØªØ±ÙŠÙ†. Ø§Ø®ØªÙŠØ§Ø± ÙˆØ§Ø³ØªÙ‡Ø¯Ø§Ù Ø§Ù„Ø£Ø³ÙˆØ§Ù‚: Ù‚ÙŠØ§Ø³ Ø§Ù„Ø·Ù„Ø¨ ÙˆØ§Ù„ØªÙ†Ø¨Ø¤ Ø¨Ù‡ØŒ ØªÙ‚Ø³ÙŠÙ… Ø§Ù„Ø³ÙˆÙ‚ØŒ Ø§Ø³ØªÙ‡Ø¯Ø§Ù Ø§Ù„Ø³ÙˆÙ‚ ÙˆØ§Ù„ÙˆØ¶Ø¹ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ÙŠ ÙƒÙ…ÙŠØ²Ø© ØªÙ†Ø§ÙØ³ÙŠØ©ØŒ ØªÙ†Ù…ÙŠØ© Ø§Ù„Ù…Ø²ÙŠØ¬ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ÙŠ: Ù…Ø¯Ø§Ø®Ù„ ÙˆØ§Ø³ØªØ±Ø§ØªÙŠØ¬ÙŠØ§Øª ØªØµÙ…ÙŠÙ… Ø§Ù„Ù…Ù†ØªØ¬Ø§ØªØŒ Ø§Ø¹ØªØ¨Ø§Ø±Ø§Øª ØªØ³Ø¹ÙŠØ± Ø§Ù„Ù…Ù†ØªØ¬Ø§ØªØŒ Ø§Ù„Ù‚Ù†ÙˆØ§Øª ÙˆØ§Ù„Ø¥Ù…Ø¯Ø§Ø¯Ø§Øª Ø§Ù„ØªØ³ÙˆÙŠÙ‚ÙŠØ© Ø¨Ø§Ù„Ù…Ù†ØªØ¬Ø§ØªØŒ ØªØ±ÙˆÙŠØ¬ Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª ÙˆØ£Ø³Ø§Ù„ÙŠØ¨ Ø§Ù„Ø§ØªØµØ§Ù„ ÙˆØ§Ù„Ø¨ÙŠØ¹ØŒ Ø¨Ù†Ø§Ø¡ Ø¹Ù„Ø§Ù‚Ø§Øª Ø§Ù„Ù…Ø³ØªÙ‡Ù„ÙƒÙŠÙ† ÙˆØ§Ù„Ø¹Ù…Ù„Ø§Ø¡. Ø§Ù„Ø§ØªØ¬Ø§Ù‡Ø§Øª Ø§Ù„Ø­Ø¯ÙŠØ«Ø© ÙÙŠ Ø§Ù„ØªØ³ÙˆÙŠÙ‚: Ø®Ù„Ù‚ Ø§Ù„Ù…ÙŠØ²Ø© Ø§Ù„ØªÙ†Ø§ÙØ³ÙŠØ©ØŒ Ø§Ù„Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ©ØŒ ØªØ³ÙˆÙŠÙ‚ Ø§Ù„Ø®Ø¯Ù…Ø§ØªØŒ Ø§Ù„Ù…Ù†Ø¸Ù…Ø§ØªØŒ Ø§Ù„Ø£ÙÙƒØ§Ø±ØŒ Ø§Ù„Ø£Ø´Ø®Ø§ØµØŒ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ Ù…Ù† Ø§Ù„Ù…Ø¬ØªÙ…Ø¹ØŒ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ ÙÙŠ Ø¹ØµØ± Ø§Ù„Ø§Ù†ØªØ±Ù†Øª.', 2, 2, 'second term');
INSERT INTO `subjects` (`id`, `doctor_id`, `name`, `description`, `year`, `department`, `term`) VALUES
(60, 1, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ø´Ø±ÙƒØ§Øª Ø§Ù„Ø£Ù…ÙˆØ§Ù„', 'Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø¹Ù† Ø´Ø±ÙƒØ§Øª Ø§Ù„Ø£Ù…ÙˆØ§Ù„ Ø§Ù„Ù…Ø³Ø§Ù‡Ù…Ø©ØŒ Ø­Ù‚ÙˆÙ‚ Ø§Ù„Ù…Ù„ÙƒÙŠØ© ( Ø£Ø³Ù‡Ù… Ø§Ù„Ø®Ø²Ø§Ù†Ø©ØŒ ØªØ¬Ø²Ø¦Ø© Ø§Ù„Ø³Ù‡Ù…ØŒ Ø§Ù„Ø£Ø³Ù‡Ù… Ø§Ù„Ù…Ø¬Ø§Ù†ÙŠØ©ØŒ ØªØ­ÙˆÙŠÙ„ Ø§Ù„Ø³Ù†Ø¯Ø§Øª Ù„Ø£Ø³Ù‡Ù…)ØŒ Ù‚ÙŠØ§Ø³ ÙˆØ¹Ø±Ø¶ Ø±Ø¨Ø­ÙŠØ© Ø§Ù„Ø³Ù‡Ù…ØŒ Ù‚Ø§Ø¦Ù…Ø© Ø§Ù„ØªØ¯ÙÙ‚Ø§Øª Ø§Ù„Ù†Ù‚Ø¯ÙŠØ©ØŒ Ø§Ù„Ù†Ø¸Ø§Ù… Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ù‰ Ø§Ù„Ù…ÙˆØ­Ø¯ ( Ù…Ø¹ Ø§Ù„ØªØ±ÙƒÙŠØ² Ø¹Ù„Ù‰ Ø§Ù„Ù‚ÙˆØ§Ø¦Ù… Ø§Ù„Ù…Ø§Ù„ÙŠØ©)ØŒ Ø§Ù„Ø¥ÙØµØ§Ø­ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ù‰ØŒ Ø§Ù„ØªØºÙŠØ± ÙÙŠ Ø§Ù„Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© ÙˆÙÙŠ Ø§Ù„ØªÙ‚Ø¯ÙŠØ±Ø§Øª Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØŒ Ø§Ù„Ø£Ø®Ø·Ø§Ø¡ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ©ØŒ Ø§Ù„Ø¥ÙŠØ¶Ø§Ø­Ø§Øª Ø§Ù„Ù…ØªÙ…Ù…Ø© Ù„Ù„ØªÙ‚Ø§Ø±ÙŠØ± Ø§Ù„Ù…Ø§Ù„ÙŠØ©.', 2, 2, 'second term'),
(61, 1, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ø­ÙƒÙˆÙ…ÙŠØ© ÙˆÙ‚ÙˆÙ…ÙŠØ©', 'Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ©: Ø§Ù„Ø¥Ø·Ø§Ø± Ø§Ù„ÙÙƒØ±ÙŠ Ù„Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ© ( Ø§Ù„ØªØ¹Ø±ÙŠÙ Ø¨Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ© ÙˆØ£Ù‡Ù…ÙŠØªÙ‡Ø§ ÙˆÙ…Ù‚ÙˆÙ…Ø§ØªÙ‡Ø§ )ØŒ Ø§Ù„Ù…ÙˆØ§Ø²Ù†Ø© Ø§Ù„Ø¹Ø§Ù…Ø© Ù„Ù„Ø¯ÙˆÙ„Ø© ( Ù…ÙÙ‡ÙˆÙ…Ù‡Ø§ØŒ ÙˆØ£Ù‡Ù…ÙŠØªÙ‡Ø§ØŒ Ø§Ø¬Ù…Ø§Ù„Ù‰ Ø§Ù„Ù…ÙˆØ§Ø²Ù†Ø©ØŒ Ø§ØªØ¬Ø§Ù‡Ø§Øª Ø§Ù„ØªØ·ÙˆÙŠØ± ÙÙŠ Ø§Ù„Ù…ÙˆØ§Ø²Ù†Ø© )ØŒ Ø§Ù„Ø±Ù‚Ø§Ø¨Ø© Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ© Ø¹Ù„Ù‰ Ø§Ù„Ù†Ø´Ø§Ø· Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØŒ Ù†Ø¸Ø§Ù… Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ© Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØŒ Ø§Ù„ØªÙ‚Ø§Ø±ÙŠØ± Ø§Ù„Ù…Ø§Ù„ÙŠØ© ÙÙŠ Ø§Ù„ÙˆØ­Ø¯Ø§Øª Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ©ØŒ Ø§Ù„Ø±Ù‚Ø§Ø¨Ø© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ©ØŒ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø§Ù„Ù‚ÙˆÙ…ÙŠØ©: Ø§Ù„Ø§Ø³ØªØ±Ø´Ø§Ø¯ Ø¨Ù†Ø¸Ø§Ù… Ø§Ù„Ø£Ù…Ù… Ø§Ù„Ù…ØªØ­Ø¯Ø© Ù„Ù„Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ù‚ÙˆÙ…ÙŠØ©.', 2, 2, 'second term'),
(62, 1, 'Ø§Ù„ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ Ø§Ù„ÙƒÙ„Ù‰', 'Ù‚ÙŠØ§Ø³ Ø§Ù„Ù†Ø´Ø§Ø· Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ: Ø£Ø³Ø§Ù„ÙŠØ¨ Ù‚ÙŠØ§Ø³ Ø§Ù„Ù†Ø´Ø§Ø· Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ , Ø§Ù„Ù…Ø´Ø§ÙƒÙ„ Ø§Ù„ØªÙŠ ØªÙˆØ§Ø¬Ù‡ Ù‚ÙŠØ§Ø³ Ø§Ø¬Ù…Ø§Ù„Ù‰ Ø§Ù„Ù†Ø§ØªØ¬ Ø§Ù„Ù‚ÙˆÙ…ÙŠ. Ù†Ù…Ø§Ø°Ø¬ Ø§Ù„ØªØ¯ÙÙ‚ Ø§Ù„Ø¯Ø§Ø¦Ø±ÙŠ Ù„Ù„Ø§Ù‚ØªØµØ§Ø¯ Ø§Ù„Ù‚ÙˆÙ…ÙŠ: Ù†Ù…ÙˆØ°Ø¬ Ø§Ù„ØªØ¯ÙÙ‚ Ø§Ù„Ø¯Ø§Ø¦Ø±ÙŠ Ù„Ø§Ù‚ØªØµØ§Ø¯ Ù„Ø§ ÙŠØ¯Ø®Ø± ÙˆÙ„Ø§ ÙŠØ³ØªØ«Ù…Ø± ÙˆÙ…ÙƒÙˆÙ† Ù…Ù† Ù‚Ø·Ø§Ø¹ÙŠ Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ ÙˆØ§Ù„Ø¹Ø§Ø¦Ù„ÙŠ ÙÙ‚Ø·, Ù†Ù…ÙˆØ°Ø¬ Ø§Ù„ØªØ¯ÙÙ‚ Ø§Ù„Ø¯Ø§Ø¦Ø±ÙŠ Ù„Ø§Ù‚ØªØµØ§Ø¯ ÙˆØ§Ù‚Ø¹ÙŠ ØªØ´Ø§Ø±Ùƒ ÙÙŠÙ‡ Ø§Ù„Ø­ÙƒÙˆÙ…ÙŠØ© , Ù†Ù…ÙˆØ°Ø¬ Ø§Ù„ØªØ¯ÙÙ‚ Ø§Ù„Ø¯Ø§Ø¦Ø±ÙŠ Ù„Ù†Ù…ÙˆØ°Ø¬ Ø£ÙƒØ«Ø± ÙˆØ§Ù‚Ø¹ÙŠØ© Ù…ÙƒÙˆÙ† Ù…Ù† Ø£Ø±Ø¨Ø¹ Ù‚Ø·Ø§Ø¹Ø§Øª ( Ø£Ø¹Ù…Ø§Ù„, Ø¹Ø§Ø¦Ù„ÙŠ , Ø­ÙƒÙˆÙ…ÙŠ , Ø§Ù„Ø¹Ø§Ù„Ù… Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠ ). Ø§Ù„Ø§Ø³ØªÙ‡Ù„Ø§Ùƒ: Ø§Ù„Ù†Ø¸Ø±ÙŠØ© Ø§Ù„ÙƒÙŠÙ†Ø²ÙŠØ© ÙÙ‰ Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„Ø§Ø³ØªÙ‡Ù„Ø§ÙƒÙŠ , Ù†Ø¸Ø±ÙŠØ§Øª Ù…Ø§ Ø¨Ø¹Ø¯ Ø§Ù„Ø­Ø±Ø¨ ÙÙ‰ Ø§Ù„Ø·Ù„Ø¨ Ø§Ù„Ø§Ø³ØªÙ‡Ù„Ø§ÙƒÙŠ: Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø¯Ø®Ù„ Ø§Ù„Ù…Ø·Ù„Ù‚ , Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø¯Ø®Ù„ Ø§Ù„Ù†Ø³Ø¨ÙŠ , Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø¯Ø®Ù„ Ø§Ù„Ø¯Ø§Ø¦Ù…. Ø§Ù„Ø§Ø³ØªØ«Ù…Ø§Ø±: Ø§Ù„ÙƒÙØ§ÙŠØ© Ø§Ù„Ø­Ø¯ÙŠØ© Ù„Ø±Ø£Ø³ Ø§Ù„Ù…Ø§Ù„, Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ø§Ø³ØªØ«Ù…Ø§Ø±, Ø§Ù„Ø¹ÙˆØ§Ù…Ù„ Ø§Ù„Ù…Ø¤Ø«Ø±Ø© Ø¹Ù„Ù‰ Ø­Ø¬Ù… Ø§Ù„Ø§Ø³ØªØ«Ù…Ø§Ø±. Ø§Ù„ØªÙˆØ§Ø²Ù† ÙÙ‰ Ø³ÙˆÙ‚ Ø§Ù„Ø³Ù„Ø¹: Ø¬Ø¯ÙˆÙ„ IS Ù„Ø§Ù‚ØªØµØ§Ø¯ Ù…ÙƒÙˆÙ† Ù…Ù† Ù‚Ø·Ø§Ø¹ÙŠÙ†. Ø§Ù„ØªÙˆØ§Ø²Ù† ÙÙ‰ Ø³ÙˆÙ‚ Ø§Ù„Ù†Ù‚ÙˆØ¯: Ø¬Ø¯ÙˆÙ„ L.M_ Ø§Ù„ØªÙˆØ§Ø²Ù† Ø§Ù„Ø¹Ø§Ù… ÙÙ‰ Ø³ÙˆÙ‚ Ø§Ù„Ø³Ù„Ø¹ ÙˆØ§Ù„Ø®Ø¯Ù…Ø§Øª ÙˆØ§Ù„Ù†Ù‚ÙˆØ¯ _ Ù…ÙÙ‡ÙˆÙ… Ø§Ù„ØªØ¶Ø®Ù… ÙˆØ§Ù„Ø¨Ø·Ø§Ù„Ø© _ Ø§Ù„Ø¯ÙˆØ±Ø§Øª Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ©.', 2, 2, 'second term'),
(63, 1, 'Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ Ø§Ù„Ø¯ÙˆÙ„ÙŠ', 'Ù†Ø¸Ø±ÙŠØ§Øª Ø§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ©: Ø§Ù„Ù†Ø¸Ø±ÙŠØ§Øª Ø§Ù„ÙƒÙ„Ø§Ø³ÙŠÙƒÙŠØ© ÙÙ‰ Ø§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ© ÙˆØ§Ù„Ø¹Ù„Ø§Ù‚Ø§Øª Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ© Ø§Ù„Ø¯ÙˆÙ„ÙŠØ©ØŒ Ø§Ù„Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ù†ÙŠÙˆÙƒÙ„Ø§Ø³ÙŠÙƒÙŠØ© ÙÙ‰ Ø§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ©. Ù†Ø¸Ø±ÙŠØ§Øª Ø§Ù„Ù…Ø¯ÙÙˆØ¹Ø§Øª Ø§Ù„Ø¯ÙˆÙ„ÙŠØ©: Ù…ÙŠØ²Ø§Ù† Ø§Ù„Ù…Ø¯ÙÙˆØ¹Ø§Øª, ØªØ³ÙˆÙŠØ© Ø§Ù„Ù…Ø¯ÙÙˆØ¹Ø§Øª Ø§Ù„Ø¯ÙˆÙ„ÙŠØ© ÙˆØ£Ø³ÙˆØ§Ù‚ Ø§Ù„ØµØ±Ù Ø§Ù„Ø£Ø¬Ù†Ø¨ÙŠ, Ø§Ù„Ø³ÙŠØ§Ø³Ø§Øª Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠØ© ÙˆØ§Ù„ØªØ¹Ø±ÙŠÙØ§Øª Ø§Ù„Ø¬Ù…Ø±ÙƒÙŠØ©, Ø¸Ø§Ù‡Ø±Ø© Ø§Ù„Ø¥ØºØ±Ø§Ù‚ ÙˆØ£Ø¨Ø¹Ø§Ø¯Ù‡Ø§ Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ© ÙÙ‰ Ø§Ù„Ø³ÙˆÙ‚ Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ©. ØªÙ†Ø¸ÙŠÙ… Ø§Ù„ØªØ¹Ø§ÙˆÙ† Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ Ø§Ù„Ø¯ÙˆÙ„ÙŠ: ØµÙ†Ø¯ÙˆÙ‚ Ø§Ù„Ù†Ù‚Ø¯ Ø§Ù„Ø¯ÙˆÙ„ÙŠ , Ø§ØªÙØ§Ù‚ÙŠØ© Ø§Ù„Ø¬Ø§Øª ÙˆÙ…Ù†Ø¸Ù…Ø© Ø§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© ( Ù…Ù† Ù‡Ø§ÙØ§Ù†Ø§Ù„Ù‰ Ø§ÙˆØ±ÙˆØ¬ÙˆØ§Ù‰ ), Ø§Ù„ØªÙƒØªÙ„Ø§Øª Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠØ© Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ©, ØªØ¯ÙÙ‚Ø§Øª Ø±Ø¤ÙˆØ³ Ø§Ù„Ø£Ù…ÙˆØ§Ù„ Ø§Ù„Ø£Ø¬Ù†Ø¨ÙŠØ©.', 2, 2, 'second term'),
(64, 1, 'ØªØ·Ø¨ÙŠÙ‚Ø§Øª ØªØ¬Ø§Ø±ÙŠØ© Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„Ø­Ø§Ø³Ø¨ (1)', 'ØªÙ†Ø§ÙˆÙ„ Ù…Ø¯Ø®Ù„ Ù„Ø¨Ø¹Ø¶ Ø§Ù„Ù…ÙˆØ¶ÙˆØ¹Ø§Øª Ø§Ù„Ù…Ø¹Ø§ØµØ±Ø© ÙÙ‰ Ù…Ø¬Ø§Ù„ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ ÙˆØªÙ†Ù…ÙŠØ© Ù…Ù‡Ø§Ø±Ø§Øª Ø§Ù„Ø·Ù„Ø§Ø¨ ÙÙ‰ ØªØ·Ø¨ÙŠÙ‚Ø§Øª Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø§Ù„Ù‰ ÙÙ‰ Ø§Ù„Ù…Ø¬Ø§Ù„Ø§Øª Ø§Ù„Ø¢ØªÙŠØ©: Ù†Ø¸Ù… Ø§Ù„Ù…Ø¨ÙŠØ¹Ø§Øª Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø¨Ø±Ø§Ù…Ø¬ Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø§Ù„Ù‰. Ù†Ø¸Ù… Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø¨Ø´Ø±ÙŠØ© , Ù†Ø¸Ù… Ø§Ù„ØªÙ…ÙˆÙŠÙ„ ÙˆØ§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø§Ù„ÙŠØ© , Ù†Ø¸Ù… Ø§Ù„Ù…Ø±ØªØ¨Ø§Øª ÙˆØ§Ù„Ø£Ø¬ÙˆØ±.', 2, 2, 'second term'),
(65, 1, 'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…ÙˆØ§Ø¯(Ø§Ù„Ù…Ø´ØªØ±ÙŠØ§Øª ÙˆØ§Ù„Ù…Ø®Ø§Ø²Ù†)', 'Ø¯Ø§Ø±Ø© Ø§Ù„Ø´Ø±Ø§Ø¡: Ø·Ø¨ÙŠØ¹Ø© ÙˆØ¸ÙŠÙØ© Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…ÙˆØ§Ø¯ØŒ Ø§Ù„Ø§ØªØ¬Ø§Ù‡Ø§Øª Ø§Ù„Ø­Ø¯ÙŠØ«Ø© ÙÙŠ Ø¥Ø¯Ø§Ø±Ø© Ø¹Ù…Ù„ÙŠØ§Øª Ø§Ù„Ø´Ø±Ø§Ø¡ØŒ Ø¬ÙˆØ¯Ø© Ø§Ù„Ø´Ø±Ø§Ø¡ØŒ ØªÙˆÙ‚ÙŠØª Ø§Ù„Ø´Ø±Ø§Ø¡ ÙˆØªÙƒÙ„ÙØªÙ‡ØŒ Ù…ØµØ§Ø¯Ø± Ø§Ù„ØªÙˆØ±ÙŠØ¯ØŒ Ø´Ø±Ø§Ø¡ Ø§Ù„Ù…Ø¹Ø¯Ø§Øª Ø§Ù„Ø±Ø£Ø³Ù…Ø§Ù„ÙŠØ©ØŒ ØªÙ‚ÙŠÙŠÙ… Ø£Ø¯Ø§Ø¡ Ø¬Ù‡Ø§Ø² Ø§Ù„Ø´Ø±Ø§Ø¡.  Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø®Ø²ÙˆÙ†: Ø§Ù„Ø§Ø³ØªØ«Ù…Ø§Ø± ÙÙŠ Ø§Ù„Ù…Ø®Ø²ÙˆÙ†ØŒ ØªØ®Ø·ÙŠØ· ÙˆÙ…Ø±Ø§Ù‚Ø¨Ø© Ø§Ù„Ù…Ø®Ø²ÙˆÙ†ØŒ ØªØ®Ø·ÙŠØ· Ù…Ø³ØªÙˆÙŠØ§Øª Ø§Ù„Ù…Ø®Ø²ÙˆÙ†ØŒ Ø§Ù„Ù…Ø®Ø²ÙˆÙ† Ø§Ù„Ø±Ø§ÙƒØ¯ØŒ Ø§Ù„Ù…Ø®Ø²ÙˆÙ† Ø§Ù„ØµÙØ±ÙŠØŒ Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„Ø­Ø§Ø³Ø¨Ø§Øª Ø§Ù„Ø¢Ù„ÙŠØ© ÙÙŠ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø´Ø±Ø§Ø¡ ÙˆØ§Ù„ØªØ®Ø²ÙŠÙ†.Ø§', 3, 2, 'frist term'),
(66, 1, 'Ø¨Ø­ÙˆØ« Ø§Ù„Ø¹Ù…Ù„ÙŠØ§Øª ÙÙ‰ Ø§Ù„Ø¥Ø¯Ø§Ø±Ø©', 'Ù…Ù‚Ø¯Ù…Ø© Ø¹Ù† Ø¨Ø­ÙˆØ« Ø§Ù„Ø¹Ù…Ù„ÙŠØ§Øª , ØªØ¹Ø±ÙŠÙØ© ÙˆØªØ·ÙˆØ±Ù‡ , ØªØ­ÙˆÙŠÙ„ Ø§Ù„Ù…Ø´ÙƒÙ„Ø§Øª Ø§Ù„Ø§Ø¯Ø§Ø±ÙŠØ© Ø§Ù„Ù‰ Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ø¨Ø±Ù…Ø¬Ø© Ø§Ù„Ø®Ø·ÙŠØ© , Ø§Ù„Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„Ø¨ÙŠØ§Ù†ÙŠØ© Ù„Ø­Ù„ Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ø¨Ø±Ù…Ø¬Ø© Ø§Ù„Ø®Ø·ÙŠØ© Ø§Ù„Ø¨Ø³ÙŠØ·Ø©. Ù…Ø´Ø§ÙƒÙ„ Ø§Ù„Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„Ø¨ÙŠØ§Ù†ÙŠØ©. Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„Ø³Ù…Ø¨Ù„ÙƒØ³ ÙÙ‰ Ø­Ù„ Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ø¨Ø±Ù…Ø¬Ø© Ø§Ù„Ø®Ø·ÙŠØ© Ø§Ù„Ù…Ø´Ø§ÙƒÙ„ Ø§Ù„ØªÙŠ ØªÙˆØ§Ø¬Ù‡ Ø§Ù„Ø­Ù„ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„Ø³Ù…Ø¨Ù„ÙƒØ³ , ØªÙØ³ÙŠØ± Ø¬Ø¯ÙˆÙ„ Ø§Ù„Ø³Ù…Ø¨Ù„ÙƒØ³. ØªØ­Ù„ÙŠÙ„ Ø§Ù„Ø­Ø³Ø§Ø³ÙŠØ©. Ø¥ÙŠØ¬Ø§Ø¯ Ø§Ù„Ø­Ù„ÙˆÙ„ Ø§Ù„Ø«Ù†Ø§Ø¦ÙŠØ© Ù„Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ø¨Ø±Ù…Ø¬Ø© Ø§Ù„Ø®Ø·ÙŠØ© ÙˆØªÙØ³ÙŠØ± Ø¬Ø¯ÙˆÙ„ Ø§Ù„Ø­Ù„ , Ø§Ù„ØªÙØ³ÙŠØ± Ø§Ù„Ø§Ù‚ØªØµØ§Ø¯ÙŠ ØªÙØ³ÙŠØ± Ù„Ø¬Ø¯ÙˆÙ„ Ø§Ù„Ø³Ù…Ø¨Ù„ÙƒØ³ Ù„Ù„Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ø«Ù†Ø§Ø¦ÙŠØ©. Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ù†Ù‚Ù„: ØªØ¹Ø±ÙŠÙ Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ù†Ù‚Ù„ , Ø­Ù„ Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ù†Ù‚Ù„ Ù†Ù…ÙˆØ°Ø¬ Ø§Ù„ØªØ®ØµÙŠØµ ÙˆÙ†Ù…ÙˆØ°Ø¬ Ø§Ù„Ø´Ø­Ù†Ø§Øª Ø´Ø¨ÙƒØ§Øª Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ , Ø·Ø±ÙŠÙ‚Ø© Ø§Ù‚ØµØ± Ù…Ø³Ø§Ø± ( Ø§Ù„Ù…Ø³Ø§Ø± Ø§Ù„Ø­Ø±Ø¬ ) Ø§Ø³ØªØ®Ø¯Ø§Ù… Ù…Ø´ÙƒÙ„Ø© Ø§Ù„Ø¨Ø±Ù…Ø¬Ø© Ø§Ù„Ø®Ø·ÙŠØ© ÙÙ‰ ØªÙ…Ø«ÙŠÙ„ Ù…Ø´ÙƒÙ„Ø© Ø´Ø¨ÙƒØ§Øª Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø¬Ø¯ÙˆÙ„Ø© Ø§Ù„Ø£Ø¹Ù…Ø§Ù„: Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„Ù…Ø³Ø§Ø± Ø§Ù„Ø­Ø±Ø¬ (cpm) ÙˆØ·Ø±ÙŠÙ‚Ø© Ø¨ÙŠØ±Øª (pert ). Ø³Ù„Ø§Ø³Ù„ Ù…Ø§Ø±ÙƒÙˆÙ ÙˆØ§Ø³ØªØ®Ø¯Ø§Ù…Ø§ØªÙ‡Ø§ ÙÙ‰ Ø§ØªØ®Ø§Ø° Ø§Ù„Ù‚Ø±Ø§Ø±Ø§Øª. Ù†Ù…Ø§Ø²Ø¬ Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø®Ø§Ø²Ù†.', 3, 2, 'frist term'),
(67, 1, 'Ø£ØµÙˆÙ„ Ù…Ø­Ø§Ø³Ø¨Ø© Ø§Ù„ØªÙƒØ§Ù„ÙŠÙ', 'Ø£ØµÙˆÙ„ ÙˆÙ…Ù‚ÙˆÙ…Ø§Øª Ù†Ø¸Ø§Ù… Ø§Ù„ØªÙƒØ§Ù„ÙŠÙ, Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ù…Ø±Ø§Ù‚Ø¨Ø© ÙÙ‰ Ø¸Ù„ Ø£Ù†Ø¸Ù…Ø© Ø§Ù„Ø§Ù†Ø¯Ù…Ø§Ø¬ ÙˆØ§Ù„Ø§Ù†ÙØµØ§Ù„, Ø§Ù„Ù‚ÙŠØ§Ø³ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ù‰ Ù„Ù„ØªÙƒØ§Ù„ÙŠÙ, Ù…ÙØ§Ù‡ÙŠÙ… Ø§Ù„ØªÙƒØ§Ù„ÙŠÙ Ù„Ø£ØºØ±Ø§Ø¶ Ø§Ù„Ù‚ÙŠØ§Ø³, ØªÙˆÙÙŠØ± Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª Ù„Ù„ØªØ®Ø·ÙŠØ· ÙˆØ§Ù„Ø±Ù‚Ø§Ø¨Ø© ÙˆØ§ØªØ®Ø§Ø° Ø§Ù„Ù‚Ø±Ø§Ø±Ø§Øª, Ù†Ù…ÙˆØ°Ø¬ Ø§Ù„ØªÙƒÙ„ÙØ© ÙˆØ¯ÙˆØ§Ù„ Ø§Ù„ØªÙƒØ§Ù„ÙŠÙ ÙˆÙ†Ø¸Ø±ÙŠØ§Øª Ø§Ù„ØªØ­Ù…ÙŠÙ„ Ø§Ù„Ù…Ø®ØªÙ„ÙØ© Ù„Ù„ØªÙƒØ§Ù„ÙŠÙ, Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© ÙˆØ§Ù„Ø±Ù‚Ø§Ø¨Ø© Ø¹Ù„Ù‰ Ø¹Ù†ØµØ± Ø§Ù„Ù…ÙˆØ§Ø¯ ÙˆØªÙƒÙ„ÙØ© Ø§Ù„Ø¹Ù…Ù„ Ø§Ù„Ø¨Ø´Ø±Ù‰ ÙˆØ§Ù„ØªÙƒØ§Ù„ÙŠÙ ØºÙŠØ± Ø§Ù„Ù…Ø¨Ø§Ø´Ø±Ø©, ØªØ­Ù„ÙŠÙ„ Ø§Ù„ØªÙƒØ§Ù„ÙŠÙ Ø§Ù„ØªØ³ÙˆÙŠÙ‚ÙŠØ© ÙˆØ§Ù„Ø¥Ø¯Ø§Ø±ÙŠØ© ÙˆØ§Ù„Ø±Ù‚Ø§Ø¨Ø© Ø¹Ù„ÙŠÙ‡Ø§. Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø¹Ù† ØªÙƒØ§Ù„ÙŠÙ Ø§Ù„Ø£ÙˆØ§Ù…Ø± Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ©. Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø¹Ù† ØªÙƒØ§Ù„ÙŠÙ Ø§Ù„Ù…Ù‚Ø§ÙˆÙ„Ø§Øª. Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø¹Ù† ØªÙƒØ§Ù„ÙŠÙ Ø§Ù„Ù…Ø±Ø§Ø­Ù„ Ø§Ù„Ø§Ù†ØªØ§Ø¬ÙŠØ© , Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø¹Ù† ØªÙƒØ§Ù„ÙŠÙ Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª Ø§Ù„Ù…Ø´ØªØ±ÙƒØ© ÙˆØ§Ù„ÙØ±Ø¹ÙŠØ© Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ø© Ø¹Ù† Ø§Ù„ØªÙƒØ§Ù„ÙŠÙ Ø§Ù„Ù…Ø¹ÙŠØ§Ø±ÙŠØ©.', 3, 2, 'frist term'),
(68, 1, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø©', 'ØªØ¹Ø±ÙŠÙ Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø© ÙˆØ£Ø³Ø§Ø³ÙŠØ§ØªÙ‡Ø§. Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø© Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ© ÙˆØ§Ù„Ø®Ø§ØµØ©. Ù…Ø±Ø§Ø¬Ø¹Ø© Ø§Ù„Ø£Ù†Ø¸Ù…Ø© Ø§Ù„ØªÙ‰ ØªØ³ØªØ®Ø¯Ù… Ø§Ù„Ø­Ø§Ø³Ø¨Ø§Øª Ø§Ù„Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ© ÙÙ‰ ØªØ´ØºÙŠÙ„ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª Ø§Ù„Ù…Ø­Ø§Ø³Ø¨ÙŠØ©. Ø£Ø¯Ù„Ø© Ø§Ù„Ø¥Ø«Ø¨Ø§Øª ÙÙ‰ Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø©. Ù…Ø³ØªÙˆÙŠØ§Øª Ø§Ù„Ø£Ø¯Ø§Ø¡ Ø§Ù„Ù…Ù‡Ù†ÙŠ, Ù…ÙˆÙ‚Ù Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹ Ù…Ù† Ù…Ø´Ø§ÙƒÙ„ Ø§Ù„Ù‚ÙŠØ§Ø³ Ø§Ù„Ù…Ø­Ø§Ø³Ø¨Ù‰ Ø§Ù„ÙØ­Øµ ÙˆØ§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø§Øª Ø§Ù„Ø®Ø§ØµØ©, Ù…Ø³Ø¦ÙˆÙ„ÙŠØ© Ù…Ø±Ø§Ø¬Ø¹ Ø§Ù„Ø­Ø³Ø§Ø¨Ø§Øª.', 3, 2, 'frist term'),
(69, 1, 'Ø§Ù„ØªØ§Ù…ÙŠÙ† ÙˆØ±ÙŠØ§Ø¶ÙŠØ§ØªÙ‡', 'Ù…ÙÙ‡ÙˆÙ… Ø§Ù„Ø®Ø·Ø± , Ù…Ø³Ø¨Ø¨Ø§Øª Ø§Ù„Ø®Ø·Ø±, Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø®Ø·Ø±, Ø§Ù„ØªØ§Ù…ÙŠÙ† ÙˆØªØ¹Ø±ÙŠÙ Ø§Ù„ØªØ§Ù…ÙŠÙ† ÙˆØ£Ù†ÙˆØ§Ø¹Ù‡. Ø£Ø³ÙˆØ§Ù‚ Ø§Ù„ØªØ§Ù…ÙŠÙ† Ø§Ù„Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ø£Ø³Ø§Ø³ÙŠØ© Ù„Ù„ØªØ§Ù…ÙŠÙ†, ÙˆØ¸Ø§Ø¦Ù Ø´Ø±ÙƒØ§Øª Ø§Ù„ØªØ§Ù…ÙŠÙ† Ø§Ù„Ø¬ÙˆØ§Ù†Ø¨ Ø§Ù„Ø¹Ù…Ù„ÙŠØ© Ù„Ù„ØªØ§Ù…ÙŠÙ†: Ù†Ø¸Ø±ÙŠØ© Ø§Ù„Ø§Ø­ØªÙ…Ø§Ù„Ø§Øª ØªØ§Ù…ÙŠÙ† Ø§Ù„Ù…Ù…ØªÙ„ÙƒØ§Øª ( ÙƒÙŠÙÙŠØ© Ø­Ø³Ø§Ø¨ Ø§Ù„Ù‚Ø³Ø· Ø§Ù„Ø§Ø¶Ø§ÙÙ‰ ÙˆØ§Ù„Ø¥Ø¬Ù…Ø§Ù„ÙŠ Ù„ÙˆØ«ÙŠÙ‚Ø© ØªØ§Ù…ÙŠÙ† Ø§Ù„Ù…Ù…ØªÙ„ÙƒØ§Øª) ØªØ£Ù…ÙŠÙ†Ø§Øª Ø§Ù„Ø­ÙŠØ§Ø©. Ø§Ù„Ø£Ø³Ø³ Ø§Ù„Ù‚ÙŠÙ…Ø© Ù„Ø­Ø³Ø§Ø¨ Ø§Ù„Ø£Ù‚Ø³Ø§Ø· ÙÙ‰ ØªØ£Ù…ÙŠÙ†Ø§Øª Ø§Ù„Ø­ÙŠØ§Ø© ( Ø¯Ø±Ø§Ø³Ø© Ø¬Ø¯Ø§ÙˆÙ„ Ø§Ù„Ø­ÙŠØ§Ø© ÙˆØ¬Ø¯Ø§ÙˆÙ„ Ø§Ù„Ø±Ù…ÙˆØ² Ø§Ù„Ø­Ø³Ø§Ø¨ÙŠØ© , ÙƒÙŠÙÙŠØ© Ø­Ø³Ø§Ø¨ Ø£Ù‚Ø³Ø§Ø· Ø§Ù„ÙˆØ­ÙŠØ¯Ø© Ø§Ù„ØµØ§ÙÙŠØ© Ù„Ù„Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„Ù…Ø®ØªÙ„ÙØ© Ù„ÙˆØ«Ø§Ø¦Ù‚ ØªØ§Ù…ÙŠÙ† Ø§Ù„Ø­ÙŠØ§Ø© Ø­Ø³Ø§Ø¨ Ø§Ù„Ù‚Ø³Ø· Ø§Ù„Ø³Ù†ÙˆÙ‰ Ø§Ù„ØµØ§ÙÙŠ ÙˆØ§Ù„Ù‚Ø³Ø· Ø§Ù„Ø³Ù†ÙˆÙŠ Ø§Ù„ØªØ¬Ø§Ø±ÙŠ Ù„ÙˆØ«Ø§Ø¦Ù‚ ØªØ§Ù…ÙŠÙ† Ø§Ù„Ø­ÙŠØ§Ø© Ø­Ø³Ø§Ø¨ Ø§Ù„Ù…Ø®ØµØµØ§Øª Ù„ØªØ£Ù…ÙŠÙ†Ø§Øª Ø§Ù„Ø­ÙŠØ§Ø© ). Ø¥Ø¹Ø§Ø¯Ø© Ø§Ù„ØªØ§Ù…ÙŠÙ†: ØªØ¹Ø±ÙŠÙØ© , Ø·Ø¨ÙŠØ¹ØªÙ‡, Ø£Ù†ÙˆØ§Ø¹ Ø§ØªÙØ§Ù‚ÙŠØ§Øª Ø¥Ø¹Ø§Ø¯Ø© Ø§Ù„ØªØ§Ù…ÙŠÙ† , Ø§Ù„Ø¬ÙˆØ§Ù†Ø¨ Ø§Ù„Ø¹Ù…Ù„ÙŠØ© Ù„Ø¹Ù…Ù„ÙŠØ§Øª Ø¥Ø¹Ø§Ø¯Ø© Ø§Ù„ØªØ§Ù…ÙŠÙ†.', 3, 2, 'frist term');

-- --------------------------------------------------------

--
-- Table structure for table `system_messages`
--

CREATE TABLE IF NOT EXISTS `system_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `when` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE IF NOT EXISTS `system_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_image` text NOT NULL,
  `year_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_image`, `year_id`, `department_id`) VALUES
(1, 'p3tz0i4cqrbagwy.png', 3, 1),
(2, '35pavxro60us2md.png', 2, 3),
(3, 'y4xm7gf3dlzho5c.png', 4, 1),
(4, '0jpk4l6na5bgfxv.png', 1, 1),
(5, '3niyht8uk6wgbx5.png', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_title` varchar(500) NOT NULL,
  `task_content` text NOT NULL,
  `ex_date` date NOT NULL,
  `subject_id` int(11) NOT NULL,
  `made_by` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `file_exist` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_title`, `task_content`, `ex_date`, `subject_id`, `made_by`, `department_id`, `term`, `file_exist`, `created_at`, `year`) VALUES
(4, 'test this task ', '%25253Cb%25253Ei%252520wanna%252520you%252520to%252520do%252520something%252520in%252520this%252520task%252526nbsp%25253B%25253C%25252Fb%25253E', '2015-06-09', 24, 20, 1, 1, 1, '2015-06-07', 4),
(5, 'alaatask', 'task%20content', '2015-06-17', 4, 20, 1, 1, 0, '2015-06-09', 3),
(6, 'alaatask', 'task%20content', '2015-06-17', 4, 20, 1, 1, 0, '2015-06-09', 3),
(7, 'task', 'content', '2015-06-10', 24, 20, 1, 1, 0, '2015-06-09', 3),
(8, 'tasl', 'contentklfdopjdfiovdfiovhdfivodfio%20dfh%20iodfh%20oidfviodfhviodfodifiodfhv%20dfvcf%20df%20fndviourv%0D%0AUI%2Frlv.bkm%2Cjnhbhgdfgbhndjmk%2Cbg%20dfvmv.erverv', '2015-06-17', 1, 20, 1, 1, 0, '2015-06-09', 3),
(9, 'tasl', 'contentbfdbdf', '2015-06-17', 2, 20, 1, 1, 0, '2015-06-09', 3),
(10, 'tasl', 'contentbfdbdf', '2015-06-17', 3, 20, 1, 1, 0, '2015-06-09', 3),
(11, 'tasl', 'contentbfdbdf', '2015-06-17', 5, 20, 1, 1, 0, '2015-06-09', 3),
(12, 'tasl', 'contentbfdbdf', '2015-06-17', 20, 20, 1, 1, 0, '2015-06-09', 3),
(13, 'tasl', 'contentbfdbdf', '2015-06-17', 21, 20, 1, 1, 0, '2015-06-09', 3),
(14, 'tasl', 'contentbfdbdf', '2015-06-17', 22, 20, 1, 1, 0, '2015-06-09', 3),
(15, 'tasl', 'contentbfdbdf', '2015-06-17', 24, 20, 1, 1, 0, '2015-06-09', 3),
(16, 'test', 'test the tasks work', '2015-06-19', 2, 20, 1, 1, 0, '2015-06-11', 2),
(17, 'test', 'test the tasks work', '2015-06-19', 2, 20, 1, 1, 0, '2015-06-11', 4),
(18, 'test mark', 'test the mark and answer', '2015-06-22', 1, 20, 1, 1, 0, '2015-06-20', 4),
(19, 'wiating or not', 'witing mark answers', '2015-06-17', 1, 20, 1, 1, 0, '2015-06-12', 4),
(20, 'last task', 'djkcbcjwe', '2015-06-23', 1, 20, 1, 1, 0, '2015-06-12', 4),
(21, 'sheet here ', 'details about this task here&amp;nbsp;', '2015-06-19', 1, 20, 1, 1, 0, '2015-06-15', 1),
(22, 'sheet here ', 'details about this task here&amp;nbsp;', '2015-06-19', 1, 20, 1, 1, 0, '2015-06-15', 1),
(23, 'sheet here ', 'details about this task here&amp;nbsp;', '2015-06-19', 1, 20, 1, 1, 0, '2015-06-15', 1),
(24, 'sheet here ', 'details about this task here&amp;nbsp;', '2015-06-19', 1, 20, 1, 1, 0, '2015-06-15', 1),
(25, 'sheet here ', 'details about this task here&amp;nbsp;', '2015-06-19', 28, 20, 1, 1, 0, '2015-06-15', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tasks_answers`
--

CREATE TABLE IF NOT EXISTS `tasks_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_exist` varchar(120) NOT NULL,
  `answerd` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tasks_answers`
--

INSERT INTO `tasks_answers` (`id`, `content`, `student_id`, `file_exist`, `answerd`, `task_id`) VALUES
(1, 'tasks answer', 1, '0', 0, 0),
(2, 'tasks answer', 1, '0', 1, 0),
(3, 'tasks answer', 1, '0', 1, 0),
(4, 'tasks answer', 1, 'civ0bmlsuypzwo6.sql', 8, 4),
(5, 'tasks answer', 1, '5fi6hylp2d970wq.jpg', 1, 17),
(6, 'tasks answer', 1, 'k6swndl05c29uay.jpg', 7, 18),
(7, 'answer', 1, 'z0jg2iv461nhues.', 5, 19),
(8, 'wedcklnwe', 1, '0bdw3g7n1t8fuli.', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tasks_answers_files`
--

CREATE TABLE IF NOT EXISTS `tasks_answers_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks_files`
--

CREATE TABLE IF NOT EXISTS `tasks_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tasks_files`
--

INSERT INTO `tasks_files` (`id`, `task_id`, `file`) VALUES
(2, 4, 'Ù†Ø¸Ù… Ø®Ø¨ÙŠØ±Ù‡.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
