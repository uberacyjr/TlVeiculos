CREATE DATABASE IF NOT exists `tlveiculos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `tlveiculos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `tlveiculos` ;

-- -----------------------------------------------------
-- Table `tlveiculos`.`Fuels`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Fuels` (
  `idFuels` INT NOT NULL AUTO_INCREMENT,
  `descCombustivel` VARCHAR(70) NOT NULL,
  PRIMARY KEY (`idFuels`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tlveiculos`.`Exchange`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Exchange` (
  `idExchange` INT NOT NULL AUTO_INCREMENT,
  `descMarcha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idExchange`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tlveiculos`.`Items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Items` (
  `idItems` INT NOT NULL AUTO_INCREMENT,
  `airBag` BIT NULL DEFAULT 0,
  `alarme` BIT NULL DEFAULT 0,
  `arCondicionado` BIT NULL DEFAULT 0,
  `bancoMotoristaAjusteAltura` BIT NULL DEFAULT 0,
  `bancoCouro` BIT NULL DEFAULT 0,
  `capotaMaritima` BIT NULL DEFAULT 0,
  `cdPlayer` BIT NULL DEFAULT 0,
  `computadorBordo` BIT NULL DEFAULT 0,
  `controleAutomaticoVelocidade` BIT NULL DEFAULT 0,
  `controleTracao` BIT NULL DEFAULT 0,
  `desembacadorTraseiro` BIT NULL DEFAULT 0,
  `direcaoHidraulica` BIT NULL DEFAULT 0,
  `dvdPlayer` BIT NULL DEFAULT 0,
  `encostoCabecaTraseiro` BIT NULL DEFAULT 0,
  `farolXenonio` BIT NULL DEFAULT 0,
  `freioAbs` BIT NULL DEFAULT 0,
  `gps` BIT NULL DEFAULT 0,
  `limpadorTraseiro` BIT NULL DEFAULT 0,
  `protetorCacamba` BIT NULL DEFAULT 0,
  `radio` BIT NULL DEFAULT 0,
  `retrovisorFotocromico` BIT NULL DEFAULT 0,
  `retrovisorEletrico` BIT NULL DEFAULT 0,
  `rodaLigaLeve` BIT NULL DEFAULT 0,
  `sensorChuva` BIT NULL DEFAULT 0,
  `sensorEstacionamento` BIT NULL DEFAULT 0,
  `tetoSolar` BIT NULL DEFAULT 0,
  `tracao4x4` BIT NULL DEFAULT 0,
  `travasEletricas` BIT NULL DEFAULT 0,
  `vidrosEletricos` BIT NULL DEFAULT 0,
  `voltanteRegulagemAltura` BIT NULL DEFAULT 0,
  PRIMARY KEY (`idItems`))
ENGINE = InnoDB
COMMENT = 'Tabela que possui os itens opcionais do carro. Sendo o 0 (ze /* comment truncated */ /*ro) que o carro não tem o item e o 1 (um) que o carro possui o item.*/';


