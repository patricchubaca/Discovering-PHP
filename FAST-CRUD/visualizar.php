<?php

include_once "conexaoDB/conexao.php";

$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

    $query_usuario = "SELECT id, nome, email FROM usuarios WHERE id = :id LIMIT 1";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':id', $id);
    $cad_usuario->execute();
    $retur_user = $cad_usuario->fetch(PDO::FETCH_ASSOC);
                                                                                                                                                                                                               
    $retorna = ['erro' => false, 'dados' => $retur_user];
 
    } else {

       $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não encontrado!</div>"];
    }

echo json_encode($retorna);

