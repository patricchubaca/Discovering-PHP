<?php

namespace core\controllers;

use core\classes\Database;
use core\classes\Store;
use core\Models\Clientes;
use core\classes\EnviarEmail;

class Main
{

    public function index()
    {

        $dados = [
            'titulo' => 'Este é o título',
            'clientes' => ['joao', 'ana', 'carlos']
        ];

        //$instanciaMailer =  new EnviarEmail();
        //$instanciaMailer->emailConfirmacaoNovoCliente('patric_job@outlook.com');
    

        Store::Layout([
            'leyouts/html_header',
            'leyouts/header',
            'leyouts/loja',
            'leyouts/footer',
            'leyouts/html_footer',
        ],  $dados);
    }

    public function loja()
    {
        $dados = [
            'titulo' => 'Este é o título',
            'clientes' => ['joao', 'ana', 'carlos']
        ];

        Store::Layout([
            'leyouts/html_header',
            'leyouts/header',
            'leyouts/inicio',
            'leyouts/footer',
            'leyouts/html_footer',
        ],  $dados);
    }
    public function novoCliente()
    {
        Store::Layout([
            'leyouts/html_header',
            'leyouts/header',
            'leyouts/criar_cliente',
            'leyouts/footer',
            'leyouts/html_footer',
        ]);
    }

    public function criarCliente()
    {
        // verifica se houve submissão de um formulário
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->index();
            return;
        }
        // Validacao de senhas iguais
        if ($_POST['text_senha_1'] !== $_POST['text_senha_2']) {
            $_SESSION['erro'] = 'As senhas não são iguais';
            $this->novoCliente();
            unset($_SESSION['erro']);
            return;
        }
        // Validacao de e-mail já cadastrado
        if (Clientes::verificaEmailExistente($_POST['text_email'])) {
            $_SESSION['erro'] = 'Já existe um cliente com o mesmo email.';
            $this->novoCliente();
            return;
        }
        // Registra o novo cliente
        Clientes::registarCliente();

        $this->loja();  
    }
}
