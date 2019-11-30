-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2019 г., 12:06
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `url_shortener`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ls_urls`
--

CREATE TABLE `ls_urls` (
  `id` int(11) NOT NULL,
  `client_url` text NOT NULL,
  `shorten_url` varchar(20) NOT NULL,
  `date_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ls_urls`
--

INSERT INTO `ls_urls` (`id`, `client_url`, `shorten_url`, `date_insert`) VALUES
(6, 'https://metrika.yandex.ru/list', 'http://ls/znMP', '2019-11-30 05:34:29'),
(8, 'https://yandex.kz/maps/?ll=69.589709%2C42.317301&z=12', 'http://ls/Kdv4', '2019-11-30 09:05:03');

-- --------------------------------------------------------

--
-- Структура таблицы `ls_users`
--

CREATE TABLE `ls_users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ls_users`
--

INSERT INTO `ls_users` (`id`, `login`, `password`, `status`) VALUES
(3, 'admin', '$2y$10$9rDfUzpUNxT68yl5SM9PzuNXBvG1zyU0yNnozpE1.Aw2k86xQEXr2', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ls_urls`
--
ALTER TABLE `ls_urls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ls_users`
--
ALTER TABLE `ls_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ls_urls`
--
ALTER TABLE `ls_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `ls_users`
--
ALTER TABLE `ls_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
