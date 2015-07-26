<?php
  $dbhost="localhost";
	$dbname ="raspberrypints";
  $dbuser="beers";
  $dbpass="beers";
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	$stmt = $conn->prepare('SELECT * FROM config WHERE showOnPanel = 1');
	$stmt->execute();
	$result = $stmt->fetchAll();
?>