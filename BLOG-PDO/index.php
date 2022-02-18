<?php

require_once "Conexao.php";

$conn = conectarDB::conectar();
$stmt = $conn->prepare("SELECT * FROM artigos");
$stmts = $stmt->execute();
$lista = $stmt->fetchAll(PDO::FETCH_OBJ);

file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($lista, 1)."\n", FILE_APPEND);


