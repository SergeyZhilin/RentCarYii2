-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2017 г., 12:37
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `id` int(10) unsigned NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0',
  `Availability` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `type_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`, `Availability`) VALUES
(1, 0, 'product1', '1111111111111', 10, NULL, NULL, 'auto1.jpg', '1', '1', '0', '0'),
(2, 11, 'product2', '2222222222222222', 5, NULL, NULL, 'auto2.jpg', '1', '0', '0', '0'),
(3, 0, 'product3', '33333333333333', 6, NULL, NULL, 'no-image.png', '1', '1', '0', '0'),
(4, 0, 'product4', '444444444444444', 9, NULL, NULL, 'auto4.jpg', '1', '0', '1', '0'),
(5, 0, 'product5', '55555555555555555', 2, NULL, NULL, 'auto5.jpg', '1', '0', '0', '0'),
(6, 0, 'Cuda Concept (1/18 Highway 61)', '666666666666', 6, NULL, NULL, 'auto6.jpg', '1', '0', '0', '0'),
(7, 4, 'Honda Civic Type R', 'chto to', 7.77, 'Основные ключи', 'Описание машины', 'CivicTypeR.jpg', '0', '1', '0', '0'),
(8, 6, 'Suzuki Swift', 'Swift', 2.34, NULL, NULL, 'Swift.jpg', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, 0, 'Retro', NULL, NULL),
(2, 0, 'Automobiles', NULL, NULL),
(3, 0, 'Motorcycles', NULL, NULL),
(4, 2, 'Honda', NULL, NULL),
(5, 3, 'Honda', NULL, NULL),
(6, 2, 'Suzuki', NULL, NULL),
(7, 3, 'Suzuki', NULL, NULL),
(8, 3, 'Yamaha', NULL, NULL),
(9, 1, 'IXO/Altaya', NULL, NULL),
(10, 3, 'Kawasaki', NULL, NULL),
(11, 2, 'Jeep', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
