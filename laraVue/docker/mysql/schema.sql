CREATE DATABASE laravel;

USE laravel;

CREATE TABLE `laravel`.`log` (
  	`ID` bigint NOT NULL AUTO_INCREMENT,
  	`DESCRIPTION` varchar(100) DEFAULT NULL,
  	PRIMARY KEY (`ID`)
	);
