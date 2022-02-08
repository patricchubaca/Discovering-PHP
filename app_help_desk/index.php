<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "BLOG";

try {
  $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM artigos");
  
  $stmts = $stmt->execute();
  $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

  var_dump($lista);
} catch (PDOException $e) {
  echo $query .  "<br>" . $e->getMessage();
}