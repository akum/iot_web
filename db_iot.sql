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
  `Chambre` float NOT NULL,
  `Chambre2` float NOT NULL,
  `SalleBain` float NOT NULL,
  `Salon` float NOT NULL,
  PRIMARY KEY (`timeStamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dump completed on 2016-02-22 14:00:53
