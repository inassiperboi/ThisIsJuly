-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2023 pada 14.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_end`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `harga`, `stok`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(21, 'dress', 123000, 100, 'midi', 'NM9alAD39w90ppkaP9MCYpuWoDhdQ09kHLlEbnnr.jpg', '2023-07-16 04:58:06', '2023-07-16 04:58:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_07_14_100856_create_barangs_table', 1),
(8, '2023_07_14_102143_create_pesanans_table', 1),
(9, '2023_07_14_102332_create_pesanan_details_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(3, 2, '2023-07-15', '1', 4022222, '2023-07-14 19:06:15', '2023-07-14 21:08:34'),
(4, 2, '2023-07-15', '1', 9999999, '2023-07-14 21:12:54', '2023-07-14 21:13:51'),
(5, 2, '2023-07-15', '1', 11111110, '2023-07-14 21:17:28', '2023-07-14 21:17:34'),
(6, 2, '2023-07-15', '1', 3511111, '2023-07-14 21:22:12', '2023-07-14 21:24:03'),
(7, 2, '2023-07-15', '1', 600000, '2023-07-14 21:33:48', '2023-07-14 23:20:41'),
(8, 2, '2023-07-15', '1', 0, '2023-07-14 23:24:05', '2023-07-16 03:26:28'),
(9, 2, '2023-07-15', '1', 8888888, '2023-07-14 23:28:46', '2023-07-14 23:28:50'),
(10, 2, '2023-07-15', '1', 1111111, '2023-07-14 23:29:16', '2023-07-14 23:29:32'),
(11, 2, '2023-07-15', '1', 200000, '2023-07-14 23:30:11', '2023-07-14 23:30:16'),
(12, 2, '2023-07-15', '1', 3222222, '2023-07-14 23:33:44', '2023-07-14 23:48:40'),
(13, 2, '2023-07-15', '1', 2880000, '2023-07-15 00:02:27', '2023-07-15 19:36:56'),
(14, 4, '2023-07-15', '1', 26844442, '2023-07-15 00:39:39', '2023-07-15 00:40:23'),
(15, 4, '2023-07-15', '0', 2600000, '2023-07-15 00:40:38', '2023-07-15 00:40:42'),
(16, 2, '2023-07-16', '1', 11111110, '2023-07-15 19:37:58', '2023-07-15 19:38:01'),
(17, 2, '2023-07-16', '1', 0, '2023-07-15 19:38:36', '2023-07-15 19:43:22'),
(18, 2, '2023-07-16', '1', 2460000, '2023-07-15 19:44:07', '2023-07-15 19:44:11'),
(19, 2, '2023-07-16', '1', 615000, '2023-07-15 19:46:08', '2023-07-15 19:46:11'),
(20, 2, '2023-07-16', '1', 123000, '2023-07-15 19:46:32', '2023-07-15 19:46:35'),
(21, 2, '2023-07-16', '1', 123000, '2023-07-15 19:48:20', '2023-07-15 19:48:24'),
(22, 2, '2023-07-16', '1', 54692000, '2023-07-15 19:49:43', '2023-07-15 19:49:46'),
(23, 2, '2023-07-16', '1', 124300000, '2023-07-15 19:49:55', '2023-07-15 19:49:58'),
(24, 6, '2023-07-16', '0', 492000, '2023-07-16 04:59:26', '2023-07-16 05:23:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `barang_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(6, 5, 3, 5, 1800000, '2023-07-14 20:43:23', '2023-07-14 20:53:25'),
(7, 4, 3, 2, 2222222, '2023-07-14 21:08:06', '2023-07-14 21:08:06'),
(8, 4, 4, 9, 9999999, '2023-07-14 21:12:54', '2023-07-14 21:12:54'),
(9, 4, 5, 10, 11111110, '2023-07-14 21:17:28', '2023-07-14 21:17:28'),
(10, 4, 6, 1, 1111111, '2023-07-14 21:22:12', '2023-07-14 21:22:12'),
(11, 5, 6, 12, 2400000, '2023-07-14 21:22:30', '2023-07-14 21:22:30'),
(12, 5, 7, 3, 600000, '2023-07-14 21:33:48', '2023-07-14 21:33:48'),
(14, 4, 9, 8, 8888888, '2023-07-14 23:28:46', '2023-07-14 23:28:46'),
(15, 4, 10, 1, 1111111, '2023-07-14 23:29:16', '2023-07-14 23:29:16'),
(16, 5, 11, 1, 200000, '2023-07-14 23:30:11', '2023-07-14 23:30:11'),
(18, 6, 12, 2, 600000, '2023-07-14 23:48:19', '2023-07-14 23:48:34'),
(19, 7, 12, 2, 2222222, '2023-07-14 23:48:23', '2023-07-14 23:48:23'),
(21, 5, 12, 2, 400000, '2023-07-14 23:48:31', '2023-07-14 23:48:31'),
(22, 6, 13, 2, 400000, '2023-07-15 00:02:27', '2023-07-15 00:02:27'),
(23, 6, 14, 12, 2400000, '2023-07-15 00:39:39', '2023-07-15 00:39:39'),
(24, 4, 14, 12, 24444442, '2023-07-15 00:39:46', '2023-07-15 00:39:50'),
(26, 6, 15, 12, 2400000, '2023-07-15 00:40:38', '2023-07-15 00:40:38'),
(27, 9, 15, 1, 200000, '2023-07-15 00:40:42', '2023-07-15 00:40:42'),
(28, 11, 13, 20, 2480000, '2023-07-15 19:36:52', '2023-07-15 19:36:52'),
(29, 4, 16, 10, 11111110, '2023-07-15 19:37:58', '2023-07-15 19:37:58'),
(32, 12, 18, 20, 2460000, '2023-07-15 19:44:07', '2023-07-15 19:44:07'),
(33, 12, 19, 5, 615000, '2023-07-15 19:46:08', '2023-07-15 19:46:08'),
(34, 12, 20, 1, 123000, '2023-07-15 19:46:32', '2023-07-15 19:46:32'),
(35, 12, 21, 1, 123000, '2023-07-15 19:48:20', '2023-07-15 19:48:20'),
(36, 13, 22, 44, 54692000, '2023-07-15 19:49:43', '2023-07-15 19:49:43'),
(37, 13, 23, 100, 124300000, '2023-07-15 19:49:55', '2023-07-15 19:49:55'),
(38, 21, 24, 2, 492000, '2023-07-16 04:59:39', '2023-07-16 05:23:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'ilham', 'ilhamsamudra129@gmail.com', NULL, '$2y$10$bfUYCmdV99Lh0NgXqet.Ieb6MVDs1BDiCiHsf2nKd0bddCtTpBzYm', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-14 18:45:57', '2023-07-14 18:45:57'),
(3, 'anin', 'anin@gmail.com', NULL, '$2y$10$4LyT/Z9ncJ2DgOjdsAXP3eFFnhQdDU7pzFhk6DiImthtXE5ne/fTO', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 00:02:46', '2023-07-15 00:02:46'),
(4, 'vina', 'vina@gmail.com', NULL, '$2y$10$5jnBYtGTau80wBwZR/hgH.fd9dXQ4IHCwK.pKmDH3PAMQ29Nx4ef6', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 00:39:26', '2023-07-15 00:39:26'),
(6, 'ADMIN', 'vina@admin.com', NULL, '$2y$10$jRPiwq/G.3k7hBSxWLP2d.YldB2aZFDkCwOPjIq8hClw1fTVpvO1.', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-16 01:44:42', '2023-07-16 01:44:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
