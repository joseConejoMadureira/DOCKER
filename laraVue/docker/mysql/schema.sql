CREATE DATABASE laravel;

USE laravel;

CREATE TABLE `laravel`.`log` (
  	`id` bigint NOT NULL AUTO_INCREMENT,
  	`description` varchar(100) DEFAULT NULL,
  	PRIMARY KEY (`id`)
	);
