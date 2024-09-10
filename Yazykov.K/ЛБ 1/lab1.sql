-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.19 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных учет_оборудования
CREATE DATABASE IF NOT EXISTS `учет_оборудования` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `учет_оборудования`;

-- Дамп структуры для таблица учет_оборудования.кафедра
CREATE TABLE IF NOT EXISTS `кафедра` (
  `id_kaf` int NOT NULL AUTO_INCREMENT,
  `fam` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kaf`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы учет_оборудования.кафедра: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `кафедра` DISABLE KEYS */;
INSERT INTO `кафедра` (`id_kaf`, `fam`, `name`) VALUES
	(1, 'Иванов', 'Кафедра информатики'),
	(2, 'Петров', 'Кафедра математики'),
	(3, 'Сидоров', 'Кафедра физики'),
	(4, 'Кузнецов', 'Кафедра химии');
/*!40000 ALTER TABLE `кафедра` ENABLE KEYS */;

-- Дамп структуры для таблица учет_оборудования.материально_ответственный
CREATE TABLE IF NOT EXISTS `материально_ответственный` (
  `id_otv` int NOT NULL AUTO_INCREMENT,
  `name_otv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_otv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы учет_оборудования.материально_ответственный: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `материально_ответственный` DISABLE KEYS */;
INSERT INTO `материально_ответственный` (`id_otv`, `name_otv`) VALUES
	(1, 'Алексей Смирнов'),
	(2, 'Мария Иванова'),
	(3, 'Дмитрий Ковалев'),
	(4, 'Елена Петрова');
/*!40000 ALTER TABLE `материально_ответственный` ENABLE KEYS */;

-- Дамп структуры для таблица учет_оборудования.оборудование
CREATE TABLE IF NOT EXISTS `оборудование` (
  `id_obo` int NOT NULL AUTO_INCREMENT,
  `object` varchar(255) DEFAULT NULL,
  `kol` int DEFAULT NULL,
  PRIMARY KEY (`id_obo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы учет_оборудования.оборудование: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `оборудование` DISABLE KEYS */;
INSERT INTO `оборудование` (`id_obo`, `object`, `kol`) VALUES
	(1, 'Проектор', 5),
	(2, 'Компьютер', 10),
	(3, 'Принтер', 3),
	(4, 'Сканер', 2);
/*!40000 ALTER TABLE `оборудование` ENABLE KEYS */;

-- Дамп структуры для таблица учет_оборудования.помещение
CREATE TABLE IF NOT EXISTS `помещение` (
  `id_pom` int NOT NULL AUTO_INCREMENT,
  `number` int DEFAULT NULL,
  PRIMARY KEY (`id_pom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы учет_оборудования.помещение: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `помещение` DISABLE KEYS */;
INSERT INTO `помещение` (`id_pom`, `number`) VALUES
	(1, 101),
	(2, 102),
	(3, 103),
	(4, 104);
/*!40000 ALTER TABLE `помещение` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
