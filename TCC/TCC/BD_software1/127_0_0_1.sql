-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jun-2023 às 23:16
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
  `via` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nome_completo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cod_morador` int NOT NULL,
  PRIMARY KEY (`cod_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_fale_conosco`
--

INSERT INTO `tb_fale_conosco` (`cod_msg`, `via`, `nome_completo`, `email`, `celular`, `assunto`, `mensagem`, `cod_morador`) VALUES
(14, 'CondMind', 'teste', 'teste@teste', '5588585874', 'Contrato', 'testesetss', 25),
(13, 'Shannon', 'João', 'joaohenriquert@outlook.com', '11998898989', 'Softwares', 'teste', 24),
(8, '', 'Alisson', 'Alisson@etec.com', '1125641124', 'Dúvida', 'Q qui é?', 1),
(15, 'CondMind', 'a', 'a@gmail.com', '1', 'Dúvida', 'a', 1),
(12, 'Shannon', 'João', 'joaohenriquert@outlook.com', '11998898989', 'Softwares', 'teste', 24),
(19, 'CondMind', 'jao jao', 'joao@gmail.com', '(11) 96467-3745', 'Contrato', 'Como funciona o contrato de voces?', 24),
(20, 'CondMind', 'joao', 'joao@gmail.copm', '(22) 22', 'Dúvida', '222', 24),
(18, 'Shannon', '', '', '(32) 23233-2322', 'Selecione uma opção', '', 25),
(21, 'CondMind', '', '', '', 'Selecione uma opção', '', 25),
(22, 'CondMind', 'joao', 'teste@gmail.com', '(11) 40028-9200', 'Softwares', 'testando banco de dados\r\n', 24),
(23, 'Shannon', 'teste banco', 'teste@teste.com', '(11) 20053-3333', 'Contrato', 'Teste de banco de dados', 25),
(24, 'Shannon', '', '', '(11) 99232-5271', 'Selecione uma opção', '', 25),
(25, 'Shannon', 'bel ele', 'alisson.a-work@outlook.com', '(11) 99232-5271', 'Dúvida', 'bhbbbbbibhibihibhbih', 1);

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
-- Estrutura da tabela `tb_hist_salao`
--

DROP TABLE IF EXISTS `tb_hist_salao`;
CREATE TABLE IF NOT EXISTS `tb_hist_salao` (
  `num_hist_salao` int NOT NULL AUTO_INCREMENT,
  `cod_salao` int NOT NULL DEFAULT '0',
  `data_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `cod_morador` int NOT NULL,
  PRIMARY KEY (`num_hist_salao`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_hist_salao`
--

INSERT INTO `tb_hist_salao` (`num_hist_salao`, `cod_salao`, `data_reserva`, `hora_inicio`, `hora_fim`, `cod_morador`) VALUES
(1, 15, '2023-04-19', '10:30:00', '13:50:00', 1),
(2, 18, '2023-07-30', '12:00:00', '23:00:00', 24),
(3, 19, '2023-04-21', '09:45:00', '10:45:00', 35),
(5, 21, '2023-04-20', '13:39:54', '14:38:54', 23),
(6, 22, '2023-04-20', '00:00:00', '00:00:00', 1),
(7, 23, '2023-04-21', '20:18:00', '20:20:00', 1),
(8, 25, '2024-01-20', '00:00:00', '00:00:00', 1),
(9, 26, '2023-04-19', '00:00:00', '00:00:00', 1),
(10, 27, '2023-04-12', '00:00:00', '00:00:00', 1),
(11, 19, '2023-05-12', '09:19:00', '09:19:00', 1),
(12, 20, '2023-05-12', '09:32:00', '09:35:00', 1),
(13, 21, '2023-05-12', '10:24:00', '10:25:00', 1),
(14, 22, '2023-05-12', '10:30:00', '10:32:00', 1),
(15, 23, '2023-05-12', '10:27:00', '10:29:00', 1),
(16, 24, '2023-05-12', '10:35:00', '10:36:00', 1),
(17, 25, '2023-05-13', '10:22:00', '11:22:00', 1),
(18, 27, '2023-05-13', '10:30:00', '11:30:00', 1),
(19, 29, '2023-05-25', '08:30:00', '10:45:00', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_morador`
--

INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `email`, `cpf`, `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`, `foto`, `funcao`) VALUES
(1, 'alisson', 'alisson almeida', 'alisson.a-work@outlook.com', '44291300867', '111', '1999-01-20', '(99) 23252-71', 'Casado(a)', '6', '1 ', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(23, 'Gabriel', 'Gabriel Sena', '', '55182079840', '11111', '2023-03-14', '', 'Solteiro(a)', '2', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(24, 'João', 'João Henrique', '', '53189636842', '1111111', '0000-00-00', '', 'Solteiro(a)', '3', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(25, 'Eric', 'Eric Sanderson', '', '49098843867', '', '2023-03-14', '', '', '', '', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Administrador'),
(26, 'kleber', 'Kleber Souza', 'teste@teste', '21215155423', '112223335', '1998-02-01', '', 'Solteiro(a)', '2', '1', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Morador'),
(35, 'Gustavo', 'Gustavo Guilherme', 'alo@ai.com', '11811100000', '11', '2012-12-11', '1199999999', 'Solteiro(a)', '2', '2', '../imgs/1ac5fbea12c9dc646435a69daa443270.jpg', 'Morador'),
(36, 'Clovis', 'Clovis Filho', 'a@aa', '80503856045', '1', '1985-01-02', '(1', 'Solteiro(a)', '01', '02', '../imgs/888fcd61aa0cc8a21a25705296de7d6f.jpg', 'Morador');

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
(18, '2023-07-30', '12:00:00', '23:00:00', 24);

--
-- Acionadores `tb_salao`
--
DROP TRIGGER IF EXISTS `AtualizaHistoricoSalao`;
DELIMITER $$
CREATE TRIGGER `AtualizaHistoricoSalao` AFTER UPDATE ON `tb_salao` FOR EACH ROW UPDATE tb_hist_salao SET data_reserva = NEW.data_reserva, hora_inicio = NEW.hora_inicio, hora_fim = NEW.hora_fim
where cod_salao = OLD.cod_salao
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `alimetarHistoricoSalao`;
DELIMITER $$
CREATE TRIGGER `alimetarHistoricoSalao` AFTER INSERT ON `tb_salao` FOR EACH ROW INSERT INTO tb_hist_salao (cod_salao, data_reserva, hora_inicio, hora_fim, cod_morador) VALUES (NEW.cod_salao, NEW.data_reserva, NEW.hora_inicio, NEW.hora_fim, NEW.cod_morador)
$$
DELIMITER ;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod_usuario`, `usuario`, `primeiro_nome`, `senha`, `funcao`) VALUES
(4, '44291300867', 'Alisson', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(16, '55182079840', 'Gabriel', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(17, '53189636842', 'João', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(18, '49098843867', 'Eric', '21232f297a57a5a743894a0e4a801fc3', 'Administrador'),
(19, '21215155423', 'kleber', '21232f297a57a5a743894a0e4a801fc3', 'Morador'),
(22, '11811100000', 'Gustavo', '21232f297a57a5a743894a0e4a801fc3', 'Morador'),
(23, '80503856045', 'Clovis', '21232f297a57a5a743894a0e4a801fc3', 'Morador');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_vaga_garagem`
--

INSERT INTO `tb_vaga_garagem` (`cod_vaga`, `num_vaga`, `tipo_vaga`, `ocupada`, `placa_veiculo`) VALUES
(25, 1, 'Carro', 4, '123asds'),
(26, 3, 'Carro', 19, '789jhkj'),
(27, 4, 'Carro', 22, '456asdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo`
--

DROP TABLE IF EXISTS `tb_veiculo`;
CREATE TABLE IF NOT EXISTS `tb_veiculo` (
  `cod_veiculo` int NOT NULL AUTO_INCREMENT,
  `modelo_veiculo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_veiculo`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_veiculo`
--

INSERT INTO `tb_veiculo` (`cod_veiculo`, `modelo_veiculo`) VALUES
(1, 'Chevrolet Onix'),
(2, 'Fiat Strada'),
(3, 'Volkswagen Gol'),
(4, 'Hyundai HB20'),
(5, 'Fiat Argo'),
(6, 'Jeep Renegade'),
(7, 'Chevrolet Tracker'),
(8, 'Toyota Corolla'),
(9, 'Fiat Toro'),
(10, 'Volkswagen Polo'),
(11, 'Toyota Hilux'),
(12, 'Jeep Compass');

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
('123asds', 'Carro', 'Onix', 2005, 'Preto', 1),
('456asdf', 'Carro', 'Onix', 2009, 'Rosa', 35),
('789jhkj', 'Carro', 'Volkswagen', 2007, 'Violeta', 26);

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
