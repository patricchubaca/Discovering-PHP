<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "myDBPDO";

$nomeCurso = $_POST['nomeCurso'];
$cargaHoraria = $_POST['cargaHoraria'];
$descricaoCurso = $_POST['descricaoCurso'];

$cargaHoraria = number_format($cargaHoraria, 2, ',', null);

try {
  $conn = new PDO("mysql:host=$servername;pordbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "insert into tb_cursos(nome_curso,carga_horaria,descricao_curso)
            VALUES ('$nomeCurso', '$cargaHoraria', '$descricaoCurso')";

  $conn->exec($query);
} catch (PDOException $e) {
  echo $query .  "<br>" . $e->getMessage();
}
