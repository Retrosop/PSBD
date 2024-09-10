-- --------------------------------------------------------
-- Хост:                         localhost
-- Версия сервера:               PostgreSQL 14.5, compiled by Visual C++ build 1914, 64-bit
-- Операционная система:         
-- HeidiSQL Версия:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица public.buyers
CREATE TABLE IF NOT EXISTS "buyers" (
	"id" INTEGER NOT NULL DEFAULT 'nextval(''buyers_id_seq''::regclass)',
	"name" VARCHAR(100) NOT NULL,
	"contact_info" VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY ("id")
);

-- Дамп данных таблицы public.buyers: -1 rows
/*!40000 ALTER TABLE "buyers" DISABLE KEYS */;
INSERT INTO "buyers" ("id", "name", "contact_info") VALUES
	(1, 'Покупатель 1', 'buyer1@example.com'),
	(2, 'Покупатель 2', 'buyer2@example.com'),
	(3, 'Покупатель 3', 'buyer3@example.com');
/*!40000 ALTER TABLE "buyers" ENABLE KEYS */;

-- Дамп структуры для таблица public.manufacturers
CREATE TABLE IF NOT EXISTS "manufacturers" (
	"id" INTEGER NOT NULL DEFAULT 'nextval(''manufacturers_id_seq''::regclass)',
	"name" VARCHAR(100) NOT NULL,
	"contact_info" VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY ("id")
);

-- Дамп данных таблицы public.manufacturers: 3 rows
/*!40000 ALTER TABLE "manufacturers" DISABLE KEYS */;
INSERT INTO "manufacturers" ("id", "name", "contact_info") VALUES
	(1, 'Изготовитель 1', 'contact1@example.com'),
	(2, 'Изготовитель 2', 'contact2@example.com'),
	(3, 'Изготовитель 3', 'contact3@example.com');
/*!40000 ALTER TABLE "manufacturers" ENABLE KEYS */;

-- Дамп структуры для таблица public.radio_parts
CREATE TABLE IF NOT EXISTS "radio_parts" (
	"id" INTEGER NOT NULL DEFAULT 'nextval(''radio_parts_id_seq''::regclass)',
	"part_name" VARCHAR(100) NOT NULL,
	"manufacturer_id" INTEGER NULL DEFAULT NULL,
	"seller_id" INTEGER NULL DEFAULT NULL,
	"buyer_id" INTEGER NULL DEFAULT NULL,
	"price" NUMERIC(10,2) NULL DEFAULT NULL,
	"purchase_date" DATE NULL DEFAULT NULL,
	PRIMARY KEY ("id"),
	CONSTRAINT "radio_parts_buyer_id_fkey" FOREIGN KEY ("buyer_id") REFERENCES "buyers" ("id") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "radio_parts_manufacturer_id_fkey" FOREIGN KEY ("manufacturer_id") REFERENCES "manufacturers" ("id") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "radio_parts_seller_id_fkey" FOREIGN KEY ("seller_id") REFERENCES "sellers" ("id") ON UPDATE NO ACTION ON DELETE NO ACTION
);

-- Дамп данных таблицы public.radio_parts: 3 rows
/*!40000 ALTER TABLE "radio_parts" DISABLE KEYS */;
INSERT INTO "radio_parts" ("id", "part_name", "manufacturer_id", "seller_id", "buyer_id", "price", "purchase_date") VALUES
	(1, 'Деталь 1', 1, 1, 1, 100.00, '2024-09-01'),
	(2, 'Деталь 2', 2, 2, 2, 150.50, '2024-09-02'),
	(3, 'Деталь 3', 3, 3, 3, 200.75, '2024-09-03');
/*!40000 ALTER TABLE "radio_parts" ENABLE KEYS */;

-- Дамп структуры для таблица public.sellers
CREATE TABLE IF NOT EXISTS "sellers" (
	"id" INTEGER NOT NULL DEFAULT 'nextval(''sellers_id_seq''::regclass)',
	"name" VARCHAR(100) NOT NULL,
	"contact_info" VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY ("id")
);

-- Дамп данных таблицы public.sellers: -1 rows
/*!40000 ALTER TABLE "sellers" DISABLE KEYS */;
INSERT INTO "sellers" ("id", "name", "contact_info") VALUES
	(1, 'Продавец 1', 'seller1@example.com'),
	(2, 'Продавец 2', 'seller2@example.com'),
	(3, 'Продавец 3', 'seller3@example.com');
/*!40000 ALTER TABLE "sellers" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
