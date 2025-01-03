-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2022 年 06 月 22 日 01:16
-- 伺服器版本: 5.7.33-0ubuntu0.16.04.1
-- PHP 版本： 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `A1083348`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ammo`
--

CREATE TABLE `ammo` (
  `ammoid` int(2) NOT NULL,
  `amname` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `ammo`
--

INSERT INTO `ammo` (`ammoid`, `amname`, `quantity`) VALUES
(1, 'Arrows', 32),
(2, 'Heavy Ammo', 60),
(3, 'Light Ammo', 60),
(4, 'Energy Ammo', 60),
(5, 'Shotgun Ammo', 16),
(6, 'sniper Ammo', 24),
(13, 'special ammo1', 1),
(14, 'special ammo2', 2),
(15, 'special ammo3', 3),
(16, 'special ammo4', 4),
(17, 'special ammo5', 5),
(18, 'special ammo6', 6),
(19, 'special ammo7', 7),
(20, 'special ammo8', 8),
(21, 'special ammo9', 9),
(22, 'special ammo10', 10),
(23, 'special ammo11', 11),
(24, 'special ammo12', 12),
(25, 'special ammo13', 13),
(26, 'special ammo14', 14),
(27, 'special ammo15', 15);

-- --------------------------------------------------------

--
-- 資料表結構 `ammouse`
--

CREATE TABLE `ammouse` (
  `wid` int(2) NOT NULL,
  `ammoid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `ammouse`
--

