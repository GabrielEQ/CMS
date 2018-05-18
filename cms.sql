-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2018 às 16:46
-- Versão do servidor: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(10) NOT NULL,
  `cat_nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nome`) VALUES
(1, 'Design'),
(2, 'Desenvolvimento'),
(3, 'Empreendedorismo'),
(4, 'Redes'),
(5, 'IoT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `post_id` int(5) NOT NULL,
  `post_titulo` varchar(255) NOT NULL,
  `post_autor` varchar(100) NOT NULL,
  `post_imagem` text NOT NULL,
  `post_data` date NOT NULL,
  `post_conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_titulo`, `post_autor`, `post_imagem`, `post_data`, `post_conteudo`) VALUES
(1, 'Aula11 - PHP', 'Gustavo Torrente', 'cms_post_image1.jpg', '2018-04-20', 'Adipisicing ut commodo anim aliqua. Consequat incididunt dolore adipisicing elit nostrud pariatur ullamco mollit pariatur do occaecat ullamco eiusmod nisi. Id do occaecat est reprehenderit Lorem aute ad pariatur nisi labore.'),
(2, 'Culinária', 'Maria Braga', 'cebola.jpg', '2018-04-20', 'Sint Lorem ad commodo proident amet tempor pariatur consequat. Eu veniam velit nostrud pariatur nulla deserunt. Deserunt excepteur proident voluptate pariatur nostrud ipsum consectetur amet cupidatat excepteur non. Cupidatat laboris incididunt anim minim id magna laborum reprehenderit nisi ipsum mollit cupidatat.\r\n'),
(3, 'Caldo de Feijao', 'Fernando', 'img_caldo_de_feijao_simples.jpg', '2018-05-04', 'Modo de Preparo\r\nBata no liquidificador o feijão cozido, a água, a cebola e o cheiro verde até que fique homogêneo.\r\nReserve.\r\nEm uma panela, refogue o bacon e o alho, em seguida despeje a mistura de feijão.\r\nDeixe apurar por cerca de 10 minutos em fogo médio.\r\nTempere com a pimenta, o sal e salpique a salsinha picada.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `user_nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user_id`, `username`, `user_password`, `user_role`, `user_nome`) VALUES
(1, 'gtorrente', 'eufuinafeira11', 'superadmin', 'Gustavo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
