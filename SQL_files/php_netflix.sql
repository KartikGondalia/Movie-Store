-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 09:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_netflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('neel@gmail.com', '1234'),
('kartik@gmail.com', 'kartik');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `path` varchar(40) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img_path` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `genre`, `path`, `price`, `img_path`) VALUES
(4, 'DARK_PHOENIX', 'Thriller', 'movie/DARK_PHOENIX.mp4', 40, 'image/ghost.jpeg'),
(8, 'AVENGERS4', 'Action', 'movie/AVENGERS4.mp4', 50, 'image/hulk.jpeg'),
(10, 'Total_Dhamaal', 'Action', 'movie/Total_Dhamaal.mp4', 0, 'image/Dhamaal.jpeg'),
(13, 'FAST_AND_FURIOUS_9', 'Popular', 'movie/FAST_AND_FURIOUS_9.mp4', 100, 'image/FAST_AND_FURIOUS_9.jpg'),
(14, 'Kesari', 'Popular', 'movie/Kesari.mp4', 0, 'image/kesari.jpg'),
(15, 'De_De_Pyaar_De', 'Romance', 'movie/De_De_Pyaar_De.mp4', 0, 'image/De_De_Pyaar_De.jpg'),
(16, 'JOKER', 'Popular', 'movie/JOKER.mp4', 25, 'image/JOKER.jpg'),
(17, 'MY_SPY', 'Thriller', 'movie/MY_SPY.mp4', 20, 'image/MY_SPY.jpg'),
(19, 'Junglee', 'Action', 'movie/Junglee.mp4', 0, 'image/Junglee.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Kartik ', 'k@gmail.com', 'admin'),
('Neel', 'vol@gmail.com', '456');

-- --------------------------------------------------------

--
-- Table structure for table `user_paid`
--

CREATE TABLE `user_paid` (
  `email` varchar(30) DEFAULT NULL,
  `movie_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_paid`
--

INSERT INTO `user_paid` (`email`, `movie_name`) VALUES
('k@gmail.com', 'Cars2'),
('k@gmail.com', 'AVENGERS4'),
('k@gmail.com', 'AVENGERS4'),
('a@gmail.com', 'AVENGERS4'),
('kar@gmail.com', 'AVENGERS4'),
('ab@gmail.com', 'Cars2'),
('neel@gmail.com', 'Kesari'),
('neel@gmail.com', 'AVENGERS4'),
('k@gmail.com', 'DARK_PHOENIX');

-- --------------------------------------------------------

--
-- Table structure for table `watchlater`
--

CREATE TABLE `watchlater` (
  `moviename` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlater`
--

INSERT INTO `watchlater` (`moviename`, `email`) VALUES
('', 'email'),
('', ''),
('Junglee', 'k@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
