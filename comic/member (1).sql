-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `a`
--

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
  `logintime` datetime DEFAULT current_timestamp(),
  `jointime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `realname`, `username`, `passwd`, `birthday`, `level`, `email`, `loginnum`, `logintime`, `jointime`) VALUES
(1, '陳大名', 'shawn70020', '$2y$10$Gu7Vz10Nj6pVyhgtUl13N.zBnTa3Sp5yLd0wVlpXZ8wmVVMCQ3Jti', '1995-09-14', '1', 'ewffw@gmail.com', 1, '2019-07-16 18:00:01', '2019-07-16 17:59:49'),
(2, '李曉華', 'rrrrr', '$2y$10$tp6LhqTeSzAYvbOIDVDea..28sdl8wwo8mMMrHOY5YXnMkFw9JqrW', '1999-09-09', '1', 'efre@gmail.com', 45, '2019-07-26 10:43:09', '2019-07-16 18:02:51'),
(4, '系統管理員', 'admin', '$2y$10$LrQiALwDCObxUUr05AXUkOAAlqv6i9zyRQipRPsubYzVh56abhWEa', '1999-09-09', '0', 'sf@gmail.com', 18, '2019-07-19 15:49:41', '2019-07-17 09:33:54'),
(6, '陳安娜', 'anna123', '$2y$10$9IZ1GUZwCHiWejxTXBMRreDq.vR5UT8EMXtx1R2ujTQMl9NBh1zg6', '1995-01-01', '1', 'aa@gmail.com', 3, '2019-07-17 16:35:32', '2019-07-17 15:20:19'),
(7, '王班森', 'benson123', '$2y$10$iKohKY8XilB3ZBMNxaOO9O7aZLMCvY53/PfCn9Iu5cvVgDke3b/hm', '1996-01-01', '1', 'bb@gmail.com', 1, '2019-07-17 15:30:53', '2019-07-17 15:21:38'),
(8, '李察', 'charlie123', '$2y$10$jI/W2oCgtG4jhxH4SF848.oQ6irg/p/PiXgcPGQ/2Zrfk1MNNeaTy', '1997-01-01', '1', 'cc@gmail.com', 1, '2019-07-17 15:32:03', '2019-07-17 15:24:49'),
(9, '楊大衛', 'david123', '$2y$10$hSwGqWeIOiuzYoC.xaYWjOBDUWU3tVY8P3ZAIIkFQvmy4ZDc.EuLq', '1998-01-01', '1', 'dd@gmail.com', 1, '2019-07-17 15:33:02', '2019-07-17 15:25:27'),
(10, '艾爾頓', 'elton123', '$2y$10$sgwdx5yTbKCDN1buVX2plu6uXGPuxv0efAZzqOq94OgX6E9QhpHba', '2000-01-01', '1', 'ee@gmail.com', 1, '2019-07-17 15:35:00', '2019-07-17 15:26:15'),
(13, 'jjjjj', 'jjjjj', '$2y$10$bRLwG4O3eEw3vFvCm0qgsemWceAmHyJEC6mSKT.zPkjQEOWdh7D2m', '0000-00-00', '1', 'jj@fd.com', 0, '2019-07-18 10:00:18', '2019-07-18 10:00:18'),
(14, 'hrth', 'lllll', '$2y$10$t7pV0wdgA8S02gex9GQUA.Y9Y1z3iG9eh2.WBohrQl011W6vaA8R.', '0000-00-00', '1', 'jl@gma.com', 0, '2019-07-18 10:03:28', '2019-07-18 10:03:28'),
(15, 'xcx', 'ccccc', '$2y$10$0Sz.EKM4qjEwTDQ0h3mBROm.TCKeQxVMue6S8aL8ZEtFy2Bz5LxaO', '0000-00-00', '1', 'cxc@gmail.com', 0, '2019-07-18 10:06:48', '2019-07-18 10:06:48'),
(17, 'fghg', 'yyyyy', '$2y$10$tmHl0kuklDV72EaZ4To.tu9Bk42fkoe4k5MklNQS.R6440A9AXIty', '0000-00-00', '1', 'fh@gmail.com', 0, '2019-07-18 10:15:36', '2019-07-18 10:15:36'),
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
(33, 'az', 'azaza', '$2y$10$vdvNsHhCqgoBuBF3QwsjQOzQYKSD/e.H3lZCLEPkl9o8DwFSMdZZ.', '0000-00-00', '1', 'az@gmail.com', 1, '2019-07-19 13:39:45', '2019-07-19 13:39:36'),
(34, 'cc', 'cccccdcd', '$2y$10$YRNmmdiAHhdFvZZ8IeyqA.qU.ImIDjpLOlYDK6aRWXYQDmLXjjsH6', '0000-00-00', '1', 'cc@gmail.com', 0, '2019-07-24 09:40:41', '2019-07-24 09:40:41'),
(35, 'ss', 'aassd', '$2y$10$6OSHudiy3wsplaHr0IlbyuUyg2/F0k6bks4MRIwNFwWtcawPho/qe', '0000-00-00', '1', 'ss@gmail.com', 0, '2019-07-24 10:00:29', '2019-07-24 10:00:29'),
(36, 'xsx', 'sxsxx', '$2y$10$kU.Odggh25p.CFnCzkkyJ.2gbJ4JR77suc8HAAw2mrTiiAWaseLJ6', '0000-00-00', '1', 'xsx@gmail.com', 0, '2019-07-24 13:44:12', '2019-07-24 13:44:12'),
(37, 'df', 'dfdffff', '$2y$10$NjpgjYJ3AyTB.SnqI7.6jei4dhXum9DSjITCdWf.CArv0lPda7YsO', '0000-00-00', '1', 'df@gmail.com', 0, '2019-07-24 13:46:45', '2019-07-24 13:46:45'),
(38, 'fff', 'fffffsddd', '$2y$10$Lcoqo/9ml09v9F1PbuajWOIPwgqQdrrBI9yYFU1zuC1VaG/sRtg9K', '0000-00-00', '1', 'ff@gmail.com', 0, '2019-07-24 13:49:18', '2019-07-24 13:49:18'),
(39, 'ddd', 'dfdfdfd', '$2y$10$1giU2vgabYWpCC7uEnylG.bsLeJM6ze34JApWFwJelRgHZfgHW3Ju', '0000-00-00', '1', 'dd@gmail.com', 0, '2019-07-24 13:50:31', '2019-07-24 13:50:31'),
(40, 'ff', 'ddddffd', '$2y$10$riwTiQAGPN/F6uZD4cC3u.yG0UISOfFA4O5Pq6wvYOXKv4RYgeiWe', '0000-00-00', '1', 'ff@gmail.com', 0, '2019-07-24 13:51:44', '2019-07-24 13:51:44'),
(41, 'fff', 'fvvvv', '$2y$10$3mvb591B1cawGOJOrEA0CeVIK7ai2uJdoG29rxkmTeQsG.braIFI2', '0000-00-00', '1', 'ff@gmail.com', 0, '2019-07-24 13:54:23', '2019-07-24 13:54:23'),
(42, 'ff', 'dfdfdf', '$2y$10$zkOBdVZKEbK9m84iwrI.heeX506Ip.IereAqlinFXKqbsXJyHJOCe', '0000-00-00', '1', 'f@gmail.com', 0, '2019-07-24 13:55:11', '2019-07-24 13:55:11'),
(43, 'dd', 'dcdcd', '$2y$10$b4gkFCV4QWxCGBQz1IiAr.sns4HB27BNPB6FW4NwKEdHg2lmA1N9K', '0000-00-00', '1', 'dd@gmail.com', 0, '2019-07-24 13:56:27', '2019-07-24 13:56:27'),
(44, 'rr', 'sfsdfe', '$2y$10$UfGXxfjr.JzaIn/zZZfagONAkZZ2EaIrgG4tDeJcxT2VQllY/Ms1G', '0000-00-00', '1', 'rr@gmail.com', 0, '2019-07-25 16:49:37', '2019-07-25 16:49:37'),
(45, 'rr', 'hghhr', '$2y$10$HIy5HsB8x3vtxd8Knto7zuMV2CLaUvWegWfu/WutORkv2d0.lkH8i', '0000-00-00', '1', 'rr@gmail.com', 0, '2019-07-25 16:50:17', '2019-07-25 16:50:17'),
(46, 'vv', 'dvdfv', '$2y$10$XKa4nR/Fx5M0x8AgBAb1N.WLOGpiokWpmnJgaViXqTd6iP00Q0fcG', NULL, '1', 'vv@gmail.com', 0, '2019-07-25 16:52:35', '2019-07-25 16:52:35'),
(47, 'ggg', 'fgggg', '$2y$10$AxDK4UiAgFyjReGS7b2Fuean6wOu9ss0oAfx0ea08LPATqCbpAcp6', NULL, '1', 'gg@gmail.com', 0, '2019-07-26 09:05:24', '2019-07-26 09:05:24'),
(48, 'vfv', 'vffff', '$2y$10$wJODz5acaOq9QKY0p3U6LuKcwfpP6nexHn/rRWlp8mcTb.Z0KT7XK', NULL, '1', 'ddd@gmail.com', 0, '2019-07-26 09:06:08', '2019-07-26 09:06:08'),
(49, 'ffss', 'ghhhh', '$2y$10$Liww3jDRsOp8Jo4f5ZfWHO6vDRSfD5rKPSTSTgOT92gLpg2KZpQIW', NULL, '1', 'gh@gmail.com', 0, '2019-07-26 09:23:33', '2019-07-26 09:23:33'),
(50, 'ttt', 'rhthh', '$2y$10$cc50eyTAVQ8i7VzcOQOjk.vqxemtDcPLcDnPTT4UpudL21K0FxqB.', NULL, '1', 'ttht@gmail.com', 0, '2019-07-26 09:25:48', '2019-07-26 09:25:48'),
(51, 'bbf', 'dfbbb', '$2y$10$VehbSZZpZRQ4Dr55SGXm3.45iFQqoafM.TzGs3ivOb5fmJAyBTNsq', NULL, '1', 'bb@gmail.com', 0, '2019-07-26 10:41:33', '2019-07-26 10:41:33'),
(52, '6h6', 'hhhhh', '$2y$10$9XjFtGy/p3LXfizVwyNEq.s64mpO8N716HYNw8kHpmC.v5e1jRgKS', NULL, '1', '6hh@gmail.com', 0, '2019-07-26 11:45:32', '2019-07-26 11:45:32'),
(53, 'ddd', 'ddddd', '$2y$10$Su5nR9GGgHFXFlkfKlfDNuDw0gpPiqGZNpNSWTRBX8uTX2Yyo83Gi', NULL, '1', 'dd@gmail.com', 1, '2019-07-26 16:27:13', '2019-07-26 16:26:37');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
