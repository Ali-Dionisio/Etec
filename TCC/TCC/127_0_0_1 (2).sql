-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Nov-2022 às 14:20
-- Versão do servidor: 5.7.36
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
  `cod_morador` int(11) NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nome_completo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dtnascimento` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bloco` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `numero_apartamento` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_morador`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_morador`
--

INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `cpf`, `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`, `foto`) VALUES
(1, 'alisson', 'alisson almeida', '44291300867', '111', '1999-01-20', '992325271', 'Solteiro(a)', '5', '1', '../imgs/eeea5825b912b487cb8d75e1f5baa040.jpg'),
(3, 'Eric', 'Eric Sanderson', '111', '0000000', '2000-11-10', '985858585', 'Solteiro(a)', '5', '1', '../imgs/960afbdbab0bbcb758b442bd5bbcbed4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_salao`
--

DROP TABLE IF EXISTS `tb_salao`;
CREATE TABLE IF NOT EXISTS `tb_salao` (
  `cod_salao` int(11) NOT NULL,
  `data_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `cod_morador` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod_usuario`, `usuario`, `senha`, `funcao`) VALUES
(4, '44291300867', '21232f297a57a5a743894a0e4a801fc3', 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga_garagem`
--

DROP TABLE IF EXISTS `tb_vaga_garagem`;
CREATE TABLE IF NOT EXISTS `tb_vaga_garagem` (
  `cod_vaga` int(11) NOT NULL AUTO_INCREMENT,
  `num_vaga` int(11) NOT NULL,
  `tipo_vaga` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ocupada` tinyint(1) NOT NULL,
  `placa_veiculo` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `cod_morador` int(11) NOT NULL,
  PRIMARY KEY (`cod_vaga`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo_morador`
--

DROP TABLE IF EXISTS `tb_veiculo_morador`;
CREATE TABLE IF NOT EXISTS `tb_veiculo_morador` (
  `placa_veiculo` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ano` date NOT NULL,
  `cor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`placa_veiculo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
