-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-09-15 17:02:25
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `message_broad`
--

-- --------------------------------------------------------

--
-- 資料表結構 `broad`
--

CREATE TABLE `broad` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `broad_id` int(10) UNSIGNED NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `broad_enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `broad`
--

INSERT INTO `broad` (`user_id`, `broad_id`, `create_time`, `broad_enabled`) VALUES
(2, 4, '2020-09-14 09:05:19', 1),
(3, 6, '2020-09-15 03:43:29', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `follower`
--

CREATE TABLE `follower` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `follower`
--

INSERT INTO `follower` (`id`, `user_id`, `follower_id`) VALUES
(1, 2, 3),
(2, 2, 4),
(3, 3, 2),
(4, 3, 1),
(5, 4, 1),
(6, 4, 2),
(7, 4, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `broad_id` int(10) UNSIGNED NOT NULL,
  `message_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(10) UNSIGNED NOT NULL,
  `message_enabled` tinyint(1) UNSIGNED DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`message_id`, `broad_id`, `message_content`, `create_time`, `user_id`, `message_enabled`) VALUES
(1, 4, 'Hello World', '2020-09-14 09:05:19', 2, 1),
(4, 4, 'This is message 3', '2020-09-14 09:20:00', 2, 1),
(9, 6, 'Hello there, I\'m glad to been here', '2020-09-15 03:43:29', 3, 1),
(10, 6, 'Hi, Nice to meet you', '2020-09-15 07:48:07', 2, 1),
(18, 4, 'Hello World', '2020-09-15 09:00:07', 4, 1),
(19, 4, 'This Comment will be delete', '2020-09-15 09:09:06', 2, 0),
(20, 6, 'This Comment will be delete', '2020-09-15 09:09:17', 2, 0),
(21, 4, 'I want to delete this message', '2020-09-15 09:32:57', 3, 0),
(22, 4, 'i want delete this comment', '2020-09-15 09:33:22', 3, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_reg_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_passwd`, `user_reg_time`, `user_enabled`) VALUES
(1, 'dfgdfgfd', '$2y$10$5lWCRFrhUl39yo6BBLdf4eKJx/6Uqta83FHrVyuFvvNLFF5KVVV/2', '2020-09-14 06:32:41', 1),
(2, 'admin', '$2y$10$nEEvkzEbh.69zZmnD3gzGOIT1eK/7Ny1tc7lO3UmhyavMNUIWCtsW', '2020-09-14 06:49:22', 1),
(3, 'sam_chong', '$2y$10$vGRQOxnCCKGlOo05tJVzYuMqnJe12HdmbJuIvr3Z4bPGlhKe2Jjcm', '2020-09-15 03:42:16', 1),
(4, 'john_wick', '$2y$10$Cx7SsuDOC7VK0M.B1MnQaOmvLUanTcfaK74YMAUd0X6Z7XLLDOxZm', '2020-09-15 08:59:29', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user_sessions`
--

CREATE TABLE `user_sessions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user_sessions`
--

INSERT INTO `user_sessions` (`user_id`, `session_id`, `login_time`) VALUES
(2, '6e454v0vo3hf0spfae5uslpbjq', '2020-09-15 14:57:45'),
(2, 'a80nf43dvj47su2qqo2dk7qrcg', '2020-09-15 09:33:25'),
(3, 'm895kovhtuaj98dl00eid7kg36', '2020-09-15 09:33:22');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `broad`
--
ALTER TABLE `broad`
  ADD PRIMARY KEY (`broad_id`);

--
-- 資料表索引 `follower`
--
ALTER TABLE `follower`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follower_user_fk` (`user_id`),
  ADD KEY `follower_follower_fk` (`follower_id`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_fk` (`broad_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- 資料表索引 `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `user_session_fk` (`user_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `broad`
--
ALTER TABLE `broad`
  MODIFY `broad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `follower`
--
ALTER TABLE `follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `follower`
--
ALTER TABLE `follower`
  ADD CONSTRAINT `follower_follower_fk` FOREIGN KEY (`follower_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follower_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_fk` FOREIGN KEY (`broad_id`) REFERENCES `broad` (`broad_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
