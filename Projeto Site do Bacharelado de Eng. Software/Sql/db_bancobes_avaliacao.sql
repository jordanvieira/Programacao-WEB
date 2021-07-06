-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2021 às 19:44
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_bancobes_avaliacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_mensagem`
--

CREATE TABLE `contato_mensagem` (
  `id` int(100) NOT NULL,
  `dsc_nome_completo` varchar(100) NOT NULL,
  `dsc_email` varchar(100) NOT NULL,
  `cod_assunto` varchar(50) NOT NULL,
  `desc_texto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_mensagem`
--

INSERT INTO `contato_mensagem` (`id`, `dsc_nome_completo`, `dsc_email`, `cod_assunto`, `desc_texto`) VALUES
(4, 'Jordan Vieira', 'marvaojordan98@gmail.com', 'reclamação', 'TESTE DE BANCO DE DADOS'),
(5, 'Igor dantas', 'igor@gmail.com', 'sugestao', 'MAIS TESTE DO BANCO'),
(23, 'Mariano', 'mariano@gmail.com', 'Duvidas', 'Estamos testando o banco de Dados'),
(26, 'João Pedro Alves Mariano ', 'marianojoao52@gmail.com', 'sugestao', 'Que site maravilhoso!'),
(28, 'Igor Quintanilha', 'idqigordantas@gmail.com', 'reclamação', 'Alo teste reclamação'),
(29, 'Franklin', 'mytec@gmail.com', 'reclamação', 'afafaf');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato_mensagem`
--
ALTER TABLE `contato_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato_mensagem`
--
ALTER TABLE `contato_mensagem`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
