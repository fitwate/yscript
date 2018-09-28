-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ysceshi
-- ------------------------------------------------------
-- Server version	5.5.43-0+deb7u1

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
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` tinytext NOT NULL,
  `lastdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'测试','测试标题','测试内容','2015-05-02'),(2,'测试2','测试标题2','测试内容2','2015-05-02'),(7,'11','22','33','2015-05-02'),(8,'于帅','标题内容','测试内容111','2015-05-02'),(9,'最新用户','最新标题','最新发布内容','2015-05-02'),(10,'最新用户','最新标题','最新发布内容','2015-05-02'),(11,'最新用户','最新标题','最新发布内容','2015-05-02'),(12,'最新用户','最新标题','最新发布内容','2015-05-02'),(13,'111','','','2015-05-02'),(14,'测试','测试','测试','2015-05-02'),(15,'测试','测试','测试','2015-05-02'),(16,'测试php','php100','php1123121','2015-05-02'),(17,'手机','测试版','测试内容','2015-05-02'),(18,'11','11','11','2015-05-18'),(19,'tttt','ttt','tt','2015-07-03'),(20,'11','11','11','2015-07-03');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) NOT NULL DEFAULT '0',
  `regdate` date NOT NULL,
  `remark` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'张三','2008-07-02','学生'),(2,'李四','2008-07-03','学生'),(3,'王五','2008-07-02','工人'),(4,'赵六','2008-07-01','学生'),(6,'php100','2015-04-28','工人'),(52,'ys','2015-05-02','xuesheng'),(53,'ys','2015-05-02','xuesheng'),(54,'ys','2015-05-02','xuesheng'),(55,'ys','2015-05-15','xuesheng'),(56,'ys','2015-07-07','xuesheng'),(57,'ys','2015-07-07','xuesheng'),(58,'ys','2015-07-07','xuesheng'),(59,'ys','2015-07-07','xuesheng'),(60,'ys','2015-07-12','xuesheng'),(61,'ys','2015-07-12','xuesheng');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-15 16:47:52
