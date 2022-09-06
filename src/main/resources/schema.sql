-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2022, 19:39
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bazafilmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
                         `Id` int(11) NOT NULL,
                         `Rok` text COLLATE utf8_polish_ci NOT NULL,
                         `Tytul` text COLLATE utf8_polish_ci NOT NULL,
                         `Gatunek` text COLLATE utf8_polish_ci NOT NULL,
                         `Rezyser` text COLLATE utf8_polish_ci NOT NULL,
                         `Rola_glowna` text COLLATE utf8_polish_ci NOT NULL,
                         `Premiera` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`Id`, `Rok`, `Tytul`, `Gatunek`, `Rezyser`, `Rola_glowna`, `Premiera`) VALUES
                                                                                                (1, '1997', 'Titanic', 'Dramat', 'James Cameron', 'Leonardo DiCaprio', 'Nie'),
                                                                                                (2, '2022', 'Pies w rozmiarze XXL', 'Animowany', 'Mark A.Z. Dippé', 'Marmaduke', 'Nie'),
                                                                                                (3, '1994', 'Skazani na Shawshank', 'Dramat', 'Frank Darabont', 'Morgan Freeman', 'Nie'),
                                                                                                (4, '2001', 'Shrek', 'Animowany', 'Andrew Adamson / Vicky Jenson', 'Shrek', 'Nie'),
                                                                                                (5, '1994', 'Maverick', 'Komedia', 'Richard Donner', 'Mel Gibson', 'Nie'),
                                                                                                (6, '2022', 'Kryptonim Polska', 'Komedia', 'Piotr Kumik', 'Cezary Pazura', 'Tak'),
                                                                                                (7, '2001', 'Harry Potter i Kamień Filozoficzny', 'Familijny', 'Chris Columbus', 'Daniel Radcliffe', 'Nie'),
                                                                                                (8, '2001', 'Szybcy i wściekli', 'Akcja', 'Rob Cohen', 'Vin Diesel', 'Nie'),
                                                                                                (9, '2003', 'Za szybcy, za wściekli', 'Akcja', 'John Singleton', 'Paul Walker', 'Nie'),
                                                                                                (10, '2019', 'Joker', 'Dramat', 'Todd Phillips', 'Joaquin Phoenix', 'Nie'),
                                                                                                (11, '1999', 'Podziemny krąg', 'Thriller', 'David Fincher', 'Brad Pitt', 'Nie'),
                                                                                                (19, '2022', 'The Woman King', 'Akcja', 'Gina Prince-Bythewood', 'Viola Davis', 'Tak'),
                                                                                                (20, '2009', 'Avatar', 'Akcja', 'James Cameron', 'twoja staraa', 'Nie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
                               `Id` int(11) NOT NULL,
                               `Login` text COLLATE utf8_polish_ci NOT NULL,
                               `Haslo` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `Login`, `Haslo`) VALUES
                                                       (1, 'Test1', '12345678'),
                                                       (3, 'Marek', 'qwerty123'),
                                                       (4, 'Szymon', 'dobrehaslo'),
                                                       (5, 'Michal', 'Jackson123'),
                                                       (6, 'TestujemyPL', 'TestoweHasło'),
                                                       (7, 'Patryk', 'GigaDobreHasło'),
                                                       (8, 'Andrzej', 'Haslo123'),
                                                       (9, 'tomek', 'tomtom123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
    ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
    ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
    MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
    MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
