-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/09/2021 às 20:08
-- Versão do servidor: 5.7.33
-- Versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_memo`
--
CREATE DATABASE IF NOT EXISTS `crud_memo` DEFAULT CHARACTER SET latin2 COLLATE latin2_general_ci;
USE `crud_memo`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `vendedor` varchar(200) CHARACTER SET utf8 NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `total` decimal(20,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`id`, `vendedor`, `data`, `hora`, `total`) VALUES
(1, 'Erik', '2021-08-23', '11:35:05', '50.00'),
(3, 'Bruno', '2021-08-23', '15:24:05', '99.00'),
(4, 'Breno', '2021-08-23', '15:24:15', '1.00'),
(5, 'Chinês', '2021-08-23', '15:24:38', '0.01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda_produtos`
--

CREATE TABLE `venda_produtos` (
  `id` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 NOT NULL,
  `valor` decimal(20,2) NOT NULL,
  `quantidade` decimal(20,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `venda_produtos`
--
ALTER TABLE `venda_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `venda_produtos`
--
ALTER TABLE `venda_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
