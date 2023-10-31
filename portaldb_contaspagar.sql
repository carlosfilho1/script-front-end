-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: portaldb
-- ------------------------------------------------------
-- Server version	8.0.15

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
-- Table structure for table `contaspagar`
--

DROP TABLE IF EXISTS `contaspagar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contaspagar` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `classificacao` varchar(45) DEFAULT NULL,
  `valorPagar` varchar(45) NOT NULL,
  `dataVencimento` datetime NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `contaBancaria` varchar(45) NOT NULL,
  `valorAgendado` varchar(45) DEFAULT NULL,
  `dataAgendado` datetime NOT NULL,
  `Pessoa` varchar(45) DEFAULT NULL,
  `dataCompetencia` datetime NOT NULL,
  `descricaoLancamento` varchar(45) DEFAULT NULL,
  `comentarios` varchar(120) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `valorPago` varchar(45) NOT NULL,
  `saldoPagar` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contaspagar`
--

LOCK TABLES `contaspagar` WRITE;
/*!40000 ALTER TABLE `contaspagar` DISABLE KEYS */;
INSERT INTO `contaspagar` VALUES (9,'teste','470.31','2023-10-03 00:00:00','HomeCTC','Santander','600','2023-10-15 00:00:00','MasterCard (CNPJ)','2023-10-05 00:00:00','fatura de cartão','','Agendado','600,00','0,60'),(10,'teste','470.31','2023-10-03 00:00:00','HomeCTC','Santander','600','2023-10-15 00:00:00','MasterCard (CNPJ)','2023-10-05 00:00:00','fatura de cartão','','Agendado','600,00','0,60'),(11,'','6003','2023-10-18 00:00:00','HomeCTC','Banco do Brasil','6003','2023-10-17 00:00:00','','2023-10-18 00:00:00','','','A Pagar','6003','0');
/*!40000 ALTER TABLE `contaspagar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31  7:44:32
