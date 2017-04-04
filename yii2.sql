-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2017 г., 15:15
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `type_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`, `Availability`) VALUES
(1, 1, 'product1', '<p>1111111111111</p>\r\n', 10, '', '', 'auto1.jpg', '1', '1', '0', '0'),
(2, 11, 'Jeep', '<p>Внедорожник мечты!</p>\r\n', 5, '', '', 'auto2.jpg', '1', '0', '0', '0'),
(3, 12, 'Niva 4x4', '<p>Без лишних слов</p>\r\n', 6, 'Niva 4x4', '', 'no-image.png', '1', '1', '0', '1'),
(4, 1, 'product4', '<p>444444444444444</p>\r\n', 9, '', '', 'auto4.jpg', '1', '0', '1', '0'),
(5, 1, 'product5', '<p>Мега-Мобиль</p>\r\n', 2, '', 'Любимое транспортное средство дедушек.', 'auto5.jpg', '0', '0', '0', '0'),
(6, 1, 'Cuda Concept (1/18 Highway 61)', '<p>666666666666</p>\r\n', 6, '', '', 'auto6.jpg', '1', '0', '0', '0'),
(7, 4, 'Honda Civic Type R', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Под капотом новой <strong>Honda Civic Type R 2016</strong> разместился<span style="color:#0000CD"> 2,0</span>-литровый четырехцилиндровый бензиновый турбомотор <strong>VTEC</strong> мощностью <strong>310 </strong>л.с. На разгон с места до сотни хэтчбек тратит всего<strong> 5,7</strong> секунды, а <strong>максимальная скорость</strong> достигает 270 км/ч. <strong><em>Средний расход</em></strong> топлива в смешанном цикле заявлен на уровне <strong>7,3 литра на 100 км пробега.</strong></p>\r\n', 1.39, 'Основные ключи', 'Не битая, не крашенная, водила бабушка', 'CivicTypeR.jpg', '1', '1', '0', '1'),
(8, 6, 'Suzuki Swift', '<p>Swift</p>\r\n', 2.34, '', '', 'Swift.jpg', '0', '0', '0', '0'),
(9, 10, 'Kawasaki Ninja 250SL', '<p style="text-align:justify"><span style="color:rgb(42, 42, 42); font-family:regular,sans-serif; font-size:16px">&nbsp; &nbsp; &nbsp;Лёгкий, изящный и маневренный, обладающий подлинными генами класса Суперспорт,&nbsp; новый <strong>Ninja 250SL</strong> позволит Вам быстро и непринуждённо окунуться в мир высоких скоростей. Быстро набирающий обороты одноцилиндровый двигатель в сочетании с легковесной рамой типа Trellis придают индивидуальность и подчеркивают стиль. Великолепные ходовые качества и безукоризненная управляемость обеспечат заряд адреналина и массу удовольствия от езды. В городе или на шоссе, новый <strong>Ninja 250SL</strong> готов к любым авантюрам.</span></p>\r\n\r\n<p><span style="font-size:20px"><strong>Объём двигателя :&nbsp;249 см3,</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:20px"><strong>Трансмиссия :&nbsp;6-скоростная</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 9.09, 'Спорт-байк', '', 'no-image.png', '0', '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(1, 'Autos/Auto1/88e48d.jpg', 1, 1, 'Auto', 'a5a22c567c-1', ''),
(2, 'Autos/Auto5/f3c727.jpg', 5, 0, 'Auto', '6b5b471009-2', ''),
(3, 'Autos/Auto2/a80f1e.jpg', 2, 1, 'Auto', '63507dba1b-1', ''),
(4, 'Autos/Auto3/775f6c.png', 3, 0, 'Auto', 'fae373f363-3', ''),
(5, 'Autos/Auto4/c945e4.jpg', 4, 1, 'Auto', '1011229854-1', ''),
(6, 'Autos/Auto5/09e484.jpg', 5, 0, 'Auto', '9440d7f05d-3', ''),
(7, 'Autos/Auto6/f79c3c.jpg', 6, 1, 'Auto', '7cabab8acd-1', ''),
(8, 'Autos/Auto7/69fc63.jpg', 7, 1, 'Auto', '9989c55205-1', ''),
(9, 'Autos/Auto8/981247.jpg', 8, 1, 'Auto', '07c288e415-1', ''),
(10, 'Autos/Auto5/cf0f70.jpg', 5, 0, 'Auto', 'ab186333e4-4', ''),
(11, 'Autos/Auto5/e7461c.jpg', 5, 0, 'Auto', '0b23f9369f-5', ''),
(12, 'Autos/Auto5/6df2a6.jpg', 5, 0, 'Auto', '050a903aec-6', ''),
(13, 'Autos/Auto5/a501f4.jpg', 5, 1, 'Auto', 'b0fbb59ace-1', ''),
(14, 'Autos/Auto3/5d46f3.jpg', 3, 0, 'Auto', 'ebe7c957d8-4', ''),
(15, 'Autos/Auto3/c98b04.jpg', 3, 0, 'Auto', 'e7ee2e59ce-5', ''),
(16, 'Autos/Auto3/666b95.jpg', 3, 0, 'Auto', '6f26fe98d6-6', ''),
(17, 'Autos/Auto3/4982fb.jpg', 3, 0, 'Auto', 'c1368d530d-7', ''),
(18, 'Autos/Auto3/5bf397.jpg', 3, 0, 'Auto', 'f19938eae3-8', ''),
(19, 'Autos/Auto3/28c1f7.jpg', 3, 0, 'Auto', '2da168fe70-2', ''),
(20, 'Autos/Auto3/8c306b.jpg', 3, 1, 'Auto', '5c3a9cba72-1', ''),
(21, 'Autos/Auto9/82dd3f.jpg', 9, 0, 'Auto', 'b00b9e3dc3-3', ''),
(22, 'Autos/Auto9/bb43e2.jpg', 9, 0, 'Auto', 'f2e668d7fc-4', ''),
(23, 'Autos/Auto9/82e1ef.jpg', 9, 0, 'Auto', 'ac45c4cd01-2', ''),
(24, 'Autos/Auto9/30e91a.jpg', 9, 1, 'Auto', '89b9a37613-1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1491136767),
('m140622_111540_create_image_table', 1491136772),
('m140622_111545_add_name_to_image_table', 1491136772);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `address`) VALUES
(6, '2017-03-30 22:50:51', '2017-03-30 22:50:51', 19, 102.7, '0', 'Катя', '1@1.xcom', '111', '2221'),
(7, '2017-03-30 23:03:44', '2017-03-30 23:03:44', 19, 102.7, '0', 'Катя', '1@1.xcom', '111', '555'),
(8, '2017-03-30 23:38:29', '2017-03-30 23:38:29', 1, 7.77, '0', 'Петя', 'milo@milo.bk', '334124', 'Есенина'),
(9, '2017-03-30 23:41:22', '2017-03-30 23:41:22', 1, 7.77, '0', 'Петя', 'milo@milo.bk', '334124', 'Есенина'),
(10, '2017-03-30 23:44:52', '2017-03-30 23:44:52', 31, 155, '0', 'Катя', '1@1.xcom', '334124', 'Есенина'),
(11, '2017-04-02 10:23:47', '2017-04-02 10:23:47', 10, 77.7, '0', 'Dima', 'ss@ss.com', '555', '4444');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `auto_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(10) NOT NULL,
  `sum_item` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `auto_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(1, 6, 7, 'Honda Civic Type R', 7.77, 10, 77),
(2, 6, 2, 'Jeep', 5, 1, 5),
(3, 6, 5, 'product5', 2, 7, 14),
(4, 6, 6, 'Cuda Concept (1/18 Highway 61)', 6, 1, 6),
(5, 7, 7, 'Honda Civic Type R', 7.77, 10, 77),
(6, 7, 2, 'Jeep', 5, 1, 5),
(7, 7, 5, 'product5', 2, 7, 14),
(8, 7, 6, 'Cuda Concept (1/18 Highway 61)', 6, 1, 6),
(9, 8, 7, 'Honda Civic Type R', 7.77, 1, 7),
(10, 9, 7, 'Honda Civic Type R', 7.77, 1, 7),
(11, 10, 2, 'Jeep', 5, 31, 155),
(12, 11, 7, 'Honda Civic Type R', 7.77, 10, 77);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
(10, 3, 'Kawasaki', 'Спорт-байк', ''),
(11, 2, 'Jeep', NULL, NULL),
(12, 2, 'Niva', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$EVgb8jSKcfguzBHKILDo8.sOWjUmGrOPen8b.nJ44eoPOowBcS3aO', 'XtgBC9N-BvApMgeuhz1txW_ASBZ5H4Di');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
