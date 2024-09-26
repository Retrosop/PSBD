-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.26-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `test`;

-- Дамп структуры для таблица test.aviacompani
CREATE TABLE IF NOT EXISTS `aviacompani` (
  `cod` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nazvanie` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reis` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.aviacompani: ~0 rows (приблизительно)

-- Дамп структуры для таблица test.bilet
CREATE TABLE IF NOT EXISTS `bilet` (
  `№bileta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cod passazhira` int(11) DEFAULT NULL,
  `fio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reis` int(11) DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `put sledovaniya` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`№bileta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.bilet: ~0 rows (приблизительно)

-- Дамп структуры для таблица test.order
CREATE TABLE IF NOT EXISTS `order` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idorder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.order: ~4 rows (приблизительно)
INSERT INTO `order` (`name`, `enail`, `subject`, `body`, `idorder`) VALUES
	('jrtk,gjtr,kgrg', 'ththth', '56hyyth5hu65hy', '65h65', NULL),
	('jrtk,gjtr,kgrg', 'ththth', '56hyyth5hu65hy', '65h65', NULL),
	('erwer', 'werewr', 'rewr', 'ewrwer', NULL),
	('Екимова Яна Сергеевна', 'ekimovaayana@gmail.com', '21.09.2050', 'Победа', NULL);

-- Дамп структуры для таблица test.personal
CREATE TABLE IF NOT EXISTS `personal` (
  `codperson` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vozvrast` int(10) DEFAULT NULL,
  `dolzhnost` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codperson`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.personal: ~0 rows (приблизительно)

-- Дамп структуры для таблица test.Spec
CREATE TABLE IF NOT EXISTS `Spec` (
  `idspec` int(11) NOT NULL AUTO_INCREMENT,
  `gortur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iddelproesd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idpensioner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idspec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.Spec: ~0 rows (приблизительно)

-- Дамп структуры для таблица test.texobsl
CREATE TABLE IF NOT EXISTS `texobsl` (
  `№ TO` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `data` date DEFAULT NULL,
  `otvetstvennui` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`№ TO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.texobsl: ~0 rows (приблизительно)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
