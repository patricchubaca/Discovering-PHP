<?php
//Rotas
$rotas = [
 // URL     =>  Classe - Methodo 
    'inicio' => 'main@index',
    'loja' => 'main@loja',
    'carrinho'=> 'loja@carrinho',
    'novo_cliente' => 'main@novoCliente',
    'criar_cliente' => 'main@criarCliente',
];
$acao = 'inicio';
//Verifica o que vem no get caso seja ' vazio' vai para o inicio
if (isset($_GET['a'])) {
    //If verifica o que foi enviado, caso tenha na rota acessa o método 
    //Caso não tenha nada na URL a acao é igual a inicio
    if (!key_exists($_GET['a'], $rotas)) {
        $acao = 'inicio';
    } else {
        //Captura o que vem na rota
        $acao = $_GET['a'];
    }
}

//Passa o valor atribuido no array de rotas 
$partes = explode('@', $rotas[$acao]);
//Caminho que vai ser percorrido apos a atribuição  do valor que a vira o endereço da rota
$controlador = 'core\\controllers\\' . ucfirst($partes[0]);
$metodo = $partes[1];
//Instancia do controllador
$ctr = new $controlador();
//Acesso ao método segundo o valor
$ctr->$metodo();
