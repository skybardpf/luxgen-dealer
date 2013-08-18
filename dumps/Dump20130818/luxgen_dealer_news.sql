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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT 'Название новости',
  `text` text NOT NULL COMMENT 'Текст новости',
  `image` varchar(255) NOT NULL COMMENT 'Имя файла картинки',
  `created` datetime NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'bool',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (4,'Участие компании LUXGEN во Вьетнамской автовыставке-2012','<p>\r\n	&nbsp;</p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	При маневре на узкой улице или на парковке система Eagle View+ выводит на экран бортового компьютера изображение объектов, находящихся в радиусе 2 метров от автомобиля. Используя панель контроля THINK+, при необходимости водитель может вывести полноразмерное изображение, подаваемое любой из четырех камер наблюдения системы. Помимо этого образы с камер заднего вида способны демонстрироваться с динамическим наложением вспомогательной парковочной разметки.</p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	<img alt=\"\" height=\"400\" src=\"http://www.luxgen-motor.com.tw/UpLoad/Viet-A.jpg\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px; vertical-align: bottom;\" width=\"600\" /></p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	При выезде автомобиля на узкую улицу или при выполнении параллельной парковки система Eagle View+ способна в режиме реального времени выводить на дисплей изображения с камер, охватывающих территорию радиусом 2 м. Новейшая система автоматического распознавания объектов способна самостоятельно определять расположение препятствий, находящихся в непосредственной близости от автомобиля и отображать их на экране. При одновременном появлении двух и более препятствий система автоматически переходит в режим кругового обзора, чтобы водитель имел наилучшее представление об окружении автомобиля.</p>\r\n','20121009105509253.jpg','2012-09-28 00:00:00',1,0),(5,'LUXGEN объявляет об открытии представительства в Султанате Оман','<p>\r\n	&nbsp;</p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	При маневре на узкой улице или на парковке система Eagle View+ выводит на экран бортового компьютера изображение объектов, находящихся в радиусе 2 метров от автомобиля. Используя панель контроля THINK+, при необходимости водитель может вывести полноразмерное изображение, подаваемое любой из четырех камер наблюдения системы. Помимо этого образы с камер заднего вида способны демонстрироваться с динамическим наложением вспомогательной парковочной разметки.</p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	<img alt=\"\" height=\"400\" src=\"http://www.luxgen-motor.com.tw/UpLoad/Viet-A.jpg\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px; vertical-align: bottom;\" width=\"600\" /></p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	При выезде автомобиля на узкую улицу или при выполнении параллельной парковки система Eagle View+ способна в режиме реального времени выводить на дисплей изображения с камер, охватывающих территорию радиусом 2 м. Новейшая система автоматического распознавания объектов способна самостоятельно определять расположение препятствий, находящихся в непосредственной близости от автомобиля и отображать их на экране. При одновременном появлении двух и более препятствий система автоматически переходит в режим кругового обзора, чтобы водитель имел наилучшее представление об окружении автомобиля.</p>\r\n','20121009105421860.jpg','2012-05-20 00:00:00',1,0),(6,'Участие компании LUXGEN во Вьетнамской автовыставке-2012 ','<p>\r\n	&nbsp;</p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	При маневре на узкой улице или на парковке система Eagle View+ выводит на экран бортового компьютера изображение объектов, находящихся в радиусе 2 метров от автомобиля. Используя панель контроля THINK+, при необходимости водитель может вывести полноразмерное изображение, подаваемое любой из четырех камер наблюдения системы. Помимо этого образы с камер заднего вида способны демонстрироваться с динамическим наложением вспомогательной парковочной разметки.</p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	<img alt=\"\" height=\"400\" src=\"http://www.luxgen-motor.com.tw/UpLoad/Viet-A.jpg\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px; vertical-align: bottom;\" width=\"600\" /></p>\r\n<p style=\"border: 0px none; font-size: 13px; margin: 0px; outline: none 0px; padding: 0px 0px 15px; vertical-align: baseline; letter-spacing: 1px; color: rgb(0, 0, 0); font-family: \'Lucida Sans Unicode\', \'Lucida Grande\', Arial, sans-serif; line-height: 23.390625px; background-color: rgb(228, 228, 228);\">\r\n	При выезде автомобиля на узкую улицу или при выполнении параллельной парковки система Eagle View+ способна в режиме реального времени выводить на дисплей изображения с камер, охватывающих территорию радиусом 2 м. Новейшая система автоматического распознавания объектов способна самостоятельно определять расположение препятствий, находящихся в непосредственной близости от автомобиля и отображать их на экране. При одновременном появлении двух и более препятствий система автоматически переходит в режим кругового обзора, чтобы водитель имел наилучшее представление об окружении автомобиля.</p>\r\n','448772.big.jpg','2013-04-17 00:00:00',1,0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
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
