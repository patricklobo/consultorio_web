-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01-Dez-2016 às 19:38
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultorio_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `datahora` datetime DEFAULT NULL,
  `statusagendamento` int(11) DEFAULT NULL,
  `dataparaconsulta` date DEFAULT NULL,
  `datacriado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dataalterado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `usuario_id` int(11) DEFAULT NULL,
  `paciente_id` int(11) DEFAULT NULL,
  `medico_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `datahora`, `statusagendamento`, `dataparaconsulta`, `datacriado`, `dataalterado`, `usuario_id`, `paciente_id`, `medico_id`) VALUES
(1, '2016-11-24 15:00:00', 1, '2016-11-24', '2016-11-24 17:31:59', '2016-11-24 17:31:59', 1, 54, 4),
(2, '2016-11-24 22:22:00', 1, '2016-11-24', '2016-11-24 18:51:46', '2016-11-24 18:51:46', 1, 60, 4),
(3, '2016-11-24 18:00:00', 1, '2016-11-24', '2016-11-24 18:55:15', '2016-11-24 18:55:15', 1, 54, 5),
(8, '2016-11-29 22:22:00', 1, '2016-11-29', '2016-11-29 15:19:33', '2016-11-29 15:19:33', 1, 58, 4),
(9, '2016-11-29 22:22:00', 1, '2016-11-29', '2016-11-29 15:19:43', '2016-11-29 15:19:43', 1, 60, 5),
(10, '2016-11-29 22:22:00', 1, '2016-11-29', '2016-11-29 16:49:41', '2016-11-29 16:49:41', 1, 55, 5),
(11, '2019-02-22 22:22:00', 1, '2019-02-22', '2016-11-30 22:50:20', '2016-11-30 22:50:20', 1, 57, 4),
(12, '1993-02-22 11:11:00', 1, '1993-02-22', '2016-11-30 22:56:15', '2016-11-30 22:56:15', 1, 58, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id`, `nome`, `descricao`) VALUES
(10, 'Acupuntura', NULL),
(11, 'Alergia', NULL),
(12, 'Angiologia', NULL),
(13, 'Cardiologia', NULL),
(14, 'Clínica Geral', NULL),
(15, 'Coloproctologia', NULL),
(16, 'Dermatologia', NULL),
(17, 'Endocrinologia', NULL),
(18, 'Fisiatria', NULL),
(19, 'Fisioterapia', NULL),
(20, 'Fonoaudiologia', NULL),
(21, 'Gastroenterologia', NULL),
(22, 'Geriatria', NULL),
(23, 'Ginecologia', NULL),
(24, 'Hematologia', NULL),
(25, 'Homeopatia', NULL),
(26, 'Infectologia', NULL),
(27, 'Nefrologia', NULL),
(28, 'Neurologia', NULL),
(29, 'Nutrição', NULL),
(30, 'Nutrologia', NULL),
(32, 'Oftalmologia', NULL),
(33, 'Oncologia', NULL),
(34, 'Ortopedia e Traumologia', NULL),
(35, 'Otorrinolaringologia', NULL),
(36, 'Pediatria', NULL),
(37, 'Pneumologia', NULL),
(38, 'Psicologia', NULL),
(39, 'Psicopedagogia', NULL),
(40, 'Psiquiatria', NULL),
(41, 'Reumatologia', NULL),
(44, 'Urologia', NULL),
(45, 'Odontologia', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `especialidade_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `nome`, `especialidade_id`) VALUES
(4, 'José Bonifacio Cardoso', 36),
(5, 'Testando editar', 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `datanasc` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `endereco`, `telefone`, `datanasc`, `email`) VALUES
(47, 'TESTE4', 'rua teste 2', 'telefoneteste 2', '1999-02-10', 'emailteste@2'),
(49, 'TESTANDO O UPDATE', 'rua teste 2', 'telefoneteste 2', '1993-02-22', 'emailteste@2'),
(54, 'Nome Sobrenome', 'Rua teste, bairro, numero', '91981302843', '1992-02-02', 'paciente@gmail.com'),
(55, 'Joao Pereira Rocha', 'rua grao para', '91982103232', '1978-10-22', 'joaopereira@gmail.com'),
(56, 'Marcio Juca', 'Rua Sao Joao', '91932345654', '1999-02-10', 'marcio@hotmail.com'),
(57, 'Jordan Teixeira Viana', 'rua segunda, 02, madre tereza', '9181302843', '1985-02-02', 'jordanviana@live.com'),
(58, 'Joana de Brito Silva', 'Rua Cel Leal, 969, Centro', '91982286509', '1999-02-10', 'joana@yahoo.com.br'),
(60, 'Joao Vitor Silva', 'Rua Cel Leal, 969, Centro', '91981309090', '1999-02-10', 'joao@gmailcom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alterado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `criado`, `alterado`) VALUES
(1, 'Usuário Teste', 'Usuario@email.com', 'usuariosenha', '2016-11-18 14:55:12', '2016-11-18 14:55:12'),
(2, 'usuario2', 'usuario@teste.com', 'senhateste', '2016-11-18 22:08:22', '2016-11-18 22:08:22'),
(3, 'TESTEINSERT', 'TESTEINSERT', 'TESTEINSERT', '2016-11-29 17:15:25', '2016-11-29 17:15:25'),
(4, 'TESTEINSERT', 'TESTEINSERT', 'TESTEINSERT', '2016-11-29 17:17:41', '2016-11-29 17:17:41'),
(5, 'TESTEINSERT', 'TESTEINSERT', 'TESTEINSERT', '2016-11-29 17:17:43', '2016-11-29 17:17:43'),
(6, 'teste', 'jordanviana@live.com', '123', '2016-11-29 17:32:14', '2016-11-29 17:32:14'),
(7, 'testarlogin', 'emailteste', '123', '2016-11-29 17:33:15', '2016-11-29 17:33:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `medico_id` (`medico_id`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `especialidade_id` (`especialidade_id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_3` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`id`);

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidade` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
