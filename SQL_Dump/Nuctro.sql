-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 16. Sep 2017 um 12:35
-- Server-Version: 5.6.34-log
-- PHP-Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `nuctro`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `subsiteID` int(11) DEFAULT NULL,
  `comment` text,
  `reply` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `subsiteID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `upload` varchar(100) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subsites`
--

CREATE TABLE `subsites` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `description` text,
  `sidebar` text,
  `moderators` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `CommentUpvotes` int(11) DEFAULT NULL,
  `CommentDownvotes` int(11) DEFAULT NULL,
  `PostUpvotes` int(11) DEFAULT NULL,
  `PostDownvotes` int(11) DEFAULT NULL,
  `publicProfile` int(11) DEFAULT NULL,
  `publicVotes` int(11) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `CommentUpvotes`, `CommentDownvotes`, `PostUpvotes`, `PostDownvotes`, `publicProfile`, `publicVotes`, `admin`) VALUES
(1, 'PhutureX', '38c78acef200c22fb266df9d420c6497851a4b34:62485', 'christoph.reich@gmx.at', 1505561957, 123, 12, 12, 2, 1, 1, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `subsites`
--
ALTER TABLE `subsites`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `subsites`
--
ALTER TABLE `subsites`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
