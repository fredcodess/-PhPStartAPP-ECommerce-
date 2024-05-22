-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for Linux (x86_64)
--
-- Host: mysql    Database: assignment
-- ------------------------------------------------------
-- Server version	11.2.2-MariaDB-1:11.2.2+maria~ubu2204

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `assignment`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `assignment` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `assignment`;

--
-- Table structure for table `adminLogs`
--

DROP TABLE IF EXISTS `adminLogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminLogs` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminLogs`
--

LOCK TABLES `adminLogs` WRITE;
/*!40000 ALTER TABLE `adminLogs` DISABLE KEYS */;
INSERT INTO `adminLogs` VALUES (1,'fred','$2y$10$yMKAEWO2lzfqorw2mqgloOutnFkoQLHJodC9Ss1z1rE/kUgs1TVyy'),(2,'king','34fe0d8f100898dcfd946c68c33d262ccbf01d7e'),(3,'fred2','$2y$10$jJDRub7MpR7f8yJJrfRbrekNjoWJnuUEchnd5tOc8xCO8F0lI1v9K'),(4,'admin','$2y$10$.3hxTWaUBjyeLSVsb6Jth.wrfybPCyfRifQqC3Hzj/K7/R59hR9qe');
/*!40000 ALTER TABLE `adminLogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `messagebox` varchar(255) NOT NULL,
  `messagedate` date DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `answered` varchar(265) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idcontact_UNIQUE` (`id`),
  KEY `userId_idx` (`userId`),
  KEY `admin_id_idx` (`admin_id`),
  CONSTRAINT `admin_id` FOREIGN KEY (`admin_id`) REFERENCES `adminLogs` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `customerLogs` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (28,'fred gyan','1@assignment.com','ewvevevevce','2024-01-28','29','sgfvevwvr',NULL,4),(29,'gyan','1@assignment.com','ewvevevevce','2024-01-28','30','nicshdjoi\r\n',NULL,4),(30,'fred','1@assignment.com','ewvevevevce','2024-01-28','31','uihsvnjoeidv',NULL,4),(31,'stella','2@assignment.com','ewvevevevce','2024-01-28','32','jhbvbsnkdvd',NULL,4),(32,'ba','4@assignment.com','ewvevevevce','2024-01-28','33',NULL,NULL,NULL),(33,'steph','5@assignment.com','ewvevevevce','2024-01-28','34',NULL,NULL,NULL),(34,'Totime','6@assignment.com','ewvevevevce','2024-01-28','35',NULL,NULL,NULL),(35,'Shatta','7@assignment.com','ewvevevevce','2024-01-28','36',NULL,NULL,NULL),(36,'Vhim','8@assignment.com','ewvevevevce','2024-01-28','37',NULL,NULL,NULL),(37,'Wale','9@assignment.com','ewvevevevce','2024-01-28','38',NULL,NULL,NULL),(38,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','29',NULL,3,NULL),(39,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','30',NULL,3,NULL),(40,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','31','huygvsivhoeivjr',3,4),(41,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','32','jhsbvusjbnvlesdv',3,4),(42,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','33','ygfugygi',3,4),(43,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','34',NULL,3,NULL),(44,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','35',NULL,3,NULL),(45,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','36',NULL,3,NULL),(46,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','37',NULL,3,NULL),(47,'fred gyan','1@assignment.com','ONLY MESSAGE YOU WILL SEE WHEN LOGGED IN','2024-01-28','38',NULL,3,NULL);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerLogs`
--

