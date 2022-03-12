<?php

$retorna = ['msg' => "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>"];

file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($retorna, 1)."\n", FILE_APPEND);

echo json_encode($retorna);
