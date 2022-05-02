-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2020 年 06 月 13 日 08:06
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `id14041237_project`
--
CREATE DATABASE IF NOT EXISTS `id14041237_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id14041237_project`;

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `articleid` int(20) NOT NULL,
  `usrid` int(20) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`articleid`, `usrid`, `title`, `content`, `dates`) VALUES
(34, 22, '管理員測試測試', '試試似是四是私事四四四四是誓死死使四四 ', '06月11日23:09'),
(35, 25, '當台灣人塑膠ㄛ??????', '幹你娘機掰', '06月11日23:26'),
(36, 27, '哈囉大家', '我是大一新生><', '06月11日23:46'),
(37, 28, '楠梓偏鄉?', '.......', '06月11日23:49'),
(38, 29, '今天讓你**乒乒乓乓(微c4', '今我跟我男友......', '06月11日23:51'),
(39, 32, '我就爛!!!', '我看留言版的各位都滿腦殘的ㄟ 可憐', '06月11日23:57'),
(40, 34, '大一的學弟們', '乳提，要不要出來交流交流r', '06月12日00:01'),
(42, 39, '聽到隔壁房有%%聲', '樓下房間震的好大聲，害我睡不著，多人運動也不揪，瓜張', '06月12日00:19');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `commentid` int(10) NOT NULL,
  `articleid` int(10) NOT NULL,
  `usrid` int(20) NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `comment`
--

INSERT INTO `comment` (`commentid`, `articleid`, `usrid`, `comment`) VALUES
(30, 34, 25, 'hello?'),
(33, 34, 22, '測試haha'),
(34, 36, 27, '求認識'),
(35, 35, 27, '???????????'),
(36, 37, 29, '推推'),
(37, 37, 29, '卡'),
(38, 37, 29, '卡+1'),
(39, 36, 29, '><你住哪棟我也大一'),
(40, 38, 29, '你當這低能卡???'),
(41, 38, 29, '高大素質拉'),
(42, 38, 29, '不推樓上'),
(43, 37, 29, '卡'),
(44, 37, 29, '卡'),
(45, 37, 29, '推'),
(46, 36, 33, '我助學一窩'),
(47, 38, 33, '沙小標題....'),
(48, 37, 33, '不推步行ㄟ'),
(49, 38, 32, '我就爛!!!'),
(50, 39, 32, '台男'),
(51, 39, 32, '藍頭素質拉'),
(52, 40, 34, '幹噁男'),
(53, 40, 39, '30cm來了'),
(55, 42, 39, '難道是潘○○學長'),
(56, 42, 22, '沙小'),
(57, 42, 22, '是'),
(58, 42, 22, '賴xx學長ㄅ'),
(59, 42, 22, '太害羞了ㄅ被聽到了'),
(60, 40, 22, '蕉流');

-- --------------------------------------------------------

--
-- 資料表結構 `home`
--

