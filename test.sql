-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 05 2017 г., 16:30
-- Версия сервера: 5.7.17
-- Версия PHP: 7.0.16-3+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access_token`
--

CREATE TABLE `access_token` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `access_token`
--

INSERT INTO `access_token` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(1, 1, 2, 'ODdiN2MwNjM0ZTViNWFhYmE4ZDM3ZDk4NzY5NTA1ZWEzNzA4ZDRmNWRlZjJjYjM4MTcwMjNlOTM0N2M1ZTMwZA', 1488363743, NULL),
(2, 1, 2, 'NzNjODBhNTYwNGUxNmVlYjdkZjA3ZjhiMjA1NGUzNTMyN2Y4OTYzZGE4NTcxNmQ1ZTVjNWJmOWJjZGI4ZWI0Nw', 1488468189, NULL),
(3, 1, 2, 'MGQ5ZDc1OGZmZmFiNTAwZTc5YmEyOTU0MDM2OTE2Yjg1Nzk3MGE4MGQ2ZTdmNzlkZmIxZTNlZWI2Mjc3YWFkMA', 1488535868, NULL),
(4, 1, 1, 'OGE5NjI2YmU0NDVmYWZjYTZmYmQ1NDczNGJjZTllNGM0YjRhMzhjZTI4OGJiZDJlYjZmMmE3NzExMGNmMTYzMw', 1488536018, NULL),
(5, 1, 1, 'ZTJlZDc4NzlhYWEzN2ZjYzMyZTk3YjYyMzc4M2ZlNWE3OGYwN2E1NzQ1N2U5ZWI2ZTVlNWU1MWU4YmQwY2ZmMQ', 1488539728, NULL),
(6, 1, 2, 'NTAyMjVkOGVmNTZiNTRiZWMzNmI2Mjc3YWM4NzgzZWJmMDc5OGE2ZTZlNTRlMWNmOTM1ZDI0ZjhmOTM2ODVhZQ', 1488611275, NULL),
(7, 1, 1, 'MzE1NmIzYWE2YmMwMGFhMmY1MjI4NGEzNjZhMjYyMDcwMTE4NDkyNjQyZGY4MTc5M2U4YzBlNzBhZWNjZjcyOA', 1488611291, NULL),
(8, 1, 1, 'N2U2NTI0MzU5YmFmYmJkZTBlYjQ2YjlhYzZlZGViMGRjOGRjYzE4YzcxZjIzYWEyZDViMmFmOTk1MjUzYjNmYw', 1488616774, NULL),
(9, 1, 1, 'OGUxN2NkZTc2YzhmMzY3ODI5YzYyOTRhNjg4ZjdkMGQ3NzQ3MDY0NGMwMjQ5MTRkODZjYjUyYmI4NmU4NzUzNA', 1488620429, NULL),
(10, 1, 1, 'NjE5ZDk1OGUyZGE5ZDgyNGYwYWQ4MDExNDZhMjQxNmEzNmFmNjdhYThiNTM3MmUwMDVlNmU0YTU0Mjc2NDg5OA', 1488624206, NULL),
(11, 1, 1, 'ODYyOTkwNzdmMzQ3ZGYzNjM2Njc5YmM5Nzk0MWE1ZmQwYzFhNGQ3NjJlNGM3YjgzMDBlOTE3YWJhY2UxOGE5OA', 1488629230, NULL),
(12, 1, 1, 'MzE4NzM3YTcxM2U3OTljNjFkYzExM2VmYWY5MTIwOTAwMWM3YmI2MTBhYjE3NjJhNjYxYWExZjUwMWI0NDBkZg', 1488633642, NULL),
(13, 1, 1, 'ZDVmMWRmNGNjZDcxMWQ3MjFhMTkwOWY0YzYwMmJhZTdhM2RmMzE1YzU3Yjk3MzE2MjMyY2MzN2VkOGY4ZWI1MQ', 1488717881, NULL),
(14, 1, 1, 'ODg0MzUxNDlhY2UzYzRjMGRlZTkxZTFmMjIxNmQ1NTE1YWVhZjA2MmM0MGY5OGQxM2FlYzE3OTQ2YjBiMzE1ZA', 1488725457, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_code`
--

