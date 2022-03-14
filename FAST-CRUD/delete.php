<?php

include_once "conexaoDB/conexao.php";

$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

    $query_usuario = "DELETE FROM usuarios WHERE id = :id";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':id', $id);
    $cad_usuario->execute();

    if ($cad_usuario->rowCount()) {                                                                                                                                                                                                                 
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Usuário deletado com sucesso!</div>"];
    } else {
        $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não deletado!</div>"];
    }
}

echo json_encode($retorna);
