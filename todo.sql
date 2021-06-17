-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jun 2021 um 08:01
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `todo`
--

CREATE DATABASE IF NOT EXISTS `todo`;
USE `todo`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tasks`
--
-- Erstellt am: 17. Jun 2021 um 06:00
-- Zuletzt aktualisiert: 17. Jun 2021 um 06:00
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `details`, `status`, `create_date`) VALUES
(1, 'Submit task', 'Before 11am!', 0, '2021-06-14 22:04:16'),
(2, 'Submit task', 'Before 11am!', 0, '2021-06-14 22:04:16'),
(3, 'Something important', 'Don\'t forget!', 0, '2021-06-16 23:59:21'),
(4, 'Even more important!', 'Call Ann.', 0, '2021-06-16 23:59:21'),
(5, 'Something important', 'Don\'t forget!', 0, '2021-06-16 23:59:21'),
(6, 'Even more important!', 'Call Ann.', 0, '2021-06-16 23:59:21');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
