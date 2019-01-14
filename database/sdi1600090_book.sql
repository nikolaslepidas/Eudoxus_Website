-- MySQL dump 10.13  Distrib 8.0.11, for Win64 (x86_64)
--
-- Host: localhost    Database: sdi1600090
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `book` (
  `isbn` int(11) NOT NULL,
  `bookTitle` varchar(100) NOT NULL,
  `greeklishTitle` varchar(100) NOT NULL,
  `writer` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (131256,'Λειτουργικά Συστήματα','eisagogi_sti_grammiki_algevra','Λαμπρινή Μαρία','Κλειδάριθμος'),(156575,'Γραμμική Άλγεβρα και Εφαρμογές','eisagogi_sti_grammiki_algevra','Ράπτης Ευάγγελος','Κλειδάριθμος'),(167636,'Θεωρία της Γραμμικής Άλγεβρας','eisagogi_sti_grammiki_algevra','Παπαδόπουλος Γιάννης','Τζιόλα'),(178345,'Εισαγωγή στη Γραμμική Άλγεβρα','eisagogi_sti_grammiki_algevra','Κολοβός Κύριλλος','Κλειδάριθμος'),(1010102,'Διακριτά Μαθηματικά και Εφαρμογές','eisagogi_sti_grammiki_algevra','Λεπάκης Στέφανος','Τζιόλα'),(1871213,'Αριθμητική Ανάλυση','eisagogi_sti_grammiki_algevra','Μπέλτσου Χριστίνα','Κλειδάριθμος');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-14 12:57:03
