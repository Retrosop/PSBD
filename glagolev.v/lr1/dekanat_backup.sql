-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               PostgreSQL 14.5, compiled by Visual C++ build 1914, 64-bit
-- Операционная система:         
-- HeidiSQL Версия:              12.7.0.6885
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица public.certificates
CREATE TABLE IF NOT EXISTS "certificates" (
	"certificate_id" SERIAL NOT NULL,
	"student_id" INTEGER NULL DEFAULT NULL,
	"issue_date" DATE NOT NULL,
	"certificate_type" VARCHAR(100) NOT NULL,
	CONSTRAINT "certificates_student_id_fkey" FOREIGN KEY ("student_id") REFERENCES "students" ("student_id") ON UPDATE NO ACTION ON DELETE NO ACTION
);
CREATE PRIMARY INDEX "certificates_pkey" ON "" ("certificate_id");;

-- Дамп данных таблицы public.certificates: -1 rows
/*!40000 ALTER TABLE "certificates" DISABLE KEYS */;
/*!40000 ALTER TABLE "certificates" ENABLE KEYS */;

-- Дамп структуры для таблица public.grades
CREATE TABLE IF NOT EXISTS "grades" (
	"grade_id" SERIAL NOT NULL,
	"student_id" INTEGER NULL DEFAULT NULL,
	"subject_id" INTEGER NULL DEFAULT NULL,
	"grade" INTEGER NULL DEFAULT NULL,
	"semester" INTEGER NOT NULL,
	CONSTRAINT "grades_student_id_fkey" FOREIGN KEY ("student_id") REFERENCES "students" ("student_id") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "grades_subject_id_fkey" FOREIGN KEY ("subject_id") REFERENCES "subjects" ("subject_id") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "grades_grade_check" CHECK ((((grade >= 2) AND (grade <= 5))))
);
CREATE PRIMARY INDEX "grades_pkey" ON "" ("grade_id");;

-- Дамп данных таблицы public.grades: -1 rows
/*!40000 ALTER TABLE "grades" DISABLE KEYS */;
/*!40000 ALTER TABLE "grades" ENABLE KEYS */;

-- Дамп структуры для таблица public.groups
CREATE TABLE IF NOT EXISTS "groups" (
	"group_id" SERIAL NOT NULL,
	"group_name" VARCHAR(100) NOT NULL
);
CREATE PRIMARY INDEX "groups_pkey" ON "" ("group_id");;

-- Дамп данных таблицы public.groups: -1 rows
/*!40000 ALTER TABLE "groups" DISABLE KEYS */;
INSERT INTO "groups" ("group_id", "group_name") VALUES
	(1, '1711');
/*!40000 ALTER TABLE "groups" ENABLE KEYS */;

-- Дамп структуры для таблица public.payments
CREATE TABLE IF NOT EXISTS "payments" (
	"payment_id" SERIAL NOT NULL,
	"student_id" INTEGER NULL DEFAULT NULL,
	"amount" NUMERIC(10,2) NOT NULL,
	"payment_date" DATE NOT NULL,
	"is_paid" BOOLEAN NULL DEFAULT false,
	CONSTRAINT "payments_student_id_fkey" FOREIGN KEY ("student_id") REFERENCES "students" ("student_id") ON UPDATE NO ACTION ON DELETE NO ACTION
);
CREATE PRIMARY INDEX "payments_pkey" ON "" ("payment_id");;

-- Дамп данных таблицы public.payments: -1 rows
/*!40000 ALTER TABLE "payments" DISABLE KEYS */;
/*!40000 ALTER TABLE "payments" ENABLE KEYS */;

-- Дамп структуры для таблица public.students
CREATE TABLE IF NOT EXISTS "students" (
	"student_id" SERIAL NOT NULL,
	"first_name" VARCHAR(50) NOT NULL,
	"last_name" VARCHAR(50) NOT NULL,
	"group_id" INTEGER NULL DEFAULT NULL,
	"date_of_birth" DATE NULL DEFAULT NULL,
	CONSTRAINT "students_group_id_fkey" FOREIGN KEY ("group_id") REFERENCES "groups" ("group_id") ON UPDATE NO ACTION ON DELETE NO ACTION
);
CREATE PRIMARY INDEX "students_pkey" ON "" ("student_id");;

-- Дамп данных таблицы public.students: -1 rows
/*!40000 ALTER TABLE "students" DISABLE KEYS */;
INSERT INTO "students" ("student_id", "first_name", "last_name", "group_id", "date_of_birth") VALUES
	(2, 'Иванов', 'Иван', 1, '2000-01-20');
/*!40000 ALTER TABLE "students" ENABLE KEYS */;

-- Дамп структуры для таблица public.subjects
CREATE TABLE IF NOT EXISTS "subjects" (
	"subject_id" SERIAL NOT NULL,
	"subject_name" VARCHAR(100) NOT NULL
);
CREATE PRIMARY INDEX "subjects_pkey" ON "" ("subject_id");;

-- Дамп данных таблицы public.subjects: -1 rows
/*!40000 ALTER TABLE "subjects" DISABLE KEYS */;
INSERT INTO "subjects" ("subject_id", "subject_name") VALUES
	(1, 'Базы даннных');
/*!40000 ALTER TABLE "subjects" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
