-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jul-2016 às 06:47
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abril`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_compra` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `tipoPagamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES
(1, 'Capricho'),
(2, 'Elle'),
(3, 'Estilo'),
(4, 'Manequim'),
(5, '4 Rodas'),
(6, 'Vip');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'jean willy', 'jean@jean.com', 'testeabril', '11 33334444'),
(2, 'lucas', 'lucas@lucas.com', 'testeabril', '1111111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_produto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `preco`, `imagem`, `quantidade`, `id_categoria`) VALUES
(1, 'O favorito do BBB', NULL, '9.00', 'capricho/1.jpg', 4, 1),
(2, 'A virada de Katy', NULL, '10.00', 'capricho/2.jpg', 5, 1),
(3, 'Taylor', NULL, '8.90', 'capricho/3.jpg', 5, 1),
(4, 'Princesa Manu', NULL, '9.90', 'capricho/4.jpg', 5, 1),
(5, 'Damom', NULL, '7.99', 'capricho/5.jpg', 5, 1),
(6, 'Demi Perfeita', NULL, '10.99', 'capricho/6.jpg', 5, 1),
(7, 'Ian', NULL, '7.99', 'capricho/7.jpg', 5, 1),
(8, 'Marina Ruy Barbosa', NULL, '9.99', 'capricho/8.jpg', 5, 1),
(9, 'Liso dos Sonhos', NULL, '11.90', 'capricho/9.jpg', 5, 1),
(10, 'Salve seu cabelo', NULL, '8.90', 'capricho/10.jpg', 5, 1),
(11, 'Taylor Lautner', NULL, '7.90', 'capricho/11.jpg', 5, 1),
(12, 'Liso dos Sonhos', NULL, '8.90', 'capricho/12.jpg', 5, 1),
(13, 'Gisele - Edção de Aniversário', NULL, '12.90', 'elle/1.jpg', 3, 2),
(14, '21 anos', NULL, '13.90', 'elle/3.jpg', 5, 2),
(15, 'Gisele', NULL, '10.90', 'elle/2.jpg', 5, 2),
(16, 'Victoria Beckham', NULL, '12.90', 'elle/4.jpg', 5, 2),
(17, 'Cabelos', NULL, '10.90', 'elle/5.jpg', 5, 2),
(18, 'Jennifer!', NULL, '11.90', 'elle/6.jpg', 5, 2),
(19, 'Luxo', NULL, '0.00', 'elle/7.jpg', 4, 2),
(20, 'Girl Power', NULL, '9.90', 'elle/8.jpg', 4, 2),
(21, 'Navy é um luxo', NULL, '9.90', 'elle/10.jpg', 4, 2),
(22, 'Milley', NULL, '11.90', 'elle/11.jpg', 4, 2),
(23, 'Body Show', NULL, '12.90', 'elle/12.jpg', 4, 2),
(24, 'Edição de Aniversário', NULL, '8.90', 'estilo/1.jpg', 4, 3),
(25, 'Paolla Oliveira', NULL, '9.90', 'estilo/2.jpg', 4, 3),
(26, 'Bianca Bim', NULL, '10.90', 'estilo/3.jpg', 4, 3),
(27, 'Juliana Paes', NULL, '9.90', 'estilo/4.jpg', 4, 3),
(28, 'Grazi Massafera', NULL, '10.90', 'estilo/5.jpg', 4, 3),
(29, 'Maria Casadevall', NULL, '9.90', 'estilo/6.jpg', 4, 3),
(30, 'Flávia Alessandra', NULL, '8.90', 'estilo/7.jpg', 4, 3),
(31, 'Isís Valverde', NULL, '9.90', 'estilo/8.jpg', 4, 3),
(32, 'Giovanna Antonelli', NULL, '10.90', 'estilo/9.jpg', 4, 3),
(33, 'Patrícia Poeta', NULL, '8.90', 'estilo/10.jpg', 4, 3),
(34, 'Alinne Moraes', NULL, '10.90', 'estilo/11.jpg', 4, 3),
(35, 'Christine Fernandes', NULL, '11.90', 'estilo/12.jpg', 4, 3),
(36, 'Christine Fernandes', NULL, '8.90', 'manequim/1.jpg', 4, 4),
(37, 'Sandy', NULL, '9.90', 'manequim/2.jpg', 4, 4),
(38, 'Nathalia Dill', NULL, '8.90', 'manequim/3.jpg', 4, 4),
(39, 'Patrícia Poeta', NULL, '9.90', 'manequim/4.jpg', 4, 4),
(40, 'Letícia Spiller', NULL, '10.90', 'manequim/5.jpg', 3, 4),
(41, 'Natal & Réveillon', NULL, '9.90', 'manequim/6.jpg', 3, 4),
(42, 'Mayana Neiva', NULL, '8.90', 'manequim/7.jpg', 3, 4),
(43, 'Débora Nascimento', NULL, '11.90', 'manequim/8.jpg', 3, 4),
(44, 'Especial Moda', NULL, '10.90', 'manequim/9.jpg', 3, 4),
(45, 'Monique Alfradique', NULL, '10.90', 'manequim/11.jpg', 3, 4),
(46, 'O futuro chegou!', NULL, '8.90', 'quatro_rodas/1.jpg', 3, 5),
(47, 'Civic ou Corolla?', NULL, '9.90', 'quatro_rodas/2.jpg', 3, 5),
(48, 'Ford Ka vai para a briga', NULL, '8.90', 'quatro_rodas/3.jpg', 3, 5),
(49, 'Nova Duster Oroch', NULL, '9.90', 'quatro_rodas/4.jpg', 3, 5),
(50, 'Renegade x Fiat Toro', NULL, '11.90', 'quatro_rodas/5.jpg', 3, 5),
(51, 'Que Racha!', NULL, '7.90', 'quatro_rodas/6.jpg', 5, 5),
(52, 'Nova Saveiro', NULL, '8.90', 'quatro_rodas/7.jpg', 5, 5),
(53, 'A nova vida do Honda Fit', NULL, '10.90', 'quatro_rodas/8.jpg', 5, 5),
(54, 'Up!', NULL, '9.90', 'quatro_rodas/9.jpg', 5, 5),
(55, 'Novo Corolla', NULL, '10.90', 'quatro_rodas/10.jpg', 5, 5),
(56, 'Novo Up!', NULL, '10.90', 'quatro_rodas/12.jpg', 5, 5),
(57, 'Leandra Leal', NULL, '10.90', 'vip/1.jpg', 4, 6),
(58, 'Manu Gavassi', NULL, '9.90', 'vip/2.jpg', 4, 6),
(59, 'Giselle Batista', NULL, '9.90', 'vip/3.jpg', 4, 6),
(60, 'Carla Diaz', NULL, '10.90', 'vip/4.jpg', 4, 6),
(61, 'Fernanda Lima', NULL, '9.90', 'vip/5.jpg', 4, 6),
(62, 'Dani Suzuki', NULL, '10.90', 'vip/6.jpg', 4, 6),
(63, 'Anitta', NULL, '9.90', 'vip/7.jpg', 3, 6),
(64, 'Fernanda Souza', NULL, '8.90', 'vip/8.jpg', 3, 6),
(65, 'Tainá Müller', NULL, '11.90', 'vip/9.jpg', 3, 6),
(66, 'Milena Toscano', NULL, '10.90', 'vip/10.jpg', 3, 6),
(67, 'Maíra', NULL, '8.90', 'vip/11.jpg', 3, 6),
(68, 'Priscila Sol', NULL, '10.90', 'vip/12.jpg', 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD KEY `fk_pedidos_produtos` (`id_produto`),
  ADD KEY `fk_pedidos_cliente` (`id_cliente`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_produtos_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `fk_pedidos_produtos` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_produtos_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
