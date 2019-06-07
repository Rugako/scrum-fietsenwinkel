-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 07 jun 2019 om 22:26
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestel`
--

CREATE TABLE `bestel` (
  `bestel_ID` int(255) NOT NULL,
  `Klant_ID` int(255) NOT NULL,
  `Fiets_ID` int(255) NOT NULL,
  `bestel_datum` date NOT NULL,
  `bestel_Status` varchar(255) NOT NULL,
  `bestel_Aantal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `betalingen`
--

CREATE TABLE `betalingen` (
  `Betaal_ID` int(255) NOT NULL,
  `Klant_ID` int(255) NOT NULL,
  `Betaal_Datum` date NOT NULL,
  `Betaal_Bedrag` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets`
--

CREATE TABLE `fiets` (
  `Fiets_ID` int(255) NOT NULL,
  `Fiets_Naam` varchar(255) NOT NULL,
  `Fiets_Type` varchar(255) NOT NULL,
  `Fiets_Prijs` int(25) NOT NULL,
  `Fiets_ProfielFoto` varchar(255) NOT NULL,
  `Fiets_Foto` varchar(255) NOT NULL,
  `Fiets_AantalBeschikbaar` int(255) NOT NULL,
  `Fiets_Gewicht` int(255) NOT NULL,
  `Fiets_Afmeting` int(255) NOT NULL,
  `Fiets_Merk` varchar(255) NOT NULL,
  `Fiets_Serie` varchar(255) NOT NULL,
  `Fiets_Frametype` varchar(255) NOT NULL,
  `Fiets_Collectiejaar` varchar(255) NOT NULL,
  `Fiets_Wielgrootte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fiets`
--

INSERT INTO `fiets` (`Fiets_ID`, `Fiets_Naam`, `Fiets_Type`, `Fiets_Prijs`, `Fiets_ProfielFoto`, `Fiets_Foto`, `Fiets_AantalBeschikbaar`, `Fiets_Gewicht`, `Fiets_Afmeting`, `Fiets_Merk`, `Fiets_Serie`, `Fiets_Frametype`, `Fiets_Collectiejaar`, `Fiets_Wielgrootte`) VALUES
(1, 'Giant Fathom 2 LTD 29 2019', 'Mountainbikes', 1299, '', '', 20, 12, 0, 'Giant', 'Fathom', 'Herenfiets', '2019', '29er'),
(2, 'Giant Chill 2 2019 Dames', 'Stadsfietsen', 599, '', '', 20, 18, 0, 'Giant', 'Chill', 'Damesfiets', '2019', '-'),
(3, 'Sensa Umbria 21 2018', 'Racefietsen', 480, '', '', 20, 10, 0, 'Sensa', 'Umbria', 'Herenfiets', '2018', '700 x 40 C');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `Klant_ID` int(255) NOT NULL,
  `Klant_Naam` varchar(255) NOT NULL,
  `Klant_Tussenvoegsel` varchar(255) NOT NULL,
  `Klant_Achternaam` varchar(255) NOT NULL,
  `Klant_Profielfoto` varchar(255) NOT NULL,
  `Klant_Postcode` varchar(7) NOT NULL,
  `Klant_Plaats` varchar(255) NOT NULL,
  `Klant_Adres` varchar(255) NOT NULL,
  `Klant_Adres2` varchar(255) NOT NULL,
  `Klant_TelefoonNum` varchar(255) NOT NULL,
  `Klant_Email` varchar(255) NOT NULL,
  `Klant_Wachtwoord` varchar(255) NOT NULL,
  `Klant_Land` varchar(255) NOT NULL,
  `Klant_RegristatieDatum` date NOT NULL,
  `Klant_GeboorteDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuwsbrief`
--

CREATE TABLE `nieuwsbrief` (
  `Nieuwsbrief_ID` int(255) NOT NULL,
  `Klant_ID` int(11) NOT NULL,
  `NieuwsbriefType` varchar(255) NOT NULL,
  `Nieuwsbrief_HMTL` varchar(255) NOT NULL,
  `Klant_Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personeel`
--

CREATE TABLE `personeel` (
  `Personeel_ID` int(255) NOT NULL,
  `Personeel_Naam` varchar(255) NOT NULL,
  `Personeel_Tussenvoegsel` varchar(255) NOT NULL,
  `Personeel_Achternaam` varchar(255) NOT NULL,
  `Personeel_Gebruikersnaam` varchar(255) NOT NULL,
  `Personeel_Wachtwoord` varchar(255) NOT NULL,
  `Personeel_SecuriteLevel` varchar(255) NOT NULL,
  `Personeel_Plaats` varchar(255) NOT NULL,
  `Personeel_Postcode` varchar(255) NOT NULL,
  `Personeel_Email` varchar(255) NOT NULL,
  `Personeel_GeboorteDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `Review_ID` int(255) NOT NULL,
  `Fiets_ID` int(255) NOT NULL,
  `Klant_ID` int(255) NOT NULL,
  `Review_Rating` int(255) NOT NULL,
  `Review_Status` varchar(255) NOT NULL,
  `Review_Likes` int(255) NOT NULL,
  `Review_Qualiteit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestel`
--
ALTER TABLE `bestel`
  ADD PRIMARY KEY (`bestel_ID`),
  ADD KEY `Klant_ID` (`Klant_ID`),
  ADD KEY `Fiets_ID` (`Fiets_ID`);

--
-- Indexen voor tabel `betalingen`
--
ALTER TABLE `betalingen`
  ADD PRIMARY KEY (`Betaal_ID`),
  ADD KEY `Klant_ID` (`Klant_ID`);

--
-- Indexen voor tabel `fiets`
--
ALTER TABLE `fiets`
  ADD PRIMARY KEY (`Fiets_ID`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`Klant_ID`);

--
-- Indexen voor tabel `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  ADD PRIMARY KEY (`Nieuwsbrief_ID`),
  ADD KEY `Klant_ID` (`Klant_ID`);

--
-- Indexen voor tabel `personeel`
--
ALTER TABLE `personeel`
  ADD PRIMARY KEY (`Personeel_ID`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_ID`),
  ADD KEY `Fiets_ID` (`Fiets_ID`),
  ADD KEY `Klant_ID` (`Klant_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestel`
--
ALTER TABLE `bestel`
  MODIFY `bestel_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `betalingen`
--
ALTER TABLE `betalingen`
  MODIFY `Betaal_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `fiets`
--
ALTER TABLE `fiets`
  MODIFY `Fiets_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  MODIFY `Nieuwsbrief_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `personeel`
--
ALTER TABLE `personeel`
  MODIFY `Personeel_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `Review_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestel`
--
ALTER TABLE `bestel`
  ADD CONSTRAINT `bestel_ibfk_1` FOREIGN KEY (`Fiets_ID`) REFERENCES `fiets` (`Fiets_ID`),
  ADD CONSTRAINT `bestel_ibfk_2` FOREIGN KEY (`Klant_ID`) REFERENCES `klant` (`Klant_ID`);

--
-- Beperkingen voor tabel `betalingen`
--
ALTER TABLE `betalingen`
  ADD CONSTRAINT `betalingen_ibfk_1` FOREIGN KEY (`Klant_ID`) REFERENCES `klant` (`Klant_ID`);

--
-- Beperkingen voor tabel `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  ADD CONSTRAINT `nieuwsbrief_ibfk_1` FOREIGN KEY (`Klant_ID`) REFERENCES `klant` (`Klant_ID`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`Fiets_ID`) REFERENCES `fiets` (`Fiets_ID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`Klant_ID`) REFERENCES `klant` (`Klant_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
