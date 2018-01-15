<?php

$servername="localhost";
$username="root";
$password="";
$dbname="internhub";

//create connection

$conn= new mysqli($servername,$username,$password,$dbname);

//check connection

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