-- -----------------------------------------------------
-- Table `tlveiculos`.`Colors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Colors` (
  `idColors` INT NOT NULL AUTO_INCREMENT,
  `descCor` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idColors`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tlveiculos`.`Brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Brands` (
  `idBrands` INT NOT NULL AUTO_INCREMENT,
  `descMarcas` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idBrands`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tlveiculos`.`Models`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Models` (
  `idModels` INT NOT NULL AUTO_INCREMENT,
  `idBrands` INT NOT NULL,
  `descModelos` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idModels`, `idBrands`),
  CONSTRAINT `fk_Models_Brands`
    FOREIGN KEY (`idBrands`)
    REFERENCES `tlveiculos`.`Brands` (`idBrands`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Models_Brands_idx` ON `tlveiculos`.`Models` (`idBrands` ASC);


-- -----------------------------------------------------
-- Table `tlveiculos`.`Cars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Cars` (
  `idCars` BIGINT NOT NULL AUTO_INCREMENT,
  `idFuels` INT NOT NULL,
  `idExchange` INT NOT NULL,
  `idItems` INT NOT NULL,
  `idColors` INT NOT NULL,
  `idModels` INT NOT NULL,
  `placaCarro` VARCHAR(7) NOT NULL,
  `anoModelo` YEAR NOT NULL,
  `precoCarro` DECIMAL(10,2) NOT NULL,
  `quilometragemCarro` INT NOT NULL,
  PRIMARY KEY (`idCars`, `idFuels`, `idExchange`, `idItems`, `idColors`, `idModels`),
  CONSTRAINT `fk_Cars_Fuels1`
    FOREIGN KEY (`idFuels`)
    REFERENCES `tlveiculos`.`Fuels` (`idFuels`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cars_Exchange1`
    FOREIGN KEY (`idExchange`)
    REFERENCES `tlveiculos`.`Exchange` (`idExchange`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cars_Items1`
    FOREIGN KEY (`idItems`)
    REFERENCES `tlveiculos`.`Items` (`idItems`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cars_Colors1`
    FOREIGN KEY (`idColors`)
    REFERENCES `tlveiculos`.`Colors` (`idColors`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cars_Models1`
    FOREIGN KEY (`idModels`)
    REFERENCES `tlveiculos`.`Models` (`idModels`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Cars_Fuels1_idx` ON `tlveiculos`.`Cars` (`idFuels` ASC);

CREATE INDEX `fk_Cars_Exchange1_idx` ON `tlveiculos`.`Cars` (`idExchange` ASC);

CREATE INDEX `fk_Cars_Items1_idx` ON `tlveiculos`.`Cars` (`idItems` ASC);

CREATE INDEX `fk_Cars_Colors1_idx` ON `tlveiculos`.`Cars` (`idColors` ASC);

CREATE INDEX `fk_Cars_Models1_idx` ON `tlveiculos`.`Cars` (`idModels` ASC);


-- -----------------------------------------------------
-- Table `tlveiculos`.`Images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tlveiculos`.`Images` (
  `idImages` BIGINT NOT NULL AUTO_INCREMENT,
  `idCars` BIGINT NOT NULL,
  `pathImagem` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`idImages`, `idCars`),
  CONSTRAINT `fk_Images_Cars1`
    FOREIGN KEY (`idCars`)
    REFERENCES `tlveiculos`.`Cars` (`idCars`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Images_Cars1_idx` ON `tlveiculos`.`Images` (`idCars` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `tlveiculos`.`Fuels`
-- -----------------------------------------------------
START TRANSACTION;
USE `tlveiculos`;
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (1, 'Gasolina');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (2, 'Álcool');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (3, 'Diesel');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (4, 'Gás natural');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (5, 'Gasolina e álcool');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (6, 'Gasolina e gás natural');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (7, 'Álcool e gás natural');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (8, 'Gasolina, álcool e gás natural');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (9, 'Gasolina, álcool, gás natural e benzina');
INSERT INTO `tlveiculos`.`Fuels` (`idFuels`, `descCombustivel`) VALUES (10, 'Gasolina e elétrico');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tlveiculos`.`Exchange`
-- -----------------------------------------------------
START TRANSACTION;
USE `tlveiculos`;
INSERT INTO `tlveiculos`.`Exchange` (`idExchange`, `descMarcha`) VALUES (1, 'Automática');
INSERT INTO `tlveiculos`.`Exchange` (`idExchange`, `descMarcha`) VALUES (2, 'Automática Sequencial');
INSERT INTO `tlveiculos`.`Exchange` (`idExchange`, `descMarcha`) VALUES (3, 'CVT');
INSERT INTO `tlveiculos`.`Exchange` (`idExchange`, `descMarcha`) VALUES (4, 'Manual');
INSERT INTO `tlveiculos`.`Exchange` (`idExchange`, `descMarcha`) VALUES (5, 'Semi automática');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tlveiculos`.`Colors`
-- -----------------------------------------------------
START TRANSACTION;
USE `tlveiculos`;
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (1, 'Amarelo');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (2, 'Azul');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (3, 'Bege');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (4, 'Branco');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (5, 'Bronze');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (6, 'Cinza');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (7, 'Dourado');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (8, 'Indefinida');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (9, 'Laranja');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (10, 'Marrom');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (11, 'Prata');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (12, 'Preto');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (13, 'Rosa');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (14, 'Roxo');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (15, 'Verde');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (16, 'Vermelho');
INSERT INTO `tlveiculos`.`Colors` (`idColors`, `descCor`) VALUES (17, 'Vinho');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tlveiculos`.`Brands`
-- -----------------------------------------------------
START TRANSACTION;
USE `tlveiculos`;
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (1, 'CHEVROLET');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (2, 'FIAT');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (3, 'FORD');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (4, 'HONDA');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (5, 'HYUNDAI');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (6, 'MITSUBISHI');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (7, 'PEUGEOT');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (8, 'RENAULT');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (9, 'TOYOTA');
INSERT INTO `tlveiculos`.`Brands` (`idBrands`, `descMarcas`) VALUES (10, 'VOLKSWAGEN');

COMMIT;

