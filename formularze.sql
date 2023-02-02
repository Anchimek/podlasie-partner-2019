-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 04 Lut 2020, 02:04
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `Zamowienia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `formularze`
--

CREATE TABLE `formularze` (
  `ID` int(11) NOT NULL,
  `data` date NOT NULL,
  `nazwisko` text NOT NULL,
  `hurtownia` text NOT NULL,
  `sklep` text NOT NULL,
  `Musztarda chrzanowa 12x265g` int(11) NOT NULL,
  `TROPI dla psa 3kg` int(11) NOT NULL,
  `PRIMAVERA 6l` int(11) NOT NULL,
  `Ananas MK kostka 24x565g` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `formularze`
--

INSERT INTO `formularze` (`ID`, `data`, `nazwisko`, `hurtownia`, `sklep`, `Musztarda chrzanowa 12x265g`, `TROPI dla psa 3kg`, `PRIMAVERA 6l`, `Ananas MK kostka 24x565g`) VALUES
(1, '2020-02-14', 'Kowalski', 'BOS-POL', 'CHORTEN', 4, 3, 2, 3),
(2, '2020-02-07', 'Nowak', 'DEF', 'LEWIATAN', 12, 5, 22, 23),
(3, '2020-02-06', 'Kowalski', 'SOT', 'SPOZ', 5, 25, 12, 23),
(4, '2020-02-06', 'Kowalski', 'BOS-POL', 'SPOZ2', 5, 25, 12, 23),
(5, '2019-12-13', 'Kowalski', 'BOS-POL', 'SPOZ2', 12, 5, 2, 5),
(6, '2019-12-20', 'Nowak', 'BOS-POL', 'SPOZ4', 12, 12, 2, 5),
(7, '2019-11-01', 'GÃ³rski', 'BOS-POL', 'SPOZ CZWÃ“RKA', 12, 12, 22, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `formularze`
--
ALTER TABLE `formularze`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `formularze`
--
ALTER TABLE `formularze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
