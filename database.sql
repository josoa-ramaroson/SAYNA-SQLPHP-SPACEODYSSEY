-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: spaceOdb
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `astronautes`
--

DROP TABLE IF EXISTS `astronautes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `astronautes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `etat_sante` varchar(255) DEFAULT NULL,
  `taille` double DEFAULT NULL,
  `poids` double DEFAULT NULL,
  `annee_experience` smallint DEFAULT NULL,
  `disponibilite` varchar(50) DEFAULT NULL,
  `vaisseau_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vaisseau_id` (`vaisseau_id`),
  CONSTRAINT `astronautes_ibfk_1` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseaux` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `astronautes`
--

LOCK TABLES `astronautes` WRITE;
/*!40000 ALTER TABLE `astronautes` DISABLE KEYS */;
/*!40000 ALTER TABLE `astronautes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missions`
--

DROP TABLE IF EXISTS `missions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `missions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  `vaisseau_id` int DEFAULT NULL,
  `planet_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vaisseau_id` (`vaisseau_id`),
  KEY `planet_id` (`planet_id`),
  CONSTRAINT `missions_ibfk_1` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseaux` (`id`) ON DELETE CASCADE,
  CONSTRAINT `missions_ibfk_2` FOREIGN KEY (`planet_id`) REFERENCES `planetes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missions`
--

LOCK TABLES `missions` WRITE;
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planetes`
--

DROP TABLE IF EXISTS `planetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `planetes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `circonference` double DEFAULT NULL,
  `distance_terre` double DEFAULT NULL,
  `viabilite` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planetes`
--

LOCK TABLES `planetes` WRITE;
/*!40000 ALTER TABLE `planetes` DISABLE KEYS */;
/*!40000 ALTER TABLE `planetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaisseaux`
--

DROP TABLE IF EXISTS `vaisseaux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaisseaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `poids_max` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaisseaux`
--

LOCK TABLES `vaisseaux` WRITE;
/*!40000 ALTER TABLE `vaisseaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaisseaux` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-10 15:48:43
-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: spaceOdb
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `astronautes`
--

DROP TABLE IF EXISTS `astronautes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `astronautes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `etat_sante` varchar(255) DEFAULT NULL,
  `taille` double DEFAULT NULL,
  `poids` double DEFAULT NULL,
  `annee_experience` smallint DEFAULT NULL,
  `disponibilite` varchar(50) DEFAULT NULL,
  `vaisseau_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vaisseau_id` (`vaisseau_id`),
  CONSTRAINT `astronautes_ibfk_1` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseaux` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `astronautes`
--

LOCK TABLES `astronautes` WRITE;
/*!40000 ALTER TABLE `astronautes` DISABLE KEYS */;
INSERT INTO `astronautes` VALUES (1,'test1','BONNE',1.7,58,10,'DISPONIBLE',1);
/*!40000 ALTER TABLE `astronautes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missions`
--

DROP TABLE IF EXISTS `missions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `missions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  `vaisseau_id` int DEFAULT NULL,
  `planet_id` int DEFAULT NULL,
  `etat` varchar(255) NOT NULL,
  `description` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vaisseau_id` (`vaisseau_id`),
  KEY `planet_id` (`planet_id`),
  CONSTRAINT `missions_ibfk_1` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseaux` (`id`) ON DELETE CASCADE,
  CONSTRAINT `missions_ibfk_2` FOREIGN KEY (`planet_id`) REFERENCES `planetes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missions`
--

LOCK TABLES `missions` WRITE;
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
INSERT INTO `missions` VALUES (1,'beta A','2025-12-25 00:00:00','2040-01-15 00:00:00','DANGEREUX',1,1,'EN COURS',''),(2,'alphaGO','2023-11-13 00:00:00','2023-11-29 00:00:00','DIFFICILE',1,1,'ACHEVÉ','');
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planetes`
--

DROP TABLE IF EXISTS `planetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `planetes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `circonference` double DEFAULT NULL,
  `distance_terre` double DEFAULT NULL,
  `viabilite` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planetes`
--

LOCK TABLES `planetes` WRITE;
/*!40000 ALTER TABLE `planetes` DISABLE KEYS */;
INSERT INTO `planetes` VALUES (1,'KEPLER1',1000,8000,'VIABLE');
/*!40000 ALTER TABLE `planetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaisseaux`
--

DROP TABLE IF EXISTS `vaisseaux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaisseaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `poids_max` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaisseaux`
--

LOCK TABLES `vaisseaux` WRITE;
/*!40000 ALTER TABLE `vaisseaux` DISABLE KEYS */;
INSERT INTO `vaisseaux` VALUES (1,'A1XX457','EN MARCHE','EN MISSION',1000);
/*!40000 ALTER TABLE `vaisseaux` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-10 17:58:08
