-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Fev-2023 às 20:31
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ender`
--
CREATE DATABASE IF NOT EXISTS `ender` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ender`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_cliente`
--

DROP TABLE IF EXISTS `tab_cliente`;
CREATE TABLE IF NOT EXISTS `tab_cliente` (
  `cod_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `aniver` date NOT NULL,
  `idade` int NOT NULL,
  `foto` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `caract` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `exper` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `trabalho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `objetivo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `habilidade` int NOT NULL,
  `curriculo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `portfolio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `port_capa` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
