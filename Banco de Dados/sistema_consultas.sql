CREATE DATABASE  IF NOT EXISTS `sistema_consultas` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sistema_consultas`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: sistema_consultas
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `agendamedico`
--

DROP TABLE IF EXISTS `agendamedico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendamedico` (
  `id_agendamedico` int NOT NULL AUTO_INCREMENT,
  `data_agendamedico` date NOT NULL,
  `horainicio_agendamedico` time NOT NULL,
  `horafim_agendamedico` time NOT NULL,
  `atendimentomax_agendamedico` int NOT NULL,
  `id_medico` int DEFAULT NULL,
  `id_salaconsultorio` int DEFAULT NULL,
  PRIMARY KEY (`id_agendamedico`),
  KEY `fk_medico_agendamedico` (`id_medico`),
  KEY `fk_salaconsultorio_agendamedico` (`id_salaconsultorio`),
  CONSTRAINT `fk_medico_agendamedico` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  CONSTRAINT `fk_salaconsultorio_agendamedico` FOREIGN KEY (`id_salaconsultorio`) REFERENCES `salaconsultorio` (`id_salaconsultorio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendamedico`
--

LOCK TABLES `agendamedico` WRITE;
/*!40000 ALTER TABLE `agendamedico` DISABLE KEYS */;
INSERT INTO `agendamedico` VALUES (1,'2024-03-27','08:00:00','12:00:00',6,1,1),(2,'2024-03-27','08:00:00','12:00:00',4,2,2);
/*!40000 ALTER TABLE `agendamedico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autorizacaoplanosaude`
--

DROP TABLE IF EXISTS `autorizacaoplanosaude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autorizacaoplanosaude` (
  `id_autorizacaoplanosaude` int NOT NULL AUTO_INCREMENT,
  `id_consulta` int NOT NULL,
  `status_autorizacaoplanosaude` varchar(45) NOT NULL,
  PRIMARY KEY (`id_autorizacaoplanosaude`),
  KEY `fk_consulta_autorizacaoplanosaude` (`id_consulta`),
  CONSTRAINT `fk_consulta_autorizacaoplanosaude` FOREIGN KEY (`id_consulta`) REFERENCES `consulta` (`id_consulta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autorizacaoplanosaude`
--

LOCK TABLES `autorizacaoplanosaude` WRITE;
/*!40000 ALTER TABLE `autorizacaoplanosaude` DISABLE KEYS */;
/*!40000 ALTER TABLE `autorizacaoplanosaude` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consulta` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `id_medico` int DEFAULT NULL,
  `id_paciente` int DEFAULT NULL,
  `id_procedimento` int DEFAULT NULL,
  `data_consulta` date NOT NULL,
  `horario_consulta` time NOT NULL,
  `status_consulta` varchar(10) NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `fk_medico_consulta` (`id_medico`),
  KEY `fk_paciente_consulta` (`id_paciente`),
  KEY `fk_procedimento_consulta` (`id_procedimento`),
  CONSTRAINT `fk_medico_consulta` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  CONSTRAINT `fk_paciente_consulta` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  CONSTRAINT `fk_procedimento_consulta` FOREIGN KEY (`id_procedimento`) REFERENCES `procedimento` (`id_procedimento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,1,1,1,'2024-03-27','08:00:00','Confirmada'),(2,2,2,2,'2024-03-27','09:00:00','Marcada');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `especialidade` (
  `id_especialidade` int NOT NULL AUTO_INCREMENT,
  `nome_especialidade` varchar(255) NOT NULL,
  PRIMARY KEY (`id_especialidade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidade`
--

LOCK TABLES `especialidade` WRITE;
/*!40000 ALTER TABLE `especialidade` DISABLE KEYS */;
INSERT INTO `especialidade` VALUES (1,'Ortopedista'),(2,'Cardiologista'),(3,'Neurologista');
/*!40000 ALTER TABLE `especialidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examepreliminar`
--

DROP TABLE IF EXISTS `examepreliminar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `examepreliminar` (
  `id_examepreliminar` int NOT NULL AUTO_INCREMENT,
  `id_consulta` int DEFAULT NULL,
  PRIMARY KEY (`id_examepreliminar`),
  KEY `fk_consulta_examepreliminar` (`id_consulta`),
  CONSTRAINT `fk_consulta_examepreliminar` FOREIGN KEY (`id_consulta`) REFERENCES `consulta` (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examepreliminar`
--

LOCK TABLES `examepreliminar` WRITE;
/*!40000 ALTER TABLE `examepreliminar` DISABLE KEYS */;
INSERT INTO `examepreliminar` VALUES (1,1);
/*!40000 ALTER TABLE `examepreliminar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medico`
--

DROP TABLE IF EXISTS `medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medico` (
  `id_medico` int NOT NULL AUTO_INCREMENT,
  `nome_medico` varchar(255) NOT NULL,
  `crm_medico` varchar(20) NOT NULL,
  `id_especialidade` int DEFAULT NULL,
  PRIMARY KEY (`id_medico`),
  KEY `fk_especialidade_medico` (`id_especialidade`),
  CONSTRAINT `fk_especialidade_medico` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidade` (`id_especialidade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medico`
--

LOCK TABLES `medico` WRITE;
/*!40000 ALTER TABLE `medico` DISABLE KEYS */;
INSERT INTO `medico` VALUES (1,'Rogerin','13254320',1),(2,'José','15948723',2),(3,'Maria','147258369',3);
/*!40000 ALTER TABLE `medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(255) NOT NULL,
  `nascimento_paciente` date NOT NULL,
  `sexo_paciente` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'Carl Johnson','1999-02-15','Masculino'),(2,'Big Smoke','1980-05-17','Masculino'),(3,'Ariel','2000-05-25','Feminino');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planosaude`
--

DROP TABLE IF EXISTS `planosaude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `planosaude` (
  `id_planosaude` int NOT NULL AUTO_INCREMENT,
  `nome_planosaude` varchar(255) NOT NULL,
  PRIMARY KEY (`id_planosaude`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planosaude`
--

LOCK TABLES `planosaude` WRITE;
/*!40000 ALTER TABLE `planosaude` DISABLE KEYS */;
INSERT INTO `planosaude` VALUES (1,'Humana'),(2,'MedPlan'),(3,'Amil');
/*!40000 ALTER TABLE `planosaude` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescricao`
--

DROP TABLE IF EXISTS `prescricao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prescricao` (
  `id_prescricao` int NOT NULL AUTO_INCREMENT,
  `id_consulta` int DEFAULT NULL,
  `medicamento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_prescricao`),
  KEY `fk_consulta_prescricao` (`id_consulta`),
  CONSTRAINT `fk_consulta_prescricao` FOREIGN KEY (`id_consulta`) REFERENCES `consulta` (`id_consulta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescricao`
--

LOCK TABLES `prescricao` WRITE;
/*!40000 ALTER TABLE `prescricao` DISABLE KEYS */;
/*!40000 ALTER TABLE `prescricao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedimento`
--

DROP TABLE IF EXISTS `procedimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedimento` (
  `id_procedimento` int NOT NULL AUTO_INCREMENT,
  `nome_procedimento` varchar(255) NOT NULL,
  PRIMARY KEY (`id_procedimento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedimento`
--

LOCK TABLES `procedimento` WRITE;
/*!40000 ALTER TABLE `procedimento` DISABLE KEYS */;
INSERT INTO `procedimento` VALUES (1,'Raio-X'),(2,'Cirurgia');
/*!40000 ALTER TABLE `procedimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salaconsultorio`
--

DROP TABLE IF EXISTS `salaconsultorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `salaconsultorio` (
  `id_salaconsultorio` int NOT NULL AUTO_INCREMENT,
  `nome_salaconsultorio` varchar(255) NOT NULL,
  PRIMARY KEY (`id_salaconsultorio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salaconsultorio`
--

LOCK TABLES `salaconsultorio` WRITE;
/*!40000 ALTER TABLE `salaconsultorio` DISABLE KEYS */;
INSERT INTO `salaconsultorio` VALUES (1,'Master'),(2,'15'),(3,'20');
/*!40000 ALTER TABLE `salaconsultorio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-26 23:21:59
