-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 08:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `bio`, `dob`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ariful Islam', 'admin@admin.com', '(+88) 01797 741298', '', '31 January, 1995', NULL, '$2y$10$a9.UjgajU53OTonlA/RsBugea00akqnEp7hr8/P3r8380N8lkN8DC', 'HLOoAGkh5czyM9LxSvsUpij0OsUBB0ri83hRyG0cyuCr47rDKVkk6sHzQ5sF', '2020-01-08 01:50:18', '2020-01-08 01:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `school_id`, `user_id`, `comment`, `email`, `rating`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 'Best School around here.', NULL, NULL, '2020-02-01 06:26:41', '2020-02-01 06:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_structures`
--

CREATE TABLE `fee_structures` (
  `fee_id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `month_fee` int(11) NOT NULL,
  `library_fee` int(11) NOT NULL,
  `other_fee` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_codes`
--

CREATE TABLE `location_codes` (
  `loc_id` bigint(20) UNSIGNED NOT NULL,
  `loc_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longi` double NOT NULL,
  `lati` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_codes`
--

INSERT INTO `location_codes` (`loc_id`, `loc_name`, `longi`, `lati`, `created_at`, `updated_at`) VALUES
(1, 'Adabor', 23.7733, 90.3548, NULL, NULL),
(2, 'Badda', 23.7805, 90.4267, NULL, NULL),
(3, 'Banani', 23.7937, 90.4066, NULL, NULL),
(4, 'Bangshal', 23.7181, 90.4007, NULL, NULL),
(5, 'Baridhara', 23.7999, 90.4208, NULL, NULL),
(6, 'Basabo ', 23.7426, 90.4308, NULL, NULL),
(7, 'Basundhara', 23.8191, 90.4526, NULL, NULL),
(8, 'Cantonment', 23.8282, 90.389, NULL, NULL),
(9, 'Chaukbazar', 23.717, 90.3963, NULL, NULL),
(10, 'Farmgate', 23.7561, 90.3872, NULL, NULL),
(11, 'Gulshan', 23.7925, 90.4078, NULL, NULL),
(12, 'Hazaribagh', 23.9933, 85.362, NULL, NULL),
(13, 'Jatrabari', 23.7106, 90.4349, NULL, NULL),
(14, 'Kafrul', 23.7896, 90.3913, NULL, NULL),
(15, 'Kamrangirchar', 23.7182, 90.3678, NULL, NULL),
(16, 'Kalabagan', 23.7494, 90.3831, NULL, NULL),
(17, 'Khilgaon', 23.7566, 90.4644, NULL, NULL),
(18, 'Khilkhet', 23.8319, 90.4178, NULL, NULL),
(19, 'Lalbag', 23.7182, 90.3866, NULL, NULL),
(20, 'Malibag', 23.7466, 90.4128, NULL, NULL),
(21, 'Mogbazar', 23.7494, 90.409, NULL, NULL),
(22, 'Mohakhali', 23.7778, 90.4057, NULL, NULL),
(23, 'Mohammadpur', 23.766, 90.3586, NULL, NULL),
(24, 'Motijheel', 23.733, 90.4172, NULL, NULL),
(25, 'Nawabganj', 23.6918, 90.1682, NULL, NULL),
(26, 'New Market', 23.7332, 90.3839, NULL, NULL),
(27, 'Paltan', 23.7353, 90.4163, NULL, NULL),
(28, 'Purbachal', 23.8458, 90.4974, NULL, NULL),
(29, 'Ramna', 23.733, 90.3984, NULL, NULL),
(30, 'Rampura', 23.7612, 90.4208, NULL, NULL),
(31, 'Tejgaon', 23.7598, 90.3913, NULL, NULL),
(32, 'Uttara ', 23.8759, 90.3795, NULL, NULL),
(33, 'Wari', 23.7174, 90.4178, NULL, NULL),
(34, 'Dhanmondi', 23.7461, 90.3742, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_06_045902_create_location_codes_table', 1),
(5, '2020_01_08_062845_create_admins_table', 1),
(6, '2020_01_08_070149_create_school_infos_table', 1),
(7, '2020_01_12_041630_create_school_posts_table', 1),
(8, '2020_01_16_065753_create_comments_table', 1),
(9, '2020_01_16_074731_create_fee_structures_table', 1),
(10, '2020_01_24_193221_create_likes_table', 1),
(11, '2020_01_24_220246_create_post_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_infos`
--

CREATE TABLE `school_infos` (
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalStudent` int(11) NOT NULL,
  `feeStructureImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `low_incomeStudents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equityOverview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studentProgress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testScore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classRange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longi` double NOT NULL,
  `lati` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_infos`
--

INSERT INTO `school_infos` (`school_id`, `school_name`, `email`, `phone`, `image`, `cost`, `s_address`, `area`, `type`, `totalStudent`, `feeStructureImg`, `website`, `low_incomeStudents`, `equityOverview`, `studentProgress`, `testScore`, `rating`, `classRange`, `available`, `longi`, `lati`, `created_at`, `updated_at`) VALUES
(6, 'Sunnydale School', 'sunnydalejunior1@gmail.com', 1713389795, 'public/rev/admin/school_img/1656801634663056.jpg', 10000, 'House #34, Road #7, Dhanmondi R/A, Dhaka 1205', 'Dhanmondi', 'Privet', 430, 'public/rev/admin/school_img/1656801634667974.jpg', 'www.sunnydale.edu.bd', NULL, NULL, NULL, NULL, '5', 'I-X', '1', 23.7495, 90.3752, '2020-01-26 14:32:46', '2020-01-26 14:32:46'),
(7, 'Mastermind School', 'info@mastermindschool.org', 29130878, 'public/rev/admin/school_img/1656801933998814.jpg', 12000, 'House#5, Road#12 (New) 31 (Old), Dhanmondi R/A, Dhaka', 'Dhanmondi', 'Privet', 470, 'public/rev/admin/school_img/1656801934003642.jpg', 'www.mastermindschool.org', NULL, NULL, NULL, NULL, '5', 'I-X', '1', 23.7523, 90.3765, '2020-01-26 14:37:31', '2020-01-26 14:37:31'),
(8, 'Badda International School', 'info@oisbd.net', 29115392, 'public/rev/admin/school_img/1656807063527171.jpg', 1000, '318, Membari, Moynarbag, Hossain Market, North Badda, Badda, Dhaka 1212', 'Dhanmondi', 'Privet', 370, 'public/rev/admin/school_img/1656807063528755.jpg', 'www.oisbd.net', NULL, NULL, NULL, NULL, '5', 'I-X', '1', 23.782878, 90.428732, '2020-01-26 14:42:30', '2020-01-26 15:59:03'),
(9, 'Maple International School', 'info@mlis.edu.bd', 28156672, 'public/rev/admin/school_img/1656802621323856.jpg', 12000, 'House no. 95/1, Road no. 11/A, Dhanmondi, Dhaka', 'Dhanmondi', 'Privet', 150, 'public/rev/admin/school_img/1656802621327863.jpg', 'www.mlis.edu.bd', NULL, NULL, NULL, NULL, '5', 'I-X', '1', 23.750455, 90.370088, '2020-01-26 14:48:27', '2020-01-26 14:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `school_posts`
--

CREATE TABLE `school_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_posts`
--

INSERT INTO `school_posts` (`id`, `users_id`, `title`, `slug`, `image`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(24, 1, 'Dhanmondi Boys Govt. High School', NULL, 'public/rev/admin/school_img/1656707407457156.jpg', 'This is the best school around Dhanmondi area.', 0, 1, 0, '2020-01-25 13:35:04', '2020-01-25 13:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `image`, `area`, `about`, `phone`, `occupation`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Asaduzzaman nur', 'nurbd@gmail.com', NULL, NULL, 'Dhanmondi', NULL, NULL, NULL, NULL, '$2y$10$WlsX1p4h.FGAIj1PVRmeGuHrNZ/zfcjfAswO5aYfSvvyjLFbRqmtK', NULL, '2020-01-24 14:49:51', '2020-01-24 14:49:51'),
(2, 'Ariful Islam', 'badhon@gmail.com', '12, Old Dhanmondi, Dhaka', 'public/rev/admin/school_img/16573144430480270.jpg', 'Dhanmondi', NULL, 1797741298, 'Student', NULL, '$2y$10$SpSZswJD26bryATcGb1XauBTjfDp4Qm2gObN//SMa.CsZ6HSEQcPu', NULL, '2020-01-25 01:40:39', '2020-02-01 06:23:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_school_id_foreign` (`school_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structures`
--
ALTER TABLE `fee_structures`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_users_id_foreign` (`users_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

--
-- Indexes for table `location_codes`
--
ALTER TABLE `location_codes`
  ADD PRIMARY KEY (`loc_id`);

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
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `school_infos`
--
ALTER TABLE `school_infos`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `school_posts`
--
ALTER TABLE `school_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_posts_users_id_foreign` (`users_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_structures`
--
ALTER TABLE `fee_structures`
  MODIFY `fee_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location_codes`
--
ALTER TABLE `location_codes`
  MODIFY `loc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `school_infos`
--
ALTER TABLE `school_infos`
  MODIFY `school_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_posts`
--
ALTER TABLE `school_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `school_infos` (`school_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `school_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `school_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `school_posts`
--
ALTER TABLE `school_posts`
  ADD CONSTRAINT `school_posts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
