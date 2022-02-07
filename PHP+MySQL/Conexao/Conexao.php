<?php

class conexaoBD{

    private $ligacao;

    private function ligar(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "myDBPDO";

try { $this->ligacao = PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->ligacao = PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo $query .  "<br>" . $e->getMessage();
        }
    }
}
