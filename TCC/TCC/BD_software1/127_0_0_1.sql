-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Abr-2023 às 01:21
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
-- Banco de dados: `bd_condmind`
--
CREATE DATABASE IF NOT EXISTS `bd_condmind` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_condmind`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cor`
--

DROP TABLE IF EXISTS `tb_cor`;
CREATE TABLE IF NOT EXISTS `tb_cor` (
  `cod_cor` int NOT NULL AUTO_INCREMENT,
  `descricao_cor` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_cor`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cor`
--

INSERT INTO `tb_cor` (`cod_cor`, `descricao_cor`) VALUES
(1, 'Amarelo'),
(2, 'Vermelho'),
(3, 'Prata'),
(4, 'Preto'),
(5, 'Branco'),
(6, 'Rosa'),
(7, 'Azul'),
(8, 'Verde'),
(9, 'Laranja'),
(10, 'Violeta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fale_conosco`
--

DROP TABLE IF EXISTS `tb_fale_conosco`;
CREATE TABLE IF NOT EXISTS `tb_fale_conosco` (
  `cod_msg` int NOT NULL AUTO_INCREMENT,
  `via` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nome_completo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_fale_conosco`
--

INSERT INTO `tb_fale_conosco` (`cod_msg`, `via`, `nome_completo`, `email`, `celular`, `assunto`, `mensagem`) VALUES
(14, 'CondMind', 'teste', 'teste@teste', '5588585874', 'Contrato', 'testesetss'),
(13, 'Shannon', 'João', 'joaohenriquert@outlook.com', '11998898989', 'Softwares', 'teste'),
(8, '', 'Alisson', 'Alisson@etec.com', '1125641124', 'Dúvida', 'Q qui é?'),
(15, 'CondMind', 'a', 'a@gmail.com', '1', 'Dúvida', 'a'),
(12, 'Shannon', 'João', 'joaohenriquert@outlook.com', '11998898989', 'Softwares', 'teste'),
(16, 'Shannon', 'Alisson', 'Alisson@sss', '111111', 'Dúvida', 'teste2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcao`
--

DROP TABLE IF EXISTS `tb_funcao`;
CREATE TABLE IF NOT EXISTS `tb_funcao` (
  `cod_funcao` int NOT NULL AUTO_INCREMENT,
  `descricao_funcao` varchar(18) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_funcao`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_funcao`
--

INSERT INTO `tb_funcao` (`cod_funcao`, `descricao_funcao`) VALUES
(1, 'Administrador'),
(2, 'Morador'),
(3, 'Sindico'),
(4, 'Porteiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_morador`
--

DROP TABLE IF EXISTS `tb_morador`;
CREATE TABLE IF NOT EXISTS `tb_morador` (
  `cod_morador` int NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nome_completo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dtnascimento` date NOT NULL,
  `celular` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bloco` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numero_apartamento` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_morador`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_morador`
--

INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `email`, `cpf`, `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`, `foto`, `funcao`) VALUES
(1, 'alisson', 'alisson almeida', 'alisson.a-work@outlook.com', '44291300867', '111', '1999-01-20', '992325271', 'Casado(a)', '6', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(23, 'Gabriel', 'Gabriel Sena', '', '55182079840', '11111', '2023-03-14', '', 'Solteiro(a)', '2', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(24, 'João', 'João Henrique', '', '53189636842', '1111111', '0000-00-00', '', 'Solteiro(a)', '3', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(25, 'Eric', 'Eric Sanderson', '', '49098843867', '', '2023-03-14', '', '', '', '', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(26, 'kleber', 'Kleber Souza', 'teste@teste', '21215155423', '112223335', '1998-02-01', '', 'Solteiro(a)', '2', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Morador');

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
  `cod_salao` int NOT NULL AUTO_INCREMENT,
  `data_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `cod_morador` int NOT NULL,
  PRIMARY KEY (`cod_salao`),
  UNIQUE KEY `cod_morador` (`cod_morador`),
  KEY `cod_morador_2` (`cod_morador`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_salao`
--

INSERT INTO `tb_salao` (`cod_salao`, `data_reserva`, `hora_inicio`, `hora_fim`, `cod_morador`) VALUES
(4, '2023-03-31', '20:26:00', '21:22:00', 26),
(15, '2023-04-05', '21:30:00', '22:00:00', 1),
(18, '2023-07-30', '12:00:00', '23:00:00', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `cod_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `primeiro_nome` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod_usuario`, `usuario`, `primeiro_nome`, `senha`, `funcao`) VALUES
(4, '44291300867', 'Alisson', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(16, '55182079840', 'Gabriel', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(17, '53189636842', 'João', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(18, '49098843867', 'Eric', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(19, '21215155423', 'kleber', '21232f297a57a5a743894a0e4a801fc3', 'Morador');

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
  PRIMARY KEY (`cod_vaga`),
  UNIQUE KEY `placa_veiculo_2` (`placa_veiculo`),
  KEY `placa_veiculo` (`placa_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo_morador`
--

DROP TABLE IF EXISTS `tb_veiculo_morador`;
CREATE TABLE IF NOT EXISTS `tb_veiculo_morador` (
  `placa_veiculo` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo_veiculo` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ano` int NOT NULL,
  `cor` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cod_morador` int NOT NULL,
  PRIMARY KEY (`placa_veiculo`),
  UNIQUE KEY `cod_morador` (`cod_morador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_veiculo_morador`
--

INSERT INTO `tb_veiculo_morador` (`placa_veiculo`, `tipo_veiculo`, `modelo`, `ano`, `cor`, `cod_morador`) VALUES
('123asds', 'Carro', 'Onix', 2005, 'Preto', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

DROP TABLE IF EXISTS `vaga`;
CREATE TABLE IF NOT EXISTS `vaga` (
  `cod_vaga` int NOT NULL AUTO_INCREMENT,
  `tipo_vaga` varchar(18) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_vaga`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`cod_vaga`, `tipo_vaga`) VALUES
(1, 'Carro'),
(2, 'Moto'),
(3, 'Deficiente');

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
