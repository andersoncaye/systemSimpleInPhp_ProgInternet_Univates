-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Jun-2019 às 01:11
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cb_factory`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `check_doc`
--

DROP TABLE IF EXISTS `check_doc`;
CREATE TABLE IF NOT EXISTS `check_doc` (
  `idCheck` int(11) NOT NULL AUTO_INCREMENT,
  `numberBank` varchar(10) NOT NULL,
  `numberAgency` varchar(20) NOT NULL,
  `numberAccount` varchar(50) NOT NULL,
  `numberCheck` varchar(10) NOT NULL,
  `nameHolder` varchar(100) NOT NULL,
  `docCpfOrCnpj` varchar(20) NOT NULL,
  `idPouch_Check` int(11) NOT NULL,
  PRIMARY KEY (`idCheck`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela ` client`
--

DROP TABLE IF EXISTS ` client`;
CREATE TABLE IF NOT EXISTS ` client` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pouch_check`
--

DROP TABLE IF EXISTS `pouch_check`;
CREATE TABLE IF NOT EXISTS `pouch_check` (
  `idPouch` int(11) NOT NULL AUTO_INCREMENT,
  `idClient_Pousch` int(11) NOT NULL,
  `date` varchar(12) NOT NULL,
  `reference` text NOT NULL,
  PRIMARY KEY (`idPouch`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin'),
(2, 'a@a.com', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
