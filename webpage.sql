-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2022 at 11:49 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(30) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `movie_year` int(30) NOT NULL,
  `actor` varchar(30) NOT NULL,
  `actress` varchar(30) NOT NULL,
  `banner_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `movie_name`, `movie_year`, `actor`, `actress`, `banner_image`) VALUES
(1, 'sooraraipotru', 2020, 'suriya', 'aprana', 0x312e6a7067),
(2, 'bigil', 2019, 'vijay', 'nayanthra', 0x322e6a7067),
(3, 'manaadu', 2021, 'Simbhu', 'kalyani_priyadharasan', 0x332e6a7067),
(4, 'Doctor', 2021, 'sivakarthikayen', 'priyanka_mohanan', 0x342e6a7067),
(5, 'geetha_govindham', 2018, 'vijaydevakorada', 'rashmika_mandana', 0x352e6a7067),
(6, 'irumbuthirai', 2018, 'vishal', 'samantha', 0x362e6a7067),
(7, 'Mr.robot', 2012, 'Rami_Mallek', 'Carly_Chaikin', 0x372e6a7067),
(8, 'Enemy', 2021, 'vishal', 'Mirnalini_Ravi', 0x382e6a7067),
(9, 'Master', 2021, 'vijay', 'Malavika_Mohanan', 0x392e6a7067),
(10, 'Valimai', 2022, 'Ajith_kumar', 'Janhvi_Kapoor', 0x31302e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `city`) VALUES
('', '', '', ''),
('kishore', 'kish@gmail.com', 'root', 'chennai'),
('j', 'kishoredaniel99@gmail.com', 'root', 'chennai'),
('j', 'mhyuj859@gmail.com', 'root', 'chennai'),
('abcde', 'abc@gmail.com', 'root', 'vellore'),
('bnm', 'mnbo@gmail.com', '0987654', 'chennai'),
('bkxjvbfdb', 'mnbo@gmail.com', '0987654', 'dbvjberfjkbv'),
('vbnm', 'vbnm@gmail.com', '1234', 'kjhgf'),
('fghj', 'fghj@gmail.com', '123445678', 'fdsa'),
('kljh', 'kljh@gmail.com', 'kjkloimn', 'kljhgf'),
('pokjn', 'pojn@mcnvm.com', 'pokjnpokjn', 'bhjklo'),
('pojhbv', 'vbhjioij@kjbjk.com', 'kjhbvbhj', 'cgujhbvbn'),
('oijhbnjkm', 'mnbghujnkj@gmail.com', 'pojhbnkkn', 'asdfvgfes'),
('<script>alert(1)</script>', 'lkjhgf@gmail.com', 'lkjhgfx', '<script>alert(1)</script>'),
('mnbgfhj', 'nbvf@gmail.com', 'mnbgferty', 'mnbgfdfgh'),
('kishore', 'kishore@gmail.com', '123456', 'chennai'),
('kevin', 'kevin@gmail.com', '1234567', 'tiruchy'),
('pushparaj', 'kish@gmail.com', '123456', 'chennai'),
('kjhgfd', 'kishkjhgf@jhgfd.com', 'kjhgfdz', 'fdsa'),
('kjnhbvcx', 'lmnbvcx@lkjhgf.kjhgfd', 'kjhgfds', 'polkjhbvcx'),
('pokjbvc', 'kjhgfdew@lkjhgfd', 'ijhgfds', 'qwdfghjko'),
('pokjbvc', 'alex@test', ';lhgfds', 'qwdfghjko'),
('', 'iujhgfdxz@gmail.com', 'mjhgrew', ''),
('kishore', 'kish@gmail.com', 'root', 'chennai'),
('kishore', 'kish@gmail.com', 'root', 'chennai'),
('', '', '', ''),
('wrewg', 'dwg@56', 'sdfg', 'dgwgsg'),
('kishore', 'kish@gmail.com', 'root', 'chennai'),
('yrfy', 'marimuthurandom1999@gmail.com', 'dudj', 'ujd'),
('lkjhgfds', 'kishsdfds@gmail.com', '12345671234567', 'yui'),
('edsdf', 'sfsE', 'SDcfc', 'sdf'),
('sdc', 'sdccsd', 'sdcfsdd', 'csd'),
('kishore', 'kish@gmail.com', 'root', 'chennai'),
('kishore', 'kish@gmail.com', 'root', 'chennai'),
('ertyj', 'kishore@gmail.com', '1234567', 'chennai'),
('a', 'kish@gmail.com', '23456789', 'tm'),
('asdf', 'sdf', 'asdf', 'asdf'),
('Madhan', 'maddy@gmail.com', 'maddy', 'chennai'),
('kishore', 'kishoredaniel99@test.com', 'kish', 'chn'),
('mari', 'mari@gmail.com', '112', 'nellai'),
('ewqrwte', 'kish31243@gmail.com', 'adsfg', 'dfv'),
('esfgdfh', 'kisafsgfhd@gmail.com', 'fdgdf', 'efsrgd'),
('eqwretr', 'kishvcxbvnvb@gmail.com', 'sdsf', 'dvf'),
('mari', 'mari@test.com', 'ertyujhbv', 'chennai'),
('nun', 'nun@test.com', 'kjnbvhjkjn ', 'tvl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
