-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2023 às 20:42
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adotapet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE IF NOT EXISTS `animais` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` varchar(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `porte` varchar(50) NOT NULL,
  `comportamento` varchar(100) NOT NULL,
  `sobre_pet` varchar(500) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `id_ong` int(11) DEFAULT NULL,
  `id_protetor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_animal`),
  KEY `id_ong` (`id_ong`),
  KEY `id_protetor` (`id_protetor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs`
--

CREATE TABLE IF NOT EXISTS `ongs` (
  `id_ong` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cnpj` varchar(55) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  `endereco` varchar(250) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ong`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `protetores`
--

CREATE TABLE IF NOT EXISTS `protetores` (
  `id_protetor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(55) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_protetor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `animais_ibfk_1` FOREIGN KEY (`id_ong`) REFERENCES `ongs` (`id_ong`),
  ADD CONSTRAINT `animais_ibfk_2` FOREIGN KEY (`id_protetor`) REFERENCES `protetores` (`id_protetor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
