-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 27-Mar-2015 às 01:37
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE IF NOT EXISTS `livro` (
  `id_livro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_livro` varchar(100) NOT NULL,
  `autor_livro` varchar(50) NOT NULL,
  `editora_livro` varchar(20) NOT NULL,
  `ano_livro` int(11) NOT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo_livro`, `autor_livro`, `editora_livro`, `ano_livro`) VALUES
(1, 'Desenvolvimento WEB', 'Tanenbaum', 'Atlanta', 2011);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
