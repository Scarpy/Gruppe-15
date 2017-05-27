-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27. Mai, 2017 21:48 PM
-- Server-versjon: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limrui16_billigsteol`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `popularity`
--

CREATE TABLE `popularity` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `popularity`
--

INSERT INTO `popularity` (`id`, `rating`) VALUES
(1, 23),
(2, 13),
(3, 49),
(4, 32),
(5, 60),
(6, 34),
(7, 68),
(8, 10),
(9, 9),
(10, 25),
(11, 46),
(12, 50),
(13, 30),
(14, 56),
(15, 78),
(16, 80),
(17, 74),
(18, 45),
(19, 37),
(20, 60),
(21, 57),
(22, 53),
(23, 46),
(24, 63),
(25, 56),
(26, 50),
(27, 35),
(28, 38);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `utesteder`
--

CREATE TABLE `utesteder` (
  `id` int(11) NOT NULL,
  `navn` varchar(255) NOT NULL,
  `avstand` int(11) NOT NULL,
  `pris` int(11) NOT NULL,
  `apningstid` text,
  `matservering` tinyint(1) NOT NULL,
  `studentrabatt` tinyint(1) NOT NULL,
  `aldersgrense` int(11) NOT NULL,
  `bilde` text NOT NULL,
  `adresse` text NOT NULL,
  `pop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `utesteder`
--

