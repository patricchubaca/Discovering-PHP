<?php


class conectarDB{
  
  private $con;

  public function conectar(){
  $servername = "127.0.0.";
  $username = "root";
  $password = "root";
  try {
    $conn = new PDO("mysql:host=$servername;port:3307;dbname=myDBPDO", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
      return $con;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
   } 
  
  }
  
}



