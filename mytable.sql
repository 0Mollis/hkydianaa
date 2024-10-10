-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 09 2024 г., 15:27
-- Версия сервера: 5.7.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mytable`
--

CREATE TABLE `mytable` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dolznost` varchar(20) NOT NULL,
  `zarpl` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mytable`
--

INSERT INTO `mytable` (`id`, `name`, `l_name`, `age`, `phone`, `dolznost`, `zarpl`) VALUES
(1, 'Максим', 'Моя', 19, '904263048', 'Прогрпмист', 110000),
(2, 'Максим', 'Не моя', 23, '954758624', 'Не программист', 20000),
(3, 'Алексей', 'Чернов', 20, '666666666', 'Администратор', 15000),
(4, 'Tommy ', 'Vercetti', 65, '475325452', 'Менеджер', 2000000),
(5, 'Дмитрий', 'Костин', 63, '800535353', 'Продавец', 45000),
(6, 'Максим', 'Чернов', 20, '905473048', 'Не программист', 20000),
(7, 'Максим', 'Не моя', 23, '645666666', 'Менеджер', 15000),
(8, 'Алексей', 'Костин', 65, '905445648', 'Администратор', 45000),
(10, 'Алексей', 'Чернов', 43, '958625321', 'Водитель', 45000),
(11, 'Вениамин', 'Шурупов', 29, '927604282', 'Повар', 30000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
