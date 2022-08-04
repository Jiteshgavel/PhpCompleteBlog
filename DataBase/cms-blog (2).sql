-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 08:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Html/Css Web'),
(2, 'Trolley'),
(3, 'java'),
(4, 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(6, 1, 'Mahindra Trolley primarily helps in transportation of agriculture produce.', 'Jitesh', '', '2020-07-30', 'compressed-hgih.jpg', '<h4><strong>Name Of Part: Trolley</strong></h4><p><strong>Usage/Application:</strong> Mahindra</p><p><strong>Tractor Capacity:</strong> 3 Tons&nbsp;</p><p><strong>Overall Dimensions:</strong> 3000x1800x406 mm&nbsp;</p><p><strong>No of wheels:</strong> 2 Chassis Size: 125 x 65 mm</p>', 'Trolley', '', 'published', 0),
(7, 1, 'Mahindra Trolley primarily helps in transportation of agriculture produce.', 'Jitesh', '', '2020-07-29', 'compressed-zm6j.jpg', 'Name Of Part: Trolley\r\n\r\nUsage/Application: Mahindra Tractor\r\nCapacity: 3 Tons\r\nOverall Dimensions: 3000x1800x406 mm\r\nNo of wheels: 2\r\nChassis Size: 125 x 65 mm', 'Trolley', '', 'published', 0),
(8, 1, 'Mahindra Trolley primarily helps in transportation of agriculture produce.', 'Jitesh', '', '2020-07-30', 'compressed-1kje.jpg', '<p>Name Of Part: Trolley&nbsp;</p><p>Usage/Application: Mahindra Tractor&nbsp;</p><p>Capacity: 3 Tons&nbsp;</p><p>Overall Dimensions: 3000x1800x406 mm&nbsp;</p><p>No of wheels: 2&nbsp;</p><p>Chassis Size: 125 x 65 mm</p>', 'Trolley', '', 'published', 0),
(9, 2, 'Mahindra Trolley primarily helps in transportation of agriculture produce.', 'Jitesh', '', '2020-07-30', 'Chhattisgarh ki nadiya.png', '<p>Name Of Part: Trolley</p><p>Usage/Application: Mahindra</p><p>Tractor Capacity: 3 Tons&nbsp;</p><p>Overall Dimensions: 3000x1800x406 mm&nbsp;</p><p>No of wheels: 2 Chassis Size: 125 x 65 mm</p>', 'Trolley', '', 'published', 1),
(10, 1, 'à¤¹à¤® à¤‡à¤¸à¥‡ à¤•à¥à¤¯à¥‹à¤‚ à¤ªà¥à¤°à¤¯à¥‹à¤— à¤•à¤°à¤¤à¥‡ à¤¹à¥ˆà¤‚?', 'Jitesh', '', '2020-07-30', 'compressed-y8wk.jpg', '<p><strong>Lorem Ipsum</strong></p><ol><li>à¤›à¤ªà¤¾à¤ˆ à¤”à¤° à¤…à¤•à¥à¤·à¤° à¤¯à¥‹à¤œà¤¨ à¤‰à¤¦à¥à¤¯à¥‹à¤— à¤•à¤¾ à¤à¤• à¤¸à¤¾à¤§à¤¾à¤°à¤£ à¤¡à¤®à¥€ à¤ªà¤¾à¤  à¤¹à¥ˆ.</li><li>Lorem Ipsum à¤¸à¤¨ à¥§à¥«à¥¦à¥¦ à¤•à¥‡ à¤¬à¤¾à¤¦ à¤¸à¥‡ à¤…à¤­à¥€ à¤¤à¤• à¤‡à¤¸ à¤‰à¤¦à¥à¤¯à¥‹à¤— à¤•à¤¾</li><li>à¤®à¤¾à¤¨à¤• à¤¡à¤®à¥€ à¤ªà¤¾à¤  à¤®à¤¨ à¤—à¤¯à¤¾, à¤œà¤¬ à¤à¤• à¤…à¤œà¥à¤žà¤¾à¤¤ à¤®à¥à¤¦à¥à¤°à¤• à¤¨à¥‡ à¤¨à¤®à¥‚à¤¨à¤¾ à¤²à¥‡à¤•à¤°</li><li>à¤à¤• à¤¨à¤®à¥‚à¤¨à¤¾ à¤•à¤¿à¤¤à¤¾à¤¬ à¤¬à¤¨à¤¾à¤ˆ. à¤¯à¤¹ à¤¨ à¤•à¥‡à¤µà¤² à¤ªà¤¾à¤à¤š à¤¸à¤¦à¤¿à¤¯à¥‹à¤‚ à¤¸à¥‡ à¤œà¥€à¤µà¤¿à¤¤</li><li>à¤°à¤¹à¤¾ à¤¬à¤²à¥à¤•à¤¿ à¤‡à¤¸à¤¨à¥‡ à¤‡à¤²à¥‡à¤•à¥à¤Ÿà¥à¤°à¥‰à¤¨à¤¿à¤• à¤®à¥€à¤¡à¤¿à¤¯à¤¾ à¤®à¥‡à¤‚ à¤›à¤²à¤¾à¤‚à¤— à¤²à¤—à¤¾à¤¨à¥‡ à¤•à¥‡ à¤¬à¤¾à¤¦</li></ol><p>à¤­à¥€ à¤®à¥‚à¤²à¤¤à¤ƒ à¤…à¤ªà¤°à¤¿à¤µà¤°à¥à¤¤à¤¿à¤¤ à¤°à¤¹à¤¾. à¤¯à¤¹ 1960 à¤•à¥‡ à¤¦à¤¶à¤• à¤®à¥‡à¤‚ Letraset Lorem Ipsum à¤…à¤‚à¤¶ à¤¯à¥à¤•à¥à¤¤ à¤ªà¤¤à¥à¤° à¤•à¥‡ à¤°à¤¿à¤²à¥€à¤œ à¤•à¥‡ à¤¸à¤¾à¤¥ à¤²à¥‹à¤•à¤ªà¥à¤°à¤¿à¤¯ à¤¹à¥à¤†, à¤”à¤° à¤¹à¤¾à¤² à¤¹à¥€ à¤®à¥‡à¤‚ Aldus PageMaker Lorem Ipsum à¤•à¥‡ à¤¸à¤‚à¤¸à¥à¤•à¤°à¤£à¥‹à¤‚ à¤¸à¤¹à¤¿à¤¤ à¤¤à¤°à¤¹ à¤¡à¥‡à¤¸à¥à¤•à¤Ÿà¥‰à¤ª à¤ªà¥à¤°à¤•à¤¾à¤¶à¤¨ à¤¸à¥‰à¤«à¥à¤Ÿà¤µà¥‡à¤¯à¤° à¤•à¥‡ à¤¸à¤¾à¤¥ à¤…à¤§à¤¿à¤• à¤ªà¥à¤°à¤šà¤²à¤¿à¤¤ à¤¹à¥à¤†.</p>', 'Demo', '', 'published', 0),
(11, 1, 'à¤®à¥à¤à¥‡ à¤•à¥à¤› à¤­à¤¾à¤— à¤•à¤¹à¤¾ à¤®à¤¿à¤² à¤¸à¤•à¤¤à¤¾ à¤¹à¥ˆ', 'Jitesh', '', '2020-07-30', 'compressed-8325.jpg', '<p><strong>à¤®à¥à¤à¥‡ à¤•à¥à¤› à¤­à¤¾à¤— à¤•à¤¹à¤¾ à¤®à¤¿à¤² à¤¸à¤•à¤¤à¤¾ à¤¹à¥ˆ</strong></p><p>Lorem Ipsum à¤•à¥‡ à¤…à¤‚à¤¶ à¤•à¤ˆ à¤°à¥‚à¤ª à¤®à¥‡à¤‚ à¤‰à¤ªà¤²à¤¬à¥à¤§ à¤¹à¥ˆà¤‚, à¤²à¥‡à¤•à¤¿à¤¨ à¤¬à¤¹à¥à¤®à¤¤ à¤•à¥‹</p><ul><li>à¤•à¤¿à¤¸à¥€ à¤…à¤¨à¥à¤¯ à¤°à¥‚à¤ª à¤®à¥‡à¤‚ à¤ªà¤°à¤¿à¤µà¤°à¥à¤¤à¤¨ à¤•à¤¾ à¤¸à¤¾à¤®à¤¨à¤¾ à¤•à¤°à¤¨à¤¾ à¤ªà¤¡à¤¼à¤¾ à¤¹à¥ˆ, à¤¹à¤¾à¤¸à¥à¤¯ à¤¡à¤¾à¤²à¤¨à¤¾ à¤¯à¤¾ à¤•à¥à¤°à¤®à¤°à¤¹à¤¿à¤¤ à¤¶à¤¬à¥à¤¦ ,</li><li>à¤œà¥‹ à¤¤à¤¨à¤¿à¤• à¤­à¥€ à¤µà¤¿à¤¶à¥à¤µà¤¸à¤¨à¥€à¤¯ à¤¨à¤¹à¥€à¤‚ à¤²à¤— à¤°à¤¹à¥‡ à¤¹à¥‹. à¤¯à¤¦à¤¿ à¤†à¤ª Lorem Ipsum à¤•à¥‡ à¤à¤• à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ à¤•à¤¾</li><li>à¤‰à¤ªà¤¯à¥‹à¤— à¤•à¤°à¤¨à¥‡ à¤œà¤¾ à¤°à¤¹à¥‡ à¤¹à¥ˆà¤‚, à¤¤à¥‹ à¤†à¤ª à¤•à¥‹ à¤¯à¤•à¥€à¤¨ à¤¦à¤¿à¤²à¤¾ à¤¦à¥‡à¤‚ à¤•à¤¿ à¤ªà¤¾à¤  à¤•à¥‡ à¤®à¤§à¥à¤¯ à¤®à¥‡à¤‚ à¤µà¤¹à¤¾à¤ à¤•à¥à¤› à¤­à¥€</li><li>à¤¶à¤°à¥à¤®à¤¨à¤¾à¤• à¤›à¤¿à¤ªà¤¾ à¤¹à¥à¤† à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆ. à¤‡à¤‚à¤Ÿà¤°à¤¨à¥‡à¤Ÿ à¤ªà¤° à¤¸à¤­à¥€ Lorem Ipsum à¤œà¤¨à¤°à¥‡à¤Ÿà¤° à¤ªà¥‚à¤°à¥à¤µà¤¨à¤¿à¤°à¥à¤§à¤¾à¤°à¤¿à¤¤</li></ul><p>&nbsp;à¤®à¤¾à¤¤à¥à¤°à¤¾ à¤®à¥‡à¤‚ à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ à¤•à¥‹ à¤¦à¥‹à¤¹à¤°à¤¾à¤¨à¥‡ à¤•à¤¿ à¤µà¤œà¤¹ à¤¸à¥‡ à¤‡à¤‚à¤Ÿà¤°à¤¨à¥‡à¤Ÿ à¤ªà¤° à¤¸à¤¬à¤¸à¥‡ à¤µà¤¿à¤¶à¥à¤µà¤¸à¤¨à¥€à¤¯ à¤œà¤¨à¤°à¥‡à¤Ÿà¤° à¤¹à¥‹à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤œà¤¾à¤¨à¥‡ à¤œà¤¾à¤¤à¥‡ à¤¹à¥ˆà¤‚. à¤¯à¤¹ à¤à¤• 200 à¤¸à¥‡ à¤­à¥€ à¤…à¤§à¤¿à¤• à¤²à¥ˆà¤Ÿà¤¿à¤¨ à¤¶à¤¬à¥à¤¦à¥‹à¤‚ à¤•à¥‡ à¤¶à¤¬à¥à¤¦à¤•à¥‹à¤¶ à¤•à¤¾</p>', 'JJJ', '', 'published', 0),
(12, 1, 'à¤®à¥à¤à¥‡ à¤•à¥à¤› à¤­à¤¾à¤— à¤•à¤¹à¤¾ à¤®à¤¿à¤² à¤¸à¤•à¤¤à¤¾ à¤¹à¥ˆ', 'Jitesh', '', '2020-08-10', 'compressed-jb2x.jpg', '<p><strong>à¤®à¥à¤à¥‡ à¤•à¥à¤› à¤­à¤¾à¤— à¤•à¤¹à¤¾ à¤®à¤¿à¤² à¤¸à¤•à¤¤à¤¾ à¤¹à¥ˆ</strong></p><p>Lorem Ipsum à¤•à¥‡ à¤…à¤‚à¤¶ à¤•à¤ˆ à¤°à¥‚à¤ª à¤®à¥‡à¤‚ à¤‰à¤ªà¤²à¤¬à¥à¤§ à¤¹à¥ˆà¤‚, à¤²à¥‡à¤•à¤¿à¤¨ à¤¬à¤¹à¥à¤®à¤¤ à¤•à¥‹</p><ul><li>à¤•à¤¿à¤¸à¥€ à¤…à¤¨à¥à¤¯ à¤°à¥‚à¤ª à¤®à¥‡à¤‚ à¤ªà¤°à¤¿à¤µà¤°à¥à¤¤à¤¨ à¤•à¤¾ à¤¸à¤¾à¤®à¤¨à¤¾ à¤•à¤°à¤¨à¤¾ à¤ªà¤¡à¤¼à¤¾ à¤¹à¥ˆ, à¤¹à¤¾à¤¸à¥à¤¯ à¤¡à¤¾à¤²à¤¨à¤¾ à¤¯à¤¾ à¤•à¥à¤°à¤®à¤°à¤¹à¤¿à¤¤ à¤¶à¤¬à¥à¤¦ ,</li><li>à¤œà¥‹ à¤¤à¤¨à¤¿à¤• à¤­à¥€ à¤µà¤¿à¤¶à¥à¤µà¤¸à¤¨à¥€à¤¯ à¤¨à¤¹à¥€à¤‚ à¤²à¤— à¤°à¤¹à¥‡ à¤¹à¥‹. à¤¯à¤¦à¤¿ à¤†à¤ª Lorem Ipsum à¤•à¥‡ à¤à¤• à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ à¤•à¤¾</li><li>à¤‰à¤ªà¤¯à¥‹à¤— à¤•à¤°à¤¨à¥‡ à¤œà¤¾ à¤°à¤¹à¥‡ à¤¹à¥ˆà¤‚, à¤¤à¥‹ à¤†à¤ª à¤•à¥‹ à¤¯à¤•à¥€à¤¨ à¤¦à¤¿à¤²à¤¾ à¤¦à¥‡à¤‚ à¤•à¤¿ à¤ªà¤¾à¤  à¤•à¥‡ à¤®à¤§à¥à¤¯ à¤®à¥‡à¤‚ à¤µà¤¹à¤¾à¤ à¤•à¥à¤› à¤­à¥€</li><li>à¤¶à¤°à¥à¤®à¤¨à¤¾à¤• à¤›à¤¿à¤ªà¤¾ à¤¹à¥à¤† à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆ. à¤‡à¤‚à¤Ÿà¤°à¤¨à¥‡à¤Ÿ à¤ªà¤° à¤¸à¤­à¥€ Lorem Ipsum à¤œà¤¨à¤°à¥‡à¤Ÿà¤° à¤ªà¥‚à¤°à¥à¤µà¤¨à¤¿à¤°à¥à¤§à¤¾à¤°à¤¿à¤¤</li></ul><p>&nbsp;à¤®à¤¾à¤¤à¥à¤°à¤¾ à¤®à¥‡à¤‚ à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ à¤•à¥‹ à¤¦à¥‹à¤¹à¤°à¤¾à¤¨à¥‡ à¤•à¤¿ à¤µà¤œà¤¹ à¤¸à¥‡ à¤‡à¤‚à¤Ÿà¤°à¤¨à¥‡à¤Ÿ à¤ªà¤° à¤¸à¤¬à¤¸à¥‡ à¤µà¤¿à¤¶à¥à¤µà¤¸à¤¨à¥€à¤¯ à¤œà¤¨à¤°à¥‡à¤Ÿà¤° à¤¹à¥‹à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤œà¤¾à¤¨à¥‡ à¤œà¤¾à¤¤à¥‡ à¤¹à¥ˆà¤‚. à¤¯à¤¹ à¤à¤• 200 à¤¸à¥‡ à¤­à¥€ à¤…à¤§à¤¿à¤• à¤²à¥ˆà¤Ÿà¤¿à¤¨ à¤¶à¤¬à¥à¤¦à¥‹à¤‚ à¤•à¥‡ à¤¶à¤¬à¥à¤¦à¤•à¥‹à¤¶ à¤•à¤¾</p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img src=\"http://information4u.epizy.com/images/1026276_b23a_5.jpg\" alt=\"postiamge\"></figure>', 'JJJ', '', 'published', 2),
(13, 1, 'à¤¹à¤® à¤‡à¤¸à¥‡ à¤•à¥à¤¯à¥‹à¤‚ à¤ªà¥à¤°à¤¯à¥‹à¤— à¤•à¤°à¤¤à¥‡ à¤¹à¥ˆà¤‚?', 'Jitesh', '', '2020-08-01', 'compressed-rz9s.jpg', '<p><strong>Lorem Ipsum</strong></p><ol><li>à¤›à¤ªà¤¾à¤ˆ à¤”à¤° à¤…à¤•à¥à¤·à¤° à¤¯à¥‹à¤œà¤¨ à¤‰à¤¦à¥à¤¯à¥‹à¤— à¤•à¤¾ à¤à¤• à¤¸à¤¾à¤§à¤¾à¤°à¤£ à¤¡à¤®à¥€ à¤ªà¤¾à¤  à¤¹à¥ˆ.</li><li>Lorem Ipsum à¤¸à¤¨ à¥§à¥«à¥¦à¥¦ à¤•à¥‡ à¤¬à¤¾à¤¦ à¤¸à¥‡ à¤…à¤­à¥€ à¤¤à¤• à¤‡à¤¸ à¤‰à¤¦à¥à¤¯à¥‹à¤— à¤•à¤¾</li><li>à¤®à¤¾à¤¨à¤• à¤¡à¤®à¥€ à¤ªà¤¾à¤  à¤®à¤¨ à¤—à¤¯à¤¾, à¤œà¤¬ à¤à¤• à¤…à¤œà¥à¤žà¤¾à¤¤ à¤®à¥à¤¦à¥à¤°à¤• à¤¨à¥‡ à¤¨à¤®à¥‚à¤¨à¤¾ à¤²à¥‡à¤•à¤°</li><li>à¤à¤• à¤¨à¤®à¥‚à¤¨à¤¾ à¤•à¤¿à¤¤à¤¾à¤¬ à¤¬à¤¨à¤¾à¤ˆ. à¤¯à¤¹ à¤¨ à¤•à¥‡à¤µà¤² à¤ªà¤¾à¤à¤š à¤¸à¤¦à¤¿à¤¯à¥‹à¤‚ à¤¸à¥‡ à¤œà¥€à¤µà¤¿à¤¤</li><li>à¤°à¤¹à¤¾ à¤¬à¤²à¥à¤•à¤¿ à¤‡à¤¸à¤¨à¥‡ à¤‡à¤²à¥‡à¤•à¥à¤Ÿà¥à¤°à¥‰à¤¨à¤¿à¤• à¤®à¥€à¤¡à¤¿à¤¯à¤¾ à¤®à¥‡à¤‚ à¤›à¤²à¤¾à¤‚à¤— à¤²à¤—à¤¾à¤¨à¥‡ à¤•à¥‡ à¤¬à¤¾à¤¦</li></ol><p>à¤­à¥€ à¤®à¥‚à¤²à¤¤à¤ƒ à¤…à¤ªà¤°à¤¿à¤µà¤°à¥à¤¤à¤¿à¤¤ à¤°à¤¹à¤¾. à¤¯à¤¹ 1960 à¤•à¥‡ à¤¦à¤¶à¤• à¤®à¥‡à¤‚ Letraset Lorem Ipsum à¤…à¤‚à¤¶ à¤¯à¥à¤•à¥à¤¤ à¤ªà¤¤à¥à¤° à¤•à¥‡ à¤°à¤¿à¤²à¥€à¤œ à¤•à¥‡ à¤¸à¤¾à¤¥ à¤²à¥‹à¤•à¤ªà¥à¤°à¤¿à¤¯ à¤¹à¥à¤†, à¤”à¤° à¤¹à¤¾à¤² à¤¹à¥€ à¤®à¥‡à¤‚ Aldus PageMaker Lorem Ipsum à¤•à¥‡ à¤¸à¤‚à¤¸à¥à¤•à¤°à¤£à¥‹à¤‚ à¤¸à¤¹à¤¿à¤¤ à¤¤à¤°à¤¹ à¤¡à¥‡à¤¸à¥à¤•à¤Ÿà¥‰à¤ª à¤ªà¥à¤°à¤•à¤¾à¤¶à¤¨ à¤¸à¥‰à¤«à¥à¤Ÿà¤µà¥‡à¤¯à¤° à¤•à¥‡ à¤¸à¤¾à¤¥ à¤…à¤§à¤¿à¤• à¤ªà¥à¤°à¤šà¤²à¤¿à¤¤ à¤¹à¥à¤†.</p>', 'Demo', '', 'published', 5),
(20, 1, 'Android', 'Admin', '', '2020-08-10', '1_8YPjY2xhNwQylBBs8dYB0g.png', '<p>ss</p>', 'jsp,java,developement,program', '', 'published', 2),
(22, 1, 'History of C Language', 'Admin', '', '2020-08-10', '792484_cc98_3.jpg', '<p>dkjsfhdskj</p>', 'JJJ', '', 'draft', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randsalt`) VALUES
(10, 'JITESH GAVEL', '$2y$12$X.AH40YpMi87yr191SqLtOL4HF/Jk0HcY.CcHjtGzTYzMDtJ9PDl2', 'JITESH', 'GAVEL', 'jiteshgavel000@gmail.com', '', 'admin', ''),
(14, 'PANKAJYADAV', '$2y$12$OhqUlVxyNA4Aws4.WLfACe.j19YctvWgNBbCi7vVIEerkBitXZTiK', '', '', 'pankaj@gmail.com', '', 'suscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
