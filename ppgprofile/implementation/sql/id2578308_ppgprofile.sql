-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 16-Fev-2018 às 12:54
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2578308_ppgprofile`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `sobrenome`, `email`, `senha`, `created`, `modified`) VALUES
(1, 'Administrador', 'Master', 'admin@admin.com.br', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2017-08-21 13:09:34', '2017-08-21 13:09:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `idInstituicao` int(11) NOT NULL,
  `idOrientador` int(11) NOT NULL,
  `idCoOrientador` int(11) NOT NULL,
  `idCursoGraduacao` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `genero` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` char(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascimento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cep` char(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cursoPosGraducao` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `crGraduacao` decimal(3,1) DEFAULT NULL,
  `anoConclusaoGraduacao` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semestreIngresso` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dedicacao` int(11) NOT NULL,
  `areaConhecimento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` int(11) NOT NULL,
  `cr` decimal(3,1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `dataDefesa` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aprovacao` int(11) DEFAULT NULL,
  `nota` decimal(3,1) DEFAULT NULL,
  `coOrientador` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `idInstituicao`, `idOrientador`, `idCoOrientador`, `idCursoGraduacao`, `nome`, `sobrenome`, `genero`, `cpf`, `dataNascimento`, `nacionalidade`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cursoPosGraducao`, `crGraduacao`, `anoConclusaoGraduacao`, `semestreIngresso`, `dedicacao`, `areaConhecimento`, `titulo`, `cr`, `created`, `modified`, `dataDefesa`, `aprovacao`, `nota`, `coOrientador`) VALUES
(17, 8, 10, 0, 10, 'Osvaldo', 'Lima', 'M', '858.758.488-45', '13/12/1994', 'Brasileiro', 'Rua A', 25, 'Barra', 'Salvador', 'BA', '40000-002', 'Ciencia da Computação', 7.5, '2000', '2015', 1, 'Engenharia de Software', 1, 9.0, '2017-10-11 14:50:26', '2017-10-11 14:50:26', '20/12/2016', 1, 9.0, 'Ivan');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_defesa`
--

CREATE TABLE `avaliacao_defesa` (
  `id` int(11) NOT NULL,
  `nota` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsaEstudo`
--

CREATE TABLE `bolsaEstudo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `validade` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `idInstituicao` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conceitoMec` decimal(2,1) NOT NULL,
  `turno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campus` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anoCriacao` year(4) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `idDepartamento`, `idInstituicao`, `nome`, `conceitoMec`, `turno`, `campus`, `anoCriacao`, `created`, `modified`) VALUES
(10, 12, 8, 'Ciência da Computação', 5.0, 'V', 'Ondina', 1968, '2017-10-11 14:45:20', '2017-10-11 14:45:20'),
(11, 13, 9, 'Informatica ', 5.0, 'V', 'Gavea', 1970, '2017-10-11 14:46:00', '2017-10-11 14:46:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `defesa`
--

CREATE TABLE `defesa` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `aprovacao` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `idInstituicao` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id`, `idInstituicao`, `nome`, `created`, `modified`) VALUES
(12, 8, 'Departamento de Ciência da Computação', '2017-10-11 14:44:26', '2017-10-11 14:44:26'),
(13, 9, 'Departamento de Informatica', '2017-10-11 14:44:38', '2017-10-11 14:44:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidadeFinanciadora`
--

CREATE TABLE `entidadeFinanciadora` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`, `tipo`, `created`, `modified`) VALUES
(8, 'Universidade Federal da Bahia', 1, '2017-10-11 14:43:03', '2017-10-11 14:43:03'),
(9, 'PUC Rio', 2, '2017-10-11 14:43:33', '2017-10-11 14:43:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `idInstituicao` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `siape` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `dataAdmissao` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `idDepartamento`, `idInstituicao`, `nome`, `sobrenome`, `siape`, `email`, `senha`, `dataAdmissao`, `created`, `modified`) VALUES
(10, 12, 8, 'Eduardo', 'Almeida', '25232', 'esa@dcc.ufba.br', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '10/03/2009', '2017-10-11 14:46:58', '2017-10-11 14:46:58'),
(11, 12, 8, 'Ivan ', 'Machado', '555245', 'ivan@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '20/05/2005', '2017-10-11 14:47:37', '2017-10-11 14:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInstituicaoAluno` (`idInstituicao`),
  ADD KEY `cursoGraduacao` (`idCursoGraduacao`),
  ADD KEY `idOrientadorAluno` (`idOrientador`);

--
-- Indexes for table `avaliacao_defesa`
--
ALTER TABLE `avaliacao_defesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bolsaEstudo`
--
ALTER TABLE `bolsaEstudo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDepartamentoCurso` (`idDepartamento`),
  ADD KEY `idInstituicaoCurso` (`idInstituicao`);

--
-- Indexes for table `defesa`
--
ALTER TABLE `defesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInstituicaoDepartamento` (`idInstituicao`);

--
-- Indexes for table `entidadeFinanciadora`
--
ALTER TABLE `entidadeFinanciadora`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siape_UNIQUE` (`siape`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `idDepartamentoProfessor` (`idDepartamento`),
  ADD KEY `idInstituicaoProfessor` (`idInstituicao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `avaliacao_defesa`
--
ALTER TABLE `avaliacao_defesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bolsaEstudo`
--
ALTER TABLE `bolsaEstudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `defesa`
--
ALTER TABLE `defesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `entidadeFinanciadora`
--
ALTER TABLE `entidadeFinanciadora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `cursoGraduacao` FOREIGN KEY (`idCursoGraduacao`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `idInstituicaoAluno` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`id`),
  ADD CONSTRAINT `idOrientadorAluno` FOREIGN KEY (`idOrientador`) REFERENCES `professor` (`id`);

--
-- Limitadores para a tabela `avaliacao_defesa`
--
ALTER TABLE `avaliacao_defesa`
  ADD CONSTRAINT `avaliador` FOREIGN KEY (`id`) REFERENCES `professor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `defesa` FOREIGN KEY (`id`) REFERENCES `defesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `bolsaEstudo`
--
ALTER TABLE `bolsaEstudo`
  ADD CONSTRAINT `departamentoBolsaEstudo` FOREIGN KEY (`id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `entidadeFinanciadora` FOREIGN KEY (`id`) REFERENCES `entidadeFinanciadora` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `idDepartamentoCurso` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idInstituicaoCurso` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `defesa`
--
ALTER TABLE `defesa`
  ADD CONSTRAINT `aluno` FOREIGN KEY (`id`) REFERENCES `aluno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `idInstituicaoDepartamento` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `idDepartamentoProfessor` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idInstituicaoProfessor` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
