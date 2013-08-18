CREATE DATABASE  IF NOT EXISTS `luxgen_dealer` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `luxgen_dealer`;
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: luxgen_dealer
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gallery_image`
--

DROP TABLE IF EXISTS `gallery_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL DEFAULT '',
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_image`
--

LOCK TABLES `gallery_image` WRITE;
/*!40000 ALTER TABLE `gallery_image` DISABLE KEYS */;
INSERT INTO `gallery_image` VALUES (1,'04_copy(1363013042_4870).jpg',2,'LUXGEN 7 SUV','',1),(2,'20121011184757202.jpg',2,'LUXGEN 7 SUV','',2),(3,'20121011184729397.jpg',2,'LUXGEN 7 SUV','',3),(4,'20121011184659594.jpg',2,'LUXGEN 7 SUV','',4),(5,'20121011184617883.jpg',2,'LUXGEN 7 SUV','',5),(6,'20121011183618561.jpg',2,'LUXGEN 7 SUV','',6),(7,'20121011183643132.jpg',2,'LUXGEN 7 SUV','',7),(8,'20121011183228348.jpg',2,'LUXGEN 7 SUV','',8),(9,'01.jpg',2,'LUXGEN 7 SUV','',9),(10,'02.jpg',2,'LUXGEN 7 SUV','',10),(11,'03.jpg',2,'LUXGEN 7 SUV','',11),(12,'04.jpg',2,'LUXGEN 7 SUV','',12),(13,'05.jpg',2,'LUXGEN 7 SUV','',13),(14,'suv_01.jpg',2,'LUXGEN 7 SUV','',14),(15,'suv_02.jpg',2,'LUXGEN 7 SUV','',15),(16,'suv_03.jpg',2,'LUXGEN 7 SUV','',16),(17,'suv_04.jpg',2,'LUXGEN 7 SUV','',17),(18,'suv_05.jpg',2,'LUXGEN 7 SUV','',18),(19,'suv_06.jpg',2,'LUXGEN 7 SUV','',19),(20,'suv_07.jpg',2,'LUXGEN 7 SUV','',20),(21,'suv_08.jpg',2,'LUXGEN 7 SUV','',21),(22,'suv_09.jpg',2,'LUXGEN 7 SUV','',22),(23,'suv_10.jpg',2,'LUXGEN 7 SUV','',23),(24,'suv_11.jpg',2,'LUXGEN 7 SUV','',24),(25,'suv_12.jpg',2,'LUXGEN 7 SUV','',25);
/*!40000 ALTER TABLE `gallery_image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-08-18 20:53:06
