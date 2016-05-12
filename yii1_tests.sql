-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 12 2016 г., 05:04
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii1_tests`
--
CREATE DATABASE IF NOT EXISTS `yii1_tests` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yii1_tests`;

-- --------------------------------------------------------

--
-- Структура таблицы `warrantal_locations`
--

CREATE TABLE `warrantal_locations` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `warrantal_locations`
--

INSERT INTO `warrantal_locations` (`id`, `description`, `address`) VALUES
(1, 'Киев', 'Киев'),
(2, 'one more location', 'UK, glasgow');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `warrantal_locations`
--
ALTER TABLE `warrantal_locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `warrantal_locations`
--
ALTER TABLE `warrantal_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
