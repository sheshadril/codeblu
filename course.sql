-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 05:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_subtitle` varchar(255) DEFAULT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_rating` int(10) NOT NULL,
  `course_lecture` int(10) NOT NULL,
  `course_video` decimal(10,0) NOT NULL,
  `course_level` varchar(255) NOT NULL,
  `course_lang` varchar(255) NOT NULL,
  `course_overview` varchar(255) NOT NULL,
  `course_video_link` varchar(255) NOT NULL,
  `course_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_subtitle`, `course_description`, `course_rating`, `course_lecture`, `course_video`, `course_level`, `course_lang`, `course_overview`, `course_video_link`, `course_like`) VALUES
(1, 'HTML5/CSS3', 'Learn in-depth HTML5/CSS3 ', 'Cascading Style Sheet(CSS) is used to set the style in web pages that contain HTML elements. It sets the background color, font-size, font-family, color, … etc property of elements on a web page.', 4, 45, '12', 'BEGINNER', 'SPANISH', 'Cascading Style Sheet(CSS) is used to set the style in web pages that contain HTML elements. It sets the background color, font-size, font-family, color, … etc property of elements on a web page.', 'https://www.youtube.com/watch?v=mU6anWqZJcc', 2311),
(2, 'JavaScript from scratch ', 'The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!', 'JavaScript fundamentals: variables, if/else, operators, boolean logic, functions, arrays, objects, loops, strings, etc.', 5, 33, '27', 'ALL', 'ENGLISH', 'JavaScript fundamentals: variables, if/else, operators, boolean logic, functions, arrays, objects, loops, strings, etc.', '', 4221);

-- --------------------------------------------------------

--
-- Table structure for table `course_section`
--

CREATE TABLE `course_section` (
  `section_id` int(11) NOT NULL,
  `section_head` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_section`
--

INSERT INTO `course_section` (`section_id`, `section_head`, `course_id`) VALUES
(1, 'Introduction to HTML', 1),
(2, 'Introduction to CSS', 1),
(3, 'Advance HTML', 1),
(4, 'Advance CSS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_title`
--

CREATE TABLE `section_title` (
  `section_id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  `title_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_title`
--

INSERT INTO `section_title` (`section_id`, `title_id`, `title_name`) VALUES
(1, 1, 'What is HTML?'),
(1, 2, 'HTML Tags, Attributes & Elements'),
(1, 3, 'Tables & Forms'),
(1, 4, 'Hyperlinks, Lists, Images'),
(2, 5, 'The Style Rule'),
(2, 6, 'CSS Selectors, Properties & Values'),
(2, 7, 'Inheritance of Styles'),
(2, 8, 'Pixels, Percentages, Points & Ems!'),
(3, 9, 'IDs & Classes'),
(3, 10, 'Span & Div'),
(3, 11, 'Header & Footer'),
(3, 12, 'Nav, Section & Article'),
(4, 13, 'The Box Model'),
(4, 14, 'Borders'),
(4, 15, 'Text Styling & Formatting'),
(4, 16, 'CSS Positioning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_section`
--
ALTER TABLE `course_section`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `section_title`
--
ALTER TABLE `section_title`
  ADD PRIMARY KEY (`title_id`),
  ADD KEY `section_id` (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_section`
--
ALTER TABLE `course_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_title`
--
ALTER TABLE `section_title`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_section`
--
ALTER TABLE `course_section`
  ADD CONSTRAINT `course_section_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `section_title`
--
ALTER TABLE `section_title`
  ADD CONSTRAINT `section_title_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `course_section` (`section_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
