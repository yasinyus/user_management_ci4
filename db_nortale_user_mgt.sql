-- -------------------------------------------------------------
-- TablePlus 4.8.0(432)
--
-- https://tableplus.com/
--
-- Database: nortale_user_mgt
-- Generation Time: 2022-07-22 09:54:48.2900
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `levels`;
CREATE TABLE `levels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `user_code`;
CREATE TABLE `user_code` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `code` int DEFAULT NULL,
  `is_expire` varchar(10) DEFAULT NULL,
  `expire_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `account_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level_id` int DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `photo_profile` varchar(100) DEFAULT NULL,
  `user_owner` int DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

INSERT INTO `levels` (`id`, `level_name`, `id_user`) VALUES
(1, 'Admin', NULL),
(2, 'Sub Admin', 17),
(3, 'Broker', 17),
(4, 'Loan Officer', 17);

INSERT INTO `user_code` (`id`, `user_id`, `code`, `is_expire`, `expire_time`) VALUES
(1, 8, 717426, 'yes', '2022-07-18 07:41:46'),
(2, 8, 930759, 'yes', '2022-07-18 07:46:16'),
(3, 8, 682873, 'yes', '2022-07-18 07:47:29'),
(4, 8, 337930, 'yes', '2022-07-19 02:57:45'),
(5, 16, 924598, 'yes', '2022-07-19 06:00:05'),
(6, 16, 619730, 'yes', '2022-07-19 06:12:13'),
(7, 17, 978384, 'yes', '2022-07-20 11:51:05'),
(8, 17, 342541, 'yes', '2022-07-21 04:04:52'),
(9, 17, 619983, 'yes', '2022-07-21 09:06:31'),
(10, 17, 444816, 'yes', '2022-07-21 09:47:37');

INSERT INTO `users` (`user_id`, `account_name`, `user_name`, `user_email`, `password`, `level_id`, `status`, `photo_profile`, `user_owner`) VALUES
(1, 'Josua a', 'jo', 'yasinyusuf89@gmail.com', '$2y$10$GQU.yQLnRnxs9l3KjLOF8upqzuEIxhjBOfD0RVH/UirYxnW1JAysW', 1, '1', '1658191755_c981c042fbcc4d37b25f.png', 17),
(8, 'Josua', 'jojo', 'yasinyusuf8999@gmail.com', '$2y$10$GQU.yQLnRnxs9l3KjLOF8upqzuEIxhjBOfD0RVH/UirYxnW1JAysW', 1, '1', '1658191755_c981c042fbcc4d37b25f.png', 17),
(16, 'an di wal', 'andiwal', 'yasinyus@nortale.com', '$2y$10$ncA5y8i6bJxs8RGkESjgluNwWyCAI8tZNy4SMjJ/hPndD5XU/qpOu', 3, '1', '1658228775_70a2113a6d790932a3b3.png', 17),
(17, 'admin nortale', 'admin', 'ely@nortale.com', '$2y$10$GQU.yQLnRnxs9l3KjLOF8upqzuEIxhjBOfD0RVH/UirYxnW1JAysW', 1, '1', '1658380086_40f2e895230d6e4817de.jpeg', NULL),
(18, 'ir ma', 'irma', 'irmafitriana48@gmail.com', '$2y$10$XSDlzKSr23ltyRAeGjVD2OZ89A3mcO/QS0F/dYSN5.9Ga4IArU0Bu', 2, '1', NULL, 17),
(19, 'ubay', 'ubay', 'ubay@maul.com', '$2y$10$.Az6IDK6WwnFqnQR4hlwzeI4xxSVCOhauKgtopRcCMYPAqOuhpRA.', 7, '1', NULL, 17);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;