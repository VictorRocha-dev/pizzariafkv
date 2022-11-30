-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2022 às 22:09
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `qnt` varchar(10) NOT NULL,
  `link` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `usuario_id`, `pid`, `nome`, `preco`, `qnt`, `link`) VALUES
(20, 1, '2', 'Diavola', '45.00', '3', 'https://marcello.qodeinteractive.com/wp-content/uploads/2022/03/product-list-7.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `valor`, `image`, `nome`) VALUES
(1, 'mozzarella fiordilatte ou com mozzarella de bufala', '55.00', 'https://marcello.qodeinteractive.com/wp-content/uploads/2022/03/product-list-10.png', 'Margherita'),
(2, 'ítalo-americana apimentada do salame seco, carne de porco e bovina.', '45.00', 'https://marcello.qodeinteractive.com/wp-content/uploads/2022/03/product-list-7.png', 'Diavola'),
(3, 'pimentos, beringelas e courgettes.', '60.00', 'https://marcello.qodeinteractive.com/wp-content/uploads/2022/03/product-list-3.png', 'Ortolana'),
(4, 'provolone, parmigiano reggiano, mozzarella, stracchino ou fontina.', '51.00', 'https://marcello.qodeinteractive.com/wp-content/uploads/2022/03/product-list-8.png', 'Quattro formaggi'),
(5, 'tomate, alho, oregão e azeite', '42.00', 'https://marcello.qodeinteractive.com/wp-content/uploads/2022/03/home-2-pizza-4.png', 'Marinara'),
(6, 'nutella, creme de leite e morango', '79.00', 'https://biancapizzaria.com.br/wp-content/uploads/2015/06/40-chocolate-com-morango.png', 'Pizza de Nuttela'),
(7, 'chocolate ao leite, M&M’s e leite em pó', '55.00', 'https://pizzariadodudu.com.br/wp-content/uploads/2022/04/M-_-M_S-CREME-DE-CHOCOLATE-E-CONFEITOS-DE-M-_-M_S-1024x963.png', 'Pizza de M&Ms'),
(8, 'Suco de Laranja natural', '18.00', 'https://i.pinimg.com/originals/c5/72/1b/c5721b080ede57e5df833ec4d07c0fc7.jpg', 'Suco de Laranja'),
(9, 'Guarana antarctica', '11.00', 'https://i.pinimg.com/564x/c0/90/b4/c090b4e5411fc4f507f18d799ef2e61e.jpg', 'Guarana antarctica'),
(10, ' Têm aromas pronunciados, com frutas negras como framboesas e groselha', '350.00', 'https://i.pinimg.com/564x/77/c9/44/77c944203fbd287b97b78ca507abbfb8.jpg', 'cabernet france'),
(11, 'complexo e equilibrado, além de mais rico em sabores e aromas', '116.00', 'https://i.pinimg.com/originals/38/57/15/38571559f5d3f12578f652b51b3ae429.jpg', 'assemblage');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `uf` varchar(3) DEFAULT NULL,
  `cpf` int(13) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `data_nasc`, `endereco`, `bairro`, `cidade`, `cep`, `uf`, `cpf`, `admin`) VALUES
(1, 'teste@gmail.com', 'usuario', 'usuario', '2005-08-17', 'Rua 2', 'Bairro 2', 'Diadema', 9341146, 'SP', 2147483647, 1),
(2, 'admin@gmail.com', 'admin', 'admin', '2005-08-17', 'Rua 2', 'Bairro 2', 'Diadema', 9341146, 'SP', 1234567892, 1),
(5, 'black@gmail.com', 'black', 'victor rocha', '1998-03-12', 'Rua jose', 'Monte Negro', 'Sao paulo', 4090000, 'RJ', 2147483647, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
