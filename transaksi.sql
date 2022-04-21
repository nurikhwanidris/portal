-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table jupem18.transaksi
CREATE TABLE IF NOT EXISTS `transaksis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` smallint(6) NOT NULL DEFAULT 1,
  `title_my` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `january` int(5) NOT NULL,
  `february` int(5) NOT NULL,
  `march` int(5) NOT NULL,
  `april` int(5) NOT NULL,
  `may` int(5) NOT NULL,
  `june` int(5) NOT NULL,
  `july` int(5) NOT NULL,
  `august` int(5) NOT NULL,
  `september` int(5) NOT NULL,
  `october` int(5) NOT NULL,
  `november` int(5) NOT NULL,
  `december` int(5) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- Dumping data for table jupem18.transaksi: ~61 rows (approximately)
INSERT INTO `transaksis` (`id`, `user_id`, `title_my`, `title_en`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`, `product_id`, `status_id`) VALUES
	(12, 1, '2019 - Kadaster', '2019 - Cadastre', 2019, 10008, 7926, 9733, 11126, 9164, 6425, 11042, 9671, 9574, 11128, 10226, 9167, 2, 2),
	(13, 1, '2019 - Pemetaan', '2019- Mapping', 2019, 4, 5, 5, 59, 64, 126, 93, 66, 117, 184, 167, 117, 3, 2),
	(14, 1, '2019 - Geodesi', '2019 - Geodesy', 2019, 314, 239, 315, 435, 594, 297, 462, 454, 502, 640, 557, 414, 4, 2),
	(16, 1, '2019 - Permohonan Lesen Digital', '2019 - Digital License Application', 2019, 44, 49, 76, 46, 42, 37, 42, 43, 26, 105, 132, 65, 5, 2),
	(17, 1, '2019 - Langganan RTK', '2019 - RTK Subscription', 2019, 1, 0, 1, 2, 1, 1, 1, 3, 2, 5, 8, 8, 6, 2),
	(18, 1, '2019 - Perkhidmatan Geodetik', '2019 - Geodetic Services', 2019, 8, 10, 3, 15, 19, 22, 6, 23, 14, 13, 17, 11, 7, 2),
	(19, 1, '2019 - Permohonan Data Terhad', '2019 - Limited Data Application', 2019, 0, 0, 0, 0, 1, 0, 3, 2, 1, 0, 0, 0, 8, 2),
	(20, 1, '2019 - Permohonan Permit', '2019 - Permit Application', 2019, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 9, 2),
	(24, 1, '2018 - Kadaster', '2018 - Cadastre', 2018, 6607, 6070, 7509, 7645, 5547, 4804, 6540, 7603, 6360, 8334, 6953, 6826, 2, 2),
	(25, 1, '2018 - Pemetaan ', '2018 - Mapping', 2018, 0, 0, 2, 0, 0, 1, 4, 9, 3, 9, 6, 3, 3, 2),
	(26, 1, '2018 - Geodesi', '2018 - Geodesy', 2018, 324, 302, 399, 373, 307, 271, 358, 359, 300, 371, 328, 268, 4, 2),
	(27, 1, '2018 - Permohonan Lesen Digital', '2018 - Digital License Application', 2018, 31, 54, 77, 77, 45, 24, 53, 51, 34, 43, 26, 34, 5, 2),
	(28, 1, '2018 - Langganan RTK', '2018 - RTK Subscription', 2018, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 2, 0, 6, 2),
	(29, 1, '2018- Perkhidmatan Geodetik', '2018 - Geodetic Services', 2018, 3, 3, 11, 3, 8, 4, 5, 7, 12, 2, 3, 3, 7, 2),
	(30, 1, '2018 - Permohonan DataTerhad', '2018 - Limited Data Application', 2018, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 2),
	(31, 1, '2018 - Permohonan Permit', '2018 - Permit Application', 2018, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 2),
	(32, 1, '2017 - Kadaster', '2017 - Cadastre', 2017, 5736, 5274, 6230, 6277, 8137, 5710, 7359, 7820, 5932, 6686, 6845, 6149, 2, 2),
	(33, 1, '2017 - Pemetaan', '2017 - Mapping', 2017, 5, 2, 1, 0, 2, 2, 3, 2, 0, 3, 4, 1, 3, 2),
	(34, 1, '2017 - Geodesi', '2017 - Geodesy', 2017, 238, 267, 333, 369, 368, 245, 389, 356, 367, 340, 321, 305, 4, 2),
	(35, 1, '2017 - Permohonan Lesen Digital', '2017 - Digital License Application', 2017, 33, 51, 72, 67, 48, 26, 36, 45, 27, 26, 29, 31, 5, 2),
	(36, 1, '2017 - Langganan RTK', '2017 - RTK Subscription', 2017, 1, 3, 0, 0, 1, 4, 0, 0, 0, 0, 0, 0, 6, 2),
	(37, 1, '2017 - Perkhidmatan Geodetik', '2017 - Geodetic Services', 2017, 6, 5, 4, 4, 4, 4, 10, 36, 8, 13, 8, 3, 7, 2),
	(38, 1, '2017 - Permohonan Data Terhad', '2017 - Limited Data Application', 2017, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 2),
	(39, 1, '2017 - Permohonan Permit', '2017 - Permit Application', 2017, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 2),
	(40, 1, '2016 - Kadaster', '2016 - Cadastre', 2016, 5831, 4554, 6514, 6075, 5956, 5784, 4885, 6542, 4108, 5709, 5809, 5284, 2, 2),
	(41, 1, '2016 - Pemetaan ', '2016 - Mapping', 2016, 4, 0, 0, 0, 0, 0, 2, 14, 0, 7, 3, 1, 3, 2),
	(42, 1, '2016 - Geodesi', '2016 - Geodesy', 2016, 242, 227, 233, 278, 204, 219, 198, 253, 186, 258, 258, 244, 4, 2),
	(43, 1, '2016 - Permohonan Lesen Digital', '2016 - Digital License Application', 2016, 0, 0, 0, 0, 0, 25, 42, 34, 21, 23, 19, 23, 5, 2),
	(44, 1, '2016 - Perkhidmatan Geodetik', '2016 - Geodetic Services', 2016, 0, 0, 0, 0, 0, 6, 7, 18, 5, 18, 12, 15, 7, 2),
	(45, 1, '2016 - Permohonan Data Terhad', '2016 - Limited Data Application', 2016, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 2),
	(46, 1, '2016 - Permohonan Permit', '2016 - Permit Application', 2016, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 2),
	(47, 1, '2015 - Kadaster', '2015 - Cadastre', 2015, 5488, 3942, 5751, 5988, 4991, 5195, 4179, 5455, 4863, 6525, 5892, 5581, 2, 2),
	(48, 1, '2015 - Pemetaan ', '2015 - Mapping', 2015, 2, 0, 2, 0, 0, 0, 0, 0, 1, 1, 0, 0, 3, 2),
	(49, 1, '2015 - Geodesi', '2015 - Geodesy', 2015, 242, 194, 290, 234, 246, 236, 191, 266, 220, 241, 320, 264, 4, 2),
	(50, 1, '2014 - Kadaster', '2014 - Cadastre', 2014, 3874, 4156, 5229, 5964, 6289, 5662, 6118, 6246, 5932, 5799, 6187, 4806, 2, 2),
	(51, 1, '2014 - Pemetaan', '2014 - Mapping', 2014, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 3, 2),
	(52, 1, '2014 - Geodesi', '2014 - Geodesy', 2014, 149, 120, 210, 274, 247, 234, 239, 293, 233, 236, 233, 203, 4, 2),
	(53, 1, '2020 - Permohonan Permit', '2020 - Permit Application', 2020, 0, 0, 28, 14, 24, 60, 55, 28, 45, 37, 34, 28, 9, 2),
	(54, 1, '2020 - Permohonan Data Terhad', '2020 - Limited Data Application', 2020, 3, 7, 3, 0, 4, 5, 14, 3, 2, 1, 4, 5, 8, 2),
	(55, 1, '2020 - Perkhidmatan Geodetik', '2020 - Geodetic Services', 2020, 29, 34, 10, 12, 4, 56, 62, 105, 65, 93, 63, 79, 7, 2),
	(56, 1, '2020 - Langganan RTK', '2020 - RTK Subscription', 2020, 16, 12, 12, 1, 13, 11, 8, 9, 9, 13, 12, 20, 6, 2),
	(57, 1, '2020 - Permohonan Lesen Digital', '2020 - Digital License Application', 2020, 72, 81, 63, 26, 96, 97, 105, 86, 61, 57, 56, 65, 5, 2),
	(58, 1, '2020 - Geodesi', '2020 - Geodesy', 2020, 436, 453, 361, 125, 329, 597, 699, 631, 730, 705, 686, 618, 4, 2),
	(59, 1, '2020 - Pemetaan', '2020- Mapping', 2020, 93, 196, 93, 5, 56, 177, 248, 171, 190, 267, 196, 186, 3, 2),
	(60, 1, '2020 - Kadaster', '2020 - Cadastre', 2020, 9116, 11056, 8348, 1851, 5581, 12112, 13085, 12009, 12758, 12602, 12098, 11767, 2, 2),
	(61, 1, '2021 - Kadaster', '2021 - Cadastre', 2021, 10360, 9861, 13971, 12454, 9022, 4965, 6186, 9452, 13233, 13467, 12300, 11549, 2, 2),
	(62, 1, '2021 - Pemetaan', '2021- Mapping', 2021, 248, 204, 209, 271, 177, 62, 157, 261, 299, 242, 383, 210, 3, 2),
	(63, 1, '2021 - Geodesi', '2021 - Geodesy', 2021, 618, 615, 837, 712, 597, 342, 374, 618, 716, 894, 830, 754, 4, 2),
	(64, 1, '2021 - Permohonan Lesen Digital', '2021 - Digital License Application', 2021, 55, 74, 100, 67, 88, 72, 77, 118, 106, 85, 66, 58, 5, 2),
	(65, 1, '2021 - Langganan RTK', '2021 - RTK Subscription', 2021, 25, 19, 28, 8, 15, 17, 13, 21, 22, 26, 26, 17, 6, 2),
	(66, 1, '2021 - Perkhidmatan Geodetik', '2021 - Geodetic Services', 2021, 59, 68, 55, 46, 29, 84, 26, 40, 10, 38, 34, 68, 7, 2),
	(67, 1, '2021 - Permohonan Data Terhad', '2021 - Limited Data Application', 2021, 2, 2, 2, 4, 3, 2, 2, 9, 8, 5, 7, 6, 8, 2),
	(68, 1, '2021 - Permohonan Permit', '2021 - Permit Application', 2021, 30, 28, 46, 27, 34, 37, 15, 40, 34, 53, 50, 31, 9, 2),
	(69, 1, '2022 - Permohonan Permit', '2022 - Permit Application', 2022, 37, 34, 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 2),
	(70, 1, '2022 - Permohonan Data Terhad', '2022 - Limited Data Application', 2022, 7, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 2),
	(71, 1, '2022 - Perkhidmatan Geodetik', '2022 - Geodetic Services', 2022, 52, 48, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 2),
	(72, 1, '2022 - Langganan RTK', '2022 - RTK Subscription', 2022, 32, 27, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 2),
	(73, 1, '2022 - Permohonan Lesen Digital', '2022 - Digital License Application', 2022, 73, 84, 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2),
	(74, 1, '2022 - Geodesi', '2022 - Geodesy', 2022, 668, 554, 844, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2),
	(75, 1, '2022 - Pemetaan', '2022- Mapping', 2022, 277, 200, 267, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2),
	(76, 1, '2022 - Kadaster', '2022 - Cadastre', 2022, 11584, 10354, 13308, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2);

-- Dumping structure for table jupem18.transaksi_categories
CREATE TABLE IF NOT EXISTS `transaksi_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` smallint(6) DEFAULT 1,
  `title_my` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status_id` smallint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table jupem18.transaksi_categories: ~8 rows (approximately)
INSERT INTO `transaksi_categories` (`id`, `user_id`, `title_my`, `title_en`, `sort_order`, `status_id`) VALUES
	(2, 1, 'Kadaster', 'Cadastre', 0, 1),
	(3, 1, 'Pemetaan', 'Mapping', 1, 1),
	(4, 1, 'Geodesi', 'Geodesy', 2, 1),
	(5, 1, 'Permohonan Lesen Digital', 'Digital License Application', 3, 1),
	(6, 1, 'Langganan RTK', 'RTK Subscription', 4, 1),
	(7, 1, 'Perkhidmatan Geodetik', 'Geodetic Services', 5, 1),
	(8, 1, 'Permohonan Data Terhad', 'Limited Data Application', 6, 1),
	(9, 1, 'Permohonan Permit', 'Permit Application', 7, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
