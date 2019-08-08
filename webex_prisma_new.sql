-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 08 2019 г., 04:33
-- Версия сервера: 5.6.41-84.1
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `webex_prisma_new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cv`
--

CREATE TABLE `cv` (
  `id` int(10) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `doc_cv` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cv`
--

INSERT INTO `cv` (`id`, `job_type`, `title`, `name`, `email`, `doc_cv`) VALUES
(1, 'intern', 'Super Visor2 / Intern', 'armine', 'armsaq@yahoo.com', 'cv/02522a2b2726fb0a03bb19f2d8d9524d.jpeg'),
(2, 'job', 'Designer', 'Designer', 'admin@mail.ru', 'cv/c51ce410c124a10e0db5e4b97fc2af39.jpg'),
(3, 'job', 'Designer', 'Designer', 'admin@mail.ru', 'cv/1ce927f875864094e3906a4a0b5ece68.jpg'),
(4, 'intern', 'Super Visor2 / Intern', 'armine', 'user@mail.ru', 'cv/51d92be1c60d1db1d2e5e7a07da55b26.jpg'),
(5, 'intern', 'Super Visor2 / Intern', 'armine', 'user@mail.ru', 'cv/0584ce565c824b7b7f50282d9a19945b.jpg'),
(6, 'intern', 'Super Visor  / Intership', 'Designer', 'admin@mail.ru', 'cv/847cc55b7032108eee6dd897f3bca8a5.jpg'),
(7, 'job', 'Designer', 'Designer', 'user@mail.ru', 'cv/d4c2e4a3297fe25a71d030b67eb83bfc.jpg'),
(8, 'job', 'Designer', 'Designer', 'user@mail.ru', 'cv/b337e84de8752b27eda3a12363109e80.jpg'),
(9, 'job', 'Designer', 'Designer', 'user@mail.ru', 'cv/9188905e74c28e489b44e954ec0b9bca.jpeg'),
(10, 'intern', 'Super Visor2 / Intern', 'armine', 'user@mail.ru', 'cv/9be40cee5b0eee1462c82c6964087ff9.jpg'),
(11, 'job', 'Designer', 'Designer', 'user@mail.ru', 'cv/b5dc4e5d9b495d0196f61d45b26ef33e.docx'),
(12, 'intern', 'Super Visor  / Intership', 'armine', 'user@mail.ru', 'cv/6855456e2fe46a9d49d3d3af4f57443d.jpg'),
(13, 'job', 'Designer', 'Designer', 'user@mail.ru', 'cv/d1f491a404d6854880943e5c3cd9ca25.jpg'),
(14, 'intern', 'Super Visor2 / Intern', 'armine', 'armsaq@yahoo.com', 'cv/5ea1649a31336092c05438df996a3e59.docx'),
(15, 'job', 'Designer', 'armine', 'user@mail.ru', 'cv/2e65f2f2fdaf6c699b223c61b1b5ab89.jpeg'),
(16, 'job', 'Designer', 'armine', 'armsaq@yahoo.com', 'cv/76dc611d6ebaafc66cc0879c71b5db5c.docx'),
(17, 'job', 'Designer', 'armine', 'armsaq@yahoo.com', 'cv/430c3626b879b4005d41b8a46172e0c0.docx');

-- --------------------------------------------------------

--
-- Структура таблицы `intern_arm`
--

CREATE TABLE `intern_arm` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `intern_arm`
--

INSERT INTO `intern_arm` (`id`, `title`, `descr`) VALUES
(1, 'Designer / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(2, 'Photogrophy  / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(3, 'Super Visor  / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(4, 'Super Visor2 / Intern', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.');

-- --------------------------------------------------------

--
-- Структура таблицы `intern_eng`
--

CREATE TABLE `intern_eng` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `intern_eng`
--

INSERT INTO `intern_eng` (`id`, `title`, `descr`) VALUES
(1, 'Designer / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(2, 'Photogrophy  / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(3, 'Super Visor  / Intership', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(4, 'Super Visor2 / Intern', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.');

-- --------------------------------------------------------

--
-- Структура таблицы `jobs_arm`
--

CREATE TABLE `jobs_arm` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jobs_arm`
--

INSERT INTO `jobs_arm` (`id`, `title`, `descr`) VALUES
(1, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(3, 'Super Visor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(4, 'Super Visor 333', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(5, 'Super Visor 333', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(6, 'Super Visor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(7, 'Super Vis', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(8, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(9, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.');

-- --------------------------------------------------------

--
-- Структура таблицы `jobs_eng`
--

CREATE TABLE `jobs_eng` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jobs_eng`
--

INSERT INTO `jobs_eng` (`id`, `title`, `descr`) VALUES
(1, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(3, 'Super Visor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(4, 'Super Visor 333', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(5, 'Super Visor 333', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(6, 'Super Visor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(7, 'Super Vis', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(8, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.'),
(9, 'Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.');

-- --------------------------------------------------------

--
-- Структура таблицы `news_arm`
--

CREATE TABLE `news_arm` (
  `id` int(10) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_arm`
--

INSERT INTO `news_arm` (`id`, `title`, `text`, `date`) VALUES
(1, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:52'),
(2, 'Post2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:52'),
(3, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(4, 'Post4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(5, 'Post4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(6, '', '<p>&nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&nbsp;<img alt=\"\" src=\"../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg\" style=\"height:100px; width:100px\" /></p>\n', '2019-07-27 14:50:30'),
(7, '', '<p>&nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&nbsp;<img alt=\"\" src=\"../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg\" style=\"height:100px; width:100px\" /></p>\n', '2019-07-27 14:50:36'),
(8, 'Փոստ համար 6', '<p>&lt;p&gt;&amp;nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg&quot; style=&quot;height:100px; width:100px&quot; /&gt;&lt;/p&gt;</p>\n', '2019-07-27 14:52:06'),
(9, 'Փոստ համար 6', '<p>&lt;p&gt;&amp;nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg&quot; style=&quot;height:100px; width:100px&quot; /&gt;&lt;/p&gt;</p>\n', '2019-07-27 14:58:14'),
(12, 'מה זה Lorem Ipsum', '<h2 style=\"font-style:italic;\">Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only <strong>five centuries, but also t</strong>he leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips<br />\n<br />\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips</h2>\n\n<p><img alt=\"\" src=\"../../images/uploads/c0f168ce8900fa56e57789e2a2f2c9d0.jpeg\" style=\"height:100px; width:100px\" />..desktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />\nversions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions of</p>\n', '2019-07-27 15:25:29');

-- --------------------------------------------------------

--
-- Структура таблицы `news_eng`
--

CREATE TABLE `news_eng` (
  `id` int(10) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_eng`
--

INSERT INTO `news_eng` (`id`, `title`, `text`, `date`) VALUES
(1, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:52'),
(2, 'Post2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:52'),
(3, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(4, 'Post4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(5, 'Post4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.', '2019-07-19 09:53:57'),
(6, '', '<p>&nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&nbsp;<img alt=\"\" src=\"../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg\" style=\"height:100px; width:100px\" /></p>\n', '2019-07-27 14:50:30'),
(7, '', '<p>&nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&nbsp;<img alt=\"\" src=\"../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg\" style=\"height:100px; width:100px\" /></p>\n', '2019-07-27 14:50:36'),
(8, 'Փոստ համար 6', '<p>&lt;p&gt;&amp;nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg&quot; style=&quot;height:100px; width:100px&quot; /&gt;&lt;/p&gt;</p>\n', '2019-07-27 14:52:06'),
(9, 'Փոստ համար 6', '<p>&lt;p&gt;&amp;nbsp;type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&amp;nbsp;&lt;img alt=&quot;&quot; src=&quot;../images/uploads/3a0772443a0739141292a5429b952fe6.jpeg&quot; style=&quot;height:100px; width:100px&quot; /&gt;&lt;/p&gt;</p>\n', '2019-07-27 14:58:14'),
(12, 'מה זה Lorem Ipsum', '<h2 style=\"font-style:italic;\">Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only <strong>five centuries, but also t</strong>he leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips<br />\n<br />\nLorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips</h2>\n\n<p><img alt=\"\" src=\"../../images/uploads/c0f168ce8900fa56e57789e2a2f2c9d0.jpeg\" style=\"height:100px; width:100px\" />..desktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />\nversions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions ofdesktop publishing software like Aldus PageMaker including versions of</p>\n', '2019-07-27 15:25:29');

-- --------------------------------------------------------

--
-- Структура таблицы `news_img`
--

CREATE TABLE `news_img` (
  `id` int(10) NOT NULL,
  `news_id` int(10) NOT NULL,
  `front_img1` varchar(500) NOT NULL,
  `front_img2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_img`
--

INSERT INTO `news_img` (`id`, `news_id`, `front_img1`, `front_img2`) VALUES
(1, 1, 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(2, 2, 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(3, 6, 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(4, 4, 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg', 'https://admissions.aua.am/files/2018/09/0R8A1260-300x200.jpg'),
(7, 12, 'images/uploads/087408522c31eeb1f982bc0eaf81d35f.jpg', 'images/uploads/c0f168ce8900fa56e57789e2a2f2c9d0.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `parnters`
--

CREATE TABLE `parnters` (
  `id` int(10) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `parnters`
--

INSERT INTO `parnters` (`id`, `img`) VALUES
(1, 'images/partners/1.png'),
(2, 'images/partners/2.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `intern_arm`
--
ALTER TABLE `intern_arm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `intern_eng`
--
ALTER TABLE `intern_eng`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jobs_arm`
--
ALTER TABLE `jobs_arm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jobs_eng`
--
ALTER TABLE `jobs_eng`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_arm`
--
ALTER TABLE `news_arm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_eng`
--
ALTER TABLE `news_eng`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_img`
--
ALTER TABLE `news_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parnters`
--
ALTER TABLE `parnters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `intern_arm`
--
ALTER TABLE `intern_arm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `intern_eng`
--
ALTER TABLE `intern_eng`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `jobs_arm`
--
ALTER TABLE `jobs_arm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `jobs_eng`
--
ALTER TABLE `jobs_eng`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `news_arm`
--
ALTER TABLE `news_arm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `news_eng`
--
ALTER TABLE `news_eng`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `news_img`
--
ALTER TABLE `news_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `parnters`
--
ALTER TABLE `parnters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
