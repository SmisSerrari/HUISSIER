<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "huissier_app";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$sSQL= 'SET CHARACTER SET utf8'; 

mysqli_query($conn,$sSQL) 
or die ('Can\'t charset in DataBase'); 
?>
