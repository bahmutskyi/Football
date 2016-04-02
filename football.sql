-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 17 2011 г., 22:07
-- Версия сервера: 5.5.11
-- Версия PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `football`
--
CREATE DATABASE `football` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `football`;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `content` text,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `content`, `title`) VALUES
(1, 'Home', '<strong>Основная</strong> страница', 'Main page'),
(2, 'Hobby', 'Я люблю смотреть футбол и болеть иногда за него', 'My favarite work'),
(3, 'Gallery', 'Ну ее, эту галерею!!!', 'нет, Александр!!!');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
(1, 'Bagma', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Yevgeny', '827ccb0eea8a706c4c34a16891f84e7b');
