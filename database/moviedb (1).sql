-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 04:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `mobile`, `message`) VALUES
('arjun', 'biju', 'qqqqqqq', '3333333', 'ssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `sentiment_keywords`
--

CREATE TABLE `sentiment_keywords` (
  `id` int(30) NOT NULL,
  `keyword` text NOT NULL,
  `score` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentiment_keywords`
--

INSERT INTO `sentiment_keywords` (`id`, `keyword`, `score`) VALUES
(1, 'great', 5),
(2, 'Good', 4),
(3, 'Nice', 4),
(4, 'Amazing', 5),
(5, 'Fantastic', 5),
(6, 'very', 5),
(7, 'Best', 5),
(8, 'Wonderful', 5),
(9, 'adore', 4),
(10, 'adoring', 4),
(11, 'adoringly', 5),
(12, 'affordable', 4),
(13, 'afford', 4),
(14, 'amaze', 4),
(15, 'amazed', 4),
(16, 'appreciable', 4),
(17, 'applaud', 4),
(18, 'Bad', 1),
(19, 'awesome', 5),
(20, 'award', 5),
(21, 'win', 5),
(22, 'winning', 5),
(23, 'loss', 1),
(24, 'lose', 2),
(25, 'beautiful', 5),
(26, 'bonus', 3),
(27, 'bonuses', 3),
(28, 'brightest', 5),
(29, 'brighter', 4),
(30, 'bright', 3),
(31, 'classic', 3),
(32, 'dazzle', 3),
(33, 'dazling', 4),
(34, 'dedicated', 3),
(35, 'delight', 3),
(36, 'delightful', 4),
(37, 'delightfully', 5),
(38, 'delightfulness', 5),
(39, 'excelent', 5),
(40, 'excellant', 5),
(41, 'exceeded', 5),
(42, 'exceeds', 5),
(43, 'excel', 4),
(44, 'famous', 4),
(45, 'famously', 5),
(46, 'fine', 3),
(47, 'finest', 4),
(48, 'abnormal', 1),
(49, 'abolish', 1),
(50, 'don\'t', 1),
(51, 'dont', 1),
(52, 'wont', 1),
(53, 'absurd', 2),
(54, 'absurdity', 1),
(55, 'absurdly', 2),
(56, 'absurdness', 1),
(57, 'alarmed', 3),
(58, 'Alarming', 2),
(59, 'alarmingly', 1),
(60, 'badly', 1),
(61, 'bash', 2),
(62, 'bashed', 3),
(63, 'bashful', 1),
(64, 'bashing', 3),
(65, 'bias', 2),
(66, 'biased', 3),
(67, 'careless', 2),
(68, 'carelessness', 1),
(69, 'concern', 3),
(70, 'concerned', 3),
(71, 'condemn', 2),
(72, 'condemnable', 3),
(73, 'defect', 3),
(74, 'defective', 2),
(75, 'devilry', 1),
(76, 'danger', 3),
(77, 'dangerous', 1),
(78, 'harm', 3),
(79, 'harmful', 1),
(80, 'disgrace', 3),
(81, 'disgraced', 3),
(82, 'disgraceful', 2),
(83, 'disgracefully', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `cid` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`cid`, `title`, `comment`, `score`, `userid`, `username`, `id`) VALUES
(9, 'mohanlal', 'nice', '4', '16', 'arjunbiju332@gmail.com', '7'),
(10, 'arjun', 'nice', '4', '16', 'arjunbiju332@gmail.com', '2'),
(11, 'gg', 'nice', '4', '16', 'arjunbiju332@gmail.com', '4'),
(12, 'robert', 'bad', '1', '16', 'arjunbiju332@gmail.com', '2'),
(13, 'arjun', 'good', '4', '16', 'arjunbiju332@gmail.com', '5'),
(15, 'ARJUN', 'good', '4', '17', 'arjunbiju332@gmail.com', '6'),
(16, 'dora', 'aewsome', '', '19', 'dora123@gmail.com', '26'),
(17, 'dora', 'good', '4', '19', 'dora123@gmail.com', '26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `utype`) VALUES
('arjunbiju332@gmail.com', '123', 'user'),
('arjunbiju332@gmail.com', '123', 'user'),
('admin@gmail.com', '123', 'admin'),
('dora123@gmail.com', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `genere` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `actors` varchar(50) NOT NULL,
  `releasedate` date NOT NULL,
  `poster` varchar(300) CHARACTER SET latin1 NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`id`, `name`, `genere`, `director`, `producer`, `writer`, `actors`, `releasedate`, `poster`, `details`) VALUES
(28, 'Fight Club', 'Thriller,comedy', 'David Fincher', 'Art Linson', 'Jim Uhls', 'Brad Pitt, Edward Norton, Helena Bonham Carter, Me', '1999-11-11', 'download.jfif', ':Unhappy with his capitalistic lifestyle, a white-collared insomniac forms an underground fight club with Tyler, a careless soap salesman. Soon, their venture spirals down into something sinister.'),
(29, 'The Dark Night', ':Action, adventure, superhero', 'Christopher Nolan', 'Emma Thoma', ':Jonathan Nolan,', ':Christian Bale, Michael Caine, Heath Ledger, Gary', '2008-07-18', '6bbe7e8dc64af7b3fdd30be86039e33f.jpg', ':After Gordon, Dent and Batman begin an assault on Gotham\'s organised crime, the mobs hire the Joker, a psychopathic criminal mastermind who offers to kill Batman and bring the city to its knees.'),
(30, 'Eternal Sunshine of the Spotless Mind', 'Drama,romance, sci fi', 'Michel Gondry', 'Steve Golin', 'Charlie Kaufman, Michel Gondry, Pierre Bismuth', 'Jim Carrey, Kate Winslet, Kirsten Dunst, Mark Ruff', '2004-03-19', 'f4e7e581e69fd45aa64133fd47570b28.jpg', 'Joel and Clementine begin a relationship after a train journey together. However, having had their memories clinically erased, they do not remember their tumultuous past'),
(31, 'Spider-Man: Into the Spider-Verse', 'Animation,adventure, superhero', 'Bob Persichetti', 'Avi Arad, Amy Pascal, Phil Lord, Christopher Mille', 'Phil Lord, Rodney Rothman', ':Shameik Moore, Jake Johnson, Hailee Steinfeld, Ma', '2018-12-14', '7c1a372a0f42494d4bad88b2d255d281.jpg', 'After gaining superpowers from a spider bite, Miles Morales protects the city as Spider-Man. Soon, he meets alternate versions of himself and gets embroiled in an epic battle to save the multiverse.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `utype`) VALUES
(17, 'arjun', 'biju', 'male', 'arjunbiju332@gmail.com', '123', 'user'),
(19, 'dora', 'dora', 'female', 'dora123@gmail.com', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sentiment_keywords`
--
ALTER TABLE `sentiment_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sentiment_keywords`
--
ALTER TABLE `sentiment_keywords`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
