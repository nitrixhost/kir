-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: kir
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `Pengujian`
--

DROP TABLE IF EXISTS `Pengujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pengujian` (
  `Id_uji` int(11) NOT NULL AUTO_INCREMENT,
  `pengujiID` int(11) NOT NULL,
  `kendaraanID` int(11) NOT NULL,
  `Berat_kosong` varchar(128) NOT NULL,
  `Lebar_kendaraan` varchar(128) NOT NULL,
  `Panjang_kendaraan` varchar(128) NOT NULL,
  `Tinggi_kendaraan` varchar(128) NOT NULL,
  `JBB` varchar(128) NOT NULL,
  `MST` varchar(128) NOT NULL,
  `JBI` varchar(128) NOT NULL,
  `DA_barang` varchar(128) NOT NULL,
  `DA_orang` varchar(128) NOT NULL,
  `Masa_berlaku` varchar(128) NOT NULL,
  `Dinas` varchar(128) NOT NULL,
  `Kelas_rendah` varchar(128) NOT NULL,
  PRIMARY KEY (`Id_uji`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pengujian`
--

LOCK TABLES `Pengujian` WRITE;
/*!40000 ALTER TABLE `Pengujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `Pengujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Company` varchar(80) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `City` varchar(40) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `PostalCode` varchar(10) NOT NULL,
  `Phone` varchar(24) NOT NULL,
  `Fax` varchar(24) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `SupportRepId` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merkmobil`
--

DROP TABLE IF EXISTS `merkmobil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merkmobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merk_mobil` varchar(120) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merkmobil`
--

LOCK TABLES `merkmobil` WRITE;
/*!40000 ALTER TABLE `merkmobil` DISABLE KEYS */;
INSERT INTO `merkmobil` VALUES (1,'Suzuki','aktif'),(2,'Honda','aktif'),(3,'Toyota','aktif');
/*!40000 ALTER TABLE `merkmobil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbkendaraan`
--

DROP TABLE IF EXISTS `tbkendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbkendaraan` (
  `kendaraanID` int(11) NOT NULL AUTO_INCREMENT,
  `kendaraanNO` varchar(128) NOT NULL,
  `Nama_pemilik` varchar(128) NOT NULL,
  `Alamat_pemilik` varchar(255) NOT NULL,
  `No_tlp` varchar(15) NOT NULL,
  `Merk` varchar(128) NOT NULL,
  `merk_id` int(11) NOT NULL,
  `Tipe` varchar(128) NOT NULL,
  `Jenis` varchar(128) NOT NULL,
  `Isi_silinder` varchar(128) NOT NULL,
  `Jenis_bahan_bakar` varchar(128) NOT NULL,
  `Tahun_pembuatan` varchar(128) NOT NULL,
  `No_rangka_landasan` varchar(128) NOT NULL,
  PRIMARY KEY (`kendaraanID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbkendaraan`
--

LOCK TABLES `tbkendaraan` WRITE;
/*!40000 ALTER TABLE `tbkendaraan` DISABLE KEYS */;
INSERT INTO `tbkendaraan` VALUES (1,'','Ahok','Depok','12121','Toyota',3,'','','','','1995',''),(2,'','Bima','Maluku','12121','Suzuki',1,'','','','','2000',''),(3,'','Moemay','Fatmawati','1212','Toyota',3,'','','','','1995','');
/*!40000 ALTER TABLE `tbkendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbpenguji`
--

DROP TABLE IF EXISTS `tbpenguji`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbpenguji` (
  `pengujiID` int(11) NOT NULL AUTO_INCREMENT,
  `pengujiNM` varchar(128) NOT NULL,
  PRIMARY KEY (`pengujiID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbpenguji`
--

LOCK TABLES `tbpenguji` WRITE;
/*!40000 ALTER TABLE `tbpenguji` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbpenguji` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-19  5:30:05
