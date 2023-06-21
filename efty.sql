-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:35 AM
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
-- Database: `efty`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `header` text NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `header`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Artist, Thinker', 'I am Web Developer/Designer @ Company.com', 'Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec. Fusce eget urna ante. Donec massa velit, varius a accumsan ac, tempor iaculis massa. Sed placerat justo sed libero varius vulputate. Ut a mi tempus massa malesuada fermentum.', '2023-06-21 03:07:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Media', '2023-06-21 03:34:25', '2023-06-21 03:34:25'),
(2, 'IIustration', '2023-06-21 03:34:50', '2023-06-21 03:34:50'),
(3, 'Video', '2023-06-21 03:35:02', '2023-06-21 03:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_img` varchar(255) NOT NULL,
  `client_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_img`, `client_link`, `created_at`, `updated_at`) VALUES
(1, 'media/client/1769280186730039.png', 'https://www.facebook.com/', '2023-06-21 03:11:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funs`
--

CREATE TABLE `funs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_title` varchar(255) NOT NULL,
  `icon_time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funs`
--

INSERT INTO `funs` (`id`, `icon`, `icon_title`, `icon_time`, `created_at`, `updated_at`) VALUES
(1, 'pe-7s-icon pe-7s-smile', 'Hapu', '200', '2023-06-21 03:13:19', '2023-06-21 03:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expire` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `name`, `email`, `password`, `avatar`, `gender`, `dob`, `phone`, `token`, `token_expire`, `created_at`, `updated_at`) VALUES
(1, 'Junayed Rahman Faiaz', 'admin@gmail.com', '$2y$10$wnbwk0kuINz5uZHDLcVscuh7EDdYpd4FwttawAxQVncWFbPbSfAHK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 03:01:46', '2023-06-21 03:01:46');

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
(34, '2014_01_07_073615_create_tagged_table', 1),
(35, '2014_01_07_073615_create_tags_table', 1),
(36, '2016_06_29_073615_create_tag_groups_table', 1),
(37, '2016_06_29_073615_update_tags_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2020_03_13_083515_add_description_to_tags_table', 1),
(40, '2023_05_01_180050_create_logins_table', 1),
(41, '2023_06_01_220112_create_profiles_table', 1),
(42, '2023_06_04_002019_create_abouts_table', 1),
(43, '2023_06_04_193012_create_testimonials_table', 1),
(44, '2023_06_04_211458_create_services_table', 1),
(45, '2023_06_04_222149_create_clients_table', 1),
(46, '2023_06_04_230636_create_funs_table', 1),
(47, '2023_06_04_234711_create_resumes_table', 1),
(48, '2023_06_05_221125_create_portfolios_table', 1),
(49, '2023_06_11_232747_create_multi_imgs_table', 1),
(50, '2023_06_21_010751_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'media/multi_img/1769281266558953.jpg', '2023-06-21 03:28:22', '2023-06-21 03:28:22'),
(2, '1', 'media/multi_img/1769281267061469.jpg', '2023-06-21 03:28:23', '2023-06-21 03:28:23'),
(3, '1', 'media/multi_img/1769281267604594.jpg', '2023-06-21 03:28:24', '2023-06-21 03:28:24'),
(4, '2', 'media/multi_img/1769281303315690.jpg', '2023-06-21 03:28:57', '2023-06-21 03:28:57'),
(5, '2', 'media/multi_img/1769281303806794.jpg', '2023-06-21 03:28:58', '2023-06-21 03:28:58'),
(6, '2', 'media/multi_img/1769281304334777.jpg', '2023-06-21 03:28:58', '2023-06-21 03:28:58');

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_tag` varchar(255) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_image` varchar(255) DEFAULT NULL,
  `project_tag` varchar(255) DEFAULT NULL,
  `project_dev_name` varchar(255) DEFAULT NULL,
  `project_link` varchar(255) DEFAULT NULL,
  `project_create` varchar(255) DEFAULT NULL,
  `project_description` longtext DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `project_sub_img` varchar(255) DEFAULT NULL,
  `project_video_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_tag`, `project_name`, `project_image`, `project_tag`, `project_dev_name`, `project_link`, `project_create`, `project_description`, `tags`, `project_sub_img`, `project_video_link`, `created_at`, `updated_at`) VALUES
(1, 'My Best Works', 'Protfolio', 'media/portfolio/1769281265744488.jpg', 'protfolo', 'Faiaz', 'sfsdffsf', '2022', 'Aliquam euismod aliquam massa, quis eleifend dui sodales vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '[\"Php\",\"Html\",\"Css\",\"Javascript\"]', NULL, 'ffdf', '2023-06-21 03:28:22', '2023-06-21 03:28:22'),
(2, 'fdgfg', 'gdgdg', 'media/portfolio/1769281302772343.jpg', 'gdgg', 'gdg', 'gdg', 'gdg', 'gdgd', '[\"gdgdgd\",\"fdgg\"]', NULL, 'fd', '2023-06-21 03:28:57', '2023-06-21 03:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `get_in_touch` longtext NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `Freelance` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `title`, `designation`, `profile`, `github`, `linkedin`, `facebook`, `get_in_touch`, `location`, `email`, `number`, `resume`, `Freelance`, `created_at`, `updated_at`) VALUES
(1, 'Junayed Rahman Faiaz', '6 Months', 'Web Developer', 'media/profile/1769279900146242.png', 'github.com', 'faiaz', 'faiaz', 'Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.', 'Dhaka', 'admin@gmail.com', '012568522', 'C:\\xampp\\tmp\\php537F.tmp', 'Abablle', '2023-06-21 03:06:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `resume` longtext DEFAULT NULL,
  `skill_name` varchar(255) DEFAULT NULL,
  `skill_input` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `title`, `name`, `year`, `qualification`, `university`, `description`, `resume`, `skill_name`, `skill_input`, `created_at`, `updated_at`) VALUES
(1, NULL, 'education', '2022-2024', 'Specialization Course', 'University of Studies', 'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor. vvf\"', NULL, NULL, NULL, '2023-06-21 03:21:32', '2023-06-21 03:21:32'),
(2, NULL, 'experience', '2022-2024', 'Specialization Course', 'University of Studies', 'pien, pharetra consectetur fringilla vitae, interdum sed tortor. vvf\".', NULL, NULL, NULL, '2023-06-21 03:22:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_img` varchar(255) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_dec` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_img`, `service_title`, `service_dec`, `created_at`, `updated_at`) VALUES
(1, 'media/service/1769280148224310.png', 'Web Design', 'orem ipsum dolor sit amet, consectetur adipisicing elit', '2023-06-21 03:10:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) NOT NULL,
  `tag_name` varchar(125) NOT NULL,
  `tag_slug` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) NOT NULL,
  `name` varchar(125) NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT 0,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) NOT NULL,
  `name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial` longtext NOT NULL,
  `testimonial_img` varchar(255) NOT NULL,
  `testimonial_name` varchar(255) NOT NULL,
  `testimonial_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial`, `testimonial_img`, `testimonial_name`, `testimonial_title`, `created_at`, `updated_at`) VALUES
(1, '\"Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero se\"', 'media/testimonial/1769280039038224.png', 'Sir', 'Sir', '2023-06-21 03:08:51', NULL),
(2, 'Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero se', 'media/testimonial/1769280060586898.jpg', 'Faiaz', 'Developer', '2023-06-21 03:09:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funs`
--
ALTER TABLE `funs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `logins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indexes for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Indexes for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `funs`
--
ALTER TABLE `funs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
