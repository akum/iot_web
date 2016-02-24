-- MySQL dump 10.16  Distrib 10.1.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: iot
-- ------------------------------------------------------
-- Server version	10.1.11-MariaDB-log

--
-- Table structure for table `tempLog`
--

DROP TABLE IF EXISTS `tempLog`;
CREATE TABLE `tempLog` (
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Chambre` decimal(5,2) NOT NULL,
  `Chambre2` decimal(5,2) NOT NULL,
  `SalleBain` decimal(5,2) NOT NULL,
  `Salon` decimal(5,2) NOT NULL,
  `HChambre` decimal(5,2) NOT NULL,
  `HChambre2` decimal(5,2) NOT NULL,
  `HSalleBain` decimal(5,2) NOT NULL,
  `HSalon` decimal(5,2) NOT NULL,
  `Exterieur` decimal(5,2) NOT NULL,
  PRIMARY KEY (`timeStamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dump completed on 2016-02-22 16:45:22
