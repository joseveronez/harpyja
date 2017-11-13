-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2017 às 21:31
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
-- Estrutura da tabela `banners_home`
--

CREATE TABLE `banners_home` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners_home`
--

INSERT INTO `banners_home` (`id`, `titulo`, `imagem`) VALUES
(3, 'Banner Harpyja', 'IMG_0661.jpg'),
(4, 'Banner Harpyja 2', 'Harpia-harpyja-001.jpg');

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
(3, 'Consumo de energia'),
(4, 'Caracteristica Torradeira'),
(5, 'Caracteristica Aquecedor'),
(6, 'Caracteristica Liquidificador');

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
(9, 3, 3),
(10, 4, 2),
(11, 5, 3),
(12, 6, 1);

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

--
-- Extraindo dados da tabela `caracteristicas_produto`
--

INSERT INTO `caracteristicas_produto` (`id`, `id_produto`, `valor`, `id_caracteristica`) VALUES
(1, 7, '1111', 3),
(2, 7, '11111', 6),
(13, 8, '11', 3),
(14, 8, '11', 5),
(15, 9, '11', 3),
(16, 9, '11', 4),
(17, 10, '10', 3),
(18, 10, '20', 6);

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
  `banner_empresa` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `parallax` varchar(255) NOT NULL,
  `img_autor` varchar(255) NOT NULL,
  `titulo_autor` varchar(255) NOT NULL,
  `texto_autor` text NOT NULL,
  `logo_cabecalho` varchar(255) NOT NULL,
  `banner_nome` varchar(255) NOT NULL,
  `banner_sobre` varchar(255) NOT NULL,
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
  `mapa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configurar`
--

INSERT INTO `configurar` (`id`, `banner_empresa`, `titulo`, `subtitulo`, `parallax`, `img_autor`, `titulo_autor`, `texto_autor`, `logo_cabecalho`, `banner_nome`, `banner_sobre`, `facebook`, `twitter`, `youtube`, `slug_empresa`, `titulo_empresa`, `texto_empresa`, `slug_nome`, `titulo_nome`, `texto_nome`, `endereco`, `bairro`, `cidade`, `estado_uf`, `cep`, `mapa`) VALUES
(1, 'Harpyja-Gears-small.png', 'Lorem ipsum', 'Lorem ipsum dolor sit amet.', 'parallax.jpg', '9db333805adcc19e1db82b0d9581e825.jpg', 'Cirilo', 'Cirilo é um engenheiro detalhista e criterioso. Passou mais de 10 anos desenvolvendo tecnologias e testes para eletrodomésticos ao redor do globo. Ele possui grande paixão pelo que faz e se preocupa em sempre trazer informação clara e útil utilizando dados para auxiliar seus leitores a tomarem as decisões mais adquadas para os produtos e para a vida que buscam.', 'logo-sem-fundo.png', 'Harpia-harpyja-001_1.jpg', 'parallax_1.jpg', 'https://www.facebook.com/harpyja.com.br', 'https://twitter.com/HarpyjaTweets', 'https://www.youtube.com/channel/UCSbW9j_JVr6Iyd_yMWv--MQ', 'empresa', 'A EMPRESA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, augue a varius lobortis, ipsum velit ornare augue, et consequat sem massa quis nulla. Aenean venenatis vulputate odio quis laoreet. Nulla aliquam urna leo, nec euismod tortor mollis id. Fusce dictum quam sit amet ante pellentesque, nec luctus elit aliquet. Nunc iaculis purus non egestas semper. Duis condimentum dictum mattis. Nullam ultrices nulla sit amet eros dignissim semper. Cras sagittis diam mauris, et ullamcorper nisl interdum id. Maecenas fermentum tempus urna, at dapibus tortor varius ac. Phasellus vitae tempus nulla, sed iaculis ligula. Ut et tellus ac lorem sagittis efficitur. Donec vitae risus dictum, consequat nibh id, finibus turpis. Sed nec nunc orci. Nunc faucibus turpis ut lorem convallis, id volutpat tortor dictum.', 'o-nome', 'O NOME', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius libero eget quam placerat, ac convallis elit eleifend. Nam gravida arcu eu velit rutrum, ac venenatis nulla venenatis. Proin a blandit diam, eget laoreet risus. Maecenas iaculis sapien eu nunc tempus, eu lobortis ligula hendrerit. Vestibulum volutpat feugiat varius. Nullam felis arcu, molestie quis porta vel, vulputate sed quam.', 'R. Prof. Pedro Viriato Parigot de Souza, 3901 - Sala 158 ', 'Campina do Siqueira', 'Curitiba', 'PR', '81280-330', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.9200422296967!2d-49.34822928498569!3d-25.440936583783387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce218b4bf47c7%3A0x12fdea5d1ba9ae8a!2sR.+Prof.+Pedro+Viriato+Parigot+de+Souza%2C+3901+-+Campina+do+Siqueira%2C+Curitiba+-+PR%2C+81280-330!5e0!3m2!1spt-BR!2sbr!4v1510604490439');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `id_categoria`) VALUES
(7, 'Liquidificador', 1),
(8, 'Aquecedor', 3),
(9, 'Torradeira', 2),
(10, 'Liquidificador Cadence Trapèze Colors 350W', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `topicos`
--

CREATE TABLE `topicos` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `banners_home`
--
ALTER TABLE `banners_home`
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
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topicos`
--
ALTER TABLE `topicos`
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
-- AUTO_INCREMENT for table `banners_home`
--
ALTER TABLE `banners_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `caracteristicas_categoria`
--
ALTER TABLE `caracteristicas_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `caracteristicas_produto`
--
ALTER TABLE `caracteristicas_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `topicos`
--
ALTER TABLE `topicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
