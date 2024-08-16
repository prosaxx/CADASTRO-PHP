-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/09/2023 às 16:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `id` int(255) UNSIGNED NOT NULL,
  `ingresso_cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `ingresso`
--

INSERT INTO `ingresso` (`id`, `ingresso_cpf`) VALUES
(7, '00301034281'),
(8, '00301034281'),
(9, '12345678911'),
(10, '00301034281'),
(11, '00301034281'),
(12, '00301034281');

-- --------------------------------------------------------

--
-- Estrutura para tabela `local`
--

CREATE TABLE `local` (
  `id` int(10) UNSIGNED NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `numero` int(10) UNSIGNED NOT NULL,
  `telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `data_nasci` date NOT NULL,
  `ingresso_cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `data_nasci`, `ingresso_cpf`) VALUES
('0030103428', 'teste menos digitos ', '2023-08-22', ''),
('00301034281', 'SEBASTIAO ANDRADE DE SOUZA', '1989-09-11', ''),
('003050342', 'SEBASTIAO ANDRADE DE SOUZA', '2023-08-23', ''),
('1', 'ANDRE DE CASTRO RONDI', '2023-08-08', ''),
('11', 'teste com 4', '2023-08-09', ''),
('12', 'teste 12', '2023-08-16', ''),
('123', 'teste 3', '2023-08-22', ''),
('12345', 'teste com 5', '2023-08-16', ''),
('1234567', 'teste 7', '2023-08-15', ''),
('123456789', 'teste com 9 digitos ', '2023-08-16', ''),
('1234567891', 'teste 10', '2023-07-30', ''),
('156357153', 'teste 09', '2023-08-22', ''),
('235612452', 'teste 9', '2023-08-15', ''),
('333666', 'teste 05', '2023-08-15', ''),
('45', 'teste cpom max e min', '2023-08-10', ''),
('46', 'teste novamente', '2023-08-17', ''),
('564512567', 'teste 9', '2023-08-14', ''),
('8', 'teste 456', '2023-08-06', ''),
('87654321', 'teste 11', '2023-08-09', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `local`
--
ALTER TABLE `local`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
