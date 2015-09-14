-- MySQL dump 10.13  Distrib 5.6.19, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Hospital
-- ------------------------------------------------------
-- Server version	5.6.19-0ubuntu0.14.04.1

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
-- Table structure for table `CANTEEN`
--

DROP TABLE IF EXISTS `CANTEEN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CANTEEN` (
  `Shop_Number` int(11) NOT NULL,
  `List` varchar(10000) NOT NULL,
  `Close_time` time DEFAULT NULL,
  `Start_time` time DEFAULT NULL,
  PRIMARY KEY (`Shop_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CANTEEN`
--

LOCK TABLES `CANTEEN` WRITE;
/*!40000 ALTER TABLE `CANTEEN` DISABLE KEYS */;
INSERT INTO `CANTEEN` VALUES (985,'List :P','02:53:00','06:00:00'),(986,'List :P','02:59:00','06:00:00'),(987,'List :P','23:59:00','06:00:00'),(988,'List:P','02:00:00','06:00:00');
/*!40000 ALTER TABLE `CANTEEN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CHEMIST`
--

DROP TABLE IF EXISTS `CHEMIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHEMIST` (
  `Shop_Number` int(11) NOT NULL,
  `List` varchar(10000) NOT NULL,
  `Close_time` time DEFAULT NULL,
  `Start_time` time DEFAULT NULL,
  PRIMARY KEY (`Shop_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CHEMIST`
--

LOCK TABLES `CHEMIST` WRITE;
/*!40000 ALTER TABLE `CHEMIST` DISABLE KEYS */;
INSERT INTO `CHEMIST` VALUES (221,'List :P','02:53:00','06:00:00'),(224,'List :P','02:59:00','06:00:00'),(234,'List :P','23:59:00','06:00:00'),(235,'List:P','12:00:00','05:00:00');
/*!40000 ALTER TABLE `CHEMIST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DEPARTMENT`
--

DROP TABLE IF EXISTS `DEPARTMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DEPARTMENT` (
  `Department_ID` int(11) NOT NULL,
  `Specialisation` varchar(100) NOT NULL,
  `Heading_Doctor` varchar(100) NOT NULL,
  PRIMARY KEY (`Department_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DEPARTMENT`
--

LOCK TABLES `DEPARTMENT` WRITE;
/*!40000 ALTER TABLE `DEPARTMENT` DISABLE KEYS */;
INSERT INTO `DEPARTMENT` VALUES (1,'ENT','Sita'),(2,'Gaenacology','Shyam'),(3,'Ortho','Anupma'),(4,'Cardiology','Shyamli'),(5,'Physiology','Leela'),(6,'Dentology','Akanksha'),(7,'Eyes','Seema'),(8,'','Kamal');
/*!40000 ALTER TABLE `DEPARTMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DOCTOR`
--

DROP TABLE IF EXISTS `DOCTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOCTOR` (
  `Contact` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Visiting` varchar(1) NOT NULL,
  `Permanent` varchar(1) NOT NULL,
  `Pateint_ID` int(11) NOT NULL,
  PRIMARY KEY (`Contact`),
  KEY `Pateint_ID` (`Pateint_ID`),
  CONSTRAINT `DOCTOR_ibfk_1` FOREIGN KEY (`Pateint_ID`) REFERENCES `PATIENT` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOCTOR`
--

LOCK TABLES `DOCTOR` WRITE;
/*!40000 ALTER TABLE `DOCTOR` DISABLE KEYS */;
INSERT INTO `DOCTOR` VALUES ('9871312279',36,'207-Parul Hostel IIIT','Dhriti','Gynaecologist','Y','N',11111),('9872212276',48,'223-Parul Hostel IIIT','Arushi','Psychiatrist','N','Y',66666),('9873312270',26,'293-Parul Hostel IIIT','Shyamli','Cardiologist','N','Y',44444),('9873312276',26,'233-Parul Hostel IIIT','Kanika','Eyes specialist','N','Y',55555),('9873312279',36,'203-Parul Hostel IIIT','Kopal','ENT specialist','Y','N',33333),('9873312289',46,'213-Parul Hostel IIIT','Akhila','Dentist','Y','N',22222);
/*!40000 ALTER TABLE `DOCTOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMPLOYEE`
--

DROP TABLE IF EXISTS `EMPLOYEE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMPLOYEE` (
  `Employee_ID` int(11) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMPLOYEE`
--

LOCK TABLES `EMPLOYEE` WRITE;
/*!40000 ALTER TABLE `EMPLOYEE` DISABLE KEYS */;
INSERT INTO `EMPLOYEE` VALUES (0),(1),(2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12),(20);
/*!40000 ALTER TABLE `EMPLOYEE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GENERAL`
--

DROP TABLE IF EXISTS `GENERAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GENERAL` (
  `Shop_Number` int(11) NOT NULL,
  `List` varchar(10000) NOT NULL,
  `Close_time` time DEFAULT NULL,
  `Start_time` time DEFAULT NULL,
  PRIMARY KEY (`Shop_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GENERAL`
--

LOCK TABLES `GENERAL` WRITE;
/*!40000 ALTER TABLE `GENERAL` DISABLE KEYS */;
INSERT INTO `GENERAL` VALUES (885,'List :P','02:53:00','06:00:00'),(886,'List :P','02:59:00','06:00:00'),(887,'List :P','23:59:00','06:00:00'),(888,'List:P','12:00:00','05:00:00');
/*!40000 ALTER TABLE `GENERAL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HOSPITAL`
--

DROP TABLE IF EXISTS `HOSPITAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HOSPITAL` (
  `Contact` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Trustees` varchar(1000) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  PRIMARY KEY (`Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HOSPITAL`
--

LOCK TABLES `HOSPITAL` WRITE;
/*!40000 ALTER TABLE `HOSPITAL` DISABLE KEYS */;
INSERT INTO `HOSPITAL` VALUES ('9878987891','DMC LUDHIANA','122 Main Bazar Ludhiana','Arushi Dogra,Kanika Midha','1964-07-09');
/*!40000 ALTER TABLE `HOSPITAL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LABTESTS`
--

DROP TABLE IF EXISTS `LABTESTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LABTESTS` (
  `Catalog_number` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Lab_Assistant` varchar(100) NOT NULL,
  `Recommending_Doctor` varchar(100) NOT NULL,
  `Report_Date` date DEFAULT NULL,
  `Name_of_test` varchar(100) NOT NULL,
  PRIMARY KEY (`Catalog_number`),
  KEY `Patient_ID` (`Patient_ID`),
  CONSTRAINT `LABTESTS_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `PATIENT` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LABTESTS`
--

LOCK TABLES `LABTESTS` WRITE;
/*!40000 ALTER TABLE `LABTESTS` DISABLE KEYS */;
INSERT INTO `LABTESTS` VALUES (111,11111,'Rama','Dhriti','0000-00-00','Ultrasound of abdomen'),(112,33333,'Aparna','Kopal','0000-00-00','Tympanometry'),(113,44444,'Anvesh','Shyamli','0000-00-00','ECG'),(114,55555,'Rita','Kanika','0000-00-00','Visual Activity Test'),(115,66666,'Aashima','Arushi','0000-00-00','MRI'),(121,22222,'Vivek','Akhila','0000-00-00','X-ray'),(122,77777,'Tamana','Arushi','0000-00-00','Biopsy');
/*!40000 ALTER TABLE `LABTESTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEDICINE`
--

DROP TABLE IF EXISTS `MEDICINE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDICINE` (
  `Code` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Quantity` varchar(1000) NOT NULL,
  `Date_of_expiry` date NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`Code`),
  KEY `Patient_ID` (`Patient_ID`),
  CONSTRAINT `MEDICINE_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `PATIENT` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDICINE`
--

LOCK TABLES `MEDICINE` WRITE;
/*!40000 ALTER TABLE `MEDICINE` DISABLE KEYS */;
INSERT INTO `MEDICINE` VALUES (120,'Proctinal','thrice a day','2016-12-09',11111,12000),(121,'Resmile','twice a day','2026-12-09',22222,20000),(122,'Dewax','twice a day','2015-12-09',33333,30000),(123,'BetaBlocker','twice a day','2045-12-09',44444,40000),(124,'Anasthesia','once in a surgery','2015-12-09',55555,50000),(125,'Prozac','thrice a day','2025-12-09',66666,60000),(126,'pantop D','twice a day','2014-03-04',77777,1000);
/*!40000 ALTER TABLE `MEDICINE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NURSE`
--

DROP TABLE IF EXISTS `NURSE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NURSE` (
  `Contact` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  PRIMARY KEY (`Contact`),
  KEY `Employee_ID` (`Employee_ID`),
  CONSTRAINT `NURSE_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `EMPLOYEE` (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NURSE`
--

LOCK TABLES `NURSE` WRITE;
/*!40000 ALTER TABLE `NURSE` DISABLE KEYS */;
INSERT INTO `NURSE` VALUES ('9521123207','Lalita',56,'134-parul hostel IIIT-HYD','Senior',6),('9521123407','Lita',36,'131-parul hostel IIIT-HYD','Junior',5),('9521123456','Rekha',46,'211-parul hostel IIIT-HYD','Head',3),('9521123457','Surekha',26,'121-parul hostel IIIT-HYD','Junior',4),('9999999999','sapna',27,'210 parul iiith','head',7);
/*!40000 ALTER TABLE `NURSE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PATIENT`
--

DROP TABLE IF EXISTS `PATIENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PATIENT` (
  `Patient_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Date_Admitted` date DEFAULT NULL,
  `Date_Discharged` date DEFAULT NULL,
  `Sex` varchar(6) NOT NULL,
  PRIMARY KEY (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PATIENT`
--

LOCK TABLES `PATIENT` WRITE;
/*!40000 ALTER TABLE `PATIENT` DISABLE KEYS */;
INSERT INTO `PATIENT` VALUES (11111,'Reena','201 Parul Hostel IIIT Hyderabad','987654321','2013-12-09','2013-12-12','Female'),(22222,'Gita','222 Parul Hostel IIIT Hyderabad','9876522321','2013-08-31','2013-09-04','Female'),(33333,'Ram','922 Bakul Hostel IIIT Hyderabad','9876587621','2013-04-06','2013-04-07','Male'),(44444,'Shyam','242 Bakul Hostel IIIT Hyderabad','9856787621','2013-08-07','2013-08-08','Male'),(55555,'Sita','233 Parul Hostel IIIT Hyderabad','9854344421','2013-02-02','2014-10-05','Female'),(66666,'Rajat','233 Bakul Hostel BITS PILANI','9857844421','2009-06-06','2013-06-07','Male'),(77777,'Heera','213 parul iiit hyd','9877988998','2013-12-12','0000-00-00','Female');
/*!40000 ALTER TABLE `PATIENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RECEPTIONIST`
--

DROP TABLE IF EXISTS `RECEPTIONIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RECEPTIONIST` (
  `Contact` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Salary` int(11) NOT NULL,
  PRIMARY KEY (`Contact`),
  KEY `Employee_ID` (`Employee_ID`),
  CONSTRAINT `RECEPTIONIST_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `EMPLOYEE` (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RECEPTIONIST`
--

LOCK TABLES `RECEPTIONIST` WRITE;
/*!40000 ALTER TABLE `RECEPTIONIST` DISABLE KEYS */;
INSERT INTO `RECEPTIONIST` VALUES ('9523467824','Susan',22,'',1,'Female',20000),('9581467824','Emma',24,'',2,'Female',30000);
/*!40000 ALTER TABLE `RECEPTIONIST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RECORD`
--

DROP TABLE IF EXISTS `RECORD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RECORD` (
  `Receptionist_ID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Appointment_Date` date DEFAULT NULL,
  `Patient_ID` int(11) NOT NULL,
  PRIMARY KEY (`Receptionist_ID`),
  KEY `Patient_ID` (`Patient_ID`),
  CONSTRAINT `RECORD_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `PATIENT` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RECORD`
--

LOCK TABLES `RECORD` WRITE;
/*!40000 ALTER TABLE `RECORD` DISABLE KEYS */;
INSERT INTO `RECORD` VALUES (10000,'Severe Stomach Pain','2013-12-13',11111),(20000,'High Fever due to tooth Ache','2013-09-06',22222),(30000,'Hearing problem','2013-04-10',33333),(40000,'Heart Attack','2013-08-10',44444),(50000,'Impairment of vision','2013-10-07',55555),(60000,'Mental trouble','2013-06-08',66666),(70000,'Kidney Stone','2104-09-12',77777);
/*!40000 ALTER TABLE `RECORD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ROOM`
--

DROP TABLE IF EXISTS `ROOM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ROOM` (
  `Room_ID` int(11) NOT NULL,
  `Room_type` varchar(100) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Period` varchar(100) NOT NULL,
  PRIMARY KEY (`Room_ID`),
  KEY `Patient_ID` (`Patient_ID`),
  CONSTRAINT `ROOM_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `PATIENT` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ROOM`
--

LOCK TABLES `ROOM` WRITE;
/*!40000 ALTER TABLE `ROOM` DISABLE KEYS */;
INSERT INTO `ROOM` VALUES (1234,'Double',11111,'2days'),(1235,'Single',22222,'4days'),(1236,'Double',33333,'6days'),(1237,'Double',44444,'7days'),(1238,'Double',55555,'1day'),(1239,'Single',66666,'5days'),(1240,'Single',77777,'3 days');
/*!40000 ALTER TABLE `ROOM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TREATMENT`
--

DROP TABLE IF EXISTS `TREATMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TREATMENT` (
  `Surgery` varchar(100) DEFAULT NULL,
  `Therapy` varchar(100) DEFAULT NULL,
  `Patient_ID` int(11) NOT NULL,
  KEY `Patient_ID` (`Patient_ID`),
  CONSTRAINT `TREATMENT_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `PATIENT` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TREATMENT`
--

LOCK TABLES `TREATMENT` WRITE;
/*!40000 ALTER TABLE `TREATMENT` DISABLE KEYS */;
INSERT INTO `TREATMENT` VALUES ('Hysterectomy',NULL,11111),('ROOT CANAL',NULL,22222),(NULL,NULL,33333),('BYPASS SURGERY',NULL,44444),('Cataract SURGERY',NULL,55555),(NULL,'Mental therapy',66666),('Biopsy','NULL',77777);
/*!40000 ALTER TABLE `TREATMENT` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-12 15:16:16
