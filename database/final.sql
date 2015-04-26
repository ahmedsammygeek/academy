-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2015 at 11:09 PM
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
  `type` enum('section','lecture') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `summary`, `date`, `doctor_id`, `subject_id`, `has_file`, `type`) VALUES
(50, 'jsut test ', '2015-04-24', 1, 1, 0, 'lecture'),
(51, 'a nother test with fils', '2015-04-24', 1, 1, 1, 'lecture'),
(52, 'test section part', '2015-04-24', 1, 1, 0, 'section'),
(55, 'test section with uploading files', '2015-04-24', 1, 1, 1, 'section');

-- --------------------------------------------------------

--
-- Table structure for table `lectures_files`
--

CREATE TABLE IF NOT EXISTS `lectures_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lectures_files`
--

INSERT INTO `lectures_files` (`id`, `lecture_id`, `file`) VALUES
(8, 51, 'lists.txt'),
(9, 55, '7aed53c29b912859ff49f6f29a76a3a6_test.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `contant`, `time`, `viewed`) VALUES
(11, 'alaa', 'alaaelgndy21@yahoo.com', 'kdchkdscsd', '0000-00-00 00:00:00', ''),
(12, 'bahaa', 'bedo_bedo2014@yahoo.com', 'ibhveeiutvuibtruibvtruibrtvuibtrui', '0000-00-00 00:00:00', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`) VALUES
(1, 'lkdnfjdb', 'fdlkvbdjfbvdjkf', 'f2j67smrgl584qd.jpg', 'Apr 24 2015');

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
-- Table structure for table `question_answers`
--

CREATE TABLE IF NOT EXISTS `question_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `made_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(12, 'dfrlka6q308hxzj.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `title`, `description`, `facebook`, `email`, `username`, `password`, `type`) VALUES
(1, 'bahaa', 'm0ergcaions45zv.jpg', 'doctor', 'jfbvkdfjbj', 'bjksfbvjkdfbv', 'alaaelgndy21@yahoo.com', 'bahaa', 'bahaa', 2),
(2, 'adham', 'klqtgh8sbnxp30u.jpg', 'domenestor', 'kvhjhfhf', 'jhfjhfhgfhg', 'adham@yahoo.com', 'adham', '86b2a01d075b44052b51bd0e6c1cf31afc2a4092', 1);

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
  `date` date NOT NULL,
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
