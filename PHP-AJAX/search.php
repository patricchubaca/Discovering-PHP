<?php

	
$servername = "localhost:3306";
$username = "root";
$password = "root";


try {
  $conn = new PDO("mysql:host=$servername;dbname=MyDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully HAHA";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

	$input = 'pat';

	$query = "SELECT * FROM inscritos WHERE nome LIKE '%{$input}%'";

	$stmt = $conn->query($query);



	$stmts = $stmt->fetchAll();

		echo "<pre>";

	var_dump($stmts);

		echo "</pre>";