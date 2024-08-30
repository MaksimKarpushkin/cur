-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2019 г., 06:29
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `korm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `akcia`
--

CREATE TABLE `akcia` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `new_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `akcia`
--

INSERT INTO `akcia` (`id`, `title`, `content`, `image`, `price`, `new_price`) VALUES
(1, 'Sheba Mini', 'qrwevrwvr wae reaw rwe rwe', 'ShebaMini.jpg', 20, 16),
(2, 'Kitekat МЯСНОЙ ПИР', 'rweytvrye ty trtur tyuruy', 'KitekatМЯСНОЙПИР.jpg', 16, 8),
(3, 'HILL`S SCIENCE PLAN', 'к фуек еыке ыуке уккеыкеыкеые', 'HILL`SSCIENCEPLAN.jpg', 100, 60),
(4, 'Felix Двойная Вкуснятина с рыбой', 'иыекеиыуеиыукеиыукие', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 120, 90),
(5, 'Gather Free Acres Chicken', 'Сухой органический корм для кошек с курицей', 'GatherFreeAcresChicken.jpg', 170, 140);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `title` varchar(25) NOT NULL,
  `padrent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `padrent`) VALUES
(1, 'Влажные корма', 0),
(2, 'Сухие корма', 0),
(3, 'Корма в банке', 0),
(4, 'Для кошек', 1),
(5, 'Для собак', 1),
(6, 'Для кошек', 2),
(7, 'Для собак', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_text` text NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `foto_home` varchar(100) NOT NULL,
  `Cena` int(10) NOT NULL,
  `per_kl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `name`, `foto_home`, `Cena`, `per_kl`) VALUES
(1, 'Забор', 'images/stroenia/11.jpg', 350, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `foto_home` varchar(50) NOT NULL,
  `Cena` varchar(15) NOT NULL,
  `per_kl` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homes`
--

INSERT INTO `homes` (`id`, `name`, `foto_home`, `Cena`, `per_kl`) VALUES
(1, 'Красный забор', 'zabor_k.jpg', '1750руб.', 1),
(2, 'Зеленый забор', 'zabor_z.jpeg', '750руб.', 1),
(3, 'Коричневый забор', 'zabor_korich.jpg', '2500руб.', 1),
(4, 'Гараж', 'garage.jpg', '75000руб.', 2),
(5, 'Колодец', 'kolodec.jpg', '150000руб.', 2),
(6, 'Беседка', 'besedka.jpg', '275000 руб.', 2),
(7, 'Дом 1 этажный', 'dom1itag.jpg', '1250000 руб.', 3),
(8, '2 этажный дом', '2itag_dom.jpg', '2850000 руб.', 3),
(9, 'Коттедж', 'katetg.jpg', '1550000 руб.', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `otzivi`
--

CREATE TABLE `otzivi` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `day` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otzivi`
--

INSERT INTO `otzivi` (`id`, `name`, `text`, `day`) VALUES
(1, 'Валера', 'Как ваши дела?', '05.11.18'),
(2, 'Инокентий', 'Я думаю компания будет расти', '10.11.18'),
(3, 'Пётр', 'Я хочу получить приз', '15.11.18'),
(5, 'Василий', 'Что будешь делать завтра?', '20.12.18'),
(6, 'Елена', 'Хм,а может купить домик за городом,чтобы там отдыхать?', '24.12.18'),
(9, 'Юлия', 'Как пройти в зеленую комнату?', '15.01.19'),
(14, 'Арсений', 'Я думаю заказать забор', '24.01.19'),
(16, 'Леонид', 'Я хочу преобрести домик', '24.01.19'),
(17, 'Аркадий', 'Я хочу что бы вы мне построили этот домик', '24.01.19');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `parent` int(3) NOT NULL,
  `content` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `sravnenie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `parent`, `content`, `image`, `price`, `sravnenie`) VALUES
(11, 'Sheba Classic', 4, 'sssss', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 12, 1),
(12, 'Sheba Mini', 4, 'swdqwd', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 10, 1),
(13, 'CESAR тушеная телятина с овощами', 5, 'dfhsdsfh', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 16, 3),
(14, 'Kitekat МЯСНОЙ ПИР', 6, 'agagasdg', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 20, 0),
(15, 'Royal Canin', 7, 'asdasdasdad', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 600, 0),
(8, 'Sheba Tuna And Salmon', 3, 'Tuna and Salmon in Gravy with superbly tasty even fussy cats cant resist.', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 98, 0),
(8, 'Sheba Tuna And Salmon', 3, 'Tuna and Salmon in Gravy with superbly tasty even fussy cats cant resist.', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 98, 0),
(9, 'CESAR тушеная говядина', 4, 'ывапвыапв пвыа пыва пваып ыва', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 36, 0),
(9, 'CESAR тушеная говядина', 4, 'ывапвыапв пвыа пыва пваып ыва', 'FelixДвойнаяВкуснятинаСрыбой.jpg', 36, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `prodyct`
--

CREATE TABLE `prodyct` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `cena` varchar(20) NOT NULL,
  `per kl` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prodyct`
--

INSERT INTO `prodyct` (`id`, `name`, `foto`, `cena`, `per kl`) VALUES
(1, 'Красный забор', 'zabor_k.jpg', '1750руб.', 1),
(2, 'Зеленый забор', 'zabor_z.jpeg', '750руб.', 1),
(3, 'Коричневый забор', 'zabor_korich.jpg', '2500руб.', 1),
(4, 'Гараж', 'garage.jpg', '75000руб.', 2),
(5, 'Колодец', 'kolodec.jpg', '150000руб.', 2),
(6, 'Беседка', 'besedka.jpg', '275000 руб.', 2),
(7, 'Дом 1 этажный', 'dom1itag.jpg', '1250000 руб.', 3),
(8, '2 этажный дом', '2itag_dom.jpg', '2850000 руб.', 3),
(9, 'Коттедж', 'katetg.jpg', '1550000 руб.', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Индексы таблицы `homes`
--
ALTER TABLE `homes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `otzivi`
--
ALTER TABLE `otzivi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prodyct`
--
ALTER TABLE `prodyct`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `otzivi`
--
ALTER TABLE `otzivi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
