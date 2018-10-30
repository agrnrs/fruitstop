<?php
$servername = "localhost";
$username = "dhg17";
$password = "mysql2018";
$db = "dhg17";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected successfully!<br>";
}

catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

?>