-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for fswd_pdf
CREATE DATABASE IF NOT EXISTS `fswd_pdf` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fswd_pdf`;

-- Dumping structure for table fswd_pdf.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date_birth` datetime DEFAULT NULL,
  `place_of_birth` varchar(100) DEFAULT NULL,
  `address` text,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table fswd_pdf.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `date_birth`, `place_of_birth`, `address`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'Mochamad Yusuf Setiya Putra', '2002-09-07 01:00:00', 'Malang', 'Jl. Semanggi No. 11', 'yusuf.jpg', '2023-09-20 01:28:06', '2023-09-20 01:28:08'),
	(2, 'Ahmad Grocery', '2020-09-20 09:46:50', 'Bandung', 'Jl. Maninjau Barat', 'logo.png', '2023-09-20 02:47:15', NULL),
	(3, 'Bangkit Ramadhan', '2003-09-12 09:53:07', 'Padang', 'Jl. Simalungun', 'bangkit.jpg', '2023-09-20 02:54:06', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
