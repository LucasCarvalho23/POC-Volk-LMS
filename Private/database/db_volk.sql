-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 01:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_volk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `codigo` int(11) NOT NULL,
  `pessoa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`codigo`, `pessoa`) VALUES
(4, 'Anderson'),
(2, 'Gabriel'),
(3, 'Robson'),
(1, 'Victor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_processos`
--

CREATE TABLE `tb_processos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `unidade` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `datacriacao` date NOT NULL,
  `datamodificacao` date NOT NULL,
  `pessoa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_processos`
--

INSERT INTO `tb_processos` (`codigo`, `nome`, `unidade`, `status`, `datacriacao`, `datamodificacao`, `pessoa`) VALUES
(1, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(2, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(3, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(4, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(5, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(6, 'Certificados em lote', 'Blumenal', 'PROCESSADO', '2022-05-25', '2024-05-07', 'Anderson'),
(7, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(8, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(9, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(10, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(11, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(13, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(14, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(15, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(16, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(17, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(18, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(19, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(20, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(21, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(22, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(23, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(24, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(25, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(26, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(27, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(28, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(29, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(30, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(31, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(32, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(33, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(34, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(35, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(36, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(37, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(38, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(39, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(40, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(41, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(42, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(43, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(44, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(45, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(46, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(47, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(48, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(49, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(50, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(51, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(52, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(53, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(54, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(55, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(56, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(57, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(58, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(59, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(60, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(61, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(62, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(63, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(64, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(65, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(66, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(67, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(68, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(69, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(70, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(71, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(72, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(73, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(74, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(75, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(76, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(77, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(78, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(79, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(80, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(81, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(82, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(83, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(84, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(85, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(86, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(87, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(88, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(89, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(90, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(91, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(92, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(93, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(94, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(95, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(96, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2022-05-25', '2022-05-25', 'Anderson'),
(97, 'Certificados em lote', 'Itajaí', 'PROCESSADO', '2023-01-21', '2023-01-21', 'Anderson'),
(98, 'Importação de matrículas', 'Navegantes', 'CANCELADO', '2023-01-21', '2023-01-21', 'Robson'),
(99, 'Importação de setores', 'Navegantes', 'PROCESSADO', '2023-01-23', '2023-01-23', 'Robson'),
(100, 'Relatório de acessos', 'Blumenal', 'PROCESSADO', '2023-05-01', '2023-05-02', 'Gabriel'),
(102, 'Importação de cargos', 'Blumenal', 'CANCELADO', '2023-05-11', '2023-05-12', 'Gabriel'),
(103, 'importação de unidades', 'Blumenal', 'PROCESSADO', '2023-05-13', '2023-05-14', 'Gabriel'),
(104, 'Certificados em lote', 'Rio de Janeiro', 'CANCELADO', '2023-05-15', '2023-05-16', 'Victor'),
(105, 'Importação de pessoas', 'Rio de Janeiro', 'CANCELADO', '2023-05-23', '2023-05-23', 'Victor'),
(106, 'Certificados em lote', 'Blumenal', 'CANCELADO', '2023-05-24', '2023-05-25', 'Victor'),
(162, 'Importação de cargos', 'Navegantes', 'PROCESSADO', '2022-05-19', '2022-05-19', 'Gabriel'),
(165, 'Análise de requisitos', 'Blumenal', 'CANCELADO', '2024-05-07', '0000-00-00', 'Gabriel'),
(166, 'Controle de rotas', 'Navegantes', 'CANCELADO', '2024-05-07', '0000-00-00', 'Robson'),
(168, 'Controle de rotas', 'Rio de Janeiro', 'PROCESSADO', '2024-05-07', '0000-00-00', 'Robson'),
(169, 'Controle de rotas', 'Rio de Janeiro', 'CANCELADO', '2024-05-07', '2024-05-07', 'Victor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `codigo` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`codigo`, `status`) VALUES
(2, 'CANCELADO'),
(1, 'PROCESSADO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unidade`
--

CREATE TABLE `tb_unidade` (
  `codigo` int(11) NOT NULL,
  `unidade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_unidade`
--

INSERT INTO `tb_unidade` (`codigo`, `unidade`) VALUES
(1, 'Blumenal'),
(4, 'Itajaí'),
(3, 'Navegantes'),
(2, 'Rio de Janeiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `idx_pessoa` (`pessoa`);

--
-- Indexes for table `tb_processos`
--
ALTER TABLE `tb_processos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `idx_pessoa` (`pessoa`),
  ADD KEY `idx_unidade` (`unidade`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `tb_unidade`
--
ALTER TABLE `tb_unidade`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `idx_unidade` (`unidade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_processos`
--
ALTER TABLE `tb_processos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_unidade`
--
ALTER TABLE `tb_unidade`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_processos`
--
ALTER TABLE `tb_processos`
  ADD CONSTRAINT `fk_tb_processos_pessoa` FOREIGN KEY (`pessoa`) REFERENCES `tb_pessoa` (`pessoa`),
  ADD CONSTRAINT `fk_tb_processos_status` FOREIGN KEY (`status`) REFERENCES `tb_status` (`status`),
  ADD CONSTRAINT `fk_tb_processos_unidade` FOREIGN KEY (`unidade`) REFERENCES `tb_unidade` (`unidade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
