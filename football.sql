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

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `adr` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `adr`) VALUES
(1, 'Главная', 'home'),
(2, 'Состав команды', 'sqd'),
(3, 'История команды', 'hstr'),
(4, 'Результаты', 'rslts'),
(5, 'Резюме автора сайта', 'rsm');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_admin`
--

CREATE TABLE IF NOT EXISTS `menu_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `adr` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_admin`
--

INSERT INTO `menu_admin` (`id`, `name`, `adr`) VALUES
(1, 'Главная', 'adm_home'),
(2, 'Управление игроками', 'adm_sqd'),
(3, 'Управление историей', 'hadm_str'),
(4, 'Управление результатами', 'adm_rslts'),
(5, 'Управление резюме', 'adm_rsm');
-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
(1, 'Bagma', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Yevgeny', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `pass`) VALUES
(1, 'Bagma', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Структура таблицы `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `fio` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `players`
--

INSERT INTO `players` (`id`, `number`, `position`, `fio`) VALUES
(1, 2, 'ЗЩ', 'Левшин Дмитрий Александрович'),
(2, 3, 'ЗЩ', 'Петренко Павел Сергеевич'),
(3, 4, 'ЗЩ', 'Игнатов Константин Павлович'),
(4, 5, 'НП', 'Самойленко Денис Игоревич'),
(5, 6, 'НП', 'Ковач Виктор Антонович'),
(6, 7, 'ВР', 'Шаповалов Андрей Григорьевич'),
(7, 8, 'НП', 'Багмуцкий Евгений Александрович'),
(8, 9, 'НП', 'Хруняк Илья Олегович'),
(9, 10, 'НП', 'Чудиновских Илья Эдуардович'),
(10, 11, 'ВР', 'Тверитников Олег Алексеевич'),
(11, 15, 'ЗЩ', 'Куликов Арсен Сергеевич'),
(12, 16, 'ЗЩ', 'Шаров Олег Артурович'),
(13, 23, 'ЗЩ', 'Василенко Павел Романович');