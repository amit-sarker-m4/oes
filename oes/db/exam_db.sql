-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 04:08 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `loginid`, `pass`) VALUES
(1, 'amit', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`ques_id` int(5) NOT NULL,
  `test_id` int(5) NOT NULL,
  `ques_desc` varchar(200) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_id`, `test_id`, `ques_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(6, 7, 'What is IUBAT Originally?', 'University.', 'School.', 'College.', 'Chicken firm', 1),
(7, 5, 'your name starts from?', 'A', 'B', 'C', 'D', 0),
(8, 32, 'which is vowel?', 'a', 'b', 'c', 'd', 1),
(9, 33, 'Is it possible to get IEB?', 'yes', 'no', 'may be', 'may be not', 1),
(10, 33, 'which department is perface for IEB?', 'CSE', 'CIVIL', 'EEE', 'BBA', 1),
(11, 33, 'how many faculty in CSE?', '100', '200', 'above 200 ', 'below 200', 3),
(12, 33, 'how many labs in IUBAT?', '1', '2', '3', '4', 4),
(14, 35, 'RAD Software process model stands for _____ .\r\n\r\n', 'Rapid Application Development. ', 'Relative Application Development.', 'Rapid Application Design.', 'Recent Application Development.', 1),
(15, 35, ' COCOMO stands for ______ .\r\n', 'COnsumed COst MOdel', 'COnstructive COst MOdel ', 'COmmon COntrol MOdel', 'COmposition COst MOdel', 2),
(16, 35, 'What is the simplest model of software development paradigm?', 'Spiral model', 'Big Bang model', 'V-model', 'Waterfall model ', 4),
(17, 35, 'Software Requirement Specification (SRS) is also known as specification of _______.', 'White box testing ', 'Acceptance testing', 'Integrated testing', 'Black box testing ', 4),
(18, 35, 'What are the characteristics of software?', 'Software is developed or engineered; it is not manufactured in the classical sense.', 'Software doesn’t “ wear out ”.', 'Software can be custom built or custom build.', 'All mentioned above', 4),
(19, 34, 'Set of data whose items are organized together is classified as...', 'data structure', 'variable structure', 'string structure', 'positive structure', 1),
(20, 34, 'A bit added to bit string to adjust its parity is classified as', 'binary bits', 'even parity', 'zero parity', 'parity bit', 4),
(21, 34, 'Type of memory which is used to read data but not to write on it is classified as', 'random only memory', 'read access memory', 'read only memory', 'random access memory', 3),
(23, 34, 'A character variable can at a time store?', '1 character', '8 character', '254 character', 'none of above', 1),
(24, 34, 'The maximum value that an integer constant can have is?', '-32767', '32767', '1.7014e + 38', '-1.7014e + 38', 2),
(25, 30, '\r\nWho is father of C Language?', 'Bjarne Stroustrup', 'James A. Gosling', 'Dennis Ritchie', 'Dr. E.F. Codd', 3),
(26, 30, 'Special symbol permitted with in the identifier name.', '$', '@', '-', '.', 3),
(28, 30, 'We can insert pre written code in a C program by using', '#read', '#get', '#include', '#put', 3),
(29, 30, 'The first expression in a for loop is', 'Step value of loop', 'Value of the counter variable', 'Any of above', 'none of above', 2),
(30, 30, 'Break statement is used for', 'Quit a program', 'Quit the current iteration', 'Both of above', 'none of above', 2),
(31, 36, 'Is bool a fundamental datatype in C++?', 'Yes', 'No, it is a typedef of unsigned char', 'No, it is an enum of {false,true}', 'No, it is expanded from macros', 1),
(32, 36, 'What happens when a null pointer is converted into bool?', 'An error is flagged', 'bool value evaluates to true', 'bool value evaluates to false', 'the statement is ignored', 3),
(33, 36, 'Which of the two operators ++ and — work for the bool datatype in C++?', 'None', '++', '—', 'Both', 2),
(34, 36, 'Which of the following will not return a value?', 'null', 'void', 'empty', 'free', 2),
(35, 36, '____ have the return type void?', 'all functions', 'constructors', 'destructors', 'none of the mentioned', 4);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `loginid` varchar(20) NOT NULL,
  `test_id` int(5) NOT NULL,
  `test_date` date NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`loginid`, `test_id`, `test_date`, `score`) VALUES
