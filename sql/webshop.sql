-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 06 2019 kl. 09:30:34
-- Serverversion: 10.1.40-MariaDB
-- PHP-version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `productId` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `authorId` int(5) NOT NULL,
  `imgUrl` varchar(50) NOT NULL,
  `imgAlt` varchar(50) NOT NULL,
  `price` double(10,2) NOT NULL,
  `date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`productId`, `title`, `text`, `category`, `authorId`, `imgUrl`, `imgAlt`, `price`, `date`) VALUES
(1, 'Æbler', 'Kurv med æbler', 'Frugt', 1, 'aebler.jpg', 'Æbler', 25.00, 1519141458),
(2, 'Appelsiner', 'Kurv appelsiner', 'Frugt', 1, 'Appelsiner.jpg', 'Appelsiner', 27.00, 1521241859),
(3, 'Bananer', 'Håndfuld bananer', 'Frugt', 1, 'bananer.jpg', 'Bananer', 6.00, 1525241512),
(4, 'Gulerødder', 'Lille bunke gulerødder', 'Grønt', 1, 'guleroedder.jpg', 'Gulerødder', 12.00, 1533241536),
(5, 'Agurk', 'En agurk', 'Grønt', 1, 'agurk.jpg', 'Agurk', 5.00, 1551241559),
(6, 'Løg', 'En masse løg!', 'Grønt', 1, 'loeg.jpg', 'Løg', 30.00, 1554241591),
(7, 'Melon', 'En enkelt skive melon!', 'Frugt', 1, 'melon.jpg', 'Melon', 2.00, 1555241689),
(8, 'Radiser', 'Kæmpe bunke radiser', 'Grønt', 1, 'radiser.jpg', 'Radiser', 20.00, 1559241693),
(9, 'Wumpa', 'En skøn wumpa frugt', 'Frugt', 1, 'wumpa.jpg', 'Wumpa', 99.00, 1560202569),
(10, 'Broccoli', 'En dejlig broccoli', 'Grønt', 1, 'broccoli.jpg', 'Broccoli', 24.00, 1560243532),
(12, 'Tomat', 'Tomater er bare så gode... Mums!', 'Grønt', 5, 'tomat.jpg', 'Tomaaaat', 50.00, 1560426395);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `userId` int(3) NOT NULL,
  `dbUsername` varchar(30) NOT NULL,
  `dbPassword` varchar(255) NOT NULL,
  `accessLevel` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`userId`, `dbUsername`, `dbPassword`, `accessLevel`) VALUES
(1, 'Nicklas', 'kode123', 1),
(5, 'Tomat Elsker', 'tomat', 2),
(6, 'level2', 'level2', 2),
(7, 'Ole', 'Ole', 3),
(8, 'level3', 'level3', 3);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
