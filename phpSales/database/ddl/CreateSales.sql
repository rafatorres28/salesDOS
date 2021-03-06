-- MySQL Script generated by MySQL Workbench
-- Sun Apr 18 12:49:26 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema salesdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema salesdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS salesdb DEFAULT CHARACTER SET utf8 ;
USE salesdb ;

-- -----------------------------------------------------
-- Table salesdb.Provider
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Provider (
  idProvider INT NOT NULL AUTO_INCREMENT,
  phoneNumber VARCHAR(25) NOT NULL,
  providerName VARCHAR(45) NOT NULL,
  PRIMARY KEY (idProvider))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Enterprise
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Enterprise (
  idEnterprise INT NOT NULL AUTO_INCREMENT,
  enterpriseName VARCHAR(45) NOT NULL,
  address VARCHAR(95) NOT NULL,
  phoneNumber VARCHAR(25) NOT NULL,
  PRIMARY KEY (idEnterprise))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.productType
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.productType (
  idproductType INT NOT NULL AUTO_INCREMENT,
  nameProductType VARCHAR(45) NOT NULL,
  PRIMARY KEY (idproductType))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Product
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Product (
  idProduct INT NOT NULL AUTO_INCREMENT,
  nameProduct VARCHAR(45) NOT NULL,
  productState SMALLINT(1) NOT NULL,
  Provider_idProvider INT NOT NULL,
  Enterprise_idEnterprise INT NOT NULL,
  productType_idproductType INT NOT NULL,
  PRIMARY KEY (idProduct, Provider_idProvider))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Tax
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Tax (
  idTax INT NOT NULL AUTO_INCREMENT,
  taxName VARCHAR(45) NOT NULL,
  PRIMARY KEY (idTax))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Tax_Product
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Tax_Product (
  idTax_Product INT NOT NULL AUTO_INCREMENT,
  dateInit DATE NOT NULL,
  Product_idProduct INT NOT NULL,
  Tax_idTax INT NOT NULL,
  PRIMARY KEY (idTax_Product))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Role
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Role (
  idRole INT NOT NULL AUTO_INCREMENT,
  roleName VARCHAR(15) NOT NULL,
  PRIMARY KEY (idRole))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Person
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Person (
  idPerson INT NOT NULL AUTO_INCREMENT,
  documentPerson VARCHAR(25) NOT NULL,
  Role_idRole INT NOT NULL,
  PRIMARY KEY (idPerson))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Ticket
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Ticket (
  idTicket INT NOT NULL AUTO_INCREMENT,
  ticketDate DATE NOT NULL,
  Person_idPerson INT NOT NULL,
  PRIMARY KEY (idTicket, Person_idPerson))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table salesdb.Ticket_Tax_Product
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS salesdb.Ticket_Tax_Product (
  idTicket_Tax_Product INT NOT NULL AUTO_INCREMENT,
  dateTicketTaxProductDevolution DATE NOT NULL,
  Tax_Product_idTax_Product INT NOT NULL,
  Ticket_idTicket INT NOT NULL,
  PRIMARY KEY (idTicket_Tax_Product))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
