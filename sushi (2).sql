-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 10 2020 г., 19:22
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sushi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `position`) VALUES
(1, 'Сеты', 0),
(2, 'Роллы', 0),
(3, 'Пицца', 0),
(4, 'WOK', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `parametr1` varchar(255) DEFAULT NULL,
  `parametr2` varchar(255) DEFAULT NULL,
  `parametr3` varchar(255) DEFAULT NULL,
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hit` tinyint(4) NOT NULL DEFAULT '0',
  `is_veg` tinyint(4) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `parametr1`, `parametr2`, `parametr3`, `is_new`, `is_hit`, `is_veg`, `category_id`, `img_url`) VALUES
(1, 'Сет1', 1, '1', '1', '1', 1, 1, 0, 1, 'set1.jpg'),
(2, 'Сет2', 2, '2', '2', '2', 1, 0, 1, 1, 'set2.jpg'),
(3, 'Сет3', 3, '3', '3', '3', 0, 1, 0, 1, 'set3.jpg'),
(4, 'Сет4', 4, '4', '4', '4', 0, 0, 1, 1, 'set4.jpg'),
(5, 'roll1', 1, '1', '1', '1', 1, 1, 1, 2, 'roll1.jpg'),
(6, 'roll2', 2, '2', '2', '2', 0, 0, 1, 2, 'roll2.jpg'),
(7, 'roll3', 3, '3', '3', '3', 0, 0, 0, 2, 'roll3.jpg'),
(8, 'roll4', 4, '4', '4', '4', 1, 1, 0, 2, 'roll4.jpg'),
(9, 'pizza1', 1, '1', '1', '1', 1, 1, 1, 3, 'pizza1.jpg'),
(10, 'pizza2', 2, '2', '2', '2', 0, 0, 1, 3, 'pizza2.png'),
(11, 'pizza3', 3, '3', '3', '3', 0, 0, 0, 3, 'pizza3.jpg'),
(12, 'pizza4', 4, '4', '4', '4', 1, 1, 0, 3, 'pizza4.jpg'),
(13, 'wok1', 1, '1', '1', '1', 1, 1, 1, 4, 'wok1.jpg'),
(14, 'wok2', 2, '2', '2', '2', 0, 0, 1, 4, 'wok2.jpg'),
(15, 'wok3', 3, '3', '3', '3', 0, 0, 0, 4, 'wok3.jpg'),
(16, 'wok4', 4, '4', '4', '4', 1, 1, 0, 4, 'wok4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'b63bc5d270a236c79e6f71a6d25084af'),
(2, 'q', 'ba4aec5eae982019ad5f3822e8b08bdf'),
(3, '111', '0d45ef5a7cb4036c29ca70b82f15c57a'),
(4, 'atmajkin227@gmail.com', '1b8db6279a744067f69082a43cc090c0'),
(5, 'tima', '2e5422e6a99f26f880cae734800a1110');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
