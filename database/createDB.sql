CREATE DATABASE IF NOT EXISTS `resa_salle`; -- CREATION DE LA DATABASE

USE `resa_salle`; -- PRECISER QUELLE DB ON VA UTILISER

CREATE TABLE `reservations` ( -- CREATION DE LA TABLE 
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `Date inscription` date NOT NULL,
    PRIMARY KEY(`id`) 
);

