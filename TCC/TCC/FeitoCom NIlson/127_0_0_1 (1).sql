-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Nov-2022 às 01:18
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
  `cpf` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dtnascimento` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bloco` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numero_apartamento` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_morador`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_morador`
--

INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `cpf`, `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`, `foto`) VALUES
(1, 'alisson', 'alisson almeida', '44291300867', '111', '1999-01-20', '992325271', 'Solteiro(a)', '5', '1', '../imgs/eeea5825b912b487cb8d75e1f5baa040.jpg'),
(11, 'Joao', 'Joao Henrique', '11122233344', '123456', '22112011', '912121212', 'Solteiro', '1', '1', '');

--
-- Acionadores `tb_morador`
--
DROP TRIGGER IF EXISTS `CriarUsuario`;
DELIMITER $$
CREATE TRIGGER `CriarUsuario` AFTER INSERT ON `tb_morador` FOR EACH ROW INSERT INTO tb_usuarios(usuario, primeiro_nome, senha, funcao)
VALUES(NEW.CPF, NEW.primeiro_nome, 123, 'morador')
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `ExcluirUsuario`;
DELIMITER $$
CREATE TRIGGER `ExcluirUsuario` AFTER DELETE ON `tb_morador` FOR EACH ROW DELETE FROM tb_usuarios 
WHERE usuario = OLD.cpf
$$
DELIMITER ;

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
  `primeiro_nome` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod_usuario`, `usuario`, `primeiro_nome`, `senha`, `funcao`) VALUES
(4, '44291300867', 'Alisson', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(8, '11122233344', 'Joao', '123', 'morador');

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

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `FK_usuario_morador` FOREIGN KEY (`usuario`) REFERENCES `tb_morador` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
