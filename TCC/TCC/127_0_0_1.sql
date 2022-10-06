-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Out-2022 às 23:18
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_condmind`
--
CREATE DATABASE IF NOT EXISTS `bd_condmind` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_condmind`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_morador`
--

DROP TABLE IF EXISTS `tb_morador`;
CREATE TABLE IF NOT EXISTS `tb_morador` (
  `cod_morador` int NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nome_completo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int NOT NULL,
  `rg` int NOT NULL,
  `dtnascimento` date NOT NULL,
  `celular` int NOT NULL,
  `estadocivil` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bloco` int NOT NULL,
  `numero_apartamento` int NOT NULL,
  PRIMARY KEY (`primeiro_nome`,`cod_morador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_morador`
--

INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `cpf`, `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`) VALUES
(1, 'Alisson', 'alisson almeida', 1111111, 1111111, '0000-00-00', 1122335544, 'Solteiro(a)', 12, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_salao`
--

DROP TABLE IF EXISTS `tb_salao`;
CREATE TABLE IF NOT EXISTS `tb_salao` (
  `cod_salao` int NOT NULL,
  `data_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `cod_morador` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `cod_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ultimo_login` date NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga_garagem`
--

DROP TABLE IF EXISTS `tb_vaga_garagem`;
CREATE TABLE IF NOT EXISTS `tb_vaga_garagem` (
  `cod_vaga` int NOT NULL AUTO_INCREMENT,
  `num_vaga` int NOT NULL,
  `tipo_vaga` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ocupada` tinyint(1) NOT NULL,
  `placa_veiculo` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cod_morador` int NOT NULL,
  PRIMARY KEY (`cod_vaga`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo_morador`
--

DROP TABLE IF EXISTS `tb_veiculo_morador`;
CREATE TABLE IF NOT EXISTS `tb_veiculo_morador` (
  `placa_veiculo` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ano` date NOT NULL,
  `cor` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`placa_veiculo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
