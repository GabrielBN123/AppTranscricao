-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 25-Jan-2021 às 04:32
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
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `formID` int(11) NOT NULL,
  `nomeCliente` varchar(60) DEFAULT NULL,
  `apresentacao` varchar(255) DEFAULT NULL,
  `felicitacoes` varchar(255) DEFAULT NULL,
  `pedidoOracao` int(120) NOT NULL,
  `pedidosLouvor` int(60) DEFAULT NULL,
  `acoesGraca` varchar(255) DEFAULT NULL,
  `testemunho` varchar(120) DEFAULT NULL,
  `carta_recomendacao` varchar(255) DEFAULT NULL,
  `apresentacaoRN` varchar(120) DEFAULT NULL,
  `avisos` varchar(120) DEFAULT NULL,
  `inscritorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `instituicaoID` int(11) NOT NULL,
  `nomeInstituicao` varchar(100) NOT NULL,
  `decricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`instituicaoID`, `nomeInstituicao`, `decricao`) VALUES
(1, 'Assembleia', 'Assembleia de Deus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `userID` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `area_atuaID` int(11) NOT NULL,
  `instituicaoID` int(11) NOT NULL,
  `foto_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(25) NOT NULL DEFAULT '123456',
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userID`, `nome_usuario`, `sobrenome_usuario`, `area_atuaID`, `instituicaoID`, `foto_usuario`, `senha_usuario`, `data_cadastro`) VALUES
(1, 'Gabriel', 'Batista', 1, 1, 'C:\\Users\\usuario\\AppData\\Local\\Temp\\php4914.tmp', '123456', '2021-01-21 21:26:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campo`
--
ALTER TABLE `campo`
  ADD PRIMARY KEY (`campoID`);

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`formID`),
  ADD KEY `inscritorID` (`inscritorID`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`instituicaoID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `area_atuaID` (`area_atuaID`),
  ADD KEY `instituicaoID` (`instituicaoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campo`
--
ALTER TABLE `campo`
  MODIFY `campoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `formID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `instituicaoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`inscritorID`) REFERENCES `usuarios` (`userID`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`area_atuaID`) REFERENCES `campo` (`campoID`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`instituicaoID`) REFERENCES `instituicao` (`instituicaoID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
