<?php
	$servername = "localhost";
	$dbName = "minzoo2";
	$username = "root";
	$password = "";

	$dbh = new PDO('mysql:host=$servername;dbname=$dbName; charset=utf8', $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>