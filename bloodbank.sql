-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 15, 2019 la 09:48 PM
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
(6, 'Drop of life', 'Impreuna putem ajuta.\r\nAlatura-te la o noua capanie de donare de sange ce priveste toti pacientii nostri.', '2019-08-20', 'Centrul BoodBank', 'drops.jpg', 1, 0),
(7, 'Drop of life', 'Impreuna putem ajuta.\r\nAlatura-te la o noua capanie de donare de sange ce priveste toti pacientii nostri.', '2019-08-20', 'Slatina', 'drops-of-life.jpg', 0, 0);

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
(1, '2960820284541', 'OT', 677288, 'Slatina', 'Olt', 'Aleea viorelelor, GA5A, et.8, ap.34', '2019-06-11 17:49:06'),
(2, '1960221284569', 'OT', 676842, 'Slatina', 'Olt', 'Aleea Rozelor, FB23, sc.C, et2, ap.5', '2019-06-09 10:53:07'),
(8, '2760605284374', 'OT', 619101, 'Slatina', 'Olt', 'Aleea viorelelor, GA5A, et.8, ap.34', '2019-06-11 17:56:03');

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
(1, 'Diana-Andreea', 'Dragan', 'AB', 'Aplazie medulară. Până în momentul operației trebuie să se facă transfuzii sanguine zilnice cu grupa AB pozitiv.');

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
(2, 'Octavian', 'Iancu', 'octavian@gmail.com', '1994-02-21', '0770506027', 'm', '-', 'A', 'Da', 'Nu', 'Nu', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 1, '2019-04-06 12:27:39'),
(8, 'Elena', 'Dragan', 'dragan_diana96@yahoo.com', '1976-06-05', '0766107379', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-06-09 13:44:58'),
(9, 'Ionel', 'Dragan', 'ionel_dragan@gmail.com', '1972-05-06', '0760373781', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-09 13:46:30'),
(11, 'Adela', 'Pitur', 'dyusk_96@yahoo.com', '1987-04-22', '0760373781', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-10 12:26:49'),
(12, 'Dan', 'Pitur', 'dan_pitur6@yahoo.com', '1988-07-12', '0760373781', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-10 12:37:32'),
(13, 'Ion', 'Nedea', 'ion_nedea@yahoo.com', '1971-01-20', '0760373781', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-10 12:39:37'),
(14, 'Flori', 'Nedea', 'nedea_flori@yahoo.com', '1973-03-21', '0760373781', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-10 12:39:52'),
(15, 'Eugen', 'Dragan', 'dyusk_96@yahoo.com', '1994-02-16', '0760373781', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-10 12:41:20'),
(16, 'Dani', 'Dragan', 'dani_dragan@gmail.com', '1983-10-21', '0760000000', 'm', '-', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:25:11'),
(17, 'Alina', 'Iordache', 'alina_iordache@yahoo.com', '1983-09-25', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:31:18'),
(18, 'Daniel', 'Manda', 'manda_daniel@yahoo.com', '1978-03-30', '0760000000', 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:31:18'),
(19, 'Maria', 'Manda', 'manda_maria@yahoo.com', '1954-06-14', '0760', 'f', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:36:41'),
(20, 'Teodora', 'Cocos', 'teodora_cocos@yahoo.com', '1996-03-02', '0760000000', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:36:41'),
(21, 'Talal', 'Husni', 'husni_talal@gmail.com', '1996-10-25', '0760000000', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:40:05'),
(22, 'Oana', 'Cirhoata', 'cirhoata_oana@gmail.com', '1996-06-30', '0760000000', 'f', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:40:05'),
(23, 'Indira', 'Iancu', 'indira_iancu@yahoo.com', '1972-06-06', '0760000000', 'f', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:45:00'),
(24, 'Giani', 'Iancu', 'giani_iancu@yahoo.com', '1970-01-29', '0760000000', 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:45:00'),
(25, 'Maria', 'Tanasascu', 'tanaescu_maria@yahoo.com', '1945-07-01', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:48:45'),
(26, 'Vasile', 'Tanasescu', 'tanasescu_vasile@yahoo.com', '1946-06-01', '0760000000', 'm', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:48:45'),
(27, 'Nicoleta', 'Scarlat', 'nicoleta_scarlat@yahoo.com', '1976-06-29', '0760000000', 'f', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:52:22'),
(28, 'Constantin', 'Scarlat', 'cst_scarlat@yahoo.com', '1969-05-01', '0760000000', 'm', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 14:52:22'),
(29, 'Cristian', 'Voicu', 'voicu@yahoo.com', '1963-05-15', '0760000000', 'm', '-', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:01:00'),
(30, 'Ana', 'Smarandescu', 'ana_smara@yahoo.com', '1962-02-12', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-03 10:16:09'),
(31, 'Ana-Maria', 'Gheorghe', 'am_gheorghe@yahoo.com', '1992-12-15', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:05:39'),
(32, 'Rodica', 'Vochin', 'rodi_vochin@yahoo.com', '1993-01-06', '0760000000', 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:05:39'),
(33, 'Rodica', 'Vochin', 'rodi_vochin@yahoo.com', '1993-01-06', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:09:05'),
(34, 'Ionut', 'Vochin', 'vochin_ionut@yahoo.com', '1990-10-14', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:09:05'),
(35, 'Marinel', 'Nicolita', 'nicolita_marinel@yahoo.com', '1990-08-16', '0760000000', 'm', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:11:39'),
(36, 'Iulia', 'Bunea', 'iulia_bunea@yahoo.com', '1996-12-22', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:11:39'),
(37, 'Nicolae', 'Stoica', 'nicolae_stoica@yahoo.com', '1994-01-21', '0760000000', 'm', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:15:51'),
(38, 'Adina', 'Mihai', 'mihai_adina@yahoo.com', '1994-12-20', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:15:51'),
(39, 'Adelina', 'Mihai', 'mihai_ade@yahoo.com', '1994-11-19', '0760000000', 'f', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:19:42'),
(40, 'Mihaela', 'Anda', 'anda_mihaela@yahoo.con', '1994-10-18', '0760000000', 'f', '-', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:19:42'),
(41, 'Madalina', 'Manda', 'manda_mada@yahoo.com', '1994-09-15', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:22:22'),
(42, 'Loredana', 'Marinescu', 'marinescu_lori@yahoo.com', '0000-00-00', '0760000000', 'f', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:22:22'),
(43, 'Manuel', 'Nae', 'manu_nae@yahoo.com', '1994-06-15', '0760000000', 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:25:27'),
(44, 'Stefan', 'Ciupitu', 'ciupitu_stefan@yahoo.com', '1994-07-16', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:25:27'),
(45, 'Remus', 'Tatu', 'tatu_remus@yahoo.com', '1994-05-30', '0760000000', 'f', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:28:26'),
(46, 'Andi', 'Ioana', 'ioana_andi@yahoo.com', '1994-04-12', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:28:26'),
(47, 'Daniel', 'Ilina', 'ilinca_daniel@yahoo.com', '1994-03-24', '0760000000', 'm', '+', 'A', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:30:58'),
(48, 'Tatiana', 'Curiman', 'curiman_tatiana@yahoo.com', '1960-02-23', '0760000000', 'f', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:30:58'),
(49, 'Alin', 'Anghel\r\n', 'anghel_alin@yahoo.com', '1994-01-12', '0760000000', 'm', '+', '0', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-06-15 15:32:33');

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
(1, 'Diana-Andreea', 'Andreea', 'eyrfg', 'dyusk_96@yahoo.com', 1, '2019-06-12 10:00:00'),
(2, 'Iancu', 'Andreea', 'etyrhdtfgj', 'dyusk_96@yahoo.com', 0, '2019-06-09 00:00:00'),
(3, 'Dragan', 'Andreea', 'Hello', 'diana@yahoo.com', 1, '2019-06-19 00:00:00'),
(4, 'Dragan', 'Diana', 'footer', 'dyusk_96@yahoo.com', 1, '2019-06-02 00:00:00');

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
(6, 'Dragan', 'Diana-Andreea', 'dyusk_96@yahoo.com', '1996-08-20', 740151940, 'f', '-', 'A', 'werfgh', 'Nu', '2019-03-16 17:22:12', 1),
(12, 'Diana-Andreea', 'Dragan', 'dyusk_96@yahoo.com', '1996-08-20', 760373781, 'f', '+', 'AB', 'Nevoie urgenta de sange....', 'Da', '2019-04-03 10:48:16', 0);

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
(4, 'Spitalul Judetean Slatina', 'sjSlatina@yahoo.com', 770506027, 10, '+', 'AB', 'sputal', '2019-04-03 07:52:38', 0),
(5, 'Spitalul Judetean', 'spitalul_judetean@yahoo.com', 349000000, 10, '+', 'B', 'Lipsa stocului.', '2019-06-08 12:43:25', 1);

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
(1, '0', '+', 0),
(2, '0', '-', 15),
(3, 'A', '+', 15),
(4, 'A', '-', 5),
(5, 'B', '+', 40),
(6, 'B', '-', 15),
(7, 'AB', '+', 17),
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
(3, 'Dragan', 'Diana', 'diana@gmail.com', 'initiator', 'campanie de donare', 760373781, '2019-04-03 11:00:43'),
(4, 'Dragan', 'Diana', 'dyusk_96@yahoo.com', 'voluntar', '', 760373781, '2019-05-09 17:36:21'),
(5, 'Dragan', 'Diana', 'dragan_diana96@yahoo.com', 'voluntar', 'rytykh', 760373781, '2019-05-09 17:36:41'),
(6, 'Dragan', 'Diana', 'dyusk_96@yahoo.com', 'voluntar', 'cewd', 760373781, '2019-06-11 20:54:03');

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `cazuri_publicate`
--
ALTER TABLE `cazuri_publicate`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `donatori`
--
ALTER TABLE `donatori`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pentru tabele `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `pacienti`
--
ALTER TABLE `pacienti`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pentru tabele `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `spitale`
--
ALTER TABLE `spitale`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `stoc`
--
ALTER TABLE `stoc`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `voluntari`
--
ALTER TABLE `voluntari`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
