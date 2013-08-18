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
-- Table structure for table `press_about_us`
--

DROP TABLE IF EXISTS `press_about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `press_about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT 'Заголовок',
  `source_of_article` varchar(100) NOT NULL COMMENT 'Источник статьи',
  `source_link` varchar(255) NOT NULL,
  `created` datetime NOT NULL COMMENT 'Дата создания',
  `annotation` varchar(200) NOT NULL COMMENT 'Аннотация статьи',
  `link` varchar(255) DEFAULT NULL COMMENT 'Ссылка на статью',
  `file` varchar(255) DEFAULT NULL COMMENT 'Сылка на файл',
  `text` text COMMENT 'Полное содержание статьи',
  `article_type` tinyint(1) NOT NULL COMMENT 'В ссылке на полную статью показвается одно из следующих значений:\n1 - link (ссылка)\n2 - file (файл)\n3 - article_text (текст статьи)',
  `display` tinyint(1) NOT NULL COMMENT 'Отображать на сайте',
  `deleted` tinyint(1) NOT NULL COMMENT 'Флаг удаления',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `press_about_us`
--

LOCK TABLES `press_about_us` WRITE;
/*!40000 ALTER TABLE `press_about_us` DISABLE KEYS */;
INSERT INTO `press_about_us` VALUES (1,'Большая фабрика','sdfsf','','2013-06-19 00:00:00','<p>\r\n	sdfsdfsdfsj ;ljsd ;lfj ds;lkj ;lskdjf;lkjdsf;l j;lsdjf ;jsdhfkjshdfkjlshdfkl jshdfkjlhdf</p>\r\n<p>\r\n	adadad sdfjkhsdlkj hsdk flhsdklfukesyriuyieus ysiudf isdyfiuos dyfiy sfodif&nbsp;</p>\r\n<p>\r\n	a','','/public/userfiles/press/oshibka_copy(1371636904_26149).txt','',2,2,0),(2,'Дополнительный материал','Неизвестно откуда','','2013-06-20 00:00:00','Куда идём мы с Пятачком -\r\nБольшой-большой секрет.\r\nИ не расскажем мы о нём...','','/public/userfiles/press/oshibka_copy(1371725904_601).txt','',2,1,0),(3,'Тест ссылки','нет такого','','2013-06-21 00:00:00','<p>\r\n	вафвВввыфваыфафываф</p>\r\n','http://google.ru',NULL,'',1,1,0),(4,'Новая с файлом','совсем новый файл','','2013-06-21 00:00:00','<p>\r\n	Тот самый файл</p>\r\n',NULL,'/public/userfiles/press/MLP-Wallpaper-my-little-pony-friendship-is-magic-oc-32040152-1920-1200.jpg','',2,1,0),(5,'авываыв','ываываыв','','2013-06-21 00:00:00','<p>\r\n	ываываываыва</p>\r\n','https://www.google.ru/webhp?sourceid=chrome-instant&amp;ion=1&amp;ie=UTF-8#newwindow=1&amp;sclient=psy-ab&amp;q=jquery%20radio%20button%20changed&amp;oq=&amp;gs_l=&amp;pbx=1&amp;fp=20c0d414abd5ee4a&amp;ion=1&amp;bav=on.2,or.r_qf.&amp;bvm=bv.48293060,d.bGE',NULL,'',1,1,0),(6,'werwer','А это описание или заголовок источника','','2013-06-25 00:00:00','<p>\r\n	werwerwer</p>\r\n',NULL,'/public/userfiles/press/oshibka_copy(1372170840_2782).txt','<p>\r\n	adadadadsadqweqwdqd</p>\r\n',3,1,0);
/*!40000 ALTER TABLE `press_about_us` ENABLE KEYS */;
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
