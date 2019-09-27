-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2019 at 06:12 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `name`, `email`, `password`) VALUES
(1, 'sathishh', 'auditee1@freshgrc.co', 'freshgrc'),
(2, 'sathish', 'auditee1@freshgrc.co', 'freshgrc'),
(3, 'sathishh', 'auditee1@freshgrc.co', 'freshgrc'),
(4, 'sathishh', 'auditee1@freshgrc.co', 'freshgrc'),
(5, 'sathishh', 'risk_reviewer@freshgrc.co', 'freshgrc'),
(6, 'sathishh', 'risk_reviewer@freshgrc.co', 'freshgrc'),
(7, 'sathishh', 'risk_owner@freshgrc.com', 'zaqwsx'),
(8, 'sathishh', 'sa@freshgrc.co', 'xswqaz'),
(9, 'sathishh', 'sa@freshgrc.co', 'xswqaz');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `fname`, `lname`, `email`, `gender`) VALUES
(1, 'sathish', 'lname', 'sa@freshgrc.co', 'gender'),
(2, 'sathish', 'lname', 'auditor1@freshgrc.co', 'gender'),
(3, 'sathish', 'lname', 'sa@freshgrc.co', 'gender');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(20) NOT NULL,
  `account` varchar(200) NOT NULL,
  `ownership` varchar(200) NOT NULL,
  `transactional` varchar(200) NOT NULL,
  `credit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `account`, `ownership`, `transactional`, `credit`) VALUES
(1, 'Credit card number,Bank Account', 'Cars,Appartments,Personal possessions', 'Purchases,Sales,Credit', 'Credit records,Credit worthiness,Credit standing,Credit capacity'),
(2, 'Credit card number,Bank Account', 'Cars,Appartments,Personal possessions', 'Purchases,Sales,Credit', 'Credit records,Credit worthiness,Credit standing,Credit capacity'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `checkbox` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `password`, `gender`, `checkbox`, `city`) VALUES
(1, 'prathish', 'sa@freshgrc.co', 'zzzzzz', 'Male', 'option 2', 'Delhi'),
(2, 'sathish', 'sathish@fixnix.com', 'zaqwsx', 'Male', 'Option 1,option 2', 'Mumbai'),
(3, 'sathish', 'auditee1@freshgrc.co', 'zaqwsx', 'Male', 'option 2,Option 3', 'Hyderabad'),
(4, 'user', 'risk_owner@freshgrc.co', 'zaqwsx', 'Female', 'option 2,Option 3', 'Mumbai'),
(5, 'prathish', 'sa@ofk.co', 'zaqwsx', 'Male', 'option 2,Option 3', 'Mumbai'),
(6, 'sandeep', 'sandeep@freshgrc.co', 'zaqwsxcde', 'Male', 'Option 1,option 2', 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `gdpr`
--

CREATE TABLE `gdpr` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdpr`
--

INSERT INTO `gdpr` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'sathish', 'sathish@fixnix.co', 'zaqwsxcde', '9994283731');

-- --------------------------------------------------------

--
-- Table structure for table `historical`
--

CREATE TABLE `historical` (
  `id` int(20) NOT NULL,
  `life` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historical`
--

INSERT INTO `historical` (`id`, `life`) VALUES
(1, 'events that happened in a personâ€™s life, either to them or just around them which might have influenced them (WWII, 9/11)'),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(20) NOT NULL,
  `uploadImage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `uploadImage`) VALUES
