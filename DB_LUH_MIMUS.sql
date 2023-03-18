-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para luh_mimus
CREATE DATABASE IF NOT EXISTS `luh_mimus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `luh_mimus`;

-- Copiando estrutura para tabela luh_mimus.anuncios
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id_anuncios` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorias` int(11) DEFAULT NULL,
  `id_estoque` int(11) DEFAULT NULL,
  `nome_anuncios` varchar(200) NOT NULL,
  `valor_anuncios` double NOT NULL,
  `desc_anuncios` text NOT NULL,
  `img_anuncios` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anuncios`),
  KEY `id_categorias` (`id_categorias`),
  KEY `id_estoque` (`id_estoque`),
  CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `anuncios_ibfk_2` FOREIGN KEY (`id_estoque`) REFERENCES `estoque` (`id_estoque`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.anuncios: ~0 rows (aproximadamente)
DELETE FROM `anuncios`;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.carrinho
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id_carrinho` int(11) NOT NULL AUTO_INCREMENT,
  `id_UserCdstSite` int(11) DEFAULT NULL,
  `created_carrinho` datetime NOT NULL,
  PRIMARY KEY (`id_carrinho`),
  KEY `id_UserCdstSite` (`id_UserCdstSite`),
  CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_UserCdstSite`) REFERENCES `user_cdst_site` (`id_UserCdstSite`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.carrinho: ~0 rows (aproximadamente)
DELETE FROM `carrinho`;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categorias` varchar(220) NOT NULL,
  `desc_categorias` text NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.categorias: ~0 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.despesas
CREATE TABLE IF NOT EXISTS `despesas` (
  `id_despesas` int(11) NOT NULL AUTO_INCREMENT,
  `nome_despesas` varchar(220) NOT NULL,
  `valor_despesas` double NOT NULL,
  `total_despesas` double NOT NULL,
  PRIMARY KEY (`id_despesas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.despesas: ~0 rows (aproximadamente)
DELETE FROM `despesas`;
/*!40000 ALTER TABLE `despesas` DISABLE KEYS */;
/*!40000 ALTER TABLE `despesas` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.encomenda
CREATE TABLE IF NOT EXISTS `encomenda` (
  `id_encomenda` int(11) NOT NULL AUTO_INCREMENT,
  `id_anuncios` int(11) DEFAULT NULL,
  `id_eventos` int(11) DEFAULT NULL,
  `qtd_encomenda` int(11) NOT NULL,
  `massa_encomendas` varchar(220) NOT NULL,
  `recheio_encomenda` varchar(220) NOT NULL,
  `tema_encomenda` varchar(220) NOT NULL,
  PRIMARY KEY (`id_encomenda`),
  KEY `id_anuncios` (`id_anuncios`),
  KEY `id_eventos` (`id_eventos`),
  CONSTRAINT `encomenda_ibfk_1` FOREIGN KEY (`id_anuncios`) REFERENCES `anuncios` (`id_anuncios`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `encomenda_ibfk_2` FOREIGN KEY (`id_eventos`) REFERENCES `eventos_calendario` (`id_eventos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.encomenda: ~0 rows (aproximadamente)
DELETE FROM `encomenda`;
/*!40000 ALTER TABLE `encomenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `encomenda` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `id_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `medidas` varchar(220) DEFAULT NULL,
  `nome_estoque` varchar(250) NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `valor_embalagem` double NOT NULL,
  `qtd_embalagem` bigint(20) NOT NULL,
  `valor_estoque` double NOT NULL,
  PRIMARY KEY (`id_estoque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.estoque: ~0 rows (aproximadamente)
DELETE FROM `estoque`;
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.eventos_calendario
CREATE TABLE IF NOT EXISTS `eventos_calendario` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_eventos` varchar(220) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.eventos_calendario: ~0 rows (aproximadamente)
DELETE FROM `eventos_calendario`;
/*!40000 ALTER TABLE `eventos_calendario` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_calendario` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.financas
CREATE TABLE IF NOT EXISTS `financas` (
  `id_financas` int(11) NOT NULL AUTO_INCREMENT,
  `id_produtoCarrinho` int(11) DEFAULT NULL,
  `id_estoque` int(11) DEFAULT NULL,
  `id_pg` int(11) DEFAULT NULL,
  `id_anuncios` int(11) DEFAULT NULL,
  `id_encomenda` int(11) DEFAULT NULL,
  `id_despesas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_financas`),
  KEY `id_produtoCarrinho` (`id_produtoCarrinho`),
  KEY `id_despesas` (`id_despesas`),
  KEY `id_estoque` (`id_estoque`),
  KEY `id_pg` (`id_pg`),
  KEY `id_anuncios` (`id_anuncios`),
  KEY `id_encomenda` (`id_encomenda`),
  CONSTRAINT `financas_ibfk_1` FOREIGN KEY (`id_produtoCarrinho`) REFERENCES `produto_carrinho` (`id_produtoCarrinho`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `financas_ibfk_2` FOREIGN KEY (`id_despesas`) REFERENCES `despesas` (`id_despesas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `financas_ibfk_3` FOREIGN KEY (`id_estoque`) REFERENCES `estoque` (`id_estoque`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `financas_ibfk_4` FOREIGN KEY (`id_pg`) REFERENCES `pagamento` (`id_pg`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `financas_ibfk_5` FOREIGN KEY (`id_anuncios`) REFERENCES `anuncios` (`id_anuncios`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `financas_ibfk_6` FOREIGN KEY (`id_encomenda`) REFERENCES `encomenda` (`id_encomenda`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.financas: ~0 rows (aproximadamente)
DELETE FROM `financas`;
/*!40000 ALTER TABLE `financas` DISABLE KEYS */;
/*!40000 ALTER TABLE `financas` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.pagamento
CREATE TABLE IF NOT EXISTS `pagamento` (
  `id_pg` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_pg` int(11) DEFAULT NULL,
  `cdg_trans` varchar(220) DEFAULT NULL,
  `status_pg` varchar(220) DEFAULT NULL,
  `num_card` varchar(220) DEFAULT NULL,
  `link_boleto` text,
  `link_pix` text,
  `id_carrinho` int(11) DEFAULT NULL,
  `id_produtoCarrinho` int(11) DEFAULT NULL,
  `created_pg` datetime NOT NULL,
  `modified_pg` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pg`),
  KEY `id_produtoCarrinho` (`id_produtoCarrinho`),
  KEY `id_carrinho` (`id_carrinho`),
  CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`id_produtoCarrinho`) REFERENCES `produto_carrinho` (`id_produtoCarrinho`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pagamento_ibfk_2` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id_carrinho`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.pagamento: ~0 rows (aproximadamente)
DELETE FROM `pagamento`;
/*!40000 ALTER TABLE `pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagamento` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.produto_carrinho
CREATE TABLE IF NOT EXISTS `produto_carrinho` (
  `id_produtoCarrinho` int(11) NOT NULL AUTO_INCREMENT,
  `id_encomenda` int(11) DEFAULT NULL,
  `id_anuncios` int(11) DEFAULT NULL,
  `id_carrinho` int(11) DEFAULT NULL,
  `valor_venda` double NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_produtoCarrinho`),
  KEY `id_carrinho` (`id_carrinho`),
  KEY `id_anuncios` (`id_anuncios`),
  KEY `id_encomenda` (`id_encomenda`),
  CONSTRAINT `produto_carrinho_ibfk_1` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id_carrinho`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `produto_carrinho_ibfk_2` FOREIGN KEY (`id_anuncios`) REFERENCES `anuncios` (`id_anuncios`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `produto_carrinho_ibfk_3` FOREIGN KEY (`id_encomenda`) REFERENCES `encomenda` (`id_encomenda`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.produto_carrinho: ~0 rows (aproximadamente)
DELETE FROM `produto_carrinho`;
/*!40000 ALTER TABLE `produto_carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto_carrinho` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.user_cdst_site
CREATE TABLE IF NOT EXISTS `user_cdst_site` (
  `id_UserCdstSite` int(11) NOT NULL AUTO_INCREMENT,
  `nome_UserCdstSite` varchar(220) NOT NULL,
  `email_UserCdstSite` varchar(220) NOT NULL,
  `senha_UserCdstSite` varchar(50) NOT NULL,
  `celular_UserCdstSite` varchar(50) NOT NULL,
  `cpf_UserCdstSite` varchar(50) NOT NULL,
  `dtn_UserCdstSite` date NOT NULL,
  `avatar_UserCdstSite` varchar(50) NOT NULL,
  `cep_UserCdstSite` varchar(50) NOT NULL,
  `rua_UserCdstSite` varchar(140) NOT NULL,
  `numero_UserCdstSite` smallint(6) NOT NULL,
  `comeplemento_UserCdstSite` varchar(50) NOT NULL,
  `bairro_UserCdstSite` varchar(50) NOT NULL,
  `cidade_UserCdstSite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_UserCdstSite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.user_cdst_site: ~0 rows (aproximadamente)
DELETE FROM `user_cdst_site`;
/*!40000 ALTER TABLE `user_cdst_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_cdst_site` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.user_cdst_software
CREATE TABLE IF NOT EXISTS `user_cdst_software` (
  `cdst_sftw_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdst_sftw_email` varchar(220) NOT NULL,
  `cdst_sftw_senha` varchar(50) NOT NULL,
  `cdst_sftw_nome` varchar(220) NOT NULL,
  `cdst_sftw_user` varchar(220) NOT NULL,
  `cdst_sftw_cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`cdst_sftw_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.user_cdst_software: ~0 rows (aproximadamente)
DELETE FROM `user_cdst_software`;
/*!40000 ALTER TABLE `user_cdst_software` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_cdst_software` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
anuncios