CREATE TABLE `auth_code` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uri` longtext COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `region_id`, `name`) VALUES
(8, 2, 'dds'),
(1, 1, 'Kyiv'),
(3, 1, 'T'),
(4, 1, 'Test1'),
(9, 1, 'Test11'),
(6, 1, 'Test3'),
(2, 2, 'Test5'),
(7, 1, 'Test7');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `random_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uris` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_grant_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `random_id`, `redirect_uris`, `secret`, `allowed_grant_types`) VALUES
(1, '5ynhouul0vsw44wcocg8ss8oo0s08ks0o8so0gsck8gsswc04c', 'a:1:{i:0;s:22:"http://www.example.com";}', 'izgtvhfqe7ks804k8o8gcko08oscog4c8g4gwsc80og84w04c', 'a:2:{i:0;s:8:"password";i:1;s:18:"authorization_code";}'),
(2, '3uger3k0u9mowkgso040gwso04c0cscs4gkg0k0kgg0w0sc0wc', 'a:1:{i:0;s:22:"http://www.example.com";}', '4ft8oud5qrk0g0o8ocw88k4g8c0o4cw0g8s88gs8coo008wwg0', 'a:2:{i:0;s:5:"token";i:1;s:18:"authorization_code";}'),
(3, '5rpgkqrjp2osk0sk8wk84skocc4k880ck00g4gw8k80g44wo44', 'a:1:{i:0;s:22:"http://www.example.com";}', '23rar6k18srossockosgkkgko8kc0c8s88sso4k80ks80kckoc', 'a:2:{i:0;s:5:"token";i:1;s:18:"authorization_code";}');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Ukraine'),
(2, 'Russia1');

-- --------------------------------------------------------

--
-- Структура таблицы `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20170301071902'),
('20170301072905'),
('20170301082943'),
('20170302145445');

-- --------------------------------------------------------

--
-- Структура таблицы `refresh_token`
--

CREATE TABLE `refresh_token` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `refresh_token`
--

