-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 09:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` text NOT NULL,
  `score` int(11) NOT NULL,
  `images_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `email`, `password`, `score`, `images_id`, `created_at`, `updated_at`) VALUES
(1, 'abby', 'abby@email.com', '$2y$10$YIC17jwbm/gdHraE4rGuKuyAqilCKlkgfiWEj8WENjFxAD7Z3OELe', 56, '12345-4321-343213-7890', '2021-03-12 11:00:03', '2021-03-12 14:01:16');

--
-- Triggers `agents`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_agents_trigger` BEFORE UPDATE ON `agents` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-check', 'Check Every where', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2021-03-13 14:33:55', '2021-03-13 14:37:21');

--
-- Triggers `features`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_features_trigger` BEFORE UPDATE ON `features` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `images_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images_id`, `created_at`, `updated_at`) VALUES
(1, '12345-4321-343213-7896', '2021-03-25 18:46:40', '2021-03-25 18:46:40'),
(2, '12345-4321-343213-7890', '2021-03-25 18:46:40', '2021-03-25 18:46:40'),
(3, '12345-4321-343213-7856', '2021-03-25 18:46:56', '2021-03-25 18:46:56'),
(4, '12345-4321-343213-7857', '2021-03-25 18:46:56', '2021-03-25 18:46:56');

--
-- Triggers `gallery`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_gallery_trigger` BEFORE UPDATE ON `gallery` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `thumbnail_id` varchar(50) NOT NULL,
  `adress` text NOT NULL,
  `rooms` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `images_id` varchar(50) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `thumbnail_id`, `adress`, `rooms`, `surface`, `price`, `title`, `images_id`, `agent_id`, `created_at`, `updated_at`) VALUES
(1, '12345-4321-343213-7896', 'youssofia', 5, 50, '500000.00', 'sweet home', '12345-4321-343213-7890', 1, '2021-03-12 15:27:23', '2021-03-12 15:27:23');

--
-- Triggers `homes`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_homes_trigger` BEFORE UPDATE ON `homes` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `alt_title` varchar(50) DEFAULT NULL,
  `images_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `alt_title`, `images_id`, `created_at`, `updated_at`) VALUES
(1, 'https://img.jamesedition.com/listing_images/2021/01/19/10/32/46/aa45ac8b-b374-476d-9658-1acd49f7912e/je/2000xxs.jpg', 'alt tutle', '12345-4321-343213-7896', '2021-03-12 18:13:53', '2021-03-22 12:29:46'),
(2, 'https://img.jamesedition.com/listing_images/2021/01/19/10/32/46/aa45ac8b-b374-476d-9658-1acd49f7912e/je/2000xxs.jpg', 'alt title', '12345-4321-343213-7890', '2021-03-12 18:13:53', '2021-03-22 12:29:51'),
(3, 'https://img.jamesedition.com/listing_images/2021/01/19/10/32/46/aa45ac8b-b374-476d-9658-1acd49f7912e/je/2000xxs.jpg', 'alt tutle', '12345-4321-343213-7890', '2021-03-12 18:32:44', '2021-03-22 12:29:54'),
(4, 'https://diwane-hotel.com/wp-content/uploads/2018/06/Pool2-min.jpg', 'diwane hotel', '12345-4321-343213-7856', '2021-03-25 18:46:35', '2021-03-25 18:46:35'),
(5, 'https://media-cdn.tripadvisor.com/media/photo-s/12/62/34/e6/savoy-le-grand-hotel.jpg', 'SAVOY LE GRAND HOTEL', '12345-4321-343213-7857', '2021-03-25 18:47:42', '2021-03-25 18:47:42');

--
-- Triggers `images`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_images_trigger` BEFORE UPDATE ON `images` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `newsletters`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_newsletters_trigger` BEFORE UPDATE ON `newsletters` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `image_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, '12345-4321-343213-7890', '2021-03-13 15:03:52', '2021-03-13 15:03:52'),
(2, '12345-4321-343213-7890', '2021-03-22 12:42:05', '2021-03-22 12:42:05'),
(3, '12345-4321-343213-7890', '2021-03-22 12:42:05', '2021-03-22 12:42:05'),
(4, '12345-4321-343213-7890', '2021-03-22 12:42:18', '2021-03-22 12:42:18'),
(5, '12345-4321-343213-7890', '2021-03-22 12:42:18', '2021-03-22 12:42:18');

--
-- Triggers `partners`
--
DELIMITER $$
CREATE TRIGGER `update_at_on_partners_trigger` BEFORE UPDATE ON `partners` FOR EACH ROW BEGIN    
	SET NEW.updated_at = current_timestamp() , NEW.created_at = OLD.created_at ;    
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `homes`
--
ALTER TABLE `homes`
  ADD CONSTRAINT `homes_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
