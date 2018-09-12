<?php

//Assign server fields
$servername = "localhost";
$username = "emanresu";
$password = "drowssap";

//Create connection
$conn = new mysqli($servername, $username, $password);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

//Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

class User
{
	//Create table
	$sql = "CREATE TABLE user (
	id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username = VARCHAR(15) NOT NULL,
	picture = VARCHAR(15),
	email = VARCHAR(15) 
	)"

	if ($conn->query($sql) === TRUE) {
		echo "Table user created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

}

class BaseMetal
{
	//Create table
	$sql = "CREATE TABLE basemetal (
	id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name = VARCHAR(20) NOT NULL,
	user_id = INT(15), FOREIGN KEY('user.id') 
	)"

	if ($conn->query($sql) === TRUE) {
		echo "Table basemetal created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

}

class Alloy
{
	//Create table
	$sql = "CREATE TABLE alloy (
	id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name = VARCHAR(20) NOT NULL,
	description = VARCHAR(250),
	description_id = INT(2), FOREIGN KEY('basemetal.id'),
	user_id = INT(15), FOREIGN KEY('user.id') 
	)"

	if ($conn->query($sql) === TRUE) {
		echo "Table basemetal created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

}

$conn->close();
?>
