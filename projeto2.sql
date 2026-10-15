-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/10/2026 às 16:43
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nota` tinyint(4) NOT NULL,
  `comentario` text NOT NULL,
  `data_avaliacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pendente','aprovada','reprovada') NOT NULL DEFAULT 'pendente'
) ;

--
-- Despejando dados para a tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nome`, `nota`, `comentario`, `data_avaliacao`, `status`) VALUES
(1, 'maria', 5, 'teste', '2026-10-13 11:28:40', 'aprovada'),
(2, 'maria', 4, 'treste', '2026-10-13 11:30:34', 'aprovada'),
(3, 'teste', 5, 'teste', '2026-10-15 11:29:50', 'aprovada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `Whatsapp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `telefone`, `Whatsapp`, `email`) VALUES
('JosÃ© Henrique Oliveira Carvalho', '21121', '', 'josehenriqurcarvalho11@gmail.com'),
('JosÃ© Henrique Oliveira Carvalho', '1324', '', 'josehenriqurcarvalho11@gmail.com'),
('JosÃ© Henrique Oliveira Carvalho', '21121', '', 'josehenriqurcarvalho11@gmail.com'),
('JosÃ© Henrique Oliveira Carvalho', '21121', '', 'josehenriqurcarvalho11@gmail.com'),
('JosÃ© Henrique Oliveira Carvalho', '21121', '', 'josehenriqurcarvalho11@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
