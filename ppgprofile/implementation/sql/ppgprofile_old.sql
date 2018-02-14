-- MySQL Script generated by MySQL Workbench
-- 08/13/17 00:47:59
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sakila
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ppgprofile
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ppgprofile
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ppgprofile` ;
USE `ppgprofile` ;

-- -----------------------------------------------------
-- Table `ppgprofile`.`instituicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`instituicao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `tipo` INT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`departamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idInstituicao` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idInstituicaoDepartamento`
    FOREIGN KEY (`idInstituicao`)
    REFERENCES `ppgprofile`.`instituicao` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`curso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idDepartamento` INT NOT NULL,
  `idInstituicao` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `conceitoMec` DECIMAL(2,1) NOT NULL,
  `turno` VARCHAR(45) NOT NULL,
  `campus` VARCHAR(45) NOT NULL,
  `anoCriacao` YEAR NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idDepartamentoCurso`
    FOREIGN KEY (`idDepartamento`)
    REFERENCES `ppgprofile`.`departamento` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idInstituicaoCurso`
    FOREIGN KEY (`idInstituicao`)
    REFERENCES `ppgprofile`.`instituicao` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`professor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idDepartamento` INT NOT NULL,
  `idInstituicao` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `siape` CHAR(7) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(400) NOT NULL,
  `dataAdmissao` VARCHAR(10) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `siape_UNIQUE` (`siape` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `idDepartamentoProfessor`
    FOREIGN KEY (`idDepartamento`)
    REFERENCES `ppgprofile`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idInstituicaoProfessor`
    FOREIGN KEY (`idInstituicao`)
    REFERENCES `ppgprofile`.`instituicao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`administrador` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(400) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`entidadeFinanciadora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`entidadeFinanciadora` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`bolsaEstudo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`bolsaEstudo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `validade` DATE NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `departamentoBolsaEstudo`
    FOREIGN KEY (`id`)
    REFERENCES `ppgprofile`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `entidadeFinanciadora`
    FOREIGN KEY (`id`)
    REFERENCES `ppgprofile`.`entidadeFinanciadora` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idInstituicao` INT NOT NULL,
  `idOrientador` INT NOT NULL,
  `idCoOrientador` INT NOT NULL,
  `idCursoGraduacao` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `genero` CHAR(1) NOT NULL,
  `cpf` CHAR(14) NOT NULL,
  `dataNascimento` VARCHAR(10) NOT NULL,
  `nacionalidade` VARCHAR(45) NOT NULL,
  `logradouro` VARCHAR(255) NULL,
  `numero` INT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `cep` CHAR(9) NOT NULL,
  `cursoPosGraducao` VARCHAR(150) NOT NULL,
  `crGraduacao` DECIMAL(3,1) NOT NULL,
  `anoConclusaoGraduacao` VARCHAR(10) NOT NULL,
  `semestreIngresso` VARCHAR(10) NOT NULL,
  `dedicacao` INT NOT NULL,
  `areaConhecimento` VARCHAR(255) NOT NULL,
  `titulo` INT NOT NULL,
  `cr` DECIMAL(3,1) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idInstituicaoAluno`
    FOREIGN KEY (`idInstituicao`)
    REFERENCES `ppgprofile`.`instituicao` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `idOrientadorAluno`
    FOREIGN KEY (`idOrientador`)
    REFERENCES `ppgprofile`.`professor` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
    CONSTRAINT `idCoOrientadorAluno`
    FOREIGN KEY (`idCoOrientador`)
    REFERENCES `ppgprofile`.`professor` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `cursoGraduacao`
    FOREIGN KEY (`idCursoGraduacao`)
    REFERENCES `ppgprofile`.`curso` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`defesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`defesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `aprovacao` INT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `aluno`
    FOREIGN KEY (`id`)
    REFERENCES `ppgprofile`.`aluno` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ppgprofile`.`avaliacao_defesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ppgprofile`.`avaliacao_defesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nota` DOUBLE NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `defesa`
    FOREIGN KEY (`id`)
    REFERENCES `ppgprofile`.`defesa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `avaliador`
    FOREIGN KEY (`id`)
    REFERENCES `ppgprofile`.`professor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


ALTER TABLE aluno ADD dataDefesa varchar(10);

ALTER TABLE aluno ADD aprovacao int;

ALTER TABLE aluno ADD nota DECIMAL(2,1);

ALTER TABLE aluno ADD coOrientador varchar(255);