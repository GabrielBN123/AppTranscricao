-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2021 às 00:23
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `transc_bd`
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
  `apresentacaoVisitante` longtext DEFAULT NULL,
  `aviso` longtext DEFAULT NULL,
  `cartaApresentacao` longtext DEFAULT NULL,
  `acaoGraca` longtext DEFAULT NULL,
  `pedidoOracao` longtext DEFAULT NULL,
  `apresentacaoRN` longtext DEFAULT NULL,
  `inscritorID` int(11) NOT NULL,
  `instituicaoID` int(11) NOT NULL,
  `transcricao_ok` tinyint(1) DEFAULT NULL,
  `alterado_por_usuario` int(11) DEFAULT NULL,
  `felicitacoes` longtext DEFAULT NULL,
  `pedidoLouvor` longtext DEFAULT NULL,
  `pedidoComunhao` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `campo`
--
ALTER TABLE `campo`
  ADD PRIMARY KEY (`campoID`);

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`formID`),
  ADD KEY `inscritorID` (`inscritorID`),
  ADD KEY `instituicaoID` (`instituicaoID`),
  ADD KEY `alterado_por_usuario` (`alterado_por_usuario`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`instituicaoID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `area_atuaID` (`area_atuaID`),
  ADD KEY `instituicaoID` (`instituicaoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `campo`
--
ALTER TABLE `campo`
  MODIFY `campoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `formID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `instituicaoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
