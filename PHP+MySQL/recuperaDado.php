<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "teste";

try {
      $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;


} catch (PDOException $e) {
  echo $query .  "<br>" . $e->getMessage();
}
