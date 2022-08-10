-- phpMyAdmin SQL Dump
-- version 2.6.2-pl1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Dez 17, 2008 as 08:41 PM
-- Versão do Servidor: 5.0.22
-- Versão do PHP: 4.3.9
-- 
-- Banco de Dados: `cadastro`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `usuario`
-- 

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cadastrar usuario' AUTO_INCREMENT=3 ;

-- 
-- Extraindo dados da tabela `usuario`
-- 

