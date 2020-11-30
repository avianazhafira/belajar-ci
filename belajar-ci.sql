-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table belajar-ci.beritas: ~5 rows (approximately)
/*!40000 ALTER TABLE `beritas` DISABLE KEYS */;
INSERT INTO `beritas` (`id`, `judulberita`, `author`, `tglposting`, `foto`, `isiberita`) VALUES
	(2, 'tesaa', 'kaka', '2020-01-10', 'test.jpg', 'halo ini ess'),
	(3, 'Tenggelamnya Kapal', 'Joko Sis', '2020-06-10', 'foto1.jpg', 'Tenggelamnya kapal terjadi...........'),
	(4, 'Perampokan di Villa Melati', 'Audrey Hk', '2020-11-22', 'rampok.jpg', 'Diduga komplotan perampok....'),
	(5, 'Meningkatnya Covid di Ciputat', 'Maya Kurnia', '2020-09-10', 'covid.jpg', 'Kurangnya kesadaran masyarakat..'),
	(6, 'Menurunnya Harga Emas', 'Lala Join', '2020-10-20', 'emas.jpg', 'Harga emas menurun, investor emas...');
/*!40000 ALTER TABLE `beritas` ENABLE KEYS */;

-- Dumping data for table belajar-ci.halamans: ~4 rows (approximately)
/*!40000 ALTER TABLE `halamans` DISABLE KEYS */;
INSERT INTO `halamans` (`id`, `judulhalaman`, `author`, `isihalaman`, `tglposting`) VALUES
	(3, 'master user', 'kiki', 'tabel list user', '2020-11-20'),
	(4, 'master berita', 'kiki', 'list berita', '2020-11-20'),
	(5, 'Home', 'kiki', 'Welcome', '2020-11-20'),
	(6, 'master halaman', 'kiki', 'list halaman', '2020-11-20');
/*!40000 ALTER TABLE `halamans` ENABLE KEYS */;

-- Dumping data for table belajar-ci.users: ~16 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `password`, `created_at`) VALUES
	(1, 'Team', 'info@test.com', '9000000001', '', '2019-01-01'),
	(2, 'Admin', 'admin@test.com', '9000000002', '', '2019-01-02'),
	(3, 'User', 'user@test.com', '9000000003', '', '2019-01-03'),
	(4, 'Editor', 'editor@test.com', '9000000004', '', '2019-01-04'),
	(5, 'Writer', 'writer@test.com', '9000000005', '', '2019-01-05'),
	(6, 'Contact', 'contact@test.com', '9000000006', '', '2019-01-06'),
	(7, 'Manager', 'manager@test.com', '9000000007', '', '2019-01-07'),
	(8, 'John', 'john@test.com', '9000000055', '', '2019-01-08'),
	(9, 'Merry', 'merry@test.com', '9000000088', '', '2019-01-09'),
	(10, 'Keliv', 'kelvin@test.com', '9000550088', '', '2019-01-10'),
	(11, 'Herry', 'herry@test.com', '9050550088', '', '2019-01-11'),
	(12, 'Mark', 'mark@test.com', '9050550998', '123', '2019-01-12'),
	(13, 'Aviana Zhafira Rustandiputri', 'avianazhafira@gmail.com', '', '123', ''),
	(14, 'Nana W', 'nanawijayanti@gmail.com', '', '123', ''),
	(16, 'Kiki', 'kiki@gmail.com', '', '$2y$10$b3laucz5UHxi7VtzThjuC.21cDjFnLJNbXybfXNWd6s5r39lyLk22', ''),
	(17, 'Loony Kim', 'loony@gmail.com', '', '$2y$10$yu4nCH50BkQoPEJQVyqzJOjJLyb/dfWfeKxkD9i7Zs/R4dvS9B6Ka', '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
