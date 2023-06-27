-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Mar-2023 às 16:26
-- Versão do servidor: 5.7.36
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
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `aniversario` date NOT NULL,
  `idade` int(11) NOT NULL,
  `foto` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `senha`, `funcao`, `bio`, `descricao`, `aniversario`, `idade`, `foto`) VALUES
(2, 'Felipe Neto', 'NaoFazSentido@gmail.com', '172be8d3e19e805c6afb130056fe6e1b', 'Programador', 'Programado, Youtuber, e arqui-inimigo do Nando Moura', 'Meu nome é Felipe Neto. Tenho 33 anos. Minha casa fica na parte nobre de São Paulo, e eu não sou casado. Eu trabalho como youtuber. Eu não fumo, mas ocasionalmente bebo. Estou na cama às 23 horas e me certifico de ter oito horas de sono, não importa o que aconteça. Depois de tomar um copo de leite morno e fazer cerca de 20 minutos de alongamentos antes de ir para a cama, geralmente  durmo até de manhã. Assim como um bebê, eu acordo sem nenhum cansaço ou estresse pela manhã. Eu cuido para não me incomodar com inimigos, isso me faria perder o sono à noite. É assim que eu lido com a sociedade e sei que é isso que me traz felicidade. Embora, se eu fosse lutar, não perderia para ninguém.', '1988-01-21', 35, '../img/3c81cec5fba01e7f975f7599bd65a28a.jpg'),
(3, 'Bruno Aiub', 'PontePonte@gmail.com', '861e38b07187d4802cc92a74e6567f69', 'Engenheiro de Software', 'Programador, engenheiro de software, youtuber, influencer e defensor número 1 da liberdade de expressão', 'Em meus muitos anos programando, já criei diversos programas que permitiram meus clientes serem livres, mas nenhum deles alcançou a verdadeira liberdade, a de expressão.', '1990-08-17', 32, 'img/37992afb2b3aebdeb56f4bd2e0e4413b.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `pais`, `estado`, `cidade`, `rua`, `id_cliente`) VALUES
(1, 'Brasil', 'São Paulo', 'São Paulo', 'Silvio Barbini', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

DROP TABLE IF EXISTS `profissional`;
CREATE TABLE IF NOT EXISTS `profissional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristica` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `experiencia` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `objetivo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `habilidade` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
