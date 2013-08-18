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
-- Table structure for table `test_drive`
--

DROP TABLE IF EXISTS `test_drive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_drive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `city` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_drive`
--

LOCK TABLES `test_drive` WRITE;
/*!40000 ALTER TABLE `test_drive` DISABLE KEYS */;
INSERT INTO `test_drive` VALUES (3,'2013-07-03 11:38:06','Самая','Няшка','Иванович',23,'Москва','00:00:00','00:00:00','89160667178','og2@yandex.ru',0),(4,'2013-07-03 11:40:02','Иванов','совсекретно','Семенович',21,'Москва','00:00:00','00:00:00','89160667178','dsffs@sfsdfds.ru',0),(5,'2013-07-03 11:43:59','Померанцев','Павел','Вячеславович',29,'Москва','00:00:00','00:00:00','8-926-371-25-48','pavelp@artektiv.ru',0),(6,'0000-00-00 00:00:00','test','ssss','aaaa',99,'NNNN','10:00:00','13:30:00','36262626262','sbaba@saa.gg',0),(7,'0000-00-00 00:00:00','test','ssss','aaaa',99,'NNNN','10:00:00','13:30:00','36262626262','sbaba@saa.gg',0),(8,'0000-00-00 00:00:00','test','ssss','aaaa',99,'NNNN','10:00:00','13:30:00','36262626262','sbaba@saa.gg',0),(9,'2013-08-18 20:42:58','asga','ababa','sssss',11,'ssss','11:30:00','17:00:00','22222222222','adga@sns.gg',0);
/*!40000 ALTER TABLE `test_drive` ENABLE KEYS */;
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
