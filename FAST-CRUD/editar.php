<?php

include_once "conexaoDB/conexao.php";

$dados = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

    $query_usuario = "UPDATE usuarios SET nome = :nome ,email = :email WHERE id = :id";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':nome', $dados['email']);
    $cad_usuario->bindParam(':id', $dados['id']);

    if ($cad_usuario->execute()) {                                                                                                                                                                                                                 
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Usuário editado com sucesso!</div>"];
    } else {
        $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não editado!</div>"];
    }
}

echo json_encode($retorna);