(1, 0x6261636b77616c6c2e6a7067),
(2, 0x6e61747572652d77616c6c7061706572732d33382e6a7067),
(3, 0x6e61747572652d77616c6c7061706572732d33382e6a7067),
(5, 0x4e61747572652d4465736b746f702d4261636b67726f756e64732e6a7067),
(6, 0x4e61747572652d4465736b746f702d4261636b67726f756e64732e6a7067),
(7, 0x4e61747572652d4465736b746f702d4261636b67726f756e64732e6a7067),
(8, 0x6261636b77616c6c2e6a7067),
(9, 0x6261636b77616c6c2e6a7067),
(10, 0x74726173682d73656c6563746976652d666f6375732d70686f746f6772617068792d626c61636b2d77616c6c70617065722e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `internal`
--

CREATE TABLE `internal` (
  `id` int(20) NOT NULL,
  `knowledge` varchar(200) NOT NULL,
  `authenticating` varchar(200) NOT NULL,
  `preference` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal`
--

INSERT INTO `internal` (`id`, `knowledge`, `authenticating`, `preference`) VALUES
(1, 'Philosophical beliefs,Thought', 'Password,PIN', 'Intentions,Favorite foods'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nix`
--

CREATE TABLE `nix` (
  `id` int(20) NOT NULL,
  `owner` varchar(200) NOT NULL,
  `process` varchar(200) NOT NULL,
  `identify` varchar(200) NOT NULL,
  `ethinicity` varchar(200) NOT NULL,
  `sexual` varchar(200) NOT NULL,
  `behavioral` varchar(200) NOT NULL,
  `demographics` varchar(200) NOT NULL,
  `medical` varchar(200) NOT NULL,
  `physical` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nix`
--

INSERT INTO `nix` (`id`, `owner`, `process`, `identify`, `ethinicity`, `sexual`, `behavioral`, `demographics`, `medical`, `physical`) VALUES
(1, 'sathish', 'HR', 'Name,User-Name', 'National or ethnic origin,Languages spoken', 'Prefrences,proclivites', 'Call logs,Links clicked', 'Physical traits,Income bracketes', 'Drug test results,Disabilities', 'Weight'),
(2, 'Sandeep', 'interviewer', 'User-Name,Biometric data', 'Dialects,Accents', 'Prefrences,proclivites', 'Call logs,Links clicked', 'Physical traits,Income bracketes', 'Physical and mental health,Drug test results', 'Weight,age'),
(3, 'Vivek', 'marketing', 'Name,Unique Identifier', 'Languages spoken', 'proclivites', 'Call logs,Links clicked', 'Income bracketes', 'Disabilities', 'age');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(6) UNSIGNED NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `password`, `email`) VALUES
(9, 'Aravindhan', 'zaqwsx', 'auditor1@freshgrc.co'),
(10, 'sathish H', 'freshgrc', 'auditee1@freshgrc.co'),
(11, 'Prathish S', 'zaqwsx', 'risk_owner@freshgrc.co'),
(12, 'sathishh', 'xswqaz', 'srdc7f@ydcy.com');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(20) NOT NULL,
  `professional` varchar(200) NOT NULL,
  `criminal` varchar(200) NOT NULL,
  `public` varchar(200) NOT NULL,
  `family` varchar(200) NOT NULL,
  `social` varchar(200) NOT NULL,
  `communication` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `professional`, `criminal`, `public`, `family`, `social`, `communication`) VALUES
(1, 'Job titles,Salary,Work history,School attended,Employee files,Employmnt history,References', 'Convictions,Charges,Pardons', 'Character,General Reputation,Social status', 'Family structure,Sibilings,Offspring', 'Friends,Connections,Acquaintances', 'Voice mail');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `email`, `city`) VALUES
(1, 'Hemant jangid', 'demo@demo.com', 'ahmedabad'),
(2, 'sathish', 'sathish@fixnix.co', 'chennai'),
(3, 'prema', 'auditor1@freshgrc.co', 'chennai'),
(4, 'prathish', 'auditor1@freshgrc.co', 'chennai'),
(5, 'sathish', 'sa@fixnix.co', 'chennai'),
(7, 'saca', 'demo@demo.com', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(20) NOT NULL,
  `first` varchar(200) NOT NULL,
  `second` varchar(200) NOT NULL,
  `third` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`id`, `first`, `second`, `third`) VALUES
(1, 'Heamnt', 'Jagid', 'R'),
(2, 'first', 'second', 'third'),
(4, 'awfawsf', 'second', 'third'),
(6, 'sachin', 'kohli', 'sdgsd'),
(7, 'sQADWDachin', 'dWD', 'sdgsd'),
(9, 'sachin', 'second', 'third');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdpr`
--
ALTER TABLE `gdpr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historical`
--
ALTER TABLE `historical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal`
--
ALTER TABLE `internal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nix`
--
ALTER TABLE `nix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gdpr`
--
ALTER TABLE `gdpr`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `historical`
--
ALTER TABLE `historical`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `internal`
--
ALTER TABLE `internal`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nix`
--
ALTER TABLE `nix`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
