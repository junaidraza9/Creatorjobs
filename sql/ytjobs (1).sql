-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 10:56 AM
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
-- Database: `ytjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `aboutthejob` mediumtext NOT NULL,
  `worksample` varchar(1000) NOT NULL,
  `date` varchar(255) NOT NULL,
  `experince` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `user_id`, `job_id`, `job_name`, `price`, `aboutthejob`, `worksample`, `date`, `experince`, `country`, `email`, `name`, `platform`, `avatar`) VALUES
(16, '40', '32', 'Channel Manager', '500', 'FDGFAWSDBFDBDFSBBFDS', 'DFVBSDBVSDFBVDS', '09 Jul 2023', 'Video Editor', 'Afghanistan', 'bbb@gmail.com', 'PRO DEV', 'youtube', 'avatar.jpg'),
(17, '14', '33', 'Video Editor', '900', 'jnnhb', 'jnbhb', '10 Jul 2023', 'Video Editor', 'Australia', 'djbravo@gmail.com', 'DJ Bravo', 'youtube', 'avatar.jpg'),
(18, '41', '1', 'Video Editor', '100', 'sfefefe', 'fefffef', '10 Jul 2023', 'Video Editor', 'Mexico', 'imohdjunaid214@gmail.com', 'junaid raza', 'youtube', 'avatar.jpg'),
(19, '42', '34', 'Video Editor', '200', 'sefe', 'feeffe', '10 Jul 2023', 'Video Editor', 'Albania', 'ghaniyahchaudary@gmail.com', 'efef', 'youtube', 'avatar.jpg'),
(20, '42', '3', 'Channel Manager', '50', 'feeffe', 'fefeef', '10 Jul 2023', 'Video Editor', 'Albania', 'ghaniyahchaudary@gmail.com', 'efef', 'tiktok', 'avatar.jpg'),
(21, '30', '35', 'Video Editor', '300', 'joy', 'roy', '24 Oct 2023', 'Video Editor', 'Bangladesh', 'fiveerjoy@gmail.com', 'web developer roy', 'youtube', 'avatar.jpg'),
(22, '30', '36', 'Video Editor', '6789', 'hh', 'df', '24 Oct 2023', 'Video Editor', 'Bangladesh', 'fiveerjoy@gmail.com', 'web developer roy', 'youtube', 'avatar.jpg'),
(23, '52', '37', 'Scriptwriter', '1000', 'hi ', 'hello', '24 Oct 2023', 'Scriptwriter', 'Afghanistan', 'demo123@gmail.com', 'demo123', 'youtube', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `start` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `platform` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `about_job` varchar(2000) NOT NULL,
  `ideal_candidate` varchar(2000) NOT NULL,
  `job_requirements` varchar(2000) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `position`, `start`, `job_type`, `platform`, `location`, `about_job`, `ideal_candidate`, `job_requirements`, `user_name`, `user_email`, `user_avatar`, `post_date`, `price`) VALUES
(1, 6, 'Video Editor', 'ASAP', 'Full-time', 'youtube', 'Remote', 'test test test test test test test test test test test testtest test test test test test\r\ntest test test test test test test test test test test testtest test test test test test\r\ntest test test test test test test test test test test testtest test test test test test', 'test test test test test test test test test test test testtest test test test test test\r\ntest test test test test test test test test test test testtest test test test test test\r\ntest test test test test test test test test test test testtest test test test test test', 'test test test test test test test test test test test testtest test test test test test\r\ntest test test test test test test test test test test testtest test test test test test\r\ntest test test test test test test test test test test testtest test test test test test', 'web developer roy', 'joy@gmail.com', 'avatar.jpg', '27 Jun 2023', '100'),
(2, 7, 'YouTube Strategist', 'Within a month', 'Part-time', 'facebook', 'Hybrid', 'fiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.com', 'fiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.com', 'fiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.comfiveerjoy555@gmail.com', 'Antonio De sena', 'fiveerjoy555@gmail.com', 'avatar.jpg', '27 Jun 2023', '20'),
(3, 7, 'Channel Manager', 'Within a month', 'Full-time', 'tiktok', 'Remote', 'thererererererererererererererererererererers thererererererererererererererererererererers  thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'Antonio De sena', 'fiveerjoy555@gmail.com', 'avatar.jpg', '27 Jun 2023', '50'),
(4, 7, 'YouTube Strategist', 'ASAP', 'Per-project', 'snapchat', 'Remote', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'Antonio De sena', 'fiveerjoy555@gmail.com', 'avatar.jpg', '27 Jun 2023', '200'),
(5, 7, 'YouTube Producer', 'ASAP', 'Full-time', 'facebook', 'Remote', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'Antonio De sena', 'fiveerjoy555@gmail.com', 'avatar.jpg', '27 Jun 2023', '300'),
(6, 7, 'Video Editor', 'ASAP', 'Per-project', 'instagram', 'Remote', 'thererererererererererererererererererererers thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers ', 'thererererererererererererererererererererers thererererererererererererererererererererers ', 'Antonio De sena', 'fiveerjoy555@gmail.com', 'avatar.jpg', '27 Jun 2023', '500'),
(7, 6, 'Video Editor', 'Within a month', 'Part-time', 'instagram', 'Remote', 'formateformateformateformateformateformateformateformatev\r\nformateformateformateformateformateformateformateformate\r\nformateformate', 'formateformateformateformateformateformateformateformatev\r\nformateformateformateformateformateformateformateformate\r\nformateformate', 'formateformateformateformateformateformateformateformatev\r\nformateformateformateformateformateformateformateformate\r\nformateformate', 'Antonio De sena', 'fiveerjoy555@gmail.com', 'avatar.jpg', '27 Jun 2023', '500'),
(8, 7, 'Video Editor', 'ASAP', 'Full-time', 'instagram', 'Remote', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '500'),
(19, 10, 'Video Editor', 'ASAP', 'Full-time', 'tiktok', 'Remote', 'platforms platformsplatformsplatformsplatformsplatformsplatformsplatformsplatformsplatformsplatformsplatformsplatforms', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '999'),
(20, 10, 'Thumbnail Designer', 'ASAP', 'Full-time', 'snapchat', 'Remote', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '888'),
(21, 10, 'Thumbnail Designer', 'ASAP', 'Full-time', 'facebook', 'Remote', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '888'),
(22, 10, 'Video Editor', 'ASAP', 'Full-time', 'facebook', 'Remote', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '333'),
(23, 10, 'Video Editor', 'ASAP', 'Full-time', 'youtube', 'Remote', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '50'),
(24, 10, 'Creative Director', 'ASAP', 'Full-time', 'facebook', 'Remote', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '500'),
(25, 10, 'Channel Manager', 'ASAP', 'Full-time', 'tiktok', 'Remote', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', ' content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, ', 'Sree Biddut Shil', 'fiveerjoyp@gmail.com', 'avatar.jpg', '28 Jun 2023', '200'),
(26, 23, 'Thumbnail Designer', 'ASAP', 'Per-project', 'youtube', 'Remote', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'test', 'test@gmail.com', 'avatar.jpg', '01 Jul 2023', '500'),
(27, 24, 'Scriptwriter', 'ASAP', 'Full-time', 'instagram', 'Hybrid', 'demo text', 'demo text', 'demo text', 'hello world', 'test99@gmail.com', '64a069ea27d3b.jpg', '01 Jul 2023', '600'),
(28, 33, 'Channel Manager', 'ASAP', 'Full-time', 'youtube', 'Remote', 'test purpose', 'test purpose', 'test purpose', 'web dev', 'webdev@gmail.com', '64a5bc4305a4d.jpg', '05 Jul 2023', '300'),
(29, 35, 'Thumbnail Designer', 'ASAP', 'Full-time', 'tiktok', 'Remote', 'test the post', 'test the post', 'test the post', 'tech developer', 'techdev@gmail.com', 'avatar.jpg', '05 Jul 2023', '500'),
(30, 35, 'Channel Manager', 'Within a month', 'Full-time', 'instagram', 'Remote', 'instagram', 'instagram', 'instagram', ' developer', 'techdev@gmail.com', '64a5c6a8c2e72.jpg', '05 Jul 2023', '50'),
(31, 30, 'Video Editor', 'ASAP', 'Full-time', 'snapchat', 'Remote', 'sadcXASCASCSDACdfghsfdgbsfdbsdfb', 'adfbvbadsfvadfvasdfv', 'afsdvasdvasdvasdvasdvasdvasdv', 'web developer roy', 'fiveerjoy@gmail.com', 'avatar.jpg', '04 Jul 2023', '500'),
(32, 30, 'Channel Manager', 'ASAP', 'Full-time', 'youtube', 'Remote', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'web developer roy', 'fiveerjoy@gmail.com', 'avatar.jpg', '04 Jul 2023', '500'),
(33, 3, 'Video Editor', 'ASAP', 'Full-time', 'youtube', 'Remote', 'bhghg', '', '', 'joy roy', 'fiveerjoy1@gmail.com', 'avatar.jpg', '25 Jun 2023', '900'),
(34, 41, 'Video Editor', 'ASAP', 'Full-time', 'youtube', 'Remote', 'feef', 'fefe', 'fefeef', 'junaid raza', 'imohdjunaid214@gmail.com', 'avatar.jpg', '10 Jul 2023', '200'),
(35, 50, 'Video Editor', 'ASAP', 'Full-time', 'youtube', 'Remote', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'dj bravo', 'dj@gmail.com', 'avatar.jpg', '23 Oct 2023', '300'),
(36, 50, 'Video Editor', 'ASAP', 'Full-time', 'youtube', 'Remote', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 'dj bravo', 'dj@gmail.com', 'avatar.jpg', '23 Oct 2023', '6789'),
(37, 51, 'Scriptwriter', 'ASAP', 'Full-time', 'youtube', 'Remote', 'test job', 'test job', 'test job', 'test ', 'test1234@gmail.com', 'avatar.jpg', '24 Oct 2023', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `reciver_id` int(255) NOT NULL,
  `sms` varchar(1000) NOT NULL,
  `time` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `reciver_name` varchar(255) NOT NULL,
  `reciver_avatar` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `reciver_id`, `sms`, `time`, `user_name`, `user_avatar`, `reciver_name`, `reciver_avatar`, `date`, `total`) VALUES
(50, 45, 46, 'hi', '04:53pm', 'joy roy', 'avatar.jpg', 'Antonio De sena', 'avatar.jpg', '13 October 2023', '91'),
(51, 45, 46, 'hey', '04:56pm', 'joy roy', 'avatar.jpg', 'Antonio De sena', 'avatar.jpg', '13 October 2023', '91'),
(52, 45, 46, 'fhow are you ?', '04:58pm', 'joy roy', 'avatar.jpg', 'Antonio De sena', 'avatar.jpg', '13 October 2023', '91'),
(53, 45, 12, 'hello', '05:09pm', 'joy roy', 'avatar.jpg', 'adam smith', 'avatar.jpg', '13 October 2023', '57'),
(54, 46, 46, 'hi', '05:50pm', 'Antonio De sena', 'avatar.jpg', 'Antonio De sena', 'avatar.jpg', '13 October 2023', '92'),
(55, 46, 45, 'i am good', '05:56pm', 'Antonio De sena', 'avatar.jpg', 'joy roy', 'avatar.jpg', '13 October 2023', '91'),
(56, 46, 45, 'your self?', '05:56pm', 'Antonio De sena', 'avatar.jpg', 'joy roy', 'avatar.jpg', '13 October 2023', '91'),
(57, 45, 46, 'good', '05:57pm', 'joy roy', 'avatar.jpg', 'Antonio De sena', 'avatar.jpg', '13 October 2023', '91'),
(58, 47, 47, 'hi', '06:00pm', 'Sree Biddut Shil', 'avatar.jpg', 'Sree Biddut Shil', 'avatar.jpg', '13 October 2023', '94'),
(59, 45, 47, 'can you help me ?', '06:01pm', 'joy roy', 'avatar.jpg', 'Sree Biddut Shil', 'avatar.jpg', '13 October 2023', '92'),
(60, 47, 45, 'yeah sure', '06:01pm', 'Sree Biddut Shil', 'avatar.jpg', 'joy roy', 'avatar.jpg', '13 October 2023', '92'),
(61, 45, 48, 'hi', '02:38pm', 'joy roy', 'avatar.jpg', 'youtube', '652a538d1eb96.jpg', '14 October 2023', '93'),
(62, 45, 48, 'how are you ?', '02:39pm', 'joy roy', 'avatar.jpg', 'youtube', '652a538d1eb96.jpg', '14 October 2023', '93'),
(63, 48, 45, 'i am good', '02:39pm', 'youtube', '652a538d1eb96.jpg', 'joy roy', 'avatar.jpg', '14 October 2023', '93'),
(64, 48, 45, 'you ?', '02:39pm', 'youtube', '652a538d1eb96.jpg', 'joy roy', 'avatar.jpg', '14 October 2023', '93'),
(65, 45, 48, 'good , thank you ', '02:40pm', 'joy roy', 'avatar.jpg', 'youtube', '652a538d1eb96.jpg', '14 October 2023', '93'),
(66, 50, 49, 'hi', '12:23am', 'dj bravo', 'avatar.jpg', 'joy roy', 'avatar.jpg', '24 October 2023', '99'),
(67, 51, 52, 'hello', '02:47pm', 'test ', 'avatar.jpg', 'demo123', 'avatar.jpg', '24 October 2023', '103'),
(68, 51, 52, 'demo', '02:47pm', 'test ', 'avatar.jpg', 'demo123', 'avatar.jpg', '24 October 2023', '103'),
(69, 52, 51, 'yes bro', '02:47pm', 'demo123', 'avatar.jpg', 'test ', 'avatar.jpg', '24 October 2023', '103');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `job_id`, `candidate_id`, `user_id`, `job_name`, `price`, `status`, `platform`) VALUES
(16, '32', '40', '30', 'Channel Manager', '500', '0', 'youtube'),
(17, '33', '14', '3', 'Video Editor', '900', '0', 'youtube'),
(22, '35', '30', '50', 'Video Editor', '300', '0', 'youtube'),
(23, '36', '30', '50', 'Video Editor', '6789', '0', 'youtube'),
(24, '37', '52', '51', 'Scriptwriter', '1000', '0', 'youtube');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `platfrom` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `job_id`, `email`, `name`, `platfrom`, `user_id`, `user_name`, `user_email`, `delivery`) VALUES
(13, '32', 'fiveerjoy@gmail.com', 'web developer roy', 'youtube', '40', 'PRO DEV', 'bbb@gmail.com', 'upload/64aaffa25dc5c.zip');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `want` varchar(255) NOT NULL,
  `experince` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cookie` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `blance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `want`, `experince`, `country`, `password`, `cookie`, `date`, `avatar`, `phone`, `address`, `about`, `blance`) VALUES
(3, 'joy roy', 'fiveerjoy1@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '1920b962e8d6b31a3e98896145f046fb', '25 Jun 2023', 'avatar.jpg', '', '', '', 0),
(4, 'Sree Biddut Shil', 'fiveerjoy3@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '2031affbdec2989e1fd2418826917175', '25 Jun 2023', 'avatar.jpg', '', '', '', 0),
(5, 'Sree Biddut Shil', 'admin@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', 'e797003624ecc3f14b577e1ddfa85049', '27 Jun 2023', 'avatar.jpg', '', '', '', 0),
(8, 'Antonio De sena', 'pop3@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '94aee78233cea00a9fad72e5bf7d8f3f', '28 Jun 2023', 'avatar.jpg', '', '', '', 0),
(12, 'adam smith', 'webdeveloperjoy2@gmail.com', '0', 'Creative Director', 'Bangladesh', '@01971779608@joy!', '1548d18dadabc85bd1b9899fd6406f1a', '29 Jun 2023', 'avatar.jpg', '', '', '', 0),
(13, 'Roy Roy', 'roy@gmail.com', '1', 'YouTube Strategist', 'Bangladesh', '@01971779608@joy!', 'dd8960527dddc7163d6f3244e5cb5fae', '29 Jun 2023', 'avatar.jpg', '', '', '', 0),
(14, 'DJ Bravo', 'djbravo@gmail.com', '1', 'Video Editor', 'Australia', '@01971779608@joy!', '29f957d881f34371aead99411e411023', '29 Jun 2023', 'avatar.jpg', '', '', '', 0),
(15, 'le le', 'lele@gmail.com', '0', 'Video Editor', 'Barbados', '@01971779608@joy!', '899ddfb9d20524cbbf29fa180656cc89', '29 Jun 2023', 'avatar.jpg', '', '', '', 0),
(16, 'Michel', 'michel@gmail.com', '0', 'Video Editor', 'Georgia', '@01971779608@joy!', '89a6b81ccdf78c77f4fe02c575da377d', '29 Jun 2023', 'avatar.jpg', '', '', '', 0),
(17, 'job board', 'job@gmail.com', '1', 'YouTube Strategist', 'Barbados', '@01971779608@joy!', '9a05c083f86c73cce7cec52007e8a65b', '29 Jun 2023', 'avatar.jpg', '', '', '', 0),
(18, 'junid', 'junid@gmail.com', '0', 'Video Editor', 'France', '@01971779608@joy!', '998997f42e4cd195e0f9508ec9364887', '30 Jun 2023', 'avatar.jpg', '', '', '', 0),
(19, 'MR Joy', 'mr@gmail.com', '0', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '7264c2d74e04d35aee4a585601ef47b9', '30 Jun 2023', 'avatar.jpg', '88001971779608', 'kalma,1530,louhajang,munshiganj,01971779608', '', 0),
(20, 'harry', 'harry@gmail.com', '1', 'YouTube Producer', 'Bangladesh', '@01971779608@joy!', '9a80efa421a56e0606f0515d6b1a2a51', '30 Jun 2023', 'avatar.jpg', '+880-1971779608', 'kalma,1530,louhajang,munshiganj,01971779608', '', 0),
(22, 'developer', 'developer420@gmail.com', '0', 'Video Editor', 'Finland', '@01971779608@joy!', '7523f66b94b393c1525e74fefd8d4f48', '01 Jul 2023', 'avatar.jpg', '01971779608', 'Finland , kalma-150, dhujar', '', 0),
(23, 'junied Raja', 'test@gmail.com', '1', '', 'Bangladesh', '55555555', '7a9eee3f5d93ef41d9266dad1752898a', '01 Jul 2023', '64a05f5593da0.jpg', '465465465165', 'asdbfiwsqvcdb asgbdvijasbdvui boi', 'fhbdoueasqdvnboasbdvoua houi asdhgfoasdbviasbik jbahijkvcg', 0),
(24, 'hello world', 'test99@gmail.com', '1', '', 'Bangladesh', '@01971779608@joy!', '999a3e4afcf9d59d30a99d2a4a04c803', '01 Jul 2023', '64a069ea27d3b.jpg', '00000000', 'joy roy,mobile:01971779608', 'I am a professional full-stack web developer. i have lots of experience with this sector ', 0),
(25, 'Liam', 'Liam@gmail.com', '0', 'YouTube Producer', 'Viet Nam', '@01971779608@joy!', 'dadb9e8f22b1e1b6bae2de602c75d052', '03 Jul 2023', '64a30c8d9e4c1.jpg', '01971779608', 'dhaka,bangladesh', '', 0),
(26, 'Oliver', 'Oliver@gmail.com', '0', 'Video Editor', 'Gibraltar', '@01971779608@joy!', '9a140f0efb84cc8bd14e266a5c27666d', '03 Jul 2023', '64a30d47d6f75.jpg', '01971779608', 'kalma,1530,louhajang,munshiganj,01971779608', '', 0),
(27, 'web developer roy', 'fiveerjoy@gmail.com', '0', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '201e4c64d9a810b832c63bcc9bb4ad4d', '04 Jul 2023', 'avatar.jpg', '01971779608', 'dhaka,bangladesh', '', 0),
(28, 'Joy Roy', 'fiveerjoy22222222222@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', 'fec423052f7706f68a60ad21eee80f85', '04 Jul 2023', 'avatar.jpg', '+8801971779608', 'Dhaka,Bangladesh', '', 0),
(29, 'joy roy', 'fiveerjoy@gmail.com', '0', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '201e4c64d9a810b832c63bcc9bb4ad4d', '04 Jul 2023', 'avatar.jpg', '01971779608', 'joy roy,mobile:01971779608', '', 0),
(30, 'web developer roy', 'fiveerjoy@gmail.com', '0', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '201e4c64d9a810b832c63bcc9bb4ad4d', '04 Jul 2023', 'avatar.jpg', '01971779608', 'dhaka,bangladesh', '', 7089),
(31, 'web developer roy', 'fiveer1joy@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '3f58e97a87b55f048f99fc331cdf4632', '04 Jul 2023', 'avatar.jpg', '01971779608', 'dhaka,bangladesh', '', 0),
(32, 'web developer roy', 'fiveerjoy95646541@gmail.com', '1', 'Video Editor', 'Bangladesh', 'BbFKzUx89ayH42a', '611a8638dd83aec372fbbdb1fd0e859b', '05 Jul 2023', 'avatar.jpg', '01971779608', 'dhaka,bangladesh', '', 0),
(33, 'web dev', 'webdev@gmail.com', '0', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '0c05c8038ef10a3fb24a4d4d8011487c', '05 Jul 2023', '64a5bc4305a4d.jpg', '123456789', 'dhaka,bangladesh', '', 0),
(34, 'joy roy', 'fiveer55joy@gmail.com', '0', 'Video Editor', 'Bangladesh', 'fiveer55joy@gmail.com', '49d840ba6159905e723ec15c71d6151b', '05 Jul 2023', 'avatar.jpg', '01971779608', 'joy roy,mobile:01971779608', '', 0),
(35, ' developer', 'techdev@gmail.com', '1', '', 'Bangladesh', '@01971779608@joy!', '8b0ab9dde2f7a61ed3ac6c9f3e21dff9', '05 Jul 2023', '64a5c6a8c2e72.jpg', '01971779608', 'dhaka,bangladesh', 'full stack web developer ', 0),
(36, 'dev', 'dev@gmail.com', '0', 'Thumbnail Designer', 'Bahamas', '@01971779608@joy!', '62196d23cd58a1be8b3511ec4ce3dbf2', '08 Jul 2023', 'avatar.jpg', '000000000', 'kalma,1530,louhajang,munshiganj', '', 0),
(37, 'team360', 'team360@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', 'a9234f0386004fd9e3f730c365e17bb6', '08 Jul 2023', 'avatar.jpg', '01721779608', 'dhaka,bangladesh', '', 0),
(38, 'asdvfhgias', 'aaa@gmail.com', '0', 'Thumbnail Designer', 'Afghanistan', 'aaa@gmail.com', '03655d2dc8d5d7ef6b11e0d9e1b95aff', '09 Jul 2023', 'avatar.jpg', '46465416541654654', 'aaa@gmail.com', '', 0),
(39, 'test', 'test555@gmail.com', '0', 'Video Editor', 'Anguilla', '@01971779608@joy!', 'e2ac2333e98d05cd2c1b9e69f169709e', '09 Jul 2023', '64aafd85cfdcb.jpg', '465465465465', 'Gelosia', '', 0),
(40, 'PRO DEV', 'bbb@gmail.com', '0', 'Video Editor', 'Afghanistan', 'bbb@gmail.com', 'ad361da87bab934ac8202db702ee0eb7', '09 Jul 2023', 'avatar.jpg', '545646465', 'SDFASDVAEDVAESDV', '', 0),
(41, 'junaid raza', 'imohdjunaid214@gmail.com', '1', 'Video Editor', 'Mexico', '1234567', '253a8774dae32aeed9d3c9f8b32cee03', '10 Jul 2023', 'avatar.jpg', '0332-1234567', '134 ', '', 0),
(42, 'efef', 'ghaniyahchaudary@gmail.com', '1', 'Video Editor', 'Albania', '1234567', 'f695d310f987f0e94a02c0a729039260', '10 Jul 2023', 'avatar.jpg', '1234', 'drrr', '', 0),
(43, '2ezforrtz', '2ezforrtz@yopmail.com', '1', 'Channel Manager', 'Austria', '2ezforrtz', '49d3620f7b25a2ac0786b66002c7f37b', '13 Jul 2023', 'avatar.jpg', 'seriously?', '2ezforrtz', '', 0),
(44, 'joy roy', 'fiveerjoy99@gmail.com', '1', 'Video Editor', 'Bangladesh', '@01971779608@joy!', '6d1a7b1761ac004d2529c1af76a902ca', '12 Oct 2023', 'avatar.jpg', '01971779608', 'joy roy,mobile:01971779608', '', 0),
(45, 'joy roy', '1fiveerjoy@gmail.com', '0', 'Video Editor', 'Bangladesh', '1fiveerjoy@gmail.com', '767672c8f162550e351598236325f8ad', '12 Oct 2023', 'avatar.jpg', '01971779608', 'joy roy,mobile:01971779608', '', 0),
(46, 'Antonio De sena', 'fiveerjoy00@gmail.com', '0', 'Video Editor', 'Bangladesh', 'fiveerjoy00@gmail.com', 'fa5944f83d19e4aa137e35d84893c001', '13 Oct 2023', 'avatar.jpg', '07729900269', 'Gelosia', '', 0),
(47, 'Sree Biddut Shil', 'fiveerjoyss@gmail.com', '0', 'YouTube Producer', 'Bangladesh', 'fiveerjoyss@gmail.com', '5fbf4b79327737bc7dcbcf2874b40ca1', '13 Oct 2023', 'avatar.jpg', '01971779608', 'kalma,1530,louhajang,munshiganj,01971779608', '', 0),
(48, 'youtube', 'youtube@gmail.com', '1', 'Scriptwriter', 'Afghanistan', 'youtube@gmail.com', '258023fbbc4aaa85b2cd2b2fa942713a', '14 Oct 2023', '652a538d1eb96.jpg', '+8801971779608', 'Dhaka,Bangladesh', '', 0),
(49, 'joy roy', '33fiveerjoy@gmail.com', '0', 'Video Editor', 'Bangladesh', '33fiveerjoy@gmail.com', 'aa90eb0998295fe6c5777f6bd517c113', '20 Oct 2023', 'avatar.jpg', '01971779608', 'joy roy,mobile:01971779608', '', 0),
(50, 'dj bravo', 'dj@gmail.com', '1', 'Video Editor', 'Bangladesh', 'dj@gmail.com', '0c317ae8471f9daf7f19c5265144ba43', '23 Oct 2023', 'avatar.jpg', '01721779608', 'dhaka,bangladesh', '', 450000),
(51, 'test ', 'test1234@gmail.com', '1', 'Video Editor', 'Falkland Islands (Malvinas)', 'test1234@gmail.com', 'b15a7e64e6e9c3b460d8375a950abecf', '24 Oct 2023', 'avatar.jpg', '1234567890', 'Gelosia', '', 4000),
(52, 'demo123', 'demo123@gmail.com', '0', 'Scriptwriter', 'Afghanistan', 'test1234@gmail.com', '449f6042523908f8775ebc679824179c', '24 Oct 2023', 'avatar.jpg', '1234567890', 'demo ', '', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
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
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
