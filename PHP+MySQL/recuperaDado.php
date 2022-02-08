<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "select * from tb_cursos";

  $stmt = $conn->query($query);
  $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
  echo $query .  "<br>" . $e->getMessage();
}
