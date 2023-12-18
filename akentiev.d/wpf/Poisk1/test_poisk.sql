-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2023 г., 15:19
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_poisk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1702884513),
('m231218_064111_create_test_table', 1702884522),
('m231218_070712_insert_data_into_test_table', 1702884522);

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id_works` int NOT NULL,
  `id_student` int DEFAULT NULL,
  `id_sotrudnik` varchar(256) DEFAULT NULL,
  `id_specialty` varchar(256) DEFAULT NULL,
  `id_podpis` varchar(256) DEFAULT NULL,
  `datez` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `typew` varchar(256) DEFAULT NULL,
  `ozenka` varchar(256) DEFAULT NULL,
  `mycheckwork` varchar(256) DEFAULT NULL,
  `docmycheckwork` varchar(256) DEFAULT NULL,
  `intercheckwork` varchar(256) DEFAULT NULL,
  `docintercheckwork` varchar(256) DEFAULT NULL,
  `publicwork` varchar(256) DEFAULT NULL,
  `filework` varchar(256) DEFAULT NULL,
  `statuswork` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id_works`, `id_student`, `id_sotrudnik`, `id_specialty`, `id_podpis`, `datez`, `name`, `status`, `typew`, `ozenka`, `mycheckwork`, `docmycheckwork`, `intercheckwork`, `docintercheckwork`, `publicwork`, `filework`, `statuswork`) VALUES
(1, 1, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '80', NULL, NULL, NULL, '5', 'Файл1', 'Статус1'),
(2, 2, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '80', NULL, NULL, NULL, '5', 'Файл1', 'Статус1'),
(3, 3, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '80', NULL, NULL, NULL, '5', 'Файл1', 'Статус1'),
(4, 4, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '80', NULL, NULL, NULL, '5', 'Файл1', 'Статус1'),
(5, 5, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '80', NULL, NULL, NULL, '5', 'Файл1', 'Статус1'),
(6, 6, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '80', NULL, NULL, NULL, '5', 'Файл1', 'Статус1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id_works`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id_works` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