CREATE TABLE `home` (
  `homeid` int(10) NOT NULL,
  `homedad` int(10) NOT NULL,
  `homemom` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home`
--

INSERT INTO `home` (`homeid`, `homedad`, `homemom`) VALUES
(21, 22, 34),
(22, 22, 35);

-- --------------------------------------------------------

--
-- 資料表結構 `invite`
--

CREATE TABLE `invite` (
  `inviteid` int(10) NOT NULL,
  `inviter` int(10) NOT NULL,
  `invitee` int(10) NOT NULL,
  `say` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `typess` int(10) NOT NULL,
  `timess` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `invite`
--

INSERT INTO `invite` (`inviteid`, `inviter`, `invitee`, `say`, `typess`, `timess`) VALUES
(42, 33, 30, '><家個好友八', 1, '06月11日15:54'),
(43, 33, 31, '我住學一你呢!', 1, '06月11日15:54'),
(45, 35, 22, '快幫我托魯', 1, '06月11日16:03'),
(46, 34, 35, '操閉嘴', 2, '123123'),
(48, 39, 29, '我有3條腿喔', 2, '06月11日16:17'),
(49, 34, 22, 'hi', 1, 'asd'),
(50, 25, 22, 'jhjhhh', 2, 'asd'),
(51, 34, 39, 'heeelo', 2, 'ad');

-- --------------------------------------------------------

--
-- 資料表結構 `party`
--

CREATE TABLE `party` (
  `partyid` int(10) NOT NULL,
  `partyname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `partydates` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `partywhen` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `partybuild` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `partyroom` int(10) NOT NULL,
  `partygoal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `partyholder` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `party`
--

INSERT INTO `party` (`partyid`, `partyname`, `partydates`, `partywhen`, `partybuild`, `partyroom`, `partygoal`, `partyholder`) VALUES
(11, '焦流', '2020-06-19', '14:51', '學一', 456, '來焦流', 25),
(12, '丁丁慶生趴', '2020-06-12', '15:53', '學二', 123, '丁丁過生日', 25),
(13, '期末all趴', '2020-06-16', '15:54', '綜宿', 225, '來就ALL PASS', 26),
(14, '期末趴', '2020-06-09', '14:55', '學二', 451, '來都來', 27),
(15, '丁丁好瞎趴', '2020-06-23', '23:58', '學一', 456, '內有丁丁', 28),
(16, '丁丁喝酒趴', '2020-06-24', '11:58', '學一', 449, '會喝酒就來', 29),
(17, '期末快被電趴', '2020-06-03', '08:15', '綜宿', 126, '好累', 30),
(18, '讓我all趴', '2020-05-21', '09:59', '學二', 321, '爽ㄛ', 31),
(19, '說好的all趴呢', '2020-06-24', '02:00', '學一', 345, '要被當ㄌ\r\n', 32),
(20, '沒有all趴只能討趴', '2020-06-30', '22:04', '綜宿', 364, '哭哭ㄛ', 33),
(23, '約跑囉', '2020-06-17', '01:04', '學一', 666, '我房間很大', 34);

-- --------------------------------------------------------

--
-- 資料表結構 `partygood`
--

CREATE TABLE `partygood` (
  `partyid` int(10) NOT NULL,
  `usrid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `partygood`
--

INSERT INTO `partygood` (`partyid`, `usrid`) VALUES
(12, 39),
(22, 39);

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `No` int(10) NOT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`No`, `URL`, `type`) VALUES
(13, './photo/1591890140.jpg', 1),
(16, './photo/1591926302.jpg', 2),
(17, './photo/1591926312.jpg', 2),
(18, './photo/1591926340.jpg', 1),
(19, './photo/1591926350.jpg', 3),
(20, './photo/1591926366.jpg', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `rating`
--

CREATE TABLE `rating` (
  `articleid` int(10) NOT NULL,
  `usrid` int(10) NOT NULL,
  `types` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `rating`
--

INSERT INTO `rating` (`articleid`, `usrid`, `types`) VALUES
(34, 27, 'good'),
(34, 29, 'good'),
(34, 32, 'good'),
(35, 22, 'bad'),
(35, 27, 'bad'),
(35, 28, 'bad'),
(35, 29, 'bad'),
(36, 27, 'good'),
(36, 28, 'good'),
(36, 29, 'good'),
(36, 33, 'good'),
(37, 28, 'good'),
(37, 29, 'good'),
(37, 33, 'bad'),
(38, 29, 'good'),
(38, 32, 'good'),
(38, 33, 'bad'),
(39, 32, 'bad'),
(40, 34, 'bad'),
(40, 35, 'bad'),
(42, 39, 'good');

-- --------------------------------------------------------

--
-- 資料表結構 `usr`
--

CREATE TABLE `usr` (
  `usrid` int(20) NOT NULL,
  `account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `types` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home` int(10) NOT NULL DEFAULT 1,
  `lineid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `usr`
--

INSERT INTO `usr` (`usrid`, `account`, `passwd`, `sex`, `types`, `home`, `lineid`, `pic`) VALUES
(21, 'hu', '1234', 'male', 'admin', 1, '123', './photo/1591884253.PNG'),
(22, 'pan', 'pan', 'male', 'admin', 2, 'hellow', './photo/1591888143.jpg'),
(24, '謝和同學', '123', 'male', NULL, 1, '123', './photo/1591889098.png'),
(25, '謝和同學', '12345', 'male', NULL, 1, '111111', './photo/1591889161.jpg'),
(26, '羅同學', 'aa', 'male', NULL, 9, 'aa', './photo/1591889401.jpg'),
(27, '閉嘴', 'bb', 'girl', NULL, 1, 'bb', './photo/1591889487.png'),
(28, 'mia', 'cc', 'girl', NULL, 1, 'cc', './photo/1591889509.jpg'),
(29, '派大', 'dd', 'girl', NULL, 1, 'dd', './photo/1591889552.png'),
(30, 'goodnight', 'ee', 'male', NULL, 1, 'ee', './photo/1591889573.jpg'),
(31, '韓同學', 'ff', 'male', NULL, 1, 'ff', './photo/1591889594.png'),
(32, 'ibad', 'gg', 'male', NULL, 1, 'gg', './photo/1591889633.png'),
(33, 'HowDARE', 'hh', 'girl', NULL, 1, 'hh', './photo/1591889670.png'),
(34, '雷卡多', 'ii', 'male', NULL, 6, 'ii', './photo/1591891222.jpg'),
(35, '大美女', '7788', 'girl', NULL, 2, 'imbeauty', './photo/1591891323.png'),
(39, 'hsu', 'hsu', 'male', NULL, 1, 'hsu', './photo/1591891927.png');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleid`),
  ADD KEY `usrid` (`usrid`);

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`,`articleid`,`usrid`),
  ADD KEY `articleid` (`articleid`),
  ADD KEY `usrid` (`usrid`),
  ADD KEY `articleid_2` (`articleid`);

--
-- 資料表索引 `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`homeid`),
  ADD UNIQUE KEY `homedad` (`homedad`,`homemom`);

--
-- 資料表索引 `invite`
--
ALTER TABLE `invite`
  ADD PRIMARY KEY (`inviteid`),
  ADD UNIQUE KEY `inviter` (`inviter`,`invitee`);

--
-- 資料表索引 `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`partyid`,`partyholder`);

--
-- 資料表索引 `partygood`
--
ALTER TABLE `partygood`
  ADD PRIMARY KEY (`partyid`,`usrid`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`No`);

--
-- 資料表索引 `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`articleid`,`usrid`),
  ADD KEY `articleid` (`articleid`),
  ADD KEY `usrid` (`usrid`);

--
-- 資料表索引 `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`usrid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `articleid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home`
--
ALTER TABLE `home`
  MODIFY `homeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invite`
--
ALTER TABLE `invite`
  MODIFY `inviteid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `party`
--
ALTER TABLE `party`
  MODIFY `partyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `usr`
--
ALTER TABLE `usr`
  MODIFY `usrid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
