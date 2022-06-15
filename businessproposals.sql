-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2022 às 04:18
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
-- Banco de dados: `bp_generator`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `businessproposals`
--

CREATE TABLE `businessproposals` (
  `id` int(11) NOT NULL,
  `company` varchar(45) NOT NULL,
  `proposalHandler` varchar(45) NOT NULL,
  `number` varchar(4) NOT NULL,
  `date` date NOT NULL,
  `value` float NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `type` varchar(45) NOT NULL,
  `paymentType` varchar(45) NOT NULL,
  `scope` text NOT NULL,
  `confidentialityText` text NOT NULL,
  `tributesText` text NOT NULL,
  `generalConditionText` text NOT NULL,
  `finalResultsText` text NOT NULL,
  `scheduleText` text NOT NULL,
  `proposalPresentationText` text NOT NULL,
  `proposalTitle` text NOT NULL,
  `recipient` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `businessproposals`
--

INSERT INTO `businessproposals` (`id`, `company`, `proposalHandler`, `number`, `date`, `value`, `cnpj`, `type`, `paymentType`, `scope`, `confidentialityText`, `tributesText`, `generalConditionText`, `finalResultsText`, `scheduleText`, `proposalPresentationText`, `proposalTitle`, `recipient`) VALUES
(2, 'empresa', 'gerente', '0221', '2022-06-01', 450000, '31234567891001', 'RTDS', '100% ao final', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum'),
(3, 'Lorem', 'Lorem', '212', '2022-06-07', 23112, '1232124', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem', 'Lorem'),
(4, 'Lorem', 'Lorem', '1202', '2022-06-14', 9, 'Lorem', 'PIT', '91', 'qweqw', 'yuouyuv', 'iuiuy', 'iyv8yy', 'b', '9b', 'lorem', 'Abracadabra', 'Lorem'),
(5, 'Lorem', 'Lorem', '1202', '2022-06-14', 9000, 'Lorem', 'RTDS', '91', 'qweqw', 'yuouyuv', 'iuiuy', 'iyv8yy', 'b', '9b', 'lorem', 'Abracadabra22', 'Lorem'),
(6, 'Lorem', 'Lorem', '1202', '2022-06-14', 9000, 'Lorem', 'RTDS', '91', 'qweqw', 'yuouyuv', 'iuiuy', 'iyv8yy', 'b', '9b', 'lorem', 'Abracadabra22', 'Lorem'),
(7, 'eqweq', 'weqw', '1231', '2022-06-17', 34234, 'eqweq', 'wqw', 'wqeqwq', 'wqeqwq', 'wqeqwq', 'wqeqwq', 'wqeqwq', 'wqeqwq', 'wqeqwq', 'wqeqwq', 'ewwge', 'qwe');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `businessproposals`
--
ALTER TABLE `businessproposals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `businessproposals`
--
ALTER TABLE `businessproposals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
