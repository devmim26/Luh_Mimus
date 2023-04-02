-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Abr-2023 às 01:21
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `luh_mimus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id_anuncios` int NOT NULL AUTO_INCREMENT,
  `id_categorias` int DEFAULT NULL,
  `id_estoque` int DEFAULT NULL,
  `nome_anuncios` varchar(200) NOT NULL,
  `valor_anuncios` double NOT NULL,
  `desc_anuncios` text NOT NULL,
  `img_anuncios` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anuncios`),
  KEY `id_categorias` (`id_categorias`),
  KEY `id_estoque` (`id_estoque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int NOT NULL AUTO_INCREMENT,
  `nome_categorias` varchar(220) NOT NULL,
  `desc_categorias` text NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

DROP TABLE IF EXISTS `despesas`;
CREATE TABLE IF NOT EXISTS `despesas` (
  `id_despesas` int NOT NULL AUTO_INCREMENT,
  `nome_despesas` varchar(220) NOT NULL,
  `valor_despesas` double NOT NULL,
  `total_despesas` double NOT NULL,
  PRIMARY KEY (`id_despesas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id_despesas`, `nome_despesas`, `valor_despesas`, `total_despesas`) VALUES
(11, 'Gás', 100.23, 0),
(12, 'Água', 30.9, 0),
(13, 'Luz', 300.21, 0),
(14, 'internet', 40.32, 0),
(15, 'pagamento de funcionários', 47, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id_estoque` int NOT NULL AUTO_INCREMENT,
  `medidas` varchar(220) DEFAULT NULL,
  `nome_estoque` varchar(250) NOT NULL,
  `qtd_estoque` int NOT NULL,
  `valor_embalagem` double NOT NULL,
  `qtd_embalagem` bigint NOT NULL,
  `valor_estoque` double NOT NULL,
  PRIMARY KEY (`id_estoque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `dados_event` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `dados_event`) VALUES
(37, 'Ocupado', '#FF0000', '2023-01-06 00:00:00', '2023-01-07 00:00:00', ''),
(38, 'Ocupado', '#FF0000', '2023-01-04 00:00:00', '2023-01-05 00:00:00', ''),
(51, 'Personalizado', '#006400', '2023-01-07 00:00:00', '2023-01-08 00:00:00', ''),
(53, 'Personalizado', '#006400', '2023-01-12 00:00:00', '2023-01-13 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `investimento`
--

DROP TABLE IF EXISTS `investimento`;
CREATE TABLE IF NOT EXISTS `investimento` (
  `id_inves` int NOT NULL AUTO_INCREMENT,
  `investimento_valor` double NOT NULL,
  PRIMARY KEY (`id_inves`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `investimento`
--

INSERT INTO `investimento` (`id_inves`, `investimento_valor`) VALUES
(1, 2134.46),
(2, 1246.46);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lucro_bruto`
--

DROP TABLE IF EXISTS `lucro_bruto`;
CREATE TABLE IF NOT EXISTS `lucro_bruto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_lucro` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lucro_bruto`
--

INSERT INTO `lucro_bruto` (`id`, `tipo_lucro`, `valor`) VALUES
(5, 'Pedido', 25.9),
(6, 'Encomenda', 36.9),
(7, 'Encomenda', 23.34),
(8, 'Pedido', 27.37),
(9, 'Pedido', 400.32),
(10, 'Encomenda', 27.9),
(11, 'Pedido', 34.37),
(12, 'Encomenda', 3000.32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_cdst_software`
--

DROP TABLE IF EXISTS `user_cdst_software`;
CREATE TABLE IF NOT EXISTS `user_cdst_software` (
  `cdst_sftw_id` int NOT NULL AUTO_INCREMENT,
  `cdst_sftw_email` varchar(220) NOT NULL,
  `cdst_sftw_senha` varchar(50) NOT NULL,
  `cdst_sftw_nome` varchar(220) NOT NULL,
  `cdst_sftw_user` varchar(220) NOT NULL,
  `cdst_sftw_cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`cdst_sftw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_cdst_software`
--

INSERT INTO `user_cdst_software` (`cdst_sftw_id`, `cdst_sftw_email`, `cdst_sftw_senha`, `cdst_sftw_nome`, `cdst_sftw_user`, `cdst_sftw_cargo`) VALUES
(1, 'tbbrbelorodrigues@gmail.com', 'tha12032005', 'Thawan Bruno', 'Neutron', 'Chefe');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anuncios_ibfk_2` FOREIGN KEY (`id_estoque`) REFERENCES `estoque` (`id_estoque`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
