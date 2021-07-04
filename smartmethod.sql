-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 يوليو 2021 الساعة 20:01
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmethod`
--

-- --------------------------------------------------------

--
-- بنية الجدول `directions`
--

CREATE TABLE `directions` (
  `Forward` int(11) NOT NULL,
  `Left` int(11) NOT NULL,
  `Stop` int(11) NOT NULL,
  `Right` int(11) NOT NULL,
  `Backward` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `directions`
--

INSERT INTO `directions` (`Forward`, `Left`, `Stop`, `Right`, `Backward`) VALUES
(1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `motors`
--

CREATE TABLE `motors` (
  `Motor1` int(11) NOT NULL DEFAULT 0,
  `Motor2` int(11) NOT NULL DEFAULT 0,
  `Motor3` int(11) NOT NULL DEFAULT 0,
  `Motor4` int(11) NOT NULL DEFAULT 0,
  `Motor5` int(11) NOT NULL DEFAULT 0,
  `Motor6` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `motors`
--

INSERT INTO `motors` (`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`) VALUES
(64, 121, 163, 96, 60, 0),
(118, 6, 6, 50, 60, 97),
(98, 83, 80, 155, 31, 0),
(156, 83, 80, 155, 31, 0),
(27, 180, 180, 42, 31, 0),
(0, 22, 54, 72, 180, 0),
(89, 89, 54, 156, 180, 75),
(89, 89, 54, 156, 180, 59),
(9, 9, 7, 115, 162, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
