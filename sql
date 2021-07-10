CREATE DATABASE data288301
DROP DATABASE data301288

CREATE TABLE Students(
	
    Si INT(4) AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(20),
    Email VARCHAR(30),
    Phone INT(10),
    Address VARCHAR(200),
    Joining_Date DATETIME

)
DROP TABLE Std

 

INSERT INTO `students`(`Si`, `Name`, `Email`, `Phone`, `Address`, `Joining_Date`) VALUES (NULL,'kuddus','kuddusami@gmail.com','1683312816','kuddus elaka, khulna, bagerhat',NULL)

INSERT INTO `students`(`Si`, `Name`, `Email`, `Phone`, `Address`, `Joining_Date`) VALUES (NULL,'munshi','munshi@gmail.com','1685667672816','munshi elaka, khulna, bagerhat',NULL), (NULL,'hakim','hakim@gmail.com','168398816','hakim elaka, chittagang, bagerhat',NULL) 





Emplyee management system 


Employee 
Signup 
	Eid 
	Full Name
	Username
	Phone
	Email Address
	Gender
	Address
	Designation 
	password
	Joining Date 
	Image
	Status 




CREATE TABLE Employee(
	
    Eid INT(3) AUTO_INCREMENT PRIMARY KEY,
    Fullname VARCHAR(20),
    Email VARCHAR(30),
    Username VARCHAR(10),
    Password VARCHAR(255),
    Phone INT(10),
    Gender INT(1),
    Address VARCHAR(200),
    Skill VARCHAR(50),
    Designation VARCHAR(20),
    Image VARCHAR(100),
    Joining_Date DATETIME,
    Status INT(1)

)

CREATE TABLE designation(
    Did  INT(2) AUTO_INCREMENT PRIMARY KEY,
    D_name  VARCHAR(20)
)
CREATE TABLE skill(
    Sid  INT(2) AUTO_INCREMENT PRIMARY KEY,
    S_name  VARCHAR(20)
)

INSERT INTO `designation`(`Did`, `D_name`) VALUES (NULL,'Web Desiner'), (NULL,'Graphic Desiner'), (NULL,'HR'),(NULL,'Communication'),(NULL,'UI Expert')

INSERT INTO `skill`(`Sid`, `S_name`) VALUES (NULL,'HTML'), (NULL,'CSS'), (NULL,'XD'),(NULL,'UI/UX'),(NULL,'Marketing')