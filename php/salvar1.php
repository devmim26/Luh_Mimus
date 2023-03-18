<?php
include 'conn_banco.php';

$nome = $_POST['nome'];
$numero = $_POST['numero'];
$massa = $_POST['massa'];
$tema = $_POST['tema'];
$peso = $_POST['peso'];

$sql->query("INSERT INTO user_prdt_site(nome, numero, massa, quantidade, tema) VALUES ('$nome','$numero','$massa','$peso','$tema')");
//banco de dados

/*-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Fev-2023 às 23:11
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
*/

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*
--
-- Banco de dados: `luh_mimus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_prdt_site`
--

DROP TABLE IF EXISTS `user_prdt_site`;
CREATE TABLE IF NOT EXISTS `user_prdt_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(140) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `massa` varchar(140) NOT NULL,
  `quantidade` varchar(140) NOT NULL,
  `tema` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_prdt_site`
--

INSERT INTO `user_prdt_site` (`id`, `nome`, `numero`, `massa`, `quantidade`, `tema`) VALUES
(1, 'thawan', '123', 'weqwe', '12', 'asassdvasdvdsadasv'),
(3, 'Thawan Bruno', '(81)99286-6224', 'Morango', '3', 'fdsojjisdjsdidfjiasijojdfsdsd');
COMMIT;
*/
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


