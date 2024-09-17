-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 02:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieticketbooking`
--
CREATE DATABASE IF NOT EXISTS `movieticketbooking` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `movieticketbooking`;
-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `showtime` varchar(10) DEFAULT NULL,
  `seats_selected` varchar(255) DEFAULT NULL,
  `booking_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `movieTitle` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `age`, `gender`, `email`, `mobile`, `date`, `showtime`, `seats_selected`, `booking_timestamp`, `movieTitle`, `price`) VALUES
(0, '', 0, '', '', '', NULL, '0', '0', '2024-04-11 23:14:45', NULL, 0.00),
(1, '', 0, '', '', '', '0000-00-00', '', '0', '2024-04-11 04:46:22', NULL, 0.00),
(2, '', 0, '', '', '', '0000-00-00', '', '0', '2024-04-11 04:47:20', NULL, 0.00),
(3, 'Madhu Kumar', 26, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-16', '12', '0', '2024-04-11 04:48:36', NULL, 0.00),
(4, '', 0, '', '', '', '0000-00-00', '10', '0', '2024-04-11 04:55:20', NULL, 0.00),
(5, '', 0, '', '', '', '0000-00-00', '10', '0', '2024-04-11 04:55:54', NULL, 0.00),
(6, '', 0, '', '', '', '0000-00-00', '10', '0', '2024-04-11 04:55:58', NULL, 0.00),
(7, '', 0, '', '', '', '0000-00-00', '10', '0', '2024-04-11 04:56:12', NULL, 0.00),
(11386, 'Madhu Kumar 1986', 4, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-26', ' 1:00 PM', '0', '2024-04-21 00:11:45', NULL, 0.00),
(14111, 'Madhu Kumar 1986', 23, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-23', '12:00 PM', '0', '2024-04-21 19:47:26', 'Dark Knight', 0.00),
(17425, 'Titan', 32, 'Male', 'titan@gmail.com', '123-456-7891', '2024-04-26', '9:00 PM', 'B5, C6, C7, C8, D8', '2024-04-21 21:08:00', 'Titanic', 70.00),
(18344, 'Rahul', 36, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-26', '1:00 PM', '0', '2024-04-21 20:25:11', 'Dark Knight', 0.00),
(18370, 'lotr', 23, 'Male', 'lotr@gmail.com', '123-456-7891', '2024-05-01', '1:00 PM', 'B5', '2024-04-21 20:46:59', 'LOTR', 0.00),
(21162, 'Vamshi', 23, 'Male', 'vamshi@gmail.com', '123-456-7891', '2024-04-26', '1:00 PM', 'A1, A2, A3', '2024-04-21 23:44:28', 'Dark Knight', 45.00),
(23140, 'John Doe', 32, 'Male', 'jon@gmail.com', '123-456-7891', '2024-04-24', '6:00 PM', '0', '2024-04-21 20:38:03', 'Forest Gump', 0.00),
(25285, 'Sandeep', 36, 'Male', 'sandeep@gmail.com', '123-456-7891', '2024-04-25', '1:00 PM', 'A5, A6, A7, B5, B6', '2024-04-21 22:05:43', 'Dark Knight', 70.00),
(25314, 'Madhu Kumar 1986', 0, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-12', '16', '0', '2024-04-11 23:32:37', NULL, 0.00),
(25452, 'Madhu Kumar 1986', 4, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-27', ' 6:00 PM', '0', '2024-04-21 00:35:47', NULL, 0.00),
(25651, 'Dhoni', 38, 'Male', 'dhoni@gmail.com', '123-456-7891', '2024-04-26', '6:00 PM', 'A3, A4, A5', '2024-04-21 22:38:01', 'Inception', 55.00),
(26565, 'madhu', 0, 'Male', 'mxg51820@ucmo.edu', '913-515-9615', '2024-04-19', '10', '0', '2024-04-13 03:26:54', NULL, 0.00),
(28058, 'Schindler', 23, 'Male', 'schindler@gmail.com', '123-456-7891', '2024-05-01', '9:00 PM', '0', '2024-04-21 20:41:36', 'Schindlers List', 0.00),
(28601, 'Madhu Kumar 1986', 4, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-27', ' 12:00 PM', '0', '2024-04-21 05:35:26', NULL, 0.00),
(47582, 'MADHU GILLALA', 32, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-27', '9:00 PM', '0', '2024-04-21 20:34:26', 'Inception', 0.00),
(47644, 'Madhu Kumar 1986', 0, 'Female', 'gillal@gmail.com', '913-515-9616', '2024-04-19', '16', '0', '2024-04-11 23:40:03', NULL, 0.00),
(49129, 'Matrix', 32, 'Male', 'matrix@gmail.com', '123-456-7891', '2024-04-26', '6:00 PM', 'C8, D7, E6', '2024-04-21 20:55:39', 'The Matrix', 0.00),
(50890, 'Sai', 31, 'Male', 'sai@gmail.com', '123-456-7891', '2024-04-26', '6:00 PM', 'C3, C4, C5', '2024-04-21 21:53:38', 'LOTR', 45.00),
(57656, 'abcd', 23, 'Male', 'abcd@gmail.com', '123-456-7891', '2024-05-11', '1:00 PM', 'A3', '2024-04-21 20:48:59', 'Titanic', 0.00),
(59903, 'Madhu Kumar 1986', 0, 'Male', 'gillalmadhu@gmail.com', '913-515-9615', '2024-04-12', '16', '0', '2024-04-11 23:44:07', NULL, 0.00),
(460276, '', 0, '', '', '', '0000-00-00', '', '0', '2024-04-11 05:11:29', NULL, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `actors` text DEFAULT NULL,
  `poster_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `genre`, `release_date`, `duration`, `director`, `actors`, `poster_url`) VALUES
(1, 'Inception', 'Action, Sci-Fi', '2010-07-16', 148, 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page', 'Movies/inception.jpg'),
(3, 'The Dark Knight', 'Action, Crime, Drama', '2008-07-18', 152, 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart', 'Movies/darkknight.jpg'),
(4, 'The Godfather', 'Crime, Drama', '1972-03-24', 175, 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan', 'Movies/godfather.jpg'),
(5, 'Pulp Fiction', 'Crime, Drama', '1994-10-14', 154, 'Quentin Tarantino', 'John Travolta, Uma Thurman, Samuel L. Jackson', 'Movies/pulp_fiction.jpg'),
(6, 'Forrest Gump', 'Drama, Romance', '1994-07-06', 142, 'Robert Zemeckis', 'Tom Hanks, Robin Wright, Gary Sinise', 'Movies/forrestgump.jpg'),
(7, 'The Matrix', 'Action, Sci-Fi', '1999-03-31', 136, 'Lana Wachowski, Lilly Wachowski', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 'Movies/the_matrix.jpg'),
(8, 'Schindler\'s List', 'Biography, Drama, History', '1993-12-15', 195, 'Steven Spielberg', 'Liam Neeson, Ralph Fiennes, Ben Kingsley', 'Movies/schindlerslist.jpg'),
(10, 'Titanic', 'Drama, Romance', '1997-12-19', 195, 'James Cameron', 'Leonardo DiCaprio, Kate Winslet, Billy Zane', 'Movies/titanic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiry_month` int(11) NOT NULL,
  `expiry_year` int(11) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `cardholder_name` varchar(255) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `card_number`, `expiry_month`, `expiry_year`, `cvv`, `cardholder_name`, `payment_date`) VALUES
(1, '123456789123456', 8, 2024, '1234', 'Madhu', '2024-04-11 05:31:29'),
(2, '123456789123456', 8, 2024, '1234', 'Madhu', '2024-04-11 05:41:29'),
(3, '12365564564', 8, 2024, '2548', 'Madhu', '2024-04-11 23:40:38'),
(4, '123456879', 8, 2024, '1234', 'Madhu', '2024-04-11 23:45:18'),
(5, '1234556478', 8, 2024, '1234', 'Madhu', '2024-04-11 23:52:06'),
(6, '1234556478', 8, 2024, '1234', 'Madhu', '2024-04-11 23:53:26'),
(7, '123456789789456', 2, 2025, '2345', 'Kumar', '2024-04-12 16:05:47'),
(8, '123456789123456', 8, 2024, '1234', 'Madhu', '2024-04-13 03:27:16'),
(9, '123456789123456', 9, 2024, '1234', 'dharma', '2024-04-21 00:12:08'),
(10, '1234567891234567', 8, 2024, '1234', 'Madhu', '2024-04-21 00:36:05'),
(11, '1234567891231231', 10, 2024, '1234', 'John Doe', '2024-04-21 20:57:07'),
(12, '123456789789456', 8, 2024, '1234', 'Gmail', '2024-04-21 21:08:20'),
(13, '123456789123456', 6, 2027, '1234', 'Sai', '2024-04-21 21:54:50'),
(14, '123456789123456', 8, 2024, '1234', 'dharma', '2024-04-21 22:06:01'),
(15, '123456789123456', 4, 2025, '1234', 'John Doe', '2024-04-21 22:40:05'),
(16, '123456789123456', 4, 2025, '1234', 'John Doe', '2024-04-21 22:42:08'),
(17, '123456789123456', 4, 2025, '1234', 'John Doe', '2024-04-21 23:46:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
