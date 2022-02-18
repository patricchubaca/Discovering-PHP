<?php

namespace src\Database;

use Exception;
use PDO;
use PDOException;

class conexaoDB{

    
    private $conn;

    private function ligar()
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "root";
        $dbname = "BLOG";

        try {
            $this->conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo $e . "<br>" . $e->getMessage();
        }
    }
}
