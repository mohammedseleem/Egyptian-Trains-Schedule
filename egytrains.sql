-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: egytrains
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

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
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `degree` varchar(255) CHARACTER SET utf8 NOT NULL,
  `source_station` varchar(255) CHARACTER SET utf8 NOT NULL,
  `destination_station` varchar(255) CHARACTER SET utf8 NOT NULL,
  `moving` varchar(255) CHARACTER SET utf8 NOT NULL,
  `arriving` varchar(255) CHARACTER SET utf8 NOT NULL,
  `period` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trains`
--

LOCK TABLES `trains` WRITE;
/*!40000 ALTER TABLE `trains` DISABLE KEYS */;
INSERT INTO `trains` VALUES (1,83,120,'اكسبريس بعربيات مطورة (ركاب)','اسوان','الاقصر','9:15 ص','11:15 ص','2:00'),(2,83,120,'اكسبريس بعربيات مطورة (ركاب)','الاقصر','قنا','11:15 ص','1:15 م','2:00'),(3,83,120,'اكسبريس بعربيات مطورة (ركاب)','قنا','سوهاج','1:15 م','3:15 م','2:00'),(4,83,120,'اكسبريس بعربيات مطورة (ركاب)','سوهاج','اسيوط','3:15 م','5:15 م','2:00'),(5,83,120,'اكسبريس بعربيات مطورة (ركاب)','اسيوط','المنيا','5:15 م','7:15 م','2:00'),(6,803,130,'VIP','اسوان','الاقصر','9:00 م','10:00 م','1:00'),(7,803,130,'VIP','الاقصر','قنا','10:15 م','11:15 م','1:00'),(8,803,130,'VIP','قنا','سوهاج','11:30 م','12:30 ص','1:00'),(9,803,130,'VIP','سوهاج','اسيوط','12:45 ص','1:45 ص','1:00'),(10,803,130,'VIP','اسيوط','المنيا','2:00 ص','3:00 ص','1:00'),(11,1050,140,'نوم','اسوان','الاقصر','9:15 م','10:15 م','1:00'),(12,1050,140,'نوم','الاقصر','قنا','10:15 م','11:15 م','1:00'),(13,1050,140,'نوم','قنا','سوهاج','11:15 م','12:15 ص','1:00'),(14,1050,140,'نوم','سوهاج','اسيوط','12:15 ص','1:15 ص','1:00'),(15,150,140,'نوم','اسيوط','المنيا','1:15 ص','2:15 ص','1:00'),(16,996,130,'مكيف','اسوان','الاقصر','1:00 م','2:30 م','1:30'),(17,996,130,'مكيف','الاقصر','قنا','2:30 م','4:00 م','1:30'),(18,996,130,'مكيف','قنا','سوهاج','4:00 م','5:30 م','1:30'),(19,996,130,'مكيف','سوهاج','اسيوط','5:30 م','7:00 م','1:30'),(20,996,130,'مكيف','اسيوط','المنيا','7:00 م','8:30 م','1:30'),(21,83,120,'اكسبريس بعربيات مطورة (ركاب)','المنيا','بنى سويف','7:15 م','9:15 م','2:00'),(22,83,120,'اكسبريس بعربيات مطورة (ركاب)','بنى سويف','الجيزة','9:15 م','11:15 م','2:00'),(26,803,130,'VIP','المنيا','بنى سويف','3:15 ص','4:15 ص','1:00'),(27,803,130,'VIP','بنى سويف','الجيزة','4:15 ص','5:15 ص','1:00');
/*!40000 ALTER TABLE `trains` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-10 21:37:31
