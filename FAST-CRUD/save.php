<?php
     include_once "conexao.php";

     $arrayDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

     file_put_contents('/tmp/debub.txt', date('H:i:s').print_r($arrayDados, 1)."\n", FILE_APPEND);

     $sql = "INSERT INTO tb_curso (nome_curso, descricao_curso, carga_horaria) VALUES (:nome_curso, :descricao_curso, :carga_horaria)";

     $registroDados = $conn->prepare($sql);

     $registroDados->bindParam(':nome_curso', $arrayDados[]);
