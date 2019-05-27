-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 27, 2019 la 06:13 PM
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
(6, 'Spitalul Judetean Slatina', 'doneaza impreuna cu alti oameni la centrul de transfuzii', '2019-08-20', 'Centrul BoodBank', 'drops.jpg', 1, 0),
(7, 'Drop of life', 'Impreuna putem ajuta.\r\nAlatura-te la o noua capanie de donare de sange ce riveste toti pacientii nostri.', '2019-08-20', 'Slatina', 'drops-of-life.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `carnetul_donatorului`
--

CREATE TABLE `carnetul_donatorului` (
  `id` int(11) NOT NULL,
  `cnp` int(13) NOT NULL,
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
(1, 2147483647, 'OT', 677288, 'Slatina', 'Olt', 'Aleea viorelelor, GA5A, et.8, ap.34', '2019-05-27 13:15:05'),
(2, 2147483647, 'OT', 677288, 'Slatina', 'Olt', 'Aleea Rozelor, FB23, sc.C, et2, ap.5', '2019-05-09 12:59:23'),
(6, 2147483647, 'OT', 677288, 'Slatina', 'Olt', 'Aleea viorelelor, GA5A, et.8, ap.34', '2019-05-09 14:38:24'),
(7, 2147483647, 'OT', 552674, 'Slatina', 'Olt', 'Aleea Rozelor, FB23, sc.C, et2, ap.5', '2019-05-12 15:47:44');

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
(1, 'Diana-Andreea', 'Dragan', 'AB', 'adfzsgxdhcvb');

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
  `telefon` int(10) NOT NULL,
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
(1, 'Diana-Andreea', 'Dragan', 'diana@gmail.com', '1996-08-20', 760373781, 'f', '+', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-04-06 12:09:28'),
(2, 'Octavian', 'Iancu', 'octavian@gmail.com', '1994-02-21', 770506027, 'm', '+', 'B', 'Da', 'Nu', 'Nu', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-04-06 12:27:39'),
(5, 'Diana', 'Dragan', 'dyusk_96@yahoo.com', '1996-08-20', 760373781, 'f', '+', 'AB', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 0, '2019-05-09 17:35:14'),
(6, 'Diana', 'Dragan', 'dianadragan@yahoo.com', '1996-08-20', 760373781, 'f', '+', 'A', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 3, '2019-05-09 17:36:04'),
(7, 'Jeffrey', 'Iancu', 'jeffrey_iancu@yahoo.com', '1994-02-21', 766107379, 'm', '-', 'AB', 'Da', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 'Nu', 2, '2019-05-11 17:01:03');

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
  `stare_email` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `mesaje`
--

INSERT INTO `mesaje` (`ID`, `nume`, `prenume`, `mesaj`, `email`, `stare_email`) VALUES
(1, 'Diana-Andreea', 'Andreea', 'eyrfg', 'diana@gmail.com', 0),
(2, 'Iancu', 'Andreea', 'etyrhdtfgj', 'dyusk_96@yahoo.com', 0),
(3, 'Dragan', 'Andreea', 'Hello', 'diana@yahoo.com', 0),
(4, 'Dragan', 'Diana', 'footer', 'dyusk_96@yahoo.com', 0),
(5, 'Dragan', 'Diana', 'contact', 'dyusk_96@yahoo.com', 0),
(6, 'Dragan', 'Diana', 'proba', 'dyusk_96@yahoo.com', 1);

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
(4, 'Dragan', 'Diana-Andreea', 'diana@gmail.com', '1996-08-20', 740151940, 'f', '+', 'AB', 'adfzsgxdhcvb', 'Da', '2019-03-16 16:40:06', 1),
(6, 'Dragan', 'Diana-Andreea', 'dyusk_96@yahoo.com', '1996-08-20', 740151940, 'f', '-', 'A', 'werfgh', 'Nu', '2019-03-16 17:22:12', 1),
(12, 'Diana-Andreea', 'Dragan', 'diana@gmail.com', '1996-08-20', 760373781, 'f', '+', 'AB', 'Nevoie urgenta de sange....', 'Da', '2019-04-03 10:48:16', 0);

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
(1, 'bloodbank@gmail.com', '3a23bb515e06d0e944ff916e79a7775c');

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
(4, 'Spitalul Judetean Slatina', 'sjSlatina@yahoo.com', 770506027, 10, '+', 'AB', 'sputal', '2019-04-03 07:52:38', 0);

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
(5, 'B', '+', 37),
(6, 'B', '-', 15),
(7, 'AB', '+', 9),
(8, 'AB', '-', 3);

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
(5, 'Dragan', 'Diana', 'dyusk_96@yahoo.com', 'initiator', 'rytykh', 760373781, '2019-05-09 17:36:41');

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `stoc`
--
ALTER TABLE `stoc`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `voluntari`
--
ALTER TABLE `voluntari`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
