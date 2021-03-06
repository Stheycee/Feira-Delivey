-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/02/2021 às 00:33
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_feira`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `ce_id_compras` int(100) NOT NULL,
  `Produto` varchar(100) NOT NULL,
  `Quantidade` float NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`ce_id_compras`, `Produto`, `Quantidade`, `Total`) VALUES
(1, 'acelga', 2, 8),
(2, 'acelga', 3, 12),
(3, 'acelga', 4, 16),
(3, 'coentro', 4, 16),
(3, 'coentro', 4, 16),
(3, 'batata', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `ce_id_dados` int(100) NOT NULL,
  `nome_rua` varchar(500) NOT NULL,
  `numero` int(20) NOT NULL,
  `referencia` varchar(500) NOT NULL,
  `pagamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`ce_id_dados`, `nome_rua`, `numero`, `referencia`, `pagamento`) VALUES
(3, 'Rua Loanda', 74, 'Perto do SESI', 'Cartão');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `nome_usuario` varchar(500) NOT NULL,
  `email_usuario` varchar(500) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha`) VALUES
(1, 'carla', 'carla@gmail.com', '123456'),
(2, 'pedro', 'pedro@gmail.com', '654321'),
(3, 'anna', 'anna@gmail.com', '111222'),
(4, 'stella', 'biscoito@teste.com', '123456'),
(7, 'theyce', 'theyce@gmail.com', '123456'),
(8, 'Maria', 'Maria@braga.com', '654321'),
(9, 'Tio Bob', 'exterminador@futuro.com', '000000');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD KEY `ce_id_compras` (`ce_id_compras`);

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD KEY `ce_id_dados` (`ce_id_dados`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `ce_id_compras` FOREIGN KEY (`ce_id_compras`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `dados`
--
ALTER TABLE `dados`
  ADD CONSTRAINT `ce_id_dados` FOREIGN KEY (`ce_id_dados`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
