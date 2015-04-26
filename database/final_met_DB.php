-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2015 at 10:07 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

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
(11, 3, 1, 1, 'ayac.html', 1),
(12, 3, 1, 1, '6ul1kj0fz8xptc4.png', 1);

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
(11, 'alaa', 'alaaelgndy21@yahoo.com', 'kdchkdscsd', '0000-00-00 00:00:00', 'watched'),
(12, 'bahaa', 'bedo_bedo2014@yahoo.com', 'ibhveeiutvuibtruibvtruibrtvuibtrui', '0000-00-00 00:00:00', 'watched');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`) VALUES
(1, 'lkdnfjdb', 'fdlkvbdjfbvdjkf', 'f2j67smrgl584qd.jpg', 'Apr 24 2015'),
(2, 'ÙÙ‡ÙÙ…ÙŠØ³Ø¨Ø³', 'Ø³ÙŠØ¨ÙŠØ³Ø¨ÙŠØ³Ù†Ù…', 'zip81vhn3f6gjsm.jpg', 'Apr 24 2015');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `made_by` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `content`, `made_by`, `date`) VALUES
(1, 'eny content for test', 1, '2015-04-26 12:01:43'),
(2, 'done abos eidk b2a 2 :D', 5, '2015-04-26 12:08:21'),
(3, 'done abos eidk b2a 2 :D', 5, '2015-04-26 12:10:22'),
(4, 'a new task has been made by doctorbahaa', 1, '2015-04-26 16:11:24'),
(5, 'a new task has been made by doctorbahaa', 1, '2015-04-26 16:12:09'),
(6, 'a new task has been made by doctor bahaa', 1, '2015-04-26 16:22:12'),
(7, 'a new task has been made by doctor bahaa', 1, '2015-04-26 16:23:12'),
(8, 'a new task has been made by doctor bahaa', 1, '2015-04-26 16:25:36'),
(9, 'a new task has been made by doctor bahaa', 1, '2015-04-26 16:28:52');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `notifications_users`
--

INSERT INTO `notifications_users` (`id`, `notification_id`, `user_id`, `seen`) VALUES
(1, 2, 4, 0),
(2, 2, 90, 0),
(3, 2, 5, 0),
(4, 2, 6, 0),
(5, 2, 7, 0),
(6, 2, 8, 0),
(7, 2, 9, 0),
(8, 3, 4, 0),
(9, 3, 90, 0),
(10, 3, 5, 0),
(11, 3, 6, 0),
(12, 3, 7, 0),
(13, 3, 8, 0),
(14, 3, 9, 0),
(15, 4, 0, 0),
(16, 4, 0, 0),
(17, 5, 0, 0),
(18, 5, 0, 0),
(19, 5, 0, 0),
(20, 5, 0, 0),
(21, 5, 0, 0),
(22, 5, 0, 0),
(23, 5, 0, 0),
(24, 5, 0, 0),
(25, 5, 0, 0),
(26, 5, 0, 0),
(27, 5, 0, 0),
(28, 6, 0, 0),
(29, 6, 0, 0),
(30, 7, 0, 0),
(31, 7, 0, 0),
(32, 7, 0, 0),
(33, 7, 0, 0),
(34, 7, 0, 0),
(35, 7, 0, 0),
(36, 7, 0, 0),
(37, 7, 0, 0),
(38, 7, 0, 0),
(39, 7, 0, 0),
(40, 7, 0, 0),
(41, 8, 0, 0),
(42, 8, 0, 0),
(43, 8, 0, 0),
(44, 8, 0, 0),
(45, 8, 0, 0),
(46, 8, 0, 0),
(47, 8, 0, 0),
(48, 8, 0, 0),
(49, 8, 0, 0),
(50, 8, 0, 0),
(51, 8, 0, 0),
(52, 9, 3, 0),
(53, 9, 7, 0),
(54, 9, 8, 0),
(55, 9, 9, 0),
(56, 9, 10, 0),
(57, 9, 11, 0),
(58, 9, 12, 0),
(59, 9, 13, 0),
(60, 9, 14, 0),
(61, 9, 15, 0),
(62, 9, 16, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(12, 'dfrlka6q308hxzj.jpg'),
(13, '2hzb3okmejyvg7p.jpg'),
(14, '63ne7m2hsy98dxo.jpg'),
(15, 'bm315j9nohqcegf.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `title`, `description`, `facebook`, `email`, `username`, `password`, `type`) VALUES
(1, 'bahaa', 'm0ergcaions45zv.jpg', 'doctor', 'jfbvkdfjbj', 'bjksfbvjkdfbv', 'alaaelgndy21@yahoo.com', 'bahaa', '8684810b776fc842d58d9fdf7bef82490434ce9b', 2),
(2, 'adham', 'klqtgh8sbnxp30u.jpg', 'domenestor', 'kvhjhfhf', 'jhfjhfhgfhg', 'adham@yahoo.com', 'adham', '86b2a01d075b44052b51bd0e6c1cf31afc2a4092', 1),
(3, 'Ø¨ÙŠØ¨', '0', 'domenestor', '0', '0', '0', 'ÙŠØ¨ÙŠØ¨', 'f25ded3d4e488ea9529e4db08c0567c8720900fe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `year`) VALUES
(1, 'ahmed samy', 1),
(2, 'alaa gendy', 2),
(3, 'nehad samy', 4),
(4, 'amira gendy', 2),
(5, 'sherif ali', 1),
(6, 'ziad gendy', 3),
(7, 'demoksy', 4),
(8, 'moahmed zidan', 4),
(9, 'hmad', 4),
(10, 'bhaa ', 4),
(11, 'mousa', 4),
(12, 'ali zidan', 4),
(13, 'glal', 4),
(14, 'ablnaser ', 4),
(15, 'ali', 4),
(16, 'ziad shabory', 4);

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
  `q_date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_questions`
--

INSERT INTO `student_questions` (`id`, `student_id`, `subject_id`, `content`, `status`, `answered`, `q_date`) VALUES
(1, 3, 1, 'sdfsdfsdf', 0, 0, '2015-04-26 07:41:31'),
(2, 3, 1, 'my test', 0, 0, '2015-04-26 07:41:47'),
(3, 3, 1, 'my test', 0, 0, '2015-04-26 07:48:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_image`, `year_id`, `department_id`) VALUES
(1, 'sm8uxlf9o0i7hd4.jpg', 1, 3),
(2, 'vyfnad19w5h4mzl.png', 3, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_title`, `task_content`, `ex_date`, `subject_id`, `made_by`, `department_id`, `term`, `file_exist`, `created_at`, `year`) VALUES
(1, 'task title', 'sfjsgjkdlf%3Cbr%3Edfgdfkgjdf%3Cbr%3Egdfkgjdfkgjdfg%3Cbr%3Efgkdfjgldjfl', '2015-04-08', 7, 1, 5, 1, 0, '2015-04-30', 0),
(2, 'fksdf;lk', 'sdfsdf', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 0),
(3, '', '', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 0),
(4, 'task title', 'content', '2015-04-29', 1, 1, 3, 1, 0, '2015-04-26', 0),
(6, 'task title', 'content', '2015-04-29', 1, 1, 3, 1, 1, '2015-04-26', 0),
(7, 'task title', 'content', '2015-04-29', 1, 1, 3, 1, 1, '2015-04-26', 0),
(8, 'task title', '', '2015-04-29', 1, 1, 3, 1, 1, '2015-04-26', 0),
(9, 'task title', '', '2015-04-29', 1, 1, 3, 1, 1, '2015-04-26', 0),
(10, 'task title', '', '2015-04-29', 1, 1, 3, 1, 1, '2015-04-26', 0),
(12, 'task title', 'just%2055555555', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 0),
(13, 'task title', 'jkjk', '2015-04-30', 1, 1, 3, 1, 1, '2015-04-26', 1),
(14, 'task title', 'jkjk', '2015-04-30', 1, 1, 3, 1, 1, '2015-04-26', 1),
(16, 'task title', 'jkjk', '2015-04-30', 1, 1, 3, 1, 1, '2015-04-26', 1),
(17, 'task title', 'jkjk', '2015-04-30', 1, 1, 3, 1, 1, '2015-04-26', 1),
(18, 'task title', 'jkjk', '2015-04-30', 1, 1, 3, 1, 1, '2015-04-26', 4),
(19, 'task title', 'jkjk', '2015-04-30', 1, 1, 3, 1, 1, '2015-04-26', 2),
(20, 'Ø³ÙŠØ¨', '%D8%B3%D9%8A%D8%A8%D8%B3%D9%8A%D8%A8', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 4),
(21, 'Ø³ÙŠØ¨', 'boooooooooooooooo', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 4),
(22, 'Ø³ÙŠØ¨', 'boooooooooooooooo', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 4),
(23, 'Ø³ÙŠØ¨', 'boooooooooooooooo', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 2),
(24, 'Ø³ÙŠØ¨', 'boooooooooooooooo', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 2),
(25, 'Ø³ÙŠØ¨', 'boooooooooooooooo', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 2),
(26, 'Ø³ÙŠØ¨', 'boooooooooooooooo565', '2015-04-30', 1, 1, 3, 1, 0, '2015-04-26', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tasks_files`
--

INSERT INTO `tasks_files` (`id`, `task_id`, `file`) VALUES
(1, 6, 'tveez-classes.zip'),
(2, 7, '335f077010cedd2742c0a820de0b6c9a_tveez-classes.zip'),
(3, 7, 'My_CV.pdf'),
(4, 8, 'a83b85a0f5c64b8d7061b052c280a5f3_tveez-classes.zip'),
(5, 9, '931c828d12475ad911717eceff21209e_tveez-classes.zip'),
(6, 10, 'd049f595434de7ef4698daeb8988024d_tveez-classes.zip'),
(7, 13, '1365c1860b143ffd3c0499c7899fe635_tveez-classes.zip'),
(8, 14, '5259e40e38d954919e3bc7466e029486_tveez-classes.zip'),
(10, 16, 'a4d557c779fbb66efe3075d69736f08c_tveez-classes.zip'),
(11, 17, '66d404022813be084a4ef42f90c5267d_tveez-classes.zip'),
(12, 18, '8aad364e901c79c1f9b898e35cc6b2b6_tveez-classes.zip'),
(13, 19, '698e75d161621668ba42d563c84ac092_tveez-classes.zip');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
