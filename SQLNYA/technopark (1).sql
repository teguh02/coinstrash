-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 05:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technopark`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_28_065551_create_welcomes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member' COMMENT 'member / admin',
  `poin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `jabatan`, `poin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teguh Rijanandi', 'admin', '15', 'teguh@goeroeku.net', NULL, '$2y$10$gZzKRJ7a8kKb9TO4r7nCPuhTXTeTFIV/n1wNpnf2.LpeHyNCwNnWy', 'WtvAlUsnW6LYwEXtC1f9Jvcf88u77Nr8W5LxtjDfRSNLcXUS9ZNFfBdV3Qgc', '2018-11-26 06:23:43', '2018-11-28 21:49:03'),
(2, 'Rayhan', 'member', '5', 'rayhan@mail.com', NULL, '$2y$10$k3BsV3cw/119nMokdX8t8uHAlSUyJASgjRDYlh/KFu3pSDPQvsIQy', 'fK7qI8A63KZDpmjqXFiNCojEhYw4CH0t7nLFKD26kiGClHwi73MKhOfVaN69', '2018-11-28 00:51:23', '2018-11-28 22:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `welcomelog`
--

CREATE TABLE `welcomelog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `judulbaru` varchar(255) NOT NULL,
  `isibaru` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcomelog`
--

INSERT INTO `welcomelog` (`id`, `judul`, `isi`, `judulbaru`, `isibaru`, `status`, `created_at`) VALUES
(1, 'Keterangan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. \r\n', '', '', 'INSERT', '2018-11-28 07:32:03'),
(4, 'Keterangan Pada Laman Index', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. \r\n', 'Keterangan Pada Laman Index', '<p>COINTRASH adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'UPDATE', '2018-11-28 08:51:51'),
(5, 'Buang Sampah', '  <h5>Buang Sampah</h5>\r\n          <small class=\"text-secondary\">Buanglah sampah sebanyak banyaknya pada tempat sampah yang kami sediakan untuk mendapatkan poin</small>', '', '', 'INSERT', '2018-11-28 11:57:57'),
(6, 'Kumpulkan Poin', '<h5>Kumpulkan Poin</h5>\r\n          <small class=\"text-secondary\">Kumpulkan sebanyak banyaknya poin anda untuk ditukarkan dengan hadiah menarik</small>', '', '', 'INSERT', '2018-11-28 11:58:24'),
(7, 'Tukarkan', '<h5>Tukarkan</h5>\r\n          <small class=\"text-secondary\">Jika poinmu sudah memenuhi, tukarkan poin anda dengan hadiah yang kami sediakan</small>', '', '', 'INSERT', '2018-11-28 11:59:00'),
(8, 'Keterangan Pada Laman Index', '<p>COINTRASH adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Keterangan Pada Laman Index', '<p>Bank Sampah digital yang memudahkan anda dalam penggelolaan sampah di lingkungan, anda juga akan mendapatkan point pada setiap membuang sampah. Bertujuan untuk mendaur ulang dan megatasi masalah sampah yang kian banyak. COINSTRASH hadir untuk mengatasi masalah tersebut, dengan layanan ini dapat membantu mengatasi masalah sampah yang kian banyak</p>', 'UPDATE', '2018-11-29 04:17:59'),
(9, 'Keterangan Pada Laman Index', '<p>Bank Sampah digital yang memudahkan anda dalam penggelolaan sampah di lingkungan, anda juga akan mendapatkan point pada setiap membuang sampah. Bertujuan untuk mendaur ulang dan megatasi masalah sampah yang kian banyak. COINSTRASH hadir untuk mengatasi masalah tersebut, dengan layanan ini dapat membantu mengatasi masalah sampah yang kian banyak</p>', 'Keterangan Pada Laman Index', '<p>Bank Sampah digital yang memudahkan anda dalam penggelolaan sampah di lingkungan, anda juga akan mendapatkan point pada setiap membuang sampah. Bertujuan untuk mendaur ulang dan megatasi masalah sampah yang kian banyak. COINSTRASH hadir untuk mengatasi masalah tersebut, dengan layanan ini dapat membantu mengatasi masalah sampah yang kian banyak. Selamat menggunakan Layanan Kami</p>', 'UPDATE', '2018-11-29 04:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `welcomes`
--

CREATE TABLE `welcomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diubaholeh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomes`
--

INSERT INTO `welcomes` (`id`, `judul`, `isi`, `diubaholeh`, `created_at`, `updated_at`) VALUES
(1, 'Keterangan Pada Laman Index', '<p>Bank Sampah digital yang memudahkan anda dalam penggelolaan sampah di lingkungan, anda juga akan mendapatkan point pada setiap membuang sampah. Bertujuan untuk mendaur ulang dan megatasi masalah sampah yang kian banyak. COINSTRASH hadir untuk mengatasi masalah tersebut, dengan layanan ini dapat membantu mengatasi masalah sampah yang kian banyak. Selamat menggunakan Layanan Kami</p>', 'Teguh Rijanandi', '2018-11-28 07:31:47', '2018-11-28 21:25:14'),
(2, 'Buang Sampah', '  <h5>Buang Sampah</h5>\r\n          <small class=\"text-secondary\">Buanglah sampah sebanyak banyaknya pada tempat sampah yang kami sediakan untuk mendapatkan poin</small>', 'Teguh Rijanandi', '2018-11-28 11:57:57', '2018-11-28 11:57:57'),
(3, 'Kumpulkan Poin', '<h5>Kumpulkan Poin</h5>\r\n          <small class=\"text-secondary\">Kumpulkan sebanyak banyaknya poin anda untuk ditukarkan dengan hadiah menarik</small>', 'Teguh Rijanandi', '2018-11-28 11:58:24', '2018-11-28 11:58:24'),
(4, 'Tukarkan', '<h5>Tukarkan</h5>\r\n          <small class=\"text-secondary\">Jika poinmu sudah memenuhi, tukarkan poin anda dengan hadiah yang kami sediakan</small>', 'Teguh Rijanandi', '2018-11-28 11:59:00', '2018-11-28 11:59:00');

--
-- Triggers `welcomes`
--
DELIMITER $$
CREATE TRIGGER `Perekaman Isi Welcome - After Insert` AFTER INSERT ON `welcomes` FOR EACH ROW BEGIN
INSERT INTO welcomelog (
    
    -- Menyebutkan semua nama tabel
    judul,
    isi,
    judulbaru,
    isibaru,
    status,
    created_at
    
    ) VALUES (
    
    -- Menyebutkan apa saja yang akan diisi
    NEW.judul,
    NEW.isi,
    '',
    '',
    'INSERT',
    now()
        
    );

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Perekaman Isi Welcome - After Update` AFTER UPDATE ON `welcomes` FOR EACH ROW BEGIN

INSERT INTO welcomelog(
    -- Menyebutkan semua tabel
    judul,
    isi,
    judulbaru,
    isibaru,
    status,
    created_at
    ) VALUES (
     -- Apa saja data yang akan dimasukan
        -- Data Lama
        OLD.judul,
        OLD.isi,
        
        -- Data Baru
        NEW.judul,
        NEW.isi,
        
        -- Keterangan
        'UPDATE',
        now()
        
    );
    
    END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcomelog`
--
ALTER TABLE `welcomelog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcomelog`
--
ALTER TABLE `welcomelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
