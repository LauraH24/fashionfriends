-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jan 2020 um 10:00
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `ffbenutzer`
--

INSERT INTO `ffbenutzer` (`id`, `vorname`, `nachname`, `benutzername`, `email`, `pass`, `profilbild`) VALUES
(3, 'Laura', 'Hering', 'laura_24', 'heringlaura@web.de', '111', 'IMG_1340 (2).jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
