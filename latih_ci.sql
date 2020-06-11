-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table latih.ci_users
CREATE TABLE IF NOT EXISTS `ci_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `is_active` int(1) NOT NULL DEFAULT '0',
  `date_created` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table latih.ci_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_users` DISABLE KEYS */;
INSERT INTO `ci_users` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
	(1, 'Evan Kampung', 'evan@gmail.com', 'mighty_mike1.jpg', '$2y$10$MB9CNSVTHyA5qaGcHBEXB.MN/gEM9DaAFH4Z6xkYmalulrpHgHC/u', 1, 1, 1591789046),
	(2, 'Indy Kampung', 'indy@gmail.com', 'default.jpg', '$2y$10$RQ8CYp53ugkXWkGyAZXmseS9bqboRY/ZXkmFaQnreuW80dhEHX0aG', 2, 1, 1591792888);
/*!40000 ALTER TABLE `ci_users` ENABLE KEYS */;

-- Dumping structure for table latih.ci_users_access_menu
CREATE TABLE IF NOT EXISTS `ci_users_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table latih.ci_users_access_menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_users_access_menu` DISABLE KEYS */;
INSERT INTO `ci_users_access_menu` (`id`, `role_id`, `menu_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 2, 2),
	(4, 1, 3);
/*!40000 ALTER TABLE `ci_users_access_menu` ENABLE KEYS */;

-- Dumping structure for table latih.ci_users_menu
CREATE TABLE IF NOT EXISTS `ci_users_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table latih.ci_users_menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_users_menu` DISABLE KEYS */;
INSERT INTO `ci_users_menu` (`id`, `menu`) VALUES
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Menu'),
	(4, 'Table');
/*!40000 ALTER TABLE `ci_users_menu` ENABLE KEYS */;

-- Dumping structure for table latih.ci_users_role
CREATE TABLE IF NOT EXISTS `ci_users_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table latih.ci_users_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_users_role` DISABLE KEYS */;
INSERT INTO `ci_users_role` (`id`, `role`) VALUES
	(1, 'Administrator'),
	(2, 'Member');
/*!40000 ALTER TABLE `ci_users_role` ENABLE KEYS */;

-- Dumping structure for table latih.ci_users_sub_menu
CREATE TABLE IF NOT EXISTS `ci_users_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table latih.ci_users_sub_menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_users_sub_menu` DISABLE KEYS */;
INSERT INTO `ci_users_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
	(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
	(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
	(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
	(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
	(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
	(6, 1, 'coba', 'coba/coba', 'fab fa-fw fa-youtube', 1),
	(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1);
/*!40000 ALTER TABLE `ci_users_sub_menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
