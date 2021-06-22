-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2020 г., 13:29
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `medical`
--

-- --------------------------------------------------------

--
-- Структура таблицы `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `LFS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialization` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doctor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `record`
--

INSERT INTO `record` (`id`, `LFS`, `Phone`, `Email`, `Specialization`, `Doctor`, `Date`, `Time`, `Comment`) VALUES
(3, 'фывцауца', '89001234567', 'dwwavfdgdkl@yandex.ru', 'Гастроэнтерология', 'АЛЕСКЕРОВА Перване', '2020-12-06', '10:26:00', 'dsfdgfhngjmn f\r\nghfgh\r\ngf\r\nh\r\nr\r\nthrthh\r\nrtrhthrh\r\nrt\r\nh\r\nrt\r\nhr\r\nth\r\nh\r\nrthrtt'),
(5, 'asfsdgdfgdf', '89114567865', 'dsgdfgdf@mail.ru', 'Дерматология', 'АКИМОВА Светлана', '2020-12-04', '12:27:00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `type`) VALUES
(1, 'Медицинские абонементы ', 0),
(2, 'Анализы на дому ', 0),
(5, 'Вакцинация ', 0),
(6, 'Ведение беременности ', 0),
(7, 'Выездные сервисы', 0),
(8, 'Вызов врача на дом ', 0),
(9, 'Высокотехнологичная помощь ', 0),
(10, 'Госпитализация ', 0),
(11, 'Диагностика ', 0),
(12, 'Добровольное медицинское страхование', 0),
(13, 'Комплексные программы', 1),
(14, 'Консультация аллерголога онлайн', 1),
(15, 'Консультация дерматолога онлайн', 1),
(16, 'Консультация терапевта онлайн', 1),
(17, 'Консультация уролога онлайн', 1),
(18, 'Онлайн-консультация врача ', 1),
(19, 'ПЭТ-КТ по ОМС ', 1),
(20, 'Размещение на время обследования и лечения ', 1),
(21, 'Сестринский уход на дому ', 1),
(22, 'Скорая помощь ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `LFS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `LFS`, `Email`, `Login`, `Password`) VALUES
(3, 'sdgdfhfgh', 'afdsmfd@gmail.com', 'sjhfbsdkfbsdh', '$2y$10$buvBz2nkJuSr5TFIY9pNT.BYZjXbc2lrGlbx2BollxikylU.Zvgni'),
(4, 'admin admin admin', 'admin@gmail.com', 'admin', '$2y$10$IsimW.sJPplza7wckUx3ieouGhmIjfGwc/3cTRXJlI/PCNqyD.x7G'),
(5, 'dasdasd', 'adsdasdasd@test.ru', 'auf', '$2y$10$JixuXAk6oLvh53SRNhueU.HltJxeRNKaouTy9SWqSn3aw2oIZInXe'),
(6, 'sadadw', 'dsadasd@asdasd.com', 'dsadasd', '$2y$10$ZlG9E8AZaDdLFGynJIAaL.mFXyH50fs5NK7HijBZy9Nb9O7s/ZBuO'),
(10, 'dsfdgfhjknb', 'dgfhjkjbcnb@sgdf', 'dsfgjmcnb', '$2y$10$.lkUIUewhFJ5/zSYq4Hf2.zjyfC7FVEWEGnyDgsy6yzYXGERL1dmK'),
(11, 'dasdaw', 'dasdaw@gmail.com', 'adswwda', '$2y$10$L2l/wST8T0YQD6Mc9g9pae60K4JTzYaGmAXfg9iTo50/i7mOncR5K'),
(12, 'fdfgdfgdfgd', 'fdsgfdgfgs@fsdfsdg', 'fdfgdfgdfgd', '$2y$10$Q42FjuRWgSxbYO2ZOvgYc.3xbI/bTvQqBMT7JT8/acknaPZJ.B9S.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
