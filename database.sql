-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2022 at 09:40 AM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icakshmy_hanaemi`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Site Administrator'),
(2, 'Karyawan', 'Karyawan'),
(3, 'Manajer', 'Manajer Perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 3),
(2, 4),
(2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Memanajemen semua user'),
(2, 'manage-profile', 'Memberikan akses mengganti profile sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_cuti`
--

CREATE TABLE `data_cuti` (
  `id_cuti` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `nama_cuti` varchar(255) NOT NULL,
  `status_cuti` int(1) NOT NULL,
  `mulai_cuti` date NOT NULL,
  `selesai_cuti` date NOT NULL,
  `keterangan_cuti` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_cuti`
--

INSERT INTO `data_cuti` (`id_cuti`, `id_user`, `nama_cuti`, `status_cuti`, `mulai_cuti`, `selesai_cuti`, `keterangan_cuti`, `created_at`, `updated_at`) VALUES
(1, 3, 'Coba Ngajuin Cuti', 1, '2021-12-21', '2021-12-21', '', '2021-12-21 01:35:50', '2021-12-21 10:28:58'),
(2, 3, 'Cuti Natal', 2, '0000-00-00', '0000-00-00', '', '2021-12-21 16:14:39', '2021-12-21 16:22:56'),
(3, 3, 'Palguno Wicaksono', 1, '0000-00-00', '0000-00-00', '', '2021-12-21 16:17:21', '2021-12-21 16:23:01'),
(4, 2, 'Cuti Nataru', 2, '2021-12-21', '2021-12-21', '', '2021-12-21 16:22:44', '2021-12-21 16:23:05'),
(5, 2, 'Cuti Meninggal', 1, '2021-12-21', '2021-12-25', '', '2021-12-21 16:27:06', '2021-12-22 02:11:35'),
(6, 3, 'Cuti Nataru', 0, '2021-12-21', '2021-12-21', '', '2021-12-21 18:45:37', '2021-12-21 18:45:37'),
(7, 4, 'Cuti Nataru', 0, '2021-12-21', '2021-12-21', '', '2021-12-21 23:34:55', '2021-12-21 23:34:55'),
(8, 4, '132132123', 0, '2021-12-31', '2021-12-08', '', '2021-12-30 01:12:29', '2021-12-30 01:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(120) NOT NULL,
  `tunjangan_divisi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_divisi`, `nama_divisi`, `tunjangan_divisi`) VALUES
(1, 'Magang', 500000),
(2, 'Produksi', 1000000),
(4, 'Mancing', 100000),
(5, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_gaji_karyawan`
--

CREATE TABLE `data_gaji_karyawan` (
  `id_gaji` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `bulan_gaji` int(2) NOT NULL,
  `tahun_gaji` year(4) NOT NULL,
  `gaji_bersih` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_gaji_karyawan`
--

INSERT INTO `data_gaji_karyawan` (`id_gaji`, `id_users`, `bulan_gaji`, `tahun_gaji`, `gaji_bersih`) VALUES
(1, 2, 12, 2021, 10000000),
(2, 3, 12, 2021, 10000000),
(3, 4, 12, 2021, 1000000),
(4, 5, 12, 2021, 1000000),
(5, 6, 12, 2021, 1000000),
(6, 7, 12, 2021, 1000000),
(7, 8, 12, 2021, 1000000),
(8, 2, 11, 2021, 10000000),
(9, 3, 11, 2021, 10000000),
(10, 4, 11, 2021, 1000000),
(11, 5, 11, 2021, 1000000),
(12, 6, 11, 2021, 1000000),
(13, 7, 11, 2021, 1000000),
(14, 8, 11, 2021, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`) VALUES
(1, 'Karyawan Magang', 100000),
(2, 'Direktur Keuangan', 50000000),
(3, 'Direktur Personalia', 45000000),
(4, 'Direktur', 40000000),
(5, 'Manajer', 15000000),
(6, 'Manajer Personal', 15000000),
(7, 'Manajer Pemasaran', 15000000),
(8, 'Manajer Pabrik', 15000000),
(12, 'Supervisor', 60000000),
(13, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai_presensi`
--

CREATE TABLE `data_pegawai_presensi` (
  `id_data` int(11) NOT NULL,
  `id_presensi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `id_kondisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai_presensi`
--

INSERT INTO `data_pegawai_presensi` (`id_data`, `id_presensi`, `id_users`, `waktu_masuk`, `waktu_keluar`, `id_kondisi`) VALUES
(1, 3, 3, '2021-12-21 09:57:49', '0000-00-00 00:00:00', 1),
(4, 3, 2, '2021-12-21 10:28:59', '0000-00-00 00:00:00', 1),
(7, 3, 4, '2021-12-21 11:34:44', '0000-00-00 00:00:00', 1),
(8, 4, 2, '2021-12-22 02:14:46', '0000-00-00 00:00:00', 2),
(9, 4, 6, '2021-12-22 03:01:01', '0000-00-00 00:00:00', 2),
(10, 4, 6, '2021-12-22 03:01:14', '0000-00-00 00:00:00', 1),
(11, 5, 2, '2021-12-22 10:32:01', '0000-00-00 00:00:00', 1),
(12, 6, 2, '2021-12-23 09:45:53', '0000-00-00 00:00:00', 1),
(13, 7, 2, '2021-12-30 01:21:11', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_potongan`
--

CREATE TABLE `data_potongan` (
  `id_potongan` int(11) NOT NULL,
  `nama_potongan` varchar(120) NOT NULL,
  `jumlah_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_potongan`
--

INSERT INTO `data_potongan` (`id_potongan`, `nama_potongan`, `jumlah_potongan`) VALUES
(1, 'Masuk', 0),
(2, 'Cuti', 0),
(3, 'Alpha', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `data_presensi`
--

CREATE TABLE `data_presensi` (
  `id_presensi` int(11) NOT NULL,
  `hari_presensi` int(2) NOT NULL,
  `bulan_presensi` int(2) NOT NULL,
  `tahun_presensi` year(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_presensi`
--

INSERT INTO `data_presensi` (`id_presensi`, `hari_presensi`, `bulan_presensi`, `tahun_presensi`, `created_at`, `updated_at`) VALUES
(1, 19, 12, 2021, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 20, 12, 2021, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 21, 12, 2021, '2021-12-21 13:02:41', '2021-12-21 13:02:41'),
(5, 22, 12, 2021, '2021-12-22 10:31:41', '2021-12-22 10:31:41'),
(6, 23, 12, 2021, '2021-12-23 09:45:33', '2021-12-23 09:45:33'),
(7, 30, 12, 2021, '2021-12-30 01:20:46', '2021-12-30 01:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1639920258, 1);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(100) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_keluar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `nama`, `waktu_masuk`, `waktu_keluar`, `created_at`, `updated_at`) VALUES
(1, 'Presensi Selasa 20-12-2021', '2021-12-20 08:58:04', '2021-12-21 08:57:11', '2021-12-20 15:58:04', '2021-12-20 15:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_divisi` int(11) NOT NULL DEFAULT 1,
  `id_jabatan` int(11) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL DEFAULT 'Karyawan Baru',
  `phone` varchar(16) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_divisi`, `id_jabatan`, `email`, `username`, `fullname`, `phone`, `address`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 4, 12, 'me@icaksh.my.id', 'icaksh', 'Palguno Wicaksono', '+6281222222', '1', '', 'e1ee42a114843d7a0ed9217fd02eacad', NULL, '2021-12-30 12:25:02', NULL, NULL, NULL, 1, 0, '2021-12-19 09:54:39', '2021-12-30 11:25:02', NULL),
(3, 1, 1, 'hermawan@gmail.com', 'hermawan', 'Hermawan Sudarsono', NULL, '', '$2y$10$o6RkVPwHpX.O7kXprVhgGOLVCgA/OdddfpTeLJkj6XjQFOpCnGjN6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 10:09:42', '2021-12-19 10:09:42', NULL),
(4, 1, 1, 'bambang@gmail.com', 'bambang', 'Bambang Widianto', '082219283928', 'Pangeran Diponegoro123', '$2y$10$zs6SoJSyYPMZ09klES.rCu5p14BKROncM6lmrEbflCKWldPaCnMBe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-21 23:34:17', '2021-12-21 23:34:17', NULL),
(8, 1, 1, 'hermawan2@gmail.com', 'widodo', 'Karyawan Baru', NULL, '', '$2y$10$bzQXaUmIRE8OG1CjauCIO.4WvQQtu2svI.pkzwTfx715XN.8AsXmW', '17d11d0fbd73f204b12b96d7904785e7', '2021-12-22 12:49:38', '2021-12-22 14:03:48', NULL, NULL, NULL, 1, 0, '2021-12-22 12:47:15', '2021-12-22 13:03:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `data_cuti`
--
ALTER TABLE `data_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `data_gaji_karyawan`
--
ALTER TABLE `data_gaji_karyawan`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_pegawai_presensi`
--
ALTER TABLE `data_pegawai_presensi`
  ADD PRIMARY KEY (`id_data`),
  ADD UNIQUE KEY `id_presensi` (`id_presensi`,`id_users`,`id_kondisi`);

--
-- Indexes for table `data_potongan`
--
ALTER TABLE `data_potongan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `data_presensi`
--
ALTER TABLE `data_presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_cuti`
--
ALTER TABLE `data_cuti`
  MODIFY `id_cuti` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_gaji_karyawan`
--
ALTER TABLE `data_gaji_karyawan`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_pegawai_presensi`
--
ALTER TABLE `data_pegawai_presensi`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_potongan`
--
ALTER TABLE `data_potongan`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_presensi`
--
ALTER TABLE `data_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;