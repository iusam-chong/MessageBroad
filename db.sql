-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2020 年 09 月 16 日 09:57
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
(6, 3, 'this is post 2 ', 1, '2020-09-15 03:43:29'),
(7, 2, 'this is post 3', 1, '2020-09-16 02:36:45');

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
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message_enabled` tinyint(1) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`message_id`, `broad_id`, `message_content`, `create_time`, `user_id`, `message_enabled`) VALUES
(1, 4, 'Hello World', '2020-09-14 09:05:19', 2, 1),
(4, 4, 'This is message 3', '2020-09-14 09:20:00', 2, 0),
(9, 6, 'Hello there, I\'m glad to been here', '2020-09-15 03:43:29', 3, 1),
(10, 6, 'Hi, Nice to meet you', '2020-09-15 07:48:07', 2, 1),
(18, 4, 'Hello World', '2020-09-15 09:00:07', 4, 1),
(19, 4, 'This Comment will be delete', '2020-09-15 09:09:06', 2, 0),
(20, 6, 'This Comment will be delete', '2020-09-15 09:09:17', 2, 0),
(21, 4, 'I want to delete this message', '2020-09-15 09:32:57', 3, 1),
(22, 4, 'i want delete this comment', '2020-09-15 09:33:22', 3, 1),
(23, 6, 'edit comment sucess', '2020-09-15 09:09:17', 2, 0),
(24, 4, 'new comment', '2020-09-16 02:33:31', 2, 0),
(25, 7, 'kkkkkk', '2020-09-16 02:36:45', 2, 1),
(26, 4, 'im alrdy edit this comment', '2020-09-16 03:23:03', 2, 1);

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
(2, 'db2bho539h180cpgob030bvhih', '2020-09-16 09:52:42');

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
  MODIFY `broad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `follower`
--
ALTER TABLE `follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
