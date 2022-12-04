-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2022 às 23:49
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eletroninho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Nome` varchar(130) NOT NULL,
  `RG` varchar(20) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `Pai` varchar(130) NOT NULL,
  `Mãe` varchar(130) NOT NULL,
  `Email` varchar(130) NOT NULL,
  `Telefone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `Nome`, `RG`, `CPF`, `Pai`, `Mãe`, `Email`, `Telefone`) VALUES
(1, '', '', '', '', '', '0', 0),
(4, 'Beatris Rubino', '22222', '22222', 'Antonio', 'Monica', 'beatris@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `Nome` varchar(130) NOT NULL,
  `Nascimento` varchar(20) NOT NULL,
  `RG` varchar(20) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `Pai` varchar(130) NOT NULL,
  `Mãe` varchar(130) NOT NULL,
  `Email` varchar(130) NOT NULL,
  `Telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `Nome`, `Nascimento`, `RG`, `CPF`, `Pai`, `Mãe`, `Email`, `Telefone`) VALUES
(1, '', '', '', '', '', '', '', ''),
(4, 'Beatris Rubino', '24091993', '22222', '22222', 'Antonio', 'Monica', 'beatris@gmail.com', '21493204243');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `produto` varchar(130) NOT NULL,
  `tipo` varchar(130) NOT NULL,
  `modelo` varchar(130) NOT NULL,
  `defeito` varchar(130) NOT NULL,
  `cliente` varchar(130) NOT NULL,
  `telefone` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `tipo`, `modelo`, `defeito`, `cliente`, `telefone`) VALUES
(1, '', 'SMART', 'HQ4503', 'TELA NAO LIGA', 'LUIS', '2194030043'),
(2, 'TV', 'SMART', 'HQ4503', 'TELA NAO LIGA', 'LUIS', '2194030043');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
