-- -----------------------------------------------------
-- Schema ppgprofile
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ppgprofile` ;
USE `ppgprofile` ;

CREATE TABLE `usuario` (
	`email` varchar NOT NULL,
	`senha` varchar NOT NULL,
	PRIMARY KEY (`email`)
);

CREATE TABLE `administrador` (
	`nome` varchar NOT NULL,
	`sobrenome` varchar NOT NULL
);

CREATE TABLE `professor` (
	`nome` varchar NOT NULL,
	`sobrenome` varchar NOT NULL,
	`idProfessor` varchar NOT NULL AUTO_INCREMENT,
	`siape` INT NOT NULL AUTO_INCREMENT,
	`dataAdmissao` DATETIME NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idProfessor`)
);

CREATE TABLE `Aluno` (
	`cpf` INT NOT NULL,
	`nomeAluno` varchar(10) NOT NULL,
	`sbnomeAluno` varchar(10) NOT NULL,
	`nacionalidade` varchar(10) NOT NULL,
	`generoAluno` varchar(10) NOT NULL,
	`areaConhecimento` varchar(20) NOT NULL,
	`semestreIngresso` DATE NOT NULL,
	`idAluno` INT NOT NULL AUTO_INCREMENT,
	`dataNasc` DATETIME NOT NULL,
	`ConclGraducao` DATETIME NOT NULL,
	`crGrad` BOOLEAN NOT NULL,
	PRIMARY KEY (`idAluno`)
);

CREATE TABLE `Instituicao` (
	`idInstituicao` INT NOT NULL AUTO_INCREMENT,
	`tipoInstituicao` varchar(20) NOT NULL,
	`nomeInstituicao` varchar(20) NOT NULL,
	PRIMARY KEY (`idInstituicao`)
);

CREATE TABLE `Departamento` (
	`idDept` INT NOT NULL AUTO_INCREMENT,
	`nomeDept` varchar(20) NOT NULL,
	PRIMARY KEY (`idDept`)
);

CREATE TABLE `Curso` (
	`idCurso` INT NOT NULL AUTO_INCREMENT,
	`turnoCurso` varchar(8) NOT NULL AUTO_INCREMENT,
	`nomeCurso` varchar(20) NOT NULL,
	`conceitoMec` INT(1) NOT NULL,
	`campus` varchar(20) NOT NULL,
	`turmaCurso` BOOLEAN(5) NOT NULL,
	PRIMARY KEY (`idCurso`)
);

CREATE TABLE `Defesa` (
	`idDefesa` INT NOT NULL AUTO_INCREMENT,
	`aprovacao` BINARY NOT NULL,
	`dataDefesa` BINARY NOT NULL,
	PRIMARY KEY (`idDefesa`)
);

CREATE TABLE `Avaliacao_Defesa` (
	`idAvalDefesa` INT NOT NULL AUTO_INCREMENT,
	`nota` BOOLEAN NOT NULL,
	PRIMARY KEY (`idAvalDefesa`)
);

ALTER TABLE `administrador` ADD CONSTRAINT `administrador_fk0` FOREIGN KEY (`nome`) REFERENCES `usuario`(`email`);

ALTER TABLE `professor` ADD CONSTRAINT `professor_fk0` FOREIGN KEY (`idProfessor`) REFERENCES `usuario`(`email`);

ALTER TABLE `Aluno` ADD CONSTRAINT `Aluno_fk0` FOREIGN KEY (`nomeAluno`) REFERENCES `Curso`(`turmaCurso`);

ALTER TABLE `Departamento` ADD CONSTRAINT `Departamento_fk0` FOREIGN KEY (`idDept`) REFERENCES `Instituicao`(`idInstituicao`);

ALTER TABLE `Curso` ADD CONSTRAINT `Curso_fk0` FOREIGN KEY (`idCurso`) REFERENCES `Departamento`(`idDept`);

ALTER TABLE `Avaliacao_Defesa` ADD CONSTRAINT `Avaliacao_Defesa_fk0` FOREIGN KEY (`idAvalDefesa`) REFERENCES `Defesa`(`idDefesa`);
