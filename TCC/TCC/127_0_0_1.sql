-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jan-2023 às 08:17
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
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dtnascimento` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bloco` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `numero_apartamento` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_morador`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_morador`
--

INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `email`, `cpf`, `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`, `foto`, `funcao`) VALUES
(1, 'alisson', 'alisson almeida', 'alisson.a-work@outlook.com', '44291300867', '111', '1999-01-20', '992325271', 'Casado(a)', '6', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(22, 'Eric', 'Eric Sanderson', '', '1234', '11111', '2022-12-14', '11999995555', 'Solteiro(a)', '3', '12', '../imgs/14c837e9c88f9cf725e98282206992e5.jpg', 'Morador');

--
-- Acionadores `tb_morador`
--
DROP TRIGGER IF EXISTS `AlteraUsuario`;
DELIMITER $$
CREATE TRIGGER `AlteraUsuario` AFTER UPDATE ON `tb_morador` FOR EACH ROW UPDATE tb_usuarios
SET funcao = NEW.funcao
WHERE usuario = OLD.cpf
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `CriarUsuario`;
DELIMITER $$
CREATE TRIGGER `CriarUsuario` AFTER INSERT ON `tb_morador` FOR EACH ROW INSERT INTO tb_usuarios(usuario, primeiro_nome, senha, funcao)
VALUES(NEW.CPF, NEW.primeiro_nome, '21232f297a57a5a743894a0e4a801fc3', NEW.funcao)
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
  `cod_salao` int(11) NOT NULL,
  `data_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `cod_morador` int(11) NOT NULL,
  UNIQUE KEY `cod_morador` (`cod_morador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `primeiro_nome` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod_usuario`, `usuario`, `primeiro_nome`, `senha`, `funcao`) VALUES
(4, '44291300867', 'Alisson', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(15, '1234', 'Eric', '81dc9bdb52d04dc20036dbd8313ed055', 'Morador');

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
  PRIMARY KEY (`cod_vaga`),
  UNIQUE KEY `placa_veiculo_2` (`placa_veiculo`),
  KEY `placa_veiculo` (`placa_veiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `cod_morador` int(11) NOT NULL,
  PRIMARY KEY (`placa_veiculo`),
  UNIQUE KEY `cod_morador` (`cod_morador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_salao`
--
ALTER TABLE `tb_salao`
  ADD CONSTRAINT `tb_salao_ibfk_1` FOREIGN KEY (`cod_morador`) REFERENCES `tb_morador` (`cod_morador`);

--
-- Limitadores para a tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `FK_usuario_morador` FOREIGN KEY (`usuario`) REFERENCES `tb_morador` (`cpf`);

--
-- Limitadores para a tabela `tb_vaga_garagem`
--
ALTER TABLE `tb_vaga_garagem`
  ADD CONSTRAINT `tb_vaga_garagem_ibfk_1` FOREIGN KEY (`placa_veiculo`) REFERENCES `tb_veiculo_morador` (`placa_veiculo`);

--
-- Limitadores para a tabela `tb_veiculo_morador`
--
ALTER TABLE `tb_veiculo_morador`
  ADD CONSTRAINT `tb_veiculo_morador_ibfk_1` FOREIGN KEY (`cod_morador`) REFERENCES `tb_morador` (`cod_morador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
