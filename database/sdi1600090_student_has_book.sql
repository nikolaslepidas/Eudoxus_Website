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
-- Table structure for table `student_has_book`
--

DROP TABLE IF EXISTS `student_has_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `student_has_book` (
  `student_user_email` varchar(45) NOT NULL,
  `course_idcourse` int(11) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  PRIMARY KEY (`student_user_email`,`course_idcourse`,`book_isbn`),
  UNIQUE KEY `course_idcourse_UNIQUE` (`course_idcourse`),
  KEY `fk_student_has_book_book1_idx` (`book_isbn`),
  KEY `fk_student_has_book_student1_idx` (`student_user_email`),
  KEY `fk_student_has_book_course1_idx` (`course_idcourse`),
  CONSTRAINT `fk_student_has_book_book1` FOREIGN KEY (`book_isbn`) REFERENCES `book` (`isbn`),
  CONSTRAINT `fk_student_has_book_course1` FOREIGN KEY (`course_idcourse`) REFERENCES `course` (`idcourse`),
  CONSTRAINT `fk_student_has_book_student1` FOREIGN KEY (`student_user_email`) REFERENCES `student` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_has_book`
--

LOCK TABLES `student_has_book` WRITE;
/*!40000 ALTER TABLE `student_has_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_has_book` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-14 13:14:40
