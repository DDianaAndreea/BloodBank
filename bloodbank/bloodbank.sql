-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 30, 2019 la 10:18 PM
-- Versiune server: 10.1.39-MariaDB
-- Versiune PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `bloodbank`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `campanii`
--

CREATE TABLE `campanii` (
  `ID` int(255) NOT NULL,
  `denumire` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descriere` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `locatie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagine` varchar(255) CHARACTER SET utf8 COLLATE utf8_roman_ci NOT NULL,
  `in_asteptare` int(255) NOT NULL,
  `participanti` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `campanii`
--

INSERT INTO `campanii` (`ID`, `denumire`, `descriere`, `data`, `locatie`, `imagine`, `in_asteptare`, `participanti`) VALUES
(6, 'Drops of life', 'Impreuna putem ajuta.\r\nAlatura-te la o noua capanie de donare de sange ce priveste toti pacientii nostri.', '2019-08-20', 'Centrul BoodBank', 'drops.jpg', 0, 0),
(7, 'Donează împreună cu noi', 'Împreuna putem ajuta.\r\nAlătură-te la o noua campanie de donare sanguină ce privește toți pacienții noștri.\r\nCampania se desfășoară în cadrul centrului sanitar județean Slatina.', '2019-09-15', 'Slatina', 'drops-of-life.jpg', 1, 26),
(8, 'Împarte zâmbete', 'Împarte zâmbete este campania de donare sanguină care se desfășoara la Teatrul Marin Sorescu cu scopul de a ajuta cât mai multe persoane care au nevoie de produse sanguine, de a le împărții speranță și puțină bucurie', '2019-07-10', 'Teatrul Național ,Craiova', 'drops.jpg', 1, 44),
(9, 'Dăruiește și tu', 'Alătură-te la o noua campanie de donare sanguină ce privește toți pacienții noștri.\r\nCampania se desfășoară în cadrul centrului nostru.', '2019-10-10', 'Centrul BloodBank', 'drops.jpg', 1, 17),
(10, 'Sângele reprezintă un dar neprețuit!', 'Dăruiește și tu alături de echipa noastră și oferă o șansă la viată mai multor persoane.', '2019-11-01', 'Centrul BloodBank', 'drops-of-life.jpg', 1, 34);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `carnetul_donatorului`
--

CREATE TABLE `carnetul_donatorului` (
  `id` int(11) NOT NULL,
  `cnp` varchar(13) NOT NULL,
  `seria` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numarul` int(6) NOT NULL,
  `localitate` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `judet` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_ultimei_donari` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `carnetul_donatorului`
--

INSERT INTO `carnetul_donatorului` (`id`, `cnp`, `seria`, `numarul`, `localitate`, `judet`, `adresa`, `data_ultimei_donari`) VALUES
(1, '2960820280053', 'OT', 670208, 'Slatina', 'Olt', 'Aleea viorelelor, GA5A, et.8, ap.34', '2019-06-29 11:18:49'),
(2, '1960221285687', 'OT', 675843, 'Slatina', 'Olt', 'Aleea Rozelor, FB23, sc.C, et2, ap.5', '2019-06-20 16:18:32'),
(8, '2760605284374', 'OT', 619101, 'Slatina', 'Olt', 'Aleea viorelelor, GA5A, et.8, ap.34', '2019-06-11 17:56:03'),
(9, '1720506123123', 'OT', 456985, 'Slatina', 'Olt', 'str.Aleea Viorelelor, bl.GA5A, et.8', '2019-06-26 10:33:34'),
(11, '2870422654456', 'OT', 123654, 'Slatina', 'Olt', 'str.Crisan , bl.5, et.3, ap.5', '2019-06-18 16:25:08'),
(12, '1880712658963', 'OT', 552674, 'Slatina', 'Olt', 'Aleea Rozelor, FB20, sc.B, et3, ap.7', '2019-06-18 17:09:54'),
(13, '1710120358962', 'OT', 165832, 'Slatina', 'Olt', 'str. Arinului, nr.45', '2019-06-18 17:38:24'),
(14, '2730322852346', 'OT', 486321, 'Slatina', 'Olt', 'str.Crisan , bl.3, et.1, ap.2', '2019-06-18 16:25:08'),
(15, '1940216258963', 'OT', 123654, 'Slatina', 'Olt', 'str.Aleea Viorelelor, bl.GA5A, et.8', '2019-06-29 10:41:49'),
(16, '1831021525469', 'OT', 123456, 'Slatina', 'Olt', 'str.Crinului , bl.2, et.1, ap.3', '2019-06-26 06:30:15'),
(17, '2830925125521', 'OT', 267582, 'Slatina', 'Olt', 'str.Cornisei, nr.4, bl FA4, et.2, ap.10', '2019-06-18 17:38:24'),
(18, '1780330964767', 'OT', 123951, 'Slatina', 'Olt', 'str. Oituz, bl. FB 2, et.1, ap 10', '2019-06-18 17:38:24'),
(19, '2540614035840', 'OT', 687632, 'Slatina', 'Olt', 'str.Aleea Viorelelor, bl.GA5A, et.8', '2019-06-18 17:38:50'),
(20, '2960302123456', 'DJ', 123456, 'Craiova', 'Dolj', 'str. Jianu, bl.14, sc.A, et.2, ap7', '2019-06-18 16:40:22'),
(21, '1961025255236', 'DJ', 255263, 'Craiova', 'Dolj', 'str.Nicolae Iorga, bl.J14, et2, ap 4', '2019-06-18 18:10:58'),
(22, '2960630363696', 'DJ', 962636, 'Craiova', 'Dolj', 'str.Nicolae Iorga, bl.J14, et3, ap 7', '2019-06-18 18:10:58'),
(23, '2720606256256', 'OT', 254986, 'Slatina', 'Olt', 'str. Ale.Rozelor, bl.FB23,sc.C, ap.5', '2019-06-18 16:40:22'),
(24, '1700229584631', 'OT', 854631, 'Slatina', 'Olt', 'str. Arinului, nr.27', '2019-06-24 15:41:05'),
(25, '2450701697463', 'OT', 694736, 'Slatina', 'Dolj', 'str. Arinului, nr.30', '2019-06-18 18:13:20'),
(26, '1460601367415', 'OT', 274362, 'Slatina', 'Olt', 'str. Arinului, nr.30', '2019-06-18 18:13:20'),
(27, '2760629368462', 'OT', 369852, 'Slatina', 'Olt', 'str.Steaua bl.B5, et.4, ap. 13', '2019-06-18 16:00:46'),
(28, '1690501258147', 'OT', 258654, 'Slatina', 'Olt', 'str.Steaua bl.B5, et.4, ap. 13', '2019-06-18 16:57:24'),
(29, '1630512159357', 'OT', 159753, 'Slatina', 'Olt', 'str. Zmeurei, nr.15', '2019-06-18 18:17:32'),
(30, '2620212535791', 'OT', 575319, 'Slatina', 'Olt', 'str.Zmeurei, nr.20', '2019-06-18 18:18:23'),
(31, '2921215643197', 'OT', 316497, 'Slatina', 'Olt', 'str. Viilor, nr.10', '2019-06-18 18:22:50'),
(32, '2930106854163', 'OT', 416385, 'Slatina', 'Olt', 'str. Viilor, nr. 24', '2019-06-18 18:22:50'),
(34, '1901014693664', 'OT', 693631, 'Slatina', 'Olt', 'str.Viilor, nr.24', '2019-06-18 18:22:50'),
(35, '1900816785631', 'OT', 786521, 'Slatina', 'Olt', 'str.Trandafirilor, nr.47', '2019-06-18 18:22:50'),
(36, '2961222235695', 'OT', 223685, 'Slatina', 'Olt', 'str.Crisan , sc.2, et.2, ap.7 ', '2019-06-18 16:48:46'),
(37, '2940121789987', 'DJ', 168861, 'Craiova', 'Dolj', 'str.Lacramioarei, nr.3, et.1, ap 1', '2019-06-26 06:35:17'),
(38, '2941220568965', 'DJ', 123321, 'Craiova', 'Dolj', 'str.Lacramioarei, nr.6, et.1, ap 1', '2019-06-18 17:33:01'),
(39, '2941119658325', 'DJ', 186286, 'Craiova', 'Dolj', 'str.Fetelor, nr.2, et.4, ap 10', '2019-06-18 16:54:04'),
(40, '2941018123456', 'DJ', 685622, 'Craiova', 'Dolj', 'str.Lacramioarei, nr1, et2, ap 4', '2019-06-29 11:09:50'),
(41, '2940915265562', 'DJ', 265562, 'Craiova', 'Dolj', 'str.Lacramioarei, nr.6, et.1, ap 3', '2019-06-18 17:27:57'),
(42, '2940825123321', 'DJ', 268248, 'Craiova', 'Dolj', 'str.Lacramioarei, nr2, et4, ap 8', '2019-06-18 17:27:57'),
(43, '1940615369874', 'DJ', 456658, 'Caiova', 'Dolj', 'str.Filip Lazar, nr2, et3, ap 9', '2019-06-18 17:24:59'),
(44, '1940716235147', 'DJ', 677288, 'Craiova', 'Dolj', 'str.Braila, nr.2, et.4, ap 10', '2019-06-18 16:52:40'),
(45, '1940530258634', 'DJ', 139764, 'Craiova', 'Dolj', 'str.Filip Lazar, nr2, et4, ap 8', '2019-06-18 17:22:02'),
(46, '1940412136845', 'Dj', 136845, 'Craiova', 'Dolj', 'str.Filip Lazar, nr2, et3, ap 4', '2019-06-18 17:39:25'),
(47, '1940323258741', 'Dj', 123654, 'Craiova', 'Dolj', 'str.Filip Lazar, nr2, et3, ap 6', '2019-06-18 17:20:48'),
(48, '2600223236745', 'OT', 256984, 'Slatina', 'Olt', 'str.Alunului, nr.45', '2019-06-18 17:02:47'),
(49, '1940211358874', 'OT', 156852, 'Slatina', 'Olt', 'Aleea Viorelelor, GA5A, et.8, ap.34', '2019-06-16 08:00:29'),
(56, '2960820000000', 'OT', 256984, 'Slatina', 'Olt', 'Aleea Rozelor, FB23, sc.C, et2, ap.5', '2019-06-29 10:56:21');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cazuri_publicate`
--

CREATE TABLE `cazuri_publicate` (
  `ID` int(255) NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `grupa_sanguina` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `caz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `cazuri_publicate`
--

INSERT INTO `cazuri_publicate` (`ID`, `nume`, `prenume`, `grupa_sanguina`, `caz`) VALUES
(2, 'Gheorghe', 'Amalia', 'A', 'Tânăra are nevoie de transfuzii zilnice cu grupa sanguină A negativ.'),
(3, 'Dragan', 'Diana-Andreea', 'AB', 'Aplazie medulară, până în momentul operației trebuie să facă transfuzii sanguine periodice cu grupa AB pozitiv.'),
(4, 'Popescu', 'Diana', 'AB', 'Aplazie medulară, până în momentul operației trebuie să facă transfuzii sanguine zilnice');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `donatori`
--

CREATE TABLE `donatori` (
  `ID` int(255) NOT NULL,
  `prenume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_nastere` date NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `sex` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rh` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `grupa_sanguina` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c1` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c2` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c3` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c4` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c5` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c6` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c7` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c8` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c9` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c10` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c11` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c12` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c13` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c14` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c15` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c16` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c17` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c18` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c19` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c20` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c21` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c22` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c23` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c24` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c25` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c26` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c27` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `activ` int(11) NOT NULL,
  `data_cererii` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `donatori`
--

INSERT INTO `donatori` (`ID`, `prenume`, `nume`, `email`, `data_nastere`, `telefon`, `sex`, `rh`, `grupa_sanguina`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `c16`, `c17`, `c18`, `c19`, `c20`, `c21`, `c22`, `c23`, `c24`, `c25`, `c26`, `c27`, `activ`, `data_cererii`) VALUES
(1, 'Diana-Andreea', 'Dragan', 'dyusk_96@yahoo.com', '1996-08-20', '0760373781', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-04-06 12:09:28'),
(2, 'Octavian', 'Iancu', 'octavian@gmail.com', '1994-02-21', '0770506027', 'm', '-', 'A', 'Da', 'Nu', 'Nu', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-04-06 12:27:39'),
(8, 'Elena', 'Dragan', 'dragan_diana96@yahoo.com', '1976-06-05', '0766107379', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-09 13:44:58'),
(9, 'Ionel', 'Dragan', 'ionel_dragan@gmail.com', '1972-05-06', '0760373781', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-09 13:46:30'),
(11, 'Adela', 'Pitur', 'dyusk_96@yahoo.com', '1987-04-22', '0760373781', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-10 12:26:49'),
(12, 'Dan', 'Pitur', 'dan_pitur6@yahoo.com', '1988-07-12', '0760373781', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-10 12:37:32'),
(13, 'Ion', 'Nedea', 'ion_nedea@yahoo.com', '1971-01-20', '0760373781', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-10 12:39:37'),
(14, 'Flori', 'Nedea', 'nedea_flori@yahoo.com', '1973-03-21', '0760373781', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-10 12:39:52'),
(15, 'Eugen', 'Dragan', 'dyusk_96@yahoo.com', '1994-02-16', '0760373781', 'm', '-', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-10 12:41:20'),
(16, 'Dani', 'Dragan', 'dani_dragan@gmail.com', '1983-10-21', '0760000000', 'm', '-', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:25:11'),
(17, 'Alina', 'Iordache', 'alina_iordache@yahoo.com', '1983-09-25', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 14:31:18'),
(18, 'Daniel', 'Manda', 'manda_daniel@yahoo.com', '1978-03-30', '0760000000', 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:31:18'),
(19, 'Maria', 'Manda', 'manda_maria@yahoo.com', '1954-06-14', '0760', 'f', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-06-15 14:36:41'),
(20, 'Teodora', 'Cocos', 'teodora_cocos@yahoo.com', '1996-03-02', '0760000000', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:36:41'),
(21, 'Talal', 'Husni', 'husni_talal@gmail.com', '1996-10-25', '0760000000', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:40:05'),
(22, 'Oana', 'Cirhoata', 'cirhoata_oana@gmail.com', '1996-06-30', '0760000000', 'f', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:40:05'),
(23, 'Indira', 'Iancu', 'indira_iancu@yahoo.com', '1972-06-06', '0760000000', 'f', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:45:00'),
(24, 'Giani', 'Iancu', 'giani_iancu@yahoo.com', '1970-01-29', '0760000000', 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:45:00'),
(25, 'Maria', 'Tanasascu', 'tanaescu_maria@yahoo.com', '1945-07-01', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:48:45'),
(26, 'Vasile', 'Tanasescu', 'tanasescu_vasile@yahoo.com', '1946-06-01', '0760000000', 'm', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 14:48:45'),
(27, 'Nicoleta', 'Scarlat', 'nicoleta_scarlat@yahoo.com', '1976-06-29', '0760000000', 'f', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:52:22'),
(28, 'Constantin', 'Scarlat', 'cst_scarlat@yahoo.com', '1969-05-01', '0760000000', 'm', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 14:52:22'),
(29, 'Cristian', 'Voicu', 'voicu@yahoo.com', '1963-05-15', '0760000000', 'm', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:01:00'),
(30, 'Ana', 'Smarandescu', 'ana_smara@yahoo.com', '1962-02-12', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-03 10:16:09'),
(31, 'Ana-Maria', 'Gheorghe', 'am_gheorghe@yahoo.com', '1992-12-15', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:05:39'),
(32, 'Rodica', 'Vochin', 'rodi_vochin@yahoo.com', '1993-01-06', '0760000000', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 15:05:39'),
(34, 'Ionut', 'Vochin', 'vochin_ionut@yahoo.com', '1990-10-14', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:09:05'),
(35, 'Marinel', 'Nicolita', 'nicolita_marinel@yahoo.com', '1990-08-16', '0760000000', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:11:39'),
(36, 'Iulia', 'Bunea', 'iulia_bunea@yahoo.com', '1996-12-22', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:11:39'),
(37, 'Nicolae', 'Stoica', 'nicolae_stoica@yahoo.com', '1994-01-21', '0760000000', 'm', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:15:51'),
(38, 'Adina', 'Mihai', 'mihai_adina@yahoo.com', '1994-12-20', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:15:51'),
(39, 'Adelina', 'Mihai', 'mihai_ade@yahoo.com', '1994-11-19', '0760000000', 'f', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:19:42'),
(40, 'Mihaela', 'Anda', 'anda_mihaela@yahoo.con', '1994-10-18', '0760000000', 'f', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:19:42'),
(41, 'Madalina', 'Manda', 'manda_mada@yahoo.com', '1994-09-15', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 15:22:22'),
(42, 'Loredana', 'Marinescu', 'marinescu_lori@yahoo.com', '0000-00-00', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:22:22'),
(43, 'Manuel', 'Nae', 'manu_nae@yahoo.com', '1994-06-15', '0760000000', 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 15:25:27'),
(44, 'Stefan', 'Ciupitu', 'ciupitu_stefan@yahoo.com', '1994-07-16', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:25:27'),
(45, 'Remus', 'Tatu', 'tatu_remus@yahoo.com', '1994-05-30', '0760000000', 'f', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 15:28:26'),
(46, 'Andi', 'Ioana', 'ioana_andi@yahoo.com', '1994-04-12', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-06-15 15:28:26'),
(47, 'Daniel', 'Ilina', 'ilinca_daniel@yahoo.com', '1994-03-24', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-15 15:30:58'),
(48, 'Tatiana', 'Curiman', 'curiman_tatiana@yahoo.com', '1960-02-23', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-06-15 15:30:58'),
(49, 'Alin', 'Anghel\r\n', 'anghel_alin@yahoo.com', '1994-01-12', '0760000000', 'm', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-06-15 15:32:33'),
(50, 'Ilie', 'Badoiu', 'ilie_b@yahoo.com', '1958-10-02', '0760000000', 'm', '-', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-18 21:38:49'),
(51, 'Radu', 'Giurea', 'radu_g@yahoo.com', '1967-06-21', '0760000000', 'm', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-18 21:38:49'),
(52, 'Lucian', 'Mihalache', 'mihalache_l@yahoo.com', '1973-09-22', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-18 21:42:52'),
(53, 'Marian', 'Popa', 'popa_m@yahoo.com', '1976-02-21', '0760000000', 'm', '-', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-18 21:42:52'),
(55, 'Nicolae', 'Marin', 'dyusk_96@yahoo.com', '1976-06-05', '0760000000', 'm', '-', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-20 15:18:54'),
(56, 'Diana', 'Dragan', 'dyusk_96@yahoo.com', '1996-08-20', '0760373781', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-06-28 21:49:11');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mesaje`
--

CREATE TABLE `mesaje` (
  `ID` int(255) NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mesaj` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `stare_email` int(11) DEFAULT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `mesaje`
--

INSERT INTO `mesaje` (`ID`, `nume`, `prenume`, `mesaj`, `email`, `stare_email`, `data`) VALUES
(1, 'Dragan', 'Andreea', 'Hello', 'dyusk_96@yahoo.com', 0, '2019-06-12 10:00:00'),
(2, 'Iancu', 'octavian', 'Hello', 'iancu_octavian@yahoo.com', 0, '2019-06-09 00:00:00'),
(3, 'Dragan', 'Diana', 'Hello', 'dragan_diana96@yahoo.com', 0, '2019-06-19 00:00:00'),
(4, 'Popescu', 'Ana', 'footer', 'ana_popescu@yahoo.com', 0, '2019-06-02 00:00:00');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `pacienti`
--

CREATE TABLE `pacienti` (
  `ID` int(255) NOT NULL,
  `prenume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_nastere` date NOT NULL,
  `telefon` int(10) NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `grupa_sanguina` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `caz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `public` varchar(5) NOT NULL,
  `data_cererii` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `pacienti`
--

INSERT INTO `pacienti` (`ID`, `prenume`, `nume`, `email`, `data_nastere`, `telefon`, `sex`, `rh`, `grupa_sanguina`, `caz`, `public`, `data_cererii`, `activ`) VALUES
(6, 'Amalia', 'Gheorghe', 'dyusk_96@yahoo.com', '1996-10-21', 740151940, 'f', '-', 'A', 'Nevoie urgenta de sange pentru transfuzii zilnice', 'Da', '2019-03-16 17:22:12', 1),
(13, 'Doru', 'Popescu', 'popescu_d@yahoo.com', '1985-02-18', 763586245, 'm', '+', 'B', 'Nevoie de produse sanguine pentru sustinerea unei operatii de translant.', 'Da', '2019-06-18 21:46:47', 0),
(14, 'Ionel', 'Iancu', 'ionel_i@yahoo.com', '1992-05-23', 763586245, 'm', '-', 'A', 'Nevoie de produse sanguine pentru transfuzie periodica.', 'Da', '2019-06-18 21:49:13', 0),
(16, 'Elena', 'Popa', 'dyusk_96@yahoo.com', '1976-06-05', 760373781, 'f', '+', 'B', 'Nevoie de transfuzii sanguine zilnice.Nevoie de transfuzii sanguine zilnice.', 'Da', '2019-06-18 22:02:12', 0),
(17, 'Doru', 'Popescu', 'dyusk_96@yahoo.com', '1995-02-18', 763586245, 'm', '-', 'A', 'Nevoie de transfuzii sanguine periodice.', 'Nu', '2019-06-18 22:03:08', 0),
(18, 'Doru', 'Marin', 'dyusk_96@yahoo.com', '1994-02-21', 760000000, 'm', '+', 'A', 'Nevoie de transfuzii sanguine zilnice.', 'Nu', '2019-06-20 15:20:23', 1),
(19, 'Diana', 'Dragan', 'dyusk_96@yahoo.com', '1996-08-20', 760373781, 'f', '+', 'AB', 'test', 'Nu', '2019-06-27 23:10:38', 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `personal`
--

INSERT INTO `personal` (`id`, `email`, `parola`) VALUES
(1, 'centrulbloodbank@gmail.com', '3a23bb515e06d0e944ff916e79a7775c');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `spitale`
--

CREATE TABLE `spitale` (
  `ID` int(255) NOT NULL,
  `denumire` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefon` int(9) NOT NULL,
  `cantitate` int(255) NOT NULL,
  `rh` varchar(20) NOT NULL,
  `grupa` varchar(20) NOT NULL,
  `cazul` varchar(255) NOT NULL,
  `data_cererii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `spitale`
--

INSERT INTO `spitale` (`ID`, `denumire`, `email`, `telefon`, `cantitate`, `rh`, `grupa`, `cazul`, `data_cererii`, `activ`) VALUES
(4, 'Spitalul Judetean Slatina,Olt', 'sjSlatina@yahoo.com', 770506027, 10, '+', 'AB', 'Stocuri insuficiente pentru operatiile medicale.', '2019-04-03 07:52:38', 1),
(5, 'Spitalul Judetean Slatina', 'spitalul_judetean@yahoo.com', 349000000, 10, '+', 'B', 'Lipsa stocului.', '2019-06-08 12:43:25', 1),
(6, 'Spitalul Clinic Judetean de Urgenta Craiova', 'scj_urgenta_craiova@yahoo.com', 349000000, 20, '+', 'A', 'Stocuri insuficiente pentru operatiile medicale', '2019-06-19 07:18:49', 1),
(7, 'Spitalul Clinic Judetean de Urgenta Craiova', 'scj_urgenta_craiova@yahoo.com', 349000000, 20, '-', 'B', 'Stocuri insuficiente pentru operatiile medicale', '2019-06-19 07:18:49', 0),
(8, 'Spitalul Clinic Judetean de Urgenta Craiova', 'scj_urgenta_craiova@yahoo.com', 349000000, 15, '+', 'AB', 'Stocuri insuficiente pentru operatiile medicale', '2019-06-19 07:18:49', 0),
(9, 'Spitalul Clinic Judetean de Urgenta Craiova', 'scj_urgenta_craiova@yahoo.com', 349000000, 30, '-', '0', 'Stocuri insuficiente ?entru operatiile medicale', '2019-06-19 07:18:49', 1),
(10, 'Spitalul Judetean de Urgente Slatina', 'sjSlatina@yahoo.com', 760000000, 20, '-', 'AB', 'Stocuri insuficiente pentru operatiile medicale', '2019-06-19 07:20:42', 0),
(11, 'Spitalul Judetean de Urgente Slatina', 'sjSlatina@yahoo.com', 760000000, 23, '-', 'B', 'Stocuri insuficiente pentru operatiile medicale', '2019-06-19 07:20:42', 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stare_campanii`
--

CREATE TABLE `stare_campanii` (
  `id` int(255) DEFAULT NULL,
  `stare` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `stare_campanii`
--

INSERT INTO `stare_campanii` (`id`, `stare`) VALUES
(0, 'inactiv'),
(1, 'activ');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stare_cereri_p_s`
--

CREATE TABLE `stare_cereri_p_s` (
  `id` int(10) NOT NULL,
  `stare` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `stare_cereri_p_s`
--

INSERT INTO `stare_cereri_p_s` (`id`, `stare`) VALUES
(0, 'inactiv'),
(1, 'activ');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stare_donator`
--

CREATE TABLE `stare_donator` (
  `id` int(11) NOT NULL,
  `stare` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `stare_donator`
--

INSERT INTO `stare_donator` (`id`, `stare`) VALUES
(0, 'inactiv'),
(1, 'in_asteptare'),
(2, 'activ'),
(3, 'respins');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stare_mesaj`
--

CREATE TABLE `stare_mesaj` (
  `ID` int(10) NOT NULL,
  `stare` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `stare_mesaj`
--

INSERT INTO `stare_mesaj` (`ID`, `stare`) VALUES
(0, 'necitit'),
(1, 'citit');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stoc`
--

CREATE TABLE `stoc` (
  `ID` int(255) NOT NULL,
  `grupa` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rh` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cantitate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `stoc`
--

INSERT INTO `stoc` (`ID`, `grupa`, `rh`, `cantitate`) VALUES
(1, '0', '+', 14),
(2, '0', '-', 18),
(3, 'A', '+', 21),
(4, 'A', '-', 5),
(5, 'B', '+', 21),
(6, 'B', '-', 16),
(7, 'AB', '+', 13),
(8, 'AB', '-', 8);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `voluntari`
--

CREATE TABLE `voluntari` (
  `ID` int(255) NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mesaj` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon` int(10) NOT NULL,
  `data_cererii` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `voluntari`
--

INSERT INTO `voluntari` (`ID`, `nume`, `prenume`, `email`, `tip`, `mesaj`, `telefon`, `data_cererii`) VALUES
(3, 'Dragan', 'Diana', 'diana@gmail.com', 'initiator', 'Dorim sa va punem la dispozitie parterul hotelului pe care il detinem in scopul efectuarii unei campanii de donare, publicitatea pentru campanie o sa fie facuta in mod accentuat de departamentul de marketing si publicitate al hotelului nostru.', 760373781, '2019-04-03 11:00:43'),
(4, 'Dragan', 'Diana', 'dragan_diana96@yahoo.com', 'voluntar', 'Imi doresc sa ajut la campaniile desfasurate de centrul BloodBank.', 760373781, '2019-05-09 17:36:21'),
(5, 'Preda', 'Maria', 'preda_m@gmail.com', 'voluntar', 'Imi doresc sa devin voluntar BloodBank', 760373781, '2019-05-09 17:36:41'),
(6, 'Dragan', 'Andreea', 'dyusk_96@yahoo.com', 'voluntar', 'Imi place sa fac voluntariat si imi doresc sa ajut centrul cu ce pot', 760373781, '2019-06-11 20:54:03'),
(7, 'Voicu ', 'Alexandru', 'voicu_a@yahoo.com', 'initiator', 'Dorim sa va punem la dispozitie doua cabinete din cadrul clinicii pentru strangerea de stocuri sanguine.', 2147483647, '2019-06-19 12:17:02'),
(8, 'Marin', 'Elena', 'dyusk_96@yahoo.com', 'voluntar', '', 760000000, '2019-06-20 15:24:04');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `campanii`
--
ALTER TABLE `campanii`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `carnetul_donatorului`
--
ALTER TABLE `carnetul_donatorului`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `cazuri_publicate`
--
ALTER TABLE `cazuri_publicate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `donatori`
--
ALTER TABLE `donatori`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `pacienti`
--
ALTER TABLE `pacienti`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `spitale`
--
ALTER TABLE `spitale`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `stare_donator`
--
ALTER TABLE `stare_donator`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `stoc`
--
ALTER TABLE `stoc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `voluntari`
--
ALTER TABLE `voluntari`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `campanii`
--
ALTER TABLE `campanii`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `cazuri_publicate`
--
ALTER TABLE `cazuri_publicate`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `donatori`
--
ALTER TABLE `donatori`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pentru tabele `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `pacienti`
--
ALTER TABLE `pacienti`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pentru tabele `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `spitale`
--
ALTER TABLE `spitale`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pentru tabele `stoc`
--
ALTER TABLE `stoc`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `voluntari`
--
ALTER TABLE `voluntari`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
