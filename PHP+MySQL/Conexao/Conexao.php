<?php

class conexaoBD{

    private $ligacao;

    private function ligar(){
        
        $servername = "127.0.0.1";
        $username = "root";
        $password = "root";

       

try { $this->ligacao = new PDO
        ("mysql:host=$servername;port:3307;dbname=myDBPDO", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->ligacao = PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conexão Realizada";
    } catch (PDOException $e) {
    echo $query .  "<br>" . $e->getMessage();
        }
    }
}
conexaoBD::ligar();
