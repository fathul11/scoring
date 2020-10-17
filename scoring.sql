-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table scoring.employee: ~2 rows (approximately)
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`id`, `name`, `nik`, `image`, `password`, `id_jabatan`, `pangkat`, `no_hp`, `role_id`, `is_active`, `date_created`) VALUES
	(7, 'Fathul Qahar Arif', '115577', 'fathul.jpeg', '$2y$10$FXPdq2wZ/ofK6jXv8LrZl.UOycrUoAi98FILZ/Hi8Eg/VYd1yr0bG', 1, 'Gol 1A', '087874113595', 1, 1, 1601599517),
	(8, 'Bezaliel Rumenang Dieng', '112233', 'default.jpg', '$2y$10$sudIgcc0qvgG.M9lnCCkoOH..rPyifOH8Fx.DySmi.tDk8V49nIAi', 2, 'Gol 2A', '081920304560', 2, 1, 1601652686),
	(9, 'Erik Ruliyanto', '114455', 'default.jpg', '$2y$10$Zw53dikl0IToD5JSEidum.VLW.Hm0p5du6UzjsAGMGGjMHhW42z3.', 6, 'S1', '081144881920', 2, 1, 1602662874);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

-- Dumping data for table scoring.jabatan: ~6 rows (approximately)
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` (`id`, `nama_jabatan`) VALUES
	(1, 'Agen Utama'),
	(2, 'Agen Madya'),
	(3, 'Agen Muda'),
	(4, 'Agen Pertama'),
	(5, 'Analis'),
	(6, 'PNO');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;

-- Dumping data for table scoring.kegiatan: ~0 rows (approximately)
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` (`id`, `user_id`, `tanggal`, `kegiatan_id`) VALUES
	(1, 2, '2020-10-13', 1);
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;

-- Dumping data for table scoring.penilaian: ~1 rows (approximately)
/*!40000 ALTER TABLE `penilaian` DISABLE KEYS */;
INSERT INTO `penilaian` (`id`, `id_jabatan`, `nilai`, `kegiatan`) VALUES
	(1, '1', '10', 'INUS');
/*!40000 ALTER TABLE `penilaian` ENABLE KEYS */;

-- Dumping data for table scoring.user_access_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 2, 2),
	(6, 1, 3),
	(8, 2, 4);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;

-- Dumping data for table scoring.user_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
INSERT INTO `user_menu` (`id`, `menu`) VALUES
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Menu'),
	(4, 'Activity'),
	(5, 'dinas dalam');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;

-- Dumping data for table scoring.user_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`id`, `role`) VALUES
	(1, 'Administrator'),
	(2, 'Anggota');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

-- Dumping data for table scoring.user_sub_menu: ~8 rows (approximately)
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
	(1, 1, 'Dashboard', 'admin', 'fas fa-tachometer-alt', 1),
	(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
	(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
	(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
	(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
	(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-layer-group', 1),
	(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
	(8, 1, 'Penilaian', 'admin/score', 'fas fa-fw fa-equals', 1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