INSERT INTO `ammouse` (`wid`, `ammoid`) VALUES
(1, 4),
(2, 2),
(3, 2),
(4, 3),
(5, 3),
(6, 2),
(7, 3),
(8, 4),
(9, 4),
(10, 2),
(11, 4),
(12, 2),
(13, 1),
(14, 3),
(15, 4),
(16, 6),
(17, 6),
(18, 6),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 3),
(24, 3),
(25, 2),
(26, 2),
(26, 3),
(1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `attachments`
--

CREATE TABLE `attachments` (
  `attid` int(3) NOT NULL,
  `atname` varchar(25) NOT NULL,
  `atusage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `attachments`
--

INSERT INTO `attachments` (`attid`, `atname`, `atusage`) VALUES
(1, '1x HCOG "Classic"', 'Close range optic.'),
(2, 'Barrel Stabilizer', 'Moderate recoil reduction.'),
(3, 'Extended Light Mag', 'Increased ammo capacity with quicker reloads.'),
(4, 'Extended heavy Mag', 'Increased ammo capacity with quicker reloads.'),
(5, 'Sniper Stock', 'Improves handling and reduces aim drift.'),
(6, 'Shotgun Bolt', 'Moderate upgrade to fire rate.'),
(7, 'Turbocharger', 'Reduces autofire spin-up time for compatible weapons.'),
(8, 'Boosted Loader', ' speeds up reload time and gives bonus ammo if the weapon is reloaded while low (but not empty). '),
(9, 'Hammerpoint Rounds', 'increases damage to unshielded targets'),
(10, 'Shatter Caps', 'splits the weapon\'s arrow or round into a shotgun pattern. '),
(17, 'Standard Stock', 'Improves handling and reduces aim drift.'),
(18, 'Extended Sniper Mag', 'Increased ammo capacity with quicker reloads.'),
(19, '3x HCOG "Ranger"', 'Mid-range optic'),
(20, 'Dual Shell', 'Reloads 2 rounds at a time.'),
(21, 'Selectfire Receiver', 'Unlocks additional fire modes.'),
(22, ' 4x-8x Variable Sniper', 'Sniper optic'),
(23, '6x Sniper.svg 6x Sniper', 'Sniper optic'),
(24, '2x-4x Variable AOG', 'Mid-range optic'),
(25, '2x HCOG "Bruiser"', 'Close range optic'),
(26, '1x-2x Variable Holo', 'Close range optic');

-- --------------------------------------------------------

--
-- 資料表結構 `install`
--

CREATE TABLE `install` (
  `wid` int(2) NOT NULL,
  `attid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `install`
--

INSERT INTO `install` (`wid`, `attid`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(3, 2),
(4, 2),
(5, 2),
(7, 2),
(8, 2),
(9, 2),
(11, 2),
(17, 2),
(23, 2),
(4, 3),
(5, 3),
(7, 3),
(14, 3),
(23, 3),
(24, 3),
(26, 3),
(2, 4),
(3, 4),
(6, 4),
(10, 4),
(12, 4),
(25, 4),
(26, 4),
(12, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 6),
(20, 6),
(21, 6),
(22, 6),
(1, 7),
(9, 7),
(3, 8),
(25, 8),
(21, 9),
(23, 9),
(24, 9),
(12, 10),
(13, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `type`
--

CREATE TABLE `type` (
  `tid` int(2) NOT NULL,
  `tname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `type`
--

INSERT INTO `type` (`tid`, `tname`) VALUES
(1, 'Assault rifle'),
(2, 'Submachine gun'),
(3, 'Light machine guns'),
(4, 'Marksman weapons'),
(5, 'Sniper rifles'),
(6, 'Shotguns'),
(7, 'Pistols'),
(16, 'special type1'),
(17, 'special type2'),
(18, 'special type3'),
(19, 'special type4'),
(20, 'special type5'),
(21, 'special type6'),
(22, 'special type7'),
(23, 'special type8'),
(24, 'special type9'),
(25, 'special type10'),
(26, 'special type11'),
(27, 'special type12'),
(28, 'special type13'),
(29, 'special type14'),
(30, 'special type15');

-- --------------------------------------------------------

--
-- 資料表結構 `weapon`
--

CREATE TABLE `weapon` (
  `wid` int(10) NOT NULL,
  `wname` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BodyDmg` int(3) NOT NULL,
  `HeadDMG` int(3) NOT NULL,
  `LegsDMG` int(3) NOT NULL,
  `capacity` int(3) NOT NULL,
  `tid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `weapon`
--

INSERT INTO `weapon` (`wid`, `wname`, `BodyDmg`, `HeadDMG`, `LegsDMG`, `capacity`, `tid`) VALUES
(1, 'HAVOC Rifle', 18, 32, 14, 20, 1),
(2, 'VK-47 Flatline', 19, 33, 14, 24, 1),
(3, 'Hemlok Burst AR', 20, 35, 15, 18, 1),
(4, 'R301 Carbine', 14, 28, 11, 18, 1),
(5, 'Alternator SMG', 16, 24, 13, 19, 2),
(6, 'Prowler Burst PDW', 15, 23, 12, 35, 2),
(7, 'R99 SMG', 11, 17, 9, 20, 2),
(8, 'Volt SMG', 15, 23, 12, 19, 2),
(9, 'Devotion LMG', 16, 32, 14, 36, 3),
(10, 'M600 Spitfire', 18, 36, 14, 35, 3),
(11, 'LSTAR EMG', 18, 36, 14, 23, 3),
(12, '3030 Repeater', 42, 74, 36, 6, 4),
(13, 'Bocek Bow', 60, 105, 54, 1, 4),
(14, 'G7 Scout', 34, 60, 26, 10, 4),
(15, 'Triple Take', 69, 138, 63, 9, 4),
(16, 'Charge Rifle', 45, 56, 45, 8, 5),
(17, 'Longbow DMR', 69, 129, 48, 6, 5),
(18, 'Sentinel', 70, 140, 63, 4, 5),
(19, 'EVA8 Auto', 63, 99, 63, 8, 6),
(20, 'Mastiff Shotgun', 88, 112, 88, 5, 6),
(21, 'Mozambique', 45, 69, 42, 6, 6),
(22, 'Peacekeeper', 99, 129, 79, 5, 6),
(23, 'RE45', 12, 18, 11, 16, 7),
(24, 'P2020', 12, 27, 16, 14, 7),
(25, 'Wingman', 45, 97, 41, 6, 7),
(26, 'C.A.R. SMG', 13, 20, 10, 20, 2);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `ammo`
--
ALTER TABLE `ammo`
  ADD PRIMARY KEY (`ammoid`),
  ADD KEY `ammoid` (`ammoid`);

--
-- 資料表索引 `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`attid`);

--
-- 資料表索引 `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`tid`);

--
-- 資料表索引 `weapon`
--
ALTER TABLE `weapon`
  ADD PRIMARY KEY (`wid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `ammo`
--
ALTER TABLE `ammo`
  MODIFY `ammoid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用資料表 AUTO_INCREMENT `attachments`
--
ALTER TABLE `attachments`
  MODIFY `attid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- 使用資料表 AUTO_INCREMENT `type`
--
ALTER TABLE `type`
  MODIFY `tid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- 使用資料表 AUTO_INCREMENT `weapon`
--
ALTER TABLE `weapon`
  MODIFY `wid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