DROP TABLE IF EXISTS `customerLogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerLogs` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerLogs`
--

LOCK TABLES `customerLogs` WRITE;
/*!40000 ALTER TABLE `customerLogs` DISABLE KEYS */;
INSERT INTO `customerLogs` VALUES (1,'nkay','$2y$10$L2KG7qUWqdUHxzHPU0vdVudGqTxN746ZKtcmVjfha1BtAtMPHIBxy'),(2,'mub','$2y$10$dY6oKJocDg9rWKO0a09GkudCv.NC18MDAMS7EMmBkxBFenUcOdvXK'),(3,'customer','$2y$10$5Iz6WH3vcf58koDxj/FMs./DR.EWBPmKOdvlQGZzwJZSOGNavBvv2');
/*!40000 ALTER TABLE `customerLogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'TVs'),(2,'Computers '),(3,'Phones '),(4,'Games'),(5,'Sports'),(6,'Beach'),(8,'PERFUMES');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_list`
--

DROP TABLE IF EXISTS `product_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `price` decimal(5,0) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_list`
--

LOCK TABLES `product_list` WRITE;
/*!40000 ALTER TABLE `product_list` DISABLE KEYS */;
INSERT INTO `product_list` VALUES (29,'BUSH','jygccsiucincuwic','bush',45,'2024-01-28','1','AsterNovi-belgii-flower-1mb.jpg'),(30,'LAPTOP','EIUBEFHEWUVNKEROVICUER','bush',234,'2024-01-28','2','AsterNovi-belgii-flower-1mb.jpg'),(31,'Iphone 13 PRO','JEBVIEUOJVOUVIDNSOIUCJNIPO','APPLE',690,'2024-01-28','3','AsterNovi-belgii-flower-1mb.jpg'),(32,'PS5 DISC','WIEFUWHVUBVUYBENVOHNVOIDSJHVISDOJNV','SONY',459,'2024-01-28','4','AsterNovi-belgii-flower-1mb.jpg'),(33,'REAL MADRID HOME KIT','VJUDFBVIODVJEI','NIKE',57,'2024-01-28','5','AsterNovi-belgii-flower-1mb.jpg'),(34,'SUNGLASSES','IUHVUEHRIFVEHVOERH','SUNNY',88,'2024-01-28','6','AsterNovi-belgii-flower-1mb.jpg'),(35,'GUCCI FLOW','IUFHBWEIUCH','GUCCI',453,'2024-01-28','1','AsterNovi-belgii-flower-1mb.jpg'),(36,'GUCCI FLOW','IUFHBWEIUCH','GUCCI',453,'2024-01-28','8','AsterNovi-belgii-flower-1mb.jpg'),(37,'SAMSUNG TV','CJSHCVBGWUICHWOICJWEOCIW','SAMSUNG',3547,'2024-01-28','1','AsterNovi-belgii-flower-1mb.jpg'),(38,'HUAWEI META','sdjhcbeiucvievuevihvne','HUAWEI',466,'2024-01-28','2','AsterNovi-belgii-flower-1mb.jpg');
/*!40000 ALTER TABLE `product_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'assignment'
--

--
-- Current Database: `fredy`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `fredy` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `fredy`;

--
-- Table structure for table `exercise1`
--

