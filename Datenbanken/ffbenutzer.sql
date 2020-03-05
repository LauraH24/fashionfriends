-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Mrz 2020 um 17:10
-- Server Version: 5.6.17
-- PHP-Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `bbs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ffbenutzer`
--

CREATE TABLE IF NOT EXISTS `ffbenutzer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `benutzername` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `profilbild` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=731 ;

--
-- Daten für Tabelle `ffbenutzer`
--

INSERT INTO `ffbenutzer` (`id`, `vorname`, `nachname`, `benutzername`, `email`, `pass`, `profilbild`) VALUES
(727, 'Laura', 'Hering', 'laura_24', 'heringlaura@web.de', '15bb255b403b1773b13f06115be5552a2ba79b61ad7a5f626a69bd4614f72e0b', 'laura_profil.PNG'),
(728, 'Anna', 'Jung', 'anna_jung', 'annajung205@gmx.de', '4a1f32d5262ad988d5233ae20e828e31583f0ef604e69a37334c6dd5b7893559', 'anna_profil.jpg'),
(730, 'Esther', 'Brauer', 'esther_b', 'esther-brauer@outlook.de', 'c79567b1b0cef5873c5c362f66a80cd989c69f9a8768fc3f224202cfa5acfbe9', 'esther_profil.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
