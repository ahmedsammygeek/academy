-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2015 at 04:57 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `demonstrator_subjects`
--

INSERT INTO `demonstrator_subjects` (`id`, `subject_id`, `demonstrator_id`) VALUES
(1, 17, 3),
(2, 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(3, 'cs', 'fjvbdjkbvfjkv'),
(4, 'is', 'sopjidfnvoidnvtrotbtejkdbfvdfbjkdbf'),
(5, 'bahaa', 'jadcnijrciernievrnier');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `last_exams`
--

INSERT INTO `last_exams` (`id`, `department_id`, `year`, `term`, `exam_file`, `subject_id`) VALUES
(5, 3, 1, 1, '0fabzc37i1eu54r.jpg', 1),
(6, 3, 1, 1, 'tkan2pz836hg0yr.html', 1),
(7, 3, 1, 1, '31smowzjqg5th0i.html', 1),
(8, 3, 1, 1, 'q13y4uwmlskt57b.html', 1),
(9, 3, 1, 1, 'ayac.html', 1),
(10, 3, 1, 1, 'ayac.html', 1),
(11, 3, 1, 1, 'ayac.html', 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `summary`, `date`, `doctor_id`, `subject_id`, `has_file`) VALUES
(1, 'dfdfds', '2015-03-15', 1, 1, 0),
(2, 'dfdfds', '2015-03-15', 1, 1, 0),
(3, 'dfdfds', '2015-03-15', 1, 1, 0),
(4, 'dfdfds', '2015-03-15', 1, 1, 0),
(5, '', '2015-03-15', 1, 1, 1),
(6, '', '2015-03-15', 1, 1, 1),
(7, '', '2015-03-16', 1, 1, 1),
(8, '', '2015-03-16', 1, 1, 1),
(9, 'sdfsdfds\r\n', '2015-03-16', 1, 1, 1),
(10, '', '2015-03-16', 1, 1, 1),
(11, '', '2015-03-16', 1, 1, 1),
(12, '', '2015-03-16', 1, 1, 1),
(13, '', '2015-03-16', 1, 1, 1),
(14, '', '2015-03-16', 1, 1, 1),
(15, '', '2015-03-16', 1, 1, 1),
(16, '', '2015-03-16', 1, 1, 1),
(17, 'dfdfds', '2015-03-16', 1, 1, 1),
(18, 'dfdfds', '2015-03-16', 1, 1, 1),
(19, 'dfdfds', '2015-03-16', 1, 1, 1),
(20, '', '2015-03-16', 1, 1, 1),
(21, '', '2015-03-16', 1, 1, 1),
(22, '', '2015-03-16', 1, 1, 1),
(23, '', '2015-03-16', 1, 1, 1),
(24, '', '2015-03-16', 1, 1, 1),
(25, '', '2015-03-16', 1, 1, 1),
(26, '', '2015-03-16', 1, 1, 1),
(27, '', '2015-03-16', 1, 1, 1),
(28, '', '2015-03-16', 1, 1, 1),
(29, '', '2015-03-16', 1, 1, 1),
(30, '', '2015-03-16', 1, 1, 1),
(31, 'some kkkkkk', '2015-03-16', 1, 1, 1),
(32, 'ffff', '2015-03-16', 1, 1, 1),
(33, 'ffff', '2015-03-16', 1, 1, 1),
(34, 'ffffasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddnnn', '2015-03-16', 1, 1, 1),
(35, 'safdsf;sldf;lsd''f;ldsfllllllllllll', '2015-03-16', 1, 1, 1),
(36, 'dfd', '2015-03-16', 1, 1, 1),
(37, 'dfd', '2015-03-16', 1, 1, 1),
(38, 'dfd', '2015-03-16', 1, 1, 1),
(39, 'dfd', '2015-03-16', 1, 1, 1),
(40, 'dfd', '2015-03-16', 1, 1, 1),
(41, 'dfd', '2015-03-16', 1, 1, 1),
(42, 'dfd', '2015-03-16', 1, 1, 1),
(43, 'dfd', '2015-03-16', 1, 1, 1),
(44, 'txt test ', '2015-03-16', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lectures_files`
--

CREATE TABLE IF NOT EXISTS `lectures_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lectures_files`
--

INSERT INTO `lectures_files` (`id`, `lecture_id`, `file`) VALUES
(1, 42, 'lZQdpWFRQpurg6ErKfZN.jpg'),
(2, 43, 'OQ8aYf21nR9mm7AoMZWR.jpg'),
(3, 43, 'XXiXLZfpwyTr5CPMMD9C.jpg'),
(4, 44, 'TzQ0Nh4135ZjKetRtqR7_1.txt'),
(5, 44, 'lSY4VjbalWjo9uIctbfz_1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contant` text NOT NULL,
  `time` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `contant`, `time`) VALUES
(9, 'amira', 'amira@yahoo.com', 'nadklcndklsdc', '30-03-2015 & 20:00:20'),
(10, 'nora', 'alaaelgndy21@yahoo.com', 'jebvjkvbervbovierbveivbeorrev', '30-03-2015 & 23:07:50'),
(11, 'alaa', 'alaaelgndy21@yahoo.com', 'kdchkdscsd', '31-03-2015 & 11:18:01'),
(12, 'bahaa', 'bedo_bedo2014@yahoo.com', 'ibhveeiutvuibtruibvtruibrtvuibtrui', '11-04-2015 & 23:32:44');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(2, 'what is your nameeeeeeeeeee?', 'my name is alaa elgndy'),
(3, 'how are you ?', 'fine el7 :D');

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
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` varchar(500) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `link`) VALUES
(12, 'dfrlka6q308hxzj.jpg', 'sdm', 'jkjsb');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `doctor_id`, `name`, `description`, `year`, `department`, `term`) VALUES
(1, 1, 'object oritaned projramming', 'some text here ', 3, 1, 'frist term'),
(2, 2, 'Introduction to Computer', 'data manipulation & data communication. System software that include operating system, programming language translators & others. First principles of writing algorithms, programming & software development are introduced. The concept of computer science, information system, decision support systems & information technology are to be present', 3, 1, 'frist term'),
(3, 2, 'Discrete Structure', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(4, 5, 'Physics', 'Physics Physics Physics Physics Physics Physics Physics Physics Physics PhysicsPhysics ', 2, 1, 'frist term'),
(5, 1, 'Mathematics', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(6, 5, 'System Analysis', 'Physics Physics Physics Physics Physics Physics Physics Physics Physics PhysicsPhysics ', 2, 1, 'frist term'),
(7, 1, 'English ', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(8, 1, 'File organization & processing', 'Physics Physics Physics Physics Physics Physics Physics Physics Physics PhysicsPhysics ', 2, 1, 'frist term'),
(9, 2, 'Structured Programming', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(10, 1, 'Computer Organization', 'Physics Physics Physics Physics Physics Physics Physics Physics Physics PhysicsPhysics ', 2, 1, 'frist term'),
(11, 7, 'Electronics', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(12, 5, 'Database Systems', 'Physics Physics Physics Physics Physics Physics Physics Physics Physics PhysicsPhysics ', 2, 1, 'frist term'),
(13, 2, 'Mathematics  3', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(14, 5, 'Probability & Statistics', 'Physics Physics Physics Physics Physics Physics Physics Physics Physics PhysicsPhysics ', 2, 1, 'frist term'),
(15, 2, 'Logic design', 'Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure Discrete Structure', 3, 1, 'second term'),
(16, 5, 'Humanities', 'alaa', 2, 3, 'frist term');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_image`, `year_id`, `department_id`) VALUES
(1, 'sm8uxlf9o0i7hd4.jpg', 1, 3);

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
  `doctor_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `file_exist` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks_answers`
--

CREATE TABLE IF NOT EXISTS `tasks_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_exist` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
