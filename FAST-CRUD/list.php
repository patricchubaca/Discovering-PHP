<?php
    include_once "conexao.php";

    $sql ="SELECT id, nome_curso, descricao_curso,carga_horaria FROM tb_cursos";
    $sqlBusca = $conn->prepare($sql);
    $teste = $sqlBusca->execute();
    $listas = $sqlBusca->fetchAll(PDO::FETCH_ASSOC);

    echo  "<pre>";
    print_r($listas);
    echo  "</pre>";

    ?>