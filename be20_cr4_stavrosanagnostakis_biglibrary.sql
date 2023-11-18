-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 02:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be20_cr4_stavrosanagnostakis_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be20_cr4_stavrosanagnostakis_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be20_cr4_stavrosanagnostakis_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media_biglibrary`
--

CREATE TABLE `media_biglibrary` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `isbn_code` varchar(15) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `author_first_name` varchar(255) DEFAULT NULL,
  `author_last_name` varchar(255) DEFAULT NULL,
  `publisher_name` varchar(255) DEFAULT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media_biglibrary`
--

INSERT INTO `media_biglibrary` (`id`, `title`, `picture`, `isbn_code`, `short_description`, `type`, `status`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(1, 'Even Cowgirls Get the Blues', 'robbins.jpg', '978-5555555', 'A humorous and adventurous novel by Tom Robbins, exploring the journey of a young woman with unusually large thumbs.', 'Book', 'Available', 'Tom', 'Robbins', 'Jitterbug Books', '123 Quirky Lane, Adventure City', '1976-09-01'),
(2, 'The Last Temptation of Christ', 'kazantzakis1.jpg', '978-6666666', 'A controversial and thought-provoking novel, reimagining the life of Jesus Christ and exploring profound theological questions.', 'Book', 'Available', 'Nikos', 'Kazantzakis', 'Divine Publications', '456 Crime Boulevard, Los Angeles', '1955-12-05'),
(3, 'A Brief History of Time', 'hawking.jpg', '978-7777777', 'A groundbreaking exploration of the universe, delving into complex scientific concepts for a general audience.', 'Book', 'Reserved', 'Stephen', 'Hawking', 'Cosmos Books', '789 Galaxy Lane, Physics City', '1988-04-01'),
(4, 'Mythistorema', 'seferis.jpg', '978-8888888', 'A collection of poems, exploring themes of mythology, history, and personal reflection.', 'Book', 'Reserved', 'Giorgos', 'Seferis', 'Aegean Press', '234 Poetry Avenue, Athens', '1935-07-10'),
(5, 'Bleach', 'nirvana.jpg', '978-1111111111', 'Nirvana debut studio album featuring raw and energetic grunge rock.', 'CD', 'Available', 'Nirvana', '', 'Sub Pop Records', '123 Grunge Street, Seattle', '1989-06-15'),
(6, 'The Dark Side of the Moon', 'pinkfloyd-7105689_640.jpg', '978-2222222', 'Pink Floyd iconic album known for its progressive rock and conceptual themes.', 'CD', 'Reserved', 'Pink', 'Floyd', 'Epitaph Records', '789 Punk Avenue, Rebellion City', '1973-03-01'),
(7, '...And Out Come the Wolves', 'rancid.jpg', '978-3333333', 'Rancid punk rock masterpiece with high-energy anthems.', 'CD', 'Available', 'Rancid', '', 'Epitaph Records', '789 Punk Avenue, Rebellion City', '1995-08-22'),
(8, 'Yield', 'pearljam.jpg', '978-4444444', 'Pearl Jam fifth studio album, showcasing their alternative rock sound.', 'CD', 'Reserved', 'Pearl Jam', '', 'Epic Records', '234 Grunge Boulevard, Soundville', '1998-02-03'),
(9, 'Green Street Hooligans', 'greenstreet.jpg', '978-9999999', 'A gripping drama that follows the journey of a student who finds camaraderie among football hooligans.', 'DVD', 'Available', 'Lexi', 'Alexander', 'Hooligan Films', '123 Football Lane, London', '2005-09-09'),
(10, 'Pulp Fiction', 'tarantino.jpg', '978-1010101', 'Quentin Tarantino iconic film featuring intertwining stories of crime, redemption, and unexpected events.', 'DVD', 'Reserved', 'Quentin', 'Tarantino', 'Divine Publications', '456 Crime Boulevard, Los Angeles', '1994-10-14'),
(11, 'Down by Law', 'downby.jpg', '978-1212121', 'A Jim Jarmusch film that follows the quirky journey of three misfits who end up in a Louisiana prison.', 'DVD', 'Available', 'Jim', 'Jarmusch', 'Aegean Press', '234 Poetry Avenue, Athens', '1986-05-01'),
(41, 'The 272', 'robbins.jpg', NULL, '', 'Book', 'Reserved', NULL, 'Rachel L. Swarns', 'Divine Publications', '456 Crime Boulevard, Los Angeles', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media_biglibrary`
--
ALTER TABLE `media_biglibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media_biglibrary`
--
ALTER TABLE `media_biglibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
