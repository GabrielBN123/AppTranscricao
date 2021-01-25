-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16-Jan-2021 às 19:43
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transc_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campo`
--

CREATE TABLE `campo` (
  `campoID` int(10) NOT NULL,
  `nome_campo` varchar(45) NOT NULL,
  `descricao_campo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campo`
--

INSERT INTO `campo` (`campoID`, `nome_campo`, `descricao_campo`) VALUES
(1, 'recepcao', 'Recepção'),
(2, 'trancricao', 'Transcrição'),
(3, 'pulpito', 'Púlpito'),
(4, 'teste', 'Teste Inserção'),
(5, 'teste', 'Teste Inserção'),
(6, 'teste', 'Teste Inserção'),
(7, 'teste', 'Teste Inserção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `userID` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `area_atuaID` int(11) DEFAULT NULL,
  `foto_usuario` longblob,
  `nome_foto` varchar(25) DEFAULT NULL,
  `tamanho_foto` varchar(25) DEFAULT NULL,
  `tipo_foto` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userID`, `nome_usuario`, `area_atuaID`, `foto_usuario`, `nome_foto`, `tamanho_foto`, `tipo_foto`) VALUES
(1, 'Gabriel', 1, 0x433a5c55736572735c7573756172696f5c417070446174615c4c6f63616c5c54656d705c706870343931342e746d70, '20548222.jpg', '20893', 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campo`
--
ALTER TABLE `campo`
  ADD PRIMARY KEY (`campoID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `area_atuaID` (`area_atuaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campo`
--
ALTER TABLE `campo`
  MODIFY `campoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`area_atuaID`) REFERENCES `campo` (`campoID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
