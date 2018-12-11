-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 dec 2018 om 12:32
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamecategory`
--

CREATE TABLE `gamecategory` (
  `categoryId` int(3) NOT NULL,
  `categoryTitle` varchar(100) NOT NULL,
  `categoryImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gamecategory`
--

INSERT INTO `gamecategory` (`categoryId`, `categoryTitle`, `categoryImg`) VALUES
(1, 'playstation', ''),
(2, 'xbox', ''),
(3, 'pc', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `gameId` int(3) NOT NULL COMMENT 'product id is uniek',
  `gameTitel` varchar(100) NOT NULL,
  `gameDescription` text NOT NULL,
  `gamePrice` decimal(5,2) NOT NULL,
  `gameImg` varchar(255) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameId`, `gameTitel`, `gameDescription`, `gamePrice`, `gameImg`, `categoryId`) VALUES
(1, 'Fifa 2019', 'soccer game ps4', '59.99', 'images/fifa19.jpg', 1),
(2, 'rocket league', 'soccer game with cars ps4', '19.99', 'images/role.jpg', 1),
(3, 'Black ops 4', 'schiet spel ps4', '59.99', 'images/blackops4.jpg', 1),
(4, 'Fortnite', 'schiet spel pc', '0.00', 'images/fortnite.jpg', 3),
(5, 'GTA V', 'gta vijf pc', '17.99', 'images/gta5.jpg', 3),
(6, 'Fallout 4', 'fallout 4 xbox', '19.99', 'images/fallout.jpg', 2),
(7, 'Red dead 2', 'red dead xbox', '54.99', 'images/rdr.jpg', 2),
(8, 'Minecraft', 'bouw/survival game pc', '19.99', 'images/minecraft.jpg', 3),
(9, 'walking dead', 'walking dead xbox', '59.99', 'images/walk.jpg', 2),
(10, 'just cause 4', 'just cause Xbox', '69.99', 'images/justc.jpg', 2),
(11, 'Tomb raider', 'tomb Raider ps', '39.99', 'images/tombRaider.jpg', 1),
(12, 'Sims 4', 'sims 4 pc', '15.99', 'images/sims.jpg', 3),
(13, 'batman', 'batman PS', '59.99', 'images/batman.jpg', 1),
(14, 'Ride 3', 'ride 3 Xbox', '69.99', 'images/ride.jpg', 2),
(15, 'Formula 1', 'Formula 1 PC', '19.98', 'images/f1.jpg', 3),
(16, 'override', 'override PS', '29.99', 'images/override.jpg', 1),
(17, 'darksiders 3', 'darksiders 3 XBOX', '59.99', 'images/darksiders.jpg', 2),
(18, 'vampyr', 'vampyr PC', '29.98', 'images/vampyr.jpg', 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gamecategory`
--
ALTER TABLE `gamecategory`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gamecategory`
--
ALTER TABLE `gamecategory`
  MODIFY `categoryId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(3) NOT NULL AUTO_INCREMENT COMMENT 'product id is uniek', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
