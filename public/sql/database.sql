-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: zuscoffee
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Dr. Jayne Schoen I','admin@admin.com',NULL,'$2y$10$6Uzt0Z8VdQ0y0LlY8QYfJuC5mmQPlpgM1YOPPA/CPPT6Kk4vl2wMW','tI3Zz2tsM1p6oTYUoxT9BH6yayZne2uBTXlvnA4fkO2lydSlK0tW0DlFVxBI','2021-10-11 12:35:04','2021-10-11 12:35:04');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_10_10_141348_create_admins_table',1),(6,'2021_10_10_163614_create_products_table',1),(7,'2021_10_10_183338_create_settings_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Zus Signature Gula Melaka Milo','uploads/8se8jZADhdSidWY3OJ9m9OKx70em23xUH9NWQGg2.jpg',10.99,'Zus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka MiloZus Signature Gula Melaka Milo',1,'2021-10-11 12:36:22','2021-10-11 12:36:22'),(2,'Sunshine','uploads/h2RIBKM1VZ78wjPfEbJ1XfJUjYuS4JwyStT4GrKf.png',9.99,'SunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshineSunshine SunshineSunshineSunshineSunshineSunshineSunshineSunshine',1,'2021-10-11 12:37:33','2021-10-11 12:37:37'),(3,'Thunder','uploads/p2c6JDxa6bvzhpRBECjfhkyerExYdXKfwZHE1Dqa.png',9.99,'ThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunderThunder!!!!!!!!!!!\r\nThunderThunderThunderThunderThunderThunderThunderThunder',1,'2021-10-11 12:37:56','2021-10-11 12:37:56'),(4,'Gula Melaka','uploads/7qpb8CnduWRHFJYcsvkZtOurMB7z6x0lwV7bm9I3.png',12.99,'Gula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula Melaka  Gula MelakaGula MelakaGula MelakaGula MelakaGula MelakaGula Melaka.........Gula MelakaGula MelakaGula MelakaGula MelakaGula Melaka,,,,,,,,,,~~Gula MelakaGula Melaka!@#$',1,'2021-10-11 12:40:18','2021-10-11 12:40:18'),(5,'No image',NULL,5.99,'!@##$#$%$%^%^&^&*&*((*<>?:\"{P}QEasdsad4545646830',1,'2021-10-11 12:40:40','2021-10-11 12:40:40'),(6,'Matcha','uploads/1xI4Tvef18kfY2GkUDffeSwPjrNjTQrPk63lxUHk.webp',12.99,'MatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatchaMatcha',1,'2021-10-11 12:41:35','2021-10-11 12:41:35'),(7,'Ice Chocolate','uploads/gyzO1IbHXoQGSbEt2tO8SHQCoUq5Va63LPc2DgIg.png',10.99,'Ice ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce ChocolateIce Chocolateedit',1,'2021-10-11 12:42:17','2021-10-11 12:42:37'),(8,'Ice Tea','uploads/UlqRrGWDjqP0AO5FmxXDzjQ8P6cvIXIGPdqcaA1N.png',10.99,'Ice TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce TeaIce Tea',1,'2021-10-11 12:43:24','2021-10-11 12:43:24'),(9,'test','uploads/fsPNcU7ZE8ZBMBfoSwHnSxWueh9eVYNLThCFzbzH.png',99999999.00,'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest',0,'2021-10-11 12:52:48','2021-10-11 12:53:27');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'SOO PENG KIAT','kiat080199@gmail.com',NULL,'$2y$10$qAur1LVT4rDqZtivyxmUiuESC6KkAt8O00I8kTS15IwgbWu2YHVcW','+60167936077','J-2-1, 280 Park Homes, Jalan Prima Utama 3, Taman Puchong Prima., 280 Park Homes','user',NULL,'2021-10-11 12:43:54','2021-10-11 12:43:54'),(2,'second','kiat0888880199@gmail.com',NULL,'$2y$10$BwjV0uKb38Jy1226Hz60g.ZVMSN0FKgTHOX24AILmNcxaJ4G3Q8BG','+60167936077','J-2-1, 280 Park Homes, Jalan Prima Utama 3, Taman Puchong Prima., 280 Park Homes','user',NULL,'2021-10-11 12:44:22','2021-10-11 12:44:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-12  5:12:15
