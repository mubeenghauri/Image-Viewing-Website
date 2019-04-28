/*
 *	Database Systems Lab		
 *	Task 06
 *  database.sql
 *  Submitted By : Mubeen Ghauri P17-6107
 */

DROP DATABASE IF EXISTS imgDB;

CREATE DATABASE IF NOT EXISTS imgDB;

USE imgDB

CREATE TABLE users(
	user_name VARCHAR(21) NOT NULL,
	pass VARCHAR(8) NOT NULL
);



CREATE TABLE user_images(
	user_name VARCHAR(21) NOT NULL,
	img_location VARCHAR(500) NOT NULL

);


--
--	Dumping Data into users
--

INSERT INTO users(user_name, pass) VALUES 
("mubeen", "been123"),
("ali", "ali123"),
("haris","haris123")
