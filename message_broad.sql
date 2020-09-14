-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 09 月 14 日 12:06
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

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
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `broad`
--

INSERT INTO `broad` (`user_id`, `broad_id`, `create_time`) VALUES
(2, 4, '2020-09-14 09:05:19');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `broad_id` int(10) UNSIGNED NOT NULL,
  `message_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`message_id`, `broad_id`, `message_content`, `create_time`, `user_id`) VALUES
(1, 4, 'Hello World', '2020-09-14 09:05:19', 2),
(2, 4, 'This is message 2', '2020-09-14 09:19:09', 1),
(3, 4, 'This is message 2', '2020-09-14 09:20:00', 2),
(4, 4, 'This is message 3', '2020-09-14 09:20:00', 2),
(5, 4, 'This is message 4', '2020-09-14 09:20:00', 2),
(6, 4, 'This is message 5', '2020-09-14 09:20:00', 2),
(7, 4, 'This is message 6', '2020-09-14 09:20:00', 2);

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
(2, 'admin', '$2y$10$nEEvkzEbh.69zZmnD3gzGOIT1eK/7Ny1tc7lO3UmhyavMNUIWCtsW', '2020-09-14 06:49:22', 1);

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
(2, 'dcc33be2882f213e3b014e5368d5a1aa', '2020-09-14 09:39:00');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `broad`
--
ALTER TABLE `broad`
  ADD PRIMARY KEY (`broad_id`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

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
  MODIFY `broad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
