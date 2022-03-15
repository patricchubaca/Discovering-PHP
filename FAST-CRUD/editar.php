<?php

include_once "conexaoDB/conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['id'])) {

    $query_usuario = "UPDATE usuarios SET nome=:nome ,email=:email WHERE id=:id";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':email', $dados['email']);
    $cad_usuario->bindParam(':id', $dados['id']);
    $ret =  $cad_usuario->execute();

    file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($ret,1)."\n", FILE_APPEND);

    $rett = ['erro' => 1];

    file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($rett,1)."\n", FILE_APPEND);

    if ($cad_usuario->execute()) {                                                                                                                                                                                                                 
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Usuário editado com sucesso!</div>"];
    } else {
        $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não editado!</div>"];
    }
}

echo json_encode($retorna);