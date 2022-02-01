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
-- Table structure for table `dairy_account_master`
--

DROP TABLE IF EXISTS `dairy_account_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dairy_account_master` (
  `dairy_account_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `dairy_name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_number` int(10) DEFAULT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_date` varchar(50) NOT NULL,
  `created_by` int(10) NOT NULL,
  `account_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dairy_account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dairy_account_master`
--

LOCK TABLES `dairy_account_master` WRITE;
/*!40000 ALTER TABLE `dairy_account_master` DISABLE KEYS */;
INSERT INTO `dairy_account_master` VALUES (1,'test','test@gmail.com',100,'12345',0,'',0,NULL),(2,'test','test123@gmail.com',100,'12345',0,'',0,NULL),(3,'test','test123@gmail.com',1000,'12345',0,'',0,NULL),(4,'test','test123@gmail.com',1006,'12345',0,'',0,NULL),(5,'xyz','xyz123@gmail.com',1002,'12345',0,'',0,NULL),(6,'xyz','xyz123@gmail.com',1002,'12345',0,'',0,NULL);
/*!40000 ALTER TABLE `dairy_account_master` ENABLE KEYS */;
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