DROP TABLE IF EXISTS `exercise1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise1` (
  `email` varchar(45) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise1`
--

LOCK TABLES `exercise1` WRITE;
/*!40000 ALTER TABLE `exercise1` DISABLE KEYS */;
INSERT INTO `exercise1` VALUES ('ab@gmail.com','a','b','2021-10-26'),('cd@gmail.com','c','d','2014-01-30'),('ef@gmail.com','e','f','2000-07-05'),('fredick@gmail.com','Fred','Gyan','2002-02-02'),('gh@gmail.com','g','h','2005-05-09'),('ij@gmail.com','b','f','1999-04-08');
/*!40000 ALTER TABLE `exercise1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `title` varchar(45) NOT NULL,
  `year of release` date DEFAULT NULL,
  `director` varchar(45) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES ('awareness','2001-01-06','hibba','action'),('equalizer','2001-01-07','sarah','restricted'),('fair_play','2001-01-09','fred','horror'),('nun','2001-01-01','amina','action'),('rep','2001-02-02','fred','action'),('revenge','2001-01-03','nkay','adventure'),('teenage_mutant','2001-01-02','gino','drama'),('the_burial','2001-01-05','charles','action'),('the_conference','2001-01-04','tony','action'),('the_mistress','2001-01-08','fred','comedy');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) DEFAULT NULL,
  `passwor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'gino','$2y$10$/GVLKMeWkZZWRUDiMZKNauV8PC36DRcWrERRnmS3gmS9TK/qIEkta'),(2,'fred','$2y$10$hjRW2Aks.Xjpm2FHtXPMKeWhLMbXzvwZSvQpyaoaG8TvRoRcNXYbK'),(3,'emma','$2y$10$cdXV1C/Z9bMSsohb6TAOBO2ULOXJCVXGd8PWIkXlQFb67GZkTvDmq');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person` (
  `email` varchar(100) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `surename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES ('ambrefa@gmail.com','amasam','brefaaa'),('c','a','b'),('emma@gmail.com','nkay','oben'),('gino@gmail.com','ab','george'),('hibba@gmail.org','fred','ben'),('john@gmail.com','john','till');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'fredy'
--

--
-- Current Database: `ijdb`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ijdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `ijdb`;

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `platformId` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `joke`
--

DROP TABLE IF EXISTS `joke`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `joke` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joketext` text DEFAULT NULL,
  `jokedate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `joke`
--

LOCK TABLES `joke` WRITE;
/*!40000 ALTER TABLE `joke` DISABLE KEYS */;
INSERT INTO `joke` VALUES (1,'A programmer was found dead in the shower. The instructions read: lather, rinse, repeat.','2023-01-05'),(2,'!false - it\'s funny because it\'s true','2023-01-08'),(3,'Why did the programmer quit his job? He didn\'t get arrays','2023-01-08'),(4,'kjhgj suiii','2023-11-23'),(5,'dclucic','2023-12-07'),(6,'jh','2023-12-07'),(7,'lol\r\n','2023-12-07'),(8,'ehrd','2024-01-04'),(9,'segsdx','2024-01-04');
/*!40000 ALTER TABLE `joke` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platform`
--

DROP TABLE IF EXISTS `platform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform`
--

LOCK TABLES `platform` WRITE;
/*!40000 ALTER TABLE `platform` DISABLE KEYS */;
INSERT INTO `platform` VALUES (1,'tv'),(2,'tg'),(3,'vbt'),(4,'fg ');
/*!40000 ALTER TABLE `platform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ijdb'
--

--
-- Current Database: `GroupWork`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `GroupWork` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `GroupWork`;

--
-- Table structure for table `answered_question`
--

DROP TABLE IF EXISTS `answered_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answered_question` (
  `answered_id` int(11) NOT NULL,
  `question_id` varchar(45) NOT NULL,
  `response` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`answered_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answered_question`
--

LOCK TABLES `answered_question` WRITE;
/*!40000 ALTER TABLE `answered_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `answered_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'MOBILE'),(2,'TV & AV'),(3,'CONSOLES'),(4,'COMPUTER');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `messagebox` varchar(255) NOT NULL,
  `messagedate` date DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `answered` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_c_username_idx` (`customer_id`),
  KEY `fk_c_username_idx1` (`admin_id`),
  CONSTRAINT `fk_c_customerlogs` FOREIGN KEY (`customer_id`) REFERENCES `customerLogs` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'fred gyan','hedna@gmail.com','egwsvsebseb','2024-05-08','1','vcververvev',1,NULL),(2,'dfrgd','verv','ervrer','2024-05-08','4',NULL,NULL,1),(3,'Hedna','ambrefa@gmail.com','wefrefeverccd','2024-05-17','18','IT HAS BEEN SOLVED',1,NULL),(4,'Bafo','fredick@gmail.com','drgbvrbtrbrgbrtvbrf','2024-05-17','18',NULL,NULL,1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerLogs`
--

DROP TABLE IF EXISTS `customerLogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerLogs` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerLogs`
--

LOCK TABLES `customerLogs` WRITE;
/*!40000 ALTER TABLE `customerLogs` DISABLE KEYS */;
INSERT INTO `customerLogs` VALUES (1,'fred','$2y$10$CVspXmGtKg.F6K7hvqq5CeGwULFyWHZREr/tYP0BJlEs.Zp0mISFi');
/*!40000 ALTER TABLE `customerLogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'S-I1600','smart phone','SAMSUNG',34,NULL,'1','s-l1600.jpg'),(2,'Galaxy A54','smart phone','SAMSUNG',400,NULL,'1','galaxy-a54.jpg'),(3,'Samsung Neo','smart TV','SAMSUNG',65,NULL,'2','sneotvbundle.jpg'),(4,'Samsung UE24 HD','smart TV','SAMSUNG',645,NULL,'2','sue24n4hd.jpeg'),(5,'iPhone X','smart phone','APPLE',287,NULL,'1','iphoneX.jpg'),(6,'iPhone 12','smart phone','APPLE',565,NULL,'1','iphone12.jpg'),(7,'Bush 32 Inch','smart TV','BUSH',230,'2024-05-08','2','bush32inch.jpeg'),(8,'Bush Eluma','smart phone','BUSH',199,'2024-05-08','1','busheluma.jpeg'),(9,'Bush Spira 3','smart phone','BUSH',250,'2024-05-08','1','bushspirab35.jpg'),(10,'iPhone 15','smart phone','APPLE',900,'2024-05-08','1','iphone15.jpg'),(11,'iPhone 11','smart phone','APPLE',389,'2024-05-08','1','iphone11.jpg'),(12,'Bush-I600','smart TV','BUSH',430,'2024-05-08','2','bush-l600.jpg'),(13,'Bush Express','smart TV','BUSH',300,'2024-05-08','2','bushsmarttv.jpg'),(14,'Pilot','smart phone','BUSH',30,'2024-05-08','1','bushin.jpg'),(15,'MacBook','IT','APPLE',230,'2024-05-09','4','laptop.jpeg'),(16,'MarioCart','gameboy','Nintiendo',567,'2024-05-10','3','gameboy.jpg'),(17,'Switch','description','Nintiendo',690,'2024-05-12','3','nintiendo.jpg'),(18,'iMAC','IT','APPLE',1700,'2024-05-15','4','Apple-iMac.jpg'),(19,'Mac Pro','IT','APPLE',2000,'2024-05-15','4','macpro.jpg'),(20,'Galaxy s6 Edge','smart phone','SAMSUNG',120,'2024-05-15','1','SGS6edge.jpg'),(21,'NES Console','game','Nintiendo',430,'2024-05-15','3','ConsoleSet.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answered` tinyint(4) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `username`
--

DROP TABLE IF EXISTS `username`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `username` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `username`
--

LOCK TABLES `username` WRITE;
/*!40000 ALTER TABLE `username` DISABLE KEYS */;
INSERT INTO `username` VALUES (1,'fred','$2y$10$yMKAEWO2lzfqorw2mqgloOutnFkoQLHJodC9Ss1z1rE/kUgs1TVyy');
/*!40000 ALTER TABLE `username` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'GroupWork'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-18 14:44:03
