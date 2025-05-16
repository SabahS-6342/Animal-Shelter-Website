-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 05:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tas`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(225) NOT NULL,
  `age` int(2) NOT NULL,
  `description` longtext NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `color`, `age`, `description`, `catid`) VALUES
(1, 'Mimi', 'Blonde-White', 7, 'This lovely cat is one of the most beautiful cats we have at our shelter.\r\nShe isn\'t very sociable and would rather stay alone in a corner when crowded.\r\nBut once you get her to warm up to you, she\'ll never leave your side, demand your attention, and rubs every second of the day.\r\nShe\'s patiently waiting for her person.', 2),
(2, 'Bobby', 'Light Brown and Black', 1, 'This babygirl is the most playful dog you\'ll ever encounter.\r\nShe\'s cheerful even after going through abuse and abandonment.\r\nShe loves treats and will absolutely do anything in her will to get them.\r\nHer case was a sad one, when she arrived at our shelter she had a severe case of itchiness due to the mites that infested her long fur and she suffered from food deficiency and severe malnourishment.\r\nLuckily she was willing to get better and live a happy healthy life.\r\nShe is waiting for an equally beautiful soul to adopt her.', 1),
(3, 'Smokey', 'Grey and White', 9, 'A very calm boy that was abandoned on the streets and a kind lady sent him to our shelter to take care of him.\r\nThe picture shows that his condition was really bad when he first came in.\r\nHe had many mites and ticks that considered his body their home.\r\nHis nice fur was matted, and he had lots of scars covering his body.\r\nHe is in good condition now and excitedly ready for your lovely house.', 2),
(4, 'Goldie', 'Gold and White', 4, 'A playful girl.\r\nHer case was one of the most heartbreaking cases we have seen yet.\r\nShe was found in a sewer by a little girl and her mother, they contacted us, and our team immediately rescued this angel.\r\nShe is now searching for a cuddly owner and a warm house.', 2),
(5, 'Fox', 'Gold', 5, 'One of the loudest happiest dogs you\'ll encounter in life.\r\nHe was found in a trashcan and a gentleman reported his case and Fox was rescued.\r\nHe is now waiting for a warm house.', 1),
(6, 'Marino', 'Beige', 3, 'His owner died and he was forgotten in the house.\r\nThe neighbor contacted us and reported they would hear loud howling during the night.\r\nWhen we found him he was crouching next to his dead friend waiting for him to wake up and heartbroken.\r\nWe struggled with him because he refused to eat or drink but he is in good condition now and ready for a new home.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Dogs'),
(2, 'Cats');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(10, 'Sabah Mostafa Sinno', 'sabah6342sinno@gmail.com', 'saso63', 'sasosinno13'),
(11, 'mary lynn sinno', 'Sabah@gmail.com', 'mmmar9', '3345'),
(12, 'Sabah Mostafa Sinno', 'sabah6342sinno@gmail.com', 'saso63', 'sasosinno13'),
(13, 'Sabah Mostafa Sinno', 'sabah6342sinno@gmail.com', 'saso63', 'saso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
