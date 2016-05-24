-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 24 2016 г., 15:44
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `msk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `concert`
--

INSERT INTO `concert` (`id`, `name`) VALUES
(12, 'Даниил Крамер (фортепиано)'),
(13, 'Сергей Беляков (фортепиано)'),
(14, 'Parks, Squares and Alleys'),
(15, 'Анна Бутурлина'),
(18, 'Milky Chance (Германия)');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `concert` int(11) NOT NULL,
  `gender` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `fullname`, `phone`, `dob`, `concert`, `gender`) VALUES
(18, 'webproger2014@gmail.com', 'Климов П.А', '+79220712459', '1994-07-17', 12, 'муж'),
(19, 'webproger2015@gmail.com', 'Климов П.А', '+79220712459', '1994-07-17', 14, 'муж');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
