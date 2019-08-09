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
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) UNSIGNED NOT NULL,
  `num` int(255) UNSIGNED NOT NULL,
  `jointime` datetime NOT NULL DEFAULT current_timestamp()
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
