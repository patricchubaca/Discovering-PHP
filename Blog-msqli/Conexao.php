<?php
    $mysql = new mysqli('localhost','root', 'root','BLOG');
    $mysql->set_charset('utf8');
    $consulta =  $mysql->query('SELECT * FROM artigos');

    echo "<pre>";
    var_dump($consulta);
    echo "</pre>";

    if($mysql == TRUE){
        echo "Banco Conectado";
    }else{
        echo "Sem sucesso";
    }
