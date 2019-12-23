-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2019 г., 18:52
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kuproday`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `category`, `image`, `description`, `city`, `phone`, `datetime`) VALUES
(1, 'Apple iPhone 7 64 GB, Black', 130000, 'Electronics', 'iphoneX.jpg', 'The iPhone 7 and iPhone 7 Plus launch this September represented a departure from tradition for Apple - and in many ways, a risk. Instead of the usual tick-tock cycle where each ’S’ release is followed by a brand-new design, the new iPhone models look pretty similar to their counterparts from the previous two years, and sport nearly identical dimensions.\r\n\r\nDisplay: 4.70-inch (750x1334)\r\n\r\nProcessor: Apple A10 Fusion\r\n\r\nFront Camera: 7MP\r\n\r\nRear Camera: 12MP\r\n\r\nRAM: 2GB\r\n\r\nStorage: 64GB\r\n\r\nOS: iOS 10', 'Almaty', 77786624414, '2019-12-23 18:00:00'),
(2, 'Apple iPhone 7 64 GB, Black', 130000, 'Electronics', 'iphoneX.jpg', 'The iPhone 7 and iPhone 7 Plus launch this September represented a departure from tradition for Apple - and in many ways, a risk. Instead of the usual tick-tock cycle where each ’S’ release is followed by a brand-new design, the new iPhone models look pretty similar to their counterparts from the previous two years, and sport nearly identical dimensions.\r\n\r\nDisplay: 4.70-inch (750x1334)\r\n\r\nProcessor: Apple A10 Fusion\r\n\r\nFront Camera: 7MP\r\n\r\nRear Camera: 12MP\r\n\r\nRAM: 2GB\r\n\r\nStorage: 64GB\r\n\r\nOS: iOS 10', 'Almaty', 77786624414, '2019-12-23 19:00:00'),
(3, 'Samsung', 150000, 'Electronics', 'a7.jpg', 'Samsung galaxy A7', 'Astana', 87788888888, '2019-12-23 18:00:00'),
(4, 'Samsung ', 200000, 'Electronics ', 'a7.jpg', 'ashdkjasgdkjasgdadjgajd', 'fkhdjfhsd', 87755, '2019-12-23 18:00:00'),
(5, 'hfghfghf', 600000, 'Electronics', 'a7.jpg', 'fmkldskcjfmscmfkshsckjhfks', 'Karagandy', 55555555, '2019-12-23 19:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
