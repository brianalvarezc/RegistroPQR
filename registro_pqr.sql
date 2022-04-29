-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: registro_pqr
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
  `pqr_asunto` varchar(100) NOT NULL,
  `pqr_texto` varchar(1000) NOT NULL,
  `pqr_usuario_id` int(10) NOT NULL,
  `pqr_estado` varchar(13) NOT NULL,
  `pqr_fecha_creado` datetime NOT NULL,
  `pqr_fecha_limite` datetime NOT NULL,
  PRIMARY KEY (`pqr_id`),
  KEY `pqr_usuario_id` (`pqr_usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pqr`
--

LOCK TABLES `pqr` WRITE;
/*!40000 ALTER TABLE `pqr` DISABLE KEYS */;
INSERT INTO `pqr` VALUES (5,'q','Relamacion taltalta','Relamacion taltaltaRelamacion ',101010101,'Nuevo','2022-04-28 00:00:00','2022-05-05 00:00:00'),(6,'q','dfesf','ffdfsefffffffffffffffffffffffffffffffffffffffffffff',1082929825,'Nuevo','0000-00-00 00:00:00','2022-04-28 02:40:00'),(8,'q','queja','yuug',1103106195,'Nuevo','2022-04-28 20:44:57','2022-05-05 20:44:57'),(9,'r','queja por tal y tal','queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja queja ',202020202,'Nuevo','2022-04-28 22:33:35','2022-05-05 22:33:35'),(10,'r','queja por tal y tal','Reclamo porque no responden en 2 dias',1082929825,'Nuevo','2022-04-28 22:57:36','2022-04-30 22:57:36');
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
  `usuario_pass` varchar(100) NOT NULL,
  `usuario_telefono` varchar(10) NOT NULL,
  `usuario_admin` varchar(2) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (101010101,'Prueba2','Prueba2','prueba@mail.com','$2y$10$NQTgZ0P4kEMtFXsXnFttQ.hPkoqKOgdZTAo7d97XehwkQs/jVRby2','1234567890','Si'),(202020202,'qwerty','qwertyqwerty','qwerty@mail.com','$2y$10$g6gEXhmRCAKXuyghp56nPerB3tzfcZ2FzzBp31OifUxsh633Yr2Ae','12345678','No'),(1082929825,'Brian','Alvarez','prueba@mail.com','$2y$10$b8kHS5wMhtbYQjJ9D6y.Xe43zU66pZRK2V6Z1Y7BHBlPtcUAio3zW','1234567890','Si'),(1103106195,'Kezia','Mercado','keziamercado@hotmail.com','$2y$10$uttyoEjeC/MGuEupnoel6OvtqCEDTJNg4VLKFkSSPPwSGohcssO3.','3012455761','No'),(1234567890,'qwerty','qwertyqwerty','qwerty@mail.com','$2y$10$aO2yv2rWzmVGHmAGDDqeT.nkFfK6vvd4PIViaarkFubBBQQyw9vri','12345678','Si');
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

-- Dump completed on 2022-04-28 23:06:52
