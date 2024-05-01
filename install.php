<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AccessLvl VARCHAR(1) NOT NULL,
Gender VARCHAR(1) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUserClassInters;
CREATE TABLE TblUserClassInters
(UserID INT(4) NOT NULL PRIMARY KEY,
ClassID VARCHAR(1) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblClasses;
CREATE TABLE TblClasses
(ClassID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Subject VARCHAR(20) NOT NULL,
ClassName VARCHAR(50) NOT NULL,
Year INT(2) NOT NULL,
TeacherName VARCHAR(20) NOT NULL,
Open INT(1) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AccessLvl VARCHAR(1) NOT NULL,
Gender VARCHAR(1) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AccessLvl VARCHAR(1) NOT NULL,
Gender VARCHAR(1) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AccessLvl VARCHAR(1) NOT NULL,
Gender VARCHAR(1) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AccessLvl VARCHAR(1) NOT NULL,
Gender VARCHAR(1) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

?>