<?php
$servername = "remotemysql.com";
$username = "df06Ke1sp5";
$password = "6pIbY3woge";
$dbname = "df06Ke1sp5";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}
 
// Command to creat the database
// CREATE TABLE `accounts` (
//   `id` int(11) NOT NULL,
//   `FirstName` varchar(128) NOT NULL,
//   `LastName` varchar(128) NOT NULL,
//   `userEmail` varchar(255) NOT NULL,
//   `userUid` varchar(100) NOT NULL,
//   `userPwd` varchar(100) NOT NULL,
//   `Admin` varchar(1) NOT NULL DEFAULT '0',
//   `OrderHist` text DEFAULT ' '
// ) 
