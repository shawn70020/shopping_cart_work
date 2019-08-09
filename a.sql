-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2019 年 08 月 09 日 15:14
-- 伺服器版本： 5.7.26
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `a`
--

-- --------------------------------------------------------

--
-- 資料表結構 `board`
--

CREATE TABLE `board` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `topic` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `board`
--

INSERT INTO `board` (`id`, `name`, `topic`, `text`, `date`) VALUES
(4, 'qqqqq', '各位', '大家今天好嗎', '2019-07-17 01:56:54'),
(6, 'rrrrr', '吃飯', '肚子超大', '2019-07-17 04:17:34'),
(7, 'anna123', '大家好', '很高興認識大家', '2019-07-17 07:30:24'),
(8, 'benson123', '颱風要來了', '最近可能有颱風，大家出門要小心\r\n', '2019-07-17 07:31:32'),
(9, 'charlie123', '嗨囉 Every One', '我是新來的請多指教', '2019-07-17 07:32:43'),
(10, 'david123', '徵女友', '性別：男\r\n身高：180\r\n個性：幽默風趣\r\n錢包：很厚', '2019-07-17 07:34:06'),
(11, 'elton123', ' &lt;img src=# onerror=&quot;alert(123)&quot;&gt; ', '&lt;script&gt;alert(大家好)&lt;/script&gt;', '2019-07-17 07:36:53'),
(12, 'elton123', 'fu123', 'd(`･∀･)bσ`∀´)σ', '2019-07-17 07:38:46'),
(13, 'anna123', '今天公告', '1234', '2019-07-17 09:36:55'),
(15, 'rrrrr', 'fd', 'fd', '2019-07-18 02:20:26'),
(17, 'rrrrr', '今天公告', '測試留言板呢', '2019-07-18 06:50:43'),
(18, 'rrrrr', 'xsx', 'yyy', '2019-07-18 07:17:02'),
(19, 'rrrrr', 'gtg', 'rgr', '2019-07-18 07:17:42'),
(20, 'rrrrr', 'fr', 'frf232', '2019-07-18 07:20:47'),
(25, 'rrrrr', '今天公告', 'dcd', '2019-07-19 04:23:48'),
(27, 'admin', 'dbfd', 'dbd', '2019-07-19 05:54:16'),
(28, 'admin', 'fr', 'y6y', '2019-07-19 05:59:34'),
(29, 'admin', 'fr', 'y6y', '2019-07-19 06:00:35'),
(30, 'admin', 'fr', 'y6y', '2019-07-19 06:00:48'),
(31, 'admin', 'fr', 'y6y', '2019-07-19 06:01:04');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `realname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `level` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginnum` int(11) UNSIGNED NOT NULL,
  `logintime` datetime DEFAULT CURRENT_TIMESTAMP,
  `jointime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `realname`, `username`, `passwd`, `birthday`, `level`, `email`, `loginnum`, `logintime`, `jointime`) VALUES
(1, '陳大名', 'shawn70020', '$2y$10$Gu7Vz10Nj6pVyhgtUl13N.zBnTa3Sp5yLd0wVlpXZ8wmVVMCQ3Jti', '1995-09-14', '1', 'ewffw@gmail.com', 1, '2019-07-16 18:00:01', '2019-07-16 17:59:49'),
(2, '李曉華', 'rrrrr', '$2y$10$tp6LhqTeSzAYvbOIDVDea..28sdl8wwo8mMMrHOY5YXnMkFw9JqrW', '1999-09-09', '1', 'efre@gmail.com', 66, '2019-08-09 13:47:14', '2019-07-16 18:02:51'),
(4, '系統管理員', 'admin', '$2y$10$LrQiALwDCObxUUr05AXUkOAAlqv6i9zyRQipRPsubYzVh56abhWEa', '1999-09-09', '0', 'sf@gmail.com', 18, '2019-07-19 15:49:41', '2019-07-17 09:33:54'),
(6, '陳安娜', 'anna123', '$2y$10$9IZ1GUZwCHiWejxTXBMRreDq.vR5UT8EMXtx1R2ujTQMl9NBh1zg6', '1995-01-01', '1', 'aa@gmail.com', 3, '2019-07-17 16:35:32', '2019-07-17 15:20:19'),
(7, '王班森', 'benson123', '$2y$10$iKohKY8XilB3ZBMNxaOO9O7aZLMCvY53/PfCn9Iu5cvVgDke3b/hm', '1996-01-01', '1', 'bb@gmail.com', 1, '2019-07-17 15:30:53', '2019-07-17 15:21:38'),
(8, '李察', 'charlie123', '$2y$10$jI/W2oCgtG4jhxH4SF848.oQ6irg/p/PiXgcPGQ/2Zrfk1MNNeaTy', '1997-01-01', '1', 'cc@gmail.com', 1, '2019-07-17 15:32:03', '2019-07-17 15:24:49'),
(9, '楊大衛', 'david123', '$2y$10$hSwGqWeIOiuzYoC.xaYWjOBDUWU3tVY8P3ZAIIkFQvmy4ZDc.EuLq', '1998-01-01', '1', 'dd@gmail.com', 1, '2019-07-17 15:33:02', '2019-07-17 15:25:27'),
(10, '艾爾頓', 'elton123', '$2y$10$sgwdx5yTbKCDN1buVX2plu6uXGPuxv0efAZzqOq94OgX6E9QhpHba', '2000-01-01', '1', 'ee@gmail.com', 1, '2019-07-17 15:35:00', '2019-07-17 15:26:15'),
(13, 'jjjjj', 'jjjjj', '$2y$10$bRLwG4O3eEw3vFvCm0qgsemWceAmHyJEC6mSKT.zPkjQEOWdh7D2m', '0000-00-00', '1', 'jj@fd.com', 0, '2019-07-18 10:00:18', '2019-07-18 10:00:18'),
(14, 'hrth', 'lllll', '$2y$10$t7pV0wdgA8S02gex9GQUA.Y9Y1z3iG9eh2.WBohrQl011W6vaA8R.', '0000-00-00', '1', 'jl@gma.com', 0, '2019-07-18 10:03:28', '2019-07-18 10:03:28'),
(15, 'xcx', 'ccccc', '$2y$10$0Sz.EKM4qjEwTDQ0h3mBROm.TCKeQxVMue6S8aL8ZEtFy2Bz5LxaO', '0000-00-00', '1', 'cxc@gmail.com', 5, '2019-08-07 17:42:23', '2019-07-18 10:06:48'),
(17, 'fghg', 'yyyyy', '$2y$10$tmHl0kuklDV72EaZ4To.tu9Bk42fkoe4k5MklNQS.R6440A9AXIty', '0000-00-00', '1', 'fh@gmail.com', 1, '2019-08-07 17:41:49', '2019-07-18 10:15:36'),
(19, '王大明', 'aaaaa', '$2y$10$uVYsKy4HBaK/YIFIbKACzOGh1bEewPag20xYwPBrnDTuq6PaGkxSe', '1995-03-18', '1', 'ss@gmail.com', 2, '2019-07-19 10:36:59', '2019-07-19 09:09:22'),
(21, 'ee', 'eeeee', '$2y$10$h5d7v58GXnhTLkyCojX09eRpMJSPwy0CgxPrRNU0J8vGTHbMpfeEO', '0000-00-00', '1', 'ee@gmail.com', 0, '2019-07-19 10:01:47', '2019-07-19 10:01:47'),
(22, 'ff', 'fffff', '$2y$10$CnrwF5y2/4MP0fDC4/dzTesyQHD8PD7LQr1aTS8AXrh0rZfV25BCy', '0000-00-00', '1', 'f@gmail.com', 0, '2019-07-19 10:08:29', '2019-07-19 10:08:29'),
(23, 'ww', 'wwwww', '$2y$10$8YsCGr.0Kjqcb64Wn77jseXNCWKQwd3bqMb5epKJhiW7G.yPxJfKu', '0000-00-00', '1', 'w@gmail.com', 0, '2019-07-19 10:13:54', '2019-07-19 10:13:54'),
(24, 'bb', 'bbbbb', '$2y$10$AZQuF4RTGPhbMSVN.wh.J.5swAZ.Ia8UMwBFDxhp3UTb7oLhy3DX.', '0000-00-00', '1', 'bb@gmail.com', 0, '2019-07-19 10:16:10', '2019-07-19 10:16:10'),
(27, 'ded', 'edede', '$2y$10$7OfFg2TEmH8ZIFdvff8x4OBpbnnlbPVJ8a1Xvy7Z1yDRiLRAknnvm', '0000-00-00', '1', 'de@gmail.com', 0, '2019-07-19 12:10:23', '2019-07-19 12:10:23'),
(28, 'xx', 'xxxxx', '$2y$10$ldvKin0R502.GwaXCUMuK.//9O5YqSrawXLBT4IupQxicf2h8N2xK', '0000-00-00', '1', 'xx@gmail.com', 0, '2019-07-19 12:14:40', '2019-07-19 12:14:40'),
(29, 'fhfh', 'qaqaq', '$2y$10$syNxsS/SGrO5FWt4rv.sjOPfkUeop4ZOfugY4Eie/9PeflW5UaUVi', '0000-00-00', '1', 'qaq@gmail.com', 0, '2019-07-19 12:18:13', '2019-07-19 12:18:13'),
(30, 'fv', 'fvfvf', '$2y$10$5ihWySeoyZFBB/nD/5wmfe6JqfsJaqsCyZWDNpbCznXKpH2NtgiV2', '0000-00-00', '1', 'fv@gmail.com', 0, '2019-07-19 12:19:25', '2019-07-19 12:19:25'),
(31, 'i', 'ilili', '$2y$10$fEJkAXOC4APTqKPsojRRR./sqebdcywg5c.9ApW6xzWXLiD5zuNra', '0000-00-00', '1', 'ef@gmail.com', 1, '2019-07-19 13:01:17', '2019-07-19 12:31:34'),
(32, 'zx', 'zxzxz', '$2y$10$CoG7m0XgaySaEGjrAO9zn.J4n6iDzgh9wXvgDYuDFCXV.78I5N39S', '0000-00-00', '1', 'zx@gmail.com', 0, '2019-07-19 13:38:39', '2019-07-19 13:38:39'),
(33, 'az', 'azaza', '$2y$10$vdvNsHhCqgoBuBF3QwsjQOzQYKSD/e.H3lZCLEPkl9o8DwFSMdZZ.', '0000-00-00', '1', 'az@gmail.com', 1, '2019-07-19 13:39:45', '2019-07-19 13:39:36');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) UNSIGNED NOT NULL,
  `num` int(255) UNSIGNED NOT NULL,
  `jointime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`id`, `name`, `content`, `price`, `num`, `jointime`) VALUES
