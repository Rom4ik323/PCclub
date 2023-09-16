-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 16 2023 г., 11:29
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `skorobogatov1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `hours` int NOT NULL,
  `lobby` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `guys` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `number`, `hours`, `lobby`, `guys`) VALUES
(1, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(2, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(3, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(4, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(5, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(6, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(7, 'test', '8-888-888-88-88', 1, 'Vip зал', 1),
(23, 'test', '8-888-888-88-77', 6, 'Обычный зал', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `id` int NOT NULL,
  `lobby` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `money` varchar(40) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`id`, `lobby`, `time`, `money`, `updated_at`) VALUES
(2, 'Общий зал', '16:00 - 22:00', '122', '2023-04-02 11:07:22.000000'),
(3, 'Общий зал', '22:00 - 08:00', '120', NULL),
(4, 'VIP зал', '08:00 - 16:00', '179', NULL),
(5, 'VIP зал', '16:00 - 22:00', '299', NULL),
(6, 'VIP зал', '22:00  08:00', '349', NULL),
(7, 'Vip зал', '08:00 - 16:00', '359', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'client', 'fhedrjaa@gg', NULL, '$2y$10$iCDLO6h4hRmYSu4uRqAsTeQVgxSPyfnFJRC/QqixTouLBGi4g2rR6', NULL, '2023-03-26 14:33:11', '2023-03-26 14:33:11', 0),
(2, 'test', 'test@test', NULL, '$2y$10$wCbIxTv2LIPK9dk6W7ryMexyeIvV2ZLfiy3TXhWq/oa76GGjri466', NULL, '2023-03-26 18:46:27', '2023-03-26 18:46:27', 0),
(3, 'admin', 'admin@admin', NULL, '$2y$10$jgymh79rBdjnWCoBl8ATVOZB6/fOw/GNOwRGMye2AWUDQ0Nw.lowO', NULL, '2023-03-26 19:23:49', '2023-03-26 19:23:49', 1),
(4, 'fffg', 'fff@fff', NULL, '$2y$10$YoUyBNlGMHKl1.huLRV/8uVM56mkADt/vDf9Kp3vwTNz8eKY18Pge', NULL, '2023-03-26 19:26:13', '2023-03-26 19:26:13', NULL),
(5, '123141234', '3@gmail.com', NULL, '$2y$10$xYJIR1UjUtdsdHUfiwWw6.qqR9I5iD2AxNB77vQgGQfpJKNPfOuWa', NULL, '2023-03-29 13:07:50', '2023-03-29 13:07:50', NULL),
(6, '123', '123@xn--80aa9cbo', NULL, '$2y$10$xBwA6YxIPCKvwbIEpYz3guf8J4sFysThyR5AXmmwVWDqTcjd8suiW', NULL, '2023-03-29 13:21:21', '2023-03-29 13:21:21', NULL),
(7, 'fff', '123@12333', NULL, '$2y$10$uRdNbUfuLScMYdaxS2YfZeEg3JM0zye0UEx8IdLQjRRMlvgPniy9a', NULL, '2023-03-31 01:46:12', '2023-03-31 01:46:12', NULL),
(8, 'test', 'fhedrjaa@xn--gg-8kca', NULL, '$2y$10$RmnDDAgUcyzlaQJr34Muee0vEmxXMjjWJqTptQ7N3ToDFqrLqVAHq', NULL, '2023-04-03 13:43:04', '2023-04-03 13:43:04', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
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
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
