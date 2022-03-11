-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2022 alle 11:53
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
-- Struttura della tabella `InformaticaES`
--

CREATE TABLE IF NOT EXISTS `InformaticaES` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `User` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=1 ;

--
-- Dump dei dati per la tabella `InformaticaES`
--

INSERT INTO `InformaticaES` (`Id`, `User`, `Password`, `Email`) VALUES
(1, 'Fausto', 'fausto12345', 'viscardi.fausto.studente@itispalocapa.it');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
