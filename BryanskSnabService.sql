-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 01 2023 г., 12:36
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `BryanskSnabService`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_10_11_152954_add_isadmin_field', 1),
(12, '2023_07_12_070645_create_questions_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Каков наименьший срок размещения груза?', 'Минимальное время хранения – одни сутки.', '2023-07-12 05:37:14', '2023-07-12 09:47:47'),
(4, 'От чего зависит цена?', 'Среди наших преимуществ справедливое ценообразование. Стоимость услуги зависит от размеров места, занимаемого грузом, его характеристик, времени хранения, вида помещения. Также в общую сумму включаются дополнительные услуги. Расчет осуществляется посуточно.', '2023-07-12 06:37:31', '2023-07-12 09:48:16'),
(5, 'Как работает складской комплекс?', 'Склад открыт с понедельника по пятницу с 9 до 18 часов.', '2023-07-12 06:38:02', '2023-07-12 10:13:54'),
(6, 'Можно ли заранее посмотреть на комплекс?', 'Да. Но перед приездом необходимо предупредить нас.', '2023-07-12 06:38:34', '2023-07-12 10:14:20'),
(11, 'Для каких вещей подходят склады?', 'Наши помещения могут использоваться для хранения всей домашней утвари, документов, бытовой техники, мебели, одежды, игрушек, спортивного инвентаря и туристического снаряжения.', '2023-07-12 10:14:45', '2023-07-12 10:14:45'),
(12, 'Что нельзя хранить на складе?', '<p>Мы не принимаем на хранение предметы, которые запрещены к обороту на территории РФ. Также запрещено размещать в складах:<br>•&nbsp;&nbsp;&nbsp;&nbsp;животных и птиц;<br>•&nbsp;&nbsp;&nbsp;&nbsp;продукты питания с коротким сроком годности;<br>•&nbsp;&nbsp;&nbsp;&nbsp;вещества, которые легко воспламеняются или относятся к взрывоопасным;<br>•&nbsp;&nbsp;&nbsp;&nbsp;летучие жидкости;<br>•&nbsp;&nbsp;&nbsp;&nbsp;краски в негерметичной упаковке;<br>•&nbsp;&nbsp;&nbsp;&nbsp;оружие.</p>', '2023-07-12 10:15:13', '2023-07-13 04:08:39'),
(13, 'Как узнать, какая площадь понадобится для хранения?', 'Если у вас нет опыта в использовании складских помещений, то можете воспользоваться для предварительного расчета простой формулой. Согласно ей площадь комнаты, в которой стоят вещи, нужно разделить на 7. Получившееся значение покажет рекомендуемый размер места на складе.', '2023-07-12 10:15:38', '2023-07-12 10:15:38');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$bp9/gYLwIlCpPchWX5yjF.UCj5ly3/iYkyc/yEHEMzjR9wS9n7p5i', NULL, '2023-07-12 05:36:26', '2023-07-12 05:36:26', 1),
(4, 'Alex', 'alex@bk.ru', NULL, '$2y$10$/fLsdYAFqeyotykQA8CsEeH/vaC.FHuQSrYT9jY3Rd05tFSZFvd3W', NULL, '2023-07-18 05:45:54', '2023-07-18 06:18:52', 0),
(5, 'Дениска', 'kalimm@bk.ru', NULL, '$2y$10$fiOjCbiWLQyOqcRerriAD.0TEIrEjaYzFSlcqSaFJ05Zdc.rqjbCq', NULL, '2023-07-18 05:48:38', '2023-07-18 06:39:27', 1),
(7, 'Andrey', 'andrey@mail.com', NULL, '$2y$10$4yFdRGjUwbRQnDdajzuaC.Bl1ZOxPwxI.JIPWUZAVu3LDktzmJt.a', NULL, '2023-07-18 05:56:25', '2023-07-18 06:13:26', 0),
(8, 'Kiril', 'kiril@yandex.ru', NULL, '$2y$10$ARb3urDSycO7oUYsc5VsbOwedY3eTlTekjr.JsH4cEXUEK2WqemnK', NULL, '2023-07-18 06:19:32', '2023-07-18 06:19:32', 0),
(9, 'Irina', 'ira@mail.ru', NULL, '$2y$10$YMHHsAKHobpGSzL36By7C.zq2sqyk0mi1Xw3/Tf7naB0zfV5HLweC', NULL, '2023-07-18 06:19:56', '2023-07-18 06:19:56', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
