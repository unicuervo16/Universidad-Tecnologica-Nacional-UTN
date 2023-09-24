CREATE DATABASE  IF NOT EXISTS `phpintermedio`;
USE `phpintermedio`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: phpintermedio
-- ------------------------------------------------------
-- Server version	8.0.33
--
-- Table structure for table `consultas`
--
DROP TABLE IF EXISTS `consultas`;
CREATE TABLE `consultas` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `consulta` text NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Dumping data for table `consultas`
--
-- Dump completed on 2023-09-15 10:17:25