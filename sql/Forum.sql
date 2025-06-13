-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Cze 13, 2025 at 11:07 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Forum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`) VALUES
(17, 'user', '$2y$10$1g.tV/gTFK29n38ZhkvWGOiuuaMuX2YKY7fOlY9Wvqdjmu/jJCKla', 'user@example.com'),
(16, 'karolina', '$2y$10$EIC8t.iQp/c2Uj1/Z5nSTOQahbWXYxrL2k1MB48Za81uBBPn4Uk..', 'w@exaple.com'),
(15, 'Gandalf', '$2y$10$u8oXuwTbhqr.L8j3aBlK5um52poYUyCFdVp/vwcybvzEXhUCgHv8W', 'gandalf@example.com'),
(14, 'Dominik', '$2y$10$xhQE2.7TVpD3zuzUrAHyfOhBv0VsMsg7P93lWjkzujmnlY3jPmLVi', 'Dominik@example.com'),
(13, 'Domin', '$2y$10$foW/E8aOpkk2GLDgvSVn/.QISEFgnjiJB4Utp.tmdhMwjBRVqR5Oi', '123@mail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
