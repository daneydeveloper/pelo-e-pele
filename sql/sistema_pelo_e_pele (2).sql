-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Set-2018 às 19:14
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_pelo_e_pele`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `PRO_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_Codigo_Categoria` int(11) DEFAULT NULL,
  `PRO_Nome` varchar(150) DEFAULT NULL,
  `PRO_Descricao_Curta` longtext,
  `PRO_Descricao_Completa` longtext,
  PRIMARY KEY (`PRO_Codigo`),
  KEY `FK_PRO_Codigo_Categoria` (`PRO_Codigo_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`PRO_Codigo`, `PRO_Codigo_Categoria`, `PRO_Nome`, `PRO_Descricao_Curta`, `PRO_Descricao_Completa`) VALUES
(41, 38, 'Gel Moios', 'dasdsad', 'dasdsaas'),
(42, 30, 'teste', 'dsaasasdasdsa', 'dasdasdsadasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_categoria`
--

DROP TABLE IF EXISTS `produtos_categoria`;
CREATE TABLE IF NOT EXISTS `produtos_categoria` (
  `PROCAT_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `PROCAT_Nome` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`PROCAT_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_categoria`
--

INSERT INTO `produtos_categoria` (`PROCAT_Codigo`, `PROCAT_Nome`) VALUES
(30, 'Esfoliantes para o Corpo'),
(31, 'Esfoliantes para os Pés'),
(32, 'Parafinas corporais'),
(33, 'Linha Depilatória'),
(34, 'Kits Banho de Lua'),
(35, 'Linha de Tratamentos'),
(36, 'Especiais e Diferenciados'),
(37, 'Argilas e Sachês diversos'),
(38, 'Parlè');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_espeficicacoes`
--

DROP TABLE IF EXISTS `produtos_espeficicacoes`;
CREATE TABLE IF NOT EXISTS `produtos_espeficicacoes` (
  `PROESP_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `PROESP_Descricao` varchar(150) DEFAULT NULL,
  `PROESP_Codigo_Produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`PROESP_Codigo`),
  KEY `FK_PROESP_Codigo_Produto` (`PROESP_Codigo_Produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_espeficicacoes_dados`
--

DROP TABLE IF EXISTS `produtos_espeficicacoes_dados`;
CREATE TABLE IF NOT EXISTS `produtos_espeficicacoes_dados` (
  `PROESPD_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `PROESPD_Descricao` varchar(150) DEFAULT NULL,
  `PROESPD_Codigo_Especificacao` int(11) DEFAULT NULL,
  PRIMARY KEY (`PROESPD_Codigo`),
  KEY `FK_PROESPD_Codigo_Especificacao` (`PROESPD_Codigo_Especificacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_imagens`
--

DROP TABLE IF EXISTS `produtos_imagens`;
CREATE TABLE IF NOT EXISTS `produtos_imagens` (
  `PROIMG_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `PROIMG_Codigo_Produto` int(11) DEFAULT NULL,
  `PROIMG_Imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`PROIMG_Codigo`),
  KEY `FK_PROIMG_Codigo_Produto` (`PROIMG_Codigo_Produto`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_imagens`
--

INSERT INTO `produtos_imagens` (`PROIMG_Codigo`, `PROIMG_Codigo_Produto`, `PROIMG_Imagem`) VALUES
(11, 41, 'ebff016a2d00e25ef36d6532d60c56b6.jpg'),
(12, 41, '273b1eaf51ad93d317d5472b02c8ed7a.jpg'),
(13, 41, '86240da46b6f957400c888d9b1ccdec3.jpg'),
(14, 41, 'b6d112e924cef8db869537d499f74f0b.jpg'),
(15, 42, 'ebff016a2d00e25ef36d6532d60c56b6.jpg'),
(16, 42, '273b1eaf51ad93d317d5472b02c8ed7a.jpg'),
(17, 42, '86240da46b6f957400c888d9b1ccdec3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `USR_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `USR_Nome` varchar(150) DEFAULT NULL,
  `USR_Email` varchar(150) DEFAULT NULL,
  `USR_Senha` varchar(150) DEFAULT NULL,
  `USR_Nivel` varchar(150) DEFAULT NULL,
  `USR_Imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`USR_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`USR_Codigo`, `USR_Nome`, `USR_Email`, `USR_Senha`, `USR_Nivel`, `USR_Imagem`) VALUES
(99, 'Namorador', 'namorador@teste.com', 'server', 'server', '3939421335890b89b392d9c6a3ab450a.jpg');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_PRO_Codigo_Categoria` FOREIGN KEY (`PRO_Codigo_Categoria`) REFERENCES `produtos_categoria` (`PROCAT_Codigo`);

--
-- Limitadores para a tabela `produtos_espeficicacoes`
--
ALTER TABLE `produtos_espeficicacoes`
  ADD CONSTRAINT `FK_PROESP_Codigo_Produto` FOREIGN KEY (`PROESP_Codigo_Produto`) REFERENCES `produtos` (`PRO_Codigo`);

--
-- Limitadores para a tabela `produtos_espeficicacoes_dados`
--
ALTER TABLE `produtos_espeficicacoes_dados`
  ADD CONSTRAINT `FK_PROESPD_Codigo_Especificacao` FOREIGN KEY (`PROESPD_Codigo_Especificacao`) REFERENCES `produtos_espeficicacoes` (`PROESP_Codigo`);

--
-- Limitadores para a tabela `produtos_imagens`
--
ALTER TABLE `produtos_imagens`
  ADD CONSTRAINT `FK_PROIMG_Codigo_Produto` FOREIGN KEY (`PROIMG_Codigo_Produto`) REFERENCES `produtos` (`PRO_Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
