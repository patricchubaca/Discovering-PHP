<?php

class conexaoBD{

    private $conn;

    private function ligar(){
        
        $servername = "127.0.0.1";
        $username = "root";
        $password = "root";
        $dbname = "teste";

       

try { 
        $conn = new PDO
        ("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;

        
    } catch (PDOException $e) {

        echo $e .  "<br>" . $e->getMessage();

        }

    }
}

