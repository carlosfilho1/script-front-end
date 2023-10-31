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
-- Table structure for table `estoque`
--

DROP TABLE IF EXISTS `estoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estoque` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `nota_fiscal` int(11) NOT NULL,
  `descricao_produto` varchar(100) NOT NULL,
  `codigo_produto` varchar(45) NOT NULL,
  `categoria` varchar(80) NOT NULL,
  `quantidade_em_estoque` int(11) NOT NULL,
  `preco_unitario` float NOT NULL,
  `valor_total` float DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque`
--

LOCK TABLES `estoque` WRITE;
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
INSERT INTO `estoque` VALUES (1,'2023-10-15',4754,'Produto 1','0001','Categoria 1',15,50,500),(2,'2023-10-15',1475,'w2www','00025','dddddd',333,3333,NULL),(3,'2023-10-15',9956,'teste','515156','teste',45,45,NULL),(4,'2023-10-15',36145,'Leticia','51818','eee',2,5000,NULL),(5,'2023-10-15',4778,'Leticia 2','6692','Esposa',10,15000,NULL),(13,NULL,2213,'eqwewe','323213','qwqewe',231,33.59,NULL),(14,'2023-10-17',222,'asdsadsad','21121','sadsdd',1121,321,NULL),(15,'2023-10-18',233,'aede','121','wewe',32,232,NULL),(16,'2023-10-18',233,'aede','121','wewe',32,232.56,NULL),(17,'2023-10-19',2222,'dsdd','11212','dsdsd',12,121,NULL),(18,'2023-10-23',221,'novo produto','1251','TI',500,560.6,NULL),(19,'2023-10-24',221,'dddd','12121','escritorio',112,56.5,NULL),(20,'2023-10-25',21221,'Ração','1159','pets',50,63.5,NULL),(21,'2023-10-30',7854,'Floral','45878','Perfumaria e Cosméticos',100,128.6,NULL),(22,'2023-10-25',7892,'Mouse','878956','ti',200,45.75,NULL),(23,'2023-10-25',2222,'novo produto','1221','Produtos para Pets',12,800.5,NULL);
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31  7:44:33
