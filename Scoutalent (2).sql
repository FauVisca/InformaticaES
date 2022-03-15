-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2022 alle 20:04
-- Versione del server: 8.0.21
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_fauvisca`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Scoutalent`
--

CREATE TABLE IF NOT EXISTS `Scoutalent` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(200) NOT NULL,
  `Cognome` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Passwords` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Tipologia` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `Scoutalent`
--

INSERT INTO `Scoutalent` (`Id`, `Nome`, `Cognome`, `Email`, `Passwords`, `Tipologia`) VALUES
(1, 'Mario', 'Rossi', 'mario.rossi@gmail.com', 'rossi12345', 'Scout'),
(2, 'Igor', 'Miti', 'igor.miti@gmail.com', 'gormiti', 'Talento'),
(3, 'Davide', 'pittun', 'davide.pittun@gmail.com', 'abc123', 'Talent'),
(4, 'Simone', 'D''elia', 'delia.simone.studente@itispaleocapa.it', 'Ciao.2030', 'Talent'),
(5, 'Alfonso', 'Rossi', 'alfonso@rossi.com', 'alfonsorossi123', 'Scout');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
