-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 12:37
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harpyja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nota_desempenho` varchar(10) NOT NULL,
  `nota_design_e_acabamento` varchar(10) NOT NULL,
  `nota_praticidade` varchar(10) NOT NULL,
  `nota_limpeza` varchar(10) NOT NULL,
  `nota_seguranca` varchar(10) NOT NULL,
  `pontos_fortes` varchar(255) NOT NULL,
  `pontos_fracos` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `imagens` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `slug`, `id_produto`, `nota_desempenho`, `nota_design_e_acabamento`, `nota_praticidade`, `nota_limpeza`, `nota_seguranca`, `pontos_fortes`, `pontos_fracos`, `preco`, `texto`, `imagens`, `tag`) VALUES
(1, 'teste', 2, '3', '3', '3', '3', '3', 'teste', 'teste', 'teste', '<p>teste</p>', 'banner_teste.png', 'teste'),
(2, 'avalicao-produto-x', 3, '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>texto</p>', 'banner_teste_1.png', 'tag'),
(3, 'avalicao-produto-x', 2, '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>texto</p>', 'banner_teste_2.png', 'tag'),
(4, 'avalicao-produto-x', 4, '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>texto</p>', 'banner_teste_3.png', 'tag'),
(5, 'liquidificador', 3, '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>&nbsp;texto</p>', 'banner_teste_4.png', 'tag'),
(6, 'aquecedor', 4, '5', '5', '5', '5', '5', 'teste', 'teste', '9999', '<p>texto</p>', '300x100.png', 'tag'),
(7, 'produto-liquidificador', 3, '5', '5', '5', '5', '5', 'teste', 'teste', '99999', '<p>texto</p>', '300x100_1.png', 'tag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
