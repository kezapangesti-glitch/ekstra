-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2026 at 02:21 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekstra`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikulers`
--

CREATE TABLE `ekstrakurikulers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembina` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`id`, `name`, `pembina`, `jadwal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka', 'Agus Suswianto, S.Pd', 'selasa, 15.30-17.00', 'Ekstrakurikuler pramuka adalah kegiatan tambahan di luar jam pelajaran sekolah yang bertujuan untuk membentuk karakter, kedisiplinan, kemandirian, dan keterampilan sosial siswa.', '2026-09-02 22:42:49', '2026-09-17 22:24:47'),
(2, 'Paskibra', 'Doni Nur H, S,Pd I', 'Senin, 15.30-17-30', 'Ekstrakurikuler Paskibra adalah kegiatan di sekolah yang melatih siswa menjadi Pasukan Pengibar Bendera untuk upacara bendera.', '2026-09-15 00:21:34', '2026-09-17 22:25:51'),
(3, 'Tari', 'Anik Marselawati, S.Pd', 'kamis, 15.30-16.30', 'Ekstra tari adalah kegiatan ekstrakurikuler di sekolah yang menjadi wadah bagi siswa untuk mengembangkan bakat, minat, dan kreativitas dalam bidang seni tari', '2026-09-17 22:11:37', '2026-09-23 22:56:56'),
(4, 'Pmr', 'Yuli Widiastuti, S. Pd', 'senin, 15.30-17.00', 'Ekstra PMR atau Palang Merah Remaja adalah kegiatan ekstrakurikuler di sekolah yang berfokus pada pelatihan dasar pertolongan pertama, kesehatan, dan kegiatan sosial kemanusiaan di bawah binaan Palang Merah Indonesia (PMI).', '2026-09-17 22:13:58', '2026-09-23 05:07:48'),
(5, 'Futsal', 'Cahyo Meiyana, S.Pd', 'Rabu, 15.30-17.00', 'Ekstra futsal adalah kegiatan ekstrakurikuler di sekolah yang mewadahi siswa untuk belajar, berlatih, dan mengembangkan keterampilan bermain futsal.', '2026-09-17 22:28:51', '2026-09-17 22:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_26_055609_create_siswas_table', 1),
(5, '2026_08_26_055714_create_ekstrakurikulers_table', 1),
(6, '2026_08_26_055755_create_pendaftarans_table', 1),
(7, '2026_09_18_053153_add_ekstrakurikuler_id_to_siswas_table', 2),
(8, '2026_09_23_120533_add_role_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `eskul_id` bigint UNSIGNED NOT NULL,
  `alasan_mengikuti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `siswa_id`, `eskul_id`, `alasan_mengikuti`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'karena ingin menambah pengalaman', '2026-09-15 00:15:42', '2026-09-15 00:15:42'),
