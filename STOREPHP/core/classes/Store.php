<?php

namespace core\classes;

 
class Store{
 // ======================================================== Monta o layout ============================================================ //
    public static function Layout($estruturas, $dados = null){

        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        
        }
    }

    // ======================================================== Cliente Logado ============================================================ //

    public static function clienteLogado(){

        return isset($_SESSION['cliente']);
    }

    public static function criarHash($num_caracteres = 12){

        // criar hashes
        $chars = '01234567890123456789abcdefghijklmnopqrstuwxyzabcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZABCDEFGHIJKLMNOPQRSTUWXYZ';
        return substr(str_shuffle($chars), 0, $num_caracteres);
    }
}