INSERT INTO `utesteder` (`id`, `navn`, `avstand`, `pris`, `apningstid`, `matservering`, `studentrabatt`, `aldersgrense`, `bilde`, `adresse`, `pop_id`) VALUES
(1, 'Rett inn bar', 0, 39, 'Man-søn 15:00-01:00', 0, 0, 20, 'img/bar-logo/Rett_inn_bar.png', 'Storgata 39\r\n0182 Oslo', 1),
(2, 'Puttis Sjenkestue', 0, 52, '', 0, 1, 18, 'img/bar-logo/Puttis_skjenkestue.png', 'Christian Krohgs gate 32\r\n0107 Oslo', 2),
(3, 'Samfunnet Bislet', 0, 45, 'Ons-fre 16:00-01:00', 0, 1, 18, 'img/bar-logo/Samfunnet_bislet.png', 'Pilestredet 52\r\n0167 Oslo', 3),
(4, 'Stargate', 0, 45, 'Man-lør 15:00-03:00\r\nSøn 17:00-03:00', 0, 0, 20, 'img/bar-logo/Stargate.png', 'Pilestredet 39\r\n0166 Oslo', 4),
(5, 'Klostrenga Cafe og Bar', 0, 48, 'Man-fre 07:30-01:00\r\nLør 10:00-01:00\r\nSøn 12:00-01:00', 1, 0, 18, 'img/bar-logo/Klostrenga.png', 'Schweigaards gate 60 B\r\n0656 Oslo', 5),
(6, 'Den Røde Mølle', 0, 49, 'Man-søn 14:00-23:00', 0, 0, 20, 'img/bar-logo/Den_røde_mølle.png', 'Brugata 9\r\n0186 Oslo', 6),
(7, 'Bør og Børsen', 0, 51, 'Man-søn 14:00-03:00', 1, 0, 18, 'img/bar-logo/Bør_og_børsen', 'Trondheimsveien 13\r\n0560 Oslo', 7),
(8, 'Ivars Kro', 0, 52, 'Man-søn 13:00-03:00', 0, 0, 20, 'img/bar-logo/Ivars_kro.png', 'Grønland 14\r\n0188 Oslo', 8),
(9, 'Waldemars Cafe', 0, 56, 'Man-fre 10:00-01:00\r\nLør-søn 12:00-01:00', 1, 0, 16, 'img/bar-logo/Waldemars.png', 'Waldemar Thranesgate 1\r\n0171 Oslo', 9),
(10, 'Sofies Mat og Vinhus', 0, 58, 'Man-søn 15:00-01:00', 1, 0, 18, 'img/bar-logo/Sofies_mat_og_vinhus.png', 'Sofies Gate 15\r\n0170 Oslo', 10),
(11, 'Alexandria Cafe', 0, 59, 'Man-søn 15:00-01:00', 0, 1, 18, 'img/bar-logo/Alexandria_cafe.png', 'Throvald meyers gate 85\r\n0550 Oslo', 11),
(12, 'Cafe Nero', 0, 61, 'Man-søn 15:00-01:00', 1, 0, 18, 'img/bar-logo/Cafe_nero.png', 'Theresgate 47\r\n0354 Oslo', 12),
(13, 'Crowbar', 0, 62, 'Man-søn 15:00-03:00', 1, 0, 20, 'img/bar-logo/Crowbar.png', 'Torggata 32\r\n0183 Oslo', 13),
(14, 'Cafe Abel', 0, 64, 'Man-søn 12:00-23:00', 1, 0, 18, 'img/bar-logo/Cafe_abel.png', 'Vestgrensa 2\r\n0851 Oslo', 14),
(15, 'Cafe Fiasco', 0, 64, 'Man-tors 10:00-01:00\r\nFre-søn 11:00-03:00', 1, 0, 18, 'img/bar-logo/Cafe_fiasco.png', 'Schweigaardsgate 4\r\n0185 Oslo', 15),
(16, 'Den gode', 0, 70, 'Man-tors 15:00-23:00\r\nFre-søn 11:00-03:00', 1, 0, 18, 'img/bar-logo/Den_gode.png', 'Fredensborgveien 13\r\n0177 Oslo', 16),
(17, 'Pigalle', 0, 72, 'Ons-lør 18:00-00:30', 0, 0, 25, 'img/bar-logo/Pigalle.png', 'Grønlandsleiret 15\r\n0190 Oslo', 17),
(18, 'Tea Lounge', 0, 72, 'Man-ons 11:00-01:00\r\nTors-lør 11:00-03:00\r\nSøn 12:00-01:00', 1, 0, 23, 'img/bar-logo/Tea_lounge.png', 'Thorvald Meyers gate 33C\r\n0555 Oslo', 18),
(19, 'Kafe Con Bar', 0, 72, 'Man-ons 10:00-01:00\r\nTors-lør 10:00-03:00\r\nSøn 10:00-00:00', 1, 0, 18, 'img/bar-logo/Kafe_con_bar.png', 'Brugata 11\r\n0186 Oslo', 19),
(20, 'Politiker\'n', 0, 73, 'Man-lør 10:00-03:00\r\nSøn 12:00-03:00', 1, 0, 20, 'img/bar-logo/Politikern.png', 'Youngstorget 6\r\n0181 Oslo', 20),
(21, 'Fuglen', 0, 74, 'Man-fre 07:30-01:00\r\nLør 10:00-03:00\r\nSøn 11:00-22:00', 0, 0, 20, 'img/bar-logo/Fuglen.png', 'Universitetsgata 2\r\n0164 Oslo', 21),
(22, 'Oslo Mekaniske Verksted', 0, 76, 'Man-fre 15:00-02:00\r\nLør-søn 13:00-02:00', 0, 0, 23, 'img/bar-logo/Oslo_mekaniske_verksted.png', 'Tøyenbekken 34\r\n0188 Oslo', 22),
(23, 'Tilt', 0, 76, 'Man-søn 15:00-03:30', 0, 0, 23, 'img/bar-logo/Tilt.png', 'Torggata 16\r\n0181 Oslo', 23),
(24, 'Kafe Asylet', 0, 76, 'Man-fre 11:00-00:30\r\nLør 13:00-00:30\r\nSøn 12:00-23:00', 1, 0, 18, 'img/bar-logo/Kafe_asylet.png', 'Grønland 28\r\n0188 Oslo', 24),
(25, 'Angst', 0, 79, 'Ons-fre 12:00-01:00\r\nLør-søn 12:00-03:00', 1, 0, 23, 'img/bar-logo/Angst.png', 'Torggata 11\r\n0181 Oslo', 25),
(26, 'Dattera til Hagen', 0, 85, 'Man-tors 11:00-01:00\r\nFre-lør 11:00-03:00\r\nSøn 12:00-00:00', 1, 0, 20, 'img/bar-logo/Datter_til_hagen.png', 'Grønland 10\r\n0188 Oslo', 26),
(27, 'Oslo Camping', 0, 86, 'Man-ons 13:00-01:00\r\nTors-lør 13:00-03:00\r\nSøn 13:00-01:00', 1, 0, 20, 'img/bar-logo/Oslo_camping.png', 'Møllergata 12\r\nOslo', 27),
(28, 'Håndverkstuene', 0, 88, 'Man-ons 15:00-00:00\r\nTors-søn 15:00-01:00', 0, 1, 23, 'img/bar-logo/Håndverkstuene.png', 'Rosenkrantzgate 7\r\n0159 Oslo', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popularity`
--
ALTER TABLE `popularity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utesteder`
--
ALTER TABLE `utesteder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popularity`
--
ALTER TABLE `popularity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `utesteder`
--
ALTER TABLE `utesteder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
