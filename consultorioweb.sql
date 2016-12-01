-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2016 às 22:03
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultorioweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `paciente` int(11) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `data` date NOT NULL DEFAULT '0000-00-00',
  `criado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alterado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `usuario`, `paciente`, `data_hora`, `status`, `data`, `criado`, `alterado`) VALUES
(1, 1, 1, '2016-11-18 14:37:00', 1, '0000-00-00', '2016-11-18 14:37:00', '0000-00-00 00:00:00'),
(2, 1, 1, '2016-11-18 14:37:06', 1, '0000-00-00', '2016-11-18 14:37:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `endereco`, `telefone`, `datanasc`, `email`) VALUES
(1, 'Gheisy Franca', 'passagem Alegre, 172', '993875383', '1991-01-07', 'gheisy@lobo.com'),
(2, 'Patrick Lobo', 'Augusto Montenegro, 308', '991250777', '1991-01-07', 'patrick@lobo.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alterado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `criado`, `alterado`) VALUES
(1, 'gheisy', 'gheisy@lobo.com', '936020', '2016-11-16 20:36:35', '0000-00-00 00:00:00'),
(2, 'patrick', 'patrick@lobo.com', 'lobo', '2016-11-16 20:36:35', '0000-00-00 00:00:00'),
(10, 'Maria ', 'maria@souza.com', 'e21fc56c1a272b630e0d1439079d0598cf8b8329', '2016-11-16 21:25:21', '0000-00-00 00:00:00'),
(12, 'jhadde', 'jhadde@franca.com.br', 'df6e639da7d4d6de82a02c6e19b5d8b00bdd283e', '2016-11-16 21:44:34', '0000-00-00 00:00:00'),
(13, 'Patricia Lobo', 'paty@lobo.com', '8343b0ac5366cc458b728d3c840b6086ffa842a3', '2016-11-16 22:56:06', '0000-00-00 00:00:00'),
(15, 'Leandra', 'leandra@souza.com', '3cc353d2c5921dc30992d3bbc042bb3ef0b21d42', '2016-11-17 13:36:18', '0000-00-00 00:00:00'),
(16, 'Fernada', 'Fernanda@souza.com', '22e1f99af8bc52a5e98e53a141eddad202d2ca52', '2016-11-17 15:35:35', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
