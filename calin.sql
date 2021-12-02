-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Dic 01, 2021 alle 16:38
-- Versione del server: 5.7.31
-- Versione PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calin`
--

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2021_11_30_124408_create_sessions_table', 1),
(10, '2021_11_30_130131_create_students_table', 1);

--
-- Dump dei dati per la tabella `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kaB2399WOuqTUl1mxCbVF9nCFVh19K3hb2Xqd892', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTGh2SDBVUW00SnVqN1RZR2Q3WHd5VFB0bmRTRE9Ua3BWd2NDd1RFZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHVkZW50cyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRiTXdVSTFiZ0h3bVNwcGpZQXc2aE0ueENiVkVwR2N2bTFZNjh6ZVpDV3FGcHdSYTk0VnR4MiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYk13VUkxYmdId21TcHBqWUF3NmhNLnhDYlZFcEdjdm0xWTY4emVaQ1dxRnB3UmE5NFZ0eDIiO30=', 1638376466);

--
-- Dump dei dati per la tabella `students`
--

INSERT INTO `students` (`id`, `nome`, `cognome`, `email`, `anno_iscrizione`, `genere`, `created_at`, `updated_at`) VALUES
(21, 'Elisa', 'Viola', 'els@gmail.com', 2019, 'Femmina', '2021-12-01 15:29:52', '2021-12-01 15:29:52'),
(20, 'Luigi', 'Verde', 'lui@gmail.com', 2021, 'Maschio', '2021-12-01 15:04:26', '2021-12-01 15:04:26'),
(19, 'Mario', 'Rossi', 'mario@gmail.com', 2020, 'Maschio', '2021-12-01 15:04:07', '2021-12-01 15:04:07');

--
-- Dump dei dati per la tabella `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'user\'s Team', 1, '2021-11-30 13:57:03', '2021-11-30 13:57:03'),
(2, 2, 'mario\'s Team', 1, '2021-12-01 12:53:40', '2021-12-01 12:53:40'),
(3, 3, 'davie\'s Team', 1, '2021-12-01 15:31:02', '2021-12-01 15:31:02');

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$7OPhCiHoNNdUDx/gtBjsMOAOSVrN/FEPzinkrqnCj7bGOVms/63bq', NULL, NULL, NULL, 1, NULL, '2021-11-30 13:57:03', '2021-11-30 13:57:49'),
(2, 'mario', 'mario@s.com', NULL, '$2y$10$IrhycecYLbbVfGFGllmPKuu0JQ2MRkn9c1SIo8W/MvmVpX20G32Xa', NULL, NULL, NULL, 2, NULL, '2021-12-01 12:53:40', '2021-12-01 12:53:40'),
(3, 'davie', 'davie@gmail.com', NULL, '$2y$10$bMwUI1bgHwmSppjYAw6hM.xCbVEpGcvm1Y68zeZCWqFpwRa94Vtx2', NULL, NULL, NULL, 3, NULL, '2021-12-01 15:31:02', '2021-12-01 15:31:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
