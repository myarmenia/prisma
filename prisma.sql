-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 20 2019 г., 17:09
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
-- База данных: `prisma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cv`
--

CREATE TABLE `cv` (
  `id` int(10) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `intern`
--

CREATE TABLE `intern` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `intern`
--

INSERT INTO `intern` (`id`, `title`, `descr`) VALUES
(1, 'Designer / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(2, 'Photogrophy  / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(3, 'Super Visor  / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(4, 'Super Visor2 / Intern', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.');

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `descr`) VALUES
(1, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(2, 'Photogrophy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(3, 'Super Visor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(4, 'Super Visor 333', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`) VALUES
(1, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:52'),
(2, 'Post2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:52'),
(3, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(4, 'Post4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57');

-- --------------------------------------------------------

--
-- Структура таблицы `news_img`
--

CREATE TABLE `news_img` (
  `id` int(10) NOT NULL,
  `news_id` int(10) NOT NULL,
  `img` varchar(500) NOT NULL,
  `front_img1` varchar(500) NOT NULL,
  `front_img2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_img`
--

INSERT INTO `news_img` (`id`, `news_id`, `img`, `front_img1`, `front_img2`) VALUES
(1, 1, 'http://themes.semicolonweb.com/html/canvas/images/blog/full/17.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(2, 2, 'http://themes.semicolonweb.com/html/canvas/images/blog/full/17.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(3, 3, 'http://themes.semicolonweb.com/html/canvas/images/blog/full/17.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(4, 4, 'http://themes.semicolonweb.com/html/canvas/images/blog/full/17.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_img`
--
ALTER TABLE `news_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `intern`
--
ALTER TABLE `intern`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news_img`
--
ALTER TABLE `news_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
