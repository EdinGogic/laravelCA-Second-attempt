-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laravelproject
DROP DATABASE IF EXISTS `laravelproject`;
CREATE DATABASE IF NOT EXISTS `laravelproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `laravelproject`;

-- Dumping structure for table laravelproject.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table laravelproject.category: ~4 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Shoes', NULL, NULL, NULL),
	(2, 'Clothes', NULL, NULL, NULL),
	(3, 'Accessories', NULL, NULL, NULL),
	(4, 'Hats', NULL, NULL, NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table laravelproject.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelproject.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravelproject.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelproject.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_05_02_135009_create_posts_table', 1),
	(5, '2020_05_02_203054_create_likes_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravelproject.orderdetail
DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productid` (`productid`),
  KEY `orderid` (`orderid`),
  CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `scorders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table laravelproject.orderdetail: ~8 rows (approximately)
/*!40000 ALTER TABLE `orderdetail` DISABLE KEYS */;
INSERT INTO `orderdetail` (`id`, `productid`, `orderid`, `quantity`, `address`, `created_at`, `updated_at`, `deleted_at`, `name`) VALUES
	(45, NULL, NULL, NULL, ' Springlawn Heights', '2020-05-03 23:55:45', '2020-05-03 23:55:45', NULL, 'Edin Gogic'),
	(46, NULL, NULL, NULL, 'Blanchardstown, Dublin', '2020-05-04 00:01:26', '2020-05-04 00:01:26', NULL, 'John Joe'),
	(47, NULL, NULL, NULL, '18 RoadVille Drive', '2020-05-04 00:09:48', '2020-05-04 00:09:48', NULL, 'Gavin Byrne'),
	(48, NULL, NULL, NULL, 'Kildare Street', '2020-05-04 00:34:55', '2020-05-04 00:34:55', NULL, 'Amy Joel'),
	(49, NULL, NULL, NULL, '18 RoadVille Drive', '2020-05-04 00:46:29', '2020-05-04 00:46:29', NULL, 'Test Account'),
	(50, NULL, NULL, NULL, 'Demo 123', '2020-05-06 19:34:41', '2020-05-06 19:34:41', NULL, 'Edin Demo'),
	(51, NULL, NULL, NULL, 'demo2@two.ie', '2020-05-06 20:03:28', '2020-05-06 20:03:28', NULL, 'Demo TWO'),
	(52, NULL, NULL, NULL, 'Demo 123 demo street', '2020-05-06 20:07:06', '2020-05-06 20:07:06', NULL, 'Demo three');
/*!40000 ALTER TABLE `orderdetail` ENABLE KEYS */;

-- Dumping structure for table laravelproject.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelproject.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravelproject.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelproject.posts: ~17 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `body`, `user_id`) VALUES
	(1, '2020-05-02 14:32:34', '2020-05-02 14:32:34', 'ff', 1),
	(2, '2020-05-02 14:32:57', '2020-05-02 14:32:57', 'Hello World', 1),
	(3, '2020-05-02 15:24:26', '2020-05-02 15:24:26', 'Hi', 1),
	(4, '2020-05-02 15:24:40', '2020-05-02 15:24:40', 'f', 1),
	(5, '2020-05-02 15:33:26', '2020-05-02 15:33:26', 'f', 1),
	(6, '2020-05-02 16:42:55', '2020-05-02 16:42:55', 'Test post 6!', 1),
	(7, '2020-05-02 20:00:21', '2020-05-02 20:00:21', 'Hello', 1),
	(8, '2020-05-03 12:24:46', '2020-05-03 12:24:46', 'New Post!', 1),
	(9, '2020-05-03 15:13:53', '2020-05-03 15:13:53', 'hi', 1),
	(10, '2020-05-03 15:29:36', '2020-05-03 15:29:36', 'l', 1),
	(11, '2020-05-03 16:09:50', '2020-05-03 16:09:50', 'ji', 1),
	(12, '2020-05-03 16:19:23', '2020-05-03 16:19:23', 'This is a final test post for the Community posts feed', 1),
	(13, '2020-05-03 16:26:00', '2020-05-03 16:26:00', 'Hey I\'m test', 2),
	(14, '2020-05-04 00:10:39', '2020-05-04 00:10:39', 'I\'m finally finished the project!', 2),
	(15, '2020-05-04 00:43:43', '2020-05-04 00:43:43', 'Final Post', 4),
	(16, '2020-05-06 19:38:51', '2020-05-06 19:38:51', 'Just added new product @ 2 euro', 5),
	(17, '2020-05-06 20:13:08', '2020-05-06 20:13:08', 'Example', 6);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table laravelproject.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `description` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `colour` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `price` decimal(18,3) DEFAULT NULL,
  `image` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table laravelproject.product: ~5 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `description`, `colour`, `price`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(18, 'Nike Revolution demo', 'Running Shoes', 'Black', 75.000, 'black.jpeg', '2020-05-04 00:06:20', '2020-05-06 19:37:35', NULL),
	(20, 'Nike Cha', 'Trainers', 'Grey', 75.000, 'grey.jpeg', '2020-05-04 00:07:02', '2020-05-04 00:07:02', NULL),
	(21, 'Nike Demo', 'Football Boots', 'Pink', 65.000, 'pink.jpeg', '2020-05-04 00:07:36', '2020-05-06 20:12:25', NULL),
	(22, 'Nike 270', 'Trainers', 'Red', 95.000, 'red.jpeg', '2020-05-04 00:07:55', '2020-05-04 00:07:55', NULL),
	(24, 'T-Shirt', 'Running Shoes', 'Blue', 3.000, 'black.jpeg', '2020-05-06 20:12:41', '2020-05-06 20:12:41', NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table laravelproject.scorders
DROP TABLE IF EXISTS `scorders`;
CREATE TABLE IF NOT EXISTS `scorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_bin DEFAULT NULL,
  `orderdate` datetime DEFAULT NULL,
  `deliverystreet` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `deliverycity` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `deliverycounty` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `ordertotal` decimal(18,3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `productid` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table laravelproject.scorders: ~0 rows (approximately)
/*!40000 ALTER TABLE `scorders` DISABLE KEYS */;
/*!40000 ALTER TABLE `scorders` ENABLE KEYS */;

-- Dumping structure for table laravelproject.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelproject.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Edin Gogic', 'edingogic97@gmail.com', NULL, '$2y$10$UNLFCh/L4rXJVd2u0aSjreI1m6p/PexKsVnqo5ZIH5Jw0aul5tcCq', 'UzBwTc0TJf3iIziZCndqHVrEal0uFFd9dBbt3LHALxGuPygrurNsT3qF1Pac', '2020-05-02 14:25:10', '2020-05-02 14:25:10'),
	(2, 'Test', 'test@test.ie', NULL, '$2y$10$j2jhvOcVFjDERVk9XibWfOj.JRNZgb2qt6Xrfu6lBf1ZzI4XmI5TW', NULL, '2020-05-03 16:25:37', '2020-05-03 16:25:37'),
	(3, 'James Kelly', 'james@kelly.ie', NULL, '$2y$10$/7oa8MTxEA8DJlG6gtxJtOh4xOR67o2dFaWuevLVU9q9nLKor74Ne', NULL, '2020-05-04 00:36:07', '2020-05-04 00:36:07'),
	(4, 'Lara Dunne', 'lara@dunne.ie', NULL, '$2y$10$qXEmpGumotrub5lTdtfoKubWc79bwc1bemyeLAMhroSzeRG/3zdZq', NULL, '2020-05-04 00:36:25', '2020-05-04 00:36:25'),
	(5, 'Demo Account', 'Demo@demo.ie', NULL, '$2y$10$Oc6o2OZ02p9k8JnvoFCZXeEuTo5vnGsYcbUPlmYfYxpoyi5mIUCkm', NULL, '2020-05-06 19:35:23', '2020-05-06 19:35:23'),
	(6, 'demothree', 'dem3@dem.ie', NULL, '$2y$10$RxTupViVmLXc64PIn/49e.XjelTf6KKQm/Rl0iRz2YNz/kZ5sKD06', NULL, '2020-05-06 20:07:31', '2020-05-06 20:07:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
