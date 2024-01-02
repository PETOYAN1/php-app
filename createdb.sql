 -- Create DB

DROP DATABASE IF EXISTS `tutorial`;

CREATE DATABASE `tutorial`;

 -- create table

CREATE TABLE `tutorial`.`crud` (`ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL , 
    `surname` VARCHAR(50) NOT NULL ,
    `email` VARCHAR(50) NOT NULL ,
    `gender` VARCHAR(50) NOT NULL , 
    `password` VARCHAR(50) NOT NULL , 
    `reg_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) 
    ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;