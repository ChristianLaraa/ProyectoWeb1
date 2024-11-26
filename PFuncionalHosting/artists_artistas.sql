-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: artists
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artistas`
--

DROP TABLE IF EXISTS `artistas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artistas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_artista` varchar(50) NOT NULL,
  `albums` int NOT NULL,
  `genero_musical` varchar(30) NOT NULL,
  `disquera` varchar(70) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permisos` int NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artistas`
--

LOCK TABLES `artistas` WRITE;
/*!40000 ALTER TABLE `artistas` DISABLE KEYS */;
INSERT INTO `artistas` VALUES (1,'NSQK',2,'R&B','World Wide Records','nsqk','12345','2024-11-18 17:59:06',2),(2,'Alvaro Diaz',6,'Trap','Universal Music Group','Alvarito','123456','2024-11-18 18:14:02',2),(3,'LATIN MAFIA',1,'Reggaeton','Rimas Music','latin','1234567','2024-11-18 18:14:02',2),(4,'Natanael Cano',12,'Corridos Tumbados','Warner Music Group','nata','1345678','2024-11-18 18:14:02',2),(5,'Mene',2,'indie','World Wide Music','mene','123456789','2024-11-18 18:14:02',2),(6,'Doony Graff',1,'Reggaeton','La obsesion Factory','dony','1234567890','2024-11-18 18:14:02',2),(7,'La Trinidad',1,'Reggaeton','Warner Music Mexico','trinidad','12345','2024-11-18 18:14:02',2),(8,'Drake',17,'R&B','OVO Sound','drake','123456','2024-11-18 18:22:49',2),(9,'Rauw Alejandro',8,'Reggaeton','Sony Music Group','rauw','1234567','2024-11-18 18:22:49',2),(10,'Belinda',7,'Pop','Warner Music Mexico','belinda','12345678','2024-11-18 18:22:49',2),(11,'Jesse Baez',5,'R&B','Universal Music Group','jesse','12345','2024-11-18 18:22:49',2),(12,'Mario Bautista',7,'Pop','Warner Music Group','mario','123456','2024-11-18 18:22:49',2),(13,'Cuco',8,'Indie','Interscope Records','cuco','2222','2024-11-18 18:22:49',2),(14,'Peso Pluma',2,'Corridos Tumbados','Doble P Records','peso','4444','2024-11-18 18:37:01',2),(15,'Proof',7,'Rap','Independiente','prof','5555','2024-11-18 18:37:01',2),(18,'Yng Lvcas',2,'Reggaeton','Warner Music Mexico','yng@wmg.com','12345','2024-11-23 00:05:18',2),(19,'Mike Bahia',4,'Tropical','Warner Music Mexico','mikebahi@wmg.com','123456','2024-11-23 00:13:15',2),(20,'DrefQuila',6,'Urbano','BH Studio','dref@bh.com','1234567','2024-11-23 00:17:16',2),(22,'Yeyo',0,'Reggaeton','ADA Latin','yeyo@ada.com','yeyopass','2024-11-24 19:52:36',2),(23,'Kendrick Lamar',7,'Rap','Interscope Records','kdot@itrec.com','12345','2024-11-24 20:02:04',2),(25,'Cruz Cafune',5,'Rap','Mecen ent','cruzzi@mecen.com','123456','2024-11-24 20:15:54',2),(26,'Blessd',3,'Reggaeton','Warner Music Group','blessd@wmg.com','2222.','2024-11-24 20:26:38',2),(27,'Cafe Tacvba',7,'Rock','Warner Music Mexico','cafetacv@wmg.com','5858','2024-11-24 20:31:57',2),(28,'Belanova',5,'Pop','Sony Music Mexico','belanova@smg','belanovaa','2024-11-24 21:23:37',2),(29,'Plastilina Mosh',4,'Rock','Independientes','pmosh@gmail.com','123456','2024-11-24 21:24:52',2),(31,'Christian Lara',5,'Urbano','Warner Music Mexico','christianlara225@wmg.com','admin','2024-11-24 21:29:37',2),(32,'Hadrian',5,'Corridos','TRKZ X DELL','hadrian@trkz.com','12345','2024-11-24 21:33:56',2),(33,'Planeta Tres',1,'Indie','ONErpm','pla3@onerpm.com','12345','2024-11-24 21:36:15',2),(34,'C.Tangana',4,'Urbano','Sony Music Group','tangana@smg.com','36987','2024-11-24 21:41:46',2),(35,'Kai Lana',1,'Indie','Warner Music Mexico','kailana@wmg.com','2222','2024-11-24 21:49:17',2),(36,'Faruz Feet',5,'Rap','Independiente','faruz@gmail.com','1111','2024-11-24 22:01:44',2),(37,'Yoshi',2,'Trap','Virgin','yoshi@virgin.com','yoshi','2024-11-24 22:11:05',2);
/*!40000 ALTER TABLE `artistas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-25 13:36:14
