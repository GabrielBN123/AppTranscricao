-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02-Mar-2021 às 17:02
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
(3, 'pulpito', 'Púlpito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `formID` int(11) NOT NULL,
  `apresentacaoVisitante` longtext,
  `aviso` longtext,
  `cartaApresentacao` longtext,
  `acaoGraca` longtext,
  `pedidoOracao` longtext,
  `apresentacaoRN` longtext,
  `inscritorID` int(11) NOT NULL,
  `instituicaoID` int(11) NOT NULL,
  `transcricao_ok` tinyint(1) DEFAULT NULL,
  `alterado_por_usuario` int(11) DEFAULT NULL,
  `felicitacoes` longtext,
  `pedidoLouvor` longtext,
  `pedidoComunhao` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`formID`, `apresentacaoVisitante`, `aviso`, `cartaApresentacao`, `acaoGraca`, `pedidoOracao`, `apresentacaoRN`, `inscritorID`, `instituicaoID`, `transcricao_ok`, `alterado_por_usuario`, `felicitacoes`, `pedidoLouvor`, `pedidoComunhao`) VALUES
(22, 'teste 1232113', '3513513,15313', '354513,51350351x1za0cax51 a5ca cascacascsacz', 'ascaascascsc zc assacasacc a ', 'asca zx das a ascscaxca', 'sadcasc ac scc', 20, 1, 1, 21, NULL, NULL, NULL),
(23, '654655535113135684', '3513513,15313', '354513,51350351x1za0cax51 a5ca cascacascsacz', 'ascaascascsc zc assacasacc a ', 'asca zx das a ascscaxca', 'sadcasc ac scc', 20, 1, 1, 21, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `instituicaoID` int(11) NOT NULL,
  `nome_instituicao` varchar(100) NOT NULL,
  `decricao_instituicao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`instituicaoID`, `nome_instituicao`, `decricao_instituicao`) VALUES
(1, 'Assembleia', 'Assembleia de Deus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `userID` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `nick_usuario` varchar(100) DEFAULT NULL,
  `area_atuaID` int(11) NOT NULL,
  `instituicaoID` int(11) NOT NULL,
  `foto_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(25) NOT NULL DEFAULT '123456',
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userID`, `nome_usuario`, `nick_usuario`, `area_atuaID`, `instituicaoID`, `foto_usuario`, `senha_usuario`, `data_cadastro`, `email_usuario`) VALUES
(20, 'Recepção', NULL, 1, 1, 'eac8462c0adafcfca1e7c334c5f818f3.png', 'recepcao', '2021-02-13 21:38:37', 'recepcao@apptranscricao.com'),
(21, 'Transcricao', NULL, 2, 1, 'fa09fdd2919ae121c0ea117828b03934.png', 'transcricao', '2021-02-13 21:40:23', 'transcricao@apptranscricao.com'),
(22, 'Pulpito', NULL, 3, 1, 'ed8db1af5caa3fd1a4e4283d3e244d77.png', 'pulpito', '2021-02-13 21:41:06', 'pulpito@apptranscricao.com');

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
  ADD KEY `inscritorID` (`inscritorID`),
  ADD KEY `instituicaoID` (`instituicaoID`),
  ADD KEY `alterado_por_usuario` (`alterado_por_usuario`);

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
  MODIFY `campoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `formID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `instituicaoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`inscritorID`) REFERENCES `usuarios` (`userID`),
  ADD CONSTRAINT `formulario_ibfk_2` FOREIGN KEY (`alterado_por_usuario`) REFERENCES `usuarios` (`userID`),
  ADD CONSTRAINT `instituiicaoID_ibfk_1` FOREIGN KEY (`instituicaoID`) REFERENCES `instituicao` (`instituicaoID`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`area_atuaID`) REFERENCES `campo` (`campoID`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`instituicaoID`) REFERENCES `instituicao` (`instituicaoID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
