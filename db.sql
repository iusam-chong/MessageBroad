-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2020 年 09 月 17 日 10:10
-- 伺服器版本： 5.7.26
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `message_broad`
--

-- --------------------------------------------------------

--
-- 資料表結構 `broad`
--

CREATE TABLE `broad` (
  `broad_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `broad_enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `broad`
--

INSERT INTO `broad` (`broad_id`, `user_id`, `message`, `broad_enabled`, `create_time`) VALUES
(4, 2, ' I don\'t want any comments on/about my new haircut, thank you!', 1, '2020-09-14 09:05:19'),
(6, 3, 'modify post id = 88', 1, '2020-09-15 03:43:29'),
(7, 2, 'this is post 3', 1, '2020-09-16 02:36:45'),
(8, 4, 'Guns. Lots of Guns. More Guns.', 1, '2020-09-17 01:51:34'),
(9, 3, 'test post delete ', 0, '2020-09-17 02:54:10'),
(10, 4, '1111', 0, '2020-09-17 09:06:51'),
(11, 3, 'fsdfsdfsdf', 0, '2020-09-17 09:12:14'),
(12, 3, 'sdfsdfsdf', 0, '2020-09-17 09:12:17'),
(13, 3, 'dsfsdfsdf', 0, '2020-09-17 09:12:20'),
(14, 3, 'sdfsdfsdf', 0, '2020-09-17 09:12:28'),
(15, 3, 'wrwerwedv', 0, '2020-09-17 09:12:31'),
(16, 4, 'wwwwww\r\n', 0, '2020-09-17 09:13:52'),
(17, 4, 'wwwwww', 0, '2020-09-17 09:13:56'),
(18, 4, 'wwwwwww\r\n', 0, '2020-09-17 09:14:19'),
(19, 4, 'wwwwww', 0, '2020-09-17 09:14:23'),
(20, 3, 'new line<br />\r\nnew line', 1, '2020-09-17 09:48:08');

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
  `user_id` int(10) UNSIGNED NOT NULL,
  `message_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_enabled` tinyint(1) UNSIGNED DEFAULT '1',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`message_id`, `broad_id`, `user_id`, `message_content`, `message_enabled`, `create_time`) VALUES
(1, 4, 2, 'Hello World !!!', 1, '2020-09-14 09:05:19'),
(4, 4, 2, 'This is message 3', 0, '2020-09-14 09:20:00'),
(9, 6, 3, 'Hello there, I\'m glad to been here', 1, '2020-09-15 03:43:29'),
(10, 6, 2, 'Hi, Nice to meet you', 1, '2020-09-15 07:48:07'),
(18, 4, 4, 'Hello World', 1, '2020-09-15 09:00:07'),
(19, 4, 2, 'This Comment will be delete', 0, '2020-09-15 09:09:06'),
(20, 6, 2, 'This Comment will be delete', 0, '2020-09-15 09:09:17'),
(21, 4, 3, 'I want to delete this message', 0, '2020-09-15 09:32:57'),
(22, 4, 3, 'i want delete this comment', 0, '2020-09-15 09:33:22'),
(23, 6, 2, 'edit comment sucess', 0, '2020-09-15 09:09:17'),
(24, 4, 2, 'new comment', 0, '2020-09-16 02:33:31'),
(25, 7, 2, 'kkkkkk', 1, '2020-09-16 02:36:45'),
(26, 4, 2, 'im alrdy edit this comment !!!', 1, '2020-09-16 03:23:03'),
(27, 4, 2, 'test new views function ', 0, '2020-09-17 04:19:18'),
(28, 8, 3, 'is john wick!', 1, '2020-09-17 06:11:27'),
(29, 8, 3, 'enter\r\nand enter', 0, '2020-09-17 06:11:48'),
(30, 7, 3, 'kkkkkkkkk', 0, '2020-09-17 09:04:22'),
(31, 7, 3, 'weehaaaa', 1, '2020-09-17 09:05:18'),
(32, 7, 3, '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\ndfsdfsdf\r\nsdfsdfsdf', 1, '2020-09-17 09:05:30'),
(33, 4, 3, 'heelo wordl', 1, '2020-09-17 09:06:05'),
(34, 7, 3, 'dasdasdasdas', 1, '2020-09-17 09:33:00'),
(35, 20, 3, 'comment new line<br />\r\nnew line', 1, '2020-09-17 09:55:50'),
(36, 20, 3, 'asdasdadas<br />\r\nASDASDASD', 1, '2020-09-17 10:00:48'),
(37, 20, 3, 'sdfsdfsdf \\n dfgdfg', 1, '2020-09-17 10:02:12'),
(38, 20, 3, '123123<br />\r\n123123123', 1, '2020-09-17 10:05:45'),
(39, 20, 3, 'dasdasdas\r\nAsdasdsadasd', 1, '2020-09-17 10:08:16'),
(40, 20, 3, 'sdasdasdasd\r\n123123123\r\nasdasdasdasd', 1, '2020-09-17 10:08:41');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_passwd`, `user_reg_time`, `user_enabled`) VALUES
(1, 'vicky', '$2y$10$5lWCRFrhUl39yo6BBLdf4eKJx/6Uqta83FHrVyuFvvNLFF5KVVV/2', '2020-09-14 06:32:41', 1),
(2, 'admin', '$2y$10$nEEvkzEbh.69zZmnD3gzGOIT1eK/7Ny1tc7lO3UmhyavMNUIWCtsW', '2020-09-14 06:49:22', 1),
(3, 'sam_chong', '$2y$10$vGRQOxnCCKGlOo05tJVzYuMqnJe12HdmbJuIvr3Z4bPGlhKe2Jjcm', '2020-09-15 03:42:16', 1),
(4, 'john_wick', '$2y$10$Cx7SsuDOC7VK0M.B1MnQaOmvLUanTcfaK74YMAUd0X6Z7XLLDOxZm', '2020-09-15 08:59:29', 1),
(5, 'Harry Wardana', '$2y$10$LrNHRJl/ymHvqy0yhSV3huQcRlrZ2PFONYDKC3b9bbbmuGJBuki/m', '2020-09-16 08:02:47', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user_sessions`
--

CREATE TABLE `user_sessions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user_sessions`
--

INSERT INTO `user_sessions` (`user_id`, `session_id`, `login_time`) VALUES
(3, '001a3dtin3ospei10h4agkbe1v', '2020-09-17 10:09:08');

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
  MODIFY `broad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `follower`
--
ALTER TABLE `follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
