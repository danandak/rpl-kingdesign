-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 06:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-kingdesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_094935_create_pesanan_table', 1),
(6, '2023_06_08_154249_create_jasa_table', 1),
(7, '2023_06_08_154921_create_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `r_jasa`
--

CREATE TABLE `r_jasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jasa` varchar(255) NOT NULL,
  `deskripsi_jasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `r_jasa`
--

INSERT INTO `r_jasa` (`id`, `nama_jasa`, `deskripsi_jasa`) VALUES
(1, 'Logo', 'Ingin Logo Bisnismu Menarik? Kami akan membantu untuk menciptakan logo yang memancarkan kepribadian unggul dari merek Anda.'),
(2, 'Brosur', 'Ingin Membuat Brosur untuk membantu penjualan anda? Kami akan bantu untuk menciptakan brosur yang kekinian yang akan meningkatkan penjualan anda.'),
(3, 'Flyer', 'Ingin Membuat Flyer untuk membantu penjualan anda? Kami akan bantu untuk menciptakan Flyer yang kekinian yang akan meningkatkan penjualan anda.'),
(4, 'Presentasi', 'Ingin Membuat Presentasi Anda menjadi menarik dan kekinian? Kami siap membantu membuat presentasi anda menjadi menarik dan kekinian.'),
(5, 'Kemasan', 'Ingin punya kemasan produk yang kekinian? Kami siap membuatkan desain kemasan yang super menarik sehingga dapat meningkatkan value produk anda'),
(6, 'Website', 'Ingin membuat tampilan websitemu menjadi menarik? Kami solusinya !!! Siap membuat desain website yang anda miliki lebih kekinian dan menarik hati para pelanggan.'),
(7, 'Aplikasi', 'Ingin membuat tampilan aplikasimu menjadi menarik? Kami solusinya !!! Siap membuat desain aplikasi yang anda miliki lebih kekinian dan menarik hati para pelanggan.'),
(8, 'Infografis', 'Ingin MembuatInfografis produk Anda menjadi menarik dan kekinian? Kami siap membantu membuat infografis dari produk anda menjadi menarik dan kekinian.');

-- --------------------------------------------------------

--
-- Table structure for table `r_status`
--

CREATE TABLE `r_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `r_status`
--

INSERT INTO `r_status` (`id`, `pesan`) VALUES
(1, 'SELESAI'),
(2, 'SEDANG DALAM PROSES'),
(3, 'REVISI');

-- --------------------------------------------------------

--
-- Table structure for table `t_pesanan`
--

CREATE TABLE `t_pesanan` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `jasa_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `deskripsi_pesanan` varchar(255) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_pesanan`
--

INSERT INTO `t_pesanan` (`id`, `user_id`, `jasa_id`, `status_id`, `nama_pembeli`, `no_telp`, `deskripsi_pesanan`, `tanggal_pemesanan`, `tanggal_selesai`) VALUES
('8ef059ca-0870-11ee-90ee-2cd05a301463', '99628d1b-793d-4f47-ba01-6a9776447daf', 1, 1, 'arya sinanggula', '0812323582019212', 'Buatkan logo yang menarik untuk membantu bisnis kuliner saya', '2023-06-11 17:55:30', '2023-06-11 17:55:30'),
('c5852e4d-0870-11ee-90ee-2cd05a301463', '99628d1b-793d-4f47-ba01-6a9776447daf', 2, 2, 'arya sinanggula', '0812323582019212', 'Buatkan brosur untuk bisnis kuliner saya', '2023-06-11 17:57:14', '2023-06-11 17:57:14'),
('ef98eda9-0870-11ee-90ee-2cd05a301463', '99628d1b-793d-4f47-ba01-6a9776447daf', 5, 3, 'arya sinanggula', '0812323582019212', 'Buatkan desain kemasan untuk bisnis kuliner saya', '2023-06-11 17:58:20', '2023-06-11 17:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id`, `nama`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
('99628d1b-793d-4f47-ba01-6a9776447daf', 'tes', 'tes@gmail.com', '$2y$10$nez5DoN/NOlTJnfnHBqdaeVgB0XVg1mN4uCmfnZxcv7S0.KTFXGTa', NULL, NULL, '2023-06-11 12:12:12', '2023-06-11 12:12:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `r_jasa`
--
ALTER TABLE `r_jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_status`
--
ALTER TABLE `r_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t_users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_jasa`
--
ALTER TABLE `r_jasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `r_status`
--
ALTER TABLE `r_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
