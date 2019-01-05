# ************************************************************
# Sequel Pro SQL dump
# Version 481
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: messenger
# Generation Time: 2019-01-05 10:14:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table lexx_messages
# ------------------------------------------------------------

CREATE TABLE `lexx_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table lexx_participants
# ------------------------------------------------------------

CREATE TABLE `lexx_participants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table lexx_threads
# ------------------------------------------------------------

CREATE TABLE `lexx_threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `starred` tinyint(1) NOT NULL DEFAULT '0',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Unique slug for social media sharing. MD5 hashed string',
  `max_participants` int(11) DEFAULT NULL COMMENT 'Max number of participants allowed',
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Profile picture for the conversation',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(9,'2014_10_12_000000_create_users_table',1),
	(10,'2014_10_12_100000_create_password_resets_table',1),
	(11,'2017_11_08_063801_create_threads_table',1),
	(12,'2017_11_08_063907_create_messages_table',1),
	(13,'2017_11_08_063923_create_participants_table',1),
	(14,'2017_11_08_063956_add_softdeletes_to_participants_table',1),
	(15,'2017_11_08_064015_add_softdeletes_to_threads_table',1),
	(16,'2017_11_08_064031_add_softdeletes_to_messages_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'lexx','lexxyungcarter@gmail.com',NULL,'$2y$10$O9Wlx8HnSRmlcVu/bhsFFuzvmFIKuPUXtj7wDQbAqrTTsxuCTrhY.','WYQ8HN1wqjrgKf9dL9nysOjKKDL5w51u5g8c2xc2eCzDQNK3KU2hAbe7M1t7','2019-01-04 18:56:32','2019-01-04 18:56:45'),
	(2,'acelords','acelords.space@gmail.com',NULL,'$2y$10$xNNK1HJO26mUNwpJ8wGQl.Z2/lxBzGWVF95EbwELQgUx3iJ5ZwByq','31FOB7zRYs6AEc6YjZAdle5h48H6xF2V0k6l12tYBOXJH3nO7H2t8os4kiMo','2019-01-04 18:56:32','2019-01-04 18:56:45'),
	(3,'user','user@gmail.com',NULL,'$2y$10$O1sibBFbjs9iWTEha0zL/eY3Shp4/cMKmcnSuwoxvsU0WrMQo.2qm',NULL,'2019-01-04 23:21:01','2019-01-04 23:21:01'),
	(4,'user2','user2@gmail.com',NULL,'$2y$10$Kx1OSoqiCP0M6eoEZ8p56OGLTvSuifJXOaH.J8jDMExSHVmkZ1u5q',NULL,'2019-01-04 23:21:44','2019-01-04 23:21:44'),
	(5,'user3','user3@gmail.com',NULL,'$2y$10$97GvYjdee16HTLCQb3RzZehDmY9wFpZ8UkmTW/geMg9hZVmPAHd3C','8tmtdm5Ke5pfEPcdJVNLxh7Vj0aFbV3i5RgD9nANupOkVTrQjrAbRWwKoVKz','2019-01-04 23:38:49','2019-01-04 23:38:49');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
