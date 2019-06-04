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
-- Table structure for table `capacitacion`
--

DROP TABLE IF EXISTS `capacitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capacitacion` (
  `idcap` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(20) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `año` varchar(5) DEFAULT NULL,
  `idinstitucion` int(11) NOT NULL,
  `tipcap` varchar(45) DEFAULT NULL,
  `idprofesor` int(11) NOT NULL,
  PRIMARY KEY (`idcap`),
  KEY `idinstitucion` (`idinstitucion`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `capacitacion_ibfk_1` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `capacitacion_ibfk_2` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacitacion`
--

LOCK TABLES `capacitacion` WRITE;
/*!40000 ALTER TABLE `capacitacion` DISABLE KEYS */;
INSERT INTO `capacitacion` VALUES (1,'Mexico',1,'1980',1,'Especialidad',1);
/*!40000 ALTER TABLE `capacitacion` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `form10`
--

DROP TABLE IF EXISTS `form10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form10` (
  `idform10` int(11) NOT NULL AUTO_INCREMENT,
  `idorga` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL,
  `ano` varchar(5) DEFAULT NULL,
  `nvlpart` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idform10`),
  KEY `idorga` (`idorga`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `form10_ibfk_1` FOREIGN KEY (`idorga`) REFERENCES `organizacion` (`idorga`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form10_ibfk_2` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form10`
--

LOCK TABLES `form10` WRITE;
/*!40000 ALTER TABLE `form10` DISABLE KEYS */;
INSERT INTO `form10` VALUES (1,3,1,'1999','Geniallll');
/*!40000 ALTER TABLE `form10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form11`
--

DROP TABLE IF EXISTS `form11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form11` (
  `idform11` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `parti` varchar(205) DEFAULT NULL,
  PRIMARY KEY (`idform11`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `form11_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form11`
--

LOCK TABLES `form11` WRITE;
/*!40000 ALTER TABLE `form11` DISABLE KEYS */;
INSERT INTO `form11` VALUES (1,1,'A QUEDO ESTE PEDO');
/*!40000 ALTER TABLE `form11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form2`
--

DROP TABLE IF EXISTS `form2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form2` (
  `idform2` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `idgestion` int(11) NOT NULL,
  `fechade` date DEFAULT NULL,
  `fechaA` date DEFAULT NULL,
  PRIMARY KEY (`idform2`),
  KEY `idprofesor` (`idprofesor`),
  KEY `idinstitucion` (`idinstitucion`),
  KEY `idgestion` (`idgestion`),
  CONSTRAINT `form2_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form2_ibfk_2` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form2_ibfk_3` FOREIGN KEY (`idgestion`) REFERENCES `gestion` (`idgestion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form2`
--

LOCK TABLES `form2` WRITE;
/*!40000 ALTER TABLE `form2` DISABLE KEYS */;
/*!40000 ALTER TABLE `form2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form3`
--

DROP TABLE IF EXISTS `form3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form3` (
  `idform3` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `idorga` int(11) NOT NULL,
  `idgestion` int(11) NOT NULL,
  `fechade` date DEFAULT NULL,
  `fechaA` date DEFAULT NULL,
  PRIMARY KEY (`idform3`),
  KEY `idprofesor` (`idprofesor`),
  KEY `idorga` (`idorga`),
  KEY `idgestion` (`idgestion`),
  CONSTRAINT `form3_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form3_ibfk_2` FOREIGN KEY (`idorga`) REFERENCES `organizacion` (`idorga`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form3_ibfk_3` FOREIGN KEY (`idgestion`) REFERENCES `gestion` (`idgestion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form3`
--

LOCK TABLES `form3` WRITE;
/*!40000 ALTER TABLE `form3` DISABLE KEYS */;
INSERT INTO `form3` VALUES (1,1,1,2,'2019-05-06','2019-05-09');
/*!40000 ALTER TABLE `form3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form4`
--

DROP TABLE IF EXISTS `form4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form4` (
  `idform4` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `Logro` varchar(615) DEFAULT NULL,
  PRIMARY KEY (`idform4`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `form4_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form4`
--

LOCK TABLES `form4` WRITE;
/*!40000 ALTER TABLE `form4` DISABLE KEYS */;
/*!40000 ALTER TABLE `form4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form5`
--

DROP TABLE IF EXISTS `form5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form5` (
  `idform5` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `Premio` varchar(615) DEFAULT NULL,
  PRIMARY KEY (`idform5`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `form5_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form5`
--

LOCK TABLES `form5` WRITE;
/*!40000 ALTER TABLE `form5` DISABLE KEYS */;
INSERT INTO `form5` VALUES (1,1,'TUVE UN PREMIO BIEN MAMALON');
/*!40000 ALTER TABLE `form5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form6`
--

DROP TABLE IF EXISTS `form6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form6` (
  `idform6` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `ideducativo` int(11) NOT NULL,
  `idEspecialidad` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `cedula` varchar(8) DEFAULT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `ano` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idform6`),
  KEY `idprofesor` (`idprofesor`),
  KEY `ideducativo` (`ideducativo`),
  KEY `idEspecialidad` (`idEspecialidad`),
  KEY `idinstitucion` (`idinstitucion`),
  CONSTRAINT `form6_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form6_ibfk_2` FOREIGN KEY (`ideducativo`) REFERENCES `lvledu` (`ideducativo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form6_ibfk_3` FOREIGN KEY (`idEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form6_ibfk_4` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form6`
--

LOCK TABLES `form6` WRITE;
/*!40000 ALTER TABLE `form6` DISABLE KEYS */;
/*!40000 ALTER TABLE `form6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form7`
--

DROP TABLE IF EXISTS `form7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form7` (
  `idform7` int(11) NOT NULL AUTO_INCREMENT,
  `idinstitucion` int(11) NOT NULL,
  `Tactual` varchar(100) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `ano` varchar(5) DEFAULT NULL,
  `hora` int(11) DEFAULT NULL,
  `idprofesor` int(11) NOT NULL,
  PRIMARY KEY (`idform7`),
  KEY `idprofesor` (`idprofesor`),
  KEY `idinstitucion` (`idinstitucion`),
  CONSTRAINT `form7_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form7_ibfk_2` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form7`
--

LOCK TABLES `form7` WRITE;
/*!40000 ALTER TABLE `form7` DISABLE KEYS */;
/*!40000 ALTER TABLE `form7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form8`
--

DROP TABLE IF EXISTS `form8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form8` (
  `idform8` int(11) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(11) NOT NULL,
  `descrip` varchar(620) DEFAULT NULL,
  PRIMARY KEY (`idform8`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `form8_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form8`
--

LOCK TABLES `form8` WRITE;
/*!40000 ALTER TABLE `form8` DISABLE KEYS */;
/*!40000 ALTER TABLE `form8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form9`
--

DROP TABLE IF EXISTS `form9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form9` (
  `idform9` int(11) NOT NULL AUTO_INCREMENT,
  `idorga` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL,
  `ano` varchar(5) DEFAULT NULL,
  `expe` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idform9`),
  KEY `idorga` (`idorga`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `form9_ibfk_1` FOREIGN KEY (`idorga`) REFERENCES `organizacion` (`idorga`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `form9_ibfk_2` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form9`
--

LOCK TABLES `form9` WRITE;
/*!40000 ALTER TABLE `form9` DISABLE KEYS */;
/*!40000 ALTER TABLE `form9` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestion`
--

LOCK TABLES `gestion` WRITE;
/*!40000 ALTER TABLE `gestion` DISABLE KEYS */;
INSERT INTO `gestion` VALUES (1,'Jefe'),(2,'JEFE DE PROYECTOS');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES (1,'IPN');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lvledu`
--

LOCK TABLES `lvledu` WRITE;
/*!40000 ALTER TABLE `lvledu` DISABLE KEYS */;
INSERT INTO `lvledu` VALUES (1,'LICENCIATURA'),(2,'ESPECIALIDAD'),(3,'MAESTRIA'),(4,'DOCTORADO'),(5,'OTRO');
/*!40000 ALTER TABLE `lvledu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizacion`
--

DROP TABLE IF EXISTS `organizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organizacion` (
  `idorga` int(11) NOT NULL AUTO_INCREMENT,
  `organizacion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idorga`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizacion`
--

LOCK TABLES `organizacion` WRITE;
/*!40000 ALTER TABLE `organizacion` DISABLE KEYS */;
INSERT INTO `organizacion` VALUES (1,'HP'),(2,'MIT'),(3,'UVM');
/*!40000 ALTER TABLE `organizacion` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (1,'Raymundo','Pulido','Bejarano',20,'1999-02-06',1,'rayescomed@gmail.com');
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
  `pass` varchar(69) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idprofesor` (`idprofesor`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,1,'Ray','ecbda9d436db4f1c897dfa21099d89674bf2ca030377d4e659d8ddb92c2949ee');
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

-- Dump completed on 2019-06-02 17:00:20