INSERT INTO `refresh_token` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(1, 1, 2, 'MDRmNjg4MWFmNmQwYmNlNDIzNDA3MzlkZjA2ZjVhMmQzMjE0YjM3MjgwYzA1MjM2ZDM1NDYzMTBhMzM3MTRmNw', 1489569743, NULL),
(2, 1, 2, 'Y2IwMzZmNjhiM2JkYjIwMjc0YTBiZTQ5OWRlNDc3NTRhNzFkNDhkNmNiODQ2N2RmOGFmNDJlODkxOTZjNmZjNw', 1489674189, NULL),
(3, 1, 2, 'YzgwNTBlYWM4YmIzNmJlODM5ZTI1ZjE1ZmZlMTA2YmQyMDFhOTMxMmYyY2U5OWE3ZGU3YWNhNDcwNDYwMzEzYw', 1489741869, NULL),
(4, 1, 1, 'Y2YyMzQ4Nzg5OTU3ZTQ5ZjIyMDQ2MzU0Njg0MTQ3OTg0MGU1OWFlZTQwODc3NThiZWE2YmExN2IxZTZhOTgyYg', 1489742018, NULL),
(5, 1, 1, 'MDIyMTg3ZGQ4MDA4MzAwMzc3MTFjOWViNmE2YTUxYjkyODk3NzkzYzRlMjJiMzRmN2Q5YjYzNThlOTVkYTM0Mg', 1489745728, NULL),
(6, 1, 2, 'YjA2YzA0YTM4ZDNjMTJjNzY0NGIxOTI4YWIzZDMxODJhNmZkOTlmNzU4ZTJiYzc3YzU4NWI0ZWRiNjgwOTI1MA', 1489817275, NULL),
(7, 1, 1, 'YjM5OGVmOGU5NTEzNjVjOTdjNTgxMmE2MzFlMjE4ZjQ3MzkwN2ViZTY2OWU3NTk3NzU4ZjMzNWI5ZTI2YzZlYw', 1489817291, NULL),
(8, 1, 1, 'MWViZmJhZDRhYTkyYmYxMmJjY2Y4NTU5OGE3YTY0NjYxMDM3YzI0MDUwZjNmYTYyYWJmM2NhYTAzY2I5NjRjYw', 1489822774, NULL),
(9, 1, 1, 'YjllMTUwOGYwYzM1MjJjYWM4ZTBkZmE1ODg1OGE0NjNmMzQwMTc3NDNiNGRiZjIwODc1ODMxMzdlZjIyN2MwOA', 1489826429, NULL),
(10, 1, 1, 'N2E3YWY1NmE5NzY4ZGE2MzA3Njc0NjlhODNmZjdkNmM4N2Y5N2JmZmZkOTFjYmNhZjA0MWI3NDA2MjczNzc2Yg', 1489830206, NULL),
(11, 1, 1, 'MGFhMzI0NDE5MTBiMzg0MDg4NGI2NzU5M2U2MDQ5NDVlMTEwMGQyMjM3MTUwZmU4ZTRiOTU2NmI2YWZhM2I5Ng', 1489835230, NULL),
(12, 1, 1, 'MTZiY2E3ZTdiY2FkYWRkNGMyMjY1ZTg0OGI1YjI3ZWJlZjdkMzIyMDdiNjZlNmM5ZWVmMjEzZDY5ZmU3MTNkNA', 1489839642, NULL),
(13, 1, 1, 'NTk2NDk0N2M2ZTQ0NjkyNzkxYjBiZTI5ODNhYzc1YTJmZTFiMTk2MWJkY2RlN2YwODM2MTRlNjE1N2I0NjJjMg', 1489923881, NULL),
(14, 1, 1, 'NDljNTkwZTAyNThlNjlhMzBhZDEwMWNiNjQ4MjFiZDE4NDNkMDk0NGE4OWQ4YzgwZWE1NWU0NGJjZTkyNDZiZQ', 1489931457, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` (`id`, `country_id`, `name`) VALUES
(1, 1, 'Zaporizhia'),
(2, 1, 'Kyiv'),
(3, 2, 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `name`) VALUES
(1, 'test', 'test', 'test@test.com', 'test@test.com', 1, NULL, '$2y$13$WTD4355Mv5YqeMyuPCImo.Le8KIQHtp/Y1dF3.1u3cVoykbQFVObW', NULL, NULL, NULL, 'a:0:{}', NULL),
(2, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, NULL, '$2y$13$sXz1eMHIbvjkRIW2JTtwGe79AQ2EG6tGurIeuurOcac0ANxAaGF9i', '2017-03-05 12:14:30', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `access_token`
--
ALTER TABLE `access_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B6A2DD685F37A13B` (`token`),
  ADD KEY `IDX_B6A2DD6819EB6921` (`client_id`),
  ADD KEY `IDX_B6A2DD68A76ED395` (`user_id`);

--
-- Индексы таблицы `auth_code`
--
ALTER TABLE `auth_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5933D02C5F37A13B` (`token`),
  ADD KEY `IDX_5933D02C19EB6921` (`client_id`),
  ADD KEY `IDX_5933D02CA76ED395` (`user_id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_name_in_region` (`name`,`region_id`),
  ADD KEY `IDX_2D5B023498260155` (`region_id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `refresh_token`
--
ALTER TABLE `refresh_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C74F21955F37A13B` (`token`),
  ADD KEY `IDX_C74F219519EB6921` (`client_id`),
  ADD KEY `IDX_C74F2195A76ED395` (`user_id`);

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F62F176F92F3E70` (`country_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `access_token`
--
ALTER TABLE `access_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `auth_code`
--
ALTER TABLE `auth_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `refresh_token`
--
ALTER TABLE `refresh_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `access_token`
--
ALTER TABLE `access_token`
  ADD CONSTRAINT `FK_B6A2DD6819EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_B6A2DD68A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `auth_code`
--
ALTER TABLE `auth_code`
  ADD CONSTRAINT `FK_5933D02C19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_5933D02CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `FK_2D5B023498260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Ограничения внешнего ключа таблицы `refresh_token`
--
ALTER TABLE `refresh_token`
  ADD CONSTRAINT `FK_C74F219519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_C74F2195A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `FK_F62F176F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
