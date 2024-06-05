-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 01:52 PM
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
-- Database: `magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `image`, `entry_date`) VALUES
(10, 'i phone', 'b71546e42c5a7ab7f00509b00a63b53a.png', '2024-04-13 11:04:46'),
(11, 'Samsung', 'e44be4363b2e275302f202597f739de9.png', '2024-04-13 11:05:04'),
(12, 'xiaomi', '885d689d2de2e620ebd1eefd2424d1a1.png', '2024-04-13 11:05:22'),
(14, 'OPPO', '6b14ef0b894af68b24e8f19bdbefeca3.png', '2024-04-13 18:52:10'),
(15, 'VIVO', 'f5cd70bcc15b3c30b2c5750cfc2eb654.png', '2024-04-13 18:56:17'),
(17, 'asdfas', 'eab7c2948582193a1a6affecd843cbd5.jpg', '2024-05-20 11:26:45'),
(18, 's', '0293a71ee157f58b92e64ff03472871d.png', '2024-05-20 11:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'New',
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `subject`, `message`, `status`, `entry_date`) VALUES
(1, 'd', 'd@gmail.com', 'd', 'd', 'Old', '0000-00-00 00:00:00'),
(2, 'd', 'ds@relaxplzz.com', 's', 'sd', 'Old', '2024-04-05 14:54:34'),
(3, 's', 'bb@relaxplzz.com', 's', 'The button has attributes for Bootstrap popover (data-bs-toggle, data-bs-offset, data-bs-placement, data-bs-html, data-bs-content, data-bs-original-title) and a data-message attribute to store the message.\nThe JavaScript code uses jQuery to handle the click event on elements with the .show class (in this case, the <a> tag inside the popover content).\nWhen the .show element is clicked, it retrieves the message from its data-message attribute and sets it in the textarea with the id #message.', 'Old', '2024-04-05 15:13:09'),
(4, 'c', 'ginish@relaxplzz.com', 'cxv', 'xc', 'Old', '2024-04-12 11:44:42'),
(5, 'c', 'ginish@relaxplzz.com', 'cxv', 'xc', 'Old', '2024-04-12 11:44:44'),
(6, 'f', 'albinjaya@gmail.com', 'efw', 'ef', 'Old', '2024-04-12 16:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`id`, `title`, `description`, `image`, `entry_date`) VALUES
(22, 'z', 'z', '9d242cdd4dc50c095993018915eb0b74.png', '2024-05-20 17:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `company_name` varchar(80) NOT NULL,
  `category_id` varchar(80) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `product_id` varchar(80) NOT NULL,
  `mrp` float(15,2) NOT NULL,
  `retail` float(15,2) NOT NULL,
  `image_id` varchar(80) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `company_name`, `category_id`, `product_name`, `product_id`, `mrp`, `retail`, `image_id`, `entry_date`) VALUES
(7, 'i phone', 'CAT99381', 'IPHONE X ', 'PROID97435', 1150.00, 950.00, 'IMG1712994142', '2024-04-13 13:12:22'),
(33, 'Samsung', 'CAT99381', 'SAMSUNG S20 FE ', 'PROID76966', 2600.00, 2400.00, 'IMG1713002632', '2024-04-13 15:33:52'),
(42, 'xiaomi', 'CAT99381', 'XIAOMI MI  9   ', 'PROID20204', 1700.00, 1400.00, 'IMG1713003459', '2024-04-13 15:47:39'),
(43, 'xiaomi', 'CAT99381', 'XIAOMI MI  9 LITE', 'PROID10519', 1700.00, 1450.00, 'IMG1713003527', '2024-04-13 15:48:47'),
(44, 'xiaomi', 'CAT99381', 'XIAOMI MI 9T', 'PROID27792', 1600.00, 1350.00, 'IMG1713003615', '2024-04-13 15:50:15'),
(46, 'i phone', 'CAT34325', 'IPHONE.6s', 'PROID66093', 650.00, 400.00, 'IMG1713005542', '2024-04-13 16:22:22'),
(47, 'Samsung', 'CAT34325', 'SAMSUNG. NOTE 20 ULTRA.', 'PROID50718', 850.00, 650.00, 'IMG1713005951', '2024-04-13 16:29:11'),
(49, 'Samsung', 'CAT13677', 'SAMSUNG A54', 'PROID03393', 650.00, 450.00, 'IMG1713006369', '2024-04-13 16:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` varchar(80) NOT NULL,
  `image_id` varchar(80) NOT NULL,
  `product_images` varchar(80) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_id`, `product_images`, `entry_date`) VALUES
(1, 'PROID83552', 'IMG1712899882', 'kid1-removebg-preview.png', '2024-04-12 11:01:23'),
(2, 'PROID00005', 'IMG1712900579', 'usha.jpg', '2024-04-12 11:12:59'),
(3, 'PROID00005', 'IMG1712900579', 'fan.jpg', '2024-04-12 11:12:59'),
(4, 'PROID82748', 'IMG1712905645', 'HR2631FTJ_C2L0.png', '2024-04-12 12:37:25'),
(5, 'PROID82748', 'IMG1712905645', 'e74662d71042d37a5054d2e0db78b5fc.png', '2024-04-12 12:37:25'),
(6, 'PROID49085', 'IMG1712913006', 'mencl1.jpg', '2024-04-12 14:40:06'),
(7, 'PROID49085', 'IMG1712913006', 'casual2.jpg', '2024-04-12 14:40:06'),
(8, 'PROID29923', 'IMG1712921060', 'Untitled-2.jpg', '2024-04-12 16:54:20'),
(9, 'PROID29923', 'IMG1712921060', 'computer_repairing_social_media_design_3.jpg', '2024-04-12 16:54:20'),
(10, 'PROID46615', 'IMG1712994067', 'download_(6).jpg', '2024-04-13 13:11:07'),
(11, 'PROID97435', 'IMG1712994142', '28839d529fb2631076ae03d66ace68f4.png', '2024-04-13 13:12:22'),
(12, 'PROID48412', 'IMG1712994232', 'download_(7).jpg', '2024-04-13 13:13:52'),
(13, 'PROID69998', 'IMG1712994392', '8a3065fe9edb3686a03e3c969abf8c82.jpg', '2024-04-13 13:16:32'),
(14, 'PROID78086', 'IMG1712994580', 'download_(10).jpg', '2024-04-13 13:19:40'),
(15, 'PROID77033', 'IMG1712994628', 'download_(11).jpg', '2024-04-13 13:20:28'),
(16, 'PROID86686', 'IMG1712994663', 'download_(11)1.jpg', '2024-04-13 13:21:03'),
(17, 'PROID59645', 'IMG1712995104', 'b12c6516b444b5915fcb224adb6f71dc.png', '2024-04-13 13:28:24'),
(18, 'PROID19890', 'IMG1712995723', 'download_(12).jpg', '2024-04-13 13:38:43'),
(19, 'PROID62293', 'IMG1712995851', 'download_(13).jpg', '2024-04-13 13:40:51'),
(20, 'PROID63590', 'IMG1712996126', 'download__14_-removebg-preview.png', '2024-04-13 13:45:26'),
(21, 'PROID92743', 'IMG1712996231', '1e3fd6f1e2a4cc54038a7268d8e3ed83.png', '2024-04-13 13:47:11'),
(22, 'PROID30242', 'IMG1712996445', 'download__17_-removebg-preview.png', '2024-04-13 13:50:45'),
(23, 'PROID36491', 'IMG1712996594', 'download__18_-removebg-preview.png', '2024-04-13 13:53:14'),
(24, 'PROID72790', 'IMG1712997476', 'download_(19).jpg', '2024-04-13 14:07:56'),
(25, 'PROID66936', 'IMG1712997572', '0aaa8576ae23d05b0e3cc418cb4c462b.jpg', '2024-04-13 14:09:32'),
(26, 'PROID70971', 'IMG1712997835', 'download__20_-removebg-preview.png', '2024-04-13 14:13:55'),
(27, 'PROID38273', 'IMG1712998289', 'download__22_-removebg-preview.png', '2024-04-13 14:21:29'),
(28, 'PROID51214', 'IMG1712998465', 'download__23_-removebg-preview.png', '2024-04-13 14:24:25'),
(29, 'PROID38330', 'IMG1712998610', 'download__24_-removebg-preview.png', '2024-04-13 14:26:50'),
(30, 'PROID33154', 'IMG1713001895', 'download__25_-removebg-preview.png', '2024-04-13 15:21:35'),
(31, 'PROID18745', 'IMG1713001965', 'download__26_-removebg-preview.png', '2024-04-13 15:22:45'),
(32, 'PROID61944', 'IMG1713002055', 'download__27_-removebg-preview.png', '2024-04-13 15:24:15'),
(33, 'PROID90025', 'IMG1713002275', 'download__28_-removebg-preview.png', '2024-04-13 15:27:55'),
(34, 'PROID84510', 'IMG1713002371', 'download__29_-removebg-preview.png', '2024-04-13 15:29:31'),
(35, 'PROID30168', 'IMG1713002460', 'download__30_-removebg-preview.png', '2024-04-13 15:31:00'),
(36, 'PROID81465', 'IMG1713002535', 'download__31_-removebg-preview.png', '2024-04-13 15:32:15'),
(37, 'PROID76966', 'IMG1713002632', 'download__32_-removebg-preview.png', '2024-04-13 15:33:52'),
(38, 'PROID07895', 'IMG1713002706', 'download__33_-removebg-preview.png', '2024-04-13 15:35:06'),
(39, 'PROID37225', 'IMG1713002791', 'download__34_-removebg-preview.png', '2024-04-13 15:36:31'),
(40, 'PROID55405', 'IMG1713002865', 'download__35_-removebg-preview.png', '2024-04-13 15:37:45'),
(41, 'PROID33734', 'IMG1713002957', '2e671317b82a8d769f2745ef8a1613b2.png', '2024-04-13 15:39:17'),
(42, 'PROID62725', 'IMG1713003074', 'download__37_-removebg-preview.png', '2024-04-13 15:41:14'),
(43, 'PROID56873', 'IMG1713003146', 'download__38_-removebg-preview.png', '2024-04-13 15:42:26'),
(44, 'PROID28010', 'IMG1713003324', 'download__39_-removebg-preview.png', '2024-04-13 15:45:24'),
(45, 'PROID14344', 'IMG1713003391', 'download__40_-removebg-preview.png', '2024-04-13 15:46:31'),
(46, 'PROID20204', 'IMG1713003459', 'download__41_-removebg-preview.png', '2024-04-13 15:47:39'),
(47, 'PROID10519', 'IMG1713003527', 'download__42_-removebg-preview.png', '2024-04-13 15:48:47'),
(48, 'PROID27792', 'IMG1713003615', 'download__43_-removebg-preview.png', '2024-04-13 15:50:15'),
(49, 'PROID61034', 'IMG1713004733', 'download__44_-removebg-preview.png', '2024-04-13 16:08:53'),
(50, 'PROID66093', 'IMG1713005542', 'download__46_-removebg-preview.png', '2024-04-13 16:22:22'),
(51, 'PROID50718', 'IMG1713005951', 'download__47_-removebg-preview.png', '2024-04-13 16:29:11'),
(52, 'PROID52041', 'IMG1713006251', '33a6cedd70fd4ad5adda24a4daf5692f.jpg', '2024-04-13 16:34:11'),
(53, 'PROID03393', 'IMG1713006369', '7af3dc1d1862ad5f697d8569e98f7b48.jpg', '2024-04-13 16:36:09'),
(54, 'PROID12054', 'IMG1713006437', 'd539115f12c18f4017c449b8c4486f1b.jpg', '2024-04-13 16:37:17'),
(55, 'PROID31731', 'IMG1713015586', 'IP4P0041PL.jpg', '2024-04-13 19:09:46'),
(56, 'PROID97491', 'IMG1713015700', 'images_(7).jpg', '2024-04-13 19:11:40'),
(57, 'PROID04078', 'IMG1713015789', 'images_(6).jpg', '2024-04-13 19:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_hint` varchar(80) NOT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'a',
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `username`, `password`, `password_hint`, `user_type`, `entry_date`) VALUES
(1, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', '12345', 'a', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `video` varchar(100) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
