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


  file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($lista, 1)."\n", FILE_APPEND);
  
  

} catch (PDOException $e) {
  echo $query .  "<br>" . $e->getMessage();
}