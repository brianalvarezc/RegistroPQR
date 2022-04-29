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
  `pqr_asunto` varchar(100) NOT NULL,
  `pqr_texto` varchar(1000) NOT NULL,
  `pqr_usuario_id` int(10) NOT NULL,
  `pqr_estado` varchar(13) NOT NULL,
  `pqr_fecha_creado` datetime NOT NULL,
  `pqr_fecha_limite` datetime NOT NULL,
  PRIMARY KEY (`pqr_id`),
  KEY `pqr_usuario_id` (`pqr_usuario_id`),
  CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`pqr_usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pqr`
--

LOCK TABLES `pqr` WRITE;
/*!40000 ALTER TABLE `pqr` DISABLE KEYS */;
INSERT INTO `pqr` VALUES (11,'q','Queja sobre blablabla','Yo Brian me quejo por tal tal tal ta y tal',1082929825,'Nuevo','2022-04-29 09:44:31','2022-05-02 09:44:31'),(12,'p','Peticion','Solicito uy amablemente tal tal tal tal tal',202020202,'Nuevo','2022-04-29 09:45:29','2022-05-06 09:45:29'),(13,'r','Reclamo esto','reclamo porque tal tal tal atl',202020202,'Nuevo','2022-04-29 09:47:50','2022-05-01 09:47:50'),(14,'p','Peticionadfafaw','{einfkesmgfa,mfjawfmp{aw,dl,ñaw',1082929825,'Nuevo','2022-04-29 10:17:20','2022-05-06 10:17:20');
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
INSERT INTO `usuarios` VALUES (202020202,'qwerty','qwertyqwerty','qwerty@mail.com','$2y$10$pRKPHdllQkvqWg5NjO0d2.bHyLf1lDUiz.bDSCw/J2UNqaNPCZBS.','12345678','No'),(1082929825,'Brian','Alvarez','prueba@mail.com','$2y$10$b8kHS5wMhtbYQjJ9D6y.Xe43zU66pZRK2V6Z1Y7BHBlPtcUAio3zW','1234567890','Si'),(1103106195,'Kezia','Mercado','keziamercado@hotmail.com','$2y$10$uttyoEjeC/MGuEupnoel6OvtqCEDTJNg4VLKFkSSPPwSGohcssO3.','3012455761','No');
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

-- Dump completed on 2022-04-29 10:39:22
