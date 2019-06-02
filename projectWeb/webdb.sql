-- MySQL dump 10.13  Distrib 5.7.13, for Win64 (x86_64)
--
-- Host: localhost    Database: webdb
-- ------------------------------------------------------
-- Server version	5.7.13-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `especialidad`
--

DROP TABLE IF EXISTS `especialidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `Especialidad` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idEspecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidad`
--

LOCK TABLES `especialidad` WRITE;
/*!40000 ALTER TABLE `especialidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `especialidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gestion`
--

DROP TABLE IF EXISTS `gestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gestion` (
  `idgestion` int(11) NOT NULL AUTO_INCREMENT,
  `Puesto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idgestion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestion`
--

LOCK TABLES `gestion` WRITE;
/*!40000 ALTER TABLE `gestion` DISABLE KEYS */;
/*!40000 ALTER TABLE `gestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instespe`
--

DROP TABLE IF EXISTS `instespe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instespe` (
  `idespecialidad` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  KEY `idespecialidad` (`idespecialidad`),
  KEY `idinstitucion` (`idinstitucion`),
  CONSTRAINT `instespe_ibfk_1` FOREIGN KEY (`idespecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `instespe_ibfk_2` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instespe`
--

LOCK TABLES `instespe` WRITE;
/*!40000 ALTER TABLE `instespe` DISABLE KEYS */;
/*!40000 ALTER TABLE `instespe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion` (
  `idinstitucion` int(11) NOT NULL AUTO_INCREMENT,
  `institucion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idinstitucion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lvledu`
--

DROP TABLE IF EXISTS `lvledu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lvledu` (
  `ideducativo` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ideducativo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lvledu`
--

LOCK TABLES `lvledu` WRITE;
/*!40000 ALTER TABLE `lvledu` DISABLE KEYS */;
/*!40000 ALTER TABLE `lvledu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paper`
--

DROP TABLE IF EXISTS `paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paper` (
  `idPaper` int(11) NOT NULL AUTO_INCREMENT,
  `paper` varchar(200) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`idPaper`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paper`
--

LOCK TABLES `paper` WRITE;
/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `idprofesor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) DEFAULT NULL,
  `APP` varchar(200) DEFAULT NULL,
  `APM` varchar(200) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `FechaNA` date DEFAULT NULL,
  `idgestion` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idprofesor`),
  KEY `idgestion` (`idgestion`),
  CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`idgestion`) REFERENCES `gestion` (`idgestion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesp`
--

DROP TABLE IF EXISTS `profesp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesp` (
  `idprofesor` int(11) NOT NULL,
  `idespecialidad` int(11) NOT NULL,
  KEY `idprofesor` (`idprofesor`),
  KEY `idespecialidad` (`idespecialidad`),
  CONSTRAINT `profesp_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `profesp_ibfk_2` FOREIGN KEY (`idespecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesp`
--

LOCK TABLES `profesp` WRITE;
/*!40000 ALTER TABLE `profesp` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proflvl`
--

DROP TABLE IF EXISTS `proflvl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proflvl` (
  `idprofesor` int(11) NOT NULL,
  `ideducativo` int(11) NOT NULL,
  KEY `idprofesor` (`idprofesor`),
  KEY `ideducativo` (`ideducativo`),
  CONSTRAINT `proflvl_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `proflvl_ibfk_2` FOREIGN KEY (`ideducativo`) REFERENCES `lvledu` (`ideducativo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proflvl`
--

LOCK TABLES `proflvl` WRITE;
/*!40000 ALTER TABLE `proflvl` DISABLE KEYS */;
/*!40000 ALTER TABLE `proflvl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profpaper`
--

DROP TABLE IF EXISTS `profpaper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profpaper` (
  `idprofesor` int(11) NOT NULL,
  `idpaper` int(11) NOT NULL,
  KEY `idprofesor` (`idprofesor`),
  KEY `idpaper` (`idpaper`),
  CONSTRAINT `profpaper_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `profpaper_ibfk_2` FOREIGN KEY (`idpaper`) REFERENCES `paper` (`idPaper`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profpaper`
--

LOCK TABLES `profpaper` WRITE;
/*!40000 ALTER TABLE `profpaper` DISABLE KEYS */;
/*!40000 ALTER TABLE `profpaper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profprog`
--

DROP TABLE IF EXISTS `profprog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profprog` (
  `idprofesor` int(11) NOT NULL,
  `idprograma` int(11) NOT NULL,
  KEY `idprofesor` (`idprofesor`),
  KEY `idprograma` (`idprograma`),
  CONSTRAINT `profprog_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `profprog_ibfk_2` FOREIGN KEY (`idprograma`) REFERENCES `progcap` (`idprograma`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profprog`
--

LOCK TABLES `profprog` WRITE;
/*!40000 ALTER TABLE `profprog` DISABLE KEYS */;
/*!40000 ALTER TABLE `profprog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profproy`
--

DROP TABLE IF EXISTS `profproy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profproy` (
  `idprofesor` int(11) NOT NULL,
  `idproyecto` int(11) NOT NULL,
  KEY `idprofesor` (`idprofesor`),
  KEY `idproyecto` (`idproyecto`),
  CONSTRAINT `profproy_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `profproy_ibfk_2` FOREIGN KEY (`idproyecto`) REFERENCES `proyecto` (`idproyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profproy`
--

LOCK TABLES `profproy` WRITE;
/*!40000 ALTER TABLE `profproy` DISABLE KEYS */;
/*!40000 ALTER TABLE `profproy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progcap`
--

DROP TABLE IF EXISTS `progcap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progcap` (
  `idprograma` int(11) NOT NULL AUTO_INCREMENT,
  `programa` varchar(200) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  PRIMARY KEY (`idprograma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progcap`
--

LOCK TABLES `progcap` WRITE;
/*!40000 ALTER TABLE `progcap` DISABLE KEYS */;
/*!40000 ALTER TABLE `progcap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyecto` (
  `idproyecto` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idproyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyecto`
--

LOCK TABLES `proyecto` WRITE;
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) DEFAULT NULL,
  `user` varchar(200) DEFAULT NULL,
  `pass` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-26 22:03:21
