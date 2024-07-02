-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2024 at 06:56 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u546787212_add_up_coin`
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
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `next_top_up` varchar(100) DEFAULT NULL,
  `maturity_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `user_id`, `plan`, `amount`, `status`, `next_top_up`, `maturity_date`, `created_at`, `updated_at`) VALUES
(12, '10', 'silver', '1000', 1, '1671894982', '2022-12-24', '2022-12-24 15:15:44', '2022-12-24 15:35:53'),
(13, '10', 'basic', '100', 1, '1672272004', '2022-12-29', '2022-12-24 16:21:52', '2022-12-29 00:00:03'),
(14, '10', 'silver', '1000', 1, '1672444806', '2022-12-31', '2022-12-24 16:22:54', '2022-12-31 00:00:03');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_31_131826_create_investments_table', 2),
(6, '2022_10_31_132952_create_wallets_table', 3),
(7, '2022_10_31_133900_create_transactions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_id`, `user_id`, `type`, `amount`, `status`, `attachment`, `created_at`, `updated_at`) VALUES
(40, '18d6b41', '10', 'deposit', 1000.00, '1', 'deposit_receipt/1671894912.png', '2022-12-24 15:15:12', '2022-12-24 15:15:28'),
(41, '3d80382', '10', 'credit', 1000.00, '1', '', '2022-12-24 15:15:28', '2022-12-24 15:15:28'),
(42, '10c9e8f', '10', 'debit', 1000.00, '1', '', '2022-12-24 15:15:44', '2022-12-24 15:15:44'),
(43, '87fb31c', '10', 'credit', 5.00, '1', '', '2022-12-24 15:16:01', '2022-12-24 15:16:01'),
(44, 'ede67fb', '10', 'deposit', 1000.00, '1', 'deposit_receipt/1671898855.jpg', '2022-12-24 16:20:55', '2022-12-24 16:21:25'),
(45, '2f5caeb', '10', 'credit', 1000.00, '1', '', '2022-12-24 16:21:25', '2022-12-24 16:21:25'),
(46, '25683fe', '10', 'debit', 100.00, '1', '', '2022-12-24 16:21:52', '2022-12-24 16:21:52'),
(47, '1fcbada', '10', 'deposit', 1000.00, '1', 'deposit_receipt/1671898941.jpeg', '2022-12-24 16:22:21', '2022-12-24 16:22:34'),
(48, '74da470', '10', 'credit', 1000.00, '1', '', '2022-12-24 16:22:34', '2022-12-24 16:22:34'),
(49, '1b5a32d', '10', 'debit', 1000.00, '1', '', '2022-12-24 16:22:54', '2022-12-24 16:22:54'),
(50, 'f2408bd', '10', 'credit', 3.50, '1', '', '2022-12-26 00:00:06', '2022-12-26 00:00:06'),
(51, 'f2408bd', '10', 'credit', 5.00, '1', '', '2022-12-26 00:00:06', '2022-12-26 00:00:06'),
(52, 'bcbf64d', '10', 'credit', 3.50, '1', '', '2022-12-27 00:00:07', '2022-12-27 00:00:07'),
(53, 'bcbf64d', '10', 'credit', 5.00, '1', '', '2022-12-27 00:00:07', '2022-12-27 00:00:07'),
(54, '80bca44', '10', 'credit', 3.50, '1', '', '2022-12-28 00:00:04', '2022-12-28 00:00:04'),
(55, '80bca44', '10', 'credit', 5.00, '1', '', '2022-12-28 00:00:04', '2022-12-28 00:00:04'),
(56, '2f598ff', '10', 'credit', 5.00, '1', '', '2022-12-29 00:00:03', '2022-12-29 00:00:03'),
(57, 'a35a0c4', '10', 'credit', 5.00, '1', '', '2022-12-30 00:00:06', '2022-12-30 00:00:06'),
(58, '83950ce', '12', 'deposit', 0.00, '1', 'deposit_receipt/1672593768.jpg', '2023-01-01 17:22:48', '2023-01-01 21:26:38'),
(59, '072db48', '12', 'credit', 0.00, '1', '', '2023-01-01 21:26:38', '2023-01-01 21:26:38'),
(60, '6c9c3c9', '10', 'deposit', 1000.00, '1', 'deposit_receipt/1673202279.png', '2023-01-08 18:24:39', '2023-01-08 18:25:55'),
(61, '818597a', '10', 'credit', 1000.00, '1', '', '2023-01-08 18:25:55', '2023-01-08 18:25:55'),
(62, 'e4e84ca', '17', 'deposit', 100.00, '0', 'deposit_receipt/1678530075.png', '2023-03-11 10:21:15', '2023-03-11 10:21:15'),
(63, '928ed1a', '17', 'deposit', 200.00, '0', 'deposit_receipt/1681895430.jpeg', '2023-04-19 09:10:30', '2023-04-19 09:10:30'),
(64, 'ce71d08', '20', 'deposit', 100.00, '0', 'deposit_receipt/1686042532.png', '2023-06-06 09:08:52', '2023-06-06 09:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `country`, `phone`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'kufre', 'whitemaxwell5@gmail.com', 'Nigeria', '21212121212', NULL, '$2y$10$1MpxcKkS5H6tnO4XUwZtp.3N/vxBnmM9Y0xyfodcPxuDqRkn0ju8m', 0, NULL, '2022-11-28 06:29:53', '2022-11-28 06:29:53'),
(11, 'admin', 'admin@addupcoin.com', 'Afghanistan', '090567894821', NULL, '$2y$10$crh4jh5Wfl6fATpRIbR0f.bIpSZqq7GXxDBeajlkywlve4royfZJK', 1, NULL, '2022-11-29 11:29:20', '2022-11-29 11:29:20'),
(12, 'Cityboi', 'cityyardproperty@gmail.com', 'Kenya', '08173223835', NULL, '$2y$10$1o8HbBncvTLJuYL7pmWIeeC7gmdSW8PsEcu.wTuyl7yC6/CBcDuEe', 0, 'rU43JRogPkiBnYL3zubypggqdhX2OYdFQEnlrybwEOzwajhfRKUEiuIPMtbq', '2023-01-01 16:50:52', '2023-01-01 16:50:52'),
(13, 'Combet Ohct', 'combetohct@yahoo.com', 'India', '09123456789', NULL, '$2y$10$N6rFStcBaiaqco9g4U714OxB1PWXMbFwkHApzQlz9/j6lkXtGLRn2', 0, NULL, '2023-01-14 22:24:52', '2023-01-14 22:24:52'),
(14, 'Mfjejdkwdwfkjwkw,.//fwdbdjswfjwsjdakdjwsjfhwkdajdk рырвоышвофшаргырагфошвОРРРраы: kkwjdkwdwfkefwksmxdke Заосшырацоырвфвравыо gjdjwsfegfksfgrjkfkfhjk addupcoin.com', 'ma.ekely418@gmail.com', 'Philippines', '87665167686', NULL, '$2y$10$Go1tf.uxycWEzbBXQ4uUX.5/FrZNVQkqm1Fv3uDo1ydG60icefZZm', 0, NULL, '2023-01-23 04:13:22', '2023-01-23 04:13:22'),
(15, 'Mefijwdihwdjwsjdhwjqsqodkwfk fjebfhjhdjwshfewifejqwwqfewjfewhgewu kfwejfwefhewgeuwh:jfefehfejfjehfie//NJjdshdjwfhwu оаипруафравгпшцурафцоварквшпругвыовапцушгысвыарршрпшц jcsafsafhawfjewoifhe ufhdfwjdhewifgewiufhjadwfewi addupcoin.com', 'a.lb.ert.h.a.n.sh.in.4.9@gmail.com', 'Saint Vincent and the Grenadines', '88248234799', NULL, '$2y$10$G1SbjvXkjfXdTL76IZWJo.KyHa/jqlENgaGlBPBQOLrF80mYC6wMS', 0, NULL, '2023-03-02 12:50:53', '2023-03-02 12:50:53'),
(16, 'jthum6763', 'jthum6763@gmail.com', 'United States', '15616325212', NULL, '$2y$10$HzjR528w3sz3EYAyEeLDjuBnDLaKH7Piqd8e5wuGavzHdEnsD3R4.', 0, NULL, '2023-03-03 04:24:54', '2023-03-03 04:24:54'),
(17, 'chizyixbdn', 'chizyix@gmail.com', 'Afghanistan', '09029735681', NULL, '$2y$10$RwZU2cUQ060C7LRtkhublex.wHsCZQ4Ep1yMR3aDlSEbWTwaTSjiy', 0, 'MlSGmQ3MN9C5VjiTLMGfEXy1bBKtyDv3RTdPm3dfSg4FAFZ4j7sod52QvIx9', '2023-03-11 10:20:36', '2023-03-11 10:20:36'),
(18, 'HiramRax', 'girtalos@yandex.com', 'Martinique', '87419542626', NULL, '$2y$10$tQMDSlte5FynZIRrZWnwr.U/lKmqAF1bgw/7YLrDrNeoIlmVvGlhC', 0, NULL, '2023-04-30 10:06:01', '2023-04-30 10:06:01'),
(19, 'aynaz', 'pardisfaz3@gmail.com', 'Afghanistan', '09123266119', NULL, '$2y$10$wbmTtd.lHVGcwj0aerngyO9ihVQvbrPFfS8cpLNZhgSx7Kf3NBVHG', 0, NULL, '2023-05-08 04:33:36', '2023-05-08 04:33:36'),
(20, 'John', 'mainyard6@gmail.com', 'Nigeria', '078865554', NULL, '$2y$10$42TUHc66YmHtSrfi/zVWIu6CogUJJt3eqyMcDTWk7LLeZxabvcosG', 0, 'jTA5bLxqGCcpt0uvDrG49Mh7lzgXU7H4hWSJXJlLeQjnEiFX7DOFDQmHKghA', '2023-06-05 14:04:08', '2023-06-05 14:04:08'),
(21, 'AndrewDef', 'anomarzen1979@mail.ru', 'Lithuania', '81733935643', NULL, '$2y$10$t7U.UIDak0h1j2bFJgxTxu2Wh0zvSWzo9vUghMe/0nVkSWIhzgAzO', 0, NULL, '2023-09-21 03:38:51', '2023-09-21 03:38:51'),
(22, 'Nejam Uddin', 'gmediacxb@gmail.com', 'Bangladesh', '01813226622', NULL, '$2y$10$PDnnQYEfYQQAsc1m4BRTG.oLQUznBXHOqwat0hYEgZVUPFdp3.8g6', 0, NULL, '2023-10-08 12:26:38', '2023-10-08 12:26:38'),
(23, 'masanjac76@gmail.com', 'masanjac76@gmail.com', 'Tanzania', '0673355342', NULL, '$2y$10$UwOpPrfa66O0ZDjcRax.4uwaoqMo5cPaOjKfy.DIe/IgJHjQuLhiy', 0, NULL, '2023-10-14 21:23:43', '2023-10-14 21:23:43'),
(24, 'Mfjejdjw uUHHUUJdiwjdiwj твагРГРГРГашоаувауга jhduwifjefheufheuh eufhudfjhuhоарвоаруауаруг аРГРПРОРПРПРПавоыорр dhfhsdhsdhudhsfuHGHGH fhdhhhffh addupcoin.com', 'yasen.krasen.13+95678@mail.ru', 'Thailand', '82775381896', NULL, '$2y$10$iII.NR3VlB5EJjTEDBITSOQPN3IQOrLXHyhk.HKpTFqsfgkwtfbTm', 0, NULL, '2023-10-14 22:53:42', '2023-10-14 22:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `balance` double(10,2) NOT NULL,
  `payout_details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `balance`, `payout_details`, `created_at`, `updated_at`) VALUES
(1, '9', 0.00, NULL, '2022-11-15 15:03:48', '2022-11-15 15:03:48'),
(2, '10', 1940.50, NULL, '2022-11-28 06:29:53', '2023-01-08 18:25:55'),
(3, '11', 0.00, NULL, '2022-11-29 11:29:20', '2022-11-29 11:29:20'),
(4, '12', 0.00, NULL, '2023-01-01 16:50:52', '2023-01-01 21:26:38'),
(5, '13', 0.00, NULL, '2023-01-14 22:24:52', '2023-01-14 22:24:52'),
(6, '14', 0.00, NULL, '2023-01-23 04:13:22', '2023-01-23 04:13:22'),
(7, '15', 0.00, NULL, '2023-03-02 12:50:53', '2023-03-02 12:50:53'),
(8, '16', 0.00, NULL, '2023-03-03 04:24:54', '2023-03-03 04:24:54'),
(9, '17', 0.00, NULL, '2023-03-11 10:20:36', '2023-03-11 10:20:36'),
(10, '18', 0.00, NULL, '2023-04-30 10:06:01', '2023-04-30 10:06:01'),
(11, '19', 0.00, NULL, '2023-05-08 04:33:36', '2023-05-08 04:33:36'),
(12, '20', 0.00, NULL, '2023-06-05 14:04:08', '2023-06-05 14:04:08'),
(13, '21', 0.00, NULL, '2023-09-21 03:38:51', '2023-09-21 03:38:51'),
(14, '22', 0.00, NULL, '2023-10-08 12:26:38', '2023-10-08 12:26:38'),
(15, '23', 0.00, NULL, '2023-10-14 21:23:43', '2023-10-14 21:23:43'),
(16, '24', 0.00, NULL, '2023-10-14 22:53:42', '2023-10-14 22:53:42');

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
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
