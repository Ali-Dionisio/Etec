-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Dez-2022 às 03:00
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
-- Banco de dados: `bd_livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livraria`
--

DROP TABLE IF EXISTS `tb_livraria`;
CREATE TABLE IF NOT EXISTS `tb_livraria` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_adm` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nome_Livro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Autor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Preco` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_livraria`
--

INSERT INTO `tb_livraria` (`Codigo`, `Nome_adm`, `Email`, `Senha`, `Nome_Livro`, `Autor`, `Preco`, `foto`) VALUES
(14, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Tudo é Rio', 'Carla Madeira', 'R$59,90', 'imgs/6aa135f1a5bfb7910a57b1fd684c93c5.jpg'),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'A hipótese do amor', 'Ali Hazelwood', 'R$54,90', 'imgs/1145eaeb8137f758eb4005067b628d6c.jpg'),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'É assim que acaba', 'Collen Hoover', 'R$49,90', 'imgs/55e9c939410442a5cb7a7b18c834d40a.jpg'),
(17, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Outros 365 dias', 'Blanka Lipinska', 'R$49,90', 'imgs/4111cb68e181c00d5b6b268907f087a1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livraria_adm`
--

DROP TABLE IF EXISTS `tb_livraria_adm`;
CREATE TABLE IF NOT EXISTS `tb_livraria_adm` (
  `nome_adm` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_livraria_adm`
--

INSERT INTO `tb_livraria_adm` (`nome_adm`, `email`, `senha`, `codigo`) VALUES
('', 'eric', '202cb962ac59075b964b', 8),
('', 'eric', '202cb962ac59075b964b07152d234b70', 9),
('', 'joao', '202cb962ac59075b964b07152d234b70', 10),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 11),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 12),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 13),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 14),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 15),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 16),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 17),
('', 'zayn', '68053af2923e00204c3ca7c6a3150cf7', 18),
('joao', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70', 19),
('Eric', 'eric@gmail.com', '202cb962ac59075b964b07152d234b70', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
