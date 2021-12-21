-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 12 2021 г., 22:15
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
-- База данных: `gai`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id_car` int(11) NOT NULL,
  `breeder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id_car`, `breeder`, `model`, `car_number`, `category`) VALUES
(46, 'BMW', 'i8', 'К158НЦ77', 'B'),
(47, 'BMW', 'x3', 'У187ЕК77', 'C'),
(48, 'lada', 'niva travel', 'Е789ПУ199', 'C'),
(49, 'Mercedes-Benz', 'W124', 'Н782ОН77', 'B');

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE `records` (
  `id_record` int(11) NOT NULL,
  `record_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `code_user` int(255) NOT NULL,
  `code_car` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id_record`, `record_address`, `datetime`, `code_user`, `code_car`) VALUES
(20, 'Улица:   Энергетик / Пирогова ул., Корп. 12, кв. 13  Город:   Братск  Штат / провинция / район:    Иркутская область', '2021-02-08 17:00:00', 28, 46),
(21, 'Улица:   ул. Комиссарова, корп. 33, кв. 55  Город:   Владимир  Штат / провинция / район:    Владимирская область', '2021-03-05 10:20:00', 28, 47),
(22, 'Улица:   Энергетик / Пирогова ул., Корп. 12, кв. 13  Город:   Братск  Штат / провинция / район:    Иркутская область', '2021-02-07 12:10:00', 25, 48),
(23, 'Улица:   ул. Комиссарова, корп. 33, кв. 55  Город:   Владимир  Штат / провинция / район:    Владимирская область', '2021-02-04 11:00:00', 25, 49);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_f_s` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `l_f_s`, `address`, `date_of_birth`, `phone`) VALUES
(1, 'admin@admin.com', '$2y$10$f7.0w05QxjYmtboVb06WnOimoqDunY2Z5UDNz4br3ZktcEpDPk0Wi', 'adminov admin adminovich', 'home                                  ', '0001-01-01', '87777777777'),
(23, 'gesgda@yandex.ru', '$2y$10$fu5qZQBTqa6OyMpF8NJZQ.WiX7fT7htZkwoBBapa5P/fXmKR6CwAK', 'Фадеев Мартын Николаевич', 'Улица:   Металлургов, корп. 72, кв. 56  Город:   Челябинск  Штат / провинция / район:    Челябинская область', '1989-12-11', '89254781236'),
(24, 'hefdsr@yandex.ru', '$2y$10$YiC.NQcHRRiioNDkPB3OOupk1w4xr7NRQh/SexA.39ddO2KY7q9Cy', 'Ершова Августа Михаиловна', 'Улица:   15 Квартал, корп. 2, кв. 21 год  Город:   Самара  Штат / провинция / район:    Самарская область', '1994-05-02', '89254588793'),
(25, 'misterjek@gmail.com', '$2y$10$/akALWyOW9H6POPcEygT4eKGSSEs.B966/bL0gdIsJODYOVL39ELK', 'Логинов Богдан Робертович', 'Улица: ул.   Соколова-Соколенка, д. 11, кв. 58  Город:   Владимир  Штат / провинция / район:    Владимирская область', '1997-06-12', '89005486785'),
(26, 'redasfw45@yandex.ru', '$2y$10$4hRm5fuEzjHluNHFBnd6MuN9SfE.BhZHMoIjuor414dCHV2UUbnIG', 'Сорокина Эжени Максимовна', 'Улица:   Невский пр., Д. 63/39, кв. 20  Город:   Санкт-Петербург  Штат / область / район:    Ленинградская область', '1995-09-04', '89421565448'),
(27, 'hdasdh@gmail.com', '$2y$10$53EwpXnINCRrcBDdYSXpUuBL6B.DDoatBI6iqh1XIDCKqg2F3B3cG', 'Силин Родион Станиславович', 'Улица:   В.Гнаровской, корп. 10, кв. 30  Город:   Тюмень  Штат / провинция / район:    Тюменская область', '1980-02-13', '89251151325'),
(28, 'terda@gmail.com', '$2y$10$aIoKa6vRS7EEtnQB04Q0yuKIV3pFwe31EHdZINtRgIBI38dlFDGG2', 'Большаков Назарий Тарасович', 'Улица:   ул. Парфенова, корп. 7, кв. 59  Город:   Петрозаводск  Штат / провинция / область:    Республика Карелия', '1989-05-04', '89631154844');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`);

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id_record`),
  ADD KEY `code_user` (`code_user`),
  ADD KEY `code_car` (`code_car`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `id_record` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`code_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`code_car`) REFERENCES `cars` (`id_car`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