('', 33, '0000-00-00', 3),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 2),
('', 33, '0000-00-00', 2),
('', 33, '0000-00-00', 3),
('', 33, '0000-00-00', 3),
('', 33, '0000-00-00', 3),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 4),
('', 33, '0000-00-00', 3),
('', 35, '0000-00-00', 5),
('', 35, '0000-00-00', 5),
('', 34, '0000-00-00', 2),
('', 30, '0000-00-00', 1),
('', 35, '0000-00-00', 1),
('', 34, '0000-00-00', 2),
('', 34, '0000-00-00', 11),
('', 34, '0000-00-00', 1),
('', 35, '0000-00-00', 2),
('', 34, '0000-00-00', 1),
('', 34, '0000-00-00', 1),
('', 34, '0000-00-00', 2),
('', 34, '0000-00-00', 2),
('', 34, '0000-00-00', 5),
('', 34, '0000-00-00', 4),
('', 35, '0000-00-00', 3),
('', 34, '0000-00-00', 4),
('', 35, '0000-00-00', 3),
('', 30, '0000-00-00', 3),
('', 34, '0000-00-00', 1),
('', 30, '0000-00-00', 3),
('', 34, '0000-00-00', 2),
('', 36, '0000-00-00', 3),
('', 36, '0000-00-00', 3),
('', 34, '0000-00-00', 2),
('', 35, '0000-00-00', 3),
('', 30, '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`sub_id` int(10) NOT NULL,
  `sub_name` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`) VALUES
(4, 'Programming C, CSC 183, sec-A (UKD)'),
(8, ' Programming Language and Structure,  CSC 461, sec-A (KD)'),
(12, 'Software Engineering, CSC 469 sec-c (RI)'),
(13, 'C++, KZ (Sec - B)');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`t_id` int(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_department` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_department`, `contact`) VALUES
(3, 'Reshadul Islam', 'BCSE', 'rana@gmail.com'),
(10, 'Tumpa Rani Saha', 'BCSE', 'trs@gmail.com'),
(12, 'Krishna Das (KD)', 'BCSE', 'krishna@yahoo.com'),
(13, 'Abhijit Saha', 'BCSE', 'asaha@gmail.com'),
(15, 'Khaleqzzaman', 'BCSE', 'khaleqzzaman@gmail.c'),
(16, 'Md Khalequzzaman', 'BCSE', '01789632548');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`test_id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `total_ques` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `sub_id`, `test_name`, `total_ques`) VALUES
(27, 6, 'Quiz', '10'),
(29, 7, 'Test', '10'),
(30, 4, 'Week-test', '10'),
(31, 5, 'Monthly test', '10'),
(32, 10, 'eng', '1'),
(33, 11, 'DEMO', '5'),
(34, 8, 'Class Test', '5'),
(35, 12, 'first term', '5'),
(36, 13, 'Quick quiz', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `loginid`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(2, 'poros', 'poros', 'poros', 'iubat', 'dhaka', 1680500672, 'amit@gmail.com'),
(5, 'anik', 'anik', 'anik', 'tara', 'tara', 1738819696, 'sujon.iubat90@gmail.com'),
(6, 'amit', 'amit', 'amit', 'uttara', 'dk', 5458, 'a@gmail.com'),
(7, 'shamim', 'shamim', 'shamim', 'dhaka', 'dhaka', 1683734733, 'rajshamim38@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE IF NOT EXISTS `useranswer` (
`sess_id` int(100) NOT NULL,
  `test_id` int(11) NOT NULL,
  `que_des` varchar(200) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `true_ans` int(11) NOT NULL,
  `your_ans` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=809 ;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
(789, 36, 'Is bool a fundamental datatype in C++?', 'Yes', 'No, it is a typedef of unsigned char', 'No, it is an enum of {false,true}', 'No, it is expanded from macros', 1, 1),
(790, 36, 'What happens when a null pointer is converted into bool?', 'An error is flagged', 'bool value evaluates to true', 'bool value evaluates to false', 'the statement is ignored', 3, 3),
(791, 36, '0', '0', '0', '0', '0', 0, 0),
(792, 36, '0', '0', '0', '0', '0', 0, 0),
(793, 36, '____ have the return type void?', 'all functions', 'constructors', 'destructors', 'none of the mentioned', 4, 4),
(794, 34, '0', '0', '0', '0', '0', 0, 0),
(795, 34, 'A bit added to bit string to adjust its parity is classified as', 'binary bits', 'even parity', 'zero parity', 'parity bit', 4, 3),
(796, 34, 'Type of memory which is used to read data but not to write on it is classified as', 'random only memory', 'read access memory', 'read only memory', 'random access memory', 3, 3),
(797, 34, 'A character variable can at a time store?', '1 character', '8 character', '254 character', 'none of above', 1, 4),
(798, 34, 'The maximum value that an integer constant can have is?', '-32767', '32767', '1.7014e + 38', '-1.7014e + 38', 2, 2),
(799, 35, '0', '0', '0', '0', '0', 0, 0),
(800, 35, ' COCOMO stands for ______ .\r\n', 'COnsumed COst MOdel', 'COnstructive COst MOdel ', 'COmmon COntrol MOdel', 'COmposition COst MOdel', 2, 2),
(801, 35, 'What is the simplest model of software development paradigm?', 'Spiral model', 'Big Bang model', 'V-model', 'Waterfall model ', 4, 1),
(802, 35, 'Software Requirement Specification (SRS) is also known as specification of _______.', 'White box testing ', 'Acceptance testing', 'Integrated testing', 'Black box testing ', 4, 4),
(803, 35, 'What are the characteristics of software?', 'Software is developed or engineered; it is not man', 'Software doesn’t “ wear out ”.', 'Software can be custom built or custom build.', 'All mentioned above', 4, 4),
(804, 30, '\r\nWho is father of C Language?', 'Bjarne Stroustrup', 'James A. Gosling', 'Dennis Ritchie', 'Dr. E.F. Codd', 3, 1),
(805, 30, 'Special symbol permitted with in the identifier name.', '$', '@', '-', '.', 3, 3),
(806, 30, 'We can insert pre written code in a C program by using', '#read', '#get', '#include', '#put', 3, 4),
(807, 30, '0', '0', '0', '0', '0', 0, 0),
(808, 30, 'Break statement is used for', 'Quit a program', 'Quit the current iteration', 'Both of above', 'none of above', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useranswer`
--
ALTER TABLE `useranswer`
 ADD PRIMARY KEY (`sess_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `ques_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `useranswer`
--
ALTER TABLE `useranswer`
MODIFY `sess_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=809;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
