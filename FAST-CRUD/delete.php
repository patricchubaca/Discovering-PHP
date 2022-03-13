<?php

include_once "conexaoDB/conexao.php";

$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

file_put_contents('/tmp/degubPatric', date('H:i:s').print_r(" Debug Result =>".$id."\n", 1), FILE_APPEND);


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