(1, '海賊王', '一段冒險與航海的故事', 90, 1000, '2019-07-26 13:37:57'),
(2, '進擊的巨人', '一段生存與獵食的故事', 99, 1000, '2019-07-26 13:42:07'),
(3, '一拳超人', '一段到處亂走保衛世界的故事', 85, 1000, '2019-07-26 13:42:07'),
(4, '食戟之靈', '一段靠美食征服天下的故事', 120, 1000, '2019-07-26 13:42:07'),
(5, '七原罪', '一段背叛與守護的故事', 99, 1000, '2019-07-26 13:42:07'),
(6, '獵人', '一段找尋自我身世的故事', 100, 1000, '2019-07-26 13:42:07'),
(7, '鬼滅之刃', '一段成長與復仇的故事', 120, 1000, '2019-07-26 13:42:07'),
(8, '銀魂', '一段展現武士精神的故事', 99, 1000, '2019-07-26 13:42:07'),
(9, '黑執事', '一段主僕相依的故事', 110, 1000, '2019-07-26 13:42:07'),
(10, '名偵探柯南', '一段走到那死到那的故事', 90, 1000, '2019-07-26 13:43:56'),
(11, '排球', '一段展現青春熱血的故事', 85, 1000, '2019-07-26 13:45:22'),
(12, '火影忍者', '一段不停咻咻咻各種手勢的故事', 100, 1000, '2019-07-26 13:46:46');

-- --------------------------------------------------------

--
-- 資料表結構 `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `board`
--
ALTER TABLE `board`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