(2, 2, 5, 'karna hobi', '2026-09-17 23:13:45', '2026-09-17 23:13:45'),
(3, 3, 4, 'karena ingin melatih jiwa kemanusiaan saya', '2026-09-23 05:25:58', '2026-09-23 05:25:58'),
(4, 4, 4, 'karena ingin', '2026-09-23 22:32:01', '2026-09-23 22:32:01'),
(5, 5, 2, 'berawal ditnjk akhirnya lanjut sampai sekarang', '2026-09-23 22:36:44', '2026-09-23 22:36:44'),
(6, 6, 3, 'karena suka nari', '2026-09-23 22:49:39', '2026-09-23 22:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('74cjikKuojekJQqjLOCcirEERug2g8bYusR67Soz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI0VEUxWmgzbXBJQ3Rpck9YNVBtbkNqMVhHU04xbGE4dHVxZWZWa290IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvZWtzdHJhLnRlc3RcL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9fQ==', 1791174112),
('AbOMLEvvcSzIypw4AT1rImxVtCZ6blm9kRVzRFYB', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI1RW5Ga0E4ZUpSd3FxMEhodkZLUGF6bGkwUnJuQUMwZUNEbWwzOU95IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvZWtzdHJhLnRlc3RcL3Npc3dhIiwicm91dGUiOiJzaXN3YS5pbmRleCJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6NH0=', 1794192201),
('Gqz7uguuIRgiMeBaazSxVjavIKpMYk4BeI2u292S', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJFd0p0REZRUWxtR2UyWGg2ckFCQ0VacFlNRE54TXJoS2wxb2gxcEtpIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvZWtzdHJhLnRlc3RcL3Npc3dhIiwicm91dGUiOiJzaXN3YS5pbmRleCJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6OX0=', 1790229571),
('saWh7ZUyICu7Wk8RmoakRCUmyFtv4D3Ya16VcvNA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJ5TDJibE1PcUthbmV4Qzl5eERjdVlRbFVIWTdJbUl2OURNanJZQ0l5IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2Vrc3RyYS50ZXN0XC9zaXN3YVwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luLnNpc3dhIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1791173326),
('uQejTjMJYY0mej8jx4bgtQHqZBm0OYsHqsnHB0E7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJwM29ubGJBRTlSTHd2RExCSzVuZjVjMlRJM1B4T1o0ZlhtbGZWWG1QIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2Vrc3RyYS50ZXN0XC9zaXN3YVwvY3JlYXRlIiwicm91dGUiOiJzaXN3YS5jcmVhdGUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJ1cmwiOnsiaW50ZW5kZWQiOiJodHRwOlwvXC9la3N0cmEudGVzdFwvYWRtaW5cL2Rhc2hib2FyZCJ9fQ==', 1794363128),
('y11fELGZMCPyH8uNdvTYNo1R5vwZIunkbx2HqATB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJNMzhJYVFnUEp6azgxMjhxTVFrYmNVeHdyeEc1SElmeWJweU1wZFBUIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvZWtzdHJhLnRlc3RcL2FkbWluXC9kYXNoYm9hcmQiLCJyb3V0ZSI6ImFkbWluLmRhc2hib2FyZCJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1790321626);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ekstrakurikuler_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `user_id`, `name`, `telp`, `kelas`, `created_at`, `updated_at`, `ekstrakurikuler_id`) VALUES
(1, 4, 'Novita Salsabila', '08973578734', 'X PPLG 2', '2026-09-15 00:15:42', '2026-09-15 00:15:42', NULL),
(2, 5, 'Dirgahayu Raditya', '081326934567', 'XI TSM 4', '2026-09-17 23:13:45', '2026-09-17 23:13:45', NULL),
(3, 6, 'Keza zulian pangesti', '089767564353', 'X PPLG 2', '2026-09-23 05:25:58', '2026-09-23 05:25:58', NULL),
(4, 7, 'violetha', '085674854312', 'XI RPL 2', '2026-09-23 22:32:01', '2026-09-23 22:32:01', NULL),
(5, 8, 'Ridho Alfiansyah', '081245678329', 'X TO 1', '2026-09-23 22:36:44', '2026-09-23 22:36:44', NULL),
(6, 9, 'mukti indah lestari', '0764655547', 'X PPLG 3', '2026-09-23 22:49:39', '2026-09-23 22:49:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'admin@gmail.com', NULL, '$2y$12$wFildymD51hrXlpEY02N0e/HGfyglWzEsC77VjThUy9p43KeEwNCK', 'admin', NULL, '2026-09-02 01:08:47', '2026-09-02 01:08:47'),
(2, 'novita', 'novita@gmail.com', NULL, '$2y$12$JrbjKVZp/fyidn0xzEtMse8tie3lOWZUzVaOslS0gLqlbMvKgQprS', 'siswa', NULL, '2026-09-02 02:01:56', '2026-09-02 02:01:56'),
(4, 'Novita Salsabila', 'novitasalsabila@gmail.com', NULL, '$2y$12$DyrGRdniDk4sazV8Yh7IY.HLIueg.DBjgkXaybbWityCwq.PlWaMO', 'siswa', NULL, '2026-09-15 00:11:30', '2026-09-15 00:11:30'),
(5, 'Dirgahayu Raditya', 'dirgahayur@gmail.com', NULL, '$2y$12$jmh0j2qp/BVKLZ/.eIumz.AoL3a.qIK3Va4bFSgOB360UeT2i1SNe', 'siswa', NULL, '2026-09-17 23:12:24', '2026-09-17 23:12:24'),
(6, 'Keza zulian pangesti', 'kezapngst@gmail.com', NULL, '$2y$12$SW6QrTpyRsDNeREJDk4Y2exKBX7OcxXWQpxPxZAlaBRyv1AKLcSXW', 'siswa', NULL, '2026-09-23 05:24:28', '2026-09-23 05:24:28'),
(7, 'violetha', 'letha@gmail.com', NULL, '$2y$12$7PZXePcjDFel3GwM1mAK8..jtFXuZW/zgVBKC38mAPYxswUlip.jm', 'siswa', NULL, '2026-09-23 22:30:29', '2026-09-23 22:30:29'),
(8, 'Ridho Alfiansyah', 'ridho@gmail.com', NULL, '$2y$12$lEQGDN3H0Sj/XEvJz9qmwek/3ZN114oZY4Vz4.mcuwN0PfrHZJBuW', 'siswa', NULL, '2026-09-23 22:35:01', '2026-09-23 22:35:01'),
(9, 'mukti indah lestari', 'mukti@gmail.com', NULL, '$2y$12$QApCES.RulE6vfrRiIDgG.JVzoN2miYiy6TB2LYPNDcYOaLSv2uem', 'siswa', NULL, '2026-09-23 22:48:55', '2026-09-23 22:48:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_siswa_id_foreign` (`siswa_id`),
  ADD KEY `pendaftarans_eskul_id_foreign` (`eskul_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswas_user_id_foreign` (`user_id`),
  ADD KEY `siswas_ekstrakurikuler_id_foreign` (`ekstrakurikuler_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_eskul_id_foreign` FOREIGN KEY (`eskul_id`) REFERENCES `ekstrakurikulers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftarans_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_ekstrakurikuler_id_foreign` FOREIGN KEY (`ekstrakurikuler_id`) REFERENCES `ekstrakurikulers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
