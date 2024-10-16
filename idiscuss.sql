-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 05:03 AM
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
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_discription` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_discription`, `CreateTime`) VALUES
(1, 'php', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. ', '2024-06-17 21:55:24'),
(2, 'c', 'C is a commonly used computer programming language. It was developed by Dennis Ritchie ', '2024-06-17 21:56:01'),
(4, 'c#', 'C# is a general-purpose high-level programming language supporting multiple paradigms', '2024-06-30 21:22:12'),
(5, 'html', 'HyperText Markup Language is the standard markup language for documents designed to be displayed in a web browser. It defines the content and structure of web content. It is often assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript', '2024-06-30 21:23:39'),
(7, 'css', 'CSS is the language we use to style an HTML document.\r\n\r\nCSS describes how HTML elements should be displayed.\r\n\r\nThis tutorial will teach you CSS from basic to advanced', '2024-06-30 22:32:33'),
(8, 'java script', 'JavaScript, abbreviated to JS, is a core language of the World Wide Web, along with HTML and CSS. As of 2022, 98% of websites use JavaScript in their client sites. Most browsers have a JavaScript engine to execute the code on the user side.', '2024-06-30 22:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `threads_id` int(11) NOT NULL,
  `comment_by` text NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `threads_id`, `comment_by`, `comment_time`) VALUES
(24, 'this is testing comment', 31, '18', '2024-10-02 15:37:16'),
(26, 'testing comment', 33, '16', '2024-10-07 09:47:38'),
(28, 'testing comment', 33, '16', '2024-10-07 11:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `threads_id` int(7) NOT NULL,
  `threads_tital` varchar(255) NOT NULL,
  `threads_desc` text NOT NULL,
  `threads_cat_id` int(7) NOT NULL,
  `threads_user_id` int(7) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`threads_id`, `threads_tital`, `threads_desc`, `threads_cat_id`, `threads_user_id`, `time`) VALUES
(31, 'this is threads tital testing', 'testing ', 1, 18, '2024-10-02 15:36:57'),
(32, 'test', 'testing threads\r\n', 2, 16, '2024-10-05 17:44:58'),
(33, 'discuss problem tital', 'idiscuss problem description', 2, 16, '2024-10-06 16:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `time`) VALUES
(1, 'chabhadiyadhrupal99@gmail.com', '$2y$10$AXklICuQ4vH2j.WsRwN.6e9kIk4Y7gH2gnDCMHiqcK.DmBVhRFbZS', '2024-06-22 16:43:57'),
(2, 'chabhadiyadhrupl99@gmail.com', '$2y$10$/qAu5G3ENj2VARFH5uUC9.0V6scbKFNqD9EsRu4iOOT3snjxbU8va', '2024-06-22 16:51:50'),
(3, 'utsavchabhadiya31@gmail.com', '$2y$10$FtEOJKiK8/LZKWZwD92hs.rh81yyHWdWgYevhYRrIpAeswedqMBcW', '2024-06-22 16:55:37'),
(4, 'patel@gmail.com', '$2y$10$2HKDQfZ1AgdLR2RweWc1TuCvWrC4uCGUu7yeBEcYAo83vpabk8bse', '2024-06-22 16:58:24'),
(5, 'sd@gmail.com', '$2y$10$QGS0nxU.ZfHwmbvaMY14p.qxCIzyFYtWfC8F608RMjo5RuRAbfk7e', '2024-06-24 18:36:14'),
(6, '123@123.com', '$2y$10$xudRc1AIA62ln.R6L8IUHOkCKGbaLwdPxmWLGX8RsJELKi3aTfT4a', '2024-06-24 19:18:27'),
(7, 'dhrupal@g.com', '$2y$10$2kOkbkGYnDm0Ic99fcng/u5.Y26P68ZpB2V6u0yYODK4eaIoSk7Eq', '2024-06-24 19:46:10'),
(8, 'abc@gmail.com', '$2y$10$.O90i.F/IJ8ffEAeigZY5e.OXAsjiEK83DZi9vOrT3GzRkdS980L6', '2024-06-25 20:29:40'),
(9, 'dhrupal007u@gmail.com', '$2y$10$hvDRqvindw87AifuEv/wR.nDjJ5eiXPUiLneZOqvQnr1J5.ShFcDm', '2024-06-25 20:45:35'),
(10, 'dkpatel@gmail.com', '$2y$10$ty23.Ep852HsJlFcHHoNaOEU5WSQxud8y47w3nbIZ1ry4XfcwwWIa', '2024-06-25 22:55:17'),
(11, 'dhrupal', '$2y$10$YQ1i6vi03JagOnNu.zn28O.ZlPBbN.4ieGUbUcZ4vRY7P0A4Akv1a', '2024-06-26 00:02:14'),
(12, 'utsav', '$2y$10$DA9u6uYt.udKEaDUEC5TRens6Xr/6HmzQVmCXWvs35UwPG/e4LEj2', '2024-06-26 00:15:48'),
(13, 'vicky', '$2y$10$4BqEnSY5Ej9dPlH80VT./OJfIxa0UV2t8HMBU1yGa7QzrNGLiiUq6', '2024-06-29 07:18:53'),
(14, 'dhrupalchabhadiya99@gmail.com', '$2y$10$FrNk.kwbo038hqlQD7pqiuh6Y1s8woMQvHu.y0Vh2qs.CVMDahD36', '2024-06-30 20:57:42'),
(15, 'dk patel', '$2y$10$pus44juQsqlsvbPrdkYjgugWg5./zMNnEwJAZh6cAfsY3r9cVI2fi', '2024-08-01 13:20:56'),
(16, '123', '$2y$10$bxhKRPZQIMbmEGCvZRHUjubrHZcEHJJk5h9JDFPHLeO4o6YzgrytK', '2024-08-09 12:22:46'),
(17, 'kishor bhai', '$2y$10$1Oh7oJwNj3VKKLvTHLegZ.aNEWdzg2Sle6wGirXmM9UtjPZLbPG1e', '2024-08-26 08:37:36'),
(18, 'test', '$2y$10$2OaagqPDt/1GyF7ZtYa/DueeNXXe4JvmB8MNhSHOSHCKqgOTNyAbO', '2024-09-24 16:00:35'),
(19, '1', '$2y$10$k7k7IRX0OFr5.ImhGMgPC.dAsylwmyNbMg71oHts.kG2MUE20q9CW', '2024-09-24 16:10:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`threads_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `threads_tital` (`threads_tital`,`threads_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `threads_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
