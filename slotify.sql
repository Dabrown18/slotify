CREATE DATABASE slotify;
USE slotify;

CREATE TABLE users (
	id         INT AUTO_INCREMENT PRIMARY KEY,
	username   VARCHAR(25)  NOT NULL UNIQUE,
	firstName  VARCHAR(50)  NOT NULL,
	lastName   VARCHAR(50)  NOT NULL,
	email      VARCHAR(200) NOT NULL UNIQUE,
	password   CHAR(32)     NOT NULL,
	signUpDate TIMESTAMP,
	profilePic VARCHAR(500)
);