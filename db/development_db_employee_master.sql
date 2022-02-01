-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: development_db
-- ------------------------------------------------------
-- Server version	5.7.36-0ubuntu0.18.04.1

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
-- Table structure for table `employee_master`
--

DROP TABLE IF EXISTS `employee_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_master` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile_number` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `employee_master_email_uindex` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_master`
--

LOCK TABLES `employee_master` WRITE;
/*!40000 ALTER TABLE `employee_master` DISABLE KEYS */;
INSERT INTO `employee_master` VALUES (1,'Rhishikesh','Jadhav','rhishi.jadhav28@gmail.com','9763693963','test',1),(2,'Rhishikesh','Jadhav','rhishi.jadhav29@gmail.com','9763693963','test',1),(5,'Rhishikesh','Jadhav','rhishi.jadhav30@gmail.com','9763693963','test',1),(7,'Rhishikesh','Jadhav','rhishi.jadhav31@gmail.com','9763693963','test',1),(8,'Rhishikesh','Jadhav','rhishi.jadhav32@gmail.com','9763693963','test',1),(9,'Rhishikesh','Jadhav','rhishi.jadhav33@gmail.com','9763693963','test',1),(11,'test','test','test','123456','test',1),(12,'Rhishikesh','Jadhav','rhishi.jadhav36@gmail.com','9763693963','test',1),(13,'Rhishikesh','Jadhav','rhishi.jadhav40@gmail.com','9763693963','test',1),(14,'Rhishikesh','Jadhav','rhishi.jadhav45@gmail.com','9763693963','test',1),(15,'test','test','test123@gmail.com','12345','test',1),(18,'test','test','test125@gmail.com','12345','test',1),(19,'test','test','test127@gmail.com','12345','test',1),(20,'test','test','test128@gmail.com','12345','test',1),(21,'Rhishikesh','Jadhav','rhishi.jadhav51@gmail.com','9763693963','test',1),(22,'Rhishikesh','Jadhav','rhishi.jadhav512@gmail.com','9763693963','test',1),(23,'Rhishikesh','Jadhav','rhishi.jadhav513@gmail.com','9763693963','test',1),(24,'test','test','test123','123456','test',1),(26,'Rhishikesh','Jadhav','rhishi.jadhav514@gmail.com','9763693963','test',1),(27,'Rhishikesh','Jadhav','rhishi.jadhav515@gmail.com','9763693963','test',1),(28,'Rhishikesh','Jadhav','rhishi.jadhav516@gmail.com','9763693963','test',1);
/*!40000 ALTER TABLE `employee_master` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-13 16:32:58
