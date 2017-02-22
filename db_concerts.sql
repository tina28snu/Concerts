-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 11:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_concerts`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
`id` smallint(6) NOT NULL,
  `groupe` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `lieu` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`id`, `groupe`, `lieu`, `date`) VALUES
(1, 'GIEDRE', 'Salle De La Madeleine A Bruxelles', '2016-10-01 20:00:00'),
(2, 'ALL TVVINS', 'Ancienne Belgique (Ab)', '2016-10-01 20:00:00'),
(3, 'JMSN', 'Ancienne Belgique (Ab)', '2016-10-02 20:00:00'),
(4, 'MO AKA KAREN MARIE ORSTED', 'Ancienne Belgique (Ab)', '2016-10-03 20:00:00'),
(5, 'GHOSTFACE KILLAH / KILLAH PRIEST', 'Bazaar A Bruxelles', '2016-10-04 19:00:00'),
(6, 'NORTH OF NORTH', 'Ancienne Belgique (Ab)', '2016-10-04 20:00:00'),
(7, 'FLORIAN NOACK', 'Salle Gothique De L''hotel De Ville De Bruxelles', '2016-10-05 20:00:00'),
(8, 'HANNAH EPPERSON', 'Ancienne Belgique (Ab)', '2016-10-06 20:00:00'),
(9, 'DAAN / MATHIAS BRESSAN', 'Espace Delvaux - La Venerie A Bruxelles', '2016-10-07 20:00:00'),
(10, 'DE STAAT', 'Ancienne Belgique (Ab)', '2016-10-07 20:00:00'),
(11, 'SARAH FERRI', 'Ancienne Belgique (Ab)', '2016-10-07 20:00:00'),
(12, 'THE BAD PLUS', 'Flagey A Bruxelles', '2016-10-07 20:15:00'),
(13, 'DAMSO', 'Bloody Louis A Bruxelles', '2016-10-07 23:00:00'),
(14, 'STREAM OF PASSION', 'Cite Culture A Bruxelles', '2016-10-08 17:30:00'),
(15, 'BASTIAN BAKER', 'Salle De La Madeleine A Bruxelles', '2016-10-08 20:00:00'),
(16, 'BAZART', 'Ancienne Belgique (Ab)', '2016-10-08 20:00:00'),
(17, 'THE INFAMOUS ROOTS RIELEMANS FAMILY ORCHESTRA', 'Ancienne Belgique (Ab)', '2016-10-08 20:00:00'),
(18, 'DARAN / MATHILDE FERNANDEZ ', 'Theatre 140', '2016-10-08 20:30:00'),
(19, 'GERARD LENORMAN', 'W Hall A Bruxelles', '2016-10-08 20:30:00'),
(20, 'BAZART', 'Ancienne Belgique (Ab)', '2016-10-09 20:00:00'),
(21, 'ILS S''AIMENT DEPUIS 20 ANS', 'Forest National', '2016-10-11 20:00:00'),
(22, 'STARS OF THE LID', 'Eglise Du Beguinage', '2016-10-11 20:00:00'),
(23, 'SNIPER', 'Ancienne Belgique (Ab)', '2016-10-11 20:00:00'),
(24, 'HEEJAE KIM', 'Salle Gothique De L''hotel De Ville De Bruxelles', '2016-10-11 20:00:00'),
(25, 'BLACKOUT SESSION', 'Atelier 210 A Bruxelles', '2016-10-11 21:00:00'),
(26, 'STEEL PANTHER', 'Ancienne Belgique (Ab)', '2016-10-12 00:00:00'),
(27, 'ILS S''AIMENT DEPUIS 20 ANS', 'Forest National', '2016-10-12 20:00:00'),
(28, 'THE DUBLIN LEGENDS (EX THE DUBLINERS)', 'Salle De La Madeleine A Bruxelles', '2016-10-12 20:00:00'),
(29, 'FRANCOIZ BREUT', 'Atelier 210 A Bruxelles', '2016-10-12 20:00:00'),
(30, 'MORENO VELOSO', 'Espace Senghor A Bruxelles', '2016-10-12 20:30:00'),
(31, 'LES INSUS ?', 'Forest National', '2016-10-13 00:00:00'),
(32, 'ARNO', 'Ancienne Belgique (Ab)', '2016-10-13 00:00:00'),
(33, 'NICOLAS JULES / ANTOINE HENAUT', 'Jardin De Ma Soeur A Bruxelles', '2016-10-13 20:00:00'),
(34, 'AMONGSTER', 'Ancienne Belgique (Ab)', '2016-10-13 20:00:00'),
(35, 'O', 'Maison Des Musiques A Bruxelles', '2016-10-13 20:00:00'),
(36, 'OZARK HENRY', 'W Hall A Bruxelles', '2016-10-13 20:30:00'),
(37, 'TOMMIGUN', 'Beursschouwburg A Bruxelles', '2016-10-14 00:00:00'),
(38, 'DALTON TELEGRAMME / VA A LA PLAGE', 'Le Walvis', '2016-10-14 18:00:00'),
(39, 'DELTA', 'Salle De La Madeleine A Bruxelles', '2016-10-14 20:00:00'),
(40, 'DUA LIPA', 'Ancienne Belgique (Ab)', '2016-10-14 20:00:00'),
(41, 'CLEMENT', 'La Soupape A Bruxelles', '2016-10-14 21:00:00'),
(42, 'JOSY AND THE PONY', 'Le Walvis', '2016-10-14 21:00:00'),
(43, 'ZUCCHERO', 'Forest National', '2016-10-15 00:00:00'),
(44, 'ERWAN#ERWAN', 'Le Walvis', '2016-10-15 18:00:00'),
(45, 'DENIS K', 'Jardin De Ma Soeur A Bruxelles', '2016-10-15 20:00:00'),
(46, 'SKYE & ROSS FROM MORCHEEBA', 'Salle De La Madeleine A Bruxelles', '2016-10-15 20:00:00'),
(47, 'RENAUD PATIGNY', 'W Hall A Bruxelles', '2016-10-15 20:30:00'),
(48, 'RECITAL BOXON / OLIVIER JUPRELLE ', 'Centre Culturel Jacques Franck A Bruxelles', '2016-10-15 20:30:00'),
(49, 'MATHILDE FERNANDEZ / MATHIAS BRESSAN ', 'Maison De La Creation', '2016-10-16 15:00:00'),
(50, 'HENRI DES', 'Cirque Royal De Bruxelles (Botanique)', '2016-10-16 17:00:00'),
(51, 'LOUIS JEAN CORMIER / SALOME LECLERC ', 'La Rotonde De Bruxelles (Le Botanique)', '2016-10-16 20:00:00'),
(52, 'MAURITS PAUWELS / PAUWEL DE MEYER ', 'Ancienne Belgique (Ab)', '2016-10-16 20:00:00'),
(53, 'MARY J BLIGE / MAXWELL ', 'Forest National', '2016-10-17 19:00:00'),
(54, 'SEASICK STEVE', 'Ancienne Belgique (Ab)', '2016-10-17 20:00:00'),
(55, 'CLAUDIA / CLAUDIA TAGBO', 'Theatre Mercelis A Bruxelles', '2016-10-18 20:00:00'),
(56, 'BEN HARPER & THE INNOCENT CRIMINALS', 'Forest National', '2016-10-18 20:00:00'),
(57, 'WHITE LIES', 'Ancienne Belgique (Ab)', '2016-10-18 20:00:00'),
(58, 'CHIMENE BADI', 'Cirque Royal De Bruxelles (Botanique)', '2016-10-18 20:00:00'),
(59, 'ALBERTO FERRO', 'Salle Gothique De L''hotel De Ville De Bruxelles', '2016-10-18 20:00:00'),
(60, 'CLAUDIA / CLAUDIA TAGBO', 'Theatre Mercelis A Bruxelles', '2016-10-19 20:00:00'),
(61, 'PJ HARVEY', 'Forest National', '2016-10-19 20:00:00'),
(62, 'WHITE LIES', 'Ancienne Belgique (Ab)', '2016-10-19 20:00:00'),
(63, 'BROKEN BACK', 'L''orangerie De Bruxelles (Le Botanique)', '2016-10-19 20:00:00'),
(64, 'PHORIA', 'Witloof Bar (Le Botanique)', '2016-10-19 20:00:00'),
(65, 'JAMIE LIDELL', 'Ancienne Belgique (Ab)', '2016-10-20 00:00:00'),
(66, 'RIVER TIBER', 'Witloof Bar (Le Botanique)', '2016-10-20 00:00:00'),
(67, 'CLAUDIA / CLAUDIA TAGBO', 'Theatre Mercelis A Bruxelles', '2016-10-20 20:00:00'),
(68, 'OJOS DE BRUJO / MARINAH ', 'Theatre National De Bruxelles', '2016-10-20 21:00:00'),
(69, 'KEV & GAD - TOUT EST POSSIBLE', 'Forest National', '2016-10-21 20:00:00'),
(70, 'SOPHIA', 'Ancienne Belgique (Ab)', '2016-10-21 20:00:00'),
(71, 'JENNY HVAL', 'Ancienne Belgique (Ab)', '2016-10-21 20:00:00'),
(72, 'BOULEVARD DES AIRS / COLLECTIF 13 ', 'Theatre National De Bruxelles', '2016-10-21 20:30:00'),
(73, 'DUB FX', 'Ancienne Belgique (Ab)', '2016-10-22 20:00:00'),
(74, 'FRANK CARTER & THE RATTLESNAKES / GOD DAMN ', 'Ancienne Belgique (Ab)', '2016-10-22 20:00:00'),
(75, 'LAVRENTIS MACHAIRITSAS', 'Salle De La Madeleine A Bruxelles', '2016-10-22 20:00:00'),
(76, 'KEV & GAD - TOUT EST POSSIBLE ', 'Forest National', '2016-10-22 20:30:00'),
(77, 'MICHAEL FRANTI', 'Theatre National De Bruxelles', '2016-10-22 21:00:00'),
(78, 'THE TRIFFIDS', 'Ancienne Belgique (Ab)', '2016-10-23 18:00:00'),
(79, 'JEAN MICHEL JARRE', 'Palais 12 A Bruxelles', '2016-10-23 20:00:00'),
(80, 'LE WOOP', 'Cirque Royal De Bruxelles (Botanique)', '2016-10-23 20:00:00'),
(81, 'POLICA / FOG ', 'Ancienne Belgique (Ab)', '2016-10-24 00:00:00'),
(82, 'CRYSTAL FIGHTERS', 'Ancienne Belgique (Ab)', '2016-10-25 20:00:00'),
(83, 'KARA LIS COVERDALE', 'Ancienne Belgique (Ab)', '2016-10-25 20:00:00'),
(84, 'TOMOKI SAKATA', 'Salle Gothique De L''hotel De Ville De Bruxelles', '2016-10-25 20:00:00'),
(85, 'JEFF BECK', 'Cirque Royal De Bruxelles (Botanique)', '2016-10-25 20:00:00'),
(86, 'ASAF AVIDAN', 'Theatre National De Bruxelles', '2016-10-25 20:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
