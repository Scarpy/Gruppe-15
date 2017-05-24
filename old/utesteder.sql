-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: May 14, 2017 at 01:58 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billigsteol`
--

-- --------------------------------------------------------

--
-- Table structure for table `utesteder`
--

CREATE TABLE IF NOT EXISTS `utesteder` (
  `id` int(11) NOT NULL,
  `navn` varchar(255) NOT NULL,
  `avstand` int(11) NOT NULL,
  `pris` int(11) NOT NULL,
  `apningstid` text,
  `matservering` tinyint(1) NOT NULL,
  `studentrabatt` tinyint(1) NOT NULL,
  `aldersgrense` int(11) NOT NULL,
  `bilde` text NOT NULL,
  `adresse` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utesteder`
--

INSERT INTO `utesteder` (`id`, `navn`, `avstand`, `pris`, `apningstid`, `matservering`, `studentrabatt`, `aldersgrense`, `bilde`, `adresse`) VALUES
(1, 'Rett inn bar', 0, 39, 'Man-søn 15:00-01:00', 0, 0, 20, '', 'Storgata 39\r\n0182 Oslo'),
(2, 'Puttis Sjenkestue', 0, 52, '', 0, 1, 18, '', 'Christian Krohgs gate 32\r\n0107 Oslo'),
(3, 'Samfunnet Bislet', 0, 45, 'Ons-fre 16:00-01:00', 0, 1, 18, '', 'Pilestredet 52\r\n0167 Oslo'),
(4, 'Stargate', 0, 45, 'Man-lør 15:00-03:00\r\nSøn 17:00-03:00', 0, 0, 20, '', 'Pilestredet 39\r\n0166 Oslo'),
(5, 'Klostrenga Cafe og Bar', 0, 48, 'Man-fre 07:30-01:00\r\nLør 10:00-01:00\r\nSøn 12:00-01:00', 1, 0, 18, '', 'Schweigaards gate 60 B\r\n0656 Oslo'),
(6, 'Den Røde Mølle', 0, 49, 'Man-søn 14:00-23:00', 0, 0, 20, '', 'Brugata 9\r\n0186 Oslo'),
(7, 'Bør og Børsen', 0, 51, 'Man-søn 14:00-03:00', 1, 0, 18, '', 'Trondheimsveien 13\r\n0560 Oslo'),
(8, 'Ivars Kro', 0, 52, 'Man-søn 13:00-03:00', 0, 0, 20, '', 'Grønland 14\r\n0188 Oslo'),
(9, 'Waldemars Cafe', 0, 56, 'Man-fre 10:00-01:00\r\nLør-søn 12:00-01:00', 1, 0, 16, '', 'Waldemar Thranesgate 1\r\n0171 Oslo'),
(10, 'Sofies Mat og Vinhus', 0, 58, 'Man-søn 15:00-01:00', 1, 0, 18, '', 'Sofies Gate 15\r\n0170 Oslo'),
(11, 'Alexandria Cafe', 0, 59, 'Man-søn 15:00-01:00', 0, 1, 18, '', 'Throvald meyers gate 85\r\n0550 Oslo'),
(12, 'Cafe Nero', 0, 61, 'Man-søn 15:00-01:00', 1, 0, 18, '', 'Theresgate 47\r\n0354 Oslo'),
(13, 'Crowbar', 0, 62, 'Man-søn 15:00-03:00', 1, 0, 20, '', 'Torggata 32\r\n0183 Oslo'),
(14, 'Cafe Abel', 0, 64, 'Man-søn 12:00-23:00', 1, 0, 18, '', 'Vestgrensa 2\r\n0851 Oslo'),
(15, 'Cafe Fiasco', 0, 64, 'Man-tors 10:00-01:00\r\nFre-søn 11:00-03:00', 1, 0, 18, '', 'Schweigaardsgate 4\r\n0185 Oslo'),
(16, 'Den gode', 0, 70, 'Man-tors 15:00-23:00\r\nFre-søn 11:00-03:00', 1, 0, 18, '', 'Fredensborgveien 13\r\n0177 Oslo'),
(17, 'Pigalle', 0, 72, 'Ons-lør 18:00-00:30', 0, 0, 25, '', 'Grønlandsleiret 15\r\n0190 Oslo'),
(18, 'Tea Lounge', 0, 72, 'Man-ons 11:00-01:00\r\nTors-lør 11:00-03:00\r\nSøn 12:00-01:00', 1, 0, 23, '', 'Thorvald Meyers gate 33C\r\n0555 Oslo'),
(19, 'Kafe Con Bar', 0, 72, 'Man-ons 10:00-01:00\r\nTors-lør 10:00-03:00\r\nSøn 10:00-00:00', 1, 0, 18, '', 'Brugata 11\r\n0186 Oslo'),
(20, 'Politiker''n', 0, 73, 'Man-lør 10:00-03:00\r\nSøn 12:00-03:00', 1, 0, 20, '', 'Youngstorget 6\r\n0181 Oslo'),
(21, 'Fuglen', 0, 74, 'Man-fre 07:30-01:00\r\nLør 10:00-03:00\r\nSøn 11:00-22:00', 0, 0, 20, '', 'Universitetsgata 2\r\n0164 Oslo'),
(22, 'Oslo Mekaniske Verksted', 0, 76, 'Man-fre 15:00-02:00\r\nLør-søn 13:00-02:00', 0, 0, 23, '', 'Tøyenbekken 34\r\n0188 Oslo'),
(23, 'Tilt', 0, 76, 'Man-søn 15:00-03:30', 0, 0, 23, '', 'Torggata 16\r\n0181 Oslo'),
(24, 'Kafe Asylet', 0, 76, 'Man-fre 11:00-00:30\r\nLør 13:00-00:30\r\nSøn 12:00-23:00', 1, 0, 18, '', 'Grønland 28\r\n0188 Oslo'),
(25, 'Angst', 0, 79, 'Ons-fre 12:00-01:00\r\nLør-søn 12:00-03:00', 1, 0, 23, '', 'Torggata 11\r\n0181 Oslo'),
(26, 'Dattera til Hagen', 0, 85, 'Man-tors 11:00-01:00\r\nFre-lør 11:00-03:00\r\nSøn 12:00-00:00', 1, 0, 20, '', 'Grønland 10\r\n0188 Oslo'),
(27, 'Oslo Camping', 0, 86, 'Man-ons 13:00-01:00\r\nTors-lør 13:00-03:00\r\nSøn 13:00-01:00', 1, 0, 20, '', 'Møllergata 12\r\nOslo'),
(28, 'Håndverkstuene', 0, 88, 'Man-ons 15:00-00:00\r\nTors-søn 15:00-01:00', 0, 1, 23, '', 'Rosenkrantzgate 7\r\n0159 Oslo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utesteder`
--
ALTER TABLE `utesteder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utesteder`
--
ALTER TABLE `utesteder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
