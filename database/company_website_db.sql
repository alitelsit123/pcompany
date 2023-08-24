-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 04:01 PM
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
-- Database: `company_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(30) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company_name`, `description`, `file_path`, `date_created`, `date_updated`) VALUES
(5, 'Produk A', '&lt;p&gt;Produk A&lt;br&gt;&lt;/p&gt;', 'uploads/1692785520_vow-of-the-disciple-rhulk-extra-chest-symbol-locations-destiny-2_feature.jpg', '2023-08-23 17:12:27', NULL),
(6, 'Produk A', '&lt;p&gt;Produk A&lt;br&gt;&lt;/p&gt;', 'uploads/1692785520_vow-of-the-disciple-rhulk-extra-chest-symbol-locations-destiny-2_feature.jpg', '2023-08-23 17:12:41', NULL),
(7, 'asasasasas', '&lt;p&gt;asasdasdasdasdasdasdasdasd&lt;/p&gt;', 'uploads/1692883020_wallpaperflare.com_wallpaper.jpg', '2023-08-24 20:17:45', NULL),
(8, 'asdasdasdasd', '&lt;p&gt;asasasasasaasdasdasdasd&lt;/p&gt;', 'uploads/1692883020_wallpaperflare.com_wallpaper.jpg', '2023-08-24 20:17:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `meta_field` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`meta_field`, `meta_value`) VALUES
('mobile', '0123456789'),
('email', 'email@email.com'),
('facebook', ''),
('twitter', ''),
('linkin', ''),
('address', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `full_name` text NOT NULL,
  `subject` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `file_path`, `date_created`, `date_updated`) VALUES
(5, 'Produk A', '&lt;p&gt;Produk A&lt;br&gt;&lt;/p&gt;', 'uploads/1692785460_Untitled.jpg', '2023-08-22 17:30:45', '2023-08-23 17:11:00'),
(6, 'Produk D', '&lt;p&gt;Produk D&lt;br&gt;&lt;/p&gt;', 'uploads/1692785506_Untitled.jpg', '2023-08-22 17:31:04', '2023-08-23 17:11:46'),
(7, 'Produk C', '&lt;p&gt;Produk C&lt;/p&gt;', 'uploads/1692785492_Untitled.jpg', '2023-08-22 17:31:19', '2023-08-23 17:11:32'),
(8, 'Produk B', '&lt;p&gt;Produk B&lt;br&gt;&lt;/p&gt;', 'uploads/1692785474_Untitled.jpg', '2023-08-22 17:31:58', '2023-08-23 17:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Perusahaan'),
(2, 'address', 'Philippines'),
(3, 'contact', '+1234567890'),
(4, 'email', 'info@sample.com'),
(6, 'short_name', 'Nama Perusahaan'),
(9, 'logo', 'uploads/1692785400_download.png'),
(11, 'welcome_message', 'Nama perusahaan adallah nama perusahaan Nama perusahaan adallah nama perusahaan Nama perusahaan adallah nama perusahaan Nama perusahaan adallah nama perusahaanNama perusahaan adallah nama perusahaan Nama perusahaan adallah nama perusahaanNama perusahaan adallah nama perusahaanNama perusahaan adallah nama perusahaanNama perusahaan adallah nama perusahaan'),
(12, 'banner', 'uploads/1692785400_Untitled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(30) NOT NULL,
  `message_from` text NOT NULL,
  `message` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `message_from`, `message`, `file_path`, `date_created`, `date_updated`) VALUES
(5, 'Perusahaan A', '&lt;p&gt;Perusahaan A&lt;br&gt;&lt;/p&gt;', 'uploads/1692785602_Untitled.jpg', '2023-08-23 17:13:22', NULL),
(6, 'asdasdasd', '&lt;p&gt;asdasdasdasd&lt;/p&gt;', 'uploads/1692883119_Untitled.jpg', '2023-08-24 20:18:39', NULL),
(7, 'dasdasdasdasdasd', '&lt;p&gt;asdasdasdasdas&lt;/p&gt;', 'uploads/1692883130_wallpaperflare.com_wallpaper.jpg', '2023-08-24 20:18:50', NULL),
(8, 'asdasdasdasdasd', '&lt;p&gt;asdasdasdasdasdasd&lt;/p&gt;', 'uploads/1692883142_wallpaperflare.com_wallpaper.jpg', '2023-08-24 20:19:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'Nabila', 'Eka Ananda', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'uploads/1692619080_b331d6d35d9de9cd10dc157d72f5c61b.jpg', NULL, '2021-01-20 14:02:37', '2023-08-21 18:58:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
