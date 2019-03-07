-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 08:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `status`) VALUES
(100, 'Kazi Akhtarul Anam', 'pa1234', 'pavelanam@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `alldata`
--

CREATE TABLE `alldata` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL,
  `type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alldata`
--

INSERT INTO `alldata` (`id`, `password`, `email`, `status`, `type`) VALUES
(100, 'pa1234', 'pavelanam@gmail.com', 'a', 'a'),
(108, 'p12345', 'anampavel@aol.com', 'a', 's'),
(109, 'a67890', 'pavelanam@hotmail.com', 'a', 't'),
(110, 'i12345', 'imran@gmail.com', 'a', 's'),
(111, '123456', 'XCS@DFF.COM', 'r', 't');

-- --------------------------------------------------------

--
-- Table structure for table `classeight`
--

CREATE TABLE `classeight` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classfive`
--

CREATE TABLE `classfive` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classfour`
--

CREATE TABLE `classfour` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classnine`
--

CREATE TABLE `classnine` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classone`
--

CREATE TABLE `classone` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classone`
--

INSERT INTO `classone` (`id`, `subject`, `teachername`) VALUES
(4, 'Bangla', 'Akhtarul'),
(5, 'ICT', 'Akhtarul');

-- --------------------------------------------------------

--
-- Table structure for table `classseven`
--

CREATE TABLE `classseven` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classsix`
--

CREATE TABLE `classsix` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classten`
--

CREATE TABLE `classten` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classthree`
--

CREATE TABLE `classthree` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classtwo`
--

CREATE TABLE `classtwo` (
  `id` int(11) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `teachername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `News` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `News`) VALUES
(1, ' University Remain Closed.'),
(2, 'Web Technology Project Defense Will Be Held On 18th December.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `class` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `firstterm` varchar(50) NOT NULL,
  `secondterm` varchar(50) NOT NULL,
  `finalterm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `class`, `subject`, `studentid`, `firstterm`, `secondterm`, `finalterm`) VALUES
(1, '1', 'Bangla', '110', '12', '34', '50');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `class`, `password`, `email`, `fathername`, `mothername`, `address`, `gender`, `dob`, `image`, `status`) VALUES
(108, 'Pavel', '10', 'p12345', 'anampavel@aol.com', 'Juglu', 'Parvin', 'Dhaka', 'male', '1995-07-22', 'DSC_8091.JPG_1', 'a'),
(110, 'Imran', '1', 'i12345', 'imran@gmail.com', 'un', 'un', 'Gazipur', 'male', '1997-11-03', 'Promotion.jpg', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `studentnote`
--

CREATE TABLE `studentnote` (
  `id` int(11) NOT NULL,
  `class` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentnotice`
--

CREATE TABLE `studentnotice` (
  `id` int(11) NOT NULL,
  `class` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `notice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`, `email`, `fathername`, `mothername`, `address`, `gender`, `dob`, `image`, `status`) VALUES
(109, 'Akhtarul', 'a67890', 'pavelanam@hotmail.com', 'Juglu', 'Parvin', 'Pabna', 'male', '1992-09-29', 'DSC_8091.JPG', 'a'),
(111, 'ZZAXAAXAX', '123456', 'XCS@DFF.COM', 'SSCSFEF', 'FFF', 'BGFGFHN', 'male', '2018-12-10', '_1', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `teacherattendance`
--

CREATE TABLE `teacherattendance` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `teachername` varchar(50) NOT NULL,
  `present` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherattendance`
--

INSERT INTO `teacherattendance` (`id`, `date`, `teacherid`, `teachername`, `present`) VALUES
(1, '2018-12-15', 109, 'Akhtarul', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `teachernotice`
--

CREATE TABLE `teachernotice` (
  `id` int(11) NOT NULL,
  `teacherid` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `notice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachernotice`
--

INSERT INTO `teachernotice` (`id`, `teacherid`, `subject`, `notice`) VALUES
(1, '109', 'Project Date', 'Finish Within 18th December.'),
(2, '109', 'Defence', 'dgfdhf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alldata`
--
ALTER TABLE `alldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classeight`
--
ALTER TABLE `classeight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classfive`
--
ALTER TABLE `classfive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classfour`
--
ALTER TABLE `classfour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classnine`
--
ALTER TABLE `classnine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classone`
--
ALTER TABLE `classone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classseven`
--
ALTER TABLE `classseven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classsix`
--
ALTER TABLE `classsix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classten`
--
ALTER TABLE `classten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classthree`
--
ALTER TABLE `classthree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classtwo`
--
ALTER TABLE `classtwo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentnote`
--
ALTER TABLE `studentnote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentnotice`
--
ALTER TABLE `studentnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherattendance`
--
ALTER TABLE `teacherattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachernotice`
--
ALTER TABLE `teachernotice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alldata`
--
ALTER TABLE `alldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `classeight`
--
ALTER TABLE `classeight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classfive`
--
ALTER TABLE `classfive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classfour`
--
ALTER TABLE `classfour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classnine`
--
ALTER TABLE `classnine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classone`
--
ALTER TABLE `classone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classseven`
--
ALTER TABLE `classseven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classsix`
--
ALTER TABLE `classsix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classten`
--
ALTER TABLE `classten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classthree`
--
ALTER TABLE `classthree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classtwo`
--
ALTER TABLE `classtwo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentnote`
--
ALTER TABLE `studentnote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentnotice`
--
ALTER TABLE `studentnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacherattendance`
--
ALTER TABLE `teacherattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachernotice`
--
ALTER TABLE `teachernotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
