<?php
include_once("connection.php");
//Creates the tabke TblUsers*/
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AccessLvl VARCHAR(1) NOT NULL,
Gender VARCHAR(1) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(100) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the tabke TblUserClassInters*/
$$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUserClassInters;
CREATE TABLE TblUserClassInters
(UserID INT(4) NOT NULL PRIMARY KEY,
ClassID VARCHAR(1) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the table TblClasses*/
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblClasses;
CREATE TABLE TblClasses
(ClassID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Subject VARCHAR(20) NOT NULL,
ClassName VARCHAR(50) NOT NULL,
Year INT(2) NOT NULL,
Email VARCHAR(50) NOT NULL,
TeacherName VARCHAR(20) NOT NULL,
Open INT(1) NOT NULL,
AssignmentID INT(4) AUTO_INCREMENT,
ClassTeacherID INT(4) AUTO_INCREMENT,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the table TblTeachers*/
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblTeachers;
CREATE TABLE TblTeachers
(ClassTeacherID INT(4) NOT NULL PRIMARY KEY,
UserID INT(4) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the table TblAssignments*/
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblAssignments;
CREATE TABLE TblAssignments
(AssignmentID INT(4) NOT NULL PRIMARY KEY,
SetID INT(4) NOT NULL,
Description VARCHAR(250) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the table TblSets */
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblSets;
CREATE TABLE TblSets 
(SetID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Subject VARCHAR(20) NOT NULL,
SetName VARCHAR(20) NOT NULL,
Open INT(1) NOT NULL,
UserID INT(4) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the table TblQuestions*/ 
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblQuestions;
CREATE TABLE TblQuestions 
(QuestionID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Question VARCHAR(100) NOT NULL,
SetID INT(4) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Creates the table TblAnswers*/ 
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblAnswers;
CREATE TABLE TblAnswers 
(AnswerID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Answer VARCHAR(100) NOT NULL,
QuestionID INT(4) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

?>