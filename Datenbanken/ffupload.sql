-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Mrz 2020 um 17:09
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
-- Tabellenstruktur für Tabelle `ffupload`
--

CREATE TABLE IF NOT EXISTS `ffupload` (
  `nr` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `id` int(11) NOT NULL,
  `kopf` text NOT NULL,
  `oben` text NOT NULL,
  `unten` text NOT NULL,
  `schuhe` text NOT NULL,
  PRIMARY KEY (`nr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `ffupload`
--

INSERT INTO `ffupload` (`nr`, `image`, `image_text`, `id`, `kopf`, `oben`, `unten`, `schuhe`) VALUES
(9, 'esther_test.jpg', 'jusdfue', 727, 'https://www2.hm.com/de_de/index.html', 'https://www.aboutyou.de/', 'https://www.asos.com/de/', 'https://www.zalando.de/damen-home/'),
(11, 'outfit1.jpg', 'Casual Street Look :)', 728, '', 'https://www.amazon.de/NiSeng-Strickjacke-Gestrickte-Kn%C3%B6pfen-Cardigan/dp/B074CYBB1Z', 'https://www.amazon.de/Sotala-R%C3%B6hrenjeans-gestreift-Streifen-Grau-Wei%C3%9F/dp/B07QS389XC/ref=asc_df_B07QS389XC/?tag=googshopde-21&linkCode=df0&hvadid=344990637501&hvpos=&hvnetw=g&hvrand=8053876714439003322&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9044327&hvtargid=aud-861476880395:pla-759355553681&psc=1&th=1&psc=1&tag=&ref=&adgrpid=66919855422&hvpone=&hvptwo=&hvadid=344990637501&hvpos=&hvnetw=g&hvrand=8053876714439003322&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9044327&hvtargid=aud-861476880395:pla-759355553681#ace-g7530946907', 'https://www.goertz.de/fila-sneaker-disruptor-low-weiss-48021001/'),
(12, 'outfit2.jpg', 'Wie gefÃ¤llt euch mein Look? :)', 728, '', 'https://www.stylight.de/Crop-Tops/Weiss/', 'https://www.amazon.de/Damen-Lockere-Hosen-Jogginghose-Kette/dp/B07L4XKD55', 'https://www.nike.com/de/t/air-force-1-07-damenschuh-sg6nmr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
