-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: registro_pqr
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `pqr`
--

DROP TABLE IF EXISTS `pqr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pqr` (
  `pqr_id` int(10) NOT NULL AUTO_INCREMENT,
  `pqr_tipo` varchar(10) NOT NULL,
  `pqr_usuario_id` int(10) NOT NULL,
  `pqr_estado` varchar(13) NOT NULL,
  `pqr_fecha_creado` datetime NOT NULL,
  `pqr_fecha_limite` datetime NOT NULL,
  PRIMARY KEY (`pqr_id`),
  KEY `pqr_usuario_id` (`pqr_usuario_id`),
  CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`pqr_usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pqr`
--

LOCK TABLES `pqr` WRITE;
/*!40000 ALTER TABLE `pqr` DISABLE KEYS */;
/*!40000 ALTER TABLE `pqr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario_id` int(10) NOT NULL,
  `usuario_nombre` varchar(30) NOT NULL,
  `usuario_apellido` varchar(30) NOT NULL,
  `usuario_correo` varchar(100) NOT NULL,
  `usuario_telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (34543,'fesgrdhndbs','dadwadw','adfesdhfyj@fgrh','565432'),(765444,'Brian','adsgnfjhtdgsdvz','brian.alvarez.cuadros@gmail.com','123123123'),(23456522,'Brian','Alvarez','brian.alvarez.cuadros@gmail.com','234567543'),(23456543,'fesgrdhndbs','dfsgrdbfv','brian.alvarez.cuadros@gmail.com','3456788888'),(34567876,'bfnhjm,kjggfds','adsgnfjhtdgsdvz','asddhtgsdfv@d','1111111'),(123456765,'Brian Aurelio','Alvarez Cuadros','brian.alvarez.cuadros@gmail.com','3045284003'),(345676554,'Brian','Alvarez Cuadros','brian.alvarez.cuadros@gmail.com','456756543'),(1234567654,'Brian Aurelio','Alvarez Cuadros','brian.alvarez.cuadros@gmail.com','3045284003'),(2147483647,'bfnhjm,kjggfds','adsgnfjhtdgsdvz','asddhtgsdfv@d','1111111');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-27 18:09:08
