-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2017 às 19:37
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `nome_produto` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
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

INSERT INTO `avaliacoes` (`id`, `slug`, `nome_produto`, `categoria`, `nota_desempenho`, `nota_design_e_acabamento`, `nota_praticidade`, `nota_limpeza`, `nota_seguranca`, `pontos_fortes`, `pontos_fracos`, `preco`, `texto`, `imagens`, `tag`) VALUES
(1, 'teste', 'teste', 'teste', '3', '3', '3', '3', '3', 'teste', 'teste', 'teste', '<p>teste</p>', 'banner_teste.png', 'teste'),
(2, 'avalicao-produto-x', 'produtox', 'Liquidificador', '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>texto</p>', 'banner_teste_1.png', 'tag'),
(3, 'avalicao-produto-x', 'produtox', 'Liquidificador', '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>texto</p>', 'banner_teste_2.png', 'tag'),
(4, 'avalicao-produto-x', 'produtox', 'Liquidificador', '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>texto</p>', 'banner_teste_3.png', 'tag'),
(5, 'liquidificador', 'teste', 'Liquidificador', '3', '3', '3', '3', '3', 'teste', 'teste', '9999', '<p>&nbsp;texto</p>', 'banner_teste_4.png', 'tag'),
(6, 'aquecedor', 'Aquecedor', 'Aquecedores', '5', '5', '5', '5', '5', 'teste', 'teste', '9999', '<p>texto</p>', '300x100.png', 'tag'),
(7, 'produto-liquidificador', 'Liquidificador X', 'Liquidificador', '5', '5', '5', '5', '5', 'teste', 'teste', '99999', '<p>texto</p>', '300x100_1.png', 'tag');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes_pros_contras`
--

CREATE TABLE `avaliacoes_pros_contras` (
  `id` int(11) NOT NULL,
  `id_avaliacao` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes_pros_contras`
--

INSERT INTO `avaliacoes_pros_contras` (`id`, `id_avaliacao`, `tipo`, `descricao`) VALUES
(1, 5, 1, 'Ponto Forte 1'),
(2, 5, 1, 'Ponto Forte 2'),
(3, 5, 1, 'Ponto Forte 3'),
(4, 6, 1, 'Ponto Forte 4'),
(8, 7, 2, 'Ponto Fraco 1'),
(9, 7, 2, 'Ponto Fraco 2'),
(11, 7, 1, 'Ponto Forte 10'),
(12, 7, 2, 'Ponto Fraco 10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` int(11) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `caracteristicas`) VALUES
(3, 'Consumo de energia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas_categoria`
--

CREATE TABLE `caracteristicas_categoria` (
  `id` int(11) NOT NULL,
  `id_caracteristica` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caracteristicas_categoria`
--

INSERT INTO `caracteristicas_categoria` (`id`, `id_caracteristica`, `id_categoria`) VALUES
(7, 3, 2),
(8, 3, 1),
(9, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas_produto`
--

CREATE TABLE `caracteristicas_produto` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `id_caracteristica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `slug`, `categoria`) VALUES
(1, 'liquidificadores', 'Liquidificadores'),
(2, 'torradeiras', 'Torradeiras'),
(3, 'aquecedores', 'Aquecedores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configurar`
--

CREATE TABLE `configurar` (
  `id` int(11) NOT NULL,
  `banner_topo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `parallax` varchar(255) NOT NULL,
  `img_autor` varchar(255) NOT NULL,
  `titulo_autor` varchar(255) NOT NULL,
  `texto_autor` text NOT NULL,
  `logo_cabecalho` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `slug_empresa` varchar(255) NOT NULL,
  `titulo_empresa` varchar(255) NOT NULL,
  `texto_empresa` text NOT NULL,
  `slug_nome` varchar(255) NOT NULL,
  `titulo_nome` varchar(255) NOT NULL,
  `texto_nome` text NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado_uf` varchar(2) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `mapa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configurar`
--

INSERT INTO `configurar` (`id`, `banner_topo`, `titulo`, `subtitulo`, `parallax`, `img_autor`, `titulo_autor`, `texto_autor`, `logo_cabecalho`, `logo_footer`, `facebook`, `twitter`, `youtube`, `slug_empresa`, `titulo_empresa`, `texto_empresa`, `slug_nome`, `titulo_nome`, `texto_nome`, `endereco`, `bairro`, `cidade`, `estado_uf`, `cep`, `mapa`) VALUES
(1, 'teste', 'teste', 'teste', 'teste', 'imagem-teste.jpeg', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'uf', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `senha` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'comberweb', 'admin@comberweb.com.br', '$2a$08$OTgzNDIzNDY1OWMyYjFiN.yYHdpt1qavIM3lV9WfRxCOWqA.GU6gy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `link_video` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `link_video`, `Titulo`) VALUES
(1, 'https://www.youtube.com/embed/7RxeORpEmEs', 'Como testamos torradeiras'),
(2, 'https://www.youtube.com/embed/k3bFAiLd514', 'Avaliação de Liquidificador - Walita ProBlend 6 vs. Mondial L-66'),
(3, 'https://www.youtube.com/embed/VCv78VJtH40', 'Avaliação de Liquidificador - Oster Multi Chef e Walita Pro Blend 4'),
(4, 'https://www.youtube.com/embed/Aq6UgY5ee5c', 'Além da Casca - Ventiladores de Mesa'),
(5, 'https://www.youtube.com/embed/gt-N77rVgjk', 'Harpyja - Por que Estamos Aqui?'),
(6, 'https://www.youtube.com/embed/V5vK2cXpPhs', 'Avaliação de Liquidificador - Arno Faciclic vs. Oster Multi Chef'),
(8, 'https://www.youtube.com/embed/pO1Af7zRiW4', 'Teste lado a lado - Liquidificador e Processador'),
(9, 'https://www.youtube.com/embed/fSqk5sEF0jc', 'Avaliação de Liquidificador - Britânia Diamante 800 e Philips Walita Daily Pro Blend 4 e'),
(10, 'https://www.youtube.com/embed/BthZdlAJsBM', 'Avaliação de Aquecedores (Cadence, Britânia, Confilar e Mondial)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avaliacoes_pros_contras`
--
ALTER TABLE `avaliacoes_pros_contras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracteristicas_categoria`
--
ALTER TABLE `caracteristicas_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracteristicas_produto`
--
ALTER TABLE `caracteristicas_produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurar`
--
ALTER TABLE `configurar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `avaliacoes_pros_contras`
--
ALTER TABLE `avaliacoes_pros_contras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `caracteristicas_categoria`
--
ALTER TABLE `caracteristicas_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `caracteristicas_produto`
--
ALTER TABLE `caracteristicas_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `configurar`
--
ALTER TABLE `configurar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
